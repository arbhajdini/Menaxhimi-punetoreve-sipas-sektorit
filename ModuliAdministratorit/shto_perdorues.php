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
                    <form method="post" action="shto_perdoruesin.php" style="width:50%;">
                        <br></br>
                        <h3><b style="border-bottom: solid 5px rgb(238, 154, 16);">Shto Përdorues</b></h3>
                        <input type="text" name="username" id="username" value="" placeholder="Përdoruesi" required />
                        <br>
                        <input type="password" name="password" id="password" value="" placeholder="Fjalëkalimi" required />
                        <br>
                        <input type="submit" name="add" value="Shto" class="button" />
                    </form>

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
                    <pre>Referenca: <a href="referenca.html"><b>"LoadingScreen"</b></a>.</pre>
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
