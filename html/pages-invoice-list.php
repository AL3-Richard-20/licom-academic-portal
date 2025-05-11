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


        <!-- This page CSS -->
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
                        <h4 class="page-title">Invoice List</h4>
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
                <!-- basic table -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Invoice List</h4>
                                <h6 class="card-subtitle">In these invoice, with these below buttons(CSV,Copy,Excel,PDF,Print) you can save this content ad per requirments.</h6>
                                <div class="table-responsive">
                                    <table id="file_export" class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                <th>
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input" id="customControlValidation1" required>
                                                        <label class="custom-control-label" for="customControlValidation1"></label>
                                                    </div>
                                                </th>
                                                <th>Setting</th>
                                                <th>Date</th>
                                                <th>Invoice</th>
                                                <th>Order No</th>
                                                <th>Customer Name</th>
                                                <th>Due</th>
                                                <th>Balance</th>
                                                <th>Amount</th>
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
                                                    <div class="btn-group">
                                                        <button type="button" class="btn btn-dark dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                            <i class="ti-settings"></i>
                                                        </button>
                                                        <div class="dropdown-menu animated slideInUp" x-placement="bottom-start" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, 35px, 0px);">
                                                            <a class="dropdown-item" href="javascript:void(0)"><i class="ti-eye"></i> Open</a>
                                                            <a class="dropdown-item" href="javascript:void(0)"><i class="ti-pencil-alt"></i> Edit</a>
                                                            <a class="dropdown-item" href="javascript:void(0)"><i class="ti-trash"></i> Delete</a>
                                                            <a class="dropdown-item" href="javascript:void(0)"><i class="ti-comment-alt"></i> Comments</a>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>11 March 2017</td>
                                                <td>IWP-1001</td>
                                                <td>AONO-123456401</td>
                                                <td>Nirav Joshi</td>
                                                <td>2011/04/25</td>
                                                <td>$320,800</td>
                                                <td>$320,800</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input" id="customControlValidation3" required>
                                                        <label class="custom-control-label" for="customControlValidation3"></label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="btn-group">
                                                        <button type="button" class="btn btn-dark dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                            <i class="ti-settings"></i>
                                                        </button>
                                                        <div class="dropdown-menu animated slideInUp" x-placement="bottom-start" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, 35px, 0px);">
                                                            <a class="dropdown-item" href="javascript:void(0)"><i class="ti-eye"></i> Open</a>
                                                            <a class="dropdown-item" href="javascript:void(0)"><i class="ti-pencil-alt"></i> Edit</a>
                                                            <a class="dropdown-item" href="javascript:void(0)"><i class="ti-trash"></i> Delete</a>
                                                            <a class="dropdown-item" href="javascript:void(0)"><i class="ti-comment-alt"></i> Comments</a>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>12 March 2017</td>
                                                <td>IWP-1002</td>
                                                <td>AONO-147852001</td>
                                                <td>Sunil Joshi</td>
                                                <td>2011/07/25</td>
                                                <td>$320,800</td>
                                                <td>$170,750</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input" id="customControlValidation4" required>
                                                        <label class="custom-control-label" for="customControlValidation4"></label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="btn-group">
                                                        <button type="button" class="btn btn-dark dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                            <i class="ti-settings"></i>
                                                        </button>
                                                        <div class="dropdown-menu animated slideInUp" x-placement="bottom-start" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, 35px, 0px);">
                                                            <a class="dropdown-item" href="javascript:void(0)"><i class="ti-eye"></i> Open</a>
                                                            <a class="dropdown-item" href="javascript:void(0)"><i class="ti-pencil-alt"></i> Edit</a>
                                                            <a class="dropdown-item" href="javascript:void(0)"><i class="ti-trash"></i> Delete</a>
                                                            <a class="dropdown-item" href="javascript:void(0)"><i class="ti-comment-alt"></i> Comments</a>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>16 March 2018</td>
                                                <td>IWP-1003</td>
                                                <td>AONO-190230145</td>
                                                <td>Vishal Bhatt</td>
                                                <td>2009/01/12</td>
                                                <td>$86,000</td>
                                                <td>$86,000</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input" id="customControlValidation5" required>
                                                        <label class="custom-control-label" for="customControlValidation5"></label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="btn-group">
                                                        <button type="button" class="btn btn-dark dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                            <i class="ti-settings"></i>
                                                        </button>
                                                        <div class="dropdown-menu animated slideInUp" x-placement="bottom-start" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, 35px, 0px);">
                                                            <a class="dropdown-item" href="javascript:void(0)"><i class="ti-eye"></i> Open</a>
                                                            <a class="dropdown-item" href="javascript:void(0)"><i class="ti-pencil-alt"></i> Edit</a>
                                                            <a class="dropdown-item" href="javascript:void(0)"><i class="ti-trash"></i> Delete</a>
                                                            <a class="dropdown-item" href="javascript:void(0)"><i class="ti-comment-alt"></i> Comments</a>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>31 January 2017</td>
                                                <td>IWP-1004</td>
                                                <td>AONO-123456401</td>
                                                <td>Nirav Joshi</td>
                                                <td>2012/03/29</td>
                                                <td>$433,060</td>
                                                <td>$433,060</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input" id="customControlValidation6" required>
                                                        <label class="custom-control-label" for="customControlValidation6"></label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="btn-group">
                                                        <button type="button" class="btn btn-dark dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                            <i class="ti-settings"></i>
                                                        </button>
                                                        <div class="dropdown-menu animated slideInUp" x-placement="bottom-start" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, 35px, 0px);">
                                                            <a class="dropdown-item" href="javascript:void(0)"><i class="ti-eye"></i> Open</a>
                                                            <a class="dropdown-item" href="javascript:void(0)"><i class="ti-pencil-alt"></i> Edit</a>
                                                            <a class="dropdown-item" href="javascript:void(0)"><i class="ti-trash"></i> Delete</a>
                                                            <a class="dropdown-item" href="javascript:void(0)"><i class="ti-comment-alt"></i> Comments</a>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>01 August 2015</td>
                                                <td>IWP-1005</td>
                                                <td>AONO-123456401</td>
                                                <td>Uday Navapara</td>
                                                <td>2008/12/13</td>
                                                <td>$103,600</td>
                                                <td>$103,600</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input" id="customControlValidation7" required>
                                                        <label class="custom-control-label" for="customControlValidation7"></label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="btn-group">
                                                        <button type="button" class="btn btn-dark dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                            <i class="ti-settings"></i>
                                                        </button>
                                                        <div class="dropdown-menu animated slideInUp" x-placement="bottom-start" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, 35px, 0px);">
                                                            <a class="dropdown-item" href="javascript:void(0)"><i class="ti-eye"></i> Open</a>
                                                            <a class="dropdown-item" href="javascript:void(0)"><i class="ti-pencil-alt"></i> Edit</a>
                                                            <a class="dropdown-item" href="javascript:void(0)"><i class="ti-trash"></i> Delete</a>
                                                            <a class="dropdown-item" href="javascript:void(0)"><i class="ti-comment-alt"></i> Comments</a>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>17 March 2016</td>
                                                <td>IWP-1006</td>
                                                <td>AONO-145789620</td>
                                                <td>Vishal Bhatt</td>
                                                <td>2008/12/19</td>
                                                <td>$90,560</td>
                                                <td>$90,560</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input" id="customControlValidation8" required>
                                                        <label class="custom-control-label" for="customControlValidation8"></label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="btn-group">
                                                        <button type="button" class="btn btn-dark dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                            <i class="ti-settings"></i>
                                                        </button>
                                                        <div class="dropdown-menu animated slideInUp" x-placement="bottom-start" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, 35px, 0px);">
                                                            <a class="dropdown-item" href="javascript:void(0)"><i class="ti-eye"></i> Open</a>
                                                            <a class="dropdown-item" href="javascript:void(0)"><i class="ti-pencil-alt"></i> Edit</a>
                                                            <a class="dropdown-item" href="javascript:void(0)"><i class="ti-trash"></i> Delete</a>
                                                            <a class="dropdown-item" href="javascript:void(0)"><i class="ti-comment-alt"></i> Comments</a>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>31 January 2017</td>
                                                <td>IWP-1007</td>
                                                <td>AONO-123456401</td>
                                                <td>Sunil Joshi</td>
                                                <td>2013/03/03</td>
                                                <td>$342,000</td>
                                                <td>$342,000</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input" id="customControlValidation9" required>
                                                        <label class="custom-control-label" for="customControlValidation9"></label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="btn-group">
                                                        <button type="button" class="btn btn-dark dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                            <i class="ti-settings"></i>
                                                        </button>
                                                        <div class="dropdown-menu animated slideInUp" x-placement="bottom-start" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, 35px, 0px);">
                                                            <a class="dropdown-item" href="javascript:void(0)"><i class="ti-eye"></i> Open</a>
                                                            <a class="dropdown-item" href="javascript:void(0)"><i class="ti-pencil-alt"></i> Edit</a>
                                                            <a class="dropdown-item" href="javascript:void(0)"><i class="ti-trash"></i> Delete</a>
                                                            <a class="dropdown-item" href="javascript:void(0)"><i class="ti-comment-alt"></i> Comments</a>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>16 March 2018</td>
                                                <td>IWP-1008</td>
                                                <td>AONO-190230145</td>
                                                <td>Uday Navapara</td>
                                                <td>2008/10/16</td>
                                                <td>$470,600</td>
                                                <td>$470,600</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input" id="customControlValidation10" required>
                                                        <label class="custom-control-label" for="customControlValidation10"></label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="btn-group">
                                                        <button type="button" class="btn btn-dark dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                            <i class="ti-settings"></i>
                                                        </button>
                                                        <div class="dropdown-menu animated slideInUp" x-placement="bottom-start" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, 35px, 0px);">
                                                            <a class="dropdown-item" href="javascript:void(0)"><i class="ti-eye"></i> Open</a>
                                                            <a class="dropdown-item" href="javascript:void(0)"><i class="ti-pencil-alt"></i> Edit</a>
                                                            <a class="dropdown-item" href="javascript:void(0)"><i class="ti-trash"></i> Delete</a>
                                                            <a class="dropdown-item" href="javascript:void(0)"><i class="ti-comment-alt"></i> Comments</a>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>12 March 2017</td>
                                                <td>IWP-1009</td>
                                                <td>AONO-145789620</td>
                                                <td>Nirav Joshi</td>
                                                <td>2012/12/18</td>
                                                <td>$313,500</td>
                                                <td>$313,500</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input" id="customControlValidation11" required>
                                                        <label class="custom-control-label" for="customControlValidation11"></label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="btn-group">
                                                        <button type="button" class="btn btn-dark dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                            <i class="ti-settings"></i>
                                                        </button>
                                                        <div class="dropdown-menu animated slideInUp" x-placement="bottom-start" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, 35px, 0px);">
                                                            <a class="dropdown-item" href="javascript:void(0)"><i class="ti-eye"></i> Open</a>
                                                            <a class="dropdown-item" href="javascript:void(0)"><i class="ti-pencil-alt"></i> Edit</a>
                                                            <a class="dropdown-item" href="javascript:void(0)"><i class="ti-trash"></i> Delete</a>
                                                            <a class="dropdown-item" href="javascript:void(0)"><i class="ti-comment-alt"></i> Comments</a>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>31 January 2017</td>
                                                <td>IWP-1010</td>
                                                <td>AONO-145789620</td>
                                                <td>Vishal Bhatt</td>
                                                <td>2010/03/17</td>
                                                <td>$385,750</td>
                                                <td>$385,750</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input" id="customControlValidation12" required>
                                                        <label class="custom-control-label" for="customControlValidation12"></label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="btn-group">
                                                        <button type="button" class="btn btn-dark dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                            <i class="ti-settings"></i>
                                                        </button>
                                                        <div class="dropdown-menu animated slideInUp" x-placement="bottom-start" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, 35px, 0px);">
                                                            <a class="dropdown-item" href="javascript:void(0)"><i class="ti-eye"></i> Open</a>
                                                            <a class="dropdown-item" href="javascript:void(0)"><i class="ti-pencil-alt"></i> Edit</a>
                                                            <a class="dropdown-item" href="javascript:void(0)"><i class="ti-trash"></i> Delete</a>
                                                            <a class="dropdown-item" href="javascript:void(0)"><i class="ti-comment-alt"></i> Comments</a>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>16 March 2018</td>
                                                <td>IWP-1121</td>
                                                <td>AONO-145789620</td>
                                                <td>Sunil Joshi</td>
                                                <td>2012/11/27</td>
                                                <td>$198,500</td>
                                                <td>$198,500</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input" id="customControlValidation13" required>
                                                        <label class="custom-control-label" for="customControlValidation13"></label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="btn-group">
                                                        <button type="button" class="btn btn-dark dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                            <i class="ti-settings"></i>
                                                        </button>
                                                        <div class="dropdown-menu animated slideInUp" x-placement="bottom-start" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, 35px, 0px);">
                                                            <a class="dropdown-item" href="javascript:void(0)"><i class="ti-eye"></i> Open</a>
                                                            <a class="dropdown-item" href="javascript:void(0)"><i class="ti-pencil-alt"></i> Edit</a>
                                                            <a class="dropdown-item" href="javascript:void(0)"><i class="ti-trash"></i> Delete</a>
                                                            <a class="dropdown-item" href="javascript:void(0)"><i class="ti-comment-alt"></i> Comments</a>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>12 March 2017</td>
                                                <td>IWP-1120</td>
                                                <td>AONO-120320145</td>
                                                <td>Uday Navapara</td>
                                                <td>2010/06/09</td>
                                                <td>$725,000</td>
                                                <td>$725,000</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input" id="customControlValidation14" required>
                                                        <label class="custom-control-label" for="customControlValidation14"></label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="btn-group">
                                                        <button type="button" class="btn btn-dark dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                            <i class="ti-settings"></i>
                                                        </button>
                                                        <div class="dropdown-menu animated slideInUp" x-placement="bottom-start" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, 35px, 0px);">
                                                            <a class="dropdown-item" href="javascript:void(0)"><i class="ti-eye"></i> Open</a>
                                                            <a class="dropdown-item" href="javascript:void(0)"><i class="ti-pencil-alt"></i> Edit</a>
                                                            <a class="dropdown-item" href="javascript:void(0)"><i class="ti-trash"></i> Delete</a>
                                                            <a class="dropdown-item" href="javascript:void(0)"><i class="ti-comment-alt"></i> Comments</a>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>31 January 2017</td>
                                                <td>IWP-1214</td>
                                                <td>AONO-120320145</td>
                                                <td>Nirav Joshi</td>
                                                <td>2009/04/10</td>
                                                <td>$237,500</td>
                                                <td>$237,500</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input" id="customControlValidation15" required>
                                                        <label class="custom-control-label" for="customControlValidation15"></label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="btn-group">
                                                        <button type="button" class="btn btn-dark dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                            <i class="ti-settings"></i>
                                                        </button>
                                                        <div class="dropdown-menu animated slideInUp" x-placement="bottom-start" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, 35px, 0px);">
                                                            <a class="dropdown-item" href="javascript:void(0)"><i class="ti-eye"></i> Open</a>
                                                            <a class="dropdown-item" href="javascript:void(0)"><i class="ti-pencil-alt"></i> Edit</a>
                                                            <a class="dropdown-item" href="javascript:void(0)"><i class="ti-trash"></i> Delete</a>
                                                            <a class="dropdown-item" href="javascript:void(0)"><i class="ti-comment-alt"></i> Comments</a>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>01 August 2015</td>
                                                <td>IWP-1452</td>
                                                <td>AONO-145789620</td>
                                                <td>Vishal Bhatt</td>
                                                <td>2012/10/13</td>
                                                <td>$132,000</td>
                                                <td>$132,000</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input" id="customControlValidation16" required>
                                                        <label class="custom-control-label" for="customControlValidation16"></label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="btn-group">
                                                        <button type="button" class="btn btn-dark dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                            <i class="ti-settings"></i>
                                                        </button>
                                                        <div class="dropdown-menu animated slideInUp" x-placement="bottom-start" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, 35px, 0px);">
                                                            <a class="dropdown-item" href="javascript:void(0)"><i class="ti-eye"></i> Open</a>
                                                            <a class="dropdown-item" href="javascript:void(0)"><i class="ti-pencil-alt"></i> Edit</a>
                                                            <a class="dropdown-item" href="javascript:void(0)"><i class="ti-trash"></i> Delete</a>
                                                            <a class="dropdown-item" href="javascript:void(0)"><i class="ti-comment-alt"></i> Comments</a>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>17 March 2016</td>
                                                <td>IWP-1250</td>
                                                <td>AONO-123456401</td>
                                                <td>Sunil Joshi</td>
                                                <td>2012/09/26</td>
                                                <td>$217,500</td>
                                                <td>$217,500</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input" id="customControlValidation17" required>
                                                        <label class="custom-control-label" for="customControlValidation17"></label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="btn-group">
                                                        <button type="button" class="btn btn-dark dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                            <i class="ti-settings"></i>
                                                        </button>
                                                        <div class="dropdown-menu animated slideInUp" x-placement="bottom-start" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, 35px, 0px);">
                                                            <a class="dropdown-item" href="javascript:void(0)"><i class="ti-eye"></i> Open</a>
                                                            <a class="dropdown-item" href="javascript:void(0)"><i class="ti-pencil-alt"></i> Edit</a>
                                                            <a class="dropdown-item" href="javascript:void(0)"><i class="ti-trash"></i> Delete</a>
                                                            <a class="dropdown-item" href="javascript:void(0)"><i class="ti-comment-alt"></i> Comments</a>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>16 March 2018</td>
                                                <td>IWP-1430</td>
                                                <td>AONO-120320145</td>
                                                <td>Vishal Bhatt</td>
                                                <td>2011/09/03</td>
                                                <td>$345,000</td>
                                                <td>$345,000</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input" id="customControlValidation18" required>
                                                        <label class="custom-control-label" for="customControlValidation18"></label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="btn-group">
                                                        <button type="button" class="btn btn-dark dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                            <i class="ti-settings"></i>
                                                        </button>
                                                        <div class="dropdown-menu animated slideInUp" x-placement="bottom-start" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, 35px, 0px);">
                                                            <a class="dropdown-item" href="javascript:void(0)"><i class="ti-eye"></i> Open</a>
                                                            <a class="dropdown-item" href="javascript:void(0)"><i class="ti-pencil-alt"></i> Edit</a>
                                                            <a class="dropdown-item" href="javascript:void(0)"><i class="ti-trash"></i> Delete</a>
                                                            <a class="dropdown-item" href="javascript:void(0)"><i class="ti-comment-alt"></i> Comments</a>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>12 March 2017</td>
                                                <td>IWP-1200</td>
                                                <td>AONO-120320145</td>
                                                <td>Ayaz Shekh</td>
                                                <td>2009/06/25</td>
                                                <td>$675,000</td>
                                                <td>$675,000</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input" id="customControlValidation19" required>
                                                        <label class="custom-control-label" for="customControlValidation19"></label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="btn-group">
                                                        <button type="button" class="btn btn-dark dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                            <i class="ti-settings"></i>
                                                        </button>
                                                        <div class="dropdown-menu animated slideInUp" x-placement="bottom-start" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, 35px, 0px);">
                                                            <a class="dropdown-item" href="javascript:void(0)"><i class="ti-eye"></i> Open</a>
                                                            <a class="dropdown-item" href="javascript:void(0)"><i class="ti-pencil-alt"></i> Edit</a>
                                                            <a class="dropdown-item" href="javascript:void(0)"><i class="ti-trash"></i> Delete</a>
                                                            <a class="dropdown-item" href="javascript:void(0)"><i class="ti-comment-alt"></i> Comments</a>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>31 January 2017</td>
                                                <td>IWP-1452</td>
                                                <td>AONO-120320145</td>
                                                <td>Sunil Joshi</td>
                                                <td>2011/12/12</td>
                                                <td>$106,450</td>
                                                <td>$106,450</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input" id="customControlValidation20" required>
                                                        <label class="custom-control-label" for="customControlValidation20"></label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="btn-group">
                                                        <button type="button" class="btn btn-dark dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                            <i class="ti-settings"></i>
                                                        </button>
                                                        <div class="dropdown-menu animated slideInUp" x-placement="bottom-start" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, 35px, 0px);">
                                                            <a class="dropdown-item" href="javascript:void(0)"><i class="ti-eye"></i> Open</a>
                                                            <a class="dropdown-item" href="javascript:void(0)"><i class="ti-pencil-alt"></i> Edit</a>
                                                            <a class="dropdown-item" href="javascript:void(0)"><i class="ti-trash"></i> Delete</a>
                                                            <a class="dropdown-item" href="javascript:void(0)"><i class="ti-comment-alt"></i> Comments</a>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>01 August 2015</td>
                                                <td>IWP-1420</td>
                                                <td>AONO-147852030</td>
                                                <td>Nirav Joshi</td>
                                                <td>2010/09/20</td>
                                                <td>$85,600</td>
                                                <td>$85,600</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input" id="customControlValidation21" required>
                                                        <label class="custom-control-label" for="customControlValidation21"></label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="btn-group">
                                                        <button type="button" class="btn btn-dark dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                            <i class="ti-settings"></i>
                                                        </button>
                                                        <div class="dropdown-menu animated slideInUp" x-placement="bottom-start" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, 35px, 0px);">
                                                            <a class="dropdown-item" href="javascript:void(0)"><i class="ti-eye"></i> Open</a>
                                                            <a class="dropdown-item" href="javascript:void(0)"><i class="ti-pencil-alt"></i> Edit</a>
                                                            <a class="dropdown-item" href="javascript:void(0)"><i class="ti-trash"></i> Delete</a>
                                                            <a class="dropdown-item" href="javascript:void(0)"><i class="ti-comment-alt"></i> Comments</a>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>12 March 2017</td>
                                                <td>IWP-2010</td>
                                                <td>AONO-145789620</td>
                                                <td>Uday Navapara</td>
                                                <td>2009/10/09</td>
                                                <td>$1,200,000</td>
                                                <td>$1,200,000</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input" id="customControlValidation22" required>
                                                        <label class="custom-control-label" for="customControlValidation22"></label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="btn-group">
                                                        <button type="button" class="btn btn-dark dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                            <i class="ti-settings"></i>
                                                        </button>
                                                        <div class="dropdown-menu animated slideInUp" x-placement="bottom-start" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, 35px, 0px);">
                                                            <a class="dropdown-item" href="javascript:void(0)"><i class="ti-eye"></i> Open</a>
                                                            <a class="dropdown-item" href="javascript:void(0)"><i class="ti-pencil-alt"></i> Edit</a>
                                                            <a class="dropdown-item" href="javascript:void(0)"><i class="ti-trash"></i> Delete</a>
                                                            <a class="dropdown-item" href="javascript:void(0)"><i class="ti-comment-alt"></i> Comments</a>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>31 January 2017</td>
                                                <td>IWP-1230</td>
                                                <td>AONO-123456401</td>
                                                <td>Vishal Bhatt</td>
                                                <td>2010/12/22</td>
                                                <td>$92,575</td>
                                                <td>$92,575</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input" id="customControlValidation23" required>
                                                        <label class="custom-control-label" for="customControlValidation23"></label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="btn-group">
                                                        <button type="button" class="btn btn-dark dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                            <i class="ti-settings"></i>
                                                        </button>
                                                        <div class="dropdown-menu animated slideInUp" x-placement="bottom-start" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, 35px, 0px);">
                                                            <a class="dropdown-item" href="javascript:void(0)"><i class="ti-eye"></i> Open</a>
                                                            <a class="dropdown-item" href="javascript:void(0)"><i class="ti-pencil-alt"></i> Edit</a>
                                                            <a class="dropdown-item" href="javascript:void(0)"><i class="ti-trash"></i> Delete</a>
                                                            <a class="dropdown-item" href="javascript:void(0)"><i class="ti-comment-alt"></i> Comments</a>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>17 March 2016</td>
                                                <td>IWP-1020</td>
                                                <td>AONO-140250369</td>
                                                <td>Sunil Joshi</td>
                                                <td>2010/11/14</td>
                                                <td>$357,650</td>
                                                <td>$357,650</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input" id="customControlValidation24" required>
                                                        <label class="custom-control-label" for="customControlValidation24"></label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="btn-group">
                                                        <button type="button" class="btn btn-dark dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                            <i class="ti-settings"></i>
                                                        </button>
                                                        <div class="dropdown-menu animated slideInUp" x-placement="bottom-start" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, 35px, 0px);">
                                                            <a class="dropdown-item" href="javascript:void(0)"><i class="ti-eye"></i> Open</a>
                                                            <a class="dropdown-item" href="javascript:void(0)"><i class="ti-pencil-alt"></i> Edit</a>
                                                            <a class="dropdown-item" href="javascript:void(0)"><i class="ti-trash"></i> Delete</a>
                                                            <a class="dropdown-item" href="javascript:void(0)"><i class="ti-comment-alt"></i> Comments</a>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>16 March 2018</td>
                                                <td>IWP-1200</td>
                                                <td>AONO-190230145</td>
                                                <td>Ayaz Shekh</td>
                                                <td>2011/06/07</td>
                                                <td>$206,850</td>
                                                <td>$206,850</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input" id="customControlValidation25" required>
                                                        <label class="custom-control-label" for="customControlValidation25"></label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="btn-group">
                                                        <button type="button" class="btn btn-dark dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                            <i class="ti-settings"></i>
                                                        </button>
                                                        <div class="dropdown-menu animated slideInUp" x-placement="bottom-start" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, 35px, 0px);">
                                                            <a class="dropdown-item" href="javascript:void(0)"><i class="ti-eye"></i> Open</a>
                                                            <a class="dropdown-item" href="javascript:void(0)"><i class="ti-pencil-alt"></i> Edit</a>
                                                            <a class="dropdown-item" href="javascript:void(0)"><i class="ti-trash"></i> Delete</a>
                                                            <a class="dropdown-item" href="javascript:void(0)"><i class="ti-comment-alt"></i> Comments</a>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>12 March 2017</td>
                                                <td>IWP-1458</td>
                                                <td>AONO-190230145</td>
                                                <td>Vishal Bhatt</td>
                                                <td>2010/03/11</td>
                                                <td>$850,000</td>
                                                <td>$850,000</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input" id="customControlValidation26" required>
                                                        <label class="custom-control-label" for="customControlValidation26"></label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="btn-group">
                                                        <button type="button" class="btn btn-dark dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                            <i class="ti-settings"></i>
                                                        </button>
                                                        <div class="dropdown-menu animated slideInUp" x-placement="bottom-start" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, 35px, 0px);">
                                                            <a class="dropdown-item" href="javascript:void(0)"><i class="ti-eye"></i> Open</a>
                                                            <a class="dropdown-item" href="javascript:void(0)"><i class="ti-pencil-alt"></i> Edit</a>
                                                            <a class="dropdown-item" href="javascript:void(0)"><i class="ti-trash"></i> Delete</a>
                                                            <a class="dropdown-item" href="javascript:void(0)"><i class="ti-comment-alt"></i> Comments</a>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>31 January 2017</td>
                                                <td>IWP-1457</td>
                                                <td>AONO-147852001</td>
                                                <td>Uday Navapara</td>
                                                <td>2011/08/14</td>
                                                <td>$163,000</td>
                                                <td>$163,000</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input" id="customControlValidation27" required>
                                                        <label class="custom-control-label" for="customControlValidation27"></label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="btn-group">
                                                        <button type="button" class="btn btn-dark dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                            <i class="ti-settings"></i>
                                                        </button>
                                                        <div class="dropdown-menu animated slideInUp" x-placement="bottom-start" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, 35px, 0px);">
                                                            <a class="dropdown-item" href="javascript:void(0)"><i class="ti-eye"></i> Open</a>
                                                            <a class="dropdown-item" href="javascript:void(0)"><i class="ti-pencil-alt"></i> Edit</a>
                                                            <a class="dropdown-item" href="javascript:void(0)"><i class="ti-trash"></i> Delete</a>
                                                            <a class="dropdown-item" href="javascript:void(0)"><i class="ti-comment-alt"></i> Comments</a>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>16 March 2018</td>
                                                <td>IWP-4582</td>
                                                <td>AONO-147852030</td>
                                                <td>Nirav Joshi</td>
                                                <td>2011/06/02</td>
                                                <td>$95,400</td>
                                                <td>$95,400</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input" id="customControlValidation28" required>
                                                        <label class="custom-control-label" for="customControlValidation28"></label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="btn-group">
                                                        <button type="button" class="btn btn-dark dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                            <i class="ti-settings"></i>
                                                        </button>
                                                        <div class="dropdown-menu animated slideInUp" x-placement="bottom-start" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, 35px, 0px);">
                                                            <a class="dropdown-item" href="javascript:void(0)"><i class="ti-eye"></i> Open</a>
                                                            <a class="dropdown-item" href="javascript:void(0)"><i class="ti-pencil-alt"></i> Edit</a>
                                                            <a class="dropdown-item" href="javascript:void(0)"><i class="ti-trash"></i> Delete</a>
                                                            <a class="dropdown-item" href="javascript:void(0)"><i class="ti-comment-alt"></i> Comments</a>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>12 March 2017</td>
                                                <td>IWP-1456</td>
                                                <td>AONO-145789620</td>
                                                <td>Ayaz Shekh</td>
                                                <td>2009/10/22</td>
                                                <td>$114,500</td>
                                                <td>$114,500</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input" id="customControlValidation29" required>
                                                        <label class="custom-control-label" for="customControlValidation29"></label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="btn-group">
                                                        <button type="button" class="btn btn-dark dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                            <i class="ti-settings"></i>
                                                        </button>
                                                        <div class="dropdown-menu animated slideInUp" x-placement="bottom-start" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, 35px, 0px);">
                                                            <a class="dropdown-item" href="javascript:void(0)"><i class="ti-eye"></i> Open</a>
                                                            <a class="dropdown-item" href="javascript:void(0)"><i class="ti-pencil-alt"></i> Edit</a>
                                                            <a class="dropdown-item" href="javascript:void(0)"><i class="ti-trash"></i> Delete</a>
                                                            <a class="dropdown-item" href="javascript:void(0)"><i class="ti-comment-alt"></i> Comments</a>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>31 January 2017</td>
                                                <td>IWP-1230</td>
                                                <td>AONO-145789620</td>
                                                <td>Sunil Joshi</td>
                                                <td>2011/05/07</td>
                                                <td>$145,000</td>
                                                <td>$145,000</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input" id="customControlValidation30" required>
                                                        <label class="custom-control-label" for="customControlValidation30"></label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="btn-group">
                                                        <button type="button" class="btn btn-dark dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                            <i class="ti-settings"></i>
                                                        </button>
                                                        <div class="dropdown-menu animated slideInUp" x-placement="bottom-start" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, 35px, 0px);">
                                                            <a class="dropdown-item" href="javascript:void(0)"><i class="ti-eye"></i> Open</a>
                                                            <a class="dropdown-item" href="javascript:void(0)"><i class="ti-pencil-alt"></i> Edit</a>
                                                            <a class="dropdown-item" href="javascript:void(0)"><i class="ti-trash"></i> Delete</a>
                                                            <a class="dropdown-item" href="javascript:void(0)"><i class="ti-comment-alt"></i> Comments</a>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>01 August 2015</td>
                                                <td>IWP-2030</td>
                                                <td>AONO-190230145</td>
                                                <td>Uday Navapara</td>
                                                <td>2008/10/26</td>
                                                <td>$235,500</td>
                                                <td>$235,500</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input" id="customControlValidation31" required>
                                                        <label class="custom-control-label" for="customControlValidation31"></label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="btn-group">
                                                        <button type="button" class="btn btn-dark dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                            <i class="ti-settings"></i>
                                                        </button>
                                                        <div class="dropdown-menu animated slideInUp" x-placement="bottom-start" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, 35px, 0px);">
                                                            <a class="dropdown-item" href="javascript:void(0)"><i class="ti-eye"></i> Open</a>
                                                            <a class="dropdown-item" href="javascript:void(0)"><i class="ti-pencil-alt"></i> Edit</a>
                                                            <a class="dropdown-item" href="javascript:void(0)"><i class="ti-trash"></i> Delete</a>
                                                            <a class="dropdown-item" href="javascript:void(0)"><i class="ti-comment-alt"></i> Comments</a>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>12 March 2017</td>
                                                <td>IWP-1200</td>
                                                <td>AONO-123456401</td>
                                                <td>Ayaz Shekh</td>
                                                <td>2011/03/09</td>
                                                <td>$324,050</td>
                                                <td>$324,050</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input" id="customControlValidation32" required>
                                                        <label class="custom-control-label" for="customControlValidation32"></label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="btn-group">
                                                        <button type="button" class="btn btn-dark dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                            <i class="ti-settings"></i>
                                                        </button>
                                                        <div class="dropdown-menu animated slideInUp" x-placement="bottom-start" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, 35px, 0px);">
                                                            <a class="dropdown-item" href="javascript:void(0)"><i class="ti-eye"></i> Open</a>
                                                            <a class="dropdown-item" href="javascript:void(0)"><i class="ti-pencil-alt"></i> Edit</a>
                                                            <a class="dropdown-item" href="javascript:void(0)"><i class="ti-trash"></i> Delete</a>
                                                            <a class="dropdown-item" href="javascript:void(0)"><i class="ti-comment-alt"></i> Comments</a>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>01 August 2015</td>
                                                <td>IWP-1250</td>
                                                <td>AONO-190230145</td>
                                                <td>Vishal Bhatt</td>
                                                <td>2009/12/09</td>
                                                <td>$85,675</td>
                                                <td>$85,675</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input" id="customControlValidation33" required>
                                                        <label class="custom-control-label" for="customControlValidation33"></label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="btn-group">
                                                        <button type="button" class="btn btn-dark dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                            <i class="ti-settings"></i>
                                                        </button>
                                                        <div class="dropdown-menu animated slideInUp" x-placement="bottom-start" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, 35px, 0px);">
                                                            <a class="dropdown-item" href="javascript:void(0)"><i class="ti-eye"></i> Open</a>
                                                            <a class="dropdown-item" href="javascript:void(0)"><i class="ti-pencil-alt"></i> Edit</a>
                                                            <a class="dropdown-item" href="javascript:void(0)"><i class="ti-trash"></i> Delete</a>
                                                            <a class="dropdown-item" href="javascript:void(0)"><i class="ti-comment-alt"></i> Comments</a>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>16 March 2018</td>
                                                <td>IWP-1010</td>
                                                <td>AONO-190230145</td>
                                                <td>Sunil Joshi</td>
                                                <td>2008/12/16</td>
                                                <td>$164,500</td>
                                                <td>$164,500</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input" id="customControlValidation34" required>
                                                        <label class="custom-control-label" for="customControlValidation34"></label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="btn-group">
                                                        <button type="button" class="btn btn-dark dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                            <i class="ti-settings"></i>
                                                        </button>
                                                        <div class="dropdown-menu animated slideInUp" x-placement="bottom-start" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, 35px, 0px);">
                                                            <a class="dropdown-item" href="javascript:void(0)"><i class="ti-eye"></i> Open</a>
                                                            <a class="dropdown-item" href="javascript:void(0)"><i class="ti-pencil-alt"></i> Edit</a>
                                                            <a class="dropdown-item" href="javascript:void(0)"><i class="ti-trash"></i> Delete</a>
                                                            <a class="dropdown-item" href="javascript:void(0)"><i class="ti-comment-alt"></i> Comments</a>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>31 January 2017</td>
                                                <td>IWP-1478</td>
                                                <td>AONO-190230145</td>
                                                <td>Vishal Bhatt</td>
                                                <td>2010/02/12</td>
                                                <td>$109,850</td>
                                                <td>$109,850</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input" id="customControlValidation35" required>
                                                        <label class="custom-control-label" for="customControlValidation35"></label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="btn-group">
                                                        <button type="button" class="btn btn-dark dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                            <i class="ti-settings"></i>
                                                        </button>
                                                        <div class="dropdown-menu animated slideInUp" x-placement="bottom-start" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, 35px, 0px);">
                                                            <a class="dropdown-item" href="javascript:void(0)"><i class="ti-eye"></i> Open</a>
                                                            <a class="dropdown-item" href="javascript:void(0)"><i class="ti-pencil-alt"></i> Edit</a>
                                                            <a class="dropdown-item" href="javascript:void(0)"><i class="ti-trash"></i> Delete</a>
                                                            <a class="dropdown-item" href="javascript:void(0)"><i class="ti-comment-alt"></i> Comments</a>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>16 March 2018</td>
                                                <td>IWP-1456</td>
                                                <td>AONO-190230145</td>
                                                <td>Nirav Joshi</td>
                                                <td>2009/02/14</td>
                                                <td>$452,500</td>
                                                <td>$452,500</td>
                                            </tr>
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input" id="customControlValidation35" required>
                                                        <label class="custom-control-label" for="customControlValidation35"></label>
                                                    </div>
                                                </th>
                                                <th>Setting</th>
                                                <th>Date</th>
                                                <th>Invoice</th>
                                                <th>Order No</th>
                                                <th>Customer Name</th>
                                                <th>Due</th>
                                                <th>Balance</th>
                                                <th>Amount</th>
                                            </tr>
                                        </tfoot>
                                    </table>
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


    <!--This page plugins -->
    <script src="../assets/extra-libs/DataTables/datatables.min.js"></script>


    <!-- start - This is for export functionality only -->
    <script src="https://cdn.datatables.net/buttons/1.5.1/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.flash.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.print.min.js"></script>

    <script>

        //=============================================//
        //    File export                              //
        //=============================================//
        $('#file_export').DataTable({
            dom: 'Bfrtip',
            buttons: [
                'copy', 'csv', 'excel', 'pdf', 'print'
            ]
        });
        $('.buttons-copy, .buttons-csv, .buttons-print, .buttons-pdf, .buttons-excel').addClass('btn btn-cyan text-white mr-1');

    </script>

</body>

</html>