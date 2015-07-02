<?php
	session_start();

	$error = array();

	if ( isset( $_POST['username'] ) && isset( $_POST['password'] ) ) {
		if ( $_POST['username'] === 'username' ) {
			$_SESSION['username'] = '1';
		} else {
			$error['username'] = "There is no user called $_POST[username]";
		}

		if ( $_POST['password'] === 'password' ) {
			$_SESSION['password'] = '1';
		} else {
			$error['password'] = "There is no user called $_POST[username]";
		}

		if ( $_SESSION['username'] === '1' && $_SESSION['password'] === '1' ) {
			header( "Location: $_SERVER[REQUEST_URI]" );
		}
	}
?><!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Login to My Treatment Plus</title>

	<link rel="shortcut icon" href="/favicon.ico" id="favicon">
	<link rel="stylesheet" href="/assets/css/style.css">
</head>
<body>
	<form method="post">
		<input type="text" name="username" placeholder="Username">
		<p><?php echo $error['username']; ?></p>
		<input type="password" name="password" placeholder="Password">
		<p><?php echo $error['password']; ?></p>
		<button type="submit">Login</button>
	</form>
<?php require_once( "$_SERVER[DOCUMENT_ROOT]/inc/footer.php" ); ?>