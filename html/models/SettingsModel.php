<?php

    include "../includes/db.php";
    include "../models/Tables.php";

    include "../helpers/Users.php";
    include "../helpers/Logs.php";

    if(isset($_POST['action'])){


        if($_POST['action'] == 'edit_icon'){

            if(isset($_POST['image'], $_POST['settid'])){

                $sett_Id    = $_POST['settid'];
                $data       = $_POST['image'];

                $uploadDir  = '../../assets/images';

                if (!file_exists($uploadDir)) { mkdir($uploadDir, 0777, true); }

                $image_array_1 = explode(';', $data);
                $image_array_2 = explode(',', $image_array_1[1]);

                $data = base64_decode($image_array_2[1]);

                $imageName = time().'.png';

                if(file_put_contents($uploadDir.'/'.$imageName, $data)){

                    $data0    = [ 
                        "Sett_val" => $imageName,
                        "Last_update" => $server_now 
                    ];
                    $where0   = [ "Sett_Id" => $sett_Id ];
                    $update0  = update($settings, $data0, $where0);

                    $user_Id    = $_SESSION["licom_usr_Id"];
                    $log_detail = 'Changed app icon.';

                    insertToActivityLogs($log_detail, $user_Id);
    
                    $res_req = 1;
                }
                else{

                    $res_req = 5;
                }
            }
            else{

                $res_req = 3;
            }

            echo json_encode($res_req);
        }

        else if($_POST['action'] == 'edit_app_name'){

            $app_name = $_POST['appname'];

            $datan    = [ 
                "Sett_val" => $app_name,
                "Last_update" => $server_now  
            ];
            $wheren   = [ "Sett_Id" => 4 ];
            $updaten = update($settings, $datan, $wheren);

            if($updaten == 1){

                $user_Id    = $_SESSION["licom_usr_Id"];
                $log_detail = 'Changed app name to: '.$app_name;

                insertToActivityLogs($log_detail, $user_Id);

                $res_req = 1;
            }
            else{

                $res_req = 2;
            }

            echo json_encode($res_req);
        }
    }

?>