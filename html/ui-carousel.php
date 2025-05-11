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


    <!-- This Page CSS -->
    <link rel="stylesheet" type="text/css" href="../assets/extra-libs/prism/prism.css">
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
                        <h4 class="page-title">Carousel</h4>
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
                <!-- row -->
                <div class="row">
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
                                    <div class="carousel-inner" role="listbox">
                                        <div class="carousel-item active"> <img class="img-fluid" src="../../assets/images/big/img1.jpg" alt="First slide"> </div>
                                        <div class="carousel-item"> <img class="img-fluid" src="../../assets/images/big/img2.jpg" alt="Second slide"> </div>
                                        <div class="carousel-item"> <img class="img-fluid" src="../../assets/images/big/img3.jpg" alt="Third slide"> </div>
                                    </div>
                                </div>
                                <div class="highlight">
                                    <pre class="language-html scrollable">
                                        <code>
                                            &lt;div id=&quot;carouselExampleSlidesOnly&quot; class=&quot;carousel slide&quot; data-ride=&quot;carousel&quot;&gt;
                                                &lt;div class=&quot;carousel-inner&quot; role=&quot;listbox&quot;&gt;
                                                    &lt;div class=&quot;carousel-item active&quot;&gt; &lt;img class=&quot;img-fluid&quot; src=&quot;../../assets/images/big/img1.jpg&quot; alt=&quot;First slide&quot;&gt; &lt;/div&gt;
                                                    &lt;div class=&quot;carousel-item&quot;&gt; &lt;img class=&quot;img-fluid&quot; src=&quot;../../assets/images/big/img2.jpg&quot; alt=&quot;Second slide&quot;&gt; &lt;/div&gt;
                                                    &lt;div class=&quot;carousel-item&quot;&gt; &lt;img class=&quot;img-fluid&quot; src=&quot;../../assets/images/big/img3.jpg&quot; alt=&quot;Third slide&quot;&gt; &lt;/div&gt;
                                                &lt;/div&gt;
                                            &lt;/div&gt;
                                        </code>
                                    </pre>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                                    <div class="carousel-inner" role="listbox">
                                        <div class="carousel-item active"> <img class="img-fluid" src="../../assets/images/big/img4.jpg" alt="First slide"> </div>
                                        <div class="carousel-item"> <img class="img-fluid" src="../../assets/images/big/img5.jpg" alt="Second slide"> </div>
                                        <div class="carousel-item"> <img class="img-fluid" src="../../assets/images/big/img6.jpg" alt="Third slide"> </div>
                                    </div>
                                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev"> <span class="carousel-control-prev-icon" aria-hidden="true"></span> <span class="sr-only">Previous</span> </a>
                                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next"> <span class="carousel-control-next-icon" aria-hidden="true"></span> <span class="sr-only">Next</span> </a>
                                </div>
                                <div class="highlight">
                                    <pre class="language-html scrollable">
                                        <code>
                                            &lt;div id=&quot;carouselExampleIndicators&quot; class=&quot;carousel slide&quot; data-ride=&quot;carousel&quot;&gt;
                                                &lt;div class=&quot;carousel-inner&quot; role=&quot;listbox&quot;&gt;
                                                    &lt;div class=&quot;carousel-item active&quot;&gt; &lt;img class=&quot;img-fluid&quot; src=&quot;../../assets/images/big/img4.jpg&quot; alt=&quot;First slide&quot;&gt; &lt;/div&gt;
                                                    &lt;div class=&quot;carousel-item&quot;&gt; &lt;img class=&quot;img-fluid&quot; src=&quot;../../assets/images/big/img5.jpg&quot; alt=&quot;Second slide&quot;&gt; &lt;/div&gt;
                                                    &lt;div class=&quot;carousel-item&quot;&gt; &lt;img class=&quot;img-fluid&quot; src=&quot;../../assets/images/big/img6.jpg&quot; alt=&quot;Third slide&quot;&gt; &lt;/div&gt;
                                                &lt;/div&gt;
                                                &lt;a class=&quot;carousel-control-prev&quot; href=&quot;#carouselExampleIndicators&quot; role=&quot;button&quot; data-slide=&quot;prev&quot;&gt; &lt;span class=&quot;carousel-control-prev-icon&quot; aria-hidden=&quot;true&quot;&gt;&lt;/span&gt; &lt;span class=&quot;sr-only&quot;&gt;Previous&lt;/span&gt; &lt;/a&gt;
                                                &lt;a class=&quot;carousel-control-next&quot; href=&quot;#carouselExampleIndicators&quot; role=&quot;button&quot; data-slide=&quot;next&quot;&gt; &lt;span class=&quot;carousel-control-next-icon&quot; aria-hidden=&quot;true&quot;&gt;&lt;/span&gt; &lt;span class=&quot;sr-only&quot;&gt;Next&lt;/span&gt; &lt;/a&gt;
                                            &lt;/div&gt;
                                        </code>
                                    </pre>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End row -->
                <!-- row -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <h4 class="card-title">With indicators</h4>
                                        <h6 class="card-subtitle">You can also add the indicators to the carousel, alongside the controls, too.</h6>
                                        <div id="carouselExampleIndicators2" class="carousel slide" data-ride="carousel">
                                            <ol class="carousel-indicators">
                                                <li data-target="#carouselExampleIndicators2" data-slide-to="0" class="active"></li>
                                                <li data-target="#carouselExampleIndicators2" data-slide-to="1"></li>
                                                <li data-target="#carouselExampleIndicators2" data-slide-to="2"></li>
                                            </ol>
                                            <div class="carousel-inner" role="listbox">
                                                <div class="carousel-item active">
                                                    <img class="img-fluid" src="../../assets/images/big/img3.jpg" alt="First slide">
                                                </div>
                                                <div class="carousel-item">
                                                    <img class="img-fluid" src="../../assets/images/big/img4.jpg" alt="Second slide">
                                                </div>
                                                <div class="carousel-item">
                                                    <img class="img-fluid" src="../../assets/images/big/img5.jpg" alt="Third slide">
                                                </div>
                                            </div>
                                            <a class="carousel-control-prev" href="#carouselExampleIndicators2" role="button" data-slide="prev">
                                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                <span class="sr-only">Previous</span>
                                            </a>
                                            <a class="carousel-control-next" href="#carouselExampleIndicators2" role="button" data-slide="next">
                                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                <span class="sr-only">Next</span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <h4 class="card-title">With captions</h4>
                                        <h6 class="card-subtitle">Add captions to your slides easily with the <code>.carousel-caption</code></h6>
                                        <div id="carouselExampleIndicators3" class="carousel slide" data-ride="carousel">
                                            <ol class="carousel-indicators">
                                                <li data-target="#carouselExampleIndicators3" data-slide-to="0" class="active"></li>
                                                <li data-target="#carouselExampleIndicators3" data-slide-to="1"></li>
                                                <li data-target="#carouselExampleIndicators3" data-slide-to="2"></li>
                                            </ol>
                                            <div class="carousel-inner" role="listbox">
                                                <div class="carousel-item active">
                                                    <img class="img-fluid" src="../../assets/images/big/img6.jpg" alt="First slide">
                                                    <div class="carousel-caption d-none d-md-block">
                                                        <h3 class="text-white">First title goes here</h3>
                                                        <p>this is the subcontent you can use this</p>
                                                    </div>
                                                </div>
                                                <div class="carousel-item">
                                                    <img class="img-fluid" src="../../assets/images/big/img3.jpg" alt="Second slide">
                                                    <div class="carousel-caption d-none d-md-block">
                                                        <h3 class="text-white">Second title goes here</h3>
                                                        <p>this is the subcontent you can use this</p>
                                                    </div>
                                                </div>
                                                <div class="carousel-item">
                                                    <img class="img-fluid" src="../../assets/images/big/img4.jpg" alt="Third slide">
                                                    <div class="carousel-caption d-none d-md-block">
                                                        <h3 class="text-white">Third title goes here</h3>
                                                        <p>this is the subcontent you can use this</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <a class="carousel-control-prev" href="#carouselExampleIndicators3" role="button" data-slide="prev">
                                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                <span class="sr-only">Previous</span>
                                            </a>
                                            <a class="carousel-control-next" href="#carouselExampleIndicators3" role="button" data-slide="next">
                                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                <span class="sr-only">Next</span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <pre class="language-html scrollable">
                                            <code>
                                                &lt;div id=&quot;carouselExampleIndicators2&quot; class=&quot;carousel slide&quot; data-ride=&quot;carousel&quot;&gt;
                                                    &lt;ol class=&quot;carousel-indicators&quot;&gt;
                                                        &lt;li data-target=&quot;#carouselExampleIndicators2&quot; data-slide-to=&quot;0&quot; class=&quot;active&quot;&gt;&lt;/li&gt;
                                                        &lt;li data-target=&quot;#carouselExampleIndicators2&quot; data-slide-to=&quot;1&quot;&gt;&lt;/li&gt;
                                                        &lt;li data-target=&quot;#carouselExampleIndicators2&quot; data-slide-to=&quot;2&quot;&gt;&lt;/li&gt;
                                                    &lt;/ol&gt;
                                                    &lt;div class=&quot;carousel-inner&quot; role=&quot;listbox&quot;&gt;
                                                        &lt;div class=&quot;carousel-item active&quot;&gt;
                                                            &lt;img class=&quot;img-fluid&quot; src=&quot;../../assets/images/big/img3.jpg&quot; alt=&quot;First slide&quot;&gt;
                                                        &lt;/div&gt;
                                                        &lt;div class=&quot;carousel-item&quot;&gt;
                                                            &lt;img class=&quot;img-fluid&quot; src=&quot;../../assets/images/big/img4.jpg&quot; alt=&quot;Second slide&quot;&gt;
                                                        &lt;/div&gt;
                                                        &lt;div class=&quot;carousel-item&quot;&gt;
                                                            &lt;img class=&quot;img-fluid&quot; src=&quot;../../assets/images/big/img5.jpg&quot; alt=&quot;Third slide&quot;&gt;
                                                        &lt;/div&gt;
                                                    &lt;/div&gt;
                                                    &lt;a class=&quot;carousel-control-prev&quot; href=&quot;#carouselExampleIndicators2&quot; role=&quot;button&quot; data-slide=&quot;prev&quot;&gt;
                                                        &lt;span class=&quot;carousel-control-prev-icon&quot; aria-hidden=&quot;true&quot;&gt;&lt;/span&gt;
                                                        &lt;span class=&quot;sr-only&quot;&gt;Previous&lt;/span&gt;
                                                    &lt;/a&gt;
                                                    &lt;a class=&quot;carousel-control-next&quot; href=&quot;#carouselExampleIndicators2&quot; role=&quot;button&quot; data-slide=&quot;next&quot;&gt;
                                                        &lt;span class=&quot;carousel-control-next-icon&quot; aria-hidden=&quot;true&quot;&gt;&lt;/span&gt;
                                                        &lt;span class=&quot;sr-only&quot;&gt;Next&lt;/span&gt;
                                                    &lt;/a&gt;
                                                &lt;/div&gt;
                                            </code>
                                        </pre>
                                    </div>
                                    <div class="col-lg-6">
                                        <pre class="language-html scrollable">
                                            <code>
                                                &lt;div id=&quot;carouselExampleIndicators3&quot; class=&quot;carousel slide&quot; data-ride=&quot;carousel&quot;&gt;
                                                    &lt;ol class=&quot;carousel-indicators&quot;&gt;
                                                        &lt;li data-target=&quot;#carouselExampleIndicators3&quot; data-slide-to=&quot;0&quot; class=&quot;active&quot;&gt;&lt;/li&gt;
                                                        &lt;li data-target=&quot;#carouselExampleIndicators3&quot; data-slide-to=&quot;1&quot;&gt;&lt;/li&gt;
                                                        &lt;li data-target=&quot;#carouselExampleIndicators3&quot; data-slide-to=&quot;2&quot;&gt;&lt;/li&gt;
                                                    &lt;/ol&gt;
                                                    &lt;div class=&quot;carousel-inner&quot; role=&quot;listbox&quot;&gt;
                                                        &lt;div class=&quot;carousel-item active&quot;&gt;
                                                            &lt;img class=&quot;img-fluid&quot; src=&quot;../../assets/images/big/img6.jpg&quot; alt=&quot;First slide&quot;&gt;
                                                            &lt;div class=&quot;carousel-caption d-none d-md-block&quot;&gt;
                                                                &lt;h3 class=&quot;text-white&quot;&gt;First title goes here&lt;/h3&gt;
                                                                &lt;p&gt;this is the subcontent you can use this&lt;/p&gt;
                                                            &lt;/div&gt;
                                                        &lt;/div&gt;
                                                        &lt;div class=&quot;carousel-item&quot;&gt;
                                                            &lt;img class=&quot;img-fluid&quot; src=&quot;../../assets/images/big/img3.jpg&quot; alt=&quot;Second slide&quot;&gt;
                                                            &lt;div class=&quot;carousel-caption d-none d-md-block&quot;&gt;
                                                                &lt;h3 class=&quot;text-white&quot;&gt;Second title goes here&lt;/h3&gt;
                                                                &lt;p&gt;this is the subcontent you can use this&lt;/p&gt;
                                                            &lt;/div&gt;
                                                        &lt;/div&gt;
                                                        &lt;div class=&quot;carousel-item&quot;&gt;
                                                            &lt;img class=&quot;img-fluid&quot; src=&quot;../../assets/images/big/img4.jpg&quot; alt=&quot;Third slide&quot;&gt;
                                                            &lt;div class=&quot;carousel-caption d-none d-md-block&quot;&gt;
                                                                &lt;h3 class=&quot;text-white&quot;&gt;Third title goes here&lt;/h3&gt;
                                                                &lt;p&gt;this is the subcontent you can use this&lt;/p&gt;
                                                            &lt;/div&gt;
                                                        &lt;/div&gt;
                                                    &lt;/div&gt;
                                                    &lt;a class=&quot;carousel-control-prev&quot; href=&quot;#carouselExampleIndicators3&quot; role=&quot;button&quot; data-slide=&quot;prev&quot;&gt;
                                                        &lt;span class=&quot;carousel-control-prev-icon&quot; aria-hidden=&quot;true&quot;&gt;&lt;/span&gt;
                                                        &lt;span class=&quot;sr-only&quot;&gt;Previous&lt;/span&gt;
                                                    &lt;/a&gt;
                                                    &lt;a class=&quot;carousel-control-next&quot; href=&quot;#carouselExampleIndicators3&quot; role=&quot;button&quot; data-slide=&quot;next&quot;&gt;
                                                        &lt;span class=&quot;carousel-control-next-icon&quot; aria-hidden=&quot;true&quot;&gt;&lt;/span&gt;
                                                        &lt;span class=&quot;sr-only&quot;&gt;Next&lt;/span&gt;
                                                    &lt;/a&gt;
                                                &lt;/div&gt;
                                            </code>
                                        </pre>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End row -->
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
    <script src="../assets/extra-libs/prism/prism.js"></script>


</body>

</html>