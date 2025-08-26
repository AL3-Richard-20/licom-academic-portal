<?php

    function fetchUserInfo(
        $user_Id = NULL, 
        $query_val = NULL, 
        $level_Id_val = NULL, 
        $limit_val = NULL){

        global $con;

        $query="SELECT 
                    users.*,
                    accounts.Level_Id  
                FROM 
                    users 
                LEFT JOIN 
                    accounts 
                ON 
                    users.User_Id = accounts.User_Id
                WHERE 
                    NOT ISNULL(users.User_Id) ";


        if($user_Id != NULL){

            $query .="AND users.User_Id = '".$user_Id."' ";
        }
        
        if($query_val != NULL){

            $query .="AND (users.FName LIKE '%".$query_val."%' 
                    OR users.MName LIKE '%".$query_val."%' 
                    OR users.LName LIKE '%".$query_val."%' 
                    OR users.Email LIKE '%".$query_val."%' 
                    OR CONCAT_WS(' ', users.FName, users.MName, users.LName) LIKE '%".$query_val."%' ) ";
        }

        if($level_Id_val != NULL){

            $query .="AND accounts.Level_Id = '".$level_Id_val."' ";
        }

        if($limit_val != NULL){

            $query .="LIMIT ".$limit_val;
        }
        else{
            
            $query .="LIMIT 1 ";
        }

        $fetch = mysqli_query($con, $query);

        $count = mysqli_num_rows($fetch);

        $results_arr = array();

        if($fetch && $count > 0){

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
                'MName' => ($mname != NULL) ? $mname : "",       
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

        return $results_arr;
    }

    function userSexDemographic($level_Id){

        global $con;

        $query ="SELECT 
                    users.Sex, 
                    COUNT(*) as Total 
                FROM 
                    users 
                LEFT JOIN 
                    accounts 
                ON 
                    users.User_Id = accounts.User_Id
                WHERE 
                    users.Status = 1 
                    AND accounts.Level_Id = ? 
                GROUP BY 
                    users.Sex 
                ORDER BY 
                    FIELD(users.Sex, 'Male', 'Female') ";

        $fetch = $con->prepare($query);
        $fetch->bind_param('i', $level_Id);
        $fetch->execute();
        $fetch->store_result();
        $fetch->bind_result(
            $sex, 
            $total
        );

        $results_arr = array();

        while($fetch->fetch()){

            $result_arr = array(
                'Sex' => $sex,
                'Total' => $total
            );

            array_push($results_arr, $result_arr);
        }

        return $results_arr;

    }

?>