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
        <!-- <link href="../assets/libs/chartist/dist/chartist.min.css" rel="stylesheet">
        <link href="../assets/extra-libs/c3/c3.min.css" rel="stylesheet">
        <link href="../assets/libs/morris.js/morris.css" rel="stylesheet"> -->


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
                            <h4 class="page-title font-weight-bold text-uppercase">Evaluation Form Preview</h4>
                            <div class="d-flex align-items-center"></div>
                        </div>
                        <div class="col-7 align-self-center">
                            <div class="d-flex no-block justify-content-end align-items-center">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item">
                                            <a href="#">Evaluation Form</a>
                                        </li>
                                        <li class="breadcrumb-item active" aria-current="page">Preview</li>
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

                    <ul class="nav nav-pills nav-justified">
                        
                        <li class="nav-item d-flex align-items-center bg-light" style="min-height:40px; cursor:pointer">
                            <span class="ml-1 mr-1 bg-info text-white" style="border-radius:10%; padding:15px;"><h4>1</h4></span>
                            <span class="ml-1 mr-1 font-weight-bold text-info">Directions for this Survey</span>
                        </li>

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

                                while($row = mysqli_fetch_assoc($fetch)){

                                    $eval_header_Id     = $row['Eval_Header_Id'];
                                    $eval_header_name   = $row['Eval_header_name'];
                                    $order_val          = $row['Order_val'];

                                    echo '<li class="nav-item d-flex align-items-center bg-light" style="min-height:40px; cursor:pointer">
                                            <span class="ml-1 mr-1 bg-secondary text-white" style="border-radius:10%; padding:15px;"><h4>'.$order_val.'</h4></span>
                                            <span class="ml-1 mr-1 font-weight-bold">'.$eval_header_name.'</span>
                                        </li>';
                                }
                            }
                        ?>

                    </ul>

                    <br><br>

                    <div class="row">

                        <div class="col-lg-6">

                            <h2>Instruction</h2><br>
                            
                            <?php

                                $query ="SELECT 
                                            Sett_val 
                                        FROM 
                                            settings 
                                        WHERE 
                                            Sett_Id = 1 
                                        LIMIT 1 ";

                                $fetch = mysqli_query($con, $query);

                                if($fetch){

                                    $row = mysqli_fetch_assoc($fetch);

                                    $instruction_txt = $row['Sett_val'];

                                    echo $instruction_txt;
                                }
                            ?>

                        </div>

                        <div class="col-lg-6"><br>

                            <table class="table table-bordered">
                                <thead class="font-weight-bold">
                                    <tr>
                                        <th class="text-center" style="vertical-align: middle;">Scale</th>
                                        <th class="text-center" style="vertical-align: middle;">Descriptive Rating</th>
                                        <th class="text-center" style="vertical-align: middle;">Qualitative Description</th>
                                    </tr>
                                </thead>
                                <tbody class="table-sm">
                                    <?php

                                        $query ="SELECT 
                                                    Metric_val_no, 
                                                    Metric_val_desc, 
                                                    Metric_Q_desc 
                                                FROM 
                                                    metric_values 
                                                WHERE 
                                                    Status = 1 
                                                ORDER BY 
                                                    Metric_val_no DESC ";

                                        $fetch = mysqli_query($con, $query);

                                        if($fetch){

                                            while($row = mysqli_fetch_assoc($fetch)){

                                                $metric_val_no   = $row['Metric_val_no'];
                                                $metric_val_desc = $row['Metric_val_desc'];
                                                $metric_q_desc   = $row['Metric_Q_desc'];

                                                echo '<tr>';
                                                echo '<td class="text-center" style="vertical-align: middle;">'.$metric_val_no.'</td>';
                                                echo '<td class="text-center font-weight-bold" style="vertical-align: middle;">'.$metric_val_desc.'</td>';
                                                echo '<td style="vertical-align: middle;">'.$metric_q_desc.'</td>';
                                                echo '</tr>';
                                            }
                                        }
                                    ?>
                                </tbody>
                            </table>

                        </div>

                    </div>

                    <hr>

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