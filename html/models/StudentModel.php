<?php

    include "../includes/db.php";
    include "../models/Tables.php";
    include "../helpers/Logs.php";

    if(isset($_POST['action'])){

        if($_POST['action'] == 'new_student'){

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
                "g_address",
                "e_year_level",
                "e_course"
            ];

            $issets = issetVerify($req_data);

            if($issets){

                $fname          = $issets[0];
                $mname          = $issets[1];
                $lname          = $issets[2];
                $email          = $issets[3];
                $bdate          = $issets[4];
                $civil_stat     = $issets[5];
                $sex            = $issets[6];
                $nationality    = $issets[7];
                $phone_no       = $issets[8];
                $address        = $issets[9];
                $g_fname        = $issets[10];
                $g_lname        = $issets[11];
                $g_email        = $issets[12];
                $relationship   = $issets[13];
                $g_phoneno      = $issets[14];
                $occupation     = $issets[15];
                $g_address      = $issets[16];
                $semester_Id    = $issets[17];
                $course_Id      = $issets[18];

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

                    $username = "C".date("Y", strtotime("now")).$last_Id;

                    if($insert2['Result'] == 1){

                        $data3   = [
                            "Level_Id" => 3,
                            "User_Id" => $last_Id,
                            "Username" => $username,
                            "Password" => "student123",
                            "Date_added" => $server_date,
                            "Time_added" => $server_time
                        ];
                        $insert3 = insert($accounts, $data3);

                        if($insert3['Result'] == 1){

                            $data1   = [
                                "Semester_Id" => $semester_Id,
                                "Course_Id" => $course_Id,
                                "Student_Id" => $last_Id,
                                "Date_added" => $server_date,
                                "Time_added" => $server_time
                            ];
                            $insert1 = insert($student_year_level, $data1);

                            $user_Id    = $_SESSION["licom_usr_Id"];
                            $log_detail = 'Added a new student record: Name: '.$fname.' '.$lname;

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

        else if($_POST['action'] == 'fetch_students_with_grades'){

            $semester_Id = $_POST['semid'];
            $subject_Id  = $_POST['subjectid'];

            $query ="SELECT 
                        student_classes.Student_Class_Id,
                        student_classes.Student_Id,
                        class_schedules.Semester_Id,
                        class_schedules.Subject_Id,
                        users.FName,
                        users.LName 
                    FROM 
                        student_classes 
                    LEFT JOIN 
                        class_schedules 
                    ON 
                        student_classes.Class_Schedule_Id = class_schedules.Class_Schedule_Id 
                    LEFT JOIN 
                        users 
                    ON 
                        student_classes.Student_Id = users.User_Id  
                    WHERE 
                        class_schedules.Class_Schedule_Id = '".$subject_Id."' 
                        AND student_classes.Status = 1
                        AND class_schedules.Status = 1 
                    GROUP BY 
                        student_classes.Student_Id ";

            $fetch = mysqli_query($con, $query);

            $results_arr = array();     

            while($row = mysqli_fetch_assoc($fetch)){
                
                $stud_class_Id  = $row['Student_Class_Id'];
                $student_Id     = $row['Student_Id'];
                $semester_Id    = $row['Semester_Id'];
                $db_subject_Id  = $row['Subject_Id'];
                $fname          = $row['FName'];
                $lname          = $row['LName'];

                $stud_fullname  = $fname." ".$lname;

                // =========== Fetch Student Grades =============
                    $query1 = "SELECT 
                                    student_grades.Midterm_grade, 
                                    student_grades.Tentative_final, 
                                    student_grades.Grade_val, 
                                    grade_remarks.Grade_remark 
                                FROM 
                                    student_grades 
                                LEFT JOIN 
                                    grade_remarks 
                                ON 
                                    student_grades.Remarks = grade_remarks.Grade_Remark_Id 
                                WHERE 
                                    student_grades.Semester_Id = '".$semester_Id."'     
                                    AND student_grades.Student_Id = '".$student_Id."' 
                                    AND student_grades.Subject_Id = '".$db_subject_Id."' 
                                    AND student_grades.Status = 1 
                                LIMIT 1 ";

                    $fetch1 = mysqli_query($con, $query1);

                    $row1 = mysqli_fetch_assoc($fetch1);

                    $midterm_grade  = $row1['Midterm_grade']; 
                    $tentative      = $row1['Tentative_final'];
                    $final_grade    = $row1['Grade_val'];
                    $grade_remark   = $row1['Grade_remark'];
                // =========== Fetch Student Grades END =========

                $result_arr = array(
                    'StudID' => $student_Id,
                    'StudName' => $stud_fullname,
                    'Midterm' => $midterm_grade,
                    'Tentative' => $tentative,
                    'FinalGrade' => $final_grade,
                    'GradeRemark' => $grade_remark
                );

                array_push($results_arr, $result_arr);
            }

            echo json_encode($results_arr);
        }
    }

?>