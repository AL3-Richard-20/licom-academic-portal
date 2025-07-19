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

                    <input type="hidden" name="student_Id_val" id="student_Id_val" value="<?= $_SESSION["licom_usr_Id"] ?>">

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
                        </div>
                        <div class="col-lg-3 text-right">
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

                    <!-- ================ Schedule Information Modal ================ -->
                        <div class="modal fade" id="scheduleInfoMod">
                            
                            <div class="modal-dialog" role="document">

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

                                            <div class="col-lg-12">
                                                    
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
                                                            <td class="font-weight-bold">Course: </td>
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

                                            <div class="col-lg-6"></div>

                                        </div>

                                    </div>

                                    <div class="modal-footer">
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

            var student_Id = $('#student_Id_val').val()

            $(document).ready(function () {

                // ================= Select2 =================
                    $('#semester_dd_val').select2({
                        "placeholder":"Select semester here"
                    })

                    $('#room_dd_val').select2({
                        "placeholder":"Select room here"
                    })

                    $('#course_dd_val').select2({
                        "placeholder":"Select course here",
                        "allowClear":true
                    })
                // ================= Select2 END =============

                // ============== Record Filter ================
                    $('#semester_dd_val, #room_dd_val').on('change', function(){

                        var semester_Id = $('#semester_dd_val').val()
                        var room_Id     = $('#room_dd_val').val()

                        var data = $('#room_dd_val').select2('data')
                        var room_txt = data[0].text

                        if(semester_Id != '' && room_Id != ''){
                            
                            $('#room_txt2').html(room_txt)

                            fetchSelectedSchedule()
                        }
                    })
                // ============== Record Filter END ============
            })

            function fetchSelectedSchedule(){

                var semester_Id = $('#semester_dd_val').val()
                var room_Id     = $('#room_dd_val').val()

                fetchSchedule('monday_schedules', 1, semester_Id, room_Id)
                fetchSchedule('tuesday_schedules', 2, semester_Id, room_Id)
                fetchSchedule('wednesday_schedules', 3, semester_Id, room_Id)
                fetchSchedule('thursday_schedules', 4, semester_Id, room_Id)
                fetchSchedule('friday_schedules', 5, semester_Id, room_Id)
                fetchSchedule('saturday_schedules', 6, semester_Id, room_Id)
                fetchSchedule('sunday_schedules', 7, semester_Id, room_Id)
            }

            function fetchSchedule(day_div, day_Id, semester_Id, room_Id){

                var output=''

                $.ajax({
                    type: "POST",
                    url: "models/ClassSchedulesModel.php",
                    data: {
                        semesterid:semester_Id,
                        roomid:room_Id,
                        dayid:day_Id,
                        instructorid:student_Id,
                        action:"fetch_user_class_schedules"
                    },
                    dataType: "JSON",
                    success: function (response) {
                        
                        $.each(response.data, function(key, value){

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

        </script>


    </body>

</html>