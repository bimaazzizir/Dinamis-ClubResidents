<?php

include("config.php");

    $id_saran = $_GET['id_saran'];

    $sql = "DELETE FROM saran WHERE id_saran=$id_saran";
    $query = mysqli_query($config, $sql);

    if( $query ){
        header('Location: data_komentar.php');
    } else {
        die("gagal menghapus...");
    }
?>