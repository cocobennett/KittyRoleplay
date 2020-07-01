<?php

function censor($string)
{
	if ($string)
	{
		
		//array of swear words and their replacements
		$sweararray =   array("bloody", "mean");
		$replacearray = array("blood",  "m33n");
		
		$newstring = str_ireplace($sweararray, $replacearray, $string);
		
		return $newstring;
	}
}

if ($_POST['submit'])
{
	//echo censor($_POST['text']);
	//$newtext = censor($_POST['text']);
}

?>
<hr>
<form action='swearfilter.php' method='POST'>
	<textarea name='text'></textarea><br/>
    <input type='submit' name='submit' value='Post'>
</form>