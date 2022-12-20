<?php
session_start();
if(!isset($_SESSION['CIN'])){
  header('location:in4.php');
}
?>

<!Doctype html>
<html>
    <head>
        <meta charset="utf-8" >
        
        <link rel="stylesheet" href="bootstrap.min.css">
        <link rel="stylesheet" href="utilisateur.css">
       
    </head>
     <body>
     <div class="header">
        <a class="a" href="deconnexion.php"> <b>Déconnexion </b></a>
            <div class="haut-gauche">
                     <h1 class="h1"><b> Gammarth Immobilière <b> </h1>
                    <h2><span><b>G</b></span><b>estion</b> <span> <b>D</b></span><b>es</b> <span><b>B</b></span><b>ien</b> <span><b>C</b></span><b>onfisqués</b> </h2>
                </div>
</div>

<div>
        <div class="row">
  <div class="col-sm-6">
    <div  style="width: 19rem; margin-left:370px; margin-top:200px">
    <div  class=" border-dark mb-3 border border-2">
      <div class="card-body">
        <div class="bulle" style="margin: 20px 95px;"> 
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-house-door" viewBox="0 0 16 16">
  <path d="M8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4.5a.5.5 0 0 0 .5-.5v-4h2v4a.5.5 0 0 0 .5.5H14a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146zM2.5 14V7.707l5.5-5.5 5.5 5.5V14H10v-4a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5v4H2.5z"/>
</svg>
</div>
<br>
<br>
<br>
<br>
<br>
<div class=" text-center">
        <h5 class="card-title"> Consulter les biens</h5>
</div> 
        
        <div class=" text-center">
        <a href="tabbord5.php" class="btn btn-dark" > Cliquer ici</a>
</div> 
      </div>
    </div>
  </div>
</div>
  <div class="col-sm-6">
    <div style="width: 19rem; margin: 200px 400px 100px 120px;">
    <div class=" border-dark mb-3 border border-2">
      <div class="card-body">
      <div class="bulle" style="margin: 20px 95px;"> 
      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-list-check" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M5 11.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zM3.854 2.146a.5.5 0 0 1 0 .708l-1.5 1.5a.5.5 0 0 1-.708 0l-.5-.5a.5.5 0 1 1 .708-.708L2 3.293l1.146-1.147a.5.5 0 0 1 .708 0zm0 4a.5.5 0 0 1 0 .708l-1.5 1.5a.5.5 0 0 1-.708 0l-.5-.5a.5.5 0 1 1 .708-.708L2 7.293l1.146-1.147a.5.5 0 0 1 .708 0zm0 4a.5.5 0 0 1 0 .708l-1.5 1.5a.5.5 0 0 1-.708 0l-.5-.5a.5.5 0 0 1 .708-.708l.146.147 1.146-1.147a.5.5 0 0 1 .708 0z"/>
</svg>
</div>
<br>
<br>
<br>
<br>
<br>
<div class=" text-center">
        <h5 class="card-title">Consulter la liste des ventes</h5>
</div>

<div class=" text-center">
      <a href="tabbord6.php" class="btn btn-dark"> Cliquer ici</a>
</div>
      </div>
    </div>
  </div>