<aside class="left-sidebar dontprint">


<!-- Sidebar scroll-->
<div class="scroll-sidebar">


    <!-- Sidebar navigation-->
    <nav class="sidebar-nav dontprint">

        
        <ul id="sidebarnav">

            <!-- User Profile-->
            <!-- <li>

                <div class="user-profile dropdown m-t-20">

                    <div class="user-pic">
                        <img src="../assets/images/users/1.jpg" alt="users" class="rounded-circle img-fluid" />
                    </div>

                    <div class="user-content hide-menu m-t-10">

                        <h5 class="m-b-10 user-name font-medium">Steave Jobs</h5>

                        <a href="javascript:void(0)" class="btn btn-circle btn-sm m-r-5" id="Userdd" role="button" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false">
                            <i class="ti-settings"></i>
                        </a>

                        <a href="javascript:void(0)" title="Logout" class="btn btn-circle btn-sm">
                            <i class="ti-power-off"></i>
                        </a>

                        <div class="dropdown-menu animated flipInY" aria-labelledby="Userdd">

                            <a class="dropdown-item" href="javascript:void(0)">
                                <i class="ti-user m-r-5 m-l-5"></i> My Profile
                            </a>

                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="javascript:void(0)">
                                <i class="ti-settings m-r-5 m-l-5"></i> Account Setting
                            </a>

                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="javascript:void(0)">
                                <i class="fa fa-power-off m-r-5 m-l-5"></i> Logout
                            </a>

                        </div>

                    </div>

                </div>

            </li> -->

            <li class="sidebar-item">
                <a  class="sidebar-link waves-effect waves-dark sidebar-link" 
                    href="index.php" 
                    aria-expanded="false">
                    <i class="fa fa-tachometer-alt"></i>
                    <span class="hide-menu">Dashboard</span>
                </a>
            </li>

            
            <!-- =============== Registrar =================== -->
                <?php

                    if($_SESSION["licom_usr_level"] == 2){ ?>
        
                        <li class="sidebar-item">
        
                            <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
                                <i class="fa fa-users"></i>
                                <span class="hide-menu">Students </span>
                            </a>
        
                            <ul aria-expanded="false" class="collapse  first-level">
                                <li class="sidebar-item">
                                    <a href="students.php" class="sidebar-link">
                                        <i class="icon-Record"></i>
                                        <span class="hide-menu">View All</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="add_new_student.php" class="sidebar-link">
                                        <i class="icon-Record"></i>
                                        <span class="hide-menu">Add New</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="bulk_grades.php" class="sidebar-link">
                                        <i class="icon-Record"></i>
                                        <span class="hide-menu">Encode Grades</span>
                                    </a>
                                </li>
                            </ul>
        
                        </li>
        
                        <li class="sidebar-item">
        
                            <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
                            <i class="fa fa-users"></i>
                                <span class="hide-menu">Instructors </span>
                            </a>
        
                            <ul aria-expanded="false" class="collapse first-level">
                                <li class="sidebar-item">
                                    <a href="instructors.php" class="sidebar-link">
                                        <i class="icon-Record"></i>
                                        <span class="hide-menu">View All</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="add_new_instructor.php" class="sidebar-link">
                                        <i class="icon-Record"></i>
                                        <span class="hide-menu">Add New</span>
                                    </a>
                                </li>
                            </ul>
        
                        </li>
        
                        <li class="sidebar-item">
                            <a  class="sidebar-link waves-effect waves-dark sidebar-link" 
                                href="class_schedules.php" 
                                aria-expanded="false">
                                <i class="fa fa-calendar"></i>
                                <span class="hide-menu">Class Schedule</span>
                            </a>
                        </li>
        
                        <li class="sidebar-item">
                            <a  class="sidebar-link waves-effect waves-dark sidebar-link" 
                                href="courses.php" 
                                aria-expanded="false">
                                <i class="fa fa-list"></i>
                                <span class="hide-menu">Program</span>
                            </a>
                        </li>
        
                        <li class="sidebar-item">
                            <a  class="sidebar-link waves-effect waves-dark sidebar-link" 
                                href="subjects.php" 
                                aria-expanded="false">
                                <i class="fa fa-list"></i>
                                <span class="hide-menu">Subjects</span>
                            </a>
                        </li>
        
                        <li class="sidebar-item">
                            <a  class="sidebar-link waves-effect waves-dark sidebar-link" 
                                href="semesters.php" 
                                aria-expanded="false">
                                <i class="fa fa-chart-line"></i>
                                <span class="hide-menu">Semesters</span>
                            </a>
                        </li>
        
                        <li class="sidebar-item">
                            <a  class="sidebar-link waves-effect waves-dark sidebar-link" 
                                href="rooms.php" 
                                aria-expanded="false">
                                <i class="fa fa-building"></i>
                                <span class="hide-menu">Rooms</span>
                            </a>
                        </li>
        
                        <li class="sidebar-item">
        
                            <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
                            <i class="fa fa-file-alt"></i>
                                <span class="hide-menu">Evaluation Form </span>
                            </a>
        
                            <ul aria-expanded="false" class="collapse  first-level">
                                <li class="sidebar-item">
                                    <a href="eval_headers.php" class="sidebar-link">
                                        <i class="icon-Record"></i>
                                        <span class="hide-menu">Headers</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="eval_metrics.php" class="sidebar-link">
                                        <i class="icon-Record"></i>
                                        <span class="hide-menu">Metrics</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="eval_scales.php" class="sidebar-link">
                                        <i class="icon-Record"></i>
                                        <span class="hide-menu">Scale</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="eval_settings.php" class="sidebar-link">
                                        <i class="icon-Record"></i>
                                        <span class="hide-menu">Instructions</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="eval_preview.php" class="sidebar-link">
                                        <i class="icon-Record"></i>
                                        <span class="hide-menu">Preview</span>
                                    </a>
                                </li>
                            </ul>
        
                        </li>
                        
                        <?php 
                    }
                ?>
            <!-- =============== Registrar END =============== -->

            <!-- =============== Student ===================== -->
                <?php

                    if($_SESSION["licom_usr_level"] == 3){ ?>

                        <li class="sidebar-item">
                            <a  class="sidebar-link waves-effect waves-dark sidebar-link" 
                                href="student_class_schedules.php" 
                                aria-expanded="false">
                                <i class="fa fa-calendar"></i>
                                <span class="hide-menu">Class Schedule</span>
                            </a>
                        </li>

                        <li class="sidebar-item">
                            <a  class="sidebar-link waves-effect waves-dark sidebar-link" 
                                href="student_grades.php" 
                                aria-expanded="false">
                                <i class="fa fa-file-alt"></i>
                                <span class="hide-menu">Grades</span>
                            </a>
                        </li>

                        <li class="sidebar-item">
                            <a  class="sidebar-link waves-effect waves-dark sidebar-link" 
                                href="faculty_evaluation.php" 
                                aria-expanded="false">
                                <i class="fa fa-trophy"></i>
                                <span class="hide-menu">Faculty Evaluation</span>
                            </a>
                        </li>
                        
                        <?php
                    }
                ?>
            <!-- =============== Student END ================= -->

            <!-- =============== Instructor ================= -->
                <?php

                    if($_SESSION["licom_usr_level"] == 4){ ?>

                        <li class="sidebar-item">
                            
                            <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
                                <i class="fa fa-users"></i>
                                <span class="hide-menu">Students </span>
                            </a>

                            <ul aria-expanded="false" class="collapse  first-level">
                                <!-- <li class="sidebar-item">
                                    <a href="students.php" class="sidebar-link">
                                        <i class="icon-Record"></i>
                                        <span class="hide-menu">View All</span>
                                    </a>
                                </li> -->
                                <li class="sidebar-item">
                                    <a href="bulk_grades2.php" class="sidebar-link">
                                        <i class="icon-Record"></i>
                                        <span class="hide-menu">Encode Grades</span>
                                    </a>
                                </li>
                            </ul>

                        </li>

                        <li class="sidebar-item">
                            <a  class="sidebar-link waves-effect waves-dark sidebar-link" 
                                href="faculty_class_schedules.php" 
                                aria-expanded="false">
                                <i class="fa fa-calendar"></i>
                                <span class="hide-menu">Class Schedule</span>
                            </a>
                        </li>

                        <li class="sidebar-item">
                            <a  class="sidebar-link waves-effect waves-dark sidebar-link" 
                                href="faculty_grades.php" 
                                aria-expanded="false">
                                <i class="fa fa-file-alt"></i>
                                <span class="hide-menu">Evaluation Grades</span>
                            </a>
                        </li>
                        
                        <?php
                    }
                ?>
            <!-- =============== Instructor END ============= -->

            <!-- =============== Administrator ============== -->
                <?php   

                    if($_SESSION["licom_usr_level"] == 1){ ?>

                        <li class="sidebar-item">
            
                            <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
                                <i class="fa fa-user-plus"></i>
                                <span class="hide-menu">Accounts </span>
                            </a>

                            <ul aria-expanded="false" class="collapse  first-level">
                                <li class="sidebar-item">
                                    <a href="accounts.php" class="sidebar-link">
                                        <i class="icon-Record"></i>
                                        <span class="hide-menu">View All</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="add_new_student.php" class="sidebar-link">
                                        <i class="icon-Record"></i>
                                        <span class="hide-menu">Add New Student</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="add_new_instructor.php" class="sidebar-link">
                                        <i class="icon-Record"></i>
                                        <span class="hide-menu">Add New Instructor</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="add_new_registrar.php" class="sidebar-link">
                                        <i class="icon-Record"></i>
                                        <span class="hide-menu">Add New Registrar</span>
                                    </a>
                                </li>
                            </ul>

                        </li>

                        <li class="sidebar-item">
                            <a  class="sidebar-link waves-effect waves-dark sidebar-link" 
                                href="evaluation_grades.php" 
                                aria-expanded="false">
                                <i class="fa fa-file-alt"></i>
                                <span class="hide-menu">Evaluation Grades</span>
                            </a>
                        </li>

                        <li class="sidebar-item">
                            <a  class="sidebar-link waves-effect waves-dark sidebar-link" 
                                href="semesters.php" 
                                aria-expanded="false">
                                <i class="fa fa-chart-line"></i>
                                <span class="hide-menu">Semesters</span>
                            </a>
                        </li>

                        <li class="sidebar-item">
                            <a  class="sidebar-link waves-effect waves-dark sidebar-link" 
                                href="year_levels.php" 
                                aria-expanded="false">
                                <i class="fa fa-chart-line"></i>
                                <span class="hide-menu">Year Levels</span>
                            </a>
                        </li>

                        <li class="sidebar-item">
                            <a  class="sidebar-link waves-effect waves-dark sidebar-link" 
                                href="courses.php" 
                                aria-expanded="false">
                                <i class="fa fa-list"></i>
                                <span class="hide-menu">Programs</span>
                            </a>
                        </li>
        
                        <li class="sidebar-item">
                            <a  class="sidebar-link waves-effect waves-dark sidebar-link" 
                                href="subjects.php" 
                                aria-expanded="false">
                                <i class="fa fa-list"></i>
                                <span class="hide-menu">Subjects</span>
                            </a>
                        </li>
        
                        <li class="sidebar-item">
                            <a  class="sidebar-link waves-effect waves-dark sidebar-link" 
                                href="rooms.php" 
                                aria-expanded="false">
                                <i class="fa fa-building"></i>
                                <span class="hide-menu">Rooms</span>
                            </a>
                        </li>

                        <li class="sidebar-item">
            
                            <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
                            <i class="fa fa-file-alt"></i>
                                <span class="hide-menu">Evaluation Form </span>
                            </a>

                            <ul aria-expanded="false" class="collapse  first-level">
                                <li class="sidebar-item">
                                    <a href="eval_headers.php" class="sidebar-link">
                                        <i class="icon-Record"></i>
                                        <span class="hide-menu">Headers</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="eval_metrics.php" class="sidebar-link">
                                        <i class="icon-Record"></i>
                                        <span class="hide-menu">Metrics</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="eval_scales.php" class="sidebar-link">
                                        <i class="icon-Record"></i>
                                        <span class="hide-menu">Scale</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="eval_settings.php" class="sidebar-link">
                                        <i class="icon-Record"></i>
                                        <span class="hide-menu">Instructions</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="eval_preview.php" class="sidebar-link">
                                        <i class="icon-Record"></i>
                                        <span class="hide-menu">Preview</span>
                                    </a>
                                </li>
                            </ul>

                        </li>

                        <li class="sidebar-item">
                            <a  class="sidebar-link waves-effect waves-dark sidebar-link" 
                                href="activity_logs.php" 
                                aria-expanded="false">
                                <i class="fa fa-clock"></i>
                                <span class="hide-menu">Activity Logs</span>
                            </a>
                        </li>

                        <!-- <li class="sidebar-item">
                            <a  class="sidebar-link waves-effect waves-dark sidebar-link" 
                                href="eval_remarks.php" 
                                aria-expanded="false">
                                <i class="fa fa-ribbon"></i>
                                <span class="hide-menu">Evaluation Remarks</span>
                            </a>
                        </li> -->

                        <?php 
                    }
                ?>
            <!-- =============== Administrator END ========== -->


            <li class="nav-small-cap">
                <i class="mdi mdi-dots-horizontal"></i>
                <span class="hide-menu">Shortcuts</span>
            </li>

            <li class="sidebar-item">
                <a  class="sidebar-link waves-effect waves-dark sidebar-link" 
                    href="settings_menu.php" 
                    aria-expanded="false">
                    <i class="fa fa-cog"></i>
                    <span class="hide-menu">Settings</span>
                </a>
            </li>

            <li class="sidebar-item">
                <a class="sidebar-link waves-effect waves-dark sidebar-link" 
                    href="includes/logout.php" 
                    aria-expanded="false">
                    <i class="fa fa-power-off"></i>
                    <span class="hide-menu">Log Out</span>
                </a>
            </li>
        </ul>


    </nav>
    <!-- End Sidebar navigation -->


</div>
<!-- End Sidebar scroll-->


</aside>