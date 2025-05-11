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
                        <h4 class="page-title"><b>SYSTEM SETTINGS</b></h4>
                        <div class="d-flex align-items-center">

                        </div>
                    </div>
                    <div class="col-7 align-self-center">
                        <div class="d-flex no-block justify-content-end align-items-center">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item">
                                        <a href="#">Brand</a>
                                    </li>
                                    <li class="breadcrumb-item active" aria-current="page">System Settings</li>
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

                    <div class="col-md-12">

                        <div class="card">

                            <div class="card-body">


                                <!-- Nav tabs -->
                                <ul class="nav nav-tabs" role="tablist">

                                    <li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#home" role="tab" style="color:black"><span class="hidden-sm-up"></span><span class="hidden-xs-down">Theme</span></a> </li>

                                    <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#profile" role="tab" style="color:black"><span class="hidden-sm-up"></span><span class="hidden-xs-down">Background</span></a> </li>

                                    <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#messages" role="tab" style="color:black"><span class="hidden-sm-up"><span class="hidden-xs-down">Logo & Brand</span></a> </li>

                                </ul>

                                <!-- Tab panes -->
                                <div class="tab-content tabcontent-border">

                                    <div class="tab-pane active" id="home" role="tabpanel"><br>

                                        <form>

                                            <div class="bt-switch">
                                                
                                                <div class="col-sm-12">
                                                    <p>Dark Mode <input type="checkbox" id="dm" data-size="small" /></p>
                                                </div>

                                            </div>

                                            <hr style="border: 1px solid #dedede">

                                            <div class="row">

                                                <div class="col-sm-12">

                                                    <h3>Colors</h3>

                                                    <br>

                                                    <ul class="theme-color">

                                                        <p>Logo Backgrounds (Click to use)</p>

                                                        <li class="theme-item">
                                                            <a href="javascript:void(0)" class="theme-link" data-logobg="skin1" onclick="logoBG('skin1')"></a>
                                                        </li>

                                                        <li class="theme-item">
                                                            <a href="javascript:void(0)" class="theme-link" data-logobg="skin2" onclick="logoBG('skin2')"></a>
                                                        </li>

                                                        <li class="theme-item">
                                                            <a href="javascript:void(0)" class="theme-link" data-logobg="skin3" onclick="logoBG('skin3')"></a>
                                                        </li>
                                                        <li class="theme-item">
                                                            <a href="javascript:void(0)" class="theme-link" data-logobg="skin4" onclick="logoBG('skin4')"></a>
                                                        </li>

                                                        <li class="theme-item">
                                                            <a href="javascript:void(0)" class="theme-link" data-logobg="skin5" onclick="logoBG('skin5')"></a>
                                                        </li>

                                                        <li class="theme-item">
                                                            <a href="javascript:void(0)" class="theme-link" data-logobg="skin6" onclick="logoBG('skin6')"></a>
                                                        </li>

                                                    </ul>

                                                </div>

                                            </div>

                                            <hr style="border: 1px solid #dedede">

                                            <div class="row">

                                                <div class="col-sm-12">

                                                    <ul class="theme-color">

                                                        <p>Navbar Backgrounds (Click to use)</p>

                                                        <li class="theme-item">
                                                            <a href="javascript:void(0)" class="theme-link" data-navbarbg="skin1" onclick="navBG('skin1')"></a>
                                                        </li>

                                                        <li class="theme-item">
                                                            <a href="javascript:void(0)" class="theme-link" data-navbarbg="skin2" onclick="navBG('skin2')"></a>
                                                        </li>

                                                        <li class="theme-item">
                                                            <a href="javascript:void(0)" class="theme-link" data-navbarbg="skin3" onclick="navBG('skin3')"></a>
                                                        </li>

                                                        <li class="theme-item">
                                                            <a href="javascript:void(0)" class="theme-link" data-navbarbg="skin4" onclick="navBG('skin4')"></a>
                                                        </li>

                                                        <li class="theme-item">
                                                            <a href="javascript:void(0)" class="theme-link" data-navbarbg="skin5" onclick="navBG('skin5')"></a>
                                                        </li>

                                                        <li class="theme-item">
                                                            <a href="javascript:void(0)" class="theme-link" data-navbarbg="skin6" onclick="navBG('skin6')"></a>
                                                        </li>

                                                    </ul>

                                                </div>

                                            </div>

                                            <hr style="border: 1px solid #dedede">

                                            <div class="row">

                                                <div class="col-sm-12">

                                                    <ul class="theme-color">

                                                        <p>Sidebar Backgrounds (Double click to remove)</p>

                                                        <li class="theme-item">
                                                            <a href="javascript:void(0)" class="theme-link" data-sidebarbg="skin1" onclick="sbBG('skin1')"></a>
                                                        </li>

                                                        <li class="theme-item">
                                                            <a href="javascript:void(0)" class="theme-link" data-sidebarbg="skin2" onclick="sbBG('skin2')"></a>
                                                        </li>

                                                        <li class="theme-item">
                                                            <a href="javascript:void(0)" class="theme-link" data-sidebarbg="skin3" onclick="sbBG('skin3')"></a>
                                                        </li>

                                                        <li class="theme-item">
                                                            <a href="javascript:void(0)" class="theme-link" data-sidebarbg="skin4" onclick="sbBG('skin4')"></a>
                                                        </li>

                                                        <li class="theme-item">
                                                            <a href="javascript:void(0)" class="theme-link" data-sidebarbg="skin5" onclick="sbBG('skin5')"></a>
                                                        </li>

                                                        <li class="theme-item">
                                                            <a href="javascript:void(0)" class="theme-link" data-sidebarbg="skin6" onclick="sbBG('skin6')"></a>
                                                        </li>

                                                    </ul>

                                                </div>

                                            </div>

                                            <hr style="border: 1px solid #dedede">

                                            <div class="col-sm-12">

                                                <h3>Layout</h3><br>

                                                <table class="table">
                                                    
                                                    <tbody>
                                                        
                                                        <tr>
                                                            <td>Sidebar Type</td>    
                                                            <td>

                                <div class="form-check form-check-inline">
                                    <div class="custom-control custom-radio">
                                        <input type="radio" class="custom-control-input" id="fullsidebar" name="radio-stacked">
                                        <label class="custom-control-label" for="fullsidebar">Full</label>
                                    </div>
                                </div>

                                <div class="form-check form-check-inline">
                                    <div class="custom-control custom-radio">
                                        <input type="radio" class="custom-control-input" id="minisidebar" name="radio-stacked">
                                        <label class="custom-control-label" for="minisidebar">Mini-sidebar</label>
                                    </div>
                                </div>

                                <div class="form-check form-check-inline">
                                    <div class="custom-control custom-radio">
                                        <input type="radio" class="custom-control-input" id="iconbar" name="radio-stacked">
                                        <label class="custom-control-label" for="iconbar">Iconbar</label>
                                    </div>
                                </div>

                                <div class="form-check form-check-inline">
                                    <div class="custom-control custom-radio">
                                        <input type="radio" class="custom-control-input" id="overlaybar" name="radio-stacked">
                                        <label class="custom-control-label" for="overlaybar">Overlay</label>
                                    </div>
                                </div>

                                                            </td>

                                                        </tr>

                                                        <tr>
                                                            <td>Fixed Sidebar</td>    
                                                            <td class="bt-switch">
                                                                <input type="checkbox" id="fsb_switch" data-size="small" />
                                                            </td>

                                                        </tr>

                                                        <tr>
                                                            <td>Fixed Header</td>    
                                                            <td><p class="bt-switch"><input type="checkbox" id="fixed_h" data-size="small" /></p></td>
                                                        </tr>

                                                        <tr>
                                                            <td>Boxed Layout</td>    
                                                            <td><p class="bt-switch"><input type="checkbox" id="boxLayout" data-size="small" /></p></td>
                                                        </tr>

                                                    </tbody>

                                                </table>

                                            </div>

                                        </form>

                                    </div>

                                    <div class="tab-pane p-20" id="profile" role="tabpanel">
                                        
                                        <div class="row">
                                            
                                            <div class="col-sm-12">

                                            <h3>Log In Page</h3><br>

                                            <p>Choose your picture</p>

                                            <input type="file" name="">

                                            </div>

                                        </div>

                                    </div>

                                    <div class="tab-pane p-20" id="messages" role="tabpanel">
                                        
                                        <div class="row">
                                            
                                            <div class="col-sm-12">

                                                <h3>Logo</h3>

                                                <p>Choose your picture</p>

                                                <input type="file" name="">

                                            </div>

                                        </div>

                                        <hr style="border: 1px solid #dedede">

                                        <div class="row">
                                            
                                            <div class="col-sm-12">
                                                <h3>Brand Name</h3>
                                            </div>

                                            <div class="col-sm-11">
                                                <input type="text" class="form-control" placeholder="Input brand name here" required>
                                            </div>

                                            <div class="col-sm-1">
                                                <button class="btn btn-primary">Save</button>
                                            </div>

                                        </div>

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

    <script src="../assets/libs/bootstrap-switch/dist/js/bootstrap-switch.min.js"></script>

    <script>

        $(".bt-switch input[type='checkbox']").bootstrapSwitch()


        $('#dm').on('switchChange.bootstrapSwitch', function(event, state){


            if(state == true){

                var dmval = 1
            }

            else{

                var dmval = 0
            }

            $.ajax({

                url:"action.php",
                method:"POST",
                data:{
                    dmval:dmval,
                    action:"dark_mode"
                },
            })

            .always(function(data){

                settConfig()
            })

            .done(function(data){

                console.log(data)
            })

            .fail(function(){

                console.log(data.statusText)
            })

        })

        function logoBG(skin){

            $.ajax({

                url:"action.php",
                method:"POST",
                data:{
                    skin:skin,
                    action:"logo_bg"
                },
            })

            .always(function(data){

                settConfig()
            })

            .done(function(data){

                console.log(data)
            })

            .fail(function(){

                console.log(data.statusText)
            })
        }
        
        function navBG(skin){

            $.ajax({

                url:"action.php",
                method:"POST",
                data:{
                    skin:skin,
                    action:"nav_bg"
                },
            })

            .always(function(data){

                settConfig()
            })

            .done(function(data){

                console.log(data)
            })

            .fail(function(){

                console.log(data.statusText)
            })
        }

        function sbBG(skin){

            $.ajax({

                url:"action.php",
                method:"POST",
                data:{
                    skin:skin,
                    action:"sb_bg"
                },
            })

            .always(function(data){

                settConfig()
            })

            .done(function(data){

                console.log(data)
            })

            .fail(function(){

                console.log(data.statusText)
            })
        }

    </script>


</body>

</html>