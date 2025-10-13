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

                        <div class="col-lg-3">
                            <p><b>Semester: <span class="text-danger">(*)</span></b></p>
                            <select 
                                class="form-control form-control-sm"
                                name="semester_dd_val"
                                id="semester_dd_val">
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

                        <div class="col-lg-3">
                            <p><b>Subject: <span class="text-danger">(*)</span></b></p>
                            <select 
                                class="form-control form-control-sm"
                                name="subject_dd_val"
                                id="subject_dd_val">
                                <option value=""></option>
                            </select>
                        </div>

                        <div class="col-lg-4"></div>

                        <div class="col-lg-4 text-right">
                            <!-- <button
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
                            </button> -->
                        </div>

                    </div>

                    <br>

                    <form method="POST" id="bulkImportForm">

                        <div class="table-responsive">

                            <table class="table table-hover">
                                <thead class="table-bordered font-weight-bold text-uppercase" style="white-space:nowrap;">
                                    <tr>
                                        <th>Student ID</th>
                                        <th>Name</th>
                                        <th>Midterm</th>
                                        <th>Tentative Final</th>
                                        <th>Final</th>
                                        <th>Remarks</th>
                                    </tr>
                                </thead>
                                <tbody class="table-sm" id="import_tbl">
                                    <tr>
                                        <td class="text-center" colspan="6">No data avaiable in the table.</td>
                                    </tr>
                                </tbody>
                            </table>

                        </div>

                        <br>

                        <div class="row">

                            <div class="col-lg-4"></div>

                            <div class="col-lg-4 text-center">
                                <button 
                                    type="submit" 
                                    class="btn btn-success font-weight-bold text-uppercase" 
                                    id="submit_form_btn"
                                    disabled>
                                    <span class="fa fa-check"></span>
                                    Submit
                                </button>
                                <button 
                                    type="button" 
                                    class="btn btn-outline-light text-dark font-weight-bold text-uppercase" 
                                    onclick="history.back();">
                                    Back
                                </button>
                            </div>

                            <div class="col-lg-4"></div>
                        </div>

                    </form>


                    <!-- =============== Filter Modal =============== -->
                        <!-- <div class="modal fade" id="filterMod">

                            <div class="modal-dialog" role="document">

                                <form method="POST">

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

                                            <div class="form-group">
                                                <p><b>Subject:</b></p>
                                                <select 
                                                    class="form-control form-control" 
                                                    name="subject_dd" 
                                                    id="subject_dd" 
                                                    style="width:100%;" 
                                                    required>
                                                </select>
                                            </div>

                                            <div class="form-group" id="file_upload_div" style="display:none;">
                                                <p><b>File:</b></p>
                                                <input 
                                                    type="file" 
                                                    name="upload_xls_btn" 
                                                    id="upload_xls_btn" 
                                                    accept=".xlsx, .csv">
                                            </div>

                                            <div class="form-group" id="file_download_div" style="display:none;">
                                                <button 
                                                    type="button" 
                                                    class="btn btn-success btn-sm font-weight-bold text-uppercase" 
                                                    onclick="downloadGradeTemplate()">
                                                    Download
                                                </button>
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

                                </form>

                            </div>

                        </div> -->
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

        <!-- <script src="../assets/extra-libs/xlsx/xlsx.full.min.js"></script> -->

        <script>
            
            $(document).ready(function () {

                // ============= Select2 ===============
                    $('#semester_dd_val').select2({
                        placeholder:"Select semester here"
                    })

                    $('#subject_dd_val').select2({
                        placeholder:"Select subject here"
                    })
                // ============= Select2 END ===========

                $('#semester_dd_val').on('change', function(){

                    var semester_Id = $('#semester_dd_val').val()

                    subjectDD(semester_Id)
                })

                $('#subject_dd_val').on('change', function(){

                    var semester_Id = $('#semester_dd_val').val()
                    var subject_Id  = $('#subject_dd_val').val()

                    fetchStudentsWithGrades(semester_Id, subject_Id)
                })

                $('#bulkImportForm').on('submit', function(aa){

                    aa.preventDefault()

                    var semester_Id = $('#semester_dd_val').val()
                    var subject_Id  = $('#subject_dd_val').val()

                    var data = $(this).serializeArray()

                    data.push(
                        { name:'action', value:'bulk_import_grades2' },
                        { name:'semesterid', value:semester_Id },
                        { name:'subjectid', value:subject_Id }
                    )

                    $.ajax({
                        type: "POST",
                        url: "models/GradesModel.php",
                        data: data,
                        dataType: "JSON",
                        success: function (response) {
                        
                            fetchStudentsWithGrades(semester_Id, subject_Id)

                            setTimeout(function(){

                                var no_errors_id    = response.NoErrsArr
                                var with_errors_id  = response.WithErrsArr
    
                                $('.result-msg').remove()
    
                                $.each(no_errors_id, function(key, value){
    
                                    var output=''
    
                                    output+='<div class="result-msg"><span class="fa fa-info-circle text-success"></span> '
                                    output+='<small class="font-weight-bold text-success">Saved Successfully.</small></div>'
    
                                    $(output).appendTo('#student_row_'+ value)
                                })
    
                                $.each(with_errors_id, function(key, value){
                                    
                                    var output=''
                                    var err_msg=''
    
                                    if(value.Res == 5){
    
                                        err_msg='Grade value cannot be set as zero.'
                                    }
    
                                    output+='<div class="result-msg"><span class="fa fa-info-circle text-danger"></span> '
                                    output+='<small class="font-weight-bold text-danger">'+ err_msg +'</small></div>'
    
                                    $(output).appendTo('#student_row_'+ value.StudId)
                                })

                            }, 2000)
                        }
                    })
                })
            })

            function subjectDD(semester_Id){

                var output=''

                $.ajax({
                    type: "POST",
                    url: "models/SubjectsModel.php",
                    data: {
                        semid:semester_Id,
                        action:'fetch_instructor_subjects'x
                    },
                    dataType: "JSON",
                    success: function (response) {
                        
                        if(response.length > 0){

                            output+='<option value=""></option>'
                            
                            $.each(response, function(key, value){

                                var class_sched_Id  = value.ClassSchedId
                                var subject_Id      = value.SubjectID
                                var subject_name    = value.SubjectName
                                var subject_code    = value.SubjectCode
                                var course_code     = value.CourseCode

                                output+='<option value="'+ subject_Id +'">'+ course_code +' | '+ subject_code +' | '+ subject_name +'</option>'
                            })
                        }

                        $('#subject_dd_val').html(output)
                    }
                })
            }


            function fetchStudentsWithGrades(semester_Id, subject_Id){

                var total_students = 0

                var output=''

                $.ajax({
                    type: "POST",
                    url: "models/StudentModel.php",
                    data: {
                        semid:semester_Id,
                        subjectid:subject_Id,
                        action:"fetch_students_with_grades"
                    },
                    dataType: "JSON",
                    success: function (response) {
                        
                        if(response.length > 0){

                            $.each(response, function(key, value){

                                var stud_Id      = value.StudID 
                                var stud_name    = value.StudName
                                var midterm      = value.Midterm ?? 0
                                var tentative    = value.Tentative ?? 0
                                var final_grade  = value.FinalGrade ?? 0
                                var grade_remark = value.GradeRemark ?? '---'

                                output+='<tr>'

                                output+='<td id="student_row_'+ stud_Id +'">'
                                output+='#'+ stud_Id
                                output+='<input type="hidden" name="student_id_'+ stud_Id +'" id="student_id_'+ stud_Id +'" value="'+ stud_Id +'">'
                                output+='</td>'
                                
                                output+='<td class="font-weight-bold">'+ stud_name +'</td>'
                                
                                output+='<td>'
                                output+='<input type="number" class="form-control form-control-sm" step="any" name="midterm_'+ stud_Id +'" id="midterm_'+ stud_Id +'" value="'+ midterm +'">'
                                output+='</td>'
                                
                                output+='<td>'
                                output+='<input type="number" class="form-control form-control-sm" step="any" name="tentative_'+ stud_Id +'" id="tentative_'+ stud_Id +'" value="'+ tentative +'">'
                                output+='</td>'
                                
                                output+='<td>'
                                output+='<input type="number" class="form-control form-control-sm" step="any" name="final_grade_'+ stud_Id +'" id="final_grade_'+ stud_Id +'" value="'+ final_grade +'">'
                                output+='</td>'
                                
                                output+='<td>'+ grade_remark +'</td>'
                                
                                output+='</tr>'

                                total_students++
                            })
                        }
                        else{

                            output+='<tr>'
                            output+='<td class="text-center" colspan="6">No data available in the table.</td>'
                            output+='</tr>'
                        }

                        $('#import_tbl').html(output)
    
                        if(total_students > 0){
    
                            $('#submit_form_btn').prop('disabled', false)
                        }
                        else{

                            $('#submit_form_btn').prop('disabled', true)
                        }
                    }

                })
            }

        </script>

    </body>

</html>