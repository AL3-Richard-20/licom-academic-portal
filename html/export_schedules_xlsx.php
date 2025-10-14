<?php

    include "../html/includes/db.php";
    include "helpers/Semester.php";
    include "helpers/Users.php";

    require '../assets/extra-libs/PhpSpreadsheet/vendor/autoload.php';

    use PhpOffice\PhpSpreadsheet\Spreadsheet;
    use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

    $spreadsheet    = new Spreadsheet();
    $sheet          = $spreadsheet->getActiveSheet();

    $data   = array();    

    $data[] = [
        'Day', 
        'Time', 
        'Subject', 
        'Room', 
        'Instructor'
    ];

    $student_Id = $_SESSION["licom_usr_Id"];

    if(isset($_GET['semesterid'])){

        $semester_Id = $_GET['semesterid'];

        $query ="SELECT 
                    class_schedules.Class_Schedule_Id, 
                    class_schedules.Day, 
                    class_schedules.Time_start, 
                    class_schedules.Time_end, 
                    semesters.Semester_name, 
                    subjects.Subject_Id, 
                    subjects.Subject_name, 
                    subjects.Subject_code, 
                    courses.Course_name,
                    courses.Course_code,
                    rooms.Room_name, 
                    rooms.Room_details, 
                    class_schedules.Instructor_Id,
                    student_classes.Student_Class_Id,  
                    student_classes.Student_Id  
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
                LEFT JOIN 
                    student_classes 
                ON 
                    class_schedules.Class_Schedule_Id = student_classes.Class_Schedule_Id 
                WHERE 
                    class_schedules.Status = 1 
                    AND student_classes.Status = 1 ";


        $query .="AND class_schedules.Semester_Id = '".$semester_Id."' ";

        if($_GET['roomid'] != ''){

            $room_Id = $_GET['roomid'];

            $query .="AND class_schedules.Room_Id = '".$room_Id."' ";
        }
        
        $query .="AND student_classes.Student_Id = '".$student_Id."' ";

        $query .="GROUP BY 
                    class_schedules.Class_Schedule_Id 
                ORDER BY 
                    Day ASC,
                    Time_start ASC ";

        $fetch = mysqli_query($con, $query);

        $data = array();

        if($fetch){

            $days = [
                1 => 'Monday',
                2 => 'Tuesday',
                3 => 'Wednesday',
                4 => 'Thursday',
                5 => 'Friday',
                6 => 'Saturday',
                7 => 'Sunday'
            ];

            $data[] = [
                'Day', 
                'Time', 
                'Subject', 
                'Room', 
                'Instructor'
            ];

            while($row = mysqli_fetch_assoc($fetch)){

                $class_sched_Id     = $row['Class_Schedule_Id'];
                $student_class_Id   = $row['Student_Class_Id'];
                $sched_day          = $days[$row['Day']];
                $time_start         = timeFormat($row['Time_start']);
                $time_end           = timeFormat($row['Time_end']);
                $semester_name      = $row['Semester_name'];
                $subject_Id         = $row['Subject_Id'];
                $subject_name       = $row['Subject_name'];
                $subject_code       = $row['Subject_code'];
                $course_name        = $row['Course_name'];
                $course_code        = $row['Course_code'];
                $room_name          = $row['Room_name'];
                $room_details       = $row['Room_details'];
                $instructor_Id      = $row['Instructor_Id'];

                // =============== Fetch Instructor Info ==================
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
                // =============== Fetch Instructor Info END ==============
                
                $data[] = [
                    $sched_day, 
                    $time_start." - ".$time_end, 
                    $subject_name, 
                    $room_name." | ".$room_details, 
                    $instructor_fullname
                ];
            }
        }

        // ============= Fetch Student Info ===============
            $student_info = fetchUserInfo($student_Id, '', 3, '');

            $stud_fname = $student_info[0]['FName'];
            $stud_lname = $student_info[0]['LName'];

            $stud_fullname = $stud_fname."_".$stud_lname;
        // ============= Fetch Student Info END ===========

        // ============= Fetch Semester Info ==============
            $semester_info = semesterInfo($semester_Id);

            $semester_name = $semester_info['SemesterName'];
        // ============= Fetch Semester Info END ==========
        
        foreach ($data as $rowIndex => $row) {
    
            foreach ($row as $colIndex => $cell) {
    
                $sheet->setCellValueByColumnAndRow($colIndex + 1, $rowIndex + 1, $cell);
            }
        }
    
        $writer         = new Xlsx($spreadsheet);
        $tmp_filename   = $stud_fullname."_".$semester_name."_class_schedules";
        $fileName       = str_replace(' ', '_', $tmp_filename.'.xlsx');
        $writer->save($fileName);
    
        header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        header('Content-Disposition: attachment; filename="' . $fileName . '"');
        readfile($fileName); // Output the file content to the browser
        unlink($fileName); // Delete the file from the server after download (optional)
        exit;
    }


?>