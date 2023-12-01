<!DOCTYPE html>
<html lang="en">
<?php
session_start();
?>
<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="../Panjayath/Template/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="../Panjayath/Template/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="../Panjayath/Template/css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="../Panjayath/Template/css/style.css" rel="stylesheet">
    <?php
    session_start();
    ?>
</head>
<script type="text/javascript">
        function preventBack() { window.history.forward(); }
        setTimeout("preventBack()", 0);
        window.onunload = function () { null };
    </script>
    <?php
    if(isset($_SESSION['panid']))
    {
        ?>
        <body>
    <div class="container-xxl position-relative bg-white d-flex p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->

        <!-- Sidebar Start -->
        <div class="sidebar pe-4 pb-3">
            <nav class="navbar bg-light navbar-light">
                <a href="Home.php" class="navbar-brand mx-4 mb-3">
                    <h3 class="text-primary"><i ></i>Panchayath</h3>
                </a>
                <div class="d-flex align-items-center ms-4 mb-4">
                    <div class="position-relative">
                        <img class="rounded-circle" src="../Panjayath/Template/img/user.jpg" alt="" style="width: 40px; height: 40px;">
                        <div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1"></div>
                    </div>
                    <div class="ms-3">
                        <span>Panchayath</span>
                    </div>
                </div>
                <div class="navbar-nav w-100">
                    <a href="Home.php" class="nav-item nav-link active"><i class="fa fa-tachometer-alt me-2"></i>Home</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa fa-th me-2"></i>Add Details</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="Add_catageory.php" class="dropdown-item">Catageory</a>
                            <a href="Add_ward.php" class="dropdown-item">Ward</a>
                            <a href="Add_worker.php" class="dropdown-item">Worker</a>
                        </div>
                        <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa fa-th me-2"></i>User</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="New_users.php" class="dropdown-item">New</a>
                            <a href="Approved_user.php" class="dropdown-item">Approved</a>
                            <a href="Rejected_user.php" class="dropdown-item">Rejected</a>
                        </div>
                        <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa fa-th me-2"></i>Waste</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="View_request.php" class="dropdown-item">Request</a>
                            <a href="Approved_Waste.php" class="dropdown-item">Approved</a>
                            <a href="Collected_waste.php" class="dropdown-item">Collected</a>
                        </div>
                    </div>
                    <a href="Assign_days.php" class="nav-item nav-link"><i class="fa fa-th me-2"></i>Assign Days</a>
                </div>
            </nav>
        </div>
        <!-- Sidebar End -->

         <!-- Content Start -->
        <div class="content">
            <!-- Navbar Start -->
            <nav class="navbar navbar-expand bg-light navbar-light sticky-top px-4 py-0">
                <a href="index.html" class="navbar-brand d-flex d-lg-none me-4">
                    <h2 class="text-primary mb-0"><i class="fa fa-hashtag"></i></h2>
                </a>
                <a href="#" class="sidebar-toggler flex-shrink-0">
                    <i class="fa fa-bars"></i>
                </a>
                <form class="d-none d-md-flex ms-4">
                    <h4 class="text-primary">Welcome <?php echo $_SESSION['panname']; ?></h4>
                </form>
                <div class="navbar-nav align-items-center ms-auto">
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <i class="fa fa-envelope me-lg-2"></i>
                            <span class="d-none d-lg-inline-flex">Complaint</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end bg-light border-0 rounded-0 rounded-bottom m-0">
                            <hr class="dropdown-divider">
                            <a href="View_Replay.php" class="dropdown-item">
                                <div class="d-flex align-items-center">
                                    <div class="ms-2">
                                        <h6 class="fw-normal mb-0">View Replay</h6>
                                    </div>
                                </div>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="View_complaints.php" class="dropdown-item">
                                <div class="d-flex align-items-center">
                                    <div class="ms-2">
                                        <h6 class="fw-normal mb-0">View Complaint</h6>
                                    </div>
                                </div>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="Replayed_Complaint.php" class="dropdown-item">
                                <div class="d-flex align-items-center">
                                    <div class="ms-2">
                                        <h6 class="fw-normal mb-0">Replayed complaint</h6>
                                    </div>
                                </div>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="Sent_Complaint.php" class="dropdown-item">
                                <div class="d-flex align-items-center">
                                    <div class="ms-2">
                                        <h6 class="fw-normal mb-0">Send complaint</h6>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <i class="fa fa-envelope me-lg-2"></i>
                            <span class="d-none d-lg-inline-flex">FeedBack</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end bg-light border-0 rounded-0 rounded-bottom m-0">
                            <a href="Sent_Feedback.php" class="dropdown-item">
                                <h6 class="fw-normal mb-0">FeedBack</h6>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="Sented_feedback.php" class="dropdown-item">
                                <h6 class="fw-normal mb-0">Sended FeedBack</h6>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="View_Feedback.php" class="dropdown-item">
                                <h6 class="fw-normal mb-0">View FeedBack</h6>
                            </a>
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <img class="rounded-circle me-lg-2" src="../Panjayath/Template/img/user.jpg" alt="" style="width: 40px; height: 40px;">
                            <span class="d-none d-lg-inline-flex">Panchayath</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end bg-light border-0 rounded-0 rounded-bottom m-0">
                            <a href="Profile.php" class="dropdown-item">My Profile</a>
                            <a href="logout.php" class="dropdown-item">Log Out</a>
                        </div>
                    </div>
                </div>
            </nav>
            <br>
            <!-- Navbar End -->
            <!-- Content End -->

             <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../Panjayath/Template/lib/chart/chart.min.js"></script>
    <script src="../Panjayath/Template/lib/easing/easing.min.js"></script>
    <script src="../Panjayath/Template/lib/waypoints/waypoints.min.js"></script>
    <script src="../Panjayath/Template/lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="../Panjayath/Template/lib/tempusdominus/js/moment.min.js"></script>
    <script src="../Panjayath/Template/lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="../Panjayath/Template/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="../Panjayath/Template/js/main.js"></script>
</body>
        <?php
    }
    else
    {
        echo "<script>location.replace('../Guest/Login.php')</script>";
    }
    ?>

</html>