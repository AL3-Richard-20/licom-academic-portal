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


        <!-- This Page CSS -->
        <link rel="stylesheet" type="text/css" href="../assets/extra-libs/css-chart/css-chart.css">


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
                        <h4 class="page-title">Ui Custom Cards</h4>
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
                        <h4 class="m-b-20">Card With Progreesbar</h4>
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
                        <!-- End Row -->
                        <!-- Row -->
                        <div class="row">
                            <!-- Column -->
                            <div class="col-lg-4">
                                <div class="card">
                                    <img class="card-img-top img-responsive" src="../../assets/images/big/img4.jpg" alt="Card image cap">
                                    <div class="card-body">
                                        <div class="d-flex no-block align-items-center m-b-15">
                                            <span><i class="ti-calendar"></i> 20 May 2018</span>
                                            <div class="ml-auto">
                                                <a href="javascript:void(0)" class="link"><i class="ti-comments"></i> 3 Comments</a>
                                            </div>
                                        </div>
                                        <h3 class="font-normal">Featured Hydroflora Pots Garden &amp; Outdoors</h3>
                                        <p class="m-b-0 m-t-10">Titudin venenatis ipsum ac feugiat. Vestibulum ullamcorper quam.</p>
                                        <button class="btn btn-success btn-rounded waves-effect waves-light m-t-20">Read more</button>
                                    </div>
                                </div>
                            </div>
                            <!-- Column -->
                            <!-- Column -->
                            <div class="col-lg-4">
                                <div class="card">
                                    <img class="card-img-top img-responsive" src="../../assets/images/big/img5.jpg" alt="Card image cap">
                                    <div class="card-body">
                                        <div class="d-flex no-block align-items-center m-b-15">
                                            <span><i class="ti-calendar"></i> 19 May 2018</span>
                                            <div class="ml-auto">
                                                <a href="javascript:void(0)" class="link"><i class="ti-comments"></i> 5 Comments</a>
                                            </div>
                                        </div>
                                        <h3 class="font-normal">Featured Hydroflora Pots Garden &amp; Outdoors</h3>
                                        <p class="m-b-0 m-t-10">Titudin venenatis ipsum ac feugiat. Vestibulum ullamcorper quam.</p>
                                        <button class="btn btn-success btn-rounded waves-effect waves-light m-t-20">Read more</button>
                                    </div>
                                </div>
                            </div>
                            <!-- Column -->
                            <!-- Column -->
                            <div class="col-lg-4">
                                <div class="card">
                                    <img class="card-img-top img-responsive" src="../../assets/images/big/img6.jpg" alt="Card image cap">
                                    <div class="card-body">
                                        <div class="d-flex no-block align-items-center m-b-15">
                                            <span><i class="ti-calendar"></i> 29 May 2018</span>
                                            <div class="ml-auto">
                                                <a href="javascript:void(0)" class="link"><i class="ti-comments"></i> 6 Comments</a>
                                            </div>
                                        </div>
                                        <h3 class="font-normal">Featured Hydroflora Pots Garden &amp; Outdoors</h3>
                                        <p class="m-b-0 m-t-10">Titudin venenatis ipsum ac feugiat. Vestibulum ullamcorper quam.</p>
                                        <button class="btn btn-success btn-rounded waves-effect waves-light m-t-20">Read more</button>
                                    </div>
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
                                        <div class="row">
                                            <div class="col-12">
                                                <h3>26%</h3>
                                                <h6 class="card-subtitle">Total Product</h6></div>
                                            <div class="col-12">
                                                <div class="progress">
                                                    <div class="progress-bar bg-success" role="progressbar" style="width: 85%; height: 6px;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
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
                                        <div class="row">
                                            <div class="col-12">
                                                <h3>60%</h3>
                                                <h6 class="card-subtitle">Pending Product</h6></div>
                                            <div class="col-12">
                                                <div class="progress">
                                                    <div class="progress-bar bg-info" role="progressbar" style="width: 40%; height: 6px;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
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
                                        <div class="row">
                                            <div class="col-12">
                                                <h3>63%</h3>
                                                <h6 class="card-subtitle">Selling Products</h6></div>
                                            <div class="col-12">
                                                <div class="progress">
                                                    <div class="progress-bar bg-danger" role="progressbar" style="width: 56%; height: 6px;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
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
                                        <div class="row">
                                            <div class="col-12">
                                                <h3>29%</h3>
                                                <h6 class="card-subtitle">Buying Products</h6></div>
                                            <div class="col-12">
                                                <div class="progress">
                                                    <div class="progress-bar bg-inverse" role="progressbar" style="width: 26%; height: 6px;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Column -->
                        </div>
                        <!-- Row -->
                        <!-- Row -->
                        <div class="row">
                            <!-- col -->
                            <div class="col-lg-3 col-md-6">
                                <div class="card bg-info">
                                    <div class="card-body">
                                        <div id="myCarousel" class="carousel slide" data-ride="carousel">
                                            <!-- Carousel items -->
                                            <div class="carousel-inner">
                                                <div class="carousel-item active flex-column">
                                                    <i class="ti-world font-20 text-white"></i>
                                                    <p class="text-white">25th Jan</p>
                                                    <h3 class="text-white font-medium">BBC World News - World - BBC Latest News</h3>
                                                    <div class="text-white m-t-10">
                                                        <i>- john doe</i>
                                                    </div>
                                                </div>
                                                <div class="carousel-item flex-column">
                                                    <i class="ti-world font-20 text-white"></i>
                                                    <p class="text-white">26th Jan</p>
                                                    <h3 class="text-white font-medium">BBC World News - World - BBC Latest News</h3>
                                                    <div class="text-white m-t-10">
                                                        <i>- john doe</i>
                                                    </div>
                                                </div>
                                                <div class="carousel-item flex-column">
                                                    <i class="ti-world font-20 text-white"></i>
                                                    <p class="text-white">27th Jan</p>
                                                    <h3 class="text-white font-medium">BBC World News - World - BBC Latest News</h3>
                                                    <div class="text-white m-t-10">
                                                        <i>- john doe</i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- col -->
                            <div class="col-lg-3 col-md-6">
                                <div class="card bg-primary">
                                    <div class="card-body">
                                        <div id="myCarousel2" class="carousel slide vert" data-ride="carousel">
                                            <!-- Carousel items -->
                                            <div class="carousel-inner">
                                                <div class="carousel-item active flex-column">
                                                    <i class="ti-apple font-20 text-white"></i>
                                                    <p class="text-white">20th Jan</p>
                                                    <h3 class="text-white font-medium">Apple Reports Second Quarter Results</h3>
                                                    <div class="text-white m-t-10">
                                                        <i>- Steve Jobs</i>
                                                    </div>
                                                </div>
                                                <div class="carousel-item flex-column">
                                                    <i class="ti-apple font-20 text-white"></i>
                                                    <p class="text-white">19th Jan</p>
                                                    <h3 class="text-white font-medium">Apple Reports Second Quarter Results</h3>
                                                    <div class="text-white m-t-10">
                                                        <i>- Steve Jobs</i>
                                                    </div>
                                                </div>
                                                <div class="carousel-item flex-column">
                                                    <i class="ti-apple font-20 text-white"></i>
                                                    <p class="text-white">18th Jan</p>
                                                    <h3 class="text-white font-medium">Apple Reports Second Quarter Results</h3>
                                                    <div class="text-white m-t-10">
                                                        <i>- Steve Jobs</i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- col -->
                            <div class="col-lg-3 col-md-6">
                                <div class="card bg-inverse">
                                    <div class="card-body">
                                        <div id="myCarousel3" class="carousel slide" data-ride="carousel">
                                            <!-- Carousel items -->
                                            <div class="carousel-inner">
                                                <div class="carousel-item active flex-column">
                                                    <i class="ti-skype font-20 text-white"></i>
                                                    <p class="text-white">1th Jan</p>
                                                    <h3 class="text-white font-medium">Now Get <span class="font-bold">50% Off</span> on calling</h3>
                                                    <div>
                                                        <button class="btn btn-secondary b-0 waves-effect waves-light m-t-15">Default</button>
                                                    </div>
                                                </div>
                                                <div class="carousel-item flex-column">
                                                    <i class="ti-skype font-20 text-white"></i>
                                                    <p class="text-white">2th Jan</p>
                                                    <h3 class="text-white font-medium">Now Get <span class="font-bold">50% Off</span> on calling</h3>
                                                    <div>
                                                        <button class="btn btn-secondary b-0 waves-effect waves-light m-t-15">Default</button>
                                                    </div>
                                                </div>
                                                <div class="carousel-item flex-column">
                                                    <i class="ti-skype font-20 text-white"></i>
                                                    <p class="text-white">3th Jan</p>
                                                    <h3 class="text-white font-medium">Now Get <span class="font-bold">50% Off</span> on calling</h3>
                                                    <div>
                                                        <button class="btn btn-secondary b-0 waves-effect waves-light m-t-15">Default</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- col -->
                            <div class="col-lg-3 col-md-6">
                                <div class="card bg-white">
                                    <div class="card-body">
                                        <div id="myCarousel4" class="carousel vert slide" data-ride="carousel">
                                            <!-- Carousel items -->
                                            <div class="carousel-inner">
                                                <div class="carousel-item active flex-column">
                                                    <i class="ti-wordpress font-20"></i>
                                                    <p>25th Jan</p>
                                                    <h3>Dynamic website with responsive</h3>
                                                    <div>
                                                        <button class="btn btn-info justify-content-start waves-effect waves-light m-t-15">Default</button>
                                                    </div>
                                                </div>
                                                <div class="carousel-item flex-column">
                                                    <i class="ti-wordpress font-20"></i>
                                                    <p>25th Jan</p>
                                                    <h3>Dynamic website with responsive</h3>
                                                    <div>
                                                        <button class="btn btn-success d-inline waves-effect waves-light m-t-15">Default</button>
                                                    </div>
                                                </div>
                                                <div class="carousel-item flex-column"> <i class="ti-wordpress font-20"></i>
                                                    <p>25th Jan</p>
                                                    <h3>Dynamic website with responsive</h3>
                                                    <div>
                                                        <button class="btn btn-primary waves-effect waves-light m-t-15">Default</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- col -->
                        </div>
                        <!-- Row -->
                        <!-- Row -->
                        <div class="row">
                            <!-- Column -->
                            <div class="col-lg-3 col-md-6">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex flex-row">
                                            <div class="round align-self-center round-success"><i class="ti-wallet"></i></div>
                                            <div class="m-l-10 align-self-center">
                                                <h3>$18090</h3>
                                                <span class="text-muted">Income</span>
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
                                        <div class="d-flex flex-row">
                                            <div class="round align-self-center round-info"><i class="ti-user"></i></div>
                                            <div class="m-l-10 align-self-center">
                                                <h3>2690</h3>
                                                <span class="text-muted">Users</span>
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
                                        <div class="d-flex flex-row">
                                            <div class="round align-self-center round-danger"><i class="ti-calendar"></i></div>
                                            <div class="m-l-10 align-self-center">
                                                <h3>20 march</h3>
                                                <span class="text-muted">My birthday</span>
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
                                        <div class="d-flex flex-row">
                                            <div class="round align-self-center round-success"><i class="ti-settings"></i></div>
                                            <div class="m-l-10 align-self-center">
                                                <h3>6540</h3>
                                                <span class="text-muted">pending</span>
                                            </div>
                                        </div>
                                    </div>
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
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="bg-info p-20">
                                                <div class="text-center text-white display-6">
                                                    <i class="ti-facebook"></i>
                                                </div>
                                            </div>
                                            <div class="card-body">
                                                <div class="d-flex no-block align-items-center">
                                                    <div>
                                                        <h3 class="font-medium">456</h3>
                                                        <h5 class="text-info m-b-0">Following</h5>
                                                    </div>
                                                    <div class="ml-auto">
                                                        <h3 class="font-medium">1,456</h3>
                                                        <h5 class="text-info m-b-0">Friends</h5>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Column -->
                            <!-- Column -->
                            <div class="col-lg-3 col-md-6">
                                <div class="card">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="bg-cyan p-20">
                                                <div class="text-center text-white display-6">
                                                    <i class="ti-twitter"></i>
                                                </div>
                                            </div>
                                            <div class="card-body">
                                                <div class="d-flex no-block align-items-center">
                                                    <div>
                                                        <h3 class="font-medium">456</h3>
                                                        <h5 class="text-cyan m-b-0">Tweets</h5>
                                                    </div>
                                                    <div class="ml-auto">
                                                        <h3 class="font-medium">1,456</h3>
                                                        <h5 class="text-cyan m-b-0">Followers</h5>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Column -->
                            <!-- Column -->
                            <div class="col-lg-3 col-md-6">
                                <div class="card">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="bg-success p-20">
                                                <div class="text-center text-white display-6">
                                                    <i class="ti-instagram"></i>
                                                </div>
                                            </div>
                                            <div class="card-body">
                                                <div class="d-flex no-block align-items-center">
                                                    <div>
                                                        <h3 class="font-medium">456</h3>
                                                        <h5 class="text-success m-b-0">Following</h5>
                                                    </div>
                                                    <div class="ml-auto">
                                                        <h3 class="font-medium">1,456</h3>
                                                        <h5 class="text-success m-b-0">Followers</h5>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Column -->
                            <!-- Column -->
                            <div class="col-lg-3 col-md-6">
                                <div class="card">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="bg-dark p-20">
                                                <div class="text-center text-white display-6">
                                                    <i class="ti-skype"></i>
                                                </div>
                                            </div>
                                            <div class="card-body">
                                                <div class="d-flex no-block align-items-center">
                                                    <div>
                                                        <h3 class="font-medium">456</h3>
                                                        <h5 class="text-dark m-b-0">Contacts</h5>
                                                    </div>
                                                    <div class="ml-auto">
                                                        <h3 class="font-medium">1,456</h3>
                                                        <h5 class="text-dark m-b-0">Following</h5>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
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
                                        <div class="row">
                                            <div class="col-12">
                                                <h3>86%</h3>
                                                <h6 class="card-subtitle">Total Product</h6></div>
                                            <div class="col-12">
                                                <div class="progress">
                                                    <div class="progress-bar bg-success" role="progressbar" style="width: 85%; height: 6px;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
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
                                        <div class="row">
                                            <div class="col-12">
                                                <h3>40%</h3>
                                                <h6 class="card-subtitle">Pending Product</h6></div>
                                            <div class="col-12">
                                                <div class="progress">
                                                    <div class="progress-bar bg-info" role="progressbar" style="width: 40%; height: 6px;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
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
                                        <div class="row">
                                            <div class="col-12">
                                                <h3>56%</h3>
                                                <h6 class="card-subtitle">Product A</h6></div>
                                            <div class="col-12">
                                                <div class="progress">
                                                    <div class="progress-bar bg-danger" role="progressbar" style="width: 56%; height: 6px;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
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
                                        <div class="row">
                                            <div class="col-12">
                                                <h3>26%</h3>
                                                <h6 class="card-subtitle">Product B</h6></div>
                                            <div class="col-12">
                                                <div class="progress">
                                                    <div class="progress-bar bg-inverse" role="progressbar" style="width: 26%; height: 6px;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Column -->
                        </div>
                        <!-- Row -->
                        <h4 class="card-title m-t-40">Cards With Icon</h4>
                        <!-- Row -->
                        <div class="row">
                            <div class="col-lg-3 col-md-6">
                                <div class="card border-bottom border-info">
                                    <div class="card-body">
                                        <div class="d-flex no-block align-items-center">
                                            <div>
                                                <h2>120</h2>
                                                <h6 class="text-info">News Feed</h6>
                                            </div>
                                            <div class="ml-auto">
                                                <span class="text-info display-6"><i class="ti-notepad"></i></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6">
                                <div class="card border-bottom border-cyan">
                                    <div class="card-body">
                                        <div class="d-flex no-block align-items-center">
                                            <div>
                                                <h2>150</h2>
                                                <h6 class="text-cyan">Invoices</h6>
                                            </div>
                                            <div class="ml-auto">
                                                <span class="text-cyan display-6"><i class="ti-clipboard"></i></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6">
                                <div class="card border-bottom border-success">
                                    <div class="card-body">
                                        <div class="d-flex no-block align-items-center">
                                            <div>
                                                <h2>450</h2>
                                                <h6 class="text-success">Revenue</h6>
                                            </div>
                                            <div class="ml-auto">
                                                <span class="text-success display-6"><i class="ti-wallet"></i></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6">
                                <div class="card border-bottom border-orange">
                                    <div class="card-body">
                                        <div class="d-flex no-block align-items-center">
                                            <div>
                                                <h2>100</h2>
                                                <h6 class="text-orange">Sales</h6>
                                            </div>
                                            <div class="ml-auto">
                                                <span class="text-orange display-6"><i class="ti-stats-down"></i></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Row -->
                        <!-- Row -->
                        <div class="row">
                            <div class="col-lg-3 col-md-6">
                                <div class="card border-left border-orange">
                                    <div class="card-body">
                                        <div class="d-flex no-block align-items-center">
                                            <div>
                                                <span class="text-orange display-6"><i class="ti-user"></i></span>
                                            </div>
                                            <div class="ml-auto">
                                                <h2>290</h2>
                                                <h6 class="text-orange">New Customers</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6">
                                <div class="card border-left border-info">
                                    <div class="card-body">
                                        <div class="d-flex no-block align-items-center">
                                            <div>
                                                <span class="text-info display-6"><i class="ti-comments"></i></span>
                                            </div>
                                            <div class="ml-auto">
                                                <h2>120</h2>
                                                <h6 class="text-info">New Messages</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6">
                                <div class="card border-left border-cyan">
                                    <div class="card-body">
                                        <div class="d-flex no-block align-items-center">
                                            <div>
                                                <span class="text-cyan display-6"><i class="ti-comments-smiley"></i></span>
                                            </div>
                                            <div class="ml-auto">
                                                <h2>600</h2>
                                                <h6 class="text-cyan">New Notification</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6">
                                <div class="card border-left border-success">
                                    <div class="card-body">
                                        <div class="d-flex no-block align-items-center">
                                            <div>
                                                <span class="text-success display-6"><i class="ti-layout-media-left-alt"></i></span>
                                            </div>
                                            <div class="ml-auto">
                                                <h2>270</h2>
                                                <h6 class="text-success">New Projects</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Row -->
                        <!-- Row -->
                        <div class="row">
                            <div class="col-lg-3 col-md-6">
                                <div class="card border-top border-success">
                                    <div class="card-body">
                                        <div class="d-flex no-block align-items-center">
                                            <div>
                                                <h2>120</h2>
                                                <h6 class="text-success">Top Locations</h6>
                                            </div>
                                            <div class="ml-auto">
                                                <span class="text-success display-6"><i class="ti-map-alt"></i></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6">
                                <div class="card border-top border-dark">
                                    <div class="card-body">
                                        <div class="d-flex no-block align-items-center">
                                            <div>
                                                <h2>201</h2>
                                                <h6 class="text-dark">Top Activity Pages</h6>
                                            </div>
                                            <div class="ml-auto">
                                                <span class="text-dark display-6"><i class="ti-check-box"></i></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6">
                                <div class="card border-top border-info">
                                    <div class="card-body">
                                        <div class="d-flex no-block align-items-center">
                                            <div>
                                                <h2>140</h2>
                                                <h6 class="text-info">Top Sales</h6>
                                            </div>
                                            <div class="ml-auto">
                                                <span class="text-info display-6"><i class="ti-bar-chart-alt"></i></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6">
                                <div class="card border-top border-cyan">
                                    <div class="card-body">
                                        <div class="d-flex no-block align-items-center">
                                            <div>
                                                <h2>160</h2>
                                                <h6 class="text-cyan">Top Feeds</h6>
                                            </div>
                                            <div class="ml-auto">
                                                <span class="text-cyan display-6"><i class="ti-receipt"></i></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Row -->
                        <!-- Row -->
                        <div class="row">
                            <div class="col-lg-3 col-md-6">
                                <div class="card border-right border-dark">
                                    <div class="card-body">
                                        <div class="d-flex no-block align-items-center">
                                            <div>
                                                <span class="text-dark display-6"><i class="ti-layout-slider-alt"></i></span>
                                            </div>
                                            <div class="ml-auto">
                                                <h2>360</h2>
                                                <h6 class="text-dark">Device Variations</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6">
                                <div class="card border-right border-info">
                                    <div class="card-body">
                                        <div class="d-flex no-block align-items-center">
                                            <div>
                                                <span class="text-info display-6"><i class="ti-pie-chart"></i></span>
                                            </div>
                                            <div class="ml-auto">
                                                <h2>120</h2>
                                                <h6 class="text-info">Net Income</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6">
                                <div class="card border-right border-cyan">
                                    <div class="card-body">
                                        <div class="d-flex no-block align-items-center">
                                            <div>
                                                <span class="text-cyan display-6"><i class="ti-panel"></i></span>
                                            </div>
                                            <div class="ml-auto">
                                                <h2>471</h2>
                                                <h6 class="text-cyan">Sales Performance</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6">
                                <div class="card border-right border-success">
                                    <div class="card-body">
                                        <div class="d-flex no-block align-items-center">
                                            <div>
                                                <span class="text-success display-6"><i class="ti-layers-alt"></i></span>
                                            </div>
                                            <div class="ml-auto">
                                                <h2>150</h2>
                                                <h6 class="text-success">Monthly Sales</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Row -->
                        <h4 class="card-title m-t-40">Cards With Propgressbar &amp; Icon</h4>
                        <!-- Row -->
                        <div class="row">
                            <div class="col-lg-3 col-md-6">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="d-flex no-block align-items-center">
                                                    <div>
                                                        <h3>86%</h3>
                                                        <h6 class="card-subtitle">Total Product</h6>
                                                    </div>
                                                    <div class="ml-auto">
                                                        <span class="text-success display-6"><i class="ti-layout-slider-alt"></i></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="progress">
                                                    <div class="progress-bar bg-success" role="progressbar" style="width: 85%; height: 6px;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="d-flex no-block align-items-center">
                                                    <div>
                                                        <h3>40%</h3>
                                                        <h6 class="card-subtitle">Pending Product</h6>
                                                    </div>
                                                    <div class="ml-auto">
                                                        <span class="text-info display-6"><i class="ti-layout-media-left-alt"></i></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="progress">
                                                    <div class="progress-bar bg-info" role="progressbar" style="width: 40%; height: 6px;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="d-flex no-block align-items-center">
                                                    <div>
                                                        <h3>56%</h3>
                                                        <h6 class="card-subtitle">Selling</h6>
                                                    </div>
                                                    <div class="ml-auto">
                                                        <span class="text-cyan display-6"><i class="ti-notepad"></i></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="progress">
                                                    <div class="progress-bar bg-cyan" role="progressbar" style="width: 56%; height: 6px;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="d-flex no-block align-items-center">
                                                    <div>
                                                        <h3>26%</h3>
                                                        <h6 class="card-subtitle">Buying</h6>
                                                    </div>
                                                    <div class="ml-auto">
                                                        <span class="text-dark display-6"><i class="ti-panel"></i></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="progress">
                                                    <div class="progress-bar bg-inverse" role="progressbar" style="width: 26%; height: 6px;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Row -->
                        <h4 class="card-title m-t-40">Cards With Background</h4>
                        <!-- Row -->
                        <div class="row">
                            <div class="col-lg-3 col-md-6">
                                <div class="card bg-info">
                                    <div class="card-body">
                                        <div class="d-flex no-block align-items-center">
                                            <div class="text-white">
                                                <h2>120</h2>
                                                <h6>News Feed</h6>
                                            </div>
                                            <div class="ml-auto">
                                                <span class="text-white display-6"><i class="ti-notepad"></i></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6">
                                <div class="card bg-cyan">
                                    <div class="card-body">
                                        <div class="d-flex no-block align-items-center">
                                            <div class="text-white">
                                                <h2>150</h2>
                                                <h6>Invoices</h6>
                                            </div>
                                            <div class="ml-auto">
                                                <span class="text-white display-6"><i class="ti-clipboard"></i></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6">
                                <div class="card bg-success">
                                    <div class="card-body">
                                        <div class="d-flex no-block align-items-center">
                                            <div class="text-white">
                                                <h2>450</h2>
                                                <h6>Revenue</h6>
                                            </div>
                                            <div class="ml-auto">
                                                <span class="text-white display-6"><i class="ti-wallet"></i></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6">
                                <div class="card bg-orange">
                                    <div class="card-body">
                                        <div class="d-flex no-block align-items-center">
                                            <div class="text-white">
                                                <h2>100</h2>
                                                <h6>Sales</h6>
                                            </div>
                                            <div class="ml-auto">
                                                <span class="text-white display-6"><i class="ti-stats-down"></i></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Row -->
                        <!-- Row -->
                        <div class="row">
                            <div class="col-lg-3 col-md-6">
                                <div class="card bg-success">
                                    <div class="card-body">
                                        <div class="d-flex no-block align-items-center">
                                            <div class="text-white">
                                                <h2>120</h2>
                                                <h6>Top Locations</h6>
                                            </div>
                                            <div class="ml-auto">
                                                <span class="text-white display-6"><i class="ti-map-alt"></i></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6">
                                <div class="card bg-dark">
                                    <div class="card-body">
                                        <div class="d-flex no-block align-items-center">
                                            <div class="text-white">
                                                <h2>201</h2>
                                                <h6>Top Activity Pages</h6>
                                            </div>
                                            <div class="ml-auto">
                                                <span class="text-white display-6"><i class="ti-check-box"></i></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6">
                                <div class="card bg-info">
                                    <div class="card-body">
                                        <div class="d-flex no-block align-items-center">
                                            <div class="text-white">
                                                <h2>140</h2>
                                                <h6>Top Sales</h6>
                                            </div>
                                            <div class="ml-auto">
                                                <span class="text-white display-6"><i class="ti-bar-chart-alt"></i></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6">
                                <div class="card bg-cyan">
                                    <div class="card-body">
                                        <div class="d-flex no-block align-items-center">
                                            <div class="text-white">
                                                <h2>160</h2>
                                                <h6>Top Feeds</h6>
                                            </div>
                                            <div class="ml-auto">
                                                <span class="text-white display-6"><i class="ti-receipt"></i></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Row -->
                        <h4 class="card-title m-t-40">Crypto Cards</h4>
                        <!-- Row -->
                        <div class="row">
                            <div class="col-lg-3">
                                <div class="card bg-inverse text-white">
                                    <div class="card-body">
                                        <div class="d-flex no-block align-items-center">
                                            <a href="JavaScript: void(0);"><i class="display-6 cc ETH text-white" title="ETH"></i></a>
                                            <div class="m-l-15 m-t-10">
                                                <h4 class="font-medium m-b-0">Ethereum</h4>
                                                <h5>$3589.00k</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="card bg-cyan text-white">
                                    <div class="card-body">
                                        <div class="d-flex no-block align-items-center">
                                            <a href="JavaScript: void(0);"><i class="display-6 cc DASH-alt text-white" title="LTC"></i></a>
                                            <div class="m-l-15 m-t-10">
                                                <h4 class="font-medium m-b-0">Dash</h4>
                                                <h5>$900.00k</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="card bg-orange text-white">
                                    <div class="card-body">
                                        <div class="d-flex no-block align-items-center">
                                            <a href="JavaScript: void(0);"><i class="display-6 cc BTC-alt text-white" title="BTC"></i></a>
                                            <div class="m-l-15 m-t-10">
                                                <h4 class="font-medium m-b-0">Bitcoin</h4>
                                                <h5>$284.50k</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="card bg-info text-white">
                                    <div class="card-body">
                                        <div class="d-flex no-block align-items-center">
                                            <a href="JavaScript: void(0);"><i class="display-6 cc AMP-alt text-white" title="AMP"></i></a>
                                            <div class="m-l-15 m-t-10">
                                                <h4 class="font-medium m-b-0">Ripple</h4>
                                                <h5>$650.80k</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Row -->
                        <!-- Row -->
                        <div class="row">
                            <!-- col -->
                            <div class="col-lg-4 col-md-6">
                                <div class="card bg-orange">
                                    <div class="card-body">
                                        <div id="myCarousel" class="carousel slide" data-ride="carousel">
                                            <!-- Carousel items -->
                                            <div class="carousel-inner">
                                                <div class="carousel-item flex-column">
                                                    <div class="d-flex no-block align-items-center m-r-15">
                                                        <i class="cc BTC text-white display-6 m-r-15" title="BTC"></i>
                                                        <div class="m-t-10">
                                                            <h5 class="text-white font-medium">Bitcoin</h5>
                                                            <h6 class="text-white">Realestate</h6>
                                                        </div>
                                                        <div class="ml-auto m-t-15">
                                                            <div class="crypto"></div>
                                                        </div>
                                                    </div>
                                                    <div class="row text-center text-white m-t-30">
                                                        <div class="col-4">
                                                            <span class="font-14">% 1h</span>
                                                            <p class="font-medium"><i class="fa fa-arrow-up"></i> 0.08</p>
                                                        </div>
                                                        <div class="col-4">
                                                            <span class="font-14">% 24h</span>
                                                            <p class="font-medium"><i class="fa fa-arrow-down"></i> -1.06</p>
                                                        </div>
                                                        <div class="col-4">
                                                            <span class="font-14">% 7d</span>
                                                            <p class="font-medium"><i class="fa fa-arrow-up"></i> -20.10</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="carousel-item flex-column">
                                                    <div class="d-flex no-block align-items-center m-r-15">
                                                        <i class="cc BTC text-white display-6 m-r-15" title="BTC"></i>
                                                        <div class="m-t-10">
                                                            <h5 class="text-white font-medium">Bitcoin</h5>
                                                            <h6 class="text-white">Realestate</h6>
                                                        </div>
                                                        <div class="ml-auto m-t-15">
                                                            <div class="crypto"></div>
                                                        </div>
                                                    </div>
                                                    <div class="row text-center text-white m-t-30">
                                                        <div class="col-4">
                                                            <span class="font-14">% 1h</span>
                                                            <p class="font-medium"><i class="fa fa-arrow-up"></i> 2.08</p>
                                                        </div>
                                                        <div class="col-4">
                                                            <span class="font-14">% 24h</span>
                                                            <p class="font-medium"><i class="fa fa-arrow-down"></i> -3.06</p>
                                                        </div>
                                                        <div class="col-4">
                                                            <span class="font-14">% 7d</span>
                                                            <p class="font-medium"><i class="fa fa-arrow-up"></i> -21.01</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="carousel-item flex-column active">
                                                    <div class="d-flex no-block align-items-center m-r-15">
                                                        <i class="cc BTC text-white display-6 m-r-15" title="BTC"></i>
                                                        <div class="m-t-10">
                                                            <h5 class="text-white font-medium">Bitcoin</h5>
                                                            <h6 class="text-white">Realestate</h6>
                                                        </div>
                                                        <div class="ml-auto m-t-15">
                                                            <div class="crypto"></div>
                                                        </div>
                                                    </div>
                                                    <div class="row text-center text-white m-t-30">
                                                        <div class="col-4">
                                                            <span class="font-14">% 1h</span>
                                                            <p class="font-medium"><i class="fa fa-arrow-up"></i> 0.12</p>
                                                        </div>
                                                        <div class="col-4">
                                                            <span class="font-14">% 24h</span>
                                                            <p class="font-medium"><i class="fa fa-arrow-down"></i> -1.06</p>
                                                        </div>
                                                        <div class="col-4">
                                                            <span class="font-14">% 7d</span>
                                                            <p class="font-medium"><i class="fa fa-arrow-up"></i> -0.08</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- col -->
                            <div class="col-lg-4 col-md-6">
                                <div class="card bg-success">
                                    <div class="card-body">
                                        <div id="myCarousel" class="carousel slide" data-ride="carousel">
                                            <!-- Carousel items -->
                                            <div class="carousel-inner">
                                                <div class="carousel-item flex-column">
                                                    <div class="d-flex no-block al m-r-15ign-items-center">
                                                        <i class="cc EOS-alt text-white display-6 m-r-15" title="EOS"></i>
                                                        <div class="m-t-10">
                                                            <h5 class="text-white font-medium">EOS</h5>
                                                            <h6 class="text-white">Banking</h6>
                                                        </div>
                                                        <div class="ml-auto m-t-15">
                                                            <div class="crypto"></div>
                                                        </div>
                                                    </div>
                                                    <div class="row text-center text-white m-t-30">
                                                        <div class="col-4">
                                                            <span class="font-14">% 1h</span>
                                                            <p class="font-medium"><i class="fa fa-arrow-up"></i> 0.18</p>
                                                        </div>
                                                        <div class="col-4">
                                                            <span class="font-14">% 24h</span>
                                                            <p class="font-medium"><i class="fa fa-arrow-down"></i> -5.10</p>
                                                        </div>
                                                        <div class="col-4">
                                                            <span class="font-14">% 7d</span>
                                                            <p class="font-medium"><i class="fa fa-arrow-up"></i> -0.10</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="carousel-item flex-column">
                                                    <div class="d-flex no-block al m-r-15ign-items-center">
                                                        <i class="cc EOS-alt text-white display-6 m-r-15" title="EOS"></i>
                                                        <div class="m-t-10">
                                                            <h5 class="text-white font-medium">EOS</h5>
                                                            <h6 class="text-white">Banking</h6>
                                                        </div>
                                                        <div class="ml-auto m-t-15">
                                                            <div class="crypto"></div>
                                                        </div>
                                                    </div>
                                                    <div class="row text-center text-white m-t-30">
                                                        <div class="col-4">
                                                            <span class="font-14">% 1h</span>
                                                            <p class="font-medium"><i class="fa fa-arrow-up"></i> 1.08</p>
                                                        </div>
                                                        <div class="col-4">
                                                            <span class="font-14">% 24h</span>
                                                            <p class="font-medium"><i class="fa fa-arrow-down"></i> -1.16</p>
                                                        </div>
                                                        <div class="col-4">
                                                            <span class="font-14">% 7d</span>
                                                            <p class="font-medium"><i class="fa fa-arrow-up"></i> -1.01</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="carousel-item flex-column active">
                                                    <div class="d-flex no-block al m-r-15ign-items-center">
                                                        <i class="cc EOS-alt text-white display-6 m-r-15" title="EOS"></i>
                                                        <div class="m-t-10">
                                                            <h5 class="text-white font-medium">EOS</h5>
                                                            <h6 class="text-white">Banking</h6>
                                                        </div>
                                                        <div class="ml-auto m-t-15">
                                                            <div class="crypto"></div>
                                                        </div>
                                                    </div>
                                                    <div class="row text-center text-white m-t-30">
                                                        <div class="col-4">
                                                            <span class="font-14">% 1h</span>
                                                            <p class="font-medium"><i class="fa fa-arrow-up"></i> 2.16</p>
                                                        </div>
                                                        <div class="col-4">
                                                            <span class="font-14">% 24h</span>
                                                            <p class="font-medium"><i class="fa fa-arrow-down"></i> -1.00</p>
                                                        </div>
                                                        <div class="col-4">
                                                            <span class="font-14">% 7d</span>
                                                            <p class="font-medium"><i class="fa fa-arrow-up"></i> -2.08</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- col -->
                            <div class="col-lg-4 col-md-6">
                                <div class="card bg-dark">
                                    <div class="card-body">
                                        <div id="myCarousel" class="carousel slide" data-ride="carousel">
                                            <!-- Carousel items -->
                                            <div class="carousel-inner">
                                                <div class="carousel-item flex-column">
                                                    <div class="d-flex no-block align-items-center m-r-15">
                                                        <i class="cc ETH text-white display-6 m-r-15"></i>
                                                        <div class="m-t-10">
                                                            <h5 class="text-white font-medium">Ethereum</h5>
                                                            <h6 class="text-white">Exchange</h6>
                                                        </div>
                                                        <div class="ml-auto m-t-15">
                                                            <div class="crypto"></div>
                                                        </div>
                                                    </div>
                                                    <div class="row text-center text-white m-t-30">
                                                        <div class="col-4">
                                                            <span class="font-14">% 1h</span>
                                                            <p class="font-medium"><i class="fa fa-arrow-up"></i> 1.18</p>
                                                        </div>
                                                        <div class="col-4">
                                                            <span class="font-14">% 24h</span>
                                                            <p class="font-medium"><i class="fa fa-arrow-down"></i> -5.16</p>
                                                        </div>
                                                        <div class="col-4">
                                                            <span class="font-14">% 7d</span>
                                                            <p class="font-medium"><i class="fa fa-arrow-up"></i> -20.10</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="carousel-item flex-column">
                                                    <div class="d-flex no-block align-items-center m-r-15">
                                                        <i class="cc ETH text-white display-6 m-r-15"></i>
                                                        <div class="m-t-10">
                                                            <h5 class="text-white font-medium">Ethereum</h5>
                                                            <h6 class="text-white">Exchange</h6>
                                                        </div>
                                                        <div class="ml-auto m-t-15">
                                                            <div class="crypto"></div>
                                                        </div>
                                                    </div>
                                                    <div class="row text-center text-white m-t-30">
                                                        <div class="col-4">
                                                            <span class="font-14">% 1h</span>
                                                            <p class="font-medium"><i class="fa fa-arrow-up"></i> 2.08</p>
                                                        </div>
                                                        <div class="col-4">
                                                            <span class="font-14">% 24h</span>
                                                            <p class="font-medium"><i class="fa fa-arrow-down"></i> -1.16</p>
                                                        </div>
                                                        <div class="col-4">
                                                            <span class="font-14">% 7d</span>
                                                            <p class="font-medium"><i class="fa fa-arrow-up"></i> -1.08</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="carousel-item flex-column active">
                                                    <div class="d-flex no-block align-items-center m-r-15">
                                                        <i class="cc ETH text-white display-6 m-r-15"></i>
                                                        <div class="m-t-10">
                                                            <h5 class="text-white font-medium">Ethereum</h5>
                                                            <h6 class="text-white">Exchange</h6>
                                                        </div>
                                                        <div class="ml-auto m-t-15">
                                                            <div class="crypto"></div>
                                                        </div>
                                                    </div>
                                                    <div class="row text-center text-white m-t-30">
                                                        <div class="col-4">
                                                            <span class="font-14">% 1h</span>
                                                            <p class="font-medium"><i class="fa fa-arrow-up"></i> 1.02</p>
                                                        </div>
                                                        <div class="col-4">
                                                            <span class="font-14">% 24h</span>
                                                            <p class="font-medium"><i class="fa fa-arrow-down"></i> -3.16</p>
                                                        </div>
                                                        <div class="col-4">
                                                            <span class="font-14">% 7d</span>
                                                            <p class="font-medium"><i class="fa fa-arrow-up"></i> -10.00</p>
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
                            <!-- col -->
                            <div class="col-lg-4 col-md-6">
                                <div class="card bg-secondary">
                                    <div class="card-body">
                                        <div id="myCarousel" class="carousel slide" data-ride="carousel">
                                            <!-- Carousel items -->
                                            <div class="carousel-inner">
                                                <div class="carousel-item flex-column">
                                                    <div class="d-flex no-block al m-r-15ign-items-center">
                                                        <i class="cc BTM-alt text-white display-6 m-r-15" title="BTM"></i>
                                                        <div class="m-t-10">
                                                            <h5 class="text-white font-medium">Bitmark</h5>
                                                            <h6 class="text-white">Advertising</h6>
                                                        </div>
                                                        <div class="ml-auto m-t-15">
                                                            <div class="crypto"></div>
                                                        </div>
                                                    </div>
                                                    <div class="row text-center text-white m-t-30">
                                                        <div class="col-4">
                                                            <span class="font-14">% 1h</span>
                                                            <p class="font-medium"><i class="fa fa-arrow-up"></i> 0.18</p>
                                                        </div>
                                                        <div class="col-4">
                                                            <span class="font-14">% 24h</span>
                                                            <p class="font-medium"><i class="fa fa-arrow-down"></i> -2.06</p>
                                                        </div>
                                                        <div class="col-4">
                                                            <span class="font-14">% 7d</span>
                                                            <p class="font-medium"><i class="fa fa-arrow-up"></i> -1.10</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="carousel-item flex-column">
                                                    <div class="d-flex no-block al m-r-15ign-items-center">
                                                        <i class="cc BTM-alt text-white display-6 m-r-15" title="BTM"></i>
                                                        <div class="m-t-10">
                                                            <h5 class="text-white font-medium">Bitmark</h5>
                                                            <h6 class="text-white">Advertising</h6>
                                                        </div>
                                                        <div class="ml-auto m-t-15">
                                                            <div class="crypto"></div>
                                                        </div>
                                                    </div>
                                                    <div class="row text-center text-white m-t-30">
                                                        <div class="col-4">
                                                            <span class="font-14">% 1h</span>
                                                            <p class="font-medium"><i class="fa fa-arrow-up"></i> 2.18</p>
                                                        </div>
                                                        <div class="col-4">
                                                            <span class="font-14">% 24h</span>
                                                            <p class="font-medium"><i class="fa fa-arrow-down"></i> -3.16</p>
                                                        </div>
                                                        <div class="col-4">
                                                            <span class="font-14">% 7d</span>
                                                            <p class="font-medium"><i class="fa fa-arrow-up"></i> -2.01</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="carousel-item flex-column active">
                                                    <div class="d-flex no-block al m-r-15ign-items-center">
                                                        <i class="cc BTM-alt text-white display-6 m-r-15" title="BTM"></i>
                                                        <div class="m-t-10">
                                                            <h5 class="text-white font-medium">Bitmark</h5>
                                                            <h6 class="text-white">Advertising</h6>
                                                        </div>
                                                        <div class="ml-auto m-t-15">
                                                            <div class="crypto"></div>
                                                        </div>
                                                    </div>
                                                    <div class="row text-center text-white m-t-30">
                                                        <div class="col-4">
                                                            <span class="font-14">% 1h</span>
                                                            <p class="font-medium"><i class="fa fa-arrow-up"></i> 0.12</p>
                                                        </div>
                                                        <div class="col-4">
                                                            <span class="font-14">% 24h</span>
                                                            <p class="font-medium"><i class="fa fa-arrow-down"></i> -1.16</p>
                                                        </div>
                                                        <div class="col-4">
                                                            <span class="font-14">% 7d</span>
                                                            <p class="font-medium"><i class="fa fa-arrow-up"></i> -1s.08</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- col -->
                            <div class="col-lg-4 col-md-6">
                                <div class="card bg-cyan">
                                    <div class="card-body">
                                        <div id="myCarousel" class="carousel slide" data-ride="carousel">
                                            <!-- Carousel items -->
                                            <div class="carousel-inner">
                                                <div class="carousel-item flex-column">
                                                    <div class="d-flex no-block align-items-center m-r-15">
                                                        <i class="cc DASH-alt text-white display-6 m-r-15" title="DASH"></i>
                                                        <div class="m-t-10">
                                                            <h5 class="text-white font-medium">Dash</h5>
                                                            <h6 class="text-white">Trading</h6>
                                                        </div>
                                                        <div class="ml-auto m-t-15">
                                                            <div class="crypto"></div>
                                                        </div>
                                                    </div>
                                                    <div class="row text-center text-white m-t-30">
                                                        <div class="col-4">
                                                            <span class="font-14">% 1h</span>
                                                            <p class="font-medium"><i class="fa fa-arrow-up"></i> 1.18</p>
                                                        </div>
                                                        <div class="col-4">
                                                            <span class="font-14">% 24h</span>
                                                            <p class="font-medium"><i class="fa fa-arrow-down"></i> -1.10</p>
                                                        </div>
                                                        <div class="col-4">
                                                            <span class="font-14">% 7d</span>
                                                            <p class="font-medium"><i class="fa fa-arrow-up"></i> -0.20</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="carousel-item flex-column">
                                                    <div class="d-flex no-block align-items-center m-r-15">
                                                        <i class="cc DASH-alt text-white display-6 m-r-15" title="DASH"></i>
                                                        <div class="m-t-10">
                                                            <h5 class="text-white font-medium">Dash</h5>
                                                            <h6 class="text-white">Trading</h6>
                                                        </div>
                                                        <div class="ml-auto m-t-15">
                                                            <div class="crypto"></div>
                                                        </div>
                                                    </div>
                                                    <div class="row text-center text-white m-t-30">
                                                        <div class="col-4">
                                                            <span class="font-14">% 1h</span>
                                                            <p class="font-medium"><i class="fa fa-arrow-up"></i> 1.18</p>
                                                        </div>
                                                        <div class="col-4">
                                                            <span class="font-14">% 24h</span>
                                                            <p class="font-medium"><i class="fa fa-arrow-down"></i> -1.06</p>
                                                        </div>
                                                        <div class="col-4">
                                                            <span class="font-14">% 7d</span>
                                                            <p class="font-medium"><i class="fa fa-arrow-up"></i> -1.01</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="carousel-item flex-column active">
                                                    <div class="d-flex no-block align-items-center m-r-15">
                                                        <i class="cc DASH-alt text-white display-6 m-r-15" title="DASH"></i>
                                                        <div class="m-t-10">
                                                            <h5 class="text-white font-medium">Dash</h5>
                                                            <h6 class="text-white">Trading</h6>
                                                        </div>
                                                        <div class="ml-auto m-t-15">
                                                            <div class="crypto"></div>
                                                        </div>
                                                    </div>
                                                    <div class="row text-center text-white m-t-30">
                                                        <div class="col-4">
                                                            <span class="font-14">% 1h</span>
                                                            <p class="font-medium"><i class="fa fa-arrow-up"></i> 1.16</p>
                                                        </div>
                                                        <div class="col-4">
                                                            <span class="font-14">% 24h</span>
                                                            <p class="font-medium"><i class="fa fa-arrow-down"></i> -1.10</p>
                                                        </div>
                                                        <div class="col-4">
                                                            <span class="font-14">% 7d</span>
                                                            <p class="font-medium"><i class="fa fa-arrow-up"></i> -0.08</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- col -->
                            <div class="col-lg-4 col-md-6">
                                <div class="card bg-light">
                                    <div class="card-body">
                                        <div id="myCarousel" class="carousel slide" data-ride="carousel">
                                            <!-- Carousel items -->
                                            <div class="carousel-inner">
                                                <div class="carousel-item flex-column">
                                                    <div class="d-flex no-block al m-r-15ign-items-center">
                                                        <i class="cc GEMZ-alt text-dark display-6 m-r-15" title="GEMZ"></i>
                                                        <div class="m-t-10">
                                                            <h5 class="text-dark font-medium">GetGems</h5>
                                                            <h6 class="text-dark">Exchange</h6>
                                                        </div>
                                                        <div class="ml-auto m-t-15">
                                                            <div class="crypto1"></div>
                                                        </div>
                                                    </div>
                                                    <div class="row text-center text-dark m-t-30">
                                                        <div class="col-4">
                                                            <span class="font-14">% 1h</span>
                                                            <p class="font-medium"><i class="fa fa-arrow-up"></i> 1.18</p>
                                                        </div>
                                                        <div class="col-4">
                                                            <span class="font-14">% 24h</span>
                                                            <p class="font-medium"><i class="fa fa-arrow-down"></i> -1.10</p>
                                                        </div>
                                                        <div class="col-4">
                                                            <span class="font-14">% 7d</span>
                                                            <p class="font-medium"><i class="fa fa-arrow-up"></i> -1.10</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="carousel-item flex-column">
                                                    <div class="d-flex no-block al m-r-15ign-items-center">
                                                        <i class="cc GEMZ-alt text-dark display-6 m-r-15" title="GEMZ"></i>
                                                        <div class="m-t-10">
                                                            <h5 class="text-dark font-medium">GetGems</h5>
                                                            <h6 class="text-dark">Exchange</h6>
                                                        </div>
                                                        <div class="ml-auto m-t-15">
                                                            <div class="crypto1"></div>
                                                        </div>
                                                    </div>
                                                    <div class="row text-center text-dark m-t-30">
                                                        <div class="col-4">
                                                            <span class="font-14">% 1h</span>
                                                            <p class="font-medium"><i class="fa fa-arrow-up"></i> 1.18</p>
                                                        </div>
                                                        <div class="col-4">
                                                            <span class="font-14">% 24h</span>
                                                            <p class="font-medium"><i class="fa fa-arrow-down"></i> -1.10</p>
                                                        </div>
                                                        <div class="col-4">
                                                            <span class="font-14">% 7d</span>
                                                            <p class="font-medium"><i class="fa fa-arrow-up"></i> -1.11</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="carousel-item flex-column active">
                                                    <div class="d-flex no-block al m-r-15ign-items-center">
                                                        <i class="cc GEMZ-alt text-dark display-6 m-r-15" title="GEMZ"></i>
                                                        <div class="m-t-10">
                                                            <h5 class="text-dark font-medium">GetGems</h5>
                                                            <h6 class="text-dark">Exchange</h6>
                                                        </div>
                                                        <div class="ml-auto m-t-15">
                                                            <div class="crypto1"></div>
                                                        </div>
                                                    </div>
                                                    <div class="row text-center text-dark m-t-30">
                                                        <div class="col-4">
                                                            <span class="font-14">% 1h</span>
                                                            <p class="font-medium"><i class="fa fa-arrow-up"></i> 12.16</p>
                                                        </div>
                                                        <div class="col-4">
                                                            <span class="font-14">% 24h</span>
                                                            <p class="font-medium"><i class="fa fa-arrow-down"></i> -1.10</p>
                                                        </div>
                                                        <div class="col-4">
                                                            <span class="font-14">% 7d</span>
                                                            <p class="font-medium"><i class="fa fa-arrow-up"></i> -2.18</p>
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
                        <h4 class="card-title m-t-40">Card Icon Section</h4>
                        <!-- Row -->
                        <div class="row">
                            <!-- Column -->
                            <div class="col-lg-3 col-md-6">
                                <div class="card">
                                    <div class="d-flex flex-row">
                                        <div class="p-10 bg-info">
                                            <h3 class="text-white box m-b-0"><i class="ti-themify-favicon-alt"></i></h3></div>
                                        <div class="p-10">
                                            <h3 class="text-info m-b-0">$980</h3>
                                            <span class="text-muted">Free Messages</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Column -->
                            <!-- Column -->
                            <div class="col-lg-3 col-md-6">
                                <div class="card">
                                    <div class="d-flex flex-row">
                                        <div class="p-10 bg-success">
                                            <h3 class="text-white box m-b-0"><i class="ti-signal"></i></h3></div>
                                        <div class="p-10">
                                            <h3 class="text-success m-b-0">$18090</h3>
                                            <span class="text-muted">Free Internet</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Column -->
                            <!-- Column -->
                            <div class="col-lg-3 col-md-6">
                                <div class="card">
                                    <div class="d-flex flex-row">
                                        <div class="p-10 bg-inverse">
                                            <h3 class="text-white box m-b-0"><i class="ti-timer"></i></h3></div>
                                        <div class="align-self-center m-l-20">
                                            <h3 class="m-b-0">$18090</h3>
                                            <span class="text-muted">Unlimited Calls</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Column -->
                            <!-- Column -->
                            <div class="col-lg-3 col-md-6">
                                <div class="card">
                                    <div class="d-flex flex-row">
                                        <div class="p-10 bg-cyan">
                                            <h3 class="text-white box m-b-0"><i class="ti-server"></i></h3></div>
                                        <div class="align-self-center m-l-20">
                                            <h3 class="text-cyan m-b-0">$18090</h3>
                                            <span class="text-muted">Free Data Storage</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Column -->
                        </div>
                        <!-- End Row -->
                        <!-- Row -->
                        <div class="row">
                            <!-- Column -->
                            <div class="col-lg-3 col-md-6">
                                <div class="card">
                                    <div class="d-flex flex-row">
                                        <div class="p-10">
                                            <h3 class="text-success m-b-0">$18090</h3>
                                            <span class="text-muted">Free Internet</span>
                                        </div>
                                        <div class="p-10 bg-success ml-auto ">
                                            <h3 class="text-white box m-b-0 "><i class="ti-signal "></i></h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Column -->
                            <!-- Column -->
                            <div class="col-lg-3 col-md-6 ">
                                <div class="card ">
                                    <div class="d-flex flex-row ">
                                        <div class="p-10">
                                            <h3 class="text-info m-b-0">$980</h3>
                                            <span class="text-muted">Free Messages</span>
                                        </div>
                                        <div class="p-10 bg-info ml-auto">
                                            <h3 class="text-white box m-b-0"><i class="ti-themify-favicon-alt"></i></h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Column -->
                            <!-- Column -->
                            <div class="col-lg-3 col-md-6">
                                <div class="card">
                                    <div class="d-flex flex-row">
                                        <div class="p-10">
                                            <h3 class="text-cyan m-b-0">$18090</h3>
                                            <span class="text-muted">Free Data Storage</span>
                                        </div>
                                        <div class="p-10 bg-cyan ml-auto">
                                            <h3 class="text-white box m-b-0 "><i class="ti-server "></i></h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Column -->
                            <!-- Column -->
                            <div class="col-lg-3 col-md-6 ">
                                <div class="card ">
                                    <div class="d-flex flex-row">
                                        <div class="p-10">
                                            <h3 class="m-b-0">$18090</h3>
                                            <span class="text-muted">Unlimited Calls</span>
                                        </div>
                                        <div class="p-10 bg-inverse ml-auto">
                                            <h3 class="text-white box m-b-0"><i class="ti-timer"></i></h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Column -->
                        </div>
                        <!-- End Row -->
                        <h4 class="card-title m-t-40">Card Icon Section with progressbar</h4>
                        <!-- Row -->
                        <div class="row">
                            <!-- Column -->
                            <div class="col-lg-3 col-md-6">
                                <div class="card">
                                    <div class="d-flex flex-row">
                                        <div class="p-10 bg-info">
                                            <h3 class="text-white box m-b-0"><i class="ti-themify-favicon-alt"></i></h3>
                                        </div>
                                        <div class="p-10">
                                            <h3 class="text-info m-b-0">$980</h3>
                                            <span class="text-muted">Free Messages</span>
                                            <div class="progress">
                                                <div class="progress-bar bg-info" role="progressbar" style="width: 85%; height: 6px;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Column -->
                            <!-- Column -->
                            <div class="col-lg-3 col-md-6">
                                <div class="card">
                                    <div class="d-flex flex-row">
                                        <div class="p-10 bg-success">
                                            <h3 class="text-white box m-b-0"><i class="ti-signal"></i></h3>
                                        </div>
                                        <div class="p-10">
                                            <h3 class="text-success m-b-0">$18090</h3>
                                            <span class="text-muted">Free Internet</span>
                                            <div class="progress">
                                                <div class="progress-bar bg-success" role="progressbar" style="width: 85%; height: 6px;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Column -->
                            <!-- Column -->
                            <div class="col-lg-3 col-md-6">
                                <div class="card">
                                    <div class="d-flex flex-row">
                                        <div class="p-10 bg-inverse">
                                            <h3 class="text-white box m-b-0"><i class="ti-timer"></i></h3>
                                        </div>
                                        <div class="p-10">
                                            <h3 class="m-b-0">$18090</h3>
                                            <span class="text-muted">Unlimited Calls</span>
                                            <div class="progress">
                                                <div class="progress-bar bg-inverse" role="progressbar" style="width: 85%; height: 6px;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Column -->
                            <!-- Column -->
                            <div class="col-lg-3 col-md-6">
                                <div class="card">
                                    <div class="d-flex flex-row">
                                        <div class="p-10 bg-cyan">
                                            <h3 class="text-white box m-b-0"><i class="ti-server"></i></h3>
                                        </div>
                                        <div class="p-10">
                                            <h3 class="text-cyan m-b-0">$18090</h3>
                                            <span class="text-muted">Free Data Storage</span>
                                            <div class="progress">
                                                <div class="progress-bar bg-cyan" role="progressbar" style="width: 85%; height: 6px;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Column -->
                        </div>
                        <!-- End Row -->
                        <!-- Row -->
                        <div class="row">
                            <!-- Column -->
                            <div class="col-lg-3 col-md-6">
                                <div class="card">
                                    <div class="d-flex flex-row">
                                        <div class="p-10">
                                            <h3 class="text-success m-b-0">$18090</h3>
                                            <span class="text-muted">Free Internet</span>
                                            <div class="progress">
                                                <div class="progress-bar bg-success" role="progressbar" style="width: 85%; height: 6px;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                        <div class="p-10 bg-success ml-auto">
                                            <h3 class="text-white box m-b-0"><i class="ti-signal"></i></h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Column -->
                            <!-- Column -->
                            <div class="col-lg-3 col-md-6">
                                <div class="card">
                                    <div class="d-flex flex-row">
                                        <div class="p-10">
                                            <h3 class="text-info m-b-0">$980</h3>
                                            <span class="text-muted">Free Messages</span>
                                            <div class="progress">
                                                <div class="progress-bar bg-info" role="progressbar" style="width: 85%; height: 6px;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                        <div class="p-10 bg-info ml-auto">
                                            <h3 class="text-white box m-b-0"><i class="ti-themify-favicon-alt"></i></h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Column -->
                            <!-- Column -->
                            <div class="col-lg-3 col-md-6">
                                <div class="card">
                                    <div class="d-flex flex-row">
                                        <div class="p-10">
                                            <h3 class="text-cyan m-b-0">$18090</h3>
                                            <span class="text-muted">Free Data Storage</span>
                                            <div class="progress">
                                                <div class="progress-bar bg-cyan" role="progressbar" style="width: 85%; height: 6px;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                        <div class="p-10 bg-cyan ml-auto">
                                            <h3 class="text-white box m-b-0"><i class="ti-server"></i></h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Column -->
                            <!-- Column -->
                            <div class="col-lg-3 col-md-6">
                                <div class="card">
                                    <div class="d-flex flex-row">
                                        <div class="p-10">
                                            <h3 class="m-b-0">$18090</h3>
                                            <span class="text-muted">Unlimited Calls</span>
                                            <div class="progress">
                                                <div class="progress-bar bg-inverse" role="progressbar" style="width: 85%; height: 6px;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                        <div class="p-10 bg-inverse ml-auto">
                                            <h3 class="text-white box m-b-0"><i class="ti-timer"></i></h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Column -->
                        </div>
                        <!-- End Row -->
                        <h4 class="card-title m-t-40">Card Icon Section With Background</h4>
                        <!-- Row -->
                        <div class="row">
                            <!-- Column -->
                            <div class="col-lg-3 col-md-6">
                                <div class="card bg-info">
                                    <div class="d-flex flex-row">
                                        <div class="p-10">
                                            <h3 class="text-white box m-b-0"><i class="ti-themify-favicon-alt"></i></h3>
                                        </div>
                                        <div class="text-white align-self-center p-10">
                                            <h3 class="m-b-0">$980</h3>
                                            <span class="text-white">Free Messages</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Column -->
                            <!-- Column -->
                            <div class="col-lg-3 col-md-6">
                                <div class="card bg-success">
                                    <div class="d-flex flex-row">
                                        <div class="p-10">
                                            <h3 class="text-white box m-b-0"><i class="ti-signal"></i></h3></div>
                                        <div class="text-white align-self-center p-10">
                                            <h3 class="m-b-0">$18090</h3>
                                            <span class="text-white">Free Internet</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Column -->
                            <!-- Column -->
                            <div class="col-lg-3 col-md-6">
                                <div class="card bg-inverse">
                                    <div class="d-flex flex-row">
                                        <div class="p-10">
                                            <h3 class="text-white box m-b-0"><i class="ti-timer"></i></h3></div>
                                        <div class="text-white align-self-center p-10">
                                            <h3 class="m-b-0">$18090</h3>
                                            <span class="text-white">Unlimited Calls</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Column -->
                            <!-- Column -->
                            <div class="col-lg-3 col-md-6">
                                <div class="card bg-cyan">
                                    <div class="d-flex flex-row">
                                        <div class="p-10">
                                            <h3 class="text-white box m-b-0"><i class="ti-server"></i></h3></div>
                                        <div class="text-white align-self-center p-10">
                                            <h3 class="m-b-0">$18090</h3>
                                            <span class="text-white">Free Data Storage</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Column -->
                        </div>
                        <!-- End Row -->
                        <!-- Row -->
                        <div class="row">
                            <!-- Column -->
                            <div class="col-lg-3 col-md-6">
                                <div class="card bg-success">
                                    <div class="d-flex flex-row">
                                        <div class="text-white align-self-center p-10">
                                            <h3 class="m-b-0">$18090</h3>
                                            <span>Free Internet</span>
                                        </div>
                                        <div class="p-10 ml-auto">
                                            <h3 class="text-white box m-b-0"><i class="ti-signal"></i></h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Column -->
                            <!-- Column -->
                            <div class="col-lg-3 col-md-6">
                                <div class="card bg-info">
                                    <div class="d-flex flex-row">
                                        <div class="text-white align-self-center p-10">
                                            <h3 class="m-b-0">$980</h3>
                                            <span>Free Messages</span>
                                        </div>
                                        <div class="p-10  ml-auto">
                                            <h3 class="text-white box m-b-0"><i class="ti-themify-favicon-alt"></i></h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Column -->
                            <!-- Column -->
                            <div class="col-lg-3 col-md-6">
                                <div class="card bg-cyan">
                                    <div class="d-flex flex-row">
                                        <div class="text-white align-self-center p-10">
                                            <h3 class="m-b-0">$18090</h3>
                                            <span>Free Data Storage</span>
                                        </div>
                                        <div class="p-10  ml-auto">
                                            <h3 class="text-white box m-b-0"><i class="ti-server"></i></h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Column -->
                            <!-- Column -->
                            <div class="col-lg-3 col-md-6">
                                <div class="card bg-inverse">
                                    <div class="d-flex flex-row">
                                        <div class="text-white align-self-center p-10">
                                            <h3 class="m-b-0">$18090</h3>
                                            <span>Unlimited Calls</span>
                                        </div>
                                        <div class="p-10 ml-auto">
                                            <h3 class="text-white box m-b-0"><i class="ti-timer"></i></h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Column -->
                        </div>
                        <!-- End Row -->
                        <h4 class="card-title m-t-40">Title With Subtitles</h4>
                        <!-- Row -->
                        <div class="row">
                            <!-- Column -->
                            <div class="col-sm-12 col-md-6">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex flex-row">
                                            <div class="round align-self-center round-success"><i class="ti-wallet"></i></div>
                                            <div class="m-l-10 align-self-center">
                                                <h4 class="m-b-0">Total Income</h4>
                                                <span class="text-muted">Income</span>
                                            </div>
                                            <div class="ml-auto align-self-center">
                                                <h2 class="font-medium m-b-0">$2900</h2>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Column -->
                            <!-- Column -->
                            <div class="col-sm-12 col-md-6">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex flex-row">
                                            <div class="round align-self-center round-info"><i class="ti-user"></i></div>
                                            <div class="m-l-10 align-self-center">
                                                <h4 class="m-b-0">Total Products</h4>
                                                <span class="text-muted">Users</span>
                                            </div>
                                            <div class="ml-auto align-self-center">
                                                <h2 class="font-medium m-b-0">$2690</h2>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Column -->
                            <!-- Column -->
                            <div class="col-sm-12 col-md-6">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex flex-row">
                                            <div class="round align-self-center round-danger"><i class="ti-calendar"></i></div>
                                            <div class="m-l-10 align-self-center">
                                                <h4 class="m-b-0">Total Members</h4>
                                                <span class="text-muted">My birthday</span>
                                            </div>
                                            <div class="ml-auto align-self-center">
                                                <h2 class="font-medium m-b-0">20 March</h2>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Column -->
                            <!-- Column -->
                            <div class="col-sm-12 col-md-6">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex flex-row">
                                            <div class="round align-self-center round-warning"><i class="ti-settings"></i></div>
                                            <div class="m-l-10 align-self-center">
                                                <h4 class="m-b-0">Total Tasks</h4>
                                                <span class="text-muted">pending</span>
                                            </div>
                                            <div class="ml-auto align-self-center">
                                                <h2 class="font-medium m-b-0">6540</h2>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Column -->
                        </div>
                        <!-- Row -->
                        <!-- Row -->
                        <div class="row">
                            <!-- Column -->
                            <div class="col-sm-12 col-md-6">
                                <div class="card bg-success">
                                    <div class="card-body text-white">
                                        <div class="d-flex flex-row">
                                            <div class="align-self-center display-6"><i class="ti-wallet"></i></div>
                                            <div class="p-10 align-self-center">
                                                <h4 class="m-b-0">Total Income</h4>
                                                <span>Income</span>
                                            </div>
                                            <div class="ml-auto align-self-center">
                                                <h2 class="font-medium m-b-0">$2900</h2>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Column -->
                            <!-- Column -->
                            <div class="col-sm-12 col-md-6">
                                <div class="card bg-info">
                                    <div class="card-body text-white">
                                        <div class="d-flex flex-row">
                                            <div class="display-6 align-self-center"><i class="ti-user"></i></div>
                                            <div class="p-10 align-self-center">
                                                <h4 class="m-b-0">Total Products</h4>
                                                <span>Users</span>
                                            </div>
                                            <div class="ml-auto align-self-center">
                                                <h2 class="font-medium m-b-0">$2690</h2>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Column -->
                            <!-- Column -->
                            <div class="col-sm-12 col-md-6">
                                <div class="card bg-cyan">
                                    <div class="card-body text-white">
                                        <div class="d-flex flex-row">
                                            <div class="display-6 align-self-center"><i class="ti-calendar"></i></div>
                                            <div class="p-10 align-self-center">
                                                <h4 class="m-b-0">Total Members</h4>
                                                <span>My birthday</span>
                                            </div>
                                            <div class="ml-auto align-self-center">
                                                <h2 class="font-medium m-b-0">20 March</h2>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Column -->
                            <!-- Column -->
                            <div class="col-sm-12 col-md-6">
                                <div class="card bg-orange">
                                    <div class="card-body text-white">
                                        <div class="d-flex flex-row">
                                            <div class="display-6 align-self-center"><i class="ti-settings"></i></div>
                                            <div class="p-10 align-self-center">
                                                <h4 class="m-b-0">Total Tasks</h4>
                                                <span>pending</span>
                                            </div>
                                            <div class="ml-auto align-self-center">
                                                <h2 class="font-medium m-b-0">6540</h2>
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
                            <div class="col-sm-12 col-md-6">
                                <div class="card">
                                    <div class="d-flex flex-row">
                                        <div class="p-10 bg-info">
                                            <h3 class="text-white box m-b-0"><i class="ti-themify-favicon-alt"></i></h3></div>
                                        <div class="p-10">
                                            <h3 class="text-info m-b-0">$980</h3>
                                            <span class="text-muted">Free Messages</span>
                                        </div>
                                        <div class="align-self-center m-r-20 ml-auto">
                                            <h2 class="text-info m-b-0">250</h2>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Column -->
                            <!-- Column -->
                            <div class="col-sm-12 col-md-6">
                                <div class="card">
                                    <div class="d-flex flex-row">
                                        <div class="p-10 bg-success">
                                            <h3 class="text-white box m-b-0"><i class="ti-signal"></i></h3></div>
                                        <div class="p-10">
                                            <h3 class="text-success m-b-0">$18090</h3>
                                            <span class="text-muted">Free Internet</span>
                                        </div>
                                        <div class="align-self-center m-r-20 ml-auto">
                                            <h2 class="text-success m-b-0">125</h2>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Column -->
                            <!-- Column -->
                            <div class="col-sm-12 col-md-6">
                                <div class="card">
                                    <div class="d-flex flex-row">
                                        <div class="p-10 bg-inverse">
                                            <h3 class="text-white box m-b-0"><i class="ti-timer"></i></h3></div>
                                        <div class="p-10">
                                            <h3 class="m-b-0">$18090</h3>
                                            <span class="text-muted">Unlimited Calls</span>
                                        </div>
                                        <div class="align-self-center m-r-20 ml-auto">
                                            <h2 class="text-dark m-b-0">450</h2>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Column -->
                            <!-- Column -->
                            <div class="col-sm-12 col-md-6">
                                <div class="card">
                                    <div class="d-flex flex-row">
                                        <div class="p-10 bg-cyan">
                                            <h3 class="text-white box m-b-0"><i class="ti-server"></i></h3></div>
                                        <div class="p-10">
                                            <h3 class="text-cyan m-b-0">$18090</h3>
                                            <span class="text-muted">Free Data Storage</span>
                                        </div>
                                        <div class="align-self-center m-r-20 ml-auto">
                                            <h2 class="text-cyan m-b-0">750</h2>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Column -->
                        </div>
                        <!-- End Row -->
                        <h4 class="card-title m-t-40">Group Cards</h4>
                        <!-- Row -->
                        <div class="card-group">
                            <!-- Column -->
                            <div class="card">
                                <div class="card-body text-center">
                                    <h4 class="text-center text-info">Unique Visit</h4>
                                    <h2>1200</h2>
                                    <div class="row p-t-10 p-b-10">
                                        <!-- Column -->
                                        <div class="col text-center align-self-center">
                                            <div data-label="20%" class="css-bar m-b-0 css-bar-primary css-bar-20"><i class="display-6 mdi mdi-account-circle"></i></div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6 col-sm-12">
                                            <h4 class="font-medium m-b-0"><i class="ti-angle-up text-success"></i> <br> 12056</h4>
                                        </div>
                                        <div class="col-md-6 col-sm-12">
                                            <h4 class="font-medium m-b-0"><i class="ti-angle-down text-danger"></i> <br> 145</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Column -->
                            <!-- Column -->
                            <div class="card">
                                <div class="card-body text-center">
                                    <h4 class="text-center text-danger">Total Visit</h4>
                                    <h2>1200</h2>
                                    <div class="row p-t-10 p-b-10">
                                        <!-- Column -->
                                        <div class="col text-center align-self-center">
                                            <div data-label="20%" class="css-bar m-b-0 css-bar-danger css-bar-20"><i class="display-6 mdi mdi-star-circle"></i></div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6 col-sm-12">
                                            <h4 class="font-medium m-b-0"><i class="ti-angle-up text-success"></i> <br> 21456</h4>
                                        </div>
                                        <div class="col-md-6 col-sm-12">
                                            <h4 class="font-medium m-b-0"><i class="ti-angle-down text-danger"></i> <br> 145</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Column -->
                            <!-- Column -->
                            <div class="card">
                                <div class="card-body text-center">
                                    <h4 class="text-center text-cyan">Bounce rate</h4>
                                    <h2>1200</h2>
                                    <div class="row p-t-10 p-b-10">
                                        <!-- Column -->
                                        <div class="col text-center align-self-center">
                                            <div data-label="20%" class="css-bar m-b-0 css-bar-success css-bar-20"><i class="display-6 mdi mdi-briefcase-check"></i></div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6 col-sm-12">
                                            <h4 class="font-medium m-b-0"><i class="ti-angle-up text-success"></i> <br> 12465</h4>
                                        </div>
                                        <div class="col-md-6 col-sm-12">
                                            <h4 class="font-medium m-b-0"><i class="ti-angle-down text-danger"></i> <br> 145</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Column -->
                        </div>
                        <!-- End Row -->
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


</body>

</html>