<?php

    include "../includes/db.php";
    include "../models/Tables.php";

    include "../helpers/Semester.php";
    include "../helpers/Evaluation.php";
    include "../helpers/Logs.php";

    if(isset($_POST['action'])){

        if($_POST['action'] == 'new_instructor'){

            $req_data = [
                "fname",
                "mname",
                "lname",
                "email",
                "bdate",
                "civil_stat",
                "sex",
                "nationality",
                "phone_no",
                "address",
                "g_fname",
                "g_lname",
                "g_email",
                "relationship",
                "g_phone_no",
                "occupation",
                "g_address"
            ];

            $issets = issetVerify($req_data);

            if($issets){

                $fname       = $issets[0];
                $mname       = $issets[1];
                $lname       = $issets[2];
                $email       = $issets[3];
                $bdate       = $issets[4];
                $civil_stat  = $issets[5];
                $sex         = $issets[6];
                $nationality = $issets[7];
                $phone_no    = $issets[8];
                $address     = $issets[9];
                $g_fname     = $issets[10];
                $g_lname     = $issets[11];
                $g_email     = $issets[12];
                $relationship= $issets[13];
                $g_phoneno   = $issets[14];
                $occupation  = $issets[15];
                $g_address   = $issets[16];

                $columns1 = [ "User_Id" ];
                $where1   = [ 
                    "FName" => $fname,
                    "MName" => $mname,
                    "LName" => $lname,
                    "Status" => 1 
                ];
                $exists1  = exists($users, $columns1, $where1);

                if($exists1 == 0){

                    $data2   = [
                        "FName" => $fname,
                        "MName" => $mname,
                        "LName" => $lname,
                        "Birthdate" => $bdate,
                        "Civil_status" => $civil_stat,
                        "Sex" => $sex,
                        "Nationality" => $nationality,
                        "Email" => $email,
                        "Phone_no" => $phone_no,
                        "Address" => $address,
                        "Guardian" => $g_fname." ".$g_lname,
                        "G_relation" => $relationship,
                        "G_contactno" => $g_phoneno,
                        "G_email" => $g_email,
                        "G_occupation" => $occupation,
                        "G_address" => $g_address,
                        "Date_added" => $server_date,
                        "Time_added" => $server_time,
                        "Last_update" => $server_date
                    ];
                    $insert2 = insert($users, $data2);

                    $last_Id = $insert2['LastId'];

                    $username = "B".date("Y", strtotime("now")).$last_Id;

                    if($insert2['Result'] == 1){

                        $data3   = [
                            "Level_Id" => 4,
                            "User_Id" => $last_Id,
                            "Username" => $username,
                            "Password" => "admin123",
                            "Date_added" => $server_date,
                            "Time_added" => $server_time
                        ];
                        $insert3 = insert($accounts, $data3);

                        if($insert3['Result'] == 1){

                            $user_Id    = $_SESSION["licom_usr_Id"];
                            $log_detail = 'Added a new instructor record: Name: '.$fname.' '.$lname;

                            insertToActivityLogs($log_detail, $user_Id);

                            $res_req = 1;
                        }
                        else{

                            $res_req = 2;
                        }
                    }
                    else{

                        $res_req = 2;
                    }
                }
                else{

                    $res_req = 4;
                }
            }
            else{

                $res_req = 3;
            }

            echo json_encode($res_req);
        }

        else if($_POST['action'] == 'instructor_grades'){

            $instructor_Id = $_POST['instructorid'];

            $query ="SELECT 
                        Eval_Id, 
                        Remarks, 
                        Grade_val, 
                        Date_added, 
                        Time_added
                    FROM 
                        evaluation_grade 
                    WHERE 
                        Status = 1 
                        AND User_Id = '".$instructor_Id."' ";

            if(isset($_POST['semesterid']) && $_POST['semesterid'] != ''){

                $semester_Id = $_POST['semesterid'];

                $query .="AND Semester_Id = '".$semester_Id."' ";
            }
            else{

                // ========== Current Semester ============
                    $sem_info = currentSemester();

                    $semester_Id = $sem_info['SemId'];
                // ========== Current Semester END ========

                $query .="AND Semester_Id = '".$semester_Id."' ";
            }

            $query .="ORDER BY 
                        Date_added DESC, 
                        Time_added DESC ";

            $fetch = mysqli_query($con, $query);

            $count = mysqli_num_rows($fetch);

            $results_arr = array();

            $total_grade = 0;

            if($count > 0){

                $grade_sum = 0;

                while($row = mysqli_fetch_assoc($fetch)){

                    $eval_Id    = $row['Eval_Id'];
                    $remarks    = $row['Remarks'];
                    $grade_val  = $row['Grade_val'];
                    $date_added = $row['Date_added'];
                    $time_added = $row['Time_added'];

                    $grade_val_formatted = number_format($grade_val, 2);
                    $metric_val          = substr($grade_val_formatted, 0, 1);

                    // ========== Fetch Metric Info ===========
                        $metric_info = metricValues($metric_val);

                        $metric_val_desc    = $metric_info['MetricDesc'];
                        $metric_q_desc      = $metric_info['MetricQDesc'];
                    // ========== Fetch Metric Info END =======

                    $result_arr = array(
                        'EvalId' => $eval_Id,
                        'Remarks' => $remarks,
                        'GradeVal' => $grade_val_formatted,
                        'MetricVal' => $metric_val,
                        'MetricDesc' => $metric_val_desc,
                        'MetricQDesc' => $metric_q_desc,
                        'DateAdded' => dateFormat($date_added),
                        'TimeAdded' => timeFormat($time_added)
                    );

                    array_push($results_arr, $result_arr);

                    $grade_sum+=$grade_val;
                }

                $total_grade = ($grade_sum / $count);

                // ========== Fetch Metric Info ===========
                    $metric_info2 = metricValues($total_grade);

                    $metric_val_desc2    = $metric_info2['MetricDesc'];
                    $metric_q_desc2      = $metric_info2['MetricQDesc'];
                // ========== Fetch Metric Info END =======
            }

            echo json_encode(
                array(
                    'Records' => $results_arr,
                    'TotalGrade' => number_format($total_grade, 2),
                    'MetricDesc2' => $metric_val_desc,
                    'MetricQDesc2' => $metric_q_desc,
                    'Total' => $count
                )
            );
        }
    }

?>