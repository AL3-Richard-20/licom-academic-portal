<?php

    include "includes/db.php";
    include "includes/sessions.php";

    // =========== Session Value ============
        $user_level_Id = $_SESSION["licom_usr_level"];
    // =========== Session Value END ========

    // =========== Total Users ==============
        function countUserlevel($level_Id){

            global $con;

            $query="SELECT 
                        COUNT(*) as Total 
                    FROM 
                        accounts 
                    WHERE 
                        Status = 1 
                        AND Level_Id = '".$level_Id."' ";

            $fetch  = mysqli_query($con, $query);
            $row    = mysqli_fetch_assoc($fetch);

            $total = $row['Total'];

            return $total;
        }
    // =========== Total Users END ==========

    // ========== Total Courses ==============  
        function totalCourses(){

            global $con;

            $query ="SELECT 
                        COUNT(*) as Total 
                    FROM 
                        courses
                    WHERE 
                        Status = 1 ";

            $fetch  = mysqli_query($con, $query);
            $row    = mysqli_fetch_assoc($fetch);

            $total = $row['Total'];

            return $total;
        }
    // ========== Total Courses END ==========

    // ========== Total Subjects =============
        function totalSubjects(){

            global $con;

            $query ="SELECT 
                        COUNT(*) as Total 
                    FROM 
                        subjects
                    WHERE 
                        Status = 1 ";

            $fetch  = mysqli_query($con, $query);
            $row    = mysqli_fetch_assoc($fetch);

            $total = $row['Total'];

            return $total;
        }
    // ========== Total Subjects END =========

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
        <link rel="icon" type="image/png" sizes="16x16" href="../assets/images/<?= $app_icon ?>">


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
                <!-- Container fluid  -->
                <!-- ============================================================== -->
                <div class="container-fluid">
                
                    <!-- <div class="d-flex align-items-center flex-column justify-content-center border" style="height:70vh;">
                        <img src="../assets/images/undraw_programming_65t2.png" height="200" alt="">
                        <h5>We are still working on the Dashboard</h5>
                    </div> -->

                    <h4 class="font-weight-bold text-uppercase">Dashboard</h4>

                    <!-- ================ Parameters ============= -->
                        <input type="hidden" name="level_Id_val" id="level_Id_val" value="<?= $user_level_Id ?>">
                    <!-- ================ Parameters END ========= -->

                    <br>

                    <div class="row">

                        <!-- =============== Registrar and Administrator ================= -->
                            <?php

                                if($user_level_Id == 1 || $user_level_Id == 2){ ?>

                                    <div class="col-lg-3 col-md-6">
                                        <div class="card bg-info">
                                            <div class="card-body">
                                                <div class="d-flex no-block align-items-center">
                                                    <div class="text-white">
                                                        <h2><?= countUserlevel(3) ?></h2>
                                                        <h6>Total Students</h6>
                                                    </div>
                                                    <div class="ml-auto">
                                                        <span class="text-white display-6"><i class="fa fa-users"></i></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <?php
                                }


                                if($user_level_Id == 1 || $user_level_Id == 2){ ?>

                                    <div class="col-lg-3 col-md-6">
                                        <div class="card bg-success">
                                            <div class="card-body">
                                                <div class="d-flex no-block align-items-center">
                                                    <div class="text-white">
                                                        <h2><?= countUserlevel(4) ?></h2>
                                                        <h6>Total Instructors</h6>
                                                    </div>
                                                    <div class="ml-auto">
                                                        <span class="text-white display-6"><i class="fa fa-users"></i></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <?php
                                }

                                
                                if($user_level_Id == 1 || $user_level_Id == 2){ ?>

                                    <div class="col-lg-3 col-md-6">
                                        <div class="card bg-primary">
                                            <div class="card-body">
                                                <div class="d-flex no-block align-items-center">
                                                    <div class="text-white">
                                                        <h2><?= totalCourses() ?></h2>
                                                        <h6>Total Courses</h6>
                                                    </div>
                                                    <div class="ml-auto">
                                                        <span class="text-white display-6"><i class="fa fa-list"></i></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <?php
                                }


                                if($user_level_Id == 1 || $user_level_Id == 2){ ?>

                                    <div class="col-lg-3 col-md-6">
                                        <div class="card bg-primary">
                                            <div class="card-body">
                                                <div class="d-flex no-block align-items-center">
                                                    <div class="text-white">
                                                        <h2><?= totalSubjects() ?></h2>
                                                        <h6>Total Subjects</h6>
                                                    </div>
                                                    <div class="ml-auto">
                                                        <span class="text-white display-6"><i class="fa fa-list"></i></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <?php
                                }
                            ?>
                        <!-- =============== Registrar and Administrator END ============= -->

                        <!-- =============== Student =================== -->
                            <?php

                                if($user_level_Id == 3){ ?>

                                    <div 
                                        class="col-lg-4 text-center border" 
                                        style="cursor:pointer;" 
                                        onclick="location.href='student_class_schedules.php';">

                                        <h1 style="font-size:110px;"><span class="fa fa-calendar"></span></h1>
                                        <h2>Class Schedule</h2>

                                    </div>

                                    <div 
                                        class="col-lg-4 text-center border" 
                                        style="cursor:pointer;" 
                                        onclick="location.href='student_grades.php';">

                                        <h1 style="font-size:110px;"><span class="fa fa-file-alt"></span></h1>
                                        <h2>Grades</h2>

                                    </div>

                                    <div 
                                        class="col-lg-4 text-center border" 
                                        style="cursor:pointer;" 
                                        onclick="location.href='faculty_evaluation.php';">

                                        <h1 style="font-size:110px;"><span class="fa fa-trophy"></span></h1>
                                        <h2>Faculty Evaluation</h2>

                                    </div>
                                    
                                    <?php
                                }
                            ?>
                        <!-- =============== Student END =============== -->

                        <!-- =============== Instructor ================ -->
                        <?php

                            if($user_level_Id == 4){ ?>

                                <div 
                                    class="col-lg-4 text-center border" 
                                    style="cursor:pointer;" 
                                    onclick="location.href='faculty_class_schedules.php';">

                                    <h1 style="font-size:110px;"><span class="fa fa-calendar"></span></h1>
                                    <h2>Class Schedule</h2>

                                </div>

                                <div 
                                    class="col-lg-4 text-center border" 
                                    style="cursor:pointer;" 
                                    onclick="location.href='faculty_grades.php';">

                                    <h1 style="font-size:110px;"><span class="fa fa-file-alt"></span></h1>
                                    <h2>Evaluation Grades</h2>

                                </div>

                                <?php
                            }
                        ?>
                        <!-- =============== Instructor END ============ -->

                    </div>

                    <div class="row">

                        <?php

                            if($user_level_Id == 1 || $user_level_Id == 2){ ?>

                                <div class="col-lg-4">
                                    <div class="card">
                                        <div class="card-header bg-white">
                                            <h5 class="font-weight-bold text-uppercase">Student Demographics</h5>
                                        </div>
                                        <div class="card-body">
                                            <div id="studDemograph" style="height: 300px; width: 100%;"></div>
                                        </div>
                                    </div>
                                </div>

                                <?php
                            }


                            if($user_level_Id == 1 || $user_level_Id == 2){ ?>

                                <div class="col-lg-4">
                                    <div class="card">
                                        <div class="card-header bg-white">
                                            <h5 class="font-weight-bold text-uppercase">Instructor Demographics</h5>
                                        </div>
                                        <div class="card-body">
                                            <div id="instrucDemograph" style="height: 300px; width: 100%;"></div>
                                        </div>
                                    </div>
                                </div>
                                <?php
                            }

                            if($user_level_Id == 1 || $user_level_Id == 2){ ?>

                                <div class="col-lg-4">
                                    <div class="card">
                                        <div class="card-header bg-white">
                                            <h5 class="font-weight-bold text-uppercase">On Going Classes as of (<span id="current_time_txt">---</span>)</h5>
                                        </div>
                                        <div class="card-body" id="dboard_class_sched_div" style="min-height: 340px; max-height: 340px; overflow:auto;">

                                            <!-- Class Schedules -->

                                        </div>
                                    </div>
                                </div>

                                <?php
                            }
                        ?>

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

        <script src="../assets/libs/canvasjs/canvasjs.min.js"></script>

        <script>


            var level_Id = $('#level_Id_val').val()


            $(document).ready(function () {

                if(level_Id == 1 || level_Id == 2){ // Administrator

                    studentsDemograph('studDemograph')
        
                    instrucDemograph('instrucDemograph')
        
                    currentClassSched()
                }
            })


            function studentsDemograph(id){

                $.ajax({
                    type: "POST",
                    url: "models/UserModel.php",
                    data: {
                        levelid:3,
                        action:"users_demographics"
                    },
                    dataType: "JSON",
                    success: function (response) {

                        const results_arr = []

                        $.each(response, function(key, value){

                            var sex     = value.Sex
                            var total   = value.Total

                            results_arr.push( { y:total, label:sex } )
                        })
                        
                        var chart = new CanvasJS.Chart(id, {
                            animationEnabled: true,
                            title:{
                                horizontalAlign: "left"
                            },
                            data: [{
                                type: "doughnut",
                                startAngle: 60,
                                //innerRadius: 60,
                                indexLabelFontSize: 17,
                                toolTipContent: "<b>{label}:</b> {y} (#percent%)",
                                dataPoints: results_arr
                            }]
                        });
            
                        chart.render();
                    }
                })
            }


            function instrucDemograph(id){

                $.ajax({
                    type: "POST",
                    url: "models/UserModel.php",
                    data: {
                        levelid:4,
                        action:"users_demographics"
                    },
                    dataType: "JSON",
                    success: function (response) {

                        const results_arr = []

                        $.each(response, function(key, value){

                            var sex     = value.Sex
                            var total   = value.Total

                            results_arr.push( { y:total, label:sex } )
                        })
                        
                        var chart = new CanvasJS.Chart(id, {
                            animationEnabled: true,
                            title:{
                                horizontalAlign: "left"
                            },
                            data: [{
                                type: "doughnut",
                                startAngle: 60,
                                //innerRadius: 60,
                                indexLabelFontSize: 17,
                                toolTipContent: "<b>{label}:</b> {y} (#percent%)",
                                dataPoints: results_arr
                            }]
                        });
            
                        chart.render();
                    }
                })
            }


            function currentClassSched(){

                var output=''

                $.ajax({
                    type: "POST",
                    url: "models/ClassSchedulesModel.php",
                    data: {
                        timeval:"current",
                        action:"fetch_class_schedules"
                    },
                    dataType: "JSON",
                    success: function (response) {
                        
                        if(response.length > 0){

                            $.each(response, function(key, value){

                                var subject_name = value.SubjectName
                                var instructor   = value.InstructorName
                                var room_name    = value.RoomDetails
                                var time_start   = value.TimeStart
                                var time_end     = value.TimeEnd
        
                                var time_range = time_start + ' - ' + time_end
        
                                output+='<div class="d-flex align-items-center justify-content-between p-2" style="border-bottom:2px solid #f4f4f4;">'
                                output+='<div class="text-left">'
                                output+='<span class="font-weight-bold">'+ subject_name +'</span><br>'
                                output+='<span><small>'+ instructor +'</small></span>'
                                output+='</div>'
                                output+='<div class="text-right">'
                                output+='<span class="font-weight-bold">'+ room_name +'</span><br>'
                                output+='<span><small>'+ time_range +'</small></span>'
                                output+='</div>'
                                output+='</div>'

                                $('#current_time_txt').html(value.CurrentTime)
                            })

                        }
                        else{

                            output+='<p>No Results</p>'

                            $('#current_time_txt').html('<?= date('h:i A', strtotime("now")) ?>')
                        }

                        $('#dboard_class_sched_div').html(output)
                    }
                })
            }

        </script>

    </body>

</html>