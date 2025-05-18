<?php

    include "../includes/db.php";
    include "../models/Tables.php";

    if(isset($_POST['action'])){

        if($_POST['action'] == 'new_subject'){

            $course_Id    = $_POST['course_Id'];
            $subject_name = $_POST['subject_name'];
            $subject_code = $_POST['subject_code'];

            $columns1   = [ "Subject_Id" ];
            $where1     = [ 
                "Course_Id" => $course_Id,
                "Subject_name" => $subject_name, 
                "Subject_code" => $subject_code,
                "Status" => 1 
            ];
            $exists1    = exists($subjects, $columns1, $where1);

            if($exists1 == 0){

                $data2   = [
                    "Course_Id" => $course_Id,
                    "Subject_name" => $subject_name, 
                    "Subject_code" => $subject_code,
                    "Date_added" => $server_date,
                    "Time_added" => $server_time
                ];
                $insert2 = insert($subjects, $data2);

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

        else if($_POST['action'] == 'edit_subject'){

            $subject_Id     = $_POST['e_subject_Id'];
            $course_Id      = $_POST['e_course_Id'];
            $subject_name   = $_POST['e_subject_name'];
            $subject_code   = $_POST['e_subject_code'];

            $data1   = [
                "Course_Id" => $course_Id,
                "Subject_name" => $subject_name,
                "Subject_code" => $subject_code,
                "Date_added" => $server_date,
                "Time_added" => $server_time
            ];
            $where1  = [ "Subject_Id" => $subject_Id ];
            $update1 = update($subjects, $data1, $where1);

            if($update1 == 1){

                $res_req = 1;
            }
            else{

                $res_req = 2;
            }

            echo json_encode($res_req);
        }

        else if($_POST['action'] == 'delete_subject'){

            $subject_Id = $_POST['subjectid'];

            $data1   = [ "Status" => 0 ];
            $where1  = [ "Subject_Id" => $subject_Id ];
            $update1 = update($subjects, $data1, $where1);

            if($update1 == 1){

                $res_req = 1;
            }
            else{

                $res_req = 2;
            }

            echo json_encode($res_req);
        }
    }

?>