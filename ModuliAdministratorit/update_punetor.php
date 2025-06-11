<?php
// including the database connection file
include_once("config.php");
include_once("check.php");


if (isset($_POST['update_punetor'])) {
    $id_punetori_umps = $_POST['id_punetori_umps'];
    $Emri = $_POST['punetori_umps'];
    $Pozita = $_POST['pozita_umps'];
    $id_sektori_umps = $_POST['id_sektori_umps'];

    $imgData = addslashes(file_get_contents($_FILES['userfile']['tmp_name']));
    $name = $_FILES['userfile']['name'];
    $maxsize = 10000000; // set to approx 10 MB

    // checking empty fields
    if (empty($Emri) || empty($Pozita)) {
        if (empty($Emri)) {
            echo "<font color='red'>Emri field is empty.</font><br/>";
        }
        if (empty($Pozita)) {
            echo "<font color='red'>Pozita field is empty.</font><br/>";
        }
    } else {
        // updating the table
        $result = mysqli_query($conn, "UPDATE punetoret_umps SET punetori_umps='$Emri', pozita_umps='$Pozita', id_sektori_umps='$id_sektori_umps', image='$imgData', name='$name' WHERE id_punetori_umps=$id_punetori_umps");

        // redirecting to the display message. In our case, it is ballina.php
        header("Location: menaxho_punetor.php");
    }
}
?>

<?php
// getting id_punetori_umps from url
$id_punetori_umps = $_GET['id_punetori_umps'];

// selecting data associated with this particular id_punetori_umps
$result = mysqli_query($conn, "SELECT * FROM punetoret_umps WHERE id_punetori_umps=$id_punetori_umps");

while ($res = mysqli_fetch_array($result)) {
    $Emri = $res['punetori_umps'];
    $Pozita = $res['pozita_umps'];
    $id_sektori_umps = $res['id_sektori_umps'];
}
?>

<!DOCTYPE HTML>
<html>
<head>
    <title>Editorial by HTML5 UP</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <link rel="stylesheet" href="assets/css/main.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>

<body class="is-preload">
    <div id="wrapper">
        <div id="main">
            <div class="inner">
            <header id="header">
                <?php include_once("header.php"); ?>
                    <h3 class="hello" style="text-align:right">Përshendetje, <em><?php echo $login_user;?>!</em></h3><br>
                </header>
                <div class="row">
                    <div class="col-12 col-12-medium">
                        <br></br>
                        <h3><b style="border-bottom: solid 5px rgb(238, 154, 16);">Modifiko të dhënat e punëtorit</b></h3>
                        <div class="table-wrapper">
                            <form enctype="multipart/form-data" name="form1" method="post" action="update_punetor.php">
                                <table border="0">
                                    <tr>
                                        <td>Emri</td>
                                        <td><input type="text" name="punetori_umps" value='<?php echo $Emri; ?>' required /></td>
                                    </tr>
                                    <tr>
                                        <td>Pozita</td>
                                        <td><input type="text" name="pozita_umps" value='<?php echo $Pozita; ?>' required /></td>
                                    </tr>
                                    <tr>
                                        <td>Zgjedh Sektorin</td>
                                        <td>
                                            <select name="id_sektori_umps">
                                                <option selected="selected" required>Zgjedh Sektorin</option>
                                                <?php
                                                $res = mysqli_query($conn, "SELECT * FROM sektoret_umps");
                                                while ($row = $res->fetch_array()) {
                                                    ?>
                                                    <option value="<?php echo $row['id_sektori_umps']; ?>" <?php if ($row['id_sektori_umps'] == $id_sektori_umps) echo 'selected'; ?>><?php echo $row['sektori_umps']; ?></option>
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
                                    <tr>
                                        <td style="border:none;"><input type="submit" name="update_punetor" value="Modifiko"></td>
                                        <td style="border:none;"><input type="hidden" name="id_punetori_umps" value='<?php echo $_GET['id_punetori_umps']; ?>' /></td>
                                        
                                    </tr>
                                </table>
                            </form>
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
                        <li><a href="admin_home.php">Ballina</a></li>
                        <li><a href="perdoruesit.php">Përdoruesit</a></li>
                        <li><a href="logout.php">Çkycu</a></li>
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
