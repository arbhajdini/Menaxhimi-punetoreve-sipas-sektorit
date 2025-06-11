<?php
//including the database connection file
include("config.php");

//getting uid of the data from url
$id_sektori = $_GET['id_sektori_umps'];

//deleting the row from table
$result = mysqli_query($conn,"DELETE FROM sektoret_umps WHERE id_sektori_umps=$id_sektori");

//redirecting to the display page (index.php in our case)
header("Location:menaxho_sektoret.php");
?>

