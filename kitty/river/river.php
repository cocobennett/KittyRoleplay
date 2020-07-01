<html>
<head>
<style>
body {
	background-image:url('../river/river.jpg');*/
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
<title>RiverClan</title>
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
                <h1>RiverClan Cats</h1>
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
					<?php include('../river/rlead.php'); ?>
                </td>
				<td><center>
					<?php include('../river/rdep.php'); ?>
                </td>
				<td><center>
					<?php include('../river/rmed.php'); ?>
                </td>
            </tr>
            
            <tr>
            	<td colspan='3'><center>
                	Warriors: 
				</td>
            </tr>
				<td colspan='3'>
					<?php include('../river/rwar.php'); ?>
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
					<?php include('../river/rapp.php'); ?>
                </td>
				<td><center>
					<?php include('../river/rkit.php'); ?>
                </td>
				<td><center>
					<?php include('../river/reld.php'); ?>
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