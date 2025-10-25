<?php

    include "../includes/db.php";
    include "../models/Tables.php";

    include "../helpers/Logs.php";
    include "../helpers/Semester.php";

    if(isset($_POST['action'])){

        if($_POST['action'] == 'login'){

            $username = $_POST['username'];
            $password = $_POST['password'];

            $columns1 = [ "Level_Id", "User_Id", "Email_verified" ];
            $where1   = [ 
                "Username" => $username,
                "Password" => $password,
                "Status" => 1 
            ];
            $exists1  = exists($accounts, $columns1, $where1);

            if($exists1 == 0){

                $res_req = 4;
                $email_addr = '';
            }
            else{   

                $level_Id       = $exists1['Level_Id'];
                $user_Id        = $exists1['User_Id'];
                $email_verified = $exists1['Email_verified'];

                // ============ Fetch Information ==============      
                    $query2 = "SELECT 
                                    FName, 
                                    MName, 
                                    LName,
                                    Email 
                                FROM 
                                    users 
                                WHERE 
                                    User_Id = ? 
                                    AND Status = 1 ";

                    $fetch2 = $con->prepare($query2);
                    $fetch2->bind_param('i', $user_Id);
                    $fetch2_results = fetch($fetch2);

                    $first_name  = $fetch2_results['Results'][0]['FName'];
                    $middle_name = $fetch2_results['Results'][0]['MName'];
                    $last_name   = $fetch2_results['Results'][0]['LName'];
                    $email_addr  = $fetch2_results['Results'][0]['Email'];
                // ============ Fetch Information END ==========

                if($email_verified == 1){
    
                    $_SESSION["licom_usr_Id"]    = $user_Id;
                    $_SESSION["licom_usr_fname"] = $first_name;
                    $_SESSION["licom_usr_mname"] = $middle_name;
                    $_SESSION["licom_usr_lname"] = $last_name;
                    $_SESSION["licom_usr_email"] = $email_addr;
                    $_SESSION["licom_usr_level"] = $level_Id;
    
                    // ========== Fetch Level Info ===========
                        $query3 = "SELECT Level_name FROM levels WHERE Level_Id = '".$_SESSION["licom_usr_level"]."' LIMIT 1";
                        $fetch3 = mysqli_query($con, $query3);
                        $row3   = mysqli_fetch_assoc($fetch3);
    
                        $level_name = $row3['Level_name'];
                    // ========== Fetch Level Info END =======
    
                    $_SESSION["licom_usr_levelname"] = $level_name;
    
                    if($_SESSION["licom_usr_level"] == 3){
    
                        // ========= Fetch Student Year and Level ============
                            $fetch_year_course = fetchStudCourseYearLevel($user_Id);
    
                            $year_name     = $fetch_year_course['YearName'];
                            $semester_name = $fetch_year_course['Semester'];
    
                            $course_code   = $fetch_year_course['CourseCode'];
                            $course_name   = $fetch_year_course['CourseName'];
    
    
                            $_SESSION["licom_year_name"]   = $year_name;
                            $_SESSION["licom_sem_name"]    = $semester_name;
    
                            $_SESSION["licom_course_code"] = $course_code;
                            $_SESSION["licom_course_name"] = $course_name;
                        // ========= Fetch Student Year and Level END ========
                    }
    
                    // ============= Insert to Activity Logs =============
                        $sess_user_Id   = $_SESSION["licom_usr_Id"];
                        $log_detail     = 'Log In Account';
                        
                        insertToActivityLogs($log_detail, $sess_user_Id);
                    // ============= Insert to Activity Logs END =========
    
                    $res_req = 1;
                }
                else{
                    
                    $api_url = $_SERVER['HTTP_HOST'].'/licom-academic-portal/html/verify_email_account.php';

                    // Payload data
                    $data = array(
                        "userid" => $user_Id,
                        "emailaddr" => $email_addr,
                        "firstname" => $first_name,
                        "lastname" => $last_name
                    );

                    $json_data = json_encode($data);

                    $ch = curl_init();

                    curl_setopt($ch, CURLOPT_URL, $api_url);
                    curl_setopt($ch, CURLOPT_POST, 1);
                    curl_setopt($ch, CURLOPT_POSTFIELDS, $json_data);
                    curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
                    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

                    $response = curl_exec($ch);

                    if ($response === false) {

                        $error = curl_error($ch);

                        echo json_encode($error);
                    } 
                    else { 

                        $res_req = 5;
                    }

                    curl_close($ch);
                }
            }

            echo json_encode(
                array(
                    'Res' => $res_req,
                    'Email' => $email_addr
                )
            );
        } 
    }

?>