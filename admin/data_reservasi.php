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
	<a style="background-color: #cccccc;" class="sidebar_link" href="data_reservasi.php"><b>Data Reservasi Kamar</b></a><br>
	<a class="sidebar_link" href="data_reservasi_meetingroom.php"><b>Data Reservasi Meeting Room</b></a><br>
	<a class="sidebar_link" href="data_reservasi_ballroom.php"><b>Data Reservasi BallRoom</b></a><br>
	<a class="sidebar_link" href="data_komentar.php"><b>Kritik dan Saran</b></a><br>

	<a class="sidebar_link" href="admin_logout.php"><b>Logout</b></a>
</div>

<div class="content">
<h3 class="title" style="opacity: 0.89; border-radius: 7px; font-size: 25px">DATA RESERVASI KAMAR</h3>

<table border='1' cellpadding="2" cellspacing="0" width="100%" align="center">
	<tr bgcolor="#cccccc">
		<th width="30px">No</th>
		<th width="50px">ID</th>
		<th width="110px">Nama</th>
		<th width="90px">Nomor Telepon</th>
		<th width="120px">Alamat</th>
		<th width="85px">Check In</th>
		<th width="85px">Check Out</th>
		<th width="120px">Tipe Kamar</th>
		<th width="60px">Tipe Kasur</th>
		<th width="85px">Opsi</th>
	</tr>
<?php
include "config.php";
$sql="SELECT `id_reservasi`, `nama_reservasi`, `identitas_reservasi`, `alamat_reservasi`, `checkin_reservasi`, `checkout_reservasi`, `kamar_reservasi`, `kasur_reservasi` FROM `reservasi_kamar` ORDER BY id_reservasi";
$hasil = mysqli_query($config, $sql);
$no=1;
while ($data=mysqli_fetch_array($hasil)){
?>
	<tr align="center" bgcolor="white">
		<td><?php echo $no;?></td>
		<td><?php echo $data['id_reservasi']; ?></td>
		<td><?php echo $data['nama_reservasi']; ?></td>
		<td><?php echo $data['identitas_reservasi']; ?></td>
		<td><?php echo $data['alamat_reservasi']?></td>
		<td><?php echo $data['checkin_reservasi']?></td>
		<td><?php echo $data['checkout_reservasi']?></td>
		<td><?php echo $data['kamar_reservasi']?></td>
		<td><?php echo $data['kasur_reservasi']?></td>
		<td>
			<a class="aa" href="#" onclick="return confirm('Mohon Maaf, Fitur ini masih dalam perbaikan');">Edit </a>|
			<a class="aa" href="hapus_reservasi.php?id_reservasi=<?php echo $data['id_reservasi'];?>" onclick="return confirm('Hapus data? Data yang telah dihapus tidak bisa dipulihkan');">Hapus</a>
		</td>
	</tr>
<?php
$no++;
}
echo "</table>";
?>
<p style="font-family: arial;"><b>Total Reservasi: <?php echo mysqli_num_rows($hasil); ?></b></p>
</div>

</div>
</body>
</html>