<!DOCTYPE html>
<html>
<head>
	<title>club residents - Hotel</title>
	<link rel="stylesheet" type="text/css" href="css/reservasi_pelangga.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
</head>

<body>
	<div class="logo">
<ul>
	<li><center><img src="club.png" width="150px"></center><hr></li>
</ul>
</div>

<div class="atas">
<div class="atas" id="atas">
<ul>
	<li><a href="..\..\index.html" class="active" href="javascript:void(0)" >Home</a><hr></li>
	<li><a href="..\..\hub.html">Hubungi Kami</a><hr></li>
	<li><a href="..\..\fasili.html">Fasilitas</a><hr></li>
	<li><a href="..\jumppesankamar.php">Pesan Kamar</a><hr></li>
  <li><a href="saran.php" style="background: #111">Saran</a><hr></li>
</ul>
</div>


<div id="form">
<h2 align="center">Kritik dan Saran</h2><hr style="width: 95%" noshade="" size="3px"><br>
<form method=POST action="cetak/cetak.php">
<table>
  <tr>
    <td>Nama Lengkap</td>
    <td><input placeholder="Full Name" class="fullname" type="text" name="nama_saran"></td>
  </tr>
  <tr>
    <td>Email</td>
    <td><input placeholder="example@mail.com" class="fullname" type="email" name="email_saran"></td>
  </tr>
  <tr>
    <td>Kritik & Saran</td>
    <td><textarea placeholder="Your Comment..." class="address" name="kritik_saran"></textarea></td>
  </tr>

</table><br><hr noshade="" size="3" width="100%"><br>
    <center><input class="booking" type="submit" name="simpan" value="Kirim"></center>
</form>
</div>


<div class="bawahb">
	<br><br><br>
	<ul>
	<li style="float: left;">&copy;club residents</li>
	</ul>
</div>

<script>
window.onscroll = function() {myFunction()};

var atas = document.getElementById("atas");
var sticky = atas.offsetTop;

function myFunction() {
  if (window.pageYOffset >= sticky) {
    atas.classList.add("sticky")
  } else {
    atas.classList.remove("sticky");
  }
}
</script>

</body>
</html>