<?php
include "config.php";

$id_ballroom = $_GET["id_ballroom"];

$nama_ballroom = $_POST["nama_ballroom"];
$identitas_ballroom = $_POST["identitas_ballroom"];
$ruang_ballroom = $_POST["ruang_ballroom"];
$tanggal_ballroom = $_POST["tanggal_ballroom"];
$orang_ballroom = $_POST["orang_ballroom"];

$sql = "UPDATE reservasi_ballroom SET nama_ballroom='$nama_ballroom', identitas_ballroom='$identitas_ballroom', ruang_ballroom='$ruang_ballroom', tanggal_ballroom='$tanggal_ballroom', orang_ballroom='$orang_ballroom' WHERE id_ballroom>0";
$hasil = mysqli_query($config, $sql);
header('location: data_reservasi_ballroom.php');
?>