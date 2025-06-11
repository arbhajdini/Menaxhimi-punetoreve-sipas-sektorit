<?php
/* Faqja (home.php) e cila paraqitet pasi perdoruesi te llogohet me sukses */
	include("check.php");	
?>
<!DOCTYPE HTML>
<!--
	Editorial by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Editorial by HTML5 UP</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
	</head>
	<body class="is-preload">


		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Main -->
					<div id="main">
						<div class="inner">
						

							<!-- Header -->
								<header id="header">
								<?php include_once("header.php");?>
								<h3 class="hello" style="text-align:right">Përshendetje, <em><?php echo $login_user;?>!</em></h3><br>
									  
								</header>

							<!-- Banner -->

							<!-- Section -->
								
							<div class="row">
						<h3><b>MENAXHIMI i TE DHENAVE TE BALLINES</b></h3>					
						
								<div class="features">
									
								<table class="editimitabeles">
										<tr>
											<td>
												<table class="tabelabrendshme">
													<tr>
														<td><a href="menaxho_sektoret.php"><i class="fas fa-building icon"></i></a></td>
													</tr>
													<tr>
														<td>Menaxho Sektoret</td>
													</tr>
													<tr>
														<td>Forma per menaxhimin e sektoreve<br> ne webaplikacion.</td>
													</tr>
												</table>
											</td>
											<td>
												<table class="tabelabrendshme">
													<tr>
														<td><a href="menaxho_punetor.php"><i class="fas fa-user icon"></i></a></td>
													</tr>
													<tr>
														<td>Menaxho Punetoret</td>
													</tr>
													<tr>
														<td>Forma per menaxhimin e punetoreve<br> ne webaplikacion.</td>
													</tr>
												</table>
											</td>
											<td>
												<table class="tabelabrendshme">
													<tr>
														<td><a href="modifiko_tedhenat.php"><i class="fas fa-edit icon"></i></a></td>
													</tr>
													<tr>
														<td>Modifiko te dhenat</td>
													</tr>
													<tr>
														<td>Forma per modifikimin e te dhenave<br> te webaplikacionit.</td>
													</tr>
												</table>
											</td>
										</tr>
								</table>
								
								
								
							</div>	
											
							
							
							
								
										
						</div>
								

							<!-- Section -->
								

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
										<li><a href="admin_home.php">Ballina</a></li>
										<li><a href="perdoruesit.php">Perdoruesit</a></li>
										<li><a href="logout.php">Ckycu</a></li>
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