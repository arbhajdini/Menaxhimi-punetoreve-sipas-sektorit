<html>
<head>
    <title>Editorial by HTML5 UP</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <link rel="stylesheet" href="assets/css/main.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>
<body>
<?php
// including the database connection file
include_once("config.php");

if (isset($_POST['addPunetor'])) {
    $Emri = trim($_POST['punetori_umps']);
    $Pozita = trim($_POST['pozita_umps']);
    $id_sektori_umps = $_POST['id_sektori_umps'];

    $imgData = addslashes(file_get_contents($_FILES['userfile']['tmp_name']));
    $name = $_FILES['userfile']['name'];

    $maxsize = 100000000; // set to approx 10 MB

    // checking empty fields
    if (empty($Emri) || empty($Pozita)) {
        if (empty($Emri)) {
            echo "<font color='red'>Emri field is empty.</font><br/>";
        }
        if (empty($Pozita)) {
            echo "<font color='red'>Pozita field is empty.</font><br/>";
        }
        // link to the previous page
        echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
    } else {
        // if all the fields are filled (not empty)
        // insert data to database
        $result = mysqli_query($conn, "INSERT INTO punetoret_umps(punetori_umps, pozita_umps, id_sektori_umps, image, name) VALUES('$Emri', '$Pozita', '$id_sektori_umps','$imgData', '$name')");

        // display success message
    }
}
?>

<div id="loading-screen" class="loading-screen">
    <div class="loading-spinner"></div>
    <div class="loading-message">E dhena është duke u regjistruar në sistem. Ju lutem pritni 5 sekonda.</div>
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

<?php if (isset($_POST['addPunetor']) && !empty($Emri) && !empty($Pozita)) { ?>
    showLoadingScreen();
    setTimeout(function() {
        hideLoadingScreen();
        window.location.href = 'menaxho_punetor.php';
    }, 5000); // Display the loading screen for 5 seconds
<?php } ?>
</script>
</body>
</html>
