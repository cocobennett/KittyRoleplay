<?php
include("connect.php");
include("loginrequired.php");
?>
<html>
<head>
<title>Member</title>
<link rel="stylesheet" type="text/css" href="stylesheet.css" />
<style>
body {
	background-image:url('background/reflect.jpg');
	height:500px;
	opacity:1;
	filter:alpha(opacity=100); /* For IE8 and earlier */
}
</style>
</head>
<body>
<div id="menu">
		&nbsp; &nbsp; <b>Welcome, <?php echo $user; ?>!</b><br/>
		&nbsp; &nbsp; <a href='profile.php'>See your profile!</a><br/>
		&nbsp; &nbsp; <a href='index.php'>Go to the Forest!</a><br/>
		&nbsp; &nbsp; <a href='upload.php'>Upload a profile picture!</a><br/>
		&nbsp; &nbsp; <a href='createcat.php'>Create a cat!</a><br/>
		&nbsp; &nbsp; <a href='editcat.php'>Edit a cat!</a><br/>
		&nbsp; &nbsp; <a href='catpic.php'>Add a cat's picture!</a><br/>
		&nbsp; &nbsp; <a href='changepassword.php'>Change your password</a><br/>
		&nbsp; &nbsp; <a href='logout.php'>Logout</a><br/>
</div>
<div id="vistors">
<font class="text2">
<?php //include("vistors.php"); ?>
</font>
</div>
<br/>
<div id="chatbox">
<?php include('chatbox.php'); ?>
</div>

</body>

</html>