<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="shortcut icon" href="favicon.ico">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Homepage</title>
<link rel="stylesheet" type="text/css" href="stylesheet.css" />
<style>
body {
	background-image:url('background/winter.jpg');
	height:500px;
	opacity:1;
	filter:alpha(opacity=100); /* For IE8 and earlier */
}
</style>
</head>
<body><center>
<img src="clans/clans.png" alt="Clans" height="550" border="0" usemap="#Map" top="0px" right="0px" />
<map name="Map" id="Map">
  <area shape="rect" coords="17,7,140,54" href="member.php" target="_parent" />
  <area shape="rect" coords="666,313,819,347" href="aboutkitty.php" target="_parent" />
  <area shape="rect" coords="191,133,331,193" href="thunder/thunder.php" target="_parent" />
  <area shape="rect" coords="386,353,539,414" href="river/river.php" target="_parent" />
  <area shape="rect" coords="1123,192,1272,254" href="wind/wind.php" target="_parent" />
  <area shape="rect" coords="924,385,1075,452" href="shadow/shadow.php" target="_parent" />
  <area shape="rect" coords="37,483,197,550" href="dark/dark.php" target="_parent" />
  <area shape="rect" coords="766,30,911,89" href="star/star.php" target="_parent" />
</map>
<?php 
error_reporting(E_ALL ^ E_WARNING); 
include("connect.php");
include("hitcounter.php"); 

?>
</body>
</html>