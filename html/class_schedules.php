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
                        <h4 class="page-title">Class Schedules</h4>
                        <div class="d-flex align-items-center">

                        </div>
                    </div>
                    <div class="col-7 align-self-center">
                        <div class="d-flex no-block justify-content-end align-items-center">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item">
                                        <a href="#">Class Schedules</a>
                                    </li>
                                    <li class="breadcrumb-item active" aria-current="page">Records</li>
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

                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->

                <div class="row">

                    <div class="col-lg-6">
                        <button 
                            type="button" 
                            class="btn btn-secondary btn-sm text-uppercase font-weight-bold">
                            <span class="fa fa-calendar"></span>
                            &nbspFilter By
                        </button>
                    </div>
                    <div class="col-lg-6 text-right">
                        <button 
                            type="button" 
                            class="btn btn-success btn-sm text-uppercase font-weight-bold" 
                            data-toggle="modal" 
                            data-target="#newClassMod">
                            <span class="fa fa-plus"></span>
                            Add New
                        </button>
                    </div>

                </div>

                <hr>

                <div class="d-flex flex-row" style="max-width:100%; overflow-x:auto;">

                    <div style="width:200px;">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="font-weight-bold text-uppercase text-center">Monday</h5>
                            </div>
                            <div class="bg-info p-2 mt-1 mb-1 text-white" style="cursor:pointer;">
                                <span class="font-weight-bold"><h5>Cyber Security 101</h5></span>
                                <span>08:30 AM - 09:30 AM</span>
                            </div>
                            <div class="bg-info p-2 mt-1 mb-1 text-white" style="cursor:pointer;">
                                <span class="font-weight-bold"><h5>Cyber Security 101</h5></span>
                                <span>08:30 AM - 09:30 AM</span>
                            </div>
                            <div class="bg-info p-2 mt-1 mb-1 text-white" style="cursor:pointer;">
                                <span class="font-weight-bold"><h5>Cyber Security 101</h5></span>
                                <span>08:30 AM - 09:30 AM</span>
                            </div>
                            <div class="bg-info p-2 mt-1 mb-1 text-white" style="cursor:pointer;">
                                <span class="font-weight-bold"><h5>Cyber Security 101</h5></span>
                                <span>08:30 AM - 09:30 AM</span>
                            </div>
                        </div>
                    </div>
                    <div style="width:200px;">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="font-weight-bold text-uppercase text-center">Tuesday</h5>
                            </div>
                            <div class="bg-info p-2 mt-1 mb-1 text-white" style="cursor:pointer;">
                                <span class="font-weight-bold"><h5>Cyber Security 101</h5></span>
                                <span>08:30 AM - 09:30 AM</span>
                            </div>
                            <div class="bg-info p-2 mt-1 mb-1 text-white" style="cursor:pointer;">
                                <span class="font-weight-bold"><h5>Cyber Security 101</h5></span>
                                <span>08:30 AM - 09:30 AM</span>
                            </div>
                        </div>
                    </div>
                    <div style="width:200px;">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="font-weight-bold text-uppercase text-center">Wednesday</h5>
                            </div>
                        </div>
                    </div>
                    <div style="width:200px;">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="font-weight-bold text-uppercase text-center">Thursday</h5>
                            </div>
                        </div>
                    </div>
                    <div style="width:200px;">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="font-weight-bold text-uppercase text-center">Friday</h5>
                            </div>
                        </div>
                    </div>
                    <div style="width:200px;">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="font-weight-bold text-uppercase text-center">Saturday</h5>
                            </div>
                        </div>
                    </div>
                    <div style="width:200px;">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="font-weight-bold text-uppercase text-center">Sunday</h5>
                            </div>
                        </div>
                    </div>

                </div>

                <!-- ================ Add New Class Modal ============== -->
                    <div class="modal fade" id="newClassMod" style="padding-right: 17px;">

                        <div class="modal-dialog modal-lg" role="document" style="max-width:1140px;">

                            <div class="modal-content">

                                <form method="POST" id="newClassForm">

                                    <div class="modal-header">
                                        <h4 class="modal-title font-weight-bold text-uppercase">
                                            <span class="fa fa-plus"></span>
                                            &nbspAdd New Class Schedule
                                        </h4>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>

                                    <div class="modal-body">

                                        <div class="row">

                                            <div class="col-lg-3">
                                                <div class="form-group">
                                                    <p><b>Semester: <span class="text-danger">(*)</span></b></p>
                                                    <select 
                                                        class="form-control form-control-sm"
                                                        name="semester_Id" 
                                                        id="semester_Id" 
                                                        required>
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

                                            <div class="col-lg-3">
                                                <div class="form-group">
                                                    <p><b>Room: <span class="text-danger">(*)</span></b></p>
                                                    <select 
                                                        class="form-control form-control-sm"
                                                        name="room_Id" 
                                                        id="room_Id" 
                                                        required>
                                                        <option value=""></option>
                                                        <?php

                                                            $query="SELECT 
                                                                        Room_Id, 
                                                                        Room_name,
                                                                        Room_details
                                                                    FROM 
                                                                        rooms 
                                                                    WHERE 
                                                                        Status = 1 ";

                                                            $fetch = mysqli_query($con, $query);

                                                            $count = mysqli_num_rows($fetch);

                                                            if($fetch && $count > 0){

                                                                while($row = mysqli_fetch_assoc($fetch)){

                                                                    $room_Id        = $row['Room_Id'];
                                                                    $room_name      = $row['Room_name'];
                                                                    $room_details   = $row['Room_details'];
                                                                    
                                                                    echo "<option value='".$room_Id."'>".$room_name." | ".$room_details."</option>";
                                                                }
                                                            }
                                                        ?>
                                                    </select>
                                                </div>
                                            </div>

                                        </div>

                                        <hr>

                                        <h5>Schedule Details:</h5><br>

                                        <div class="row">

                                            <div class="col-lg-4">
                                                <p><b>Day: <span class="text-danger">(*)</span></b></p>
                                                <select 
                                                    class="form-control form-control-sm" 
                                                    name="day_Id" 
                                                    id="day_Id" 
                                                    required>
                                                    <option value="">Select day here</option>
                                                    <option value="1">Monday</option>
                                                    <option value="2">Tuesday</option>
                                                    <option value="3">Wednesday</option>
                                                    <option value="4">Thursday</option>
                                                    <option value="5">Friday</option>
                                                    <option value="6">Saturday</option>
                                                    <option value="7">Sunday</option>
                                                </select>
                                            </div>
                                            <div class="col-lg-4">
                                                <p><b>Time Start: <span class="text-danger">(*)</span></b></p>
                                                <input 
                                                    type="time" 
                                                    class="form-control form-control-sm" 
                                                    required>
                                            </div>
                                            <div class="col-lg-4">
                                                <p><b>Time End: <span class="text-danger">(*)</span></b></p>
                                                <input 
                                                    type="time" 
                                                    class="form-control form-control-sm" 
                                                    required>
                                            </div>

                                        </div>

                                        <hr>

                                        <h5>Subject Details:</h5><br>

                                        <div class="row">

                                        <div class="col-lg-3">
                                                <div class="form-group">
                                                    <p><b>Course: <span class="text-danger">(*)</span></b></p>
                                                    <select 
                                                        class="form-control form-control-sm"
                                                        name="subject_Id" 
                                                        id="subject_Id" 
                                                        required>
                                                        <option value=""></option>
                                                        <?php

                                                            $query="SELECT 
                                                                        Course_Id, 
                                                                        Course_name, 
                                                                        Course_code 
                                                                    FROM 
                                                                        courses 
                                                                    WHERE 
                                                                        Status = 1 ";

                                                            $fetch = mysqli_query($con, $query);

                                                            $count = mysqli_num_rows($fetch);

                                                            if($fetch && $count > 0){

                                                                while($row = mysqli_fetch_assoc($fetch)){

                                                                    $course_Id    = $row['Course_Id'];
                                                                    $course_name  = $row['Course_name'];
                                                                    $course_code  = $row['Course_code'];
                                                                    
                                                                    echo "<option value='".$course_Id."'>".$course_code." | ".$course_name."</option>";
                                                                }
                                                            }
                                                        ?>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="col-lg-3">
                                                <div class="form-group">
                                                    <p><b>Subject: <span class="text-danger">(*)</span></b></p>
                                                    <select 
                                                        class="form-control form-control-sm"
                                                        name="subject_Id" 
                                                        id="subject_Id" 
                                                        required>
                                                        <option value=""></option>
                                                        <?php

                                                            $query="SELECT 
                                                                        Subject_Id, 
                                                                        Subject_name, 
                                                                        Subject_code 
                                                                    FROM 
                                                                        subjects 
                                                                    WHERE 
                                                                        Status = 1 ";

                                                            $fetch = mysqli_query($con, $query);

                                                            $count = mysqli_num_rows($fetch);

                                                            if($fetch && $count > 0){

                                                                while($row = mysqli_fetch_assoc($fetch)){

                                                                    $subject_Id    = $row['Subject_Id'];
                                                                    $subject_name  = $row['Subject_name'];
                                                                    $subject_code  = $row['Subject_code'];
                                                                    
                                                                    echo "<option value='".$subject_Id."'>".$subject_name." | ".$subject_code."</option>";
                                                                }
                                                            }
                                                        ?>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="col-lg-3">
                                                <div class="form-group">
                                                    <p><b>Instructor: <span class="text-danger">(*)</span></b></p>
                                                    <select 
                                                        class="form-control form-control-sm"
                                                        name="instructor_Id" 
                                                        id="instructor_Id" 
                                                        required>
                                                    </select>
                                                </div>
                                            </div>

                                        </div>

                                    </div>

                                    <div class="modal-footer">
                                        <button 
                                            type="submit" 
                                            class="btn btn-success font-weight-bold text-uppercase">
                                            <span class="fa fa-check"></span>
                                            Submit
                                        </button>
                                        <button 
                                            type="button" 
                                            class="btn btn-outline-light text-dark font-weight-bold text-uppercase" 
                                            data-dismiss="modal">
                                            Close
                                        </button>
                                    </div>

                                </form>

                            </div>

                        </div>

                    </div>
                <!-- ================ Add New Class Modal END ========== -->

                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->

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



    <!-- <div class="chat-windows"></div> -->



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


</body>

</html>