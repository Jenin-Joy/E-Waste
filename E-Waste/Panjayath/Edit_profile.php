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
	$id = $_GET["epid"];
	$sel = "select * from tbl_pajayathe where pajayathe_id = $id";
	$res = $con->query($sel);
	$row = $res->fetch_assoc();
	$na = $row["pajayathe_name"];
	$contact = $row["pajayathe_contact"];
	$pin = $row["pajayathe_pincode"];
	$dis = $row["pajayathe_district"];
	$loc = $row["pajayathe_location"];

	if(isset($_POST["btnsub"]))
	{
		$name = $_POST["txtname"];
		$number = $_POST["txtnumber"];
		$pincode = $_POST["txtpincode"];
		$dist = $_POST["txtdistrict"];
		$loca = $_POST["txtlocation"];
		$update = "update tbl_pajayathe set pajayathe_name = '$name', pajayathe_contact = '$number', pajayathe_pincode = '$pincode', pajayathe_district = '$dist', pajayathe_location = '$loca' where pajayathe_id = $id ";
		if($con->query($update))
		{
			echo "<script>alert('Updated Sucessfully...')</script>";
			echo "<script>location.replace('../Panjayath/Profile.php')</script>";
		}
		else
		{
			echo "<script>alert('Error in Updation...!!!')</script>";
		}
	}
	?>
<form method="POST">
	<div class="container-fluid pt-4 px-4">
	<h2 align="center">Edit Profile</h2>
	<div class="bg-light rounded h-100 p-4">
	<table class="table table-hover">
		<tr>
			<td>Name</td>
			<td><input type="text" required="required" autocomplete="off" pattern="[a-zA-Z ]{4,100}" title="Enter correct name" name="txtname" value="<?php echo $na; ?>"></td>
		</tr>
		<tr>
			<td>Contact</td>
			<td><input type="text" required="required" autocomplete="off" pattern="[0-9]{10,10}" title="Enter correct number" name="txtnumber" value="<?php echo $contact; ?>"></td>
		</tr>
		<tr>
			<td>Pincode</td>
			<td><input type="number" required="required" autocomplete="off" pattern="[0-9]{6,6}" title="Enter correct pincode" name="txtpincode" value="<?php echo $pin; ?>"></td>
		</tr>
		<tr>
			<td>District</td>
			<td><input type="text" required="required" autocomplete="off" pattern="[a-zA-Z]{5,18}" title="Enter correct District" name="txtdistrict" value="<?php echo $dis; ?>"></td>
		</tr>
		<tr>
			<td>Location</td>
			<td><input type="text" required="required" autocomplete="off" pattern="[a-zA-Z]{4,20}" title="Enter correct Location" name="txtlocation" value="<?php echo $loc; ?>"></td>
		</tr>
		<tr>
			<td  colspan="2" align="center"><input class="btn btn-outline-primary m-2" type="submit" name="btnsub" value="Update"></td>
		</tr>
	</table>
</form>
</body>
</html>