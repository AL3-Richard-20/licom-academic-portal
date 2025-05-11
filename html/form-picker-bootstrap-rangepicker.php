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
        <link rel="stylesheet" type="text/css" href="../assets/libs/daterangepicker/daterangepicker.css">


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
                        <h4 class="page-title">Form Bootstrap Rangepicker</h4>
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
                                <!-- Default Daterange Picker -->
                                <h4 class="card-title">Default Daterange Picker</h4>
                                <h6 class="card-subtitle">These rangepicker is used for when you want to choose start date to end date.</h6>
                                <div class='input-group mb-3'>
                                    <input type='text' class="form-control daterange" />
                                    <div class="input-group-append">
                                        <span class="input-group-text">
                                            <span class="ti-calendar"></span>
                                        </span>
                                    </div>
                                </div>
                                <!-- Date And Time -->
                                <h4 class="card-title m-t-30">Date and Time</h4>
                                <h6 class="card-subtitle">These picker is used for when you want to choose start date to end date with particuler time for both start date and end date.</h6>
                                <div class='input-group mb-3'>
                                    <input type='text' class="form-control datetime" />
                                    <div class="input-group-append">
                                        <span class="input-group-text">
                                            <span class="ti-calendar"></span>
                                        </span>
                                    </div>
                                </div>
                                <!-- 24 hour Time Picker with Seconds -->
                                <h4 class="card-title m-t-30">Seconds with 24 hour Time</h4>
                                <h6 class="card-subtitle">These picker is used for when you want to choose start date to end date with particuler time for both start date and end date and to choose specific second from 24 hours.</h6>
                                <div class='input-group mb-3'>
                                    <input type='text' class="form-control timeseconds" />
                                    <div class="input-group-append">
                                        <span class="input-group-text">
                                            <span class="ti-calendar"></span>
                                        </span>
                                    </div>
                                </div>
                                <!-- Separate Date Picker -->
                                <h4 class="card-title m-t-30">Separate Date Picker</h4>
                                <h6 class="card-subtitle">In these picker, there is separate dropdown for select direct month and also select year so you can easily move to particuler date.</h6>
                                <div class='input-group mb-3'>
                                    <input type='text' class="form-control singledate" />
                                    <div class="input-group-append">
                                        <span class="input-group-text">
                                            <span class="ti-calendar"></span>
                                        </span>
                                    </div>
                                </div>
                                <!-- Auto Apply Date Range -->
                                <h4 class="card-title m-t-30">Auto Apply Date Range</h4>
                                <h6 class="card-subtitle">In these picker,automatically apply a new date range as soon as two dates or a predefined range is selected.</h6>
                                <div class='input-group mb-3'>
                                    <input type='text' class="form-control autoapply" />
                                    <div class="input-group-append">
                                        <span class="input-group-text">
                                            <span class="ti-calendar"></span>
                                        </span>
                                    </div>
                                </div>
                                <!-- Not Connected Calendars -->
                                <h4 class="card-title m-t-30">Not Connected Calenders</h4>
                                <h6 class="card-subtitle">In these picker,both calender are not linked with each other.When both calender will disabled, the two calendars can be individually advanced and display any month/year.</h6>
                                <div class='input-group mb-3'>
                                    <input type='text' class="form-control linkedCalendars" />
                                    <div class="input-group-append">
                                        <span class="input-group-text">
                                            <span class="ti-calendar"></span>
                                        </span>
                                    </div>
                                </div>
                                <!-- Date Limitation -->
                                <h4 class="card-title m-t-30">Limit on Date</h4>
                                <h6 class="card-subtitle">In these picker,maximum timespan between deadline dates.</h6>
                                <div class='input-group mb-3'>
                                    <input type='text' class="form-control dateLimit" />
                                    <div class="input-group-append">
                                        <span class="input-group-text">
                                            <span class="ti-calendar"></span>
                                        </span>
                                    </div>
                                </div>
                                <!-- With Dropdown -->
                                <h4 class="card-title m-t-30">With Dropdown</h4>
                                <h6 class="card-subtitle">In these picker,there is separate dropdown for select direct month and also select year so you can easily move to particuler date.</h6>
                                <div class='input-group mb-3'>
                                    <input type='text' class="form-control showdropdowns" />
                                    <div class="input-group-append">
                                        <span class="input-group-text">
                                            <span class="ti-calendar"></span>
                                        </span>
                                    </div>
                                </div>
                                <!-- With Week Numbers -->
                                <h4 class="card-title m-t-30">With Week Numbers</h4>
                                <h6 class="card-subtitle">In these picker,there is separate week numbers from start date to end date.</h6>
                                <div class='input-group mb-3'>
                                    <input type='text' class="form-control showweeknumbers" />
                                    <div class="input-group-append">
                                        <span class="input-group-text">
                                            <span class="ti-calendar"></span>
                                        </span>
                                    </div>
                                </div>
                                <!-- Predefined Ranges -->
                                <h4 class="card-title m-t-30">Predefined Ranges</h4>
                                <h6 class="card-subtitle">In these picker,there is separate options like select today's date,last 7 days,last 30 days, this month, last month and custom range select as per your requirement.</h6>
                                <div class='input-group mb-3'>
                                    <input type='text' class="form-control dateranges" />
                                    <div class="input-group-append">
                                        <span class="input-group-text">
                                            <span class="ti-calendar"></span>
                                        </span>
                                    </div>
                                </div>
                                <!-- With All Show Calendar -->
                                <h4 class="card-title m-t-30">With All Show Calendar</h4>
                                <h6 class="card-subtitle">In these picker,with all above options which are mention in predefined ranges- show the calendar.</h6>
                                <div class='input-group mb-3'>
                                    <input type='text' class="form-control shawCalRanges" />
                                    <div class="input-group-append">
                                        <span class="input-group-text">
                                            <span class="ti-calendar"></span>
                                        </span>
                                    </div>
                                </div>
                                <!-- Language Localization -->
                                <h4 class="card-title m-t-30">Language Localization</h4>
                                <h6 class="card-subtitle">In these picker,change he language of calendar.</h6>
                                <div class='input-group mb-3'>
                                    <input type='text' class="form-control localeRange" />
                                    <div class="input-group-append">
                                        <span class="input-group-text">
                                            <span class="ti-calendar"></span>
                                        </span>
                                    </div>
                                </div>
                                <!-- Open Picker on top -->
                                <h4 class="card-title m-t-30">Open Picker on top</h4>
                                <h6 class="card-subtitle">In these picker,calendar will open on top of the form-control.</h6>
                                <div class='input-group mb-3'>
                                    <input type='text' class="form-control drops" />
                                    <div class="input-group-append">
                                        <span class="input-group-text">
                                            <span class="ti-calendar"></span>
                                        </span>
                                    </div>
                                </div>
                                <!-- Custom Button Options -->
                                <h4 class="card-title m-t-30">Custom Button Options</h4>
                                <h6 class="card-subtitle">In these picker,you can add your button options or style.</h6>
                                <div class='input-group mb-3'>
                                    <input type='text' class="form-control buttonClass" />
                                    <div class="input-group-append">
                                        <span class="input-group-text">
                                            <span class="ti-calendar"></span>
                                        </span>
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
    <script src="../assets/libs/moment/moment.js"></script>
    <script src="../assets/libs/daterangepicker/daterangepicker.js"></script>


    <script>

        /*******************************************/
        // Basic Date Range Picker
        /*******************************************/
        $('.daterange').daterangepicker();

        /*******************************************/
        // Date & Time
        /*******************************************/
        $('.datetime').daterangepicker({
            timePicker: true,
            timePickerIncrement: 30,
            locale: {
                format: 'MM/DD/YYYY h:mm A'
            }
        });

        /*******************************************/
        //Calendars are not linked
        /*******************************************/
        $('.timeseconds').daterangepicker({
            timePicker: true,
            timePickerIncrement: 30,
            timePicker24Hour: true,
            timePickerSeconds: true,
            locale: {
                format: 'MM-DD-YYYY h:mm:ss'
            }
        });

        /*******************************************/
        // Single Date Range Picker
        /*******************************************/
        $('.singledate').daterangepicker({
            singleDatePicker: true,
            showDropdowns: true
        });

        /*******************************************/
        // Auto Apply Date Range
        /*******************************************/
        $('.autoapply').daterangepicker({
            autoApply: true,
        });

        /*******************************************/
        // Calendars are not linked
        /*******************************************/
        $('.linkedCalendars').daterangepicker({
            linkedCalendars: false,
        });

        /*******************************************/
        // Date Limit
        /*******************************************/
        $('.dateLimit').daterangepicker({
            dateLimit: {
                days: 7
            },
        });

        /*******************************************/
        // Show Dropdowns
        /*******************************************/
        $('.showdropdowns').daterangepicker({
            showDropdowns: true,
        });

        /*******************************************/
        // Show Week Numbers
        /*******************************************/
        $('.showweeknumbers').daterangepicker({
            showWeekNumbers: true,
        });

        /*******************************************/
        // Date Ranges
        /*******************************************/
        $('.dateranges').daterangepicker({
            ranges: {
                'Today': [moment(), moment()],
                'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                'Last 7 Days': [moment().subtract(6, 'days'), moment()],
                'Last 30 Days': [moment().subtract(29, 'days'), moment()],
                'This Month': [moment().startOf('month'), moment().endOf('month')],
                'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
            }
        });

        /*******************************************/
        // Always Show Calendar on Ranges
        /*******************************************/
        $('.shawCalRanges').daterangepicker({
            ranges: {
                'Today': [moment(), moment()],
                'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                'Last 7 Days': [moment().subtract(6, 'days'), moment()],
                'Last 30 Days': [moment().subtract(29, 'days'), moment()],
                'This Month': [moment().startOf('month'), moment().endOf('month')],
                'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
            },
            alwaysShowCalendars: true,
        });

        /*******************************************/
        // Top of the form-control open alignment
        /*******************************************/
        $('.drops').daterangepicker({
            drops: "up" // up/down
        });

        /*******************************************/
        // Custom button options
        /*******************************************/
        $('.buttonClass').daterangepicker({
            drops: "up",
            buttonClasses: "btn",
            applyClass: "btn-info",
            cancelClass: "btn-danger"
        });

        /*******************************************/
        // Language
        /*******************************************/
        $('.localeRange').daterangepicker({
            ranges: {
                "Aujourd'hui": [moment(), moment()],
                'Hier': [moment().subtract('days', 1), moment().subtract('days', 1)],
                'Les 7 derniers jours': [moment().subtract('days', 6), moment()],
                'Les 30 derniers jours': [moment().subtract('days', 29), moment()],
                'Ce mois-ci': [moment().startOf('month'), moment().endOf('month')],
                'le mois dernier': [moment().subtract('month', 1).startOf('month'), moment().subtract('month', 1).endOf('month')]
            },
            locale: {
                applyLabel: "Vers l'avant",
                cancelLabel: 'Annulation',
                startLabel: 'Date initiale',
                endLabel: 'Date limite',
                customRangeLabel: 'SÃ©lectionner une date',
                // daysOfWeek: ['Dimanche', 'Lundi', 'Mardi', 'Mercredi', 'Jeudi', 'Vendredi','Samedi'],
                daysOfWeek: ['Di', 'Lu', 'Ma', 'Me', 'Je', 'Ve', 'Sa'],
                monthNames: ['Janvier', 'fÃ©vrier', 'Mars', 'Avril', 'ÐœÐ°i', 'Juin', 'Juillet', 'AoÃ»t', 'Septembre', 'Octobre', 'Novembre', 'Decembre'],
                firstDay: 1
            }
        });

    </script>

</body>

</html>