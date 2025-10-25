<?php

    include "includes/db.php";
    include "models/Tables.php";

    if(isset($_GET['userid'], $_GET['hashval'])){

        $user_Id = $_GET['userid'];
        $hashval = $_GET['hashval'];

        // ======== Get Credentials ==============
            $query ="SELECT 
                        Username, 
                        Password 
                    FROM 
                        accounts 
                    WHERE 
                        User_Id = '".$user_Id."' 
                        AND Status = 1 
                    LIMIT 1 ";

            $fetch = mysqli_query($con, $query);

            $row = mysqli_fetch_assoc($fetch);

            $username = $row['Username'];
            $password = $row['Password'];
        // ======== Get Credentials END ==========

        // ======== Check and update email verification ============
            $columns1 = [ "Email_Verif_Id" ];
            $where1   = [
                "User_Id" => $user_Id,
                "Verif_code" => $hashval,
                "Verif_type" => "Activation",
                "Status" => 1
            ];
            $exists1  = exists($email_verification, $columns1, $where1);

            if($exists1 == 0){

                $data2    = [ "Status" => 1 ];
                $where2   = [ 
                    "User_Id" => $user_Id,
                    "Verif_code" => $hashval,
                    "Status" => 0
                ];
                $update2  = update($email_verification, $data2, $where2);

                $data3    = [ "Email_verified" => 1 ];
                $where3   = [ "User_Id" => $user_Id ];
                $update3  = update($accounts, $data3, $where3);

                $swal_title = 'ACCOUNT ACTIVATED';
            }
            else{

                $swal_title = 'ALREADY VERIFIED';
            }
        // ======== Check and update email verification END ========
    }
    else{

        echo "<script>location.href='authpage.php';</script>";
    }
?>

<!DOCTYPE html>

<html dir="ltr" lang="en">

    <head>

        <meta charset="utf-8">

        <meta http-equiv="X-UA-Compatible" content="IE=edge">


        <!-- Tell the browser to be responsive to screen width -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">


        <!-- Favicon icon -->
        <!-- <link rel="icon" type="image/png" sizes="16x16" href="../assets/images/favicon.png"> -->
        <link rel="icon" type="image/png" sizes="16x16" href="../assets/images/<?= $app_icon ?>">


        <title><?= $appname ?></title>


        <link href="../assets/libs/sweetalert2/dist/sweetalert2.min.css" rel="stylesheet">
        <link href="../assets/libs/toastr/build/toastr.min.css" rel="stylesheet">
        <link href="../assets/libs/select2/dist/css/select2.min.css" rel="stylesheet">


        <!-- Custom CSS -->
        <link href="../dist/css/style.min.css" rel="stylesheet">
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    </head>

    <body>

        <!-- ============================================================== -->
        <!-- Preloader - style you can find in spinners.css -->
        <!-- ============================================================== -->
        <div class="preloader">
            <div class="lds-ripple">
                <div class="lds-pos"></div>
                <div class="lds-pos"></div>
            </div>
        </div>

        <!-- ============================================================== -->
        <!-- Main wrapper - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <div id="main-wrapper">

            <div class="row d-flex align-items-center justify-center h-100">

                <div class="col-lg-4"></div>
                <div class="col-lg-4 text-center">
                    
                    <h4>Hello</h4>
                </div>
                <div class="col-lg-4"></div>

            </div>

        </div>
        <!-- ============================================================== -->
        <!-- End Wrapper -->
        <!-- ============================================================== -->


        
        <!-- ============================================================== -->
        <!-- All Jquery -->
        <!-- ============================================================== -->
        <script src="../assets/libs/jquery/dist/jquery.min.js"></script>


        <!-- Bootstrap tether Core JavaScript -->
        <script src="../assets/libs/popper.js/dist/umd/popper.min.js"></script>
        <script src="../assets/libs/bootstrap/dist/js/bootstrap.min.js"></script>


        <!-- apps -->
        <script src="../dist/js/app.min.js"></script>
        <script src="../dist/js/app.init.js"></script>
        <script src="../dist/js/app-style-switcher.js"></script>

        <script src="../assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
        <script src="../assets/extra-libs/sparkline/sparkline.js"></script>

        <script src="../assets/libs/sweetalert2/dist/sweetalert2.min.js"></script>
        <script src="../assets/libs/toastr/build/toastr.min.js"></script>
        <script src="../assets/libs/select2/dist/js/select2.min.js"></script>

        <!--Wave Effects -->
        <script src="../dist/js/waves.js"></script>


        <!--Menu sidebar -->
        <script src="../dist/js/sidebarmenu.js"></script>


        <!--Custom JavaScript -->
        <script src="../dist/js/custom.min.js"></script>

        <script>

            $(document).ready(function () {

                $.ajax({
                    type: "POST",
                    url: "models/AuthModel.php",
                    data: {
                        username:"<?= $username ?>",
                        password:"<?= $password ?>",
                        action:"login"
                    },
                    dataType: "JSON",
                    success: function (response) {
                        
                        if(response.Res == 1){

                            Swal.fire({ 
                               title: '<?= $swal_title ?>', 
                               text: 'Redirecting...', 
                               type: 'success', 
                               showCancelButton: false, 
                               confirmButtonColor: '#3085d6', 
                               cancelButtonColor: '#d33', 
                               confirmButtonText: 'OKAY', 
                            })
            
                            setTimeout(function(){
                                
                                location.href='index.php';
            
                            }, 2000)
                        }
                    }
                });
            })

        </script>

    </body>

</html>