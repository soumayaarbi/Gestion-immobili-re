<?php
include('connexion.php');
session_start();
?>
<html>
<head>
<link rel="stylesheet" href="bootstrap.min.css">
<link rel="stylesheet" href="in.css">
<style type="text/css">
svg{position: relative;
  font-size: 18px;
  height: 25px;
  width: 25px;}
</style>
</head>
<form method="POST" >
<div class="haut-gauche">
 <h1 class="h1"> <b>Gammarth Immobilière</b> </h1>
<h2><span><b>G</b></span><b>estion</b> <span> <b>D</b></span><b>es</b> <span><b>B</b></span><b>ien</b> <span><b>C</b></span><b>onfisqués</b> </h2>
 </div>
<div id="formWrapper">
<br>
<br>
    <div id="form">
      <div class="logo">
        <h2 style="text-align:center;color:#8a8a8a;font-size:40px;font-family:Times New Roman, Times, serif;"><b>Login</b></h2>
      </div>
      <div class="form-item">
        <input type="text" name="Cin"  class="form-style" autocomplete="off" placeholder="Cin" requiered/>
      </div>
      <div class="form-item">
        <input type="password" name="Password" id="password" class="form-style" placeholder="Password" requiered/><br><br><br>
    
      <div class="form-item">
        <input type="submit" class="login pull-right" value="Connexion" name="btsub">
        <div class="clear-fix"></div>
      </div>
    </div>
  </div>
</body>
<?php
if(isset($_POST['btsub']))
{
    $sql="select * from commerciale where Cin='" .$_POST['Cin']."' and password='".$_POST['Password']."'";
   if( $result = mysqli_query($idcon,$sql)){
     $ligne=mysqli_fetch_assoc($result);
    if($ligne!=0){
       session_start();
  $_SESSION['CIN']=$_POST['Cin'];
  $_SESSION['Password ']=$_POST['Password'];
  header ('location:commerciale.php');
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
</form>