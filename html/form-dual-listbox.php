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
    <link rel="stylesheet" type="text/css" href="../assets/libs/bootstrap-duallistbox/dist/bootstrap-duallistbox.min.css">
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
                        <h4 class="page-title">Form Dual Listbox</h4>
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
                                <h4 class="card-title">Basic Dual ListBox</h4>
                                <select multiple="multiple" size="10" class="duallistbox">
                                    <option value="1">Amsterdam</option>
                                    <option value="2">Antwerp</option>
                                    <option value="3" selected="selected">Athens</option>
                                    <option value="4">Barcelona</option>
                                    <option value="5">Berlin</option>
                                    <option value="6" selected="selected">Birmingham</option>
                                    <option value="7">Bradford</option>
                                    <option value="8">Bremen</option>
                                    <option value="9">Brussels</option>
                                    <option value="10" selected="selected">Bucharest</option>
                                    <option value="11">Budapest</option>
                                    <option value="12" selected="selected">Cologne</option>
                                    <option value="13" selected="selected">Copenhagen</option>
                                    <option value="14">Dortmund</option>
                                    <option value="15">Dresden</option>
                                    <option value="16" selected="selected">Dublin</option>
                                    <option value="17">Düsseldorf</option>
                                    <option value="18" selected="selected">Essen</option>
                                    <option value="19">Frankfurt</option>
                                    <option value="20">Genoa</option>
                                </select>
                                <p class="mt-1">Add <code>.duallistbox</code> class for basic dual listbox.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Dual ListBox Without Filter</h4>
                                <select multiple="multiple" size="10" class="duallistbox-no-filter">
                                    <option value="1">Amsterdam</option>
                                    <option value="2">Antwerp</option>
                                    <option value="3" selected="selected">Athens</option>
                                    <option value="4">Barcelona</option>
                                    <option value="5">Berlin</option>
                                    <option value="6" selected="selected">Birmingham</option>
                                    <option value="7">Bradford</option>
                                    <option value="8">Bremen</option>
                                    <option value="9">Brussels</option>
                                    <option value="10" selected="selected">Bucharest</option>
                                    <option value="11">Budapest</option>
                                    <option value="12" selected="selected">Cologne</option>
                                    <option value="13" selected="selected">Copenhagen</option>
                                    <option value="14">Dortmund</option>
                                    <option value="15">Dresden</option>
                                    <option value="16" selected="selected">Dublin</option>
                                    <option value="17">Düsseldorf</option>
                                    <option value="18" selected="selected">Essen</option>
                                    <option value="19">Frankfurt</option>
                                    <option value="20">Genoa</option>
                                </select>
                                <p class="mt-1">Add <code>.duallistbox-no-filter</code> class without filter dual listbox.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Dual ListBox with Filter Options</h4>
                                <select multiple="multiple" size="10" class="duallistbox-with-filter">
                                    <option value="1">Amsterdam</option>
                                    <option value="2">Antwerp</option>
                                    <option value="3" selected="selected">Athens</option>
                                    <option value="4">Barcelona</option>
                                    <option value="5">Berlin</option>
                                    <option value="6" selected="selected">Birmingham</option>
                                    <option value="7">Bradford</option>
                                    <option value="8">Bremen</option>
                                    <option value="9">Brussels</option>
                                    <option value="10" selected="selected">Bucharest</option>
                                    <option value="11">Budapest</option>
                                    <option value="12" selected="selected">Cologne</option>
                                    <option value="13" selected="selected">Copenhagen</option>
                                    <option value="14">Dortmund</option>
                                    <option value="15">Dresden</option>
                                    <option value="16" selected="selected">Dublin</option>
                                    <option value="17">Düsseldorf</option>
                                    <option value="18" selected="selected">Essen</option>
                                    <option value="19">Frankfurt</option>
                                    <option value="20">Genoa</option>
                                </select>
                                <p class="mt-1">Add <code>.duallistbox-with-filter</code> class for basic dual listbox.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Dual ListBox with multiple selection</h4>
                                <select multiple="multiple" size="10" class="duallistbox-multi-selection">
                                    <option value="1">Amsterdam</option>
                                    <option value="2">Antwerp</option>
                                    <option value="3" selected="selected">Athens</option>
                                    <option value="4">Barcelona</option>
                                    <option value="5">Berlin</option>
                                    <option value="6" selected="selected">Birmingham</option>
                                    <option value="7">Bradford</option>
                                    <option value="8">Bremen</option>
                                    <option value="9">Brussels</option>
                                    <option value="10" selected="selected">Bucharest</option>
                                    <option value="11">Budapest</option>
                                    <option value="12" selected="selected">Cologne</option>
                                    <option value="13" selected="selected">Copenhagen</option>
                                    <option value="14">Dortmund</option>
                                    <option value="15">Dresden</option>
                                    <option value="16" selected="selected">Dublin</option>
                                    <option value="17">Düsseldorf</option>
                                    <option value="18" selected="selected">Essen</option>
                                    <option value="19">Frankfurt</option>
                                    <option value="20">Genoa</option>
                                </select>
                                <p class="mt-1">Add <code>.duallistbox-multi-selection</code> class for Dual ListBox with Multiple Selection</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Dual ListBox with Filter Text Options</h4>
                                <select multiple="multiple" size="10" class="duallistbox-custom-text">
                                    <option value="option1">Option 1</option>
                                    <option value="option2" selected="selected">Option 2</option>
                                    <option value="option3" selected="selected">Option 3</option>
                                    <option value="option4">Option 4</option>
                                    <option value="option5">Option 5</option>
                                    <option value="option6" selected="selected">Option 6</option>
                                    <option value="option7" selected="selected">Option 7</option>
                                    <option value="option8">Option 8</option>
                                    <option value="option9">Option 9</option>
                                    <option value="option0">Option 10</option>
                                </select>
                                <p class="mt-1"> All the listbox labels and placeholders are fully editable through specified options, Like: <code>filterTextClear, filterPlaceHolder, infoText, infoTextFiltered, infoTextEmpty</code>. You can use custom language also.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Dual ListBox with Minimal Height</h4>
                                <select multiple="multiple" size="10" class="duallistbox-custom-height">
                                    <option value="1">Amsterdam</option>
                                    <option value="2">Antwerp</option>
                                    <option value="3" selected="selected">Athens</option>
                                    <option value="4">Barcelona</option>
                                    <option value="5">Berlin</option>
                                    <option value="6" selected="selected">Birmingham</option>
                                    <option value="7">Bradford</option>
                                    <option value="8">Bremen</option>
                                    <option value="9">Brussels</option>
                                    <option value="10" selected="selected">Bucharest</option>
                                    <option value="11">Budapest</option>
                                    <option value="12" selected="selected">Cologne</option>
                                    <option value="13" selected="selected">Copenhagen</option>
                                    <option value="14">Dortmund</option>
                                    <option value="15">Dresden</option>
                                    <option value="16" selected="selected">Dublin</option>
                                    <option value="17">Düsseldorf</option>
                                    <option value="18" selected="selected">Essen</option>
                                    <option value="19">Frankfurt</option>
                                    <option value="20">Genoa</option>
                                </select>
                                <p class="mt-1">Use <code>selectorMinimalHeight</code> setting option to set dual listbox custom height.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Add Custom Options to Dual ListBox</h4>
                                <select multiple="multiple" size="10" class="duallistbox-dynamic">
                                    <option value="1">Amsterdam</option>
                                    <option value="2">Antwerp</option>
                                    <option value="3" selected="selected">Athens</option>
                                    <option value="4">Barcelona</option>
                                    <option value="5">Berlin</option>
                                    <option value="6" selected="selected">Birmingham</option>
                                    <option value="7">Bradford</option>
                                    <option value="8">Bremen</option>
                                    <option value="9">Brussels</option>
                                    <option value="10" selected="selected">Bucharest</option>
                                    <option value="11">Budapest</option>
                                    <option value="12" selected="selected">Cologne</option>
                                    <option value="13" selected="selected">Copenhagen</option>
                                    <option value="14">Dortmund</option>
                                    <option value="15">Dresden</option>
                                    <option value="16" selected="selected">Dublin</option>
                                    <option value="17">Düsseldorf</option>
                                    <option value="18" selected="selected">Essen</option>
                                    <option value="19">Frankfurt</option>
                                    <option value="20">Genoa</option>
                                    <option value="21">Glasgow</option>
                                    <option value="22">Gothenburg</option>
                                    <option value="23" selected="selected">Hamburg</option>
                                    <option value="24">Hannover</option>
                                    <option value="25">Helsinki</option>
                                </select>
                                <div class="buttons block m-t-20">
                                    <button type="button" class="btn btn-info duallistbox-add">Add options</button>
                                    <button type="button" class="btn btn-info duallistbox-add-clear">Add with clearing highlights</button>
                                </div>
                                <p class="mt-1"> Add an option to the Listbox Using <code>Add Options</code> button. Add an option and also clearing highlights of listbox option using <code>Add with clearing highlight</code> button</p>
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
    <script src="../assets/libs/bootstrap-duallistbox/dist/jquery.bootstrap-duallistbox.min.js"></script>
    <script src="../dist/js/pages/forms/dual-listbox/dual-listbox.js"></script>


</body>

</html>