<?php

// Start the session
session_start();
if(isset($_SESSION['user'])) header('location: dashboard.php');

	if($_POST){
		include('database/connection.php');

		$username = $_POST['username'];
		$password = $_POST['password'];

		$query = 'SELECT * FROM users WHERE users.email="' . $username . '" AND users.password ="'  . $password . '"';
		$stmt = $conn->prepare($query);
		$stmt->execute();


		
				if($stmt->rowcount() > 0){

				$stmt->setFetchMode(PDO::FETCH_ASSOC);
				$user = $stmt->fetchAll()[0];
				$_SESSION['user'] = $user;
			
				header('Location: dashboard.php');
		
				} else $error_message = "Please make sure Username and Password are correct";

	}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"> 
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title> RIMS login  - Restaurant Inventory Management System</title>

	<link rel="stylesheet" type="text/css" href="CSS/login.css">
</head>
<body id="loginBody">
	<?php
		if(!empty($error_message)) {
			?>

	<div id="errorMessage"> 
		<strong>Error:</strong></p><?= $error_message ?></P>
		 </div>
		<?php } ?>
	<div class="container">
		<div class="loginHeader">
			<p>Restaurant Inventory Management System</p>
		</div>
		<div class="loginBody">
			<form action="Login.php" method="POST">
				<div class="loginInputsContainer">
					<label for="">Username/Email</label>
					<input placeholder="username" name= username type="text" />
				</div>
				<div class="loginInputsContainer">
					<label for="">Password</label>
					<input placeholder="password" name= password type="password" />
				</div>
				<div class="loginButtonContainer">
				<button>login</button>
			</div>
			</form>
		</div>
	</div>
</body>
</html>