<?php

    include "includes/db.php";
    include "../html/helpers/Users.php";
    include "../html/helpers/Evaluation.php";

    if(isset($_GET['evalid'])){

        $eval_Id = $_GET['evalid'];

        if($eval_Id == NULL || $eval_Id == ''){

            echo "<script>location.href='faculty_evaluation.php';</script>";
        }

        // ============ Evaluation Grade ===============
            $query ="SELECT 
                        Semester_Id, 
                        User_Id,
                        Evaluated_by,
                        Remarks,
                        Grade_val 
                    FROM 
                        evaluation_grade 
                    WHERE 
                        Status = 1 
                        AND Eval_Id = '".$eval_Id."' ";

            $fetch = mysqli_query($con, $query);

            $row = mysqli_fetch_assoc($fetch);
            
            $semester_Id    = $row['Semester_Id'];
            $instructor_Id  = $row['User_Id'];
            $evaluated_by   = $row['Evaluated_by'];
            $remarks        = $row['Remarks'];
            $grade_val      = number_format($row['Grade_val'], 2);
        // ============ Evaluation Grade END ===========

        $grade_val2     = substr($grade_val, 0, 1);

        // ========== Fetch Metric Info ===========
            $metric_info2 = metricValues($grade_val2);

            $metric_val_desc2    = $metric_info2['MetricDesc'];
            $metric_q_desc2      = $metric_info2['MetricQDesc'];
        // ========== Fetch Metric Info END =======
    }
    else{

        echo "<script>location.href='faculty_evaluation.php';</script>";
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
        <link rel="icon" type="image/png" sizes="16x16" href="../assets/images/<?= $app_icon ?>">


        <title><?= $appname ?></title>


        <!-- Custom CSS -->
        <link href="../assets/libs/chartist/dist/chartist.min.css" rel="stylesheet">
        <link href="../assets/extra-libs/c3/c3.min.css" rel="stylesheet">
        <link href="../assets/libs/morris.js/morris.css" rel="stylesheet">


        <link href="../assets/extra-libs/DataTables/DataTables-1.10.16/css/dataTables.bootstrap.min.css" rel="stylesheet">
        <link href="../assets/extra-libs/DataTables/DataTables-1.10.16/css/dataTables.bootstrap4.min.css" rel="stylesheet">
        <link href="../assets/extra-libs/DataTables/DataTables-1.10.16/css/jquery.dataTables.min.css" rel="stylesheet">


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
                            <h4 class="page-title font-weight-bold text-uppercase">
                                <span class="fa fa-arrow-left" onclick='history.back();'></span>
                                &nbspEvaluation Result
                            </h4>
                            <div class="d-flex align-items-center"></div>
                        </div>
                        <div class="col-7 align-self-center">
                            <div class="d-flex no-block justify-content-end align-items-center">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item">
                                            <a href="#">Result</a>
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
                <div class="container-fluid"><br><br>

                    <!-- ============= Instructor Information ============= -->
                        <?php

                            $instructor_info = fetchUserInfo($instructor_Id);

                            $instrctr_fname = $instructor_info[0]['FName'];
                            $instrctr_mname = $instructor_info[0]['MName'];
                            $instrctr_lname = $instructor_info[0]['LName'];

                            $instrctr_fullname = $instrctr_lname." ".$instrctr_fname.", ".$instrctr_mname;
                        ?>

                        <div class="row">

                            <div class="col-lg-6 d-flex align-items-center">
                                <img 
                                    src="../assets/images/users/user-icon-512x512-x23sj495.png" 
                                    class="mr-4"
                                    height="70"
                                    alt="Profile photo">
                                <div>
                                    <h5><?= $instrctr_fullname ?></h5>
                                    <p>Faculty</p>
                                </div>
                            </div>
                            <div class="col-lg-6"></div>
                                
                        </div>
                    <!-- ============= Instructor Information END ========= -->

                    <hr>

                    <?php

                        $query ="SELECT 
                                    Eval_Header_Id, 
                                    Eval_header_name,
                                    Order_val
                                FROM 
                                    evaluation_headers 
                                WHERE 
                                    Status = 1 
                                ORDER BY 
                                    Order_val ASC ";

                        $fetch = mysqli_query($con, $query);

                        if($fetch){

                            echo '<table class="table table-bordered">';
                            echo '<tbody>';

                            while($row = mysqli_fetch_assoc($fetch)){

                                $eval_header_Id     = $row['Eval_Header_Id'];
                                $eval_header_name   = $row['Eval_header_name'];
                                $order_val          = $row['Order_val'];

                                
                                echo '<td colspan="2"><h4 class="font-weight-bold">'.$eval_header_name.'</h4></td>';

                                $query2 = "SELECT 
                                            evaluation_grades.Eval_Grades_Id,
                                            evaluation_metrics.Metric_desc, 
                                            metric_values.Metric_val_no, 
                                            metric_values.Metric_val_desc  
                                        FROM 
                                            evaluation_grades 
                                        LEFT JOIN 
                                            metric_values 
                                        ON 
                                            evaluation_grades.Metric_Val_Id = metric_values.Metric_Val_Id 
                                        LEFT JOIN 
                                            evaluation_metrics 
                                        ON 
                                            evaluation_grades.Eval_Metric_Id = evaluation_metrics.Eval_Metric_Id 
                                        WHERE 
                                            evaluation_grades.Semester_Id = '".$semester_Id."' 
                                            AND evaluation_grades.User_Id = '".$instructor_Id."' 
                                            AND evaluation_grades.Evaluated_by = '".$evaluated_by."' 
                                            AND evaluation_metrics.Eval_Header_Id = '".$eval_header_Id."' 
                                            AND evaluation_grades.Status = 1 ";

                                $fetch2 = mysqli_query($con, $query2);

                                $count2 = mysqli_num_rows($fetch2);

                                if($fetch2){

                                    if($count2 > 0){

                                        while($row2 = mysqli_fetch_assoc($fetch2)){   

                                            $metric_desc     = $row2['Metric_desc'];
                                            $metric_val_no   = $row2['Metric_val_no'];
                                            $metric_val_desc = $row2['Metric_val_desc'];

                                            echo "<tr>";
                                            echo "<td style='max-width:500px;'>".$metric_desc."</td>";
                                            echo "<td class='text-center font-weight-bold'>".$metric_val_no." - ".$metric_val_desc."</td>";
                                            echo "</tr>";
                                        }
                                    }
                                    else{

                                        echo "<tr>";
                                        echo "<td colspan='2'>No Results</td>";
                                        echo "</tr>";
                                    }
                                }
                            }

                            echo '</tbody>';
                            echo '</table>';
                        }
                    ?>

                    <hr><br>

                    <div class="row">

                        <div class="col-lg-6">
                            <?php
                                
                                if( $_SESSION["licom_usr_level"] == 1 || 
                                    $_SESSION["licom_usr_level"] == 3 || 
                                    $_SESSION["licom_usr_level"] == 4){ ?>

                                    <h4 class="font-weight-bold">Remarks: </h4>
                                    <span><?= $remarks ?></span>

                                    <?php
                                }
                            ?>
                        </div>

                        <div class="col-lg-6 text-right">

                            <?php

                                if($_SESSION["licom_usr_level"] == 4 || $_SESSION["licom_usr_level"] == 1){ ?>

                                    <h4 class="font-weight-bold">Final Grade: </h4>
                                    <h2><span class="text-info"><?= $grade_val ?></span></h2>
                                    <span>(<?= $metric_val_desc2 ?>)</span>

                                    <?php
                                }
                            ?>
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

            
            })

        </script>

    </body>

</html>