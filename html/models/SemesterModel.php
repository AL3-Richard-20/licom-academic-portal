<?php

    include "../includes/db.php";
    include "../models/Tables.php";

    include "../helpers/Logs.php";
    include "../helpers/Semester.php";

    if(isset($_POST['action'])){

        if($_POST['action'] == 'new_semester'){

            $semester_name = $_POST['semester_name'];

            $columns1   = [ "Semester_Id" ];
            $where1     = [
                "Semester_name" => $semester_name, 
                "Status" => 1 
            ];
            $exists1    = exists($semesters, $columns1, $where1);

            if($exists1 == 0){

                $data2   = [
                    "Semester_name" => $semester_name,
                    "Date_added" => $server_date,
                    "Time_added" => $server_time
                ];
                $insert2 = insert($semesters, $data2);

                if($insert2['Result'] == 1){

                    $user_Id    = $_SESSION["licom_usr_Id"];
                    $log_detail = 'Added a new semester record: '.$semester_name;

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

        else if($_POST['action'] == 'edit_semester'){

            $semester_Id    = $_POST['e_semester_Id'];
            $semester_name  = $_POST['e_semester_name'];

            $columns1   = [ "Semester_Id" ];
            $where1     = [
                "Semester_name" => $semester_name, 
                "Status" => 1 
            ];
            $exists1    = exists($semesters, $columns1, $where1);

            if($exists1 == 0){
    
                $data1   = [ "Semester_name" => $semester_name ];
                $where1  = [ "Semester_Id" => $semester_Id ];
                $update1 = update($semesters, $data1, $where1);

                if($update1 == 1){

                    $user_Id    = $_SESSION["licom_usr_Id"];
                    $log_detail = 'Edit semester record: '.$semester_name;

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

        else if($_POST['action'] == 'delete_semester'){

            $semester_Id = $_POST['semesterid'];

            $data1   = [ "Status" => 0 ];
            $where1  = [ "Semester_Id" => $semester_Id ];
            $update1 = update($semesters, $data1, $where1);

            if($update1 == 1){

                $user_Id    = $_SESSION["licom_usr_Id"];
                $log_detail = 'Delete semester record ID: '.$semester_Id;

                insertToActivityLogs($log_detail, $user_Id);

                $res_req = 1;
            }
            else{

                $res_req = 2;
            }

            echo json_encode($res_req);
        }

        else if($_POST['action'] == 'set_as_active'){

            $sem_Id = $_POST['semid'];

            $data0    = [ "Is_default" => 2 ];
            $where0   = [ "Is_default" => 1 ];
            $update0  = update($semesters, $data0, $where0);

            if($update0 == 1){

                // $data1    = [ "Is_default" => 0 ];
                // $where1   = [ "Status" => 1 ];
                // $update1  = update($semesters, $data1, $where1);
    
                // if($update1 == 1){
    
                    $data2    = [ "Is_default" => 1 ];
                    $where2   = [ "Semester_Id" => $sem_Id ];
                    $update2  = update($semesters, $data2, $where2);
    
                    if($update2 == 1){
                        
                        // ON GOING
                        // =========== Set all students as "Inactive" ============
                            // $data3    = [ "Status" => 0 ];
                            // $where3   = [ "Status" => 1 ];
                            // $update3 = update($users, $data3, $where3);
                        // =========== Set all students as "Inactive" END ========
                        
                        // ON GOING
                        // =========== Set those students under current semester as "Active" ============
                            // $query4="SELECT 
                            //             student_classes.Student_Id, 
                            //             class_schedules.Class_Schedule_Id 
                            //         FROM 
                            //             student_classes 
                            //         LEFT JOIN 
                            //             class_schedules 
                            //         ON 
                            //             student_classes.Class_Schedule_Id = class_schedules.Class_Schedule_Id 
                            //         WHERE 
                            //             student_classes.Status = 1 
                            //             AND class_schedules.Semester_Id = '".$sem_Id."' 
                            //             AND class_schedules.Status = 1 
                            //         GROUP BY 
                            //             student_classes.Student_Id ";
    
                            // $fetch4 = mysqli_query($con, $query4);
    
                            // while($row4 = mysqli_fetch_assoc($fetch4)){
    
                            //     $student_Id = $row4['Student_Id'];
                            // }
                        // =========== Set those students under current semester as "Active" END ========
    
                        $user_Id    = $_SESSION["licom_usr_Id"];
                        $log_detail = 'Set semester as active. ID: '.$sem_Id;
    
                        insertToActivityLogs($log_detail, $user_Id);
    
                        $res_req = 1;
                    }
                    else{
    
                        $res_req = 2;
                    }
                // }
                // else{
    
                //     $res_req = 2;
                // }
            }

            echo json_encode($res_req);
        }

        else if($_POST['action'] == 'fetch_current_semester'){

            $current_sem_info = currentSemester();

            $semester_Id    = $current_sem_info['SemId'];
            $semester_name  = $current_sem_info['SemName'];
            $is_default     = $current_sem_info['IsDefault'];

            echo json_encode(
                array(
                    'SemId' => $semester_Id,
                    'SemName' => $semester_name,
                    'IsDefault' => $is_default
                )
            );
        }

        // =============== Year Levels ================ 
            elseif($_POST['action'] == 'new_year_level'){

                $year_level_name = $_POST['year_level_name'];
    
                $columns1   = [ "Year_Level_Id" ];
                $where1     = [ 
                    "Year_name" => $year_level_name, 
                    "Status" => 1 
                ];
                $exists1    = exists($year_levels, $columns1, $where1);
    
                if($exists1 == 0){
    
                    $data2   = [
                        "Year_name" => $year_level_name,
                        "Date_added" => $server_date,
                        "Time_added" => $server_time
                    ];
                    $insert2 = insert($year_levels, $data2);
    
                    if($insert2['Result'] == 1){
    
                        $user_Id    = $_SESSION["licom_usr_Id"];
                        $log_detail = 'Added a new year level record: '.$year_level_name;
    
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

            else if($_POST['action'] == 'edit_year_level'){

                $year_level_Id    = $_POST['e_year_level_Id'];
                $year_level_name  = $_POST['e_year_level_name'];
        
                $data1   = [ "Year_name" => $year_level_name ];
                $where1  = [ "Year_Level_Id" => $year_level_Id ];
                $update1 = update($year_levels, $data1, $where1);
    
                if($update1 == 1){
    
                    $user_Id    = $_SESSION["licom_usr_Id"];
                    $log_detail = 'Edit year level record: '.$year_level_name;
    
                    insertToActivityLogs($log_detail, $user_Id);
    
                    $res_req = 1;
                }
                else{
    
                    $res_req = 2;
                }
    
                echo json_encode($res_req);
            }

            else if($_POST['action'] == 'delete_year_level'){

                $year_level_Id = $_POST['yearlevelid'];
    
                $data1   = [ "Status" => 0 ];
                $where1  = [ "Year_Level_Id" => $year_level_Id ];
                $update1 = update($year_levels, $data1, $where1);
    
                if($update1 == 1){
    
                    $user_Id    = $_SESSION["licom_usr_Id"];
                    $log_detail = 'Delete year level record ID: '.$year_level_Id;
    
                    insertToActivityLogs($log_detail, $user_Id);
    
                    $res_req = 1;
                }
                else{
    
                    $res_req = 2;
                }
    
                echo json_encode($res_req);
            }
        // =============== Year Levels END ============

        // =============== Student Year Level ================
            else if($_POST['action'] == 'fetch_year_and_course'){

                $student_Id = $_POST['studentid'];

                $fetch_year_course = fetchStudCourseYearLevel($student_Id);

                echo json_encode($fetch_year_course);
            }

            else if($_POST['action'] == 'edit_stud_year_level'){

                $stud_Id        = $_POST['studid'];
                $year_level_Id  = $_POST['e_year_level'];
                $course_Id      = $_POST['e_course'];

                $columns0 = [ "SYL_Id" ];
                $where0   = [ "Student_Id" => $stud_Id ];
                $exists0  = exists($student_year_level, $columns0, $where0);

                if($exists0 == 0){

                    $data1   = [
                        "Year_Level_Id" => $year_level_Id,
                        "Course_Id" => $course_Id,
                        "Student_Id" => $stud_Id,
                        "Date_added" => $server_date,
                        "Time_added" => $server_time
                    ];
                    $insert1 = insert($student_year_level, $data1);

                    if($insert1['Result'] == 1){
    
                        $user_Id    = $_SESSION["licom_usr_Id"];
                        $log_detail = 'Added student year level and course: Student: '.$insert1['LastId'];
        
                        insertToActivityLogs($log_detail, $user_Id);
    
                        $res_req = 1;
                    }
                    else{
    
                        $res_req = 4;
                    }
                }
                else{

                    $data1    = [
                        "Year_Level_Id" => $year_level_Id,
                        "Course_Id" => $course_Id,
                        "Last_updated" => $server_now
                    ];
                    $where1   = [ "Student_Id" => $stud_Id ];
                    $update1  = update($student_year_level, $data1, $where1);
    
                    if($update1 == 1){
    
                        $user_Id    = $_SESSION["licom_usr_Id"];
                        $log_detail = 'Changed student year level and course: Student: '.$stud_Id;
        
                        insertToActivityLogs($log_detail, $user_Id);
    
                        $res_req = 1;
                    }
                    else{
    
                        $res_req = 2;
                    }
                }


                echo json_encode($res_req);
            }
        // =============== Student Year Level END ============
    }
?>