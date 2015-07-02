<?php
	session_start();

	if ( $page['login_required'] && $_SESSION['username'] !== '1' && $_SESSION['password'] !== '1' ) {
		require_once( "$_SERVER[DOCUMENT_ROOT]/login.php" );

		exit;
	}
?><!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title><?php if ( $page['title'] ) echo "$page[title] "; if ( $page['title_joiner'] ) echo "$page[title_joiner] "; ?>My Treatment Plus</title>

	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="shortcut icon" href="/favicon.ico">
	<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,400italic,500,500italic">
	<link rel="stylesheet" href="/assets/css/style.css">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="/assets/js/mustache.js" type="text/javascript"></script>
	<script src="/assets/js/popup.js" type="text/javascript"></script>
</head>
<body>
	<header>
		<div id="hero-header">
			<div class="wrap clear">
				<div id="header-logo">
					<a href="/">My Treatment Plus</a>
				</div>
				<nav id="header-menu">
					<ul>
						<li class="home menu-item single-line"><a href="/">Home</a></li>
						<li class="attestation-management menu-item"><a href="/">Attestation Management</a></li>
						<li class="user-management menu-item"><a href="/">User Management</a></li>
						<li class="treatment-plan-management menu-item"><a href="/">Treatment Plan Management</a></li>
					</ul>
				</nav>
			</div>
		</div>
	</header>