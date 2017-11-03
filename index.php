<?php
	require_once("dbconnection.php");

	$query = "SELECT id, title, author, message, date FROM posts ORDER BY id DESC";
?>

<!DOCTYPE html>
<html>
<head>
	<title>Filips Blogg</title>
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
<div class="main-wrapper">
	<div class="sidebar">
		<div class="top-container">
			<img class="sidebar-profile-picture" src="img/standard-profile.png">
			<p class="sidebar-username">Username</p>
		</div>
		<div class="middle-container">
			<div class="sidebar-link"><p>Posts</p></div>
			<div class="sidebar-link"><p>New Post</p></div>
			<div class="sidebar-link"><p>Manage</p></div>
		</div>
		<div class="bottom-container">
			<p class="sidebar-logout">Log out</p>
		</div>
	</div>
	<div class="main-page-wrapper">
		<div class="article"></div>
		<div class="article"></div>
		<div class="article"></div>
		<div class="article"></div>
		<div class="article"></div>
		<div class="article"></div>
		<div class="article"></div>
		<div class="article"></div>
		<div class="article"></div>
		<div class="article"></div>
		<div class="article"></div>
		<div class="article"></div>
		<div class="article"></div>
		<div class="article"></div>
		<div class="article"></div>
		<div class="article"></div>
	</div>
</div>
</body>
</html>