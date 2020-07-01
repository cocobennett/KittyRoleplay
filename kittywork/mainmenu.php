<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php

include("connect.php");

?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Login or Register</title>
<link rel="shortcut icon" href="favicon.ico">
<link rel="stylesheet" type="text/css" href="stylesheet.css" />
</head>
<style>
body {
	background-image:url('background/fight.jpg');
	height:500px;
	opacity:1;
	filter:alpha(opacity=100); /* For IE8 and earlier */
}
</style>
<body>
<center>
<form action='login.php' method='post'>
    	Username:<input type='text' name='username'><br/>
        Password:<input type='password' name='password'><br/>
        <input class='button' type='submit' name='submit' value='Login'><br/>
    </form>
    <br/>
    <a href='member.php'>Member's Page?</a><br/>
    <a href='register.php'>Register?</a><br/>
    <a href='index.php'>Go back?</a><br/>

</body>
</html>
