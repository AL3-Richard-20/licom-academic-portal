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
                        <h4 class="page-title">Sparkline Chart</h4>
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
                    <div class="col-lg-3 col-md-6">
                        <div class="card">
                            <div class="card-body analytics-info">
                                <h4 class="card-title">Total Visit</h4>
                                <div class="d-flex no-block align-items-center">
                                    <div id="sparklinedash"></div>
                                    <div class="ml-auto">
                                        <i class="ti-arrow-up text-dark"></i> <span class="counter text-dark">1659</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="card">
                            <div class="card-body analytics-info">
                                <h4 class="card-title">Total Page Views</h4>
                                <div class="d-flex no-block align-items-center">
                                    <div id="sparklinedash2"></div>
                                    <div class="ml-auto">
                                        <i class="ti-arrow-up text-purple"></i> <span class="counter text-purple">7469</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="card">
                            <div class="card-body analytics-info">
                                <h4 class="card-title">Unique Visitor</h4>
                                <div class="d-flex no-block align-items-center">
                                    <div id="sparklinedash3"></div>
                                    <div class="ml-auto">
                                        <i class="ti-arrow-up text-info"></i> <span class="counter text-info">6011</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="card">
                            <div class="card-body analytics-info">
                                <h4 class="card-title">Bounce Rate</h4>
                                <div class="d-flex no-block align-items-center">
                                    <div id="sparklinedash4"></div>
                                    <div class="ml-auto">
                                        <i class="ti-arrow-down text-danger"></i> <span class="text-danger">18%</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4">
                        <div class="card">
                            <div class="card-body analytics-info">
                                <h4 class="card-title">Total Visit <small class="text-info m-l-15"><i class="fas fa-sort-up"></i> 18% High then last month</small></h4>
                                <div class="d-flex no-block align-items-center m-b-20">
                                    <div class="">
                                        <h6>Overall Growth</h6>
                                        <b>80.40%</b></div>
                                    <div class="m-l-15 p-l-15 border-left">
                                        <h6>Montly</h6>
                                        <b>15.40%</b></div>
                                    <div class="m-l-15 p-l-15 border-left">
                                        <h6>Day</h6>
                                        <b>5.50%</b></div>
                                </div>
                                <div id="sparkline8"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="card">
                            <div class="card-body analytics-info">
                                <h4 class="card-title">Site Traffic</h4>
                                <div class="d-flex no-block align-items-center m-b-20">
                                    <div class="">
                                        <h6>Overall Growth</h6>
                                        <b>80.40%</b></div>
                                    <div class="m-l-15 p-l-15 border-left">
                                        <h6>Montly</h6>
                                        <b>15.40%</b></div>
                                    <div class="m-l-15 p-l-15 border-left">
                                        <h6>Day</h6>
                                        <b>5.50%</b></div>
                                </div>
                                <div id="sparkline9"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="card">
                            <div class="card-body analytics-info">
                                <h4 class="card-title">Site Visit</h4>
                                <div class="d-flex no-block align-items-center m-b-20">
                                    <div class="">
                                        <h6>Overall Growth</h6>
                                        <b>80.40%</b></div>
                                    <div class="m-l-15 p-l-15 border-left">
                                        <h6>Montly</h6>
                                        <b>15.40%</b></div>
                                    <div class="m-l-15 p-l-15 border-left">
                                        <h6>Day</h6>
                                        <b>5.50%</b></div>
                                </div>
                                <div id="sparkline10"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4">
                        <div class="card">
                            <div class="card-body analytics-info">
                                <h4 class="card-title">Bar Chart</h4>
                                <div id="sparkline12" class="text-center"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="card">
                            <div class="card-body analytics-info">
                                <h4 class="card-title">Pie Chart</h4>
                                <div id="sparkline11" class="text-center"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="card">
                            <div class="card-body analytics-info">
                                <h4 class="card-title">Composite Bar Chart</h4>
                                <div id="sparkline13" class="text-center"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4">
                        <div class="card">
                            <div class="card-body bg-primary analytics-info">
                                <h4 class="card-title text-white">Line Chart</h4>
                                <div id="sparkline14"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="card">
                            <div class="card-body analytics-info">
                                <h4 class="card-title">Bar with different color Chart</h4>
                                <div id="sparkline15" class="text-center"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="card">
                            <div class="card-body analytics-info">
                                <h4 class="card-title">Line Chart</h4>
                                <div id="sparkline16" class="text-center"></div>
                            </div>
                        </div>
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


    <!-- This Page JS -->
    <script src="../dist/js/pages/sparkline/jquery.charts-sparkline.js"></script>


</body>

</html>