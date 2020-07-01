<html>
<head>
<title>&nbsp; &nbsp; Change your Password</title>
<link rel="stylesheet" type="text/css" href="stylesheet.css" />
<style>
body {
	background-image:url('background/trees.jpg');
	height:500px;
	opacity:1;
	filter:alpha(opacity=100); /* For IE8 and earlier */
}
</style>
</head>
<body>

<?php

error_reporting(E_ALL ^ E_NOTICE); 

include('connect.php');

$user = $_SESSION['username'];

if ($user)
{
	//if user is logged in
	if ($_POST['submit'])
	{
		//check fields
		
		$oldpassword = md5($_POST['oldpassword']);
		$newpassword = md5($_POST['newpassword']);
		$repeatnewpassword = md5($_POST['repeatnewpassword']);
		
		//check password against db
		
		
		$queryget = mysql_query("SELECT password FROM users WHERE username='$user'") or die("Query didn't work");
		$row = mysql_fetch_assoc($queryget);
		
		$oldpassworddb = $row['password'];
		
		//check passwords
		if ($oldpassword==$oldpassworddb)
		{
			//check two new passwords
			if ($newpassword==$repeatnewpassword)
			{
				//success..change password in db
				$querychange = mysql_query("
				UPDATE users SET password='$newpassword' WHERE username='$user'
				");
				session_destroy();
				header('Location: mainmenu.php');
			}
			else
				header('Location: changepassword.php');
				//New passwords don't match!");
		}
		else
			header('Location: changepassword.php');
			//die("&nbsp; &nbsp; Old password doesn't match");
	}
	else
	{

	echo "
	&nbsp; &nbsp; Change your Password
	<form action='changepassword.php' method='POST'>	
		&nbsp; &nbsp; Old Password: <input type='password' name='oldpassword'><br/>
		&nbsp; &nbsp; New Password: <input type='password' name='newpassword'><br/>
		&nbsp; &nbsp; Repeat New Password: <input type='password' name='repeatnewpassword'><br/>
		<br/>
		&nbsp; &nbsp;<input class='button' type='submit' name='submit' value='Change Password'>
	</form>";
	}
}
else
	die("You must be logged in to change your password!");


?>
</body>
</html>
