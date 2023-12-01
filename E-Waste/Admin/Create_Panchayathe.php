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
	if(isset($_POST["btnsub"]))
	{
		$pname = $_POST["txtname"];
		$pcontact = $_POST["txtnumber"];
		$ppincode = $_POST["txtpincode"];
		$pdistrict = $_POST["txtdistrict"];
		$plocation = $_POST["txtlocation"];
		$pusname = $_POST["txtusername"];
		$ppass = $_POST["txtpassword"];
		$pcpass = $_POST["txtrepassword"];
		if($ppass == $pcpass)
		{
			$ins = "insert into tbl_pajayathe(pajayathe_name,pajayathe_contact,pajayathe_pincode,pajayathe_district,pajayathe_location,pajayathe_username,pajayathe_password,pajayathe_status) values('$pname','$pcontact','$ppincode','$pdistrict','$plocation','$pusname','$ppass','1')";
			if($con->query($ins))
			{
				echo "<script>alert('Sucessfully Registered...')</script>";
				echo "<script>location.replace('../Admin/Home.php')</script>";
			}
			else
			{
				echo "<script>alert('Error in Registration')</script>";
			}

		}
		else
		{
			echo "<script>alert('Error in password..!')</script>";
		}

	}
	?>
<form method="POST">
	<div class="container-fluid pt-4 px-4">
	<h2 align="center">Panchayath Registration</h2>
	<div class="bg-light rounded h-100 p-4">
	<table class="table table-hover">
		<tr>
			<td>Panchayathe Name</td>
			<td><input type="text" name="txtname" required="required" autocomplete="off" pattern="[a-zA-Z ]{4,100}" title="Enter Only Alphabets. Enter minimum 4 charater" placeholder="Panchayathe Name" value="<?php echo $pname; ?>"></td>
		</tr>
		<tr>
			<td>Panchayathe Contact Number</td>
			<td><input type="text" name="txtnumber" required="required" autocomplete="off" pattern="[0-9]{10,10}" title="Enter Correct number" placeholder="Contact Number" value="<?php echo $pcontact; ?>"></td>
		</tr>
		<tr>
			<td>Panchayathe Pincode</td>
			<td><input type="text" name="txtpincode" required="required" autocomplete="off" pattern="[0-9]{6,6}" title="Enter correct Pincode" placeholder="Panchayathe Pincode" value="<?php echo $ppincode; ?>"></td>
		</tr>
		<tr>
			<td>Panchayathe District</td>
			<td><input type="text" name="txtdistrict" required="required" autocomplete="off" pattern="[a-zA-Z]{5,18}" title="Enter Correct District Name" placeholder="Panchayathe District" value="<?php echo $pdistrict; ?>"></td>
		</tr>
		<tr>
			<td>Panchayathe Location</td>
			<td><input type="text" name="txtlocation" required="required" autocomplete="off" pattern="[a-zA-Z]{4,20}" title="Enter Place with minimum  4 charater" placeholder="Panchayathe Location" value="<?php echo $plocation; ?>"></td>
		</tr>
		<tr>
			<td>Panchayathe User Name</td>
			<td><input type="text" name="txtusername" required="required" autocomplete="off" pattern="[a-zA-Z0-9 ]{4,20}" title="Enter user name with minimum  4 charater" placeholder="Panchayathe User Name" value="<?php echo $pusname; ?>"></td>
		</tr>
		<tr>
			<td>Password</td>
			<td><input type="password" name="txtpassword" required="required" autocomplete="off" pattern="[a-zA-Z0-9@#$&%.]{4,10}" title="Enter password contain minimum 4 charater and symboles @ # $ & % ." placeholder="Password" value="<?php echo $ppass; ?>"></td>
		</tr>
		<tr>
			<td>Confirm Password</td>
			<td><input type="password" name="txtrepassword" required="required" autocomplete="off" pattern="[a-zA-Z0-9@#$&%.]{4,10}" title="Enter password contain minimum 4 charater and symboles @ # $ & % ."  placeholder="Confirm Password" value="<?php echo $pcpass; ?>"></td>
		</tr>
		<tr>
			<td colspan="2" align="center"><input type="submit" name="btnsub" value="Register" class="btn btn-outline-primary m-2">
				<input type="reset" name="btnreset" value="Reset" class="btn btn-outline-primary m-2"></td>
		</tr>
	</table>
</div></div>
</form>
</body>
</div>
</html>