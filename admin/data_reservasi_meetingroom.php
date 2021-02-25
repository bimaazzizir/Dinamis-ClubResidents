<?php
session_start(); ?>

<!DOCTYPE html>
<html>
<head>
	<title>Admin Panel | club residents - Hotel</title>
	<link rel="stylesheet" type="text/css" href="css\data_reservasi.css">
<style type="text/css">
	.header{background: #333;color: white}
</style>
</head>
<body background="bg.jpg" style="background-repeat: no-repeat;height: 100%; width: 97.4%">

<div id="wrapper">
	<div class="header" style="opacity: 0.93">
	<a href="admin_dashboard.php"><img src="club.png" align="left" height="60px" style="padding: 10px;"></a>
	<?php // session_start();
	include("config.php");
	if(isset($_SESSION['username_admin'])){ ?>
	<?php
	echo "<h2><i> WELCOME,</i> ";
	echo "<h2><i> ADMIN : ";
	echo $_SESSION['username_admin'];
	echo "</i></h2>";} ?>
</div><div class="clear"></div><br>

<div class="sidebar"  style="opacity: 0.93; border-radius: 7px">
	<h3>DATA</h3>
	<a class="sidebar_link" href="data_reservasi.php"><b>Data Reservasi Kamar</b></a><br>
	<a style="background-color: #cccccc;" class="sidebar_link" href="data_reservasi_meetingroom.php"><b>Data Reservasi Meeting Room</b></a><br>
	<a class="sidebar_link" href="data_reservasi_ballroom.php"><b>Data Reservasi BallRoom</b></a><br>
	<a class="sidebar_link" href="data_komentar.php"><b>Kritik dan Saran</b></a><br>
	<a class="sidebar_link" href="admin_logout.php"><b>Logout</b></a>
</div>

<div class="content">
<h3 class="title" style="opacity: 0.89; border-radius: 7px; font-size: 25px">DATA RESERVASI MEETING ROOM</h3>

<table border='1' cellpadding="2" cellspacing="0" width="100%" align="center">
	<tr bgcolor="#cccccc">
		<th width="30px">No</th>
		<th width="45px">ID</th>
		<th width="110px">Nama</th>
		<th width="90px">Nomor Telepon</th>
		<th width="30px">Date</th>
		<th width="150px">Room</th>
		<th width="40px">Opsi</th>
	</tr>
<?php
include "config.php";
$sql="SELECT `id_meetingroom`, `nama_meetingroom`, `identitas_meetingroom`, `tanggal_meetingroom`, `ruang_meetingroom` FROM `reservasi_meetingroom` ORDER BY id_meetingroom";
$hasil = mysqli_query($config, $sql);
$no=1;
while ($data=mysqli_fetch_array($hasil)){
?>
	<tr align="center" bgcolor="white">
		<td><?php echo $no;?></td>
		<td><?php echo $data['id_meetingroom']; ?></td>
		<td><?php echo $data['nama_meetingroom']; ?></td>
		<td><?php echo $data['identitas_meetingroom']; ?></td>
		<td><?php echo $data['tanggal_meetingroom']?></td>
		<td><?php echo $data['ruang_meetingroom']?></td>
		<td>
			<a class="aa" href="#" onclick="return confirm('Mohon Maaf, Fitur ini masih dalam perbaikan');">Edit </a>|
			<a class="aa" href="hapus_reservasi_meetingroom.php?id_meetingroom=<?php echo $data['id_meetingroom'];?>" onclick="return confirm('Hapus data? Data yang telah dihapus tidak bisa dipulihkan');">Hapus</a>
		</td>
	</tr>
<?php
$no++;
}
echo "</table>";
?>
<p style="font-family: arial"><b>Total Reservasi: <?php echo mysqli_num_rows($hasil); ?></b></p>
</div>

</div>
</body>
</html>