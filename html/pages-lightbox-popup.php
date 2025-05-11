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
        <link href="../assets/libs/magnific-popup/dist/magnific-popup.css" rel="stylesheet">
        <link href="../assets/libs/magnific-popup/animation.css" rel="stylesheet">


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
                        <h4 class="page-title">Lightbox Popup</h4>
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
                                <h4 class="card-title">Single image lightbox</h4>
                                <h6 class="card-subtitle">add like this <code>&lt;a class="image-popup-no-margins" href="..." title="title will be apear here"&gt;&lt;img src="..."/&gt;&lt;/a&gt;</code></h6>
                                <div class="row m-t-30">
                                    <div class="col-md-4">
                                        <a class="image-popup-vertical-fit" href="../assets/images/big/img1.jpg" title="Caption. Can be aligned to any side and contain any HTML."> <img src="../assets/images/big/img1.jpg" alt="image" class="img-fluid" /> </a>
                                        <h6 class="m-t-10">Fits horizontally and vertically</h6> </div>
                                    <div class="col-md-4">
                                        <a class="image-popup-fit-width" href="../assets/images/big/img2.jpg" title="This image fits only horizontally."> <img src="../assets/images/big/img2.jpg" alt="image" class="img-fluid" /> </a>
                                        <h6 class="m-t-10">Only horizontally</h6> </div>
                                    <div class="col-md-4">
                                        <a class="image-popup-no-margins" href="../assets/images/big/img3.jpg"> <img src="../assets/images/big/img3.jpg" alt="image" class="img-fluid" /> </a>
                                        <h6 class="m-t-10">Zoom animation, close on top-right.</h6> </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Lightbox gallery</h4>
                                <h6 class="card-subtitle">just add code under class="popup-gallery".</h6>
                                <div class="popup-gallery row m-t-30">
                                    <div class="col-md-4">
                                        <a href="../assets/images/big/img4.jpg" title="Caption. Can be aligned to any side and contain any HTML."> <img src="../assets/images/big/img4.jpg" class="img-fluid" alt="img" /> </a>
                                    </div>
                                    <div class="col-md-4">
                                        <a href="../assets/images/big/img5.jpg" title="This image fits only horizontally."> <img src="../assets/images/big/img5.jpg" class="img-fluid" alt="img" /> </a>
                                    </div>
                                    <div class="col-md-4">
                                        <a href="../assets/images/big/img6.jpg"> <img src="../assets/images/big/img6.jpg" class="img-fluid" alt="img" /> </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Zoom gallery</h4>
                                <h6 class="card-subtitle">just add code under class="zoom-gallery".</h6>
                                <div class="zoom-gallery row m-t-30">
                                    <div class="col-md-4">
                                        <a href="../assets/images/big/img1.jpg" title="Caption. Can be aligned to any side and contain any HTML."> <img src="../assets/images/big/img4.jpg" class="img-fluid" alt="img" /> </a>
                                    </div>
                                    <div class="col-md-4">
                                        <a href="../assets/images/big/img2.jpg" title="This image fits only horizontally."> <img src="../assets/images/big/img5.jpg" class="img-fluid" alt="img" /> </a>
                                    </div>
                                    <div class="col-md-4">
                                        <a href="../assets/images/big/img3.jpg"> <img src="../assets/images/big/img6.jpg" class="img-fluid" alt="img" /> </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <h4 class="card-title">Popup with Youtube Video</h4>
                                        <h6 class="card-subtitle">You can use youtube video with popup just add classs <code>popup-youtube</code></h6>
                                        <a class="popup-youtube btn btn-danger" href="www.youtube.com/watch?v=sK7riqg2mr4">Open YouTube video</a>
                                    </div>
                                    <div class="col-md-6">
                                        <h4 class="card-title">Google map</h4>
                                        <h6 class="card-subtitle">You can use Googlemap with popup just add class with <code>popup-gmaps</code></h6>
                                        <a class="popup-gmaps btn btn-info" href="https://maps.google.com/maps?q=221B+Baker+Street,+London,+United+Kingdom&amp;hl=en&amp;t=v&amp;hnear=221B+Baker+St,+London+NW1+6XE,+United+Kingdom">Open Google Map</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <div id="image-popups" class="row">
                                    <div class="col-lg-2 col-md-4">
                                        <a href="../assets/images/big/img1.jpg" data-effect="mfp-zoom-in"><img src="../assets/images/big/img1.jpg" class="img-fluid" />
                                            <br/>Zoom</a>
                                    </div>
                                    <div class="col-lg-2 col-md-4">
                                        <a href="../assets/images/big/img2.jpg" data-effect="mfp-newspaper"><img src="../assets/images/big/img2.jpg" class="img-fluid" />
                                            <br/>Newspaper</a>
                                    </div>
                                    <div class="col-lg-2 col-md-4">
                                        <a href="../assets/images/big/img3.jpg" data-effect="mfp-move-horizontal"><img src="../assets/images/big/img3.jpg" class="img-fluid" />
                                            <br/>Horizontal move</a>
                                    </div>
                                    <div class="col-lg-2 col-md-4">
                                        <a href="../assets/images/big/img4.jpg" data-effect="mfp-move-from-top"><img src="../assets/images/big/img4.jpg" class="img-fluid" />
                                            <br/>Move from top</a>
                                    </div>
                                    <div class="col-lg-2 col-md-4">
                                        <a href="../assets/images/big/img5.jpg" data-effect="mfp-3d-unfold"><img src="../assets/images/big/img5.jpg" class="img-fluid" />
                                            <br/>3d unfold</a>
                                    </div>
                                    <div class="col-lg-2 col-md-4">
                                        <a href="../assets/images/big/img6.jpg" data-effect="mfp-zoom-out"><img src="../assets/images/big/img5.jpg" class="img-fluid" />
                                            <br/>Zoom-out</a>
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


    <!-- This Page JS -->
    <script src="../assets/libs/magnific-popup/dist/jquery.magnific-popup.min.js"></script>
    <script src="../assets/libs/magnific-popup/meg.init.js"></script>


</body>

</html>