<?php 
	include 'config.php';
	
	header('Location: ..\..\..\index.html', true, 301);
	
	$nama_saran = $_POST['nama_saran'];
$email_saran = $_POST['email_saran'];
$kritik_saran = $_POST['kritik_saran'];
	?>

<?php
	$sql = "INSERT INTO `saran` (`nama_saran`, `email_saran`, `kritik_saran`)
VALUES ('$nama_saran', '$email_saran', '$kritik_saran');";
$hasil = mysqli_query($config, $sql);
if($hasil){

} else{
echo "Data gagal disimpan";
}
?>