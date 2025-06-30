<?php

    include "../includes/db.php";
    include "../models/Tables.php";

    if(isset($_POST['action'])){


        if($_POST['action'] == 'fetch_student_grades'){

            $query ="SELECT 
                        Grade_val, 
                        Remarks, 
                        Evaluated_by, 
                        Date_added, 
                        Time_added 
                    FROM 
                        student_grades 
                    WHERE 
                        Status = 1 ";
                
            if($_POST['semesterid'] != ''){

                $semester_Id = $_POST['semesterid'];

                $query .="AND Semester_Id = '".$semester_Id."' ";
            }

            if($_POST['studentid'] != ''){

                $student_Id  = $_POST['studentid'];

                $query .="AND Student_Id = '".$student_Id."' ";
            }

            if($_POST['subjectid'] != ''){

                $subject_Id  = $_POST['subjectid'];

                $query .="AND Subject_Id = '".$subject_Id."' ";
            }

            $fetch = mysqli_query($con, $query);

            $count = mysqli_num_rows($fetch);

            $results_arr = array();

            if($fetch && $count > 0){

                while($row = mysqli_fetch_assoc($fetch)){

                    $grade_val      = $row['Grade_val'];

                    $remarks        = $row['Remarks'];

                    // ============= Fetch Grade Remarks =================
                        $query2 ="SELECT 
                                    Grade_remark 
                                FROM 
                                    grade_remarks 
                                WHERE 
                                    Status = 1 
                                    AND Grade_Remark_Id = '".$remarks."' 
                                LIMIT 1 ";
                        
                        $fetch2 = mysqli_query($con, $query2);

                        $row2 = mysqli_fetch_assoc($fetch2);

                        $grade_remark = $row2['Grade_remark'];
                    // ============= Fetch Grade Remarks END =============

                    $evaluated_by   = $row['Evaluated_by'];
                    $date_added     = $row['Date_added'];
                    $time_added     = $row['Time_added'];

                    $result_arr = array(
                        'GradeVal' => $grade_val,
                        'Remarks' => $grade_remark,
                        'RemarksId' => $remarks,
                        'EvaluatedBy' => $evaluated_by,
                        'DateAdded' => $date_added,
                        'TimeAdded' => $time_added
                    );

                    array_push($results_arr, $result_arr);
                }
            }

            echo json_encode($results_arr);
        }

        else if($_POST['action'] == 'new_student_grade'){

            $student_Id     = $_POST['ssg_student_Id'];
            $semester_Id    = $_POST['ssg_semester_Id'];
            $subject_Id     = $_POST['ssg_subject_Id'];
            $grade_val      = $_POST['ssg_grade_val'];
            $remarks_dd     = $_POST['remarks_dd'];

            $columns1 = [ "Grade_Id" ];
            $where1   = [
                "Semester_Id" => $semester_Id,
                "Student_Id" => $student_Id,
                "Subject_Id" => $subject_Id,
                "Status" => 1
            ];
            $exists1  = exists($student_grades, $columns1, $where1);

            if($exists1 == 0){

                $data2 = [
                    "Semester_Id" => $semester_Id,
                    "Student_Id" => $student_Id,
                    "Subject_Id" => $subject_Id,
                    "Grade_val" => $grade_val,
                    "Remarks" => $remarks_dd,
                    "Evaluated_by" => $_SESSION["licom_usr_Id"],
                    "Date_added" => $server_date,
                    "Time_added" => $server_time
                ];
                $insert2 = insert($student_grades, $data2);

                $res_req = ($insert2['Result'] == 1) ? 1 : 2;
            }
            else{

                $data2   = [
                    "Grade_val" => $grade_val,
                    "Remarks" => $remarks_dd,
                    "Evaluated_by" => $_SESSION["licom_usr_Id"],
                    "Date_added" => $server_date,
                    "Time_added" => $server_time
                ];
                $where2  = [
                    "Semester_Id" => $semester_Id,
                    "Student_Id" => $student_Id,
                    "Subject_Id" => $subject_Id,
                    "Status" => 1
                ];
                $update2 = update($student_grades, $data2, $where2);

                $res_req = ($update2 == 1) ? 1 : 2;
            }

            echo json_encode($res_req);
        }
    }

?>