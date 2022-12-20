<?php
require_once('connexion.php');
error_reporting(0);
?>
<?php
session_start();
if(!isset($_SESSION['CIN'])){
$CIN=$_GET['CIN'];
$reqselect="select * from utilisateur where CIN='$CIN'";
$resultat=mysqli_query($idcon,$reqselect);}
?>
<table width="100%" border="1px">
        <tr border="1">
            <th style="text-align:center;"> Matricule</th>
            <th style="text-align:center;"> Titre</th>
            <th style="text-align:center;"> Localisation</th>
            <th style="text-align:center;"> Prix </th>
            <th style="text-align:center;"> Etat</th>
            <th style="text-align:center;"> Supprimer</th>
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
    <td style="text-align:center;"> <?php echo $ligne['Etat'];?> </td>
</tr>
<?php }
?>
</table>