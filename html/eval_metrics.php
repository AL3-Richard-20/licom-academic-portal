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
                            <h4 class="page-title font-weight-bold text-uppercase">Evaluation Metrics</h4>
                            <div class="d-flex align-items-center"></div>
                        </div>
                        <div class="col-7 align-self-center">
                            <div class="d-flex no-block justify-content-end align-items-center">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item">
                                            <a href="#">Metrics</a>
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

                                        <table class="table table-hover display nowrap" style="width:100%;" id="eval_metrics_tbl">

                                            <thead class="table-bordered font-weight-bold text-uppercase">
                                                <tr>
                                                    <th>Header</th>
                                                    <th>Name</th>
                                                    <th>Date Added</th>
                                                    <th>Time Added</th>
                                                    <th class="text-center">Action</th>
                                                </tr>
                                            </thead>

                                            <tbody class="table-sm">
                                                <?php

                                                    $query="SELECT 
                                                                evaluation_metrics.Eval_Metric_Id, 
                                                                evaluation_metrics.Eval_Header_Id, 
                                                                evaluation_metrics.Metric_desc, 
                                                                evaluation_metrics.Date_added, 
                                                                evaluation_metrics.Time_added,
                                                                evaluation_headers.Eval_header_name 
                                                            FROM 
                                                                evaluation_metrics 
                                                            LEFT JOIN 
                                                                evaluation_headers 
                                                            ON 
                                                                evaluation_metrics.Eval_Header_Id = evaluation_headers.Eval_Header_Id 
                                                            WHERE 
                                                                evaluation_metrics.Status = 1 
                                                            ORDER BY 
                                                                evaluation_metrics.Date_added DESC, 
                                                                evaluation_metrics.Time_added DESC ";

                                                    $fetch = mysqli_query($con, $query);

                                                    $count = mysqli_num_rows($fetch);

                                                    if($fetch){

                                                        if($count > 0){

                                                            while($row = mysqli_fetch_assoc($fetch)){

                                                                $eval_header_Id   = $row['Eval_Header_Id'];
                                                                $eval_header_name = $row['Eval_header_name'];
                                                                $eval_metric_Id   = $row['Eval_Metric_Id'];
                                                                $eval_metric_name = $row['Metric_desc'];
                                                                $date_added       = dateFormat($row['Date_added']);
                                                                $time_added       = timeFormat($row['Time_added']);

                                                                echo "<tr>";
                                                                echo "<td>".$eval_header_name."</td>";
                                                                echo "<td style='max-width:250px; text-wrap:wrap'>".$eval_metric_name."</td>";
                                                                echo "<td>".$date_added."</td>";
                                                                echo "<td>".$time_added."</td>";
                                                                echo "<td>
                                                                        <button 
                                                                            type='button' 
                                                                            class='btn btn-outline-light btn-sm text-primary' 
                                                                            onclick='editMetric(`".$eval_metric_Id."`, `".htmlspecialchars($eval_metric_name)."`, `".$eval_header_Id."`)'>
                                                                            <span class='fa fa-pencil-alt'></span>
                                                                        </button>
                                                                        <button 
                                                                            type='button' 
                                                                            class='btn btn-outline-light btn-sm text-danger' 
                                                                            onclick='deleteMetric(`".$eval_metric_Id."`)'>
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

                                <form method="POST" id="newMetricForm">

                                    <div class="card-header bg-white">
                                        <h4 class="font-weight-bold text-uppercase">Add New</h4>
                                    </div>

                                    <div class="card-body">

                                        <div class="form-group">
                                            <p><b>Header: <span class="text-danger">(*)</span></b></p>
                                            <select 
                                                class="form-control form-control-sm" 
                                                name="header_dd_val" 
                                                id="header_dd_val" 
                                                required>
                                                <option value=""></option>
                                                <?php

                                                    $query ="SELECT 
                                                                Eval_Header_Id, 
                                                                Eval_header_name 
                                                            FROM 
                                                                evaluation_headers 
                                                            WHERE 
                                                                Status = 1 ";

                                                    $fetch = mysqli_query($con, $query);

                                                    $count = mysqli_num_rows($fetch);

                                                    if($fetch && $count > 0){

                                                        while($row = mysqli_fetch_assoc($fetch)){

                                                            $eval_header_Id     = $row['Eval_Header_Id'];
                                                            $eval_header_name   = $row['Eval_header_name'];

                                                            echo "<option value='".$eval_header_Id."'>".$eval_header_name."</option>";
                                                        }
                                                    }
                                                ?>
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <p><b>Metric Name: <span class="text-danger">(*)</span></b></p>
                                            <textarea 
                                                type="text" 
                                                class="form-control form-control-sm"
                                                name="metric_name" 
                                                id="metric_name"
                                                placeholder="Input metric name here" 
                                                autocomplete="off"
                                                rows="10"
                                                required></textarea>
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

                                <form method="POST" id="editMetricForm" style="display:none;">

                                    <div class="card-header bg-white">
                                        <h4 class="font-weight-bold text-uppercase">Edit Metric</h4>
                                    </div>

                                    <div class="card-body">

                                        <input 
                                            type="hidden" 
                                            class="form-control form-control-sm"
                                            name="e_metric_Id" 
                                            id="e_metric_Id">

                                        <div class="form-group">
                                            <p><b>Header: <span class="text-danger">(*)</span></b></p>
                                            <select 
                                                class="form-control form-control-sm" 
                                                name="e_header_dd_val" 
                                                id="e_header_dd_val" 
                                                required>
                                                <option value=""></option>
                                                <?php

                                                    $query ="SELECT 
                                                                Eval_Header_Id, 
                                                                Eval_header_name 
                                                            FROM 
                                                                evaluation_headers 
                                                            WHERE 
                                                                Status = 1 ";

                                                    $fetch = mysqli_query($con, $query);

                                                    $count = mysqli_num_rows($fetch);

                                                    if($fetch && $count > 0){

                                                        while($row = mysqli_fetch_assoc($fetch)){

                                                            $eval_header_Id     = $row['Eval_Header_Id'];
                                                            $eval_header_name   = $row['Eval_header_name'];

                                                            echo "<option value='".$eval_header_Id."'>".$eval_header_name."</option>";
                                                        }
                                                    }
                                                ?>
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <p><b>Metric Name: <span class="text-danger">(*)</span></b></p>
                                            <textarea 
                                                type="text" 
                                                class="form-control form-control-sm"
                                                name="e_metric_name" 
                                                id="e_metric_name"
                                                placeholder="Input metric name here" 
                                                autocomplete="off"
                                                rows="10"
                                                required></textarea>
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
                                                $('#editMetricForm').hide()
                                                $('#newMetricForm').show()
                                            ">
                                            Discard
                                        </button>
                                    </div>

                                </form>

                            </div>

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

                headersTbl()

                // ============== Select2 ===============
                    $('#header_dd_val').select2({
                        "placeholder":"Select header here",
                        "allowClear":true
                    })
                // ============== Select2 END ===========
            
                $('#newMetricForm').on('submit', function(aa){

                    aa.preventDefault()

                    var data = $(this).serializeArray()

                    data.push(
                        { name:'action', value:'new_metric'}
                    )

                    $.ajax({
                        type: "POST",
                        url: "models/EvaluationModel.php",
                        data: data,
                        dataType: "JSON",
                        success: function (response) {
                            
                            if(response == 1){

                                toastr.success('You added a new metric', 'SAVED SUCCESSFULLY')

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

                $('#editMetricForm').on('submit', function(ab){

                    ab.preventDefault()

                    var data = $(this).serializeArray()

                    data.push(
                        { name:'action', value:'edit_metric' }
                    )

                    $.ajax({
                        type: "POST",
                        url: "models/EvaluationModel.php",
                        data: data,
                        dataType: "JSON",
                        success: function (response) {
                            
                            if(response == 1){

                                toastr.success('You updated a metric', 'SAVED SUCCESSFULLY')

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


            function headersTbl(){

                $('#eval_metrics_tbl').DataTable({

                    "aaSorting": [],
                    "columnDefs": [ {
                        "targets": 4,
                        "orderable": false
                    } ]
                })
            }


            function editMetric(metric_Id, metric_name, header_Id){

                $('#newMetricForm').hide()
                $('#editMetricForm').show()

                $('#e_metric_Id').val(metric_Id)
                $('#e_header_dd_val').val(header_Id).trigger("change")
                $('#e_metric_name').val(decodeURI(metric_name))
            }


            function deleteMetric(metric_Id){

                swal({   
                    title: "DELETE METRIC?",   
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
                            url: "models/EvaluationModel.php",
                            data: {
                                metricid:metric_Id,
                                action:"delete_metric"
                            },
                            dataType: "JSON",
                            success: function (response) {
                                
                                if(response == 1){

                                    toastr.success('You deleted a metric. Refreshing the page.', 'REMOVED SUCCESSFULLY')

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