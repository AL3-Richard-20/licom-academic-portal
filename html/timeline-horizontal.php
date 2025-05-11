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
        <link href="../assets/extra-libs/horizontal-timeline/horizontal-timeline.css" rel="stylesheet">
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
                        <h4 class="page-title">Horizontal Timeline</h4>
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
                                <section class="cd-horizontal-timeline">
                                    <div class="timeline">
                                        <div class="events-wrapper">
                                            <div class="events">
                                                <ol>
                                                    <li><a href="#0" data-date="16/01/2014" class="selected">16 Jan</a></li>
                                                    <li><a href="#0" data-date="28/02/2014">28 Feb</a></li>
                                                    <li><a href="#0" data-date="20/04/2014">20 Mar</a></li>
                                                    <li><a href="#0" data-date="20/05/2014">20 May</a></li>
                                                    <li><a href="#0" data-date="09/07/2014">09 Jul</a></li>
                                                    <li><a href="#0" data-date="30/08/2014">30 Aug</a></li>
                                                    <li><a href="#0" data-date="15/09/2014">15 Sep</a></li>
                                                    <li><a href="#0" data-date="01/11/2014">01 Nov</a></li>
                                                    <li><a href="#0" data-date="10/12/2014">10 Dec</a></li>
                                                    <li><a href="#0" data-date="19/01/2015">29 Jan</a></li>
                                                    <li><a href="#0" data-date="03/03/2015">3 Mar</a></li>
                                                </ol>
                                                <span class="filling-line" aria-hidden="true"></span>
                                            </div>
                                            <!-- .events -->
                                        </div>
                                        <!-- .events-wrapper -->
                                        <ul class="cd-timeline-navigation">
                                            <li><a href="#0" class="prev inactive">Prev</a></li>
                                            <li><a href="#0" class="next">Next</a></li>
                                        </ul>
                                        <!-- .cd-timeline-navigation -->
                                    </div>
                                    <!-- .timeline -->
                                    <div class="events-content">
                                        <ol>
                                            <li class="selected" data-date="16/01/2014">
                                                <div class="d-flex align-items-center">
                                                    <div><img class="img-circle pull-left m-r-20 m-b-10" width="60" alt="user" src="../../assets/images/users/1.jpg"></div>
                                                    <div>
                                                        <h2> Horizontal Timeline</h2>
                                                        <h6>January 16th, 2014</h6></div>
                                                </div>
                                                <p class="p-t-20">
                                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum praesentium officia, fugit recusandae ipsa, quia velit nulla adipisci? Consequuntur aspernatur at, eaque hic repellendus sit dicta consequatur quae, ut harum ipsam molestias maxime non nisi reiciendis eligendi! Doloremque quia pariatur harum ea amet quibusdam quisquam, quae, temporibus dolores porro doloribus.
                                                </p>
                                                <p>
                                                    <button class="btn btn-rounded btn-outline-info m-t-20">Read more</button>
                                                </p>
                                            </li>
                                            <li data-date="28/02/2014">
                                                <div class="d-flex align-items-center">
                                                    <div><img class="img-circle pull-left m-r-20 m-b-10" width="60" alt="user2" src="../../assets/images/users/8.jpg"></div>
                                                    <div>
                                                        <h2> Horizontal Timeline</h2>
                                                        <h6>January 16th, 2014</h6></div>
                                                </div>
                                                <p class="p-t-20">
                                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum praesentium officia, fugit recusandae ipsa, quia velit nulla adipisci? Consequuntur aspernatur at, eaque hic repellendus sit dicta consequatur quae, ut harum ipsam molestias maxime non nisi reiciendis eligendi! Doloremque quia pariatur harum ea amet quibusdam quisquam, quae, temporibus dolores porro doloribus.
                                                </p>
                                                <p class="p-b-20">
                                                    <button class="btn btn-rounded btn-outline-info m-t-20">Read more</button>
                                                </p>
                                            </li>
                                            <li data-date="20/04/2014">
                                                <h2><img class="img-circle pull-left m-r-20 m-b-10" width="60" alt="user3" src="../../assets/images/users/7.jpg"> Horizontal Timeline<br/><small>March 20th, 2014</small></h2>
                                                <p class="m-t-40">
                                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum praesentium officia, fugit recusandae ipsa, quia velit nulla adipisci? Consequuntur aspernatur at, eaque hic repellendus sit dicta consequatur quae, ut harum ipsam molestias maxime non nisi reiciendis eligendi! Doloremque quia pariatur harum ea amet quibusdam quisquam, quae, temporibus dolores porro doloribus.
                                                </p>
                                                <p class="p-b-20">
                                                    <button class="btn btn-rounded btn-outline-info m-t-20">Read more</button>
                                                </p>
                                            </li>
                                            <li data-date="20/05/2014">
                                                <h2><img class="img-circle pull-left m-r-20 m-b-10" width="60" alt="user4" src="../../assets/images/users/6.jpg"> Horizontal Timeline<br/><small>May 20th, 2014</small></h2>
                                                <p class="m-t-40">
                                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum praesentium officia, fugit recusandae ipsa, quia velit nulla adipisci? Consequuntur aspernatur at, eaque hic repellendus sit dicta consequatur quae, ut harum ipsam molestias maxime non nisi reiciendis eligendi! Doloremque quia pariatur harum ea amet quibusdam quisquam, quae, temporibus dolores porro doloribus.
                                                </p>
                                                <p class="p-b-20">
                                                    <button class="btn btn-rounded btn-outline-info m-t-20">Read more</button>
                                                </p>
                                            </li>
                                            <li data-date="09/07/2014">
                                                <h2><img class="img-circle pull-left m-r-20 m-b-10" width="60" alt="user5" src="../../assets/images/users/5.jpg"> Horizontal Timeline<br/><small>July 9th, 2014</small></h2>
                                                <p class="m-t-40">
                                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum praesentium officia, fugit recusandae ipsa, quia velit nulla adipisci? Consequuntur aspernatur at, eaque hic repellendus sit dicta consequatur quae, ut harum ipsam molestias maxime non nisi reiciendis eligendi! Doloremque quia pariatur harum ea amet quibusdam quisquam, quae, temporibus dolores porro doloribus.
                                                </p>
                                                <p class="p-b-20">
                                                    <button class="btn btn-rounded btn-outline-info m-t-20">Read more</button>
                                                </p>
                                            </li>
                                            <li data-date="30/08/2014">
                                                <h2><img class="img-circle pull-left m-r-20 m-b-10" width="60" alt="user6" src="../../assets/images/users/4.jpg"> Horizontal Timeline<br/><small>August 30th, 2014</small></h2>
                                                <p class="m-t-40">
                                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum praesentium officia, fugit recusandae ipsa, quia velit nulla adipisci? Consequuntur aspernatur at, eaque hic repellendus sit dicta consequatur quae, ut harum ipsam molestias maxime non nisi reiciendis eligendi! Doloremque quia pariatur harum ea amet quibusdam quisquam, quae, temporibus dolores porro doloribus.
                                                </p>
                                                <p class="p-b-20">
                                                    <button class="btn btn-rounded btn-outline-info m-t-20">Read more</button>
                                                </p>
                                            </li>
                                            <li data-date="15/09/2014">
                                                <h2><img class="img-circle pull-left m-r-20 m-b-10" width="60" alt="user7" src="../../assets/images/users/3.jpg"> Horizontal Timeline<br/><small>September 15th, 2014</small></h2>
                                                <p class="m-t-40">
                                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum praesentium officia, fugit recusandae ipsa, quia velit nulla adipisci? Consequuntur aspernatur at, eaque hic repellendus sit dicta consequatur quae, ut harum ipsam molestias maxime non nisi reiciendis eligendi! Doloremque quia pariatur harum ea amet quibusdam quisquam, quae, temporibus dolores porro doloribus.
                                                </p>
                                                <p class="p-b-20">
                                                    <button class="btn btn-rounded btn-outline-info m-t-20">Read more</button>
                                                </p>
                                            </li>
                                            <li data-date="01/11/2014">
                                                <h2><img class="img-circle pull-left m-r-20 m-b-10" width="60" alt="user8" src="../../assets/images/users/2.jpg"> Horizontal Timeline<br/><small>November 01st, 2014</small></h2>
                                                <p class="m-t-40">
                                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum praesentium officia, fugit recusandae ipsa, quia velit nulla adipisci? Consequuntur aspernatur at, eaque hic repellendus sit dicta consequatur quae, ut harum ipsam molestias maxime non nisi reiciendis eligendi! Doloremque quia pariatur harum ea amet quibusdam quisquam, quae, temporibus dolores porro doloribus.
                                                </p>
                                                <p>
                                                    <button class="btn btn-rounded btn-outline-info m-t-20">Read more</button>
                                                </p>
                                            </li>
                                            <li data-date="10/12/2014">
                                                <h2><img class="img-circle pull-left m-r-20 m-b-10" width="60" alt="user9" src="../../assets/images/users/1.jpg"> Horizontal Timeline<br/><small>December 10th, 2014</small></h2>
                                                <p class="m-t-40">
                                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum praesentium officia, fugit recusandae ipsa, quia velit nulla adipisci? Consequuntur aspernatur at, eaque hic repellendus sit dicta consequatur quae, ut harum ipsam molestias maxime non nisi reiciendis eligendi! Doloremque quia pariatur harum ea amet quibusdam quisquam, quae, temporibus dolores porro doloribus.
                                                </p>
                                                <p class="p-b-20">
                                                    <button class="btn btn-rounded btn-outline-info m-t-20">Read more</button>
                                                </p>
                                            </li>
                                            <li data-date="19/01/2015">
                                                <h2>Event title here</h2>
                                                <em>January 19th, 2015</em>
                                                <p>
                                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum praesentium officia, fugit recusandae ipsa, quia velit nulla adipisci? Consequuntur aspernatur at, eaque hic repellendus sit dicta consequatur quae, ut harum ipsam molestias maxime non nisi reiciendis eligendi! Doloremque quia pariatur harum ea amet quibusdam quisquam, quae, temporibus dolores porro doloribus.
                                                </p>
                                            </li>
                                            <li data-date="03/03/2015">
                                                <h2>Event title here</h2>
                                                <em>March 3rd, 2015</em>
                                                <p class="p-b-20">
                                                    Lorem ipsum dolor dfsit amet, consectetur adipisicing elit. Illum praesentium officia, fugit recusandae ipsa, quia velit nulla adipisci? Consequuntur aspernatur at, eaque hic repellendus sit dicta consequatur quae, ut harum ipsam molestias maxime non nisi reiciendis eligendi! Doloremque quia pariatur harum ea amet quibusdam quisquam, quae, temporibus dolores porro doloribus.
                                                </p>
                                            </li>
                                        </ol>
                                    </div>
                                    <!-- .events-content -->
                                </section>
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
    <script src="../assets/extra-libs/horizontal-timeline/horizontal-timeline.js"></script>


</body>

</html>