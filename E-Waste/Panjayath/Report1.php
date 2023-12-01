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
<form>
	<div class="container-fluid pt-4 px-4">
	<h2 align="center">Approved User</h2>
	<div class="bg-light rounded h-100 p-4">
	<table width="700" class="table table-hover">
		<?php 
		$sel1 = "select * from tbl_user u inner join tbl_ward w on u.ward_id=w.ward_id where user_status = '1'";
		$res1 = $con->query($sel1);
		if($res1->num_rows!=NULL)
		{
			$p = 0;
			while($row1 = $res1->fetch_assoc())
			{
				$p = $p+1;
			}
		}
		?>
		<tr>
				<td colspan="6" align="right">Total :</td>
				<th><?php echo $p;?></th>
		</tr>
		<tr>
			<th>No</th>
			<th>Name</th>
			<th>Contact</th>
			<th>Email</th>
			<th>Address</th>
			<th>Ward</th>
			<th>House Number</th>
		</tr>
		<?php 
		$sel = "select * from tbl_user u inner join tbl_ward w on u.ward_id=w.ward_id where user_status = '1'";
		$res = $con->query($sel);
		if($res->num_rows!=NULL)
		{
			$i = 0;
			while($row = $res->fetch_assoc())
			{
				$i = $i+1;
				?>
				<tr>
					<td><?php echo $i; ?></td>
					<td><?php echo $row["user_name"]; ?></td>
					<td><?php echo $row["user_contact"]; ?></td>
					<td><?php echo $row["user_email"]; ?></td>
					<td><?php echo $row["user_address"]; ?></td>
					<td><?php echo $row["ward_name"]; ?></td>
					<td><?php echo $row["user_hno"]; ?></td>
				</tr>
				<?php
			}
		}
		?>
	</table>
</form>
</body>
</html>