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
	$nama_reservasi = $_POST['nama_reservasi'];
$identitas_reservasi = $_POST['identitas_reservasi'];
$alamat_reservasi = $_POST['alamat_reservasi'];
$checkin_reservasi = $_POST['checkin_reservasi'];
$checkout_reservasi = $_POST['checkout_reservasi'];
$kamar_reservasi = $_POST['kamar_reservasi'];
$kasur_reservasi = $_POST['kasur_reservasi'];

	?>
 <center>
	<table border="1" cellpadding="5" cellspacing="0" width="600px" >
			<tr>	<td width="130px" height="30px">Nama</td><td><?php echo $nama_reservasi; ?></td></tr>
			<tr>	<td width="130px" height="30px">Nomor Telepon</td><td><?php echo $identitas_reservasi; ?></td></tr>
			<tr>	<td width="130px" height="60px">Alamat</td><td><?php echo $alamat_reservasi; ?></td></tr>
			<tr>	<td width="130px" height="30px">Check-in</td><td><?php echo $checkin_reservasi; ?></td></tr>
			<tr>	<td width="130px" height="30px">Check-out</td><td><?php echo $checkout_reservasi; ?></td></tr>
			<tr>	<td width="130px" height="30px">Tipe Kamar</td><td><?php echo $kamar_reservasi; ?></td></tr>				
			<tr><td width="130px" height="30px">Tipe Kasur</td><td><?php echo $kasur_reservasi; ?></td></tr>

							
<?php
	$sql = "INSERT INTO `reservasi_kamar` (`nama_reservasi`, `identitas_reservasi`, `alamat_reservasi`, `checkin_reservasi`, `checkout_reservasi`, `kamar_reservasi`, `kasur_reservasi`)
VALUES ('$nama_reservasi', '$identitas_reservasi', '$alamat_reservasi', '$checkin_reservasi', '$checkout_reservasi', '$kamar_reservasi', '$kasur_reservasi');";
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