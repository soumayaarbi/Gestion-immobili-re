
<?php 
session_start();
if(!isset($_SESSION['CIN'])){
  header('location:in3.php');
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
</head>
<body>
       <div class="container">
	   <form method="post">
          <div class="bien-details">
	<?php 
	if(isset($_GET['suput'])){
		$sup=$_GET['suput'];
		$reqDelete=" DELETE FROM vente WHERE Matricule='$sup'";
		$resultaa=mysqli_query($idcon,$reqDelete);
	}
	if($resultaa){
		echo "La supprission a été correctement effectuée...";
}else {
	echo"La supprission a échouée...";
}
	?>
	<a href="tabbordchefcom.php" class="a1" style="height:45px; margin-left: 10px;margin-bottom: 45px;padding-top:15px;">
  <path fill-rule="evenodd" d="M14.5 1.5a.5.5 0 0 1 .5.5v4.8a2.5 2.5 0 0 1-2.5 2.5H2.707l3.347 3.346a.5.5 0 0 1-.708.708l-4.2-4.2a.5.5 0 0 1 0-.708l4-4a.5.5 0 1 1 .708.708L2.707 8.3H12.5A1.5 1.5 0 0 0 14 6.8V2a.5.5 0 0 1 .5-.5z"/>
</svg>Retour </a>
</div>
</div>
</div>
</form>
</body>
</html>