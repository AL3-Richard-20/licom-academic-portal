<?php

    include "../includes/db.php";
    include "../models/Tables.php";

    if(isset($_POST['action'])){

        if($_POST['action'] == 'new_room'){

            $room_name      = $_POST['room_name'];
            $room_details   = $_POST['room_details'];

            $columns1 = [ "Room_Id" ];
            $where1   = [ 
                "Room_name" => $room_name, 
                "Status" => 1 
            ];
            $exists1  = exists($rooms, $columns1, $where1);

            if($exists1 == 0){

                $data2   = [
                    "Room_name" => $room_name,
                    "Room_details" => $room_details,
                    "Date_added" => $server_date,
                    "Time_added" => $server_time
                ];
                $insert2 = insert($rooms, $data2);

                if($insert2['Result'] == 1){

                    $res_req = 1;
                }
                else{

                    $res_req = 2;
                }
            }
            else{

                $res_req = 4;
            }

            echo json_encode($res_req);
        }

        else if($_POST['action'] == 'edit_room'){

            $room_Id        = $_POST['e_room_Id'];
            $room_name      = $_POST['e_room_name'];
            $room_details   = $_POST['e_room_details'];
    
            $data1   = [ "Room_name" => $room_name, "Room_details" => $room_details ];
            $where1  = [ "Room_Id" => $room_Id ];
            $update1 = update($rooms, $data1, $where1);

            if($update1 == 1){

                $res_req = 1;
            }
            else{

                $res_req = 2;
            }

            echo json_encode($res_req);
        }

        else if($_POST['action'] == 'delete_room'){

            $room_Id = $_POST['roomid'];

            $data1   = [ "Status" => 0 ];
            $where1  = [ "Room_Id" => $room_Id ];
            $update1 = update($rooms, $data1, $where1);

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