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
$id_meetingroom = $_GET['id_meetingroom'];
$sql = "SELECT * FROM reservasi_meetingroom WHERE id_meetingroom=$id_meetingroom";
$hasil = mysqli_query($config, $sql);
$data = mysqli_fetch_assoc($hasil);
?>

<div id="form">
<h2 align="center">Ubah Reservasi Meeting Room</h2><hr style="width: 95%" noshade="" size="3px"><br>
<form method=POST action="ubah_reservasi_meetroom_proses.php">
<table>
  <tr>
    <td>ID Reservasi</td>
    <td><input class="fullname" type="text" disabled="" name="id_meetingroom" value="<?php echo $data['id_meetingroom']?>"></td>
  </tr>
  <tr>
    <td>Nama Lengkap</td>
    <td><input class="fullname" type="text" name="nama_meetingroom" value="<?php echo $data['nama_meetingroom']?>"></td>
  </tr>
  <tr>
    <td>Nomor Kartu Identitas(KTP)</td>
    <td><input class="fullname" type="text" name="identitas_meetingroom" value="<?php echo $data['identitas_meetingroom']?>"></td>
  </tr>
  <tr>
    <td>Tanggal</td>
    <td><input class="check" type="date" name="tanggal_meetingroom" value="<?php echo $data['tanggal_meetingroom']?>"></td>
  </tr>
  <tr>
    <td>Ruang</td>
    <td><select class="fullname" name="ruang_meetingroom">
      <option selected="" disabled=""><?php echo $data['ruang_meetingroom']?></option>
      <option>Room 1</option>
      <option>Room 2</option>
      <option>Room 3</option>
    </select></td>
  </tr>

</table><br><hr noshade="" size="3" width="100%"><br>
    <center><input class="booking" type="submit" name="simpan" value="Ubah"></center>
</form>
</div>


</body>
</html>