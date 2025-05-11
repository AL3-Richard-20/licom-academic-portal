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
                        <h4 class="page-title">Tabs</h4>
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
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Default Tab</h4>
                                <h6 class="card-subtitle">Use default tab with class <code>nav-tabs & tabcontent-border </code></h6>
                                <!-- Nav tabs -->
                                <ul class="nav nav-tabs" role="tablist">
                                    <li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#home" role="tab"><span class="hidden-sm-up"><i class="ti-home"></i></span> <span class="hidden-xs-down">Home</span></a> </li>
                                    <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#profile" role="tab"><span class="hidden-sm-up"><i class="ti-user"></i></span> <span class="hidden-xs-down">Profile</span></a> </li>
                                    <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#messages" role="tab"><span class="hidden-sm-up"><i class="ti-email"></i></span> <span class="hidden-xs-down">Messages</span></a> </li>
                                </ul>
                                <!-- Tab panes -->
                                <div class="tab-content tabcontent-border">
                                    <div class="tab-pane active" id="home" role="tabpanel">
                                        <div class="p-20">
                                            <h3>Best Clean Tab ever</h3>
                                            <h4>you can use it with the small code</h4>
                                            <p>Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a.</p>
                                        </div>
                                    </div>
                                    <div class="tab-pane  p-20" id="profile" role="tabpanel">2</div>
                                    <div class="tab-pane p-20" id="messages" role="tabpanel">3</div>
                                </div>
                                <pre class="language-html scrollable">
                                    <code>
                                        &lt;!-- Nav tabs --&gt;
                                        &lt;ul class=&quot;nav nav-tabs&quot; role=&quot;tablist&quot;&gt;
                                            &lt;li class=&quot;nav-item&quot;&gt; &lt;a class=&quot;nav-link active&quot; data-toggle=&quot;tab&quot; href=&quot;#home&quot; role=&quot;tab&quot;&gt;&lt;span class=&quot;hidden-sm-up&quot;&gt;&lt;i class=&quot;ti-home&quot;&gt;&lt;/i&gt;&lt;/span&gt; &lt;span class=&quot;hidden-xs-down&quot;&gt;Home&lt;/span&gt;&lt;/a&gt; &lt;/li&gt;
                                            &lt;li class=&quot;nav-item&quot;&gt; &lt;a class=&quot;nav-link&quot; data-toggle=&quot;tab&quot; href=&quot;#profile&quot; role=&quot;tab&quot;&gt;&lt;span class=&quot;hidden-sm-up&quot;&gt;&lt;i class=&quot;ti-user&quot;&gt;&lt;/i&gt;&lt;/span&gt; &lt;span class=&quot;hidden-xs-down&quot;&gt;Profile&lt;/span&gt;&lt;/a&gt; &lt;/li&gt;
                                            &lt;li class=&quot;nav-item&quot;&gt; &lt;a class=&quot;nav-link&quot; data-toggle=&quot;tab&quot; href=&quot;#messages&quot; role=&quot;tab&quot;&gt;&lt;span class=&quot;hidden-sm-up&quot;&gt;&lt;i class=&quot;ti-email&quot;&gt;&lt;/i&gt;&lt;/span&gt; &lt;span class=&quot;hidden-xs-down&quot;&gt;Messages&lt;/span&gt;&lt;/a&gt; &lt;/li&gt;
                                        &lt;/ul&gt;
                                        &lt;!-- Tab panes --&gt;
                                        &lt;div class=&quot;tab-content tabcontent-border&quot;&gt;
                                            &lt;div class=&quot;tab-pane active&quot; id=&quot;home&quot; role=&quot;tabpanel&quot;&gt;
                                                &lt;div class=&quot;p-20&quot;&gt;
                                                    &lt;h3&gt;Best Clean Tab ever&lt;/h3&gt;
                                                    &lt;h4&gt;you can use it with the small code&lt;/h4&gt;
                                                    &lt;p&gt;Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a.&lt;/p&gt;
                                                &lt;/div&gt;
                                            &lt;/div&gt;
                                            &lt;div class=&quot;tab-pane  p-20&quot; id=&quot;profile&quot; role=&quot;tabpanel&quot;&gt;2&lt;/div&gt;
                                            &lt;div class=&quot;tab-pane p-20&quot; id=&quot;messages&quot; role=&quot;tabpanel&quot;&gt;3&lt;/div&gt;
                                        &lt;/div&gt;                                       
                                    </code>
                                </pre>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-body p-b-0">
                                <h4 class="card-title">Customtab Tab</h4>
                                <h6 class="card-subtitle">Use default tab with class <code>customtab</code></h6> </div>
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs customtab" role="tablist">
                                <li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#home2" role="tab"><span class="hidden-sm-up"><i class="ti-home"></i></span> <span class="hidden-xs-down">Home</span></a> </li>
                                <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#profile2" role="tab"><span class="hidden-sm-up"><i class="ti-user"></i></span> <span class="hidden-xs-down">Profile</span></a> </li>
                                <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#messages2" role="tab"><span class="hidden-sm-up"><i class="ti-email"></i></span> <span class="hidden-xs-down">Messages</span></a> </li>
                            </ul>
                            <!-- Tab panes -->
                            <div class="tab-content">
                                <div class="tab-pane active" id="home2" role="tabpanel">
                                    <div class="p-20">
                                        <h3>Best Clean Tab ever</h3>
                                        <h4>you can use it with the small code</h4>
                                        <p>Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a.</p>
                                    </div>
                                </div>
                                <div class="tab-pane  p-20" id="profile2" role="tabpanel">2</div>
                                <div class="tab-pane p-20" id="messages2" role="tabpanel">3</div>
                            </div>
                            <div class="card-body p-t-0">
                                <pre class="language-html scrollable">
                                    <code>
                                        &lt;!-- Nav tabs --&gt;
                                        &lt;ul class=&quot;nav nav-tabs customtab&quot; role=&quot;tablist&quot;&gt;
                                            &lt;li class=&quot;nav-item&quot;&gt; &lt;a class=&quot;nav-link active&quot; data-toggle=&quot;tab&quot; href=&quot;#home2&quot; role=&quot;tab&quot;&gt;&lt;span class=&quot;hidden-sm-up&quot;&gt;&lt;i class=&quot;ti-home&quot;&gt;&lt;/i&gt;&lt;/span&gt; &lt;span class=&quot;hidden-xs-down&quot;&gt;Home&lt;/span&gt;&lt;/a&gt; &lt;/li&gt;
                                            &lt;li class=&quot;nav-item&quot;&gt; &lt;a class=&quot;nav-link&quot; data-toggle=&quot;tab&quot; href=&quot;#profile2&quot; role=&quot;tab&quot;&gt;&lt;span class=&quot;hidden-sm-up&quot;&gt;&lt;i class=&quot;ti-user&quot;&gt;&lt;/i&gt;&lt;/span&gt; &lt;span class=&quot;hidden-xs-down&quot;&gt;Profile&lt;/span&gt;&lt;/a&gt; &lt;/li&gt;
                                            &lt;li class=&quot;nav-item&quot;&gt; &lt;a class=&quot;nav-link&quot; data-toggle=&quot;tab&quot; href=&quot;#messages2&quot; role=&quot;tab&quot;&gt;&lt;span class=&quot;hidden-sm-up&quot;&gt;&lt;i class=&quot;ti-email&quot;&gt;&lt;/i&gt;&lt;/span&gt; &lt;span class=&quot;hidden-xs-down&quot;&gt;Messages&lt;/span&gt;&lt;/a&gt; &lt;/li&gt;
                                        &lt;/ul&gt;
                                        &lt;!-- Tab panes --&gt;
                                        &lt;div class=&quot;tab-content&quot;&gt;
                                            &lt;div class=&quot;tab-pane active&quot; id=&quot;home2&quot; role=&quot;tabpanel&quot;&gt;
                                                &lt;div class=&quot;p-20&quot;&gt;
                                                    &lt;h3&gt;Best Clean Tab ever&lt;/h3&gt;
                                                    &lt;h4&gt;you can use it with the small code&lt;/h4&gt;
                                                    &lt;p&gt;Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a.&lt;/p&gt;
                                                &lt;/div&gt;
                                            &lt;/div&gt;
                                            &lt;div class=&quot;tab-pane  p-20&quot; id=&quot;profile2&quot; role=&quot;tabpanel&quot;&gt;2&lt;/div&gt;
                                            &lt;div class=&quot;tab-pane p-20&quot; id=&quot;messages2&quot; role=&quot;tabpanel&quot;&gt;3&lt;/div&gt;
                                        &lt;/div&gt;                                        
                                    </code>
                                </pre>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- row -->
                <!-- row -->
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title m-b-40">Tab with dropdown</h4>
                                <ul class="nav nav-tabs" id="myTab" role="tablist">
                                    <li class="nav-item"> <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home5" role="tab" aria-controls="home5" aria-expanded="true"><span class="hidden-sm-up"><i class="ti-home"></i></span> <span class="hidden-xs-down">Home</span></a> </li>
                                    <li class="nav-item"> <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile5" role="tab" aria-controls="profile"><span class="hidden-sm-up"><i class="ti-user"></i></span> <span class="hidden-xs-down">Profile</span></a></li>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="javascript:void(0)" role="button" aria-haspopup="true" aria-expanded="false">
                                            <span class="hidden-sm-up"><i class="ti-email"></i></span> <span class="hidden-xs-down">Dropdown</span>
                                        </a>
                                        <div class="dropdown-menu"> <a class="dropdown-item" id="dropdown1-tab" href="#dropdown1" role="tab" data-toggle="tab" aria-controls="dropdown1">@fat</a> <a class="dropdown-item" id="dropdown2-tab" href="#dropdown2" role="tab" data-toggle="tab" aria-controls="dropdown2">@mdo</a> </div>
                                    </li>
                                </ul>
                                <div class="tab-content tabcontent-border p-20" id="myTabContent">
                                    <div role="tabpanel" class="tab-pane fade show active" id="home5" aria-labelledby="home-tab">
                                        <p>Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, qui irure terry richardson ex squid. Aliquip placeat salvia cillum iphone. Seitan aliquip quis cardigan american apparel, butcher voluptate nisi qui.</p>
                                    </div>
                                    <div class="tab-pane fade" id="profile5" role="tabpanel" aria-labelledby="profile-tab">
                                        <p>Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid. Exercitation +1 labore velit, blog sartorial PBR leggings next level wes anderson artisan four loko farm-to-table craft beer twee. Qui photo booth letterpress, commodo enim craft beer mlkshk aliquip jean shorts ullamco ad vinyl cillum PBR. Homo nostrud organic, assumenda labore aesthetic magna delectus mollit. Keytar helvetica VHS salvia yr, vero magna velit sapiente labore stumptown. Vegan fanny pack odio cillum wes anderson 8-bit, sustainable jean shorts beard ut DIY ethical culpa terry richardson biodiesel. Art party scenester stumptown, tumblr butcher vero sint qui sapiente accusamus tattooed echo park.</p>
                                    </div>
                                    <div class="tab-pane fade" id="dropdown1" role="tabpanel" aria-labelledby="dropdown1-tab">
                                        <p>Etsy mixtape wayfarers, ethical wes anderson tofu before they sold out mcsweeney's organic lomo retro fanny pack lo-fi farm-to-table readymade. Messenger bag gentrify pitchfork tattooed craft beer, iphone skateboard locavore carles etsy salvia banksy hoodie helvetica. DIY synth PBR banksy irony. Leggings gentrify squid 8-bit cred pitchfork. Williamsburg banh mi whatever gluten-free, carles pitchfork biodiesel fixie etsy retro mlkshk vice blog. Scenester cred you probably haven't heard of them, vinyl craft beer blog stumptown. Pitchfork sustainable tofu synth chambray yr.</p>
                                    </div>
                                    <div class="tab-pane fade" id="dropdown2" role="tabpanel" aria-labelledby="dropdown2-tab">
                                        <p>Trust fund seitan letterpress, keytar raw denim keffiyeh etsy art party before they sold out master cleanse gluten-free squid scenester freegan cosby sweater. Fanny pack portland seitan DIY, art party locavore wolf cliche high life echo park Austin. Cred vinyl keffiyeh DIY salvia PBR, banh mi before they sold out farm-to-table VHS viral locavore cosby sweater. Lomo wolf viral, mustache readymade thundercats keffiyeh craft beer marfa ethical. Wolf salvia freegan, sartorial keffiyeh echo park vegan.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- row -->
                <div class="row">
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Nav Pills Tabs</h4>
                                <ul class="nav nav-pills m-t-30 m-b-30">
                                    <li class=" nav-item"> <a href="#navpills-1" class="nav-link active" data-toggle="tab" aria-expanded="false">Tab One</a> </li>
                                    <li class="nav-item"> <a href="#navpills-2" class="nav-link" data-toggle="tab" aria-expanded="false">Tab Two</a> </li>
                                    <li class="nav-item"> <a href="#navpills-3" class="nav-link" data-toggle="tab" aria-expanded="true">Tab Three</a> </li>
                                </ul>
                                <div class="tab-content br-n pn">
                                    <div id="navpills-1" class="tab-pane active">
                                        <div class="row">
                                            <div class="col-md-4"> <img src="../../assets/images/big/img2.jpg" alt="" class="img-fluid thumbnail m-r-15"> </div>
                                            <div class="col-md-8"> Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica.
                                                <p>
                                                    <br/> Reprehenderit butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, qui irure terry richardson ex squid.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="navpills-2" class="tab-pane">
                                        <div class="row">
                                            <div class="col-md-8"> Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica.
                                                <p>
                                                    <br/> Reprehenderit butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, qui irure terry richardson ex squid.</p>
                                            </div>
                                            <div class="col-md-4"> <img src="../../assets/images/big/img3.jpg" alt="" class="img-fluid thumbnail mr25"> </div>
                                        </div>
                                    </div>
                                    <div id="navpills-3" class="tab-pane">
                                        <div class="row">
                                            <div class="col-md-4"> <img src="../../assets/images/big/img1.jpg" alt="" class="img-fluid thumbnail mr25"> </div>
                                            <div class="col-md-8"> Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica.
                                                <p>
                                                    <br/> Reprehenderit butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, qui irure terry richardson ex squid.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <pre class="language-html scrollable">
                                    <code>
                                        &lt;ul class=&quot;nav nav-pills m-t-30 m-b-30&quot;&gt;
                                            &lt;li class=&quot; nav-item&quot;&gt; &lt;a href=&quot;#navpills-1&quot; class=&quot;nav-link active&quot; data-toggle=&quot;tab&quot; aria-expanded=&quot;false&quot;&gt;Tab One&lt;/a&gt; &lt;/li&gt;
                                            &lt;li class=&quot;nav-item&quot;&gt; &lt;a href=&quot;#navpills-2&quot; class=&quot;nav-link&quot; data-toggle=&quot;tab&quot; aria-expanded=&quot;false&quot;&gt;Tab Two&lt;/a&gt; &lt;/li&gt;
                                            &lt;li class=&quot;nav-item&quot;&gt; &lt;a href=&quot;#navpills-3&quot; class=&quot;nav-link&quot; data-toggle=&quot;tab&quot; aria-expanded=&quot;true&quot;&gt;Tab Three&lt;/a&gt; &lt;/li&gt;
                                        &lt;/ul&gt;
                                        &lt;div class=&quot;tab-content br-n pn&quot;&gt;
                                            &lt;div id=&quot;navpills-1&quot; class=&quot;tab-pane active&quot;&gt;
                                                &lt;div class=&quot;row&quot;&gt;
                                                    &lt;div class=&quot;col-md-4&quot;&gt; &lt;img src=&quot;../../assets/images/big/img2.jpg&quot; class=&quot;img-fluid thumbnail m-r-15&quot;&gt; &lt;/div&gt;
                                                    &lt;div class=&quot;col-md-8&quot;&gt; Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica.
                                                        &lt;p&gt;
                                                            &lt;br/&gt; Reprehenderit butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, qui irure terry richardson ex squid.&lt;/p&gt;
                                                    &lt;/div&gt;
                                                &lt;/div&gt;
                                            &lt;/div&gt;
                                            &lt;div id=&quot;navpills-2&quot; class=&quot;tab-pane&quot;&gt;
                                                &lt;div class=&quot;row&quot;&gt;
                                                    &lt;div class=&quot;col-md-8&quot;&gt; Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica.
                                                        &lt;p&gt;
                                                            &lt;br/&gt; Reprehenderit butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, qui irure terry richardson ex squid.&lt;/p&gt;
                                                    &lt;/div&gt;
                                                    &lt;div class=&quot;col-md-4&quot;&gt; &lt;img src=&quot;../../assets/images/big/img3.jpg&quot; class=&quot;img-fluid thumbnail mr25&quot;&gt; &lt;/div&gt;
                                                &lt;/div&gt;
                                            &lt;/div&gt;
                                            &lt;div id=&quot;navpills-3&quot; class=&quot;tab-pane&quot;&gt;
                                                &lt;div class=&quot;row&quot;&gt;
                                                    &lt;div class=&quot;col-md-4&quot;&gt; &lt;img src=&quot;../../assets/images/big/img1.jpg&quot; class=&quot;img-fluid thumbnail mr25&quot;&gt; &lt;/div&gt;
                                                    &lt;div class=&quot;col-md-8&quot;&gt; Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica.
                                                        &lt;p&gt;
                                                            &lt;br/&gt; Reprehenderit butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, qui irure terry richardson ex squid.&lt;/p&gt;
                                                    &lt;/div&gt;
                                                &lt;/div&gt;
                                            &lt;/div&gt;
                                        &lt;/div&gt;
                                    </code>
                                </pre>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Nav Pills Tabs</h4>
                                <ul class="nav nav-pills m-t-30 justify-content-end m-b-30">
                                    <li class=" nav-item"> <a href="#navpills2-1" class="nav-link active" data-toggle="tab" aria-expanded="false">Tab One</a> </li>
                                    <li class="nav-item"> <a href="#navpills2-2" class="nav-link" data-toggle="tab" aria-expanded="false">Tab Two</a> </li>
                                    <li class="nav-item"> <a href="#navpills2-3" class="nav-link" data-toggle="tab" aria-expanded="true">Tab Three</a> </li>
                                </ul>
                                <div class="tab-content br-n pn">
                                    <div id="navpills2-1" class="tab-pane active">
                                        <div class="row">
                                            <div class="col-md-4"> <img src="../../assets/images/big/img2.jpg" alt="" class="img-fluid thumbnail m-r-15"> </div>
                                            <div class="col-md-8"> Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica.
                                                <p>
                                                    <br/> Reprehenderit butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, qui irure terry richardson ex squid.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="navpills2-2" class="tab-pane">
                                        <div class="row">
                                            <div class="col-md-8"> Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica.
                                                <p>
                                                    <br/> Reprehenderit butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, qui irure terry richardson ex squid.</p>
                                            </div>
                                            <div class="col-md-4"> <img src="../../assets/images/big/img3.jpg" alt="" class="img-fluid thumbnail mr25"> </div>
                                        </div>
                                    </div>
                                    <div id="navpills2-3" class="tab-pane">
                                        <div class="row">
                                            <div class="col-md-4"> <img src="../../assets/images/big/img1.jpg" alt="" class="img-fluid thumbnail mr25"> </div>
                                            <div class="col-md-8"> Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica.
                                                <p>
                                                    <br/> Reprehenderit butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, qui irure terry richardson ex squid.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <pre class="language-html scrollable">
                                    <code>
                                    &lt;ul class=&quot;nav nav-pills m-t-30 justify-content-end m-b-30&quot;&gt;
                                            &lt;li class=&quot; nav-item&quot;&gt; &lt;a href=&quot;#navpills2-1&quot; class=&quot;nav-link active&quot; data-toggle=&quot;tab&quot; aria-expanded=&quot;false&quot;&gt;Tab One&lt;/a&gt; &lt;/li&gt;
                                            &lt;li class=&quot;nav-item&quot;&gt; &lt;a href=&quot;#navpills2-2&quot; class=&quot;nav-link&quot; data-toggle=&quot;tab&quot; aria-expanded=&quot;false&quot;&gt;Tab Two&lt;/a&gt; &lt;/li&gt;
                                            &lt;li class=&quot;nav-item&quot;&gt; &lt;a href=&quot;#navpills2-3&quot; class=&quot;nav-link&quot; data-toggle=&quot;tab&quot; aria-expanded=&quot;true&quot;&gt;Tab Three&lt;/a&gt; &lt;/li&gt;
                                        &lt;/ul&gt;
                                        &lt;div class=&quot;tab-content br-n pn&quot;&gt;
                                            &lt;div id=&quot;navpills2-1&quot; class=&quot;tab-pane active&quot;&gt;
                                                &lt;div class=&quot;row&quot;&gt;
                                                    &lt;div class=&quot;col-md-4&quot;&gt; &lt;img src=&quot;../../assets/images/big/img2.jpg&quot; class=&quot;img-fluid thumbnail m-r-15&quot;&gt; &lt;/div&gt;
                                                    &lt;div class=&quot;col-md-8&quot;&gt; Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica.
                                                        &lt;p&gt;
                                                            &lt;br/&gt; Reprehenderit butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, qui irure terry richardson ex squid.&lt;/p&gt;
                                                    &lt;/div&gt;
                                                &lt;/div&gt;
                                            &lt;/div&gt;
                                            &lt;div id=&quot;navpills2-2&quot; class=&quot;tab-pane&quot;&gt;
                                                &lt;div class=&quot;row&quot;&gt;
                                                    &lt;div class=&quot;col-md-8&quot;&gt; Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica.
                                                        &lt;p&gt;
                                                            &lt;br/&gt; Reprehenderit butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, qui irure terry richardson ex squid.&lt;/p&gt;
                                                    &lt;/div&gt;
                                                    &lt;div class=&quot;col-md-4&quot;&gt; &lt;img src=&quot;../../assets/images/big/img3.jpg&quot; class=&quot;img-fluid thumbnail mr25&quot;&gt; &lt;/div&gt;
                                                &lt;/div&gt;
                                            &lt;/div&gt;
                                            &lt;div id=&quot;navpills2-3&quot; class=&quot;tab-pane&quot;&gt;
                                                &lt;div class=&quot;row&quot;&gt;
                                                    &lt;div class=&quot;col-md-4&quot;&gt; &lt;img src=&quot;../../assets/images/big/img1.jpg&quot; class=&quot;img-fluid thumbnail mr25&quot;&gt; &lt;/div&gt;
                                                    &lt;div class=&quot;col-md-8&quot;&gt; Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica.
                                                        &lt;p&gt;
                                                            &lt;br/&gt; Reprehenderit butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, qui irure terry richardson ex squid.&lt;/p&gt;
                                                    &lt;/div&gt;
                                                &lt;/div&gt;
                                            &lt;/div&gt;
                                        &lt;/div&gt;
                                    </code>
                                </pre>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- row -->
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Vertical Tabs</h4>
                                <h6 class="card-subtitle">Use default tab with class <code>nav-tabs &amp; tabcontent-border </code></h6>
                                <div class="row">
                                    <div class="col-lg-4 col-xl-3">
                                        <!-- Nav tabs -->
                                        <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                                            <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">Home</a>
                                            <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">Profile</a>
                                            <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">Messages</a>
                                            <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">Settings</a>
                                        </div>
                                    </div>
                                    <div class="col-lg-8 col-xl-9">
                                        <div class="tab-content" id="v-pills-tabContent">
                                            <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">.
                                                <p> Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica.</p>
                                                Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica.
                                            </div>
                                            <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">.
                                                <p> Probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. </p>
                                                <p> Probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. </p>
                                            </div>
                                            <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">.
                                                <p> Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica.</p>
                                                Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica.
                                            </div>
                                            <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">.
                                                <p> Probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- row -->
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