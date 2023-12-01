<!DOCTYPE html>
<html>
<head>
	<title></title>
<?php
include("../Connection/Connection.php");
?>
</head>
<?php include("Template/Header1.php");
	if($_SESSION['username']!=NULL)
	{
		?>
		<body>
	<?php
	$id = $_GET["cpid"];
	$sel = "select user_password from tbl_user where user_id = $id";
	//echo $id;
	$res = $con->query($sel);
	$count = $res->num_rows;
	if($count>'0')
	{
		$row = $res->fetch_assoc();
		$pass = $row["user_password"];
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
				echo "<script>alert('New Password is same to Current Password..!!')</script>";
			}
			else
			{
				if($npass==$cnpass)
				{
					$update = "update tbl_user set user_password = $npass where user_id = $id";
					if($con->query($update))
					{
						echo "<script>alert('Password is Sucessfully Updated..')</script>";
						header("Refresh:0; url=../User/Profile.php");
					}
					else
					{
						echo "<script>alert('Error In Updation..')</script>";
					}
				}
				else
				{
					echo "<script>alert('Error in Confirm Password...!!!')</script>";
				}
			}
		}
		else
		{
			echo "<script>alert('Error in Current Password..!!!')</script>";
		}
	}
	?>
<form method="POST">
	<div class="progress-table">
<h2 align="center" class="text-heading">Change Password</h2>
	<table align="center">
		<tr>
			<td class="table-row"><input type="text" class="single-input" name="txtcurrentpass" required="required" autocomplete="off" pattern="[a-zA-Z0-9@#$&%.]{4,10}" title="Enter password contain minimum 4 charater and symboles @ # $ & % ." placeholder="Current Password"></td>
		</tr>
		<tr>
			<td class="table-row"><input type="text" class="single-input" name="txtnewpassword" required="required" autocomplete="off" pattern="[a-zA-Z0-9@#$&%.]{4,10}" title="Enter password contain minimum 4 charater and symboles @ # $ & % ." placeholder="New Password"></td>
		</tr>
		<tr>
			<td class="table-row"><input type="text" class="single-input" name="txtconfirmpass" required="required" autocomplete="off" pattern="[a-zA-Z0-9@#$&%.]{4,10}" title="Enter password contain minimum 4 charater and symboles @ # $ & % ." placeholder="Confirm Password"></td>
		</tr>
		<tr>
			<td align="center"><input type="submit" class="button button-contactForm btn_1 boxed-btn" name="btnsub" value="Update"></td>
		</tr>
	</table>
	<br><br><br><br><br><br><br>
</div>
</form>
</body>
		<?php
	}
	else
	{
		echo "<script>location.replace('../Guest/Login.php')</script>";
	}
 ?>
<?php include("Template/Footer.php"); ?>
</html>