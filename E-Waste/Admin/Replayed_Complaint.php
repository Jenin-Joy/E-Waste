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
	<h2 align="center">Replayed Complaint</h2>
	<div class="bg-light rounded h-100 p-4">
	<table width="800" class="table table-hover">
		<tr>
			<h3 colspan="7">User Complaint</h3>
		</tr>
		<tr align="left">
			<th>No</th>
			<th>Name</th>
			<th>Contact</th>
			<th>Email</th>
			<th>Date</th>
			<th>Complaint</th>
			<th>Replay Date</th>
		</tr>
		<?php 
		$sel = "select * from tbl_complaint c inner join tbl_user u on c.user_id=u.user_id where to_status ='1'and cmp_status = '1'";
		$res = $con->query($sel);
		if($res->num_rows!=NULL)
		{
			$i = 0;
			while($row = $res->fetch_assoc())
			{
				$i =$i + 1;
				?>
				<tr>
					<td><?php echo $i; ?></td>
					<td><?php echo $row["user_name"]; ?></td>
					<td><?php echo $row["user_contact"]; ?></td>
					<td><a href="mailto:<?php echo $row["user_email"]; ?>"><?php echo $row["user_email"]; ?></td>
					<td><?php echo $row["cmp_date"]; ?></td>
					<td><?php echo $row["cmp_content"]; ?></td>
					<td><?php echo $row["cmp_rdate"]; ?></td>
				</tr>
				<?php
			}
		}
		?>
	</table>
	<br><br><br><br>
	<table width="800" class="table table-hover">
		<tr>
			<h3 colspan="9">Panchayath Complaint</h3>
		</tr>
		<tr align="left">
			<th>No</th>
			<th>Name</th>
			<th>Contact</th>
			<th>Pincode</th>
			<th>District</th>
			<th>Location</th>
			<th>Date</th>
			<th>Complaint</th>
			<th>Replay Date</th>
		</tr>
		<?php 
		$sel1 = "select * from tbl_complaint c inner join tbl_pajayathe p on c.pajayathe_id=p.pajayathe_id where to_status ='1'and cmp_status = '1'";
		//echo $sel1;
		$res1 = $con->query($sel1);
		if($res1->num_rows!=NULL)
		{
			$p = 0;
			while($row1 = $res1->fetch_assoc())
			{
				$p =$p + 1;
				?>
				<tr>
					<td><?php echo $p; ?></td>
					<td><?php echo $row1["pajayathe_name"]; ?></td>
					<td><?php echo $row1["pajayathe_contact"]; ?></td>
					<td><?php echo $row1["pajayathe_pincode"]; ?></td>
					<td><?php echo $row1["pajayathe_district"]; ?></td>
					<td><?php echo $row1["pajayathe_location"]; ?></td>
					<td><?php echo $row1["cmp_date"]; ?></td>
					<td><?php echo $row1["cmp_content"]; ?></td>
					<td><?php echo $row1["cmp_rdate"]; ?></td>
				</tr>
				<?php
			}
		}
		?>
	</table>
</div></div>
</form>
</body>
</div>
</html>