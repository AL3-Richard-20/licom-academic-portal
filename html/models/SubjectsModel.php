<?php

    include "../includes/db.php";
    include "../models/Tables.php";

    include "../helpers/Logs.php";
    include "../helpers/Semester.php";

    if(isset($_POST['action'])){

        if($_POST['action'] == 'fetch_subjects'){

            $query="SELECT 
                        Subject_Id, 
                        Subject_name, 
                        Subject_code, 
                        Units, 
                        Classification, 
                        Date_added, 
                        Time_added
                    FROM 
                        subjects 
                    WHERE 
                        Status = 1 ";

            if($_POST['courseid'] != ''){

                $course_Id = $_POST['courseid'];
                
                $query .="AND Course_Id = '".$course_Id."' ";
            }

            $query .="ORDER BY 
                        Date_added DESC, 
                        Time_added DESC ";

            $fetch = mysqli_query($con, $query);

            if($fetch){

                $results_arr = array();

                while($row = mysqli_fetch_assoc($fetch)){

                    $subject_Id     = $row['Subject_Id'];
                    $subject_name   = $row['Subject_name'];
                    $subject_code   = $row['Subject_code'];
                    $subject_unit   = $row['Units'];
                    $classification = $row['Classification'];
                    $date_added     = dateFormat($row['Date_added']);
                    $time_added     = timeFormat($row['Time_added']);

                    $result_arr = array(
                        'SubjectId' => $subject_Id,
                        'SubjectName' => $subject_name,
                        'SubjectCode' => $subject_code,
                        'Units' => $subject_unit ?? '',
                        'SubjectClass' => $classification,
                        'DateAdded' => $date_added,
                        'TimeAdded' => $time_added
                    );

                    array_push($results_arr, $result_arr);
                }

                echo json_encode($results_arr);
            }
        }
        
        else if($_POST['action'] == 'fetch_instructor_subjects'){

            $query="SELECT 
                        class_schedules.Class_Schedule_Id,
                        subjects.Subject_Id, 
                        subjects.Subject_name, 
                        subjects.Subject_code, 
                        courses.Course_code 
                    FROM 
                        class_schedules 
                    LEFT JOIN 
                        subjects 
                    ON 
                        class_schedules.Subject_Id = subjects.Subject_Id 
                    LEFT JOIN 
                        courses 
                    ON 
                        subjects.Course_Id = courses.Course_Id 
                    WHERE 
                        class_schedules.Status = 1 
                        AND class_schedules.Instructor_Id = '".$_SESSION["licom_usr_Id"]."' ";

            if($_POST['semid'] != ''){

                $semester_Id = $_POST['semid'];
                
                $query .="AND class_schedules.Semester_Id = '".$semester_Id."' ";
            }

            $query .="GROUP BY 
                        class_schedules.Subject_Id, subjects.Course_Id ";

            $query .="ORDER BY 
                        class_schedules.Date_added DESC, 
                        class_schedules.Time_added DESC ";

            $fetch = mysqli_query($con, $query);

            if($fetch){

                $results_arr = array();

                while($row = mysqli_fetch_assoc($fetch)){

                    $class_sched_Id = $row['Class_Schedule_Id'];
                    $subject_Id     = $row['Subject_Id'];
                    $subject_name   = $row['Subject_name'];
                    $subject_code   = $row['Subject_code'];
                    $course_code    = $row['Course_code'];

                    $result_arr = array(
                        'ClassSchedId' => $class_sched_Id,
                        'SubjectID' => $subject_Id,
                        'SubjectName' => $subject_name,
                        'SubjectCode' => $subject_code,
                        'CourseCode' => $course_code,
                    );

                    array_push($results_arr, $result_arr);
                }

                echo json_encode($results_arr);
            }
        }

        else if($_POST['action'] == 'new_subject'){

            $course_Id      = $_POST['course_Id'];
            $subject_name   = $_POST['subject_name'];
            $subject_code   = $_POST['subject_code'];
            $subject_units  = $_POST['subject_units'];
            $subject_class  = $_POST['subject_class'];

            $columns1   = [ "Subject_Id" ];
            $where1     = [ 
                "Course_Id" => $course_Id,
                "Subject_name" => $subject_name, 
                "Subject_code" => $subject_code,
                "Units" => $subject_units,
                "Status" => 1 
            ];
            $exists1    = exists($subjects, $columns1, $where1);

            if($exists1 == 0){

                $data2   = [
                    "Course_Id" => $course_Id,
                    "Subject_name" => $subject_name, 
                    "Subject_code" => $subject_code,
                    "Units" => $subject_units,
                    "Classification" => $subject_class,
                    "Date_added" => $server_date,
                    "Time_added" => $server_time
                ];
                $insert2 = insert($subjects, $data2);

                if($insert2['Result'] == 1){

                    $user_Id    = $_SESSION["licom_usr_Id"];
                    $log_detail = 'Added a new subject. Name: '.$subject_name;

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

        else if($_POST['action'] == 'edit_subject'){

            $subject_Id     = $_POST['e_subject_Id'];
            $course_Id      = $_POST['e_course_Id'];
            $subject_name   = $_POST['e_subject_name'];
            $subject_code   = $_POST['e_subject_code'];
            $subject_units  = $_POST['e_subject_units'];
            $subject_class  = $_POST['e_subject_class'];

            $columns1   = [ "Subject_Id" ];
            $where1     = [ 
                "Course_Id" => $course_Id,
                "Subject_name" => $subject_name, 
                "Subject_code" => $subject_code,
                "Units" => $subject_units,
                "Status" => 1, 
                "NOT Subject_Id" => $subject_Id
            ];
            $exists1 = exists($subjects, $columns1, $where1);

            if($exists1 == 0){

                $data1   = [
                    "Course_Id" => $course_Id,
                    "Subject_name" => $subject_name,
                    "Subject_code" => $subject_code,
                    "Units" => $subject_units,
                    "Classification" => $subject_class,
                    "Date_added" => $server_date,
                    "Time_added" => $server_time
                ];
                $where1  = [ "Subject_Id" => $subject_Id ];
                $update1 = update($subjects, $data1, $where1);

                if($update1 == 1){

                    $user_Id    = $_SESSION["licom_usr_Id"];
                    $log_detail = 'Edit a subject. Name: '.$subject_name;

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

        else if($_POST['action'] == 'delete_subject'){

            $subject_Id = $_POST['subjectid'];

            $data1   = [ "Status" => 0 ];
            $where1  = [ "Subject_Id" => $subject_Id ];
            $update1 = update($subjects, $data1, $where1);

            if($update1 == 1){

                $user_Id    = $_SESSION["licom_usr_Id"];
                $log_detail = 'Delete subject record. ID: '.$subject_Id;

                insertToActivityLogs($log_detail, $user_Id);

                $res_req = 1;
            }
            else{

                $res_req = 2;
            }

            echo json_encode($res_req);
        }

        else if($_POST['action'] == 'fetch_year_levels_and_semesters'){

            $subject_Id = $_POST['subjectid'];
            $group_by   = $_POST['groupby'];

            $query ="SELECT 
                        student_classes.Year_Level_Id, 
                        class_schedules.Semester_Id 
                    FROM 
                         student_classes
                    LEFT JOIN 
                        class_schedules 
                    ON 
                        student_classes.Class_Schedule_Id = class_schedules.Class_Schedule_Id
                    WHERE 
                        class_schedules.Subject_Id = '".$subject_Id."' 
                        AND class_schedules.Status = 1 ";

            if($group_by == 'Year Level'){

                $query .="GROUP BY 
                            student_classes.Year_Level_Id ";
            }
            else{

                $query .="GROUP BY 
                            class_schedules.Semester_Id ";
            }

            $fetch = mysqli_query($con, $query);

            if($fetch){

                $results_arr = array();

                while($row = mysqli_fetch_assoc($fetch)){

                    $year_level_Id = $row['Year_Level_Id'];

                    $semester_Id   = $row['Semester_Id'];


                    // ========== Year Level Info =============
                        $year_level_name = yearLevelInfo($year_level_Id);
                    // ========== Year Level Info END =========

                    // =========== Semsster Info ===============
                        $semester_info = semesterInfo($semester_Id);

                        $semester_name = $semester_info['SemesterName'];
                    // =========== Semsster Info END ===========

                    $result_arr = array(
                        'YearLevel' => $year_level_name,
                        'Semester' => $semester_name
                    );

                    array_push($results_arr, $result_arr);
                }

                echo json_encode($results_arr);
            }
        }
    }

?>