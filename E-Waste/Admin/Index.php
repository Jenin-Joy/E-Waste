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
include("../Connection/Connection.php");
session_start();
?>
</head>
<body>
<?php 
	if(isset($_POST["btnsub"]))
	{
		$username = $_POST["txtusname"];
		$password = $_POST["txtpassword"];

		if(($username == "admin")&&($password == "admin"))
		{
			$_SESSION['adminname'] = "admin";
			header("Location:../Admin/Home.php");
		}	
		else
		{
			echo "<script>alert('Invalid Username/Password!!')</script>";
		}
	}

	?>
	 <div class="container-xxl position-relative bg-white d-flex p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->
	
        <div class="container-fluid">
            <div class="row h-100 align-items-center justify-content-center" style="min-height: 100vh;">
                <div class="col-12 col-sm-8 col-md-6 col-lg-5 col-xl-4">
                    <div class="bg-light rounded p-4 p-sm-5 my-4 mx-3">
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <a href="index.php" class="">
                                <h3 class="text-primary"></i>Admin</h3>
                            </a>
                        </div>
                       <form method="POST">
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" name="txtusname" autocomplete="off" required="required" id="txtusname" placeholder="Admin Name">
                            <label for="floatingInput">Admin Name</label>
                        </div>
                        <div class="form-floating mb-4">
                            <input type="password" class="form-control" name="txtpassword" id="txtpassword" required="required" placeholder="Password">
                            <label for="floatingPassword">Password</label>
                        </div>
                        <input type="submit" name="btnsub" class="btn btn-primary py-3 w-100 mb-4" value="Sign In">
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- Sign In End -->
    </div>
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
</html>