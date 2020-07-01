<?php
include('connect.php');
 
$username = $_POST['username'];
$password = $_POST['password'];
echo "username=" + $username + " password=" + $password;	
if ($username&&$password)
{

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
	
	if ($username==$dbusername)
	echo "Username match!";
	if (md5($password)==$dbpassword)
	echo "Password match!";
	
	//check to see if they match!
	if ($username==$dbusername&&md5($password)==$dbpassword)
	{
		$_SESSION['username']=$dbusername;
		echo "Redirect to member.php";
		header("Location: member.php");
	}
	else
		echo "Username or password don't match!";
		//header("Location: mainmenu.php");
}
else
	echo "No rows returned from login sql!";
	// header("Location: mainmenu.php");
	
}
else
	echo "Missing username or password!";
	// header("Location: mainmenu.php");
?>