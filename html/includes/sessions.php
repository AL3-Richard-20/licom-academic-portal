<?php

    if(!isset($_SESSION)){
    
        session_start();

        if(!isset($_SESSION["licom_usr_level"])){

            header("Location:authpage.php");
            exit();
        }
    }
    else{    

        if(!isset($_SESSION["licom_usr_level"])){

            header("Location:authpage.php");
            exit();
        }
    }

?>