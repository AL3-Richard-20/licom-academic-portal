<?php

    include "../includes/db.php";
    include "../models/Tables.php";

    include "../helpers/Logs.php";

    if(isset($_POST['action'])){

        if($_POST['action'] == 'new_registrar'){

            $req_data = [
                "fname",
                "mname",
                "lname",
                "email",
                "bdate",
                "civil_stat",
                "sex",
                "nationality",
                "phone_no",
                "address",
                "g_fname",
                "g_lname",
                "g_email",
                "relationship",
                "g_phone_no",
                "occupation",
                "g_address"
            ];

            $issets = issetVerify($req_data);

            if($issets){

                $fname       = $issets[0];
                $mname       = $issets[1];
                $lname       = $issets[2];
                $email       = $issets[3];
                $bdate       = $issets[4];
                $civil_stat  = $issets[5];
                $sex         = $issets[6];
                $nationality = $issets[7];
                $phone_no    = $issets[8];
                $address     = $issets[9];
                $g_fname     = $issets[10];
                $g_lname     = $issets[11];
                $g_email     = $issets[12];
                $relationship= $issets[13];
                $g_phoneno   = $issets[14];
                $occupation  = $issets[15];
                $g_address   = $issets[16];

                $columns1 = [ "User_Id" ];
                $where1   = [ 
                    "FName" => $fname,
                    "MName" => $mname,
                    "LName" => $lname,
                    "Status" => 1 
                ];
                $exists1  = exists($users, $columns1, $where1);

                if($exists1 == 0){

                    $data2   = [
                        "FName" => $fname,
                        "MName" => $mname,
                        "LName" => $lname,
                        "Birthdate" => $bdate,
                        "Civil_status" => $civil_stat,
                        "Sex" => $sex,
                        "Nationality" => $nationality,
                        "Email" => $email,
                        "Phone_no" => $phone_no,
                        "Address" => $address,
                        "Guardian" => $g_fname." ".$g_lname,
                        "G_relation" => $relationship,
                        "G_contactno" => $g_phoneno,
                        "G_email" => $g_email,
                        "G_occupation" => $occupation,
                        "G_address" => $g_address,
                        "Date_added" => $server_date,
                        "Time_added" => $server_time,
                        "Last_update" => $server_date
                    ];
                    $insert2 = insert($users, $data2);

                    $last_Id = $insert2['LastId'];

                    $username = "registrar".$last_Id;

                    if($insert2['Result'] == 1){

                        $data3   = [
                            "Level_Id" => 2,
                            "User_Id" => $last_Id,
                            "Username" => $username,
                            "Password" => "admin123",
                            "Date_added" => $server_date,
                            "Time_added" => $server_time
                        ];
                        $insert3 = insert($accounts, $data3);

                        if($insert3['Result'] == 1){

                            $user_Id    = $_SESSION["licom_usr_Id"];
                            $log_detail = 'Added a new registrar record: Name: '.$fname.' '.$lname;

                            insertToActivityLogs($log_detail, $user_Id);

                            $res_req = 1;
                        }
                        else{

                            $res_req = 2;
                        }
                    }
                    else{

                        $res_req = 2;
                    }
                }
                else{

                    $res_req = 4;
                }
            }
            else{

                $res_req = 3;
            }

            echo json_encode($res_req);
        }
    }

?>