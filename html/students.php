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
        <!-- <link href="../assets/libs/chartist/dist/chartist.min.css" rel="stylesheet">
        <link href="../assets/extra-libs/c3/c3.min.css" rel="stylesheet">
        <link href="../assets/libs/morris.js/morris.css" rel="stylesheet"> -->


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
                            <h4 class="page-title font-weight-bold text-uppercase">Student Records</h4>
                            <div class="d-flex align-items-center">

                            </div>
                        </div>
                        <div class="col-7 align-self-center">
                            <div class="d-flex no-block justify-content-end align-items-center">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item">
                                            <a href="#">Students</a>
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

                    <div class="card">

                        <div class="card-header bg-white">
                            <div class="row">
                                <div class="col-lg-6">
                                    <!-- <p><b>Filter by:</b></p> -->
                                    <button 
                                        type="button" 
                                        class="btn btn-secondary btn-sm font-weight-bold text-uppercase">
                                        <span class="fa fa-calendar"></span>
                                        &nbspFilter
                                    </button>
                                </div>
                                <div class="col-lg-6 text-right">
                                    <!-- <p style="color:transparent;">Action</p> -->
                                    <button 
                                        type="button" 
                                        class="btn btn-success btn-sm font-weight-bold text-uppercase"
                                        onclick="location.href='add_new_student.php';">
                                        <span class="fa fa-plus"></span>
                                        Add New
                                    </button>
                                </div>
                            </div>
                        </div>

                        <div class="card-body">

                            <div class="table-responsive">

                                <table class="table table-hover" style="width:100%;" id="students_tbl">

                                    <thead class="table-bordered font-weight-bold text-uppercase">
                                        <tr>
                                            <th>ID #</th>
                                            <th>Name</th>
                                            <th>Contact No.</th>
                                            <th>Date Added</th>
                                            <th>Time Added</th>
                                            <th>Status</th>
                                            <th class="text-center">Actions</th>
                                        </tr>
                                    </thead>

                                    <tbody class="table-sm">

                                        <?php

                                            $query="SELECT 
                                                        users.User_Id,
                                                        users.FName, 
                                                        users.MName, 
                                                        users.LName, 
                                                        users.Phone_no,
                                                        users.Date_added, 
                                                        users.Time_added,
                                                        users.Status  
                                                    FROM 
                                                        users 
                                                    LEFT JOIN 
                                                        accounts 
                                                    ON 
                                                        users.User_Id = accounts.User_Id
                                                    WHERE 
                                                        users.Status = 1 
                                                        AND accounts.Level_Id = 3 
                                                    ORDER BY 
                                                        users.User_Id DESC,
                                                        users.Date_added DESC, 
                                                        users.Time_added DESC ";

                                            $fetch = mysqli_query($con, $query);

                                            $count = mysqli_num_rows($fetch);

                                            if($count > 0){

                                                while($row = mysqli_fetch_assoc($fetch)){

                                                    $user_Id    = $row['User_Id'];
                                                    $fname      = $row['FName'];
                                                    $mname      = $row['MName'];
                                                    $lname      = $row['LName'];
                                                    $phone_no   = $row['Phone_no'];
                                                    $date_added = $row['Date_added'];
                                                    $time_added = $row['Time_added'];
                                                    $status     = $row['Status'];

                                                    $student_fullname = $fname." ".$lname;

                                                    echo "<tr>";
                                                    echo "<td>".$user_Id."</td>";
                                                    echo "<td class='font-weight-bold'>".$fname." ".$mname." ".$lname."</td>";
                                                    echo "<td>".$phone_no."</td>";
                                                    echo "<td>".dateFormat($date_added)."</td>";
                                                    echo "<td>".timeFormat($time_added)."</td>";

                                                    if($status == 1){

                                                        $status_txt = '<span class="badge badge-success font-weight-bold text-uppercase">Active</span>';
                                                    }
                                                    else if($status == 2){

                                                        $status_txt = '<span class="badge badge-danger font-weight-bold text-uppercase">Inactive</span>';
                                                    }

                                                    echo "<td>".$status_txt."</td>";
                                                    echo "<td class='text-center'>
                                                            <button 
                                                                type='button' 
                                                                class='btn btn-outline-light btn-sm text-primary' 
                                                                onclick='location.href=`student_info.php?studid=".$user_Id."`;' 
                                                                title='Edit record'>
                                                                <span class='fa fa-pencil-alt'></span>
                                                            </button>
                                                            <button 
                                                                type='button' 
                                                                class='btn btn-outline-light btn-sm text-dark' 
                                                                title='Input grades' 
                                                                onclick='inputGradesModal(`".$user_Id."`, `".$student_fullname."`)'>
                                                                <span class='fa fa-file-alt'></span>
                                                            </button>
                                                        </td>";
                                                    echo "</tr>";
                                                }
                                            }
                                            else{

                                                echo "<tr>";
                                                echo "<td class='text-center' colspan='7'>No data available in the table.</td>";
                                                echo "</tr>";
                                            }
                                        ?>

                                    </tbody>

                                </table>

                            </div>

                            <!-- =============== Grades Modal ================= -->
                                <div class="modal fade" id="gradesModal" style="padding-right: 17px;" data-backdrop="static" data-keyboard="false">

                                    <div class="modal-dialog modal-lg" role="document" style="max-width:1140px;">

                                        <div class="modal-content" style="min-height:90vh;">

                                            <div class="modal-header">
                                                <h4 class="modal-title font-weight-bold text-uppercase">Grades of (<span class="text-info" id="student_fname_txt"></span>)</h4>
                                            </div>

                                            <div class="modal-body" style="overflow:auto; max-height:70vh;">

                                                <div class="row">

                                                    <div class="col-lg-8">

                                                        <input type="hidden" name="stud_Id_val" id="stud_Id_val">

                                                        <div class="row">
                                                            <div class="col-lg-6">
                                                                <p><b>Semester:</b></p>
                                                                <select 
                                                                    class="form-control form-control-sm"
                                                                    name="semester_dd_val"
                                                                    id="semester_dd_val" 
                                                                    style="width:100%;">
                                                                    <option value=""></option>
                                                                    <?php

                                                                        $query="SELECT 
                                                                                    Semester_Id, 
                                                                                    Semester_name 
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
                                                                                
                                                                                echo "<option value='".$semester_Id."'>".$semester_name."</option>";
                                                                            }
                                                                        }
                                                                    ?>
                                                                </select>
                                                            </div>
                                                            <div class="col-lg-6"></div>
                                                        </div>

                                                        <br>

                                                        <table 
                                                            class="table table-hover display nowrap" 
                                                            style="width:100%;">
                                                            <thead class="font-weight-bold text-uppercase table-bordered">
                                                                <tr>
                                                                    <th>Subject</th>
                                                                    <th>Grade</th>
                                                                    <th>Remarks</th>
                                                                    <th class="text-center">Actions</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody class="table-sm" id="student_subjects"></tbody>
                                                        </table>

                                                    </div>

                                                    <div class="col-lg-4">

                                                        <div class="card" id="add_new_grade_form" style="display:none;">

                                                            <div class="card-header bg-white">
                                                                <h5 class="font-weight-bold text-uppercase">Set Subject Grade</h5>
                                                            </div>

                                                            <div class="card-body">

                                                                <table class="table table-sm">
                                                                    <tbody>
                                                                        <!-- <tr>
                                                                            <td class="font-weight-bold">Semester:</td>
                                                                            <td id="ssg_subject_semester">---</td>
                                                                        </tr> -->
                                                                        <tr>
                                                                            <td class="font-weight-bold">Subject:</td>
                                                                            <td id="ssg_subject_txt">---</td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>

                                                                <br>

                                                                <form method="POST" id="newSubjectGradeForm">

                                                                    <input type="hidden" name="ssg_student_Id" id="ssg_student_Id">
                                                                    <input type="hidden" name="ssg_semester_Id" id="ssg_semester_Id">
                                                                    <input type="hidden" name="ssg_subject_Id" id="ssg_subject_Id">

                                                                    <div class="form-group">
                                                                        <p><b>Grade: <span class="text-danger">(*)</span></b></p>
                                                                        <input 
                                                                            type="number" 
                                                                            class="form-control form-control-sm" 
                                                                            name="ssg_grade_val"
                                                                            id="ssg_grade_val" 
                                                                            placeholder="Input grade here" 
                                                                            step="any" 
                                                                            required>
                                                                    </div>

                                                                    <div class="form-group">
                                                                        <p><b>Remarks: <span class="text-danger">(*)</span></b></p>
                                                                        <select 
                                                                            class="form-control form-control-sm" 
                                                                            name="remarks_dd" 
                                                                            id="remarks_dd" 
                                                                            required>

                                                                            <option value="" selected disabled>Select remark here</option>

                                                                            <?php

                                                                                $query="SELECT 
                                                                                            Grade_Remark_Id, 
                                                                                            Grade_Remark 
                                                                                        FROM 
                                                                                            grade_remarks 
                                                                                        WHERE 
                                                                                            Status = 1 ";

                                                                                $fetch = mysqli_query($con, $query);

                                                                                $count = mysqli_num_rows($fetch);

                                                                                if($fetch && $count > 0){

                                                                                    while($row = mysqli_fetch_assoc($fetch)){

                                                                                        $grade_remark_Id = $row['Grade_Remark_Id'];
                                                                                        $grade_remark    = $row['Grade_Remark'];

                                                                                        echo "<option value='".$grade_remark_Id."'>".$grade_remark."</option>";
                                                                                    }
                                                                                }
                                                                            ?>
                                                                        </select>
                                                                    </div>

                                                                    <hr>

                                                                    <div class="text-right">
                                                                        <button 
                                                                            type="submit" 
                                                                            class="btn btn-success btn-sm font-weight-bold text-uppercase">
                                                                            <span class="fa fa-check"></span>
                                                                            Submit
                                                                        </button>
                                                                        <button 
                                                                            type="button" 
                                                                            class="btn btn-outline-light text-dark btn-sm font-weight-bold text-uppercase" 
                                                                            onclick="$('#add_new_grade_form').hide();">
                                                                            Discard
                                                                        </button>
                                                                    </div>

                                                                </form>

                                                            </div>

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
                            <!-- =============== Grades Modal END ============= -->

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

            $(document).ready(function () {

                // ============ Select2 ================
                    $('#semester_dd_val').select2({
                        "placeholder":"Select semester here"
                    })
                // ============ Select2 END ============
                

                $('#students_tbl').DataTable({

                    "aaSorting": [],
                    "columnDefs": [ {
                        "targets": 6,
                        "orderable": false
                    } ]
                })

                $('#semester_dd_val').on('change', function(){

                    var semester_Id = $(this).val()

                    if(semester_Id != ''){

                        fetchStudentSubjects(semester_Id)
    
                        $('#add_new_grade_form').hide()
                    }
                })

                $('#newSubjectGradeForm').on('submit', function(aa){

                    aa.preventDefault()

                    var data = $(this).serializeArray()

                    data.push(
                        { name:'action', value:'new_student_grade' }
                    )

                    $.ajax({
                        type: "POST",
                        url: "models/GradesModel.php",
                        data: data,
                        dataType: "JSON",
                        success: function (response) {
                            
                            if(response == 1){

                                $('#newSubjectGradeForm')[0].reset()

                                var semester_Id = $('#semester_dd_val').val()

                                if(semester_Id != ''){

                                    fetchStudentSubjects(semester_Id)
                
                                    $('#add_new_grade_form').hide()
                                }

                                toastr.success('You added student grade record', 'SUCCESSFULLY ADDED')
                            }
                            else if(response == 2 || response == 3){

                                toastr.error('Please contact your developer', 'SOMETHING WENT WRONG')
                            }
                        }
                    });
                })
            })


            function fetchStudentSubjects(semester_Id){

                var student_Id = $('#stud_Id_val').val()

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
                                var subject_name = value.SubjectName2

                                output+='<tr>'
                                output+='<td>'+ subject_name +'</td>'

                                var stud_grade_info = fetchStudentGrades(semester_Id, subject_Id, student_Id)

                                output+='<td id="stud_subj_grade_txt'+ subject_Id +'">---</td>'
                                output+='<td id="stud_subj_remark_txt'+ subject_Id +'">---</td>'
                                output+='<td style="display:none;" id="stud_subj_remark_Id_txt'+ subject_Id +'">---</td>'
                                output+='<td class="text-center">'

                                var editStudentGrade = 'editStudentGrade(`'+semester_Id+'`, `'+subject_Id+'`, `'+subject_name+'`, `'+student_Id+'`)'

                                output+='<button type="button" class="btn btn-outline-light btn-sm text-primary" onclick="'+ editStudentGrade +'">'
                                output+='<span class="fa fa-pencil-alt"></span>'
                                output+='</button>'
                                output+='</td>'
                                output+='</tr>'
                            })
                        }
                        else{

                            output+='<tr>'
                            output+='<td class="text-center" colspan="4">No data available in the table.</td>'
                            output+='<tr>'
                        }
                        
                        $('#student_subjects').html(output)
                    }
                })
            }


            function inputGradesModal(student_Id, student_name){

                $('#gradesModal').modal('show')

                $("#semester_dd_val").val('').trigger('change')

                $('#student_fname_txt').html(student_name)

                $('#stud_Id_val').val(student_Id)

                $('#add_new_grade_form').hide()

                var output=''

                output+='<tr>'
                output+='<td class="text-center" colspan="4">No data available in the table.</td>'
                output+='<tr>'

                $('#student_subjects').html(output)
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
                            $('#stud_subj_remark_txt'+subject_Id).html(value.Remarks)
                            $('#stud_subj_remark_Id_txt'+subject_Id).html(value.RemarksId)
                        })                        
                    }
                })
            }


            function editStudentGrade(semester_Id, subject_Id, subject_name, student_Id){

                $('#add_new_grade_form').show()

                $('#ssg_student_Id').val(student_Id)
                $('#ssg_semester_Id').val(semester_Id)
                $('#ssg_subject_Id').val(subject_Id)

                var subject_grade  = $('#stud_subj_grade_txt'+subject_Id).text()
                var subject_remark = $('#stud_subj_remark_Id_txt'+subject_Id).text()

                $('#ssg_subject_txt').html(subject_name)

                $('#ssg_grade_val').val(subject_grade)
                $('#remarks_dd').val(subject_remark)
            }

        </script>

    </body>

</html>