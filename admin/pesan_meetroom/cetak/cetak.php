<!DOCTYPE html>
<html>
<head>
	<title>Print Reservation | club residents - Hotel</title>
</head>
<body style="font-family: arial">
 
	<center>
 
		<h2 style="margin: 0 auto;">CETAK BUKTI RESERVASI</h2>
		<img src="club.png" width="200px"><br><br>
		
 
	</center>
 
	<?php 
	include 'config.php';
	$nama_meetingroom = $_POST['nama_meetingroom'];
$identitas_meetingroom = $_POST['identitas_meetingroom'];
$tanggal_meetingroom = $_POST['tanggal_meetingroom'];
$ruang_meetingroom = $_POST['ruang_meetingroom'];

	?>
 <center>
	<table border="1" cellpadding="5" cellspacing="0" width="600px" >
			<tr>	<td width="130px" height="30px">Nama</td>
				<td><?php echo $nama_meetingroom; ?></td></tr>
			<tr>	<td width="130px" height="30px">Nomor Telepon</td>
				<td><?php echo $identitas_meetingroom; ?></td>
			</tr>
			<tr>	<td width="130px" height="60px">Tanggal</td><td><?php echo $tanggal_meetingroom; ?></td></tr>
			<tr>	<td width="130px" height="30px">Ruang</td><td><?php echo $ruang_meetingroom; ?></td></tr>

							
<?php
	$sql = "INSERT INTO `reservasi_meetingroom` (`nama_meetingroom`, `identitas_meetingroom`, `tanggal_meetingroom`, `ruang_meetingroom`)
VALUES ('$nama_meetingroom', '$identitas_meetingroom', '$tanggal_meetingroom', '$ruang_meetingroom');";
$hasil = mysqli_query($config, $sql);
if($hasil){
echo " ";
} else{
echo "Data gagal disimpan";
}
?>
		
		</table>
 </center>
<br><br>
<i><b>*Harap bawa bukti reservasi ini pada saat Check In</b></i>

 <?php echo "<script>window.print();</script>" ;?>

</body>
</html>