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


        <title>Title</title>


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
                        <h4 class="page-title">Form Custom Validation</h4>
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
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Validation Form</h4>
                            <form class="m-t-40" novalidate>
                                <div class="form-group">
                                    <h5>Basic Text Input <span class="text-danger">*</span></h5>
                                    <div class="controls">
                                        <input type="text" name="text" class="form-control" required data-validation-required-message="This field is required"> </div>
                                    <div class="form-control-feedback"><small>Add <code>required</code> attribute to field for required validation.</small></div>
                                </div>
                                <div class="form-group">
                                    <h5>Email Field <span class="text-danger">*</span></h5>
                                    <div class="controls">
                                        <input type="email" name="email" class="form-control" required data-validation-required-message="This field is required"> </div>
                                </div>
                                <div class="form-group">
                                    <h5>Password Input Field <span class="text-danger">*</span></h5>
                                    <div class="controls">
                                        <input type="password" name="password" class="form-control" required data-validation-required-message="This field is required"> </div>
                                </div>
                                <div class="form-group">
                                    <h5>Repeat Password Input Field <span class="text-danger">*</span></h5>
                                    <div class="controls">
                                        <input type="password" name="password2" data-validation-match-match="password" class="form-control" required> </div>
                                </div>
                                <div class="form-group">
                                    <h5>File Input Field <span class="text-danger">*</span></h5>
                                    <div class="controls">
                                        <input type="file" name="file" class="form-control" required> </div>
                                </div>
                                <div class="form-group">
                                    <h5>Input with Icon <span class="text-danger">*</span></h5>
                                    <div class="controls">
                                        <div class="input-group">
                                            <input type="text" class="form-control" placeholder="Addon To Right" data-validation-required-message="This field is required">
                                            <div class="input-group-append">
                                                <span class="input-group-text"><i class="fa fa-dollar"></i></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <h5>Maximum Character Length <span class="text-danger">*</span></h5>
                                    <div class="controls">
                                        <input type="text" name="maxChar" class="form-control" required data-validation-required-message="This field is required" maxlength="10">
                                    </div>
                                    <div class="form-control-feedback"><small>Add <code>maxlength='10'</code> attribute for maximum number of characters to accept. </small></div>
                                </div>
                                <div class="form-group">
                                    <h5>Minimum Character Length <span class="text-danger">*</span></h5>
                                    <div class="controls">
                                        <input type="text" name="minChar" class="form-control" required data-validation-required-message="This field is required" minlength="6">
                                    </div>
                                    <div class="form-control-feedback"><small>Add <code>minlength="6"</code> attribute for minimum number of characters to accept.</small></div>
                                </div>
                                <div class="form-group">
                                    <h5>Only Numbers <span class="text-danger">*</span></h5>
                                    <div class="input-group">
                                        <div class="input-group-append">
                                            <span class="input-group-text"><i class="fas fa-dollar-sign"></i></span>
                                        </div>
                                        <input type="number" name="onlyNum" class="form-control" required data-validation-required-message="This field is required">
                                        <div class="input-group-append">
                                            <span class="input-group-text">0.00</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <h5>Maximum Number <span class="text-danger">*</span></h5>
                                    <input type="text" name="maxNum" class="form-control" required data-validation-required-message="This field is required" max="25">
                                    <div class="form-control-feedback"> <small><i>Must be lower than 25</i></small> - <small>Add <code>max</code> attribute for maximum number to accept. Also use <code>data-validation-max-message</code> attribute for max failure message</small> </div>
                                </div>
                                <div class="form-group">
                                    <h5>Minimum Number <span class="text-danger">*</span></h5>
                                    <div class="controls">
                                        <input type="text" name="minNum" class="form-control" required data-validation-required-message="This field is required" min="10">
                                    </div>
                                    <div class="form-control-feedback"><small><i>Must be higher than 10</i></small> - <small>Add <code>min</code> attribute for minimum number to accept. Also use <code>data-validation-min-message</code> attribute for min failure message</small></div>
                                </div>
                                <div class="form-group">
                                    <h5>Text Input Range <span class="text-danger">*</span></h5>
                                    <div class="controls">
                                        <input type="text" name="text" class="form-control" required data-validation-required-message="This field is required" minlength="10" maxlength="20" placeholder="Enter number between 10 &amp; 20"> </div>
                                </div>
                                <div class="form-group">
                                    <h5>Input with Button <span class="text-danger">*</span></h5>
                                    <div class="controls">
                                        <div class="input-group">
                                            <input type="text" class="form-control" placeholder="Search" required> <span class="input-group-btn">
                                                  <button class="btn btn-info" type="button">Go!</button>
                                                </span> </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <h5>No Characters, Only Numbers <span class="text-danger">*</span></h5>
                                    <div class="controls">
                                        <input type="text" name="noChar" class="form-control" required data-validation-containsnumber-regex="(\d)+" data-validation-containsnumber-message="No Characters Allowed, Only Numbers"> </div>
                                </div>
                                <div class="form-group">
                                    <h5>Pattern <span class="text-danger">*</span> <small><i>Must start with 'a' and end with 'z'</i></small></h5>
                                    <div class="controls">
                                        <input type="text" name="pattern" pattern="a.*z" data-validation-pattern-message="Must start with 'a' and end with 'z'" class="form-control" required>
                                        <div class="form-control-feedback"><small>Add <code>pattern</code> attribute to set input pattern. Also use <code>data-validation-pattern-message</code> attribute for pattern failure message</small></div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <h5>Enter URL <span class="text-danger">*</span></h5>
                                    <div class="controls">
                                        <input type="text" class="form-control" placeholder="Add URL" data-validation-regex-regex="((http[s]?|ftp[s]?):\/\/)?([\da-z\.-]+)\.([a-z\.]{2,6})([\/\w \.-]*)*" data-validation-regex-message="Only Valid URL's">
                                        <div class="form-control-feedback"><small>Add <code>data-validation-regex-regex</code> attribute for regular expression. Also use <code>data-validation-regex-message</code> attribute for regex failure message</small></div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <h5>Enter Email Address <span class="text-danger">*</span></h5>
                                    <div class="controls">
                                        <input type="text" class="form-control" placeholder="Email Address" data-validation-regex-regex="([a-z0-9_\.-]+)@([\da-z\.-]+)\.([a-z\.]{2,6})" data-validation-regex-message="Enter Valid Email"> </div>
                                </div>
                                <div class="form-group">
                                    <h5>Enter Date <span class="text-danger">*</span></h5>
                                    <div class="controls">
                                        <input type="text" class="form-control" placeholder="MM/DD/YYYY" data-validation-regex-regex="([a-z0-9_\.-]+)@([\da-z\.-]+)\.([a-z\.]{2,6})" data-validation-regex-message="Enter Valid Email"> </div>
                                </div>
                                <div class="form-group">
                                    <h5>Basic Select <span class="text-danger">*</span></h5>
                                    <div class="controls">
                                        <select name="select" id="select" required class="form-control">
                                            <option value="">Select Your City</option>
                                            <option value="1">India</option>
                                            <option value="2">USA</option>
                                            <option value="3">UK</option>
                                            <option value="4">Canada</option>
                                            <option value="5">Dubai</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <h5>Textarea <span class="text-danger">*</span></h5>
                                    <div class="controls">
                                        <textarea name="textarea" id="textarea" class="form-control" required placeholder="Textarea text"></textarea>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <h5>Checkbox <span class="text-danger">*</span></h5>
                                            <div class="controls">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" required value="single" class="custom-control-input" id="customCheck1">
                                                    <label class="custom-control-label" for="customCheck1">Check this custom checkbox</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <h5>Checkbox Group <span class="text-danger">*</span></h5>
                                            <div class="controls">
                                                <fieldset>
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" value="x" name="styled_checkbox" required class="custom-control-input" id="customCheck2">
                                                        <label class="custom-control-label" for="customCheck2">I am unchecked</label>
                                                    </div>
                                                </fieldset>
                                                <fieldset>
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" value="y" name="styled_checkbox" class="custom-control-input" id="customCheck3">
                                                        <label class="custom-control-label" for="customCheck3">I am unchecked too</label>
                                                    </div>
                                                </fieldset>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <h5>Select Max 2 Checkbox<span class="text-danger">*</span></h5>
                                            <div class="controls">
                                                <fieldset>
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" name="styled_max_checkbox" data-validation-maxchecked-maxchecked="2" data-validation-maxchecked-message="Don't be greedy!" required class="custom-control-input" id="customCheck4">
                                                        <label class="custom-control-label" for="customCheck4">I am unchecked checkbox</label>
                                                    </div>
                                                </fieldset>
                                                <fieldset>
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" name="styled_max_checkbox" class="custom-control-input" id="customCheck5">
                                                        <label class="custom-control-label" for="customCheck5">I am unchecked too</label>
                                                    </div>
                                                </fieldset>
                                                <fieldset>
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" name="styled_max_checkbox" class="custom-control-input" id="customCheck6">
                                                        <label class="custom-control-label" for="customCheck6">You can check me</label>
                                                    </div>
                                                </fieldset>
                                            </div> <small>Select any 2 options</small> </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <h5>Minimum 2 Checkbox selection<span class="text-danger">*</span></h5>
                                            <div class="controls">
                                                <fieldset>
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" value="1" data-validation-minchecked-minchecked="2" data-validation-minchecked-message="Choose at least two" name="styled_min_checkbox" required class="custom-control-input" id="customCheck7">
                                                        <label class="custom-control-label" for="customCheck7">I am unchecked checkbox</label>
                                                    </div>
                                                </fieldset>
                                                <fieldset>
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" value="2" name="styled_min_checkbox" class="custom-control-input" id="customCheck8">
                                                        <label class="custom-control-label" for="customCheck8">I am unchecked checkbox too</label>
                                                    </div>
                                                </fieldset>
                                                <fieldset>
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" value="3" name="styled_min_checkbox" class="custom-control-input" id="customCheck9">
                                                        <label class="custom-control-label" for="customCheck9">You can check me</label>
                                                    </div>
                                                </fieldset>
                                            </div> <small>Select any 2 options</small> </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <h5>Radio Buttons <span class="text-danger">*</span></h5>
                                            <fieldset class="controls">
                                                <div class="custom-control custom-radio">
                                                    <input type="radio" value="1" name="styled_radio" required id="styled_radio1" class="custom-control-input">
                                                    <label class="custom-control-label" for="styled_radio1">Check me</label>
                                                </div>
                                            </fieldset>
                                            <fieldset>
                                                <div class="custom-control custom-radio">
                                                    <input type="radio" value="2" name="styled_radio" id="styled_radio2" class="custom-control-input">
                                                    <label class="custom-control-label" for="styled_radio2">or me</label>
                                                </div>
                                            </fieldset>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <h5>Inline Radio Buttons <span class="text-danger">*</span></h5>
                                            <div class="controls">
                                                <fieldset>
                                                    <div class="custom-control custom-radio">
                                                        <input type="radio" value="Yes" name="styled_inline_radio" required id="styled_radio_inline1" class="custom-control-input">
                                                        <label class="custom-control-label" for="styled_radio_inline1">Check me</label>
                                                    </div>
                                                </fieldset>
                                                <fieldset>
                                                    <div class="custom-control custom-radio">
                                                        <input type="radio" value="No" name="styled_inline_radio" id="styled_radio_inline2" class="custom-control-input">
                                                        <label class="custom-control-label" for="styled_radio_inline2">or me</label>
                                                    </div>
                                                </fieldset>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="text-xs-right">
                                    <button type="submit" class="btn btn-info">Submit</button>
                                    <button type="reset" class="btn btn-inverse">Cancel</button>
                                </div>
                            </form>
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
    <script src="../assets/extra-libs/jqbootstrapvalidation/validation.js"></script>


    <script>
        ! function(window, document, $) {
            "use strict";
            $("input,select,textarea").not("[type=submit]").jqBootstrapValidation();
        }(window, document, jQuery);
    </script>

</body>

</html>