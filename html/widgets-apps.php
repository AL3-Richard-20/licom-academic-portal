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


        <title>Title Here</title>


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
                        <h4 class="page-title">App Widgets</h4>
                        <div class="d-flex align-items-center">

                        </div>
                    </div>
                    <div class="col-7 align-self-center">
                        <div class="d-flex no-block justify-content-end align-items-center">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item">
                                        <a href="#">Home</a>
                                    </li>
                                    <li class="breadcrumb-item active" aria-current="page">Library</li>
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
                <div class="card-columns widget-app-columns">
                    <!-- ============================================================== -->
                    <!-- Recent Comments copy and paste this code-->
                    <!-- ============================================================== -->
                    <!-- Card -->
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Recent Comments</h4>
                        </div>
                        <div class="comment-widgets">
                            <!-- Comment Row -->
                            <div class="d-flex flex-row comment-row m-t-0">
                                <div class="p-2"><img src="../../assets/images/users/1.jpg" alt="user" width="50" class="rounded-circle"></div>
                                <div class="comment-text w-100">
                                    <h6 class="font-medium">James Anderson</h6>
                                    <span class="m-b-15 d-block">Lorem Ipsum is simply dummy text of the printing and type setting industry. </span>
                                    <div class="comment-footer">
                                        <span class="text-muted float-right">April 14, 2016</span> <span class="label label-rounded label-primary">Pending</span> <span class="action-icons">
                                                    <a href="javascript:void(0)"><i class="ti-pencil-alt"></i></a>
                                                    <a href="javascript:void(0)"><i class="ti-check"></i></a>
                                                    <a href="javascript:void(0)"><i class="ti-heart"></i></a>    
                                                </span>
                                    </div>
                                </div>
                            </div>
                            <!-- Comment Row -->
                            <div class="d-flex flex-row comment-row">
                                <div class="p-2"><img src="../../assets/images/users/4.jpg" alt="user" width="50" class="rounded-circle"></div>
                                <div class="comment-text active w-100">
                                    <h6 class="font-medium">Michael Jorden</h6>
                                    <span class="m-b-15 d-block">Lorem Ipsum is simply dummy text of the printing and type setting industry. </span>
                                    <div class="comment-footer ">
                                        <span class="text-muted float-right">April 14, 2016</span>
                                        <span class="label label-success label-rounded">Approved</span>
                                        <span class="action-icons active">
                                                    <a href="javascript:void(0)"><i class="ti-pencil-alt"></i></a>
                                                    <a href="javascript:void(0)"><i class="icon-close"></i></a>
                                                    <a href="javascript:void(0)"><i class="ti-heart text-danger"></i></a>    
                                                </span>
                                    </div>
                                </div>
                            </div>
                            <!-- Comment Row -->
                            <div class="d-flex flex-row comment-row">
                                <div class="p-2"><img src="../../assets/images/users/5.jpg" alt="user" width="50" class="rounded-circle"></div>
                                <div class="comment-text w-100">
                                    <h6 class="font-medium">Johnathan Doeting</h6>
                                    <span class="m-b-15 d-block">Lorem Ipsum is simply dummy text of the printing and type setting industry. </span>
                                    <div class="comment-footer">
                                        <span class="text-muted float-right">April 14, 2016</span>
                                        <span class="label label-rounded label-danger">Rejected</span>
                                        <span class="action-icons">
                                                    <a href="javascript:void(0)"><i class="ti-pencil-alt"></i></a>
                                                    <a href="javascript:void(0)"><i class="ti-check"></i></a>
                                                    <a href="javascript:void(0)"><i class="ti-heart"></i></a>    
                                                </span>
                                    </div>
                                </div>
                            </div>
                            <!-- Comment Row -->
                            <div class="d-flex flex-row comment-row">
                                <div class="p-2"><img src="../../assets/images/users/1.jpg" alt="user" width="50" class="rounded-circle"></div>
                                <div class="comment-text w-100">
                                    <h6 class="font-medium">James Anderson</h6>
                                    <span class="m-b-15 d-block">Lorem Ipsum is simply dummy text of the printing and type setting industry. </span>
                                    <div class="comment-footer">
                                        <span class="text-muted float-right">April 14, 2016</span> <span class="label label-rounded label-primary">Pending</span> <span class="action-icons">
                                                    <a href="javascript:void(0)"><i class="ti-pencil-alt"></i></a>
                                                    <a href="javascript:void(0)"><i class="ti-check"></i></a>
                                                    <a href="javascript:void(0)"><i class="ti-heart"></i></a>    
                                                </span> </div>
                                </div>
                            </div>
                            <!-- Comment Row -->
                            <!-- Comment Row -->
                            <div class="d-flex flex-row comment-row">
                                <div class="p-2"><img src="../../assets/images/users/4.jpg" alt="user" width="50" class="rounded-circle"></div>
                                <div class="comment-text active w-100">
                                    <h6 class="font-medium">Michael Jorden</h6>
                                    <span class="m-b-15 d-block">Lorem Ipsum is simply dummy text of the printing and type setting industry. </span>
                                    <div class="comment-footer ">
                                        <span class="text-muted float-right">April 14, 2016</span>
                                        <span class="label label-success label-rounded">Approved</span>
                                        <span class="action-icons active">
                                                    <a href="javascript:void(0)"><i class="ti-pencil-alt"></i></a>
                                                    <a href="javascript:void(0)"><i class="icon-close"></i></a>
                                                    <a href="javascript:void(0)"><i class="ti-heart text-danger"></i></a>    
                                                </span>
                                    </div>
                                </div>
                            </div>
                            <!-- Comment Row -->
                        </div>
                    </div>
                    <!-- ============================================================== -->
                    <!-- To Do list copy and paste this code-->
                    <!-- ============================================================== -->
                    <!-- Card -->
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Task List</h4>
                            <div class="todo-widget scrollable" style="height:450px;">
                                <ul class="list-task todo-list list-group m-b-0" data-role="tasklist">
                                    <li class="list-group-item todo-item" data-role="task">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="customCheck">
                                            <label class="custom-control-label todo-label" for="customCheck">
                                                <span class="todo-desc">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</span> <span class="badge badge-pill badge-danger float-right">Today</span>
                                            </label>
                                        </div>
                                        <ul class="list-style-none assignedto">
                                            <li class="assignee"><img class="assignee-img" src="../../assets/images/users/1.jpg" alt="user" data-toggle="tooltip" data-placement="top" title="" data-original-title="Steave"></li>
                                            <li class="assignee"><img class="assignee-img" src="../../assets/images/users/2.jpg" alt="user" data-toggle="tooltip" data-placement="top" title="" data-original-title="Jessica"></li>
                                            <li class="assignee"><img class="assignee-img" src="../../assets/images/users/3.jpg" alt="user" data-toggle="tooltip" data-placement="top" title="" data-original-title="Priyanka"></li>
                                            <li class="assignee"><img class="assignee-img" src="../../assets/images/users/4.jpg" alt="user" data-toggle="tooltip" data-placement="top" title="" data-original-title="Selina"></li>
                                        </ul>
                                    </li>
                                    <li class="list-group-item todo-item" data-role="task">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="customCheck1">
                                            <label class="custom-control-label todo-label" for="customCheck1">
                                                <span class="todo-desc">Lorem Ipsum is simply dummy text of the printing</span><span class="badge badge-pill badge-primary float-right">1 week </span>
                                            </label>
                                        </div>
                                        <div class="item-date"> 26 jun 2017</div>
                                    </li>
                                    <li class="list-group-item todo-item" data-role="task">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="customCheck2">
                                            <label class="custom-control-label todo-label" for="customCheck2">
                                                <span class="todo-desc">Give Purchase report to</span> <span class="badge badge-pill badge-info float-right">Yesterday</span>
                                            </label>
                                        </div>
                                        <ul class="list-style-none assignedto">
                                            <li class="assignee"><img class="assignee-img" src="../../assets/images/users/3.jpg" alt="user" data-toggle="tooltip" data-placement="top" title="" data-original-title="Priyanka"></li>
                                            <li class="assignee"><img class="assignee-img" src="../../assets/images/users/4.jpg" alt="user" data-toggle="tooltip" data-placement="top" title="" data-original-title="Selina"></li>
                                        </ul>
                                    </li>
                                    <li class="list-group-item todo-item" data-role="task">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="customCheck3">
                                            <label class="custom-control-label todo-label" for="customCheck3">
                                                <span class="todo-desc">Lorem Ipsum is simply dummy text of the printing </span> <span class="badge badge-pill badge-warning float-right">2 weeks</span>
                                            </label>
                                        </div>
                                        <div class="item-date"> 26 jun 2017</div>
                                    </li>
                                    <li class="list-group-item todo-item" data-role="task">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="customCheck4">
                                            <label class="custom-control-label todo-label" for="customCheck4">
                                                <span class="todo-desc">Give Purchase report to</span> <span class="badge badge-pill badge-info float-right">Yesterday</span>
                                            </label>
                                        </div>
                                        <ul class="list-style-none assignedto">
                                            <li class="assignee"><img class="assignee-img" src="../../assets/images/users/3.jpg" alt="user" data-toggle="tooltip" data-placement="top" title="" data-original-title="Priyanka"></li>
                                            <li class="assignee"><img class="assignee-img" src="../../assets/images/users/4.jpg" alt="user" data-toggle="tooltip" data-placement="top" title="" data-original-title="Selina"></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- ============================================================== -->
                    <!-- Project of the month copy and paste this code-->
                    <!-- ============================================================== -->
                    <!-- Card -->
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <h4 class="card-title">Projects of the Month</h4>
                                <select class="custom-select w-25 ml-auto">
                                    <option selected="">January</option>
                                    <option value="1">February</option>
                                    <option value="2">March</option>
                                    <option value="3">April</option>
                                </select>
                            </div>
                            <div class="table-responsive m-t-40">
                                <table class="table stylish-table">
                                    <thead>
                                        <tr>
                                            <th colspan="2">Assigned</th>
                                            <th>Name</th>
                                            <th>Priority</th>
                                            <th>Budget</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td style="width:50px;"><span class="round">S</span></td>
                                            <td>
                                                <h6>Sunil Joshi</h6><small class="text-muted">Web Designer</small></td>
                                            <td>Elite Admin</td>
                                            <td><span class="label label-light-success">Low</span></td>
                                            <td>$3.9K</td>
                                        </tr>
                                        <tr class="active">
                                            <td><span class="round"><img src="../../assets/images/users/2.jpg" alt="user" width="50"></span></td>
                                            <td>
                                                <h6>Andrew</h6><small class="text-muted">Project Manager</small></td>
                                            <td>Real Homes</td>
                                            <td><span class="label label-light-info">Medium</span></td>
                                            <td>$23.9K</td>
                                        </tr>
                                        <tr>
                                            <td><span class="round round-success">B</span></td>
                                            <td>
                                                <h6>Bhavesh patel</h6><small class="text-muted">Developer</small></td>
                                            <td>MedicalPro Theme</td>
                                            <td><span class="label label-light-danger">High</span></td>
                                            <td>$12.9K</td>
                                        </tr>
                                        <tr>
                                            <td><span class="round round-primary">N</span></td>
                                            <td>
                                                <h6>Nirav Joshi</h6><small class="text-muted">Frontend Eng</small></td>
                                            <td>Elite Admin</td>
                                            <td><span class="label label-light-success">Low</span></td>
                                            <td>$10.9K</td>
                                        </tr>
                                        <tr>
                                            <td><span class="round round-warning">M</span></td>
                                            <td>
                                                <h6>Micheal Doe</h6><small class="text-muted">Content Writer</small></td>
                                            <td>Helping Hands</td>
                                            <td><span class="label label-light-danger">High</span></td>
                                            <td>$12.9K</td>
                                        </tr>
                                        <tr>
                                            <td><span class="round round-danger">N</span></td>
                                            <td>
                                                <h6>Johnathan</h6><small class="text-muted">Graphic</small></td>
                                            <td>Digital Agency</td>
                                            <td><span class="label label-light-danger">High</span></td>
                                            <td>$2.6K</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <!-- ============================================================== -->
                    <!-- weather report copy and paste this code-->
                    <!-- ============================================================== -->
                    <!-- Card -->
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex">
                                <h4 class="card-title">Weather Report</h4>
                                <select class="custom-select w-25 ml-auto">
                                    <option selected="">Today</option>
                                    <option value="1">Weekly</option>
                                </select>
                            </div>
                            <div class="d-flex align-items-center flex-row m-t-30">
                                <div class="p-2 display-5 text-info"><i class="wi wi-day-showers"></i> <span>73<sup>°</sup></span></div>
                                <div class="p-2">
                                    <h3 class="m-b-0">Saturday</h3><small>Ahmedabad, India</small></div>
                            </div>
                            <table class="table no-border">
                                <tbody>
                                    <tr>
                                        <td>Wind</td>
                                        <td class="font-medium">ESE 17 mph</td>
                                    </tr>
                                    <tr>
                                        <td>Humidity</td>
                                        <td class="font-medium">83%</td>
                                    </tr>
                                    <tr>
                                        <td>Pressure</td>
                                        <td class="font-medium">28.56 in</td>
                                    </tr>
                                    <tr>
                                        <td>Cloud Cover</td>
                                        <td class="font-medium">78%</td>
                                    </tr>
                                    <tr>
                                        <td>Ceiling</td>
                                        <td class="font-medium">25760 ft</td>
                                    </tr>
                                </tbody>
                            </table>
                            <hr>
                            <ul class="list-unstyled row text-center city-weather-days">
                                <li class="col"><i class="wi wi-day-sunny"></i><span>09:30</span>
                                    <h3>70<sup>°</sup></h3></li>
                                <li class="col"><i class="wi wi-day-cloudy"></i><span>11:30</span>
                                    <h3>72<sup>°</sup></h3></li>
                                <li class="col"><i class="wi wi-day-hail"></i><span>13:30</span>
                                    <h3>75<sup>°</sup></h3></li>
                                <li class="col"><i class="wi wi-day-sprinkle"></i><span>15:30</span>
                                    <h3>76<sup>°</sup></h3></li>
                            </ul>
                        </div>
                    </div>
                    <!-- ============================================================== -->
                    <!-- Recent Chat copy and paste this code-->
                    <!-- ============================================================== -->
                    <!-- Card -->
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Recent Chats</h4>
                            <div class="chat-box scrollable" style="height:475px;">
                                <!--chat Row -->
                                <ul class="chat-list">
                                    <!--chat Row -->
                                    <li class="chat-item">
                                        <div class="chat-img"><img src="../../assets/images/users/1.jpg" alt="user"></div>
                                        <div class="chat-content">
                                            <h6 class="font-medium">James Anderson</h6>
                                            <div class="box bg-light-info">Lorem Ipsum is simply dummy text of the printing &amp; type setting industry.</div>
                                        </div>
                                        <div class="chat-time">10:56 am</div>
                                    </li>
                                    <!--chat Row -->
                                    <li class="chat-item">
                                        <div class="chat-img"><img src="../../assets/images/users/2.jpg" alt="user"></div>
                                        <div class="chat-content">
                                            <h6 class="font-medium">Bianca Doe</h6>
                                            <div class="box bg-light-info">It’s Great opportunity to work.</div>
                                        </div>
                                        <div class="chat-time">10:57 am</div>
                                    </li>
                                    <!--chat Row -->
                                    <li class="odd chat-item">
                                        <div class="chat-content">
                                            <div class="box bg-light-inverse">I would love to join the team.</div>
                                            <br>
                                        </div>
                                    </li>
                                    <!--chat Row -->
                                    <li class="odd chat-item">
                                        <div class="chat-content">
                                            <div class="box bg-light-inverse">Whats budget of the new project.</div>
                                            <br>
                                        </div>
                                        <div class="chat-time">10:59 am</div>
                                    </li>
                                    <!--chat Row -->
                                    <li class="chat-item">
                                        <div class="chat-img"><img src="../../assets/images/users/3.jpg" alt="user"></div>
                                        <div class="chat-content">
                                            <h6 class="font-medium">Angelina Rhodes</h6>
                                            <div class="box bg-light-info">Well we have good budget for the project</div>
                                        </div>
                                        <div class="chat-time">11:00 am</div>
                                    </li>
                                    <!--chat Row -->
                                </ul>
                            </div>
                        </div>
                        <div class="card-body border-top">
                            <div class="row">
                                <div class="col-9">
                                    <div class="input-field m-t-0 m-b-0">
                                        <textarea id="textarea1" placeholder="Type and enter" class="form-control border-0"></textarea>
                                    </div>
                                </div>
                                <div class="col-3">
                                    <a class="btn-circle btn-lg btn-cyan float-right text-white" href="javascript:void(0)"><i class="fas fa-paper-plane"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ============================================================== -->
                    <!-- Recent message copy and paste this code-->
                    <!-- ============================================================== -->
                    <!-- Card -->
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Recent Messages</h4>
                            <ul class="mailbox list-style-none w-100 m-t-20 scrollable" style="height:560px;">
                                <li>
                                    <div class="message-center chat-scroll">
                                        <a href="javascript:void(0)" class="message-item" id='chat_user_1' data-user-id='1'>
                                    <span class="user-img"> <img src="../../assets/images/users/1.jpg" alt="user" class="rounded-circle"> <span class="profile-status online pull-right"></span> </span>
                                    <div class="mail-contnet">
                                        <h5 class="message-title">Pavan kumar</h5> <span class="mail-desc">Just see the my admin!</span> <span class="time">9:30 AM</span> </div>
                                </a>
                                        <!-- Message -->
                                        <a href="javascript:void(0)" class="message-item" id='chat_user_2' data-user-id='2'>
                                    <span class="user-img"> <img src="../../assets/images/users/2.jpg" alt="user" class="rounded-circle"> <span class="profile-status busy pull-right"></span> </span>
                                    <div class="mail-contnet">
                                        <h5 class="message-title">Sonu Nigam</h5> <span class="mail-desc">I've sung a song! See you at</span> <span class="time">9:10 AM</span> </div>
                                </a>
                                        <!-- Message -->
                                        <a href="javascript:void(0)" class="message-item" id='chat_user_3' data-user-id='3'>
                                    <span class="user-img"> <img src="../../assets/images/users/3.jpg" alt="user" class="rounded-circle"> <span class="profile-status away pull-right"></span> </span>
                                    <div class="mail-contnet">
                                        <h5 class="message-title">Arijit Sinh</h5> <span class="mail-desc">I am a singer!</span> <span class="time">9:08 AM</span> </div>
                                </a>
                                        <!-- Message -->
                                        <a href="javascript:void(0)" class="message-item" id='chat_user_4' data-user-id='4'>
                                    <span class="user-img"> <img src="../../assets/images/users/4.jpg" alt="user" class="rounded-circle"> <span class="profile-status offline pull-right"></span> </span>
                                    <div class="mail-contnet">
                                        <h5 class="message-title">Nirav Joshi</h5> <span class="mail-desc">Just see the my admin!</span> <span class="time">9:02 AM</span> </div>
                                </a>
                                        <!-- Message -->
                                        <!-- Message -->
                                        <a href="javascript:void(0)" class="message-item" id='chat_user_5' data-user-id='5'>
                                    <span class="user-img"> <img src="../../assets/images/users/5.jpg" alt="user" class="rounded-circle"> <span class="profile-status offline pull-right"></span> </span>
                                    <div class="mail-contnet">
                                        <h5 class="message-title">Sunil Joshi</h5> <span class="mail-desc">Just see the my admin!</span> <span class="time">9:02 AM</span> </div>
                                </a>
                                        <!-- Message -->
                                        <!-- Message -->
                                        <a href="javascript:void(0)" class="message-item" id='chat_user_6' data-user-id='6'>
                                    <span class="user-img"> <img src="../../assets/images/users/6.jpg" alt="user" class="rounded-circle"> <span class="profile-status offline pull-right"></span> </span>
                                    <div class="mail-contnet">
                                        <h5 class="message-title">Akshay Kumar</h5> <span class="mail-desc">Just see the my admin!</span> <span class="time">9:02 AM</span> </div>
                                </a>
                                        <!-- Message -->
                                        <!-- Message -->
                                        <a href="javascript:void(0)" class="message-item" id='chat_user_7' data-user-id='7'>
                                    <span class="user-img"> <img src="../../assets/images/users/7.jpg" alt="user" class="rounded-circle"> <span class="profile-status offline pull-right"></span> </span>
                                    <div class="mail-contnet">
                                        <h5 class="message-title">Pavan kumar</h5> <span class="mail-desc">Just see the my admin!</span> <span class="time">9:02 AM</span> </div>
                                </a>
                                        <!-- Message -->
                                        <!-- Message -->
                                        <a href="javascript:void(0)" class="message-item" id='chat_user_8' data-user-id='8'>
                                    <span class="user-img"> <img src="../../assets/images/users/8.jpg" alt="user" class="rounded-circle"> <span class="profile-status offline pull-right"></span> </span>
                                    <div class="mail-contnet">
                                        <h5 class="message-title">Varun Dhavan</h5> <span class="mail-desc">Just see the my admin!</span> <span class="time">9:02 AM</span> </div>
                                </a>
                                        <!-- Message -->
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- ============================================================== -->
                    <!-- Customer Profile copy and paste this code-->
                    <!-- ============================================================== -->
                    <!-- Card -->
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex flex-row">
                                <div class=""><img src="../../assets/images/users/1.jpg" alt="user" class="rounded-circle" width="100" /></div>
                                <div class="p-l-20">
                                    <h3 class="font-medium">Daniel Kristeen</h3>
                                    <h6>UIUX Designer</h6>
                                    <button class="btn btn-success"><i class="ti-plus"></i> Follow</button>
                                </div>
                            </div>
                            <div class="row m-t-40">
                                <div class="col b-r text-center">
                                    <h2 class="font-light">14</h2>
                                    <h6>Photos</h6></div>
                                <div class="col b-r text-center">
                                    <h2 class="font-light">54</h2>
                                    <h6>Videos</h6></div>
                                <div class="col text-center">
                                    <h2 class="font-light">145</h2>
                                    <h6>Tasks</h6></div>
                            </div>
                        </div>
                        <div>
                            <hr>
                        </div>
                        <div class="card-body">
                            <p class="text-center aboutscroll">
                                Lorem ipsum dolor sit ametetur adipisicing elit, sed do eiusmod tempor incididunt adipisicing elit, sed do eiusmod tempor incididunLorem ipsum dolor sit ametetur adipisicing elit, sed do eiusmod tempor incididuntt
                            </p>
                            <ul class="list-style-none list-icons d-flex flex-item text-center p-t-10">
                                <li class="col"><a href="javascript:void(0)" data-toggle="tooltip" title="Website"><i class="fa fa-globe font-20"></i></a></li>
                                <li class="col"><a href="javascript:void(0)" data-toggle="tooltip" title="twitter"><i class="fab fa-twitter font-20"></i></a></li>
                                <li class="col"><a href="javascript:void(0)" data-toggle="tooltip" title="Facebook"><i class="fab fa-facebook-square font-20"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body text-center">
                            <div class="profile-pic m-b-20 m-t-20">
                                <img src="../../assets/images/users/5.jpg" width="150" class="rounded-circle" alt="user" />
                                <h4 class="m-t-20 m-b-0">Daniel Kristeen</h4>
                                <a href="mailto:danielkristeen@gmail.com">danielkristeen@gmail.com</a>
                            </div>
                            <div class="badge badge-pill badge-light font-16">Dashboard</div>
                            <div class="badge badge-pill badge-light font-16">UI</div>
                            <div class="badge badge-pill badge-light font-16">UX</div>
                            <div class="badge badge-pill badge-info font-16" data-toggle="tooltip" data-placement="top" title="3 more">+3</div>
                        </div>
                        <div class="p-25 border-top m-t-15">
                            <div class="row text-center">
                                <div class="col-6 border-right">
                                    <a href="#" class="link d-flex align-items-center justify-content-center font-medium"><i class="mdi mdi-message font-20 m-r-5"></i>Message</a>
                                </div>
                                <div class="col-6">
                                    <a href="#" class="link d-flex align-items-center justify-content-center font-medium"><i class="mdi mdi-developer-board font-20 m-r-5"></i>Portfolio</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ============================================================== -->
                    <!-- Browser state copy and paste this code-->
                    <!-- ============================================================== -->
                    <!-- Card -->
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Browser Stats</h4>
                            <table class="table browser m-t-30 no-border">
                                <tbody>
                                    <tr>
                                        <td style="width:40px"><img src="../../assets/images/browser/chrome-logo.png" alt="logo"></td>
                                        <td>Google Chrome</td>
                                        <td align="right"><span class="label label-info">23%</span></td>
                                    </tr>
                                    <tr>
                                        <td><img src="../../assets/images/browser/firefox-logo.png" alt="logo"></td>
                                        <td>Mozila Firefox</td>
                                        <td align="right"><span class="label label-success">15%</span></td>
                                    </tr>
                                    <tr>
                                        <td><img src="../../assets/images/browser/safari-logo.png" alt="logo"></td>
                                        <td>Apple Safari</td>
                                        <td align="right"><span class="label label-primary">07%</span></td>
                                    </tr>
                                    <tr>
                                        <td><img src="../../assets/images/browser/internet-logo.png" alt="logo"></td>
                                        <td>Internet Explorer</td>
                                        <td align="right"><span class="label label-warning">09%</span></td>
                                    </tr>
                                    <tr>
                                        <td><img src="../../assets/images/browser/opera-logo.png" alt="logo"></td>
                                        <td>Opera mini</td>
                                        <td align="right"><span class="label label-danger">23%</span></td>
                                    </tr>
                                    <tr>
                                        <td><img src="../../assets/images/browser/internet-logo.png" alt="logo"></td>
                                        <td>Microsoft edge</td>
                                        <td align="right"><span class="label label-megna">09%</span></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!-- ============================================================== -->
                    <!-- Subscribe form copy and paste this code-->
                    <!-- ============================================================== -->
                    <!-- Card -->
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Subscribe</h4>
                            <form>
                                <div class="form-group">
                                    <input type="text" class="form-control" id="exampleInputname2" placeholder="Enter Name"> </div>
                                <div class="form-group">
                                    <input type="email" class="form-control" placeholder="Enter email"> </div>
                                <button type="submit" class="btn btn-info">Submit</button>
                            </form>
                        </div>
                    </div>
                    <div class="card social-widget">
                        <div class="card-body bg-info">
                            <div class="d-md-flex align-items-center  text-white">
                                <div>
                                    <h4 class=" m-b-0">People you may know</h4>
                                </div>
                                <div class="ml-auto">
                                    <a href="javascript: void(0)"><i class="mdi mdi-menu text-white font-20"></i></a>
                                </div>
                            </div>
                            <form class="m-t-30 m-b-20">
                                <div class="input-group input-group-lg mb-3 ">
                                    <input type="text" class="form-control" placeholder="Search by Email" aria-label="">
                                    <div class="input-group-append">
                                        <button class="btn btn-light" type="button"><i class="ti-search"></i></button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="card-body">
                            <div class="row m-t-10">
                                <div class="col-4 text-center">
                                    <img src="../../assets/images/users/1.png" alt="" class="img-fluid user-img">
                                    <h6 class="font-12 m-t-5">Hanna Gover</h6>
                                    <button class="btn btn-light btn-sm">Connect</button>
                                </div>
                                <div class="col-4 text-center">
                                    <img src="../../assets/images/users/2.png" alt="" class="img-fluid user-img">
                                    <h6 class="font-12 m-t-5">Kendra Silly</h6>
                                    <button class="btn btn-light btn-sm">Connect</button>
                                </div>
                                <div class="col-4 text-center">
                                    <img src="../../assets/images/users/3.png" alt="" class="img-fluid user-img">
                                    <h6 class="font-12 m-t-5">Jack Sully</h6>
                                    <button class="btn btn-light btn-sm">Connect</button>
                                </div>
                            </div>
                            <button class="btn btn-lg btn-block btn-cyan text-white m-t-40">Invite friends from Twitter <i class="fab fa-twitter m-l-10"></i></button>
                            <button class="btn btn-lg btn-block btn-facebook text-white">Invite friends from Facebook <i class="fab fa-facebook-f m-l-10"></i></button>
                        </div>
                    </div>
                    <!-- ============================================================== -->
                    <!-- social-profile-first widgets copy and paste this code-->
                    <!-- ============================================================== -->
                    <!-- Card -->
                    <div class="card">
                        <img class="card-img img-fluid" src="../../assets/images/big/img5.jpg" alt="Card image">
                        <div class="card-img-overlay d-flex align-items-center justify-content-center flex-column mb-5">
                            <img src="../../assets/images/users/1.jpg" alt="" class="rounded-circle" width="100" />
                            <h4 class="card-title text-white">John doe</h4>
                        </div>
                        <div class="card-body text-center">
                            <div class="row">
                                <div class="col">
                                    <h3 class="m-b-0">12K</h3>
                                    <h5 class="font-light">Followers</h5></div>
                                <div class="col">
                                    <h3 class="m-b-0">420</h3>
                                    <h5 class="font-light">Following</h5></div>
                                <div class="col">
                                    <h3 class="m-b-0">128</h3>
                                    <h5 class="font-light">Tweets</h5></div>
                            </div>
                        </div>
                    </div>
                    <!-- ============================================================== -->
                    <!-- currency buy/sell widgets copy and paste this code -->
                    <!-- ============================================================== -->
                    <!-- Card -->
                    <div class="card">
                        <div class="card-body">
                            <!-- title -->
                            <div class="d-md-flex align-items-center">
                                <div>
                                    <h4 class="card-title">Place your Order</h4>
                                    <h5 class="card-subtitle">Buy and Sell Crypto as you Like</h5>
                                </div>
                                <div class="ml-auto d-flex align-items-center">
                                    <div class="dl">
                                        <select class="custom-select">
                                            <option value="0" selected>Bitcoin</option>
                                            <option value="1">Ethereum</option>
                                            <option value="2">Ripple</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <!-- title -->
                            <ul class="nav nav-pills custom-pills" id="pills-tab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#test4" role="tab" aria-selected="true">Buy</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#test5" role="tab" aria-selected="false">Sell</a>
                                </li>
                            </ul>
                            <div class="tab-content m-t-20" id="pills-tabContent">
                                <div class="tab-pane fade show active" id="test4" role="tabpanel" aria-labelledby="pills-home-tab">
                                    <form>
                                        <div class="form-group">
                                            <div class="input-group input-group-lg">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="cc BTC"></i></span>
                                                </div>
                                                <input type="text" class="form-control" placeholder="Amount">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="input-group input-group-lg">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">$</span>
                                                </div>
                                                <input type="text" class="form-control" placeholder="Price">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <button type="button" class="btn btn-info">Buy Bitcoin</button>
                                        </div>
                                    </form>
                                </div>
                                <div class="tab-pane fade" id="test5" role="tabpanel" aria-labelledby="pills-profile-tab">
                                    <form>
                                        <div class="form-group">
                                            <div class="input-group input-group-lg">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="cc BTC"></i></span>
                                                </div>
                                                <input type="text" class="form-control" placeholder="Amount">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="input-group input-group-lg">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">$</span>
                                                </div>
                                                <input type="text" class="form-control" placeholder="Price">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <button type="button" class="btn btn-success">Sell Bitcoin</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Currency Exchange</h4>
                            <h5 class="card-subtitle">exchange currency from here</h5>
                        </div>
                        <div class="card-body bg-light text-center">
                            <form>
                                <div class="row no-gutters">
                                    <div class="col-8">
                                        <input class="form-control form-control-lg" type="text" value="1.02458">
                                    </div>
                                    <div class="col-4">
                                        <select class="custom-select custom-select-lg">
                                            <option value="1">BTC</option>
                                            <option value="2">ETH</option>
                                            <option value="3">DASH</option>
                                            <option value="4">LTC</option>
                                            <option value="5">NEO</option>
                                            <option value="6">XRP</option>
                                            <option value="7">EOS</option>
                                            <option value="8">NEM</option>
                                            <option value="9">ADA</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="round align-self-center round-danger m-t-10 m-b-10"><i class="ti-exchange-vertical"></i></div>
                                <div class="row no-gutters">
                                    <div class="col-8">
                                        <input class="form-control form-control-lg" type="text" value="9526.39">
                                    </div>
                                    <div class="col-4">
                                        <select class="custom-select custom-select-lg">
                                            <option value="1">USD</option>
                                            <option value="2">EUR</option>
                                            <option value="3">INR</option>
                                            <option value="4">AUD</option>
                                            <option value="5">GBP</option>
                                            <option value="6">CAD</option>
                                        </select>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="card-body text-center">
                            <button type="button" class="btn btn-info">Exchange Now</button>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Reviews</h4>
                            <h5 class="card-subtitle">Overview of Review</h5>
                            <h2 class="font-medium m-t-40 m-b-0">25426</h2>
                            <span class="text-muted">This month we got 346 New Reviews</span>
                            <div class="image-box m-t-30 m-b-30">
                                <a href="#" class="m-r-10" data-toggle="tooltip" data-placement="top" title="Simmons"><img src="../../assets/images/users/1.jpg" class="rounded-circle" width="45" alt="user"></a>
                                <a href="#" class="m-r-10" data-toggle="tooltip" data-placement="top" title="Fitz"><img src="../../assets/images/users/2.jpg" class="rounded-circle" width="45" alt="user"></a>
                                <a href="#" class="m-r-10" data-toggle="tooltip" data-placement="top" title="Phil"><img src="../../assets/images/users/3.jpg" class="rounded-circle" width="45" alt="user"></a>
                                <a href="#" class="m-r-10" data-toggle="tooltip" data-placement="top" title="Melinda"><img src="../../assets/images/users/4.jpg" class="rounded-circle" width="45" alt="user"></a>
                            </div>
                            <a href="javascript:void(0)" class="btn btn-lg btn-info m-t-10">Checkout All Reviews</a>
                        </div>
                    </div>
                    <div class="card poll-widget">
                        <div class="card-body">
                            <h4 class="card-title">Poll of the week</h4>
                            <h5 class="card-subtitle">Here is the latest poll</h5>
                            <p class="font-bold text-muted">What is your mobile app usage daily?</p>
                            <ul class="list-style-none m-t-20">
                                <li>
                                    <div class="custom-control custom-radio">
                                        <input type="radio" id="a" name="customRadio" class="custom-control-input">
                                        <label class="custom-control-label" for="a"><b class="m-r-5">A</b> 30 Minutes</label>
                                    </div>
                                </li>
                                <li class="m-t-20">
                                    <div class="custom-control custom-radio">
                                        <input type="radio" id="b" name="customRadio" class="custom-control-input" checked>
                                        <label class="custom-control-label text-info" for="b"><b class="m-r-5">B</b> More than 30 minutes</label>
                                    </div>
                                </li>
                                <li class="m-t-20">
                                    <div class="custom-control custom-radio">
                                        <input type="radio" id="c" name="customRadio" class="custom-control-input">
                                        <label class="custom-control-label" for="c"><b class="m-r-5">C</b> 1 Hour</label>
                                    </div>
                                </li>
                                <li class="m-t-20">
                                    <div class="custom-control custom-radio">
                                        <input type="radio" id="d" name="customRadio" class="custom-control-input">
                                        <label class="custom-control-label" for="d"><b class="m-r-5">D</b> More than 1 hour</label>
                                    </div>
                                </li>
                            </ul>
                            <button class="btn btn-success m-t-15">Submit Answer</button>
                        </div>
                    </div>
                    <div class="card poll-widget">
                        <div class="card-body">
                            <h4 class="card-title">Result of Poll</h4>
                            <h5 class="card-subtitle">Here is the result for the latest poll</h5>
                            <p class="font-bold text-muted">What is your mobile app usage daily?</p>
                            <ul class="list-style-none m-t-20 m-b-10">
                                <li>
                                    <div class="d-flex align-items-center">
                                        <div>
                                            <h6 class="m-b-0 font-bold">A <span class="font-light">30 Minutes</span></h6>
                                        </div>
                                        <div class="ml-auto">
                                            <h6 class="m-b-0 font-bold">55%</h6>
                                        </div>
                                    </div>
                                    <div class="progress m-t-10">
                                        <div class="progress-bar bg-info" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </li>
                                <li class="m-t-25">
                                    <div class="d-flex align-items-center">
                                        <div>
                                            <h6 class="m-b-0 font-bold">B <span class="font-light">More than 30 minutes</span></h6>
                                        </div>
                                        <div class="ml-auto">
                                            <h6 class="m-b-0 font-bold">20%</h6>
                                        </div>
                                    </div>
                                    <div class="progress m-t-10">
                                        <div class="progress-bar bg-cyan" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </li>
                                <li class="m-t-25">
                                    <div class="d-flex align-items-center">
                                        <div>
                                            <h6 class="m-b-0 font-bold">C <span class="font-light">1 Hour</span></h6>
                                        </div>
                                        <div class="ml-auto">
                                            <h6 class="m-b-0 font-bold">15%</h6>
                                        </div>
                                    </div>
                                    <div class="progress m-t-10">
                                        <div class="progress-bar bg-success" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </li>
                                <li class="m-t-25">
                                    <div class="d-flex align-items-center">
                                        <div>
                                            <h6 class="m-b-0 font-bold">D <span class="font-light">More than 1 hour</span></h6>
                                        </div>
                                        <div class="ml-auto">
                                            <h6 class="m-b-0 font-bold">10%</h6>
                                        </div>
                                    </div>
                                    <div class="progress m-t-10">
                                        <div class="progress-bar bg-danger" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- ============================================================== -->
                    <!-- visit from country widgets copy and paste this code-->
                    <!-- ============================================================== -->
                    <!-- Card -->
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Visits around the countries</h4>
                            <ul class="list-style-none country-state m-t-20">
                                <li class="m-b-30">
                                    <h2 class="m-b-0">6350</h2>
                                    <small>From India</small>
                                    <div class="float-right">48% <i class="fas fa-level-up-alt text-success"></i></div>
                                    <div class="progress">
                                        <div class="progress-bar bg-success" role="progressbar" style="width: 48%; height: 6px;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </li>
                                <li class="m-b-30">
                                    <h2 class="m-b-0">3250</h2>
                                    <small>From UAE</small>
                                    <div class="float-right">98% <i class="fas fa-level-up-alt text-success"></i></div>
                                    <div class="progress">
                                        <div class="progress-bar bg-info" role="progressbar" style="width: 48%; height: 6px;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </li>
                                <li class="m-b-30">
                                    <h2 class="m-b-0">1250</h2>
                                    <small>From Australia</small>
                                    <div class="float-right">75% <i class="fas fa-level-down-alt text-danger"></i></div>
                                    <div class="progress">
                                        <div class="progress-bar bg-inverse" role="progressbar" style="width: 48%; height: 6px;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </li>
                                <li class="m-b-30">
                                    <h2 class="m-b-0">1350</h2>
                                    <small>From USA</small>
                                    <div class="float-right">48% <i class="fas fa-level-up-alt text-success"></i></div>
                                    <div class="progress">
                                        <div class="progress-bar bg-warning" role="progressbar" style="width: 48%; height: 6px;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- Card -->
                    <!-- ============================================================== -->
                    <!-- Feeds widgets copy and paste this code-->
                    <!-- ============================================================== -->
                    <!-- Card -->
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Feeds</h4>
                            <div class="feed-widget scrollable" style="height:450px;">
                                <ul class="list-style-none feed-body m-0 p-b-20">
                                    <li class="feed-item">
                                        <div class="feed-icon bg-info"><i class="far fa-bell"></i></div> You have 4 pending tasks. <span class="ml-auto font-12 text-muted">Just Now</span></li>
                                    <li class="feed-item">
                                        <div class="feed-icon bg-success"><i class="ti-server"></i></div> Server #1 overloaded.<span class="ml-auto font-12 text-muted">2 Hours ago</span></li>
                                    <li class="feed-item">
                                        <div class="feed-icon bg-warning"><i class="ti-shopping-cart"></i></div> New order received.<span class="ml-auto font-12 text-muted">31 May</span></li>
                                    <li class="feed-item">
                                        <div class="feed-icon bg-danger"><i class="ti-user"></i></div> New user registered.<span class="ml-auto font-12 text-muted">30 May</span></li>
                                    <li class="feed-item">
                                        <div class="feed-icon bg-inverse"><i class="far fa-bell"></i></div> New Version just arrived. <span class="ml-auto font-12 text-muted">27 May</span></li>
                                    <li class="feed-item">
                                        <div class="feed-icon bg-info"><i class="far fa-bell"></i></div> You have 4 pending tasks. <span class="ml-auto font-12 text-muted">Just Now</span></li>
                                    <li class="feed-item">
                                        <div class="feed-icon bg-danger"><i class="ti-user"></i></div> New user registered.<span class="ml-auto font-12 text-muted">30 May</span></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- ============================================================== -->
                    <!-- Totla Earning copy and paste this code-->
                    <!-- ============================================================== -->
                    <!-- Card -->
                    <div class="card earning-widget">
                        <div class="card-body">
                            <div class="card-title">
                                <div class="d-flex">
                                    <div>
                                        <h4 class="card-title m-b-0">Total Earning</h4>
                                        <h2 class="m-t-0">$586</h2>
                                    </div>
                                    <div class="ml-auto">
                                        <select class="custom-select">
                                            <option selected="">Today</option>
                                            <option value="1">Weekly</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body border-top">
                            <table class="table v-middle no-border">
                                <tbody>
                                    <tr>
                                        <td style="width:40px"><img src="../../assets/images/users/1.jpg" width="50" class="rounded-circle" alt="logo"></td>
                                        <td>Andrew Simon</td>
                                        <td align="right"><span class="label label-info">$2300</span></td>
                                    </tr>
                                    <tr>
                                        <td><img src="../../assets/images/users/2.jpg" width="50" class="rounded-circle" alt="logo"></td>
                                        <td>Daniel Kristeen</td>
                                        <td align="right"><span class="label label-success">$3300</span></td>
                                    </tr>
                                    <tr>
                                        <td><img src="../../assets/images/users/3.jpg" width="50" class="rounded-circle" alt="logo"></td>
                                        <td>Dany John</td>
                                        <td align="right"><span class="label label-primary">$4300</span></td>
                                    </tr>
                                    <tr>
                                        <td><img src="../../assets/images/users/4.jpg" width="50" class="rounded-circle" alt="logo"></td>
                                        <td>Chris gyle</td>
                                        <td align="right"><span class="label label-warning">$5300</span></td>
                                    </tr>
                                    <tr>
                                        <td><img src="../../assets/images/users/5.jpg" width="50" class="rounded-circle" alt="logo"></td>
                                        <td>Opera mini</td>
                                        <td align="right"><span class="label label-danger">$4567</span></td>
                                    </tr>
                                    <tr>
                                        <td><img src="../../assets/images/users/6.jpg" width="50" class="rounded-circle" alt="logo"></td>
                                        <td>Microsoft edge</td>
                                        <td align="right"><span class="label label-megna">$7889</span></td>
                                    </tr>
                                </tbody>
                            </table>
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
    <?php include "includes/customizer.php"; ?>
    <!-- ============================================================== -->
    <!-- End customizer Panel -->
    <!-- ============================================================== -->



    <div class="chat-windows"></div>



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


    <!--Wave Effects -->
    <script src="../dist/js/waves.js"></script>


    <!--Menu sidebar -->
    <script src="../dist/js/sidebarmenu.js"></script>


    <!--Custom JavaScript -->
    <script src="../dist/js/custom.min.js"></script>


    <!--This page JavaScript -->
</body>

</html>