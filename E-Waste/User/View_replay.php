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
	$id = $_SESSION["userid"];
	if(isset($_GET["delid"]))
	{
		$id = $_GET["delid"];
		$delete = "delete from tbl_complaint where cmp_id = $id";
		if($con->query($delete))
		{
			echo "<script>alert('Complaint Deleted Sucessfully...')</script>";
		}
		else
		{
			echo "<script>alert('Error...!!')</script>";	
		}
	}
	?>
<form>
	<div class="progress-table">
<h2 align="center" class="text-heading">View Replay</h2>
	<table width="1500" align="center">
		<tr>
			<th colspan="7" align="center">Complaint to Admin</th>
		</tr>
		<tr align="left">
			<th>No</th>
			<th>Date</th>
			<th width="700">Content</th>
			<th>To</th>
			<th>Replay Date</th>
			<th>Replay</th>
			<th>Action</th>
		</tr>
		<?php 
		$sel = "select * from tbl_complaint where to_status = '1' and user_id ='$id'";
		//echo $sel;
		$res = $con->query($sel);
		if($res->num_rows!=NULL)
		{
			$i = 0;
			while($row= $res->fetch_assoc())
			{
				$i = $i + 1;
				?>
				<tr>
					<td><?php echo $i; ?></td>
					<td><?php echo $row["cmp_date"]; ?></td>
					<td><?php echo $row["cmp_content"]; ?></td>
					<td><?php $to = $row["to_status"]; if($to=='1') {echo 'Admin';} ?></td>
					<td><?php $redate = $row["cmp_rdate"]; if($redate=='0000-00-00') {echo '<span style=color:red>NA</span>'; } else {echo $redate; } ?></td>
					<td><?php $re = $row["cmp_replay"]; if($re=='NA') {echo "<span style=color:red>NA</span>"; } else{ echo $re; } ?></td>
					<td><a href="View_replay.php?delid=<?php echo $row["cmp_id"]; ?>" class="genric-btn link circle">Delete</a></td>
				</tr>
				<?php 
			}
		}
		?>
	</table>
<br><br><br><br><br>

	<table width="1500" align="center">
		<tr>
			<th colspan="7" align="center">Complaint to Panchayath</th>
		</tr>
		<tr align="left">
			<th>No</th>
			<th>Date</th>
			<th width="700">Content</th>
			<th>To</th>
			<th>Replay Date</th>
			<th>Replay</th>
			<th>Action</th>
		</tr>
		<?php
		$sel1 = "select * from tbl_complaint where to_status = '2' and user_id ='$id'";
		//echo $sel1;
		$res1 = $con->query($sel1);
		if($res1->num_rows!=NULL)
		{
			$p = 0;
			while($row = $res1->fetch_assoc())
			{
				$p = $p + 1;
				?>
				<tr>
					<td><?php echo $p; ?></td>
					<td><?php echo $row["cmp_date"]; ?></td>
					<td><?php echo $row["cmp_content"]; ?></td>
					<td><?php $tos = $row["to_status"]; if($tos=='2') {echo 'Panchayathe'; } ?></td>
					<td><?php $rda = $row["cmp_rdate"]; if($rda=='0000-00-00') {echo '<span style=color:red>NA</span>'; } else {echo $rda; } ?></td>
					<td><?php $re = $row["cmp_replay"]; if($re=='NA') {echo "<span style=color:red>NA</span>"; } else{ echo $re; } ?></td>
					<td><a href="View_replay.php?delid=<?php echo $row["cmp_id"]; ?>" class="genric-btn link circle">Delete</a></td>
				</tr>
				<?php
			}
		}
		?>
	</table>
	<br><br><br><br><br><br><br><br>
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