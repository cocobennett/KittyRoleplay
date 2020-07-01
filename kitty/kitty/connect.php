<?php
error_reporting(E_ALL ^ E_NOTICE); 
error_reporting(E_ALL ^ E_WARNING); 

session_start();


$environment = getenv("APPLICATION_ENV");
if ($environment == "coco")
{
    // do development stuff
$dbhost = "127.0.0.1";
$dbuser = "root";
$dbpass = "";
$dbname = "kittyroleplay"; 
//echo "You are on the Coco test server";
}
else if ($environment == "pacifichost")
{
    // do live stuff
$dbhost = "216.144.249.66";
$dbuser = "starlily";
$dbpass = "5ZdnIcq035";
$dbname = "starlily_kitty";
//echo "You are on the PacificHost server";
}
else{
    // do live stuff
echo "Server environment not detected. Check the htaccess file.";
}

mysql_connect($dbhost, $dbuser, $dbpass) or die(mysql_error());
mysql_select_db($dbname) or die(mysql_error());

?>
//<html>
//<link rel="shortcut icon" href="favicon.ico">
//</html>