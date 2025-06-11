<?php
/* Faqja (home.php) e cila paraqitet pasi perdoruesi te llogohet me sukses */
include("check.php");
?>
<?php
// including the database connection file
include_once("config.php");

if(isset($_POST['update_data'])) {
    $id_tedhenat_umps = $_POST['id_tedhenat_umps'];

    $Titulli_umps = $_POST['Titulli_umps'];
    $Pershkrimi_umps = $_POST['Pershkrimi_umps'];
    $PageLayout_umps = $_POST['PageLayout_umps'];
    // checking empty fields
    if(empty($Titulli_umps) || empty($Pershkrimi_umps) || empty($PageLayout_umps)) {
        if(empty($Titulli_umps)) {
            echo "<font color='red'>Titulli field is empty.</font><br/>";
        }
        if(empty($Pershkrimi_umps)) {
            echo "<font color='red'>Pershkrimi field is empty.</font><br/>";
        }
        if(empty($PageLayout_umps)) {
            echo "<font color='red'>PageLayout field is empty.</font><br/>";
        }
    } else {
        // updating the table
        $result = mysqli_query($conn, "UPDATE tedhenat_umps SET Titulli_umps='$Titulli_umps', Pershkrimi_umps='$Pershkrimi_umps', PageLayout_umps='$PageLayout_umps' WHERE id_tedhenat_umps=$id_tedhenat_umps");
        // redirecting to the display page
        header("Location: modifiko_tedhenat.php");
    }
}
?>
<?php
// getting ID_Dep from url
$id_tedhenat_umps = $_GET['id_tedhenat_umps'];

// selecting data associated with this particular ID_Dep
$result = mysqli_query($conn, "SELECT * FROM tedhenat_umps WHERE id_tedhenat_umps=$id_tedhenat_umps");

while($res = mysqli_fetch_array($result)) {
    $Titulli_umps = $res['Titulli_umps'];
    $Pershkrimi_umps = $res['Pershkrimi_umps'];
    $PageLayout_umps = $res['PageLayout_umps'];
}
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
                        <form method="post" action="ndrysho_tedhena.php">
                            <br></br>
                            <h3><b style="border-bottom: solid 5px rgb(238, 154, 16);">Modifiko të dhënat</b></h3>
                            <br></br>
                            <label for="Titulli_umps">Titulli</label>
                            <input type="text" name="Titulli_umps" value='<?php echo $Titulli_umps;?>' required />
                            <br>
                            <label for="Pershkrimi">Pershkrimi</label>
                            <textarea name="Pershkrimi_umps" rows="10" cols="30"><?php echo $Pershkrimi_umps;?></textarea>
                            <br>
                            <label for="PageLayout">Pamja e faqes</label>
                            <input type="text" name="PageLayout_umps" value='<?php echo $PageLayout_umps;?>' required />
                            <br>
                            <input type="hidden" name="id_tedhenat_umps" value='<?php echo $_GET['id_tedhenat_umps'];?>' />
                            <input type="submit" name="update_data" value="Modifiko">
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
