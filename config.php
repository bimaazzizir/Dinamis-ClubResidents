<?php 
$config = mysqli_connect("localhost","root","","datakerad");
if(!$config){
	die('Gagal terhubung ke Database : '.mysqli_connect_error());
}
?>