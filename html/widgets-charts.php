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
        <link href="../assets/libs/chartist/dist/chartist.min.css" rel="stylesheet">
        <link href="../dist/js/pages/chartist/chartist-init.css" rel="stylesheet">
        <link href="../assets/libs/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.css" rel="stylesheet">
        <link href="../assets/extra-libs/css-chart/css-chart.css" rel="stylesheet">
        <link href="../assets/extra-libs/c3/c3.min.css" rel="stylesheet">


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
                        <h4 class="page-title">Chart Widgets</h4>
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
                <!-- Row -->
                <div class="row">
                    <!-- Column -->
                    <div class="col-lg-3 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="row p-t-10 p-b-10">
                                    <!-- Column -->
                                    <div class="col p-r-0">
                                        <h1 class="font-light">86</h1>
                                        <h6 class="text-muted">New Clients</h6></div>
                                    <!-- Column -->
                                    <div class="col text-right align-self-center">
                                        <div data-label="20%" class="css-bar m-b-0 css-bar-primary css-bar-20"><i class="mdi mdi-account-circle"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    <!-- Column -->
                    <div class="col-lg-3 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="row p-t-10 p-b-10">
                                    <!-- Column -->
                                    <div class="col p-r-0">
                                        <h1 class="font-light">248</h1>
                                        <h6 class="text-muted">All Projects</h6></div>
                                    <!-- Column -->
                                    <div class="col text-right align-self-center">
                                        <div data-label="30%" class="css-bar m-b-0 css-bar-danger css-bar-20"><i class="mdi mdi-briefcase-check"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    <!-- Column -->
                    <div class="col-lg-3 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="row p-t-10 p-b-10">
                                    <!-- Column -->
                                    <div class="col p-r-0">
                                        <h1 class="font-light">352</h1>
                                        <h6 class="text-muted">New Items</h6></div>
                                    <!-- Column -->
                                    <div class="col text-right align-self-center">
                                        <div data-label="40%" class="css-bar m-b-0 css-bar-warning css-bar-40"><i class="mdi mdi-star-circle"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    <!-- Column -->
                    <div class="col-lg-3 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="row p-t-10 p-b-10">
                                    <!-- Column -->
                                    <div class="col p-r-0">
                                        <h1 class="font-light">159</h1>
                                        <h6 class="text-muted">Invoices</h6></div>
                                    <!-- Column -->
                                    <div class="col text-right align-self-center">
                                        <div data-label="60%" class="css-bar m-b-0 css-bar-info css-bar-60"><i class="mdi mdi-receipt"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                </div>
                <div class="row">
                    <!-- Column -->
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-12">
                                        <ul class="list-inline float-right">
                                            <li class="list-inline-item">
                                                <h6 class="text-muted"><i class="fa fa-circle m-r-5 text-success"></i>Product A</h6> </li>
                                            <li class="list-inline-item">
                                                <h6 class="text-muted"><i class="fa fa-circle m-r-5 text-info"></i>Product B</h6> </li>
                                        </ul>
                                        <h4 class="card-title">Revenue Statistics</h4>
                                        <h5 class="card-subtitle">January 2017</h5>
                                    </div>
                                    <div class="col-12 m-t-20 revenue">
                                        <div class="total-revenue4" style="height: 350px;"></div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 m-b-30 m-t-20 text-center">
                                        <h1 class="m-b-0 font-light">$54578</h1>
                                        <h6 class="text-muted">Total Revenue</h6></div>
                                    <div class="col-lg-3 col-md-6 m-b-30 m-t-20 text-center">
                                        <h1 class="m-b-0 font-light">$43451</h1>
                                        <h6 class="text-muted">Online Revenue</h6></div>
                                    <div class="col-lg-3 col-md-6 m-b-30 m-t-20 text-center">
                                        <h1 class="m-b-0 font-light">$44578</h1>
                                        <h6 class="text-muted">Product A</h6></div>
                                    <div class="col-lg-3 col-md-6 m-b-30 m-t-20 text-center">
                                        <h1 class="m-b-0 font-light">$12578</h1>
                                        <h6 class="text-muted">Product B</h6></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    <!-- Column -->
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="row">
                                <div class="col-lg-4 col-xlg-3 col-md-4 col-sm-12 b-r">
                                    <div class="card-body">
                                        <h4 class="card-title">User Analatics</h4>
                                        <h5 class="card-subtitle">for the all products</h5>
                                        <div class="row">
                                            <div class="col-lg-12 m-t-40">
                                                <h1 class="m-b-0 font-light">31568</h1>
                                                <h6 class="text-muted">Page views</h6>
                                            </div>
                                            <div class="col-lg-12 m-t-40">
                                                <h1 class="m-b-0 font-light">8457</h1>
                                                <h6 class="text-muted">New Visits</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-8 col-xlg-9 col-md-8 col-sm-12 align-self-center">
                                    <div class="card-body">
                                        <div class="user-analytics chartist-chart" style="height: 250px;">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                </div>
                <!-- Row -->
                <div class="row">
                    <!-- Column -->
                    <div class="col-lg-3 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="text-center">Unique Visit</h4>
                                <div class="gaugejs-box">
                                    <canvas id="foo" class="gaugejs">guage</canvas>
                                </div>
                            </div>
                            <div class="box b-t text-center">
                                <h4 class="font-medium m-b-0">12456</h4></div>
                        </div>
                    </div>
                    <!-- Column -->
                    <!-- Column -->
                    <div class="col-lg-3 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="text-center">Total Visit</h4>
                                <div class="gaugejs-box">
                                    <canvas id="foo2" class="gaugejs">guage</canvas>
                                </div>
                            </div>
                            <div class="box b-t text-center">
                                <h4 class="font-medium m-b-0">$12456</h4></div>
                        </div>
                    </div>
                    <!-- Column -->
                    <!-- Column -->
                    <div class="col-lg-3 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="text-center">Bounce rate</h4>
                                <div class="gaugejs-box">
                                    <canvas id="foo3" class="gaugejs">guage</canvas>
                                </div>
                            </div>
                            <div class="box b-t text-center">
                                <h4 class="font-medium m-b-0">$12456</h4></div>
                        </div>
                    </div>
                    <!-- Column -->
                    <!-- Column -->
                    <div class="col-lg-3 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="text-center">Page Views</h4>
                                <div class="gaugejs-box">
                                    <canvas id="foo4" class="gaugejs">guage</canvas>
                                </div>
                            </div>
                            <div class="box b-t text-center">
                                <h4 class="font-medium m-b-0">$12456</h4></div>
                        </div>
                    </div>
                    <!-- Column -->
                </div>
                <!-- Row -->
                <div class="row">
                    <!-- Column -->
                    <div class="col-lg-4">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Site A Traffic</h4>
                                <div class="d-flex flex-row">
                                    <div class="p-10 p-l-0 b-r">
                                        <h6 class="font-light">Growth</h6><b>80.40%</b></div>
                                    <div class="p-10 b-r">
                                        <h6 class="font-light">Montly</h6><b>20.40%</b>
                                    </div>
                                    <div class="p-10">
                                        <h6 class="font-light">Daily</h6><b>5.40%</b>
                                    </div>
                                </div>
                            </div>
                            <div id="spark1" class="sparkchart"></div>
                        </div>
                    </div>
                    <!-- Column -->
                    <!-- Column -->
                    <div class="col-lg-4">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Site B Traffic</h4>
                                <div class="d-flex flex-row">
                                    <div class="p-10 p-l-0 b-r">
                                        <h6 class="font-light">Growth</h6><b>80.40%</b></div>
                                    <div class="p-10 b-r">
                                        <h6 class="font-light">Montly</h6><b>20.40%</b>
                                    </div>
                                    <div class="p-10">
                                        <h6 class="font-light">Daily</h6><b>5.40%</b>
                                    </div>
                                </div>
                            </div>
                            <div id="spark2" class="sparkchart"></div>
                        </div>
                    </div>
                    <!-- Column -->
                    <!-- Column -->
                    <div class="col-lg-4">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Site C Traffic</h4>
                                <div class="d-flex flex-row">
                                    <div class="p-10 p-l-0 b-r">
                                        <h6 class="font-light">Growth</h6><b>80.40%</b></div>
                                    <div class="p-10 b-r">
                                        <h6 class="font-light">Montly</h6><b>20.40%</b>
                                    </div>
                                    <div class="p-10">
                                        <h6 class="font-light">Daily</h6><b>5.40%</b>
                                    </div>
                                </div>
                            </div>
                            <div id="spark3" class="sparkchart"></div>
                        </div>
                    </div>
                    <!-- Column -->
                </div>
                <!-- Row -->
                <!-- Row -->
                <div class="row">
                    <!-- Column -->
                    <div class="col-lg-3 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <!-- Row -->
                                <div class="row">
                                    <div class="col-8"><span class="display-6">2376 <i class="ti-angle-down font-14 text-danger"></i></span>
                                        <h6>Total Visits</h6></div>
                                    <div class="col-4 align-self-center text-right  p-l-0">
                                        <div id="sparklinedash3"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    <div class="col-lg-3 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <!-- Row -->
                                <div class="row">
                                    <div class="col-8"><span class="display-6">3670 <i class="ti-angle-up font-14 text-success"></i></span>
                                        <h6>Page Views</h6></div>
                                    <div class="col-4 align-self-center text-right p-l-0">
                                        <div id="sparklinedash"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    <div class="col-lg-3 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <!-- Row -->
                                <div class="row">
                                    <div class="col-8"><span class="display-6">1562 <i class="ti-angle-up font-14 text-success"></i></span>
                                        <h6>Unique Visits</h6></div>
                                    <div class="col-4 align-self-center text-right p-l-0">
                                        <div id="sparklinedash2"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    <div class="col-lg-3 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <!-- Row -->
                                <div class="row">
                                    <div class="col-8"><span class="display-6">35% <i class="ti-angle-down font-14 text-danger"></i></span>
                                        <h6>Bounce Rate</h6></div>
                                    <div class="col-4 align-self-center text-right p-l-0">
                                        <div id="sparklinedash4"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Row -->
                <!-- Row -->
                <div class="row">
                    <!-- Column -->
                    <div class="col-lg-3 col-md-6">
                        <div class="card bg-primary">
                            <div class="card-body">
                                <div class="d-flex">
                                    <div>
                                        <h4 class="card-title text-white">Total Sales</h4>
                                        <h6 class="card-subtitle text-white">$9432</h6>
                                    </div>
                                    <div class="ml-auto">
                                        <button type="button" class="btn btn-primary dropdown-toggle p-0" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="icon-settings"></i>
                                        </button>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item" href="javascript:void(0)">Action</a>
                                            <a class="dropdown-item" href="javascript:void(0)">Another action</a>
                                            <a class="dropdown-item" href="javascript:void(0)">Something else here</a>
                                        </div>
                                    </div>
                                </div>
                                <div id="spark4"></div>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    <!-- Column -->
                    <div class="col-lg-3 col-md-6">
                        <div class="card bg-info">
                            <div class="card-body">
                                <div class="d-flex">
                                    <div>
                                        <h4 class="card-title text-white">Monthly Sales</h4>
                                        <h6 class="card-subtitle text-white">$9432</h6>
                                    </div>
                                    <div class="ml-auto">
                                        <button type="button" class="btn btn-info dropdown-toggle p-0" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="icon-settings"></i>
                                        </button>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item" href="javascript:void(0)">Action</a>
                                            <a class="dropdown-item" href="javascript:void(0)">Another action</a>
                                            <a class="dropdown-item" href="javascript:void(0)">Something else here</a>
                                        </div>
                                    </div>
                                </div>
                                <div id="spark5"></div>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    <!-- Column -->
                    <div class="col-lg-3 col-md-6">
                        <div class="card bg-success">
                            <div class="card-body">
                                <div class="d-flex">
                                    <div>
                                        <h4 class="card-title text-white">Weekly Sales</h4>
                                        <h6 class="card-subtitle text-white">$9432</h6>
                                    </div>
                                    <div class="ml-auto">
                                        <button type="button" class="btn btn-success dropdown-toggle p-0" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="icon-settings"></i>
                                        </button>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item" href="javascript:void(0)">Action</a>
                                            <a class="dropdown-item" href="javascript:void(0)">Another action</a>
                                            <a class="dropdown-item" href="javascript:void(0)">Something else here</a>
                                        </div>
                                    </div>
                                </div>
                                <div id="spark6"></div>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    <!-- Column -->
                    <div class="col-lg-3 col-md-6">
                        <div class="card bg-warning">
                            <div class="card-body">
                                <div class="d-flex">
                                    <div>
                                        <h4 class="card-title text-white">Daily Sales</h4>
                                        <h6 class="card-subtitle text-white">$9432</h6>
                                    </div>
                                    <div class="ml-auto">
                                        <button type="button" class="btn btn-warning dropdown-toggle p-0" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="icon-settings"></i>
                                        </button>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item" href="javascript:void(0)">Action</a>
                                            <a class="dropdown-item" href="javascript:void(0)">Another action</a>
                                            <a class="dropdown-item" href="javascript:void(0)">Something else here</a>
                                        </div>
                                    </div>
                                </div>
                                <div id="spark7"></div>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                </div>
                <!-- Row -->
                <div class="card-group">
                    <!-- Column -->
                    <div class="card">
                        <div class="card-body text-center">
                            <h4 class="text-center">Unique Visit</h4>
                            <div id="spark8"></div>
                        </div>
                        <div class="box b-t text-center">
                            <h4 class="font-medium m-b-0"><i class="ti-angle-up text-success"></i>  12456</h4></div>
                    </div>
                    <!-- Column -->
                    <!-- Column -->
                    <div class="card">
                        <div class="card-body text-center">
                            <h4 class="text-center">Total Visit</h4>
                            <div id="spark9"></div>
                        </div>
                        <div class="box b-t text-center">
                            <h4 class="font-medium m-b-0"><i class="ti-angle-down text-danger"></i> 456</h4></div>
                    </div>
                    <!-- Column -->
                    <!-- Column -->
                    <div class="card">
                        <div class="card-body text-center">
                            <h4 class="text-center">Bounce rate</h4>
                            <div id="spark10"></div>
                        </div>
                        <div class="box b-t text-center">
                            <h4 class="font-medium m-b-0"><i class="ti-angle-up text-success"></i>  12456</h4></div>
                    </div>
                    <!-- Column -->
                    <!-- Column -->
                    <div class="card">
                        <div class="card-body text-center">
                            <h4 class="text-center">Page Views</h4>
                            <div id="spark11"></div>
                        </div>
                        <div class="box b-t text-center">
                            <h4 class="font-medium m-b-0"><i class="ti-angle-down text-danger"></i> 456</h4></div>
                    </div>
                    <!-- Column -->
                </div>
                <!-- Row -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="row">
                                <div class="col-lg-9 col-md-7">
                                    <div class="card-body">
                                        <h4 class="card-title">Realtime Data of visits</h4>
                                        <h5 class="card-subtitle">Mon 05 Mar 2017</h5>
                                        <div class="demo-container m-t-20" style="width:100%; height:400px;">
                                            <div id="placeholder" class="flot-chart-content" style="width:100%; height:400px;">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-5 border-left p-l-0">
                                    <div class="text-center m-t-30 m-b-40 p-t-20 p-b-20">
                                        <font class="display-3">25</font>
                                        <h6 class="text-muted">Active Users</h6>
                                        <button type="button" class="btn btn-success">View Details</button>
                                    </div>
                                    <hr>
                                    <div class="card-body">
                                        <div class="row">
                                            <!-- Column -->
                                            <div class="col p-r-0">
                                                <h1 class="font-light">15</h1>
                                                <h6 class="text-muted">Using Desktop</h6></div>
                                            <!-- Column -->
                                            <div class="col text-right align-self-center">
                                                <div data-label="20%" class="css-bar m-b-0 css-bar-primary css-bar-20"><i class="mdi mdi-desktop-mac"></i></div>
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="card-body">
                                        <div class="row">
                                            <!-- Column -->
                                            <div class="col p-r-0">
                                                <h1 class="font-light">10</h1>
                                                <h6 class="text-muted">Using Mobile</h6></div>
                                            <!-- Column -->
                                            <div class="col text-right align-self-center">
                                                <div data-label="20%" class="css-bar m-b-0 css-bar-danger css-bar-20"><i class="mdi mdi-cellphone-iphone"></i></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Row -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="row">
                                <div class="col-lg-6 col-md-4">
                                    <div class="card-body">
                                        <h4 class="card-title">Android Vs iOS</h4>
                                        <h5 class="card-subtitle">Difference of OS</h5>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-4 b-r align-self-center">
                                    <div class="card-body">
                                        <div class="d-flex flex-row">
                                            <div class="col-8 p-0 align-self-center">
                                                <h3 class="m-b-0">31568</h3>
                                                <h5 class="text-muted m-b-0">Growth</h5> </div>
                                            <div class="col-4 text-right">
                                                <div class="round align-self-center round-success"><i class="mdi mdi-cellphone-iphone"></i></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-4 align-self-center">
                                    <div class="card-body">
                                        <div class="d-flex flex-row">
                                            <div class="col-8 p-0 align-self-center">
                                                <h3 class="m-b-0">15478</h3>
                                                <h5 class="text-muted m-b-0">Loss</h5> </div>
                                            <div class="col-4 text-right">
                                                <div class="round align-self-center bg-inverse"><i class="mdi mdi-apple"></i></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <hr class="m-t-0"> </div>
                            <div class="chartist-chart andvios m-t-40" style="height:350px;"> </div>
                        </div>
                    </div>
                </div>
                <!-- Row -->
                <div class="row">
                    <!-- Column -->
                    <div class="col-lg-6 col-md-6">
                        <div class="card bg-primary">
                            <div class="card-body">
                                <div class="d-flex">
                                    <div class="m-r-20 align-self-center">
                                        <h1 class="text-white"><i class="ti-pie-chart"></i></h1>
                                    </div>
                                    <div>
                                        <h4 class="card-title text-white">Bandwidth usage</h4>
                                        <h5 class="card-subtitle text-white">March  2017</h5>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-4 align-self-center">
                                        <font class="display-6 text-white">50 GB</font>
                                    </div>
                                    <div class="col-8 align-self-center">
                                        <div class="usage chartist-chart" style="height:120px"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    <!-- Column -->
                    <div class="col-lg-6 col-md-6">
                        <div class="card bg-danger">
                            <div class="card-body">
                                <div class="d-flex">
                                    <div class="m-r-20 align-self-center">
                                        <h1 class="text-white"><i class="icon-cloud-download"></i></h1>
                                    </div>
                                    <div>
                                        <h4 class="card-title text-white">Download count</h4>
                                        <h5 class="card-subtitle text-white">March  2017</h5>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-4 align-self-center">
                                        <font class="display-6 text-white">35487</font>
                                    </div>
                                    <div class="col-8  text-right">
                                        <div class="spark-count" style="height:120px"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                </div>
                <!-- Row -->
                <div class="row">
                    <!-- Column -->
                    <div class="col-lg-7 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Notification</h4>
                                <div class="message-box">
                                    <ul class="list-style-none m-t-20">
                                        <!-- Message -->
                                        <li class="d-flex m-b-30">
                                            <div class="user-img">
                                                <span class="round bg-primary">
                                                    <i class="mdi mdi-email"></i>
                                                </span>
                                            </div>
                                            <div class="mail-contnet m-l-15">
                                                <h5 class="m-b-0">You have 3 new messages</h5>
                                                <span class="mail-desc d-block text-muted">Daniel Kristeen, Hanna Giover, Jeffry Brown</span>
                                                <span class="time d-block font-medium">9:30 AM</span>
                                            </div>
                                        </li>
                                        <!-- Message -->
                                        <li class="d-flex m-b-30">
                                            <div class="user-img">
                                                <span class="round bg-danger">
                                                    <i class="mdi mdi-earth"></i>
                                                </span>
                                            </div>
                                            <div class="mail-contnet m-l-15">
                                                <h5 class="m-b-0">Newsfeed available </h5>
                                                <span class="mail-desc d-block text-muted">Todays headlines : Breakdancing Grandma Proves ..</span>
                                                <span class="time d-block font-medium">9:10 AM</span>
                                            </div>
                                        </li>
                                        <!-- Message -->
                                        <li class="d-flex m-b-30">
                                            <div class="user-img">
                                                <span class="round bg-success">
                                                    <i class="mdi mdi-currency-usd"></i>
                                                </span>
                                            </div>
                                            <div class="mail-contnet m-l-15">
                                                <h5 class="m-b-0">2 Invoices to pay</h5>
                                                <span class="mail-desc d-block text-muted">$3500 from Krishnan, $2000 from Akhil</span>
                                                <span class="time d-block font-medium">9:08 AM</span>
                                            </div>
                                        </li>
                                        <!-- Message -->
                                        <li class="d-flex m-b-30">
                                            <div class="user-img">
                                                <span class="round">
                                                    <i class="mdi mdi-comment-check-outline"></i>
                                                </span>
                                            </div>
                                            <div class="mail-contnet m-l-15">
                                                <h5 class="m-b-0">15 New comments</h5>
                                                <span class="mail-desc d-block text-muted">Jhonny : Hey this stuff is awesome and how can i ..</span>
                                                <span class="time d-block font-medium">9:02 AM</span>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    <div class="col-lg-5 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Visit Source</h4>
                                <div class="text-center">
                                    <div id="visitor" style="height:290px; width:100%;" class="m-t-20"></div>
                                    <ul class="list-inline m-t-20">
                                        <li class="list-inline-item">
                                            <h6 class="text-muted"><i class="fa fa-circle m-r-5 text-success"></i>Mobile</h6>
                                        </li>
                                        <li class="list-inline-item">
                                            <h6 class="text-muted"><i class="fa fa-circle m-r-5 text-primary"></i>Desktop</h6>
                                        </li>
                                        <li class="list-inline-item">
                                            <h6 class="text-muted"><i class="fa fa-circle m-r-5 text-danger"></i>Tablet</h6>
                                        </li>
                                        <li class="list-inline-item">
                                            <h6 class="text-muted"><i class="fa fa-circle m-r-5 text-muted"></i>Other</h6>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Row -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <ul class="list-inline float-right">
                                    <li class="list-inline-item">
                                        <h6 class="text-muted"><i class="fa fa-circle m-r-5 text-success"></i>Free</h6>
                                    </li>
                                    <li class="list-inline-item">
                                        <h6 class="text-muted"><i class="fa fa-circle m-r-5 text-primary"></i>Premium</h6>
                                    </li>
                                </ul>
                                <h4 class="card-title">Download Count</h4>
                                <h5 class="card-subtitle">you can check the count</h5>
                                <div class="download-state chartist-chart" style="height:300px"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Row -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="row">
                                <div class="col-sm-12 col-lg-4">
                                    <div class="card-body">
                                        <h4 class="card-title">Reviews</h4>
                                        <h5 class="card-subtitle">Overview of Review</h5>
                                        <h2 class="font-medium m-t-40 m-b-0">25426</h2>
                                        <span class="text-muted">This month we got 346 New Reviews</span>
                                        <div class="image-box m-t-30 m-b-30">
                                            <a href="#" class="m-r-10" data-toggle="tooltip" data-placement="top" title="Simmons"><img src="../../assets/images/users/1.jpg" class="rounded-circle" width="45" alt="user"></a>
                                            <a href="#" class="m-r-10" data-toggle="tooltip" data-placement="top" title="Fitz"><img src="../../assets/images/users/2.jpg" class="rounded-circle" width="45" alt="user"></a>
                                            <a href="#" class="m-r-10" data-toggle="tooltip" data-placement="top" title="Phil"><img src="../../assets/images/users/3.jpg" class="rounded-circle" width="45" alt="user"></a>
                                            <a href="#" class="m-r-10" data-toggle="tooltip" data-placement="top" title="Melinda"><img src="../../assets/images/users/4.jpg" class="rounded-circle" width="45" alt="user"></a>
                                        </div>
                                        <a href="javascript:void(0)" class="btn btn-lg btn-info waves-effect waves-light">Checkout All Reviews</a>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-lg-8 border-left">
                                    <div class="card-body">
                                        <ul class="list-style-none">
                                            <li class="m-t-30">
                                                <div class="d-flex align-items-center">
                                                    <i class="mdi mdi-emoticon-happy display-5 text-muted"></i>
                                                    <div class="m-l-10">
                                                        <h5 class="m-b-0">Positive Reviews</h5>
                                                        <span class="text-muted">25547 Reviews</span></div>
                                                </div>
                                                <div class="progress">
                                                    <div class="progress-bar bg-success" role="progressbar" style="width: 47%" aria-valuenow="47" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </li>
                                            <li class="m-t-40">
                                                <div class="d-flex align-items-center">
                                                    <i class="mdi mdi-emoticon-sad display-5 text-muted"></i>
                                                    <div class="m-l-10">
                                                        <h5 class="m-b-0">Negative Reviews</h5>
                                                        <span class="text-muted">5547 Reviews</span></div>
                                                </div>
                                                <div class="progress">
                                                    <div class="progress-bar bg-orange" role="progressbar" style="width: 33%" aria-valuenow="33" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </li>
                                            <li class="m-t-40 m-b-40">
                                                <div class="d-flex align-items-center">
                                                    <i class="mdi mdi-emoticon-neutral display-5 text-muted"></i>
                                                    <div class="m-l-10">
                                                        <h5 class="m-b-0">Neutral Reviews</h5>
                                                        <span class="text-muted">547 Reviews</span></div>
                                                </div>
                                                <div class="progress">
                                                    <div class="progress-bar bg-info" role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Row -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Products Availability</h4>
                                <h5 class="card-subtitle">March 2017</h5>
                                <div class="table-responsive">
                                    <table class="table v-middle">
                                        <thead>
                                            <tr>
                                                <th class="border-top-0">Product</th>
                                                <th class="border-top-0">Description</th>
                                                <th class="border-top-0">Quantity</th>
                                                <th class="border-top-0">Price</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td><span class="round"><i class="ti-shopping-cart"></i></span></td>
                                                <td>
                                                    <h6><a href="javascript:void(0)" class="link">Apple iPhone 6  Space Grey, 16 GB</a></h6><small class="text-muted">Product id : MI5457 </small></td>
                                                <td>
                                                    <h5>357</h5></td>
                                                <td>
                                                    <h5>$435</h5></td>
                                            </tr>
                                            <tr>
                                                <td><span class="round bg-success"><i class="ti-shopping-cart"></i></span></td>
                                                <td>
                                                    <h6><a href="javascript:void(0)" class="link">Fossil Marshall For Men Black Smartwatch</a></h6><small class="text-muted">Product id : MI5457 </small></td>
                                                <td>
                                                    <h5>357</h5></td>
                                                <td>
                                                    <h5>$435</h5></td>
                                            </tr>
                                            <tr>
                                                <td><span class="round bg-danger"><i class="ti-shopping-cart"></i></span></td>
                                                <td>
                                                    <h6><a href="javascript:void(0)" class="link">Sony Bravia 80cm - 32 HD Ready LED TV</a></h6><small class="text-muted">Product id : MI5457 </small></td>
                                                <td>
                                                    <h5>357</h5></td>
                                                <td>
                                                    <h5>$435</h5></td>
                                            </tr>
                                            <tr>
                                                <td><span class="round bg-primary"><i class="ti-shopping-cart"></i></span></td>
                                                <td>
                                                    <h6><a href="javascript:void(0)" class="link">Panasonic P75 Champagne Gold, 8 GB</a></h6><small class="text-muted">Product id : MI5457 </small></td>
                                                <td>
                                                    <h5>357</h5></td>
                                                <td>
                                                    <h5>$435</h5></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Row -->
                <div class="row">
                    <!-- Column -->
                    <div class="col-lg-4 col-xlg-3 col-md-5">
                        <div class="card">
                            <img class="card-img" src="../../assets/images/background/socialbg.jpg" alt="Card image" style="max-height:450px;">
                            <div class="card-img-overlay d-flex align-items-center justify-content-center flex-column">
                                <img src="../../assets/images/users/1.jpg" alt="" class="rounded-circle" width="100">
                                <h4 class="card-title text-white">James Anderson</h4>
                                <h5 class="card-subtitle text-white op-5">@jamesandre</h5>
                                <p class="text-white text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt </p>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    <div class="col-lg-8 col-xlg-9 col-md-7">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Experiances</h4>
                                <div class="table-responsive">
                                    <table class="table v-middle m-b-0 m-t-30 no-border">
                                        <tbody>
                                            <tr>
                                                <td style="width:90px;"><img src="../../assets/images/browser/photoshop.jpg" alt="photoshop" /></td>
                                                <td style="width:200px;">
                                                    <h4 class="card-title">Photoshop</h4>
                                                    <h6 class="card-subtitle">This is a sample text</h6></td>
                                                <td class="vm">
                                                    <div class="progress">
                                                        <div class="progress-bar bg-success" role="progressbar" style="width: 65%; height:6px;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="width:90px;"><img src="../../assets/images/browser/sketch.jpg" alt="sketch" /></td>
                                                <td style="width:200px;">
                                                    <h4 class="card-title">Sketch</h4>
                                                    <h6 class="card-subtitle">This is a sample text</h6></td>
                                                <td class="vm">
                                                    <div class="progress">
                                                        <div class="progress-bar bg-success" role="progressbar" style="width: 45%; height:6px;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <hr>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-4">
                                        <font class="display-5">5486</font>
                                        <h6 class="text-muted">Projects</h6>
                                    </div>
                                    <div class="col-md-4">
                                        <font class="display-5">987</font>
                                        <h6 class="text-muted">Winning  Entries</h6>
                                    </div>
                                    <div class="col-md-4 align-self-center text-right">
                                        <button type="button" class="btn btn-success">Hire me</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Row -->
                <div class="row">
                    <!-- Column -->
                    <div class="col-lg-4 col-xlg-3 col-md-5">
                        <div class="card">
                            <div class="card-body">
                                <div class="text-center m-t-30"> <img src="../../assets/images/users/5.jpg" alt="" class="rounded-circle" width="150" />
                                    <h4 class="card-title m-t-10">Hanna Gover</h4>
                                    <h6 class="card-subtitle">Accoubts Manager Amix corp</h6>
                                    <div class="row text-center justify-content-md-center">
                                        <div class="col-4"><a href="javascript:void(0)" class="link"><i class="icon-people"></i> <font class="font-medium">254</font></a></div>
                                        <div class="col-4"><a href="javascript:void(0)" class="link"><i class="icon-picture"></i> <font class="font-medium">54</font></a></div>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <hr> </div>
                            <div class="card-body"> <small class="text-muted">Email address </small>
                                <h6>hannagover@gmail.com</h6> <small class="text-muted p-t-30 db">Phone</small>
                                <h6>+91 654 784 547</h6> <small class="text-muted p-t-30 db">Address</small>
                                <h6>71 Pilgrim Avenue Chevy Chase, MD 20815</h6>
                                <div class="map-box">
                                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d470029.1604841957!2d72.29955005258641!3d23.019996818380896!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x395e848aba5bd449%3A0x4fcedd11614f6516!2sAhmedabad%2C+Gujarat!5e0!3m2!1sen!2sin!4v1493204785508" height="150" frameborder="0" style="border:0" allowfullscreen></iframe>
                                </div> <small class="text-muted p-t-30 db">Social Profile</small>
                                <br/>
                                <button class="btn btn-circle btn-secondary"><i class="fab fa-facebook-f"></i></button>
                                <button class="btn btn-circle btn-secondary"><i class="fab fa-twitter"></i></button>
                                <button class="btn btn-circle btn-secondary"><i class="fab fa-youtube"></i></button>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    <!-- Column -->
                    <div class="col-lg-8 col-xlg-9 col-md-7">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Recent Activities</h4>
                                <div class="profiletimeline">
                                    <div class="sl-item">
                                        <div class="sl-left"> <img src="../../assets/images/users/1.jpg" alt="user" class="rounded-circle" /> </div>
                                        <div class="sl-right">
                                            <div><a href="javascript:void(0)" class="link">John Doe</a> <span class="sl-date">5 minutes ago</span>
                                                <p>assign a new task <a href="javascript:void(0)"> Design weblayout</a></p>
                                                <div class="row">
                                                    <div class="col-lg-3 col-md-6 m-b-20"><img src="../../assets/images/big/img1.jpg" alt="" class="img-fluid rounded" /></div>
                                                    <div class="col-lg-3 col-md-6 m-b-20"><img src="../../assets/images/big/img2.jpg" alt="" class="img-fluid rounded" /></div>
                                                    <div class="col-lg-3 col-md-6 m-b-20"><img src="../../assets/images/big/img3.jpg" alt="" class="img-fluid rounded" /></div>
                                                    <div class="col-lg-3 col-md-6 m-b-20"><img src="../../assets/images/big/img4.jpg" alt="" class="img-fluid rounded" /></div>
                                                </div>
                                                <div class="like-comm"> <a href="javascript:void(0)" class="link m-r-10">2 comment</a> <a href="javascript:void(0)" class="link m-r-10"><i class="fa fa-heart text-danger"></i> 5 Love</a> </div>
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="sl-item">
                                        <div class="sl-left"> <img src="../../assets/images/users/2.jpg" alt="user" class="rounded-circle" /> </div>
                                        <div class="sl-right">
                                            <div> <a href="javascript:void(0)" class="link">John Doe</a> <span class="sl-date">5 minutes ago</span>
                                                <div class="m-t-20 row">
                                                    <div class="col-md-3 col-12"><img src="../../assets/images/big/img1.jpg" alt="user" class="img-fluid rounded" /></div>
                                                    <div class="col-md-9 col-12">
                                                        <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio. Praesent libero. Sed cursus ante dapibus diam. </p> <a href="javascript:void(0)" class="btn btn-info"> Design weblayout</a></div>
                                                </div>
                                                <div class="like-comm m-t-20"> <a href="javascript:void(0)" class="link m-r-10">2 comment</a> <a href="javascript:void(0)" class="link m-r-10"><i class="fa fa-heart text-danger"></i> 5 Love</a> </div>
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="sl-item">
                                        <div class="sl-left"> <img src="../../assets/images/users/3.jpg" alt="user" class="rounded-circle" /> </div>
                                        <div class="sl-right">
                                            <div><a href="javascript:void(0)" class="link">John Doe</a> <span class="sl-date">5 minutes ago</span>
                                                <p class="m-t-10"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio. Praesent libero. Sed cursus ante dapibus diam. Sed nisi. Nulla quis sem at nibh elementum imperdiet. Duis sagittis ipsum. Praesent mauris. Fusce nec tellus sed augue semper </p>
                                            </div>
                                            <div class="like-comm m-t-20"> <a href="javascript:void(0)" class="link m-r-10">2 comment</a> <a href="javascript:void(0)" class="link m-r-10"><i class="fa fa-heart text-danger"></i> 5 Love</a> </div>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="sl-item">
                                        <div class="sl-left"> <img src="../../assets/images/users/4.jpg" alt="user" class="rounded-circle" /> </div>
                                        <div class="sl-right">
                                            <div><a href="javascript:void(0)" class="link">John Doe</a> <span class="sl-date">5 minutes ago</span>
                                                <blockquote class="m-t-10">
                                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt
                                                </blockquote>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
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


    <!--This page JavaScript -->
    <script src="../assets/libs/chartist/dist/chartist.min.js"></script>
    <script src="../assets/libs/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.min.js"></script>
    <script src="../assets/libs/echarts/dist/echarts-en.min.js"></script>
    <script src="../assets/libs/flot/excanvas.min.js"></script>
    <script src="../assets/libs/flot/jquery.flot.js"></script>
    <script src="../assets/libs/jquery.flot.tooltip/js/jquery.flot.tooltip.min.js"></script>
    <script src="../assets/extra-libs/c3/d3.min.js"></script>
    <script src="../assets/extra-libs/c3/c3.min.js"></script>
    <script src="../assets/libs/gaugeJS/dist/gauge.min.js"></script>
    <script src="../dist/js/pages/widget/widget-charts.js"></script>


</body>

</html>