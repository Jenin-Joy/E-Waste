<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>DASHMIN - Bootstrap Admin Template</title>
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
    <link href="../Admin/Template/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="../Admin/Template/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="../Admin/Template/css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="../Admin/Template/css/style.css" rel="stylesheet">
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
    if(isset($_SESSION['adminname']))
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
                    <h3 class="text-primary"> A D M I N</h3>
                </a>
                <div class="d-flex align-items-center ms-4 mb-4">
                    <div class="position-relative">
                        <img class="rounded-circle" src="../Admin/Template/img/user.jpg" alt="" style="width: 40px; height: 40px;">
                        <div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1"></div>
                    </div>
                    <div class="ms-3">
                        <span>Admin</span>
                    </div>
                </div>
                <div class="navbar-nav w-100">
                    <a href="Home.php" class="nav-item nav-link active"><i class="fa fa-tachometer-alt me-2"></i>Home</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa fa-th me-2"></i>Pachayathe</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="Create_Panchayathe.php" class="dropdown-item">Create</a>
                            <a href="Approved_pajayathe.php" class="dropdown-item">Approved</a>
                            <a href="Rejected_panjayathe.php" class="dropdown-item">Rejected</a>
                            <a href="New_panjayathe.php" class="dropdown-item">New</a>
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa fa-th me-2"></i>User</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="Approved_user.php" class="dropdown-item">Approved</a>
                            <a href="Rejected_user.php" class="dropdown-item">Rejected</a>
                        </div>
                    </div>
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
                    <h4 class="text-primary">WELCOME ADMIN</h4>
                </form>
                <form class="d-none d-md-flex ms-4">
                </form>
                <div class="navbar-nav align-items-center ms-auto">
                    <div class="navbar-nav align-items-center ms-auto">
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <i class="fa fa-envelope me-lg-2"></i>
                            <span class="d-none d-lg-inline-flex">Complaint</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end bg-light border-0 rounded-0 rounded-bottom m-0">
                            <a href="View_complaint.php" class="dropdown-item">
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
                                        <h6 class="fw-normal mb-0">Replayed</h6>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="View_feedback.php" class="nav-link dropdown-toggle">
                            <i class="fa fa-bell me-lg-2"></i>
                            <span class="d-none d-lg-inline-flex">FeedBack</span>
                        </a>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="logout.php" class="nav-link dropdown-toggle">
                            <span class="d-none d-lg-inline-flex">Logout</span>
                        </a>
                    </div>
                </div>
            </nav>
            <br>
            <div class="col-sm-12 col-md-6 col-xl-4">
                        <div class="h-100 bg-light rounded p-4">
                            <div class="d-flex align-items-center justify-content-between mb-4">
                                <h6 class="mb-0">Calender</h6>
                            </div>
                            <div id="calender"></div>
                        </div>
                    </div>
                <!-- Navbar End -->
                <!-- Content End -->
        

         <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../Admin/Template/lib/chart/chart.min.js"></script>
    <script src="../Admin/Template/lib/easing/easing.min.js"></script>
    <script src="../Admin/Template/lib/waypoints/waypoints.min.js"></script>
    <script src="../Admin/Template/lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="../Admin/Template/lib/tempusdominus/js/moment.min.js"></script>
    <script src="../Admin/Template/lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="../Admin/Template/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="../Admin/Template/js/main.js"></script>
</body>
        <?php
    }
    else
    {
        echo "<script>location.replace('Index.php')</script>";
    }
    ?>
</html>