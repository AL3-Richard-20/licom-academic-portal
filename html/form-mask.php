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
                        <h4 class="page-title">Form Mask</h4>
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
                    <div class="col-sm-12 col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Input masks</h4>
                                <div class="form-group m-t-40">
                                    <label>Date Mask <small class="text-muted">dd/mm/yyyy</small></label>
                                    <input type="text" class="form-control date-inputmask" id="date-mask" placeholder="Enter Date">
                                </div>
                                <div class="form-group">
                                    <label>Phone <small class="text-muted">(999) 999-9999</small></label>
                                    <input type="text" class="form-control phone-inputmask" id="phone-mask" placeholder="Enter Phone Number">
                                </div>
                                <div class="form-group">
                                    <label>International Number <small class="text-muted">+19 999 999 999</small></label>
                                    <input type="text" class="form-control international-inputmask" id="international-mask" placeholder="International Phone Number">
                                </div>
                                <div class="form-group">
                                    <label>Phone / xEx <small class="text-muted">(999) 999-9999 / x999999</small></label>
                                    <input type="text" class="form-control xphone-inputmask" id="xphone-mask" placeholder="Enter Phone Number">
                                </div>
                                <div class="form-group">
                                    <label>Purchase Order <small class="text-muted">aaaa 9999-****</small></label>
                                    <input type="text" class="form-control purchase-inputmask" id="purchase-mask" placeholder="Enter Purchase Order">
                                </div>
                                <div class="form-group">
                                    <label>Credit Card Number <small class="text-muted">9999 9999 9999 9999</small></label>
                                    <input type="text" class="form-control cc-inputmask" id="cc-mask" placeholder="Enter Credit Card Number">
                                </div>
                                <div class="form-group">
                                    <label>SSN <small class="text-muted">999-99-9999</small></label>
                                    <input type="text" class="form-control ssn-inputmask" id="ssn-mask" placeholder="Enter Social Security Number">
                                </div>
                                <div class="form-group">
                                    <label>ISBN <small class="text-muted">999-99-999-9999-9</small></label>
                                    <input type="text" class="form-control isbn-inputmask" id="isbn-mask" placeholder="Enter ISBN">
                                </div>
                                <div class="form-group">
                                    <label>Percentage <small class="text-muted">99%</small></label>
                                    <input type="text" class="form-control percentage-inputmask" id="percentage-mask" placeholder="Enter Value in %">
                                </div>
                                <div class="form-group">
                                    <label>Currency<small class="text-muted">$9999</small>
                                    </label>
                                    <input type="text" class="form-control currency-inputmask" id="currency-mask" placeholder="Enter Currency in USD">
                                </div>
                                <div class="form-group">
                                    <label>Decimal using RadixPoint<small class="text-muted">123.654658</small>
                                    </label>
                                    <input type="text" class="form-control decimal-inputmask" id="decimal-mask" placeholder="Enter Decimal Value" style="text-align: right;">
                                </div>
                                <div class="form-group">
                                    <label>Email<small class="text-muted">xxx@xxx.xxx</small>
                                    </label>
                                    <input type="text" class="form-control email-inputmask" id="email-mask" placeholder="Enter Email Address">
                                </div>
                                <div class="form-group">
                                    <label>Optional masks<small class="text-muted">(99) 9999[9]-9999</small>
                                    </label>
                                    <input type="text" class="form-control optional-inputmask" id="optional-mask" placeholder="With Optional Mask">
                                </div>
                                <div class="form-group">
                                    <label>RTL attribute<small class="text-muted">dd/mm/yyyy</small>
                                    </label>
                                    <input type="text" class="form-control date-inputmask" id="date-mask-rtl" placeholder="Enter Date" style="text-align: right;">
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



    <div class="chat-windows "></div>


    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="../assets/libs/jquery/dist/jquery.min.js "></script>


    <!-- Bootstrap tether Core JavaScript -->
    <script src="../assets/libs/popper.js/dist/umd/popper.min.js "></script>
    <script src="../assets/libs/bootstrap/dist/js/bootstrap.min.js "></script>


    <!-- apps -->
    <script src="../dist/js/app.min.js "></script>
    <script src="../dist/js/app.init.js "></script>
    <script src="../dist/js/app-style-switcher.js "></script>


    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="../assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js "></script>
    <script src="../assets/extra-libs/sparkline/sparkline.js "></script>


    <!--Wave Effects -->
    <script src="../dist/js/waves.js "></script>


    <!--Menu sidebar -->
    <script src="../dist/js/sidebarmenu.js "></script>


    <!--Custom JavaScript -->
    <script src="../dist/js/custom.min.js "></script>
    <script src="../assets/libs/inputmask/dist/min/jquery.inputmask.bundle.min.js"></script>
    <script src="../dist/js/pages/forms/mask/mask.init.js"></script>


</body>

</html>