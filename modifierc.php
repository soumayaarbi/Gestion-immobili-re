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
        <div class="title"> Modifier un commerciale</div>
        <form method="post">
          <div class="bien-details">
<div class="input-box">
  <span class="details"> Cin </span>
  <input type="text" name="Cin" value="<?php echo $_GET['modi'] ?>" >
</div>
<div class="input-box">
  <span class="details"> Nom d'utilisateur</span>
  <input type="text" name="user" >
</div>
<div class="input-box">
  <span class="details"> E-mail  </span>
  <input type="email" placeholder="mail@serveur.com" name="email">
</div>
<div class="input-box">
  <span class="details">Mot de passe </span>
  <input type="password" name="pass" >
</div>


          <input type="submit" value="Modifier" name="btmod"  class="b1" style="margin-left: 10px;">
    
         <a href="commerciaux.php" class="a1" style="height:45px; margin-left: 10px;margin-bottom: 45px;padding-top:15px;">
  <path fill-rule="evenodd" d="M14.5 1.5a.5.5 0 0 1 .5.5v4.8a2.5 2.5 0 0 1-2.5 2.5H2.707l3.347 3.346a.5.5 0 0 1-.708.708l-4.2-4.2a.5.5 0 0 1 0-.708l4-4a.5.5 0 1 1 .708.708L2.707 8.3H12.5A1.5 1.5 0 0 0 14 6.8V2a.5.5 0 0 1 .5-.5z"/>
</svg>Retour </a>
</div>
                <?php 
                if(isset($_POST['btmod']))
                {
                    $Cin=$_POST['Cin'];
                    $username=$_POST['user'];
                    $Email=$_POST['email'];
                    $password=$_POST['pass'];
                    $modifier=$_GET['modi'];
                    $requp="UPDATE commerciale SET Cin='$Cin',username='$username', email='$Email',password='$password' WHERE Cin='$modifier'";
                    $resultat=mysqli_query($idcon,$requp);
                    if($resultat){

                        echo  " <script>alert(\"Mise a jour des données validés\")</script>";
                    }
                    else {
                        echo "  <script>alert(\"Echec \")</script>";
                    }
                }
                
				?>
 
</form>
</div>
</div>
</div>
</div>

</body>
</html>