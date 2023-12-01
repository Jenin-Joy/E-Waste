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
		$update = "update tbl_user set user_status = '2' where user_id = $id";
		if($con->query($update))
		{
			echo "<script>alert('User Rejected..')</script>";
			header("Refresh:0");
		}
		else
		{
			echo "<script>alert('Error..')</script>";
		}
	}
	?>
<form>
	<div class="container-fluid pt-4 px-4">
	<h2 align="center">Approved User</h2>
	<div class="bg-light rounded h-100 p-4">
	<table width="700" class="table table-hover">
		<tr>
			<th>No</th>
			<th>Name</th>
			<th>Contact</th>
			<th>Email</th>
			<th>Address</th>
			<th>Ward</th>
			<th>House Number</th>
			<th>Action</th>
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
					<td class="btn btn-outline-primary m-2"><a href="Approved_user.php?upid=<?php echo $row["user_id"]; ?>">Reject</a></td>
				</tr>
				<?php
			}
		}
		?>
		<tr>
			<td colspan="8" align="right"><a href="Report1.php">Report</a></td>
		</tr>
	</table>
</form>
</body>
</html>