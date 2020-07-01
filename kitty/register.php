<center>
<?php

error_reporting(E_ALL ^ E_NOTICE); 

$submit = $_POST['submit'];

//form data
$username = strip_tags($_POST['username']);
$password = strip_tags($_POST['password']);
$repeatpassword = strip_tags($_POST['repeatpassword']);
$name = strip_tags($_POST['name']);
$email = strip_tags($_POST['email']);
$bio = addslashes(strip_tags($_POST['bio']));
$date = date("Y-m-d");
$imagelocation = "";

if ($submit)
{
	//open database
		include("connect.php");
		
		$namecheck = mysql_query("SELECT username FROM users WHERE username='$username'");
		$count = mysql_num_rows($namecheck);
	
		if ($count!=0)
		{
			die ("Username already taken!");
		}
		
	//check for existance
	if($username&&$password&&$repeatpassword&&$name)
	{
		if ($password==$repeatpassword)
		{
			//check char length of username and display name
			if (strlen($username)>25||strlen($name)>25)
			{
				header('Location: register.php');
			}
			else
			{
				//check password length
				if (strlen($password)>25||strlen($password)<6)
				{
					header('Location: register.php');
				}
				else
				{
					//register the user!!!
					
					//encrypt password
		$password = md5($password);
		$repeatpassword = md5($repeatpassword);
				
					
					$queryreg = mysql_query("
					
					INSERT INTO users VALUES ('','$username','$password','$imagelocation','$name','$email','$bio','$date')
					
					");
					
					header('Location: mainmenu.php');
				}
			}
		}
		else
			header('Location: register.php');
		
	}
	else
		header('Location: register.php');
}

?>
<br/>
<html>
<head>
<style>
body {
	background-image:url('background/sunsky.jpg');
	height:500px;
	opacity:1;
	filter:alpha(opacity=100); /* For IE8 and earlier */
}
</style>
<link rel="stylesheet" type="text/css" href="stylesheet.css" />
</head>
<body>
<center>
<font class='text2'><b>Register</b></font><br/>
<form action='register.php' method='POST'>

	<table>
    		<tr>
            	<td class='text2'>
                Username:
                </td>
                <td>
                <input type='text2' name='username' value='<?php echo $username ?>'>
                </td>
            </tr>
            
            <tr>
            	<td class='text2'>
                Password:
                </td>
                <td>
                <input type='password' name='password'>
                </td>
            </tr>
            
            <tr>
            	<td class='text2'>
                Repeat Your Password:
                </td>
                <td>
                <input type='password' name='repeatpassword'>
                </td>
            </tr>
            
            <tr>
            	<td class='text2'>
                First Name:
                </td>
                <td>
                <input type='text' name='name' value='<?php echo $name ?>'>
                </td>
            </tr>
            
            <tr>
            	<td class='text2'>
                Email:
                </td>
                <td>
                <input type='text2' name='email' value='<?php echo $email ?>'>
                </td>
            </tr>
            
            <tr>
            	<td class='text2'>
                About you:
                </td>
                <td>
                <textarea cols="15" rows="3" name='bio' value='<?php echo $bio ?>'></textarea>
                </td>
            </tr>
     </table>
     <br/>
     <input type='submit' class='button' name='submit' value='Register'>
</form>

</body>
</html>