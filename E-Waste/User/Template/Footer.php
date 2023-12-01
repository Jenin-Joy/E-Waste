<!DOCTYPE html>
<html class="no-js" lang="zxx">
<?php
include("../Connection/Connection.php");
?>
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
<body>
 <footer>
        <div class="footer-wrapper">
           <!-- Footer Start-->
           <div class="footer-area footer-padding">
               <div class="container ">
                   <div class="row justify-content-between">
                       <div class="col-xl-4 col-lg-3 col-md-8 col-sm-8">
                           <div class="single-footer-caption mb-50">
                               <div class="single-footer-caption mb-30">
                                   <!-- logo -->
                                   <div class="footer-logo mb-35">
                                       <a href="Home.php"><img src="../User/Template/assets/img/logo/logo2_footer.png" alt=""></a>
                                   </div>
                                   <div class="footer-tittle">
                                       <div class="footer-pera">
                                           <p>Save Nature Save Our Self....</p>
                                       </div>
                                   </div>
                                   <!-- social -->
                                   <div class="footer-social">
                                       <a href="https://twitter.com"><i class="fab fa-twitter"></i></a>
                                       <a href="https://facebook.com"><i class="fab fa-facebook-f"></i></a>
                                       <a href="https://pinterest.com"><i class="fab fa-pinterest-p"></i></a>
                                   </div>
                               </div>
                           </div>
                       </div>
                       <!-- <div class="col-xl-2 col-lg-3 col-md-4 col-sm-4">
                           <div class="single-footer-caption mb-50">
                               <div class="footer-tittle">
                                   <h4>Our solutions</h4>
                                   <ul>
                                       <li><a href="#">Design & creatives</a></li>
                                       <li><a href="#">Telecommunication</a></li>
                                       <li><a href="#">Restaurant</a></li>
                                       <li><a href="#">Programing</a></li>
                                       <li><a href="#">Architecture</a></li>
                                   </ul>
                               </div>
                           </div>
                       </div>
                       <div class="col-xl-2 col-lg-2 col-md-4 col-sm-4">
                           <div class="single-footer-caption mb-50">
                               <div class="footer-tittle">
                                   <h4>Company</h4>
                                   <ul>
                                       <li><a href="#">About</a></li>
                                       <li><a href="#">Review</a></li>
                                       <li><a href="#">Insights</a></li>
                                       <li><a href="#">Carrier</a></li>
                                   </ul>
                               </div>
                           </div>
                       </div> -->
                       <?php
                       $sel = "select * from tbl_pajayathe where pajayathe_status='1'";
                       $res = $con->query($sel);
                       if($res->num_rows!=NULL)
                       {
                       	while($row = $res->fetch_assoc())
                       	{
                       		$name = $row["pajayathe_name"];
                       		$loc = $row["pajayathe_location"];
                       		$dis = $row["pajayathe_district"];
                       		$pin = $row["pajayathe_pincode"];
                       		$pho = $row["pajayathe_contact"]; 
                       	}
                       }
                       ?>
                       <div class="col-xl-3 col-lg-4 col-md-6 col-sm-4">
                           <div class="single-footer-caption mb-50">
                               <div class="footer-tittle">
                                   <h4>Contact us</h4>
                                   <ul>
                                       <li style="color:white"><?php echo $name;?></li>
                                       <li style="color:white"><?php echo $loc;?></li>
                                       <li style="color:white"><?php echo $dis;?></li>
                                       <li style="color:white"><?php echo $pin;?></li>
                                       <li class="number" style="color:white"><?php echo $pho;?></li>
                                   </ul>
                               </div>
                           </div>
                       </div>
                   </div>
               </div>
           </div>
           <!-- footer-bottom area -->
           <div class="footer-bottom-area">
               <div class="container">
                   <div class="footer-border">
                       <div class="row d-flex align-items-center">
                           <div class="col-xl-12 ">
                               <div class="footer-copy-right text-center">
                                 
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
              <!-- Footer End-->
          </div>
      </footer>
      <!-- Scroll Up -->
      <div id="back-top" >
        <a title="Go to Top" href="#"> <i class="fas fa-level-up-alt"></i></a>
    </div>

   
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