<html>
<head>
<style>
body {
	background-image:url('../star/star.gif');*/
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
<title>StarClan</title>
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
                <h1>StarClan Cats</h1><br/>
                StarClan does not have leaders, deputies, or medicine cats.
                </td>
            </tr>
                       
            <tr>
            	<td colspan='3'><center>
                	Warriors: 
				</td>
            </tr>
				<td colspan='3'>
					<?php include('../star/stwar.php'); ?>
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
					<?php include('../star/stapp.php'); ?>
                </td>
				<td><center>
					<?php include('../star/stkit.php'); ?>
                </td>
				<td><center>
					<?php include('../star/steld.php'); ?>
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