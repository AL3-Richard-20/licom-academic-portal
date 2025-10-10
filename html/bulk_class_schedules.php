<?php

    include "includes/db.php";
    include "helpers/Semester.php";
    include "helpers/Subject.php";
    include "helpers/Users.php"; 
    include "helpers/Room.php"; 

    if(isset($_GET['classschedid'])){

        $class_sched_Id = $_GET['classschedid'];

         if($class_sched_Id == ''){

            echo "<script>location.href='index.php'</script>";
         }       
    }
    else{

        echo "<script>location.href='index.php'</script>";
    }
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
                            <h4 class="page-title font-weight-bold text-uppercase">Class Schedule | Student Importation</h4>
                            <div class="d-flex align-items-center">

                            </div>
                        </div>
                        <div class="col-7 align-self-center">
                            <div class="d-flex no-block justify-content-end align-items-center">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item">
                                            <a href="#">Class Schedule Importation</a>
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

                    <input type="hidden" name="class_sched_Id" id="class_sched_Id" value="<?= $class_sched_Id ?>">

                    <div class="row">

                        <div class="col-lg-6">

                            <?php

                                $query ="SELECT 
                                            Semester_Id,
                                            Subject_Id,
                                            Room_Id,
                                            Instructor_Id,
                                            Day,
                                            Time_start,
                                            Time_end 
                                        FROM 
                                            class_schedules 
                                        WHERE 
                                            Class_Schedule_Id = '".$class_sched_Id."' 
                                        LIMIT 1 ";

                                $fetch = mysqli_query($con, $query);

                                if($fetch){

                                    $row = mysqli_fetch_assoc($fetch);

                                    $semester_Id    = $row['Semester_Id'];
                                    $subject_Id     = $row['Subject_Id'];
                                    $room_Id        = $row['Room_Id'];
                                    $instructor_Id  = $row['Instructor_Id'];
                                    $day_Id         = $row['Day'];
                                    $time_start     = $row['Time_start'];
                                    $time_end       = $row['Time_end'];

                                    // ======= Semester Info ============
                                        $semester_info  = semesterInfo($semester_Id);

                                        $semester_name  = $semester_info['SemesterName'];
                                        $year_name      = $semester_info['YearName'];
                                    // ======= Semester Info END ========

                                    // ======= Subject Info =========== 
                                        $subject_info = subjectInfo($subject_Id);

                                        $subject_name = $subject_info['SubjectName'];
                                        $subject_code = $subject_info['SubjectCode'];
                                        $course_name  = $subject_info['CourseName'];
                                        $course_code  = $subject_info['CourseCode'];
                                    // ======= Subject Info END =======

                                    // ======= Instructor Info =============
                                        $instructor_info = fetchUserInfo($instructor_Id, '', '', 1);

                                        // print_r($instructor_info);

                                        $ins_fname = $instructor_info[0]['FName'];
                                        $ins_lname = $instructor_info[0]['LName'];

                                        $instructor = $ins_fname." ".$ins_lname;
                                    // ======= Instructor Info END =========

                                    // ======= Room Info =============  
                                        $room_info = roomInfo($room_Id);

                                        $room_name      = $room_info['RoomName'];
                                        $room_details   = $room_info['RoomDetails'];
                                    // ======= Room Info END =========

                                    // ======= Day ============
                                        if($day_Id == 1){

                                            $day = 'Monday';
                                        }
                                        else if($day_Id == 2){
                            
                                            $day = 'Tuesday';
                                        }
                                        else if($day_Id == 3){
                            
                                            $day = 'Wednesday';
                                        }
                                        else if($day_Id == 4){
                            
                                            $day = 'Thursday';
                                        }
                                        else if($day_Id == 5){
                            
                                            $day = 'Friday';
                                        }
                                        else if($day_Id == 6){
                            
                                            $day = 'Saturday';
                                        }
                                        else if($day_Id == 7){
                            
                                            $day = 'Sunday';
                                        }
                                    // ======= Day END ========
                                }
                            ?>  

                            <table class="table table-sm">
                                <tbody>
                                    <tr>
                                        <td class="font-weight-bold">Semester:</td>
                                        <td><?= $year_name." | ".$semester_name ?></td>
                                    </tr>
                                    <tr>
                                        <td class="font-weight-bold">Subject:</td>
                                        <td><?= $subject_code." | ".$subject_name ?></td>   
                                    </tr>
                                    <tr>
                                        <td class="font-weight-bold">Room:</td>
                                        <td><?= $room_name." | ".$room_details  ?></td>
                                    </tr>
                                    <tr>
                                        <td class="font-weight-bold">Instructor:</td>
                                        <td><?= $instructor ?></td>
                                    </tr>
                                    <tr>
                                        <td class="font-weight-bold">Day:</td>
                                        <td><?= $day ?></td>
                                    </tr>
                                    <tr>
                                        <td class="font-weight-bold">Time Start:</td>
                                        <td><?= timeFormat($time_start) ?></td>
                                    </tr>
                                    <tr>
                                        <td class="font-weight-bold">Time End:</td>
                                        <td><?= timeFormat($time_end) ?></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                        <!-- <div class="col-lg-4"></div> -->

                        <div class="col-lg-6 text-right">
                            <button 
                                type="button" 
                                class="btn btn-outline-dark font-weight-bold text-uppercase" 
                                onclick="filterAction(`Import`)">
                                <span class="fa fa-upload"></span>
                                &nbspImport .xlsx
                            </button>
                            <!-- <button
                                type="button" 
                                class="btn btn-outline-dark font-weight-bold text-uppercase" 
                                >
                                <span class="fa fa-download"></span>
                                &nbspDownload .xlsx
                            </button> -->
                            <a  href="../assets/templates/LICOM_Class_Schedule_Students.xlsx"
                                download="LICOM_Class_Schedule_Students"
                                class="btn btn-outline-dark font-weight-bold text-uppercase">
                                <span class="fa fa-download"></span>
                                &nbsp<span>Download .xlsx</span>
                            </a>
                        </div>

                    </div>

                    <br>

                    <div class="table-responsive">

                        <table class="table table-hover display nowrap" id="class_students_tbl" style="width:100%;">
                            <thead class="table-bordered font-weight-bold text-uppercase" style="white-space:nowrap;">
                                <tr>
                                    <th>Student ID</th>
                                    <th>Name</th>
                                    <th>Date Added</th>
                                    <th>Time Added</th>
                                    <th class="text-center">Actions</th>
                                </tr>
                            </thead>
                            <tbody class="table-sm">
                                <?php

                                    $query ="SELECT 
                                                student_classes.Student_Class_Id,
                                                student_classes.Date_added, 
                                                student_classes.Time_added, 
                                                users.User_Id,
                                                users.FName,
                                                users.LName 
                                            FROM 
                                                student_classes 
                                            LEFT JOIN 
                                                users 
                                            ON 
                                                student_classes.Student_Id = users.User_Id 
                                            WHERE 
                                                student_classes.Class_Schedule_Id = '".$class_sched_Id."' 
                                                AND student_classes.Status = 1 
                                            ORDER BY 
                                                student_classes.Date_added DESC, 
                                                student_classes.Time_added DESC ";

                                    $fetch = mysqli_query($con, $query);

                                    while($row = mysqli_fetch_assoc($fetch)){

                                        $student_class_Id   = $row['Student_Class_Id'];

                                        $date_added         = dateFormat($row['Date_added']);
                                        $time_added         = timeFormat($row['Time_added']);

                                        $stud_Id            = $row['User_Id'];
                                        $stud_fname         = $row['FName'];
                                        $stud_lname         = $row['LName'];

                                        $stud_fullname = $stud_fname." ".$stud_lname;
                                        
                                        echo "<tr>";
                                        echo "<td>#".$stud_Id."</td>";
                                        echo "<td class='font-weight-bold'>".$stud_fullname."</td>";
                                        echo "<td>".$date_added."</td>";
                                        echo "<td>".$time_added."</td>";
                                        echo "<td class='text-center'>
                                                <button 
                                                    type='button' 
                                                    class='btn btn-outline-light text-danger' 
                                                    onclick='deleteClassStudent(`".$student_class_Id."`)'>
                                                    <span class='fa fa-trash'></span>
                                                </button>
                                            </td>";
                                        echo "</tr>";
                                    }
                                ?>
                            </tbody>
                        </table>

                    </div>


                    <!-- =============== Filter Modal =============== -->
                        <div class="modal fade" id="filterMod">

                            <div class="modal-dialog" role="document">

                                <form method="POST">

                                    <div class="modal-content">

                                        <div class="modal-header">
                                            <h5 class="modal-title font-weight-bold text-uppercase">
                                                <span class="fa fa-upload"></span>
                                                &nbspImport File
                                            </h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>

                                        <div class="modal-body">

                                            <div class="form-group" id="file_upload_div">
                                                <p><b>File:</b></p>
                                                <input 
                                                    type="file" 
                                                    name="upload_xls_btn" 
                                                    id="upload_xls_btn" 
                                                    accept=".xlsx, .csv">
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

            var class_sched_Id = $('#class_sched_Id').val()
            
            $(document).ready(function () {

                $('#class_students_tbl').DataTable({
                    "bInfo":false,
                })

                // =============== Import XLSX ===================
                    $('#upload_xls_btn').on('change', function(e){

                        $('#filterMod').modal('hide')

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

                                $.ajax({
                                    type: "POST",
                                    url: "models/ClassSchedulesModel.php",
                                    data: {
                                        classschedid:class_sched_Id,
                                        xlsxitems:xlsx_items,
                                        action:"bulk_student_on_class_sched"
                                    },
                                    dataType: "JSON",
                                    success: function (response) {

                                        if(response.Res == 1){

                                            toastr.success('You added new students to a class schedule.', 'SAVED SUCCESSFULLY')

                                            setTimeout(function(){

                                                location.reload()
                                            }, 1000)
                                        }
                                        else{

                                            Swal.fire({ 
                                               title: 'INVALID STUDENT RECORDS', 
                                               html: 'These records cannot be added: <br> '+ response.ErrIDs, 
                                               type: 'error', 
                                               showCancelButton: false, 
                                               confirmButtonColor: '#3085d6', 
                                               confirmButtonText: 'OKAY', 
                                            }).then((isConfirm) => {

                                                if (isConfirm.value == true) {  
                                            
                                                    location.reload()
                                                }    
                                            })
                                        }
                                    }
                                })
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
                    })
                // =============== Import XLSX END ===============
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


            function downloadGradeTemplate(){

                var semester_Id = $('#semester_dd').val()
                var course_Id   = $('#course_dd').val()
                var subject_Id  = $('#subject_dd').val()

                // alert('export_grades_xlsx.php?semesterid='+ semester_Id +'&subjectid='+ subject_Id +'&courseid='+course_Id)

                window.open('export_grades_xlsx.php?semesterid='+ semester_Id +'&subjectid='+ subject_Id +'&courseid='+course_Id)

                toastr.success('Please check you downloads', 'Downloaded Successfully')
            }


            function deleteClassStudent(stud_class_Id){

                swal({   
                    title: "DELETE STUDENT?",   
                    text: "This is cannot be reverted",   
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
                           url: "models/ClassSchedulesModel.php",
                           data: {
                               studclassid:stud_class_Id,
                               action:"delete_class_student"
                           },
                           dataType: "JSON",
                           success: function (response) {
                           
                               if(response == 1){
       
                                   toastr.success('You removed a student from a class', 'REMOVED SUCCESSFULLY')
       
                                   setTimeout(() => {
                                       
                                       location.reload()
       
                                   }, 1000);
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