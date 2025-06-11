<?php
/* Index.php faqja qe permban formen e loginit) */
	include('login.php'); // Include Login Script
	if ((isset($_SESSION['username']) != '')) 
	{
		header('Location: faqja_administratorit.php');
	}	
	
?>
<!DOCTYPE HTML>
<!--
	Editorial by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>UMPS</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
		<link rel="icon" href="images/favicon.png" type="image/png">
	</head>
	<body class="is-preload">

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Main -->
					<div id="main">
						<div class="inner">

							<!-- Header -->
								<header id="header">
									<h2 style="text-align:center;font-size:30px;"><strong><?php include_once("header.php");?></strong></h2><br>
									  
								</header>

							<!-- Banner -->

							<!-- Section -->
								<section>
									<h3>Identifikohu   <span style="font-size:12px; color:red;">(Ndalohet qasja nga personat e paautorizuar)</span></h3>
									

													<form method="post" action="">
														<div class="row gtr-uniform">
															<div class="col-6 col-12-xsmall">
																<input class="formakycjes" type="text" name="username" id="username" value="" placeholder="Perdoruesi" />
															</div>
															<div class="col-6 col-12-xsmall">
																<input class="formakycjes" type="password" name="password" id="password" value="" placeholder="Fjalekalimi" />
															</div>
															<!-- Break -->
															<!-- Break -->
															<!-- Break -->
															<?php if (!empty($error)) : ?>
																<div class="error-message">
																	<?php echo $error; ?>
																</div>
															<?php endif; ?>
															<div class="col-12">
																<ul class="actions">
																	<li><input type="submit"name="submit" value="Kycu" class="button" /></li>
																</ul>
																
															</div>
														</div>
													</form>
								</section>

						</div>
					</div>

				<!-- Sidebar -->
					<div id="sidebar">
						<div class="inner">

							<!-- Search -->
								

							<!-- Menu -->
								<nav id="menu">
									<header class="major">
										<h2>Meny</h2>
									</header>
									<ul>
										<li><a href="index.php">kycu</a></li>
										<li><a href="../ModuliPerdoruesit/index.php">Faqja Kryesore</a></li>
									</ul>
								</nav>

								

							<!-- Section -->
							

							<!-- Footer -->
								<footer id="footer">
									<p class="copyright">&copy; Untitled. All rights reserved. Demo Images: <a href="https://unsplash.com">Unsplash</a>. Design: <a href="https://html5up.net">HTML5 UP</a>.</p>
								</footer>

						</div>
					</div>

			</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>