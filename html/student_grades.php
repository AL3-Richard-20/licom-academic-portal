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
                            <h4 class="page-title font-weight-bold text-uppercase">Grades</h4>
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

                    <input type="hidden" name="student_Id_val" id="student_Id_val" value="<?= $_SESSION["licom_usr_Id"] ?>">

                    <div class="row">

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
                        </div>

                    </div>

                    <br>

                    <table class="table table-bordered display nowrap" style="width:100%;">
                        <thead class="font-weight-bold text-uppercase">
                            <tr>
                                <th>Subject Code</th>
                                <th>Subject Name</th>
                                <th>Grade</th>
                                <th>Remarks</th>
                                <th>Instructor</th>
                            </tr>
                        </thead>
                        <tbody id="student_subjects">
                            <tr>
                                <td colspan="6" class="text-center">No data available in the table.</td>
                            </tr>
                        </tbody>
                    </table>

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

            var student_Id = $('#student_Id_val').val()

            $(document).ready(function () {

                fetchStudentSubjects('')

                $('#semester_dd').select2({
                    "placeholder":"Select semester here",
                    "allowClear":true
                })

                $('#semester_dd').on('change', function(){

                    var semester_Id = $(this).val()

                    if(semester_Id != ''){

                        fetchStudentSubjects(semester_Id)
                    }
                })
            })


            function fetchStudentSubjects(semester_Id){

                var output=''

                $.ajax({
                    type: "POST",
                    url: "models/ClassSchedulesModel.php",
                    data: {
                        studid:student_Id,
                        semesterid:semester_Id,
                        action:"fetch_user_class_schedules"
                    },
                    dataType: "JSON",
                    success: function (response) {

                        if(response.data.length > 0){

                            $.each(response.data, function(key, value){

                                var subject_Id   = value.SubjectId
                                var subject_code = value.SubjectCode
                                var subject_name = value.SubjectName2
                                var instructor   = value.InstructorName

                                output+='<tr>'
                                output+='<td>'+ subject_code +'</td>'
                                output+='<td class="font-weight-bold">'+ subject_name +'</td>'

                                var stud_grade_info = fetchStudentGrades(semester_Id, subject_Id, student_Id)

                                output+='<td><h5 id="stud_subj_grade_txt'+ subject_Id +'">---</h5></td>'
                                output+='<td><h5 id="stud_subj_remark_txt'+ subject_Id +'">---</h5></td>'
                                output+='<td style="display:none;" id="stud_subj_remark_Id_txt'+ subject_Id +'">---</td>'
                                output+='<td>'+ instructor +'</td>'
                                output+='</tr>'
                            })
                        }
                        else{

                            output+='<tr>'
                            output+='<td class="text-center" colspan="5">No data available in the table.</td>'
                            output+='<tr>'
                        }
                        
                        $('#student_subjects').html(output)
                    }
                })
            }


            function fetchStudentGrades(semester_Id, subject_Id, student_Id){

                $.ajax({
                    type: "POST",
                    url: "models/GradesModel.php",
                    data: {
                        semesterid:semester_Id,
                        subjectid:subject_Id,
                        studentid:student_Id,
                        action:"fetch_student_grades"
                    },
                    dataType: "JSON",
                    success: function (response) {

                        $.each(response, function(key, value){

                            $('#stud_subj_grade_txt'+subject_Id).html(value.GradeVal)
                            $('#stud_subj_remark_txt'+subject_Id).html('<span class="font-weight-bold '+ value.ColorInd +'">'+value.Remarks+'</span>')
                            $('#stud_subj_remark_Id_txt'+subject_Id).html(value.RemarksId)
                        })                        
                    }
                })
            }

        </script>

    </body>

</html>