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
	if(isset($_POST["btnsub"]))
	{
		$wname = $_POST["txtworkername"];
		$wnum = $_POST["txtcontact"];

		$sel1 = "select * from tbl_worker where worker_name='$wname' and worker_contact=$wnum";
		//echo $sel1;
		$res1 = $con->query($sel1);
		$cou1 = $res1->num_rows;

		if($cou1>0)
		{
			echo "<script>alert('Worker Name or Number is Already Exist')</script>";
		}
		else
		{
			$ins = "insert into tbl_worker(worker_name,worker_contact) values('$wname','$wnum')";
			if($con->query($ins))
			{
				echo "<script>alert('Data Entered Sucessfully..')</script>";
				echo "<script>location.replace('Home.php')</script>";
			}
			else
			{
				echo "<script>alert('Error..!!')</script>";
			}
		}
	}

	if(isset($_GET["upid"]))
	{
		$id = $_GET["upid"];
		$sel = "select * from tbl_worker where worker_id = $id";
		$res = $con->query($sel);
		$row = $res->fetch_assoc();
		$workerid = $row["worker_id"];
		$workern = $row["worker_name"];
		$workerc = $row["worker_contact"];
	}

	if(isset($_POST["update"]))
	{
		$wname = $_POST["txtworkername"];
		$wnum = $_POST["txtcontact"];
		$up = "update tbl_worker set worker_name = '$wname', worker_contact = '$wnum' where worker_id = $workerid ";
		$con->query($up);
		echo "<script>location.replace('Home.php')</script>";
	}

	if(isset($_GET["delid"]))
	{
		$id = $_GET["delid"];
		$up = "update tbl_worker set worker_status = '1' where worker_id = $id";
		$con->query($up);
		echo "<script>location.replace('Home.php')</script>";
	}
	?>
<form method="POST">
	<div class="container-fluid pt-4 px-4">
	<h2 align="center">Add Worker</h2>
	<div class="bg-light rounded h-100 p-4">
	<table class="table table-hover">
		<tr>
			<td>Worker Name</td>
			<td><input type="text" name="txtworkername" required="required" autocomplete="off" pattern="[a-zA-Z ]{4,10}" title="Enter the correct name" placeholder="Worker Name" value="<?php echo $workern; ?>"></td>
		</tr>
		<tr>
			<td>Worker Contact</td>
			<td><input type="text" name="txtcontact" required="required" autocomplete="off" pattern="[0-9]{10,10}" title="Enter correct number" placeholder="Worker Contact" value="<?php echo $workerc; ?>"></td>
		</tr>
		<tr>
			<td colspan="2" align="center"><input class="btn btn-outline-primary m-2" type="submit" name="btnsub" value="Ok"> <input class="btn btn-outline-primary m-2" type="submit" name="update" value="Update"></td>
		</tr>
	</table>
</form>
<br><br>
<table class="table table-hover">
	<tr>
		<td>No</td>
		<td>Worker Name</td>
		<td>Worker Number</td>
		<td colspan="2" align="center">Action</td>
	</tr>
	<?php
	$sel = "select * from tbl_worker where worker_status = '0'";
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
				<td class="btn btn-outline-primary m-2"><a href="Add_worker.php?upid=<?php echo $row["worker_id"]; ?>">Edit</a></td>
				<td class="btn btn-outline-primary m-2"><a href="Add_worker.php?delid=<?php echo $row["worker_id"]; ?>">Delete</a></td>
			</tr>
			<?php
		}
	}
	?>
	<tr>
		<td colspan="5" class="btn btn-outline-primary m-2"><a href="Removed_worker.php">Removed Worker</a></td>
	</tr>
</table>
</body>
</html>