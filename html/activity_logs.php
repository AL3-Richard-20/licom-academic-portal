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


        <title><?= $appname ?></title>


        <!-- Custom CSS -->
        <!-- <link href="../assets/libs/chartist/dist/chartist.min.css" rel="stylesheet">
        <link href="../assets/extra-libs/c3/c3.min.css" rel="stylesheet">
        <link href="../assets/libs/morris.js/morris.css" rel="stylesheet"> -->


        <!-- <link href="../assets/extra-libs/DataTables/DataTables-1.10.16/css/dataTables.bootstrap.min.css" rel="stylesheet">
        <link href="../assets/extra-libs/DataTables/DataTables-1.10.16/css/dataTables.bootstrap4.min.css" rel="stylesheet">
        <link href="../assets/extra-libs/DataTables/DataTables-1.10.16/css/jquery.dataTables.min.css" rel="stylesheet"> -->

        <link href="../assets/libs/datatables/media/css/dataTable.dataTable.css" rel="stylesheet">
        <link href="../assets/libs/datatables/media/css/buttons.dataTable.css" rel="stylesheet">


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
                            <h4 class="page-title font-weight-bold text-uppercase">Activity Logs</h4>
                            <div class="d-flex align-items-center">

                            </div>
                        </div>
                        <div class="col-7 align-self-center">
                            <div class="d-flex no-block justify-content-end align-items-center">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item">
                                            <a href="#">Activity Logs</a>
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

                    <div class="card">

                        <div class="card-header bg-white">
                            <div class="row">
                                <div class="col-lg-6">
                                    <!-- <p><b>Filter by:</b></p> -->
                                    <button 
                                        type="button" 
                                        class="btn btn-secondary btn-sm font-weight-bold text-uppercase">
                                        <span class="fa fa-calendar"></span>
                                        &nbspFilter
                                    </button>
                                </div>
                                <div class="col-lg-6 text-right">
                                    <!-- <p style="color:transparent;">Action</p> -->
                                    <!-- <button 
                                        type="button" 
                                        class="btn btn-success btn-sm font-weight-bold text-uppercase"
                                        onclick="location.href='add_new_student.php';">
                                        <span class="fa fa-plus"></span>
                                        Add New
                                    </button> -->
                                </div>
                            </div>
                        </div>

                        <div class="card-body">

                            <table class="table table-hover" id="accounts_tbl">
                                <thead class="table-bordered font-weight-bold text-uppercase">
                                    <tr>
                                        <th>Detail</th>
                                        <th>User</th>
                                        <th>Date Added</th>
                                    </tr>
                                </thead>
                                <tbody class="table-sm">
                                    <?php

                                        $query="SELECT 
                                                    users.FName, 
                                                    users.LName, 
                                                    activity_logs.Activity_Log_Id, 
                                                    activity_logs.Log_detail, 
                                                    activity_logs.User_Id, 
                                                    activity_logs.Date_added, 
                                                    activity_logs.Time_added  
                                                FROM 
                                                    activity_logs
                                                LEFT JOIN 
                                                    users 
                                                ON 
                                                    activity_logs.User_Id = users.User_Id 
                                                WHERE 
                                                    activity_logs.Status = 1 ";

                                        $fetch = mysqli_query($con, $query);

                                        if($fetch){

                                            while($row = mysqli_fetch_assoc($fetch)){

                                                $user_Id    = $row['User_Id'];
                                                $user_fname = $row['FName'];
                                                $user_lname = $row['LName'];
                                                
                                                $activity_Log_Id    = $row['Activity_Log_Id'];
                                                $log_detail         = $row['Log_detail'];
                                                $date_added         = dateFormat($row['Date_added']);
                                                $time_added         = timeFormat($row['Time_added']);

                                                echo "<tr>";

                                                echo "<td class='font-weight-bold'>".$log_detail."</td>";
                                                echo "<td>".$user_fname." ".$user_lname."</td>";
                                                echo "<td>".$date_added." | ".$time_added."</td>";

                                                // echo "<td class='text-center'>
                                                //         <button 
                                                //             type='button' 
                                                //             class='btn btn-outline-light text-danger btn-sm' 
                                                //             onclick='deleteUser(`".$user_Id."`)'>
                                                //             <span class='fa fa-trash'></span>
                                                //         </button>
                                                //     </td>";

                                                echo "</tr>";
                                            }
                                        }
                                    ?>
                                </tbody>
                            </table>

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

        <!-- <script src="../assets/extra-libs/DataTables/DataTables-1.10.16/js/dataTables.bootstrap.min.js"></script>
        <script src="../assets/extra-libs/DataTables/DataTables-1.10.16/js/dataTables.bootstrap4.min.js"></script>
        <script src="../assets/extra-libs/DataTables/DataTables-1.10.16/js/jquery.dataTables.min.js"></script> -->

        <script src="../assets/libs/datatables/media/js/dataTable.js"></script>
        <script src="../assets/libs/datatables/media/js/dataTables.buttons.js"></script>
        <script src="../assets/libs/datatables/media/js/buttons.dataTables.js"></script>
        <script src="../assets/libs/datatables/media/js/jszip.min.js"></script>
        <script src="../assets/libs/datatables/media/js/pdfmake.min.js"></script>
        <script src="../assets/libs/datatables/media/js/vfs_fonts.js"></script>
        <script src="../assets/libs/datatables/media/js/buttons.html5.min.js"></script>

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

                $('#accounts_tbl').DataTable({
                    "bSort":false,
                    "bInfo":false,
                    layout: {
                        topStart: {
                            buttons: ['copy', 'csv', 'excel', 'pdf', 'print']
                        }
                    }
                })
            })

        </script>

    </body>

</html>