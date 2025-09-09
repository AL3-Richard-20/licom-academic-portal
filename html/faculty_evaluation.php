<?php

    include "includes/db.php";
    // include "../../app/html/helpers/Users.php";
    include "../html/helpers/Users.php";
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


        <link href="../assets/extra-libs/DataTables/DataTables-1.10.16/css/dataTables.bootstrap.min.css" rel="stylesheet">
        <link href="../assets/extra-libs/DataTables/DataTables-1.10.16/css/dataTables.bootstrap4.min.css" rel="stylesheet">
        <link href="../assets/extra-libs/DataTables/DataTables-1.10.16/css/jquery.dataTables.min.css" rel="stylesheet">


        <title><?= $appname ?></title>

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
                            <h4 class="page-title font-weight-bold text-uppercase">Faculty Evaluation</h4>
                            <div class="d-flex align-items-center">

                            </div>
                        </div>
                        <div class="col-7 align-self-center">
                            <div class="d-flex no-block justify-content-end align-items-center">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item">
                                            <a href="#">Faculty Evaluation</a>
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
                    <!-- ============================================================== -->
                    <!-- Start Page Content -->
                    <!-- ============================================================== -->
                    <div class="row">
                        <div class="col-lg-4">
                            <p><b>Semester: <span class="text-danger">(*)</span></b></p>
                            <select 
                                class="form-control form-control-sm"
                                name="semester_dd_val"
                                id="semester_dd_val">
                                <option value=""></option>
                                <?php

                                    $query="SELECT 
                                                Semester_Id, 
                                                Semester_name,
                                                Is_default 
                                            FROM 
                                                semesters 
                                            WHERE 
                                                Status = 1 ";

                                    $fetch = mysqli_query($con, $query);

                                    $count = mysqli_num_rows($fetch);

                                    if($fetch && $count > 0){

                                        while($row = mysqli_fetch_assoc($fetch)){

                                            $semester_Id    = $row['Semester_Id'];
                                            $semester_name  = $row['Semester_name'];
                                            $is_default     = $row['Is_default'];

                                            $is_selected = ($is_default == 1) ? 'selected' : '';
                                            
                                            echo "<option value='".$semester_Id."' ".$is_selected.">".$semester_name."</option>";
                                        }
                                    }
                                ?>
                            </select>
                        </div>
                        <div class="col-lg-4"></div>
                        <div class="col-lg-4"></div>
                    </div>

                    <br>

                    <div class="row">

                        <div class="col-12">

                            <table class="table display nowrap" style="width:100%;" id="class_instructors_tbl">

                                <thead class="table-bordered font-weight-bold text-uppercase">
                                    <tr>
                                        <th>Instructor</th>
                                        <th>Date Evaluated</th>
                                        <th class="text-center">Action</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <tr>
                                        <td class="text-center" colspan="3">No data available in the table.</td>
                                    </tr>
                                </tbody>

                            </table>

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
        <?php //include "includes/customizer.php"; ?>
        <!-- ============================================================== -->
        <!-- End customizer Panel -->
        <!-- ============================================================== -->



        <!-- <div class="chat-windows"></div> -->



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

                classInstructors('')

                // ================= Select2 =====================
                    $('#semester_dd_val').select2({
                        "placeholder":"Select semester here"
                    })
                // ================= Select2 END =================

                $('#semester_dd_val').on('change', function(){

                    var semester_Id = $(this).val()

                    classInstructors(semester_Id)
                })
            })


            function classInstructors(semester_Id){

                var output=''

                $('#class_instructors_tbl').DataTable({

                    "responsive":true,
                    "bInfo":false,
                    "searching":false,
                    "bDestroy": true,
                    "aaSorting": [],
                    "dom": 'rtp',
                    "ajax": {
                        'type':'POST',
                        'url':'models/ClassSchedulesModel.php',
                        'data':{
                            semesterid:semester_Id,
                            action:"fetch_class_instructors"
                        },
                    },
                    "columns": [
                        { "data": "InstructorFullName",

                            render : function (data, type, row, meta){

                                var output=''

                                output+='<div class="d-flex align-items-center">'
                                output+='<img src="../assets/images/users/user-icon-512x512-x23sj495.png" class="mr-2" height="30" alt="Profile Picture">'
                                output+='<h5 class="ml-2">'+ row.InstructorFullName +'</h5>'
                                output+='</div>'

                                return output
                            }
                        },
                        { "data": "EvalRecord",

                            render : function (data, type, row, meta){

                                var output=''

                                if(data.DateAdded != null && data.TimeAdded != null ){

                                    output+='<div class="d-flex align-items-center">'
                                    output+='<p class="ml-2">'+ data.DateAdded +' | '+ data.TimeAdded +'</p>'
                                    output+='</div>'
                                }
                                else{

                                    output+='<div class="d-flex align-items-center">'
                                    output+='<p class="ml-2">---</p>'
                                    output+='</div>'
                                }

                                return output
                            } 
                        },
                        { "data": "InstructorId",

                            render : function (data, type, row, meta){

                                var evaluateInstructor = "location.href='faculty_evaluation_form.php?instructorid="+ data +"&semesterid="+ semester_Id +"';"

                                var output=''

                                if(row.EvalRecord.DateAdded == '' || row.EvalRecord.DateAdded == null){

                                    output+='<div class="text-center">'
                                    output+='<button type="button" class="btn btn-success btn-sm font-weight-bold text-uppercase" onclick="'+ evaluateInstructor +'">Evaluate</button>'
                                    output+='</div>'
                                }
                                else{

                                    output+='<div class="text-center">'
                                    output+='<button type="button" class="btn btn-info btn-sm font-weight-bold text-uppercase" onclick="location.href=`eval_results.php?evalid='+ row.EvalRecord.EvalId +'`;">View</button>'
                                    output+='</div>'
                                }

                                return output
                            }
                        },
                    ],
                })
            }

        </script>

    </body>

</html>