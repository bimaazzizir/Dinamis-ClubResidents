<!DOCTYPE html>
<html>
<head>
  <title>Admin Panel | club residents - Hotel</title>

<style type="text/css">
#form{width: 500px;position: relative;padding: 10px;margin: 0 auto;opacity: 0.92;font-family: arial;}
table{font-size: 18px;}
.fullname{height: 30px;width: 300px;padding: 3px;font-size: 20px;font-family: arial;}
.address{height: 150px;width: 300px;padding: 4px;font-size: 20px;font-family: arial;}
.check{height: 30px;width: 180px;font-size: 18px;padding: 3px;font-family: arial;}
.tipe{height: 30px;width: 350px;padding: 3px;font-size: 18px;font-family: arial;}
.person{height: 30px;width: 70px;font-size: 18px;padding: 3px;font-family: arial;}
.home{float: left;width: 100pxheight: 30px;color: white;text-decoration: none;font-family: arial;padding-left: 5px;padding-top: 7px;}
.home:hover{border-bottom: 2px solid;}
.booking{width: 200px;height: 30px;font-size: 20px;border-radius: 6px;font-family: arial;margin: 0 auto;position: relative;}
</style>

</head>
<body background="bg.jpg">
<?php
include "config.php";
$id_ballroom = $_GET['id_ballroom'];
$sql = "SELECT * FROM reservasi_ballroom WHERE id_ballroom=$id_ballroom";
$hasil = mysqli_query($config, $sql);
$data = mysqli_fetch_assoc($hasil);
?>

<div id="form">
<h2 align="center">Ubah Reservasi BallRoom</h2><hr style="width: 95%" noshade="" size="3px"><br>
<form method=POST action="ubah_reservasi_ballroom_proses.php">
<table>
    <tr>
    <td>ID Reservasi</td>
    <td><input class="fullname" disabled="" type="text" name="id_ballroom" value="<?php echo $data['id_ballroom']?>"></td>
  </tr>
  <tr>
    <td>Nama Lengkap</td>
    <td><input class="fullname" type="text" name="nama_ballroom" value="<?php echo $data['nama_ballroom']?>"></td>
  </tr>
  <tr>
    <td>Nomor Kartu Identitas(KTP)</td>
    <td><input class="fullname" type="text" name="identitas_ballroom" value="<?php echo $data['identitas_ballroom']?>"></td>
  </tr>
    <tr>
    <td>Aula</td>
    <td><select class="fullname" name="ruang_ballroom">
      <option selected="" disabled=""><?php echo $data['ruang_ballroom']?></option>
      <option>Ballroom 1</option>
      <option>Ballroom 2</option>
      <option>Ballroom 3</option>
    </select></td>
  </tr>
  <tr>
    <td>Tanggal</td>
    <td><input class="check" type="date" name="tanggal_ballroom" value="<?php echo $data['tanggal_ballroom']?>"></td>
  </tr>
  <tr>
    <td>Jumlah Orang</td>
    <td><input class="check" type="number" name="orang_ballroom" value="<?php echo $data['orang_ballroom']?>"></td>
  </tr>

</table><br><hr noshade="" size="3" width="100%"><br>
    <center><input class="booking" type="submit" name="simpan" value="Ubah"></center>
</form>
</div>


</body>
</html>