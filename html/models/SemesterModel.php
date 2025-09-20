<?php

    include "../includes/db.php";
    include "../models/Tables.php";

    include "../helpers/Logs.php";

    if(isset($_POST['action'])){

        if($_POST['action'] == 'new_semester'){

            $year_level_Id = $_POST['year_level_Id'];
            $semester_name = $_POST['semester_name'];

            $columns1   = [ "Semester_Id" ];
            $where1     = [
                "Year_Level_Id" => $year_level_Id, 
                "Semester_name" => $semester_name, 
                "Status" => 1 
            ];
            $exists1    = exists($semesters, $columns1, $where1);

            if($exists1 == 0){

                $data2   = [
                    "Year_Level_Id" => $year_level_Id,
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

            $year_level_Id  = $_POST['e_year_level_Id'];
            $semester_Id    = $_POST['e_semester_Id'];
            $semester_name  = $_POST['e_semester_name'];

            $columns1   = [ "Semester_Id" ];
            $where1     = [
                "Year_Level_Id" => $year_level_Id, 
                "Semester_name" => $semester_name, 
                "Status" => 1 
            ];
            $exists1    = exists($semesters, $columns1, $where1);

            if($exists1 == 0){
    
                $data1   = [ 
                    "Year_Level_Id" => $year_level_Id,
                    "Semester_name" => $semester_name 
                ];
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

            $data1    = [ "Is_default" => 0 ];
            $where1   = [ "Status" => 1 ];
            $update1  = update($semesters, $data1, $where1);

            if($update1 == 1){

                $data2    = [ "Is_default" => 1 ];
                $where2   = [ "Semester_Id" => $sem_Id ];
                $update2  = update($semesters, $data2, $where2);

                if($update2 == 1){

                    $user_Id    = $_SESSION["licom_usr_Id"];
                    $log_detail = 'Set semester as active. ID: '.$sem_Id;

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

            echo json_encode($res_req);
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
    }
?>