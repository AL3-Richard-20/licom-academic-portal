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

?>