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
    <link href="../assets/libs/summernote/dist/summernote-bs4.css" rel="stylesheet">


    <link href="../assets/libs/dropzone/dist/min/dropzone.min.css" rel="stylesheet">


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
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Start Page Content -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Email App Part -->
            <!-- ============================================================== -->
            <div class="email-app border-top">
                <!-- ============================================================== -->
                <!-- Left Part -->
                <!-- ============================================================== -->
                <div class="left-part bg-light">
                    <a class="ti-menu ti-close btn btn-success show-left-part d-block d-md-none" href="javascript:void(0)"></a>
                    <div class="scrollable" style="height:100%;">
                        <div class="p-15">
                            <a id="compose_mail" class="waves-effect waves-light btn btn-danger d-block" href="javascript: void(0)">Compose</a>
                        </div>
                        <div class="divider"></div>
                        <ul class="list-group">
                            <li>
                                <small class="p-15 grey-text text-lighten-1 db">Folders</small>
                            </li>
                            <li class="list-group-item">
                                <a href="javascript:void(0)" class="active list-group-item-action">
                                    <i class="mdi mdi-inbox"></i> Inbox
                                    <span class="label label-success float-right">6</span>
                                </a>
                            </li>
                            <li class="list-group-item">
                                <a href="javascript:void(0)" class="list-group-item-action">
                                    <i class="mdi mdi-star"></i> Starred </a>
                            </li>
                            <li class="list-group-item">
                                <a href="javascript:void(0)" class="list-group-item-action">
                                    <i class="mdi mdi-send"></i> Draft
                                    <span class="label label-danger float-right">3</span>
                                </a>
                            </li>
                            <li class="list-group-item">
                                <a href="javascript:void(0)" class="list-group-item-action">
                                    <i class="mdi mdi-email"></i> Sent Mail </a>
                            </li>
                            <li class="list-group-item">
                                <hr>
                            </li>
                            <li class="list-group-item">
                                <a href="javascript:void(0)" class="list-group-item-action">
                                    <i class="mdi mdi-block-helper"></i> Spam </a>
                            </li>
                            <li class="list-group-item">
                                <a href="javascript:void(0)" class="list-group-item-action">
                                    <i class="mdi mdi-delete"></i> Trash </a>
                            </li>
                            <li class="list-group-item">
                                <hr>
                            </li>
                            <li>
                                <small class="p-15 grey-text text-lighten-1 db">Labels</small>
                            </li>
                            <li class="list-group-item">
                                <a href="javascript:void(0)" class="list-group-item-action">
                                    <i class="text-danger mdi mdi-checkbox-blank-circle"></i> Work </a>
                            </li>
                            <li class="list-group-item">
                                <a href="javascript:void(0)" class="list-group-item-action">
                                    <i class="text-cyan mdi mdi-checkbox-blank-circle"></i> Business </a>
                            </li>
                            <li class="list-group-item">
                                <a href="javascript:void(0)" class="list-group-item-action">
                                    <i class="text-warning mdi mdi-checkbox-blank-circle"></i> Family </a>
                            </li>
                            <li class="list-group-item">
                                <a href="javascript:void(0)" class="list-group-item-action">
                                    <i class="text-info mdi mdi-checkbox-blank-circle"></i> Friends </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- Right Part  Mail Compose -->
                <!-- ============================================================== -->
                <div class="right-part mail-compose bg-white">
                    <div class="p-20 border-bottom">
                        <div class="d-flex align-items-center">
                            <div>
                                <h4>Compose</h4>
                                <span>create new message</span>
                            </div>
                            <div class="ml-auto">
                                <button id="cancel_compose" class="btn btn-dark">Back</button>
                            </div>
                        </div>
                    </div>
                    <!-- Action part -->
                    <!-- Button group part -->
                    <div class="card-body">
                        <form>
                            <div class="form-group">
                                <input type="email" id="example-email" name="example-email" class="form-control" placeholder="To">
                            </div>
                            <div class="form-group">
                                <input type="text" id="example-subject" name="example-subject" class="form-control" placeholder="Subject">
                            </div>
                            <div id="summernote"></div>
                            <h4>Attachment</h4>
                            <div class="dropzone" id="dzid">
                                <div class="fallback">
                                    <input name="file" type="file" multiple />
                                </div>
                            </div>
                            <button type="submit" class="btn btn-success m-t-20">
                                <i class="far fa-envelope"></i> Send</button>
                            <button type="submit" class="btn btn-dark m-t-20">Discard</button>
                        </form>
                        <!-- Action part -->
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End PAge Content -->
            <!-- ============================================================== -->
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
    <script src="../dist/js/pages/email/email.js"></script>
    <script src="../assets/libs/summernote/dist/summernote-bs4.min.js"></script>
    <script src="../assets/libs/dropzone/dist/min/dropzone.min.js"></script>


    <script>

        $('#summernote').summernote({
            placeholder: 'Type your email Here',
            tabsize: 2,
            height: 250
        });
        $("#dzid").dropzone({ url: "/file/post" });

    </script>

</body>

</html>