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
	$nama_ballroom = $_POST['nama_ballroom'];
$identitas_ballroom = $_POST['identitas_ballroom'];
$ruang_ballroom = $_POST['ruang_ballroom'];
$tanggal_ballroom = $_POST['tanggal_ballroom'];
$orang_ballroom = $_POST['orang_ballroom'];


	?>
 <center>
	<table border="1" cellpadding="5" cellspacing="0" width="600px" >
			<tr>	<td width="130px" height="30px">Nama</td>
				<td><?php echo $nama_ballroom; ?></td></tr>
			<tr>	<td width="130px" height="30px">Nomor Telepon</td>
				<td><?php echo $identitas_ballroom; ?></td>
			</tr>
			<tr>	<td width="130px" height="30px">Ruang</td><td><?php echo $ruang_ballroom; ?></td></tr>
			<tr>	<td width="130px" height="30px">Tanggal</td><td><?php echo $tanggal_ballroom; ?></td></tr>
			<tr>	<td width="130px" height="30px">Perkiraan Jumlah Orang</td><td><?php echo $orang_ballroom." Orang"; ?></td></tr>
			

							
<?php
	$sql = "INSERT INTO `reservasi_ballroom` (`nama_ballroom`, `identitas_ballroom`, `ruang_ballroom`, `tanggal_ballroom`, `orang_ballroom`)
VALUES ('$nama_ballroom', '$identitas_ballroom', '$ruang_ballroom', '$tanggal_ballroom', '$orang_ballroom');";
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