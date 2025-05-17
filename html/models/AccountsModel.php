<?php

    include "../includes/db.php";
    include "../models/Tables.php";

    if(isset($_POST['action'])){

        if($_POST['action'] == 'fetch_account_info'){

            $user_Id = $_POST['userid'];

            $query="SELECT 
                        Username,
                        Password 
                    FROM 
                        ".$accounts." 
                    WHERE 
                        User_Id = '".$user_Id."' 
                        AND Status = 1 
                    LIMIT 1 ";

            $fetch = mysqli_query($con, $query);

            if($fetch){

                $row = mysqli_fetch_assoc($fetch);

                $username = $row['Username'];
                $password = $row['Password'];

                echo json_encode(
                    array(
                        'Username' => $username,
                        'Password' => $password
                    )
                );
            }
        }
    }

?>