<?php
session_start(); ?>

<!DOCTYPE html>
<html>
<head>
	<title>Admin Panel | club residents - Hotel</title>
	<link rel="stylesheet" type="text/css" href="css\admin_dashboard.css">
<style type="text/css">
	.header{background: #333;color: white}
</style>
</head>
<body  background="bg.jpg"  style="background-repeat: no-repeat;height: 100%; width: 97.4%">

<div id="wrapper">
	<div class="header"  style="opacity: 0.93">
	<img src="club.png" align="left" height="60px" style="padding: 10px;">
	<?php // 
	include("config.php");
	if(isset($_SESSION['username_admin'])){ ?>
	<?php
	echo "<h2><i> WELCOME,</i> " ;
	echo "<h2><i> ADMIN : " ;
	echo $_SESSION ['username_admin'];
	echo "</i></h2>";} ?>
</div><div class="clear"></div><br>

<div class="sidebar"  style="opacity: 0.93;border-radius: 7px;">
	<h3>DATA</h3>
	<a class="link" href="data_reservasi.php"><b>Data Reservasi Kamar</b></a><br>
	<a class="link" href="data_reservasi_meetingroom.php"><b>Data Reservasi Meeting Room</b></a><br>
	<a class="link" class="link" href="data_reservasi_ballroom.php"><b>Data Reservasi BallRoom</b></a><br>
	<a class="link" class="sidebar_link" href="data_komentar.php"><b>Kritik dan Saran</b></a><br>
	
	<a class="linkout" href="admin_logout.php"><b>Logout</b></a>
</div>


<div class="content"></div>

</div>

</body>
</html>