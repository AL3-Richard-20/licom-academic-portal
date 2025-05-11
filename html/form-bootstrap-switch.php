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
        <link rel="stylesheet" type="text/css" href="../assets/libs/bootstrap-switch/dist/css/bootstrap3/bootstrap-switch.min.css">


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
                        <h4 class="page-title">Form Boostrap Switch</h4>
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
                    <div class="col-12 bt-switch">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Bootstrap Switch</h4>
                                <!-- Sizes -->
                                <h4 class="card-title m-t-20">Sizes</h4>
                                <h6 class="card-subtitle">Just add <code>data-size="Size"</code> attribute to the <code>&lt;input type="checkbox"...&gt;</code>. Size values: <code>mini, small, normal, large</code>.</h6>
                                <div class="m-b-30">
                                    <input type="checkbox" checked data-size="mini" />
                                    <input type="checkbox" checked data-size="small" />
                                    <input type="checkbox" checked data-size="normal" />
                                    <input type="checkbox" checked data-size="large" />
                                </div>
                                <!-- End Sizes -->
                                <!-- Colors -->
                                <h4 class="card-title m-t-20">Colors</h4>
                                <h6 class="card-subtitle">Just add <code>data-on-color="Color"</code> &amp; <code>data-off-color="Color"</code> to the <code>&lt;input type="checkbox"...&gt;</code>. Color values: <code>primary, info, success, warning, danger, default</code>.</h6>
                                <div class="m-b-30">
                                    <input type="checkbox" checked data-on-color="primary" data-off-color="info">
                                    <input type="checkbox" checked data-on-color="info" data-off-color="success">
                                    <input type="checkbox" checked data-on-color="success" data-off-color="warning">
                                    <input type="checkbox" checked data-on-color="warning" data-off-color="danger">
                                    <input type="checkbox" checked data-on-color="danger" data-off-color="default">
                                    <input type="checkbox" checked data-on-color="default" data-off-color="primary">
                                </div>
                                <!-- End Colors -->
                                <!-- Disabled/Readonly -->
                                <h4 class="card-title m-t-20">Disabled/Readonly</h4>
                                <h6 class="card-subtitle">Just add <code>disabled</code> or <code>readonly</code> attribute to the <code>&lt;input type="checkbox"...&gt;</code>.</h6>
                                <div class="m-b-30">
                                    <input type="checkbox" checked disabled data-on-color="primary" data-off-color="info">
                                    <input type="checkbox" readonly data-on-color="info" data-off-color="success">
                                </div>
                                <!-- End Disabled/Readonly -->
                                <!-- With Text -->
                                <h4 class="card-title m-t-20">With Text</h4>
                                <h6 class="card-subtitle">Just add <code>data-on-text="Text"</code> &amp; <code>data-off-text="Text"</code> to the <code>&lt;input type="checkbox"...&gt;</code>.</h6>
                                <div class="m-b-30">
                                    <input type="checkbox" checked data-on-color="success" data-off-color="info" data-on-text="Yes" data-off-text="No">
                                    <input type="checkbox" checked data-on-color="info" data-off-color="success" data-on-text="1" data-off-text="0">
                                </div>
                                <!-- End With Text -->
                                <!-- With Long Text -->
                                <h4 class="card-title m-t-20">With Long Text</h4>
                                <h6 class="card-subtitle">Just add <code>data-on-text="Long Text"</code> &amp; <code>data-off-text="Long Text"</code> to the <code>&lt;input type="checkbox"...&gt;</code>.</h6>
                                <div class="m-b-30">
                                    <input type="checkbox" checked data-on-color="danger" data-off-color="warning" data-on-text="Explicit" data-off-text="Implicit">
                                    <input type="checkbox" checked data-on-color="warning" data-off-color="danger" data-on-text="Enabled" data-off-text="Disabled">
                                </div>
                                <!-- End With Long Text -->
                                <!-- Label Text -->
                                <h4 class="card-title m-t-20">Label Text</h4>
                                <h6 class="card-subtitle">Just add <code>data-on-text="Text"</code> or <code>data-off-text="Text"</code> to the <code>&lt;input type="checkbox"...&gt;</code>.</h6>
                                <div class="m-b-30">
                                    <input type="checkbox" checked data-on-color="danger" data-off-color="success" data-on-text="Radio">
                                    <input type="checkbox" checked data-on-color="success" data-off-color="danger" data-off-text="Waves">
                                </div>
                                <!-- End Label Text -->
                                <!-- With HTML -->
                                <h4 class="card-title m-t-20">With HTML</h4>
                                <h6 class="card-subtitle">Just add <code>data-on-text="HTML Text"</code> &amp; <code>data-off-text="HTML Text"</code> to the <code>&lt;input type="checkbox"...&gt;</code>.</h6>
                                <div class="m-b-30">
                                    <input type="checkbox" checked data-on-color="primary" data-off-color="info" data-on-text="<i class='fas fa-sun'></i>" data-off-text="<i class='fas fa-cloud'></i>">
                                    <input type="checkbox" checked data-on-color="info" data-off-color="success" data-on-text="<i class='fas fa-phone'></i>" data-off-text="<i class='fas fa-envelope'></i>">
                                </div>
                                <!-- End With HTML -->
                                <!-- Radio Buttons -->
                                <h4 class="card-title m-t-20">Radio Buttons</h4>
                                <h6 class="card-subtitle">Just add class <code>radio-switch</code> to the <code>&lt;input type="radio"...&gt;</code>. If you want to change the class name, you have to change jquery according to that.</h6>
                                <div class="m-b-30">
                                    <div class="form-group">
                                        <label for="option1">Option 1</label>
                                        <input id="option1" type="radio" name="radiobt" value="option1" class="radio-switch"> </div>
                                    <div class="form-group">
                                        <label for="option2">Option 2</label>
                                        <input id="option2" type="radio" name="radiobt" value="option2" class="radio-switch"> </div>
                                    <div class="form-group">
                                        <label for="option3">Option 3</label>
                                        <input id="option3" type="radio" name="radiobt" value="option3" class="radio-switch"> </div>
                                </div>
                                <!-- End Radio Buttons -->
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
    <script src="../assets/libs/bootstrap-switch/dist/js/bootstrap-switch.min.js"></script>


    <script>

        $(".bt-switch input[type='checkbox'], .bt-switch input[type='radio']").bootstrapSwitch();
        var radioswitch = function() {
            var bt = function() {
                $(".radio-switch").on("switch-change", function() {
                    $(".radio-switch").bootstrapSwitch("toggleRadioState")
                }), $(".radio-switch").on("switch-change", function() {
                    $(".radio-switch").bootstrapSwitch("toggleRadioStateAllowUncheck")
                }), $(".radio-switch").on("switch-change", function() {
                    $(".radio-switch").bootstrapSwitch("toggleRadioStateAllowUncheck", !1)
                })
            };
            return {
                init: function() {
                    bt()
                }
            }
        }();
        $(document).ready(function() {
            radioswitch.init()
        });

    </script>
    
</body>

</html>