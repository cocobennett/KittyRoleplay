<?php
 
error_reporting(E_ALL ^ E_NOTICE); 
 
session_start();
 
$username = $_POST['username'];
$password = $_POST['password'];

if ($username&&$password)
{
$connect = mysql_connect("localhost","root","") or die("Couldn't connect!");
mysql_select_db("kittyroleplay") or die("Couldn't find db!");

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
		header('Location: chat.php');
		$_SESSION['username']=$dbusername;
		$_SESSION['password']=$dbpassword;
	}
	else
		header('Location: chat.php');
}
else
	header('Location: chat.php');
	
}
else
	header('Location: chat.php');
?>