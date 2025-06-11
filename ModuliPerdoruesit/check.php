<?php
/* Kontrollon sesionin */
include('config.php');
session_start();
$user_check=$_SESSION['username'];
$ses_sql = mysqli_query($conn,"SELECT perdoruesi_umps FROM perdoruesit_umps WHERE perdoruesi_umps='$user_check' ");
$row=mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
$login_user=$row['perdoruesi_umps'];
if(!isset($user_check))
{ 
header("Location: index.php");
} ?>