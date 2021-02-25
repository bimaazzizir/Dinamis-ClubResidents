<?php
session_start(); ?>

<!DOCTYPE html>
<html>
<head>
	<title>Admin Panel | club residents - Hotel</title>
	<link rel="stylesheet" type="text/css" href="css\data_kasur.css">
<style type="text/css">
	.header{background: #333;color: white}
</style>
</head>
<body  background="bg.jpg"  style="background-repeat: no-repeat;height: 100%; width: 97.4%">

<div id="wrapper">
	<div class="header"  style="opacity: 0.93">
	<a href="admin_dashboard.php"><img src="club.png" align="left" height="60px" style="padding: 10px;"></a>
	<?php // 
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
	<a class="sidebar_link" href="data_reservasi_meetingroom.php"><b>Data Reservasi Meeting Room</b></a><br>
	<a class="sidebar_link" href="data_reservasi_ballroom.php"><b>Data Reservasi BallRoom</b></a><br>
	<a style="background-color: #cccccc;" class="sidebar_link" href="data_komentar.php"><b>Kritik dan Saran</b></a><br>

	<a class="sidebar_link" href="admin_logout.php"><b>Logout</b></a>
</div>

<div class="content">
<h3 class="title"  style="opacity: 0.89; border-radius: 7px; font-size: 25px">KRITIK DAN SARAN</h3>

<table border='1' cellpadding="5" cellspacing="0">
	<tr bgcolor="#cccccc">
		<th width="30px">No</th>
		<th width="55px">ID</th>
		<th width="200px">Nama</th>
		<th width="200px">Email</th>
		<th width="500px">Kritik dan Saran</th>
		<th width="100px">Opsi</th>
	</tr>

<?php
include "config.php";
$sql="SELECT `id_saran`, `nama_saran`, `email_saran`, `kritik_saran` FROM `saran` ORDER BY id_saran";
$hasil = mysqli_query($config, $sql);
$no=1;
while ($data=mysqli_fetch_array($hasil)){
?>
<tr  bgcolor="white" align="center">
<td><?php echo $no;?></td>
<td><?php echo $data['id_saran']; ?></td>
<td><?php echo $data['nama_saran']; ?></td>
<td><?php echo $data['email_saran']?></td>
<td><?php echo $data['kritik_saran']?></td>
<td>
	<a class="aa" href="hapus_saran.php?id_saran=<?php echo $data['id_saran'];?>" onclick="return confirm('Hapus data? Data yang telah dihapus tidak bisa dipulihkan');">Hapus</a>
</td>

</tr>
<?php
$no++;
}
echo "</table>";
?>

</div>

</div>
</body>
</html>