<?php
$titrePage = "agregation sql";
include "header.php";

require_once "connexion.php";

$requete = "SELECT COUNT(*)
			FROM webforce3.insee
			WHERE codePostal LIKE '02%'";

$curseur = $dbh->query($requete);
if (!$curseur) print_r($dbh->errorInfo());
else echo $curseur->fetchColumn();
echo '<hr/>';
$rqMoyEleve ="SELECT AVG(note)
				FROM webforce3.notes
				WHERE idEleve=1";
$curMoyEleve = $dbh->query($rqMoyEleve);

if (!$curMoyEleve) print_r($dbh->errorInfo());
else echo $curMoyEleve->fetchColumn();

echo '<hr/>';

$rqMoyMatiere ="SELECT AVG(note)
				FROM webforce3.notes
				WHERE idMatiere=1";
$curMoyMatiere = $dbh->query($rqMoyMatiere);

if (!$curMoyMatiere) print_r($dbh->errorInfo());
else echo $curMoyMatiere->fetchColumn();


include "footer.php";

?>
