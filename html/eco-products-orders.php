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


        <title>Title Here</title>


        <!-- This page plugin CSS -->
        <link href="../assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.css" rel="stylesheet">


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
                        <h4 class="page-title">Product Orders</h4>
                        <div class="d-flex align-items-center">

                        </div>
                    </div>
                    <div class="col-7 align-self-center">
                        <div class="d-flex no-block justify-content-end align-items-center">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item">
                                        <a href="#">Home</a>
                                    </li>
                                    <li class="breadcrumb-item active" aria-current="page">Library</li>
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
                    <!-- Column -->
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table product-overview" id="zero_config">
                                        <thead>
                                            <tr>
                                                <th>Customer</th>
                                                <th>Order ID</th>
                                                <th>Photo</th>
                                                <th>Product</th>
                                                <th>Quantity</th>
                                                <th>Date</th>
                                                <th>Status</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Steave Jobs</td>
                                                <td>#85457898</td>
                                                <td> <img src="../assets/images/gallery/chair.jpg" alt="iMac" width="80"> </td>
                                                <td>Rounded Chair</td>
                                                <td>20</td>
                                                <td>10-7-2017</td>
                                                <td> <span class="label label-success font-weight-100">Paid</span> </td>
                                                <td><a href="javascript:void(0)" class="text-inverse p-r-10" data-toggle="tooltip" title="Edit"><i class="ti-marker-alt"></i></a> <a href="javascript:void(0)" class="text-inverse" title="Delete" data-toggle="tooltip"><i class="ti-trash"></i></a></td>
                                            </tr>
                                            <tr>
                                                <td>Varun Dhavan</td>
                                                <td>#95457898</td>
                                                <td> <img src="../assets/images/gallery/chair2.jpg" alt="iPhone" width="80"> </td>
                                                <td>Wooden Chair</td>
                                                <td>25</td>
                                                <td>09-7-2017</td>
                                                <td> <span class="label label-warning font-weight-100">Pending</span> </td>
                                                <td><a href="javascript:void(0)" class="text-inverse p-r-10" data-toggle="tooltip" title="Edit"><i class="ti-marker-alt"></i></a> <a href="javascript:void(0)" class="text-inverse" title="Delete" data-toggle="tooltip"><i class="ti-trash"></i></a></td>
                                            </tr>
                                            <tr>
                                                <td>Ritesh Desh</td>
                                                <td>#68457898</td>
                                                <td> <img src="../assets/images/gallery/chair3.jpg" alt="apple_watch" width="80"> </td>
                                                <td>Gray Chair</td>
                                                <td>12</td>
                                                <td>08-7-2017</td>
                                                <td> <span class="label label-success font-weight-100">Paid</span> </td>
                                                <td><a href="javascript:void(0)" class="text-inverse p-r-10" data-toggle="tooltip" title="Edit"><i class="ti-marker-alt"></i></a> <a href="javascript:void(0)" class="text-inverse" title="Delete" data-toggle="tooltip"><i class="ti-trash"></i></a></td>
                                            </tr>
                                            <tr>
                                                <td>Hrithik</td>
                                                <td>#45457898</td>
                                                <td> <img src="../../assets/images/gallery/chair4.jpg" alt="mac_mouse" width="80"> </td>
                                                <td>Pure Wooden chair</td>
                                                <td>18</td>
                                                <td>02-7-2017</td>
                                                <td> <span class="label label-danger font-weight-100">Failed</span> </td>
                                                <td><a href="javascript:void(0)" class="text-inverse p-r-10" data-toggle="tooltip" title="Edit"><i class="ti-marker-alt"></i></a> <a href="javascript:void(0)" class="text-inverse" title="Delete" data-toggle="tooltip"><i class="ti-trash"></i></a></td>
                                            </tr>
                                            <tr>
                                                <td>Genelia Jobs</td>
                                                <td>#65257898</td>
                                                <td> <img src="../../assets/images/gallery/chair.jpg" alt="iMac" width="80"> </td>
                                                <td>Globe Rounded Chair</td>
                                                <td>25</td>
                                                <td>08-7-2017</td>
                                                <td> <span class="label label-success font-weight-100">Paid</span> </td>
                                                <td><a href="javascript:void(0)" class="text-inverse p-r-10" data-toggle="tooltip" title="Edit"><i class="ti-marker-alt"></i></a> <a href="javascript:void(0)" class="text-inverse" title="Delete" data-toggle="tooltip"><i class="ti-trash"></i></a></td>
                                            </tr>
                                            <tr>
                                                <td>Sonu Nigam</td>
                                                <td>#15457898</td>
                                                <td> <img src="../../assets/images/gallery/chair2.jpg" alt="iPhone" width="80"> </td>
                                                <td>Gold Wooden Chair</td>
                                                <td>15</td>
                                                <td>06-7-2017</td>
                                                <td> <span class="label label-warning font-weight-100">Pending</span> </td>
                                                <td><a href="javascript:void(0)" class="text-inverse p-r-10" data-toggle="tooltip" title="Edit"><i class="ti-marker-alt"></i></a> <a href="javascript:void(0)" class="text-inverse" title="Delete" data-toggle="tooltip"><i class="ti-trash"></i></a></td>
                                            </tr>
                                            <tr>
                                                <td>Pawan Trivedi</td>
                                                <td>#56457898</td>
                                                <td> <img src="../../assets/images/gallery/chair3.jpg" alt="apple_watch" width="80"> </td>
                                                <td>Still Gray Chair</td>
                                                <td>11</td>
                                                <td>05-7-2017</td>
                                                <td> <span class="label label-success font-weight-100">Paid</span> </td>
                                                <td><a href="javascript:void(0)" class="text-inverse p-r-10" data-toggle="tooltip" title="Edit"><i class="ti-marker-alt"></i></a> <a href="javascript:void(0)" class="text-inverse" title="Delete" data-toggle="tooltip"><i class="ti-trash"></i></a></td>
                                            </tr>
                                            <tr>
                                                <td>Ranbir kapoor</td>
                                                <td>#35457898</td>
                                                <td> <img src="../../assets/images/gallery/chair4.jpg" alt="mac_mouse" width="80"> </td>
                                                <td>Comfirtable chair</td>
                                                <td>28</td>
                                                <td>01-7-2017</td>
                                                <td> <span class="label label-danger font-weight-100">Failed</span> </td>
                                                <td><a href="javascript:void(0)" class="text-inverse p-r-10" data-toggle="tooltip" title="Edit"><i class="ti-marker-alt"></i></a> <a href="javascript:void(0)" class="text-inverse" title="Delete" data-toggle="tooltip"><i class="ti-trash"></i></a></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
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
    <?php include "includes/customizer.php"; ?>
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


    <!--Wave Effects -->
    <script src="../dist/js/waves.js"></script>


    <!--Menu sidebar -->
    <script src="../dist/js/sidebarmenu.js"></script>


    <!--Custom JavaScript -->
    <script src="../dist/js/custom.min.js"></script>


    <!--This page plugins -->
    <script src="../assets/extra-libs/DataTables/datatables.min.js"></script>
    <script src="../dist/js/pages/datatable/datatable-basic.init.js"></script>


</body>

</html>