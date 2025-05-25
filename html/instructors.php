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
        <link href="../assets/libs/chartist/dist/chartist.min.css" rel="stylesheet">
        <link href="../assets/extra-libs/c3/c3.min.css" rel="stylesheet">
        <link href="../assets/libs/morris.js/morris.css" rel="stylesheet">


        <link href="../assets/extra-libs/DataTables/DataTables-1.10.16/css/dataTables.bootstrap.min.css" rel="stylesheet">
        <link href="../assets/extra-libs/DataTables/DataTables-1.10.16/css/dataTables.bootstrap4.min.css" rel="stylesheet">
        <link href="../assets/extra-libs/DataTables/DataTables-1.10.16/css/jquery.dataTables.min.css" rel="stylesheet">


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
                            <h4 class="page-title font-weight-bold text-uppercase">Instructor Records</h4>
                            <div class="d-flex align-items-center">

                            </div>
                        </div>
                        <div class="col-7 align-self-center">
                            <div class="d-flex no-block justify-content-end align-items-center">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item">
                                            <a href="#">Instructors</a>
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
                                    <button 
                                        type="button" 
                                        class="btn btn-success btn-sm font-weight-bold text-uppercase"
                                        onclick="location.href='add_new_instructor.php';">
                                        <span class="fa fa-plus"></span>
                                        Add New
                                    </button>
                                </div>
                            </div>
                        </div>

                        <div class="card-body">

                            <div class="table-responsive">

                                <table class="table table-hover" style="width:100%;" id="instructors_tbl">

                                    <thead class="table-bordered font-weight-bold text-uppercase">
                                        <tr>
                                            <th>ID</th>
                                            <th>Name</th>
                                            <th>Contact No.</th>
                                            <th>Date Added</th>
                                            <th>Time Added</th>
                                            <th>Status</th>
                                            <th class="text-center">Action</th>
                                        </tr>
                                    </thead>

                                    <tbody class="table-sm">

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

                                            if($count > 0){

                                                while($row = mysqli_fetch_assoc($fetch)){

                                                    $user_Id    = $row['User_Id'];
                                                    $fname      = $row['FName'];
                                                    $mname      = $row['MName'];
                                                    $lname      = $row['LName'];
                                                    $phone_no   = $row['Phone_no'];
                                                    $date_added = $row['Date_added'];
                                                    $time_added = $row['Time_added'];
                                                    $status     = $row['Status'];

                                                    echo "<tr>";
                                                    echo "<td>#".$user_Id."</td>";
                                                    echo "<td class='font-weight-bold'>".$fname." ".$mname." ".$lname."</td>";
                                                    echo "<td>".$phone_no."</td>";
                                                    echo "<td>".dateFormat($date_added)."</td>";
                                                    echo "<td>".timeFormat($time_added)."</td>";

                                                    if($status == 1){

                                                        $status_txt = '<span class="badge badge-success font-weight-bold text-uppercase">Active</span>';
                                                    }
                                                    else if($status == 2){

                                                        $status_txt = '<span class="badge badge-danger font-weight-bold text-uppercase">Inactive</span>';
                                                    }

                                                    echo "<td>".$status_txt."</td>";
                                                    echo "<td class='text-center'>
                                                        <button 
                                                            type='button' 
                                                            class='btn btn-outline-light btn-sm text-primary' 
                                                            onclick='location.href=`instructor_info.php?instructorid=".$user_Id."`;'>
                                                            <span class='fa fa-pencil-alt'></span>
                                                        </button>
                                                    </td>";
                                                    echo "</tr>";
                                                }
                                            }
                                            else{

                                                echo "<tr>";
                                                echo "<td class='text-center' colspan='7'>No data available in the table.</td>";
                                                echo "</tr>";
                                            }
                                        ?>

                                    </tbody>

                                </table>

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


        <!--Wave Effects -->
        <script src="../dist/js/waves.js"></script>


        <!--Menu sidebar -->
        <script src="../dist/js/sidebarmenu.js"></script>


        <!--Custom JavaScript -->
        <script src="../dist/js/custom.min.js"></script>

        <script>

            $(document).ready(function () {
                
                $('#instructors_tbl').DataTable({

                    "aaSorting": [],
                    "columnDefs": [ {
                        "targets": 6,
                        "orderable": false
                    } ]
                })
            });

        </script>

    </body>

</html>