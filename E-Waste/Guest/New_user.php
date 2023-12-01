<!DOCTYPE html>
<html>
<head>
	<title></title>
<?php
include("../Connection/Connection.php");
?>
</head>
<?php include("../Guest/Template/Header.php"); ?>
<body>
	<?php
	if(isset($_POST["btnsub"]))
	{
		$name = $_POST["txtname"];
		$contact =$_POST["txtcontact"];
		$email = $_POST["txtemail"];
		$address = $_POST["txtaddress"];
		$ward = $_POST["txtward"];
		$hnum = $_POST["txthousenumber"];
		$usname = $_POST["txtusername"];
		$pass = $_POST["txtpassword"];
		$cpass = $_POST["txtconfirmpassword"];

		$sel = "select user_username from tbl_user where user_username = '$usname'";
		$res = $con->query($sel);
		$count = $res->num_rows;
		//echo $count;
		if($count>0)
		{
			echo "<script>alert('User Name is Already Existed')</script>";
		}
		else
		{
			if($pass == $cpass)
			{
				$ins = "insert into tbl_user(user_name,user_contact,user_email,user_address,ward_id,user_hno,user_username,user_password) values('$name','$contact','$email','$address','$ward','$hnum','$usname','$pass')";
				if($con->query($ins))
				{
					echo "<script>alert('Sucessful')</script>";
				}
				else
				{
					echo "<script>alert('Error..!')</script>";
				}
			}
			else
			{
				echo "<script>alert('Error in Password Confirm Password..!!')</script>";
			}
		}		
	}
	?>
<form method="POST">
	<div class="progress-table">
<h2 align="center" class="text-heading">User Registration</h2>
	<table align="center" width="400">
		<tr>
			<td class="table-row">Name</td>
			<td><input type="text" name="txtname" class="single-input" required="required" autocomplete="off" pattern="[a-zA-Z ]{4,15}" title="Enter Correct name" placeholder="Enter Name"  required="required"></td>
		</tr>
		<tr>
			<td class="table-row">User Contact</td>
			<td><input type="text" name="txtcontact" class="single-input" required="required" autocomplete="off" pattern="[0-9]{10,10}" title="Enter Correct Contact Number" placeholder="Enter Contact" ></td>
		</tr>
		<tr>
			<td class="table-row">User Email</td>
			<td><input type="email" name="txtemail" class="single-input" required="required" autocomplete="off" pattern="[a-zA-Z@.0-9]{9,50}" title="Enter Correct Email" placeholder="Enter Email" ></td>
		</tr>
		<tr>
			<td class="table-row">User Address</td>
			<td><textarea cols="20" rows="4" name="txtaddress" class="single-input" required="required" autocomplete="off" pattern="[a-zA-Z ]{10,50}" title="Enter Correct Address" placeholder="Enter Address"></textarea></td>
		</tr>
			<tr>
				<td class="table-row">Ward</td>
				<td><select name="txtward" class="single-input" required="required" >
					<div style="overflow-y: scroll;">
					<option selected="selected" value="">....Select....</option>
					<?php 
					$sel = "select * from tbl_ward where ward_status = 0";
					$result = $con->query($sel);
					if($result->num_rows!=NULL)
					{
						while($row = $result->fetch_assoc())
						{
							?>
							<option value="<?php echo $row["ward_id"]; ?>"><?php echo $row["ward_name"];?></option></div>
							<?php
						}
					}
					?>
				</select></td>
			</tr>
		<tr>
			<td class="table-row">House Number</td>
			<td><input type="text" name="txthousenumber" class="single-input" required="required" autocomplete="off" pattern="[0-9]{1,2}" title="Enter Correct House Number" placeholder="Enter House Number" ></td>
		</tr>
		<tr>
			<td class="table-row">User Name</td>
			<td><input type="text" name="txtusername" class="single-input" required="required" autocomplete="off" pattern="[a-zA-Z0-9]{4,50}" title="Enter Correct User Name" placeholder="Enter User Name"></td>
		</tr>
		<tr>
			<td class="table-row">Password</td>
			<td><input type="password" name="txtpassword" class="single-input"  required="required" autocomplete="off" pattern="[a-zA-Z0-9@#$&%.]{4,50}" title="Enter password contain minimum 4 charater and symboles @ # $ & % ." placeholder="Enter Password" ></td>
		</tr>
		<tr>
			<td class="table-row">Confirm Password</td>
			<td><input type="password" name="txtconfirmpassword" class="single-input"  required="required" autocomplete="off" pattern="[a-zA-Z0-9@#$&%.]{4,50}" title="Enter password contain minimum 4 charater and symboles @ # $ & % ." placeholder="Enter Confirm Password"></td>
		</tr>
		<tr>
			<td colspan="2" align="center"><input type="submit" class="button button-contactForm btn_1 boxed-btn" name="btnsub" value="Register"></td>
		</tr>
		<tr>
			<td colspan="2" align="center">Already have account..? &nbsp; <a href="Login.php" style="color: green">Sign In</a></td>
		</tr>
	</table>
</div>
</form>
</body>
<?php include("../Guest/Template/Footer.php"); ?>
</html>