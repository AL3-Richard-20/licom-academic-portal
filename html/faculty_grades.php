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

        <style type="text/css" media="print">
            .dontprint
            { display: none; }
        </style>

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
                <div class="page-breadcrumb dontprint">
                    <div class="row">
                        <div class="col-5 align-self-center">
                            <h4 class="page-title font-weight-bold text-uppercase">Evaluation Grades</h4>
                            <div class="d-flex align-items-center">

                            </div>
                        </div>
                        <div class="col-7 align-self-center">
                            <div class="d-flex no-block justify-content-end align-items-center">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item">
                                            <a href="#">Grades</a>
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

                    <input type="hidden" name="instructor_Id_val" id="instructor_Id_val" value="<?= $_SESSION["licom_usr_Id"] ?>">

                    <div class="row dontprint">

                        <div class="col-lg-4">
                            <div class="form-group">
                                <p><b>Semester:</b></p>
                                <select 
                                    class="form-control form-control-sm" 
                                    name="semester_dd" 
                                    id="semester_dd">
                                    <option value=""></option>
                                    <?php 

                                        $query="SELECT 
                                                    Semester_Id, 
                                                    Semester_name,
                                                    Is_default
                                                FROM 
                                                    semesters 
                                                WHERE 
                                                    Status = 1 
                                                    AND Is_default IN(1, 2) ";

                                        $fetch = mysqli_query($con, $query);

                                        $count = mysqli_num_rows($fetch);

                                        if($fetch && $count > 0){

                                            while($row = mysqli_fetch_assoc($fetch)){

                                                $semester_Id    = $row['Semester_Id'];
                                                $semester_name  = $row['Semester_name'];
                                                $is_default     = $row['Is_default'];

                                                $is_current = '';

                                                if($is_default == 1){
    
                                                    $is_current = '| (Current)';
                                                }

                                                $is_selected = ($is_default == 1) ? 'selected' : '';
                                                
                                                echo "<option value='".$semester_Id."' ".$is_selected.">".$semester_name." ".$is_current."</option>";
                                            }
                                        }
                                    ?>
                                </select>
                            </div>
                        </div>

                        <div class="col-lg-4">
                            <div class="form-group">
                                <p><b>Subject:</b></p>
                                <select 
                                    class="form-control form-control-sm"
                                    name="subject_dd_val"
                                    id="subject_dd_val" 
                                    disabled>
                                    <option value=""></option>
                                </select>
                            </div>
                        </div>

                        <div class="col-lg-4 text-right">
                            <p style="color:transparent;">Action</p>
                            <button 
                                type="button" 
                                class="btn btn-outline-dark font-weight-bold dontprint" 
                                id="print_pdf_btn"
                                onclick="
                                    $('#main-wrapper').attr('data-sidebartype', 'mini-sidebar'); 
                                    $('#main-wrapper').addClass('mini-sidebar'); 
                                    window.print();
                                "
                                disabled>
                                <span class="fa fa-file"></span>
                                &nbspPrint PDF
                            </button>
                        </div>

                    </div>

                    <br>

                    <div class="row">

                        <div class="col-lg-6">
                            <h4>Instructor: <?= $_SESSION["licom_usr_fname"]." ".$_SESSION["licom_usr_lname"] ?></h4><br>
                            <p><b>Semester:</b> <span id="semester_txt"></span></p>
                            <p><b>Subject:</b> <span id="subject_txt"></span></p>
                        </div>

                    </div>

                    <hr>

                    <table class="table table-bordered display nowrap" style="width:100%;">
                        <thead class="font-weight-bold text-uppercase">
                            <tr>
                                <th>Date Added</th>
                                <th>Grade</th>
                                <th>Comment</th>
                                <th class="text-center dontprint">Action</th>
                            </tr>
                        </thead>
                        <tbody id="faculty_eval_grades">
                            <tr>
                                <td colspan="3" class="text-center">No data available in the table.</td>
                            </tr>
                        </tbody>
                    </table>

                    <hr>

                    <div class="row">

                        <div class="col-lg-6">
                            <h4 class="font-weight-bold">Total Students: <span class="text-info" id="total_student_txt">0</span></h4>
                        </div>

                        <div class="col-lg-6 text-right">

                            <h4 class="font-weight-bold">Final Ratings: </h4>
                            <h2><span class="text-info" id="final_grade_txt">0</span></h2>
                            <span id="final_grade_desc"></span>
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

            var instructor_Id = $('#instructor_Id_val').val()

            $(document).ready(function () {

                facultyGrades('', '')

                $('#semester_dd').select2({
                    "placeholder":"Select semester here",
                    "allowClear":true
                })
                $('#instructor_dd').select2({
                    "placeholder":"Select instructor here",
                    "allowClear":true
                })
                $('#subject_dd_val').select2({
                    "placeholder":"Select subject here",
                    "allowClear":true
                })

                setTimeout(function(){

                    var semester_Id = $('#semester_dd').val()

                    subjectDD(semester_Id)

                    $('#subject_dd_val').prop('disabled', false)


                    var sem_data = $('#semester_dd').select2('data')
                    var semester_txt = sem_data[0].text

                    $('#semester_txt').html(semester_txt)


                    var subject_data = $('#subject_dd_val').select2('data')
                    var subject_txt = subject_data[0].text

                    $('#subject_txt').html(subject_txt)

                    $('#print_pdf_btn').prop('disabled', false)

                }, 1000)


                $('#semester_dd').on('change', function(){

                    var semester_Id = $(this).val()
                    var subject_Id  = $('#subject_dd_val').val()

                    if(semester_Id != ''){

                        facultyGrades(semester_Id, subject_Id)

                        subjectDD(semester_Id)

                        var sem_data = $('#semester_dd').select2('data')
                        var semester_txt = sem_data[0].text

                        $('#semester_txt').html(semester_txt)

                        
                        var subject_data = $('#subject_dd_val').select2('data')
                        var subject_txt = subject_data[0].text

                        $('#subject_txt').html(subject_txt)
                    }
                })

                $('#subject_dd_val').on('change', function(){

                    var semester_Id = $('#semester_dd').val()
                    var subject_Id  = $(this).val()

                    if(semester_Id != ''){

                        facultyGrades(semester_Id, subject_Id)

                        var sem_data = $('#semester_dd').select2('data')
                        var semester_txt = sem_data[0].text

                        $('#semester_txt').html(semester_txt)

                        
                        var subject_data = $('#subject_dd_val').select2('data')
                        var subject_txt = subject_data[0].text

                        $('#subject_txt').html(subject_txt)
                    }
                })
            })

            function facultyGrades(semester_Id, subject_Id){

                var output='';
                var counter=0

                $.ajax({
                    type: "POST",
                    url: "models/InstructorModel.php",
                    data: {
                        instructorid:instructor_Id,
                        semesterid:semester_Id,
                        subjectid:subject_Id,
                        action:"instructor_grades"
                    },
                    dataType: "JSON",
                    success: function (response) {

                        if(response.Total > 0){

                            $.each(response.Records, function(key, value){

                                output+='<tr>'
                                output+='<td>'+ value.DateAdded +' | '+ value.TimeAdded +'</td>'
                                output+='<td><h5 class="font-weight-bold">'+ value.GradeVal +' - '+ value.MetricDesc +'</h5></td>'
                                output+='<td><small>'+ value.Remarks +'</small></td>'
                                output+='<td class="text-center dontprint">'

                                var eval_results_page = 'location.href=`eval_results.php?evalid='+value.EvalId+'`'

                                output+='<button type="button" class="btn btn-outline-light text-info" onclick="'+ eval_results_page +'">'
                                output+='<span class="fa fa-info-circle"></span>'
                                output+='</button>'
                                output+='</td>'
                                output+='</tr>'

                                counter++
                            })

                            $('#final_grade_txt').html(response.TotalGrade)
                            $('#final_grade_desc').html("("+ response.MetricDesc2 +")")
                        }
                        else{

                            output+='<tr>'
                            output+='<td colspan="3" class="text-center">No data available in the table.</td>'
                            output+='</tr>'
                        }

                        $('#faculty_eval_grades').html(output)
                        $('#total_student_txt').html(counter)
                    }
                })
            }


            function subjectDD(semester_Id){

                var output=''

                $.ajax({
                    type: "POST",
                    url: "models/SubjectsModel.php",
                    data: {
                        semid:semester_Id,
                        action:'fetch_instructor_subjects',
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

        </script>

    </body>

</html>