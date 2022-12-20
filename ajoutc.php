<?php 
session_start();
if(!isset($_SESSION['CIN'])){
  header('location:in3.php');
}
error_reporting(0);
$localhost="localhost";
$user="root";
$pw="";
$bdname="gammarth";
$idcon=mysqli_connect($localhost,$user,$pw ,$bdname);
if($idcon)
{
    

}
else
echo"Erreur de connexion avec le serveur : <br>";?>
<html>
<head>
<link rel="stylesheet" href="bootstrap.min.css">
<link rel="stylesheet" href="style.css"></head>
<body>
       <div class="container">
        <div class="title"> Ajouter un commercial <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-lg" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M8 2a.5.5 0 0 1 .5.5v5h5a.5.5 0 0 1 0 1h-5v5a.5.5 0 0 1-1 0v-5h-5a.5.5 0 0 1 0-1h5v-5A.5.5 0 0 1 8 2Z"/>
</svg></div>
        <form method="post">
          <div class="bien-details">
<div class="input-box">
  <span class="details"> Cin </span>
  <input type="text" name="Cin" required>
</div>
<div class="input-box">
  <span class="details"> Nom d'utilisateur</span>
  <input type="text" name="user" required>
</div>
<div class="input-box">
  <span class="details"> E-mail  </span>
  <input type="email" placeholder="mail@serveur.com" name="email" required>
</div>
<div class="input-box">
  <span class="details">Mot de passe </span>
  <input type="password" name="pass" required>
</div>


          <input type="submit" value="Ajouter" name="btsubmit"  class="b1" style="margin-left: 10px;">
    
         <a href="commerciaux.php" class="a1" style="height:45px; margin-left: 10px;margin-bottom: 45px;padding-top:15px;">
  <path fill-rule="evenodd" d="M14.5 1.5a.5.5 0 0 1 .5.5v4.8a2.5 2.5 0 0 1-2.5 2.5H2.707l3.347 3.346a.5.5 0 0 1-.708.708l-4.2-4.2a.5.5 0 0 1 0-.708l4-4a.5.5 0 1 1 .708.708L2.707 8.3H12.5A1.5 1.5 0 0 0 14 6.8V2a.5.5 0 0 1 .5-.5z"/>
</svg>Retour </a>
</div>
       

 <?php
if(isset($_POST['btsubmit']))
{
    $Cin=$_POST['Cin'];
    $username=$_POST['user'];
    $Email=$_POST['email'];
    $password=$_POST['pass'];
    $reqAdd="INSERT INTO commerciale (Cin,username,email,password) VALUES('$Cin','$username','$Email','$password')";
    $resultat=mysqli_query($idcon,$reqAdd);
    if($resultat)
    {
echo" <script>alert(\"succée d'ajout\")</script>";
    }
    else{ "<script>alert(\"Echec d'ajout\")</script>";
    }
}



?>

				
 