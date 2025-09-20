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


        <title><?= $appname ?></title>


        <!-- Custom CSS -->
        <link href="../assets/libs/chartist/dist/chartist.min.css" rel="stylesheet">
        <link href="../assets/extra-libs/c3/c3.min.css" rel="stylesheet">
        <link href="../assets/libs/morris.js/morris.css" rel="stylesheet">


        <!-- <link href="../assets/extra-libs/DataTables/DataTables-1.10.16/css/dataTables.bootstrap.min.css" rel="stylesheet">
        <link href="../assets/extra-libs/DataTables/DataTables-1.10.16/css/dataTables.bootstrap4.min.css" rel="stylesheet">
        <link href="../assets/extra-libs/DataTables/DataTables-1.10.16/css/jquery.dataTables.min.css" rel="stylesheet"> -->

        <link href="../assets/libs/datatables/media/css/dataTable.dataTable.css" rel="stylesheet">
        <link href="../assets/libs/datatables/media/css/buttons.dataTable.css" rel="stylesheet">


        <link href="../assets/libs/sweetalert2/dist/sweetalert2.min.css" rel="stylesheet">
        <link href="../assets/libs/toastr/build/toastr.min.css" rel="stylesheet">


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
                            <h4 class="page-title font-weight-bold text-uppercase">Year Levels</h4>
                            <div class="d-flex align-items-center">

                            </div>
                        </div>
                        <div class="col-7 align-self-center">
                            <div class="d-flex no-block justify-content-end align-items-center">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item">
                                            <a href="#">Year Levels</a>
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

                    <div class="row">

                        <div class="col-lg-8">

                            <div class="card">

                                <div class="card-body">

                                    <div class="table-responsive">

                                        <table class="table table-hover display nowrap" style="width:100%;" id="semesters_tbl">

                                            <thead class="table-bordered font-weight-bold text-uppercase">
                                                <tr>
                                                    <th>Name</th>
                                                    <th>Date Added</th>
                                                    <th>Time Added</th>
                                                    <th class="text-center">Action</th>
                                                </tr>
                                            </thead>

                                            <tbody class="table-sm">
                                                <?php

                                                    $query="SELECT 
                                                                Year_Level_Id, 
                                                                Year_name, 
                                                                Date_added, 
                                                                Time_added
                                                            FROM 
                                                                year_levels 
                                                            WHERE 
                                                                Status = 1 
                                                            ORDER BY 
                                                                Date_added DESC, 
                                                                Time_added DESC ";

                                                    $fetch = mysqli_query($con, $query);

                                                    $count = mysqli_num_rows($fetch);

                                                    if($fetch){

                                                        if($count > 0){

                                                            while($row = mysqli_fetch_assoc($fetch)){

                                                                $year_level_Id  = $row['Year_Level_Id'];
                                                                $year_name      = $row['Year_name'];
                                                                $date_added     = dateFormat($row['Date_added']);
                                                                $time_added     = timeFormat($row['Time_added']);

                                                                echo "<tr>";
                                                                echo "<td class='font-weight-bold'>".$year_name."</td>";
                                                                echo "<td>".$date_added."</td>";
                                                                echo "<td>".$time_added."</td>";
                                                                echo "<td>";

                                                                echo "<button 
                                                                            type='button' 
                                                                            class='btn btn-outline-light btn-sm text-primary' 
                                                                            onclick='editYearLevel(`".$year_level_Id."`, `".$year_name."`)'>
                                                                            <span class='fa fa-pencil-alt'></span>
                                                                        </button>";

                                                                echo "<button 
                                                                            type='button' 
                                                                            class='btn btn-outline-light btn-sm text-danger' 
                                                                            onclick='deleteYearLevel(`".$year_level_Id."`)'>
                                                                            <span class='fa fa-trash'></span>
                                                                        </button>";

                                                                echo "</td>";

                                                                echo "</tr>";
                                                            }
                                                        }
                                                    }
                                                ?>
                                            </tbody>

                                        </table>

                                    </div>

                                </div>

                            </div>

                        </div>

                        <div class="col-lg-4">

                            <div class="card" style="position:sticky; top:0;">

                                <form method="POST" id="newYearLevelForm">

                                    <div class="card-header bg-white">
                                        <h4 class="font-weight-bold text-uppercase">Add New</h4>
                                    </div>

                                    <div class="card-body">

                                        <div class="form-group">
                                            <p><b>Year Level Name: <span class="text-danger">(*)</span></b></p>
                                            <input 
                                                type="text" 
                                                class="form-control form-control-sm"
                                                name="year_level_name" 
                                                id="year_level_name"
                                                placeholder="Input year level name here" 
                                                autocomplete="off"
                                                required>
                                        </div>

                                    </div>

                                    <div class="card-footer bg-white text-right">
                                        <button 
                                            type="submit" 
                                            class="btn btn-success btn-sm font-weight-bold text-uppercase">
                                            <span class="fa fa-check"></span>
                                            Submit
                                        </button>
                                    </div>

                                </form>

                                <form method="POST" id="editYearLevelForm" style="display:none;">

                                    <div class="card-header bg-white">
                                        <h4 class="font-weight-bold text-uppercase">Edit Year Level</h4>
                                    </div>

                                    <div class="card-body">

                                        <input 
                                            type="hidden" 
                                            class="form-control form-control-sm"
                                            name="e_year_level_Id" 
                                            id="e_year_level_Id">

                                        <div class="form-group">
                                            <p><b>Year Level Name: <span class="text-danger">(*)</span></b></p>
                                            <input 
                                                type="text" 
                                                class="form-control form-control-sm"
                                                name="e_year_level_name" 
                                                id="e_year_level_name"
                                                placeholder="Input year level name here" 
                                                autocomplete="off"
                                                required>
                                        </div>

                                    </div>

                                    <div class="card-footer bg-white text-right">
                                        <button 
                                            type="submit" 
                                            class="btn btn-primary btn-sm font-weight-bold text-uppercase">
                                            <span class="fa fa-check"></span>
                                            Save
                                        </button>
                                        <button 
                                            type="button" 
                                            class="btn btn-outline-light text-dark btn-sm font-weight-bold text-uppercase"
                                            onclick="
                                                $('#editYearLevelForm').hide()
                                                $('#newYearLevelForm').show()
                                            ">
                                            Discard
                                        </button>
                                    </div>

                                </form>

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


        <!-- <script src="../assets/extra-libs/DataTables/DataTables-1.10.16/js/dataTables.bootstrap.min.js"></script>
        <script src="../assets/extra-libs/DataTables/DataTables-1.10.16/js/dataTables.bootstrap4.min.js"></script>
        <script src="../assets/extra-libs/DataTables/DataTables-1.10.16/js/jquery.dataTables.min.js"></script> -->

        <script src="../assets/libs/datatables/media/js/dataTable.js"></script>
        <script src="../assets/libs/datatables/media/js/dataTables.buttons.js"></script>
        <script src="../assets/libs/datatables/media/js/buttons.dataTables.js"></script>
        <script src="../assets/libs/datatables/media/js/jszip.min.js"></script>
        <script src="../assets/libs/datatables/media/js/pdfmake.min.js"></script>
        <script src="../assets/libs/datatables/media/js/vfs_fonts.js"></script>
        <script src="../assets/libs/datatables/media/js/buttons.html5.min.js"></script>


        <script src="../assets/libs/sweetalert2/dist/sweetalert2.min.js"></script>
        <script src="../assets/libs/toastr/build/toastr.min.js"></script>


        <!--Wave Effects -->
        <script src="../dist/js/waves.js"></script>


        <!--Menu sidebar -->
        <script src="../dist/js/sidebarmenu.js"></script>


        <!--Custom JavaScript -->
        <script src="../dist/js/custom.min.js"></script>

        <script>

            $(document).ready(function () {

                yearLevelsTbl()
            
                $('#newYearLevelForm').on('submit', function(aa){

                    aa.preventDefault()

                    var data = $(this).serializeArray()

                    data.push(
                        { name:'action', value:'new_year_level'}
                    )

                    $.ajax({
                        type: "POST",
                        url: "models/SemesterModel.php",
                        data: data,
                        dataType: "JSON",
                        success: function (response) {
                            
                            if(response == 1){

                                toastr.success('You added a new year level', 'SAVED SUCCESSFULLY')

                                setTimeout(() => {

                                    location.reload()

                                }, 2000);
                            }
                            else if(response == 2 || response == 3){
                                
                                toastr.error('Please contact your developer', 'SOMETHING WENT WRONG')
                            }
                            else if(response == 4){
                                
                                toastr.info('Record already exist', 'CANNOT BE ADDED')
                            }
                        }
                    })
                })

                $('#editYearLevelForm').on('submit', function(ab){

                    ab.preventDefault()

                    var data = $(this).serializeArray()

                    data.push(
                        { name:'action', value:'edit_year_level' }
                    )

                    $.ajax({
                        type: "POST",
                        url: "models/SemesterModel.php",
                        data: data,
                        dataType: "JSON",
                        success: function (response) {
                            
                            if(response == 1){

                                toastr.success('You updated a year level', 'SAVED SUCCESSFULLY')

                                setTimeout(() => {

                                    location.reload()

                                }, 2000);
                            }
                            else if(response == 2 || response == 3){

                                toastr.error('Please contact your developer', 'SOMETHING WENT WRONG')
                            }
                        }
                    });
                })
            })


            function yearLevelsTbl(){

                $('#semesters_tbl').DataTable({

                    "aaSorting": [],
                    "columnDefs": [ {
                        "targets": 3,
                        "orderable": false
                    } ],
                    layout: {
                        topStart: {
                            buttons: ['copy', 'csv', 'excel', 'pdf', 'print']
                        }
                    }
                })
            }


            function editYearLevel(year_level_Id, year_name){

                $('#newYearLevelForm').hide()
                $('#editYearLevelForm').show()

                $('#e_year_level_Id').val(year_level_Id)
                $('#e_year_level_name').val(year_name)
            }


            function deleteYearLevel(year_level_Id){

                swal({   
                    title: "DELETE YEAR LEVEL?",   
                    text: "This cannot be reverted",   
                    type: "question",   
                    showCancelButton: true,   
                    confirmButtonColor: "#DD6B55",   
                    confirmButtonText: "YES",   
                    cancelButtonText: "NO",   
                    closeOnConfirm: false,   
                    closeOnCancel: false 
                }).then((isConfirm) => {

                    if (isConfirm.value == true) { 

                        $.ajax({
                            type: "POST",
                            url: "models/SemesterModel.php",
                            data: {
                                yearlevelid:year_level_Id,
                                action:"delete_year_level"
                            },
                            dataType: "JSON",
                            success: function (response) {
                                
                                if(response == 1){

                                    toastr.success('You deleted a year level. Refreshing the page.', 'REMOVED SUCCESSFULLY')

                                    setTimeout(() => {

                                        location.reload()

                                    }, 2000);
                                }
                                else if(response == 2 || response == 3){

                                    toastr.error('Please contact your developer', 'SOMETHING WENT WRONG')
                                }
                            }
                        })
                    }
                })
            }

        </script>

    </body>

</html>