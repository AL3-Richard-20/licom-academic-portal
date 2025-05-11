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
        <link href="../assets/libs/toastr/build/toastr.min.css" rel="stylesheet">


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
                        <h4 class="page-title">Toastr Notifications</h4>
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
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Basic</h4>
                        <div class="row">
                            <div class="col-md-3 col-sm-12">
                                <button type="button" class="btn btn-lg btn-block btn-outline-success" id="ts-success">Success</button>
                            </div>
                            <div class="col-md-3 col-sm-12">
                                <button type="button" class="btn btn-lg btn-block btn-outline-info" id="ts-info">Info</button>
                            </div>
                            <div class="col-md-3 col-sm-12">
                                <button type="button" class="btn btn-lg btn-block btn-outline-warning" id="ts-warning">Warning</button>
                            </div>
                            <div class="col-md-3 col-sm-12">
                                <button type="button" class="btn btn-lg btn-block btn-outline-danger" id="ts-error">Error</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Positions</h4>
                        <div class="row">
                            <div class="col-md-3 col-sm-12 m-b-15">
                                <button type="button" class="btn btn-lg btn-block btn-outline-primary" id="pos-top-left">Top Left</button>
                            </div>
                            <div class="col-md-3 col-sm-12 m-b-15">
                                <button type="button" class="btn btn-lg btn-block btn-outline-primary" id="pos-top-center">Top Center</button>
                            </div>
                            <div class="col-md-3 col-sm-12 m-b-15">
                                <button type="button" class="btn btn-lg btn-block btn-outline-primary" id="pos-top-right">Top Right</button>
                            </div>
                            <div class="col-md-3 col-sm-12 m-b-15">
                                <button type="button" class="btn btn-lg btn-block btn-outline-primary" id="pos-top-full">Top Full Width</button>
                            </div>
                            <div class="col-md-3 col-sm-12">
                                <button type="button" class="btn btn-lg btn-block btn-outline-primary" id="pos-bottom-left">Bottom Left</button>
                            </div>
                            <div class="col-md-3 col-sm-12">
                                <button type="button" class="btn btn-lg btn-block btn-outline-primary" id="pos-bottom-center">Bottom Center</button>
                            </div>
                            <div class="col-md-3 col-sm-12">
                                <button type="button" class="btn btn-lg btn-block btn-outline-primary" id="pos-bottom-right">Bottom Right</button>
                            </div>
                            <div class="col-md-3 col-sm-12">
                                <button type="button" class="btn btn-lg btn-block btn-outline-primary" id="pos-bottom-full">Bottom Full Width</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-3 col-sm-12">
                                <h4 class="card-title">Only Text</h4>
                                <p>This notification just includes text.</p>
                                <button type="button" class="btn btn-lg btn-block btn-outline-primary" id="text-notification">Show Toast</button>
                            </div>
                            <div class="col-md-3 col-sm-12">
                                <h4 class="card-title">With Close Button</h4>
                                <p>Close on close button.</p>
                                <button type="button" class="btn btn-lg btn-block btn-outline-primary" id="close-button">Show Toast</button>
                            </div>
                            <div class="col-md-3 col-sm-12">
                                <h4 class="card-title">With Progress</h4>
                                <p>Indicates toast's progress.</p>
                                <button type="button" class="btn btn-lg btn-block btn-outline-primary" id="progress-bar">Show Toast</button>
                            </div>
                            <div class="col-md-3 col-sm-12">
                                <h4 class="card-title">With Button</h4>
                                <p>Add button to force clearing a toast.</p>
                                <button type="button" class="btn btn-lg btn-block btn-outline-primary" id="clear-toast-btn">Show Toast</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Animation</h4>
                        <div class="row">
                            <div class="col-md-6 col-sm-12">
                                <button type="button" class="btn btn-lg btn-block btn-outline-primary" id="slide-toast">slideDown - slideUp</button>
                            </div>
                            <div class="col-md-6 col-sm-12">
                                <button type="button" class="btn btn-lg btn-block btn-outline-primary" id="fade-toast">fadeIn - fadeOut</button>
                            </div>
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
    <script src="../assets/libs/toastr/build/toastr.min.js"></script>
    <script src="../assets/extra-libs/toastr/toastr-init.js"></script>


</body>

</html>