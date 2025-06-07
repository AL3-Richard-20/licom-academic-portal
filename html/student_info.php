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

        <link href="../assets/extra-libs/DataTables/DataTables-1.10.16/css/dataTables.bootstrap.min.css" rel="stylesheet">
        <link href="../assets/extra-libs/DataTables/DataTables-1.10.16/css/dataTables.bootstrap4.min.css" rel="stylesheet">
        <link href="../assets/extra-libs/DataTables/DataTables-1.10.16/css/jquery.dataTables.min.css" rel="stylesheet">

        <link href="../assets/libs/sweetalert2/dist/sweetalert2.min.css" rel="stylesheet">
        <link href="../assets/libs/toastr/build/toastr.min.css" rel="stylesheet">
        <link href="../assets/libs/select2/dist/css/select2.min.css" rel="stylesheet">


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
                                        <h4 class="font-weight-bold mb-4" id="user_fullname_txt">Full name</h4>
                                        <button 
                                            type="button" 
                                            class="btn btn-primary btn-sm font-weight-bold text-uppercase" 
                                            accstat="0"
                                            id="status_change_btn">
                                            <span id="status_change_txt">Set as Inactive</span>
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
                                            <tr>
                                                <td class="font-weight-bold">Status:</td>
                                                <td id="acc_stat_txt">---</td>
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
                                                    data-toggle="tooltip"
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
                                                    data-toggle="tooltip" 
                                                    onclick="editContactInfo()">
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

                                            <!-- ================ Edit Contact Information ============== -->
                                                <div class="modal fade" id="editInfo2Mod" tabindex="-1" role="dialog" aria-labelledby="editInfo1Mod" aria-hidden="true">

                                                    <div class="modal-dialog modal-lg" role="document">

                                                        <form method="POST" id="editInfo2Form">

                                                            <div class="modal-content">

                                                                <div class="modal-header">
                                                                    <h4 class="modal-title font-weight-bold text-uppercase">Edit Contact Information</h4>
                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">&times;</span>
                                                                    </button>
                                                                </div>

                                                                <div class="modal-body">

                                                                    <div class="row">
                                                                        <div class="col-lg-4">
                                                                            <div class="form-group">
                                                                                <p><b>Email: <small>(Optional)</small></b></p>
                                                                                <input 
                                                                                    type="email" 
                                                                                    class="form-control form-control-sm" 
                                                                                    name="e_email" 
                                                                                    id="e_email"
                                                                                    placeholder="Input email here">
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-lg-4">
                                                                            <div class="form-group">
                                                                                <p><b>Phone No.: <span class="text-danger">(*)</span></b></p>
                                                                                <input 
                                                                                    type="number" 
                                                                                    class="form-control form-control-sm" 
                                                                                    name="e_phoneno" 
                                                                                    id="e_phoneno"
                                                                                    placeholder="Input phone number here" 
                                                                                    required>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-lg-4">
                                                                            <div class="form-group">
                                                                                <p><b>Address: <span class="text-danger">(*)</span></b></p>
                                                                                <input 
                                                                                    type="text" 
                                                                                    class="form-control form-control-sm" 
                                                                                    name="e_address" 
                                                                                    id="e_address"
                                                                                    placeholder="Input address here" 
                                                                                    required>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <hr>

                                                                    <h6 class="font-weight-bold text-uppercase">Guardian Information</h6>

                                                                    <br>

                                                                    <div class="row">
                                                                        <div class="col-lg-4">
                                                                            <div class="form-group">
                                                                                <p><b>Guardian: <span class="text-danger">(*)</span></b></p>
                                                                                <input 
                                                                                    type="text" 
                                                                                    class="form-control form-control-sm" 
                                                                                    name="e_guardian" 
                                                                                    id="e_guardian" 
                                                                                    placeholder="Input guardian here"
                                                                                    required>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-lg-4">
                                                                            <div class="form-group">
                                                                                <p><b>Relationship: <span class="text-danger">(*)</span></b></p>
                                                                                <input 
                                                                                    type="text" 
                                                                                    class="form-control form-control-sm" 
                                                                                    name="e_relationship" 
                                                                                    id="e_relationship" 
                                                                                    placeholder="Input relationship here"
                                                                                    required>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-lg-4">
                                                                            <div class="form-group">
                                                                                <p><b>Occupation: <span class="text-danger">(*)</span></b></p>
                                                                                <input 
                                                                                    type="text" 
                                                                                    class="form-control form-control-sm" 
                                                                                    name="e_occupation" 
                                                                                    id="e_occupation" 
                                                                                    placeholder="Input occupation here"
                                                                                    required>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-lg-4">
                                                                            <div class="form-group">
                                                                                <p><b>Email: <small>(Optional)</small></b></p>
                                                                                <input 
                                                                                    type="email" 
                                                                                    class="form-control form-control-sm" 
                                                                                    name="e_g_email" 
                                                                                    id="e_g_email" 
                                                                                    placeholder="Input email here">
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-lg-4">
                                                                            <div class="form-group">
                                                                                <p><b>Phone No.: <span class="text-danger">(*)</span></b></p>
                                                                                <input 
                                                                                    type="number" 
                                                                                    class="form-control form-control-sm" 
                                                                                    name="e_g_phoneno" 
                                                                                    id="e_g_phoneno" 
                                                                                    placeholder="Input phone number here"
                                                                                    required>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-lg-4">
                                                                            <div class="form-group">
                                                                                <p><b>Address: <span class="text-danger">(*)</span></b></p>
                                                                                <input 
                                                                                    type="text" 
                                                                                    class="form-control form-control-sm" 
                                                                                    name="e_g_address" 
                                                                                    id="e_g_address" 
                                                                                    placeholder="Input address here"
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

                                        <div class="tab-pane container fade" id="menu3"><br>

                                            <!-- <div class="text-right">
                                                <button 
                                                    type="button" 
                                                    class="btn btn-outline-light" 
                                                    title="Edit Account Information"
                                                    data-toggle="tooltip" 
                                                    onclick="editAccountInfo()">
                                                    <span class="fa fa-pencil-alt text-primary"></span>
                                                </button>
                                            </div> -->

                                            <table class="table table-sm" style="width:50%;">
                                                <tbody>
                                                    <tr>
                                                        <td class="font-weight-bold">Username:</td>
                                                        <td id="username_txt">---</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="font-weight-bold">Password:</td>
                                                        <td id="password_txt">---</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>

                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>

                    <div class="card">

                        <div class="card-body">

                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs">
                                <li class="nav-item">
                                    <a class="nav-link font-weight-bold text-dark active" data-toggle="tab" href="#csmenu1">
                                        <span class="fa fa-calendar"></span>
                                        &nbspClass Schedules
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link font-weight-bold text-dark" data-toggle="tab" href="#sgmenu2">
                                        <span class="fa fa-file-alt"></span>
                                        &nbspGrades
                                    </a>
                                </li>
                                <!-- <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#menu2">Menu 2</a>
                                </li> -->
                            </ul>

                            <!-- Tab panes -->
                            <div class="tab-content">

                                <div class="tab-pane active" id="csmenu1"><br><br>

                                    <div class="row">

                                        <div class="col-lg-4">
                                            <div class="form-group">
                                                <p><b>Semester:</b></p>
                                                <select 
                                                    class="form-control form-control-sm" 
                                                    name="semester_dd" 
                                                    id="semester_dd">
                                                    <option value=""></option>
                                                    <?php
    
                                                        $query="SELECT 
                                                                    Semester_Id, 
                                                                    Semester_name 
                                                                FROM 
                                                                    semesters 
                                                                WHERE 
                                                                    Status = 1 ";
    
                                                        $fetch = mysqli_query($con, $query);
    
                                                        $count = mysqli_num_rows($fetch);
    
                                                        if($fetch && $count > 0){
    
                                                            while($row = mysqli_fetch_assoc($fetch)){
    
                                                                $semester_Id    = $row['Semester_Id'];
                                                                $semester_name  = $row['Semester_name'];
                                                                
                                                                echo "<option value='".$semester_Id."'>".$semester_name."</option>";
                                                            }
                                                        }
                                                    ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-4"></div>
                                        <div class="col-lg-4"></div>

                                    </div>

                                    <hr>

                                    <table class="table table-hover display nowrap" style="width:100%;" id="class_schedules_tbl">
                                        <thead class="table-bordered font-weight-bold text-uppercase">
                                            <tr>
                                                <th>Subject</th>
                                                <th>Day</th>
                                                <th>Time</th>
                                                <th>Room</th>
                                                <th>Instructor</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody></tbody>
                                    </table>
                                </div>
                                <div class="tab-pane fade" id="sgmenu2">...</div>
                                <!-- <div class="tab-pane container fade" id="menu2">...</div> -->
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

        <script src="../assets/extra-libs/DataTables/DataTables-1.10.16/js/dataTables.bootstrap.min.js"></script>
        <script src="../assets/extra-libs/DataTables/DataTables-1.10.16/js/dataTables.bootstrap4.min.js"></script>
        <script src="../assets/extra-libs/DataTables/DataTables-1.10.16/js/jquery.dataTables.min.js"></script>

        <script src="../assets/libs/sweetalert2/dist/sweetalert2.all.min.js"></script>
        <script src="../assets/libs/toastr/build/toastr.min.js"></script>
        <script src="../assets/libs/select2/dist/js/select2.min.js"></script>


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

                fetchAccountInfo()

                // ============ Select2 ===============
                    $('#semester_dd').select2({
                        "placeholder":"Select semester here",
                        "allowClear":true
                    })
                // ============ Select2 END ===========

                $('#semester_dd').on('change', function(){

                    $('#class_schedules_tbl').DataTable().destroy()

                    classSchedulesTbl()
                })

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

                $('#editInfo2Form').on('submit', function(ab){

                    ab.preventDefault()

                    var data = $('#editInfo2Form').serializeArray()

                    data.push(
                        { name:'action', value:'edit_contact_info' },
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

                                $('#editInfo2Mod').modal('hide')

                                toastr.success('You changed contact information', 'Successfully Updated')
                            }
                            else if(response == 2 || response == 3){

                                toastr.error('Something went wrong', 'Please contact your developer')
                            }
                        }
                    })
                })

                $('#status_change_btn').on('click', function(){

                    var status_val = $(this).attr('accstat')

                    var swal_title_action = (status_val == 1) ? 'ACTIVE' : 'INACTIVE'

                    swal({   
                        title: "SET AS "+ swal_title_action +"?",   
                        text: "This record will be set as "+ swal_title_action.toLowerCase(),   
                        type: "question",   
                        showCancelButton: true,   
                        confirmButtonColor: "#DD6B55",   
                        confirmButtonText: "YES",   
                        cancelButtonText: "NO",   
                        closeOnConfirm: false,   
                        closeOnCancel: false 
                    }).then((isConfirm) => {

                        if (isConfirm.value == true) {     

                            $.ajax({
                                type: "POST",
                                url: "models/UserModel.php",
                                data: {
                                    userid:student_Id,
                                    statusval:status_val,
                                    action:"set_as_inactive"
                                },
                                dataType: "JSON",
                                success: function (response) {
                                    
                                    if(response == 1){

                                        swal("SAVED SUCCESSFULLY", "This record is now inactive", "success")
                                        .then((isConfirm) => {

                                            if (isConfirm) { fetchStudentInfo() }
                                        }) 
                                    }
                                    else if(response == 2 || response == 3){

                                        toastr.error('Please contact your developer', 'Something went wrong')
                                    }
                                }
                            });  
                        }  
                    })
                })

                // ============== Delete Class Student ===============
                    $('#class_schedules_tbl').on('click', '.delete-class-stud_btn', function(){

                        var stud_class_Id = $(this).attr('studclassid')

                        swal({   
                            title: "DELETE STUDENT?",   
                            text: "This is cannot be reverted",   
                            type: "question",   
                            showCancelButton: true,   
                            confirmButtonColor: "#DD6B55",   
                            confirmButtonText: "YES",   
                            cancelButtonText: "NO",   
                            closeOnConfirm: false,   
                            closeOnCancel: false 
                        }).then((isConfirm) => {

                            if (isConfirm.value == true) {  

                                $.ajax({
                                    type: "POST",
                                    url: "models/ClassSchedulesModel.php",
                                    data: {
                                        studclassid:stud_class_Id,
                                        action:"delete_class_student"
                                    },
                                    dataType: "JSON",
                                    success: function (response) {
                                    
                                        if(response == 1){

                                            // $(this).DataTable().row('#scs_item_'+stud_class_Id).remove().draw()

                                            $('#class_schedules_tbl').DataTable().ajax.reload()

                                            toastr.success('You removed a student from a class', 'REMOVED SUCCESSFULLY')
                                        }
                                        else if(response == 2 || response == 3){

                                            toastr.error('Please contact your developer', 'SOMETHING WENT WRONG')
                                        }
                                    }
                                });
                            }
                        })
                    })
                // ============== Delete Class Student END ===========
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

                            $('#user_fullname_txt').html(value.FName+" "+value.LName)
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

                            var status_txt=''

                            if(value.Status == 1){

                                status_txt='<span class="badge badge-success font-weight-bold text-uppercase">Active</span>'

                                $('#status_change_btn').attr('accstat', 0)
                                $('#status_change_txt').html('Set as inactive')
                            }
                            else if(value.Status == 0){

                                status_txt='<span class="badge badge-danger font-weight-bold text-uppercase">Inactive</span>'

                                $('#status_change_btn').attr('accstat', 1)
                                $('#status_change_txt').html('Set as Active')
                            }

                            $('#acc_stat_txt').html(status_txt)
                        })
                    }
                })
            }

            function fetchAccountInfo(){

                $.ajax({
                    type: "POST",
                    url: "models/AccountsModel.php",
                    data: {
                        userid:student_Id,
                        action:"fetch_account_info"
                    },
                    dataType: "JSON",
                    success: function (response) {
                        
                        $('#username_txt').html(response.Username)
                        $('#password_txt').html(response.Password)
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

            function editContactInfo(){

                $('#editInfo2Mod').modal('show')

                var email_txt        = $('#email_txt').text()
                var phoneno_txt      = $('#phoneno_txt').text()
                var address_txt      = $('#address_txt').text()
                var guardian_txt     = $('#guardian_txt').text()
                var relationship_txt = $('#relationship_txt').text()
                var occupation_txt   = $('#occupation_txt').text()
                var g_email_txt      = $('#g_email_txt').text()
                var g_phoneno_txt    = $('#g_phoneno_txt').text()
                var g_address_txt    = $('#g_address_txt').text()

                $('#e_email').val(email_txt)
                $('#e_phoneno').val(phoneno_txt)
                $('#e_address').val(address_txt)
                $('#e_guardian').val(guardian_txt)
                $('#e_relationship').val(relationship_txt)
                $('#e_occupation').val(occupation_txt)
                $('#e_g_email').val(g_email_txt)
                $('#e_g_phoneno').val(g_phoneno_txt)
                $('#e_g_address').val(g_address_txt)
            }

            function classSchedulesTbl(){

                var semester_dd = $('#semester_dd').val()

                $('#class_schedules_tbl').DataTable({

                    "responsive":true,
                    "bInfo":false,
                    "aaSorting": [],
                    "columnDefs": [
                        { className: "font-weight-bold", "targets": [0, 4] },
                        // { orderable: false, targets: [5] }
                        // { "width": "20%", "targets": 4 }
                    ],
                    "ajax": {
                        'type':'POST',
                        'url':'models/ClassSchedulesModel.php',
                        'data':{
                            action:"fetch_user_class_schedules",
                            semesterid:semester_dd,
                            studid:student_Id
                        },
                    },
                    "columns": [
                        { "data": "SubjectName2" },
                        { "data": "SchedDay" },
                        { "data": "TimeSched" },
                        { "data": "RoomName" },
                        { "data": "InstructorName" },
                        { "data": "StudentClassId", 
                        
                            render : function ( data, type, row, meta) {

                                var output=''

                                output+='<button type="button" class="btn btn-outline-light text-danger btn-sm delete-class-stud_btn" studclassid="'+ data +'" title="Delete schedule">'
                                output+='<span class="fas fa-trash"></span>'
                                output+='</button>'

                                return output
                            }
                        },
                    ],
                })
            }

        </script>

    </body>

</html>