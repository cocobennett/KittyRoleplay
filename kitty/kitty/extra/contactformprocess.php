<?php

//error_reporting(E_ALL ^ E_NOTICE); 

include("connect.php");

$user = $_SESSION['username'];

$emailSubject = '$user of Kitty-Roleplay';
$webMaster = 'starlilycoco@yahoo.com';

$emailField = $_POST['email'];
$nameField = $_POST['name'];
$responseField = $_POST['response'];
$commenstField = $_POST['comments'];

$body = <<<EOD
<br/><hr><br/>
Email: $email <br/>
Name: $name <br/>
Response Type: $response <br/>
Comments: $comments <br/>
EOD;

	$headers = "From: $email\r\n";
	$headers .= "Content-type: text/html\r\n";
	$success = mail($webMaster, $emailSubject, $body, $headers);
	
$theResults = <<<EOD
<html>
<head>
<title>JakesWorks - travel made easy-Homepage</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<style type="text/css">
<!--
body {
	background-color: #f1f1f1;
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 12px;
	font-style: normal;
	line-height: normal;
	font-weight: normal;
	color: #666666;
	text-decoration: none;
}
-->
</style>
</head>

<div>
  <div align="left">Thank you for your interest! Your email will be answered very soon!</div>
</div>
</body>
</html>
EOD;

echo "$theResults";


?>