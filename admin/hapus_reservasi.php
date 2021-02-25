<?php

include("config.php");

    $id_reservasi = $_GET['id_reservasi'];

    $sql = "DELETE FROM reservasi_kamar WHERE id_reservasi=$id_reservasi";
    $query = mysqli_query($config, $sql);

    if( $query ){
        header('Location: data_reservasi.php');
    } else {
        die("gagal menghapus...");
    }
?>