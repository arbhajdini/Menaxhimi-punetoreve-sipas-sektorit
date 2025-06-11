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
								<?php include_once("header.php");?>
								<h3 class="hello" style="text-align:right">Përshendetje, <em><?php echo $login_user;?>!</em></h3><br>
									  
								</header>

							<!-- Banner -->

							<!-- Section -->
						<div class="shtosektor table-wrapper">
							<br></br>		
						
						
								
						
						<form method="post" action="shto_sektor.php">		
						<table class="menaxhosektoret" style="border:2px solid rgb(238, 154, 16);" >
							<tr>
								<th colspan="2">SHTO TE DHENAT E SEKTOREVE</th>	
							</tr>
							<tr>
								<td class="ms"><input type="text" name="sektori" id="sektori" placeholder="Sektori"></td>
								<td class="ms"><input type="submit" name="addSektori" value="Shto" /></td>
							</tr>
						</table>
						
							</form>
						
					
						
							<form action="" method="post">  
							<table class="menaxhosektoret" style="border:2px solid rgb(238, 154, 16);" >
										<tr>
											<th colspan="2">KERKO TE DHENAT E SEKTORIT PER MODIFIKIM OSE FSHIRJE</th>
										</tr>
										<tr>
											<td><input type="text" name="term" placeholder="Sektorin" value="%"/></td>
											<td><input type="submit" value="Kërko" /></td>
										</tr>
									</table> 
							</form> 
						</div>
						<div class="table-wrapper">
							<table style="border:2px solid rgb(238, 154, 16);">
								<div>
								<tr bgcolor='#CCCCCC' style="border:2px solid rgb(238, 154, 16);" >
									<th>Sektori</th>
									<th>Modifiko</th>
									<th>Fshije</th>
								</tr> 
							<?php
							if (!empty($_REQUEST['term'])) {
							$term = mysqli_real_escape_string
							($conn,$_REQUEST['term']);     
							$sql = mysqli_query($conn,
							"SELECT * FROM sektoret_umps 
							WHERE sektori_umps LIKE '%".$term."%'"); 
							while($row = mysqli_fetch_array($sql)) { 		
									echo "<tr>";
									echo "<td>".$row['sektori_umps']."</td>";
									echo "<td><a href=\"modifiko_sektor.php?id_sektori_umps=$row[id_sektori_umps]\" class='button' class='button primary'>
							Modifiko</a></td>";
							echo "<td><a href=\"fshij_sektor.php?id_sektori_umps=$row[id_sektori_umps]\" onClick=\"return confirm('A jeni te sigurt se deshironi te fshini sektorin?')\" class='button' class='button primary'>Fshijë</a>
									</td></tr>";		
								}

							}

							?>
								</div>
							</table>
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
										<li><a href="faqja_administratorit.php">Ballina</a></li>
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
		</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>