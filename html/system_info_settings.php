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
        <link rel="icon" type="image/png" sizes="16x16" href="../assets/images/<?= $app_icon ?>">
        <!-- <link rel="stylesheet" href="../dist/css/icons/font-awesome/css/fontawesome-all.min.css">
        <link rel="stylesheet" href="../dist/css/icons/font-awesome/css/fa-regular.min.css">
        <link rel="stylesheet" href="../dist/css/icons/font-awesome/css/fa-solid.min.css">
        <link rel="stylesheet" href="../dist/css/icons/font-awesome/css/fontawesome.min.css"> -->

        <link href="../assets/extra-libs/DataTables/DataTables-1.10.16/css/dataTables.bootstrap.min.css" rel="stylesheet">
        <link href="../assets/extra-libs/DataTables/DataTables-1.10.16/css/dataTables.bootstrap4.min.css" rel="stylesheet">
        <link href="../assets/extra-libs/DataTables/DataTables-1.10.16/css/jquery.dataTables.min.css" rel="stylesheet">

        <link href="../assets/libs/sweetalert2/dist/sweetalert2.min.css" rel="stylesheet">
        <link href="../assets/libs/toastr/build/toastr.min.css" rel="stylesheet">
        <link href="../assets/libs/select2/dist/css/select2.min.css" rel="stylesheet">

        <link href="../assets/libs/croppie/croppie.css" rel="stylesheet">


        <title><?= $appname ?></title>


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
                            <h4 class="page-title font-weight-bold text-uppercase">
                                System Information
                            </h4>
                            <div class="d-flex align-items-center">

                            </div>
                        </div>
                        <div class="col-7 align-self-center">
                            <div class="d-flex no-block justify-content-end align-items-center">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item">
                                            <a href="#">System</a>
                                        </li>
                                        <li class="breadcrumb-item active" aria-current="page">Information</li>
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

                        <table class="table table-bordered">
                            <thead class="font-weight-bold text-uppercase">
                                <tr>
                                    <th></th>
                                    <th>Content</th>
                                    <th>Last Update</th>
                                    <th class="text-center">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php

                                    $query ="SELECT 
                                                Sett_Id, 
                                                Sett_desc, 
                                                Sett_val,
                                                Last_update 
                                            FROM 
                                                settings 
                                            WHERE 
                                                Sett_Id IN (4, 5, 6) 
                                                AND Status = 1 ";

                                    $fetch = mysqli_query($con, $query);

                                    if($fetch){

                                        while($row = mysqli_fetch_assoc($fetch)){

                                            $sett_Id     = $row['Sett_Id'];
                                            $sett_desc   = $row['Sett_desc'];
                                            $sett_val    = $row['Sett_val'];
                                            $last_update = date('F d, Y | h:i A', strtotime($row['Last_update']));

                                            if($sett_Id == 5){

                                                $sett_val_disp = "<img src='../assets/images/".$sett_val."' height='50'>";
                                            }
                                            else if($sett_Id == 6){

                                                $sett_val_disp = "<img src='../assets/images/".$sett_val."' height='150'>";
                                            }
                                            else{

                                                $sett_val_disp = $sett_val;
                                            }

                                            echo '<tr>
                                                    <td class="font-weight-bold">'.$sett_desc.':</td>
                                                    <td>'.$sett_val_disp.'</td>
                                                    <td>'.$last_update.'</td>
                                                    <td class="text-center">
                                                        <button 
                                                            type="button" 
                                                            class="btn btn-outline-light btn-sm text-primary" 
                                                            onclick="functionRouter(`'.$sett_Id.'`, `'.$sett_val.'`);">
                                                            <span class="fa fa-pencil-alt"></span>
                                                        </button>
                                                    </td>
                                                </tr>';
                                        }
                                    }
                                ?>
                            </tbody>
                        </table>

                        <!-- ============= Change App Name ============= -->
                            <div class="modal fade" id="changeAppNameMod">

                                <form method="POST" id="changeAppNameForm">

                                    <div class="modal-dialog" role="document">

                                        <div class="modal-content">

                                            <div class="modal-header">
                                                <h5 class="modal-title font-weight-bold text-uppercase">
                                                    <span class="fa fa-pencil-alt"></span>
                                                    &nbspChange App Name
                                                </h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>

                                            <div class="modal-body">

                                                <div class="form-group">
                                                    <p><b>App Name:</b></p>
                                                    <input 
                                                        type="text" 
                                                        class="form-control form-control-sm"
                                                        name="e_app_name" 
                                                        id="e_app_name"
                                                        placeholder="Input app name here">
                                                </div>
                                            </div>

                                            <div class="modal-footer">
                                                <button 
                                                    type="submit" 
                                                    class="btn btn-primary font-weight-bold text-uppercase">
                                                    <span class="fa fa-check"></span>
                                                    Save
                                                </button>
                                                <button 
                                                    type="button" 
                                                    class="btn btn-outline-light text-dark font-weight-bold text-uppercase" 
                                                    data-dismiss="modal">
                                                    Close
                                                </button>
                                            </div>

                                        </div>
                                        
                                    </div>
                                                                    
                                </form>

                            </div>
                        <!-- ============= Change App Name END ========= -->

                        <!-- ============= Change Icon Modal ================= -->
                            <div class="modal fade" id="changeIconMod">

                                <form method="POST" id="changeIconForm" enctype="multipart/form-data">

                                    <div class="modal-dialog" role="document">

                                        <div class="modal-content">

                                            <div class="modal-header">
                                                <h5 class="modal-title font-weight-bold text-uppercase">
                                                    <span class="fa fa-pencil-alt"></span>
                                                    &nbspChange Icon
                                                </h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>

                                            <div class="modal-body">

                                                <div class="form-group">

                                                    <img 
                                                        src="../assets/images/logo-light-icon.png" 
                                                        name="icon_img" 
                                                        id="icon_img" 
                                                        height="100" 
                                                        title="Change profile picture" 
                                                        alt="Icon">
                                                </div>

                                                <input 
                                                    type="file" 
                                                    name="croppie_upload" 
                                                    id="croppie_upload" 
                                                    value="Choose a file">
                                            </div>

                                            <div class="modal-footer">
                                                <button 
                                                    type="submit" 
                                                    class="btn btn-primary font-weight-bold text-uppercase">
                                                    <span class="fa fa-check"></span>
                                                    Save
                                                </button>
                                                <button 
                                                    type="button" 
                                                    class="btn btn-outline-light text-dark font-weight-bold text-uppercase" 
                                                    data-dismiss="modal">
                                                    Close
                                                </button>
                                            </div>

                                        </div>
                                        
                                    </div>
                                                                    
                                </form>

                            </div>
                        <!-- ============= Change Icon Modal END ============= -->

                        <!-- ============= Change Login Background =========== -->
                            <div class="modal fade" id="changeLoginPicMod">

                                <form method="POST" id="changeLoginPicForm" enctype="multipart/form-data">

                                    <div class="modal-dialog" role="document">

                                        <div class="modal-content">

                                            <div class="modal-header">
                                                <h5 class="modal-title font-weight-bold text-uppercase">
                                                    <span class="fa fa-pencil-alt"></span>
                                                    &nbspChange Login Background
                                                </h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>

                                            <div class="modal-body">

                                                <div class="form-group">

                                                    <img 
                                                        src="../assets/images/logo-light-icon.png" 
                                                        name="login_img" 
                                                        id="login_img" 
                                                        height="100" 
                                                        title="Change login background" 
                                                        alt="Login Background">
                                                </div>

                                                <input 
                                                    type="file" 
                                                    name="croppie_upload2" 
                                                    id="croppie_upload2" 
                                                    value="Choose a file">
                                            </div>

                                            <div class="modal-footer">
                                                <button 
                                                    type="submit" 
                                                    class="btn btn-primary font-weight-bold text-uppercase">
                                                    <span class="fa fa-check"></span>
                                                    Save
                                                </button>
                                                <button 
                                                    type="button" 
                                                    class="btn btn-outline-light text-dark font-weight-bold text-uppercase" 
                                                    data-dismiss="modal">
                                                    Close
                                                </button>
                                            </div>

                                        </div>
                                        
                                    </div>
                                                                    
                                </form>

                                </div>
                        <!-- ============= Change Login Background END ======= -->

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

        <script src="../assets/libs/sweetalert2/dist/sweetalert2.all.min.js"></script>
        <script src="../assets/libs/toastr/build/toastr.min.js"></script>
        <script src="../assets/libs/select2/dist/js/select2.min.js"></script>

        <script src="../assets/libs/croppie/croppie.min.js"></script>


        <!--Wave Effects -->
        <script src="../dist/js/waves.js"></script>


        <!--Menu sidebar -->
        <script src="../dist/js/sidebarmenu.js"></script>


        <!--Custom JavaScript -->
        <script src="../dist/js/custom.min.js"></script>

        <script>

            $(document).ready(function () {

                $('#changeAppNameForm').on('submit', function(aa){

                    aa.preventDefault()

                    var e_app_name = $('#e_app_name').val()

                    $.ajax({
                        type: "POST",
                        url: "models/SettingsModel.php",
                        data: {
                            appname:e_app_name,
                            action:"edit_app_name"
                        },
                        dataType: "JSON",
                        success: function (response) {
                            
                            if(response == '1'){

                                $('#changeAppNameMod').modal('hide')

                                setTimeout(function(){

                                    location.reload()

                                }, 200)

                            }
                            else if(response == '2' || response == '3'){

                                toastr.error('Please contact your developer', 'Something went wrong')
                            }
                        }
                    })
                })

                // ============ Croppie ===============
                    // Icon
                    $uploadCrop = $('#icon_img').croppie({

                        viewport: {
                            width: 200,
                            height: 200,
                            type: 'circle'
                        },
                        boundary: {
                            width: 300,
                            height: 300
                        }
                    })

                    $('#croppie_upload').on('change', function () { 

                        var reader = new FileReader()

                        reader.onload = function (e) {

                            $uploadCrop.croppie('bind', {

                                url: e.target.result

                            }).then(function(){

                                console.log('jQuery bind complete')
                            })

                        }

                        reader.readAsDataURL(this.files[0])
                    })

                    $('#changeIconForm').on('submit', function(af){

                        af.preventDefault()

                        $uploadCrop.croppie('result', {
                            type: 'canvas',
                            size: 'viewport'
                        }).then(function (resp) {

                            $.ajax({
                                type: "POST",
                                url: "models/SettingsModel.php",
                                data: {
                                    image:resp,
                                    settid:5,
                                    action:'edit_icon'
                                },
                                dataType: "JSON",
                                success: function (response) {
                                    
                                    if(response == '1'){

                                        $('#changeIconMod').modal('hide')

                                        setTimeout(function(){

                                            location.reload()

                                        }, 200)

                                    }
                                    else if(response == '2' || response == '3'){

                                        toastr.error('Please contact your developer', 'Something went wrong')
                                    }
                                }
                            })

                        })
                    })



                    // Login Background
                    $uploadCrop2 = $('#login_img').croppie({

                        viewport: {
                            width: 300,
                            height: 200,
                            type: 'square'
                        },
                        boundary: {
                            width: 400,
                            height: 300
                        }
                    })

                    $('#croppie_upload2').on('change', function () { 

                        var reader = new FileReader()

                        reader.onload = function (e) {

                            $uploadCrop2.croppie('bind', {

                                url: e.target.result

                            }).then(function(){

                                console.log('jQuery bind complete')
                            })

                        }

                        reader.readAsDataURL(this.files[0])
                    })


                    $('#changeLoginPicForm').on('submit', function(ag){

                        ag.preventDefault()

                        $uploadCrop2.croppie('result', {
                            type: 'canvas',
                            size: 'original',
                            format: "png", 
                            quality: 1
                        }).then(function (resp) {

                            $.ajax({
                                type: "POST",
                                url: "models/SettingsModel.php",
                                data: {
                                    image:resp,
                                    settid:6,
                                    action:'edit_icon'
                                },
                                dataType: "JSON",
                                success: function (response) {
                                    
                                    if(response == '1'){

                                        $('#changeLoginPicMod').modal('hide')

                                        setTimeout(function(){

                                            location.reload()

                                        }, 200)

                                    }
                                    else if(response == '2' || response == '3'){

                                        toastr.error('Please contact your developer', 'Something went wrong')
                                    }
                                }
                            })

                        })
                    })
                // ============ Croppie END ===========

            })


            function functionRouter(sett_Id, sett_value){

                if(sett_Id == 4){

                    changeAppName(sett_value)
                }
                else if(sett_Id == 5){ // Icon

                    changeIcon(sett_value)
                }
                else if(sett_Id == 6){ // Login Background

                    changeLoginBackground(sett_value)
                }
            }


            function changeAppName(sett_value){

                $('#changeAppNameMod').modal('show')

                $('#e_app_name').val(sett_value)
            }
            

            function changeIcon(sett_value){

                var complete_url = '../assets/images/'+sett_value

                $('#changeIconMod').modal('show')

                $uploadCrop.croppie('bind', { url: complete_url });

                $('#icon_img').attr('src', complete_url)

                setTimeout(function(){
            
                    $('#icon_img').croppie('bind')

                }, 200)
            }


            function changeLoginBackground(sett_value){

                var complete_url = '../assets/images/'+sett_value

                $('#changeLoginPicMod').modal('show')

                $uploadCrop2.croppie('bind', { url: complete_url });

                $('#login_img').attr('src', complete_url)

                setTimeout(function(){
            
                    $('#login_img').croppie('bind')

                }, 200)
            }

        </script>

    </body>

</html>