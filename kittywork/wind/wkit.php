
<?php

include('../connect.php');

error_reporting(E_ALL ^ E_NOTICE); 

$username = $_SESSION['username'];


$query = mysql_query("SELECT * FROM cats WHERE rank='Kit' && clan='WindClan'") or die("mysql_error");
if (mysql_num_rows($query)==0)
	echo "This Clan has no kits!";

else
{

while($row = mysql_fetch_assoc($query)){
$cuser = $row['user'];
$cname = $row['name'];
$cgender = $row['gender'];
$cbio = $row['bio'];
$cmate = $row['mate'];
$cclan = $row['clan'];
$crank = $row['rank'];
$cpic = $row['pic'];
$user = $username;

	if($crank='Kit'&&$cclan='WindClan') {

				
	echo "<table class='cats'>
	<tr>
	<td>
	<img src='../$cpic''>
	</td>
	</tr>
	<tr>
	<td><center>".$cname."
	</td>
	</tr>
	</table>";
	
	}else
		echo "This clan has no kits";
	{
	}}}

?>