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
                // $columns1 = [ "Class_Schedule_Id" ];
                // $where1   = [
                //     "Semester_Id" => $semester_Id,
                //     "Room_Id" => $room_Id,
                //     "Day" => $day_Id,
                //     "Status" => 1
                // ];
                // $exists1  = exists($class_schedules, $columns1, $where1);

                // $exists1 = ($exists1 == 0) ? 0 : 1;

                // if($exists1 == 1){

                //     $is_valid   = 0;
                    
                //     $res_req    = 4;
                // }
            // ========== Check Semester and Room END ===========

            // ========== Check Class Date and Time =============
                $query2 ="SELECT 
                                COUNT(*) as Total 
                            FROM 
                                class_schedules 
                            WHERE 
                                ('".$time_start_val."' BETWEEN Time_start AND Time_end 
                                OR '".$time_end_val."' BETWEEN Time_start AND Time_end ) 
                                AND Semester_Id = '".$semester_Id."' 
                                AND Room_Id = '".$room_Id."' 
                                AND Day = '".$day_Id."' 
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

        else if($_POST['action'] == 'fetch_class_schedules'){

            $query ="SELECT 
                        class_schedules.Class_Schedule_Id, 
                        class_schedules.Time_start, 
                        class_schedules.Time_end, 
                        semesters.Semester_name, 
                        subjects.Subject_name, 
                        subjects.Subject_code, 
                        courses.Course_name,
                        courses.Course_code,
                        rooms.Room_name, 
                        rooms.Room_details, 
                        class_schedules.Instructor_Id 
                    FROM 
                        class_schedules 
                    LEFT JOIN 
                        semesters 
                    ON 
                        class_schedules.Semester_Id = semesters.Semester_Id 
                    LEFT JOIN 
                        subjects 
                    ON 
                        class_schedules.Subject_Id = subjects.Subject_Id 
                    LEFT JOIN 
                        courses 
                    ON 
                        subjects.Course_Id = courses.Course_Id 
                    LEFT JOIN 
                        rooms 
                    ON 
                        class_schedules.Room_Id = rooms.Room_Id 
                    WHERE 
                        class_schedules.Status = 1 ";
            
            if($_POST['semesterid'] != ''){

                $semester_Id = $_POST['semesterid'];

                $query .="AND class_schedules.Semester_Id = '".$semester_Id."' ";
            }

            if($_POST['courseid'] != ''){

                $course_Id = $_POST['courseid'];

                $query .="AND subjects.Course_Id = '".$course_Id."' ";
            }

            if($_POST['roomid'] != ''){

                $room_Id = $_POST['roomid'];

                $query .="AND class_schedules.Room_Id = '".$room_Id."' ";
            }

            if($_POST['dayid'] != ''){

                $day_Id = $_POST['dayid'];

                $query .="AND class_schedules.Day = '".$day_Id."' ";
            }

            $fetch = mysqli_query($con, $query);

            $results_arr = array();

            if($fetch){

                while($row = mysqli_fetch_assoc($fetch)){

                    $class_sched_Id = $row['Class_Schedule_Id'];
                    $time_start     = $row['Time_start'];
                    $time_end       = $row['Time_end'];
                    $semester_name  = $row['Semester_name'];
                    $subject_name   = $row['Subject_name'];
                    $subject_code   = $row['Subject_code'];
                    $course_name    = $row['Course_name'];
                    $course_code    = $row['Course_code'];
                    $room_name      = $row['Room_name'];
                    $room_details   = $row['Room_details'];
                    $instructor_Id  = $row['Instructor_Id'];

                    $query2 ="SELECT 
                                FName, 
                                MName, 
                                LName 
                            FROM 
                                users 
                            WHERE 
                                User_Id = '".$instructor_Id."' 
                                AND Status = 1 
                            LIMIT 1 ";

                    $fetch2 = mysqli_query($con, $query2);

                    $count2 = mysqli_num_rows($fetch2);

                    if($fetch2 && $count2 > 0){

                        $row2 = mysqli_fetch_assoc($fetch2);

                        $fname = $row2['FName'];
                        $mname = $row2['MName'];
                        $lname = $row2['LName'];

                        $instructor_fullname = $fname." ".$mname." ".$lname;
                    }
                    else{

                        $instructor_fullname = "";
                    }
                    
                    $result_arr = array(
                        'ClassSchedId' => $class_sched_Id,
                        'TimeStart' => timeFormat($time_start),
                        'TimeEnd' => timeFormat($time_end),
                        'SemesterName' => $semester_name,
                        'SubjectName' => stringEllip($subject_name, 15),
                        'SubjectName2' => $subject_name,
                        'SubjectCode' => $subject_code,
                        'CourseName' => $course_name,
                        'CourseCode' => $course_code,
                        'RoomName' => $room_name,
                        'RoomDetails' => $room_details,
                        'InstructorId' => $instructor_Id,
                        'InstructorName' => $instructor_fullname
                    );

                    array_push($results_arr, $result_arr);
                }
            }

            echo json_encode($results_arr);
        }
    }

?>