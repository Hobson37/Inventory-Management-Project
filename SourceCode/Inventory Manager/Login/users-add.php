<?php
//Start the session
	session_start();
	if(!isset($_SESSION['user'])) header('location: Login.php');
	$_SESSION['table'] = 'users';
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
		<div class="row">
			<div class="column column-5">
	<div class="userAddContentMain">
		<div id="userAddFormContainer">
	<form action="database/add.php" method="POST" class="appForm">
		<div class="appFormInputContainer">
			<label for="first_name">First Name</label>
			<input type="text" class="appFormInput" id="first_name" name="first_name" />
		</div>
		<div class="appFormInputContainer">
			<label for="last_name">Last Name</label>
			<input type="text"  class="appFormInput" id="last_name" name="last_name" />
		</div>
				<div class="appFormInputContainer">
			<label for="email">Email</label>
			<input type="text" class="appFormInput" id="email" name="email" />
		</div>
				<div class="appFormInputContainer">
			<label for="password">Password</label>
			<input type="password" class="appFormInput" id="password" name="password" />
		</div>
  			<button type="submit" class="appBtn"><i class="fa fa-plus"></i>Add User</button>
			</form>
			<?php
				if(isset($_SESSION['response'])){
					$response_message = $_SESSION['response']['message'];
					$is_success = $_SESSION['response']['success'];
				 ?>
				<div class="responseMessage">
					<p class="responseMessage <?= $is_success ? 'responseMessage__success'  :  'responseMessage__error' ?>"
					 >
						<?= $response_message ?>
					</p>
				</div>
				<?php unset($_SESSION['response']); } ?>
				</div>
			</div>
			<div class="column column-7">
				<p>Hi</p>
			</div>	
		</div>
	</div>
	</div>
</div>

<script src="JS/script.js"></script>
</body>
</html>