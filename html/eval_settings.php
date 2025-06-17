<?php

    include "includes/db.php";
?>

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


        <title><?= $appname ?></title>


        <!-- Custom CSS -->
        <!-- <link href="../assets/libs/chartist/dist/chartist.min.css" rel="stylesheet">
        <link href="../assets/extra-libs/c3/c3.min.css" rel="stylesheet">
        <link href="../assets/libs/morris.js/morris.css" rel="stylesheet"> -->


        <link href="../assets/extra-libs/DataTables/DataTables-1.10.16/css/dataTables.bootstrap.min.css" rel="stylesheet">
        <link href="../assets/extra-libs/DataTables/DataTables-1.10.16/css/dataTables.bootstrap4.min.css" rel="stylesheet">
        <link href="../assets/extra-libs/DataTables/DataTables-1.10.16/css/jquery.dataTables.min.css" rel="stylesheet">


        <link href="../assets/libs/sweetalert2/dist/sweetalert2.min.css" rel="stylesheet">
        <link href="../assets/libs/toastr/build/toastr.min.css" rel="stylesheet">
        <link href="../assets/libs/select2/dist/css/select2.min.css" rel="stylesheet">


        <!-- Custom CSS -->
        <link href="../dist/css/style.min.css" rel="stylesheet">

        <script src="../assets/libs/ckeditor/ckeditor.js"></script>

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
                            <h4 class="page-title font-weight-bold text-uppercase">Evaluation Settings</h4>
                            <div class="d-flex align-items-center"></div>
                        </div>
                        <div class="col-7 align-self-center">
                            <div class="d-flex no-block justify-content-end align-items-center">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item">
                                            <a href="#">Evaluation Settings</a>
                                        </li>
                                        <li class="breadcrumb-item active" aria-current="page">Records</li>
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

                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs">
                        <li class="nav-item">
                            <a class="nav-link font-weight-bold text-dark active" data-toggle="tab" href="#menu1">
                                Instruction
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link font-weight-bold text-dark" data-toggle="tab" href="#menu2">
                                Popups
                            </a>
                        </li>
                    </ul>

                    <!-- Tab panes -->
                    <div class="tab-content">

                        <div class="tab-pane active" id="menu1"><br>

                            <form method="POST" id="instructionsForm">

                                <?php

                                    $query="SELECT 
                                                Sett_val 
                                            FROM 
                                                settings 
                                            WHERE 
                                                Sett_Id = 1 
                                            LIMIT 1 ";

                                    $fetch = mysqli_query($con, $query);

                                    if($fetch){

                                        $row = mysqli_fetch_assoc($fetch);

                                        $instruction_txt = $row['Sett_val'];
                                    }
                                ?>

                                <textarea name="DSC" id="editor1"><?= $instruction_txt ?></textarea>

                                <br>

                                <div class="text-right">
                                    <button 
                                        type="submit" 
                                        class="btn btn-primary font-weight-bold text-uppercase">
                                        <span class="fa fa-check"></span>
                                        Save
                                    </button>
                                </div>

                            </form>

                        </div>

                        <div class="tab-pane fade" id="menu2"><br>

                            <p><b>Popup Form:</b></p>

                            <?php

                                $query="SELECT 
                                            Sett_val 
                                        FROM 
                                            settings 
                                        WHERE 
                                            Sett_Id = 2 
                                        LIMIT 1 ";

                                $fetch = mysqli_query($con, $query);

                                if($fetch){

                                    $row = mysqli_fetch_assoc($fetch);

                                    $popup_val = $row['Sett_val'];

                                    if($popup_val == 'Enabled'){

                                        $enabled  = 'checked';
                                        $disabled = '';
                                    }
                                    else{

                                        $enabled  = '';
                                        $disabled = 'checked';
                                    }
                                }
                            ?>

                            <div>
                                <input type="radio" id="enable" name="popup_form_val" value="Enable" <?= $enabled ?>>
                                <label for="enable">Enable</label>
                                <input type="radio" id="disable" name="popup_form_val" value="Disable" <?= $disabled ?>>
                                <label for="disable">Disable</label>
                            </div>

                            <hr>

                            <form method="POST" id="popUpForm">

                                <?php

                                    $query="SELECT 
                                                Sett_val 
                                            FROM 
                                                settings 
                                            WHERE 
                                                Sett_Id = 3 
                                            LIMIT 1 ";

                                    $fetch = mysqli_query($con, $query);

                                    if($fetch){

                                        $row = mysqli_fetch_assoc($fetch);

                                        $popup_txt = $row['Sett_val'];
                                    }
                                ?>

                                <textarea name="DSC" id="editor2"><?= $popup_txt ?></textarea>

                                <br>

                                <div class="text-right">
                                    <button 
                                        type="submit" 
                                        class="btn btn-primary font-weight-bold text-uppercase">
                                        <span class="fa fa-check"></span>
                                        Save
                                    </button>
                                </div>

                                </form>

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
        <?php //include "includes/customizer.php"; ?>
        <!-- ============================================================== -->
        <!-- End customizer Panel -->
        <!-- ============================================================== -->


        
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


        <script src="../assets/extra-libs/DataTables/DataTables-1.10.16/js/dataTables.bootstrap.min.js"></script>
        <script src="../assets/extra-libs/DataTables/DataTables-1.10.16/js/dataTables.bootstrap4.min.js"></script>
        <script src="../assets/extra-libs/DataTables/DataTables-1.10.16/js/jquery.dataTables.min.js"></script>


        <script src="../assets/libs/sweetalert2/dist/sweetalert2.min.js"></script>
        <script src="../assets/libs/toastr/build/toastr.min.js"></script>
        <script src="../assets/libs/select2/dist/js/select2.min.js"></script>


        <!--Wave Effects -->
        <script src="../dist/js/waves.js"></script>


        <!--Menu sidebar -->
        <script src="../dist/js/sidebarmenu.js"></script>


        <!--Custom JavaScript -->
        <script src="../dist/js/custom.min.js"></script>

        <script>

            $(document).ready(function () {

                CKEDITOR.replace( 'editor1')
                CKEDITOR.replace( 'editor2')

                $('input[name="popup_form_val"]').on('click', function(){

                    var popup_val = $('input[name="popup_form_val"]:checked').val();

                    $.ajax({
                        type: "POST",
                        url: "models/EvaluationModel.php",
                        data: {
                            settid:2,
                            settval:popup_val,
                            action:"change_sett_value"
                        },
                        dataType: "JSON",
                        success: function (response) {
                            
                            if(response == 1){

                                console.log("Successfully Updated")   
                            }
                            else if(response == 2 || response == 3){

                                toastr.error("Please contact your developer", "Something went wrong")
                            }
                        }
                    });
                })

                $('#instructionsForm').on('submit', function(aa){

                    aa.preventDefault()

                    var instruction_txt = CKEDITOR.instances['editor1'].getData();

                    $.ajax({
                        type: "POST",
                        url: "models/EvaluationModel.php",
                        data: {
                            instructiontxt:instruction_txt,
                            action:"instructions_form"
                        },
                        dataType: "JSON",
                        success: function (response) {
                            
                            if(response == 1){

                                toastr.success("You have changed instruction content", "Successfully Updated")   
                            }
                            else if(response == 2 || response == 3){

                                toastr.error("Please contact your developer", "Something went wrong")
                            }
                        }
                    });
                })

                $('#popUpForm').on('submit', function(aa){

                    aa.preventDefault()

                    var popup_txt = CKEDITOR.instances['editor2'].getData();

                    $.ajax({
                        type: "POST",
                        url: "models/EvaluationModel.php",
                        data: {
                            popuptxt:popup_txt,
                            action:"popups_form"
                        },
                        dataType: "JSON",
                        success: function (response) {
                            
                            if(response == 1){

                                toastr.success("You have changed popup content", "Successfully Updated")   
                            }
                            else if(response == 2 || response == 3){

                                toastr.error("Please contact your developer", "Something went wrong")
                            }
                        }
                    });
                })
            })

        </script>

    </body>

</html>