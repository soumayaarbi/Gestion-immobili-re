<?php 
session_start();
if(!isset($_SESSION['CIN'])){
header('location:in3.php');
}
?>
<!Doctype html>
<html>
    <head>
        <meta charset="utf-8" >
        <link rel="stylesheet" href="bootstrap.min.css">
        <link rel="stylesheet" href="admin1.css">
       
    </head>
     <body>
     <div class="header">
        <a class="a" href="deconnexion.php"><b> Déconnexion</b> </a>
        
            <div class="haut-gauche">
                     <h1 class="h1"> <b>Gammarth Immobilière<b> </h1>
                           <h2><span><b>G</b></span><b>estion</b> <span> <b>D</b></span><b>es</b> <span><b>B</b></span><b>ien</b> <span><b>C</b></span><b>onfisqués</b> </h2>
                </div>
</div>
<div class="row row-cols-1 row-cols-md-3 g-4">
  <div class="col">
    <div class="card border-dark mb-4" style="margin-top:150px; margin-left:50px;margin-right:50px;">
      <div class="card-body">
      <div class="bulle" style="margin-left: 150px;">
      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-house-door" viewBox="0 0 16 16">
  <path d="M8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4.5a.5.5 0 0 0 .5-.5v-4h2v4a.5.5 0 0 0 .5.5H14a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146zM2.5 14V7.707l5.5-5.5 5.5 5.5V14H10v-4a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5v4H2.5z"/>
</svg> </div>
      <br>
<br>
<br> <br> <br> <br><div class=" text-center">
        <h5 class="card-title"> Liste des biens</h5>
</div> 
<div class=" text-center">
       <br> <br> <a href="tabbord4.php" class="btn btn-dark" > Cliquer ici</a>
</div> 
      </div>

    </div>
  </div>
  <div class="col">
    <div  class="card border-dark mb-4" style="margin-top:150px; margin-left:50px; margin-right:50px;">
      <div class="card-body">
      <div class="bulle" style="margin-left: 150px;"> 
      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-list-check" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M5 11.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zM3.854 2.146a.5.5 0 0 1 0 .708l-1.5 1.5a.5.5 0 0 1-.708 0l-.5-.5a.5.5 0 1 1 .708-.708L2 3.293l1.146-1.147a.5.5 0 0 1 .708 0zm0 4a.5.5 0 0 1 0 .708l-1.5 1.5a.5.5 0 0 1-.708 0l-.5-.5a.5.5 0 1 1 .708-.708L2 7.293l1.146-1.147a.5.5 0 0 1 .708 0zm0 4a.5.5 0 0 1 0 .708l-1.5 1.5a.5.5 0 0 1-.708 0l-.5-.5a.5.5 0 0 1 .708-.708l.146.147 1.146-1.147a.5.5 0 0 1 .708 0z"/>
</svg> </div>
<br>
<br>
<br> <br> <br> <br><div class=" text-center">
        <h5 class="card-title"> Gestion des ventes</h5>
</div> 
<div class=" text-center">
       <br> <br> <a href="tabbordchefcom.php" class="btn btn-dark" > Cliquer ici</a>
</div> 
      </div>

    </div>
  </div>
  <div class="col">
    <div class="card border-dark mb-4" style="margin-top:150px; margin-left:50px; margin-right:50px;">
      <div class="card-body">
      <div class="bulle" style="margin-left: 150px;">
      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-people" viewBox="0 0 16 16">
  <path d="M15 14s1 0 1-1-1-4-5-4-5 3-5 4 1 1 1 1h8zm-7.978-1A.261.261 0 0 1 7 12.996c.001-.264.167-1.03.76-1.72C8.312 10.629 9.282 10 11 10c1.717 0 2.687.63 3.24 1.276.593.69.758 1.457.76 1.72l-.008.002a.274.274 0 0 1-.014.002H7.022zM11 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4zm3-2a3 3 0 1 1-6 0 3 3 0 0 1 6 0zM6.936 9.28a5.88 5.88 0 0 0-1.23-.247A7.35 7.35 0 0 0 5 9c-4 0-5 3-5 4 0 .667.333 1 1 1h4.216A2.238 2.238 0 0 1 5 13c0-1.01.377-2.042 1.09-2.904.243-.294.526-.569.846-.816zM4.92 10A5.493 5.493 0 0 0 4 13H1c0-.26.164-1.03.76-1.724.545-.636 1.492-1.256 3.16-1.275zM1.5 5.5a3 3 0 1 1 6 0 3 3 0 0 1-6 0zm3-2a2 2 0 1 0 0 4 2 2 0 0 0 0-4z"/>
</svg></div>
<br>
<br>
<br> <br> <br> <br><div class=" text-center">
        <h5 class="card-title"> Gestion des commerciaux</h5>
</div> 
<div class=" text-center">
       <br> <br> <a href="commerciaux.php" class="btn btn-dark" > Cliquer ici</a>
</div> 
      </div>

    </div>
  </div>
</div>


    </body>
</html>