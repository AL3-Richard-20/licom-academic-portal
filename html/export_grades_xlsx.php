<?php

    include "../html/includes/db.php";

    require '../assets/extra-libs/PhpSpreadsheet/vendor/autoload.php';

    use PhpOffice\PhpSpreadsheet\Spreadsheet;
    use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

    $spreadsheet    = new Spreadsheet();
    $sheet          = $spreadsheet->getActiveSheet();

    $data   = array();    

    $data[] = ['Student_ID', 'Name', 'Midterm', 'Tentative_Final', 'Final_Grade', 'Remark'];

    if(isset($_GET['semesterid'], $_GET['subjectid'], $_GET['courseid'])){

        $semester_Id = $_GET['semesterid'];
        $subject_Id  = $_GET['subjectid'];
        $course_Id   = $_GET['courseid'];

        $query ="SELECT  
                    student_classes.Student_Id,
                    users.FName,
                    users.LName 
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
                LEFT JOIN 
                    users 
                ON 
                    student_classes.Student_Id = users.User_Id 
                WHERE 
                    class_schedules.Semester_Id = '".$semester_Id."' 
                    AND class_schedules.Subject_Id = '".$subject_Id."' 
                    AND subjects.Course_Id = '".$course_Id."' 
                    AND student_classes.Status = 1 
                    AND users.Status = 1 
                GROUP BY 
                    student_classes.Student_Id ";
    
        $fetch = mysqli_query($con, $query);
    
        if($fetch){
    
            while($row = mysqli_fetch_assoc($fetch)){
    
                $student_Id     = $row['Student_Id'];
                $student_fname  = $row['FName'];
                $student_lname  = $row['LName'];
    
                $student_fullname = $student_fname." ".$student_lname;
    
                $data[] = [$student_Id, $student_fullname, 0, 0, 0, 0];
            }
        }
    
        foreach ($data as $rowIndex => $row) {
    
            foreach ($row as $colIndex => $cell) {
    
                $sheet->setCellValueByColumnAndRow($colIndex + 1, $rowIndex + 1, $cell);
            }
        }
    
        $writer     = new Xlsx($spreadsheet);
        $fileName   = 'sample.xlsx';
        $writer->save($fileName);
    
        header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        header('Content-Disposition: attachment; filename="' . $fileName . '"');
        readfile($fileName); // Output the file content to the browser
        unlink($fileName); // Delete the file from the server after download (optional)
        exit;
    }


?>