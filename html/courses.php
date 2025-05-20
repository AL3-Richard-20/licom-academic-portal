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
                            <h4 class="page-title font-weight-bold text-uppercase">Courses</h4>
                            <div class="d-flex align-items-center">

                            </div>
                        </div>
                        <div class="col-7 align-self-center">
                            <div class="d-flex no-block justify-content-end align-items-center">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item">
                                            <a href="#">Courses</a>
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

                                        <table class="table table-hover display nowrap" style="width:100%;" id="courses_tbl">

                                            <thead class="table-bordered font-weight-bold text-uppercase">
                                                <tr>
                                                    <th>Name</th>
                                                    <th>Code</th>
                                                    <th>Date Added</th>
                                                    <th>Time Added</th>
                                                    <th class="text-center">Action</th>
                                                </tr>
                                            </thead>

                                            <tbody class="table-sm">
                                                <?php

                                                    $query="SELECT 
                                                                Course_Id, 
                                                                Course_name, 
                                                                Course_code, 
                                                                Date_added, 
                                                                Time_added
                                                            FROM 
                                                                courses 
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

                                                                $course_Id      = $row['Course_Id'];
                                                                $course_name    = $row['Course_name'];
                                                                $course_code    = $row['Course_code'];
                                                                $date_added     = dateFormat($row['Date_added']);
                                                                $time_added     = timeFormat($row['Time_added']);

                                                                echo "<tr>";
                                                                echo "<td class='font-weight-bold'>".$course_name."</td>";
                                                                echo "<td>".$course_code."</td>";
                                                                echo "<td>".$date_added."</td>";
                                                                echo "<td>".$time_added."</td>";
                                                                echo "<td>
                                                                        <button 
                                                                            type='button' 
                                                                            class='btn btn-outline-light btn-sm text-dark'
                                                                            title='Subjects' 
                                                                            onclick='subjectsMod(`".$course_Id."`, `".$course_code."`, `".$course_name."`)'>
                                                                            <span class='fa fa-list'></span>
                                                                        </button>
                                                                        <button 
                                                                            type='button' 
                                                                            class='btn btn-outline-light btn-sm text-primary' 
                                                                            onclick='editCourse(`".$course_Id."`, `".$course_name."`, `".$course_code."`)'>
                                                                            <span class='fa fa-pencil-alt'></span>
                                                                        </button>
                                                                        <button 
                                                                            type='button' 
                                                                            class='btn btn-outline-light btn-sm text-danger' 
                                                                            onclick='deleteCourse(`".$course_Id."`)'>
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

                                <form method="POST" id="newCourseForm">

                                    <div class="card-header bg-white">
                                        <h4 class="font-weight-bold text-uppercase">Add New</h4>
                                    </div>

                                    <div class="card-body">

                                        <div class="form-group">
                                            <p><b>Course Name: <span class="text-danger">(*)</span></b></p>
                                            <input 
                                                type="text" 
                                                class="form-control form-control-sm"
                                                name="course_name" 
                                                id="course_name"
                                                placeholder="Input course name here" 
                                                autocomplete="off"
                                                required>
                                        </div>
                                        <div class="form-group">
                                            <p><b>Course Code: <span class="text-danger">(*)</span></b></p>
                                            <input 
                                                type="text" 
                                                class="form-control form-control-sm"
                                                name="course_code" 
                                                id="course_code"
                                                placeholder="Input course code here" 
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

                                <form method="POST" id="editCourseForm" style="display:none;">

                                    <div class="card-header bg-white">
                                        <h4 class="font-weight-bold text-uppercase">Edit Course</h4>
                                    </div>

                                    <div class="card-body">

                                        <input 
                                            type="hidden" 
                                            class="form-control form-control-sm"
                                            name="e_course_Id" 
                                            id="e_course_Id">

                                        <div class="form-group">
                                            <p><b>Course Name: <span class="text-danger">(*)</span></b></p>
                                            <input 
                                                type="text" 
                                                class="form-control form-control-sm"
                                                name="e_course_name" 
                                                id="e_course_name"
                                                placeholder="Input course name here" 
                                                autocomplete="off"
                                                required>
                                        </div>
                                        <div class="form-group">
                                            <p><b>Course Code: <span class="text-danger">(*)</span></b></p>
                                            <input 
                                                type="text" 
                                                class="form-control form-control-sm"
                                                name="e_course_code" 
                                                id="e_course_code"
                                                placeholder="Input course code here" 
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
                                                $('#editCourseForm').hide()
                                                $('#newCourseForm').show()
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

                coursesTbl()
            
                $('#newCourseForm').on('submit', function(aa){

                    aa.preventDefault()

                    var data = $('#newCourseForm').serializeArray()

                    data.push(
                        { name:'action', value:'new_course'}
                    )

                    $.ajax({
                        type: "POST",
                        url: "models/CoursesModel.php",
                        data: data,
                        dataType: "JSON",
                        success: function (response) {
                            
                            if(response == 1){

                                toastr.success('You added a new course', 'SAVED SUCCESSFULLY')

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

                $('#editCourseForm').on('submit', function(ab){

                    ab.preventDefault()

                    var data = $('#editCourseForm').serializeArray()

                    data.push(
                        { name:'action', value:'edit_course' }
                    )

                    $.ajax({
                        type: "POST",
                        url: "models/CoursesModel.php",
                        data: data,
                        dataType: "JSON",
                        success: function (response) {
                            
                            if(response == 1){

                                toastr.success('You updated a course', 'SAVED SUCCESSFULLY')

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

                $('#newSubjectForm').on('submit', function(aa){

                    aa.preventDefault()

                    var data = $('#newSubjectForm').serializeArray()

                    var course_Id = $('#course_Id_val').val()

                    data.push(
                        { name:'action', value:'new_subject'},
                        { name:'course_Id', value:course_Id},
                    )

                    $.ajax({
                        type: "POST",
                        url: "models/SubjectsModel.php",
                        data: data,
                        dataType: "JSON",
                        success: function (response) {
                            
                            if(response == 1){

                                $('#newSubjectForm')[0].reset()

                                toastr.success('You added a new subject', 'SAVED SUCCESSFULLY')

                                fetchSubjects()
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

                // $('#editSubjectForm').on('submit', function(ab){

                //     ab.preventDefault()

                //     var data = $('#editSubjectForm').serializeArray()

                //     data.push(
                //         { name:'action', value:'edit_subject' }
                //     )

                //     $.ajax({
                //         type: "POST",
                //         url: "models/SubjectsModel.php",
                //         data: data,
                //         dataType: "JSON",
                //         success: function (response) {
                            
                //             if(response == 1){

                //                 toastr.success('You updated a subject', 'SAVED SUCCESSFULLY')

                //                 setTimeout(() => {

                //                     location.reload()

                //                 }, 2000);
                //             }
                //             else if(response == 2 || response == 3){

                //                 toastr.error('Please contact your developer', 'SOMETHING WENT WRONG')
                //             }
                //         }
                //     });
                // })
            })


            function coursesTbl(){

                $('#courses_tbl').DataTable({

                    "aaSorting": [],
                    "columnDefs": [ {
                        "targets": 4,
                        "orderable": false
                    } ]
                })
            }


            function editCourse(course_Id, course_name, course_code){

                $('#newCourseForm').hide()
                $('#editCourseForm').show()

                $('#e_course_Id').val(course_Id)
                $('#e_course_name').val(course_name)
                $('#e_course_code').val(course_code)
            }


            function deleteCourse(course_Id){

                swal({   
                    title: "DELETE COURSE?",   
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
                            url: "models/CoursesModel.php",
                            data: {
                                courseid:course_Id,
                                action:"delete_course"
                            },
                            dataType: "JSON",
                            success: function (response) {
                                
                                if(response == 1){

                                    toastr.success('You deleted a course. Refreshing the page.', 'REMOVED SUCCESSFULLY')

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


            function fetchSubjects(){

                var output=''
                var course_Id = $('#course_Id_val').val()

                $.ajax({
                    type: "POST",
                    url: "models/SubjectsModel.php",
                    data: {
                        courseid:course_Id,
                        action:"fetch_subjects"
                    },
                    dataType: "JSON",
                    success: function (response) {
                        
                        if(response.length > 0){

                            $.each(response, function(key, value){

                                output+='<tr>'
                                output+='<td class="font-weight-bold">'+ value.SubjectName +'</td>'
                                output+='<td>'+ value.SubjectCode +'</td>'
                                output+='<td>'+ value.DateAdded +'</td>'
                                output+='<td>'+ value.TimeAdded +'</td>'

                                var deleteSubject = 'deleteSubject(`'+ value.SubjectId +'`)'

                                output+='<td class="text-center">'
                                output+='<button type="button" class="btn btn-outline-light btn-sm" onclick="'+ deleteSubject +'"><span class="fa fa-trash text-danger"></span></button>'
                                output+='</td>'
                                output+='</tr>'
                            })
                        }
                        else{

                            output+='<tr>'
                            output+='<td class="text-center" colspan="5">No data available in the table.</td>'
                            output+='</tr>'
                        }

                        $('#subjects_tbl').html(output)
                    }
                })
            }


            function subjectsMod(course_Id, course_code, course_name){

                $('#subjectsMod').modal('show')

                $('#course_sub_header').html('('+course_code+' | '+ course_name +')')

                $('#course_Id_val').val(course_Id)

                fetchSubjects()
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

                                    fetchSubjects()
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