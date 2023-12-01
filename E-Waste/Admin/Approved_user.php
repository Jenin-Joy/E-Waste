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
		$con->query($update);
	}
	?>
<form>
	<div class="container-fluid pt-4 px-4">
	<h2 align="center">Approved User</h2>
	<div class="bg-light rounded h-100 p-4">
	<table width="800" class="table table-hover">
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
					<td><a href="mailto:<?php echo $row["user_email"]; ?>"><?php echo $row["user_email"]; ?></a></td>
					<td><?php echo $row["user_address"]; ?></td>
					<td><?php echo $row["ward_name"]; ?></td>
					<td><?php echo $row["user_hno"]; ?></td>
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