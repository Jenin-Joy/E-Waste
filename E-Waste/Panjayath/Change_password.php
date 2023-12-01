<!DOCTYPE html>
<html>
<head>
	<div class="container-xxl position-relative bg-white d-flex p-0">
	<title></title>
<?php
include("../Connection/Connection.php");
include("Home1.php");
?>
</head>
<body>
	<?php 
	$id = $_GET["cpid"];
	$sel = "select * from tbl_pajayathe where pajayathe_id = $id";
	$res = $con->query($sel);
	$count = $res->num_rows;
	if($count>'0')
	{
		$row = $res->fetch_assoc();
		$pass = $row["pajayathe_password"];
	}
	//echo $pass;
	if(isset($_POST["btnsub"]))
	{
		$cpass = $_POST["txtcurrentpass"];
		$npass = $_POST["txtnewpassword"];
		$cnpass = $_POST["txtconfirmpass"];

		if($pass==$cpass)
		{
			if($cpass==$npass)
			{
				echo "<script>alert('New Password is same as Current Password..')</script>";
			}
			else
			{
				if($npass==$cnpass)
				{
					$update = "update tbl_pajayathe set pajayathe_password = '$npass' where pajayathe_id = $id";
					if($con->query($update))
					{
						echo "<script>alert('Password Updated Sucessfully...')</script>";
						header("Refresh:0; url=../Panjayath/Profile.php");
					}
					else
					{
						echo "<script>alert('Error in Updation..!!')</script>";
					}
				}
				else
				{
					echo "<script>alert('Error in confirm Password..!!')</script>";
				}
			}
		}
		else
		{
			echo "<script>alert('Error in Current Password..!!')</script>";
		}
	}
	?>
<form method="POST">
	<div class="container-fluid pt-4 px-4">
	<h2 align="center">Change Password</h2>
	<div class="bg-light rounded h-100 p-4">
	<table class="table table-hover">
		<tr>
			<td>Current Password</td>
			<td><input type="text" required="required" autocomplete="off" pattern="[a-zA-Z0-9@#$&%.]{4,10}
				" title="Enter password contain minimum 4 charater and symboles @ # $ & % ." name="txtcurrentpass" placeholder="Current Password"></td>
		</tr>
		<tr>
			<td>New Password</td>
			<td><input type="text" required="required" autocomplete="off" pattern="[a-zA-Z0-9@#$&%.]{4,10}
				" title="Enter password contain minimum 4 charater and symboles @ # $ & % ." name="txtnewpassword" placeholder="New Password"></td>
		</tr>
		<tr>
			<td>Confirm Password</td>
			<td><input type="text" required="required" autocomplete="off" pattern="[a-zA-Z0-9@#$&%.]{4,10}
				" title="Enter password contain minimum 4 charater and symboles @ # $ & % ." name="txtconfirmpass" placeholder="Confirm Password"></td>
		</tr>
		<tr>
			<td colspan="2" align="center"><input class="btn btn-outline-primary m-2" type="submit" name="btnsub" value="Update"></td>
		</tr>
	</table>
</form>
</body>
</html>