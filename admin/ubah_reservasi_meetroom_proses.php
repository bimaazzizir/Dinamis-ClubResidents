<?php
include "config.php";

$id_meetingroom = $_GET["id_meetingroom"];

$nama_meetingroom = $_POST["nama_meetingroom"];
$identitas_meetingroom = $_POST["identitas_meetingroom"];
$tanggal_meetingroom = $_POST["tanggal_meetingroom"];
$ruang_meetingroom = $_POST["ruang_meetingroom"];

$sql = "UPDATE reservasi_meetingroom SET nama_meetingroom='$nama_meetingroom', identitas_meetingroom='$identitas_meetingroom', tanggal_meetingroom='$tanggal_meetingroom', ruang_meetingroom='$ruang_meetingroom' WHERE id_meetingroom>0";
$hasil = mysqli_query($config, $sql);
header('location: data_reservasi_meetingroom.php');
?>