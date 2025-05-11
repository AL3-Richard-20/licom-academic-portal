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
                        <h4 class="page-title">Weather Cards</h4>
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
                <!-- Row -->
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <img class="card-img-top" src="../../assets/images/img3.jpg" alt="Card image cap" style="max-height: 450px">
                            <div class="card-img-overlay">
                                <div class="text-white">
                                    <span><i class="wi wi-day-sunny display-4"></i></span>
                                    <br>
                                    <span class="display-6">20°
                                            <span class="font-20">C</span>
                                    </span>
                                    <span class="font-20">/</span>
                                    <span class="font-20">7°
                                                            <span class="font-size-16">C</span>
                                    </span>
                                    <p class="font-14 m-b-0">THURSDAY 01.08.2018</p>
                                </div>
                            </div>
                            <div class="card-footer bg-white">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="row text-center">
                                            <div class="col-6 col-md-2 border-right">
                                                <div class="m-b-10">TUE</div>
                                                <i class="wi wi-day-cloudy font-20 m-b-10"></i>
                                                <div>24°
                                                    <span>C</span>
                                                </div>
                                            </div>
                                            <div class="col-6 col-md-2 border-right">
                                                <div class="m-b-10">WED</div>
                                                <i class="wi wi-day-cloudy font-20 m-b-10"></i>
                                                <div>21°
                                                    <span>C</span>
                                                </div>
                                            </div>
                                            <div class="col-6 col-md-2 border-right">
                                                <div class="m-b-10">THU</div>
                                                <i class="wi wi-day-sunny font-20 m-b-10"></i>
                                                <div>25°
                                                    <span>C</span>
                                                </div>
                                            </div>
                                            <div class="col-6 col-md-2 border-right">
                                                <div class="m-b-10">FRI</div>
                                                <i class="wi wi-day-cloudy-gusts font-20 m-b-10"></i>
                                                <div>20°
                                                    <span>C</span>
                                                </div>
                                            </div>
                                            <div class="col-6 col-md-2 border-right">
                                                <div class="m-b-10">SAT</div>
                                                <i class="wi wi-day-lightning font-20 m-b-10"></i>
                                                <div>18°
                                                    <span>C</span>
                                                </div>
                                            </div>
                                            <div class="col-6 col-md-2">
                                                <div class="m-b-10">SUN</div>
                                                <i class="wi wi-day-storm-showers font-20 m-b-10"></i>
                                                <div>14°
                                                    <span>C</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Row -->
                <!-- Row -->
                <div class="row">
                    <div class="col-sm-12 col-md-6">
                        <div class="card bg-info">
                            <div class="card-body">
                                <div class="text-center text-white">
                                    <h4 class="card-title">Lester, London</h4>
                                    <h5 class="font-light">MONDAY May 11, 2017</h5>
                                    <div class="m-t-30">
                                        <span class="display-5 text-white"><i class="wi wi-day-rain-mix"></i></span>
                                        <div class="d-inline-block m-l-30">
                                            <h2> 29° C</h2>
                                            <h4 class="font-light">Day Rain</h4>
                                        </div>
                                    </div>
                                    <div class="row m-t-30">
                                        <div class="col-md-12">
                                            <div class="row text-center">
                                                <div class="col-6 col-md-2">
                                                    <div class="m-b-10">TUE</div>
                                                    <i class="wi wi-day-cloudy font-20 m-b-10"></i>
                                                    <div>24°
                                                        <span>C</span>
                                                    </div>
                                                </div>
                                                <div class="col-6 col-md-2">
                                                    <div class="m-b-10">WED</div>
                                                    <i class="wi wi-day-cloudy font-20 m-b-10"></i>
                                                    <div>21°
                                                        <span>C</span>
                                                    </div>
                                                </div>
                                                <div class="col-6 col-md-2">
                                                    <div class="m-b-10">THU</div>
                                                    <i class="wi wi-day-sunny font-20 m-b-10"></i>
                                                    <div>25°
                                                        <span>C</span>
                                                    </div>
                                                </div>
                                                <div class="col-6 col-md-2">
                                                    <div class="m-b-10">FRI</div>
                                                    <i class="wi wi-day-cloudy-gusts font-20 m-b-10"></i>
                                                    <div>20°
                                                        <span>C</span>
                                                    </div>
                                                </div>
                                                <div class="col-6 col-md-2">
                                                    <div class="m-b-10">SAT</div>
                                                    <i class="wi wi-day-lightning font-20 m-b-10"></i>
                                                    <div>18°
                                                        <span>C</span>
                                                    </div>
                                                </div>
                                                <div class="col-6 col-md-2">
                                                    <div class="m-b-10">SUN</div>
                                                    <i class="wi wi-day-storm-showers font-20 m-b-10"></i>
                                                    <div>14°
                                                        <span>C</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-header bg-success text-white">
                                        <h4 class="card-title"><i class="ti-location-pin"></i> Lester</h4>
                                    </div>
                                    <div class="card-body">
                                        <div class="d-flex no-block align-items-center">
                                            <div>
                                                <h4 class="text-muted font-light">Fri 20/5</h4>
                                                <h2>27° C</h2>
                                            </div>
                                            <div class="ml-auto text-muted">
                                                <span><i class="display-6 wi wi-cloudy"></i></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex no-block align-items-center">
                                            <div class="text-muted">
                                                <span class="display-6"><i class="wi wi-fog"></i></span>
                                                <h6 class="m-t-10"><i class="ti-location-pin"></i> Lester</h6>
                                            </div>
                                            <div class="ml-auto">
                                                <h2>27° C</h2>
                                                <h4 class="text-muted font-light">Fri 20/5</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Row -->
                <!-- Row -->
                <div class="card-group">
                    <!-- Column -->
                    <div class="card bg-dark">
                        <div class="card-body text-center">
                            <div class="text-white p-20">
                                <h2>27° C</h2>
                                <h5 class="font-light">Lester, London</h5>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    <!-- Column -->
                    <div class="card">
                        <div class="card-body text-center">
                            <span class="text-muted display-6"><i class=" wi wi-night-alt-cloudy"></i></span>
                            <div class="d-flex no-block align-items-center m-t-20">
                                <h5 class="font-light"><i class="text-muted wi wi-strong-wind"></i> 10kmph</h5>
                                <div class="ml-auto">
                                    <h5 class="font-light">40%</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                </div>
                <!-- End Row -->
                <!-- Row -->
                <div class="row">
                    <div class="col-md-6">
                        <div class="card-group">
                            <!-- Column -->
                            <div class="card bg-success">
                                <div class="card-body text-center text-white">
                                    <div class="p-20">
                                        <h2>27° C</h2>
                                        <h5 class="font-light m-t-20">Lester, London</h5>
                                    </div>
                                </div>
                            </div>
                            <!-- Column -->
                            <!-- Column -->
                            <div class="card bg-success">
                                <div class="card-body text-center text-white">
                                    <span class="display-6"><i class="wi wi-hail"></i></span>
                                    <div class="m-t-15">
                                        <h5 class="font-light">12.10.2018</h5>
                                    </div>
                                </div>
                            </div>
                            <!-- Column -->
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card text-white">
                            <img class="card-img" src="../../assets/images/background/weatherbg.jpg" alt="Card image">
                            <div class="card-img-overlay text-white">
                                <div class="d-flex no-block align-items-center">
                                    <h5 class="font-medium">Lester, London</h5>
                                    <div class="ml-auto">
                                        <span><i class="ti-location-pin"></i></span>
                                    </div>
                                </div>
                                <span><i class="display-6 wi wi-sandstorm"></i></span>
                                <div class="d-inline-block m-l-15">
                                    <span class="display-6">14°</span>
                                    <span class="font-24">C</span>
                                    <span class="font-18">/ 7° C</span>
                                </div>
                                <div class="m-t-10 m-b-10">
                                    <h5 class="m-b-0">WEDNESDAY</h5>
                                    <h6>1.8.2018</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end row -->
                <!-- row -->
                <div class="row">
                    <div class="col-md-6">
                        <div class="card text-center">
                            <div class="card-body bg-cyan text-white">
                                <span><i class="display-6 wi wi-sandstorm"></i></span>
                                <div class="d-inline-block m-l-15">
                                    <span class="display-6">14°</span>
                                    <span class="font-24">C</span>
                                    <span class="font-18">/ 7° C</span>
                                </div>
                            </div>
                            <div class="card-footer text-cyan bg-white">
                                5 May 2018
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-body bg-info text-white text-center">
                                <div class="d-inline-block m-l-15">
                                    <span class="display-6">4°</span>
                                    <span class="font-24">C</span>
                                    <span class="font-18">/ 7° C</span>
                                </div>
                                <span class="m-l-10"><i class="display-6 wi wi-day-cloudy"></i></span>
                            </div>
                            <div class="card-footer text-info bg-white">
                                <div class="d-flex no-block align-items-center">
                                    <h5 class="m-b-0"><i class="wi wi-day-storm-showers"></i> 15kmph</h5>
                                    <div class="ml-auto">
                                        <h5 class="m-b-0">40%</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end row -->
                <!-- row -->
                <div class="row">
                    <div class="col-md-6">
                        <div class="card text-center">
                            <div class="card-body bg-primary text-white">
                                <div class="p-25">
                                    <span><i class="display-4 wi wi-sleet"></i></span>
                                    <br>
                                    <span class="display-6 m-t-15">-9°</span>
                                    <span class="font-24">C</span>
                                    <h5 class="font-light">Snowing</h5>
                                </div>
                            </div>
                            <div class="card-footer text-primary bg-white">
                                <h4 class="font-medium">Lester, London</h4>
                                <h5 class="font-light m-b-0">Today, 04:00AM</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-body bg-white text-center text-muted">
                                <div class="p-30">
                                    <span><i class="display-6 wi wi-day-cloudy"></i></span>
                                </div>
                            </div>
                            <div class="card-footer text-white bg-dark p-30">
                                <div class="d-flex no-block align-items-center">
                                    <div class="text-center">
                                        <h3 class="font-medium"><i class="text-success ti-angle-up"></i> 14° C</h3>
                                        <h5 class="font-light">High</h5>
                                    </div>
                                    <div class="ml-auto">
                                        <div class="text-center">
                                            <h3 class="font-medium"><i class="text-danger ti-angle-down"></i> 2° C</h3>
                                            <h5 class="font-light">Low</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end row -->
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



    <<!-- ============================================================== -->
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


</body>

</html>