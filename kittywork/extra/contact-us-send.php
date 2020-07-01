<?php

include("connect.php");

$user = $_SESSION['username'];

if(isset($_POST['submit'])) {
	$msg = 'Name: '.$_POST['name']."\n"
		.'Email: '.$_POST['email']."\n"
		.'Comments: '.$_POST['comments'];
	mail('starlilycoco@yahoo.com','$user at Kitty-Roleplay', $msg);
	header('location: contact-us-thank-you.php');
} else {
	header('location: contact-us.php');
	exit(0);
	
}



?>