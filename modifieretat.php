<?php 
session_start();
if(!isset($_SESSION['CIN'])){
  header('location:in4.php');
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
        <div class="title"> Modifier l'etat d'un Bien</div>
        <form method="post">
          <div class="bien-details">
<div class="input-box">
  <span class="details"> Matricule </span>
  <input type="text" name="Matricule" value="<?php echo $_GET['modi'] ?>">
</div>
<div class="input-box">
  <span class="details"> Etat </span>
  <input type="text" name="etat">
</div>


          
          <input type="submit" value="Modifier" name="btmod"  class="b1" style="margin-left: 10px;">
    
         <a href="tabbord5.php" class="a1" style="height:45px; margin-left: 10px;margin-bottom: 45px;padding-top:15px;">
  <path fill-rule="evenodd" d="M14.5 1.5a.5.5 0 0 1 .5.5v4.8a2.5 2.5 0 0 1-2.5 2.5H2.707l3.347 3.346a.5.5 0 0 1-.708.708l-4.2-4.2a.5.5 0 0 1 0-.708l4-4a.5.5 0 1 1 .708.708L2.707 8.3H12.5A1.5 1.5 0 0 0 14 6.8V2a.5.5 0 0 1 .5-.5z"/>
</svg>Retour </a>
</div>
       





<?php
                 if(isset($_POST['btmod']))
                {
                    $Matricule=$_POST['Matricule'];
                    $et=$_POST['etat'];
                    $modifier=$_GET['modi'];
                    $requp="UPDATE bienimm SET Matricule='$Matricule',Etat='$et' WHERE Matricule='$modifier'";
                    $resultat=mysqli_query($idcon,$requp);
                    if($resultat){
                        echo  " <script>alert(\"Mise a jour des données validés\")</script>";
                    }
                    else {
                        echo "  <script>alert(\"Echec \")</script>";
                    }
                }
                
				?>
</div>
</div>
          </div>
</form>
</div>

				
 