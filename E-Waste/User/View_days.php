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
<h2 align="center" class="text-heading">View Days</h2>
	<table width="300" align="center">
		<tr>
			<th>No</th>
			<th>Days</th>
			<th>Wards</th>
		</tr>
		<?php
		$sel = "select * from tbl_days where day_status=0";
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
					<td><?php echo $row["day_name"]; ?></td>
					<td><?php $de = $row["day_desc"]; if($de=='Leave') {echo "<span style=color:red>Leave</span>"; } else {echo $de; } ?></td>
				</tr>
				<?php
			} 
		}
		?>
	</table>
	<br><br><br><br><br><br><br><br><br><br>
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