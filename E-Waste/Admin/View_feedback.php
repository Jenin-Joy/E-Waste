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
		<table width="500" class="table table-hover">
		<tr>
			<h3 colspan="4">User FeedBack</h3>
		</tr>
		<tr align="left">
			<th>No</th>
			<th>Date</th>
			<th>FeedBack</th>
			<th>User Name</th>
		</tr>
		<?php 
		$sel = "select * from tbl_feedback f inner join tbl_user u on f.user_id=u.user_id where to_status = '1'";
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
					<td><?php echo $row["fb_date"]; ?></td>
					<td><?php echo $row["fb_content"]; ?></td>
					<td><?php echo $row["user_name"]; ?></td>
				</tr>
				<?php
			}
		}
		?>
	</table>
	<br><br><br><br>
	<table width="500" class="table table-hover">
		<tr>
			<h3 colspan="4">Panchayath FeedBack</h3>
		</tr>
		<tr align="left">
			<th>No</th>
			<th>Date</th>
			<th>FeedBack</th>
			<th>Panchayath Name</th>
		</tr>
		<?php 
		$sel1 = "select * from tbl_feedback f inner join tbl_pajayathe p on f.pajayathe_id=p.pajayathe_id where to_status = '1'";
		$res1 = $con->query($sel1);
		if($res1->num_rows!=NULL)
		{
			$p = 0;
			while($row1 = $res1->fetch_assoc())
			{
				$p = $p + 1;
				?>
				<tr>
					<td><?php echo $p; ?></td>
					<td><?php echo $row1["fb_date"]; ?></td>
					<td><?php echo $row1["fb_content"]; ?></td>
					<td><?php echo $row1["pajayathe_name"]; ?></td>
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