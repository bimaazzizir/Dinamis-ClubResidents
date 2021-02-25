<?php
session_start();
include("config.php");

$sql = "SELECT username_admin FROM admin ";
$sql.= "WHERE username_admin='".$_POST['username_admin']."' ";
$sql.= "AND password_admin='".$_POST['password_admin']."' ";
$hasil = mysqli_query($config,$sql) or exit("Error query : <b>".$sql."</b>.");

if(mysqli_num_rows($hasil)>0){
	$data = mysqli_fetch_array($hasil);
	$_SESSION['username_admin'] = $data['username_admin'];
	header("Location: admin_dashboard.php"); exit();
} else { ?>
<?php
header('Location: admin_login.php');
?>
<!--
	<h2>Maaf..</h2>
	<p> Username atau password salah. Klik <a href="admin_login.php">disini</a> untuk kembali login. </p>--> <?php
} ?>