<!DOCTYPE html>
<html>
<head>
	<title></title>
<?php
include("../Connection/Connection.php");
session_start();
?>
</head>
<?php include("Template/Header1.php");
if($_SESSION['username']!=NULL)
{
	?>
	<body>
	<?php
	if(isset($_POST["btnsub"]))
	{
		$id = $_SESSION["userid"];
		$cat = $_POST["txtcatageory"];
		$date = date('Y-m-d');
		$wcon = $_POST["txtcontent"];
		$ins = "insert into tbl_waste(cat_id,user_id,waste_content,waste_date) values('$cat','$id','$wcon','$date')";
		if($con->query($ins))
		{
			echo "<script>alert('Request sent Sucessfully...')</script>";
				echo "<script>location.replace('Home.php')</script>";
		}
		else
		{
			echo "<script>alert('Error')</script>";
		}
	}
	?>
<form method="POST">
	<div class="progress-table">
<h2 align="center" class="text-heading">Waste Request</h2>
	<table align="center" width="500">
		<tr>
			<td class="table-row">Catageory</td>
			<td>
				<select name="txtcatageory">
				<option selected="selected">....Select....</option>
				<?php 
				$sel = "select * from tbl_catageory where cat_status = '0'";
				$res = $con->query($sel);
				if($res->num_rows!=NULL)
				{
					while($row = $res->fetch_assoc())
					{
						?>
						<option value="<?php echo $row["cat_id"]; ?>"><?php echo $row["cat_name"]; ?></option>
						<?php
					}
				}
				?>
				</select>
			</td>
		</tr>
		<tr>
			<td class="table-row">Waste Content in Packet</td>
			<td><input type="text" name="txtcontent" placeholder="Waste content"></td>
		</tr>
		<tr>
			<td colspan="2" align="center"><input type="submit" class="button button-contactForm btn_1 boxed-btn" name="btnsub" value="Send"></td>
		</tr>
	</table>
</form>
</body>
	<?php
}
else
{
	echo "<script>location.replace('../Guest/Login.php')</script>";
}
 ?>

<br><br><br><br><br><br><br><br><br><br><br><br><br>
</div>
<?php include("Template/Footer.php"); ?>
</html>