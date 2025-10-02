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

                        <div class="col-lg-4">
                            <h6><b>NOTE:</b></h6>
                            
                            <?php

                                $query ="SELECT 
                                            Grade_remark 
                                        FROM 
                                            grade_remarks 
                                        WHERE 
                                            Status = 1 ";

                                $fetch = mysqli_query($con, $query);

                                $results_arr = array();

                                while($row = mysqli_fetch_assoc($fetch)){

                                    $grade_remark = $row['Grade_remark'];

                                    array_push($results_arr, $grade_remark);
                                }
                            ?>

                            <p>Only <b><?= implode(', ', $results_arr) ?></b> are accepted as Remarks.</p>

                        </div>

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
                        <div class="modal fade" id="filterMod">

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

        <script src="../assets/extra-libs/xlsx/xlsx.full.min.js"></script>

        <script>

            // ========== Data Properties ==============
                var main_semester_Id=''
                var main_subject_Id=''
                var main_course_Id=''
            // ========== Data Properties END ==========
            
            $(document).ready(function () {

                // ============= Select2 ===============
                    $('#semester_dd').select2({
                        placeholder:"Select semester here"
                    })
                    
                    $('#course_dd').select2({
                        placeholder:"Select course here"
                    })

                    $('#subject_dd').select2({
                        placeholder:"Select subject here"
                    })
                // ============= Select2 END ===========

                $('#course_dd').on('change', function(){

                    var course_Id = $(this).val()

                    fetchCourseSubjects('subject_dd', course_Id)
                })

                $('#semester_dd, #subject_dd').on('change', function(){

                    var action_val  = $('#action_val').val()
                    var semester_Id = $('#semester_dd').val()
                    var subject_Id  = $('#subject_dd').val()

                    var is_valid = 1

                    if(semester_Id == ''){

                        is_valid = 0
                    }
                    if(subject_Id == ''){

                        is_valid = 0
                    }

                    if(is_valid == 1){

                        if(action_val == 'Import'){

                            if(subject_Id != ''){
    
                                $('#file_upload_div').show()
                            }
                            else{
    
                                $('#file_upload_div').hide()
                            }
                        }
                        else if(action_val == 'Download'){

                            if(subject_Id != ''){

                                $('#file_download_div').show()
                            }
                            else{

                                $('#file_download_div').hide()
                            }
                        }
                    }
                })

                // =============== Import XLSX ===================
                    $('#upload_xls_btn').on('change', function(e){

                        var is_valid = 1

                        var semester_Id = $('#semester_dd').val()
                        var course_Id   = $('#course_dd').val()
                        var subject_Id  = $('#subject_dd').val()

                        main_semester_Id = semester_Id
                        main_subject_Id  = course_Id
                        main_course_Id   = subject_Id

                        if(semester_Id == ''){

                            is_valid = 0

                            // $('#semester_dd').addClass('is-invalid')
                            toastr.error('Please select semester', 'CANNOT BE EMPTY')
                        }
                        if(course_Id == ''){
                            
                            is_valid = 0
                            
                            // $('#course_dd').addClass('is-invalid')
                            toastr.error('Please select course', 'CANNOT BE EMPTY')
                        }
                        if(subject_Id == ''){
                            
                            is_valid = 0

                            // $('#subject_dd').addClass('is-invalid')
                            toastr.error('Please select subject', 'CANNOT BE EMPTY')
                        }
                        
                        if(is_valid == 1){

                            $('#semester_dd').removeClass('is-invalid')
                            $('#course_dd').removeClass('is-invalid')
                            $('#subject_dd').removeClass('is-invalid')

                            $('#filterMod').modal('hide')
    
                            $('#import_tbl').html('')
    
                            const file   = e.target.files[0]
    
                            var filename = file.name
    
                            const parts = filename.split(".")
    
                            const file_ext = parts[1]
    
                            if(file_ext == 'xlsx'){
    
                                const reader = new FileReader();
                        
                                reader.onload = function (e) {
                        
                                    const data      = new Uint8Array(e.target.result);
                                    const workbook  = XLSX.read(data, { type: 'array' });
                        
                                    const sheetName = workbook.SheetNames[0]; // First sheet
                                    const worksheet = workbook.Sheets[sheetName];
                                    const json      = XLSX.utils.sheet_to_json(worksheet);
                        
                                    var xlsx_items = JSON.stringify(json, null);
                                    var xlsx_items = JSON.parse(xlsx_items);
    
                                    var output=''
                                    var total_items = 0;
    
                                    $.each(xlsx_items, function(key, value){
    
                                        var student_Id      = value.Student_ID
                                        var student_name    = value.Name
                                        var midterm         = value.Midterm
                                        var tentative_final = value.Tentative_Final
                                        var final_grade     = value.Final_Grade
                                        var grade_remark    = value.Remark
                                    
                                        // var student_Id      = Object.keys(value)[0]
                                        // var student_name    = Object.keys(value)[1]
                                        // var midterm         = Object.keys(value)[2]
                                        // var tentative_final = Object.keys(value)[3]
                                        // var final_grade     = Object.keys(value)[4]
                                        // var grade_remark    = Object.keys(value)[5]
    
                                        output+='<tr>'
    
                                        // ========== Student ID =============
                                            output+='<td id="student_row_'+ student_Id +'">'
                                            output+=student_Id 
                                            output+='<input type="hidden" name="student_id_'+ student_Id +'" id="studentid'+ student_Id +'" value="'+ student_Id +'">'
                                            output+='</td>'
                                        // ========== Student ID END =========
    
                                        // ========== Student Name ===========
                                            output+='<td class="font-weight-bold">'+ student_name +'</td>'
                                        // ========== Student Name END =======
    
                                        // ========== Midterm =============
                                            output+='<td>'
                                            output+='<input type="text" class="form-control form-control-sm" name="midterm_'+ student_Id +'" id="midterm_"'+ student_Id +'" placeholder="Input midterm grade here" value="'+ midterm +'" required>'
                                            output+='</td>'
                                        // ========== Midterm END =========
    
                                        // ========== Tentative Final ============
                                            output+='<td>'
                                            output+='<input type="text" class="form-control form-control-sm" name="tentative_'+ student_Id +'" id="tentative_'+ student_Id +'" placeholder="Input tentative final grade here" value="'+ tentative_final +'" required>'
                                            output+='</td>'
                                        // ========== Tentative Final END ========
    
                                        // ========== Final Grade ============
                                            output+='<td>'
                                            output+='<input type="text" class="form-control form-control-sm" name="final_grade_'+ student_Id +'" id="final_grade_'+ student_Id +'" placeholder="Input final grade here" value="'+ final_grade +'" required>'
                                            output+='</td>'
                                        // ========== Final Grade END ========
    
                                        // ========== Remarks ============
                                            output+='<td>'
                                            output+='<input type="text" class="form-control form-control-sm" name="remark_'+ student_Id +'" id="remark_'+ student_Id +'" placeholder="Input remarks here" value="'+ grade_remark +'" required>'
                                            output+='</td>'
                                        // ========== Remarks END ========
    
                                        output+='</tr>'
    
                                        total_items++
                                    })
    
                                    $('#import_tbl').html(output)
    
                                    if(total_items > 0){
    
                                        $('#submit_form_btn').prop('disabled', false)
                                    }
                                }
    
                                reader.readAsArrayBuffer(file);
                            }
                            else{

                                Swal.fire({ 
                                   title: 'UNSUPPORTED FILE', 
                                   text: 'Please import files with .xlsx extension only.', 
                                   type: 'error', 
                                   showCancelButton: false, 
                                   confirmButtonColor: '#3085d6', 
                                   confirmButtonText: 'OKAY', 
                                })
                            }
                        }
                        else{

                            console.log('ERROR')
                        }

                    })
                // =============== Import XLSX END ===============

                $('#bulkImportForm').on('submit', function(aa){

                    aa.preventDefault()

                    var data = $(this).serializeArray()

                    data.push(
                        { name:'action', value:'bulk_import_grades' },
                        { name:'semesterid', value:main_semester_Id },
                        { name:'subjectid', value:main_subject_Id },
                        { name:'courseid', value:main_course_Id }
                    )

                    $.ajax({
                        type: "POST",
                        url: "models/GradesModel.php",
                        data: data,
                        dataType: "JSON",
                        success: function (response) {

                            var no_errors_id    = response.NoErrsArr
                            var with_errors_id  = response.WithErrsArr

                            $('.result-msg').remove()

                            $.each(no_errors_id, function(key, value){

                                var output=''

                                output+='<div class="result-msg"><br><span class="fa fa-info-circle text-success"></span> '
                                output+='<small class="font-weight-bold text-success">Saved Successfully.</small></div>'

                                $(output).appendTo('#student_row_'+ value)
                            })

                            $.each(with_errors_id, function(key, value){
                                
                                var output=''
                                var err_msg=''

                                if(value.Res == 4){

                                    err_msg='Invalid remark value.'
                                }
                                else if(value.Res == 5){

                                    err_msg='Invalid student record'
                                }

                                output+='<div class="result-msg"><br><span class="fa fa-info-circle text-danger"></span> '
                                output+='<small class="font-weight-bold text-danger">'+ err_msg +'</small></div>'

                                $(output).appendTo('#student_row_'+ value.StudId)
                            })
                        }
                    })
                })
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

                    $('#upload_xls_btn').val('')
                    $('#file_download_div').hide()
                }
                else{
                    icon_class='fa fa-download'
                    action_tense='from'
                }

                $('#action_txt').html('<span class="'+ icon_class +'"></span>&nbsp&nbsp'+action_val+' records '+ action_tense +': ')

                $('#action_val').val(action_val)
            }


            function fetchCourseSubjects(id, course_Id){

                var output=''

                $.ajax({
                    type: "POST",
                    url: "models/CoursesModel.php",
                    data: {
                        courseid:course_Id,
                        action:"fetch_subject_courses"
                    },
                    dataType: "JSON",
                    success: function (response) {

                        output+='<option value=""></option>'
                        
                        if(response.length > 0){

                            $.each(response, function(key, value){

                                var subject_Id   = value.SubjectID
                                var subject_name = value.SubjectName
                                var subject_code = value.SubjectCode

                                output+='<option value="'+ subject_Id +'">'+ subject_code +' | '+ subject_name +'</option>'
                            })
                        }
                        else{

                            $('#file_upload_div').hide()
                        }

                        $('#'+id).html(output)
                    }
                })
            }


            function downloadGradeTemplate(){

                var semester_Id = $('#semester_dd').val()
                var course_Id   = $('#course_dd').val()
                var subject_Id  = $('#subject_dd').val()

                // alert('export_grades_xlsx.php?semesterid='+ semester_Id +'&subjectid='+ subject_Id +'&courseid='+course_Id)

                window.open('export_grades_xlsx.php?semesterid='+ semester_Id +'&subjectid='+ subject_Id +'&courseid='+course_Id)

                toastr.success('Please check you downloads', 'Downloaded Successfully')
            }

        </script>

    </body>

</html>