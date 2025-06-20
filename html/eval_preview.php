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

                    <!-- ================= Evaluation Headers ================= -->
                        <ul class="nav nav-pills nav-justified">
                            
                            <li class="nav-item d-flex align-items-center bg-light" style="min-height:40px; cursor:pointer" onclick="viewHeaderMetrics(0)">
                                <span class="ml-1 mr-1 bg-info text-white header-link-ind" id="header_link_ind_0" style="border-radius:10%; padding:15px;"><h4>1</h4></span>
                                <span class="ml-1 mr-1 font-weight-bold text-info header-link-txt" id="header_link_txt_0">Directions for this Survey</span>
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

                                        echo '<li class="nav-item d-flex align-items-center bg-light" style="min-height:40px; cursor:pointer" onclick="viewHeaderMetrics(`'.$eval_header_Id.'`)">
                                                <span class="ml-1 mr-1 bg-secondary text-white header-link-ind" id="header_link_ind_'.$eval_header_Id.'" style="border-radius:10%; padding:15px;"><h4>'.$order_val.'</h4></span>
                                                <span class="ml-1 mr-1 font-weight-bold header-link-txt" id="header_link_txt_'.$eval_header_Id.'">'.$eval_header_name.'</span>
                                            </li>';
                                    }
                                }
                            ?>

                        </ul>
                    <!-- ================= Evaluation Headers END ============= -->

                    <br><br>

                    <!-- ================= Instructions ================= -->       
                        <div class="row metric-items-div" id="metric_items_0">

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

                                <div style="height:100%; position:sticky; top:0;">

                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th class="text-center font-weight-bold" style="vertical-align: middle;">Scale</th>
                                                <th class="text-center font-weight-bold" style="vertical-align: middle;">Descriptive Rating</th>
                                                <th class="text-center font-weight-bold" style="vertical-align: middle;">Qualitative Description</th>
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

                        </div>
                    <!-- ================= Instructions END ============= -->

                    <!-- ================= Metrics ======================= -->
                        <div id="metrics_div">

                            <?php

                                $queryz ="SELECT     
                                            Eval_Header_Id,
                                            Order_val  
                                        FROM 
                                            evaluation_headers 
                                        WHERE 
                                            Status = 1 ";
                                
                                $fetchz = mysqli_query($con, $queryz);

                                if($fetchz){

                                    while($rowz = mysqli_fetch_assoc($fetchz)){

                                        $db_eval_header    = $rowz['Eval_Header_Id'];
                                        $eval_header_order = $rowz['Order_val']; ?>

                                        <div class="metric-items-div" id="metric_items_<?= $db_eval_header ?>" style="display:none;">

                                            <table class="table table-sm">

                                                <tbody>

                                                    <?php

                                                        $query ="SELECT 
                                                                    Eval_Metric_Id, 
                                                                    Metric_desc 
                                                                FROM 
                                                                    evaluation_metrics 
                                                                WHERE 
                                                                    Status = 1 
                                                                    AND Eval_Header_Id = '".$db_eval_header."' ";

                                                        $fetch = mysqli_query($con, $query);

                                                        if($fetch){

                                                            while($row = mysqli_fetch_assoc($fetch)){

                                                                $eval_metric_Id = $row['Eval_Metric_Id'];
                                                                $metric_desc    = $row['Metric_desc'];

                                                                echo '<tr>';

                                                                echo '<td style="vertical-align:middle; max-width:500px;">'.$metric_desc.'</td>';

                                                                echo '<td class="d-flex align-items-center" style="margin-left:50px;">';

                                                                $query2="SELECT 
                                                                            Metric_Val_Id, 
                                                                            Metric_val_no, 
                                                                            Metric_val_desc 
                                                                        FROM 
                                                                            metric_values 
                                                                        WHERE 
                                                                            Status = 1 ";
                                                                
                                                                $fetch2 = mysqli_query($con, $query2);

                                                                $count2 = mysqli_num_rows($fetch2);

                                                                if($fetch2){

                                                                    $counter2 = 1;

                                                                    while($row2 = mysqli_fetch_assoc($fetch2)){

                                                                        $metric_val_Id  = $row2['Metric_Val_Id'];
                                                                        $metric_val_no  = $row2['Metric_val_no'];
                                                                        $metric_val_desc= $row2['Metric_val_desc'];

                                                                        if($counter2 == 1){

                                                                            echo "<p style='vertical-align: top;'>".$metric_val_desc." - </p>";
                                                                        }
                                                                        
                                                                        echo "<div class='mr-4 ml-4 text-center'>
                                                                                <input type='radio' name='metric_Id_val_".$eval_metric_Id."' evalmetricid='".$eval_metric_Id."' metricvalid='".$metric_val_Id."'><br>
                                                                                <h4 class='font-weight-bold'>".$metric_val_no."</h4>
                                                                            </div>";

                                                                        if($counter2 == $count2){

                                                                            echo "<p style='vertical-align: top;'> - ".$metric_val_desc."</p>";
                                                                        }

                                                                        $counter2++;
                                                                    }
                                                                }


                                                                echo '</td>';
                                                                echo '</tr>';

                                                            }
                                                        }
                                                    ?>
                                                    
                                                </tbody>
                                            </table>

                                        </div>

                                    <?php }
                                }
                                                
                            ?>

                        </div>
                    <!-- ================= Metrics END =================== -->

                    <hr>

                    <!-- <div class="text-right">

                        <button 
                            type="button" 
                            class="btn btn-primary font-weight-bold text-uppercase">
                            Next
                        </button>

                    </div> -->

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


            function viewHeaderMetrics(header_Id){

                $('.metric-items-div').hide()

                $('#metric_items_'+header_Id).show()

                $('.header-link-ind').removeClass('bg-info')
                $('.header-link-ind').addClass('bg-secondary')
                $('.header-link-txt').removeClass('text-info')

                $('#header_link_ind_'+header_Id).addClass('bg-info')
                $('#header_link_txt_'+header_Id).addClass('text-info')
            }

        </script>

    </body>

</html>