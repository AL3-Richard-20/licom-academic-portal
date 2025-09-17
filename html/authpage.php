<?php
    
    include "includes/db.php";

    if(isset($_SESSION["licom_usr_level"])){

        echo "<script>location.href='index.php';</script>";
    }
?>

<!DOCTYPE html>

<html dir="ltr">

    <head>

        <meta charset="utf-8">

        <meta http-equiv="X-UA-Compatible" content="IE=edge">


        <!-- Tell the browser to be responsive to screen width -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">


        <!-- Favicon icon -->
        <link rel="icon" type="image/png" sizes="16x16" href="../assets/images/<?= $app_icon ?>">

        <link href="../assets/libs/sweetalert2/dist/sweetalert2.min.css" rel="stylesheet">


        <title><?= $appname ?></title>


        <!-- Custom CSS -->
        <link href="../dist/css/style.min.css" rel="stylesheet">

        <style>

            .blurred-overlay {
                background-color: rgba(255, 255, 255, 0.3); /* Semi-transparent white */
                padding: 20px;
                border-radius: 10px;
                backdrop-filter: blur(8px); /* Apply the blur effect */
                -webkit-backdrop-filter: blur(8px); /* For Safari compatibility */
            }

        </style>

    </head>

<body>


    <div class="main-wrapper">


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
        <!-- Preloader - style you can find in spinners.css -->
        <!-- ============================================================== -->



        <!-- ============================================================== -->
        <!-- Login box.scss -->
        <!-- ============================================================== -->
        <div class="auth-wrapper d-flex no-block justify-content-center align-items-center blurred-overlay" 
            style="
                background-image:url('<?php echo $app_login_img; ?>'); 
                background-repeat:no-repeat; 
                background-size:cover;">

            <div class="auth-box">

                <div id="loginform">

                    <div class="logo">
                        <span class="db"><img src="../assets/images/<?= $app_icon ?>" alt="logo" /></span><br><br>
                        <h5 class="font-medium m-b-20"><?= $appname ?></h5>
                    </div>

                    <!-- Form -->
                    <div class="row">

                        <div class="col-12">

                            <form class="form-horizontal m-t-20" method="POST" id="loginForm">

                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1"><i class="fa fa-user"></i></span>
                                    </div>
                                    <input 
                                        type="text" 
                                        class="form-control form-control-lg" 
                                        placeholder="Username" 
                                        aria-label="Username" 
                                        name="username" 
                                        id="username"
                                        aria-describedby="basic-addon1" 
                                        Required>
                                </div>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon2"><i class="fa fa-lock"></i></span>
                                    </div>
                                    <input 
                                        type="password" 
                                        class="form-control form-control-lg" 
                                        placeholder="Password" 
                                        aria-label="Password" 
                                        name="password" 
                                        id="password"
                                        aria-describedby="basic-addon1" 
                                        Required>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-12">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="customCheck1">
                                            <label class="custom-control-label" for="customCheck1">Remember me</label>
                                            <!-- <a href="javascript:void(0)" id="to-recover" class="text-dark float-right"><i class="fa fa-lock m-r-5"></i> Forgot pwd?</a> -->
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group text-center">
                                    <div class="col-xs-12 p-b-20">
                                        <button class="btn btn-block btn-lg btn-info" type="submit">Log In</button>
                                    </div>
                                </div>
                                <!-- <div class="row">
                                    <div class="col-xs-12 col-sm-12 col-md-12 m-t-10 text-center">
                                        <div class="social">
                                            <a href="javascript:void(0)" class="btn  btn-facebook" data-toggle="tooltip" title="" data-original-title="Login with Facebook"> <i aria-hidden="true" class="fab  fa-facebook"></i> </a>
                                            <a href="javascript:void(0)" class="btn btn-googleplus" data-toggle="tooltip" title="" data-original-title="Login with Google"> <i aria-hidden="true" class="fab  fa-google-plus"></i> </a>
                                        </div>
                                    </div>
                                </div> -->
                                <!-- <div class="form-group m-b-0 m-t-10">
                                    <div class="col-sm-12 text-center">
                                        Don't have an account? <a href="authentication-register1.html" class="text-info m-l-5"><b>Sign Up</b></a>
                                    </div>
                                </div> -->
                            </form>
                        </div>
                    </div>
                </div>

                <!-- <div id="recoverform">
                    <div class="logo">
                        <span class="db"><img src="../../assets/images/logo-icon.png" alt="logo" /></span>
                        <h5 class="font-medium m-b-20">Recover Password</h5>
                        <span>Enter your Email and instructions will be sent to you!</span>
                    </div>
                    <div class="row m-t-20">
                        <form class="col-12" action="index.html">
                            <div class="form-group row">
                                <div class="col-12">
                                    <input class="form-control form-control-lg" type="email" required="" placeholder="Username">
                                </div>
                            </div>
                            <div class="row m-t-20">
                                <div class="col-12">
                                    <button class="btn btn-block btn-lg btn-danger" type="submit" name="action">Reset</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div> -->
                
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- Login box.scss -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper scss in scafholding.scss -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper scss in scafholding.scss -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Right Sidebar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Right Sidebar -->
        <!-- ============================================================== -->
    </div>



    <!-- ============================================================== -->
    <!-- All Required js -->
    <!-- ============================================================== -->
    <script src="../assets/libs/jquery/dist/jquery.min.js"></script>


    <!-- Bootstrap tether Core JavaScript -->
    <script src="../assets/libs/popper.js/dist/umd/popper.min.js"></script>
    <script src="../assets/libs/bootstrap/dist/js/bootstrap.min.js"></script>

    <script src="../assets/libs/sweetalert2/dist/sweetalert2.min.js"></script>



    <!-- ============================================================== -->
    <!-- This page plugin js -->
    <!-- ============================================================== -->
    <script>
        
        $('[data-toggle="tooltip"]').tooltip();

        $(".preloader").fadeOut();

        window.addEventListener("pageshow", function (event) {
            if (event.persisted || (window.performance && window.performance.navigation.type === 2)) {
                // Force reload if page was loaded from cache
                window.location.replace('authpage.php')
            }
        });

        $(document).ready(function () {
            
            $('#loginForm').on('submit', function(aa){

                aa.preventDefault()

                var data = $(this).serializeArray()

                data.push(
                    { name:'action', value:'login' }
                )   

                $.ajax({
                    type: "POST",
                    url: "models/AuthModel.php",
                    data: data,
                    dataType: "JSON",
                    success: function (response) {
                        
                        if(response == 1){

                            swal({
                                title:"LOGGED IN SUCCESSFULLY",
                                html:"Redirecting...<br><br>",
                                type:"success",
                                showConfirmButton: false
                            })

                            setTimeout(() => {
                                
                                location.reload()

                            }, 2000);
                        }
                        else if(response == 4){

                            swal({
                                title:"INVALID USERNAME OR PASSWORD",
                                html:"Please try again.<br>",
                                type:"error",
                                showConfirmButton: true
                            })
                        }
                        else{

                            toastr.error('Please contact your developer', 'Something went wrong')
                        }
                    }
                })
            })
        })

    </script>


</body>

</html>