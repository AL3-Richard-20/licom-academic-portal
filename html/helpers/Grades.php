<?php

    function gradeRemark($final_grade){

        global $con;

        $query ="SELECT 
                    Grade_Remark_Id 
                FROM 
                    grade_remarks 
                WHERE 
                    ".$final_grade." BETWEEN `Range_from` AND `Range_to` 
                    AND Status = 1 
                LIMIT 1 ";

        $fetch = mysqli_query($con, $query);

        $row = mysqli_fetch_assoc($fetch);

        $grade_remark_Id = $row['Grade_Remark_Id'];

        return $grade_remark_Id;
    }

?>