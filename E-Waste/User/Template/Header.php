<!DOCTYPE html>
<html class="no-js" lang="zxx">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Environmental</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="manifest" href="site.webmanifest">
    <link rel="shortcut icon" type="image/x-icon" href="../User/Template/assets/img/favicon.ico">

    <!-- CSS here -->
    <link rel="stylesheet" href="../User/Template/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../User/Template/assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="../User/Template/assets/css/slicknav.css">
    <link rel="stylesheet" href="../User/Template/assets/css/flaticon.css">
    <link rel="stylesheet" href="../User/Template/assets/css/progressbar_barfiller.css">
    <link rel="stylesheet" href="../User/Template/assets/css/gijgo.css">
    <link rel="stylesheet" href="../User/Template/assets/css/animate.min.css">
    <link rel="stylesheet" href="../User/Template/assets/css/animated-headline.css">
    <link rel="stylesheet" href="../User/Template/assets/css/magnific-popup.css">
    <link rel="stylesheet" href="../User/Template/assets/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="../User/Template/assets/css/themify-icons.css">
    <link rel="stylesheet" href="../User/Template/assets/css/slick.css">
    <link rel="stylesheet" href="../User/Template/assets/css/nice-select.css">
    <link rel="stylesheet" href="../User/Template/assets/css/style.css">
</head>
<?php 
session_start();
?>
<body>
    <!-- ? Preloader Start -->
    <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                    <img src="../User/Template/assets/img/logo/loder.png" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- Preloader Start -->
    <header>
        <!-- Header Start -->
        <div class="header-area">
            <div class="main-header ">
                <div class="header-bottom  header-sticky">
                    <div class="container-fluid">
                        <div class="row align-items-center">
                            <!-- Logo -->
                            <div class="col-xl-2 col-lg-2">
                                <div class="logo">
                                    <a href="../User/Home.php"><img src="../User/Template/assets/img/logo/logo.png" alt=""></a>
                                </div>
                            </div>
                            <div class="col-xl-10 col-lg-10">
                                <div class="menu-wrapper  d-flex align-items-center justify-content-end">
                                    <!-- Main-menu -->
                                    <div class="main-menu d-none d-lg-block">
                                        <nav>
                                            <ul id="navigation">                                                                                          
                                                
                                                <li><a href="../User/Profile.php">Profile</a></li>
                                                <li><a href="">Waste</a>
                                                    <ul class="submenu">
                                                        <li><a href="Waste_request.php">Request</a></li>
                                                        <li><a href="View_Approval.php">View Approval</a></li>
                                                        <li><a href="Collected_Waste.php">Collected Waste</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="Sent_complaint.php">Complaint</a>
                                                    <ul class="submenu">
                                                        <li><a href="View_replay.php">Replay</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="">Others</a>
                                                    <ul class="submenu">
                                                        <li><a href="View_days.php">Days</a></li>
                                                        <li><a href="View_worker.php">Worker</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="Send_feedback.php">FeedBack</a></li>
                                            </ul>
                                        </nav>
                                    </div>
                                    <!-- Header-btn -->
                                    <div class="header-right-btn d-none d-lg-block ml-20">
                                        <a href="Logout.php" class="btn header-btn">Logout</a>
                                    </div>
                                </div>
                            </div> 
                            <!-- Mobile Menu -->
                            <div class="col-12">
                                <div class="mobile_menu d-block d-lg-none"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Header End -->
    </header>
    <main>
    	
    	<!-- slider Area Start-->
        <div class="slider-area position-relative">
                <!-- Single Slider -->
                <div class="single-slider hero-overly slider-height slider-bg1 d-flex align-items-center">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-8 col-lg-8 col-md-8 col-sm-10">
                                <div class="hero__caption">
                                    <h1 data-animation="fadeInUp" data-delay=".2s">Welcome</h1>
                                    <P data-animation="fadeInUp" data-delay=".4s"><?php echo $_SESSION['username']; ?> </P>
                                    <!-- Hero-btn -->
                                    <div class="hero__btn">
                                        <a href="Waste_request.php" class="hero-btn mb-10"  data-animation="fadeInUp" data-delay=".8s">Request</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


    </main>
    <!-- JS here -->

    <script src="../User/Template/assets/js/vendor/modernizr-3.5.0.min.js"></script>
    <!-- Jquery, Popper, Bootstrap -->
    <script src="../User/Template/assets/js/vendor/jquery-1.12.4.min.js"></script>
    <script src="../User/Template/assets/js/popper.min.js"></script>
    <script src="../User/Template/assets/js/bootstrap.min.js"></script>
    <!-- Jquery Mobile Menu -->
    <script src="../User/Template/assets/js/jquery.slicknav.min.js"></script>

    <!-- Jquery Slick , Owl-Carousel Plugins -->
    <script src="../User/Template/assets/js/owl.carousel.min.js"></script>
    <script src="../User/Template/assets/js/slick.min.js"></script>
    <!-- One Page, Animated-HeadLin -->
    <script src="../User/Template/assets/js/wow.min.js"></script>
    <script src="../User/Template/assets/js/animated.headline.js"></script>
    <script src="../User/Template/assets/js/jquery.magnific-popup.js"></script>

    <!-- Date Picker -->
    <script src="../User/Template/assets/js/gijgo.min.js"></script>
    <!-- Nice-select, sticky -->
    <script src="../User/Template/assets/js/jquery.nice-select.min.js"></script>
    <script src="../User/Template/assets/js/jquery.sticky.js"></script>
    <!-- Progress -->
    <script src="../User/Template/assets/js/jquery.barfiller.js"></script>
    
    <!-- counter , waypoint,Hover Direction -->
    <script src="../User/Template/assets/js/jquery.counterup.min.js"></script>
    <script src="../User/Template/assets/js/waypoints.min.js"></script>
    <script src="../User/Template/assets/js/jquery.countdown.min.js"></script>
    <script src="../User/Template/assets/js/hover-direction-snake.min.js"></script>

    <!-- contact js -->
    <script src="../User/Template/assets/js/contact.js"></script>
    <script src="../User/Template/assets/js/jquery.form.js"></script>
    <script src="../User/Template/assets/js/jquery.validate.min.js"></script>
    <script src="../User/Template/assets/js/mail-script.js"></script>
    <script src="../User/Template/assets/js/jquery.ajaxchimp.min.js"></script>
    
    <!-- Jquery Plugins, main Jquery -->	
    <script src="../User/Template/assets/js/plugins.js"></script>
    <script src="../User/Template/assets/js/main.js"></script>
</body>
</html>