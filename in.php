
<?php
include('connexion.php');
session_start();
?>
<html>
<head>
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="in.css">
<style type="text/css">
svg{position: relative;
  font-size: 18px;
  height: 25px;
  width: 25px;}
</style>
</head>
<form method="POST">
<div class="haut-gauche">
 <h1 class="h1"> Gammarth Immobilière </h1>
 <h2><span>G</span>estion <span> D</span>es <span>B</span>ien <span>C</span>onfisqués </h2>
 </div>
<div id="formWrapper">
<br>
<br>
    <div id="form">
      <div class="logo">
        <h2 style="text-align:center;color:#8a8a8a;font-size:40px;font-family:Times New Roman, Times, serif;">Login</h2>
      </div>
      <div class="form-item">
        <input type="text" name="CIN"  class="form-style" autocomplete="off" placeholder="Cin" />
      </div>
      <div class="form-item">
        <input type="password" name="Password" id="password" class="form-style" placeholder="Password"/><br><br><br>
    
      <div class="form-item">
        <input type="submit" class="login pull-right" value="Connexion" name="btsub">
        <div class="clear-fix"></div>
      </div>
    </div>
  </div>
</body>

</html>

	<?php
if(isset($_POST['btsub']))
{
    $sql="select * from utilisateur where CIN='" .$_POST['CIN']."' and Password='".$_POST['Password']."'";
   if( $result = mysqli_query($idcon,$sql)){
     $ligne=mysqli_fetch_assoc($result);
    if($ligne!=0){
       session_start();
  $_SESSION['CIN']=$_POST['CIN'];
  $_SESSION['Password ']=$_POST['Password'];
  header ('location:utilisateur.php');
}

else
{
  $message = "Vérifier vos données...";
echo "<script type='text/javascript'>alert('$message');</script>";
}
}
}
?>
	


			</div>
				
				
				
			</div>
		</div>
	</div>
</div>
</form>
