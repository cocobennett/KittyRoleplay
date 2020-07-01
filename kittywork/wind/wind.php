<html>
<head>
<style>
body {
	background-image:url('../wind/wind.jpg');*/
	height:500px;
	opacity:1;
	filter:alpha(opacity=100); /* For IE8 and earlier */
}
img {
	height:100;
	text-wrap:none;
}
</style>
<link rel="stylesheet" type="text/css" href="../stylesheet.css" />
<link rel="shortcut icon" href="../favicon.ico">
<title>WindClan</title>
</head>
<body>
<center>

<?php
error_reporting(E_ALL ^ E_NOTICE); 
include("../connect.php");

?>
<table width='600' border='1' bgcolor='#000000'>
    		<tr>
            	<td colspan='3'><center>
                <h1>WindClan Cats</h1>
                </td>
            </tr>
            
            <tr>
            	<td><center>
                	Leader: 
				</td>
                <td><center>
                	Deputy:
                </td>
                <td><center>
                	Medicine Cat:
                </td>
            </tr>
            <tr>
				<td><center>
					<?php include('../wind/wlead.php'); ?>
                </td>
				<td><center>
					<?php include('../wind/wdep.php'); ?>
                </td>
				<td><center>
					<?php include('../wind/wmed.php'); ?>
                </td>
            </tr>
            
            <tr>
            	<td colspan='3'><center>
                	Warriors: 
				</td>
            </tr>
				<td colspan='3'>
					<?php include('../wind/wwar.php'); ?>
                </td>
            </tr>
            
            <tr>
            	<td><center>
                	Apprentices: 
				</td>
                <td><center>
                	Kits: 
				</td>
                <td><center>
                	Elders: 
				</td>
           	</tr>
            <tr>
				<td><center>
					<?php include('../wind/wapp.php'); ?>
                </td>
				<td><center>
					<?php include('../wind/wkit.php'); ?>
                </td>
				<td><center>
					<?php include('../wind/weld.php'); ?>
                </td>
            </tr>
            
            <tr>
            	<td colspan='3'><center>
                	<a href='../index.php'>Go back to the Forest</a><br/>
                </td>
            </tr>
 
     </table>

</body>
</html>