<!DOCTYPE html>
<html>
<head>
	<div class="container-xxl position-relative bg-white d-flex p-0">
	<title></title>
<?php
session_start();
$id = $_SESSION["panid"];
include("../Connection/Connection.php");
include("Home1.php");
?>
</head>
<body>
	<?php
	if(isset($_POST["btnsub"]))
	{
		$cate = $_POST["txtcatageory"];

			$select = "select * from tbl_catageory where cat_name ='$cate'";
			$result = $con->query($select);
			$count = $result->num_rows;
		if($count>0)
		{
			echo "<script>alert('Catageory is Already Exist')</script>";
		}
		else
		{

			$ins = "insert into tbl_catageory(cat_name) values('$cate')";
			if($con->query($ins))
			{
				echo "<script>alert('Inserted Sucessfully..')</script>";
			echo "<script>location.replace('../Panjayath/Home.php')</script>";
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
		$sel = "select * from tbl_catageory where cat_id=$id";
		//echo $sel;
		 $res = $con->query($sel);
		 $row = $res->fetch_assoc();
		 $catid = $row["cat_id"]; 
		 $cat = $row["cat_name"];
	}

	if(isset($_POST["btnupdate"]))
	{
		$cata = $_POST["txtcatageory"];
		$update = "update tbl_catageory set cat_name = '$cata' where cat_id = $catid ";
		if($con->query($update))
		{
			echo "<script>alert('Updated Sucessfully..')</script>";
			echo "<script>location.replace('../Panjayath/Home.php')</script>";
		}
		else
		{
			echo "<script>alert('Error..!!')</script>";
		}
	}

	if(isset($_GET["delid"]))
	{
		$id = $_GET["delid"];
		$update = "update tbl_catageory set cat_status = '1' where cat_id = $id ";
		if($con->query($update))
		{
			echo "<script>alert('Removed Sucessfully...')</script>";
			echo "<script>location.replace('../Panjayath/Home.php')</script>";
		}
		else
		{
			echo "<script>alert('Error..!!')</script>";
		}
		
	}
	?>
<form method="POST">
	<div class="container-fluid pt-4 px-4">
	<h2 align="center">Add Catageory</h2>
	<div class="bg-light rounded h-100 p-4">
	<table class="table table-hover">
		<tr>
			<td>Catageory</td>
			<td><input type="text" name="txtcatageory" required="required" pattern="[a-zA-Z ]{4,40}" title="Enter Correct Catageory" placeholder="Catageory" value="<?php echo $cat; ?>"></td>
		</tr>
		<tr>
			<td colspan="2" align="center"><input class="btn btn-outline-primary m-2" type="submit" name="btnsub" value="Ok">
				<input type="submit" class="btn btn-outline-primary m-2" name="btnupdate" value="Update"></td>
		</tr>
	</table>
	<br><br>
<table class="table table-hover">
	<tr>
		<td>No</td>
		<td>Catageory</td>
		<td>Action</td>
	</tr>
	<?php
	$sel = "select * from tbl_catageory where cat_status = '0'";
	$result = $con->query($sel);
	if ($result->num_rows!=NULL) {
		$i=0;
		while($row = $result->fetch_assoc())
		{
			$i = $i+1;
			?>
			<tr>
				<td><?php echo $i ; ?></td>
				<td><?php echo $row["cat_name"]; ?></td>
				<td class="btn btn-outline-primary m-2"><a href="Add_catageory.php?upid=<?php echo $row["cat_id"]; ?>">Edit</a></td>
				<td class="btn btn-outline-primary m-2"><a href="Add_catageory.php?delid=<?php echo $row["cat_id"]; ?>">Delete</a></td>
			</tr>
			<?php
		}
	}
	?>
	<tr>
				<td class="btn btn-outline-primary m-2" colspan="5" align="center"><a href="Deleted_catageory.php">Deleted Catageory</a></td>
			</tr>
</table>
</form>
</body>
</div>
</html>