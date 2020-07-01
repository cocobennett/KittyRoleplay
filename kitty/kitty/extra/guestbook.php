<?php

include("connect.php");

$username = $_SESSION['username'];

$time = time();
$errors = array();

?>

<hr/>
<form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="POST">
<strong>Post Something....</strong><br/>
Name:<br/><input type="text" name="questbook_name" maxlength="25" value="<?php echo $username ?>"/><br/>
Email:<br/><input type="text" name="questbook_email" maxlength="255" /><br/>
Message:<br/><textarea name="guestbook_message" rows="5" cols="40" maxlength="255"></textarea><br/>
<input type="submit" value="Post" />
</form>