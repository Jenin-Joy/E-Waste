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
	<?php
	if(isset($_GET["upid"]))
	{
		$id = $_GET["upid"];
		$update = "update tbl_pajayathe set pajayathe_status = '1' where pajayathe_id = $id";
		$con->query($update);
	}
	?>
	<form>
		<div class="container-fluid pt-4 px-4">
		<h2 align="center">Rejected Pachayath</h2>
	<div class="bg-light rounded h-100 p-4">
		<table width="1000" class="table table-hover">
			<tr>
				<th>No</th>
				<th>Panchayathe Name</th>
				<th>Panchayathe Contact</th>
				<th>Panchayathe Pincode</th>
				<th>Panchayathe District</th>
				<th>Panchayathe Location</th>
				<th>Action</th>
			</tr>
			<?php 
			$sel = "select * from tbl_pajayathe where pajayathe_status = '2'";
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
						<td><?php echo $row["pajayathe_name"]; ?></td>
						<td><?php echo $row["pajayathe_contact"]; ?></td>
						<td><?php echo $row["pajayathe_pincode"]; ?></td>
						<td><?php echo $row["pajayathe_district"]; ?></td>
						<td><?php echo $row["pajayathe_location"]?></td>
						<td class="btn btn-outline-primary m-2"><a href="Rejected_panjayathe.php?upid=<?php echo $row["pajayathe_id"]; ?>">Re-Approve</a></td>
					</tr>
					<?php
				}
			}
			?>
		</table>
	</div>
</div>
	</form>
</body>
</div>
</html>