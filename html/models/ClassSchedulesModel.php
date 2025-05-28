<?php

    include "../includes/db.php";
    include "../models/Tables.php";

    if(isset($_POST['action'])){


        if($_POST['action'] == 'new_class_schedule'){

            $semester_Id    = $_POST['semester_Id'];
            $room_Id        = $_POST['room_Id'];
            $day_Id         = $_POST['day_Id'];
            $time_start_val = $_POST['time_start_val'];
            $time_end_val   = $_POST['time_end_val'];
            $course_Id      = $_POST['course_Id'];
            $subject_Id     = $_POST['subject_Id'];
            $instructor_Id  = $_POST['instructor_Id'];

            $is_valid = 1;

            // ========== Check Semester and Room ===============
                $columns1 = [ "Class_Schedule_Id" ];
                $where1   = [
                    "Semester_Id" => $semester_Id,
                    "Room_Id" => $room_Id,
                    "Day" => $day_Id,
                    "Status" => 1
                ];
                $exists1  = exists($class_schedules, $columns1, $where1);

                $exists1 = ($exists1 == 0) ? 0 : 1;

                if($exists1 == 1){

                    $is_valid   = 0;
                    
                    $res_req    = 4;
                }
            // ========== Check Semester and Room END ===========

            // ========== Check Class Date and Time =============
                $query2 ="SELECT 
                                COUNT(*) as Total 
                            FROM 
                                class_schedules 
                            WHERE 
                                (".$time_start_val." BETWEEN Time_start AND Time_end 
                                OR ".$time_end_val." BETWEEN Time_start AND Time_end) 
                                AND Status = 1 ";

                $fetch2 = mysqli_query($con, $query2);

                $row2 = mysqli_fetch_assoc($fetch2);

                $exists2 = $row2['Total'];

                if($exists2 > 0){

                    $is_valid = 0;

                    $res_req = 5;
                }
            // ========== Check Class Date and Time END =========

            if($is_valid == 1){

                $data3   = [
                    "Semester_Id" => $semester_Id,
                    "Subject_Id" => $subject_Id,
                    "Room_Id" => $room_Id,
                    "Instructor_Id" => $instructor_Id,
                    "Day" => $day_Id,
                    "Time_start" => $time_start_val,
                    "Time_end" => $time_end_val,
                    "Date_added" => $server_date,
                    "Time_added" => $server_time
                ];
                $insert3 = insert($class_schedules, $data3);

                if($insert3['Result'] == 1){

                    $res_req = 1;
                }
                else{

                    $res_req = 2;
                }
            }

            echo json_encode($res_req);
        }
    }

?>