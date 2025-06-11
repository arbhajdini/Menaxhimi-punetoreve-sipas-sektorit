<?php
/* Faqja (home.php) e cila paraqitet pasi perdoruesi te llogohet me sukses */
include("check.php");
?>
<!DOCTYPE HTML>
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
    <div id="wrapper">
        <div id="main">
            <div class="inner">
                <header id="header">
                <?php include_once("header.php");?>
                    <h3 class="hello" style="text-align:right">Përshendetje, <em><?php echo $login_user; ?>!</em></h3><br>
                </header>
                <div class="row">
						<div class="col-12 col-12-medium">
							<!-- Buttons -->
							<!-- Form -->
							 <br></br>
							<h3><b style="border-bottom: solid 5px rgb(238, 154, 16);">Shto të dhënat e punëtorit</b></h3>
							<div class="table-wrapper">
								<form enctype="multipart/form-data" action="shto_punetor.php" method="post" name="form1">
									<table>
										<tr>
											<td >Emri dhe Mbiemri</td>
											<td><input type="text" name="punetori_umps"></td>
										</tr>
										<tr>
											<td>Pozita</td>
											<td><input type="text" name="pozita_umps"></td>
										</tr>
                                        <tr>
                                            <td>Zgjedh Sektorin</td>
											<td>
												<select name="id_sektori_umps">
													<option selected="selected">Zgjedh Sektorin</option>
													<?php
													$res = mysqli_query($conn, "SELECT * FROM sektoret_umps");
													while ($row = $res->fetch_array()) {
														?>
														<option value="<?php echo $row['id_sektori_umps']; ?>"><?php echo $row['sektori_umps']; ?></option>
														<?php
													}
													?>
												</select><br />
											</td>
										</tr>
										
										<tr>
											<td><input type="hidden" name="MAX_FILE_SIZE" value="10000000" />Zgjedh Foto</td>
											<td><input name="userfile" type="file" /></td>
										</tr>
											
											<td style="border:none;"><input type="submit" name="addPunetor" value="Shto" class="button"></td>
										</tr>
									</table>
								</form>
							</div>
							<div class="row table-wrapper">
								<div class="col-12 col-12-medium">
									<form action="" method="post">
										<table>
											<tr>
												<h3><b style="border-bottom: solid 5px rgb(238, 154, 16);">Kërko të dhënat e punëtorit për menaxhim</b></h3>
											</tr>
											<tr>
												<td>Shkruaj:</td>
												<td><input type="text" name="term" placeholder="Emri ose Mbiemri" value="%"/></td>
												<td><input type="submit" value="Kërko"/></td>
											</tr>
										</table>
										<table width='100%' style="border:2px solid rgb(238, 154, 16);">
											<tr bgcolor='#CCCCCC' style="border:2px solid rgb(238, 154, 16);">
												<th>Emri dhe Mbiemri</th>
												<th>Pozita</th>
												<th>Sektori</th>
												<th>Foto</th>
												<th>Emri file-it</th>
												<th>Modifiko</th>
												<th>Fshije</th>
											</tr>
											<?php
											if (!empty($_REQUEST['term'])) {
												$term = mysqli_real_escape_string($conn, $_REQUEST['term']);
												$sql = mysqli_query($conn,
													"SELECT
														p.id_punetori_umps,
														p.punetori_umps,
														p.pozita_umps,
														s.sektori_umps,
														p.image,
														p.name
													FROM
														punetoret_umps p
													INNER JOIN
														sektoret_umps s ON p.id_sektori_umps = s.id_sektori_umps
													WHERE
														p.punetori_umps LIKE '%" . $term . "%' OR p.pozita_umps LIKE '%" . $term . "%'"
												);
												while ($row = mysqli_fetch_array($sql)) {
													echo "<tr>";
													echo "<td>" . $row['punetori_umps'] . "</td>";
													echo "<td>" . $row['pozita_umps'] . "</td>";
													echo "<td>" . $row['sektori_umps'] . "</td>";
													echo "<td><img src='data:image/jpeg;base64," . base64_encode($row['image']) . "' width='80' height='80'/></td>";
													echo "<td>" . $row['name'] . "</td>";
													echo "<td><a href='modifiko_punetor.php?id_punetori_umps=" . $row['id_punetori_umps'] . "' class='button'>Modifiko</a></td>";
													echo "<td><a href='fshij_punetor.php?id_punetori_umps=" . $row['id_punetori_umps'] . "' onClick=\"return confirm('A jeni të sigurt se dëshironi të fshini të dhënat?')\" class='button'>Fshijë</a></td>";
													echo "</tr>";
												}
											}
											?>
										</table>
									</form>
								</div>
							</div>
						</div>
					</div>
            </div>
        </div>
        <div id="sidebar">
            <div class="inner">
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
                <footer id="footer">
                    <p class="copyright">&copy; Untitled. All rights reserved. Demo Images: <a href="https://unsplash.com">Unsplash</a>. Design: <a href="https://html5up.net">HTML5 UP</a>.</p>
					
                </footer>
            </div>
        </div>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/browser.min.js"></script>
    <script src="assets/js/breakpoints.min.js"></script>
    <script src="assets/js/util.js"></script>
    <script src="assets/js/main.js"></script>
</body>
</html>
