<?php
$titrPage = "resultats googleForc3";
include "header.php";//affichage
include "fonctions.php";
if (isset($_GET['page']))
{
	$page= htmlentities(strip_tags($_GET['page']));	
}
else $page = 1;
$fin = 20;

$debut= $fin * ($page - 1);
$motCle = htmlentities(strip_tags($_GET['search']));
$requete = "SELECT  codeInsee AS 'Code INSEE',
					codePostal AS 'Code Postal',
					nomCommune AS 'Nom de la Commune',
					Libelle AS 'Libelle Postal'
			FROM webforce3.insee
			WHERE nomCommune LIKE ?
			LIMIT ".$debut.", ".$fin;
// limit 0,10"
		//'".$motCle."'"

require_once "connexion.php";
$curseur = $dbh->prepare($requete);
$curseur->execute(array('%'.$motCle.'%'));

/************
*affichage nbr de pages (version bruno)
*
*
/*************/


$resultatRecherche = $curseur->fetchAll(PDO::FETCH_ASSOC);
echo '<div>'.afficheTableau2D($resultatRecherche).'</div>';
if($page > 1)
{
	echo '<button onclick="document.location.href=\'recherche.php?page='.
	($page-1).'&search='.$_GET['search'].'\';">&lt;&lt;</button>';
}
if(count($resultatRecherche)==$fin)
echo '<button onclick="document.location.href=\'recherche.php?page='.
	($page+1).'&search='.$_GET['search'].'\';">&gt;&gt;</button>';

echo '<br/>','<br/>';
echo '<a href="googleforce3.php">Autre recherche</a>';



include "footer.php";
?>