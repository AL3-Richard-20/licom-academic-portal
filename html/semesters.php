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
        <link href="../assets/libs/chartist/dist/chartist.min.css" rel="stylesheet">
        <link href="../assets/extra-libs/c3/c3.min.css" rel="stylesheet">
        <link href="../assets/libs/morris.js/morris.css" rel="stylesheet">


        <link href="../assets/extra-libs/DataTables/DataTables-1.10.16/css/dataTables.bootstrap.min.css" rel="stylesheet">
        <link href="../assets/extra-libs/DataTables/DataTables-1.10.16/css/dataTables.bootstrap4.min.css" rel="stylesheet">
        <link href="../assets/extra-libs/DataTables/DataTables-1.10.16/css/jquery.dataTables.min.css" rel="stylesheet">


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
                            <h4 class="page-title font-weight-bold text-uppercase">Semesters</h4>
                            <div class="d-flex align-items-center">

                            </div>
                        </div>
                        <div class="col-7 align-self-center">
                            <div class="d-flex no-block justify-content-end align-items-center">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item">
                                            <a href="#">Semesters</a>
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
                                                                Semester_Id, 
                                                                Semester_name, 
                                                                Date_added, 
                                                                Time_added
                                                            FROM 
                                                                semesters 
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

                                                                $semester_Id    = $row['Semester_Id'];
                                                                $semester_name  = $row['Semester_name'];
                                                                $date_added     = dateFormat($row['Date_added']);
                                                                $time_added     = timeFormat($row['Time_added']);

                                                                echo "<tr>";
                                                                echo "<td class='font-weight-bold'>".$semester_name."</td>";
                                                                echo "<td>".$date_added."</td>";
                                                                echo "<td>".$time_added."</td>";
                                                                echo "<td>
                                                                        <button 
                                                                            type='button' 
                                                                            class='btn btn-outline-light btn-sm text-primary' 
                                                                            onclick='editSemester(`".$semester_Id."`, `".$semester_name."`)'>
                                                                            <span class='fa fa-pencil-alt'></span>
                                                                        </button>
                                                                        <button 
                                                                            type='button' 
                                                                            class='btn btn-outline-light btn-sm text-danger' 
                                                                            onclick='deleteSemester(`".$semester_Id."`)'>
                                                                            <span class='fa fa-trash'></span>
                                                                        </button>
                                                                    </td>";
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

                                <form method="POST" id="newSemesterForm">

                                    <div class="card-header bg-white">
                                        <h4 class="font-weight-bold text-uppercase">Add New</h4>
                                    </div>

                                    <div class="card-body">

                                        <div class="form-group">
                                            <p><b>Semester Name: <span class="text-danger">(*)</span></b></p>
                                            <input 
                                                type="text" 
                                                class="form-control form-control-sm"
                                                name="semester_name" 
                                                id="semester_name"
                                                placeholder="Input semester name here" 
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

                                <form method="POST" id="editSemesterForm" style="display:none;">

                                    <div class="card-header bg-white">
                                        <h4 class="font-weight-bold text-uppercase">Edit Semester</h4>
                                    </div>

                                    <div class="card-body">

                                        <input 
                                            type="hidden" 
                                            class="form-control form-control-sm"
                                            name="e_semester_Id" 
                                            id="e_semester_Id">

                                        <div class="form-group">
                                            <p><b>Semster Name: <span class="text-danger">(*)</span></b></p>
                                            <input 
                                                type="text" 
                                                class="form-control form-control-sm"
                                                name="e_semester_name" 
                                                id="e_semester_name"
                                                placeholder="Input semester name here" 
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
                                                $('#editSemesterForm').hide()
                                                $('#newSemesterForm').show()
                                            ">
                                            Discard
                                        </button>
                                    </div>

                                </form>

                            </div>

                        </div>

                    </div>

                    <!-- ================ Subjects Modal ============== -->
                        <div class="modal fade" 
                            id="subjectsMod" 
                            style="padding-right: 17px;">

                            <div class="modal-dialog modal-lg" role="document" style="max-width:1140px;">

                                <div class="modal-content">

                                    <div class="modal-header">
                                        <h4 class="modal-title font-weight-bold text-uppercase">Subjects under <span class="text-info" id="course_sub_header">(---)</span></h4>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>

                                    <div class="modal-body">

                                        <input type="hidden" name="course_Id_val" id="course_Id_val">
                                    
                                        <div class="row">

                                            <div class="col-lg-8">

                                                <div class="table-responsive">

                                                    <table class="table table-hover display nowrap" style="width:100%;">

                                                        <thead class="table-bordered font-weight-bold text-uppercase">
                                                            <tr>
                                                                <th>Name</th>
                                                                <th>Code</th>
                                                                <th>Date Added</th>
                                                                <th>Time Added</th>
                                                                <th class="text-center">Action</th>
                                                            </tr>
                                                        </thead>

                                                        <tbody class="table-sm text-muted" id="subjects_tbl"></tbody>

                                                    </table>

                                                </div>

                                            </div>

                                            <div class="col-lg-4">

                                                <div class="card">

                                                    <form method="POST" id="newSubjectForm">

                                                        <div class="card-header bg-white">
                                                            <h4 class="font-weight-bold text-uppercase">Add New</h4>
                                                        </div>

                                                        <div class="card-body"> 

                                                            <div class="form-group">
                                                                <p><b>Subject Name: <span class="text-danger">(*)</span></b></p>
                                                                <input 
                                                                    type="text" 
                                                                    class="form-control form-control-sm"
                                                                    name="subject_name" 
                                                                    id="subject_name"
                                                                    placeholder="Input subject name here" 
                                                                    autocomplete="off"
                                                                    required>
                                                            </div>
                                                            <div class="form-group">
                                                                <p><b>Subject Code: <span class="text-danger">(*)</span></b></p>
                                                                <input 
                                                                    type="text" 
                                                                    class="form-control form-control-sm"
                                                                    name="subject_code" 
                                                                    id="subject_code"
                                                                    placeholder="Input subject code here" 
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

                                                </div>

                                            </div>

                                        </div>

                                    </div>

                                    <div class="modal-footer">
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
                    <!-- ================ Subjects Modal END ========== -->

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


        <!--Wave Effects -->
        <script src="../dist/js/waves.js"></script>


        <!--Menu sidebar -->
        <script src="../dist/js/sidebarmenu.js"></script>


        <!--Custom JavaScript -->
        <script src="../dist/js/custom.min.js"></script>

        <script>

            $(document).ready(function () {

                semestersTbl()
            
                $('#newSemesterForm').on('submit', function(aa){

                    aa.preventDefault()

                    var data = $('#newSemesterForm').serializeArray()

                    data.push(
                        { name:'action', value:'new_semester'}
                    )

                    $.ajax({
                        type: "POST",
                        url: "models/SemesterModel.php",
                        data: data,
                        dataType: "JSON",
                        success: function (response) {
                            
                            if(response == 1){

                                toastr.success('You added a new semester', 'SAVED SUCCESSFULLY')

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

                $('#editSemesterForm').on('submit', function(ab){

                    ab.preventDefault()

                    var data = $('#editSemesterForm').serializeArray()

                    data.push(
                        { name:'action', value:'edit_semester' }
                    )

                    $.ajax({
                        type: "POST",
                        url: "models/SemesterModel.php",
                        data: data,
                        dataType: "JSON",
                        success: function (response) {
                            
                            if(response == 1){

                                toastr.success('You updated a semester', 'SAVED SUCCESSFULLY')

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


            function semestersTbl(){

                $('#semesters_tbl').DataTable({

                    "aaSorting": [],
                    "columnDefs": [ {
                        "targets": 3,
                        "orderable": false
                    } ]
                })
            }


            function editSemester(semester_Id, semester_name){

                $('#newSemesterForm').hide()
                $('#editSemesterForm').show()

                $('#e_semester_Id').val(semester_Id)
                $('#e_semester_name').val(semester_name)
            }


            function deleteSemester(semester_Id){

                swal({   
                    title: "DELETE SEMESTER?",   
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
                                semesterid:semester_Id,
                                action:"delete_semester"
                            },
                            dataType: "JSON",
                            success: function (response) {
                                
                                if(response == 1){

                                    toastr.success('You deleted a semester. Refreshing the page.', 'REMOVED SUCCESSFULLY')

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