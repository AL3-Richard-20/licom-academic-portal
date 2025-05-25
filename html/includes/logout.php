<?php

    session_start();

    unset($_SESSION["licom_usr_Id"]);
    unset($_SESSION["licom_usr_fname"]);
    unset($_SESSION["licom_usr_mname"]);
    unset($_SESSION["licom_usr_lname"]);
    unset($_SESSION["licom_usr_level"]);

    session_unset();

    session_destroy();

    header("Location:../authpage.php");

?>