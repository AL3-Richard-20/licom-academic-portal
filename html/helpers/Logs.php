<?php

    function insertToActivityLogs($log_detail, $user_Id){

        global $con, $server_date, $server_time;

        $data1 = [
            "Log_detail" => $log_detail,
            "User_Id" => $user_Id,
            "Date_added" => $server_date,
            "Time_added" => $server_time
        ];
        $insert1 = insert('activity_logs', $data1);

        if($insert1['Result'] == 1){

            $res_req = 1;
        }
        else{

            $res_req = 2;
        }

        return $res_req;
    }

?>