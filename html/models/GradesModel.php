<?php

    include "../includes/db.php";
    include "../models/Tables.php";

    include "../helpers/Logs.php";

    if(isset($_POST['action'])){


        if($_POST['action'] == 'fetch_student_grades'){

            $query ="SELECT 
                        Midterm_grade,
                        Tentative_final,
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

                    $midterm_grade   = $row['Midterm_grade'];
                    $tentative_grade = $row['Tentative_final'];
                    $grade_val       = $row['Grade_val'];
                    $remarks         = $row['Remarks'];

                    // ============= Fetch Grade Remarks =================
                        $query2 ="SELECT 
                                    Grade_remark,
                                    Grade_indicator  
                                FROM 
                                    grade_remarks 
                                WHERE 
                                    Status = 1 
                                    AND Grade_Remark_Id = '".$remarks."' 
                                LIMIT 1 ";
                        
                        $fetch2 = mysqli_query($con, $query2);

                        $row2 = mysqli_fetch_assoc($fetch2);

                        $grade_remark    = $row2['Grade_remark'];
                        $color_indicator = $row2['Grade_indicator'];
                    // ============= Fetch Grade Remarks END =============

                    $evaluated_by   = $row['Evaluated_by'];
                    $date_added     = $row['Date_added'];
                    $time_added     = $row['Time_added'];

                    $result_arr = array(
                        'MidtermGrade' => $midterm_grade,
                        'TentativeGrade' => $tentative_grade,
                        'GradeVal' => $grade_val,
                        'Remarks' => $grade_remark,
                        'RemarksId' => $remarks,
                        'ColorInd' => $color_indicator,
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
            $midterm_grade  = $_POST['ssg_midterm_grade_val'];
            $tentative_grade= $_POST['ssg_tent_grade_val'];
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
                    "Midterm_grade" => $midterm_grade,
                    "Tentative_final" => $tentative_grade,
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
                    "Midterm_grade" => $midterm_grade,
                    "Tentative_final" => $tentative_grade,
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

            $user_Id    = $_SESSION["licom_usr_Id"];
            $log_detail = 'Add/Update student grade. Student: '.$student_Id;

            insertToActivityLogs($log_detail, $user_Id);

            echo json_encode($res_req);
        }

        else if($_POST['action'] == 'new_grade_remark'){

            $remark_name    = $_POST['remark_name'];
            $color_ind_val  = $_POST['color_ind_val'] ?? NULL;

            $columns1 = [ "Grade_Remark_Id" ];
            $where1   = [
                "Grade_remark" => $remark_name,
                "Status" => 1
            ];
            $exists1  = exists($grade_remarks, $columns1, $where1);

            if($exists1 == 0){

                $data2      = [
                    "Grade_remark" => $remark_name,
                    "Grade_indicator" => $color_ind_val,
                    "Date_added" => $server_date,
                    "Time_added" => $server_time
                ];
                $insert2    = insert($grade_remarks, $data2);

                if($insert2['Result'] == 1){

                    $res_req = 1;

                    $user_Id    = $_SESSION["licom_usr_Id"];
                    $log_detail = 'Added a new grade remark. Name: '.$remark_name;

                    insertToActivityLogs($log_detail, $user_Id);
                }
                else{

                    $res_req = 2;
                }
            }
            else{

                $res_req = 4;
            }

            echo json_encode($res_req);
        }

        else if($_POST['action'] == 'edit_grade_remark'){

            $grade_remark_Id      = $_POST['e_grade_remark_Id'];
            $grade_remark_name    = $_POST['e_grade_remark_name'];
            $color_ind_val        = $_POST['e_color_ind_val'];

            $columns1 = [ "Grade_Remark_Id" ];
            $where1   = [
                "Grade_remark" => $grade_remark_name,
                "Status" => 1,
                "NOT Grade_Remark_Id" => $grade_remark_Id
            ];
            $exists1  = exists($grade_remarks, $columns1, $where1);

            if($exists1 == 0){

                $data2   = [
                    "Grade_remark" => $grade_remark_name,
                    "Grade_indicator" => $color_ind_val,
                ];
                $where2  = [ "Grade_Remark_Id" => $grade_remark_Id ];
                $update2 = update($grade_remarks, $data2, $where2);

                if($update2 == 1){

                    $user_Id    = $_SESSION["licom_usr_Id"];
                    $log_detail = 'Edit grade remark. Name: '.$grade_remark_name;

                    insertToActivityLogs($log_detail, $user_Id);

                    $res_req = 1;
                }
                else{

                    $res_req = 2;
                }
            }
            else{

                $res_req = 4;
            }

            echo json_encode($res_req);
        }

        else if($_POST['action'] == 'delete_grade_remark'){

            $remark_Id = $_POST['remarkid'];

            $data1   = [ "Status" => 0 ];
            $where1  = [ "Grade_Remark_Id" => $remark_Id ];
            $update2 = update($grade_remarks, $data1, $where1);

            if($update2 == 1){

                $user_Id    = $_SESSION["licom_usr_Id"];
                $log_detail = 'Delete grade remark record. ID: '.$remark_Id;

                insertToActivityLogs($log_detail, $user_Id);

                $res_req = 1;
            }
            else{

                $res_req = 2;
            }

            echo json_encode($res_req);
        }
    }

?>