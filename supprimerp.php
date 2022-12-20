<?php 
session_start();
if(!isset($_SESSION['CIN'])){
  header('location:in2.php');
}
error_reporting(0);
require_once('connexion.php')?>
<!doctype html>
<html>
<head>

<link rel="stylesheet" href="bootstrap.min.css">
<link rel="stylesheet" href="style.css"></head>
<div class="container">
	   <form method="post">
          <div class="bien-details">
	<?php 
	if(isset($_GET['suput'])){
		$sup=$_GET['suput'];
		$reqDelete=" DELETE FROM utilisateur WHERE Cin='$sup'";
		$resultaa=mysqli_query($idcon,$reqDelete);
	}
	if($resultaa){
		echo "La supprission a été correctement effectuée...";
}else {
	echo"La supprission a échouée...";
}
	?>
	<br>
	<br>
	<br>
	<div class="d-grid gap-2 d-md-flex justify-content-md-end">
				<a href="tabbord.php"  class="a1" style="height:45px; margin-left: 10px;margin-bottom: 45px;padding-top:15px;"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-return-left" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M14.5 1.5a.5.5 0 0 1 .5.5v4.8a2.5 2.5 0 0 1-2.5 2.5H2.707l3.347 3.346a.5.5 0 0 1-.708.708l-4.2-4.2a.5.5 0 0 1 0-.708l4-4a.5.5 0 1 1 .708.708L2.707 8.3H12.5A1.5 1.5 0 0 0 14 6.8V2a.5.5 0 0 1 .5-.5z"/>
</svg>	Retour </a>
</form>
</div>
</div>
</div>
</div>

</body>
</html>