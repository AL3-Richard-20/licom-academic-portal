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
        <link href="../assets/extra-libs/c3/c3.min.css" rel="stylesheet">
        <link href="../assets/extra-libs/css-chart/css-chart.css" rel="stylesheet">
        <link href="../assets/extra-libs/jvector/jquery-jvectormap-2.0.2.css" rel="stylesheet" />
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
                        <h4 class="page-title">Dashboard</h4>
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
                <!-- Active user - project- visitors -->
                <!-- ============================================================== -->
                <div class="row">
                    <!-- column -->
                    <div class="col-sm-12 col-lg-4">
                        <div class="card ">
                            <div class="card-body">
                                <h4 class="card-title">Device Visit</h4>
                                <div id="visitor" style="height:253px; width:100%;" class="m-t-20"></div>
                                <!-- row -->
                                <div class="row m-t-30 m-b-15">
                                    <!-- column -->
                                    <div class="col-4 birder-right text-left">
                                        <h4 class="m-b-0">60%
                                            <small>
                                                <i class="ti-arrow-up text-success"></i>
                                            </small>
                                        </h4>Desktop</div>
                                    <!-- column -->
                                    <div class="col-4 birder-right text-center">
                                        <h4 class="m-b-0">28%
                                            <small>
                                                <i class="ti-arrow-down text-danger"></i>
                                            </small>
                                        </h4>Mobile</div>
                                    <!-- column -->
                                    <div class="col-4 text-right">
                                        <h4 class="m-b-0">12%
                                            <small>
                                                <i class="ti-arrow-up text-success"></i>
                                            </small>
                                        </h4>Tablet</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- column -->

                    <!-- column -->
                    <div class="col-sm-12 col-lg-8">
                        <div class="card">
                            <div class="card-body">
                                <div class="row align-items-center">
                                    <div class="col-lg-8 col-md-12">
                                        <h4 class="card-title">Visitors By Countries</h4>
                                        <div id="visitfromworld" style="width:100%; height:350px"></div>
                                    </div>
                                    <div class="col-lg-4 col-md-12">
                                        <!-- row -->
                                        <div class="row m-b-15">
                                            <div class="col-9">India</div>
                                            <div class="col-3 text-right">28%</div>
                                            <div class="col-12">
                                                <div class="progress m-t-5">
                                                    <div class="progress-bar bg-info" role="progressbar" style="width: 48%" aria-valuenow="48" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </div>

                                        </div>
                                        <!-- row -->
                                        <div class="row m-b-15">

                                            <div class="col-9"> UK</div>
                                            <div class="col-3 text-right">21%</div>
                                            <div class="col-12">
                                                <div class="progress m-t-5">
                                                    <div class="progress-bar bg-cyan" role="progressbar" style="width: 33%" aria-valuenow="33" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- row -->
                                        <div class="row m-b-15">
                                            <div class="col-9"> USA</div>
                                            <div class="col-3 text-right">18%</div>
                                            <div class="col-12">
                                                <div class="progress m-t-5">
                                                    <div class="progress-bar bg-purple" role="progressbar" style="width: 40%" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- row -->
                                        <div class="row">
                                            <div class="col-9">China</div>
                                            <div class="col-3 text-right">12%</div>
                                            <div class="col-12">
                                                <div class="progress m-t-5">
                                                    <div class="progress-bar bg-danger" role="progressbar" style="width: 15%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- Sales Summery -->
                <!-- ============================================================== -->

                <div class="row">

                    <!-- column -->
                    <div class="col-sm-12 col-lg-4">
                        <div class="card bg-light-info no-card-border">
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <div class="m-r-10">
                                        <span>Referral Earnings</span>
                                        <h4>$769.08</h4>
                                    </div>
                                    <div class="ml-auto">
                                        <div class="" id="ravenue"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- column -->
                    <div class="col-sm-12 col-lg-4">
                        <div class="card bg-light-warning no-card-border">
                            <div class="card-body">
                                <div class="d-flex">
                                    <div class="m-r-10">
                                        <span>Wallet Balance</span>
                                        <h4>$3,567.53</h4>
                                    </div>
                                    <div class="ml-auto">
                                        <div style="max-width:130px; height:15px;" class="m-b-40">
                                            <canvas id="balance"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- column -->
                    <div class="col-sm-12 col-lg-4">
                        <div class="card bg-light-success no-card-border">
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <div class="m-r-10">
                                        <span>Estimated Sales</span>
                                        <h4>5769</h4>
                                    </div>
                                    <div class="ml-auto">
                                        <div class="gaugejs-box">
                                            <canvas id="foo" class="gaugejs" height="50" width="100">guage</canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-group">
                    <!-- Column -->
                    <div class="card">
                        <div class="card-body text-center">
                            <h4 class="text-center text-info">Unique Visit</h4>
                            <h2>1200</h2>
                            <div class="row p-t-10 p-b-10">
                                <!-- Column -->
                                <div class="col text-center align-self-center">
                                    <div data-label="20%" class="css-bar m-b-0 css-bar-primary css-bar-20">
                                        <i class="display-6 mdi mdi-account-circle"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 col-sm-12">
                                    <h4 class="font-medium m-b-0">
                                        <i class="ti-angle-up text-success"></i>
                                        <br> 12056</h4>
                                </div>
                                <div class="col-md-6 col-sm-12">
                                    <h4 class="font-medium m-b-0">
                                        <i class="ti-angle-down text-danger"></i>
                                        <br> 145</h4>
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
                                    <div data-label="20%" class="css-bar m-b-0 css-bar-danger css-bar-20">
                                        <i class="display-6 mdi mdi-star-circle"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 col-sm-12">
                                    <h4 class="font-medium m-b-0">
                                        <i class="ti-angle-up text-success"></i>
                                        <br> 21456</h4>
                                </div>
                                <div class="col-md-6 col-sm-12">
                                    <h4 class="font-medium m-b-0">
                                        <i class="ti-angle-down text-danger"></i>
                                        <br> 145</h4>
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
                                    <div data-label="20%" class="css-bar m-b-0 css-bar-success css-bar-20">
                                        <i class="display-6 mdi mdi-briefcase-check"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 col-sm-12">
                                    <h4 class="font-medium m-b-0">
                                        <i class="ti-angle-up text-success"></i>
                                        <br> 12465</h4>
                                </div>
                                <div class="col-md-6 col-sm-12">
                                    <h4 class="font-medium m-b-0">
                                        <i class="ti-angle-down text-danger"></i>
                                        <br> 145</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                </div>
                <!-- ============================================================== -->
                <!-- Sales Summery -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card bg-light">
                            <div class="card-body">
                                <div class="d-flex no-block align-items-center m-b-10">
                                    <h4 class="card-title">User Details</h4>
                                </div>
                                <div class="table-responsive">
                                    <table id="file_export" class="table bg-white table-bordered nowrap display">
                                        <thead>
                                            <tr>
                                                <th> </th>
                                                <th>Name</th>
                                                <th>Email</th>
                                                <th>Phone</th>
                                                <th>Role</th>
                                                <th>Age</th>
                                                <th>Joining date</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input" id="customControlValidation2" required>
                                                        <label class="custom-control-label" for="customControlValidation2"></label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <a href="javscript:void(0)">
                                                        <img src="../../assets/images/users/1.jpg" alt="user" class="rounded-circle" width="30" /> Genelia Deshmukh</a>
                                                </td>
                                                <td>genelia@gmail.com</td>
                                                <td>+123 456 789</td>
                                                <td>
                                                    <span class="label label-danger">Designer</span>
                                                </td>
                                                <td>23</td>
                                                <td>12-10-2014</td>

                                                <td>
                                                    <button type="button" class="btn btn-sm btn-icon btn-pure btn-outline delete-row-btn" data-toggle="tooltip" data-original-title="Delete">
                                                        <i class="ti-close" aria-hidden="true"></i>
                                                    </button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input" id="customControlValidation3" required>
                                                        <label class="custom-control-label" for="customControlValidation3"></label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <a href="javscript:void(0)">
                                                        <img src="../../assets/images/users/2.jpg" alt="user" class="rounded-circle" width="30" /> Arijit Singh</a>
                                                </td>
                                                <td>arijit@gmail.com</td>
                                                <td>+234 456 789</td>
                                                <td>
                                                    <span class="label label-info">Developer</span>
                                                </td>
                                                <td>26</td>
                                                <td>10-09-2014</td>

                                                <td>
                                                    <button type="button" class="btn btn-sm btn-icon btn-pure btn-outline delete-row-btn" data-toggle="tooltip" data-original-title="Delete">
                                                        <i class="ti-close" aria-hidden="true"></i>
                                                    </button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input" id="customControlValidation4" required>
                                                        <label class="custom-control-label" for="customControlValidation4"></label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <a href="javscript:void(0)">
                                                        <img src="../../assets/images/users/3.jpg" alt="user" class="rounded-circle" width="30" /> Govinda jalan</a>
                                                </td>
                                                <td>govinda@gmail.com</td>
                                                <td>+345 456 789</td>
                                                <td>
                                                    <span class="label label-success">Accountant</span>
                                                </td>
                                                <td>28</td>
                                                <td>1-10-2013</td>

                                                <td>
                                                    <button type="button" class="btn btn-sm btn-icon btn-pure btn-outline delete-row-btn" data-toggle="tooltip" data-original-title="Delete">
                                                        <i class="ti-close" aria-hidden="true"></i>
                                                    </button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input" id="customControlValidation5" required>
                                                        <label class="custom-control-label" for="customControlValidation5"></label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <a href="javscript:void(0)">
                                                        <img src="../../assets/images/users/4.jpg" alt="user" class="rounded-circle" width="30" /> Hritik Roshan</a>
                                                </td>
                                                <td>hritik@gmail.com</td>
                                                <td>+456 456 789</td>
                                                <td>
                                                    <span class="label label-inverse">HR</span>
                                                </td>
                                                <td>25</td>
                                                <td>2-10-2017</td>

                                                <td>
                                                    <button type="button" class="btn btn-sm btn-icon btn-pure btn-outline delete-row-btn" data-toggle="tooltip" data-original-title="Delete">
                                                        <i class="ti-close" aria-hidden="true"></i>
                                                    </button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input" id="customControlValidation6" required>
                                                        <label class="custom-control-label" for="customControlValidation6"></label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <a href="javscript:void(0)">
                                                        <img src="../../assets/images/users/5.jpg" alt="user" class="rounded-circle" width="30" /> John Abraham</a>
                                                </td>
                                                <td>john@gmail.com</td>
                                                <td>+567 456 789</td>
                                                <td>
                                                    <span class="label label-danger">Manager</span>
                                                </td>
                                                <td>23</td>
                                                <td>10-9-2015</td>

                                                <td>
                                                    <button type="button" class="btn btn-sm btn-icon btn-pure btn-outline delete-row-btn" data-toggle="tooltip" data-original-title="Delete">
                                                        <i class="ti-close" aria-hidden="true"></i>
                                                    </button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input" id="customControlValidation7" required>
                                                        <label class="custom-control-label" for="customControlValidation7"></label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <a href="javscript:void(0)">
                                                        <img src="../../assets/images/users/6.jpg" alt="user" class="rounded-circle" width="30" /> Pawandeep kumar</a>
                                                </td>
                                                <td>pawandeep@gmail.com</td>
                                                <td>+678 456 789</td>
                                                <td>
                                                    <span class="label label-warning">Chairman</span>
                                                </td>
                                                <td>29</td>
                                                <td>10-5-2013</td>

                                                <td>
                                                    <button type="button" class="btn btn-sm btn-icon btn-pure btn-outline delete-row-btn" data-toggle="tooltip" data-original-title="Delete">
                                                        <i class="ti-close" aria-hidden="true"></i>
                                                    </button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input" id="customControlValidation8" required>
                                                        <label class="custom-control-label" for="customControlValidation8"></label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <a href="javscript:void(0)">
                                                        <img src="../../assets/images/users/7.jpg" alt="user" class="rounded-circle" width="30" /> Ritesh Deshmukh</a>
                                                </td>
                                                <td>ritesh@gmail.com</td>
                                                <td>+123 456 789</td>
                                                <td>
                                                    <span class="label label-danger">Designer</span>
                                                </td>
                                                <td>35</td>
                                                <td>05-10-2012</td>

                                                <td>
                                                    <button type="button" class="btn btn-sm btn-icon btn-pure btn-outline delete-row-btn" data-toggle="tooltip" data-original-title="Delete">
                                                        <i class="ti-close" aria-hidden="true"></i>
                                                    </button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input" id="customControlValidation9" required>
                                                        <label class="custom-control-label" for="customControlValidation9"></label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <a href="javscript:void(0)">
                                                        <img src="../../assets/images/users/8.jpg" alt="user" class="rounded-circle" width="30" /> Salman Khan</a>
                                                </td>
                                                <td>salman@gmail.com</td>
                                                <td>+234 456 789</td>
                                                <td>
                                                    <span class="label label-info">Developer</span>
                                                </td>
                                                <td>27</td>
                                                <td>11-10-2014</td>

                                                <td>
                                                    <button type="button" class="btn btn-sm btn-icon btn-pure btn-outline delete-row-btn" data-toggle="tooltip" data-original-title="Delete">
                                                        <i class="ti-close" aria-hidden="true"></i>
                                                    </button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input" id="customControlValidation10" required>
                                                        <label class="custom-control-label" for="customControlValidation10"></label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <a href="javscript:void(0)">
                                                        <img src="../../assets/images/users/1.jpg" alt="user" class="rounded-circle" width="30" /> Govinda jalan</a>
                                                </td>
                                                <td>govinda@gmail.com</td>
                                                <td>+345 456 789</td>
                                                <td>
                                                    <span class="label label-success">Accountant</span>
                                                </td>
                                                <td>18</td>
                                                <td>12-5-2017</td>

                                                <td>
                                                    <button type="button" class="btn btn-sm btn-icon btn-pure btn-outline delete-row-btn" data-toggle="tooltip" data-original-title="Delete">
                                                        <i class="ti-close" aria-hidden="true"></i>
                                                    </button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input" id="customControlValidation11" required>
                                                        <label class="custom-control-label" for="customControlValidation11"></label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <a href="javscript:void(0)">
                                                        <img src="../../assets/images/users/2.jpg" alt="user" class="rounded-circle" width="30" /> Sonu Nigam</a>
                                                </td>
                                                <td>sonu@gmail.com</td>
                                                <td>+456 456 789</td>
                                                <td>
                                                    <span class="label label-inverse">HR</span>
                                                </td>
                                                <td>36</td>
                                                <td>18-5-2009</td>

                                                <td>
                                                    <button type="button" class="btn btn-sm btn-icon btn-pure btn-outline delete-row-btn" data-toggle="tooltip" data-original-title="Delete">
                                                        <i class="ti-close" aria-hidden="true"></i>
                                                    </button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input" id="customControlValidation12" required>
                                                        <label class="custom-control-label" for="customControlValidation12"></label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <a href="javscript:void(0)">
                                                        <img src="../../assets/images/users/3.jpg" alt="user" class="rounded-circle" width="30" /> Varun Dhawan</a>
                                                </td>
                                                <td>varun@gmail.com</td>
                                                <td>+567 456 789</td>
                                                <td>
                                                    <span class="label label-danger">Manager</span>
                                                </td>
                                                <td>43</td>
                                                <td>12-10-2010</td>

                                                <td>
                                                    <button type="button" class="btn btn-sm btn-icon btn-pure btn-outline delete-row-btn" data-toggle="tooltip" data-original-title="Delete">
                                                        <i class="ti-close" aria-hidden="true"></i>
                                                    </button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input" id="customControlValidation13" required>
                                                        <label class="custom-control-label" for="customControlValidation13"></label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <a href="javscript:void(0)">
                                                        <img src="../../assets/images/users/4.jpg" alt="user" class="rounded-circle" width="30" /> Genelia Deshmukh</a>
                                                </td>
                                                <td>genelia@gmail.com</td>
                                                <td>+123 456 789</td>
                                                <td>
                                                    <span class="label label-danger">Designer</span>
                                                </td>
                                                <td>23</td>
                                                <td>12-10-2014</td>

                                                <td>
                                                    <button type="button" class="btn btn-sm btn-icon btn-pure btn-outline delete-row-btn" data-toggle="tooltip" data-original-title="Delete">
                                                        <i class="ti-close" aria-hidden="true"></i>
                                                    </button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input" id="customControlValidation14" required>
                                                        <label class="custom-control-label" for="customControlValidation14"></label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <a href="javscript:void(0)">
                                                        <img src="../../assets/images/users/5.jpg" alt="user" class="rounded-circle" width="30" /> Arijit Singh</a>
                                                </td>
                                                <td>arijit@gmail.com</td>
                                                <td>+234 456 789</td>
                                                <td>
                                                    <span class="label label-info">Developer</span>
                                                </td>
                                                <td>26</td>
                                                <td>10-09-2014</td>

                                                <td>
                                                    <button type="button" class="btn btn-sm btn-icon btn-pure btn-outline delete-row-btn" data-toggle="tooltip" data-original-title="Delete">
                                                        <i class="ti-close" aria-hidden="true"></i>
                                                    </button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input" id="customControlValidation15" required>
                                                        <label class="custom-control-label" for="customControlValidation15"></label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <a href="javscript:void(0)">
                                                        <img src="../../assets/images/users/6.jpg" alt="user" class="rounded-circle" width="30" /> Govinda jalan</a>
                                                </td>
                                                <td>govinda@gmail.com</td>
                                                <td>+345 456 789</td>
                                                <td>
                                                    <span class="label label-success">Accountant</span>
                                                </td>
                                                <td>28</td>
                                                <td>1-10-2013</td>

                                                <td>
                                                    <button type="button" class="btn btn-sm btn-icon btn-pure btn-outline delete-row-btn" data-toggle="tooltip" data-original-title="Delete">
                                                        <i class="ti-close" aria-hidden="true"></i>
                                                    </button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input" id="customControlValidation16" required>
                                                        <label class="custom-control-label" for="customControlValidation16"></label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <a href="javscript:void(0)">
                                                        <img src="../../assets/images/users/1.jpg" alt="user" class="rounded-circle" width="30" /> Genelia Deshmukh</a>
                                                </td>
                                                <td>genelia@gmail.com</td>
                                                <td>+123 456 789</td>
                                                <td>
                                                    <span class="label label-danger">Designer</span>
                                                </td>
                                                <td>23</td>
                                                <td>12-10-2014</td>

                                                <td>
                                                    <button type="button" class="btn btn-sm btn-icon btn-pure btn-outline delete-row-btn" data-toggle="tooltip" data-original-title="Delete">
                                                        <i class="ti-close" aria-hidden="true"></i>
                                                    </button>
                                                </td>
                                            </tr>

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- Table -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-lg-4">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Browser States</h4>
                                <table class="table vm m-t-30 no-border">
                                    <tbody>
                                        <tr>
                                            <td style="width:20px">
                                                <img src="../../assets/images/browser/chrome-logo.png" alt="logo">
                                            </td>
                                            <td>Google Chrome</td>
                                            <td align="right">
                                                <span class="badge badge-pill badge-info">23%</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <img src="../../assets/images/browser/firefox-logo.png" alt="logo">
                                            </td>
                                            <td>Mozila Firefox</td>
                                            <td align="right">
                                                <span class="badge badge-pill badge-success">15%</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <img src="../../assets/images/browser/safari-logo.png" alt="logo">
                                            </td>
                                            <td>Apple Safari</td>
                                            <td align="right">
                                                <span class="badge badge-pill badge-primary">07%</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <img src="../../assets/images/browser/internet-logo.png" alt="logo">
                                            </td>
                                            <td>Internet Explorer</td>
                                            <td align="right">
                                                <span class="badge badge-pill badge-warning">09%</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <img src="../../assets/images/browser/opera-logo.png" alt="logo">
                                            </td>
                                            <td>Opera mini</td>
                                            <td align="right">
                                                <span class="badge badge-pill badge-danger">23%</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <img src="../../assets/images/browser/internet-logo.png" alt="logo">
                                            </td>
                                            <td>Microsoft edge</td>
                                            <td align="right">
                                                <span class="badge badge-pill badge-cyan">09%</span>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="card bg-light-info no-card-border">
                            <div class="card-body text-center">
                                <div class="profile-pic m-b-20 m-t-20">
                                    <img src="../../assets/images/users/5.jpg" width="150" class="rounded-circle" alt="user">
                                    <h4 class="m-t-20 m-b-0">Daniel Kristeen</h4>
                                    <a href="mailto:danielkristeen@gmail.com">danielkristeen@gmail.com</a>
                                </div>

                            </div>
                            <div class="p-25 border-top m-t-15">
                                <div class="row text-center">
                                    <div class="col-6 border-right">
                                        <a href="#" class="link d-flex align-items-center justify-content-center font-medium">
                                            <i class="mdi mdi-message font-20 m-r-5"></i>Message</a>
                                    </div>
                                    <div class="col-6">
                                        <a href="#" class="link d-flex align-items-center justify-content-center font-medium">
                                            <i class="mdi mdi-developer-board font-20 m-r-5"></i>Portfolio</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-lg-8">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Recent Activities</h4>
                                <div class="profiletimeline">
                                    <div class="sl-item">
                                        <div class="sl-left">
                                            <img src="../../assets/images/users/1.jpg" alt="user" class="rounded-circle"> </div>
                                        <div class="sl-right">
                                            <div>
                                                <a href="javascript:void(0)" class="link">John Doe</a>
                                                <span class="sl-date">5 minutes ago</span>
                                                <p>assign a new task
                                                    <a href="javascript:void(0)"> Design weblayout</a>
                                                </p>
                                                <div class="row">
                                                    <div class="col-lg-3 col-md-6 m-b-20">
                                                        <img src="../../assets/images/big/img1.jpg" alt="" class="img-fluid rounded">
                                                    </div>
                                                    <div class="col-lg-3 col-md-6 m-b-20">
                                                        <img src="../../assets/images/big/img2.jpg" alt="" class="img-fluid rounded">
                                                    </div>
                                                    <div class="col-lg-3 col-md-6 m-b-20">
                                                        <img src="../../assets/images/big/img3.jpg" alt="" class="img-fluid rounded">
                                                    </div>
                                                    <div class="col-lg-3 col-md-6 m-b-20">
                                                        <img src="../../assets/images/big/img4.jpg" alt="" class="img-fluid rounded">
                                                    </div>
                                                </div>
                                                <div class="like-comm">
                                                    <a href="javascript:void(0)" class="link m-r-10">2 comment</a>
                                                    <a href="javascript:void(0)" class="link m-r-10">
                                                        <i class="fa fa-heart text-danger"></i> 5 Love</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="sl-item">
                                        <div class="sl-left">
                                            <img src="../../assets/images/users/2.jpg" alt="user" class="rounded-circle"> </div>
                                        <div class="sl-right">
                                            <div>
                                                <a href="javascript:void(0)" class="link">John Doe</a>
                                                <span class="sl-date">5 minutes ago</span>
                                                <div class="m-t-20 row">
                                                    <div class="col-md-3 col-12">
                                                        <img src="../../assets/images/big/img1.jpg" alt="user" class="img-fluid rounded">
                                                    </div>
                                                    <div class="col-md-9 col-12">
                                                        <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer
                                                            nec odio. Praesent libero. Sed cursus ante dapibus diam. </p>
                                                        <a href="javascript:void(0)" class="btn btn-info"> Design weblayout</a>
                                                    </div>
                                                </div>
                                                <div class="like-comm m-t-20">
                                                    <a href="javascript:void(0)" class="link m-r-10">2 comment</a>
                                                    <a href="javascript:void(0)" class="link m-r-10">
                                                        <i class="fa fa-heart text-danger"></i> 5 Love</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="sl-item">
                                        <div class="sl-left">
                                            <img src="../../assets/images/users/3.jpg" alt="user" class="rounded-circle"> </div>
                                        <div class="sl-right">
                                            <div>
                                                <a href="javascript:void(0)" class="link">John Doe</a>
                                                <span class="sl-date">5 minutes ago</span>
                                                <p class="m-t-10"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio.
                                                    Praesent libero. Sed cursus ante dapibus diam. Sed nisi. Nulla quis sem
                                                    at nibh elementum imperdiet. Duis sagittis ipsum. Praesent mauris. Fusce
                                                    nec tellus sed augue semper </p>
                                            </div>
                                            <div class="like-comm m-t-20">
                                                <a href="javascript:void(0)" class="link m-r-10">2 comment</a>
                                                <a href="javascript:void(0)" class="link m-r-10">
                                                    <i class="fa fa-heart text-danger"></i> 5 Love</a>
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="sl-item">
                                        <div class="sl-left">
                                            <img src="../../assets/images/users/4.jpg" alt="user" class="rounded-circle"> </div>
                                        <div class="sl-right">
                                            <div>
                                                <a href="javascript:void(0)" class="link">John Doe</a>
                                                <span class="sl-date">5 minutes ago</span>
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
                </div>
                <!-- ============================================================== -->
                <!-- Recent comment and chats -->
                <!-- ============================================================== -->

                <!-- ============================================================== -->
                <!-- Recent comment and chats -->
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


    <!-- Theme settings -->
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
    <script src="../assets/extra-libs/c3/d3.min.js"></script>
    <script src="../assets/extra-libs/c3/c3.min.js"></script>
    <script src="../assets/libs/chart.js/dist/chart.min.js"></script>
    <script src="../assets/libs/gaugeJS/dist/gauge.min.js"></script>
    <script src="../assets/libs/flot/excanvas.min.js"></script>
    <script src="../assets/libs/flot/jquery.flot.js"></script>
    <script src="../assets/libs/jquery.flot.tooltip/js/jquery.flot.tooltip.min.js"></script>
    <script src="../assets/extra-libs/jvector/jquery-jvectormap-2.0.2.min.js"></script>
    <script src="../assets/extra-libs/jvector/jquery-jvectormap-world-mill-en.js"></script>
    <script src="../assets/extra-libs/DataTables/datatables.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.1/js/dataTables.buttons.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.print.min.js"></script>
    <script src="../dist/js/pages/dashboards/dashboard2.js"></script>
    
</body>

</html>