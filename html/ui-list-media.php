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
                        <h4 class="page-title">List Media</h4>
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
                                <!-- .row -->
                                <div class="row">
                                    <div class="col-md-4 col-sm-4 p-20">
                                        <h4 class="card-title">Basic example <a class="get-code" data-toggle="collapse" href="#pgr1" aria-expanded="true"><i class="fa fa-code" title="Get Code" data-toggle="tooltip"></i></a></h4>
                                        <div class="collapse m-t-15 well" id="pgr1" aria-expanded="true">
                                            <pre class="language-html scrollable">
                                                 <code>
                                                    &lt;ul class="list-group"&gt;<br/>
                                                        &lt;li class="list-group-item"&gt;Cras justo odio&lt;/li&gt;<br/>
                                                        &lt;li class="list-group-item"&gt;Dapibus ac facilisis in&lt;/li&gt;<br/>
                                                        &lt;li class="list-group-item"&gt;Morbi leo risus&lt;/li&gt;<br/>
                                                        &lt;li class="list-group-item"&gt;Porta ac consectetur ac&lt;/li&gt;<br/>
                                                        &lt;li class="list-group-item"&gt;Vestibulum at eros&lt;/li&gt;<br/>
                                                    &lt;/ul&gt;
                                              </code></pre> </div>
                                        <ul class="list-group">
                                            <li class="list-group-item">Cras justo odio</li>
                                            <li class="list-group-item">Dapibus ac facilisis in</li>
                                            <li class="list-group-item">Morbi leo risus</li>
                                            <li class="list-group-item">Porta ac consectetur ac</li>
                                            <li class="list-group-item">Vestibulum at eros</li>
                                        </ul>
                                    </div>
                                    <div class="col-md-4 col-sm-4 p-20">
                                        <h4 class="card-title">Linked items <a class="get-code" data-toggle="collapse" href="#pgr2" aria-expanded="true"><i class="fa fa-code" title="Get Code" data-toggle="tooltip"></i></a></h4>
                                        <div class="collapse m-t-15 well" id="pgr2" aria-expanded="true">
                                            <pre class="language-html scrollable">
                                                <code>
                                                    &lt;div class="list-group"&gt;<br/>
                                                        &lt;a href="javascript:void(0)" class="list-group-item active"&gt;Cras justo odio&lt;/a&gt;
                                                        &lt;a href="javascript:void(0)" class="list-group-item"&gt;Dapibus ac facilisis in&lt;/a&gt;
                                                        &lt;a href="javascript:void(0)" class="list-group-item"&gt;Morbi leo risus&lt;/a&gt;
                                                        &lt;a href="javascript:void(0)" class="list-group-item"&gt;Porta ac consectetur ac&lt;/a&gt;
                                                        &lt;a href="javascript:void(0)" class="list-group-item"&gt;Vestibulum at eros&lt;/a&gt;
                                                    &lt;/div&gt;
                                                </code> 
                                            </pre></div>
                                        <div class="list-group"> <a href="javascript:void(0)" class="list-group-item active">Cras justo odio</a> <a href="javascript:void(0)" class="list-group-item">Dapibus ac facilisis in</a> <a href="javascript:void(0)" class="list-group-item">Morbi leo risus</a> <a href="javascript:void(0)" class="list-group-item">Porta ac consectetur ac</a> <a href="javascript:void(0)" class="list-group-item">Vestibulum at eros</a> </div>
                                    </div>
                                    <div class="col-md-4 col-sm-4 p-20">
                                        <h4 class="card-title">With Badges <a class="get-code" data-toggle="collapse" href="#pgr3" aria-expanded="true"><i class="fa fa-code" title="Get Code" data-toggle="tooltip"></i></a></h4>
                                        <div class="collapse m-t-15 well" id="pgr3" aria-expanded="true">
                                            <pre class="language-html scrollable">
                                                <code>
                                                    &lt;ul class="list-group list-group-full"&gt;<br/>
                                                        &lt;li class="list-group-item"&gt;<br/>
                                                          &lt;span class="badge badge-success"&gt;6&lt;/span&gt; Cras justo odio
                                                        &lt;/li&gt;<br/>
                                                        &lt;li class="list-group-item"&gt;<br/>
                                                          Dapibus ac facilisis in
                                                        &lt;/li&gt;<br/>
                                                        &lt;li class="list-group-item"&gt;<br/>
                                                          &lt;span class="badge badge-danger"&gt;3&lt;/span&gt; Morbi leo risus
                                                        &lt;/li&gt;<br/>
                                                        &lt;li class="list-group-item active"&gt;<br/>
                                                          &lt;span class="badge badge-info"&gt;10&lt;/span&gt; Porta ac consectetur ac
                                                        &lt;/li&gt;<br/>
                                                        &lt;li class="list-group-item"&gt;<br/>
                                                          Vestibulum at eros
                                                        &lt;/li&gt;<br/>
                                                    &lt;/ul&gt;
                                              </code> </pre>
                                        </div>
                                        <ul class="list-group list-group-full">
                                            <li class="list-group-item"> Cras justo odio <span class="badge badge-info ml-auto">6</span></li>
                                            <li class="list-group-item"> Dapibus ac facilisis in </li>
                                            <li class="list-group-item"> Morbi leo risus <span class="badge badge-danger ml-auto">3</span></li>
                                            <li class="list-group-item active"> Porta ac consectetur ac <span class="badge badge-success ml-auto">10</span></li>
                                            <li class="list-group-item"> Vestibulum at eros </li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- / .row -->
                                <!-- .row -->
                                <div class="row">
                                    <div class="col-md-4 col-sm-4 p-20">
                                        <h4 class="card-title">Button items <a class="get-code" data-toggle="collapse" href="#pgr4" aria-expanded="true"><i class="fa fa-code" title="Get Code" data-toggle="tooltip"></i></a></h4>
                                        <div class="collapse m-t-15 well" id="pgr4" aria-expanded="true">
                                            <pre class="language-html scrollable">
                                                <code>
                                                    &lt;div class=&quot;list-group&quot;&gt;
                                                        &lt;button type=&quot;button&quot; class=&quot;list-group-item&quot;&gt;Cras justo odio&lt;/button&gt;
                                                        &lt;button type=&quot;button&quot; class=&quot;list-group-item&quot;&gt;Dapibus ac facilisis in&lt;/button&gt;
                                                        &lt;button type=&quot;button&quot; class=&quot;list-group-item&quot;&gt;Morbi leo risus&lt;/button&gt;
                                                        &lt;button type=&quot;button&quot; class=&quot;list-group-item&quot;&gt;Porta ac consectetur ac&lt;/button&gt;
                                                        &lt;button type=&quot;button&quot; class=&quot;list-group-item&quot;&gt;Vestibulum at eros&lt;/button&gt;
                                                    &lt;/div&gt;
                                              </code> </pre>
                                        </div>
                                        <div class="list-group">
                                            <button type="button" class="list-group-item">Cras justo odio</button>
                                            <button type="button" class="list-group-item">Dapibus ac facilisis in</button>
                                            <button type="button" class="list-group-item">Morbi leo risus</button>
                                            <button type="button" class="list-group-item">Porta ac consectetur ac</button>
                                            <button type="button" class="list-group-item">Vestibulum at eros</button>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-4 p-20">
                                        <h4 class="card-title">Disabled items <a class="get-code" data-toggle="collapse" href="#pgr5" aria-expanded="true"><i class="fa fa-code" title="Get Code" data-toggle="tooltip"></i></a></h4>
                                        <div class="collapse m-t-15 well" id="pgr5" aria-expanded="true">
                                            <pre class="language-html scrollable">
                                                <code>
                                                    &lt;div class=&quot;list-group&quot;&gt;
                                                        &lt;a href=&quot;javascript:void(0)&quot; class=&quot;list-group-item disabled&quot;&gt;Cras justo odio &lt;/a&gt;
                                                        &lt;a href=&quot;javascript:void(0)&quot; class=&quot;list-group-item&quot;&gt;Dapibus ac facilisis in&lt;/a&gt;
                                                        &lt;a href=&quot;javascript:void(0)&quot; class=&quot;list-group-item&quot;&gt;Morbi leo risus&lt;/a&gt;
                                                        &lt;a href=&quot;javascript:void(0)&quot; class=&quot;list-group-item&quot;&gt;Porta ac consectetur ac&lt;/a&gt;
                                                        &lt;a href=&quot;javascript:void(0)&quot; class=&quot;list-group-item&quot;&gt;Vestibulum at eros&lt;/a&gt;
                                                    &lt;/div&gt;
                                              </code> 
                                          </pre>
                                        </div>
                                        <div class="list-group">
                                            <a href="javascript:void(0)" class="list-group-item disabled">Cras justo odio </a>
                                            <a href="javascript:void(0)" class="list-group-item">Dapibus ac facilisis in</a>
                                            <a href="javascript:void(0)" class="list-group-item">Morbi leo risus</a>
                                            <a href="javascript:void(0)" class="list-group-item">Porta ac consectetur ac</a>
                                            <a href="javascript:void(0)" class="list-group-item">Vestibulum at eros</a>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-4 p-20">
                                        <h4 class="card-title">Disabled items <a class="get-code" data-toggle="collapse" href="#pgr6" aria-expanded="true"><i class="fa fa-code" title="Get Code" data-toggle="tooltip"></i></a></h4>
                                        <div class="collapse m-t-15 well" id="pgr6" aria-expanded="true">
                                            <pre class="language-html scrollable">
                                                <code>
                                                    &lt;ul class=&quot;list-group&quot;&gt;
                                                        &lt;li class=&quot;list-group-item list-group-item-success&quot;&gt;Dapibus ac facilisis in&lt;/li&gt;
                                                        &lt;li class=&quot;list-group-item list-group-item-info&quot;&gt;Cras sit amet nibh libero&lt;/li&gt;
                                                        &lt;li class=&quot;list-group-item list-group-item-warning&quot;&gt;Porta ac consectetur ac&lt;/li&gt;
                                                        &lt;li class=&quot;list-group-item list-group-item-danger&quot;&gt;Vestibulum at eros&lt;/li&gt;
                                                        &lt;li class=&quot;list-group-item list-group-item-default&quot;&gt;Vestibulum at eros&lt;/li&gt;
                                                    &lt;/ul&gt;
                                              </code> 
                                          </pre>
                                        </div>
                                        <ul class="list-group">
                                            <li class="list-group-item list-group-item-success">Dapibus ac facilisis in</li>
                                            <li class="list-group-item list-group-item-info">Cras sit amet nibh libero</li>
                                            <li class="list-group-item list-group-item-warning">Porta ac consectetur ac</li>
                                            <li class="list-group-item list-group-item-danger">Vestibulum at eros</li>
                                            <li class="list-group-item list-group-item-default">Vestibulum at eros</li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- /.row -->
                                <!-- .row -->
                                <div class="row">
                                    <div class="col-md-8 p-20">
                                        <h4 class="card-title">Media object</h4>
                                        <ul class="list-unstyled">
                                            <li class="media">
                                                <img class="d-flex m-r-15" src="../../assets/images/users/1.jpg" width="60" alt="Generic placeholder image">
                                                <div class="media-body">
                                                    <h5 class="mt-0 mb-1">List-based media object</h5> Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                                                </div>
                                            </li>
                                            <li class="media my-4">
                                                <img class="d-flex m-r-15" src="../../assets/images/users/2.jpg" width="60" alt="Generic placeholder image">
                                                <div class="media-body">
                                                    <h5 class="mt-0 mb-1">List-based media object</h5> Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                                                </div>
                                            </li>
                                            <li class="media">
                                                <img class="d-flex m-r-15" src="../../assets/images/users/3.jpg" width="60" alt="Generic placeholder image">
                                                <div class="media-body">
                                                    <h5 class="mt-0 mb-1">List-based media object</h5> Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                                                    <div class="media mt-3">
                                                        <a class="d-flex pr-3" href="javascript:void(0)">
                                                            <img src="../../assets/images/users/4.jpg" width="60" height="60" alt="Generic placeholder image">
                                                        </a>
                                                        <div class="media-body">
                                                            <h5 class="mt-0">Media heading</h5> Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-md-4 col-sm-12 p-20">
                                        <h4 class="card-title">Custom content</h4>
                                        <div class="list-group">
                                            <a href="javascript:void(0)" class="list-group-item list-group-item-action flex-column align-items-start active">
                                                <div class="d-flex w-100 justify-content-between">
                                                    <h5 class="mb-1 text-white">List group item heading</h5>
                                                    <small>3 days ago</small>
                                                </div>
                                                <p class="mb-1">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
                                                <small>Donec id elit non mi porta.</small>
                                            </a>
                                            <a href="javascript:void(0)" class="list-group-item list-group-item-action flex-column align-items-start">
                                                <div class="d-flex w-100 justify-content-between">
                                                    <h5 class="mb-1">List group item heading</h5>
                                                    <small class="text-muted">3 days ago</small>
                                                </div>
                                                <p class="mb-1">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
                                                <small class="text-muted">Donec id elit non mi porta.</small>
                                            </a>
                                            <a href="javascript:void(0)" class="list-group-item list-group-item-action flex-column align-items-start">
                                                <div class="d-flex w-100 justify-content-between">
                                                    <h5 class="mb-1">List group item heading</h5>
                                                    <small class="text-muted">3 days ago</small>
                                                </div>
                                                <p class="mb-1">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
                                                <small class="text-muted">Donec id elit non mi porta.</small>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <pre class="language-html scrollable">
                                            <code>
                                                &lt;ul class=&quot;list-unstyled&quot;&gt;
                                                    &lt;li class=&quot;media&quot;&gt;
                                                        &lt;img class=&quot;d-flex m-r-15&quot; src=&quot;../../assets/images/users/1.jpg&quot; width=&quot;60&quot; alt=&quot;Generic placeholder image&quot;&gt;
                                                        &lt;div class=&quot;media-body&quot;&gt;
                                                            &lt;h5 class=&quot;mt-0 mb-1&quot;&gt;List-based media object&lt;/h5&gt; Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                                                        &lt;/div&gt;
                                                    &lt;/li&gt;
                                                    &lt;li class=&quot;media my-4&quot;&gt;
                                                        &lt;img class=&quot;d-flex m-r-15&quot; src=&quot;../../assets/images/users/2.jpg&quot; width=&quot;60&quot; alt=&quot;Generic placeholder image&quot;&gt;
                                                        &lt;div class=&quot;media-body&quot;&gt;
                                                            &lt;h5 class=&quot;mt-0 mb-1&quot;&gt;List-based media object&lt;/h5&gt; Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                                                        &lt;/div&gt;
                                                    &lt;/li&gt;
                                                    &lt;li class=&quot;media&quot;&gt;
                                                        &lt;img class=&quot;d-flex m-r-15&quot; src=&quot;../../assets/images/users/3.jpg&quot; width=&quot;60&quot; alt=&quot;Generic placeholder image&quot;&gt;
                                                        &lt;div class=&quot;media-body&quot;&gt;
                                                            &lt;h5 class=&quot;mt-0 mb-1&quot;&gt;List-based media object&lt;/h5&gt; Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                                                            &lt;div class=&quot;media mt-3&quot;&gt;
                                                                &lt;a class=&quot;d-flex pr-3&quot; href=&quot;javascript:void(0)&quot;&gt;
                                                                    &lt;img src=&quot;../../assets/images/users/4.jpg&quot; width=&quot;60&quot; height=&quot;60&quot; alt=&quot;Generic placeholder image&quot;&gt;
                                                                &lt;/a&gt;
                                                                &lt;div class=&quot;media-body&quot;&gt;
                                                                    &lt;h5 class=&quot;mt-0&quot;&gt;Media heading&lt;/h5&gt; Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                                                                &lt;/div&gt;
                                                            &lt;/div&gt;
                                                        &lt;/div&gt;
                                                    &lt;/li&gt;
                                                &lt;/ul&gt;
                                            </code>
                                        </pre>
                                    </div>
                                    <div class="col-md-4">
                                        <pre class="language-html scrollable">
                                            <code>
                                                &lt;div class=&quot;list-group&quot;&gt;
                                                    &lt;a href=&quot;javascript:void(0)&quot; class=&quot;list-group-item list-group-item-action flex-column align-items-start active&quot;&gt;
                                                        &lt;div class=&quot;d-flex w-100 justify-content-between&quot;&gt;
                                                            &lt;h5 class=&quot;mb-1 text-white&quot;&gt;List group item heading&lt;/h5&gt;
                                                            &lt;small&gt;3 days ago&lt;/small&gt;
                                                        &lt;/div&gt;
                                                        &lt;p class=&quot;mb-1&quot;&gt;Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.&lt;/p&gt;
                                                        &lt;small&gt;Donec id elit non mi porta.&lt;/small&gt;
                                                    &lt;/a&gt;
                                                    &lt;a href=&quot;javascript:void(0)&quot; class=&quot;list-group-item list-group-item-action flex-column align-items-start&quot;&gt;
                                                        &lt;div class=&quot;d-flex w-100 justify-content-between&quot;&gt;
                                                            &lt;h5 class=&quot;mb-1&quot;&gt;List group item heading&lt;/h5&gt;
                                                            &lt;small class=&quot;text-muted&quot;&gt;3 days ago&lt;/small&gt;
                                                        &lt;/div&gt;
                                                        &lt;p class=&quot;mb-1&quot;&gt;Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.&lt;/p&gt;
                                                        &lt;small class=&quot;text-muted&quot;&gt;Donec id elit non mi porta.&lt;/small&gt;
                                                    &lt;/a&gt;
                                                    &lt;a href=&quot;javascript:void(0)&quot; class=&quot;list-group-item list-group-item-action flex-column align-items-start&quot;&gt;
                                                        &lt;div class=&quot;d-flex w-100 justify-content-between&quot;&gt;
                                                            &lt;h5 class=&quot;mb-1&quot;&gt;List group item heading&lt;/h5&gt;
                                                            &lt;small class=&quot;text-muted&quot;&gt;3 days ago&lt;/small&gt;
                                                        &lt;/div&gt;
                                                        &lt;p class=&quot;mb-1&quot;&gt;Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.&lt;/p&gt;
                                                        &lt;small class=&quot;text-muted&quot;&gt;Donec id elit non mi porta.&lt;/small&gt;
                                                    &lt;/a&gt;
                                                &lt;/div&gt;
                                            </code>
                                        </pre>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.row -->
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title">Media heading</h5>
                                        <div class="media">
                                            <img class="m-r-15 img-fluid w-25" src="../../assets/images/big/img1.jpg" alt="Generic placeholder image">
                                            <div class="media-body">
                                                <h5 class="mt-0">Media heading</h5> Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title">Nesting</h5>
                                        <div class="media">
                                            <img class="m-r-15 w-25" src="../../assets/images/big/img1.jpg" alt="Generic placeholder image">
                                            <div class="media-body">
                                                <h5 class="mt-0">Media heading</h5> Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                                                <div class="media mt-3">
                                                    <a class="pr-3 w-25" href="#">
                                                <img src="../../assets/images/big/img1.jpg" class="w-100" alt="Generic placeholder image">
                                            </a>
                                                    <div class="media-body">
                                                        <h5 class="mt-0">Media heading</h5> Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title">Alignment</h5>
                                        <div class="media">
                                            <img class="align-self-start w-25 m-r-15" src="../../assets/images/big/img1.jpg" alt="Generic placeholder image">
                                            <div class="media-body">
                                                <h5 class="mt-0">Top-aligned media</h5>
                                                <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</p>
                                                <p>Donec sed odio dui. Nullam quis risus eget urna mollis ornare vel eu leo. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title">Center-aligned media</h5>
                                        <div class="media">
                                            <img class="align-self-center w-25 m-r-15" src="../../assets/images/big/img1.jpg" alt="Generic placeholder image">
                                            <div class="media-body">
                                                <h5 class="mt-0">Center-aligned media</h5>
                                                <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</p>
                                                <p class="mb-0">Donec sed odio dui. Nullam quis risus eget urna mollis ornare vel eu leo. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title">Bottom-aligned media</h5>
                                        <div class="media">
                                            <img class="align-self-end m-r-15 w-25" src="../../assets/images/big/img1.jpg" alt="Generic placeholder image">
                                            <div class="media-body">
                                                <h5 class="mt-0">Bottom-aligned media</h5>
                                                <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</p>
                                                <p class="mb-0">Donec sed odio dui. Nullam quis risus eget urna mollis ornare vel eu leo. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title">Order</h5>
                                        <div class="media">
                                            <div class="media-body">
                                                <h5 class="mt-0 mb-1">Media object</h5> Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                                            </div>
                                            <img class="ml-3 w-25" src="../../assets/images/big/img1.jpg" alt="Generic placeholder image">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title">Media list</h5>
                                        <ul class="list-unstyled">
                                            <li class="media">
                                                <img class="m-r-15 w-25" src="../../assets/images/big/img1.jpg" alt="Generic placeholder image">
                                                <div class="media-body">
                                                    <h5 class="mt-0 mb-1">List-based media object</h5> Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                                                </div>
                                            </li>
                                            <li class="media my-4">
                                                <img class="m-r-15 w-25" src="../../assets/images/big/img1.jpg" alt="Generic placeholder image">
                                                <div class="media-body">
                                                    <h5 class="mt-0 mb-1">List-based media object</h5> Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                                                </div>
                                            </li>
                                            <li class="media">
                                                <img class="m-r-15 w-25" src="../../assets/images/big/img1.jpg" alt="Generic placeholder image">
                                                <div class="media-body">
                                                    <h5 class="mt-0 mb-1">List-based media object</h5> Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
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