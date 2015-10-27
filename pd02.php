<?php

$titrePage = 'sql et PDO';
include "header.php";

$dbh = new PDO('mysql:host=localhost;dbname=webforce3;charset=utf8','root', '');
//print_r($dbh);


//$sql = "INSERT INTO `eleve`(`Nom`, `Prenom`, `idEcole`) VALUES ('Valjean','Jean','2')";

//$sql2 ="INSERT INTO `notes`(`date`, `idEleve`, `idMatiere`, `note`, `commentaire`) VALUES ('2015-10-05', '5', '2','15.5','bien')";

//$sql3 ="UPDATE `matieres` SET `idMatiere`= '4',`Libelle`= 'JeSaisTout'";

//$sql4 ="DELETE `matieres` SET `idMatiere`= '4',`Libelle`= 'JeSaisTout'";

//$count = $dbh->exec($sql);

//echo "<p>".$count." eleve ajouté</p>";
//echo "<p>".$count." note ajouté</p>";
//echo "<p>".$count." matiere changée</p>";

//echo "<p>".$count." matiere supprimée</p>";

$sql = "select nom, prenom from eleve where idEleve > 1 and idEleve < 10 ";
echo "<pre>";
foreach ($dbh->query($sql) as $row) 
{
	//echo $row['nom']." ".$row['prenom']."<br/>";

print_r($row);
}
echo "</pre>";




























unset($dbh);



include "footer.php";

?>