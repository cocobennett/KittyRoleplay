
<?php

include('../connect.php');

error_reporting(E_ALL ^ E_NOTICE); 

$username = $_SESSION['username'];

              
$query = mysql_query("SELECT * FROM cats WHERE rank='Leader' && clan='ShadowClan'") or die("mysql_error");
if (mysql_num_rows($query)==0)
	echo "This Clan has no leader!";

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

}
			
	echo "
	<img src='../$cpic' height='50'><br/><center>".$cname."<br/>";

}

?>