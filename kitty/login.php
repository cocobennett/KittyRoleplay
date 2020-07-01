<?php
 
error_reporting(E_ALL ^ E_NOTICE); 
 
session_start();
 
$username = $_POST['username'];
$password = $_POST['password'];
echo "username=" + $username + " password=" + $password;	
if ($username&&$password)
{
include('connect.php');

$query = mysql_query("SELECT * FROM users WHERE username='$username'");

$numrows = mysql_num_rows($query);

if ($numrows!=0)
{
	//code to login
	while ($row = mysql_fetch_assoc($query))
	{
		$dbusername = $row['username'];
		$dbpassword = $row['password'];
	}
	
	//check to see if they match!
	if ($username==$dbusername&&md5($password)==$dbpassword)
	{
		echo "<meta http-equiv=\"refresh\" content=\"0;URL=member.php\">";
		$_SESSION['username']=$dbusername;
	}
	else
		echo "header('Location: mainmenu.php');";
}
else
	echo "header('Location: mainmenu.php');";
	
}
else
	echo "header('Location: mainmenu.php'); ";
?>