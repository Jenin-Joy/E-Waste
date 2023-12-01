<!DOCTYPE html>
<html>
<head>
	<title></title>
<?php
include("../Connection/Connection.php");
session_start();
?>
</head>
<script type="text/javascript">
        function preventBack() { window.history.forward(); }
        setTimeout("preventBack()", 0);
        window.onunload = function () { null };
    </script>
<?php include("Template/Header.php"); ?>
<body>
<br>
<!-- <a href="Change_password.php">Change Password</a><br> -->
<!-- <a href="Collected_Waste.php">Collected Waste</a><br> -->
<!-- <a href="Edit_profile.php">Edit profile</a><br> -->
<!-- <a href="Profile.php">Profile</a><br> -->
<!-- <a href="Send_feedback.php">Feedback</a><br> -->
<!-- <a href="Sent_complaint.php">Complaint</a><br> -->
<!-- <a href="View_Approval.php">View Approval</a><br> -->
<!-- <a href="View_days.php">View Days</a><br> -->
<!-- <a href="View_replay.php">View Replay</a><br> -->
<!-- <a href="View_worker.php">View Worker</a><br> -->
<!-- <a href="Waste_request.php">Waste Request</a><br> -->

</body>
<?php include("Template/Footer.php"); ?>
</html>