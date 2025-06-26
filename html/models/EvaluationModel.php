<?php

    include "../includes/db.php";
    include "../models/Tables.php";

    if(isset($_POST['action'])){

        // ==================== Header Functions ==================
            if($_POST['action'] == 'new_header'){

                $order_val   = $_POST['order_val'];
                $header_name = $_POST['header_name'];

                $columns1= [ "Eval_Header_Id" ];
                $where1  = [ 
                    "Order_val" => $order_val,
                    "Status" => 1
                ];
                $exists1 = exists($evaluation_headers, $columns1, $where1);

                if($exists1 == 0){

                    $data2   = [
                        "Eval_header_name" => $header_name,
                        "Order_val" => $order_val,
                        "Date_added" => $server_date,
                        "Time_added" => $server_time
                    ];
                    $insert2 = insert($evaluation_headers, $data2);

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

            else if($_POST['action'] == 'edit_header'){

                $header_Id   = $_POST['e_header_Id'];
                $order_val   = $_POST['e_order_val'];
                $header_name = $_POST['e_header_name'];

                $columns1= [ "Eval_Header_Id" ];
                $where1  = [ 
                    "NOT Eval_Header_Id" => $header_Id,
                    "Order_val" => $order_val,
                    "Status" => 1
                ];
                $exists1 = exists($evaluation_headers, $columns1, $where1);

                if($exists1 == 0){

                    $data2   = [
                        "Eval_header_name" => $header_name,
                        "Order_val" => $order_val
                    ];
                    $where2  = [ "Eval_Header_Id" => $header_Id ];
                    $update2 = update($evaluation_headers, $data2, $where2);

                    if($update2 == 1){

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

            else if($_POST['action'] == 'delete_header'){

                $header_Id = $_POST['headerid'];

                $data1   = [ "Status" => 0 ];
                $where1  = [ "Eval_Header_Id" => $header_Id ];
                $update1 = update($evaluation_headers, $data1, $where1);

                if($update1 == 1){

                    $res_req = 1;
                }
                else{

                    $res_req = 2;
                }

                echo json_encode($res_req);
            }
        // ==================== Header Functions END ==============

        // =================== Metric Functions ==================
            else if($_POST['action'] == 'new_metric'){

                $header_Id   = $_POST['header_dd_val'];
                $metric_name = $_POST['metric_name'];

                $columns1= [ "Eval_Metric_Id" ];
                $where1  = [ 
                    "Eval_Header_Id" => $header_Id,
                    "Metric_desc" => $metric_name,
                    "Status" => 1
                ];
                $exists1 = exists($evaluation_metrics, $columns1, $where1);

                if($exists1 == 0){

                    $data2   = [
                        "Eval_Header_Id" => $header_Id,
                        "Metric_desc" => $metric_name,
                        "Date_added" => $server_date,
                        "Time_added" => $server_time
                    ];
                    $insert2 = insert($evaluation_metrics, $data2);

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

            else if($_POST['action'] == 'edit_metric'){

                $metric_Id   = $_POST['e_metric_Id'];
                $header_Id   = $_POST['e_header_dd_val'];
                $metric_name = $_POST['e_metric_name'];

                $columns1= [ "Eval_Metric_Id" ];
                $where1  = [ 
                    "NOT Eval_Metric_Id" => $metric_Id,
                    "Eval_Header_Id" => $header_Id,
                    "Metric_desc" => $metric_name,
                    "Status" => 1
                ];
                $exists1 = exists($evaluation_metrics, $columns1, $where1);

                if($exists1 == 0){

                    $data2   = [
                        "Eval_Header_Id" => $header_Id,
                        "Metric_desc" => $metric_name
                    ];
                    $where2  = [ "Eval_Metric_Id" => $metric_Id ];
                    $update2 = update($evaluation_metrics, $data2, $where2);

                    if($update2 == 1){
                        
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

            else if($_POST['action'] == 'delete_metric'){

                $metric_Id = $_POST['metricid'];

                $data1   = [ "Status" => 0 ];
                $where1  = [ "Eval_Metric_Id" => $metric_Id ];
                $update1 = update($evaluation_metrics, $data1, $where1);

                if($update1 == 1){

                    $res_req = 1;
                }
                else{

                    $res_req = 2;
                }

                echo json_encode($res_req);
            }
        // =================== Metric Functions END ==============

        // =================== Scale Functions ===================
            else if($_POST['action'] == 'new_scale'){

                $scale_val  = $_POST['scale_val'];
                $dr_val     = $_POST['dr_name'];
                $qd_val     = $_POST['qd_name'];

                $columns1= [ "Metric_Val_Id" ];
                $where1  = [ 
                    "Metric_val_no" => $scale_val,
                    "Status" => 1
                ];
                $exists1 = exists($metric_values, $columns1, $where1);

                if($exists1 == 0){

                    $data2    = [
                        "Metric_val_no" => $scale_val,
                        "Metric_val_desc" => $dr_val,
                        "Metric_Q_desc" => $qd_val
                    ];
                    $insert2 = insert($metric_values, $data2);

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

            else if($_POST['action'] == 'edit_scale'){

                $scale_Id = $_POST['e_scale_Id'];
                $scale_no = $_POST['e_scale_val'];
                $dr_name  = $_POST['e_dr_name'];
                $qd_name  = $_POST['e_qd_name'];

                $columns1= [ "Metric_Val_Id" ];
                $where1  = [ 
                    "NOT Metric_Val_Id" => $scale_Id,
                    "Metric_val_no" => $scale_no,
                    "Status" => 1
                ];
                $exists1 = exists($metric_values, $columns1, $where1);

                if($exists1 == 0){

                    $data2   = [
                        "Metric_val_no" => $scale_no,
                        "Metric_val_desc" => $dr_name,
                        "Metric_Q_desc" => $qd_name
                    ];
                    $where2  = [ "Metric_Val_Id" => $scale_Id ];
                    $update2 = update($metric_values, $data2, $where2);

                    if($update2 == 1){
                        
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

            else if($_POST['action'] == 'delete_scale'){

                $metric_val_Id = $_POST['scaleid'];

                $data1   = [ "Status" => 0 ];
                $where1  = [ "Metric_Val_Id" => $metric_val_Id ];
                $update1 = update($metric_values, $data1, $where1);

                if($update1 == 1){

                    $res_req = 1;
                }
                else{

                    $res_req = 2;
                }

                echo json_encode($res_req);
            }
        // =================== Scale Functions END ===============

        // =================== Settings Functions ================
            else if($_POST['action'] == 'instructions_form'){

                $instruction_txt = $_POST['instructiontxt'];

                $data1   = [ "Sett_val" => $instruction_txt ];
                $where1  = [ "Sett_Id" => 1 ];
                $update1 = update($settings, $data1, $where1);

                if($update1 == 1){

                    $res_req = 1;
                }
                else{

                    $res_req = 2;
                }

                echo json_encode($res_req);
            }

            else if($_POST['action'] == 'popups_form'){

                $popup_txt = $_POST['popuptxt'];

                $data1   = [ "Sett_val" => $popup_txt ];
                $where1  = [ "Sett_Id" => 3 ];
                $update1 = update($settings, $data1, $where1);

                if($update1 == 1){

                    $res_req = 1;
                }
                else{

                    $res_req = 2;
                }

                echo json_encode($res_req);
            }


            else if($_POST['action'] == 'change_sett_value'){

                $sett_Id  = $_POST['settid'];
                $sett_val = $_POST['settval'];

                $data1   = [ "Sett_val" => $sett_val ];
                $where1  = [ "Sett_Id" => $sett_Id ];
                $update1 = update($settings, $data1, $where1);

                if($update1 == 1){

                    $res_req = 1;
                }
                else{

                    $res_req = 2;
                }

                echo json_encode($res_req);
            }


            else if($_POST['action'] == 'check_popup_enabled'){

                $query ="SELECT 
                            Sett_val 
                        FROM 
                            settings 
                        WHERE 
                            Sett_Id = 2 
                        LIMIT 1 ";

                $fetch = mysqli_query($con, $query);

                if($fetch){

                    $row = mysqli_fetch_assoc($fetch);

                    $sett_val = $row['Sett_val'];

                    $result = ($sett_val == 'Enable') ? 1 : 0;

                    echo json_encode($result);
                }
            }
        // =================== Settings Functions END ============
    }
?>