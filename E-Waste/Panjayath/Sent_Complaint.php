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
	if(isset($_POST["btnsub"]))
	{
		$id = $_SESSION["panid"];
		$complaint = $_POST["txtcomplaint"];
		$to = '1';
		$date = date('Y-m-d');
		$ins = "insert into tbl_complaint(cmp_date,cmp_content,pajayathe_id,to_status) values('$date','$complaint','$id','$to')";
		if($con->query($ins))
		{
			echo "<script>alert('Complaint sent sucessfully...')</script>";
				echo "<script>location.replace('Home.php')</script>";
		}
		else
		{
			echo "<script>alert('Error...!!!')</script>";
		}
	}
	?>
<form method="POST">
	<div class="container-fluid pt-4 px-4">
	<h2 align="center">Send Complaint</h2>
	<div class="bg-light rounded h-100 p-4">
	<table class="table table-hover">
		<tr>
			<td><textarea name="txtcomplaint" required="required" autocomplete="off" pattern="[a-zA-Z ]{5,70}" title="Enter Correct Complaint" placeholder="Enter your complaint" cols="50" rows="5"></textarea></td>
		</tr>
		<tr>
			<td align="right"><input class="btn btn-outline-primary m-2" type="submit" name="btnsub" value="Send"></td>
		</tr>
	</table>
</form>
</body>
</html>