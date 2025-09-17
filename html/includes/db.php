<?php

    if(!isset($_SESSION)){

        session_start();

        header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
        header("Cache-Control: post-check=0, pre-check=0", false);
        header("Pragma: no-cache");

        jwt_token(3, 'al3-dev3');
    }

    // ============== Error Handlers ==================
    // error_reporting(E_ALL);
    // ============== Error Handlers END ==============


    $appname = "LICOM Academic Portal";
    $author  = "AL3 Web Solutions";
    $website = "";


    // ============== Get Request Headers =============
        $headers = apache_request_headers();
    // ============== Get Request Headers END =========


    // ================== TIMEZONE ====================
        date_default_timezone_set("Asia/Manila");

        $server_date    = date('Y-m-d', strtotime("now"));
        $server_time    = date('h:i:s', strtotime("now"));

        $server_now     = date('Y-m-d H:i:s', strtotime("now"));
    // ================== TIMEZONE END ================


    // ================== DATABASE =====================
        $db_host = "localhost";

        if($_SERVER['HTTP_HOST'] == 'localhost'){

            $db_user = "root";
            $db_pass = "";
            $db_name = "licom";
        }
        else{

            $db_user = "db_user";
            $db_pass = "db_password";
            $db_name = "db_name";
        }

        $db['db_host'] = $db_host;
        $db['db_user'] = $db_user;
        $db['db_pass'] = $db_pass;
        $db['db_name'] = $db_name;
        
        foreach($db as $key => $value){
            
            define(strtoupper($key), $value);
        }
        
        $con = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);
    // ================== DATABASE END =================\


    // ================== APP INFO ==================
        function fetchAppInfo($sett_Id){

            global $con;

            $querya1 ="SELECT 
                            Sett_val 
                        FROM 
                            settings 
                        WHERE 
                            Sett_Id = '".$sett_Id."'
                            AND Status = 1 
                        LIMIT 1 ";
    
            $fetcha1    = mysqli_query($con, $querya1);

            $rowa1      = mysqli_fetch_assoc($fetcha1);

            $sett_val   = $rowa1['Sett_val'];

            return array(
                'SettVal' => $sett_val
            );
        }

        // ======= APP NAME ==========
            $app_info = fetchAppInfo(4); 
            $appname  = $app_info['SettVal'];
        // ======= APP NAME END ======

        // ======= APP ICON ==========
            $app_info2 = fetchAppInfo(5);
            $app_icon  = $app_info2['SettVal'];
        // ======= APP ICON END ======

        // ======= APP LOGIN BACKGROUND ==========
            $app_info3      = fetchAppInfo(6);
            $app_login_img  = "../assets/images/".$app_info3['SettVal'];
        // ======= APP LOGIN BACKGROUND END ======

    // ================== APP INFO END ==============


    // ================== JWT (TOKEN) =====================
        function jwt_token($val, $usrname){

            global $server_date;

            // Create token header as a JSON string
            $header = json_encode(['typ' => 'JWT', 'alg' => 'HS256']);

            // Create token payload as a JSON string
            $payload = json_encode([
                                    'user_id' => $val,
                                    'username' => $usrname,
                                    'date_added' => $server_date
                                ]);

            // Encode Header to Base64Url String
            $base64UrlHeader = str_replace(['+', '/', '='], ['-', '_', ''], base64_encode($header));

            // Encode Payload to Base64Url String
            $base64UrlPayload = str_replace(['+', '/', '='], ['-', '_', ''], base64_encode($payload));

            // Create Signature Hash
            $signature = hash_hmac('sha256', $base64UrlHeader . "." . $base64UrlPayload, 'abC123!', true);

            // Encode Signature to Base64Url String
            $base64UrlSignature = str_replace(['+', '/', '='], ['-', '_', ''], base64_encode($signature));

            // Create JWT
            $jwt = $base64UrlHeader . "." . $base64UrlPayload . "." . $base64UrlSignature;

            $_SESSION['req_token'] = $jwt;

            return $jwt;
        }


        function tokenVerify(){

            global $headers;

            $matching_result = '';

            if(isset($headers['X-Requested-From'])){

                if($_SESSION['req_token'] == $headers['X-Requested-From']){
    
                    $matching_result = true;
                }
                else{
    
                    $matching_result = false;
                }
            }

            else{

                $matching_result = false;
            }


            return $matching_result;
        }
    // ================== JWT (TOKEN) END =================


    // ==================== URL Encryption =======================
        function level2Encrypt($value){

            $encrypt = urlencode(base64_encode($value));
            
            return $encrypt;

            // Can be used for SESSIONs and URL parameters
        }

        function level2Decrypt($value){

            $decrypt = base64_decode(urldecode($value));
            
            return $decrypt;

            // Can be used for SESSIONs and URL parameters
        }
    // ==================== URL Encryption END ===================


    // ==================== CRUD Operations ==================
        function fetch($fetch){

            global $con;

            $fetch->execute();
            $meta = $fetch->result_metadata();

            while ($field = $meta->fetch_field()){

                $params[] = &$row[$field->name];
            }

            call_user_func_array(array($fetch, 'bind_result'), $params);

            while($fetch->fetch()){

                foreach($row as $key => $val){
        
                    $c[$key] = $val;
                }
        
                $results[] = $c;
            }

            $count = $fetch->num_rows();

            $results_arr = array(
                'Results' => $results,
                'Total' => $count
            );

            return $results_arr;
        }


        function insert($table, $data){

            global $con;
        
            $keys           = implode(", ", array_keys($data));
            $placeholders   = rtrim(str_repeat("?, ", count($data)), ", ");
            $values         = array_values($data);
        
            $sql = "INSERT INTO $table ($keys) VALUES ($placeholders)";
        
            $stmt = $con->prepare($sql);
        
            $types = '';

            $bindParams = [];

            foreach ($values as $value) {

                if (is_int($value)) {
                    $types .= 'i';
                } 
                else if (is_float($value)) {
                    $types .= 'd';
                } 
                else {
                    $types .= 's';
                }

                $bindParams[] = $value;
            }

            $stmt->bind_param($types, ...$bindParams);
        
            if ($stmt->execute()) {

				$last_insert_Id = $stmt->insert_id;

				$results_arr = array(
					'Result' => 1,
					'LastId' => $last_insert_Id
				);

				return $results_arr;

			} 
            else {

                die("Error in executing statement: " . mysqli_error($con));
            }
        }


        function update($table, $data, $where){

            global $con;

            $setValues = '';

            $i = 0;

            $totalColumns = count($data);

            foreach ($data as $column => $value) {

                $setValues .= "`$column` = ?";

                if (++$i !== $totalColumns) {
                    $setValues .= ', ';
                }
            }

            $whereClause = '';

            $i = 0;

            $totalWhereColumns = count($where);

            foreach ($where as $column => $value) {

                $whereClause .= "`$column` = ?";

                if (++$i !== $totalWhereColumns) {
                    
                    $whereClause .= ' AND ';
                }
            }

            $sql = "UPDATE `$table` SET $setValues WHERE $whereClause";

            $stmt = $con->prepare($sql);

            if ($stmt === false) {
                die("Error in preparing statement: " . mysqli_error($con));
            }

            // Combine data for binding parameters
            $bindTypes = str_repeat('s', $totalColumns + $totalWhereColumns);
            $bindValues = array_merge(array_values($data), array_values($where));

            // Bind parameters dynamically
            $stmt->bind_param($bindTypes, ...$bindValues);

            // Execute the statement
            $stmt->execute();

            // Check for errors
            if (mysqli_stmt_errno($stmt) !== 0) {
                die("Error in execution: " . mysqli_stmt_error($stmt));
            }

            // Get affected rows
            $affectedRows = mysqli_stmt_affected_rows($stmt);

            return 1;
        }


        function exists($table, $columns, $where){

            global $con;

            $bindResults = array();

            // ============= SELECT =================
                $dataColumns = '';

                $totalDataColumns = count($columns);

                $j = 0;

                foreach($columns as $datacolumn){

                    $dataColumns .= $datacolumn;

                    if(++$j !== $totalDataColumns){

                        $dataColumns .=', ';
                    }

                    array_push($bindResults, '$'.$datacolumn);
                }
            // ============= SELECT END =============

            // ============= WHERE ==================
                $whereClause = '';

                $i = 0;

                $totalWhereColumns = count($where);

                foreach ($where as $column => $value) {

                    $whereClause .= "$column = ?";

                    if (++$i !== $totalWhereColumns) {
                        
                        $whereClause .= ' AND ';
                    }
                }
            // ============= WHERE END ==============

            $sql = "SELECT $dataColumns FROM `$table` WHERE $whereClause";

            $stmt = $con->prepare($sql);

            // ============== Verify bind_params ================
                $types = '';

                $bindParams = [];

                foreach (array_values($where) as $where_value) {

                    if (is_int($where_value)) {
                        $types .= 'i';
                    } 
                    else if (is_float($where_value)) {
                        $types .= 'd';
                    } 
                    else {
                        $types .= 's';
                    }

                    $bindParams[] = $where_value;
                }
            // ============== Verify bind_params END ============

            // Bind parameters dynamically
            $stmt->bind_param($types, ...$bindParams);

            $stmt->execute();
            $stmt->store_result();

            $count = $stmt->num_rows();

            $results = '';

            if($count > 0){

                $stmt->bind_result(...$bindResults);
    
                $stmt->fetch();

                $results = array_combine($columns, $bindResults);
            }
            else{

                $results = 0;
            }

            return $results;
            
        }


        function get($table, $columns = ['*'], $where = [], $orderBy = null) {

            global $con;

            $columnString = implode(',', $columns);

            $sql = "SELECT $columnString FROM $table";

            if (!empty($where)) {

                $sql .= " WHERE ";

                $conditions = [];

                foreach ($where as $key => $value) {
                    $conditions[] = "$key = ?";
                }

                $sql .= implode(' AND ', $conditions);
            }

            if ($orderBy) {
                $sql .= " ORDER BY $orderBy";
            }

            $stmt = $con->prepare($sql);

            if (!$stmt) {
                die("Error in preparing statement: " . $con->error);
            }

            if (!empty($where)) {
                $types = str_repeat('s', count($where));
                $params = array_values($where);
                $stmt->bind_param($types, ...$params);
            }

            $stmt->execute();
            $result = $stmt->get_result();

            $rows = [];

            while ($row = $result->fetch_assoc()) {
                $rows[] = $row;
            }

            return $rows;
        }


        function hardDelete($table, $where){

            global $con;

            $whereClause = '';

            $i = 0;

            $totalWhereColumns = count($where);

            foreach ($where as $column => $value) {

                $whereClause .= "`$column` = ?";

                if (++$i !== $totalWhereColumns) {
                    
                    $whereClause .= ' AND ';
                }
            }

            $sql = "DELETE FROM `$table` WHERE $whereClause";

            $stmt = $con->prepare($sql);

            if ($stmt === false) {
                die("Error in preparing statement: " . mysqli_error($con));
            }

            // Combine data for binding parameters
            $bindTypes = str_repeat('s', $totalWhereColumns);
            $bindValues = array_values($where);

            // Bind parameters dynamically
            $stmt->bind_param($bindTypes, ...$bindValues);

            // Execute the statement
            $stmt->execute();

            // Check for errors
            if (mysqli_stmt_errno($stmt) !== 0) {
                die("Error in execution: " . mysqli_stmt_error($stmt));
            }

            return 1;
        }

        // insertOrUpdate()
    // ==================== CRUD Operations END ==============


    // ==================== Session Storage ==================
        function createSession($session_data){

            $result_arr = [];

            foreach($session_data as $key => $data){

                $_SESSION[$key] = $data;

                if($_SESSION[$key] != '' && $_SESSION[$key] != NULL){

                    $result_arr[] = 1; 
                }
                else{

                    $result_arr[] = 0;
                }
            }

            $result = (!in_array(0, $result_arr)) ? true : false;

            return $result_arr;
            // return print_r($result);
        }
    // ==================== Session Storage END ==============


    // ==================== Others ===========================
        function confirmQuery($string){

            global $con;

            if(!$string){

                die("ERROR" . mysqli_error($con));
            }
        }


        function escape($string){

            global $con;

            return mysqli_real_escape_string($con, trim($string));

        }


        function safeString($string){

            $string = htmlspecialchars($string, ENT_QUOTES, 'UTF-8');

            return stripslashes($string);
        }


        function issetVerify($req_data){

            $result =[];

            $datasets = array();

            foreach($req_data as $data){

                $dataset = $_POST[$data];

                array_push($datasets, $dataset);
            }

            if(isset($datasets)){

                foreach($datasets as $element){

                    $result[] = $element;

                }

            }
            else{

                $result = false;
            }

            return $result;

        }


        function dateFormat($date){

            return date('M d, Y', strtotime($date));
        }

        
        function timeFormat($time){

            return date('h:i A', strtotime($time));
        }

        
        function stringEllip($string, $limit){

            $result = (strlen($string) > $limit) ? substr($string, 0, $limit)."..." : $string;

            return $result;
        }
    // ==================== Others END =======================

?>