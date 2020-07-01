<html>
<?php

include('connect.php');

error_reporting(E_ALL ^ E_NOTICE); 

$username = $_SESSION['username'];

              
$query = mysql_query("SELECT * FROM cats WHERE user='$username'") or die("mysql_error");
if (mysql_num_rows($query)==0)
	die("No cats found!");

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


		/*$queryget = mysql_query("SELECT * FROM cats WHERE user='$user'") or die("Query didn't work");
		$row = mysql_fetch_assoc($queryget);
		
		while($user = $username)
		{		
				
		if ($user==$username)
		{
				while($row = mysql_fetch_array($queryget)){
			
				
				$querychange = mysql_query("
				SELECT cats SET name='$name', gender='$gender', bio='$bio', mate='$mate', clan='$clan', rank='$rank' WHERE user='$user' && name='$name'
				");*/
				
	echo "
	<center>
<table align='left'>
            <tr>
            	<td rowspan='6'>
                	&nbsp; &nbsp; <img src='".$cpic."' border='5' style='border-color:#ffffff;' height='170'>
				</td>
            </tr>
           	<tr>
                <td>
                	&nbsp; &nbsp; Cat's Name: ".$cname."<br/>
                </td>
            </tr>
            <tr>
                <td>
                    &nbsp; &nbsp; Cat's Gender: ".$cgender."<br/>
                </td>
            </tr>
            <tr>
                <td>
                    &nbsp; &nbsp; Cat's Clan: ".$cclan."<br/>
                </td>
            </tr>
            <tr>
                <td>
                    &nbsp; &nbsp; Cat's Rank: ".$crank."<br/>
                </td>
            </tr>
            <tr>
                <td>
                    &nbsp; &nbsp; Cat's Mate: ".$cmate."<br/>
                </td>
            </tr>
            <tr>
                <td colspan='2'>
                    &nbsp; &nbsp; About ".$cname.":<br/>&nbsp; &nbsp; ".$cbio."<br/>
                </td>
            </tr>
   	</table>
	<clear='left'>";
	
				}}

?>