<?php

    include "../html/includes/db.php";
    include "helpers/Semester.php";
    include "helpers/Users.php";

    $student_Id = 5;

    // ============= Fetch Student Info ===============
        $student_info = fetchUserInfo($student_Id, '', 3, '');

        $stud_fname = $student_info[0]['FName'];
        $stud_lname = $student_info[0]['LName'];

        $stud_fullname = $stud_fname."_".$stud_lname;
    // ============= Fetch Student Info END ===========

    echo $stud_fullname;
?>