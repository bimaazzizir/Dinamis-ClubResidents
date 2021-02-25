<?php
include("config.php");
?>

<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css\admin_logout.css">
<style type="text/css">
#wrapper{
  background: #333;
  position: relative;
  margin: 0 auto;
  width: 350px;
  height: 365px;
  border-radius: 5px 5px 5px 5px;
  padding: 15px;
  opacity: 0.85;}
h2{
  text-align: center;
  color: white;}
*{
  box-sizing: border-box; margin: 0; padding: 0;}
div{
  font-family: rockwell;}
.username{
  width: 300px;
  height: 40px;
  font-size: 25px;
  color: #cc0000;
  border-radius: 7px;
  border: #cccccc 2px solid;
  padding: 5px;
  font-family: rockwell;}
.password{
  width: 300px;
  height: 40px;
  font-size: 25px;
  color: #cc0000;
  border-radius: 7px;
  border: #cccccc 2px solid;
  padding: 5px;
  font-family: rockwell;}
.home, .login{
  width: 100px
  height: 30px;
  color: white;
  text-decoration: none;
  font-family: rockwell;}
.home:hover, .login:hover{
  border-bottom: 2px solid;}
.you{
  background: white;
  border-radius: 4px;
  height: 65px;
  padding: 9px;
  margin: 0;
  color: #333;
  font-size: 20px;}
	</style>
</head>


<body background="bg_admin.jpg">

<br><br><br><br><br><br><div id="wrapper">
<center><img src="club.png" width="150px"></center>
<h2>ADMIN LOGOUT</h2><br><hr><br>
<p align="center" class="you">You have been Logout from system</p><br><br>

<center><p><a style="font-size: 19px;" class="login" href="admin_login.php">Login with other account?</a></p><br><br><br>

<p><a style="float: left; padding-top: 4px;" class="home" href="..\index.html">HOME</a></p></center>
</div>
</body>
</html>