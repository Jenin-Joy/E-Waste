<!DOCTYPE html>
<html>
<head>
	<title></title>
<?php
include("../Connection/Connection.php");
session_start();
?>
</head>
<?php include("Template/Header1.php");
if($_SESSION['username']!=NULL)
{
	?>
	<body>
	<?php
	$id = $_SESSION['userid'];
	$sel = "select * from tbl_user u inner join tbl_ward w on u.ward_id=w.ward_id where user_id = $id";
	//echo $id;
	$res = $con->query($sel);
	$row = $res->fetch_assoc();
	$name = $row["user_name"];
	$contact = $row["user_contact"];
	$email = $row["user_email"];
	$address = $row["user_address"];
	$wardname = $row["ward_name"];
	$hnum = $row["user_hno"];
	$usname = $row["user_username"];
	?>
<form>
	<div class="progress-table">
<h2 align="center" class="text-heading">Profile</h2>
	<table align="center">
		<tr>
			<td class="table-row">Name</td>
			<td><?php echo $name; ?></td>
		</tr>
		<tr>
			<td class="table-row">Contact</td>
			<td><?php echo $contact; ?></td>
		</tr>
		<tr>
			<td class="table-row">Email</td>
			<td><?php echo $email; ?></td>
		</tr>
		<tr>
			<td class="table-row">Address</td>
			<td><?php echo $address; ?></textarea></td>
		</tr>
		<tr>
			<td class="table-row">Ward Name</td>
			<td><?php echo $wardname; ?></td>
		</tr>
		<tr>
			<td class="table-row">House Number</td>
			<td><?php echo $hnum; ?></td>
		</tr>
		<tr>
			<td class="table-row">User Name</td>
			<td><?php echo $usname; ?></td>
		</tr>
		<tr>
			<td align="center" colspan="2"><a href="Edit_profile.php?epid=<?php echo $id; ?>"  class="genric-btn link circle">Edit Profile</a>
				<a href="Change_password.php?cpid=<?php echo $id; ?>"  class="genric-btn link circle">Change Password</a></td>
		</tr>
	</table>
	<br><br>
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