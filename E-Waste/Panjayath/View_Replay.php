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
	<h2 align="center">View Replay</h2>
	<div class="bg-light rounded h-100 p-4">
	<table width="600" class="table table-hover">
		<tr align="left">
			<th>No</th>
			<th>Name</th>
			<th>Send Date</th>
			<th>Complaint</th>
			<th>Replay Date</th>
			<th>Replay</th>
		</tr>
		<?php 
		$sel = "select * from tbl_complaint c inner join tbl_pajayathe p on c.pajayathe_id = p.pajayathe_id where to_status = '1'";
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
					<td><?php echo $row["cmp_date"]; ?></td>
					<td><?php echo $row["cmp_content"]; ?></td>
					<td><?php $da = $row["cmp_rdate"]; if($da=='0000-00-00') {echo '<span style=color:red>NA</span>';} else {echo $da;} ?></td>
					<td><?php $re = $row["cmp_replay"]; if($re=='NA') {echo '<span style=color:red>NA</span>'; } else {echo $re; } ?></td>
				</tr>
				<?php
			}
		}
		?>
	</table>
</form>
</body>
</html>