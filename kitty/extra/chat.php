<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"> 
<html xmlns="http://www.w3.org/1999/xhtml"> 
<head>
<link rel="stylesheet" type="text/css" href="chat.css" />
<script src="jQuery.js" type="text/javascript"></script>

<title>Chatbox</title>
</head>
<body>
<h1>Chatbox</h1>
<div class="chatBox">
	<div class="user">
		<form method="post" name="signIn" action="chatlogin.php" onsubmit="return false">
			<span class="error">Invalid username</span>
			<input type="text" size="13px" name="username" id="username" value="username" onclick='document.signIn.username.value = ""' />
            <span class="error">Invalid password</span>
            <input type="password" size="13px" name="password" id="password" value="password" onclick='document.signIn.password.value = ""' />
			<input type="submit" id="signIn" value="SIGN IN" />
		</form>
	</div>
	<div class="main">
		admin: hey!
	</div>
	<div class="messageBox">
		<form name="messageBoxSignInForm" id="messageBoxSignInForm" onsubmit="return false">
			<input type="submit" id="messageBoxSignIn" value="Sign in to enter chat" />
		</form>
		<form name="newMessage" class="newMessage" action="" onsubmit="return false">
			<div class="left">
				<textarea name="newMessageContent" id="newMessageContent">Enter your message here</textarea>
			</div>
			<div class="right">
				<input type="submit" id="newMessageSend" value="SEND" />
			</div>
		</form>
	</div>
</div>
<script src="signinout.js" type="text/javascript"></script>
</body>
</html>