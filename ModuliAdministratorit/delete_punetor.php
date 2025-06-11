<?php
//including the database connection file
include("config.php");

//getting uid of the data from url
$id_punetori_umps = $_GET['id_punetori_umps'];

//deleting the row from table
$result = mysqli_query($conn,"DELETE FROM punetoret_umps WHERE id_punetori_umps=$id_punetori_umps");

//redirecting to the display page (index.php in our case)
header("Location:menaxho_punetor.php");
?>

