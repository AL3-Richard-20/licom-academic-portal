<?php

    include "../includes/db.php";
    include "../models/Tables.php";

    if(isset($_POST['action'])){

        if($_POST['action'] == 'fetch_user_info'){

            $user_Id = $_POST['userid'];

            $query="SELECT 
                       * 
                    FROM 
                        users 
                    WHERE 
                        User_Id = '".$user_Id."' 
                    LIMIT 1 ";

            $fetch = mysqli_query($con, $query);

            $results_arr = array();

            if($fetch){

                $row = mysqli_fetch_assoc($fetch);

                $fname       = $row['FName'];
                $mname       = $row['MName'];
                $lname       = $row['LName'];
                $suffix      = $row['Suffix'];
                $bdate       = $row['Birthdate'];
                $civil_stat  = $row['Civil_status'];
                $sex         = $row['Sex'];
                $nationality = $row['Nationality'];
                $email       = $row['Email'];
                $phone_no    = $row['Phone_no'];
                $address     = $row['Address'];

                $guardian     = $row['Guardian'];
                $relation     = $row['G_relation'];
                $g_phone_no   = $row['G_contactno'];
                $g_email      = $row['G_email'];
                $g_occupation = $row['G_occupation'];
                $g_address    = $row['G_address'];
                $date_added   = $row['Date_added'];
                $time_added   = $row['Time_added'];
                $last_update  = $row['Last_update'];

                $account_stat = $row['Status'];

                $result_arr = array(
                    'FName' => $fname,       
                    'MName' => $mname,       
                    'LName' => $lname,       
                    'Suffix' => $suffix,      
                    'BDate' => dateFormat($bdate),       
                    'BDate2' => $bdate,       
                    'CivilStat' => $civil_stat,  
                    'Sex' => $sex,         
                    'Nationality' => $nationality, 
                    'Email' => $email,       
                    'PhoneNo' => $phone_no,    
                    'Address' => $address,    
                    'Guardian' => $guardian,     
                    'Relation' => $relation,     
                    'GPhoneNo' => $g_phone_no,   
                    'GEmail' => $g_email,      
                    'Occupation' => $g_occupation, 
                    'GAddress' => $g_address,    
                    'DateAdded' => dateFormat($date_added),   
                    'TimeAdded' => timeFormat($time_added),   
                    'LastUpdate' => dateFormat($last_update),  
                    'Status' => $account_stat
                );

                array_push($results_arr, $result_arr);
            }

            echo json_encode($results_arr);
        }

        else if($_POST['action'] == 'edit_personal_info'){

            if(isset($_POST['userid'])){

                $user_Id = $_POST['userid'];

                $fname       = $_POST['e_fname'];
                $mname       = $_POST['e_mname'];
                $lname       = $_POST['e_lname'];
                $suffix      = $_POST['e_suffix'];
                $bdate       = $_POST['e_bdate'];
                $civil_stat  = $_POST['e_civil_status'];
                $sex         = $_POST['e_sex'];
                $nationality = $_POST['e_nationality'];

                $data1   = [
                    "FName" => $fname,
                    "MName" => $mname,
                    "LName" => $lname,
                    "Suffix" => $suffix,
                    "Birthdate" => $bdate,
                    "Civil_status" => $civil_stat,
                    "Sex" => $sex,
                    "Nationality" => $nationality,
                    "Last_update" => $server_date
                ];
                $where1  = [ "User_Id" => $user_Id ];
                $update1 = update($users, $data1, $where1);

                if($update1 == 1){

                    $res_req = 1;
                }
                else{

                    $res_req = 2;
                }
            }
            else{

                $res_req = 3;
            }

            echo json_encode($res_req);
        }

        else if($_POST['action'] == 'edit_contact_info'){

            $user_Id        = $_POST['userid'];
            $email          = $_POST['e_email'];
            $phone_no       = $_POST['e_phoneno'];
            $address        = $_POST['e_address'];
            $guardian       = $_POST['e_guardian'];
            $relationship   = $_POST['e_relationship'];
            $occupation     = $_POST['e_occupation'];
            $g_email        = $_POST['e_g_email'];
            $g_phone_no     = $_POST['e_g_phoneno'];
            $g_address      = $_POST['e_g_address'];

            $data1   = [
                "Email" => $email,
                "Phone_no" => $phone_no,
                "Address" => $address,
                "Guardian" => $guardian,
                "G_relation" => $relationship,
                "G_contactno" => $g_phone_no,
                "G_email" => $g_email,
                "G_occupation" => $occupation,
                "G_address" => $g_address,
                "Last_update" => $server_date
            ];
            $where1  = [ "User_Id" => $user_Id ];
            $update1 = update($users, $data1, $where1);

            if($update1){

                $res_req = 1;
            }
            else{

                $res_req = 2;
            }

            echo json_encode($res_req);
        }

        else if($_POST['action'] == 'set_as_inactive'){

            $user_Id = $_POST['userid'];
            $status  = $_POST['statusval'];

            $data1   = [ 
                "Status" => $status,
                "Last_update" => $server_date 
            ];
            $where1  = [ "User_Id" => $user_Id ];
            $update1 = update($users, $data1, $where1);

            if($update1 == 1){

                $res_req = 1;
            }
            else{

                $res_req = 2;
            }

            echo json_encode($res_req);
        }
    }

?>