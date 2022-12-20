<?php 
$localhost="localhost";
$user="root";
$pw="";
$bdname="gammarth";
$idcon=mysqli_connect($localhost,$user,$pw ,$bdname);
if($idcon)
{
   

}
else{
echo"Erreur de connexion avec le serveur : <br>";}?>
<html>
<head>
<link rel="stylesheet" href="bootstrap.min.css">
<link rel="stylesheet" href="styles.css"></head>
<form class='login-form' action="kk.php">
  <div class="flex-row">
    <label class="lf--label" for="username">
    </label>
    <input name="matricule" class='lf--input' placeholder='Username' type='text'>
  </div>
  <input class='lf--submit' type='submit' value='LOGIN' name="btsubmit">
  <?php 
if(isset($_POST['btsubmit']))
{
    header ('location:kk.php');}
    ?>