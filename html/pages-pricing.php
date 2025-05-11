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
                        <h4 class="page-title">Pricing Page</h4>
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
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="card-group">
                                    <div class="card m-t-30 border-top border-left">
                                        <div class="p-15 text-center">
                                            <h4 class="card-title m-t-10">Silver</h4>
                                            <h2 class="display-5 position-relative m-t-20 m-b-10">
                                                <span class="price-sign">$</span>24
                                            </h2>
                                            <p>Per Month</p>
                                        </div>
                                        <div class="border-top">
                                            <ul class="list-style-none text-center">
                                                <li class="border-bottom p-20">
                                                    <i class="ti-user m-r-5"></i>3 Members
                                                </li>
                                                <li class="border-bottom p-20">
                                                    <i class="ti-mobile m-r-5"></i>Single Device
                                                </li>
                                                <li class="border-bottom p-20">
                                                    <i class="ti-server m-r-5"></i>50GB Storage
                                                </li>
                                                <li class="border-bottom p-20">
                                                    <i class="ti-reload m-r-5"></i>Monthly Backups
                                                </li>
                                                <li class="border-bottom p-20">
                                                    <button class="btn btn-success waves-effect waves-light">Sign up</button>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="card border-top m-t-30">
                                        <div class="p-15 text-center">
                                            <h4 class="card-title m-t-10 text-center">Gold</h4>
                                            <h2 class="display-5 position-relative m-t-20 m-b-10">
                                                <span class="price-sign">$</span>34
                                            </h2>
                                            <p>Per Month</p>
                                        </div>
                                        <div class="border-top">
                                            <ul class="list-style-none text-center">
                                                <li class="border-bottom p-20">
                                                    <i class="ti-user m-r-5"></i>5 Members
                                                </li>
                                                <li class="border-bottom p-20">
                                                    <i class="ti-mobile m-r-5"></i>Single Device
                                                </li>
                                                <li class="border-bottom p-20">
                                                    <i class="ti-server m-r-5"></i>80GB Storage
                                                </li>
                                                <li class="border-bottom p-20">
                                                    <i class="ti-reload m-r-5"></i>Monthly Backups
                                                </li>
                                                <li class="border-bottom p-20">
                                                    <button class="btn btn-success waves-effect waves-light">Sign up</button>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="card bg-light border-top border-left">
                                        <h5 class="price-label text-white text-center bg-info">Popular</h5>
                                        <div class="p-15 text-center">
                                            <h4 class="card-title m-t-40 text-center">Platinum</h4>
                                            <h2 class="display-5 position-relative m-t-20 m-b-10">
                                                <span class="price-sign">$</span>45
                                            </h2>
                                            <p>Per Month</p>
                                        </div>
                                        <div class="border-top">
                                            <ul class="list-style-none text-center">
                                                <li class="border-bottom p-20">
                                                    <i class="ti-user m-r-5"></i>10 Members
                                                </li>
                                                <li class="border-bottom p-20">
                                                    <i class="ti-mobile m-r-5"></i>Single Device
                                                </li>
                                                <li class="border-bottom p-20">
                                                    <i class="ti-server m-r-5"></i>120GB Storage
                                                </li>
                                                <li class="border-bottom p-20">
                                                    <i class="ti-reload m-r-5"></i>Monthly Backups
                                                </li>
                                                <li class="border-bottom p-20">
                                                    <button class="btn btn-lg btn-info waves-effect waves-light">Sign up</button>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="card border-top m-t-30">
                                        <div class="p-15 text-center">
                                            <h4 class="card-title m-t-10 text-center">Diamond</h4>
                                            <h2 class="display-5 position-relative m-t-20 m-b-10">
                                                <span class="price-sign">$</span>54
                                            </h2>
                                            <p>Per Month</p>
                                        </div>
                                        <div class="border-top">
                                            <ul class="list-style-none text-center">
                                                <li class="border-bottom p-20">
                                                    <i class="ti-user m-r-5"></i>15 Members
                                                </li>
                                                <li class="border-bottom p-20">
                                                    <i class="ti-mobile m-r-5"></i>Single Device
                                                </li>
                                                <li class="border-bottom p-20">
                                                    <i class="ti-server m-r-5"></i>1TB Storage
                                                </li>
                                                <li class="border-bottom p-20">
                                                    <i class="ti-reload m-r-5"></i>Monthly Backups
                                                </li>
                                                <li class="border-bottom p-20">
                                                    <button class="btn btn-success waves-effect waves-light">Sign up</button>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
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


</body>

</html>