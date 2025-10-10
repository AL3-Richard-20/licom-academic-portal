<?php

    include "../includes/db.php";
    include "../models/Tables.php";

    include "../helpers/Logs.php";
    include "../helpers/Grades.php";

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
            // $remarks_dd     = $_POST['remarks_dd'];

            // ========== Remarks Interpretation ============
                $remarks_dd = gradeRemark($grade_val);
            // ========== Remarks Interpretation END ========

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

        else if($_POST['action'] == 'bulk_import_grades'){

            $semester_Id = $_POST['semesterid'];
            $subject_Id  = $_POST['subjectid'];
            $course_Id   = $_POST['courseid'];

            $no_errs_arr     = array();
            $with_errs_arr   = array();

            $student_Ids_arr = array();

            // =========== Fetch Student IDs ===========
                foreach($_POST as $key => $value){
                    
                    if( substr($key, 0, 11) == 'student_id_'){
                        
                        $student_Id = substr($key, 11);

                        array_push($student_Ids_arr, $student_Id);              
                    }
                }
            // =========== Fetch Student IDs END =======

            $student_Ids = array_unique($student_Ids_arr);
                
            foreach($student_Ids as $i_student_Id){

                $res_req    = 1;
                $is_valid   = 1;

                $midterm_grade      = $_POST['midterm_'.$i_student_Id];
                $tentative_grade    = $_POST['tentative_'.$i_student_Id];
                $grade_val          = $_POST['final_grade_'.$i_student_Id];
                $remark_txt         = $_POST['remark_'.$i_student_Id];

                // ========== Remarks Interpretation ============
                    $remarks_dd = gradeRemark($grade_val);
                // ========== Remarks Interpretation END ========

                // echo $i_student_Id." | ".$remark_txt;

                // ======= Check Remark ID ============
                    // $query0 ="SELECT 
                    //             Grade_Remark_Id 
                    //         FROM 
                    //             grade_remarks 
                    //         WHERE 
                    //             (Grade_remark = '".$remark_txt."' 
                    //             OR Grade_remark = UPPER('".$remark_txt."') ) 
                    //             AND Status = 1 
                    //         LIMIT 1 ";

                    // $fetch0 = mysqli_query($con, $query0);

                    // $count0 = mysqli_num_rows($fetch0);

                    // if($count0 > 0){

                    //     $row0 = mysqli_fetch_assoc($fetch0);

                    //     $remarks_dd = $row0['Grade_Remark_Id'];
                    // }
                    // else{

                    //     $is_valid = 0;

                    //     $res_req = 4; // Invalid Remark
                    // }
                // ======= Check Remark ID END ========

                // ======= Check student record if matches on database =============
                    $query="SELECT  
                                COUNT(*) as Total 
                            FROM 
                                student_classes 
                            LEFT JOIN 
                                class_schedules 
                            ON 
                                student_classes.Class_Schedule_Id = class_schedules.Class_Schedule_Id
                            LEFT JOIN 
                                subjects 
                            ON 
                                class_schedules.Subject_Id = subjects.Subject_Id 
                            WHERE 
                                student_classes.Student_Id = '".$i_student_Id."' 
                                AND class_schedules.Semester_Id = '".$semester_Id."' 
                                AND class_schedules.Subject_Id = '".$subject_Id."' 
                                AND subjects.Course_Id = '".$course_Id."' 
                                AND student_classes.Status = 1 ";

                    $fetch = mysqli_query($con, $query);

                    if($fetch){

                        $row = mysqli_fetch_assoc($fetch);

                        $is_matched = $row['Total'];

                        if($is_matched == 0){

                            $is_valid = 0;

                            $res_req = 5; // Invalid Student Record
                        }
                    }
                // ======= Check student record if matches on database END =========

                // ======= Check if all grade columns has value ==============
                    if($midterm_grade == 0 || $tentative_grade == 0 || $grade_val == 0){

                        $is_valid = 0;

                        $res_req = 6; // Invalid Student Record
                    }
                // ======= Check if all grade columns has value END ==========

                // ======= Check if remarks value is valid ============
                    if($remarks_dd == NULL){

                        $is_valid = 0;

                        $res_req = 7;
                    }
                // ======= Check if remarks value is valid END ========

                if($is_valid == 1){
    
                    $columns1 = [ "Grade_Id" ];
                    $where1   = [
                        "Semester_Id" => $semester_Id,
                        "Student_Id" => $i_student_Id,
                        "Subject_Id" => $subject_Id,
                        "Status" => 1
                    ];
                    $exists1  = exists($student_grades, $columns1, $where1);

                    if($exists1 == 0){  

                        $data2 = [
                            "Semester_Id" => $semester_Id,
                            "Student_Id" => $i_student_Id,
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
                            "Last_updated_date" => $server_now
                        ];
                        $where2  = [
                            "Semester_Id" => $semester_Id,
                            "Student_Id" => $i_student_Id,
                            "Subject_Id" => $subject_Id,
                            "Status" => 1
                        ];
                        $update2 = update($student_grades, $data2, $where2);

                        $res_req = ($update2 == 1) ? 1 : 2;
                    }
                }

                if($res_req == 1){
    
                    array_push($no_errs_arr, $i_student_Id);
                }
                else{
    
                    $with_err_arr = array(
                        'Res' => $res_req,
                        'StudId' => $i_student_Id
                    );
    
                    array_push($with_errs_arr, $with_err_arr);
                }
            }

            $user_Id    = $_SESSION["licom_usr_Id"];
            $log_detail = 'Import Student Grades';

            insertToActivityLogs($log_detail, $user_Id);

            echo json_encode(
                array(
                    'NoErrsArr' => $no_errs_arr,
                    'WithErrsArr' => $with_errs_arr
                )
            );
        }

        else if($_POST['action'] == 'bulk_import_grades2'){

            $semester_Id = $_POST['semesterid'];
            $subject_Id  = $_POST['subjectid'];

            $no_errs_arr     = array();
            $with_errs_arr   = array();

            $student_Ids_arr = array();

            // =========== Fetch Student IDs ===========
                foreach($_POST as $key => $value){
                    
                    if( substr($key, 0, 11) == 'student_id_'){
                        
                        $student_Id = substr($key, 11);

                        array_push($student_Ids_arr, $student_Id);              
                    }
                }
            // =========== Fetch Student IDs END =======

            $student_Ids = array_unique($student_Ids_arr);
                
            foreach($student_Ids as $i_student_Id){

                $res_req    = 1;
                $is_valid   = 1;

                $midterm_grade      = $_POST['midterm_'.$i_student_Id];
                $tentative_grade    = $_POST['tentative_'.$i_student_Id];
                $grade_val          = $_POST['final_grade_'.$i_student_Id];

                if($midterm_grade != 0 && $tentative_grade != 0 && $grade_val != 0){

                    // ========== Remarks Interpretation ============
                        $remarks_dd = gradeRemark($grade_val);
                    // ========== Remarks Interpretation END ========
    
                    $columns1 = [ "Grade_Id" ];
                    $where1   = [
                        "Semester_Id" => $semester_Id,
                        "Student_Id" => $i_student_Id,
                        "Subject_Id" => $subject_Id,
                        "Status" => 1
                    ];
                    $exists1  = exists($student_grades, $columns1, $where1);
    
                    if($exists1 == 0){  
    
                        $data2 = [
                            "Semester_Id" => $semester_Id,
                            "Student_Id" => $i_student_Id,
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
                            "Last_updated_date" => $server_now
                        ];
                        $where2  = [
                            "Semester_Id" => $semester_Id,
                            "Student_Id" => $i_student_Id,
                            "Subject_Id" => $subject_Id,
                            "Status" => 1
                        ];
                        $update2 = update($student_grades, $data2, $where2);
    
                        $res_req = ($update2 == 1) ? 1 : 2;
                    }
    
    
                    if($res_req == 1){
        
                        array_push($no_errs_arr, $i_student_Id);
                    }
                    else{
        
                        $with_err_arr = array(
                            'Res' => $res_req,
                            'StudId' => $i_student_Id
                        );
        
                        array_push($with_errs_arr, $with_err_arr);
                    }
                }
                else{

                    $with_err_arr = array(
                        'Res' => 5,
                        'StudId' => $i_student_Id
                    );
    
                    array_push($with_errs_arr, $with_err_arr);
                }
            }

            $user_Id    = $_SESSION["licom_usr_Id"];
            $log_detail = 'Encode Student Grades';

            insertToActivityLogs($log_detail, $user_Id);

            echo json_encode(
                array(
                    'NoErrsArr' => $no_errs_arr,
                    'WithErrsArr' => $with_errs_arr
                )
            );
        }
    }

?>