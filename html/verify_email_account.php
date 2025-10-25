<?php

    include "includes/db.php";
    include "models/Tables.php";


    header("Access-Control-Allow-Origin: *");
    header("Content-Type: application/json; charset=UTF-8");
    header("Access-Control-Allow-Methods: POST");
    header("Access-Control-Max-Age: 3600");
    header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");


    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;

    require '../assets/extra-libs/PHPMailer-master/src/Exception.php';
    require '../assets/extra-libs/PHPMailer-master/src/PHPMailer.php';
    require '../assets/extra-libs/PHPMailer-master/src/SMTP.php';


    if ($_SERVER['REQUEST_METHOD'] === 'POST') {

        $data = json_decode(file_get_contents("php://input"));

        // =========== POST Fields =================
            $user_Id       = $data->userid;
            $email_address = $data->emailaddr;
            $first_name    = $data->firstname;
            $last_name     = $data->lastname;
        // =========== POST Fields END =============

        $hash_value = level2Encrypt($user_Id."_".$server_now);

        $mail = new PHPMailer(true);

        try {

            // Server settings
            $mail->isSMTP();
            $mail->Host       = 'smtp.gmail.com';
            $mail->SMTPAuth   = true;
            $mail->Username   = 's4mplet3st@gmail.com';
            $mail->Password   = 'ssarwedxtbrnxkxz';
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
            $mail->Port       = 587;

            // Recipients
            $mail->setFrom('s4mplet3st@gmail.com', $appname);
            $mail->addAddress($email_address);

            // Content
            $mail->isHTML(true);
            $mail->Subject = 'Verify Your Email Address';
            $mail->Body    = 'Hi '.$first_name.' '.$last_name.', <br><br> 
                            Please verify your email to activate your account by clicking the link below. <br><br>
                            <a href="'.$_SERVER['HTTP_HOST'].'/licom-academic-portal/html/activate_account.php?userid='.$user_Id.'&hashval='.$hash_value.'">Click here to proceed.</a>';

            if($mail->send()){

                $data1      = [
                    "User_Id" => $user_Id,
                    "Verif_code" => $hash_value,
                    "Verif_type" => 'Activation',
                    "Date_added" => $server_date,
                    "Time_added" => $server_time
                ];
                $insert1    = insert($email_verification, $data1);
            }

            // echo '✅ Email has been sent successfully!';
        } 

        catch (Exception $e) {

            // echo "❌ Message could not be sent. Mailer Error: {$mail->ErrorInfo}";

            echo false;
        }
    }
    else {

        http_response_code(405);
        echo json_encode(array("message" => "Method not allowed"));
    }
?>