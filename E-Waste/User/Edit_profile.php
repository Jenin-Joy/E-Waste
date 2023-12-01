<!DOCTYPE html>
<html>
<head>
	<title></title>
<?php
include("../Connection/Connection.php");
?>
</head>
<?php include("Template/Header1.php"); 
if($_SESSION['username']!=NULL)
{
	?>
	<body>
	<?php 
	$id = $_GET["epid"];
	//echo $id;
	$sel = "select * from tbl_user u inner join tbl_ward w on u.ward_id=w.ward_id where user_id = $id";
	$res = $con->query($sel);
	$count = $res->num_rows;
	if($count>'0')
	{
		$row = $res->fetch_assoc();
		$name = $row["user_name"];
		$contact = $row["user_contact"];
		$email = $row["user_email"];
		$address = $row["user_address"];
		$wardname = $row["ward_name"];
		$wardid = $row["ward_id"];
		$hnum = $row["user_hno"];
		$usname = $row["user_username"];
		//echo $wardid;
	}

	if(isset($_POST["btnsub"]))
	{
		$na = $_POST["txtname"];
		$co = $_POST["txtcontact"];
		$em = $_POST["txtemail"];
		$add = $_POST["txtaddress"];
		$wa = $_POST["txtward"];
		$hname = $_POST["txthousename"];
		$uan = $_POST["txtusername"];
		$update = "update tbl_user set user_name = '$na', user_contact = '$co', user_email = '$em', user_address = '$add', ward_id = '$wa', user_hno = '$hname', user_username = '$uan' where user_id = $id ";
		if($con->query($update))
		{
			echo "<script>alert('Updated Sucessfully...')</script>";
			header("Refresh:0; url=../User/Profile.php");
		}	
		else
		{
			echo "<script>alert('Error In Updation...!!!!')</script>";
		}
	}

	?>
<form method="POST">
	<div class="progress-table">
<h2 align="center" class="text-heading">Edit Profile</h2>
	<table align="center" width="500">
		<tr>
			<td class="table-row">Name</td>
			<td><input type="text" name="txtname" required="required" autocomplete="off" pattern="[a-zA-Z ]{4,20}" title="Enter Correct Name" value="<?php echo $name; ?>"></td>
		</tr>
		<tr>
			<td class="table-row">Contact</td>
			<td><input type="number" name="txtcontact" required="required" autocomplete="off" pattern="[1-9]{10,10}" title="Enter Correct Number" value="<?php echo $contact; ?>"></td>
		</tr>
		<tr>
			<td class="table-row">Email</td>
			<td><input type="email" name="txtemail" required="required" autocomplete="off" pattern="[a-zA-Z@.]{10,25}" title="Enter Correcr Email" value="<?php echo $email; ?>"></td>
		</tr>
		<tr>
			<td class="table-row">Address</td>
			<td><textarea name="txtaddress" required="required" autocomplete="off" pattern="[a-zA-Z ]{5,50}" title="Enter Correct Address" cols="20" rows="4"><?php echo $address; ?></textarea></td>
		</tr>
		<tr>
			<td class="table-row">Ward Name</td>
			<td>
				<select name="txtward" required="required">
					<option >...Select...</option>
					<?php 
					$sel1 = "select * from tbl_ward where ward_status = '0'";
					$res1 = $con->query($sel1);
					if($res1->num_rows!=NULL)
					{
						while($row1 = $res1->fetch_assoc())
						{
							?>
							<option value="<?php echo $row1["ward_id"]; ?>" <?php if($row1["ward_id"] == $row["ward_id"]) { echo "selected";}?>><?php echo $row1["ward_name"];?></option>
							<?php
						}
					}
					?>
				</select>
			</td>
		</tr>
		<tr>
			<td class="table-row">House Number</td>
			<td><input type="text" name="txthousename" required="required" autocomplete="off" pattern="[1-9]{2,3}" title="Enter Correct House Number" value="<?php echo $hnum; ?>"></td>
		</tr>
		<tr>
			<td class="table-row">User Name</td>
			<td><input type="text" name="txtusername" required="required" autocomplete="off" pattern="[a-zA-Z]" title="Enter Correct User Name" value="<?php echo $usname; ?>"></td>
		</tr>
		<tr>
			<td align="center" colspan="2"><input type="submit" class="button button-contactForm btn_1 boxed-btn" name="btnsub" value="Update"></td>
		</tr>
	</table>
</div>
</form>
</body>
	<?php
}
else
{
	echo "<script>location.replace('../Guest/Login.php')</script>";
}
?>
<?php include("Template/Footer.php"); ?>
</html>