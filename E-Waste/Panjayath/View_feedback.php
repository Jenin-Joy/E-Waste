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
	<h2 align="center">View FeedBack</h2>
	<div class="bg-light rounded h-100 p-4">
	<table width="700" class="table table-hover">
		<tr align="left">
			<th>No</th>
			<th>User Name</th>
			<th>Ward</th>
			<th>House Number</th>
			<th>Contact</th>
			<th width="400">FeedBack</th>
			<th>Date</th>
		</tr>
		<?php 
		$sel = "select * from tbl_feedback fe inner join tbl_user us on fe.user_id=us.user_id inner join tbl_ward w on us.ward_id=w.ward_id where to_status = '2'";
		//echo $sel;
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
					<td><?php echo $row["ward_name"] ;?></td>
					<td><?php echo $row["user_hno"]; ?></td>
					<td><?php echo $row["user_contact"]; ?></td>
					<td><?php echo $row["fb_content"]; ?></td>
					<td><?php echo $row["fb_date"]; ?></td>
				</tr>
				<?php
			}
		}
		?>
	</table>
</form>
</body>
</html>