<html>
<head>
<style>
body {
	background-image:url('background/laketree.jpeg');
	height:500px;
	opacity:1;
	filter:alpha(opacity=100); /* For IE8 and earlier */
}
</style>
<link rel="stylesheet" type="text/css" href="stylesheet.css" />
</head>
<body>

<?php

error_reporting(E_ALL ^ E_NOTICE); 

include("connect.php");

$username = $_SESSION['username'];

if ($_POST['submit'])
{
	//get file attributes
	$name = $_FILES['cat1pic']['name'];
	$tmp_name = $_FILES['cat1pic']['tmp_name'];
	$cname = $_POST['name'];
	
	if($name&&$cname)
	{
		//start upload process
		$location = "cat1/$name";
		move_uploaded_file($tmp_name,$location);
		
		$query = mysql_query("UPDATE cats SET pic='$location' WHERE user='$username' && name='$cname'");
		header('Location: profile.php');
		
	}
	else
	header('Location: catpic.php');
	
}

echo "<font class='text2'>&nbsp; &nbsp; Now it's time to upload your cat's picture:</font>

<form action='catpic.php' method='POST' enctype='multipart/form-data'>
<font class='text2'>
	&nbsp; &nbsp; Your Cat's Name: <input type='text' name='name' value='*must be exact'><br/>
	&nbsp; &nbsp; <input type='file' name='cat1pic'> <input class='button' type='submit' name='submit' value='Upload'>
</form>

";

?>

</body>
</html>