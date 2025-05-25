<?php

    include "includes/db.php";
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
        <link rel="icon" type="image/png" sizes="16x16" href="../assets/images/favicon.png">


        <title><?= $appname ?></title>


        <!-- Custom CSS -->
        <link href="../assets/libs/chartist/dist/chartist.min.css" rel="stylesheet">
        <link href="../assets/extra-libs/c3/c3.min.css" rel="stylesheet">
        <link href="../assets/libs/morris.js/morris.css" rel="stylesheet">


        <link href="../assets/libs/sweetalert2/dist/sweetalert2.min.css" rel="stylesheet">
        <link href="../assets/libs/toastr/build/toastr.min.css" rel="stylesheet">


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



            <!-- ============================================================== -->
            <!-- Topbar header - style you can find in pages.scss -->
            <!-- ============================================================== -->
            <?php include "includes/top_nav.php"; ?>
            <!-- ============================================================== -->
            <!-- End Topbar header -->
            <!-- ============================================================== -->



            <!-- ============================================================== -->
            <!-- Left Sidebar - style you can find in sidebar.scss  -->
            <!-- ============================================================== -->
            <?php include "includes/left_sidebar.php"; ?>
            <!-- ============================================================== -->
            <!-- End Left Sidebar - style you can find in sidebar.scss  -->
            <!-- ============================================================== -->



            <!-- ============================================================== -->
            <!-- Page wrapper  -->
            <!-- ============================================================== -->

            <div class="page-wrapper">



                <!-- ============================================================== -->
                <!-- Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <div class="page-breadcrumb">
                    <div class="row">
                        <div class="col-5 align-self-center">
                            <h4 class="page-title font-weight-bold text-uppercase">
                                <span 
                                    class="fa fa-arrow-left" 
                                    onclick="location.href='instructors.php';"></span>
                                Add New Instructor
                            </h4>
                            <div class="d-flex align-items-center"></div>
                        </div>
                        <div class="col-7 align-self-center">
                            <div class="d-flex no-block justify-content-end align-items-center">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item">
                                            <a href="#">Instructors</a>
                                        </li>
                                        <li class="breadcrumb-item active" aria-current="page">Add New Instructor</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->



                <!-- ============================================================== -->
                <!-- Container fluid  -->
                <!-- ============================================================== -->
                <div class="container-fluid"><br>


                    <div class="row">

                        <div class="col-lg-4">
                            <span><b class="text-danger">(*)</b> - Required Fields</span>
                        </div>
                        <div class="col-lg-4"></div>
                        <div class="col-lg-4"></div>

                    </div>

                    <br>

                    <form method="POST" id="newInstructorForm">
                      
                        <div class="row">
                            
                            <div class="col-lg-6">

                                <div class="card">

                                    <div class="card-body">

                                        <h5 class="font-weight-bold">Personal Information</h5><br>

                                        <div class="form-group">
                                            <p><b>First Name: <span class="text-danger">(*)</span></b></p>
                                            <input 
                                                type="text" 
                                                class="form-control form-control-sm" 
                                                name="fname"
                                                id="fname"
                                                placeholder="Input first name here" 
                                                autocomplete="off" 
                                                required>
                                        </div>
                                        <div class="form-group">
                                            <p><b>Middle Name:</b></p>
                                            <input 
                                                type="text" 
                                                class="form-control form-control-sm" 
                                                name="mname"
                                                id="mname"
                                                placeholder="Input middle name here" 
                                                autocomplete="off">
                                        </div>
                                        <div class="form-group">
                                            <p><b>Last Name: <span class="text-danger">(*)</span></b></p>
                                            <input 
                                                type="text" 
                                                class="form-control form-control-sm" 
                                                name="lname"
                                                id="lname"
                                                placeholder="Input last name here" 
                                                autocomplete="off" 
                                                required>
                                        </div>
                                        <div class="form-group">
                                            <p><b>Email:</b></p>
                                            <input 
                                                type="email" 
                                                class="form-control form-control-sm" 
                                                name="email"
                                                id="email"
                                                placeholder="Input email here" 
                                                autocomplete="off">
                                        </div>
                                        <div class="form-group">
                                            <p><b>Date of Birth: <span class="text-danger">(*)</span></b></p>
                                            <input 
                                                type="date" 
                                                class="form-control form-control-sm" 
                                                name="bdate"
                                                id="bdate"
                                                required>
                                        </div>
                                        <div class="form-group">
                                            <p><b>Civil Status: <span class="text-danger">(*)</span></b></p>
                                            <select 
                                                class="form-control" 
                                                name="civil_stat" 
                                                id="civil_stat" 
                                                required>
                                                <option value="" selected disabled>Select civil status here</option>
                                                <option value="Single">Single</option>
                                                <option value="Married">Married</option>
                                                <option value="Widowed">Widowed</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <p><b>Sex: <span class="text-danger">(*)</span></b></p>
                                            <select 
                                                class="form-control" 
                                                name="sex" 
                                                id="sex" 
                                                required>
                                                <option value="" selected disabled>Select sex here</option>
                                                <option value="Male">Male</option>
                                                <option value="Female">Female</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <p><b>Nationality: <span class="text-danger">(*)</span></b></p>
                                            <input 
                                                type="text" 
                                                class="form-control form-control-sm" 
                                                name="nationality"
                                                id="nationality"
                                                placeholder="Input nationality here" 
                                                autocomplete="off" 
                                                required>
                                        </div>
                                        <div class="form-group">
                                            <p><b>Phone Number: <span class="text-danger">(*)</span></b></p>
                                            <input 
                                                type="number" 
                                                class="form-control form-control-sm" 
                                                name="phone_no"
                                                id="phone_no"
                                                placeholder="Input phone number here" 
                                                autocomplete="off" 
                                                required>
                                        </div>
                                        <div class="form-group">
                                            <p><b>Address: <small class="text-muted">(Street, Municipality, Province, ZIP Code)</small> <span class="text-danger">(*)</span></b></p>
                                            <input 
                                                type="text" 
                                                class="form-control form-control-sm" 
                                                name="address"
                                                id="address"
                                                placeholder="Input address here" 
                                                autocomplete="off" 
                                                required>
                                        </div>
                                    </div>

                                </div>

                            </div>

                            <div class="col-lg-6">

                                <div class="card">

                                    <div class="card-body">

                                        <h5 class="font-weight-bold">Parent / Guardian Information</h5><br>
            
                                        <div class="form-group">
                                            <p><b>First Name: <span class="text-danger">(*)</span></b></p>
                                            <input 
                                                type="text" 
                                                class="form-control form-control-sm" 
                                                name="g_fname"
                                                id="g_fname"
                                                placeholder="Input first name here" 
                                                autocomplete="off" 
                                                required>
                                        </div>
                                        <!-- <div class="form-group">
                                            <p><b>Middle Name:</b></p>
                                            <input 
                                                type="text" 
                                                class="form-control form-control-sm" 
                                                name="g_mname"
                                                id="g_mname"
                                                placeholder="Input middle name here">
                                        </div> -->
                                        <div class="form-group">
                                            <p><b>Last Name: <span class="text-danger">(*)</span></b></p>
                                            <input 
                                                type="text" 
                                                class="form-control form-control-sm" 
                                                name="g_lname"
                                                id="g_lname"
                                                placeholder="Input last name here" 
                                                autocomplete="off" 
                                                required>
                                        </div>
                                        <div class="form-group">
                                            <p><b>Email:</b></p>
                                            <input 
                                                type="email" 
                                                class="form-control form-control-sm" 
                                                name="g_email"
                                                id="g_email"
                                                placeholder="Input email here" 
                                                autocomplete="off">
                                        </div>
                                        <div class="form-group">
                                            <p><b>Relationship: <span class="text-danger">(*)</span></b></p>
                                            <input 
                                                type="text" 
                                                class="form-control form-control-sm" 
                                                name="relationship"
                                                id="relationship"
                                                placeholder="Input relationship here" 
                                                autocomplete="off" 
                                                required>
                                        </div>
                                        <div class="form-group">
                                            <p><b>Phone Number: <span class="text-danger">(*)</span></b></p>
                                            <input 
                                                type="number" 
                                                class="form-control form-control-sm" 
                                                name="g_phone_no"
                                                id="g_phone_no"
                                                placeholder="Input phone number here" 
                                                required>
                                        </div>
                                        <div class="form-group">
                                            <p><b>Occupation: <span class="text-danger">(*)</span></b></p>
                                            <input 
                                                type="text" 
                                                class="form-control form-control-sm" 
                                                name="occupation"
                                                id="occupation"
                                                placeholder="Input occupation here" 
                                                autocomplete="off" 
                                                required>
                                        </div>
                                        <div class="form-group">
                                            <p><b>Address: <small class="text-muted">(Street, Municipality, Province, ZIP Code)</small> <span class="text-danger">(*)</span></b></p>
                                            <input 
                                                type="text" 
                                                class="form-control form-control-sm" 
                                                name="g_address"
                                                id="g_address"
                                                placeholder="Input address here" 
                                                autocomplete="off" 
                                                required>
                                        </div>

                                    </div>

                                </div>

                            </div>

                        </div>

                        <div class="text-right">
                            <button
                                type="submit" 
                                class="btn btn-success font-weight-bold text-uppercase">
                                <span class="fa fa-check"></span>
                                Submit
                            </button>
                            <button
                                type="button" 
                                class="btn btn-outline-light text-dark font-weight-bold text-uppercase" 
                                onclick="location.href='students.php';">
                                Discard
                            </button>
                        </div>

                    </form>

                </div>
                <!-- ============================================================== -->
                <!-- End Container fluid  -->
                <!-- ============================================================== -->



                <!-- ============================================================== -->
                <!-- footer -->
                <!-- ============================================================== -->
                <?php include "includes/footer.php"; ?>
                <!-- ============================================================== -->
                <!-- End footer -->
                <!-- ============================================================== -->



            </div>
            <!-- ============================================================== -->
            <!-- End Page wrapper  -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Wrapper -->
        <!-- ============================================================== -->



        <!-- ============================================================== -->
        <!-- customizer Panel -->
        <!-- ============================================================== -->
        <?php //include "includes/customizer.php"; ?>
        <!-- ============================================================== -->
        <!-- End customizer Panel -->
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


        <!-- slimscrollbar scrollbar JavaScript -->
        <script src="../assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
        <script src="../assets/extra-libs/sparkline/sparkline.js"></script>


        <script src="../assets/libs/sweetalert2/dist/sweetalert2.min.js"></script>
        <script src="../assets/libs/toastr/build/toastr.min.js"></script>


        <!--Wave Effects -->
        <script src="../dist/js/waves.js"></script>


        <!--Menu sidebar -->
        <script src="../dist/js/sidebarmenu.js"></script>


        <!--Custom JavaScript -->
        <script src="../dist/js/custom.min.js"></script>

        <script>

            $(document).ready(function () {
                
                $('#newInstructorForm').on('submit', function(aa){

                    aa.preventDefault()

                    var data = $(this).serializeArray()

                    data.push(
                        { name:'action', value:'new_instructor'}
                    )

                    $.ajax({
                        type: "POST",
                        url: "models/InstructorModel.php",
                        data: data,
                        dataType: "JSON",
                        success: function (response) {

                            if(response == 1){

                                swal("SAVED SUCCESSFULLY", "You added a new instructor", "success")
                                .then((isConfirm) => {

                                    if (isConfirm) { location.href='instructors.php' }
                                })
                            }
                            else if(response == 2 || response == 3){

                                toastr.error('Please contact your developer', 'Something went wrong')
                            }
                            else if(response == 2 || response == 3){

                               toastr.info('Please try other record', 'Already Exist')
                            }
                        }
                    })
                })
            })

        </script>

    </body>

</html>