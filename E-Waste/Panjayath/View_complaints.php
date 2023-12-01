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
	<h2 align="center">View Complaint</h2>
	<div class="bg-light rounded h-100 p-4">
	<table width="700" class="table table-hover">
		<tr align="left">
			<th>No</th>
			<th>Date</th>
			<th>Complaint</th>
			<th>User Name</th>
			<th>Ward</th>
			<th>House Number</th>
			<th>Action</th>
		</tr>
		<?php
		$sel = "select * from tbl_complaint c inner join tbl_user u on c.user_id=u.user_id inner join tbl_ward w on u.ward_id=w.ward_id where to_status = '2' and cmp_status = '0'";
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
					<td><?php echo $row["cmp_date"]; ?></td>
					<td><?php echo $row["cmp_content"]; ?></td>
					<td><?php echo $row["user_name"]; ?></td>
					<td><?php echo $row["ward_name"]; ?></td>
					<td><?php echo $row["user_hno"]; ?></td>
					<td class="btn btn-outline-primary m-2"><a href="Send_replay.php?rpid=<?php echo $row["cmp_id"]; ?>">Send Replay</a></td>
				</tr>
				<?php
			}
		}
		?>
	</table>
</form>
</body>
</html>