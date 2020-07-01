<?php

session_start();

//error_reporting(E_ALL ^ E_NOTICE); 


function vistorsonline()
{
$session_path = session_save_path();

$vistors = 0;

$handle = opendir($session_path);

while (($file = readdir($handle)) != FALSE)
{
	if ($file!="."&&$file!="..")
	{
		if(@ereg("^sess",$file))
			$vistors++;
		
	}
}
return $vistors;
}

$v = vistorsonline();
echo "There are $v vistors online.";

?>