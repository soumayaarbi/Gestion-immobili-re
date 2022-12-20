<?php
session_start();
if(!isset($_SESSION['CIN'])){
  header('location:in.php');
}
require_once('connexion.php')?>
<!doctype html>
<html>
<head>
<link rel="stylesheet" href="bootstrap.min.css">
<link rel="stylesheet" href="tabbord.css"></head>
<body>
    <p> <h1> liste des ventes </h1> 
    <?php 
    $reqselect="select * from vente ";
    $resultat=mysqli_query($idcon,$reqselect);
    $nbr=mysqli_num_rows($resultat);
    echo "<p> Total :" .$nbr." Vente(s)...</p>";
    ?>
    </p>
<table width="100%" border="1px">
        <tr border="1">
        <th style="text-align:center;"> Matricule</th>
            <th style="text-align:center;"> Date de vente</th>
            <th style="text-align:center;"> Prix de vente(Dt)</th>
            <th style="text-align:center;"> Nom proprietaire </th>
</tr> 
<?php 
while ($ligne=mysqli_fetch_assoc($resultat))
{

?>
<tr>
<td style="text-align:center;"> <?php echo $ligne['Matricule'];?> </td>
    <td style="text-align:center;"> <?php echo $ligne['datevente']; ?> </td>
    <td style="text-align:center;"> <?php echo $ligne['prixvente'];?> </td>
    <td style="text-align:center;"> <?php echo $ligne['nomproprietaire'];?> </td>
</tr>
<?php }
?>
</table>
<br><br>
<div class="d-grid gap-2 d-md-flex justify-content-md-end">

				<a href="utilisateur.php" class="btn btn-outline-secondary"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-return-left" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M14.5 1.5a.5.5 0 0 1 .5.5v4.8a2.5 2.5 0 0 1-2.5 2.5H2.707l3.347 3.346a.5.5 0 0 1-.708.708l-4.2-4.2a.5.5 0 0 1 0-.708l4-4a.5.5 0 1 1 .708.708L2.707 8.3H12.5A1.5 1.5 0 0 0 14 6.8V2a.5.5 0 0 1 .5-.5z"/>
</svg> Retour </a> </div>