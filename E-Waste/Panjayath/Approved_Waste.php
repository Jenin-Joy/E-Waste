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
	if(isset($_GET["apid"]))
	{
		$id = $_GET["apid"];
		$date = date('Y-m-d');
		$update = "update tbl_waste set waste_status = '2', waste_cdate = '$date' where waste_id = $id";
		if($con->query($update))
		{
			echo "<script>alert('Waste Collected..')</script>";
			echo "<script>location.replace('Home.php')</script>";
		}
		else
		{
			echo "<script>alert('Error...!!')</script>";
		}
	}
	?>
<form>
	<div class="container-fluid pt-4 px-4">	
	<h2 align="center">Approved Waste</h2>
	<div class="bg-light rounded h-100 p-4">
	<table width="800" class="table table-hover">
		<tr align="left">
		<th>No</th>
		<th>Name</th>
		<th>Ward</th>
		<th>House Number</th>
		<th>Catageory</th>
		<th>Packets</th>
		<th>Requested Date</th>
		<th>Approved Date</th>
		<th>Action</th>
	</tr>
	<?php
	$sel = "select * from tbl_waste w inner join tbl_user u on w.user_id=u.user_id inner join tbl_ward wa on u.ward_id=wa.ward_id inner join tbl_catageory ca on w.cat_id=ca.cat_id where waste_status='1'";
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
				<td><?php echo $row["user_hno"]; ?></td>
				<td><?php echo $row["cat_name"]; ?></td>
				<td><?php echo $row["waste_content"]; ?></td>
				<td><?php echo $row["waste_date"]; ?></td>
				<td><?php echo $row["waste_adate"]; ?></td>
				<td class="btn btn-outline-primary m-2"><a href="Approved_Waste.php?apid=<?php echo $row["waste_id"]; ?>">Collected</a></td>
			</tr>
			<?php
		}
				$s = "select sum(waste_content) from tbl_waste where waste_status='1'";
				$re = $con->query($s);
				if($re->num_rows!=NULL)
				{
					while($r = $re->fetch_assoc())
				{
					?>
					<tr>
						<td colspan="5" align="right">Total Waste</td>
						<td colspan="4"><?php echo $r['sum(waste_content)']; ?></td>
					</tr>
					<?php
				}
				}
	}
	?>
	</table>
</form>
</body>
</html>