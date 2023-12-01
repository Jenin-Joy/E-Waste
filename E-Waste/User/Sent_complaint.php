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
	if(isset($_POST["btnsub"]))
	{
		$id = $_SESSION['userid'];
		$to = $_POST["txtto"];
		$date = date('Y-m-d');
		$content = $_POST["txtcontent"];
		$ins = "insert into tbl_complaint(cmp_date,cmp_content,user_id,to_status) values('$date','$content','$id','$to')";
		//echo $ins;
		if($con->query($ins))
		{
			echo "<script>alert('Complaint sent Sucessfully...')</script>";
				echo "<script>location.replace('Home.php')</script>";
		}
		else
		{
			echo "<script>alert('Error..!!')</script>";
		}
	}
	?>
<form method="POST"> 
	<div class="progress-table">
<h2 align="center" class="text-heading">Send Complaint</h2>
	<table align="center">
		<tr>
			<th colspan="2" align="center">Complaints</th>
		</tr>
		<tr>
			<td class="table-row"><input type="radio" required="required" name="txtto" value='1'>To Admin &nbsp;
				<input type="radio" required="required" name="txtto" value='2'>To Panchayathe</td>
		</tr>
		<tr>
			<td class="table-row"><textarea name="txtcontent" required="required" autocomplete="off" pattern="[a-zA-Z.,' ]{10,100}" title="Enter Correct Complaint" cols="50" rows="10" placeholder="Enter your complaints"></textarea></td>
		</tr>
		<tr>
			<td colspan="2" align="right"><input type="submit" class="button button-contactForm btn_1 boxed-btn" name="btnsub" value="Send"></td>
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