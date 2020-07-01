<html>
<head>
<title>Upload Profile Picture</title>
<link rel="stylesheet" type="text/css" href="stylesheet.css" />
<style>
body {
	background-image:url('background/3kittens.jpg');
	height:500px;
	opacity:1;
	filter:alpha(opacity=100); /* For IE8 and earlier */
}
</style>
</head>
<body>

<?php

include("connect.php");

error_reporting(E_ALL ^ E_NOTICE); 

$username = $_SESSION['username'];

if ($_POST['submit'])
{
	//get file attributes
	$name = $_FILES['myfile']['name'];
	$tmp_name = $_FILES['myfile']['tmp_name'];
	
	if($name)
	{
		//start upload process
		$location = "avatars/$name";
		move_uploaded_file($tmp_name,$location);
		
		$query = mysql_query("UPDATE users SET imagelocation='$location' WHERE username='$username'");
		
		header('Location: profile.php');
		
	}
	else
	
	header('Location: upload.php');
	echo "&nbsp; &nbsp; Please select a file!";
	
}

echo "&nbsp; &nbsp; Upload your profile picture! :)

<form action='upload.php' method='POST' enctype='multipart/form-data'>
	&nbsp; &nbsp; File: <input type='file' name='myfile'> <input class='button' type='submit' name='submit' value='Upload'>
</form>

";

?>

</body>
</html>