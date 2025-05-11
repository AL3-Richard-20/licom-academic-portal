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


        <!-- This Page CSS -->
        <link rel="stylesheet" type="text/css" href="../assets/extra-libs/prism/prism.css">
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
                        <h4 class="page-title">Grid</h4>
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
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Grid options</h4>
                                <h6 class="card-subtitle">See how aspects of the Bootstrap grid system work across multiple devices with a handy table. check the <a href="https://v4-alpha.getbootstrap.com/layout/grid/">official website grid page</a></h6>
                                <div class="table-responsive">
                                    <table class="table table-bordered table-striped ">
                                        <thead>
                                            <tr>
                                                <th></th>
                                                <th class="text-center"> Extra small
                                                    <br> <small>&lt;576px</small> </th>
                                                <th class="text-center"> Small
                                                    <br> <small>≥576px</small> </th>
                                                <th class="text-center"> Medium
                                                    <br> <small>≥768px</small> </th>
                                                <th class="text-center"> Large
                                                    <br> <small>≥992px</small> </th>
                                                <th class="text-center"> Extra large
                                                    <br> <small>≥1200px</small> </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th class="text-nowrap" scope="row">Grid behavior</th>
                                                <td>Horizontal at all times</td>
                                                <td colspan="4">Collapsed to start, horizontal above breakpoints</td>
                                            </tr>
                                            <tr>
                                                <th class="text-nowrap" scope="row">Max container width</th>
                                                <td>None (auto)</td>
                                                <td>540px</td>
                                                <td>720px</td>
                                                <td>960px</td>
                                                <td>1140px</td>
                                            </tr>
                                            <tr>
                                                <th class="text-nowrap" scope="row">Class prefix</th>
                                                <td><code>.col-</code></td>
                                                <td><code>.col-sm-</code></td>
                                                <td><code>.col-md-</code></td>
                                                <td><code>.col-lg-</code></td>
                                                <td><code>.col-xl-</code></td>
                                            </tr>
                                            <tr>
                                                <th class="text-nowrap" scope="row"># of columns</th>
                                                <td colspan="5">12</td>
                                            </tr>
                                            <tr>
                                                <th class="text-nowrap" scope="row">Gutter width</th>
                                                <td colspan="5">30px (15px on each side of a column)</td>
                                            </tr>
                                            <tr>
                                                <th class="text-nowrap" scope="row">Nestable</th>
                                                <td colspan="5">Yes</td>
                                            </tr>
                                            <tr>
                                                <th class="text-nowrap" scope="row">Offsets</th>
                                                <td colspan="5">Yes</td>
                                            </tr>
                                            <tr>
                                                <th class="text-nowrap" scope="row">Column ordering</th>
                                                <td colspan="5">Yes</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <p>Grid classes apply to devices with screen widths greater than or equal to the breakpoint sizes, and override grid classes targeted at smaller devices. Therefore, applying any <code>.col-md-</code> class to an element will not only affect its styling on medium devices but also on large devices if a <code>.col-lg-</code> class is not present.</p>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Example: Stacked-to-horizontal</h4>
                                <h6 class="card-subtitle">Using a single set of <code>.col-md-*</code> grid classes, you can create a default grid system that starts out stacked on mobile devices and tablet devices (the extra small to small range) before becoming horizontal on desktop (medium) devices. Place grid columns in any <code>.row</code>.</h6>
                                <div class="row bg-light m-b-10 p-10">
                                    <div class="col-md-1">.col-md-1</div>
                                    <div class="col-md-1">.col-md-1</div>
                                    <div class="col-md-1">.col-md-1</div>
                                    <div class="col-md-1">.col-md-1</div>
                                    <div class="col-md-1">.col-md-1</div>
                                    <div class="col-md-1">.col-md-1</div>
                                    <div class="col-md-1">.col-md-1</div>
                                    <div class="col-md-1">.col-md-1</div>
                                    <div class="col-md-1">.col-md-1</div>
                                    <div class="col-md-1">.col-md-1</div>
                                    <div class="col-md-1">.col-md-1</div>
                                    <div class="col-md-1">.col-md-1</div>
                                </div>
                                <div class="row bg-light m-b-10 p-10">
                                    <div class="col-md-8">.col-md-8</div>
                                    <div class="col-md-4">.col-md-4</div>
                                </div>
                                <div class="row bg-light m-b-10 p-10">
                                    <div class="col-md-4">.col-md-4</div>
                                    <div class="col-md-4">.col-md-4</div>
                                    <div class="col-md-4">.col-md-4</div>
                                </div>
                                <div class="row bg-light m-b-10 p-10">
                                    <div class="col-md-6">.col-md-6</div>
                                    <div class="col-md-6">.col-md-6</div>
                                </div>
                                <pre class="language-html scrollable">
                                    <code>
                                        &lt;div class=&quot;row show-grid&quot;&gt;
                                            &lt;div class=&quot;col-md-1&quot;&gt;.col-md-1&lt;/div&gt;
                                            &lt;div class=&quot;col-md-1&quot;&gt;.col-md-1&lt;/div&gt;
                                            &lt;div class=&quot;col-md-1&quot;&gt;.col-md-1&lt;/div&gt;
                                            &lt;div class=&quot;col-md-1&quot;&gt;.col-md-1&lt;/div&gt;
                                            &lt;div class=&quot;col-md-1&quot;&gt;.col-md-1&lt;/div&gt;
                                            &lt;div class=&quot;col-md-1&quot;&gt;.col-md-1&lt;/div&gt;
                                            &lt;div class=&quot;col-md-1&quot;&gt;.col-md-1&lt;/div&gt;
                                            &lt;div class=&quot;col-md-1&quot;&gt;.col-md-1&lt;/div&gt;
                                            &lt;div class=&quot;col-md-1&quot;&gt;.col-md-1&lt;/div&gt;
                                            &lt;div class=&quot;col-md-1&quot;&gt;.col-md-1&lt;/div&gt;
                                            &lt;div class=&quot;col-md-1&quot;&gt;.col-md-1&lt;/div&gt;
                                            &lt;div class=&quot;col-md-1&quot;&gt;.col-md-1&lt;/div&gt;
                                        &lt;/div&gt;
                                        &lt;div class=&quot;row show-grid&quot;&gt;
                                            &lt;div class=&quot;col-md-8&quot;&gt;.col-md-8&lt;/div&gt;
                                            &lt;div class=&quot;col-md-4&quot;&gt;.col-md-4&lt;/div&gt;
                                        &lt;/div&gt;
                                        &lt;div class=&quot;row show-grid&quot;&gt;
                                            &lt;div class=&quot;col-md-4&quot;&gt;.col-md-4&lt;/div&gt;
                                            &lt;div class=&quot;col-md-4&quot;&gt;.col-md-4&lt;/div&gt;
                                            &lt;div class=&quot;col-md-4&quot;&gt;.col-md-4&lt;/div&gt;
                                        &lt;/div&gt;
                                        &lt;div class=&quot;row show-grid&quot;&gt;
                                            &lt;div class=&quot;col-md-6&quot;&gt;.col-md-6&lt;/div&gt;
                                            &lt;div class=&quot;col-md-6&quot;&gt;.col-md-6&lt;/div&gt;
                                        &lt;/div&gt;
                                    </code>
                                </pre>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Example: Mobile and desktop</h4>
                                <h6 class="card-subtitle">Don't want your columns to simply stack in smaller devices? Use the extra small and medium device grid classes by adding <code>.col-xs-*</code> <code>.col-md-*</code> to your columns. See the example below for a better idea of how it all works.</h6>
                                <div class="row bg-light m-b-10 p-10">
                                    <div class="col-xs-12 col-md-8">.col-xs-12 .col-md-8</div>
                                    <div class="col-xs-6 col-md-4">.col-xs-6 .col-md-4</div>
                                </div>
                                <div class="row bg-light m-b-10 p-10">
                                    <div class="col-xs-6 col-md-4">.col-xs-6 .col-md-4</div>
                                    <div class="col-xs-6 col-md-4">.col-xs-6 .col-md-4</div>
                                    <div class="col-xs-6 col-md-4">.col-xs-6 .col-md-4</div>
                                </div>
                                <div class="row bg-light m-b-10 p-10">
                                    <div class="col-xs-6">.col-xs-6</div>
                                    <div class="col-xs-6">.col-xs-6</div>
                                </div>
                                <pre class="language-html scrollable">
                                    <code>
                                        &lt;div class=&quot;row show-grid&quot;&gt;
                                            &lt;div class=&quot;col-xs-12 col-md-8&quot;&gt;.col-xs-12 .col-md-8&lt;/div&gt;
                                            &lt;div class=&quot;col-xs-6 col-md-4&quot;&gt;.col-xs-6 .col-md-4&lt;/div&gt;
                                        &lt;/div&gt;
                                        &lt;div class=&quot;row show-grid&quot;&gt;
                                            &lt;div class=&quot;col-xs-6 col-md-4&quot;&gt;.col-xs-6 .col-md-4&lt;/div&gt;
                                            &lt;div class=&quot;col-xs-6 col-md-4&quot;&gt;.col-xs-6 .col-md-4&lt;/div&gt;
                                            &lt;div class=&quot;col-xs-6 col-md-4&quot;&gt;.col-xs-6 .col-md-4&lt;/div&gt;
                                        &lt;/div&gt;
                                        &lt;div class=&quot;row show-grid&quot;&gt;
                                            &lt;div class=&quot;col-xs-6&quot;&gt;.col-xs-6&lt;/div&gt;
                                            &lt;div class=&quot;col-xs-6&quot;&gt;.col-xs-6&lt;/div&gt;
                                        &lt;/div&gt;
                                    </code>
                                </pre>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Example: Mobile, tablet, desktops</h4>
                                <h6 class="card-subtitle">Build on the previous example by creating even more dynamic and powerful layouts with tablet <code>.col-sm-*</code> classes.</h6>
                                <div class="row bg-light m-b-10 p-10">
                                    <div class="col-xs-12 col-sm-6 col-md-8">.col-xs-12 .col-sm-6 .col-md-8</div>
                                    <div class="col-xs-6 col-md-4">.col-xs-6 .col-md-4</div>
                                </div>
                                <div class="row bg-light m-b-10 p-10">
                                    <div class="col-xs-6 col-sm-4">.col-xs-6 .col-sm-4</div>
                                    <div class="col-xs-6 col-sm-4">.col-xs-6 .col-sm-4</div>
                                    <!-- Optional: clear the XS cols if their content doesn't match in height -->
                                    <div class="clearfix visible-xs"></div>
                                    <div class="col-xs-6 col-sm-4">.col-xs-6 .col-sm-4</div>
                                </div>
                                <pre class="language-html scrollable">
                                    <code>
                                        &lt;div class=&quot;row bg-light m-b-10 p-10&quot;&gt;
                                            &lt;div class=&quot;col-xs-12 col-sm-6 col-md-8&quot;&gt;.col-xs-12 .col-sm-6 .col-md-8&lt;/div&gt;
                                            &lt;div class=&quot;col-xs-6 col-md-4&quot;&gt;.col-xs-6 .col-md-4&lt;/div&gt;
                                        &lt;/div&gt;
                                        &lt;div class=&quot;row show-grid&quot;&gt;
                                            &lt;div class=&quot;col-xs-6 col-sm-4&quot;&gt;.col-xs-6 .col-sm-4&lt;/div&gt;
                                            &lt;div class=&quot;col-xs-6 col-sm-4&quot;&gt;.col-xs-6 .col-sm-4&lt;/div&gt;
                                            &lt;!-- Optional: clear the XS cols if their content doesn't match in height --&gt;
                                            &lt;div class=&quot;clearfix visible-xs&quot;&gt;&lt;/div&gt;
                                            &lt;div class=&quot;col-xs-6 col-sm-4&quot;&gt;.col-xs-6 .col-sm-4&lt;/div&gt;
                                        &lt;/div&gt;
                                    </code>
                                </pre>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Responsive column resets</h4>
                                <h6 class="card-subtitle">With the four tiers of grids available you're bound to run into issues where, at certain breakpoints, your columns don't clear quite right as one is taller than the other. To fix that, use a combination of a <code>.clearfix</code> and our responsive utility classes.</h6>
                                <div class="row bg-light m-b-10 p-10">
                                    <div class="col-xs-6 col-sm-3"> .col-xs-6 .col-sm-3
                                        <br> Resize your viewport or check it out on your phone for an example. </div>
                                    <div class="col-xs-6 col-sm-3">.col-xs-6 .col-sm-3</div>
                                    <!-- Add the extra clearfix for only the required viewport -->
                                    <div class="clearfix visible-xs"></div>
                                    <div class="col-xs-6 col-sm-3">.col-xs-6 .col-sm-3</div>
                                    <div class="col-xs-6 col-sm-3">.col-xs-6 .col-sm-3</div>
                                </div>
                                <pre class="language-html scrollable">
                                    <code>
                                        &lt;div class=&quot;row bg-light m-b-10 p-10&quot;&gt;
                                            &lt;div class=&quot;col-xs-6 col-sm-3&quot;&gt; .col-xs-6 .col-sm-3
                                                &lt;br&gt; Resize your viewport or check it out on your phone for an example. &lt;/div&gt;
                                            &lt;div class=&quot;col-xs-6 col-sm-3&quot;&gt;.col-xs-6 .col-sm-3&lt;/div&gt;
                                            &lt;!-- Add the extra clearfix for only the required viewport --&gt;
                                            &lt;div class=&quot;clearfix visible-xs&quot;&gt;&lt;/div&gt;
                                            &lt;div class=&quot;col-xs-6 col-sm-3&quot;&gt;.col-xs-6 .col-sm-3&lt;/div&gt;
                                            &lt;div class=&quot;col-xs-6 col-sm-3&quot;&gt;.col-xs-6 .col-sm-3&lt;/div&gt;
                                        &lt;/div&gt;
                                    </code>
                                </pre>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Offsetting columns</h4>
                                <h6 class="card-subtitle">Move columns to the right using <code>.offset-md--*</code> classes. These classes increase the left margin of a column by <code>*</code> columns. For example, <code>.offset-md-4</code> moves <code>.col-md-4</code> over four columns.</h6>
                                <div class="row bg-light m-b-10 p-10">
                                    <div class="col-md-4">.col-md-4</div>
                                    <div class="col-md-4 offset-md-4">.col-md-4 .col-md-offset-4</div>
                                </div>
                                <div class="row bg-light m-b-10 p-10">
                                    <div class="col-md-3 offset-md-3">.col-md-3 .col-md-offset-3</div>
                                    <div class="col-md-3 offset-md-3">.col-md-3 .col-md-offset-3</div>
                                </div>
                                <div class="row bg-light m-b-10 p-10">
                                    <div class="col-md-6 offset-md-3">.col-md-6 .col-md-offset-3</div>
                                </div>
                                <pre class="language-html scrollable">
                                    <code>
                                        &lt;div class=&quot;row bg-light m-b-10 p-10&quot;&gt;
                                            &lt;div class=&quot;col-md-4&quot;&gt;.col-md-4&lt;/div&gt;
                                            &lt;div class=&quot;col-md-4 offset-md-4&quot;&gt;.col-md-4 .col-md-offset-4&lt;/div&gt;
                                        &lt;/div&gt;
                                        &lt;div class=&quot;row bg-light m-b-10 p-10&quot;&gt;
                                            &lt;div class=&quot;col-md-3 offset-md-3&quot;&gt;.col-md-3 .col-md-offset-3&lt;/div&gt;
                                            &lt;div class=&quot;col-md-3 offset-md-3&quot;&gt;.col-md-3 .col-md-offset-3&lt;/div&gt;
                                        &lt;/div&gt;
                                        &lt;div class=&quot;row bg-light m-b-10 p-10&quot;&gt;
                                            &lt;div class=&quot;col-md-6 offset-md-3&quot;&gt;.col-md-6 .col-md-offset-3&lt;/div&gt;
                                        &lt;/div&gt;
                                    </code>
                                </pre>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Right sidebar -->
                <!-- ============================================================== -->
                <!-- .right-sidebar -->
                <!-- ============================================================== -->
                <!-- End Right sidebar -->
                <!-- ============================================================== -->
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


    <!-- This Page JS -->
    <script src="../assets/extra-libs/prism/prism.js"></script>


</body>

</html>