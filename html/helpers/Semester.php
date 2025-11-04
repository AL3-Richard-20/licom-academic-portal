<?php

    function currentSemester(){

        global $con;

        $query="SELECT 
                    Semester_Id, 
                    Semester_name, 
                    Is_default
                FROM 
                    semesters 
                WHERE 
                    Status = 1 
                    AND Is_default = 1 
                LIMIT 1 ";

        $fetch = mysqli_query($con, $query);

        $row = mysqli_fetch_assoc($fetch);

        $semester_Id    = $row['Semester_Id'];
        $semester_name  = $row['Semester_name'];
        $is_default     = $row['Is_default'];

        return array(
            'SemId' => $semester_Id,
            'SemName' => $semester_name,
            'IsDefault' => $is_default
        );
    }


    function fetchStudCourseYearLevel($student_Id){

        global $con;

        $query ="SELECT 
                    student_year_level.SYL_Id,
                    student_year_level.Semester_Id,
                    student_year_level.Course_Id,
                    year_levels.Year_name,
                    courses.Course_name, 
                    courses.Course_code  
                FROM 
                    student_year_level 
                LEFT JOIN 
                    year_levels 
                ON 
                    student_year_level.Year_Level_Id = year_levels.Year_Level_Id 
                LEFT JOIN 
                    courses 
                ON 
                    student_year_level.Course_Id = courses.Course_Id 
                WHERE 
                    student_year_level.Student_Id = '".$student_Id."' 
                    AND student_year_level.Status = 1 
                LIMIT 1 ";

        $fetch = mysqli_query($con, $query);

        $count = mysqli_num_rows($fetch);

        if($count > 0){

            $row = mysqli_fetch_assoc($fetch);

            $syl_Id         = $row['SYL_Id'];
            $semester_Id    = $row['Semester_Id'];
            $semester       = $row['Semester_name'] ?? "";
            $course_Id      = $row['Course_Id'];
            $year_name      = $row['Year_name'];
            $course_name    = $row['Course_name'];
            $course_code    = $row['Course_code'];

            $res_arr = array(
                'SYLID' => $syl_Id,
                'SemesterID' => $semester_Id,
                'Semester' => $semester,
                'CourseID' => $course_Id,
                'YearName' => $year_name,
                'CourseName' => $course_name,
                'CourseCode' => $course_code
            );
        }
        else{

            $res_arr = array();
        }

        return $res_arr;
    }


    function semesterInfo($semester_Id){

        global $con;

        $query ="SELECT 
                    semesters.Semester_name,
                    semesters.Is_default,
                    semesters.Date_added,
                    semesters.Time_added,
                    year_levels.Year_name 
                FROM 
                    semesters 
                LEFT JOIN 
                    year_levels 
                ON 
                    semesters.Year_Level_Id = year_levels.Year_Level_Id 
                WHERE 
                    semesters.Semester_Id = '".$semester_Id."' 
                LIMIT 1 ";

        $fetch = mysqli_query($con, $query);

        $row = mysqli_fetch_assoc($fetch);

        $semester_name  = $row['Semester_name'];
        $is_default     = $row['Is_default'];
        $date_added     = $row['Date_added'];
        $time_added     = $row['Time_added'];
        $year_name      = $row['Year_name'];
        
        return array(
            'SemesterName' => $semester_name,
            'IsDefault' => $is_default,
            'DateAdded' => $date_added,
            'TimeAdded' => $time_added,
            'YearName' => $year_name
        );
    }


    function yearLevelInfo($year_level_Id){

        global $con;

        $query="SELECT  
                    Year_name 
                FROM 
                    year_levels 
                WHERE 
                    Year_Level_Id = '".$year_level_Id."' 
                    AND Status = 1 
                LIMIT 1 ";

        $fetch = mysqli_query($con, $query);

        $year_name = '';

        $count = mysqli_num_rows($fetch);

        if($count > 0){

            $row = mysqli_fetch_assoc($fetch);
    
            $year_name = $row['Year_name'];
        }

        return $year_name;
    }

?>