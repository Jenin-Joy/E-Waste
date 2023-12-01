<!DOCTYPE html>
<html>
<head>
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
		$id = $_GET["rpid"];
		$date = date('Y-m-d');
		$replay = $_POST["txtreplay"];
		$update = "update tbl_complaint set cmp_rdate = '$date', cmp_status = '1', cmp_replay = '$replay' where cmp_id = '$id'";
		if($con->query($update))
		{
			echo "<script>alert('Replay send Sucessfully...')</script>";
				echo "<script>location.replace('View_complaint.php')</script>";
		}
	}
	?>
<form method="POST">
	<div class="container-fluid pt-4 px-4">
	<h2 align="center">Replay</h2>
	<div class="bg-light rounded h-100 p-4">
	<table class="table table-hover">
		<tr>
			<td><textarea name="txtreplay" placeholder="Replay.." cols="50" rows="5"></textarea></td>
		</tr>
		<tr>
			<td align="right" ><input type="submit" class="btn btn-outline-primary m-2" name="btnsub" value="Send"></td>
		</tr>
	</table>
</div>
</div>
</form>
</body>
</html>