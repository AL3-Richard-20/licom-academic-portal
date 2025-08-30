<?php

    include "../includes/db.php";
    include "../models/Tables.php";

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
    
            $data1   = [ "Semester_name" => $semester_name ];
            $where1  = [ "Semester_Id" => $semester_Id ];
            $update1 = update($semesters, $data1, $where1);

            if($update1 == 1){

                $res_req = 1;
            }
            else{

                $res_req = 2;
            }

            echo json_encode($res_req);
        }

        else if($_POST['action'] == 'delete_semester'){

            $semester_Id = $_POST['semesterid'];

            $data1   = [ "Status" => 0 ];
            $where1  = [ "Semester_Id" => $semester_Id ];
            $update1 = update($semesters, $data1, $where1);

            if($update1 == 1){

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
    }
?>