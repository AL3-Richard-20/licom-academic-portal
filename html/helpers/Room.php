<?php

    function roomInfo($room_Id){

        global $con;

        $query ="SELECT 
                    Room_name, 
                    Room_details 
                FROM 
                    rooms 
                WHERE 
                    Room_Id = '".$room_Id."' 
                LIMIT 1 ";

        $fetch = mysqli_query($con, $query);

        $row = mysqli_fetch_assoc($fetch);

        $room_name      = $row['Room_name'];
        $room_details   = $row['Room_details'];

        return array(
            'RoomName' => $room_name,
            'RoomDetails' => $room_details
        );
    }
?>