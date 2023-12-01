<!DOCTYPE html>
<html>
<head>
	<title></title>
<?php
include("../Connection/Connection.php");
session_start();
?>
</head>
<?php include("../Guest/Template/Header.php"); ?>
<script type="text/javascript">
        function preventBack() { window.history.forward(); }
        setTimeout("preventBack()", 0);
        window.onunload = function () { null };
    </script>
<body>
	<?php 
	if(isset($_POST["btnsub"]))
	{
		$username = $_POST["txtusname"];
		$password = $_POST["txtpassword"];
		

		$pansel = "select * from tbl_pajayathe where pajayathe_username = '$username' and pajayathe_password = '$password'";
		//echo $pansel;
		$panres = $con->query($pansel);
		$pancount = $panres->num_rows;
		if($pancount>0)
		{
			$panrow = $panres->fetch_assoc();
			$panstatus = $panrow["pajayathe_status"];

			$_SESSION['panid'] = $panrow["pajayathe_id"];
			$_SESSION['panname'] = $panrow["pajayathe_name"];
		}

		$usersel = "select * from tbl_user where user_username = '$username' and user_password = '$password'";
		$userres = $con->query($usersel);
		$usercount = $userres->num_rows;
		if($usercount>0)
		{
			$userrow = $userres->fetch_assoc();
			$userstatus = $userrow["user_status"];

			$_SESSION['userid'] = $userrow["user_id"];
			$_SESSION['username'] = $userrow["user_name"];
		}


		if($pancount>0)
		{
			if($panstatus=='0')
			{
				echo "<script>alert('Your Registration is wating for Approval...')</script>";
			}
			elseif($panstatus=='2')
			{
				echo "<script>alert('Your Registration is Rejected...')</script>";
			}
			else
			{
				echo "<script>location.replace('../Panjayath/Home.php')</script>";
			}
		}
		elseif($usercount>0)
		{
			if($userstatus=='0')
			{
				echo "<script>alert('Your Registration is wating for Approval...')</script>";	
			}
			elseif($userstatus=='2')
			{
				echo "<script>alert('Your Registration is Rejected...')</script>";
			}
			else
			{
				echo "<script>location.replace('../User/Home.php')</script>";
			}
		}
		else
		{
			echo "<script>alert('Invalid Username/Password!!')</script>";
		}

	}


	?>
<form method="POST">
	<div class="progress-table">
		<br><br><br><br><br><br><br>
	<table align="center" width="400">
		<tr >
			<td class="table-row">User Name</td>
			<td><input type="text" name="txtusname" class="single-input" autocomplete="off" placeholder="Enter User Name"></td>
		</tr>
		<tr>
			<td class="table-row">Password</td>
			<td align="center"><input type="password" name="txtpassword" class="single-input" placeholder="Enter Password"></td>
		</tr>
		<tr>
			<td align="center" colspan="2"><input type="submit" class="button button-contactForm btn_1 boxed-btn" name="btnsub" value="Login"></td>
		</tr>
		<tr>
			<td colspan="2" align="center">Don't have account..? &nbsp; <a href="New_user.php" style="color: green">Sign Up</a></td>
		</tr>
	</table>
	<br><br><br><br><br><br><br><br><br>
</div>
</form>
</body>
<?php include("../Guest/Template/Footer.php"); ?>
</html>