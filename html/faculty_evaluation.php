<?php

    include "includes/db.php";
    include "../../app/html/helpers/Users.php";
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
                            <h4 class="page-title">Faculty Evaluation</h4>
                            <div class="d-flex align-items-center">

                            </div>
                        </div>
                        <div class="col-7 align-self-center">
                            <div class="d-flex no-block justify-content-end align-items-center">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item">
                                            <a href="#">Faculty Evaluation</a>
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

                        <div class="col-12">

                            <table class="table display nowrap" style="width:100%;" id="class_instructors_tbl">

                                <thead class="table-bordered font-weight-bold text-uppercase">
                                    <tr>
                                        <th>Instructor</th>
                                        <th>Date Evaluated</th>
                                        <th class="text-center">Action</th>
                                    </tr>
                                </thead>

                                <tbody>

                                    <?php

                                        $query ="SELECT 
                                                    class_schedules.Class_Schedule_Id, 
                                                    class_schedules.Day, 
                                                    class_schedules.Time_start, 
                                                    class_schedules.Time_end, 
                                                    semesters.Semester_name, 
                                                    subjects.Subject_Id, 
                                                    subjects.Subject_name, 
                                                    subjects.Subject_code, 
                                                    courses.Course_name,
                                                    courses.Course_code,
                                                    rooms.Room_name, 
                                                    rooms.Room_details, 
                                                    class_schedules.Instructor_Id,
                                                    student_classes.Student_Class_Id,  
                                                    student_classes.Student_Id  
                                                FROM 
                                                    class_schedules 
                                                LEFT JOIN 
                                                    semesters 
                                                ON 
                                                    class_schedules.Semester_Id = semesters.Semester_Id 
                                                LEFT JOIN 
                                                    subjects 
                                                ON 
                                                    class_schedules.Subject_Id = subjects.Subject_Id 
                                                LEFT JOIN 
                                                    courses 
                                                ON 
                                                    subjects.Course_Id = courses.Course_Id 
                                                LEFT JOIN 
                                                    rooms 
                                                ON 
                                                    class_schedules.Room_Id = rooms.Room_Id 
                                                LEFT JOIN 
                                                    student_classes 
                                                ON 
                                                    class_schedules.Class_Schedule_Id = student_classes.Class_Schedule_Id 
                                                WHERE 
                                                    class_schedules.Status = 1 
                                                    AND student_classes.Status = 1 
                                                    AND student_classes.Student_Id = '".$_SESSION["licom_usr_Id"]."' 
                                                GROUP BY 
                                                    class_schedules.Instructor_Id ";

                                        $fetch = mysqli_query($con, $query);

                                        while($row = mysqli_fetch_assoc($fetch)){

                                            $instructor_Id = $row['Instructor_Id'];

                                            $instructor_info = fetchUserInfo($instructor_Id, "", 4, 1);

                                            $ins_fname = $instructor_info[0]['FName'];
                                            $ins_mname = $instructor_info[0]['MName'];
                                            $ins_lname = $instructor_info[0]['LName'];

                                            $instructor_fullname = $ins_lname.", ".$ins_fname." ".$ins_mname;

                                            echo "<tr>";
                                            echo "<td class='d-flex align-items-center'>
                                                    <img 
                                                        src='../assets/images/users/user-icon-512x512-x23sj495.png' 
                                                        class='mr-2'
                                                        height='30' 
                                                        alt='Profilem Picture'>
                                                    <h5>".$instructor_fullname."</h5>
                                                </td>";
                                            echo "<td>---</td>";
                                            echo "<td class='text-center'>
                                                    <button 
                                                        type='button' 
                                                        class='btn btn-success btn-sm font-weight-bold text-uppercase'>
                                                        Evaluate
                                                    </button>    
                                                </td>";
                                            echo "</tr>";
                                        }

                                    ?>

                                </tbody>

                            </table>

                        </div>

                    </div>
                    <!-- ============================================================== -->
                    <!-- End PAge Content -->
                    <!-- ============================================================== -->
                    <!-- ============================================================== -->
                    <!-- Right sidebar -->
                    <!-- ============================================================== -->
                    <!-- .right-sidebar -->
                    <!-- ============================================================== -->
                    <!-- End Right sidebar -->
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



        <div class="chat-windows"></div>



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
                
                classInstructors()
            })


            function classInstructors(){

                $('#class_instructors_tbl').DataTable({

                    "responsive":true,
                    "bInfo":false
                })
            }

        </script>

    </body>

</html>