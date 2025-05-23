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
                        <h4 class="page-title">Form Actions</h4>
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
                    <div class="col-sm-12 col-lg-6">
                        <div class="card">
                            <form>
                                <div class="card-body">
                                    <h4 class="card-title">Project Assigning</h4>
                                    <div class="alert alert-info alert-dismissible fade show" role="alert">
                                        <span class="badge badge-info"><i class="fas fa-info"></i></span>
                                        <strong> Form Action at begining of the form.</strong>
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <h6 class="card-subtitle">To use add form actions on top of the form add a div with <code>.action-form</code> class to begining the form.</h6>
                                    <div class="action-form">
                                        <div class="form-group m-b-0 text-left">
                                            <button type="submit" class="btn btn-info waves-effect waves-light">Save</button>
                                            <button type="submit" class="btn btn-dark waves-effect waves-light">Cancel</button>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <div class="card-body">
                                    <h4 class="card-title">Personal Info</h4>
                                    <div class="row">
                                        <div class="col-sm-12 col-md-6">
                                            <div class="form-group">
                                                <label for="inputname" class="control-label col-form-label">First Name</label>
                                                <input type="text" class="form-control" id="inputname" placeholder="First Name Here">
                                            </div>
                                        </div>
                                        <div class="col-sm-12 col-md-6">
                                            <div class="form-group">
                                                <label for="inputlname" class="control-label col-form-label">Last Name</label>
                                                <input type="text" class="form-control" id="inputlname" placeholder="Last Name Here">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-12 col-md-6">
                                            <div class="form-group">
                                                <label for="inputEmail3" class="control-label col-form-label">Email</label>
                                                <input type="email" class="form-control" id="inputEmail3" placeholder="Email Here">
                                            </div>
                                        </div>
                                        <div class="col-sm-12 col-md-6">
                                            <div class="form-group">
                                                <label for="inputcontact" class="control-label col-form-label">Contact No</label>
                                                <input type="text" class="form-control" id="inputcontact" placeholder="Contact Here">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <div class="card-body">
                                    <h4 class="card-title">Requirements</h4>
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label for="inputcom" class="control-label col-form-label">Company</label>
                                                <input type="text" class="form-control" id="inputcom" placeholder="Company Here">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-12 col-md-6">
                                            <div class="form-group">
                                                <label class="control-label col-form-label">Interested In</label>
                                                <select class="form-control">
                                                    <option>Choose Your Option</option>
                                                    <option>Desiging</option>
                                                    <option>Development</option>
                                                    <option>Videography</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-sm-12 col-md-6">
                                            <div class="form-group">
                                                <label class="control-label col-form-label">Budget</label>
                                                <select class="form-control">
                                                    <option>Choose Your Option</option>
                                                    <option>Less then $5000</option>
                                                    <option>$5000 - $10000</option>
                                                    <option>$10000 - $20000</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label class="control-label col-form-label">Select File</label>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text">Upload</span>
                                                    </div>
                                                    <div class="custom-file">
                                                        <input type="file" class="custom-file-input" id="inputGroupFile01">
                                                        <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label class="control-label col-form-label">About Project</label>
                                                <textarea class="form-control" aria-label="With textarea" placeholder="About Project Here"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-sm-12 col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Employee Profile</h4>
                                <div class="alert alert-info alert-dismissible fade show" role="alert">
                                    <span class="badge badge-info"><i class="fas fa-info"></i></span>
                                    <strong> Form Action at ending of the form.</strong>
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <h6 class="card-subtitle">To use add form actions on top of the form add a div with <code>.action-form</code> class to ending the form.</h6>
                                <h4 class="card-title">About Employee</h4>
                            </div>
                            <hr>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-12 col-md-6">
                                        <div class="form-group">
                                            <label for="inputfname" class="control-label col-form-label">First Name</label>
                                            <input type="text" class="form-control" id="inputfname" placeholder="First Name Here">
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-6">
                                        <div class="form-group">
                                            <label for="inputlname2" class="control-label col-form-label">Last Name</label>
                                            <input type="text" class="form-control" id="inputlname2" placeholder="Last Name Here">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12 col-md-6">
                                        <div class="form-group">
                                            <label for="uname" class="control-label col-form-label">Username</label>
                                            <input type="email" class="form-control" id="uname" placeholder="Username Here">
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-6">
                                        <div class="form-group">
                                            <label for="nname" class="control-label col-form-label">Nick Name</label>
                                            <input type="text" class="form-control" id="nname" placeholder="Nick Name Here">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <div class="card-body">
                                <h4 class="card-title">Contact Info &amp; Bio</h4>
                                <div class="row">
                                    <div class="col-sm-12 col-md-6">
                                        <div class="form-group">
                                            <label for="email1" class="control-label col-form-label">Email</label>
                                            <input type="email" class="form-control" id="email1" placeholder="Email Here">
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-6">
                                        <div class="form-group">
                                            <label for="wen1" class="control-label col-form-label">Website</label>
                                            <input type="text" class="form-control" id="wen1" placeholder="http://">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label for="cono" class="control-label col-form-label">Contact No</label>
                                            <input type="text" class="form-control" id="cono" placeholder="Contact No Here">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label class="control-label col-form-label">Bio</label>
                                            <textarea class="form-control" aria-label="With textarea" placeholder="Bio Here"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <div class="card-body">
                                <div class="action-form">
                                    <div class="form-group m-b-0 text-right">
                                        <button type="submit" class="btn btn-info waves-effect waves-light">Save</button>
                                        <button type="submit" class="btn btn-dark waves-effect waves-light">Cancel</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End row -->
                <!-- row -->
                <div class="row">
                    <div class="col-sm-12 col-lg-6">
                        <div class="card">
                            <form>
                                <div class="card-body">
                                    <div class="d-flex no-block align-items-center">
                                        <h4 class="card-title">Donation</h4>
                                        <div class="ml-auto">
                                            <input type="text" class="form-control" id="text1" placeholder="Search">
                                        </div>
                                    </div>
                                    <div class="alert alert-info alert-dismissible fade show m-t-25" role="alert">
                                        <span class="badge badge-info"><i class="fas fa-info"></i></span>
                                        <strong>Form Action at center align of the form</strong>
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <h6 class="card-subtitle">To use add form actions on top of the form add a div with <code>.action-form</code> class to the ending of the form. To set a side of the button use <code>.text-center</code> as per requirement.</h6>
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label for="fname1" class="control-label col-form-label">Full Name</label>
                                                <input type="text" class="form-control" id="fname1" placeholder="Full Name Here">
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group">
                                                <div class="form-group">
                                                    <label for="email2" class="control-label col-form-label">Email</label>
                                                    <input type="email" class="form-control" id="email2" placeholder="Email Here">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group">
                                                <div class="form-group">
                                                    <label for="cono1" class="control-label col-form-label">Contact No</label>
                                                    <input type="text" class="form-control" id="cono1" placeholder="Contact no Here">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label for="donate1" class="control-label col-form-label">Donation Type</label>
                                                <input type="text" class="form-control" id="donate1" placeholder="Donation Type Here">
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group">
                                                <div class="form-group">
                                                    <label class="control-label col-form-label">Amount</label>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text">$</span>
                                                        </div>
                                                        <input type="text" class="form-control" placeholder="Amount" aria-label="Amount (to the nearest dollar)">
                                                        <div class="input-group-append">
                                                            <span class="input-group-text">.00</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label class="control-label col-form-label">Comments</label>
                                                <textarea class="form-control" id="exampleTextarea1" rows="2" placeholder="Comments Here"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <div class="card-body">
                                    <div class="action-form">
                                        <div class="form-group m-b-0 text-center">
                                            <button type="submit" class="btn btn-info waves-effect waves-light">Save</button>
                                            <button type="submit" class="btn btn-dark waves-effect waves-light">Cancel</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-sm-12 col-lg-6">
                        <div class="card">
                            <form>
                                <div class="card-body">
                                    <div class="d-flex no-block align-items-center">
                                        <h4 class="card-title">Complaint Form</h4>
                                        <div class="ml-auto">
                                            <div class="btn-group">
                                                <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    Action
                                                </button>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item" href="javascript:void(0)">Action</a>
                                                    <a class="dropdown-item" href="javascript:void(0)">Another action</a>
                                                    <a class="dropdown-item" href="javascript:void(0)">Something else here</a>
                                                    <div class="dropdown-divider"></div>
                                                    <a class="dropdown-item" href="javascript:void(0)">Separated link</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="alert alert-info alert-dismissible fade show m-t-25" role="alert">
                                        <span class="badge badge-info"><i class="fas fa-info"></i></span>
                                        <strong> Form Action at center align of the form.</strong>
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <h6 class="card-subtitle">To use add form actions on top of the form add a div with <code>.action-form</code> class to the ending of the form. To set a side of the button use <code>.text-center</code> as per requirement.</h6>
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label for="com1" class="control-label col-form-label">Company</label>
                                                <input type="text" class="form-control" id="com1" placeholder="Company Name Here">
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label for="emp1" class="control-label col-form-label">Employee</label>
                                                <input type="text" class="form-control" id="emp1" placeholder="Employee Name Here">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label for="datec" class="control-label col-form-label">Date of Complaint</label>
                                                <input type="date" class="form-control" id="datec">
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label for="suname" class="control-label col-form-label">Supervisor's Name</label>
                                                <input type="text" class="form-control" id="suname" placeholder="Supervisor's Name Here">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label class="control-label col-form-label">Complaint</label>
                                                <textarea class="form-control" id="exampleTextarea2" rows="2" placeholder="Complaint Here"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label for="sign" class="control-label col-form-label">Signature</label>
                                                <input type="text" class="form-control" id="sign" placeholder="Signature Here">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <div class="card-body">
                                    <div class="action-form">
                                        <div class="form-group m-b-0 text-center">
                                            <button type="submit" class="btn btn-info waves-effect waves-light">Save</button>
                                            <button type="submit" class="btn btn-dark waves-effect waves-light">Cancel</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- end row -->
                <!-- row -->
                <div class="row">
                    <div class="col-sm-12 col-lg-6">
                        <div class="card">
                            <form>
                                <div class="card-body">
                                    <h4 class="card-title">Employee Timing</h4>
                                    <div class="alert alert-info alert-dismissible fade show" role="alert">
                                        <span class="badge badge-info"><i class="fas fa-info"></i></span>
                                        <strong> Form Action at begining and ending of the form.</strong>
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <h6 class="card-subtitle">To use add form actions on top of the form add a div with <code>.action-form</code> class to begining and ending of the form. To set a side of the button use <code>.text-left</code> or <code>.text-left</code> as per requirement.</h6>
                                    <div class="action-form">
                                        <div class="form-group m-b-0 text-left">
                                            <button type="submit" class="btn btn-info waves-effect waves-light">Save</button>
                                            <button type="submit" class="btn btn-dark waves-effect waves-light">Cancel</button>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-12">
                                            <label for="inputEmail3" class="control-label col-form-label">Employee Name</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="basic-addon1"><i class="far fa-user"></i></span>
                                                </div>
                                                <input type="text" class="form-control" placeholder="Employee Name here" aria-label="Username" aria-describedby="basic-addon1">
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label for="inputEmail3" class="control-label col-form-label">Project Name</label>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text" id="basic-addon11"><i class="fas fa-briefcase"></i></span>
                                                    </div>
                                                    <input type="text" class="form-control" placeholder="Project Name here" aria-label="Username" aria-describedby="basic-addon1">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label for="inputEmail3" class="control-label col-form-label">Date</label>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text" id="basic-addon13"><i class="fas fa-comments"></i></span>
                                                    </div>
                                                    <input type="date" class="form-control" aria-label="Username" aria-describedby="basic-addon1">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <label for="inputEmail3" class="control-label col-form-label">Rate Per Hour</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">$</span>
                                                </div>
                                                <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
                                                <div class="input-group-append">
                                                    <span class="input-group-text">.00</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-12 col-md-6">
                                            <div class="form-group">
                                                <label for="inputEmail3" class="control-label col-form-label">Start Time</label>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text" id="basic-addon14"><i class="far fa-clock"></i></span>
                                                    </div>
                                                    <input type="time" class="form-control" aria-label="Username" aria-describedby="basic-addon1">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-12 col-md-6">
                                            <div class="form-group">
                                                <label for="inputEmail3" class="control-label col-form-label">End Time</label>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text" id="basic-addon18"><i class="far fa-clock"></i></span>
                                                    </div>
                                                    <input type="time" class="form-control" aria-label="Username">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label for="inputEmail3" class="control-label col-form-label">Notes</label>
                                                <textarea class="form-control" id="exampleTextarea10" rows="3" placeholder="Notes Here"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <div class="card-body">
                                    <div class="action-form">
                                        <div class="form-group m-b-0 text-left">
                                            <button type="submit" class="btn btn-info waves-effect waves-light">Save</button>
                                            <button type="submit" class="btn btn-dark waves-effect waves-light">Cancel</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-sm-12 col-lg-6">
                        <div class="card">
                            <form>
                                <div class="card-body">
                                    <h4 class="card-title">Issue Tracking</h4>
                                    <div class="alert alert-info alert-dismissible fade show" role="alert">
                                        <span class="badge badge-info"><i class="fas fa-info"></i></span>
                                        <strong> Form Action at begining and ending of the form.</strong>
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <h6 class="card-subtitle">To use add form actions on top of the form add a div with <code>.action-form</code> class to begining and ending of the form. To set a side of the button use <code>.text-right</code> or <code>.text-left</code> as per requirement.</h6>
                                    <div class="action-form">
                                        <div class="form-group m-b-0 text-right">
                                            <button type="submit" class="btn btn-info waves-effect waves-light">Save</button>
                                            <button type="submit" class="btn btn-dark waves-effect waves-light">Cancel</button>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label for="isst" class="control-label col-form-label">Issue Title</label>
                                                <input type="text" class="form-control" id="isst" placeholder="Issue title Here">
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label for="open" class="control-label col-form-label">Opened By</label>
                                                <input type="text" class="form-control" id="open" placeholder="Opened by Here">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-12 col-md-6">
                                            <div class="form-group">
                                                <label for="dateopen" class="control-label col-form-label">Date Opened</label>
                                                <input type="date" class="form-control" id="dateopen">
                                            </div>
                                        </div>
                                        <div class="col-sm-12 col-md-6">
                                            <div class="form-group">
                                                <label for="datefixe" class="control-label col-form-label">Date Fixed</label>
                                                <input type="date" class="form-control" id="datefixe">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label class="control-label col-form-label">Priority</label>
                                                <select class="form-control">
                                                    <option>Low</option>
                                                    <option>Medium</option>
                                                    <option>High</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label class="control-label col-form-label">Status</label>
                                                <select class="form-control">
                                                    <option>Started</option>
                                                    <option>Not Started</option>
                                                    <option>Fixed</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label class="control-label col-form-label">Comments</label>
                                                <textarea class="form-control" id="exampleTextarea20" rows="2" placeholder="Comments Here"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <div class="card-body">
                                    <div class="action-form">
                                        <div class="form-group m-b-0 text-right">
                                            <button type="submit" class="btn btn-info waves-effect waves-light">Save</button>
                                            <button type="submit" class="btn btn-dark waves-effect waves-light">Cancel</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- end row -->
                <!-- row -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <form>
                                <div class="card-body">
                                    <h4 class="card-title">Event Registration</h4>
                                    <div class="alert alert-info alert-dismissible fade show m-t-25" role="alert">
                                        <span class="badge badge-info"><i class="fas fa-info"></i></span>
                                        <strong>Form Action at mulitple space top,bottom and left,right.</strong>
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <h6 class="card-subtitle">To use add class <code>.action-form</code> at which side you want to add buttons.</h6>
                                    <div class="d-flex no-block align-items-center">
                                        <div class="action-form">
                                            <div class="form-group m-b-0 text-center">
                                                <button type="submit" class="btn btn-info waves-effect waves-light">Save</button>
                                                <button type="submit" class="btn btn-dark waves-effect waves-light">Cancel</button>
                                            </div>
                                        </div>
                                        <div class="ml-auto">
                                            <div class="btn-group">
                                                <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <i class="fas fa-download"></i> Import
                                                </button>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item" href="javascript:void(0)">Action</a>
                                                    <a class="dropdown-item" href="javascript:void(0)">Another action</a>
                                                    <a class="dropdown-item" href="javascript:void(0)">Something else here</a>
                                                    <div class="dropdown-divider"></div>
                                                    <a class="dropdown-item" href="javascript:void(0)">Separated link</a>
                                                </div>
                                            </div>
                                            <div class="btn-group">
                                                <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <i class="fas fa-sign-in-alt"></i> Export
                                                </button>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item" href="javascript:void(0)">Action</a>
                                                    <a class="dropdown-item" href="javascript:void(0)">Another action</a>
                                                    <a class="dropdown-item" href="javascript:void(0)">Something else here</a>
                                                    <div class="dropdown-divider"></div>
                                                    <a class="dropdown-item" href="javascript:void(0)">Separated link</a>
                                                </div>
                                            </div>
                                            <div class="btn-group">
                                                <button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <i class="fas fa-upload"></i> Upload
                                                </button>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item" href="javascript:void(0)">Action</a>
                                                    <a class="dropdown-item" href="javascript:void(0)">Another action</a>
                                                    <a class="dropdown-item" href="javascript:void(0)">Something else here</a>
                                                    <div class="dropdown-divider"></div>
                                                    <a class="dropdown-item" href="javascript:void(0)">Separated link</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <div class="card-body">
                                    <div class="row m-auto">
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label for="fname3" class="control-label col-form-label">Full Name</label>
                                                <input type="text" class="form-control" id="fname3" placeholder="Full Name Here">
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label for="title2" class="control-label col-form-label">Title</label>
                                                <input type="text" class="form-control" id="title2" placeholder="Title Here">
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label for="comname1" class="control-label col-form-label">Company Name</label>
                                                <input type="text" class="form-control" id="comname1" placeholder="Company Name Here">
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group">
                                                <div class="form-group">
                                                    <label for="email4" class="control-label col-form-label">Email</label>
                                                    <input type="email" class="form-control" id="email4" placeholder="Email Here">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group">
                                                <div class="form-group">
                                                    <label for="conno2" class="control-label col-form-label">Contact No</label>
                                                    <input type="text" class="form-control" id="conno2" placeholder="Contact no Here">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label class="control-label col-form-label">Existing Customer</label>
                                                <div class="form-check">
                                                    <div class="custom-control custom-radio">
                                                        <input type="radio" class="custom-control-input" id="customControlValidation2" name="radio-stacked">
                                                        <label class="custom-control-label" for="customControlValidation2">Yes</label>
                                                    </div>
                                                </div>
                                                <div class="form-check">
                                                    <div class="custom-control custom-radio">
                                                        <input type="radio" class="custom-control-input" id="customControlValidation3" name="radio-stacked">
                                                        <label class="custom-control-label" for="customControlValidation3">No</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <div class="card-body">
                                    <div class="d-flex no-block align-items-center">
                                        <div class="action-form">
                                            <div class="form-group m-b-0 text-center">
                                                <button type="submit" class="btn btn-info waves-effect waves-light">Save</button>
                                                <button type="submit" class="btn btn-dark waves-effect waves-light">Cancel</button>
                                            </div>
                                        </div>
                                        <div class="ml-auto">
                                            <div class="btn-group">
                                                <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <i class="fas fa-download"></i> Import
                                                </button>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item" href="javascript:void(0)">Action</a>
                                                    <a class="dropdown-item" href="javascript:void(0)">Another action</a>
                                                    <a class="dropdown-item" href="javascript:void(0)">Something else here</a>
                                                    <div class="dropdown-divider"></div>
                                                    <a class="dropdown-item" href="javascript:void(0)">Separated link</a>
                                                </div>
                                            </div>
                                            <div class="btn-group">
                                                <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <i class="fas fa-sign-in-alt"></i> Export
                                                </button>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item" href="javascript:void(0)">Action</a>
                                                    <a class="dropdown-item" href="javascript:void(0)">Another action</a>
                                                    <a class="dropdown-item" href="javascript:void(0)">Something else here</a>
                                                    <div class="dropdown-divider"></div>
                                                    <a class="dropdown-item" href="javascript:void(0)">Separated link</a>
                                                </div>
                                            </div>
                                            <div class="btn-group">
                                                <button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <i class="fas fa-upload"></i> Upload
                                                </button>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item" href="javascript:void(0)">Action</a>
                                                    <a class="dropdown-item" href="javascript:void(0)">Another action</a>
                                                    <a class="dropdown-item" href="javascript:void(0)">Something else here</a>
                                                    <div class="dropdown-divider"></div>
                                                    <a class="dropdown-item" href="javascript:void(0)">Separated link</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
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


</body>

</html>