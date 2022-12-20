<?php 
session_start();
error_reporting(0);
if(!isset($_SESSION['CIN'])){
  header('location:in2.php');
}
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
<link rel="stylesheet" href="style.css">
<style>
  
  </style>

</head>
<body>
       <div class="container">
        <div class="title"> Ajouter un Bien <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-lg" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M8 2a.5.5 0 0 1 .5.5v5h5a.5.5 0 0 1 0 1h-5v5a.5.5 0 0 1-1 0v-5h-5a.5.5 0 0 1 0-1h5v-5A.5.5 0 0 1 8 2Z"/>
</svg></div>
        <form method="POST">
          <div class="bien-details">
<div class="input-box">
  <span class="details"> Matricule </span>
  <input type="text" name="Matricule" required>
</div>
<div class="input-box">
  <span class="details"> Titre </span>
  <input type="text" name="titre" required>
</div>
<div class="input-box">
  <span class="details"> Localisation </span>
  <input type="text" name="localisation" required>
</div>
<div class="input-box">
  <span class="details"> Prix d'achat(DT) </span>
  <input type="text" name="prix" required>
</div>
<div class="input-box">
  <span class="details"> description </span>
  <input name="description" type="text" style="height: 40px;
    width:100%;
    outline: none;
    border-radius: 5px;
    border:1px solid #ccc;
    padding-left: 15px;
    font-size: 16px;
    border-bottom-width:2px;
    transition:all 0.3s ease;border-color:#008080;" >
</div>
<div class="input-box">
  <span class="details"> Superficie(m2) </span>
  <input type="text" name="superficie" required>
</div>
<div class="input-box">
  <span class="details"> Date d'achat </span>
  <input type="date" name="date" placeholder="0000-00-00" required>
</div>



          
          <input type="submit" value="Ajouter" name="btsubmit"  class="b1" style="margin-left: 10px;">
    
         <a href="tabbord1.php" class="a1" style="height:45px; margin-left: 10px;margin-bottom: 45px;padding-top:15px;">
  <path fill-rule="evenodd" d="M14.5 1.5a.5.5 0 0 1 .5.5v4.8a2.5 2.5 0 0 1-2.5 2.5H2.707l3.347 3.346a.5.5 0 0 1-.708.708l-4.2-4.2a.5.5 0 0 1 0-.708l4-4a.5.5 0 1 1 .708.708L2.707 8.3H12.5A1.5 1.5 0 0 0 14 6.8V2a.5.5 0 0 1 .5-.5z"/>
</svg>Retour </a>
</div>
       





<?php 
if(isset($_POST['btsubmit']))
{
	$Matricule=$_POST['Matricule'];
    $tit=$_POST['titre'];
    $loc=$_POST['localisation'];
    $pr=$_POST['prix'];
	$desc=$_POST['description'];
	$sup=$_POST['superficie'];
  $date=$_POST['date'];
  $et=$_POST['etat'];
    $reqadd="INSERT INTO bienimm(Matricule,Titre,Localisation,prix,description,superficie,dateachat,Etat) VALUES ('$Matricule','$tit','$loc','$pr','$desc','$sup','$date','$et')";
$resultat=mysqli_query($idcon,$reqadd);
if($resultat){
  echo " <script>alert(\"succée d'ajout\")</script>";
}
else {
    echo " <script>alert(\"Echec d'ajout\")</script>";
}
}
?>

</div>
</div>
          </div>
</form>
</div>

				
 