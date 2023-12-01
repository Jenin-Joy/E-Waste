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
		$up = "update tbl_worker set worker_status = '0' where worker_id = $id";
		$con->query($up);
		header("Location:../Panjayath/Removed_worker.php");
	}
	?>
<form>
	<div class="container-fluid pt-4 px-4">
	<h2 align="center">Removed Worker</h2>
	<div class="bg-light rounded h-100 p-4">
	<table class="table table-hover">
		<tr>
			<td>No</td>
			<td>Worker Name</td>
			<td>Worker Number</td>
			<td>Action</td>
		</tr>
		<?php
		$sel = "select * from tbl_worker where worker_status = '1'";
		$result = $con->query($sel);
		if($result->num_rows!=NULL)
		{
			$i=0;
			while($row = $result->fetch_assoc())
			{
				$i = $i + 1;
				?>
				<tr>
					<td><?php echo $i; ?></td>
					<td><?php echo $row["worker_name"]; ?></td>
					<td><?php echo $row["worker_contact"]; ?></td>
					<td class="btn btn-outline-primary m-2"><a href="Removed_worker.php?upid=<?php echo $row["worker_id"]; ?>">Restore</a></td>
				</tr>
				<?php
			}
		}
		?>
	</table>
</form>
</body>
</html>