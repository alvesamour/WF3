<?php
/********************
*					*
*	PAGINATION PHP 	*
*					*
********************/
$titrePage = "Pagination";
include "header.php";
// paramètres de configuration
include "param.inc.php";
// connexion MySQL
include "connexion.php";
// pour l'affichage du tableau HTML
include "fonctions.php";
// toujours protéger les infos envoyées par l'URI ou par formulaire
if(isset($_GET['page'])) $page = htmlentities(strip_tags($_GET['page']));
else $page = 1;
echo 'Page N° '. $page."<br/>";

$parPage = 10;
$debut = $parPage * ($page - 1);
// page 1 on doit aller de 0 à 10
// page 2 on doit aller de 10 à 20
// page 3 on doit aller de 20 à 30 
// et caetera
$req = "SELECT * FROM insee LIMIT ".$debut.', '.$parPage;
//echo $req.'<br/>';	

//exécution de la requête
$curseur = $dbh->query($req);
//récupération du résultat de la requête (tableau associatif 2D)
$resultat = $curseur->fetchALL(PDO::FETCH_ASSOC);

echo afficheTableau2D($resultat)."<br/><div class='underTable'>";

// si page supérieure à 1
if($page>1)
{
	// lien pour la page précédente
	//echo '<a href="pagination.php?page='.($page-1).'">Précédent</a> - ';
	echo  '<button class="precsuiv" onclick="document.location.href=\'pagination.php?page='.($page-1).'\';">&lt;&lt;</button>';

}
//lien pour la page suivante
//echo '<a href="pagination.php?page='.($page+1).'">Suivant</a>';
echo  '<button class="precsuiv" onclick="document.location.href=\'pagination.php?page='.($page+1).'\';">&gt;&gt;</button></div>';

echo "<br/>";
//encodage du mot de passe en SHA256
echo "webforce3 encodé en SHA 256: ".hash("SHA256", $bddUser);

/*
$rq2 = "insert into webforce3.ecole(nom, codeInsee) values(?,?)";
$cur = $dbh->prepare($rq2);
$res = $cur->execute(array('test', '12345'));
var_dump($res);
echo $dbh->lastInsertId();*/
include "footer.php";
?>