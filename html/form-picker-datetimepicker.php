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


        <link rel="stylesheet" type="text/css" href="../assets/libs/pickadate/lib/themes/default.css">


        <link rel="stylesheet" type="text/css" href="../assets/libs/pickadate/lib/themes/default.date.css">


        <link rel="stylesheet" type="text/css" href="../assets/libs/pickadate/lib/themes/default.time.css">


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
                        <h4 class="page-title">Form Datetimepicker</h4>
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
                <!-- Row -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Pickadate Picker</h4>
                                <h6 class="card-subtitle">The mobile-friendly, responsive, and lightweight jQuery date &amp; time input picker.</h6>
                                <div class="form-group">
                                    <label>Default Pickadate</label>
                                    <h6 class="card-subtitle">To use add <code>.pickadate</code> class for default Pickadate Picker.</h6>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">
                                                <span class="ti-calendar"></span>
                                            </span>
                                        </div>
                                        <input type='text' class="form-control pickadate" placeholder="Default Pickadate" />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Hide/Change Buttons</label>
                                    <h6 class="card-subtitle">To use add <code>.pickadate-clear-buttons</code> class to change/hide buttons.</h6>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">
                                                <span class="ti-calendar"></span>
                                            </span>
                                        </div>
                                        <input type='text' class="form-control pickadate-clear-buttons" placeholder="Hide/Change Buttons" />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Select Year</label>
                                    <h6 class="card-subtitle">To use add <code>.pickadate-select-year</code> class to choose select year.</h6>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">
                                                <span class="ti-calendar"></span>
                                            </span>
                                        </div>
                                        <input type='text' class="form-control pickadate-select-year" placeholder="Select Year" />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Short string with Pickadate</label>
                                    <h6 class="card-subtitle">To use add <code>.pickadate-short-string</code> class for short string with Month &amp; Week.</h6>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">
                                                <span class="ti-calendar"></span>
                                            </span>
                                        </div>
                                        <input type='text' class="form-control pickadate-short-string" placeholder="Short String of Month &amp; Week" />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Change First Week</label>
                                    <h6 class="card-subtitle">To use add <code>.pickadate-firstweek</code> class to change first weekday to Monday.</h6>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">
                                                <span class="ti-calendar"></span>
                                            </span>
                                        </div>
                                        <input type='text' class="form-control pickadate-firstweek" placeholder="First Weekday to Monday" />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Date Limits</label>
                                    <h6 class="card-subtitle">To use add <code>.pickadate-datelimits</code> class to choose date in specific range date. </h6>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">
                                                <span class="ti-calendar"></span>
                                            </span>
                                        </div>
                                        <input type='text' class="form-control pickadate-datelimits" placeholder="Date Limits" />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Change Formats</label>
                                    <h6 class="card-subtitle">To use add <code>.pickadate-change-format</code> class to change date formats.</h6>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">
                                                <span class="ti-calendar"></span>
                                            </span>
                                        </div>
                                        <input type='text' class="form-control pickadate-change-format" placeholder="Change Formats" />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Language Translation</label>
                                    <h6 class="card-subtitle">To use add <code>.pickadate-translations</code> class for language translation.</h6>
                                    <div class="input-group">
                                        <input type='text' class="form-control pickadate-translations" placeholder="In Different Language" />
                                        <div class="input-group-append">
                                            <span class="input-group-text">
                                                <span class="ti-calendar"></span>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Change Arrows</label>
                                    <h6 class="card-subtitle">To use add <code>.pickadate-changearrow</code> class to change date formats.</h6>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">
                                                <span class="ti-calendar"></span>
                                            </span>
                                        </div>
                                        <input type='text' class="form-control pickadate-changearrow" placeholder="Change Formats" />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Disable arbitrary dates</label>
                                    <h6 class="card-subtitle">To use add <code>.pickadate-disable-arbitrarydates</code> class to disable arbitary dates.</h6>
                                    <div class="input-group">
                                        <input type='text' class="form-control pickadate-disable-arbitrarydates" placeholder="Disable Dates" />
                                        <div class="input-group-append">
                                            <span class="input-group-text">
                                                <span class="ti-calendar"></span>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Disable days of the week</label>
                                    <h6 class="card-subtitle">To use add <code>.pickadate-disable-week</code> class to disable days of the week.</h6>
                                    <div class="input-group">
                                        <input type='text' class="form-control pickadate-disable-week" placeholder="Disable days of the week" />
                                        <div class="input-group-append">
                                            <span class="input-group-text">
                                                <span class="ti-calendar"></span>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Selectors Month &amp; Year</label>
                                    <h6 class="card-subtitle">To use add <code>.pickadate-selectors</code> class to set month &amp; year selectors.</h6>
                                    <div class="input-group">
                                        <input type='text' class="form-control pickadate-selectors" placeholder="Selector Month &amp; Year" />
                                        <div class="input-group-append">
                                            <span class="input-group-text">
                                                <span class="ti-calendar"></span>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Minimum and maximum date range</label>
                                    <h6 class="card-subtitle">To use add <code>.pickadate-minmax</code> class for minimum and maximum date range.</h6>
                                    <div class="input-group">
                                        <input type='text' class="form-control pickadate-minmax" placeholder="In Another Language" />
                                        <div class="input-group-append">
                                            <span class="input-group-text">
                                                <span class="ti-calendar"></span>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Dropdown Month &amp; Year</label>
                                    <h6 class="card-subtitle">To use add <code>.pickadate-monyear-dropdown</code> class to set select to month and year from the drodown.</h6>
                                    <div class="input-group">
                                        <input type='text' class="form-control pickadate-monyear-dropdown" placeholder="Month &amp; Year Dropdown" />
                                        <div class="input-group-append">
                                            <span class="input-group-text">
                                                <span class="ti-calendar"></span>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Picker Events</label>
                                    <h6 class="card-subtitle">To use add <code>.pickadate-events</code> class to check events in the console.</h6>
                                    <div class="input-group">
                                        <input type='text' class="form-control pickadate-events" placeholder="Open console to verify events" />
                                        <div class="input-group-append">
                                            <span class="input-group-text">
                                                <span class="ti-calendar"></span>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Native calendar of Disable picker</label>
                                    <h6 class="card-subtitle">To use <code>.datepicker</code> class to change Native calendar of Disable picker.</h6>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">
                                                <span class="ti-calendar"></span>
                                            </span>
                                        </div>
                                        <input id="picker_from" class="form-control datepicker" type="date">
                                    </div>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">
                                                <span class="ti-calendar"></span>
                                            </span>
                                        </div>
                                        <input id="picker_to" class="form-control datepicker" type="date">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Row -->
                <!-- Row -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Pickatime Picker</h4>
                                <div class="form-group">
                                    <label>Default Pickatime</label>
                                    <h6 class="card-subtitle">To use add <code>.pickatime</code> class for Default PickaDate Picker.</h6>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">
                                                <span class="ti-alarm-clock"></span>
                                            </span>
                                        </div>
                                        <input type='text' class="form-control pickatime" placeholder="Default Pickatime" />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Clear Button</label>
                                    <h6 class="card-subtitle">To use add <code>.pickadate-clear-buttons</code> class to hide clear button from calendar.</h6>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">
                                                <span class="ti-alarm-clock"></span>
                                            </span>
                                        </div>
                                        <input type='text' class="form-control pickadate-clear-buttons" placeholder="Clear Button" />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Minimum and maximum time range</label>
                                    <h6 class="card-subtitle">To use add <code>.pickatime-minmax-range</code> class for maximum starting time and minimum ending time.</h6>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">
                                                <span class="ti-alarm-clock"></span>
                                            </span>
                                        </div>
                                        <input type='text' class="form-control pickatime-minmax-range" placeholder="maximum starting time and minimum ending time" />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Change Formats</label>
                                    <h6 class="card-subtitle">Use <code>.pickadate-change-format</code> class to change time and date display formats.</h6>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">
                                                <span class="ti-alarm-clock"></span>
                                            </span>
                                        </div>
                                        <input type='text' class="form-control pickadate-change-format" placeholder="Change Formats" />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Format of Label</label>
                                    <h6 class="card-subtitle">To use <code>.pickatime-format-label</code> class to display time label format.</h6>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">
                                                <span class="ti-alarm-clock"></span>
                                            </span>
                                        </div>
                                        <input type='text' class="form-control pickatime-format-label" placeholder="Format Label" />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Time Format Display</label>
                                    <h6 class="card-subtitle">Use <code>.pickatime-formatTime-display</code> class to display time format.</h6>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">
                                                <span class="ti-alarm-clock"></span>
                                            </span>
                                        </div>
                                        <input type='text' class="form-control pickatime-formatTime-display" placeholder="Time Format" />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Current Time Limit</label>
                                    <h6 class="card-subtitle">Use for to show last 5 time limits and also shows current time Limitation.</h6>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">
                                                <span class="ti-alarm-clock"></span>
                                            </span>
                                        </div>
                                        <input type='text' class="form-control pickatime-time-limits" placeholder="Select Time limit" />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Disable set of Time</label>
                                    <h6 class="card-subtitle">To use add <code>.pickatime-disable</code> for disable set of time.</h6>
                                    <div class="input-group">
                                        <input type='text' class="form-control pickatime-disable" placeholder="Disable set of Time" />
                                        <div class="input-group-append">
                                            <span class="input-group-text">
                                                <span class="ti-alarm-clock"></span>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Intervals</label>
                                    <h6 class="card-subtitle">To use add <code>.pickatime-intervals</code> class to display time in Intervals.</h6>
                                    <div class="input-group">
                                        <input type='text' class="form-control pickatime-intervals" placeholder="Date Intervals" />
                                        <div class="input-group-append">
                                            <span class="input-group-text">
                                                <span class="ti-alarm-clock"></span>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Disable set of time using Object</label>
                                    <h6 class="card-subtitle">To use add <code>.pickatime-timedisable-object</code> class and using objects as a range of times</h6>
                                    <div class="input-group">
                                        <input type='text' class="form-control pickatime-timedisable-object" placeholder="Disable set of Time using obeject" />
                                        <div class="input-group-append">
                                            <span class="input-group-text">
                                                <span class="ti-alarm-clock"></span>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Disable set of time using Integers</label>
                                    <h6 class="card-subtitle">To use add <code>.pickatime-timedisable-integer</code> class and using integers as hours (0 to 23)</h6>
                                    <div class="input-group">
                                        <input type='text' class="form-control pickatime-timedisable-integer" placeholder="Disable set of Time using integers" />
                                        <div class="input-group-append">
                                            <span class="input-group-text">
                                                <span class="ti-alarm-clock"></span>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Disable All with exceptions</label>
                                    <h6 class="card-subtitle">Just add class <code>.pickatime-disable-all</code></h6>
                                    <div class="input-group">
                                        <input type='text' class="form-control pickatime-disable-all" placeholder="Disable All with exceptions" />
                                        <div class="input-group-append">
                                            <span class="input-group-text">
                                                <span class="ti-alarm-clock"></span>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Close on a user action</label>
                                    <h6 class="card-subtitle">To use add <code>.pickatime-closeuser-action</code> class and use for When a time is selected or the "clear" button is pressed, the picker closes.</h6>
                                    <div class="input-group">
                                        <input type='text' class="form-control pickatime-closeuser-action" placeholder="Close on user Action" />
                                        <div class="input-group-append">
                                            <span class="input-group-text">
                                                <span class="ti-alarm-clock"></span>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Picker Events</label>
                                    <h6 class="card-subtitle">To use add just <code>pickatime-events</code> and to verify open console.</h6>
                                    <div class="input-group">
                                        <input type='text' class="form-control pickatime-events" placeholder="Open console to verify events" />
                                        <div class="input-group-append">
                                            <span class="input-group-text">
                                                <span class="ti-alarm-clock"></span>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Row -->
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
    <script src="../assets/libs/pickadate/lib/compressed/picker.js"></script>
    <script src="../assets/libs/pickadate/lib/compressed/picker.date.js"></script>
    <script src="../assets/libs/pickadate/lib/compressed/picker.time.js"></script>
    <script src="../assets/libs/pickadate/lib/compressed/legacy.js"></script>
    <script src="../assets/libs/moment/moment.js"></script>
    <script src="../assets/libs/daterangepicker/daterangepicker.js"></script>
    <script src="../dist/js/pages/forms/datetimepicker/datetimepicker.init.js"></script>

    <script>
    </script>

</body>

</html>