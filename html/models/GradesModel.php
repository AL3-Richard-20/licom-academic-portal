<?php

    include "../includes/db.php";
    include "../models/Tables.php";

    if(isset($_POST['action'])){


        if($_POST['action'] == 'fetch_student_grades'){

            $query ="SELECT 
                        Grade_val, 
                        Remarks, 
                        Evaluated_by, 
                        Date_added, 
                        Time_added 
                    FROM 
                        student_grades 
                    WHERE 
                        Status = 1 ";
                
            if($_POST['semesterid'] != ''){

                $semester_Id = $_POST['semesterid'];

                $query .="AND Semester_Id = '".$semester_Id."' ";
            }

            if($_POST['studentid'] != ''){

                $student_Id  = $_POST['studentid'];

                $query .="AND Student_Id = '".$student_Id."' ";
            }

            if($_POST['subjectid'] != ''){

                $subject_Id  = $_POST['subjectid'];

                $query .="AND Subject_Id = '".$subject_Id."' ";
            }

            $fetch = mysqli_query($con, $query);

            $count = mysqli_num_rows($fetch);

            $results_arr = array();

            if($fetch && $count > 0){

                while($row = mysqli_fetch_assoc($fetch)){

                    $grade_val      = $row['Grade_val'];
                    $remarks        = $row['Remarks'];
                    $evaluated_by   = $row['Evaluated_by'];
                    $date_added     = $row['Date_added'];
                    $time_added     = $row['Time_added'];

                    $result_arr = array(
                        'GradeVal' => $grade_val,
                        'Remarks' => $remarks,
                        'EvaluatedBy' => $evaluated_by,
                        'DateAdded' => $date_added,
                        'TimeAdded' => $time_added
                    );

                    array_push($results_arr, $result_arr);
                }
            }

            echo json_encode($results_arr);
        }
    }

?>