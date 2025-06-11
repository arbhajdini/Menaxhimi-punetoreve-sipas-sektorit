<?php
/* Faqja (home.php) e cila paraqitet pasi perdoruesi te llogohet me sukses */
	include("check.php");	
?>
<?php
//including the database connection file
include_once("config.php");

//fetching data in descending order (lastest entry first)
$result = mysqli_query($conn,
"SELECT * FROM tedhenat_umps ORDER BY id_tedhenat_umps DESC");
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
						
                            <div class="table-wrapper">
                                        <form action="" method="post">  
                                        
                                        <table>
                                        <tr>
                                        <h3><b style="border-bottom: solid 5px rgb(238, 154, 16);">Kërko të dhënat për modifikim</b></h3>
                                        </tr>
                                        <tr>

                                        <td>
                                        Shkruaj:
                                        </td>
                                        <td>
                                        <input type="text" name="term" placeholder="Titullit ose Pamjes se faqes" value="%"/>
                                    </td>
                                    <td> <input type="submit" value="Kërko" /></td>
                                    </tr>
                                    </table> 
                
                                                       
                                        <table width='80%' border=0>
                                           
                                            <tr bgcolor='#CCCCCC'>
                                                <th>Titulli</th>
                                                <th>Pershkrimi</th>
                                                <th>Pamja e faqes</th>
                                                <th>Modifiko</th>
                                            </tr> 
                                        <?php
                                        if (!empty($_REQUEST['term'])) {
                                        $term = mysqli_real_escape_string
                                        ($conn,$_REQUEST['term']);     
                                        $sql = mysqli_query($conn,
                                        "SELECT * FROM tedhenat_umps 
                                        WHERE Titulli_umps LIKE '%".$term."%' 
                                        OR  PageLayout_umps LIKE '%".$term."%'"); 
                                        while($row = mysqli_fetch_array($sql)) { 		
                                                echo "<tr>";
                                                echo "<td>".$row['Titulli_umps']."</td>";
                                                echo "<td>".$row['Pershkrimi_umps']."</td>";	
                                                echo "<td>".$row['PageLayout_umps']."</td>";	
                                                echo "<td><a href=\"ndrysho_tedhena.php?id_tedhenat_umps=$row[id_tedhenat_umps]\" class='button' class='button primary'>
                                                Modifiko</a></td></tr>";		
                                            }

                                        }

                                        ?>
                                        
                                            </table>
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