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


        <link href="../assets/extra-libs/DataTables/DataTables-1.10.16/css/dataTables.bootstrap.min.css" rel="stylesheet">
        <link href="../assets/extra-libs/DataTables/DataTables-1.10.16/css/dataTables.bootstrap4.min.css" rel="stylesheet">
        <link href="../assets/extra-libs/DataTables/DataTables-1.10.16/css/jquery.dataTables.min.css" rel="stylesheet">


        <link href="../assets/libs/sweetalert2/dist/sweetalert2.min.css" rel="stylesheet">
        <link href="../assets/libs/toastr/build/toastr.min.css" rel="stylesheet">
        <link href="../assets/libs/select2/dist/css/select2.min.css" rel="stylesheet">


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
                            <h4 class="page-title font-weight-bold text-uppercase">Encode Grades</h4>
                            <div class="d-flex align-items-center">

                            </div>
                        </div>
                        <div class="col-7 align-self-center">
                            <div class="d-flex no-block justify-content-end align-items-center">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item">
                                            <a href="#">Encode Grades</a>
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

                        <div class="col-lg-4"></div>

                        <div class="col-lg-4"></div>

                        <div class="col-lg-4 text-right">
                            <button
                                type="button" 
                                class="btn btn-outline-dark font-weight-bold text-uppercase" 
                                onclick="filterAction(`Import`)">
                                <span class="fa fa-upload"></span>
                                &nbspImport .xlsx
                            </button>
                            <button
                                type="button" 
                                class="btn btn-outline-dark font-weight-bold text-uppercase" 
                                onclick="filterAction(`Download`)">
                                <span class="fa fa-download"></span>
                                &nbspDownload .xlsx
                            </button>
                        </div>

                    </div>

                    <br>

                    <table class="table table-hover">
                        <thead class="table-bordered font-weight-bold text-uppercase">
                            <tr>
                                <th>Student ID</th>
                                <th>Name</th>
                                <th>Midterm</th>
                                <th>Tentative Final</th>
                                <th>Final</th>
                                <th>Remarks</th>
                            </tr>
                        </thead>
                        <tbody class="table-sm">
                            <tr>
                                <td class="text-center" colspan="6">No data avaiable in the table.</td>
                            </tr>
                        </tbody>
                    </table>


                    <!-- =============== Filter Modal =============== -->
                        <div class="modal fade" id="filterMod">

                            <div class="modal-dialog" role="document">

                                <div class="modal-content">

                                    <div class="modal-header">
                                        <h5 class="modal-title font-weight-bold text-uppercase" id="action_txt">Filter by</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>

                                    <div class="modal-body">

                                        <input type="hidden" name="action_val" id="action_val">

                                        <div class="form-group">
                                            <p><b>Semester:</b></p>
                                            <select 
                                                class="form-control form-control-sm" 
                                                name="semester_dd" 
                                                id="semester_dd"
                                                style="width:100%;">
                                                <option value=""></option>
                                                <?php

                                                    $query="SELECT 
                                                                semesters.Semester_Id, 
                                                                semesters.Semester_name,
                                                                semesters.Is_default,
                                                                year_levels.Year_name  
                                                            FROM 
                                                                semesters 
                                                            LEFT JOIN 
                                                                year_levels 
                                                            ON 
                                                                semesters.Year_Level_Id = year_levels.Year_Level_Id 
                                                            WHERE 
                                                                semesters.Status = 1 ";

                                                    $fetch = mysqli_query($con, $query);

                                                    $count = mysqli_num_rows($fetch);

                                                    if($fetch && $count > 0){

                                                        while($row = mysqli_fetch_assoc($fetch)){

                                                            $year_name      = $row['Year_name'];
                                                            $semester_Id    = $row['Semester_Id'];
                                                            $semester_name  = $row['Semester_name'];

                                                            echo "<option value='".$semester_Id."'>".$year_name." | ".$semester_name."</option>";
                                                        }
                                                    }
                                                ?>
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <p><b>Course:</b></p>
                                            <select 
                                                class="form-control form-control-sm" 
                                                name="course_dd" 
                                                id="course_dd"
                                                style="width:100%;">
                                                <option value=""></option>
                                                <?php

                                                    $query="SELECT 
                                                                Course_Id, 
                                                                Course_name, 
                                                                Course_code 
                                                            FROM 
                                                                courses 
                                                            WHERE 
                                                                Status = 1 ";

                                                    $fetch = mysqli_query($con, $query);

                                                    $count = mysqli_num_rows($fetch);

                                                    if($fetch && $count > 0){

                                                        while($row = mysqli_fetch_assoc($fetch)){

                                                            $course_Id    = $row['Course_Id'];
                                                            $course_name  = $row['Course_name'];
                                                            $course_code  = $row['Course_code'];
                                                            
                                                            echo "<option value='".$course_Id."'>".$course_code." | ".$course_name."</option>";
                                                        }
                                                    }
                                                ?>
                                            </select>
                                        </div>

                                    </div>

                                    <div class="modal-footer">
                                        <button 
                                            type="submit" 
                                            class="btn btn-success font-weight-bold text-uppercase">
                                            <span class="fa fa-check"></span>
                                            Submit
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

                        </div>
                    <!-- =============== Filter Modal END =========== -->

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

                // ============= Select2 ===============
                    $('#semester_dd').select2({
                        placeholder:"Select semester here",
                        allowClear:true
                    })
                    
                    $('#course_dd').select2({
                        placeholder:"Select course here",
                        allowClear:true
                    })
                // ============= Select2 END ===========
            })


            function filterAction(action_val){

                $('#filterMod').modal('show')

                $('#semester_dd').val('').trigger('change')
                $('#course_dd').val('').trigger('change')

                var icon_class=''
                var action_tense=''

                if(action_val == 'Import'){

                    icon_class='fa fa-upload'
                    action_tense='to'
                }
                else{
                    icon_class='fa fa-download'
                    action_tense='from'
                }

                $('#action_txt').html('<span class="'+ icon_class +'"></span>&nbsp&nbsp'+action_val+' records '+ action_tense +': ')

                $('#action_val').val(action_val)
            }

        </script>

    </body>

</html>