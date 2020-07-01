$(function() {
	$('.newMessage').hide();
	$('#messageBoxSignIn').click(function() {
		$('#username').focus();
	});
});

$(function() {
	$('.error').hide();
	$('#signIn').click(function() {
		var username = $('#username').val();
		
		if (username == "" || username == "username") {
			$('.error').show();
			return false;
		}
		
		$('#messageBoxSignInForm').hide();
		$('.newMessage').show();
		
		var dataString = 'username=' + username;
		
		$.ajax({
			type: "POST",
			url: "signinout.php",
			data: dataString,
			success: function() {
				$('.user').html('<span>Welcome <span id="loggedUser">' + username + '</span>!</span> <a onclick="window.location.reload()" id="signOut">SIGN OUT</a>');
				//window.alert('hi');
			}
		});
	});
});


$(function() {
	$('.error').hide();
	$('#signIn.password').click(function() {
		var password = $('#password').val();
		
		if (password == "" || password == "password") {
			$('.error').show();
			return false;
		}
		
		$('#messageBoxSignInForm').hide();
		$('.newMessage').show();
		
		var dataString = 'password=' + password;
		
		$.ajax({
			type: "POST",
			url: "login.php",
			data: dataString,
			success: function() {
				$('.user').html('<span>Welcome <span id="loggedUser">' + username + '</span>!</span> <a onclick="window.location.reload()" id="signOut">SIGN OUT</a>');
			}
		});
	});
});