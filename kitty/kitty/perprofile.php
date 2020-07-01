<?php

error_reporting(E_ALL ^ E_NOTICE); 

include("connect.php");

$username = $_SESSION['username'];

$query = mysql_query("SELECT * FROM users WHERE username='$username'");
if (mysql_num_rows($query)==0)
	die("User not found!");
else
{
	$row = mysql_fetch_assoc($query);
	$location = $row['imagelocation'];
	$name = $row['name'];
	$user = $row['username'];
	$bio = $row['bio'];
}


echo "
<a href='member.php'>Back to Member's Page</a><br/>
<b>".$username."'s Profile</b><br/>
	<table>    		
    		<tr>
            	<td rowspan='4'>
                	&nbsp; &nbsp; <img src='".$location."' border='5' style='border-color:#ffffff;' height='200'>
                </td>
            </tr>
           	<tr>
                <td>
                	&nbsp; &nbsp; Name: ".$name."<br/>
                </td>
            </tr>
            <tr>
                <td>
                   &nbsp; &nbsp; Username: ".$user."<br/>
                </td>
            </tr>
            <tr>
                <td>
                    &nbsp; &nbsp; About ".$username.":<br/> &nbsp; &nbsp; ".$bio."<br/>
                </td>
            </tr>
             <tr>
            	<td colspan='2'><center>
                	<br/>
                	<b>My Warriors Cats</b> 
					<br/>           
               </td>            
            </tr>
        </table>";
					?>
