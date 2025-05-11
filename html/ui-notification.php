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
                        <h4 class="page-title">Notifications</h4>
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
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <!-- Column -->
                                    <div class="col-lg-4 col-md-12">
                                        <h4 class="card-title">Alert with different color</h4>
                                        <h6 class="card-subtitle">use the class <code>alert alert-*colors*</code> for dezier</h6>
                                        <div class="alert alert-success">This is an example top alert. You can edit what u wish. </div>
                                        <div class="alert alert-danger">This is an example top alert. You can edit what u wish. </div>
                                        <div class="alert alert-warning">This is an example top alert. You can edit what u wish. </div>
                                        <div class="alert alert-info">This is an example top alert. You can edit what u wish. </div>
                                    </div>
                                    <!-- Column -->
                                    <div class="col-lg-4 col-md-12">
                                        <h4 class="card-title">Dissmissal Alert</h4>
                                        <h6 class="card-subtitle">add the button with <code>close</code> class</h6>
                                        <div class="alert alert-success"> <i class="ti-user"></i> This is an example top alert. You can edit what u wish.
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
                                        </div>
                                        <div class="alert alert-danger"> <i class="ti-user"></i> This is an example top alert. You can edit what u wish.
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
                                        </div>
                                        <div class="alert alert-warning"> <i class="ti-user"></i> This is an example top alert. You can edit what u wish.
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
                                        </div>
                                        <div class="alert alert-info"> <i class="ti-user"></i> This is an example top alert. You can edit what u wish.
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
                                        </div>
                                    </div>
                                    <!-- Column -->
                                    <div class="col-lg-4 col-md-12">
                                        <h4 class="card-title">Alert with image / icon </h4>
                                        <h6 class="card-subtitle">add the image / icon before content </h6>
                                        <div class="alert alert-success"> <i class="ti-user"></i> This is an example top alert. You can edit what u wish.
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
                                        </div>
                                        <div class="alert alert-danger"> <img src="../../assets/images/users/1.jpg" width="30" class="rounded-circle" alt="img"> This is an example top alert. You can edit what u wish.
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
                                        </div>
                                        <div class="alert alert-warning"> <img src="../../assets/images/users/1.jpg" width="30" class="rounded-circle" alt="img"> This is an example top alert. You can edit what u wish.
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
                                        </div>
                                        <div class="alert alert-info"> <i class="ti-user"></i> This is an example top alert. You can edit what u wish.
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
                                        </div>
                                    </div>
                                    <!-- Column -->
                                </div>
                                <pre class="language-html scrollable">
                                    <code>
                                        &lt;!-- Alert with different color --&gt;
                                        &lt;div class=&quot;alert alert-success&quot;&gt;This is an example top alert. You can edit what u wish. &lt;/div&gt;

                                        &lt;!-- Dissmissal Alert --&gt;
                                        &lt;div class=&quot;alert alert-success&quot;&gt; &lt;i class=&quot;ti-user&quot;&gt;&lt;/i&gt; This is an example top alert. You can edit what u wish.
                                            &lt;button type=&quot;button&quot; class=&quot;close&quot; data-dismiss=&quot;alert&quot; aria-label=&quot;Close&quot;&gt; &lt;span aria-hidden=&quot;true&quot;&gt;&times;&lt;/span&gt; &lt;/button&gt;
                                        &lt;/div&gt;

                                        &lt;!-- Alert with image / icon --&gt;
                                        &lt;div class=&quot;alert alert-warning&quot;&gt; &lt;img src=&quot;../../assets/images/users/1.jpg&quot; width=&quot;30&quot; class=&quot;rounded-circle&quot; alt=&quot;img&quot;&gt; This is an example top alert. You can edit what u wish.
                                            &lt;button type=&quot;button&quot; class=&quot;close&quot; data-dismiss=&quot;alert&quot; aria-label=&quot;Close&quot;&gt; &lt;span aria-hidden=&quot;true&quot;&gt;&times;&lt;/span&gt; &lt;/button&gt;
                                        &lt;/div&gt;
                                   </code>
                                </pre>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- row -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <!-- Column -->
                                    <div class="col-lg-6 col-md-12">
                                        <h4 class="card-title">Alert with rounded corner </h4>
                                        <h6 class="card-subtitle">add the <code>alert-rounded</code> class to the alert </h6>
                                        <div class="alert alert-success alert-rounded"> <i class="ti-user"></i> This is an example top alert. You can edit what u wish.
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
                                        </div>
                                        <div class="alert alert-danger alert-rounded"> <img src="../../assets/images/users/1.jpg" width="30" class="rounded-circle" alt="img"> This is an example top alert. You can edit what u wish.
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
                                        </div>
                                        <div class="alert alert-warning alert-rounded"> <img src="../../assets/images/users/1.jpg" width="30" class="rounded-circle" alt="img"> This is an example top alert. You can edit what u wish.
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
                                        </div>
                                        <div class="alert alert-info alert-rounded">This is an example top alert. You can edit what u wish.
                                        </div>
                                    </div>
                                    <!-- Column -->
                                    <!-- Column -->
                                    <div class="col-lg-6 col-md-12">
                                        <h4 class="card-title">Alert with content </h4>
                                        <h6 class="card-subtitle">Alerts can also contain additional HTML elements </h6>
                                        <div class="alert alert-success">
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
                                            <h3 class="text-success"><i class="fa fa-check-circle"></i> Success</h3> This is an example top alert. You can edit what u wish. Aww yeah, you successfully read this important alert message. This example text is going to run a bit longer so that you can see how spacing within an alert works with this kind of content.
                                        </div>
                                        <div class="alert alert-info">
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
                                            <h3 class="text-info"><i class="fa fa-exclamation-circle"></i> Information</h3> This is an example top alert. You can edit what u wish. Aww yeah, you successfully read this important alert message. This example text is going to run a bit longer so that you can see how spacing within an alert works with this kind of content.
                                        </div>
                                        <div class="alert alert-warning">
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
                                            <h3 class="text-warning"><i class="fa fa-exclamation-triangle"></i> Warning</h3> This is an example top alert. You can edit what u wish. Aww yeah, you successfully read this important alert message. This example text is going to run a bit longer so that you can see how spacing within an alert works with this kind of content.
                                        </div>
                                    </div>
                                    <!-- Column -->
                                </div>
                                <pre class="language-html scrollable">
                                    <code>
                                        &lt;!-- Alert with rounded corner --&gt;
                                        &lt;div class=&quot;alert alert-success alert-rounded&quot;&gt; &lt;i class=&quot;ti-user&quot;&gt;&lt;/i&gt; This is an example top alert. You can edit what u wish.
                                            &lt;button type=&quot;button&quot; class=&quot;close&quot; data-dismiss=&quot;alert&quot; aria-label=&quot;Close&quot;&gt; &lt;span aria-hidden=&quot;true&quot;&gt;&times;&lt;/span&gt; &lt;/button&gt;
                                        &lt;/div&gt;
                                        &lt;!-- Alert with content --&gt;
                                        &lt;div class=&quot;alert alert-success&quot;&gt;
                                            &lt;button type=&quot;button&quot; class=&quot;close&quot; data-dismiss=&quot;alert&quot; aria-label=&quot;Close&quot;&gt; &lt;span aria-hidden=&quot;true&quot;&gt;&times;&lt;/span&gt; &lt;/button&gt;
                                            &lt;h3 class=&quot;text-success&quot;&gt;&lt;i class=&quot;fa fa-check-circle&quot;&gt;&lt;/i&gt; Success&lt;/h3&gt; This is an example top alert. You can edit what u wish. Aww yeah, you successfully read this important alert message. This example text is going to run a bit longer so that you can see how spacing within an alert works with this kind of content.
                                        &lt;/div&gt;
                                    </code>
                                </pre>
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
    <script src="../assets/extra-libs/prism/prism.js"></script>


</body>

</html>