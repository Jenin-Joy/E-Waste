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
		$ward = $_POST["txtward"];

		$sel1 = "select ward_name from tbl_ward where ward_name ='$ward'";
		$res1 = $con->query($sel1);
		$cou1 = $res1->num_rows;

		if($cou1>0)
		{
			echo "<script>alert('Ward is Already Exist')</script>";
		}
		else
		{
			$ins = "insert into tbl_ward(ward_name) values('$ward')";
			if($con->query($ins))
			{
				echo "<script>alert('Inserted Sucessfully..')</script>";
				echo "<script>location.replace('Home.php')</script>";
			}
			else
			{
				echo "<script>alert('Error...!!')</script>";
			}
		}
	}

	if(isset($_GET["upid"]))
	{
		$id = $_GET["upid"];
		$sel = "select * from tbl_ward where ward_id = $id";
		$result = $con->query($sel);
		$row = $result->fetch_assoc();
		$wardid = $row["ward_id"];
		$wname = $row["ward_name"];
	}

	if(isset($_POST["btnupdate"]))
	{
		$ward = $_POST["txtward"];
		$update = "update tbl_ward set ward_name = '$ward' where ward_id = $wardid";
		if($con->query($update))
		{
			echo "<script>alert('Updated Sucessfully..')</script>";
				echo "<script>location.replace('Home.php')</script>";
		}
		else
		{
			echo "<script>alert('Error..!!')</script>";
		}
	}

	if(isset($_GET["delid"]))
	{
		$id = $_GET["delid"];
		$up = "update tbl_ward set ward_status = 1 where ward_id = $id";
		if($con->query($up))
		{
			echo "<script>alert('Removed Sucessfully...')</script>";
				echo "<script>location.replace('Home.php')</script>";
		}
		else
		{
			echo "<script>alert('Error..!!')</script>";
		}
	}
	?>
<form method="POST">
	<div class="container-fluid pt-4 px-4">
	<h2 align="center">Add Ward</h2>
	<div class="bg-light rounded h-100 p-4">
	<table class="table table-hover">
		<tr>
			<td>Ward Name</td>
			<td><input type="text" name="txtward" required="required" pattern="[a-zA-Z0-9 ]{4,7}" title="Enter the correct Ward Name" placeholder="Ward Name" autocomplete="off" value="<?php echo $wname; ?>"></td>
		</tr>
		<tr>
			<td colspan="2" align="center"><input class="btn btn-outline-primary m-2" type="submit" name="btnsub" value="Ok">
				<input class="btn btn-outline-primary m-2" type="submit" name="btnupdate" value="Update"></td>
		</tr>
	</table>
</form>
<br><br>
<table class="table table-hover">
	<tr>
		<td>No</td>
		<td>Ward Name</td>
		<td colspan="2">Action</td>
	</tr>
	<?php
	$sel = "select * from tbl_ward where ward_status = '0'";
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
				<td><?php echo $row["ward_name"]; ?></td>
				<td class="btn btn-outline-primary m-2"><a href="Add_ward.php?upid=<?php echo $row["ward_id"]; ?>">Edit</a></td>
				<td class="btn btn-outline-primary m-2"><a href="Add_ward.php?delid=<?php echo $row["ward_id"]; ?>">Delete</a></td>
			</tr>
			<?php
		}
	}
	?>
			<tr>
				<td class="btn btn-outline-primary m-2" colspan="3"><a href="deleted_ward.php">Deleted Ward</a></td>
			</tr>
</table>
</body>
</html>