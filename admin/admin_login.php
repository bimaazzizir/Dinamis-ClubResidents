<!DOCTYPE html>
<html>
<head>
	<title>Admin Login | club residents - Hotel</title>
	<link rel="stylesheet" type="text/css" href="css\admin_login.css">
<style type="text/css">
#wrapper{
  background: #333;
  position: relative;
  margin: 0 auto;
  width: 350px;
  height: 365px;
  border-radius: 5px 5px 5px 5px;
  padding: 15px;}
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
  color: #333;
  border-radius: 7px;
  border: #666 2px solid;
  padding: 5px;
  font-family: rockwell;}
.password{
  width: 300px;
  height: 40px;
  font-size: 25px;
  color: #333;
  border-radius: 7px;
  border: #666 2px solid;
  padding: 5px;
  font-family: rockwell;}
.login{
  width: 100px;
  height: 30px;
  font-size: 20px;
  border-radius: 6px;
  font-family: rockwell;}
.home{
  float: left;
  width: 100px
  height: 30px;
  color: white;
  text-decoration: none;
  font-family: rockwell;}
.home:hover{
  border-bottom: 2px solid;}
	</style>
</head>

<body background="bg_admin.jpg">
<form action="admin_login_action.php" method="POST">
<br><br><br><br><br><br><div id="wrapper">
	<center><img src="club.png" width="150px"></center>
	<h2>ADMIN LOGIN</h2><br><hr><br>
	<div class="form" align="center">
		<input class="username" type="text" name="username_admin" placeholder="Username"><br><br>
		<input class="password" type="password" name="password_admin" placeholder="Password"><br><br>
	</div>
	<div align="center">
		<input class="login" type="submit" name="login" value="L o g i n">
		<br><br><br><a class="home" href="..\index.html">HOME</a>
	</div>
</div>
</form>

</body>
</html>