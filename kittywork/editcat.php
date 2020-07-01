<html>
<head>
<title>Edit a Cat</title>
<link rel="stylesheet" type="text/css" href="stylesheet.css" />
<style>
body {
	background-image:url('background/trees.jpg');
	height:500px;
	opacity:1;
	filter:alpha(opacity=100); /* For IE8 and earlier */
}
</style>
</head>
<body>
<center>
<div id='transbox'>
<font class='text'>

<?php

error_reporting(E_ALL ^ E_NOTICE); 

include('connect.php');

$username = $_SESSION['username'];

if ($username)
{
	//if user is logged in
	if ($_POST['submit'])
	{
		//check fields
		
		$user = $username;
		$oldname = $_POST['oldname'];
		$name = $_POST['name'];
		$gender = $_POST['gender'];
		$bio = $_POST['bio'];
		$mate = $_POST['mate'];
		$clan = $_POST['clan'];
		$rank = $_POST['rank'];
		
		//check password against db
		
		
		$queryget = mysql_query("SELECT name FROM cats WHERE user='$user'") or die("Query didn't work");
		$row = mysql_fetch_assoc($queryget);
		$cname = $row['name'];
		
		while($cname = $oldname)
		{		
				
		if ($oldname==$cname)
		{
				while($row = mysql_fetch_array($queryget)){
			
				//success..change cat in database
				$querychange = mysql_query("
				UPDATE cats SET name='$name', gender='$gender', bio='$bio', mate='$mate', clan='$clan', rank='$rank' WHERE user='$user' && name='$oldname'
				");
				header('Location: profile.php');
				
				}
	
		}
		else
			header('Location: editcat.php');
		}
	}
	else
	{
	

	echo "
	<form action='editcat.php' method='POST'><font class='text2'>
		<table align='center' bgcolor='#ffffff'>
    		<tr>
            	<td colspan='2'><center>
                	<h1>Edit your Cat</h1>				
                </td>
            </tr>    
			<tr>
			<td colspan='2'><center>
				Must repeat all fields so copy & paste.	Sorry for the inconvenience! =^.^=<br/>	
			</td></center>
			</tr>
			<tr>
            	<td>
                Cat's Old Name:
                </td>
                <td>
                <input type='text' name='oldname' value='*must be exact'>
                </td>
            </tr>
    		<tr>
            	<td>
                Cat's New Name:
                </td>
                <td>
                <input type='text' name='name'>
                </td>
            </tr>
            
            <tr>
            	<td>
                Cat's Gender:
                </td>
                <td>
                <select name='gender'>
                	<option>She-cat</option>
                    <option>Tom</option>
                </select>
                </td>
            </tr>
            
            <tr>
            	<td>
                Cat's Bio:
                </td>
                <td>
                <textarea col='10' row='3' name='bio'></textarea>
                </td>
            </tr>
            
            <tr>
            	<td>
                Cat's Mate:
                </td>
                <td>
                <input type='text' name='mate'>
                </td>
            </tr>
            <tr>
            	<td>
                Cat's Clan:
                </td>
                <td>
                <select name='clan'>
                	<option name='tc'>ThunderClan</option>
                    <option name='rc'>RiverClan</option>
                    <option name='sc'>ShadowClan</option>
                    <option name='wc'>WindClan</option>
                    <option name='stc'>StarClan</option>
                </select>
                </td>
            </tr>
            <tr>
            	<td>
                Cat's Rank:
                </td>
                <td>
                <select name='rank'>
                	<option name='war'>Warrior</option>
                    <option name='app'>Apprentice</option>
                    <option name='kit'>Kit</option>
                    <option name='eld'>Elder</option>
                    <option name='med'>Medicine Cat</option>
                    <option name='dep'>Deputy</option>
                    <option name='lead'>Leader</option>
                </select>
                </td>
            </tr>
            <tr>
            	<td colspan='2'><center>
                	<input type='submit' class='button' name='submit' value='Edit your Cat!'>
                </td>
            </tr>
            
     </table>
	</form>
	</p>";
	}
}
else
	header('Location: mainmenu.php');


?>
</div>
</body>
</html>
