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
                        <h4 class="page-title">Buttons</h4>
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
                    <div class="col-lg-12 col-xlg-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">General Buttons</h4>
                                <h6 class="card-subtitle">Use a classes <code>btn btn-success</code> to quickly create a General btn.</h6>
                                <div class="button-group">
                                    <button type="button" class="btn waves-effect waves-light btn-primary">Primary</button>
                                    <button type="button" class="btn waves-effect waves-light btn-secondary">Secondary</button>
                                    <button type="button" class="btn waves-effect waves-light btn-success">Success</button>
                                    <button type="button" class="btn waves-effect waves-light btn-info">Info</button>
                                    <button type="button" class="btn waves-effect waves-light btn-warning">Warning</button>
                                    <button type="button" class="btn waves-effect waves-light btn-danger">Danger</button>
                                    <button type="button" class="btn waves-effect waves-light btn-light">Light</button>
                                    <button type="button" class="btn waves-effect waves-light btn-dark">Dark</button>
                                </div>
                                <pre class="language-html scrollable">
                            <code>
                                &lt;div class=&quot;button-group&quot;&gt;
                                    &lt;button type=&quot;button&quot; class=&quot;btn waves-effect waves-light btn-primary&quot;&gt;Primary&lt;/button&gt;
                                    &lt;button type=&quot;button&quot; class=&quot;btn waves-effect waves-light btn-secondary&quot;&gt;Secondary&lt;/button&gt;
                                    &lt;button type=&quot;button&quot; class=&quot;btn waves-effect waves-light btn-success&quot;&gt;Success&lt;/button&gt;
                                    &lt;button type=&quot;button&quot; class=&quot;btn waves-effect waves-light btn-info&quot;&gt;Info&lt;/button&gt;
                                    &lt;button type=&quot;button&quot; class=&quot;btn waves-effect waves-light btn-warning&quot;&gt;Warning&lt;/button&gt;
                                    &lt;button type=&quot;button&quot; class=&quot;btn waves-effect waves-light btn-danger&quot;&gt;Danger&lt;/button&gt;
                                    &lt;button type=&quot;button&quot; class=&quot;btn waves-effect waves-light btn-light&quot;&gt;Light&lt;/button&gt;
                                    &lt;button type=&quot;button&quot; class=&quot;btn waves-effect waves-light btn-dark&quot;&gt;Dark&lt;/button&gt;
                                &lt;/div&gt;                               
                            </code>
                        </pre>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 col-xlg-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Button Tags</h4>
                                <h6 class="card-subtitle">The <code>.btn</code>  classes are designed to be used with the <code>.&lt;button&gt;</code> element.</h6>
                                <a class="btn btn-primary" href="#" role="button">Link</a>
                                <button class="btn btn-primary" type="submit">Button</button>
                                <input class="btn btn-primary" type="button" value="Input">
                                <input class="btn btn-primary" type="submit" value="Submit">
                                <input class="btn btn-primary" type="reset" value="Reset">
                                <pre class="language-html scrollable">
                            <code>
                                &lt;a class=&quot;btn btn-primary&quot; href=&quot;#&quot; role=&quot;button&quot;&gt;Link&lt;/a&gt;
                                &lt;button class=&quot;btn btn-primary&quot; type=&quot;submit&quot;&gt;Button&lt;/button&gt;
                                &lt;input class=&quot;btn btn-primary&quot; type=&quot;button&quot; value=&quot;Input&quot;&gt;
                                &lt;input class=&quot;btn btn-primary&quot; type=&quot;submit&quot; value=&quot;Submit&quot;&gt;
                                &lt;input class=&quot;btn btn-primary&quot; type=&quot;reset&quot; value=&quot;Reset&quot;&gt;                          
                            </code>
                        </pre>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 col-xlg-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Button with outline</h4>
                                <h6 class="card-subtitle">Use a classes <code>btn btn-outline-success</code> to quickly create a General btn.</h6>
                                <div class="button-group">
                                    <button type="button" class="btn waves-effect waves-light btn-outline-primary">Primary</button>
                                    <button type="button" class="btn waves-effect waves-light btn-outline-secondary">Secondary</button>
                                    <button type="button" class="btn waves-effect waves-light btn-outline-success">Success</button>
                                    <button type="button" class="btn waves-effect waves-light btn-outline-info">Info</button>
                                    <button type="button" class="btn waves-effect waves-light btn-outline-warning">Warning</button>
                                    <button type="button" class="btn waves-effect waves-light btn-outline-danger">Danger</button>
                                    <button type="button" class="btn waves-effect waves-light btn-outline-light">Light</button>
                                    <button type="button" class="btn waves-effect waves-light btn-outline-dark">Dark</button>
                                </div>
                                <pre class="language-html scrollable">
                                    <code>
                                         &lt;div class=&quot;button-group&quot;&gt;
                                            &lt;button type=&quot;button&quot; class=&quot;btn waves-effect waves-light btn-outline-primary&quot;&gt;Primary&lt;/button&gt;
                                            &lt;button type=&quot;button&quot; class=&quot;btn waves-effect waves-light btn-outline-secondary&quot;&gt;Secondary&lt;/button&gt;
                                            &lt;button type=&quot;button&quot; class=&quot;btn waves-effect waves-light btn-outline-success&quot;&gt;Success&lt;/button&gt;
                                            &lt;button type=&quot;button&quot; class=&quot;btn waves-effect waves-light btn-outline-info&quot;&gt;Info&lt;/button&gt;
                                            &lt;button type=&quot;button&quot; class=&quot;btn waves-effect waves-light btn-outline-warning&quot;&gt;Warning&lt;/button&gt;
                                            &lt;button type=&quot;button&quot; class=&quot;btn waves-effect waves-light btn-outline-danger&quot;&gt;Danger&lt;/button&gt;
                                             &lt;button type=&quot;button&quot; class=&quot;btn waves-effect waves-light btn-outline-light&quot;&gt;Light&lt;/button&gt;
                                              &lt;button type=&quot;button&quot; class=&quot;btn waves-effect waves-light btn-outline-dark&quot;&gt;Dark&lt;/button&gt;
                                        &lt;/div&gt;                             
                                    </code>
                                </pre>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 col-xlg-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Rounded Buttons</h4>
                                <h6 class="card-subtitle">Use a classes <code>btn btn-rounded btn-success</code> to quickly create a General btn.</h6>
                                <div class="button-group">
                                    <button type="button" class="btn waves-effect waves-light btn-rounded btn-primary">Primary</button>
                                    <button type="button" class="btn waves-effect waves-light btn-rounded btn-secondary">Secondary</button>
                                    <button type="button" class="btn waves-effect waves-light btn-rounded btn-success">Success</button>
                                    <button type="button" class="btn waves-effect waves-light btn-rounded btn-info">Info</button>
                                    <button type="button" class="btn waves-effect waves-light btn-rounded btn-warning">Warning</button>
                                    <button type="button" class="btn waves-effect waves-light btn-rounded btn-danger">Danger</button>
                                    <button type="button" class="btn waves-effect waves-light btn-rounded btn-light">Light</button>
                                    <button type="button" class="btn waves-effect waves-light btn-rounded btn-dark">Dark</button>
                                </div>
                                <pre class="language-html scrollable">
                            <code>
                                &lt;div class=&quot;button-group&quot;&gt;
                                    &lt;button type=&quot;button&quot; class=&quot;btn waves-effect waves-light btn-rounded btn-primary&quot;&gt;Primary&lt;/button&gt;
                                    &lt;button type=&quot;button&quot; class=&quot;btn waves-effect waves-light btn-rounded btn-secondary&quot;&gt;Secondary&lt;/button&gt;
                                    &lt;button type=&quot;button&quot; class=&quot;btn waves-effect waves-light btn-rounded btn-success&quot;&gt;Success&lt;/button&gt;
                                    &lt;button type=&quot;button&quot; class=&quot;btn waves-effect waves-light btn-rounded btn-info&quot;&gt;Info&lt;/button&gt;
                                    &lt;button type=&quot;button&quot; class=&quot;btn waves-effect waves-light btn-rounded btn-warning&quot;&gt;Warning&lt;/button&gt;
                                    &lt;button type=&quot;button&quot; class=&quot;btn waves-effect waves-light btn-rounded btn-danger&quot;&gt;Danger&lt;/button&gt;
                                    &lt;button type=&quot;button&quot; class=&quot;btn waves-effect waves-light btn-rounded btn-light&quot;&gt;Light&lt;/button&gt;
                                    &lt;button type=&quot;button&quot; class=&quot;btn waves-effect waves-light btn-rounded btn-dark&quot;&gt;Dark&lt;/button&gt;
                                &lt;/div&gt;                            
                            </code>
                        </pre>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 col-xlg-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Rounded outlined Buttons</h4>
                                <h6 class="card-subtitle">Use a classes <code>btn btn-rounded btn-outline-success</code> to quickly create a General btn.</h6>
                                <div class="button-group">
                                    <button type="button" class="btn waves-effect waves-light btn-rounded btn-outline-primary">Primary</button>
                                    <button type="button" class="btn waves-effect waves-light btn-rounded btn-outline-secondary">Secondary</button>
                                    <button type="button" class="btn waves-effect waves-light btn-rounded btn-outline-success">Success</button>
                                    <button type="button" class="btn waves-effect waves-light btn-rounded btn-outline-info">Info</button>
                                    <button type="button" class="btn waves-effect waves-light btn-rounded btn-outline-warning">Warning</button>
                                    <button type="button" class="btn waves-effect waves-light btn-rounded btn-outline-danger">Danger</button>
                                    <button type="button" class="btn waves-effect waves-light btn-rounded btn-outline-light">Light</button>
                                    <button type="button" class="btn waves-effect waves-light btn-rounded btn-outline-dark">Dark</button>
                                    <pre class="language-html scrollable">
                                        <code>
                                            &lt;div class=&quot;button-group&quot;&gt;
                                                &lt;button type=&quot;button&quot; class=&quot;btn waves-effect waves-light btn-rounded btn-outline-primary&quot;&gt;Primary&lt;/button&gt;
                                                &lt;button type=&quot;button&quot; class=&quot;btn waves-effect waves-light btn-rounded btn-outline-secondary&quot;&gt;Secondary&lt;/button&gt;
                                                &lt;button type=&quot;button&quot; class=&quot;btn waves-effect waves-light btn-rounded btn-outline-success&quot;&gt;Success&lt;/button&gt;
                                                &lt;button type=&quot;button&quot; class=&quot;btn waves-effect waves-light btn-rounded btn-outline-info&quot;&gt;Info&lt;/button&gt;
                                                &lt;button type=&quot;button&quot; class=&quot;btn waves-effect waves-light btn-rounded btn-outline-warning&quot;&gt;Warning&lt;/button&gt;
                                                &lt;button type=&quot;button&quot; class=&quot;btn waves-effect waves-light btn-rounded btn-outline-danger&quot;&gt;Danger&lt;/button&gt;
                                                 &lt;button type=&quot;button&quot; class=&quot;btn waves-effect waves-light btn-rounded btn-outline-light&quot;&gt;Light&lt;/button&gt;
                                                  &lt;button type=&quot;button&quot; class=&quot;btn waves-effect waves-light btn-rounded btn-outline-dark&quot;&gt;Dark&lt;/button&gt;
                                            &lt;/div&gt;                            
                                        </code>
                                    </pre>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Button Sizes</h4>
                                <h6 class="card-subtitle">Use a classes <code>btn btn-lg btn-success</code> to quickly create a General btn.</h6>
                                <div class="button-group">
                                    <button type="button" class="btn waves-effect waves-light btn-lg btn-primary">Large .btn-lg </button>
                                    <button type="button" class="btn waves-effect waves-light btn-secondary">Normal .btn</button>
                                    <button type="button" class="btn waves-effect waves-light btn-sm btn-success">Small .btn-sm</button>
                                    <button type="button" class="btn waves-effect waves-light btn-xs btn-info">Tiny .btn-xs</button>
                                </div>
                                <pre class="language-html scrollable">
                                    <code>
                                    &lt;div class=&quot;button-group&quot;&gt;
                                        &lt;button type=&quot;button&quot; class=&quot;btn waves-effect waves-light btn-lg btn-primary&quot;&gt;Large .btn-lg &lt;/button&gt;
                                        &lt;button type=&quot;button&quot; class=&quot;btn waves-effect waves-light btn-secondary&quot;&gt;Normal .btn&lt;/button&gt;
                                        &lt;button type=&quot;button&quot; class=&quot;btn waves-effect waves-light btn-sm btn-success&quot;&gt;Small .btn-sm&lt;/button&gt;
                                        &lt;button type=&quot;button&quot; class=&quot;btn waves-effect waves-light btn-xs btn-info&quot;&gt;Tiny .btn-xs&lt;/button&gt;
                                    &lt;/div&gt;                           
                                    </code>
                                </pre>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Button Sizes with rounded</h4>
                                <h6 class="card-subtitle">Use a classes <code>btn btn-lg btn-rounded btn-success</code> to create a btn.</h6>
                                <div class="button-group">
                                    <button type="button" class="btn waves-effect waves-light btn-lg btn-rounded btn-primary">Large .btn-lg </button>
                                    <button type="button" class="btn waves-effect waves-light btn-rounded btn-secondary">Normal .btn</button>
                                    <button type="button" class="btn waves-effect waves-light btn-rounded btn-sm btn-success">Small .btn-sm</button>
                                    <button type="button" class="btn waves-effect waves-light btn-rounded btn-xs btn-info">Tiny .btn-xs</button>
                                </div>
                                <pre class="language-html scrollable">
                                    <code>
                                        &lt;div class=&quot;button-group&quot;&gt;
                                            &lt;button type=&quot;button&quot; class=&quot;btn waves-effect waves-light btn-lg btn-rounded btn-primary&quot;&gt;Large .btn-lg &lt;/button&gt;
                                            &lt;button type=&quot;button&quot; class=&quot;btn waves-effect waves-light btn-rounded btn-secondary&quot;&gt;Normal .btn&lt;/button&gt;
                                            &lt;button type=&quot;button&quot; class=&quot;btn waves-effect waves-light btn-rounded btn-sm btn-success&quot;&gt;Small .btn-sm&lt;/button&gt;
                                            &lt;button type=&quot;button&quot; class=&quot;btn waves-effect waves-light btn-rounded btn-xs btn-info&quot;&gt;Tiny .btn-xs&lt;/button&gt;
                                        &lt;/div&gt;                            
                                    </code>
                                </pre>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Block buttons</h4>
                                <h6 class="card-subtitle">Use a classes <code>btn btn-block btn-success</code> to quickly create a General btn.</h6>
                                <div class="row button-group">
                                    <div class="col-lg-2 col-md-4">
                                        <button type="button" class="btn waves-effect waves-light btn-block btn-info">Info</button>
                                    </div>
                                    <div class="col-lg-2 col-md-4">
                                        <button type="button" class="btn waves-effect waves-light btn-block btn-success">Success</button>
                                    </div>
                                    <div class="col-lg-2 col-md-4">
                                        <button type="button" class="btn waves-effect waves-light btn-block btn-primary">Primary</button>
                                    </div>
                                    <div class="col-lg-2 col-md-4">
                                        <button type="button" class="btn waves-effect waves-light btn-block btn-danger">Danger</button>
                                    </div>
                                    <div class="col-lg-2 col-md-4">
                                        <button type="button" class="btn waves-effect waves-light btn-block btn-secondary">Secondary</button>
                                    </div>
                                    <div class="col-lg-2 col-md-4">
                                        <button type="button" class="btn waves-effect waves-light btn-block btn-warning">Warning</button>
                                    </div>
                                    <div class="col-lg-2 col-md-4">
                                        <button type="button" class="btn waves-effect waves-light btn-block btn-light">Light</button>
                                    </div>
                                    <div class="col-lg-2 col-md-4">
                                        <button type="button" class="btn waves-effect waves-light btn-block btn-dark">Dark</button>
                                    </div>
                                </div>
                                <pre class="language-html scrollable">
                                    <code>
                                        &lt;div class=&quot;row button-group&quot;&gt;
                                            &lt;div class=&quot;col-lg-2 col-md-4&quot;&gt;
                                                &lt;button type=&quot;button&quot; class=&quot;btn waves-effect waves-light btn-block btn-info&quot;&gt;Info&lt;/button&gt;
                                            &lt;/div&gt;
                                            &lt;div class=&quot;col-lg-2 col-md-4&quot;&gt;
                                                &lt;button type=&quot;button&quot; class=&quot;btn waves-effect waves-light btn-block btn-success&quot;&gt;Success&lt;/button&gt;
                                            &lt;/div&gt;
                                            &lt;div class=&quot;col-lg-2 col-md-4&quot;&gt;
                                                &lt;button type=&quot;button&quot; class=&quot;btn waves-effect waves-light btn-block btn-primary&quot;&gt;Primary&lt;/button&gt;
                                            &lt;/div&gt;
                                            &lt;div class=&quot;col-lg-2 col-md-4&quot;&gt;
                                                &lt;button type=&quot;button&quot; class=&quot;btn waves-effect waves-light btn-block btn-danger&quot;&gt;Danger&lt;/button&gt;
                                            &lt;/div&gt;
                                            &lt;div class=&quot;col-lg-2 col-md-4&quot;&gt;
                                                &lt;button type=&quot;button&quot; class=&quot;btn waves-effect waves-light btn-block btn-secondary&quot;&gt;Secondary&lt;/button&gt;
                                            &lt;/div&gt;
                                            &lt;div class=&quot;col-lg-2 col-md-4&quot;&gt;
                                                &lt;button type=&quot;button&quot; class=&quot;btn waves-effect waves-light btn-block btn-warning&quot;&gt;Warning&lt;/button&gt;
                                            &lt;/div&gt;
                                            &lt;div class=&quot;col-lg-2 col-md-4&quot;&gt;
                                                &lt;button type=&quot;button&quot; class=&quot;btn waves-effect waves-light btn-block btn-light&quot;&gt;Light&lt;/button&gt;
                                            &lt;/div&gt;
                                            &lt;div class=&quot;col-lg-2 col-md-4&quot;&gt;
                                                &lt;button type=&quot;button&quot; class=&quot;btn waves-effect waves-light btn-block btn-dark&quot;&gt;Dark&lt;/button&gt;
                                            &lt;/div&gt;
                                        &lt;/div&gt;                                       
                                    </code>
                                </pre>
                            </div>
                            <div class="card-body">
                                <h4 class="card-title">Rounded Block buttons</h4>
                                <h6 class="card-subtitle">Use a classes <code>btn btn-block btn-success</code> to quickly create a General btn.</h6>
                                <div class="row button-group">
                                    <div class="col-lg-2 col-md-4">
                                        <button type="button" class="btn btn-rounded btn-block btn-info">Info</button>
                                    </div>
                                    <div class="col-lg-2 col-md-4">
                                        <button type="button" class="btn btn-rounded btn-block btn-success">Success</button>
                                    </div>
                                    <div class="col-lg-2 col-md-4">
                                        <button type="button" class="btn btn-rounded btn-block btn-primary">Primary</button>
                                    </div>
                                    <div class="col-lg-2 col-md-4">
                                        <button type="button" class="btn btn-rounded btn-block btn-danger">Danger</button>
                                    </div>
                                    <div class="col-lg-2 col-md-4">
                                        <button type="button" class="btn btn-rounded btn-block btn-secondary">Secondary</button>
                                    </div>
                                    <div class="col-lg-2 col-md-4">
                                        <button type="button" class="btn btn-rounded btn-block btn-warning">Warning</button>
                                    </div>
                                    <div class="col-lg-2 col-md-4">
                                        <button type="button" class="btn btn-rounded btn-block btn-light">Light</button>
                                    </div>
                                    <div class="col-lg-2 col-md-4">
                                        <button type="button" class="btn btn-rounded btn-block btn-dark">Dark</button>
                                    </div>
                                </div>
                                <pre class="language-html scrollable">
                                    <code>
                                         &lt;div class=&quot;row button-group&quot;&gt;
                                            &lt;div class=&quot;col-lg-2 col-md-4&quot;&gt;
                                                &lt;button type=&quot;button&quot; class=&quot;btn btn-rounded btn-block btn-info&quot;&gt;Info&lt;/button&gt;
                                            &lt;/div&gt;
                                            &lt;div class=&quot;col-lg-2 col-md-4&quot;&gt;
                                                &lt;button type=&quot;button&quot; class=&quot;btn btn-rounded btn-block btn-success&quot;&gt;Success&lt;/button&gt;
                                            &lt;/div&gt;
                                            &lt;div class=&quot;col-lg-2 col-md-4&quot;&gt;
                                                &lt;button type=&quot;button&quot; class=&quot;btn btn-rounded btn-block btn-primary&quot;&gt;Primary&lt;/button&gt;
                                            &lt;/div&gt;
                                            &lt;div class=&quot;col-lg-2 col-md-4&quot;&gt;
                                                &lt;button type=&quot;button&quot; class=&quot;btn btn-rounded btn-block btn-danger&quot;&gt;Danger&lt;/button&gt;
                                            &lt;/div&gt;
                                            &lt;div class=&quot;col-lg-2 col-md-4&quot;&gt;
                                                &lt;button type=&quot;button&quot; class=&quot;btn btn-rounded btn-block btn-secondary&quot;&gt;Secondary&lt;/button&gt;
                                            &lt;/div&gt;
                                            &lt;div class=&quot;col-lg-2 col-md-4&quot;&gt;
                                                &lt;button type=&quot;button&quot; class=&quot;btn btn-rounded btn-block btn-warning&quot;&gt;Warning&lt;/button&gt;
                                            &lt;/div&gt;
                                             &lt;div class=&quot;col-lg-2 col-md-4&quot;&gt;
                                                &lt;button type=&quot;button&quot; class=&quot;btn btn-rounded btn-block btn-light&quot;&gt;Light&lt;/button&gt;
                                            &lt;/div&gt;
                                             &lt;div class=&quot;col-lg-2 col-md-4&quot;&gt;
                                                &lt;button type=&quot;button&quot; class=&quot;btn btn-rounded btn-block btn-dark&quot;&gt;Dark&lt;/button&gt;
                                            &lt;/div&gt;
                                        &lt;/div&gt;     
                                    </code>
                                </pre>
                            </div>
                            <div class="card-body">
                                <h4 class="card-title">Block outline buttons</h4>
                                <h6 class="card-subtitle">Use a classes <code>btn btn-block btn-outline-success</code> to quickly create a General btn.</h6>
                                <div class="row button-group">
                                    <div class="col-lg-2 col-md-4">
                                        <button type="button" class="btn btn-block btn-outline-info">Info</button>
                                    </div>
                                    <div class="col-lg-2 col-md-4">
                                        <button type="button" class="btn btn-block btn-outline-success">Success</button>
                                    </div>
                                    <div class="col-lg-2 col-md-4">
                                        <button type="button" class="btn btn-block btn-outline-primary">Primary</button>
                                    </div>
                                    <div class="col-lg-2 col-md-4">
                                        <button type="button" class="btn btn-block btn-outline-danger">Danger</button>
                                    </div>
                                    <div class="col-lg-2 col-md-4">
                                        <button type="button" class="btn btn-block btn-outline-secondary">Secondary</button>
                                    </div>
                                    <div class="col-lg-2 col-md-4">
                                        <button type="button" class="btn btn-block btn-outline-warning">Warning</button>
                                    </div>
                                    <div class="col-lg-2 col-md-4">
                                        <button type="button" class="btn btn-block btn-outline-light">Light</button>
                                    </div>
                                    <div class="col-lg-2 col-md-4">
                                        <button type="button" class="btn btn-block btn-outline-dark">Dark</button>
                                    </div>
                                </div>
                                <pre class="language-html scrollable">
                                    <code>
                                    &lt;div class=&quot;row button-group&quot;&gt;
                                        &lt;div class=&quot;col-lg-2 col-md-4&quot;&gt;
                                            &lt;button type=&quot;button&quot; class=&quot;btn btn-block btn-outline-info&quot;&gt;Info&lt;/button&gt;
                                        &lt;/div&gt;
                                        &lt;div class=&quot;col-lg-2 col-md-4&quot;&gt;
                                            &lt;button type=&quot;button&quot; class=&quot;btn btn-block btn-outline-success&quot;&gt;Success&lt;/button&gt;
                                        &lt;/div&gt;
                                        &lt;div class=&quot;col-lg-2 col-md-4&quot;&gt;
                                            &lt;button type=&quot;button&quot; class=&quot;btn btn-block btn-outline-primary&quot;&gt;Primary&lt;/button&gt;
                                        &lt;/div&gt;
                                        &lt;div class=&quot;col-lg-2 col-md-4&quot;&gt;
                                            &lt;button type=&quot;button&quot; class=&quot;btn btn-block btn-outline-danger&quot;&gt;Danger&lt;/button&gt;
                                        &lt;/div&gt;
                                        &lt;div class=&quot;col-lg-2 col-md-4&quot;&gt;
                                            &lt;button type=&quot;button&quot; class=&quot;btn btn-block btn-outline-secondary&quot;&gt;Secondary&lt;/button&gt;
                                        &lt;/div&gt;
                                        &lt;div class=&quot;col-lg-2 col-md-4&quot;&gt;
                                            &lt;button type=&quot;button&quot; class=&quot;btn btn-block btn-outline-warning&quot;&gt;Warning&lt;/button&gt;
                                        &lt;/div&gt;
                                        &lt;div class=&quot;col-lg-2 col-md-4&quot;&gt;
                                            &lt;button type=&quot;button&quot; class=&quot;btn btn-block btn-outline-light&quot;&gt;Light&lt;/button&gt;
                                        &lt;/div&gt;
                                        &lt;div class=&quot;col-lg-2 col-md-4&quot;&gt;
                                            &lt;button type=&quot;button&quot; class=&quot;btn btn-block btn-outline-dark&quot;&gt;Dark&lt;/button&gt;
                                        &lt;/div&gt;
                                    &lt;/div&gt;                                    
                                    </code>
                                </pre>
                            </div>
                            <div class="card-body">
                                <h4 class="card-title">Rounded outline Block buttons</h4>
                                <h6 class="card-subtitle">Use a classes <code>btn btn-block btn-outline-success</code> to quickly create a General btn.</h6>
                                <div class="row button-group">
                                    <div class="col-lg-2 col-md-4">
                                        <button type="button" class="btn btn-rounded btn-block btn-outline-info">Info</button>
                                    </div>
                                    <div class="col-lg-2 col-md-4">
                                        <button type="button" class="btn btn-rounded btn-block btn-outline-success">Success</button>
                                    </div>
                                    <div class="col-lg-2 col-md-4">
                                        <button type="button" class="btn btn-rounded btn-block btn-outline-primary">Primary</button>
                                    </div>
                                    <div class="col-lg-2 col-md-4">
                                        <button type="button" class="btn btn-rounded btn-block btn-outline-danger">Danger</button>
                                    </div>
                                    <div class="col-lg-2 col-md-4">
                                        <button type="button" class="btn btn-rounded btn-block btn-outline-secondary">Secondary</button>
                                    </div>
                                    <div class="col-lg-2 col-md-4">
                                        <button type="button" class="btn btn-rounded btn-block btn-outline-warning">Warning</button>
                                    </div>
                                    <div class="col-lg-2 col-md-4">
                                        <button type="button" class="btn btn-rounded btn-block btn-outline-light">Light</button>
                                    </div>
                                    <div class="col-lg-2 col-md-4">
                                        <button type="button" class="btn btn-rounded btn-block btn-outline-dark">Dark</button>
                                    </div>
                                </div>
                                <pre class="language-html scrollable">
                                    <code>
                                        &lt;div class=&quot;row button-group&quot;&gt;
                                            &lt;div class=&quot;col-lg-2 col-md-4&quot;&gt;
                                                &lt;button type=&quot;button&quot; class=&quot;btn btn-rounded btn-block btn-outline-info&quot;&gt;Info&lt;/button&gt;
                                            &lt;/div&gt;
                                            &lt;div class=&quot;col-lg-2 col-md-4&quot;&gt;
                                                &lt;button type=&quot;button&quot; class=&quot;btn btn-rounded btn-block btn-outline-success&quot;&gt;Success&lt;/button&gt;
                                            &lt;/div&gt;
                                            &lt;div class=&quot;col-lg-2 col-md-4&quot;&gt;
                                                &lt;button type=&quot;button&quot; class=&quot;btn btn-rounded btn-block btn-outline-primary&quot;&gt;Primary&lt;/button&gt;
                                            &lt;/div&gt;
                                            &lt;div class=&quot;col-lg-2 col-md-4&quot;&gt;
                                                &lt;button type=&quot;button&quot; class=&quot;btn btn-rounded btn-block btn-outline-danger&quot;&gt;Danger&lt;/button&gt;
                                            &lt;/div&gt;
                                            &lt;div class=&quot;col-lg-2 col-md-4&quot;&gt;
                                                &lt;button type=&quot;button&quot; class=&quot;btn btn-rounded btn-block btn-outline-secondary&quot;&gt;Secondary&lt;/button&gt;
                                            &lt;/div&gt;
                                            &lt;div class=&quot;col-lg-2 col-md-4&quot;&gt;
                                                &lt;button type=&quot;button&quot; class=&quot;btn btn-rounded btn-block btn-outline-warning&quot;&gt;Warning&lt;/button&gt;
                                            &lt;/div&gt;
                                            &lt;div class=&quot;col-lg-2 col-md-4&quot;&gt;
                                                &lt;button type=&quot;button&quot; class=&quot;btn btn-rounded btn-block btn-outline-light&quot;&gt;Light&lt;/button&gt;
                                            &lt;/div&gt;
                                            &lt;div class=&quot;col-lg-2 col-md-4&quot;&gt;
                                                &lt;button type=&quot;button&quot; class=&quot;btn btn-rounded btn-block btn-outline-dark&quot;&gt;Dark&lt;/button&gt;
                                            &lt;/div&gt;
                                        &lt;/div&gt;                                  
                                    </code>
                                </pre>
                            </div>
                            <div class="card-body">
                                <h4 class="card-title">Large Block buttons</h4>
                                <h6 class="card-subtitle">Use a classes <code>btn btn-block btn-lg btn-success</code> to quickly create a General btn.</h6>
                                <div class="row button-group">
                                    <div class="col-lg-2 col-md-4">
                                        <button type="button" class="btn btn-block btn-lg btn-info">Info</button>
                                    </div>
                                    <div class="col-lg-2 col-md-4">
                                        <button type="button" class="btn btn-block btn-lg btn-success">Success</button>
                                    </div>
                                    <div class="col-lg-2 col-md-4">
                                        <button type="button" class="btn btn-block btn-lg btn-primary">Primary</button>
                                    </div>
                                    <div class="col-lg-2 col-md-4">
                                        <button type="button" class="btn btn-block btn-lg btn-danger">Danger</button>
                                    </div>
                                    <div class="col-lg-2 col-md-4">
                                        <button type="button" class="btn btn-block btn-lg btn-secondary">Second</button>
                                    </div>
                                    <div class="col-lg-2 col-md-4">
                                        <button type="button" class="btn btn-block btn-lg btn-warning">Warning</button>
                                    </div>
                                    <div class="col-lg-2 col-md-4">
                                        <button type="button" class="btn btn-block btn-lg btn-light">Light</button>
                                    </div>
                                    <div class="col-lg-2 col-md-4">
                                        <button type="button" class="btn btn-block btn-lg btn-dark">Dark</button>
                                    </div>
                                </div>
                                <pre class="language-html scrollable">
                                    <code>
                                         &lt;div class=&quot;row button-group&quot;&gt;
                                            &lt;div class=&quot;col-lg-2 col-md-4&quot;&gt;
                                                &lt;button type=&quot;button&quot; class=&quot;btn btn-block btn-lg btn-info&quot;&gt;Info&lt;/button&gt;
                                            &lt;/div&gt;
                                            &lt;div class=&quot;col-lg-2 col-md-4&quot;&gt;
                                                &lt;button type=&quot;button&quot; class=&quot;btn btn-block btn-lg btn-success&quot;&gt;Success&lt;/button&gt;
                                            &lt;/div&gt;
                                            &lt;div class=&quot;col-lg-2 col-md-4&quot;&gt;
                                                &lt;button type=&quot;button&quot; class=&quot;btn btn-block btn-lg btn-primary&quot;&gt;Primary&lt;/button&gt;
                                            &lt;/div&gt;
                                            &lt;div class=&quot;col-lg-2 col-md-4&quot;&gt;
                                                &lt;button type=&quot;button&quot; class=&quot;btn btn-block btn-lg btn-danger&quot;&gt;Danger&lt;/button&gt;
                                            &lt;/div&gt;
                                            &lt;div class=&quot;col-lg-2 col-md-4&quot;&gt;
                                                &lt;button type=&quot;button&quot; class=&quot;btn btn-block btn-lg btn-secondary&quot;&gt;Second&lt;/button&gt;
                                            &lt;/div&gt;
                                            &lt;div class=&quot;col-lg-2 col-md-4&quot;&gt;
                                                &lt;button type=&quot;button&quot; class=&quot;btn btn-block btn-lg btn-warning&quot;&gt;Warning&lt;/button&gt;
                                            &lt;/div&gt;
                                            &lt;div class=&quot;col-lg-2 col-md-4&quot;&gt;
                                                &lt;button type=&quot;button&quot; class=&quot;btn btn-block btn-lg btn-light&quot;&gt;Light&lt;/button&gt;
                                            &lt;/div&gt;
                                            &lt;div class=&quot;col-lg-2 col-md-4&quot;&gt;
                                                &lt;button type=&quot;button&quot; class=&quot;btn btn-block btn-lg btn-dark&quot;&gt;Dark&lt;/button&gt;
                                            &lt;/div&gt;
                                        &lt;/div&gt;                                 
                                    </code>
                                </pre>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Row -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Button with icon</h4>
                                <h6 class="card-subtitle">Use a classes <code>btn btn-success</code> &amp; <code>i class ="fa fa-heart"</code> to quickly create a General btn.</h6>
                                <div class="row button-group">
                                    <div class="col-lg-6 col-xlg-6 m-b-30">
                                        <button type="button" class="btn btn-primary"><i class="fas fa-check"></i> Primary</button>
                                        <button type="button" class="btn btn-secondary"><i class="far fa-heart"></i> Secondary</button>
                                        <button type="button" class="btn btn-success"><i class="fas fa-check"></i> Success</button>
                                        <button type="button" class="btn btn-info"><i class="far fa-heart"></i> Info</button>
                                        <button type="button" class="btn btn-warning"><i class="far fa-heart"></i> Warning</button>
                                        <button type="button" class="btn btn-danger"><i class="far fa-heart"></i> Danger</button>
                                        <button type="button" class="btn btn-light"><i class="far fa-heart"></i> Light</button>
                                        <button type="button" class="btn btn-dark"><i class="far fa-heart"></i> Dark</button>
                                    </div>
                                    <div class="col-lg-6 col-xlg-6 m-b-30">
                                        <button class="btn btn-primary waves-effect waves-light" type="button"><span class="btn-label"><i class="far fa-envelope"></i></span> Mail</button>
                                        <button class="btn btn-secondary waves-effect waves-light" type="button"><span class="btn-label"><i class="fas fa-check"></i></span> Check</button>
                                        <button class="btn btn-info waves-effect waves-light" type="button"><span class="btn-label"><i class="fas fa-heart"></i></span> Heart</button>
                                        <button class="btn btn-warning waves-effect waves-light" type="button"><span class="btn-label"><i class="far fa-envelope"></i></span> Mail</button>
                                        <button class="btn btn-danger waves-effect waves-light" type="button"><span class="btn-label"><i class="far fa-heart"></i></span> Heart</button>
                                        <button class="btn btn-light waves-effect waves-light" type="button"><span class="btn-label"><i class="far fa-heart"></i></span> Heart</button>
                                        <button class="btn btn-dark waves-effect waves-light" type="button"><span class="btn-label"><i class="fas fa-heart"></i></span> Heart</button>
                                    </div>
                                    <div class="col-lg-6 col-xlg-6 m-b-30">
                                        <pre class="language-html scrollable">
                                            <code>
                                                &lt;button type=&quot;button&quot; class=&quot;btn btn-primary&quot;&gt;&lt;i class=&quot;fa fa-check&quot;&gt;&lt;/i&gt; Primary&lt;/button&gt;
                                                &lt;button type=&quot;button&quot; class=&quot;btn btn-secondary&quot;&gt;Secondary &lt;i class=&quot;fa fa-heart&quot;&gt;&lt;/i&gt;&lt;/button&gt;
                                                &lt;button type=&quot;button&quot; class=&quot;btn btn-success&quot;&gt;&lt;i class=&quot;fa fa-check&quot;&gt;&lt;/i&gt; Success&lt;/button&gt;
                                                &lt;button type=&quot;button&quot; class=&quot;btn btn-info&quot;&gt;&lt;i class=&quot;fa fa-heart&quot;&gt;&lt;/i&gt; Info&lt;/button&gt;
                                                &lt;button type=&quot;button&quot; class=&quot;btn btn-warning&quot;&gt;&lt;i class=&quot;fa fa-heart&quot;&gt;&lt;/i&gt; Warning&lt;/button&gt;
                                                &lt;button type=&quot;button&quot; class=&quot;btn btn-danger&quot;&gt;&lt;i class=&quot;fa fa-heart&quot;&gt;&lt;/i&gt; Danger&lt;/button&gt;
                                                &lt;button type=&quot;button&quot; class=&quot;btn btn-light&quot;&gt;&lt;i class=&quot;fa fa-heart&quot;&gt;&lt;/i&gt; Light&lt;/button&gt;
                                                &lt;button type=&quot;button&quot; class=&quot;btn btn-dark&quot;&gt;&lt;i class=&quot;fa fa-heart&quot;&gt;&lt;/i&gt; Dark&lt;/button&gt;
                                            </code>
                                        </pre>
                                    </div>
                                    <div class="col-lg-6 col-xlg-6 m-b-30">
                                        <pre class="language-html scrollable">
                                            <code>
                                                &lt;button class=&quot;btn btn-primary waves-effect waves-light&quot; type=&quot;button&quot;&gt;&lt;span class=&quot;btn-label&quot;&gt;&lt;i class=&quot;far fa-envelope&quot;&gt;&lt;/i&gt;&lt;/span&gt;Mail&lt;/button&gt;
                                                &lt;button class=&quot;btn btn-secondary waves-effect waves-light&quot; type=&quot;button&quot;&gt;&lt;span class=&quot;btn-label&quot;&gt;&lt;i class=&quot;fa fa-check&quot;&gt;&lt;/i&gt;&lt;/span&gt;Check&lt;/button&gt;
                                                &lt;button class=&quot;btn btn-info waves-effect waves-light&quot; type=&quot;button&quot;&gt;&lt;span class=&quot;btn-label&quot;&gt;&lt;i class=&quot;fa fa-heart&quot;&gt;&lt;/i&gt;&lt;/span&gt;Heart&lt;/button&gt;
                                                &lt;button class=&quot;btn btn-warning waves-effect waves-light&quot; type=&quot;button&quot;&gt;&lt;span class=&quot;btn-label&quot;&gt;&lt;i class=&quot;fa fa-envelope-o&quot;&gt;&lt;/i&gt;&lt;/span&gt;Mail&lt;/button&gt;
                                                &lt;button class=&quot;btn btn-danger waves-effect waves-light&quot; type=&quot;button&quot;&gt;&lt;span class=&quot;btn-label&quot;&gt;&lt;i class=&quot;fa fa-heart&quot;&gt;&lt;/i&gt;&lt;/span&gt;Heart&lt;/button&gt;
                                                &lt;button class=&quot;btn btn-light waves-effect waves-light&quot; type=&quot;button&quot;&gt;&lt;span class=&quot;btn-label&quot;&gt;&lt;i class=&quot;fa fa-heart&quot;&gt;&lt;/i&gt;&lt;/span&gt;Heart&lt;/button&gt;
                                                &lt;button class=&quot;btn btn-dark waves-effect waves-light&quot; type=&quot;button&quot;&gt;&lt;span class=&quot;btn-label&quot;&gt;&lt;i class=&quot;fa fa-heart&quot;&gt;&lt;/i&gt;&lt;/span&gt;Heart&lt;/button&gt;
                                            </code>
                                        </pre>
                                    </div>
                                </div>
                                <div class="row button-group">
                                    <div class="col-lg-6 col-xlg-6 m-b-30">
                                        <button type="button" class="btn btn-primary btn-rounded"><i class="fas fa-check"></i> Primary</button>
                                        <button type="button" class="btn btn-secondary btn-rounded"> <i class="far fa-heart"></i> Secondary</button>
                                        <button type="button" class="btn btn-success btn-rounded"><i class="fas fa-check"></i> Success</button>
                                        <button type="button" class="btn btn-info btn-rounded"><i class="far fa-heart"></i> Info</button>
                                        <button type="button" class="btn btn-warning btn-rounded"><i class="far fa-heart"></i> Warning</button>
                                        <button type="button" class="btn btn-danger btn-rounded"><i class="far fa-heart"></i> Danger</button>
                                        <button type="button" class="btn btn-light btn-rounded"><i class="far fa-heart"></i> Light</button>
                                        <button type="button" class="btn btn-dark btn-rounded"><i class="far fa-heart"></i> Dark</button>
                                    </div>
                                    <div class="col-lg-6 col-xlg-6 m-b-30">
                                        <button type="button" class="btn btn-outline-primary"><i class="fa fa-check"></i> Primary</button>
                                        <button type="button" class="btn btn-outline-secondary"><i class="fa fa-heart"></i> Secondary</button>
                                        <button type="button" class="btn btn-outline-success"><i class="fa fa-check"></i> Success</button>
                                        <button type="button" class="btn btn-outline-info"><i class="fa fa-heart"></i> Info</button>
                                        <button type="button" class="btn btn-outline-warning"><i class="fa fa-heart"></i> Warning</button>
                                        <button type="button" class="btn btn-outline-danger"><i class="fa fa-heart"></i> Danger</button>
                                        <button type="button" class="btn btn-outline-light"><i class="fa fa-heart"></i> Light</button>
                                        <button type="button" class="btn btn-outline-dark"><i class="fa fa-heart"></i> Dark</button>
                                    </div>
                                    <div class="col-lg-6 col-xlg-6 m-b-30">
                                        <pre class="language-html scrollable">
                                            <code>
                                                &lt;button type=&quot;button&quot; class=&quot;btn btn-primary btn-rounded&quot;&gt;&lt;i class=&quot;fa fa-check&quot;&gt;&lt;/i&gt; Primary&lt;/button&gt;
                                                &lt;button type=&quot;button&quot; class=&quot;btn btn-secondary btn-rounded&quot;&gt;Secondary &lt;i class=&quot;fa fa-heart&quot;&gt;&lt;/i&gt;&lt;/button&gt;
                                                &lt;button type=&quot;button&quot; class=&quot;btn btn-success btn-rounded&quot;&gt;&lt;i class=&quot;fa fa-check&quot;&gt;&lt;/i&gt; Success&lt;/button&gt;
                                                &lt;button type=&quot;button&quot; class=&quot;btn btn-info btn-rounded&quot;&gt;&lt;i class=&quot;fa fa-heart&quot;&gt;&lt;/i&gt; Info&lt;/button&gt;
                                                &lt;button type=&quot;button&quot; class=&quot;btn btn-warning btn-rounded&quot;&gt;&lt;i class=&quot;fa fa-heart&quot;&gt;&lt;/i&gt; Warning&lt;/button&gt;
                                                &lt;button type=&quot;button&quot; class=&quot;btn btn-danger btn-rounded&quot;&gt;&lt;i class=&quot;fa fa-heart&quot;&gt;&lt;/i&gt; Danger&lt;/button&gt;
                                                &lt;button type=&quot;button&quot; class=&quot;btn btn-light btn-rounded&quot;&gt;&lt;i class=&quot;fa fa-heart&quot;&gt;&lt;/i&gt; Danger&lt;/button&gt;
                                                &lt;button type=&quot;button&quot; class=&quot;btn btn-dark btn-rounded&quot;&gt;&lt;i class=&quot;fa fa-heart&quot;&gt;&lt;/i&gt; Danger&lt;/button&gt;
                                            </code>
                                        </pre>
                                    </div>
                                    <div class="col-lg-6 col-xlg-6 m-b-30">
                                        <pre class="language-html scrollable">
                                            <code>
                                                &lt;button type=&quot;button&quot; class=&quot;btn btn-outline-primary&quot;&gt;&lt;i class=&quot;fa fa-check&quot;&gt;&lt;/i&gt; Primary&lt;/button&gt;
                                                &lt;button type=&quot;button&quot; class=&quot;btn btn-outline-secondary&quot;&gt;Secondary &lt;i class=&quot;fa fa-heart&quot;&gt;&lt;/i&gt;&lt;/button&gt;
                                                &lt;button type=&quot;button&quot; class=&quot;btn btn-outline-success&quot;&gt;&lt;i class=&quot;fa fa-check&quot;&gt;&lt;/i&gt; Success&lt;/button&gt;
                                                &lt;button type=&quot;button&quot; class=&quot;btn btn-outline-info&quot;&gt;&lt;i class=&quot;fa fa-heart&quot;&gt;&lt;/i&gt; Info&lt;/button&gt;
                                                &lt;button type=&quot;button&quot; class=&quot;btn btn-outline-warning&quot;&gt;&lt;i class=&quot;fa fa-heart&quot;&gt;&lt;/i&gt; Warning&lt;/button&gt;
                                                &lt;button type=&quot;button&quot; class=&quot;btn btn-outline-danger&quot;&gt;&lt;i class=&quot;fa fa-heart&quot;&gt;&lt;/i&gt; Danger&lt;/button&gt;
                                                &lt;button type=&quot;button&quot; class=&quot;btn btn-outline-light&quot;&gt;&lt;i class=&quot;fa fa-heart&quot;&gt;&lt;/i&gt; Light&lt;/button&gt;
                                                &lt;button type=&quot;button&quot; class=&quot;btn btn-outline-dark&quot;&gt;&lt;i class=&quot;fa fa-heart&quot;&gt;&lt;/i&gt; Dark&lt;/button&gt;
                                            </code>
                                        </pre>
                                    </div>
                                </div>
                                <div class="row button-group">
                                    <div class="col-lg-6 col-xlg-6 m-b-30">
                                        <button class="btn btn-outline-primary waves-effect waves-light" type="button"><span class="btn-label"><i class="far fa-envelope"></i></span> Mail</button>
                                        <button class="btn btn-outline-secondary waves-effect waves-light" type="button"><span class="btn-label"><i class="fa fa-check"></i></span> Check</button>
                                        <button class="btn btn-outline-info waves-effect waves-light" type="button"><span class="btn-label"><i class="fa fa-heart"></i></span> Heart</button>
                                        <button class="btn btn-outline-warning waves-effect waves-light" type="button"><span class="btn-label"><i class="far fa-envelope"></i></span> Mail</button>
                                        <button class="btn btn-outline-danger waves-effect waves-light" type="button"><span class="btn-label"><i class="fa fa-heart"></i></span> Heart</button>
                                        <button class="btn btn-outline-light waves-effect waves-light" type="button"><span class="btn-label"><i class="fa fa-heart"></i></span> Heart</button>
                                        <button class="btn btn-outline-dark waves-effect waves-light" type="button"><span class="btn-label"><i class="fa fa-heart"></i></span> Heart</button>
                                    </div>
                                    <div class="col-lg-6 col-xlg-6 m-b-30">
                                        <button type="button" class="btn btn-outline-primary btn-rounded"><i class="fas fa-check"></i> Primary</button>
                                        <button type="button" class="btn btn-outline-secondary btn-rounded"><i class="far fa-heart"></i> Secondary</button>
                                        <button type="button" class="btn btn-outline-success btn-rounded"><i class="fas fa-check"></i> Success</button>
                                        <button type="button" class="btn btn-outline-info btn-rounded"><i class="fas fa-heart"></i> Info</button>
                                        <button type="button" class="btn btn-outline-warning btn-rounded"><i class="far fa-heart"></i> Warning</button>
                                        <button type="button" class="btn btn-outline-danger btn-rounded"><i class="far fa-heart"></i> Danger</button>
                                        <button type="button" class="btn btn-outline-light btn-rounded"><i class="fas fa-heart"></i> Light</button>
                                        <button type="button" class="btn btn-outline-dark btn-rounded"><i class="fas fa-heart"></i> Dark</button>
                                    </div>
                                    <div class="col-lg-6 col-xlg-6 m-b-30">
                                        <pre class="language-html scrollable">
                                            <code>
                                                 &lt;button class=&quot;btn btn-outline-primary waves-effect waves-light&quot; type=&quot;button&quot;&gt;&lt;span class=&quot;btn-label&quot;&gt;&lt;i class=&quot;far fa-envelope&quot;&gt;&lt;/i&gt;&lt;/span&gt;Mail&lt;/button&gt;
                                                &lt;button class=&quot;btn btn-outline-secondary waves-effect waves-light&quot; type=&quot;button&quot;&gt;&lt;span class=&quot;btn-label&quot;&gt;&lt;i class=&quot;fa fa-check&quot;&gt;&lt;/i&gt;&lt;/span&gt;Check&lt;/button&gt;
                                                &lt;button class=&quot;btn btn-outline-info waves-effect waves-light&quot; type=&quot;button&quot;&gt;&lt;span class=&quot;btn-label&quot;&gt;&lt;i class=&quot;fa fa-heart&quot;&gt;&lt;/i&gt;&lt;/span&gt;Heart&lt;/button&gt;
                                                &lt;button class=&quot;btn btn-outline-warning waves-effect waves-light&quot; type=&quot;button&quot;&gt;&lt;span class=&quot;btn-label&quot;&gt;&lt;i class=&quot;far fa-envelope&quot;&gt;&lt;/i&gt;&lt;/span&gt;Mail&lt;/button&gt;
                                                &lt;button class=&quot;btn btn-outline-danger waves-effect waves-light&quot; type=&quot;button&quot;&gt;&lt;span class=&quot;btn-label&quot;&gt;&lt;i class=&quot;fa fa-heart&quot;&gt;&lt;/i&gt;&lt;/span&gt;Heart&lt;/button&gt;
                                                &lt;button class=&quot;btn btn-outline-light waves-effect waves-light&quot; type=&quot;button&quot;&gt;&lt;span class=&quot;btn-label&quot;&gt;&lt;i class=&quot;fa fa-heart&quot;&gt;&lt;/i&gt;&lt;/span&gt;Heart&lt;/button&gt;
                                                &lt;button class=&quot;btn btn-outline-dark waves-effect waves-light&quot; type=&quot;button&quot;&gt;&lt;span class=&quot;btn-label&quot;&gt;&lt;i class=&quot;fa fa-heart&quot;&gt;&lt;/i&gt;&lt;/span&gt;Heart&lt;/button&gt;
                                            </code>
                                        </pre>
                                    </div>
                                    <div class="col-lg-6 col-xlg-6 m-b-30">
                                        <pre class="language-html scrollable">
                                            <code>
                                                &lt;button type=&quot;button&quot; class=&quot;btn btn-outline-primary btn-rounded&quot;&gt;&lt;i class=&quot;fa fa-check&quot;&gt;&lt;/i&gt; Primary&lt;/button&gt;
                                                &lt;button type=&quot;button&quot; class=&quot;btn btn-outline-secondary btn-rounded&quot;&gt;Secondary &lt;i class=&quot;fa fa-heart&quot;&gt;&lt;/i&gt;&lt;/button&gt;
                                                &lt;button type=&quot;button&quot; class=&quot;btn btn-outline-success btn-rounded&quot;&gt;&lt;i class=&quot;fa fa-check&quot;&gt;&lt;/i&gt; Success&lt;/button&gt;
                                                &lt;button type=&quot;button&quot; class=&quot;btn btn-outline-info btn-rounded&quot;&gt;&lt;i class=&quot;fa fa-heart&quot;&gt;&lt;/i&gt; Info&lt;/button&gt;
                                                &lt;button type=&quot;button&quot; class=&quot;btn btn-outline-warning btn-rounded&quot;&gt;&lt;i class=&quot;fa fa-heart&quot;&gt;&lt;/i&gt; Warning&lt;/button&gt;
                                                &lt;button type=&quot;button&quot; class=&quot;btn btn-outline-danger btn-rounded&quot;&gt;&lt;i class=&quot;fa fa-heart&quot;&gt;&lt;/i&gt; Danger&lt;/button&gt;
                                                &lt;button type=&quot;button&quot; class=&quot;btn btn-outline-light btn-rounded&quot;&gt;&lt;i class=&quot;fa fa-heart&quot;&gt;&lt;/i&gt; Light&lt;/button&gt;
                                                &lt;button type=&quot;button&quot; class=&quot;btn btn-outline-dark btn-rounded&quot;&gt;&lt;i class=&quot;fa fa-heart&quot;&gt;&lt;/i&gt; Dark&lt;/button&gt;
                                            </code>
                                        </pre>
                                    </div>
                                </div>
                                <div class="row button-group">
                                    <div class="col-lg-6 col-xlg-6 m-t-30">
                                        <h4 class="card-title">Button with Dropdown</h4>
                                        <!-- Example single danger button -->
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                Action
                                            </button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="javascript:void(0)">Action</a>
                                                <a class="dropdown-item" href="javascript:void(0)">Another action</a>
                                                <a class="dropdown-item" href="javascript:void(0)">Something else here</a>
                                                <div class="dropdown-divider"></div>
                                                <a class="dropdown-item" href="javascript:void(0)">Separated link</a>
                                            </div>
                                        </div>
                                        <!-- Example single danger button -->
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                Action
                                            </button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="javascript:void(0)">Action</a>
                                                <a class="dropdown-item" href="javascript:void(0)">Another action</a>
                                                <a class="dropdown-item" href="javascript:void(0)">Something else here</a>
                                                <div class="dropdown-divider"></div>
                                                <a class="dropdown-item" href="javascript:void(0)">Separated link</a>
                                            </div>
                                        </div>
                                        <!-- Example single danger button -->
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                Action
                                            </button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="javascript:void(0)">Action</a>
                                                <a class="dropdown-item" href="javascript:void(0)">Another action</a>
                                                <a class="dropdown-item" href="javascript:void(0)">Something else here</a>
                                                <div class="dropdown-divider"></div>
                                                <a class="dropdown-item" href="javascript:void(0)">Separated link</a>
                                            </div>
                                        </div>
                                        <!-- Example single danger button -->
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-warning dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                Action
                                            </button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="javascript:void(0)">Action</a>
                                                <a class="dropdown-item" href="javascript:void(0)">Another action</a>
                                                <a class="dropdown-item" href="javascript:void(0)">Something else here</a>
                                                <div class="dropdown-divider"></div>
                                                <a class="dropdown-item" href="javascript:void(0)">Separated link</a>
                                            </div>
                                        </div>
                                        <!-- Example single danger button -->
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                Action
                                            </button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="javascript:void(0)">Action</a>
                                                <a class="dropdown-item" href="javascript:void(0)">Another action</a>
                                                <a class="dropdown-item" href="javascript:void(0)">Something else here</a>
                                                <div class="dropdown-divider"></div>
                                                <a class="dropdown-item" href="javascript:void(0)">Separated link</a>
                                            </div>
                                        </div>
                                        <!-- Example single danger button -->
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                Action
                                            </button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="javascript:void(0)">Action</a>
                                                <a class="dropdown-item" href="javascript:void(0)">Another action</a>
                                                <a class="dropdown-item" href="javascript:void(0)">Something else here</a>
                                                <div class="dropdown-divider"></div>
                                                <a class="dropdown-item" href="javascript:void(0)">Separated link</a>
                                            </div>
                                        </div>
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-light dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                Action
                                            </button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="javascript:void(0)">Action</a>
                                                <a class="dropdown-item" href="javascript:void(0)">Another action</a>
                                                <a class="dropdown-item" href="javascript:void(0)">Something else here</a>
                                                <div class="dropdown-divider"></div>
                                                <a class="dropdown-item" href="javascript:void(0)">Separated link</a>
                                            </div>
                                        </div>
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-dark dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                Action
                                            </button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="javascript:void(0)">Action</a>
                                                <a class="dropdown-item" href="javascript:void(0)">Another action</a>
                                                <a class="dropdown-item" href="javascript:void(0)">Something else here</a>
                                                <div class="dropdown-divider"></div>
                                                <a class="dropdown-item" href="javascript:void(0)">Separated link</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-xlg-6 m-t-30 no-button-group">
                                        <h4 class="card-title">Split-button-dropdowns</h4>
                                        <!-- Example single danger button -->
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-danger">Action</button>
                                            <button type="button" class="btn btn-danger dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <span class="sr-only">Toggle Dropdown</span>
                                            </button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="javascript:void(0)">Action</a>
                                                <a class="dropdown-item" href="javascript:void(0)">Another action</a>
                                                <a class="dropdown-item" href="javascript:void(0)">Something else here</a>
                                                <div class="dropdown-divider"></div>
                                                <a class="dropdown-item" href="javascript:void(0)">Separated link</a>
                                            </div>
                                        </div>
                                        <!-- Example single danger button -->
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-warning">Action</button>
                                            <button type="button" class="btn btn-warning dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <span class="sr-only">Toggle Dropdown</span>
                                            </button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="javascript:void(0)">Action</a>
                                                <a class="dropdown-item" href="javascript:void(0)">Another action</a>
                                                <a class="dropdown-item" href="javascript:void(0)">Something else here</a>
                                                <div class="dropdown-divider"></div>
                                                <a class="dropdown-item" href="javascript:void(0)">Separated link</a>
                                            </div>
                                        </div>
                                        <!-- Example single danger button -->
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-success">Action</button>
                                            <button type="button" class="btn btn-success dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <span class="sr-only">Toggle Dropdown</span>
                                            </button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="javascript:void(0)">Action</a>
                                                <a class="dropdown-item" href="javascript:void(0)">Another action</a>
                                                <a class="dropdown-item" href="javascript:void(0)">Something else here</a>
                                                <div class="dropdown-divider"></div>
                                                <a class="dropdown-item" href="javascript:void(0)">Separated link</a>
                                            </div>
                                        </div>
                                        <!-- Example single danger button -->
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-info">Action</button>
                                            <button type="button" class="btn btn-info dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <span class="sr-only">Toggle Dropdown</span>
                                            </button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="javascript:void(0)">Action</a>
                                                <a class="dropdown-item" href="javascript:void(0)">Another action</a>
                                                <a class="dropdown-item" href="javascript:void(0)">Something else here</a>
                                                <div class="dropdown-divider"></div>
                                                <a class="dropdown-item" href="javascript:void(0)">Separated link</a>
                                            </div>
                                        </div>
                                        <!-- Example single danger button -->
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-secondary">Action</button>
                                            <button type="button" class="btn btn-secondary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <span class="sr-only">Toggle Dropdown</span>
                                            </button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="javascript:void(0)">Action</a>
                                                <a class="dropdown-item" href="javascript:void(0)">Another action</a>
                                                <a class="dropdown-item" href="javascript:void(0)">Something else here</a>
                                                <div class="dropdown-divider"></div>
                                                <a class="dropdown-item" href="javascript:void(0)">Separated link</a>
                                            </div>
                                        </div>
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-light">Action</button>
                                            <button type="button" class="btn btn-light dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <span class="sr-only">Toggle Dropdown</span>
                                            </button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="javascript:void(0)">Action</a>
                                                <a class="dropdown-item" href="javascript:void(0)">Another action</a>
                                                <a class="dropdown-item" href="javascript:void(0)">Something else here</a>
                                                <div class="dropdown-divider"></div>
                                                <a class="dropdown-item" href="javascript:void(0)">Separated link</a>
                                            </div>
                                        </div>
                                        <!-- Example single danger button -->
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-dark">Action</button>
                                            <button type="button" class="btn btn-dark dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <span class="sr-only">Toggle Dropdown</span>
                                            </button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="javascript:void(0)">Action</a>
                                                <a class="dropdown-item" href="javascript:void(0)">Another action</a>
                                                <a class="dropdown-item" href="javascript:void(0)">Something else here</a>
                                                <div class="dropdown-divider"></div>
                                                <a class="dropdown-item" href="javascript:void(0)">Separated link</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 m-t-30">
                                        <pre class="language-html scrollable">
                                            <code>
                                                &lt;div class=&quot;btn-group&quot;&gt;
                                                    &lt;button type=&quot;button&quot; class=&quot;btn btn-danger dropdown-toggle&quot; data-toggle=&quot;dropdown&quot; aria-haspopup=&quot;true&quot; aria-expanded=&quot;false&quot;&gt;
                                                        Action
                                                    &lt;/button&gt;
                                                    &lt;div class=&quot;dropdown-menu&quot;&gt;
                                                        &lt;a class=&quot;dropdown-item&quot; href=&quot;javascript:void(0)&quot;&gt;Action&lt;/a&gt;
                                                        &lt;a class=&quot;dropdown-item&quot; href=&quot;javascript:void(0)&quot;&gt;Another action&lt;/a&gt;
                                                        &lt;a class=&quot;dropdown-item&quot; href=&quot;javascript:void(0)&quot;&gt;Something else here&lt;/a&gt;
                                                        &lt;div class=&quot;dropdown-divider&quot;&gt;&lt;/div&gt;
                                                        &lt;a class=&quot;dropdown-item&quot; href=&quot;javascript:void(0)&quot;&gt;Separated link&lt;/a&gt;
                                                    &lt;/div&gt;
                                                &lt;/div&gt;                                                  
                                            </code>
                                        </pre>
                                    </div>
                                    <div class="col-lg-6 m-t-30">
                                        <pre class="language-html scrollable">
                                            <code>
                                                &lt;div class=&quot;btn-group&quot;&gt;
                                                    &lt;button type=&quot;button&quot; class=&quot;btn btn-success&quot;&gt;Action&lt;/button&gt;
                                                    &lt;button type=&quot;button&quot; class=&quot;btn btn-success dropdown-toggle dropdown-toggle-split&quot; data-toggle=&quot;dropdown&quot; aria-haspopup=&quot;true&quot; aria-expanded=&quot;false&quot;&gt;
                                                        &lt;span class=&quot;sr-only&quot;&gt;Toggle Dropdown&lt;/span&gt;
                                                    &lt;/button&gt;
                                                    &lt;div class=&quot;dropdown-menu&quot;&gt;
                                                        &lt;a class=&quot;dropdown-item&quot; href=&quot;javascript:void(0)&quot;&gt;Action&lt;/a&gt;
                                                        &lt;a class=&quot;dropdown-item&quot; href=&quot;javascript:void(0)&quot;&gt;Another action&lt;/a&gt;
                                                        &lt;a class=&quot;dropdown-item&quot; href=&quot;javascript:void(0)&quot;&gt;Something else here&lt;/a&gt;
                                                        &lt;div class=&quot;dropdown-divider&quot;&gt;&lt;/div&gt;
                                                        &lt;a class=&quot;dropdown-item&quot; href=&quot;javascript:void(0)&quot;&gt;Separated link&lt;/a&gt;
                                                    &lt;/div&gt;
                                                &lt;/div&gt;                                             
                                            </code>
                                        </pre>
                                    </div>
                                    <div class="col-lg-6 m-t-30 no-button-group">
                                        <h4 class="card-title">Large button dropdowns</h4>
                                        <h6 class="card-subtitle">Use a classes to create instant button</h6>
                                        <div class="btn-group">
                                            <button class="btn btn-secondary btn-lg dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                Large button
                                            </button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="javascript:void(0)">Action</a>
                                                <a class="dropdown-item" href="javascript:void(0)">Another action</a>
                                                <a class="dropdown-item" href="javascript:void(0)">Something else here</a>
                                            </div>
                                        </div>
                                        <div class="btn-group">
                                            <button class="btn btn-secondary btn-lg" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                Large button
                                            </button>
                                            <button type="button" class="btn btn-lg btn-secondary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <span class="sr-only">Toggle Dropdown</span>
                                            </button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="javascript:void(0)">Action</a>
                                                <a class="dropdown-item" href="javascript:void(0)">Another action</a>
                                                <a class="dropdown-item" href="javascript:void(0)">Something else here</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <pre class="language-html scrollable">
                                            <code>
                                                &lt;div class=&quot;btn-group&quot;&gt;
                                                    &lt;button class=&quot;btn btn-secondary btn-lg dropdown-toggle&quot; type=&quot;button&quot; data-toggle=&quot;dropdown&quot; aria-haspopup=&quot;true&quot; aria-expanded=&quot;false&quot;&gt;
                                                        Large button
                                                    &lt;/button&gt;
                                                    &lt;div class=&quot;dropdown-menu&quot;&gt;
                                                        &lt;a class=&quot;dropdown-item&quot; href=&quot;javascript:void(0)&quot;&gt;Action&lt;/a&gt;
                                                        &lt;a class=&quot;dropdown-item&quot; href=&quot;javascript:void(0)&quot;&gt;Another action&lt;/a&gt;
                                                        &lt;a class=&quot;dropdown-item&quot; href=&quot;javascript:void(0)&quot;&gt;Something else here&lt;/a&gt;
                                                    &lt;/div&gt;
                                                &lt;/div&gt;
                                                &lt;div class=&quot;btn-group&quot;&gt;
                                                    &lt;button class=&quot;btn btn-secondary btn-lg&quot; type=&quot;button&quot; data-toggle=&quot;dropdown&quot; aria-haspopup=&quot;true&quot; aria-expanded=&quot;false&quot;&gt;
                                                        Large button
                                                    &lt;/button&gt;
                                                    &lt;button type=&quot;button&quot; class=&quot;btn btn-lg btn-secondary dropdown-toggle dropdown-toggle-split&quot; data-toggle=&quot;dropdown&quot; aria-haspopup=&quot;true&quot; aria-expanded=&quot;false&quot;&gt;
                                                        &lt;span class=&quot;sr-only&quot;&gt;Toggle Dropdown&lt;/span&gt;
                                                    &lt;/button&gt;
                                                    &lt;div class=&quot;dropdown-menu&quot;&gt;
                                                        &lt;a class=&quot;dropdown-item&quot; href=&quot;javascript:void(0)&quot;&gt;Action&lt;/a&gt;
                                                        &lt;a class=&quot;dropdown-item&quot; href=&quot;javascript:void(0)&quot;&gt;Another action&lt;/a&gt;
                                                        &lt;a class=&quot;dropdown-item&quot; href=&quot;javascript:void(0)&quot;&gt;Something else here&lt;/a&gt;
                                                    &lt;/div&gt;
                                                &lt;/div&gt;                                               
                                            </code>
                                        </pre>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End row -->
                <!-- Row -->
                <div class="row">
                    <div class="col-lg-6 col-xlg-6 button-group">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Animated Drop downs</h4>
                                <h6 class="card-subtitle">Give class to the button <code>animated flipInX, flipInY, lightSpeedIn, slideInUp </code> use any animations class</h6>
                                <!-- Example single danger button -->
                                <div class="btn-group">
                                    <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Action
                                    </button>
                                    <div class="dropdown-menu animated flipInX">
                                        <a class="dropdown-item" href="javascript:void(0)">Action</a>
                                        <a class="dropdown-item" href="javascript:void(0)">Another action</a>
                                        <a class="dropdown-item" href="javascript:void(0)">Something else here</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="javascript:void(0)">Separated link</a>
                                    </div>
                                </div>
                                <!-- Example single danger button -->
                                <div class="btn-group">
                                    <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Action
                                    </button>
                                    <div class="dropdown-menu animated flipInY">
                                        <a class="dropdown-item" href="javascript:void(0)">Action</a>
                                        <a class="dropdown-item" href="javascript:void(0)">Another action</a>
                                        <a class="dropdown-item" href="javascript:void(0)">Something else here</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="javascript:void(0)">Separated link</a>
                                    </div>
                                </div>
                                <!-- Example single danger button -->
                                <div class="btn-group">
                                    <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Action
                                    </button>
                                    <div class="dropdown-menu animated lightSpeedIn">
                                        <a class="dropdown-item" href="javascript:void(0)">Action</a>
                                        <a class="dropdown-item" href="javascript:void(0)">Another action</a>
                                        <a class="dropdown-item" href="javascript:void(0)">Something else here</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="javascript:void(0)">Separated link</a>
                                    </div>
                                </div>
                                <!-- Example single danger button -->
                                <div class="btn-group">
                                    <button type="button" class="btn btn-warning dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Action
                                    </button>
                                    <div class="dropdown-menu animated slideInUp">
                                        <a class="dropdown-item" href="javascript:void(0)">Action</a>
                                        <a class="dropdown-item" href="javascript:void(0)">Another action</a>
                                        <a class="dropdown-item" href="javascript:void(0)">Something else here</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="javascript:void(0)">Separated link</a>
                                    </div>
                                </div>
                                <!-- Example single danger button -->
                                <div class="btn-group">
                                    <button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Action
                                    </button>
                                    <div class="dropdown-menu animated bounce">
                                        <a class="dropdown-item" href="javascript:void(0)">Action</a>
                                        <a class="dropdown-item" href="javascript:void(0)">Another action</a>
                                        <a class="dropdown-item" href="javascript:void(0)">Something else here</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="javascript:void(0)">Separated link</a>
                                    </div>
                                </div>
                                <!-- Example single danger button -->
                                <div class="btn-group">
                                    <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Action
                                    </button>
                                    <div class="dropdown-menu animated rubberBand">
                                        <a class="dropdown-item" href="javascript:void(0)">Action</a>
                                        <a class="dropdown-item" href="javascript:void(0)">Another action</a>
                                        <a class="dropdown-item" href="javascript:void(0)">Something else here</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="javascript:void(0)">Separated link</a>
                                    </div>
                                </div>
                                <div class="btn-group">
                                    <button type="button" class="btn btn-light dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Action
                                    </button>
                                    <div class="dropdown-menu animated rubberBand">
                                        <a class="dropdown-item" href="javascript:void(0)">Action</a>
                                        <a class="dropdown-item" href="javascript:void(0)">Another action</a>
                                        <a class="dropdown-item" href="javascript:void(0)">Something else here</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="javascript:void(0)">Separated link</a>
                                    </div>
                                </div>
                                <div class="btn-group">
                                    <button type="button" class="btn btn-dark dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Action
                                    </button>
                                    <div class="dropdown-menu animated rubberBand">
                                        <a class="dropdown-item" href="javascript:void(0)">Action</a>
                                        <a class="dropdown-item" href="javascript:void(0)">Another action</a>
                                        <a class="dropdown-item" href="javascript:void(0)">Something else here</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="javascript:void(0)">Separated link</a>
                                    </div>
                                </div>
                                <pre class="language-html scrollable">
                                    <code>
                                    &lt;div class=&quot;btn-group&quot;&gt;
                                        &lt;button type=&quot;button&quot; class=&quot;btn btn-danger dropdown-toggle&quot; data-toggle=&quot;dropdown&quot; aria-haspopup=&quot;true&quot; aria-expanded=&quot;false&quot;&gt;
                                            Action
                                        &lt;/button&gt;
                                        &lt;div class=&quot;dropdown-menu animated flipInX&quot;&gt;
                                            &lt;a class=&quot;dropdown-item&quot; href=&quot;javascript:void(0)&quot;&gt;Action&lt;/a&gt;
                                            &lt;a class=&quot;dropdown-item&quot; href=&quot;javascript:void(0)&quot;&gt;Another action&lt;/a&gt;
                                            &lt;a class=&quot;dropdown-item&quot; href=&quot;javascript:void(0)&quot;&gt;Something else here&lt;/a&gt;
                                            &lt;div class=&quot;dropdown-divider&quot;&gt;&lt;/div&gt;
                                            &lt;a class=&quot;dropdown-item&quot; href=&quot;javascript:void(0)&quot;&gt;Separated link&lt;/a&gt;
                                        &lt;/div&gt;
                                    &lt;/div&gt;                                
                                    </code>
                                </pre>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xlg-6 button-group">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Animated Drop downs with icon</h4>
                                <h6 class="card-subtitle">Give class to the button <code>animated flipInX, flipInY, lightSpeedIn, slideInUp </code> use any animations class</h6>
                                <!-- Example single danger button -->
                                <div class="btn-group">
                                    <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="ti-settings"></i>
                                    </button>
                                    <div class="dropdown-menu animated flipInX">
                                        <a class="dropdown-item" href="javascript:void(0)">Action</a>
                                        <a class="dropdown-item" href="javascript:void(0)">Another action</a>
                                        <a class="dropdown-item" href="javascript:void(0)">Something else here</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="javascript:void(0)">Separated link</a>
                                    </div>
                                </div>
                                <!-- Example single danger button -->
                                <div class="btn-group">
                                    <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="ti-trash"></i>
                                    </button>
                                    <div class="dropdown-menu animated flipInY">
                                        <a class="dropdown-item" href="javascript:void(0)">Action</a>
                                        <a class="dropdown-item" href="javascript:void(0)">Another action</a>
                                        <a class="dropdown-item" href="javascript:void(0)">Something else here</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="javascript:void(0)">Separated link</a>
                                    </div>
                                </div>
                                <!-- Example single danger button -->
                                <div class="btn-group">
                                    <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="fa fa-heart"></i>
                                    </button>
                                    <div class="dropdown-menu animated lightSpeedIn">
                                        <a class="dropdown-item" href="javascript:void(0)">Action</a>
                                        <a class="dropdown-item" href="javascript:void(0)">Another action</a>
                                        <a class="dropdown-item" href="javascript:void(0)">Something else here</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="javascript:void(0)">Separated link</a>
                                    </div>
                                </div>
                                <!-- Example single danger button -->
                                <div class="btn-group">
                                    <button type="button" class="btn btn-warning dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="fas fa-times"></i>
                                    </button>
                                    <div class="dropdown-menu animated slideInUp">
                                        <a class="dropdown-item" href="javascript:void(0)">Action</a>
                                        <a class="dropdown-item" href="javascript:void(0)">Another action</a>
                                        <a class="dropdown-item" href="javascript:void(0)">Something else here</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="javascript:void(0)">Separated link</a>
                                    </div>
                                </div>
                                <!-- Example single danger button -->
                                <div class="btn-group">
                                    <button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="far fa-heart"></i>
                                    </button>
                                    <div class="dropdown-menu animated bounce">
                                        <a class="dropdown-item" href="javascript:void(0)">Action</a>
                                        <a class="dropdown-item" href="javascript:void(0)">Another action</a>
                                        <a class="dropdown-item" href="javascript:void(0)">Something else here</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="javascript:void(0)">Separated link</a>
                                    </div>
                                </div>
                                <!-- Example single danger button -->
                                <div class="btn-group">
                                    <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="fas fa-check"></i>
                                    </button>
                                    <div class="dropdown-menu animated rubberBand">
                                        <a class="dropdown-item" href="javascript:void(0)">Action</a>
                                        <a class="dropdown-item" href="javascript:void(0)">Another action</a>
                                        <a class="dropdown-item" href="javascript:void(0)">Something else here</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="javascript:void(0)">Separated link</a>
                                    </div>
                                </div>
                                <div class="btn-group">
                                    <button type="button" class="btn btn-light dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="ti-settings"></i>
                                    </button>
                                    <div class="dropdown-menu animated rubberBand">
                                        <a class="dropdown-item" href="javascript:void(0)">Action</a>
                                        <a class="dropdown-item" href="javascript:void(0)">Another action</a>
                                        <a class="dropdown-item" href="javascript:void(0)">Something else here</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="javascript:void(0)">Separated link</a>
                                    </div>
                                </div>
                                <div class="btn-group">
                                    <button type="button" class="btn btn-dark dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="fas fa-check"></i>
                                    </button>
                                    <div class="dropdown-menu animated rubberBand">
                                        <a class="dropdown-item" href="javascript:void(0)">Action</a>
                                        <a class="dropdown-item" href="javascript:void(0)">Another action</a>
                                        <a class="dropdown-item" href="javascript:void(0)">Something else here</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="javascript:void(0)">Separated link</a>
                                    </div>
                                </div>
                                <pre class="language-html scrollable">
                                    <code>
                                    &lt;div class=&quot;btn-group&quot;&gt;
                                        &lt;button type=&quot;button&quot; class=&quot;btn btn-info dropdown-toggle&quot; data-toggle=&quot;dropdown&quot; aria-haspopup=&quot;true&quot; aria-expanded=&quot;false&quot;&gt;
                                            &lt;i class=&quot;ti-trash&quot;&gt;&lt;/i&gt;
                                        &lt;/button&gt;
                                        &lt;div class=&quot;dropdown-menu animated flipInY&quot;&gt;
                                            &lt;a class=&quot;dropdown-item&quot; href=&quot;javascript:void(0)&quot;&gt;Action&lt;/a&gt;
                                            &lt;a class=&quot;dropdown-item&quot; href=&quot;javascript:void(0)&quot;&gt;Another action&lt;/a&gt;
                                            &lt;a class=&quot;dropdown-item&quot; href=&quot;javascript:void(0)&quot;&gt;Something else here&lt;/a&gt;
                                            &lt;div class=&quot;dropdown-divider&quot;&gt;&lt;/div&gt;
                                            &lt;a class=&quot;dropdown-item&quot; href=&quot;javascript:void(0)&quot;&gt;Separated link&lt;/a&gt;
                                        &lt;/div&gt;
                                    &lt;/div&gt;                                
                                    </code>
                                </pre>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Row -->
                <!-- Row -->
                <div class="row m-t-30">
                    <div class="col-lg-6 button-group">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Circle buttons</h4>
                                <h6 class="card-subtitle">Use a classes <code>btn btn-circle btn-success</code> to quickly create a General btn.</h6>
                                <button type="button" class="btn btn-secondary btn-circle"><i class="fa fa-check"></i> </button>
                                <button type="button" class="btn btn-primary btn-circle"><i class="fa fa-list"></i> </button>
                                <button type="button" class="btn btn-success btn-circle"><i class="fa fa-link"></i> </button>
                                <button type="button" class="btn btn-info btn-circle"><i class="fa fa-check"></i> </button>
                                <button type="button" class="btn btn-warning btn-circle"><i class="fa fa-times"></i> </button>
                                <button type="button" class="btn btn-danger btn-circle"><i class="fa fa-heart"></i> </button>
                                <br>
                                <br>
                                <h4 class="card-title">Circle Large buttons</h4>
                                <h6 class="card-subtitle">Use a classes <code>btn btn-circle btn-lg btn-success</code> to quickly create a General btn.</h6>
                                <button type="button" class="btn btn-secondary btn-circle btn-lg"><i class="fa fa-check"></i> </button>
                                <button type="button" class="btn btn-primary btn-circle btn-lg"><i class="fa fa-list"></i> </button>
                                <button type="button" class="btn btn-success btn-circle btn-lg"><i class="fa fa-link"></i> </button>
                                <button type="button" class="btn btn-info btn-circle btn-lg"><i class="fa fa-check"></i> </button>
                                <button type="button" class="btn btn-warning btn-circle btn-lg"><i class="fa fa-times"></i> </button>
                                <button type="button" class="btn btn-danger btn-circle btn-lg"><i class="fa fa-heart"></i> </button>
                                <br>
                                <br>
                                <h4 class="card-title">Circle xtra Large buttons</h4>
                                <h6 class="card-subtitle">Use a classes <code>btn btn-circle btn-xl btn-success</code> to quickly create a General btn.</h6>
                                <button type="button" class="btn btn-secondary btn-circle btn-xl"><i class="fa fa-check"></i> </button>
                                <button type="button" class="btn btn-primary btn-circle btn-xl"><i class="fa fa-list"></i> </button>
                                <button type="button" class="btn btn-success btn-circle btn-xl"><i class="fa fa-link"></i> </button>
                                <button type="button" class="btn btn-info btn-circle btn-xl"><i class="fa fa-check"></i> </button>
                                <button type="button" class="btn btn-warning btn-circle btn-xl"><i class="fa fa-times"></i> </button>
                                <pre class="language-html scrollable">
                                    <code>
                                    &lt;button type=&quot;button&quot; class=&quot;btn btn-secondary btn-circle&quot;&gt;&lt;i class=&quot;fa fa-check&quot;&gt;&lt;/i&gt; &lt;/button&gt;
                                    &lt;button type=&quot;button&quot; class=&quot;btn btn-secondary btn-circle btn-lg&quot;&gt;&lt;i class=&quot;fa fa-check&quot;&gt;&lt;/i&gt; &lt;/button&gt;
                                    &lt;button type=&quot;button&quot; class=&quot;btn btn-secondary btn-circle btn-xl&quot;&gt;&lt;i class=&quot;fa fa-check&quot;&gt;&lt;/i&gt; &lt;/button&gt;                   
                                    </code>
                                </pre>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 button-group">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Social buttons</h4>
                                <h6 class="card-subtitle">Use a classes <code>btn btn-facebook</code> to quickly create a General btn.</h6>
                                <button class="btn btn-facebook waves-effect waves-light" type="button"> <i class="fab fa-facebook"></i> </button>
                                <button class="btn btn-twitter waves-effect waves-light" type="button"> <i class="fab fa-twitter"></i> </button>
                                <button class="btn btn-googleplus waves-effect waves-light" type="button"> <i class="fab fa-google-plus"></i> </button>
                                <button class="btn btn-linkedin waves-effect waves-light" type="button"> <i class="fab fa-linkedin"></i> </button>
                                <button class="btn btn-instagram waves-effect waves-light" type="button"> <i class="fab fa-instagram"></i> </button>
                                <button class="btn btn-pinterest waves-effect waves-light" type="button"> <i class="fab fa-pinterest"></i> </button>
                                <button class="btn btn-dribbble waves-effect waves-light" type="button"> <i class="fab fa-dribbble"></i> </button>
                                <button class="btn btn-youtube waves-effect waves-light" type="button"> <i class="fab fa-youtube"></i> </button>
                                <br>
                                <br>
                                <h4 class="card-title">With Circle buttons</h4>
                                <h6 class="card-subtitle">Use a classes <code>btn btn-circle btn-success</code> to quickly create a General btn.</h6>
                                <button class="btn btn-facebook waves-effect btn-circle waves-light" type="button"> <i class="fab fa-facebook"></i> </button>
                                <button class="btn btn-twitter waves-effect btn-circle waves-light" type="button"> <i class="fab fa-twitter"></i> </button>
                                <button class="btn btn-googleplus waves-effect btn-circle waves-light" type="button"> <i class="fab fa-google-plus"></i> </button>
                                <button class="btn btn-linkedin waves-effect btn-circle waves-light" type="button"> <i class="fab fa-linkedin"></i> </button>
                                <button class="btn btn-instagram waves-effect btn-circle waves-light" type="button"> <i class="fab fa-instagram"></i> </button>
                                <button class="btn btn-pinterest waves-effect btn-circle waves-light" type="button"> <i class="fab fa-pinterest"></i> </button>
                                <button class="btn btn-dribbble waves-effect btn-circle waves-light" type="button"> <i class="fab fa-dribbble"></i> </button>
                                <button class="btn btn-youtube waves-effect btn-circle waves-light" type="button"> <i class="fab fa-youtube"></i> </button>
                                <br>
                                <br>
                                <h4 class="card-title">with rounded buttons</h4>
                                <h6 class="card-subtitle">Use a classes <code>btn btn-rounded btn-success</code> to quickly create a General btn.</h6>
                                <button class="btn btn-facebook waves-effect btn-rounded waves-light" type="button"> <i class="fab fa-facebook"></i> </button>
                                <button class="btn btn-twitter waves-effect btn-rounded waves-light" type="button"> <i class="fab fa-twitter"></i> </button>
                                <button class="btn btn-googleplus waves-effect btn-rounded waves-light" type="button"> <i class="fab fa-google-plus"></i> </button>
                                <button class="btn btn-linkedin waves-effect btn-rounded waves-light" type="button"> <i class="fab fa-linkedin"></i> </button>
                                <button class="btn btn-instagram waves-effect btn-rounded waves-light" type="button"> <i class="fab fa-instagram"></i> </button>
                                <button class="btn btn-pinterest waves-effect btn-rounded waves-light" type="button"> <i class="fab fa-pinterest"></i> </button>
                                <button class="btn btn-dribbble waves-effect btn-rounded waves-light" type="button"> <i class="fab fa-dribbble"></i> </button>
                                <button class="btn btn-youtube waves-effect btn-rounded waves-light" type="button"> <i class="fab fa-youtube"></i> </button>
                                <pre class="language-html scrollable">
                                    <code>
                                    &lt;button class=&quot;btn btn-facebook waves-effect waves-light&quot; type=&quot;button&quot;&gt; &lt;i class=&quot;fa fa-facebook&quot;&gt;&lt;/i&gt; &lt;/button&gt;  
                                    &lt;button class=&quot;btn btn-facebook waves-effect btn-circle waves-light&quot; type=&quot;button&quot;&gt; &lt;i class=&quot;fa fa-facebook&quot;&gt;&lt;/i&gt; &lt;/button&gt;
                                    &lt;button class=&quot;btn btn-facebook waves-effect btn-rounded waves-light&quot; type=&quot;button&quot;&gt; &lt;i class=&quot;fa fa-facebook&quot;&gt;&lt;/i&gt; &lt;/button&gt;                 
                                    </code>
                                </pre>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Row -->
                <!-- Row -->
                <div class="row m-t-30">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="row">
                                <!-- column -->
                                <div class="col-xlg-6 col-lg-6">
                                    <div class="card-body">
                                        <h4 class="card-title">Group buttons</h4>
                                        <h6 class="card-subtitle">Wrap a series of buttons with <code class="highlighter-rouge">.btn</code> in <code class="highlighter-rouge">.btn-group</code></h6>
                                        <div class="btn-group" role="group" aria-label="Basic example">
                                            <button type="button" class="btn btn-secondary">Left</button>
                                            <button type="button" class="btn btn-secondary">Middle</button>
                                            <button type="button" class="btn btn-secondary">Right</button>
                                        </div>
                                        <div class="btn-group" role="group" aria-label="Basic example">
                                            <button type="button" class="btn btn-info"><i class="fa fa-align-left"></i></button>
                                            <button type="button" class="btn btn-info"><i class="fa fa-align-justify"></i></button>
                                            <button type="button" class="btn btn-info"><i class="fa fa-align-right"></i></button>
                                        </div>
                                        <div class="btn-group" role="group" aria-label="Basic example">
                                            <button type="button" class="btn btn-success"><i class="fa fa-fast-backward"></i></button>
                                            <button type="button" class="btn btn-success"><i class="fa fa-play"></i></button>
                                            <button type="button" class="btn btn-success"><i class="fa fa-fast-forward"></i></button>
                                        </div>
                                    </div>
                                </div>
                                <!-- column -->
                                <div class="col-xlg-6 col-lg-6">
                                    <div class="card-body">
                                        <h4 class="card-title">Button toolbar pagination</h4>
                                        <h6 class="card-subtitle">Wrap a series of buttons with <code class="highlighter-rouge">.btn</code> in <code class="highlighter-rouge">.btn-group</code></h6>
                                        <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
                                            <div class="btn-group mr-2" role="group" aria-label="First group">
                                                <button type="button" class="btn btn-secondary disabled">1</button>
                                                <button type="button" class="btn btn-info">2</button>
                                                <button type="button" class="btn btn-secondary">3</button>
                                                <button type="button" class="btn btn-secondary">4</button>
                                            </div>
                                            <div class="btn-group mr-2" role="group" aria-label="Second group">
                                                <button type="button" class="btn btn-secondary">5</button>
                                                <button type="button" class="btn btn-secondary">6</button>
                                                <button type="button" class="btn btn-secondary">7</button>
                                            </div>
                                            <div class="btn-group" role="group" aria-label="Third group">
                                                <button type="button" class="btn btn-secondary">8</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- column -->
                                <div class="col-xlg-6 col-lg-6 m-b-30">
                                    <div class="card-body">
                                        <pre class="language-html scrollable">
                                        <code>
                                            &lt;div class=&quot;btn-group&quot; role=&quot;group&quot; aria-label=&quot;Basic example&quot;&gt;
                                                &lt;button type=&quot;button&quot; class=&quot;btn btn-secondary&quot;&gt;Left&lt;/button&gt;
                                                &lt;button type=&quot;button&quot; class=&quot;btn btn-secondary&quot;&gt;Middle&lt;/button&gt;
                                                &lt;button type=&quot;button&quot; class=&quot;btn btn-secondary&quot;&gt;Right&lt;/button&gt;
                                            &lt;/div&gt;
                                            &lt;div class=&quot;btn-group&quot; role=&quot;group&quot; aria-label=&quot;Basic example&quot;&gt;
                                                &lt;button type=&quot;button&quot; class=&quot;btn btn-info&quot;&gt;&lt;i class=&quot;fa fa-align-left&quot;&gt;&lt;/i&gt;&lt;/button&gt;
                                                &lt;button type=&quot;button&quot; class=&quot;btn btn-info&quot;&gt;&lt;i class=&quot;fa fa-align-justify&quot;&gt;&lt;/i&gt;&lt;/button&gt;
                                                &lt;button type=&quot;button&quot; class=&quot;btn btn-info&quot;&gt;&lt;i class=&quot;fa fa-align-right&quot;&gt;&lt;/i&gt;&lt;/button&gt;
                                            &lt;/div&gt;
                                            &lt;div class=&quot;btn-group&quot; role=&quot;group&quot; aria-label=&quot;Basic example&quot;&gt;
                                                &lt;button type=&quot;button&quot; class=&quot;btn btn-success&quot;&gt;&lt;i class=&quot;fa fa-fast-backward&quot;&gt;&lt;/i&gt;&lt;/button&gt;
                                                &lt;button type=&quot;button&quot; class=&quot;btn btn-success&quot;&gt;&lt;i class=&quot;fa fa-play&quot;&gt;&lt;/i&gt;&lt;/button&gt;
                                                &lt;button type=&quot;button&quot; class=&quot;btn btn-success&quot;&gt;&lt;i class=&quot;fa fa-fast-forward&quot;&gt;&lt;/i&gt;&lt;/button&gt;
                                            &lt;/div&gt;                                            
                                        </code>
                                    </pre>
                                    </div>
                                </div>
                                <div class="col-xlg-6 col-lg-6 m-b-30">
                                    <div class="card-body">
                                        <pre class="language-html scrollable">
                                        <code>
                                            &lt;div class=&quot;btn-toolbar&quot; role=&quot;toolbar&quot; aria-label=&quot;Toolbar with button groups&quot;&gt;
                                                &lt;div class=&quot;btn-group mr-2&quot; role=&quot;group&quot; aria-label=&quot;First group&quot;&gt;
                                                    &lt;button type=&quot;button&quot; class=&quot;btn btn-secondary disabled&quot;&gt;1&lt;/button&gt;
                                                    &lt;button type=&quot;button&quot; class=&quot;btn btn-info&quot;&gt;2&lt;/button&gt;
                                                    &lt;button type=&quot;button&quot; class=&quot;btn btn-secondary&quot;&gt;3&lt;/button&gt;
                                                    &lt;button type=&quot;button&quot; class=&quot;btn btn-secondary&quot;&gt;4&lt;/button&gt;
                                                &lt;/div&gt;
                                                &lt;div class=&quot;btn-group mr-2&quot; role=&quot;group&quot; aria-label=&quot;Second group&quot;&gt;
                                                    &lt;button type=&quot;button&quot; class=&quot;btn btn-secondary&quot;&gt;5&lt;/button&gt;
                                                    &lt;button type=&quot;button&quot; class=&quot;btn btn-secondary&quot;&gt;6&lt;/button&gt;
                                                    &lt;button type=&quot;button&quot; class=&quot;btn btn-secondary&quot;&gt;7&lt;/button&gt;
                                                &lt;/div&gt;
                                                &lt;div class=&quot;btn-group&quot; role=&quot;group&quot; aria-label=&quot;Third group&quot;&gt;
                                                    &lt;button type=&quot;button&quot; class=&quot;btn btn-secondary&quot;&gt;8&lt;/button&gt;
                                                &lt;/div&gt;
                                            &lt;/div&gt;
                                        </code>
                                    </pre>
                                    </div>
                                </div>
                                <!-- column -->
                                <div class="col-xlg-6 col-lg-6">
                                    <div class="card-body">
                                        <h4 class="card-title">Group buttons sizing</h4>
                                        <h6 class="card-subtitle">Wrap a series of buttons with <code class="highlighter-rouge">.btn</code> in <code class="highlighter-rouge">.btn-group</code></h6>
                                        <div class="btn-group btn-group-lg" role="group" aria-label="Basic example">
                                            <button type="button" class="btn btn-secondary">Left</button>
                                            <button type="button" class="btn btn-secondary">Middle</button>
                                            <button type="button" class="btn btn-secondary">Right</button>
                                        </div>
                                        <div class="btn-group" role="group" aria-label="Basic example">
                                            <button type="button" class="btn btn-info"><i class="fa fa-align-left"></i></button>
                                            <button type="button" class="btn btn-info"><i class="fa fa-align-justify"></i></button>
                                            <button type="button" class="btn btn-info"><i class="fa fa-align-right"></i></button>
                                        </div>
                                        <div class="btn-group btn-group-sm" role="group" aria-label="Basic example">
                                            <button type="button" class="btn btn-success"><i class="fa fa-fast-backward"></i></button>
                                            <button type="button" class="btn btn-success"><i class="fa fa-play"></i></button>
                                            <button type="button" class="btn btn-success"><i class="fa fa-fast-forward"></i></button>
                                        </div>
                                    </div>
                                </div>
                                <!-- column -->
                                <!-- column -->
                                <div class="col-xlg-6 col-lg-6">
                                    <div class="card-body">
                                        <h4 class="card-title">Nesting</h4>
                                        <h6 class="card-subtitle">creat with below code </h6>
                                        <div class="btn-group" role="group" aria-label="Button group with nested dropdown">
                                            <button type="button" class="btn btn-secondary">1</button>
                                            <button type="button" class="btn btn-secondary">2</button>
                                            <div class="btn-group" role="group">
                                                <button id="btnGroupDrop1" type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    Dropdown
                                                </button>
                                                <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                                                    <a class="dropdown-item" href="javascript:void(0)">Dropdown link</a>
                                                    <a class="dropdown-item" href="javascript:void(0)">Dropdown link</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- column -->
                                <div class="col-xlg-6 col-lg-6 m-b-30">
                                    <div class="card-body">
                                        <pre class="language-html scrollable">
                                        <code>
                                            &lt;div class=&quot;btn-group btn-group-lg&quot; role=&quot;group&quot; aria-label=&quot;Basic example&quot;&gt;
                                                &lt;button type=&quot;button&quot; class=&quot;btn btn-secondary&quot;&gt;Left&lt;/button&gt;
                                                &lt;button type=&quot;button&quot; class=&quot;btn btn-secondary&quot;&gt;Middle&lt;/button&gt;
                                                &lt;button type=&quot;button&quot; class=&quot;btn btn-secondary&quot;&gt;Right&lt;/button&gt;
                                            &lt;/div&gt;
                                            &lt;div class=&quot;btn-group&quot; role=&quot;group&quot; aria-label=&quot;Basic example&quot;&gt;
                                                &lt;button type=&quot;button&quot; class=&quot;btn btn-info&quot;&gt;&lt;i class=&quot;fa fa-align-left&quot;&gt;&lt;/i&gt;&lt;/button&gt;
                                                &lt;button type=&quot;button&quot; class=&quot;btn btn-info&quot;&gt;&lt;i class=&quot;fa fa-align-justify&quot;&gt;&lt;/i&gt;&lt;/button&gt;
                                                &lt;button type=&quot;button&quot; class=&quot;btn btn-info&quot;&gt;&lt;i class=&quot;fa fa-align-right&quot;&gt;&lt;/i&gt;&lt;/button&gt;
                                            &lt;/div&gt;
                                            &lt;div class=&quot;btn-group btn-group-sm&quot; role=&quot;group&quot; aria-label=&quot;Basic example&quot;&gt;
                                                &lt;button type=&quot;button&quot; class=&quot;btn btn-success&quot;&gt;&lt;i class=&quot;fa fa-fast-backward&quot;&gt;&lt;/i&gt;&lt;/button&gt;
                                                &lt;button type=&quot;button&quot; class=&quot;btn btn-success&quot;&gt;&lt;i class=&quot;fa fa-play&quot;&gt;&lt;/i&gt;&lt;/button&gt;
                                                &lt;button type=&quot;button&quot; class=&quot;btn btn-success&quot;&gt;&lt;i class=&quot;fa fa-fast-forward&quot;&gt;&lt;/i&gt;&lt;/button&gt;
                                            &lt;/div&gt;                                           
                                        </code>
                                    </pre>
                                    </div>
                                </div>
                                <div class="col-xlg-6 col-lg-6 m-b-30">
                                    <div class="card-body">
                                        <pre class="language-html scrollable">
                                        <code>
                                             &lt;div class=&quot;btn-group&quot; role=&quot;group&quot; aria-label=&quot;Button group with nested dropdown&quot;&gt;
                                                &lt;button type=&quot;button&quot; class=&quot;btn btn-secondary&quot;&gt;1&lt;/button&gt;
                                                &lt;button type=&quot;button&quot; class=&quot;btn btn-secondary&quot;&gt;2&lt;/button&gt;
                                                &lt;div class=&quot;btn-group&quot; role=&quot;group&quot;&gt;
                                                    &lt;button id=&quot;btnGroupDrop1&quot; type=&quot;button&quot; class=&quot;btn btn-secondary dropdown-toggle&quot; data-toggle=&quot;dropdown&quot; aria-haspopup=&quot;true&quot; aria-expanded=&quot;false&quot;&gt;
                                                        Dropdown
                                                    &lt;/button&gt;
                                                    &lt;div class=&quot;dropdown-menu&quot; aria-labelledby=&quot;btnGroupDrop1&quot;&gt;
                                                        &lt;a class=&quot;dropdown-item&quot; href=&quot;javascript:void(0)&quot;&gt;Dropdown link&lt;/a&gt;
                                                        &lt;a class=&quot;dropdown-item&quot; href=&quot;javascript:void(0)&quot;&gt;Dropdown link&lt;/a&gt;
                                                    &lt;/div&gt;
                                                &lt;/div&gt;
                                            &lt;/div&gt;
                                        </code>
                                    </pre>
                                    </div>
                                </div>
                                <!-- column -->
                                <div class="col-xlg-6 col-lg-6 m-b-30">
                                    <div class="card-body">
                                        <h4 class="card-title">Vertical buttons</h4>
                                        <h6 class="card-subtitle">creat vertical button with class of <code>.btn-group-vertical</code> </h6>
                                        <div class="btn-group-vertical" role="group" aria-label="Vertical button group">
                                            <button type="button" class="btn btn-secondary">Button</button>
                                            <button type="button" class="btn btn-secondary">Button</button>
                                            <button type="button" class="btn btn-secondary">Button</button>
                                            <button type="button" class="btn btn-secondary">Button</button>
                                            <button type="button" class="btn btn-secondary">Button</button>
                                            <button type="button" class="btn btn-secondary">Button</button>
                                        </div>
                                        <div class="btn-group-vertical" role="group" aria-label="Vertical button group">
                                            <button type="button" class="btn btn-secondary">Button</button>
                                            <div class="btn-group" role="group">
                                                <button id="btnGroupVerticalDrop1" type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    Dropdown
                                                </button>
                                                <div class="dropdown-menu" aria-labelledby="btnGroupVerticalDrop1">
                                                    <a class="dropdown-item" href="javascript:void(0)">Dropdown link</a>
                                                    <a class="dropdown-item" href="javascript:void(0)">Dropdown link</a>
                                                </div>
                                            </div>
                                            <button type="button" class="btn btn-secondary">Button</button>
                                            <div class="btn-group" role="group">
                                                <button id="btnGroupVerticalDrop2" type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    Dropdown
                                                </button>
                                                <div class="dropdown-menu" aria-labelledby="btnGroupVerticalDrop2">
                                                    <a class="dropdown-item" href="javascript:void(0)">Dropdown link</a>
                                                    <a class="dropdown-item" href="javascript:void(0)">Dropdown link</a>
                                                </div>
                                            </div>
                                            <div class="btn-group" role="group">
                                                <button id="btnGroupVerticalDrop3" type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    Dropdown
                                                </button>
                                                <div class="dropdown-menu" aria-labelledby="btnGroupVerticalDrop3">
                                                    <a class="dropdown-item" href="javascript:void(0)">Dropdown link</a>
                                                    <a class="dropdown-item" href="javascript:void(0)">Dropdown link</a>
                                                </div>
                                            </div>
                                            <div class="btn-group" role="group">
                                                <button id="btnGroupVerticalDrop4" type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    Dropdown
                                                </button>
                                                <div class="dropdown-menu" aria-labelledby="btnGroupVerticalDrop4">
                                                    <a class="dropdown-item" href="javascript:void(0)">Dropdown link</a>
                                                    <a class="dropdown-item" href="javascript:void(0)">Dropdown link</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- column -->
                                <!-- column -->
                                <div class="col-xlg-6 col-lg-6 m-b-30">
                                    <div class="card-body">
                                        <h4 class="card-title">Button with js elements</h4>
                                        <h6 class="card-subtitle">There are a few easy ways to quickly get started with Bootstrap, each one ... </h6>
                                        <button type="button" class="btn btn-success" data-toggle="button" aria-pressed="false">
                                            <i class="ti-settings text" aria-hidden="true"></i>
                                            <span class="text">Upload</span>
                                            <i class="ti-check text-active" aria-hidden="true"></i>
                                            <span class="text-active">Success</span>
                                        </button>
                                        <button type="button" class="btn btn-info" data-toggle="button" data-more="#sh" aria-pressed="false">
                                            <i class="ti-plus text" aria-hidden="true"></i>
                                            <i class="ti-minus text-active" aria-hidden="true"></i>
                                        </button>
                                        <button type="button" class="btn btn-secondary btn-outline" data-toggle="button" aria-pressed="true">
                                            <i class="fa fa-heart text" aria-hidden="true"></i>
                                            <i class="fa fa-heart text-active text-danger" aria-hidden="true"></i>
                                        </button>
                                        <button type="button" class="btn btn-secondary btn-outline" data-toggle="button" aria-pressed="true">
                                            <i class="fa fa-thumbs-o-up text" aria-hidden="true"> 20</i>
                                            <i class="fa fa-thumbs-o-up text-active text-danger" aria-hidden="true"> 21</i>
                                        </button>
                                        <div class="btn-group m-t-15" data-toggle="buttons" role="group">
                                            <label class="btn btn-outline btn-info">
                                                <div class="custom-control custom-radio">
                                                    <input type="radio" id="customRadio1" name="options" value="male" class="custom-control-input">
                                                    <label class="custom-control-label" for="customRadio1"> <i class="ti-check text-active" aria-hidden="true"></i> Male</label>
                                                </div>
                                            </label>
                                            <label class="btn btn-outline btn-info">
                                                <div class="custom-control custom-radio">
                                                    <input type="radio" id="customRadio2" name="options" value="female" class="custom-control-input">
                                                    <label class="custom-control-label" for="customRadio2"> <i class="ti-check text-active" aria-hidden="true"></i> Female</label>
                                                </div>
                                            </label>
                                            <label class="btn btn-outline btn-info active">
                                                <div class="custom-control custom-radio">
                                                    <input type="radio" id="customRadio3" name="options" value="n/a" class="custom-control-input">
                                                    <label class="custom-control-label" for="customRadio3"> <i class="ti-check text-active" aria-hidden="true"></i> N/A</label>
                                                </div>
                                            </label>
                                        </div>
                                        <br/>
                                        <br/>
                                        <h4 class="card-title">Button with checkbox</h4>
                                        <div class="btn-group" data-toggle="buttons">
                                            <label class="btn btn-info active">
                                                <div class="custom-control custom-checkbox mr-sm-2">
                                                    <input type="checkbox" class="custom-control-input" id="checkbox0" checked>
                                                    <label class="custom-control-label" for="checkbox0">Checked</label>
                                                </div>
                                            </label>
                                            <label class="btn btn-info">
                                                <div class="custom-control custom-checkbox mr-sm-2">
                                                    <input type="checkbox" class="custom-control-input" id="checkbox1">
                                                    <label class="custom-control-label" for="checkbox1">Checkbox 2</label>
                                                </div>
                                            </label>
                                            <label class="btn btn-info">
                                                <div class="custom-control custom-checkbox mr-sm-2">
                                                    <input type="checkbox" class="custom-control-input" id="checkbox2">
                                                    <label class="custom-control-label" for="checkbox2">Checkbox 3</label>
                                                </div>
                                            </label>
                                        </div>
                                        <br/>
                                        <br/>
                                        <h4 class="card-title">Button with Radiobutton</h4>
                                        <div class="btn-group" data-toggle="buttons">
                                            <label class="btn btn-primary active">
                                                <div class="custom-control custom-radio">
                                                    <input type="radio" id="customRadio4" name="customRadio" class="custom-control-input" checked>
                                                    <label class="custom-control-label" for="customRadio4">Selected</label>
                                                </div>
                                            </label>
                                            <label class="btn btn-primary">
                                                <div class="custom-control custom-radio">
                                                    <input type="radio" id="customRadio5" name="customRadio" class="custom-control-input">
                                                    <label class="custom-control-label" for="customRadio5">Radio 2</label>
                                                </div>
                                            </label>
                                            <label class="btn btn-primary">
                                                <div class="custom-control custom-radio">
                                                    <input type="radio" id="customRadio6" name="customRadio" class="custom-control-input">
                                                    <label class="custom-control-label" for="customRadio6">Radio 3</label>
                                                </div>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <!-- column -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Row -->
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