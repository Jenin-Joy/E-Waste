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
<h2 align="center" class="text-heading"> Waste</h2>
	<table width="1400" align="center">
		<tr align="left">
			<th>No</th>
			<th>Name</th>
			<th>Ward</th>
			<th>Contact</th>
			<th>Address</th>
			<th>Catageory</th>
			<th>Waste Date</th>
			<th>Content</th>
			<th>Approved Date</th>
			<th>Collected Date</th>
			<th>Status</th>
		</tr>
		<?php
		$sel = "select * from tbl_waste w inner join tbl_catageory c on w.cat_id=c.cat_id inner join tbl_user us on w.user_id=us.user_id inner join tbl_ward wa on us.ward_id=wa.ward_id where waste_status = '2'";
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
					<td><?php echo $row["user_name"]; ?></td>
					<td><?php echo $row["ward_name"]; ?></td>
					<td><?php echo $row["user_contact"]; ?></td>
					<td><?php echo $row["user_address"]; ?></td>
					<td><?php echo $row["cat_name"]; ?></td>
					<td><?php echo $row["waste_date"]; ?></td>
					<td><?php echo $row["waste_content"]; ?></td>
					<td><?php echo $row["waste_adate"]; ?></td>
					<td><?php echo $row["waste_cdate"]; ?></td>
					<td><?php $st = $row["waste_status"]; if($st=='2') {echo '<span style=color:green>Collected</span>';} ?></td>
				</tr>
				<?php
			}
		}
		?>
	</table>
	<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
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