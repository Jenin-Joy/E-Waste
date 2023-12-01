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
		$update = "update tbl_user set user_status ='1' where user_id = $id";
		if($con->query($update))
		{
			echo "<script>alert('Approved Sucessfully')</script>";
			echo "<script>location.replace('Home.php')</script>";
		}
	}

	if(isset($_GET["delid"]))
	{
		$id = $_GET["delid"];
		$update = "update tbl_user set user_status ='2' where user_id = $id";
		if($con->query($update))
		{
			echo "<script>alert('Rejected Sucessfully')</script>";
			echo "<script>location.replace('Home.php')</script>";
		}
	}
	?>
<form method="POST">
	<div class="container-fluid pt-4 px-4">
	<h2 align="center">New Users</h2>
	<div class="bg-light rounded h-100 p-4">
	<table width="700" class="table table-hover">
		<tr>
			<td colspan="8" align="right"><a href="Report2.php">Report</a></td>
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
		$sel = "select * from tbl_user u inner join tbl_ward w on u.ward_id=w.ward_id where user_status = '0'";
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
					<td class="btn btn-outline-primary m-2"><a href="New_users.php?upid=<?php echo $row["user_id"]; ?>">Approved</a></td>
					<td class="btn btn-outline-primary m-2"><a href="New_users.php?delid=<?php echo $row["user_id"]; ?>">Reject</a></td>
				</tr>
				<?php
			}
		}
		?>
	</table>
</form>
</body>
</html>