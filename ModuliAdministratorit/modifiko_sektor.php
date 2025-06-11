<?php
/* Faqja (home.php) e cila paraqitet pasi perdoruesi te llogohet me sukses */
include("check.php");
?>
<?php
// including the database connection file
include_once("config.php");

if(isset($_POST['update_sektor']))
{
    $id_sektori = $_POST['id_sektori_umps'];
    $sektori = $_POST['sektori_umps'];

    // checking empty fields
    if(empty($sektori)) {
        echo "<font color='red'>Fakulteti field is empty.</font><br/>";
    } else {
        // updating the table
        $result = mysqli_query($conn, "UPDATE sektoret_umps SET sektori_umps='$sektori' WHERE id_sektori_umps=$id_sektori");

        // redirecting to the display page. In our case, it is menaxho_sektoret.php
        header("Location: menaxho_sektoret.php");
    }
}
?>
<?php
// getting ID_Dep from url
$id_sektori = $_GET['id_sektori_umps'];

// selecting data associated with this particular ID_Dep
$result = mysqli_query($conn, "SELECT * FROM sektoret_umps WHERE id_sektori_umps=$id_sektori");

while($res = mysqli_fetch_array($result))
{
    $sektori = $res['sektori_umps'];
}
?>
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

                        <form name="form1" method="post" action="modifiko_sektor.php">
                            
                            <br></br>
                            <h3><b style="border-bottom: solid 5px rgb(238, 154, 16);">Modifiko të dhënat e Sektorit</b></h3>

                            <table>
                            <tr>
                                <th><b>Sektori</b></th>
                            </tr> 
                            <tr>                  
                            <td><input type="text" name="sektori_umps" value='<?php echo $sektori;?>' required /></td>
                            </tr>
                            <br>
                            <tr>
                            <input type="hidden" name="id_sektori_umps" value='<?php echo $_GET['id_sektori_umps'];?>' />
                            <td style="border:none;"><input type="submit" name="update_sektor" value="Modifiko"></td>
                            </tr>
                            </table>
                        </form>
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

        <!-- Scripts -->
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/browser.min.js"></script>
        <script src="assets/js/breakpoints.min.js"></script>
        <script src="assets/js/util.js"></script>
        <script src="assets/js/main.js"></script>

    </body>
</html>
