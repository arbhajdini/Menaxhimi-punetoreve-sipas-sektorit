<!DOCTYPE HTML>
<!--
	Industrious by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>
	<head>
		<title>Moduli Administratorit</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<body class="is-preload">
		<?php
		//including the database connection file
		include_once("config.php");

		if(isset($_POST['add'])) {
			$username = $_POST['username'];
			$password = $_POST['password'];

			// checking empty fields
			if(empty($username) || empty($password)) {
				if(empty($username)) {echo "<font color='red'>username field is empty.</font><br/>";}
				if(empty($password)) {echo "<font color='red'>password field is empty.</font><br/>";}
				//link to the previous password
				echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
			} else {
				// if all the fields are filled (not empty)
				//insert data to database
				$result = mysqli_query($conn, "INSERT INTO perdoruesit_umps(perdoruesi_umps,fjalekalimi_umps) VALUES('$username','$password')");
				//display success message
			}
		}
		?>

		<div id="loading-screen" class="loading-screen">
			<div class="loading-spinner"></div>
			<div class="loading-message">E dhena eshte duke u regjistruar ne sistem. Ju lutem pritni 5 sekonda.</div>
		</div>

		<script>
			function showLoadingScreen() {
				var loadingScreen = document.getElementById('loading-screen');
				loadingScreen.style.display = 'flex';
			}

			function hideLoadingScreen() {
				var loadingScreen = document.getElementById('loading-screen');
				loadingScreen.style.display = 'none';
			}

			<?php if (isset($_POST['add']) && !empty($username) && !empty($password)) { ?>
				showLoadingScreen();
				setTimeout(function() {
					hideLoadingScreen();
					window.location.href = 'perdoruesit.php';
				}, 5000); // Display the loading screen for 5 seconds
			<?php } ?>
		</script>
	</body>
</html>
