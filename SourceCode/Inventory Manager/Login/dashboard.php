<?php
//Start the session
session_start();
if(!isset($_SESSION['user'])) header('location: Login.php');
$user = $_SESSION['user'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title> Dashboard  - Restaurant Inventory Management System</title>

	<link rel="stylesheet" type="text/css" href="CSS/login.css">
	<script src="https://kit.fontawesome.com/9a64ce120c.js" crossorigin="anonymous"></script>
</head>
<body>
	<div id="dashboardMainContainer">
		<?php include('Partials/app-sidebar.php') ?>
	<div class="dashboardContentContainer" id="dashboardContentContainer">
		<?php include('Partials/app-TopNav.php') ?>
	<div class="dashboardContent">
	<div class="dashboardContentMain">
		<h1>Welcome!</h1>

			<p> Thank you for trying the Restaurant Information system database. This database will help keep all your restaurant inventory safely organized and keep track of all your goods to help maintain end of month spending on inventory items. </P>
			

	</div>
</div>
</div>
</div>
<script src="JS/script.js"></script>
</body>
</html>