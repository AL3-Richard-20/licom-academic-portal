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
                            <h4 class="page-title font-weight-bold text-uppercase">Subjects</h4>
                            <div class="d-flex align-items-center">

                            </div>
                        </div>
                        <div class="col-7 align-self-center">
                            <div class="d-flex no-block justify-content-end align-items-center">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item">
                                            <a href="#">Subjects</a>
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

                                        <table class="table table-hover display nowrap" style="width:100%;" id="subjects_tbl">

                                            <thead class="table-bordered font-weight-bold text-uppercase">
                                                <tr>
                                                    <th>Name</th>
                                                    <th>Code</th>
                                                    <th>Year Levels</th>
                                                    <th>Semesters</th>
                                                    <th>Program</th>
                                                    <th>Units</th>
                                                    <th>Classification</th>
                                                    <th>Date Added</th>
                                                    <th>Time Added</th>
                                                    <th class="text-center">Action</th>
                                                </tr>
                                            </thead>

                                            <tbody class="table-sm">
                                                <?php

                                                    $query="SELECT 
                                                                subjects.Subject_Id,
                                                                courses.Course_Id, 
                                                                courses.Course_name, 
                                                                courses.Course_code,
                                                                subjects.Subject_name,
                                                                subjects.Subject_code,
                                                                subjects.Units,
                                                                subjects.Classification,
                                                                subjects.Date_added,
                                                                subjects.Time_added
                                                            FROM 
                                                                courses 
                                                            LEFT JOIN 
                                                                subjects 
                                                            ON 
                                                                courses.Course_Id = subjects.Course_Id
                                                            WHERE 
                                                                subjects.Status = 1 
                                                            ORDER BY 
                                                                subjects.Date_added DESC, 
                                                                subjects.Time_added DESC ";

                                                    $fetch = mysqli_query($con, $query);

                                                    $count = mysqli_num_rows($fetch);

                                                    if($fetch){

                                                        if($count > 0){

                                                            while($row = mysqli_fetch_assoc($fetch)){

                                                                $subject_Id     = $row['Subject_Id'];
                                                                $course_Id      = $row['Course_Id'];
                                                                $course_name    = $row['Course_name'];
                                                                $course_code    = $row['Course_code'];
                                                                $subject_name   = $row['Subject_name'];
                                                                $subject_code   = $row['Subject_code'];
                                                                $subject_units  = $row['Units'] ?? '---';
                                                                $subject_class  = $row['Classification'] ?? '---';

                                                                $date_added     = dateFormat($row['Date_added']);
                                                                $time_added     = timeFormat($row['Time_added']);

                                                                echo "<tr>";
                                                                echo "<td class='font-weight-bold'>".$subject_name."</td>";
                                                                echo "<td>".$subject_code."</td>";
                                                                echo "<td>
                                                                        <button 
                                                                            type='button' 
                                                                            class='btn btn-outline-light text-dark' 
                                                                            onclick='fetchYearLevels(`".$subject_Id."`, `Year Level`)'>
                                                                            <span class='fa fa-list'></span>
                                                                        </button>
                                                                    </td>";
                                                                echo "<td>
                                                                        <button 
                                                                            type='button' 
                                                                            class='btn btn-outline-light text-dark' 
                                                                            onclick='fetchYearLevels(`".$subject_Id."`, `Semesters`)'>
                                                                            <span class='fa fa-list'></span>
                                                                        </button>
                                                                    </td>";
                                                                echo "<td><span title='".$course_name."' data-toggle='tooltip'>".$course_code."</span></td>";
                                                                echo "<td>".$subject_units."</td>";
                                                                echo "<td>".$subject_class."</td>";
                                                                echo "<td>".$date_added."</td>";
                                                                echo "<td>".$time_added."</td>";
                                                                echo "<td>
                                                                        <button 
                                                                            type='button' 
                                                                            class='btn btn-outline-light btn-sm text-primary' 
                                                                            onclick='editSubject(
                                                                                `".$subject_Id."`, 
                                                                                `".$course_Id."`, 
                                                                                `".$subject_name."`, 
                                                                                `".$subject_code."`, 
                                                                                `".$subject_units."`, 
                                                                                `".$subject_class."`)'>
                                                                            <span class='fa fa-pencil-alt'></span>
                                                                        </button>
                                                                        <button 
                                                                            type='button' 
                                                                            class='btn btn-outline-light btn-sm text-danger' 
                                                                            onclick='deleteSubject(`".$subject_Id."`)'>
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

                                <form method="POST" id="newSubjectForm">

                                    <div class="card-header bg-white">
                                        <h4 class="font-weight-bold text-uppercase">Add New</h4>
                                    </div>

                                    <div class="card-body"> 

                                        <div class="form-group">
                                            <p><b>Program: <span class="text-danger">(*)</span></b></p>
                                            <select 
                                                class="form-control form-control-sm" 
                                                name="course_Id" 
                                                id="course_Id" 
                                                required>
                                                <option value="">Select program here</option>
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

                                                    if($fetch){

                                                        while($row = mysqli_fetch_assoc($fetch)){

                                                            $course_Id      = $row['Course_Id'];
                                                            $course_name    = $row['Course_name'];
                                                            $course_code    = $row['Course_code'];

                                                            echo "<option value='".$course_Id."'>".$course_code." | ".$course_name."</option>";
                                                        }
                                                    }
                                                ?>
                                            </select>
                                        </div>

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
                                        <div class="form-group">
                                            <p><b>Units: <span class="text-danger">(*)</span></b></p>
                                            <input 
                                                type="number" 
                                                class="form-control form-control-sm"
                                                name="subject_units" 
                                                id="subject_units"
                                                placeholder="Input subject unit here" 
                                                autocomplete="off"
                                                required>
                                        </div>
                                        <div class="form-group">
                                            <p><b>Classification: <span class="text-danger">(*)</span></b></p>
                                            <select 
                                                class="form-control form-control-sm" 
                                                name="subject_class" 
                                                id="subject_class" 
                                                style="width:100%;">
                                                <option value="" selected disabled></option>
                                                <option value="Laboratory">Laboratory</option>
                                                <option value="Lecture">Lecture</option>
                                            </select>
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

                                <form method="POST" id="editSubjectForm" style="display:none;">

                                    <div class="card-header bg-white">
                                        <h4 class="font-weight-bold text-uppercase">Edit Subject</h4>
                                    </div>

                                    <div class="card-body">

                                        <input 
                                            type="hidden" 
                                            class="form-control form-control-sm"
                                            name="e_subject_Id" 
                                            id="e_subject_Id">

                                         <div class="form-group">
                                            <p><b>Program: <span class="text-danger">(*)</span></b></p>
                                            <select 
                                                class="form-control form-control-sm" 
                                                name="e_course_Id" 
                                                id="e_course_Id" 
                                                required>
                                                <option value="">Select program here</option>
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

                                                    if($fetch){

                                                        while($row = mysqli_fetch_assoc($fetch)){

                                                            $course_Id      = $row['Course_Id'];
                                                            $course_name    = $row['Course_name'];
                                                            $course_code    = $row['Course_code'];

                                                            echo "<option value='".$course_Id."'>".$course_code." | ".$course_name."</option>";
                                                        }
                                                    }
                                                ?>
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <p><b>Subject Name: <span class="text-danger">(*)</span></b></p>
                                            <input 
                                                type="text" 
                                                class="form-control form-control-sm"
                                                name="e_subject_name" 
                                                id="e_subject_name"
                                                placeholder="Input subject name here" 
                                                autocomplete="off"
                                                required>
                                        </div>
                                        <div class="form-group">
                                            <p><b>Subject Code: <span class="text-danger">(*)</span></b></p>
                                            <input 
                                                type="text" 
                                                class="form-control form-control-sm"
                                                name="e_subject_code" 
                                                id="e_subject_code"
                                                placeholder="Input subject code here" 
                                                autocomplete="off"
                                                required>
                                        </div>
                                        <div class="form-group">
                                            <p><b>Units: <span class="text-danger">(*)</span></b></p>
                                            <input 
                                                type="number" 
                                                class="form-control form-control-sm"
                                                name="e_subject_units" 
                                                id="e_subject_units"
                                                placeholder="Input subject unit here" 
                                                autocomplete="off"
                                                required>
                                        </div>
                                        <div class="form-group">
                                            <p><b>Classification: <span class="text-danger">(*)</span></b></p>
                                            <select 
                                                class="form-control form-control-sm" 
                                                name="e_subject_class" 
                                                id="e_subject_class" 
                                                style="width:100%;">
                                                <option value="" selected disabled></option>
                                                <option value="Laboratory">Laboratory</option>
                                                <option value="Lecture">Lecture</option>
                                            </select>
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
                                                $('#editSubjectForm').hide()
                                                $('#newSubjectForm').show()
                                            ">
                                            Discard
                                        </button>
                                    </div>

                                </form>

                            </div>

                        </div>

                    </div>

                    <!-- ============ Year Levels ============= -->
                        <div class="modal fade" id="yearLevelMod">

                            <div class="modal-dialog" role="document">

                                <div class="modal-content">

                                    <div class="modal-header">
                                        <h5 class="modal-title font-weight-bold text-uppercase">Year Levels</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <table class="table table-bordered">
                                            <!-- <thead class="font-weight-bold text-uppercase">
                                                <tr>
                                                    <th>Year Level</th>
                                                </tr>
                                            </thead> -->
                                            <tbody id="subj_year_levels">
                                                <tr>
                                                    <td>No data available in the table.</td>
                                                </tr>
                                            </tbody>
                                        </table>
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
                    <!-- ============ Year Levels END ========= -->

                    <!-- ============ Semesters ============= -->
                        <div class="modal fade" id="semestersMod">

                            <div class="modal-dialog" role="document">

                                <div class="modal-content">

                                    <div class="modal-header">
                                        <h5 class="modal-title font-weight-bold text-uppercase">Semesters</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <table class="table table-bordered">
                                            <!-- <thead class="font-weight-bold text-uppercase">
                                                <tr>
                                                    <th>Year Level</th>
                                                </tr>
                                            </thead> -->
                                            <tbody id="subj_semesters">
                                                <tr>
                                                    <td>No data available in the table.</td>
                                                </tr>
                                            </tbody>
                                        </table>
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
                    <!-- ============ Semesters END ========= -->

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

        <script src="../assets/libs/select2/dist/js/select2.full.min.js"></script>


        <!--Wave Effects -->
        <script src="../dist/js/waves.js"></script>


        <!--Menu sidebar -->
        <script src="../dist/js/sidebarmenu.js"></script>


        <!--Custom JavaScript -->
        <script src="../dist/js/custom.min.js"></script>

        <script>

            $(document).ready(function () {

                // =========== Select2 =============
                    $('#subject_class').select2({
                        "placeholder":"Select classification here",
                        "allowClear":true
                    })
                    $('#e_subject_class').select2({
                        "placeholder":"Select classification here",
                        "allowClear":true
                    })
                // =========== Select2 END =========

                subjectsTbl()
            
                $('#newSubjectForm').on('submit', function(aa){

                    aa.preventDefault()

                    var data = $('#newSubjectForm').serializeArray()

                    data.push(
                        { name:'action', value:'new_subject'}
                    )

                    $.ajax({
                        type: "POST",
                        url: "models/SubjectsModel.php",
                        data: data,
                        dataType: "JSON",
                        success: function (response) {
                            
                            if(response == 1){

                                toastr.success('You added a new subject', 'SAVED SUCCESSFULLY')

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

                $('#editSubjectForm').on('submit', function(ab){

                    ab.preventDefault()

                    var data = $('#editSubjectForm').serializeArray()

                    data.push(
                        { name:'action', value:'edit_subject' }
                    )

                    $.ajax({
                        type: "POST",
                        url: "models/SubjectsModel.php",
                        data: data,
                        dataType: "JSON",
                        success: function (response) {
                            
                            if(response == 1){

                                toastr.success('You updated a subject', 'SAVED SUCCESSFULLY')

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
                    });
                })
            })


            function subjectsTbl(){

                $('#subjects_tbl').DataTable({

                    "aaSorting": [],
                    "columnDefs": [ {
                        "targets": 5,
                        "orderable": false
                    } ],
                    layout: {
                        topStart: {
                            buttons: ['copy', 'csv', 'excel', 'pdf', 'print']
                        }
                    }
                })
            }


            function editSubject(
                subject_Id, 
                course_Id, 
                subject_name, 
                subject_code, 
                subject_units, 
                subject_class){

                $('#newSubjectForm').hide()
                $('#editSubjectForm').show()

                $('#e_subject_Id').val(subject_Id)
                $('#e_course_Id').val(course_Id)
                $('#e_subject_name').val(subject_name)
                $('#e_subject_code').val(subject_code)
                $('#e_subject_units').val(subject_units)
                $('#e_subject_class').val(subject_class).trigger('change')
            }


            function deleteSubject(subject_Id){

                swal({   
                    title: "DELETE SUBJECT?",   
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
                            url: "models/SubjectsModel.php",
                            data: {
                                subjectid:subject_Id,
                                action:"delete_subject"
                            },
                            dataType: "JSON",
                            success: function (response) {
                                
                                if(response == 1){

                                    toastr.success('You deleted a subject. Refreshing the page.', 'REMOVED SUCCESSFULLY')

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


            function fetchYearLevels(subject_Id, group_by){

                if(group_by == 'Year Level'){

                    $('#yearLevelMod').modal('show')

                    var tbl_Id = 'subj_year_levels'
                }
                else{

                    $('#semestersMod').modal('show')

                    var tbl_Id = 'subj_semesters'
                }

                var output=''

                $.ajax({
                    type: "POST",
                    url: "models/SubjectsModel.php",
                    data: {
                        subjectid:subject_Id,
                        groupby:group_by,
                        action:"fetch_year_levels_and_semesters"
                    },
                    dataType: "JSON",
                    success: function (response) {
                        
                        if(response.length > 0){

                            $.each(response, function(key, value){

                                if(group_by == 'Year Level'){
    
                                    var result = value.YearLevel
                                }
                                else{
    
                                    var result = value.Semester
                                }
                                
                                output+='<tr>'
                                output+='<td>'+ result +'</td>'
                                output+='</tr>'
                            })

                        }
                        else{

                            output+='<tr>'
                            output+='<td>No data available in the table.</td>'
                            output+='</tr>'
                        }

                        $('#'+tbl_Id).html(output)
                    }
                });
            }

        </script>

    </body>

</html>