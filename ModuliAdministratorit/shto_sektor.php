<html>
	<head>
		<title>Moduli Administratorit</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<link rel="stylesheet" href="assets/css/main.css" />
        <link rel="icon" href="images/favicon.png" type="image/png">
		
		
		 
	</head>
	<body>
<?php
//including the database connection file
include_once("config.php");

if(isset($_POST['addSektori'])) {
    $sektori = $_POST['sektori'];

    // checking empty fields
    if(empty($sektori)) {
        if(empty($sektori)) {echo "<font color='red'>Fusha Sektori eshte e zbrazet .</font><br/>";}

        //link to the previous programi
        echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
    } else {
        // if all the fields are filled (not empty)
        //insert data to database
        $result = mysqli_query($conn, "INSERT INTO sektoret_umps(sektori_umps) VALUES('$sektori')");
        //display success messprogrami
        //echo "<font color='green'>Data added successfully.";
        //echo "<br/><a href='ballina.php'>View Result</a>";
    }
}
?>

<div id="loading-screen" class="loading-screen">
    <div class="loading-spinner"></div>
    <div class="loading-message">E dhena eshte duke u regjistruar ne sistem. Ju lutem pritni 5 sekonda.</div>
</div>

<script>
function showLoadingScreen() {
    var loadingScreen = document.getElementById('loading-screen');
    loadingScreen.style.display = 'flex';
}

function hideLoadingScreen() {
    var loadingScreen = document.getElementById('loading-screen');
    loadingScreen.style.display = 'none';
}

<?php if (isset($_POST['addSektori']) && !empty($sektori)) { ?>
    showLoadingScreen();
    setTimeout(function() {
        hideLoadingScreen();
        window.location.href = 'menaxho_sektoret.php';
    }, 5000); // Display the loading screen for 5 seconds
<?php } ?>
</script>
</body>
</html>
