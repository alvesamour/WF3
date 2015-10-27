<?php
$titrePage = "Pagination 2";
include "header.php";
include "fonctions.php";
// connexion BDD
$dbh = new PDO('mysql:host=localhost;dbname=webforce3;charset=utf8','wf3',"webforce3");

// récupération du numéro de page.
if(isset($_GET['page'])) $page = htmlentities(strip_tags($_GET['page']));
else $page=1;
// calcul de l'offset, 
$enregParPage = 25;
$offset = $enregParPage * ($page - 1);
//requête SQL + fecthALL
$req = "SELECT * FROM webforce3.insee LIMIT ".$offset.', '.$enregParPage;
$tableau = $dbh->query($req)->fetchALL(PDO::FETCH_ASSOC);
//Affichage du tableau
echo afficheTableau2D($tableau);
//liens de pagination
echo '<div class="underTable">';
if($offset>0)
{
 $precedent = "pagination2.php?page=".($page-1);
 echo '<a href="'.$precedent.'">Precedent</a> - ';
}
$suivant = "pagination2.php?page=".($page+1);
echo '<a href="'.$suivant.'">Suivant</a>';
echo '</div>';
include "footer.php";
?>