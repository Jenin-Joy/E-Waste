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
<form>
	<div class="progress-table">
<h2 align="center" class="text-heading">View Worker</h2>
	<table align="center" width="300">
		<tr>
			<th>No</th>
			<th>Worker Name</th>
			<th>Contact</th>
		</tr>
		<?php 
		$sel = "select * from tbl_worker where worker_status = '0'";
		$res = $con->query($sel);
		if($res->num_rows!=NULL)
		{
			$i = 0;
			while($row = $res->fetch_assoc())
			{
				$i = $i + 1;
				?>
				<tr>
					<td><?php echo $i; ?></td>
					<td><?php echo $row["worker_name"]; ?></td>
					<td><?php echo $row["worker_contact"]; ?></td>
				</tr>
				<?php
			}
		}
		?>
	</table>
	<br><br><br><br><br><br><br><br><br><br><br><br>
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