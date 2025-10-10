<?php

    include "../includes/db.php";
    include "../models/Tables.php";

    include "../helpers/Logs.php";

    if(isset($_POST['action'])){

        if($_POST['action'] == 'new_course'){

            $course_name = $_POST['course_name'];
            $course_code = $_POST['course_code'];

            $columns1   = [ "Course_Id" ];
            $where1     = [ 
                "Course_name" => $course_name, 
                "Course_code" => $course_code,
                "Status" => 1 
            ];
            $exists1    = exists($courses, $columns1, $where1);

            if($exists1 == 0){

                $data2   = [
                    "Course_name" => $course_name,
                    "Course_code" => $course_code,
                    "Date_added" => $server_date,
                    "Time_added" => $server_time
                ];
                $insert2 = insert($courses, $data2);

                if($insert2['Result'] == 1){

                    $user_Id    = $_SESSION["licom_usr_Id"];
                    $log_detail = 'Added a new program. Name: '.$course_name;

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

        else if($_POST['action'] == 'edit_course'){

            $course_Id   = $_POST['e_course_Id'];
            $course_name = $_POST['e_course_name'];
            $course_code = $_POST['e_course_code'];

            $data1   = [
                "Course_name" => $course_name,
                "Course_code" => $course_code,
                "Date_added" => $server_date,
                "Time_added" => $server_time
            ];
            $where1  = [ "Course_Id" => $course_Id ];
            $update1 = update($courses, $data1, $where1);

            if($update1 == 1){

                $user_Id    = $_SESSION["licom_usr_Id"];
                $log_detail = 'Edit program record. Name: '.$course_name;

                insertToActivityLogs($log_detail, $user_Id);

                $res_req = 1;
            }
            else{

                $res_req = 2;
            }

            echo json_encode($res_req);
        }

        else if($_POST['action'] == 'delete_course'){

            $course_Id = $_POST['courseid'];

            $data1   = [ "Status" => 0 ];
            $where1  = [ "Course_Id" => $course_Id ];
            $update1 = update($courses, $data1, $where1);

            if($update1 == 1){

                $user_Id    = $_SESSION["licom_usr_Id"];
                $log_detail = 'Delete program record. ID: '.$course_Id;

                insertToActivityLogs($log_detail, $user_Id);

                $res_req = 1;
            }
            else{

                $res_req = 2;
            }

            echo json_encode($res_req);
        }

        else if($_POST['action'] == 'fetch_subject_courses'){

            $course_Id = $_POST['courseid'];

            $query ="SELECT 
                        Subject_Id,
                        Subject_name,
                        Subject_code 
                    FROM 
                        subjects 
                    WHERE 
                        Status = 1 
                        AND Course_Id = '".$course_Id."' ";

            $fetch = mysqli_query($con, $query);

            $results_arr = array();

            while($row = mysqli_fetch_assoc($fetch)){

                $subject_Id   = $row['Subject_Id'];
                $subject_name = $row['Subject_name'];
                $subject_code = $row['Subject_code'];

                $result_arr = array(
                    'SubjectID' => $subject_Id,
                    'SubjectName' => $subject_name,
                    'SubjectCode' => $subject_code
                );

                array_push($results_arr, $result_arr);
            }

            echo json_encode($results_arr);
        }
    }

?>