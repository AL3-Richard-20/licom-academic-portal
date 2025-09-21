<?php

    include "../includes/db.php";
    include "../models/Tables.php";

    include "../helpers/Logs.php";

    if(isset($_POST['action'])){

        if($_POST['action'] == 'login'){

            $username = $_POST['username'];
            $password = $_POST['password'];

            $columns1 = [ "Level_Id", "User_Id" ];
            $where1   = [ 
                "Username" => $username,
                "Password" => $password,
                "Status" => 1 
            ];
            $exists1  = exists($accounts, $columns1, $where1);

            if($exists1 == 0){

                $res_req = 4;
            }
            else{   

                $level_Id = $exists1['Level_Id'];
                $user_Id  = $exists1['User_Id'];

                $query2 = "SELECT 
                                FName, 
                                MName, 
                                LName,
                                Email 
                            FROM 
                                users 
                            WHERE 
                                User_Id = ? 
                                AND Status = 1 ";

                $fetch2 = $con->prepare($query2);
                $fetch2->bind_param('i', $user_Id);
                $fetch2_results = fetch($fetch2);

                $first_name  = $fetch2_results['Results'][0]['FName'];
                $middle_name = $fetch2_results['Results'][0]['MName'];
                $last_name   = $fetch2_results['Results'][0]['LName'];
                $email_addr  = $fetch2_results['Results'][0]['Email'];

                $_SESSION["licom_usr_Id"]    = $user_Id;
                $_SESSION["licom_usr_fname"] = $first_name;
                $_SESSION["licom_usr_mname"] = $middle_name;
                $_SESSION["licom_usr_lname"] = $last_name;
                $_SESSION["licom_usr_email"] = $email_addr;
                $_SESSION["licom_usr_level"] = $level_Id;

                // ========== Fetch Level Info ===========
                    $query3 = "SELECT Level_name FROM levels WHERE Level_Id = '".$_SESSION["licom_usr_level"]."' LIMIT 1";
                    $fetch3 = mysqli_query($con, $query3);
                    $row3   = mysqli_fetch_assoc($fetch3);

                    $level_name = $row3['Level_name'];
                // ========== Fetch Level Info END =======

                $_SESSION["licom_usr_levelname"] = $level_name;

                $sess_user_Id   = $_SESSION["licom_usr_Id"];
                $log_detail     = 'Log In Account';

                insertToActivityLogs($log_detail, $sess_user_Id);

                $res_req = 1;
            }

            echo json_encode($res_req);
        } 
    }

?>