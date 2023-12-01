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
		$day = $_POST["txtdays"];
		$ward = $_POST["txtwards"];

		$sel1 = "select * from tbl_days where day_name='$day'";
		$res1 = $con->query($sel1);
		$cou1 = $res1->num_rows;

		if($cou1>0)
		{
			echo "<script>alert('Day is Already Exist')</script>";
		}
		else
		{
			$ins  = "insert into tbl_days(day_name,day_desc) values('$day','$ward')";
			if($con->query($ins))
			{
				echo "<script>alert('Inserted..')</script>";
				echo "<script>location.replace('Home.php')</script>";
			}
			else
			{
				echo "<script>alert('Error..')</script>";
			}
		}
	}

	if(isset($_GET["delid"]))
	{
		$i = $_GET["delid"];
		$up = "update tbl_days set day_status='1' where day_id = $i";
		//echo $up;
		if($con->query($up))
		{
			echo "<script>alert('Data Deleted Sucessfully')</script>";
			echo "<script>location.replace('../Panjayath/Home.php')</script>";
		}
	}

	if(isset($_GET["upid"]))
	{
		$id = $_GET["upid"];
		$sel = "select * from tbl_days where day_id = $id";
		$res = $con->query($sel);
		$row = $res->fetch_assoc();
		$dayid = $row["day_id"];
		$dayname = $row["day_name"];
		$daydesc = $row["day_desc"];
	}

	if(isset($_POST["update"]))
	{
		$day = $_POST["txtdays"];
		$ward = $_POST["txtwards"];
		$up = "update tbl_days set day_name = '$day', day_desc = '$ward' where day_id = $dayid";
		//echo $up;
		if($con->query($up))
		{
			echo "<script>alert('Data Updated Sucessfully')</script>";
			echo "<script>location.replace('../Panjayath/Home.php')</script>";
		}
	}
	?>
<form method="POST">
	<div class="container-fluid pt-4 px-4">
	<h2 align="center">Assign Days</h2>
	<div class="bg-light rounded h-100 p-4">
	<table class="table table-hover">
		<tr>
			<td width="80">Wards</td>
			<?php
			$sel1 = "select * from tbl_ward where ward_status='0'";
			$r = $con->query($sel1);
			if($r->num_rows!=NULL)
			{
				$p = 0;
				while($ro = $r->fetch_assoc())
				{
					$p = $p+1;
					?>
						<td><span style=color:red><?php echo $ro["ward_name"]; ?></span></td>
					<?php
				}
			}
			?>
		</tr>
	</table>
	<br><br>
	<table class="table table-hover">
		<tr>
			<td>Day</td>
			<td><input type="text" name="txtdays" required="required" pattern="[a-zA-Z]{6,9}" title="Enter correct day" placeholder="Enter Day" autocomplete="off" value="<?php echo $dayname; ?>"></td>
		</tr>
		<tr>
			<td>Enter Wards</td>
			<td><textarea name="txtwards" required="required"  placeholder="Enter the wards"><?php echo $daydesc; ?></textarea></td>
		</tr>
		<tr>
			<td colspan="2" align="center"><input class="btn btn-outline-primary m-2" type="submit" name="btnsub" value="Ok"><input class="btn btn-outline-primary m-2" type="submit" name="update" value="Update"></td>
		</tr>
	</table>
</form>
<br><br>
<table class="table table-hover">
	<tr>
		<td>No</td>
		<td>Days</td>
		<td>Wards</td>
		<td>Action</td>
	</tr>
	<?php
	$sel = "select * from tbl_days where day_status='0'";
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
				<td><?php echo $row["day_name"]; ?></td>
				<td><?php $de = $row["day_desc"]; if($de=='Leave') {echo "<span style=color:red>Leave</span>"; } else {echo $de; } ?></td>
				<td class="btn btn-outline-primary m-2"><a href="Assign_days.php?upid=<?php echo $row["day_id"]; ?>">Edit</a></td>
				<td class="btn btn-outline-primary m-2"><a href="Assign_days.php?delid=<?php echo $row["day_id"]; ?>">Delete</a></td>
			</tr>
			<?php
		}
	}
	?>
</table>
</body>
</html>