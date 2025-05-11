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
        <link href="../assets/libs/nouislider/distribute/nouislider.min.css" rel="stylesheet">
        <link href="../assets/extra-libs/nouislider/palette-noui.css" rel="stylesheet">
        <link href="../assets/extra-libs/nouislider/noui-slider.min.css" rel="stylesheet">


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
                        <h4 class="page-title">Noui Slider</h4>
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
                <div class="row">
                    <div class="col-lg-6 col-sm-6 col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Handles</h4>
                                <div class="form-group">
                                    <div id="slider-handles" class="m-t-15 m-b-15"></div>
                                    <p>The number of handles can be set using the <code>start</code> option.</p>
                                </div>
                                <h4 class="card-title">Stepping in non-linear sliders</h4>
                                <div class="form-group">
                                    <div id="slider-non-linear-step" class="m-t-15 m-b-15"></div>
                                    <p>For every subrange in a non-linear slider, stepping can be set.
                                    </p>
                                </div>
                                <h4 class="card-title">Stepping and snapping to values</h4>
                                <div class="form-group">
                                    <div id="slider-step" class="m-t-15 m-b-15"></div>
                                    <p>The amount the slider changes on movement can be set using the <code>step</code> option.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-6 col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Non-linear sliders</h4>
                                <div class="form-group">
                                    <div id="slider-non-linear" class="m-t-15 m-b-15"></div>
                                    <p>noUiSlider offers some powerful mechanisms that allow a slider to behave in a non-linear fashion.</p>
                                </div>
                                <h4 class="card-title">Range</h4>
                                <div class="form-group">
                                    <div id="slider-range" class="m-t-15 m-b-15"></div>
                                    <p>All values on the slider are part of a range. The range has a minimum and maximum value.</p>
                                </div>
                                <h4 class="card-title">Snapping between steps</h4>
                                <div class="form-group">
                                    <div id="slider-snap" class="m-t-15 m-b-15"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <!-- Simple Examples -->
                    <div class="col-lg-6 col-sm-6 col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Tap</h4>
                                <div class="form-group">
                                    <div id="tap" class="m-t-15 m-b-15"></div>
                                    <p>A handle snaps to a clicked location. A smooth transition is used. This option is <code>default</code>.</p>
                                </div>
                                <h4 class="card-title">Drag</h4>
                                <div class="form-group">
                                    <div id="drag" class="m-t-15 m-b-15"></div>
                                    <p>Makes the range draggable. Requires two handles. The <code>connect</code> option must be set to <code>true</code>.</p>
                                </div>
                                <h4 class="card-title">Fixed dragging</h4>
                                <div class="form-group">
                                    <div id="drag-fixed" class="m-t-15 m-b-15"></div>
                                    <p>Keeps the distance between handles fixed when the <code>'drag'</code> flag is set.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-6 col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Snap</h4>
                                <div class="form-group">
                                    <div id="snap" class="m-t-15 m-b-15"></div>
                                    <p>A handle snaps to a clicked location. It can immediately be moved, without a <code>mouseup</code> + <code>mousedown</code>.</p>
                                </div>
                                <h4 class="card-title">Hover</h4>
                                <div class="form-group">
                                    <div id="hover" class="m-t-15 m-b-15"></div>
                                    <p>With this option set, the slider fires <code>hover</code> events when a mouse or pen user hovers over the slider.</p>
                                </div>
                                <h4 class="card-title">Combined options</h4>
                                <div class="form-group">
                                    <div id="combined" class="m-t-15 m-b-15"></div>
                                    <p>Most <code>'behavior'</code> flags can be combined.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 col-sm-6 col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Left to right</h4>
                                <p>The <code>range</code> mode uses the slider range to determine where the pips should be. A pip is generated for every percentage specified.
                                </p>
                                <div class="form-group">
                                    <div id="pips-range" class="m-t-15 m-b-40"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-6 col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Right to left</h4>
                                <p>The <code>range</code> mode uses the slider range to determine where the pips should be. A pip is generated for every percentage specified.
                                </p>
                                <div class="form-group">
                                    <div id="pips-range-rtl" class="m-t-15 m-b-40"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Steps</h4>
                                <p>Like <code>range</code>, the <code>steps</code> mode uses the slider range. In <code>steps</code> mode, a pip is generated for every step. The <code>filter</code> option can be used to filter the generated pips. The <code>filter</code> function must return <code>0</code> (no value), <code>1</code> (large value) or <code>2</code> (small value).</p>
                                <div class="form-group">
                                    <div id="pips-steps-filter" class="m-b-40"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 col-sm-12">
                        <div class="card">
                            <div class="card-body">
                                <fieldset>
                                    <label>Default / Primary Color Slider</label>
                                    <div class="form-group">
                                        <div id="default-color-slider" class=""></div>
                                    </div>
                                </fieldset>
                                <fieldset>
                                    <label>Success Color Slider</label>
                                    <div class="form-group">
                                        <div id="success-color-slider" class="circle-filled slider-success "></div>
                                    </div>
                                </fieldset>
                                <fieldset>
                                    <label>Info Color Slider</label>
                                    <div class="form-group">
                                        <div id="info-color-slider" class="square slider-info "></div>
                                    </div>
                                </fieldset>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12">
                        <div class="card">
                            <div class="card-body">
                                <fieldset>
                                    <label>Warning Color Slider</label>
                                    <div class="form-group">
                                        <div id="warning-color-slider" class="slider-warning "></div>
                                    </div>
                                </fieldset>
                                <fieldset>
                                    <label>Danger Color Slider</label>
                                    <div class="form-group">
                                        <div id="danger-color-slider" class="circle-filled slider-danger "></div>
                                    </div>
                                </fieldset>
                                <fieldset>
                                    <label>Custom Color Slider</label>
                                    <div class="form-group">
                                        <div id="custom-color-slider" class="square slider-purple "></div>
                                    </div>
                                </fieldset>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <!-- Default Handle Sizing -->
                    <div class="col-lg-4 col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Default Handle</h4>
                                <fieldset class="m-t-20">
                                    <label>Extra Large Size</label>
                                    <div class="form-group">
                                        <div class="slider-xl " id="extra-large-slider"></div>
                                    </div>
                                </fieldset>
                                <fieldset>
                                    <label>Large Size</label>
                                    <div class="form-group">
                                        <div class="slider-lg slider-success " id="large-slider"></div>
                                    </div>
                                </fieldset>
                                <fieldset>
                                    <label>Default</label>
                                    <div class="form-group">
                                        <div class="slider-info " id="default-slider"></div>
                                    </div>
                                </fieldset>
                                <fieldset>
                                    <label>Small Size</label>
                                    <div class="form-group">
                                        <div class="slider-sm slider-warning " id="small-slider"></div>
                                    </div>
                                </fieldset>
                                <fieldset>
                                    <label>Extra Small</label>
                                    <div class="form-group">
                                        <div class="slider-xs slider-danger " id="extra-small-slider"></div>
                                    </div>
                                </fieldset>
                            </div>
                        </div>
                    </div>
                    <!-- Circle filled handle sizing -->
                    <div class="col-lg-4 col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Circle Filled Handle</h4>
                                <fieldset class="m-t-20">
                                    <label>Extra Large Size</label>
                                    <div class="form-group">
                                        <div class="circle-filled slider-xl " id="circle-extra-large-slider"></div>
                                    </div>
                                </fieldset>
                                <fieldset>
                                    <label>Large Size</label>
                                    <div class="form-group">
                                        <div class="circle-filled slider-lg slider-success " id="circle-large-slider"></div>
                                    </div>
                                </fieldset>
                                <fieldset>
                                    <label>Default</label>
                                    <div class="form-group">
                                        <div class="circle-filled slider-info " id="circle-default-slider"></div>
                                    </div>
                                </fieldset>
                                <fieldset>
                                    <label>Small Size</label>
                                    <div class="form-group">
                                        <div class="circle-filled slider-sm slider-warning " id="circle-small-slider"></div>
                                    </div>
                                </fieldset>
                                <fieldset>
                                    <label>Extra Small</label>
                                    <div class="form-group">
                                        <div class="circle-filled slider-xs slider-danger " id="circle-extra-small-slider"></div>
                                    </div>
                                </fieldset>
                            </div>
                        </div>
                    </div>
                    <!-- Square handle sizing -->
                    <div class="col-lg-4 col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Square Handle</h4>
                                <fieldset class="m-t-20">
                                    <label>Extra Large Size</label>
                                    <div class="form-group">
                                        <div class="square slider-xl " id="square-extra-large-slider"></div>
                                    </div>
                                </fieldset>
                                <fieldset>
                                    <label>Large Size</label>
                                    <div class="form-group">
                                        <div class="square slider-lg slider-success " id="square-large-slider"></div>
                                    </div>
                                </fieldset>
                                <fieldset>
                                    <label>Default</label>
                                    <div class="form-group">
                                        <div class="square slider-info " id="square-default-slider"></div>
                                    </div>
                                </fieldset>
                                <fieldset>
                                    <label>Small Size</label>
                                    <div class="form-group">
                                        <div class="square slider-sm slider-warning " id="square-small-slider"></div>
                                    </div>
                                </fieldset>
                                <fieldset>
                                    <label>Extra Small</label>
                                    <div class="form-group">
                                        <div class="square slider-xs slider-danger " id="square-extra-small-slider"></div>
                                    </div>
                                </fieldset>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Default Vertical Slider</h4>
                                <fieldset class="m-t-20">
                                    <div class="form-group text-center">
                                        <div id="slider-vertical-1"></div>
                                        <div id="slider-vertical-2" class="m-l-20 slider-info"></div>
                                        <div id="slider-vertical-3" class="m-l-20 slider-success"></div>
                                        <div id="slider-vertical-4" class="m-l-20 slider-warning"></div>
                                        <div id="slider-vertical-5" class="m-l-20 slider-danger"></div>
                                    </div>
                                </fieldset>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Connect to lower</h4>
                                <fieldset class="m-t-20">
                                    <div class="form-group text-center">
                                        <div id="connect-lower-1"></div>
                                        <div id="connect-lower-2" class="m-l-20 slider-info"></div>
                                        <div id="connect-lower-3" class="m-l-20 slider-success"></div>
                                        <div id="connect-lower-4" class="m-l-20 slider-warning"></div>
                                        <div id="connect-lower-5" class="m-l-20 slider-danger"></div>
                                    </div>
                                </fieldset>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Connect to upper</h4>
                                <fieldset class="m-t-20">
                                    <div class="form-group text-center">
                                        <div id="connect-upper-1"></div>
                                        <div id="connect-upper-2" class="m-l-20 slider-info"></div>
                                        <div id="connect-upper-3" class="m-l-20 slider-success"></div>
                                        <div id="connect-upper-4" class="m-l-20 slider-warning"></div>
                                        <div id="connect-upper-5" class="m-l-20 slider-danger"></div>
                                    </div>
                                </fieldset>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Tooltips</h4>
                                <fieldset class="m-t-20">
                                    <div class="form-group text-center">
                                        <div id="slider-tooltips-1" class="m-r-30"></div>
                                        <div id="slider-tooltips-2" class="m-l-40 m-r-30 slider-info"></div>
                                        <div id="slider-tooltips-3" class="m-l-40 slider-warning"></div>
                                    </div>
                                </fieldset>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Direction Top To Bottom</h4>
                                <fieldset class="m-t-20">
                                    <div class="form-group text-center">
                                        <div id="slider-direction-top-bottom-1" class="m-r-30"></div>
                                        <div id="slider-direction-top-bottom-2" class="m-l-40 m-r-30 slider-warning"></div>
                                        <div id="slider-direction-top-bottom-3" class="m-l-40 slider-danger"></div>
                                    </div>
                                </fieldset>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Direction Bottom To Top</h4>
                                <fieldset class="m-t-20">
                                    <div class="form-group text-center">
                                        <div id="slider-direction-bottom-top-1" class="m-r-30"></div>
                                        <div id="slider-direction-bottom-top-2" class="m-l-40 m-r-30 slider-info"></div>
                                        <div id="slider-direction-bottom-top-3" class="m-l-40 slider-success"></div>
                                    </div>
                                </fieldset>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Margin</h4>
                                <fieldset class="m-t-20">
                                    <div class="form-group text-center">
                                        <div id="vertical-margin-1"></div>
                                        <div id="vertical-margin-2" class="m-l-20 slider-info"></div>
                                        <div id="vertical-margin-3" class="m-l-20 slider-success"></div>
                                        <div id="vertical-margin-4" class="m-l-20 slider-warning"></div>
                                        <div id="vertical-margin-5" class="m-l-20 slider-danger"></div>
                                    </div>
                                </fieldset>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Limit</h4>
                                <fieldset class="m-t-20">
                                    <div class="form-group text-center">
                                        <div id="vertical-limit-1"></div>
                                        <div id="vertical-limit-2" class="m-l-20 slider-info"></div>
                                        <div id="vertical-limit-3" class="m-l-20 slider-success"></div>
                                        <div id="vertical-limit-4" class="m-l-20 slider-warning"></div>
                                        <div id="vertical-limit-5" class="m-l-20 slider-danger"></div>
                                    </div>
                                </fieldset>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Steps</h4>
                                <fieldset class="m-t-20">
                                    <div class="form-group text-center">
                                        <div id="vertical-steps-1"></div>
                                        <div id="vertical-steps-2" class="m-l-20 slider-info"></div>
                                        <div id="vertical-steps-3" class="m-l-20 slider-success"></div>
                                        <div id="vertical-steps-4" class="m-l-20 slider-warning"></div>
                                        <div id="vertical-steps-5" class="m-l-20 slider-danger"></div>
                                    </div>
                                </fieldset>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Default Handle</h4>
                                <fieldset class="m-t-20">
                                    <div class="form-group text-center">
                                        <div id="vert-extra-large-slider"></div>
                                        <div id="vert-large-slider" class="m-l-20 slider-info"></div>
                                        <div id="vert-default-slider" class="m-l-20 slider-success"></div>
                                        <div id="vert-small-slider" class="m-l-20 slider-warning"></div>
                                        <div id="vert-extra-small-slider" class="m-l-20 slider-danger"></div>
                                    </div>
                                </fieldset>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Circle Filled Handle</h4>
                                <fieldset class="m-t-20">
                                    <div class="form-group text-center">
                                        <div id="vert-circle-extra-large-slider" class="circle-filled"></div>
                                        <div id="vert-circle-large-slider" class="circle-filled m-l-20 slider-info"></div>
                                        <div id="vert-circle-default-slider" class="circle-filled m-l-20 slider-success"></div>
                                        <div id="vert-circle-small-slider" class="circle-filled m-l-20 slider-warning"></div>
                                        <div id="vert-circle-extra-small-slider" class="circle-filled m-l-20 slider-danger"></div>
                                    </div>
                                </fieldset>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Square Handle</h4>
                                <fieldset class="m-t-20">
                                    <div class="form-group text-center">
                                        <div id="vert-square-extra-large-slider" class="square"></div>
                                        <div id="vert-square-large-slider" class="square m-l-20 slider-info"></div>
                                        <div id="vert-square-default-slider" class="square m-l-20 slider-success"></div>
                                        <div id="vert-square-small-slider" class="square m-l-20 slider-warning"></div>
                                        <div id="vert-square-extra-small-slider" class="square m-l-20 slider-danger"></div>
                                    </div>
                                </fieldset>
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
    <script src="../assets/libs/wnumb/wNumb.js"></script>
    <script src="../assets/libs/nouislider/distribute/nouislider.min.js"></script>
    <script src="../assets/extra-libs/nouislider/nouislider-init.js"></script>


</body>

</html>