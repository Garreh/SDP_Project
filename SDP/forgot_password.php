<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>Forgot Your Password?</title>
<style type="text/css">
.cont{
	width: 100%;
	background-color: rgba(0,0,0,0.4);
	height: 535px;
	font-family: "Bodoni MT";
}
input[type=text]{
	width: 300px;
	height: 50px;
	font-size: 20px;
	padding: 5px;
	margin: 10px;
	background-color: rgba(255,100,255,0.3);
	color: black;
	font-family: "Bodoni MT";
}
input[type=submit]{
	width: 150px;
	height: 40px;
	font-size: 18px;
	padding: 5px;
	margin: 5px;
	background-color: rgba(255,0,0,0.2);
	color: black;
	font-family: "Bodoni MT";
}
input[type=submit]:hover{
	font-size:17px;
	font-weight:bold;
	background-color: black;
	color: white;
	cursor:pointer;
}
button{
	float:left;
	margin: 10px;
	width: 150px;
	height:45px;
	font-size:22px;
	background-color: black;
	color: white;
}
button:hover{
	background-color: #999999;
	color: aqua;
	font-size: 20px;
	font-weight:bold;
	cursor:pointer;
}

</style>

</head>

<body>

<center>

<div class="cont">
<button onclick="window.history.go(-1)">Back</button><br/><br/><br/>
	<h1>Enter Your Email For Password Recovery</h1>
	<form method="post" action="password_mail.php">
		<input type="text" name="email" required="required"/><br/>
		<input type="submit" name="submit" value="Submit"/>
	</form>
</div>

</center>

</body>

</html>
