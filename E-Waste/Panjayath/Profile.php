<!DOCTYPE html>
<html>
<head>
	<div class="container-xxl position-relative bg-white d-flex p-0">
	<title></title>
<?php
include("../Connection/Connection.php");
include("Home1.php");
session_start();
?>
</head>
<body>
	<?php
	$id = $_SESSION['panid'];
	$sel = "select * from tbl_pajayathe where pajayathe_id = $id ";
	$res = $con->query($sel);
	$row = $res->fetch_assoc();
	$na = $row["pajayathe_name"];
	$contact = $row["pajayathe_contact"];
	$pin = $row["pajayathe_pincode"];
	$dis = $row["pajayathe_district"];
	$loc = $row["pajayathe_location"];
	?>
<form>
	<div class="container-fluid pt-4 px-4">
	<h2 align="center">Profile</h2>
	<div class="bg-light rounded h-100 p-4">
	<table class="table table-hover">
		<tr>
			<td>Name</td>
			<td><?php echo $na; ?></td>
		</tr>
		<tr>
			<td>Contact</td>
			<td><?php echo $contact; ?></td>
		</tr>
		<tr>
			<td>Pincode</td>
			<td><?php echo $pin; ?></td>
		</tr>
		<tr>
			<td>District</td>
			<td><?php echo $dis; ?></td>
		</tr>
		<tr>
			<td>Location</td>
			<td><?php echo $loc; ?></td>
		</tr>
		<tr>
			<td class="btn btn-outline-primary m-2"><a href="Edit_profile.php?epid=<?php echo $id; ?>">Edit Profile</a></td>
			<td class="btn btn-outline-primary m-2"><a href="Change_password.php?cpid=<?php echo $id; ?>">Change password</a></td>
		</tr>
	</table>
</form>
</body>
</html>