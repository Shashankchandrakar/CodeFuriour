<?php
    session_start();
?>  
<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <title>CodeFuriour</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" type="image/png" href="favicon.ico">

        <!--Google Font link-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Raleway:400,600,700" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">


        <link rel="stylesheet" href="assets/css/slick.css">
        <link rel="stylesheet" href="assets/css/slick-theme.css">
        <link rel="stylesheet" href="assets/css/animate.css">
        <link rel="stylesheet" href="assets/css/fonticons.css">
        <link rel="stylesheet" href="assets/css/font-awesome.min.css">
        <link rel="stylesheet" href="assets/css/bootstrap.css">
        <link rel="stylesheet" href="assets/css/magnific-popup.css">
        <link rel="stylesheet" href="assets/css/bootsnav.css">


        <!--For Plugins external css-->
        <!--<link rel="stylesheet" href="assets/css/plugins.css" />-->

        <!--Theme custom css -->
        <link rel="stylesheet" href="assets/css/style.css">
        <!--<link rel="stylesheet" href="assets/css/colors/maron.css">-->

        <!--Theme Responsive css-->
        <link rel="stylesheet" href="assets/css/responsive.css" />

        <script src="assets/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
    </head>

    <body data-spy="scroll" data-target=".navbar-collapse">


        <!-- Preloader -->
        <div id="loading">
            <div id="loading-center">
                <div id="loading-center-absolute">
                    <div class="object" id="object_one"></div>
                    <div class="object" id="object_two"></div>
                    <div class="object" id="object_three"></div>
                    <div class="object" id="object_four"></div>
                </div>
            </div>
        </div><!--End off Preloader -->


        <div >
            <!--Home page style-->


            <nav class="navbar navbar-default navbar-sticky bootsnav">
                <!-- Start Top Search -->
                <div class="top-search">
                    <div class="container">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-search"></i></span>&nbsp;&nbsp;&nbsp;
                            <input type="text" class="form-control" placeholder="Search">
                            <span class="input-group-addon close-search"><i class="fa fa-times"></i></span>
                        </div>
                    </div>
                </div>
                <!-- End Top Search -->
       
                    <!-- End Atribute Navigation -->

                    <!-- Start Header Navigation -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                            <i class="fa fa-bars"></i>
                        </button>
                        <a class="navbar-brand" href="index.php">

                            <!--div style="background-color:white;font-size:25px;" class="logo logo-display m-top-10" >Code Furiour</div-->
                            <div class="logo logo-scrolled" style="font-size: 25px;padding-top: 0.5em;">Code Furiour</div>

                        </a>
                    </div>
                    <!-- End Header Navigation -->

<?php if( isset( $_SESSION['email'] ) ): ?>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div id="navbar-menu">
                        <ul class="nav navbar navbar-nav navbar-right custom-ul-nav" data-in="fadeInDown" data-out="fadeOutUp" id="custom-nav">
                            <li><a href="curatedtracks.php">CuratedTracks</a></li>                    
                            <li><a href="#about">Courses</a></li>                    
                            <li><a href="#service">Feedback</a></li>                    
                            <li><a href="#portfolio"><?php echo $_SESSION['name']?></a></li>                    
                            <li><a href="logout.php">Logout</a></li>                    
                              
                        </ul>
                    </div><!-- /.navbar-collapse -->
                </div> 
 
<?php else: ?>
    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div id="navbar-menu">
                        <ul class="nav navbar navbar-nav navbar-right custom-ul-nav" data-in="fadeInDown" data-out="fadeOutUp" id="custom-nav">                   
                            <li><a href="signup.php">Sign Up</a></li>                    
                            <li><a href="login.php">Login</a></li>                    
                              
                        </ul>
                    </div><!-- /.navbar-collapse -->
                </div>
<?php endif; ?>
<!-- Start Side Menu -->
                <div class="side">
                    <a href="#" class="close-side"><i class="fa fa-times"></i></a>
                    <div class="widget">
                        <h6 class="title">Custom Pages</h6
                        <ul class="link">
                            <li><a href="#">About</a></li>
                            <li><a href="#">Services</a></li>
                            <li><a href="#">Blog</a></li>
                            <li><a href="#">Portfolio</a></li>
                            <li><a href="#">Contact</a></li>
                        </ul>
                    </div>
                    <div class="widget">
                        <h6 class="title">Additional Links</h6>
                        <ul class="link">
                            <li><a href="#">Retina Homepage</a></li>
                            <li><a href="#">New Page Examples</a></li>
                            <li><a href="#">Parallax Sections</a></li>
                            <li><a href="#">Shortcode Central</a></li>
                            <li><a href="#">Ultimate Font Collection</a></li>
                        </ul>
                    </div>
                </div>
                <!-- End Side Menu -->

            </nav>


