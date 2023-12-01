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
<form method="POST">
	<div class="container-fluid pt-4 px-4">
	<h2 align="center">Report</h2>
	<div class="bg-light rounded h-100 p-4">
	<table width="700" class="table table-hover">
		<?php 
		$sel = "select * from tbl_user u inner join tbl_ward w on u.ward_id=w.ward_id ";
		$res = $con->query($sel);
		if($res->num_rows!=NULL)
		{
			$a = 0;
			while($row = $res->fetch_assoc())
			{
				$a = $a+1;
			}
		}
		?>
		<tr>
			<td colspan="7" align="right">Total</td>
			<th style="color: black"><?php echo $a;?></th>
		</tr>
		<?php 
		$sel = "select * from tbl_user u inner join tbl_ward w on u.ward_id=w.ward_id where user_status = '1'";
		$res = $con->query($sel);
		if($res->num_rows!=NULL)
		{
			$b = 0;
			while($row = $res->fetch_assoc())
			{
				$b = $b+1;
			}
		}
		?>
		<tr>
			<td colspan="7" align="right">Approved</td>
			<th style="color: #009CFF"><?php echo $b;?></th>
		</tr>
		<?php 
		$sel = "select * from tbl_user u inner join tbl_ward w on u.ward_id=w.ward_id where user_status = '2'";
		$res = $con->query($sel);
		if($res->num_rows!=NULL)
		{
			$c = 0;
			while($row = $res->fetch_assoc())
			{
				$c = $c+1;
			}
		}
		?>
		<tr>
			<td colspan="7" align="right">Rejected</td>
			<th style="color: red"><?php echo $c;?></th>
		</tr>
		<tr>
			<th>No</th>
			<th>Name</th>
			<th>Contact</th>
			<th>Email</th>
			<th width="400">Address</th>
			<th>Ward</th>
			<th>House Number</th>
			<th>Action</th>
		</tr>
		<?php 
		$sel = "select * from tbl_user u inner join tbl_ward w on u.ward_id=w.ward_id  ";
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
					<td><?php $st = $row["user_status"]; if($st==0) {echo "<span style=color:black>Waiting</span>"; } elseif($st==1) {echo "<span style=color:#009CFF>Approved</span>"; } else {echo "<span style=color:red>Rejected</span>"; } ?></td>
				</tr>
				<?php
			}
		}
		?>
	</table>
</form>
</body>
</html>