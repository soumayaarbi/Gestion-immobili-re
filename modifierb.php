<?php 
session_start();
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
        <div class="title"> Modifier un Bien </div>
        <form method="post">
          <div class="bien-details">
<div class="input-box">
  <span class="details"> Matricule </span>
  <input type="text" name="Matricule" value="<?php echo $_GET['modi'] ?>">
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
  <span class="details"> Prix(DT) </span>
  <input type="text" name="prix" required>
</div>
<div class="input-box">
  <span class="details"> Description </span>
  <input type="text" name="description" >
</div>
<div class="input-box">
  <span class="details"> Superficie(m2) </span>
  <input type="text" name="superficie" required>
</div>
<div class="input-box">
  <span class="details"> Date d'achat </span>
  <input type="date" name="date" placeholder="0000-00-00" required>
</div>

          
          <input type="submit" value="Modifier" name="btmod"  class="b1" style="margin-left: 10px;">
    
         <a href="tabbord1.php" class="a1" style="height:45px; margin-left: 10px;margin-bottom: 45px;padding-top:15px;">
  <path fill-rule="evenodd" d="M14.5 1.5a.5.5 0 0 1 .5.5v4.8a2.5 2.5 0 0 1-2.5 2.5H2.707l3.347 3.346a.5.5 0 0 1-.708.708l-4.2-4.2a.5.5 0 0 1 0-.708l4-4a.5.5 0 1 1 .708.708L2.707 8.3H12.5A1.5 1.5 0 0 0 14 6.8V2a.5.5 0 0 1 .5-.5z"/>
</svg>Retour </a>
</div>
                <?php
                 if(isset($_POST['btmod']))
                {
                    $Matricule=$_POST['Matricule'];
                    $tit=$_POST['titre'];
                    $loc=$_POST['localisation'];
                    $pr=$_POST['prix'];
                    $desc=$_POST['description'];
                    $sup=$_POST['superficie'];
                    $date=$_POST['date'];
                    $modifier=$_GET['modi'];
                    $requp="UPDATE bienimm SET Matricule='$Matricule',Titre='$tit', Localisation='$loc', prix='$pr', description='$desc',superficie='$sup',dateachat='$date' WHERE Matricule='$modifier'";
                    $resultat=mysqli_query($idcon,$requp);
                    if($resultat){
                        echo  " <script>alert(\"Mise a jour des données validés\")</script>";
                    }
                    else {
                        echo "  <script>alert(\"Echec \")</script>";
                    }
                }
                
				?>