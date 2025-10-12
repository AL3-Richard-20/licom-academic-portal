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
        <!-- <link rel="icon" type="image/png" sizes="16x16" href="../assets/images/favicon.png"> -->
        <link rel="icon" type="image/png" sizes="16x16" href="../assets/images/<?= $app_icon ?>">

        <link href="../assets/extra-libs/DataTables/DataTables-1.10.16/css/dataTables.bootstrap.min.css" rel="stylesheet">
        <link href="../assets/extra-libs/DataTables/DataTables-1.10.16/css/dataTables.bootstrap4.min.css" rel="stylesheet">
        <link href="../assets/extra-libs/DataTables/DataTables-1.10.16/css/jquery.dataTables.min.css" rel="stylesheet">


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
                        <h4 class="page-title font-weight-bold text-uppercase">Class Schedule</h4>
                        <div class="d-flex align-items-center">

                        </div>
                    </div>
                    <div class="col-7 align-self-center">
                        <div class="d-flex no-block justify-content-end align-items-center">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item">
                                        <a href="#">Class Schedule</a>
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

                    <div class="col-lg-3">
                        <p><b>Semester: <span class="text-danger">(*)</span></b></p>
                        <select 
                            class="form-control form-control-sm"
                            name="semester_dd_val"
                            id="semester_dd_val">
                            <option value=""></option>
                            <?php

                                $query="SELECT 
                                            semesters.Semester_Id, 
                                            semesters.Semester_name,
                                            semesters.Is_default,
                                            year_levels.Year_name  
                                        FROM 
                                            semesters 
                                        LEFT JOIN 
                                            year_levels 
                                        ON 
                                            semesters.Year_Level_Id = year_levels.Year_Level_Id 
                                        WHERE 
                                            semesters.Status = 1 ";

                                $fetch = mysqli_query($con, $query);

                                $count = mysqli_num_rows($fetch);

                                if($fetch && $count > 0){

                                    while($row = mysqli_fetch_assoc($fetch)){

                                        $year_name      = $row['Year_name'];
                                        $semester_Id    = $row['Semester_Id'];
                                        $semester_name  = $row['Semester_name'];
                                        
                                        echo "<option value='".$semester_Id."'>".$year_name." | ".$semester_name."</option>";
                                    }
                                }
                            ?>
                        </select>
                    </div>
                    <div class="col-lg-3">
                        <p><b>Room: <span class="text-danger">(*)</span></b></p>
                        <select 
                            class="form-control form-control-sm"
                            name="room_dd_val"
                            id="room_dd_val">
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
                                        
                                        echo "<option value='".$room_Id."' roomnametxt='".$room_name."'>".$room_name." | ".$room_details."</option>";
                                    }
                                }
                            ?>
                        </select>
                    </div>
                    <div class="col-lg-3">
                        <p><b>Program:</b></p>
                        <select 
                            class="form-control form-control-sm"
                            name="course_dd_val"
                            id="course_dd_val">
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
                    <div class="col-lg-3 text-right">
                        <p style="color:transparent;">Action</p>
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

                <hr><br>

                <div class="text-center">
                    <span>Schedules from </span><br>
                    <span class="font-weight-bold" id="room_txt2">---</span>
                </div>

                <br>

                
                <div class="d-flex flex-row" style="max-width:100%; overflow-x:auto;">

                    <!-- ================== Monday ================= -->
                        <div style="width:200px;">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="font-weight-bold text-uppercase text-center">Monday</h5>
                                </div>
                                <div id="monday_schedules"></div>
                            </div>
                        </div>
                    <!-- ================== Monday END ============= -->

                    <!-- ================== Tuesday ================ -->
                        <div style="width:200px;">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="font-weight-bold text-uppercase text-center">Tuesday</h5>
                                </div>
                                <div id="tuesday_schedules"></div>
                            </div>
                        </div>
                    <!-- ================== Tuesday END ============ -->

                    <!-- ================== Wednesday ============== -->
                        <div style="width:200px;">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="font-weight-bold text-uppercase text-center">Wednesday</h5>
                                </div>
                                <div id="wednesday_schedules"></div>
                            </div>
                        </div>
                    <!-- ================== Wednesday END ========== -->
                    
                    <!-- ================== Thursday =============== -->
                        <div style="width:200px;">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="font-weight-bold text-uppercase text-center">Thursday</h5>
                                </div>
                                <div id="thursday_schedules"></div>
                            </div>
                        </div>
                    <!-- ================== Thursday END =========== -->

                    <!-- ================== Friday ================= -->
                        <div style="width:200px;">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="font-weight-bold text-uppercase text-center">Friday</h5>
                                </div>
                                <div id="friday_schedules"></div>
                            </div>
                        </div>
                    <!-- ================== Friday END ============= -->

                    <!-- ================== Saturday =============== -->
                        <div style="width:200px;">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="font-weight-bold text-uppercase text-center">Saturday</h5>
                                </div>
                                <div id="saturday_schedules"></div>
                            </div>
                        </div>
                    <!-- ================== Saturday END =========== -->
                    
                    <!-- ================== Sunday ================= -->
                        <div style="width:200px;">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="font-weight-bold text-uppercase text-center">Sunday</h5>
                                </div>
                                <div id="sunday_schedules"></div>
                            </div>
                        </div>
                    <!-- ================== Sunday END ============= -->

                </div>

                <!-- ================ Add New Class Modal ============== -->
                    <div class="modal fade" id="newClassMod" style="padding-right: 17px;" data-backdrop="static" data-keyboard="false">

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

                                    <div class="modal-body" style="max-height:70vh; overflow:auto;">

                                        <div class="row">

                                            <div class="col-lg-12">
                                                <div class="form-group">
                                                    <p><b>Semester: <span class="text-danger">(*)</span></b></p>
                                                    <select 
                                                        class="form-control form-control-sm"
                                                        name="semester_Id" 
                                                        id="semester_Id" 
                                                        style="width:100%;"
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

                                            <div class="col-lg-12">
                                                <div class="form-group">
                                                    <p><b>Room: <span class="text-danger">(*)</span></b></p>
                                                    <select 
                                                        class="form-control form-control-sm"
                                                        name="room_Id" 
                                                        id="room_Id" 
                                                        style="width:100%;"
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
                                                    name="time_start_val"
                                                    id="time_start_val"
                                                    required>
                                            </div>
                                            <div class="col-lg-4">
                                                <p><b>Time End: <span class="text-danger">(*)</span></b></p>
                                                <input 
                                                    type="time" 
                                                    class="form-control form-control-sm" 
                                                    name="time_end_val"
                                                    id="time_end_val"
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
                                                        name="course_Id" 
                                                        id="course_Id" 
                                                        style="width:100%;"
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
                                                        style="width:100%;"
                                                        required></select>
                                                </div>
                                            </div>

                                            <div class="col-lg-3">
                                                <div class="form-group">
                                                    <p><b>Instructor: <span class="text-danger">(*)</span></b></p>
                                                    <select 
                                                        class="form-control form-control-sm"
                                                        name="instructor_Id" 
                                                        id="instructor_Id" 
                                                        style="width:100%;"
                                                        required>
                                                        <option value=""></option>
                                                        <?php

                                                            $query="SELECT 
                                                                        users.User_Id,
                                                                        users.FName, 
                                                                        users.MName, 
                                                                        users.LName, 
                                                                        users.Phone_no,
                                                                        users.Date_added, 
                                                                        users.Time_added,
                                                                        users.Status  
                                                                    FROM 
                                                                        users 
                                                                    LEFT JOIN 
                                                                        accounts 
                                                                    ON 
                                                                        users.User_Id = accounts.User_Id
                                                                    WHERE 
                                                                        users.Status = 1 
                                                                        AND accounts.Level_Id = 4 
                                                                    ORDER BY 
                                                                        users.Date_added DESC, 
                                                                        users.Time_added DESC ";

                                                            $fetch = mysqli_query($con, $query);

                                                            $count = mysqli_num_rows($fetch);

                                                            if($fetch && $count > 0){

                                                                while($row = mysqli_fetch_assoc($fetch)){

                                                                    $user_Id    = $row['User_Id'];
                                                                    $fname      = $row['FName'];
                                                                    $mname      = $row['MName'];
                                                                    $lname      = $row['LName'];

                                                                    $fullname = $fname." ".$mname." ".$lname;
                                                                    
                                                                    echo "<option value='".$user_Id."'>".$fullname."</option>";
                                                                }
                                                            }
                                                        ?>
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

                <!-- ================ Schedule Information Modal ================ -->
                    <div class="modal fade" id="scheduleInfoMod">
                        
                        <div class="modal-dialog modal-lg" role="document" style="max-width:1140px;">

                            <div class="modal-content">

                                <div class="modal-header">
                                    <h5 class="modal-title font-weight-bold text-uppercase">
                                        <span class="fa fa-info-circle"></span>
                                        &nbspClass Schedule Information
                                    </h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>

                                <div class="modal-body" style="max-height:70vh; overflow:auto;">

                                    <input type="hidden" name="class_sched_val" id="class_sched_val">

                                    <div class="row">

                                        <div class="col-lg-6">
                                                
                                            <table class="table table-sm" style="width:100%;">
                                                <tbody>
                                                    <tr>
                                                        <td class="font-weight-bold">Semester: </td>
                                                        <td id="semester_txt">---</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="font-weight-bold">Room: </td>
                                                        <td id="room_txt">---</td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="2"><h5 class="mt-4 mb-4">Schedule Details:</h5></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="font-weight-bold">Day: </td>
                                                        <td id="day_txt">---</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="font-weight-bold">Time Start: </td>
                                                        <td id="time_start_txt">---</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="font-weight-bold">Time End: </td>
                                                        <td id="time_end_txt">---</td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="2"><h5 class="mt-4 mb-4">Subject Details:</h5></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="font-weight-bold">Program: </td>
                                                        <td id="course_txt">---</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="font-weight-bold">Subject: </td>
                                                        <td id="subject_txt">---</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="font-weight-bold">Instructor: </td>
                                                        <td id="instructor_txt">---</td>
                                                    </tr>
                                                </tbody>
                                            </table>

                                        </div>

                                        <div class="col-lg-6">

                                            <h5 class="font-weight-bold text-uppercase">
                                                <span class="fa fa-users"></span>
                                                &nbspStudents List
                                            </h5>

                                            <hr>

                                            <div class="d-flex align-items-center">
                                                <h5 class="font-weight-bold">TOTAL:</h5>
                                                <h4 class="ml-2">( <span id="total_students">0</span> )</h4>
                                            </div>

                                            <hr>

                                            <div class="form-group">
                                                <p><b>Search:</b></p>
                                                <input 
                                                    type="text" 
                                                    class="form-control form-control-sm"
                                                    name="search_student_val" 
                                                    id="search_student_val"
                                                    placeholder="Search student name here (e.g. First Middle Last)"
                                                    autocomplete="off">

                                                <!-- ========= Search Suggestions ============= -->
                                                    <div class="bg-white" style="position:absolute; width:96%; z-index:1000;">
                                                        <ul class="list-group" id="search_results_div"></ul>
                                                    </div>
                                                <!-- ========= Search Suggestions END ========= -->
                                            </div>

                                            <table class="table table-hover" id="class_student_lists" style="width:100%;">

                                                <!-- <tbody class="table-sm"></tbody> -->

                                            </table>

                                        </div>

                                    </div>

                                </div>

                                <div class="modal-footer">
                                    <button
                                        type="button" 
                                        class="btn btn-outline-dark font-weight-bold text-uppercase" 
                                        onclick="importToClassSched()">
                                        <span class="fa fa-upload"></span>
                                        &nbspImport .xlsx
                                    </button>
                                    <button 
                                        type="button" 
                                        class="btn btn-danger font-weight-bold text-uppercase delete-class-sched-btn">
                                        <span class="fa fa-trash"></span>
                                        &nbspDelete
                                    </button>
                                    <button 
                                        type="button" 
                                        class="btn btn-outline-light text-dark font-weight-bold text-uppercase" 
                                        data-dismiss="modal">
                                        Close
                                    </button>
                                </div>

                            </div>

                        </div>

                    </div>                             
                <!-- ================ Schedule Information Modal END ============ -->

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

    <script src="../assets/extra-libs/DataTables/DataTables-1.10.16/js/dataTables.bootstrap.min.js"></script>
    <script src="../assets/extra-libs/DataTables/DataTables-1.10.16/js/dataTables.bootstrap4.min.js"></script>
    <script src="../assets/extra-libs/DataTables/DataTables-1.10.16/js/jquery.dataTables.min.js"></script>

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

            // scheduleInfoModal(`1`, `1 Year 1st Semester A.Y. 2025-2026`, `1FA `, `1`, `08:00 AM`, `09:30 AM`, `Bachelor of Science in Information Technology`, `BSIT`,  `Data Structures and Algorithms`, `BSIT-DSA`, ``)

            // ================= Select2 =================
                $('#semester_Id').select2({
                    "placeholder":"Select semester here",
                    "allowClear":true
                })

                $('#room_Id').select2({
                    "placeholder":"Select room here",
                    "allowClear":true
                })

                $('#course_Id').select2({
                    "placeholder":"Select program here",
                    "allowClear":true
                })

                $('#subject_Id').select2({
                    "placeholder":"Select subject here",
                    "allowClear":true
                })

                $('#instructor_Id').select2({
                    "placeholder":"Select instructor here",
                    "allowClear":true
                })


                $('#semester_dd_val').select2({
                    "placeholder":"Select semester here"
                })

                $('#room_dd_val').select2({
                    "placeholder":"Select room here"
                })

                $('#course_dd_val').select2({
                    "placeholder":"Select program here",
                    "allowClear":true
                })
            // ================= Select2 END =============

            $('#newClassForm').on('submit', function(aa){

                aa.preventDefault()

                var data = $('#newClassForm').serializeArray()

                data.push(
                    { name:'action', value:'new_class_schedule' }
                )

                $.ajax({
                    type: "POST",
                    url: "models/ClassSchedulesModel.php",
                    data: data,
                    dataType: "JSON",
                    success: function (response) {
                        
                        if(response == 1){

                            $('#newClassMod').modal('hide')

                            swal("SAVED SUCCESSFULLY", "You added a new class schedule", "success")
                            .then((isConfirm) => {

                                if (isConfirm) { 
                                
                                    var semester_Id = $('#semester_dd_val').val()
                                    var room_Id     = $('#room_dd_val').val()
                                    var course_Id   = $('#course_dd_val').val()

                                    fetchSchedule('monday_schedules', 1, semester_Id, course_Id, room_Id)
                                    fetchSchedule('tuesday_schedules', 2, semester_Id, course_Id, room_Id)
                                    fetchSchedule('wednesday_schedules', 3, semester_Id, course_Id, room_Id)
                                    fetchSchedule('thursday_schedules', 4, semester_Id, course_Id, room_Id)
                                    fetchSchedule('friday_schedules', 5, semester_Id, course_Id, room_Id)
                                    fetchSchedule('saturday_schedules', 6, semester_Id, course_Id, room_Id)
                                    fetchSchedule('sunday_schedules', 7, semester_Id, course_Id, room_Id)
                                }
                            }) 
                        }
                        else if(response == 2 || response == 3){

                            toastr.error('Please contact your developer', 'Something went wrong')
                        }
                        else if(response == 4 || response == 5){

                            toastr.error('Class schedule already occupied.', 'Already Exists')
                        }
                    }
                });
            })

            // ============== Record Filter ================
                $('#semester_dd_val, #room_dd_val, #course_dd_val').on('change', function(){

                    var semester_Id = $('#semester_dd_val').val()
                    var room_Id     = $('#room_dd_val').val()
                    var course_Id   = $('#course_dd_val').val()

                    var data = $('#room_dd_val').select2('data')
                    var room_txt = data[0].text

                    if(semester_Id != '' && room_Id != ''){
                        
                        $('#room_txt2').html(room_txt)

                        fetchSelectedSchedule()
                    }
                })
            // ============== Record Filter END ============

            $('#course_Id').on('change', function(){

                var course_Id = $('#course_Id').val()

                subjectDD(course_Id)
            })

            // ============== Search Student ==============
                $('#search_student_val').on('keyup paste input', function(){

                    var output=''

                    var student_query   = $('#search_student_val').val()
                    var class_sched_val = $('#class_sched_val').val()

                    if(student_query != ''){

                        $('#search_results_div').show()

                        $.ajax({
                            type: "POST",
                            url: "models/UserModel.php",
                            data: {
                                queryval:student_query,
                                levelid:3,
                                limitval:5,
                                action:"fetch_user_info"
                            },
                            dataType: "JSON",
                            success: function (response) {
                                
                                if(response.length > 0){
    
                                    $.each(response, function(key, value){
    
                                        var fname = value.FName
                                        var mname = value.MName
                                        var lname = value.LName
    
                                        var fullname = fname+" "+mname+" "+lname

                                        var year_name   = value.YearName
                                        var course_code = value.CourseCode
    
                                        output+='<li class="list-group-item list-group-item-action d-flex align-items-center justify-content-between">'
                                        output+='<div class="d-flex align-items-center">'
                                        output+='<img src="../assets/images/users/user-icon-512x512-x23sj495.png" height="30" alt="">'
                                        output+='<div class="ml-3"><span>'+ fullname +'</span><br><span>'+ year_name +' | '+ course_code +'</span></div>'
                                        output+='</div>'

                                        output+='<button type="button" class="btn btn-success btn-sm font-weight-bold text-uppercase add-stud-btn" userid="'+ value.UserId +'" classschedid="'+ class_sched_val +'">'
                                        output+='Add'
                                        output+='</button>'

                                        output+='</li>'
                                    })
                                }
                                else{

                                    output+='<li class="list-group-item list-group-item-action d-flex align-items-center justify-content-center">'
                                    output+='<span>No Result.</span>'
                                    output+='</li>'
                                }
    
                                $('#search_results_div').html(output)
                            }
                        })
                    }
                    else{

                        $('#search_results_div').hide()
                    }
                })
            // ============== Search Student END ==========


            // ============== Add New Student to Class ===============
                $('#search_results_div').on('click', '.add-stud-btn', function() {

                    var user_Id         = $(this).attr('userid')
                    var class_sched_Id  = $(this).attr('classschedid')

                    $.ajax({
                        type: "POST",
                        url: "models/ClassSchedulesModel.php",
                        data: {
                            userid:user_Id,
                            classschedid:class_sched_Id, 
                            action:"new_class_student"
                        },
                        dataType: "JSON",
                        success: function (response) {
                            
                            if(response == 1){

                                $('#search_student_val').val('')
                                $('#search_results_div').hide()

                                $('#class_student_lists').DataTable().ajax.reload()

                                toastr.success('You added a new student in a class', 'SAVED SUCCESSFULLY')

                                setTimeout(() => {
                                            
                                    countClassStudents()
                                    
                                }, 1000)
                            }
                            else if(response == 2 || response == 3){

                                toastr.error('Please contact your developer', 'SOMETHING WENT WRONG')
                            }
                            else if(response == 4){

                                toastr.info('Record already exists', 'CANNOT BE ADDED')
                            }
                        }
                    })
                })
            // ============== Add New Student to Class END ===========

            // ============== Delete Class Student ===============
                $('#class_student_lists').on('click', '.delete-class-stud_btn', function(){

                    var class_schedule_Id   = $('#class_sched_val').val()
                    var stud_class_Id       = $(this).attr('studclassid')

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

                                        $('#class_student_lists').DataTable().ajax.reload()

                                        toastr.success('You removed a student from a class', 'REMOVED SUCCESSFULLY')

                                        setTimeout(() => {
                                            
                                            countClassStudents()

                                        }, 1000);
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

            // ============== Delete Class Schedule ===============
                $('.delete-class-sched-btn').on('click', function(){

                    var class_sched_Id = $('#class_sched_val').val()

                    swal({   
                        title: "DELETE CLASS SCHEDULE?",   
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
                                    classschedid:class_sched_Id,
                                    action:"delete_class_schedule"
                                },
                                dataType: "JSON",
                                success: function (response) {
                                    
                                    if(response == 1){

                                        fetchSelectedSchedule()

                                        $('#scheduleInfoMod').modal('hide')

                                        toastr.success('You removed a class schedule', 'REMOVED SUCCESSFULLY')
                                    }
                                    else if(response == 2 || response == 3){

                                        toastr.error('Please contact your developer', 'SOMETHING WENT WRONG')
                                    }
                                }
                            })
                        }
                    })
                })
            // ============== Delete Class Schedule END ===========
        })

        function fetchSelectedSchedule(){

            var semester_Id = $('#semester_dd_val').val()
            var room_Id     = $('#room_dd_val').val()
            var course_Id   = $('#course_dd_val').val()

            fetchSchedule('monday_schedules', 1, semester_Id, course_Id, room_Id)
            fetchSchedule('tuesday_schedules', 2, semester_Id, course_Id, room_Id)
            fetchSchedule('wednesday_schedules', 3, semester_Id, course_Id, room_Id)
            fetchSchedule('thursday_schedules', 4, semester_Id, course_Id, room_Id)
            fetchSchedule('friday_schedules', 5, semester_Id, course_Id, room_Id)
            fetchSchedule('saturday_schedules', 6, semester_Id, course_Id, room_Id)
            fetchSchedule('sunday_schedules', 7, semester_Id, course_Id, room_Id)
        }

        function fetchSchedule(day_div, day_Id, semester_Id, course_Id, room_Id){

            var output=''

            $.ajax({
                type: "POST",
                url: "models/ClassSchedulesModel.php",
                data: {
                    semesterid:semester_Id,
                    courseid:course_Id,
                    roomid:room_Id,
                    dayid:day_Id,
                    action:"fetch_class_schedules"
                },
                dataType: "JSON",
                success: function (response) {
                    
                    $.each(response, function(key, value){

                        var room_name_val = value.RoomName+" | "+value.RoomDetails

                        var scheduleInfoModal = 'scheduleInfoModal(`'+ value.ClassSchedId +'`, `'+ value.SemesterName +'`, `'+ room_name_val +'`, `'+ day_Id +'`, `'+ value.TimeStart +'`, `'+ value.TimeEnd +'`, `'+ value.CourseName +'`, `'+ value.CourseCode +'`,  `'+ value.SubjectName2 +'`, `'+ value.SubjectCode +'`, `'+ value.InstructorName +'`)'

                        output+='<div class="bg-info p-2 mt-1 mb-1 text-white" style="min-height:80px;cursor:pointer;" onclick="'+ scheduleInfoModal +'">'
                        output+='<span class="font-weight-bold"><h5>'+ value.SubjectName +'</h5></span>'
                        output+='<span>'+ value.TimeStart +' - '+ value.TimeEnd +'</span>'
                        output+='</div>'
                    })

                    $('#'+day_div).html(output)
                }
            })
        }

        function subjectDD(course_Id){

            var output=''

            $.ajax({
                type: "POST",
                url: "models/SubjectsModel.php",
                data: {
                    courseid:course_Id,
                    action:"fetch_subjects"
                },
                dataType: "JSON",
                success: function (response) {
                    
                    if(response.length > 0){

                        output+='<option value=""></option>'

                        $.each(response, function(key, value){

                            output+='<option value="'+ value.SubjectId +'">'+ value.SubjectName +' | '+ value.SubjectCode +'</option>'
                        })
                    }
                    else{

                        output+='<option value=""></option>'
                    }

                    $('#subject_Id').html(output)
                }
            });
        }

        function scheduleInfoModal(class_schedule_Id, semester, room, day, time_start, time_end, course, course_code, subject, subject_code, instructor){

            $('#scheduleInfoMod').modal('show')

            $('#class_sched_val').val(class_schedule_Id)

            $('#search_student_val').val('')
            $('#search_results_div').hide()

            $('#semester_txt').html(semester)
            $('#room_txt').html(room)

            if(day == 1){

                day = 'Monday'
            }
            else if(day == 2){

                day = 'Tuesday'
            }
            else if(day == 3){

                day = 'Wednesday'
            }
            else if(day == 4){

                day = 'Thursday'
            }
            else if(day == 5){

                day = 'Friday'
            }
            else if(day == 6){

                day = 'Saturday'
            }
            else if(day == 7){

                day = 'Sunday'
            }

            $('#day_txt').html(day)
            $('#time_start_txt').html(time_start)
            $('#time_end_txt').html(time_end)
            $('#course_txt').html(course+' | '+course_code)
            $('#subject_txt').html(subject+' | '+subject_code)
            $('#instructor_txt').html(instructor)

            fetchClassStudents(class_schedule_Id)
        }

        function countClassStudents(){

            var total_records = $('#class_student_lists').DataTable().data().count()

            $('#total_students').html(total_records)
        }

        function fetchClassStudents(class_schedule_Id){

            var cs_table = $('#class_student_lists').DataTable({

                "responsive":true,
                "bInfo":false,  
                "searching":false,
                "bDestroy": true,
                "aaSorting": [],
                "dom": 'rtp',
                "ajax": {
                    'type':'POST',
                    'url':'models/ClassSchedulesModel.php',
                    'data':{
                        classschedid:class_schedule_Id,
                        action:"fetch_class_students"
                    },
                },
                "columns": [
                    { "data": "FullName", 

                        render : function ( data, type, row, meta ) {

                            var output=''

                            output+='<div class="d-flex align-items-center"><img src="../assets/images/users/user-icon-512x512-x23sj495.png" height="30" alt="">'
                            output+='<div class="ml-3"><span>'+ data +'</span><br><span>'+ row.YearName +' | '+ row.CourseCode +'</span></div></div>'

                            return output
                        }
                    },
                    { "data": "StudentClassId", 
                    
                        render : function ( data, type, row, meta) {

                            var output=''

                            output+='<button type="button" class="btn btn-outline-light btn-sm text-danger delete-class-stud_btn" studclassid="'+ data +'">'
                            output+='<span class="fa fa-trash"></span>'
                            output+='</button>'

                            return output
                        }
                    },
                ],
            })

            setTimeout(() => {
                
                countClassStudents()
            }, 1000)
        }

        function importToClassSched(){

            var class_sched_val = $('#class_sched_val').val()

            window.open('bulk_class_schedules.php?classschedid='+class_sched_val)
        }

    </script>


</body>

</html>