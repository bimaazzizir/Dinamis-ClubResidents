<?php
include "config.php";

$id_reservas = $_GET["id_reservasi"];

$nama_reservasi = $_POST["nama_reservasi"];
$identitas_reservasi = $_POST["identitas_reservasi"];
$alamat_reservasi = $_POST["alamat_reservasi"];
$checkin_reservasi = $_POST["checkin_reservasi"];
$checkout_reservasi = $_POST["checkout_reservasi"];
$kamar_reservasi = $_POST["kamar_reservasi"];
$kasur_reservasi = $_POST["kasur_reservasi"];

$sql = "UPDATE reservasi_kamar SET nama_reservasi='$nama_reservasi', identitas_reservasi='$identitas_reservasi', alamat_reservasi='$alamat_reservasi', checkin_reservasi='$checkin_reservasi', checkout_reservasi='$checkout_reservasi', kamar_reservasi='$kamar_reservasi', kasur_reservasi='$kasur_reservasi' WHERE id_reservasi=$id_reservas";
$hasil = mysqli_query($config, $sql);
header('location: data_reservasi.php');
?>