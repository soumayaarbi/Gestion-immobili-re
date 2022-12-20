<?php
error_reporting(0);
require_once('connexion.php')?>
<!Doctype html>
<html>
    <head>
        <meta charset="utf-8" >
        <link rel="stylesheet" href="bootstrap.min.css">
        <link rel="stylesheet" href="si.css">
       
    </head>
<header class="header" role="banner">
  <h1 class="logo">
    <a href="#">Terence <span>Devine</span></a>
  </h1>
  <div class="nav-wrap">
    <nav class="main-nav" role="navigation">
      <ul class="unstyled list-hover-slide">
        <li><a href="#admin2.php">About</a></li>
        <li><a href="#">Work</a></li>
        <li><a href="#">Contact</a></li>
        <li><a href="#">Blog</a></li>
      </ul>
    </nav>
    <ul class="social-links list-inline unstyled list-hover-slide">
      <li><a href="#">Twitter</a></li>
      <li><a href="#">Google+</a></li>
      <li><a href="#">GitHub</a></li>
      <li><a href="#">CodePen</a></li>
    </ul>
  </div>
</header>
<section>

    <p> <h1> liste des utilisateurs </h1> 
    <?php 
    $reqselect="select * from utilisateur";
    $resultat=mysqli_query($idcon,$reqselect);
    $nbr=mysqli_num_rows($resultat);
    echo "<p> Total :" .$nbr." utilisateur(s)...</p>";
    ?>
    </p>
    <p> <a href="ajoutp.php"><button type="button" class="btn btn-outline-secondary"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-clipboard-plus" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M8 7a.5.5 0 0 1 .5.5V9H10a.5.5 0 0 1 0 1H8.5v1.5a.5.5 0 0 1-1 0V10H6a.5.5 0 0 1 0-1h1.5V7.5A.5.5 0 0 1 8 7z"/>
  <path d="M4 1.5H3a2 2 0 0 0-2 2V14a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V3.5a2 2 0 0 0-2-2h-1v1h1a1 1 0 0 1 1 1V14a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V3.5a1 1 0 0 1 1-1h1v-1z"/>
  <path d="M9.5 1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5h3zm-3-1A1.5 1.5 0 0 0 5 1.5v1A1.5 1.5 0 0 0 6.5 4h3A1.5 1.5 0 0 0 11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3z"/>
</svg> Ajouter</button></a> </p>
    <table width="100%" border="1px">
        <tr border="1">
            <th style="text-align:center;"> Cin </th>
            <th style="text-align:center;"> Nom d'utilisateur </th>
            <th style="text-align:center;"> Email </th>
            <th style="text-align:center;"> Mot de passe </th>
            <th style="text-align:center;"> Fonction </th>
            <th style="text-align:center;"> Supprimer</th>
            <th style="text-align:center;"> Modifier</th>
</tr> 
<?php 
while ($ligne=mysqli_fetch_assoc($resultat))
{

?>
<tr>
    <td style="text-align:center;"> <?php echo $ligne['Cin'];?> </td>
    <td style="text-align:center;"> <?php echo $ligne['username'];?> </td>
    <td style="text-align:center;"> <?php echo $ligne['email'];?> </td>
    <td style="text-align:center;"> <?php echo $ligne['password'];?> </td>
    <td style="text-align:center;"> <?php echo $ligne['fonction'];?> </td>
    <td style="text-align:center;"> <a href="supprimerp.php?suput=<?php echo $ligne['Cin'];?>"onclick="return(confirm('Etes-vous sûr de vouloir supprimer cet utilisateur?'));">
<button  type="button" class="btn btn-outline-secondary"> 
<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-clipboard-x" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M6.146 7.146a.5.5 0 0 1 .708 0L8 8.293l1.146-1.147a.5.5 0 1 1 .708.708L8.707 9l1.147 1.146a.5.5 0 0 1-.708.708L8 9.707l-1.146 1.147a.5.5 0 0 1-.708-.708L7.293 9 6.146 7.854a.5.5 0 0 1 0-.708z"/>
  <path d="M4 1.5H3a2 2 0 0 0-2 2V14a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V3.5a2 2 0 0 0-2-2h-1v1h1a1 1 0 0 1 1 1V14a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V3.5a1 1 0 0 1 1-1h1v-1z"/>
  <path d="M9.5 1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5h3zm-3-1A1.5 1.5 0 0 0 5 1.5v1A1.5 1.5 0 0 0 6.5 4h3A1.5 1.5 0 0 0 11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3z"/>
</svg>
</button></a></td>
    <td style="text-align:center;"> <a href="modifierp.php?modi=<?php echo $ligne['Cin']; ?>"><button  type="button" class="btn btn-outline-secondary"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
  <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
  <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
</svg></button></a></td>

</tr>
<?php }
?>
</table>
<br><br>
<div class="d-grid gap-2 d-md-flex justify-content-md-end">
<a href="admin2.php"  style="font-size:20px;" ><button class="btn btn-outline-secondary"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-return-left" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M14.5 1.5a.5.5 0 0 1 .5.5v4.8a2.5 2.5 0 0 1-2.5 2.5H2.707l3.347 3.346a.5.5 0 0 1-.708.708l-4.2-4.2a.5.5 0 0 1 0-.708l4-4a.5.5 0 1 1 .708.708L2.707 8.3H12.5A1.5 1.5 0 0 0 14 6.8V2a.5.5 0 0 1 .5-.5z"/>
</svg>	 Retour  </button> </a></div> 
</section>