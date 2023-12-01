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
		$up = "update tbl_ward set ward_status = '0' where ward_id = $id";
		if($con->query($up))
		{
			echo "<script>alert('Updated Sucessfully..')</script>";
			header("Refresh:0, url=../Panjayath/Home.php");
		}
		else
		{
			echo "<script>alert('Error..!!')</script>";
		}
	}
	?>
<form>
	<div class="container-fluid pt-4 px-4">
	<h2 align="center">Deleted Ward</h2>
	<div class="bg-light rounded h-100 p-4">
	<table class="table table-hover">
		<tr>
			<td>No</td>
			<td>Deleted Ward</td>
			<td>Action</td>
		</tr>
		<?php
		$sel = "select * from tbl_ward where ward_status = '1'";
		$result = $con->query($sel);
		if($result->num_rows!=NULL)
		{
			$i = 0;
			while($row = $result->fetch_assoc())
			{
				$i = $i + 1;
				?>
				<tr>
					<td><?php echo $i; ?></td>
					<td><?php echo $row["ward_name"]; ?></td>
					<td class="btn btn-outline-primary m-2"><a href="deleted_ward.php?upid=<?php echo $row["ward_id"]; ?>">Restore</a></td>
				</tr>
				<?php
			}
		}
		?>
	</table>
</form>
</body>
</html>