<!DOCTYPE HTML>
<?php include_once("config.php");?>
<html>
<head>
    <title>UMPS</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <link rel="stylesheet" href="assets/css/main.css" />
    <link rel="icon" href="images/favicon.png" type="image/png">
</head>
<body class="is-preload">

    <!-- Wrapper -->
    <div id="wrapper">

        <!-- Main -->
        <div id="main">
            <div class="inner">
            <header id="header">
                	<h2 style="text-align:center;font-size:30px;"><strong><?php include_once("header.php");?></strong></h2><br>
			</header>

                <?php
                // Query for all unique sectors ordered by id_sektori_umps DESC
                $result_sectors = mysqli_query($conn, "SELECT DISTINCT sektori_umps, id_sektori_umps FROM sektoret_umps ORDER BY id_sektori_umps DESC");

                if ($result_sectors) {
                    while ($sector_row = mysqli_fetch_assoc($result_sectors)) {
                        $sector_name = $sector_row['sektori_umps'];
                        $sector_id = $sector_row['id_sektori_umps'];

                        // Query for employees in the current sector
                        $result_employees = mysqli_query($conn, "
                            SELECT
                                p.punetori_umps,
                                p.pozita_umps,
                                p.image
                            FROM
                                punetoret_umps p
                            LEFT JOIN
                                sektoret_umps s ON p.id_sektori_umps = s.id_sektori_umps
                            WHERE
                                s.id_sektori_umps = '$sector_id'
                            ORDER BY
                                p.id_punetori_umps DESC
                            LIMIT 3
                        ");

                        if ($result_employees) {
                            ?>
                            <section>
                                <header class="major">
                                    <h2><?php echo $sector_name; ?></h2>
                                </header>
                                <div>
                                    <div class="image-grid">
                                        <?php
                                        while ($employee_row = mysqli_fetch_assoc($result_employees)) {
                                            ?>
                                            <article>
                                                <a href="#" class="image">
                                                    <?php echo '<img src="data:image/jpeg;base64,'.base64_encode($employee_row['image']).'" alt="'.$employee_row['punetori_umps'].'">'; ?>
                                                </a>
                                                <h3><?php echo $employee_row['punetori_umps']; ?></h3>
                                                <p><?php echo $employee_row['pozita_umps']; ?></p>
                                            </article>
                                            <?php
                                        }
                                        ?>
                                    </div>
                                </div>
                            </section>
                            <?php
                        } else {
                            echo "No results found for $sector_name.";
                        }
                    }
                } else {
                    echo "No sectors found.";
                }
                ?>

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
                        <li><a href="index.php">Ballina</a></li>
						<li><a href="../ModuliAdministratorit/index.php">Kycu</a><li>
                    </ul>
                </nav>

                <!-- Section -->

                <!-- Section -->
				<section>
									<header class="major">
										<h2>Kontakti</h2>
						
									</header>

									<ul class="contact">
										<h5><li class="icon solid fa-envelope"><a href="#">arb.hajdini.st@uni-gjilan.net</a></li></h5>
										<h5><li class="icon solid fa-home">rr.”Zija Shemsiu” pn. 60000 Gjilan</li></h5>
									</ul>
								</section>

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
