<?php

include("config.php");

    $id_ballroom = $_GET['id_ballroom'];

    $sql = "DELETE FROM reservasi_ballroom WHERE id_ballroom=$id_ballroom";
    $query = mysqli_query($config, $sql);

    if( $query ){
        header('Location: data_reservasi_ballroom.php');
    } else {
        die("gagal menghapus...");
    }
?>