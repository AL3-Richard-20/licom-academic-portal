<?php

    include "includes/db.php";

    if(isset($_GET['studid'])){

        $student_Id = $_GET['studid'];

        if(empty($student_Id)){

            echo "<script>location.href='index.php';</script>";
        }
    }
    else{

        echo "<script>location.href='index.php';</script>";
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
        <link rel="icon" type="image/png" sizes="16x16" href="../assets/images/favicon.png">
        <!-- <link rel="stylesheet" href="../dist/css/icons/font-awesome/css/fontawesome-all.min.css">
        <link rel="stylesheet" href="../dist/css/icons/font-awesome/css/fa-regular.min.css">
        <link rel="stylesheet" href="../dist/css/icons/font-awesome/css/fa-solid.min.css">
        <link rel="stylesheet" href="../dist/css/icons/font-awesome/css/fontawesome.min.css"> -->


        <title><?= $appname ?></title>


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
                                    onclick="location.href='students.php';"></span>
                                Student Information
                            </h4>
                            <div class="d-flex align-items-center">

                            </div>
                        </div>
                        <div class="col-7 align-self-center">
                            <div class="d-flex no-block justify-content-end align-items-center">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item">
                                            <a href="#">Students</a>
                                        </li>
                                        <li class="breadcrumb-item active" aria-current="page">Information</li>
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
                <div class="container-fluid">

                    <div class="card">

                        <div class="card-body">

                            <input type="hidden" name="student_Id_val" id="student_Id_val" value="<?= $student_Id ?>">

                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="text-center">
                                        <h1 style="font-size:100px;"><span class="fa fa-user"></span></h1>
                                        <h4 class="font-weight-bold mb-4">Full name</h4>
                                        <button 
                                            type="button" 
                                            class="btn btn-primary btn-sm font-weight-bold text-uppercase">
                                            Set as Inactive
                                        </button>
                                    </div>
                                    <table class="table table-sm mt-4">
                                        <tbody>
                                            <tr>
                                                <td class="font-weight-bold">Date Created:</td>
                                                <td id="date_created_txt">---</td>
                                            </tr>
                                            <tr>
                                                <td class="font-weight-bold">Last Updated:</td>
                                                <td id="last_update_txt">---</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="col-lg-8">
                                    <!-- Nav tabs -->
                                    <ul class="nav nav-tabs">
                                        <li class="nav-item">
                                            <a 
                                                class="nav-link font-weight-bold text-dark active" 
                                                data-toggle="tab" 
                                                href="#menu1">
                                                <span class="fa fa-user"></span>
                                                &nbspPersonal Information
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a 
                                                class="nav-link font-weight-bold text-dark" 
                                                data-toggle="tab" 
                                                href="#menu2">
                                                <span class="fa fa-phone"></span>
                                                &nbspContact Information
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a 
                                                class="nav-link font-weight-bold text-dark" 
                                                data-toggle="tab" 
                                                href="#menu3">
                                                <span class="fa fa-cogs"></span>
                                                &nbspAccount
                                            </a>
                                        </li>
                                    </ul>

                                    <!-- Tab panes -->
                                    <div class="tab-content">

                                        <div class="tab-pane container active" id="menu1"><br>

                                            <div class="text-right">
                                                <button 
                                                    type="button" 
                                                    class="btn btn-outline-light" 
                                                    title="Edit Information" 
                                                    onclick="editPersonalInfo()">
                                                    <span class="fa fa-pencil-alt text-primary"></span>
                                                </button>
                                            </div>

                                            <table class="table table-sm" style="width:50%;">
                                                <tbody>
                                                    <tr>
                                                        <td class="font-weight-bold">First Name:</td>
                                                        <td id="fname_txt">---</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="font-weight-bold">Middle Name:</td>
                                                        <td id="mname_txt">---</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="font-weight-bold">Last Name:</td>
                                                        <td id="lname_txt">---</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="font-weight-bold">Suffix:</td>
                                                        <td id="suffix_txt">---</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="font-weight-bold">Birthdate:</td>
                                                        <td id="bdate_txt">---</td>
                                                        <input type="hidden" id="bdate_txt_val">
                                                    </tr>
                                                    <tr>
                                                        <td class="font-weight-bold">Civil Status:</td>
                                                        <td id="civil_stat_txt">---</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="font-weight-bold">Sex:</td>
                                                        <td id="sex_txt">---</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="font-weight-bold">Nationality:</td>
                                                        <td id="nationality_txt">---</td>
                                                    </tr>
                                                </tbody>
                                            </table>

                                            <!-- ================ Edit Personal Information ============== -->
                                                <div class="modal fade" id="editInfo1Mod" tabindex="-1" role="dialog" aria-labelledby="editInfo1Mod" aria-hidden="true">

                                                    <div class="modal-dialog modal-lg" role="document">

                                                        <form method="POST" id="editInfo1Form">

                                                            <div class="modal-content">

                                                                <div class="modal-header">
                                                                    <h4 class="modal-title font-weight-bold text-uppercase">Edit Personal Information</h4>
                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">&times;</span>
                                                                    </button>
                                                                </div>

                                                                <div class="modal-body">

                                                                    <div class="row">
                                                                        <div class="col-lg-3">
                                                                            <div class="form-group">
                                                                                <p><b>First Name: <span class="text-danger">(*)</span></b></p>
                                                                                <input 
                                                                                    type="text" 
                                                                                    class="form-control form-control-sm" 
                                                                                    name="e_fname" 
                                                                                    id="e_fname"
                                                                                    placeholder="Input first name here" 
                                                                                    required>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-lg-3">
                                                                            <div class="form-group">
                                                                                <p><b>Middle Name: <small>(Optional)</small></b></p>
                                                                                <input 
                                                                                    type="text" 
                                                                                    class="form-control form-control-sm" 
                                                                                    name="e_mname" 
                                                                                    id="e_mname"
                                                                                    placeholder="Input middle name here">
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-lg-3">
                                                                            <div class="form-group">
                                                                                <p><b>Last Name: <span class="text-danger">(*)</span></b></p>
                                                                                <input 
                                                                                    type="text" 
                                                                                    class="form-control form-control-sm" 
                                                                                    name="e_lname" 
                                                                                    id="e_lname"
                                                                                    placeholder="Input last name here" 
                                                                                    required>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-lg-3">
                                                                            <div class="form-group">
                                                                                <p><b>Suffix: <small>(Optional)</small></b></p>
                                                                                <input 
                                                                                    type="text" 
                                                                                    class="form-control form-control-sm" 
                                                                                    name="e_suffix" 
                                                                                    id="e_suffix"
                                                                                    placeholder="Input suffix here (e.g. Jr. III)">
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <div class="row">
                                                                        <div class="col-lg-4">
                                                                            <div class="form-group">
                                                                                <p><b>Birthdate: <span class="text-danger">(*)</span></b></p>
                                                                                <input 
                                                                                    type="date" 
                                                                                    class="form-control form-control-sm" 
                                                                                    name="e_bdate" 
                                                                                    id="e_bdate" 
                                                                                    required>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-lg-4">
                                                                            <div class="form-group">
                                                                                <p><b>Civil Status: <span class="text-danger">(*)</span></b></p>
                                                                                <select 
                                                                                    class="form-control form-control-sm" 
                                                                                    name="e_civil_status" 
                                                                                    id="e_civil_status">
                                                                                    <option value="" selected disabled>Select civil status here</option>
                                                                                    <option value="Single">Single</option>
                                                                                    <option value="Married">Married</option>
                                                                                    <option value="Widowed">Widowed</option>
                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-lg-4">
                                                                            <div class="form-group">
                                                                                <p><b>Sex: <span class="text-danger">(*)</span></b></p>
                                                                                <select 
                                                                                    class="form-control form-control-sm" 
                                                                                    name="e_sex" 
                                                                                    id="e_sex">
                                                                                    <option value="" selected disabled>Select sex here</option>
                                                                                    <option value="Male">Male</option>
                                                                                    <option value="Female">Female</option>
                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-lg-4">
                                                                            <div class="form-group">
                                                                                <p><b>Nationality: <span class="text-danger">(*)</span></b></p>
                                                                                <input 
                                                                                    type="text" 
                                                                                    class="form-control form-control-sm" 
                                                                                    name="e_nationality" 
                                                                                    id="e_nationality" 
                                                                                    placeholder="Input nationality here"
                                                                                    required>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                </div>

                                                                <div class="modal-footer">
                                                                    <button 
                                                                        type="submit" 
                                                                        class="btn btn-success font-weight-bold text-uppercase">
                                                                        <span class="fa fa-check"></span>
                                                                        Save
                                                                    </button>
                                                                    <button 
                                                                        type="button" 
                                                                        class="btn btn-outline-light text-dark font-weight-bold text-uppercase" 
                                                                        data-dismiss="modal">
                                                                        Close
                                                                    </button>
                                                                </div>

                                                            </div>

                                                        </form>

                                                    </div>

                                                </div>
                                            <!-- ================ Edit Personal Information END ========== -->

                                        </div>

                                        <div class="tab-pane container fade" id="menu2"><br>

                                            <div class="text-right">
                                                <button 
                                                    type="button" 
                                                    class="btn btn-outline-light" 
                                                    title="Edit Contact Information"
                                                    data-toggle="modal" 
                                                    data-target="#editInfo1Mod">
                                                    <span class="fa fa-pencil-alt text-primary"></span>
                                                </button>
                                            </div>

                                            <table class="table table-sm" style="width:50%;">
                                                <tbody>
                                                    <tr>
                                                        <td class="font-weight-bold">Email:</td>
                                                        <td id="email_txt">---</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="font-weight-bold">Phone No.:</td>
                                                        <td id="phoneno_txt">---</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="font-weight-bold">Address:</td>
                                                        <td id="address_txt">---</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="font-weight-bold">Guardian:</td>
                                                        <td id="guardian_txt">---</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="font-weight-bold">Relationship:</td>
                                                        <td id="relationship_txt">---</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="font-weight-bold">Occupation:</td>
                                                        <td id="occupation_txt">---</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="font-weight-bold">Email:</td>
                                                        <td id="g_email_txt">---</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="font-weight-bold">Contact No.:</td>
                                                        <td id="g_phoneno_txt">---</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="font-weight-bold">Address:</td>
                                                        <td id="g_address_txt">---</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>

                                        <div class="tab-pane container fade" id="menu3"><br>
                                            <table class="table table-sm" style="width:50%;">
                                                <tbody>
                                                    <tr>
                                                        <td class="font-weight-bold">Username:</td>
                                                        <td>---</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="font-weight-bold">Password:</td>
                                                        <td>---</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>

                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>

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


        <!--Wave Effects -->
        <script src="../dist/js/waves.js"></script>


        <!--Menu sidebar -->
        <script src="../dist/js/sidebarmenu.js"></script>


        <!--Custom JavaScript -->
        <script src="../dist/js/custom.min.js"></script>

        <script>

            var student_Id = $('#student_Id_val').val()

            $(document).ready(function () {
                
                fetchStudentInfo()

                $('#editInfo1Form').on('submit', function(aa){

                    aa.preventDefault()

                    var data = $('#editInfo1Form').serializeArray()

                    data.push(
                        { name:'action', value:'edit_personal_info' },
                        { name:'userid', value:student_Id }
                    )

                    $.ajax({
                        type: "POST",
                        url: "models/UserModel.php",
                        data: data,
                        dataType: "JSON",
                        success: function (response) {
                            
                            if(response == 1){

                                fetchStudentInfo()

                                $('#editInfo1Mod').modal('hide')

                                toastr.success('You changed student information', 'Successfully Updated')
                            }
                            else if(response == 2 || response == 3){

                                toastr.error('Something went wrong', 'Please contact your developer')
                            }
                        }
                    });
                })
            })

            function fetchStudentInfo(){

                $.ajax({
                    type: "POST",
                    url: "models/UserModel.php",
                    data: {
                        userid:student_Id,
                        action:"fetch_user_info"
                    },
                    dataType: "JSON",
                    success: function (response) {

                        $.each(response, function(key, value){

                            $('#date_created_txt').html(value.DateAdded+' | '+value.TimeAdded)
                            $('#last_update_txt').html(value.LastUpdate)
                            
                            $('#fname_txt').html(value.FName)
                            $('#mname_txt').html(value.MName)
                            $('#lname_txt').html(value.LName)
                            $('#suffix_txt').html(value.Suffix)
                            $('#bdate_txt').html(value.BDate)
                            $('#bdate_txt_val').val(value.BDate2)
                            $('#civil_stat_txt').html(value.CivilStat)
                            $('#sex_txt').html(value.Sex)
                            $('#nationality_txt').html(value.Nationality)

                            $('#email_txt').html(value.Email)
                            $('#phoneno_txt').html(value.PhoneNo)
                            $('#address_txt').html(value.Address)
                            $('#guardian_txt').html(value.Guardian)
                            $('#relationship_txt').html(value.Relation)
                            $('#occupation_txt').html(value.Occupation)
                            $('#g_email_txt').html(value.GEmail)
                            $('#g_phoneno_txt').html(value.GPhoneNo)
                            $('#g_address_txt').html(value.GAddress)
                        })
                    }
                })
            }

            function editPersonalInfo(){

                $('#editInfo1Mod').modal('show')

                var fname       = $('#fname_txt').text()
                var mname       = $('#mname_txt').text()
                var lname       = $('#lname_txt').text()
                var suffix      = $('#suffix_txt').text()
                var bdate       = $('#bdate_txt_val').val()
                var civil_stat  = $('#civil_stat_txt').text()
                var sex         = $('#sex_txt').text()
                var nationality = $('#nationality_txt').text()

                $('#e_fname').val(fname)
                $('#e_mname').val(mname)
                $('#e_lname').val(lname)
                $('#e_suffix').val(suffix)
                $('#e_bdate').val(bdate)
                $('#e_civil_status').val(civil_stat)
                $('#e_sex').val(sex)
                $('#e_nationality').val(nationality)
            }

        </script>

    </body>

</html>