<?php

include('connect.php');
include("protect.php");

$username = $_POST['username'];
$password = md5($_POST['password']);

$sql = "INSERT INTO users (username, password) VALUES ('', $username, $password, '', '', '', '', '')";
$result = mysql_query($sql, $connect) or die(mysql_error($connect));

?>