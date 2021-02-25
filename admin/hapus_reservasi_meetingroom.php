<?php

include("config.php");

    $id_meetingroom = $_GET['id_meetingroom'];

    $sql = "DELETE FROM reservasi_meetingroom WHERE id_meetingroom=$id_meetingroom";
    $query = mysqli_query($config, $sql);

    if( $query ){
        header('Location: data_reservasi_meetingroom.php');
    } else {
        die("gagal menghapus...");
    }
?>