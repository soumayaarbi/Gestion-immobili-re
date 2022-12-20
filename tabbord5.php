<?php 
session_start();
if(!isset($_SESSION['CIN'])){
  header('location:in4.php');
}
require_once('connexion.php')?>
<!doctype html>
<html>
<head>
<link rel="stylesheet" href="bootstrap.min.css">
<link rel="stylesheet" href="tabbord.css"></head>
<body>
    <p> <h1> liste des Biens </h1> 
    <?php 
    $reqselect="select * from bienimm";
    $resultat=mysqli_query($idcon,$reqselect);
    $nbr=mysqli_num_rows($resultat);
    echo "<p> Total :" .$nbr." Bien(s)...</p>";
    ?>
    </p>
    <table width="100%" border="1px">
        <tr border="1">
            <th style="text-align:center;"> Matricule</th>
            <th style="text-align:center;"> Titre</th>
            <th style="text-align:center;"> Localisation</th>
            <th style="text-align:center;"> Prix </th>
            <th style="text-align:center;"> description</th>
            <th style="text-align:center;"> Superficie(m2)</th>
            <th style="text-align:center;"> Date d'achat</th>
            <th style="text-align:center;"> Etat</th>
            <th style="text-align:center;"> Modifier</th>
            
</tr>
<?php 
while ($ligne=mysqli_fetch_assoc($resultat))
{

?>
<tr>
    <td style="text-align:center;"> <?php echo $ligne['Matricule'];?> </td>
    <td style="text-align:center;"> <?php echo $ligne['Titre'];?> </td>
    <td style="text-align:center;"> <?php echo $ligne['Localisation'];?> </td>
    <td style="text-align:center;"> <?php echo $ligne['prix'];?> </td>
    <td style="text-align:center;"> <?php echo $ligne['description'];?> </td>
    <td style="text-align:center;"> <?php echo $ligne['superficie'];?> </td>
    <td style="text-align:center;"> <?php echo $ligne['dateachat'];?> </td>
    <td style="text-align:center;"> <?php echo $ligne['Etat'];?> </td>
    </button></a></td>
    <td style="text-align:center;"> <a href="modifieretat.php?modi=<?php echo $ligne['Matricule']; ?>"><button  type="button" class="btn btn-outline-secondary"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
  <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
  <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
</svg></button></a></td>
    </tr>
<?php }
?>
</table>
<br><br>
<div class="d-grid gap-2 d-md-flex justify-content-md-end">

				<a href="commerciale.php" class="btn btn-outline-secondary"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-return-left" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M14.5 1.5a.5.5 0 0 1 .5.5v4.8a2.5 2.5 0 0 1-2.5 2.5H2.707l3.347 3.346a.5.5 0 0 1-.708.708l-4.2-4.2a.5.5 0 0 1 0-.708l4-4a.5.5 0 1 1 .708.708L2.707 8.3H12.5A1.5 1.5 0 0 0 14 6.8V2a.5.5 0 0 1 .5-.5z"/>
</svg> Retour </a> </div>