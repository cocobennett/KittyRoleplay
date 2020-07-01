<html>
<head>
<title>Create a Cat! =^.^=</title>
<link rel="stylesheet" type="text/css" href="stylesheet.css" />
<style>
body {
	background-image:url('background/kitten.jpg');
	height:500px;
	opacity:1;
	filter:alpha(opacity=100); /* For IE8 and earlier */
}
text3 {
	text-align:right;
	
}
</style>
</head>
<body>
<font class='text2'>
<?php


error_reporting(E_ALL ^ E_NOTICE); 

//add that only 1 cat per name

include("connect.php");

$username = $_SESSION['username'];

$submit = $_POST['submit'];

//form data
$user = $username;
$name = strip_tags($_POST['name']);
$gender = strip_tags($_POST['gender']);
$bio = strip_tags($_POST['bio']);
$mate = strip_tags($_POST['mate']);
$clan = strip_tags($_POST['clan']);
$rank = strip_tags($_POST['rank']);
			
if ($submit)
				{											
					
					//create a cat!!!
					
					$query = mysql_query("
					
					INSERT INTO cats VALUES ('','$user','$name','$gender','$bio','$mate','$clan','$rank','')
					
					");
					
					header('Location: member.php');
									
				}

?>

<br/>
<form action='createcat.php' method='POST'>
	<table align="right">
    		<tr>
            	<td colspan="2"><center>
                <?php echo "<h1>Create a Cat</h1>"; ?>
                </td>
            </tr>
            <tr>
                <td>
                <?php echo "<font class='text3'>Come to create a cat, ".$username."?<br/>"; ?>
                </td></center>
            </tr>
    
    		<tr>
            	<td>
                Cat's Name:
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
            	<td colspan="2"><center>
                	<input type='submit' name='submit' value='Create a Cat!'>
                </td>
            </tr>
            
     </table>
     <br/>
</form>

</body>
</html>