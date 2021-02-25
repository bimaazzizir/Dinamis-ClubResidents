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
$id_reservasi = $_GET['id_reservasi'];
$sql = "SELECT * FROM reservasi_kamar WHERE id_reservasi=$id_reservasi";
$hasil = mysqli_query($config, $sql);
$data = mysqli_fetch_assoc($hasil);
?>

<div id="form">
<h2 align="center">Ubah Reservasi Kamar</h2><hr style="width: 95%" noshade="" size="3px"><br>
<form method=POST action="ubah_reservasi_kamar_proses.php">
<table>
  <tr>
    <td>ID Reservasi</td>
    <td><input class="fullname" type="text" name="id_reservasi" disabled="" value="<?php echo $data['id_reservasi']?>"></td>
  </tr>
  <tr>
    <td>Nama Lengkap</td>
    <td><input class="fullname" type="text" name="nama_reservasi" value="<?php echo $data['nama_reservasi']?>"></td>
  </tr>
  <tr>
    <td>Nomor Kartu Identitas(KTP)</td>
    <td><input class="fullname" type="text" name="identitas_reservasi" value="<?php echo $data['identitas_reservasi']?>"></td>
  </tr>
  <tr>
    <td>Alamat Lengkap</td>
    <td><textarea class="address" name="alamat_reservasi"><?php echo $data['alamat_reservasi']?></textarea></td>
  </tr>
  <tr>
    <td>Check In</td>
    <td><input class="check" type="date" name="checkin_reservasi" value="<?php echo $data['checkin_reservasi']?>"></td>
  </tr>
  <tr>
    <td>Check Out</td>
    <td><input class="check" type="date" name="checkout_reservasi" value="<?php echo $data['checkout_reservasi']?>""></td>
  </tr>

  <tr>
    <td>Tipe Kamar</td>
    <td>
      <select name="kamar_reservasi" class="tipe">
        <option disabled="" selected=""><?php echo $data['kamar_reservasi']?></option>
        <option>Deluxe Room [Rp. 300.000/ Day]</option>
        <option>Family Room [Rp. 600.000/ Day]</option>
        <option>Premium Room [Rp. 900.000/ Day]</option>
        <option>Starlight Room [Rp. 1.000.000/ Day]</option>
        <option>Executive Room [Rp. 1.500.000/ Day]</option>
      </select>
    </td>
  </tr>
  <tr>
    <td>Tipe Kasur</td>
    <td>
      <select name="kasur_reservasi" class="tipe">
        <option disabled="" selected=""><?php echo $data['kasur_reservasi']?></option>
        <option>Single Bed</option>
        <option>Double Bed</option>
        <option>Twin Bed</option>
        <option>Family Bed</option>
      </select>
    </td>
  </tr>

</table><br><hr noshade="" size="3" width="100%"><br>
    <center><input class="booking" type="submit" name="simpan" value="Ubah"></center>
</form>
</div>


</body>
</html>