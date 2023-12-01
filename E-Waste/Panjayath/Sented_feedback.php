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
	<table width="800" class="table table-hover">
		<tr align="left">
			<th>No</th>
			<th>Panchayath Name</th>
			<th>FeedBack</th>
			<th>Date</th>
		</tr>
		<?php 
		$sel = "select * from tbl_feedback fe inner join tbl_pajayathe p on fe.pajayathe_id=p.pajayathe_id where to_status = '1'";
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
					<td><?php echo $row["pajayathe_name"]; ?></td>
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