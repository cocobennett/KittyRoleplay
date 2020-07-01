<html>
<head>
<style>
body {
	background-image:url('../dark/dark.jpg');*/
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
<title>Dark Forest</title>
</head>
<body>
<center>

<?php
error_reporting(E_ALL ^ E_NOTICE); 
include("../connect.php");

?>
<table width='600' border='1' bgcolor='#000000'>
    		<tr>
            	<td colspan='2'><center>
                <h1>Dark Forest Cats</h1><br/>
                Dark Forest does not have medicine cats or kits.
                </td>
            </tr>
            
            <tr>
            	<td><center>
                	Leader: 
				</td>
                <td><center>
                	Deputy:
                </td>
            </tr>
            <tr>
				<td><center>
					<?php include('../dark/dlead.php'); ?>
                </td>
				<td><center>
					<?php include('../dark/ddep.php'); ?>
                </td>
            </tr>
            
            <tr>
            	<td colspan='2'><center>
                	Warriors: 
				</td>
            </tr>
				<td colspan='2'>
					<?php include('../dark/dwar.php'); ?>
                </td>
            </tr>
            
            <tr>
            	<td><center>
                	Apprentices: 
				</td>
                <td><center>
                	Elders: 
				</td>
           	</tr>
            <tr>
				<td><center>
					<?php include('../dark/dapp.php'); ?>
                </td>
				<td><center>
					<?php include('../dark/deld.php'); ?>
                </td>
            </tr>
            
            <tr>
            	<td colspan='2'><center>
                	<a href='../index.php'>Go back to the Forest</a><br/>
                </td>
            </tr>
 
     </table>

</body>
</html>