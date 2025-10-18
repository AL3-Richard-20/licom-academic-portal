<?php

    function subjectInfo($subject_Id){

        global $con;

        $query="SELECT 
                    subjects.Subject_name, 
                    subjects.Subject_code, 
                    subjects.Units, 
                    subjects.Classification, 
                    courses.Course_name, 
                    courses.Course_code 
                FROM 
                    subjects 
                LEFT JOIN 
                    courses 
                ON 
                    subjects.Course_Id = courses.Course_Id 
                WHERE 
                    subjects.Subject_Id = '".$subject_Id."' 
                LIMIT 1 ";

        $fetch = mysqli_query($con, $query);

        $row = mysqli_fetch_assoc($fetch);

        $subject_name   = $row['Subject_name'];
        $subject_code   = $row['Subject_code'];
        $subject_unit   = $row['Units'];
        $classification = $row['Classification'];
        $course_name    = $row['Course_name'];
        $course_code    = $row['Course_code'];

        return array(
            'SubjectName' => $subject_name,
            'SubjectCode' => $subject_code,
            'Units' => $subject_unit,
            'SubjectClass' => $classification,
            'CourseName' => $course_name,
            'CourseCode' => $course_code
        );
    }

?>