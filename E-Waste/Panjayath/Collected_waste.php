<!DOCTYPE html>
<html>
<head>
	<div class="container-xxl position-relative bg-white d-flex p-0">
	<title></title>
<?php
include("../Connection/Connection.php");
include("Home1.php");
?>
</head>
<body>
<form>
	<div class="container-fluid pt-4 px-4">
	<h2 align="center">Collected Waste</h2>
	<div class="bg-light rounded h-100 p-4">
	<table width="1000" class="table table-hover">
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
			$i = 0; $tot = 0;
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
					<td><?php $st = $row["waste_status"]; if($st=='2') {echo '<span style=color:#009CFF>Collected</span>';} ?></td>
				</tr>
				<?php
				$s = "select sum(waste_content) from tbl_waste where waste_status='2'";
				$re = $con->query($s);
				if($re->num_rows!=NULL)
				{
					while($r = $re->fetch_assoc())
				{
					?>
					<tr>
						<td colspan="7" align="right">Total Waste</td>
						<td colspan="4"><?php echo $r['sum(waste_content)']; ?></td>
					</tr>
					<tr>
						<td colspan="11" align="right"><a href="Report.php">Report</a></td>
					</tr>
					<?php
				}
				}
			}
		}
		?>
	</table>
</form>
</body>
</html>