<?php
	
	//var_dump( $_POST);

	$username	=	'lenn@yahoo.com';
	$password 	=	'lennythekid';
	$message	=	'log in here';

	if ( isset( $_POST ['submit'] ) )
	{
		if ( $_POST['username'] == $username && $_POST['password'] == $password )
		{
			$message	=	'Welcome';
		}
		else
		{
			$message	=	'Error, something went wrong. Try again.';
		}
	}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Opdracht post: deel1</title>
</head>
<body>

	<h1>Opdracht post: deel1</h1>

	<h2>Log in</h2>

	<p><?php echo $message ?></p>

	<form action="opdracht-post.php" method="POST">
		
		<ul>
			<li>
				<label for="username">Username:</label>
				<input type="text" name="username" id="username" value="lenn@yahoo.com">
			</li>
			<li>
				<label for="password">Paswoord:</label>
				<input type="password" name="password" id="password" value="lennythekid">
			</li>
		</ul>

		<input type="submit" name="submit" value="Send">

	</form>
</body>
</html>