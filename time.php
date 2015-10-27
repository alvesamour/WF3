<?php
include "header.php";

echo date('d/m/Y', '123456789')."<br/>";


echo date('r')."<br/>";

echo date('z')."<br/>"."<hr>";


$nextWeek = time() + (7 * 24 * 60 * 60);
// 7 jours; 24 heures; 60 minutes; 60 secondes
echo 'Aujourd\'hui :       '. date('Y-m-d') ."\n";
echo 'Semaine prochaine : '. date('Y-m-d', $nextWeek) ."\n"."<br/>"."<hr>";
// ou en utilisant strtotime():
echo 'Semaine prochaine avec strtotime: '. date('Y-m-d', strtotime('+1 week')) ."\n"."<br/>"."<hr>";

/*************************************************************/

$tFeries = array("Jour de l'an"=>'1 january 2015',
				 "1er mai"=>'1 may 2015',
				 "8 mai"=>'8 mai 2015',
				 "15 Aout"=>'15 august 2015',
				 "Toussaint"=>'1 novembre2 2015',
				 "11 nov"=>'11 novembre 2015',
				 "Noel"=>'25 decembre 2015');

$tJours = array('Dimanche',
				 'Lundi',
				 'Mardi',
				 'Mercredi',
				 'Jeudi',
				 'Vendredi',
				 'Samedi');



echo "<ul>";
//boucle de traitement jours feries
foreach($tFeries as $dJourFr=>$dFerie)
{
	//numero du jour avec strtotime
	$numJour = date("w", strtotime($dFerie));
	//on affiche le jour et la traduction en FR
	echo "<li>".$dJourFr.": ".$tJours[$numJour]."</li>";
}

echo "</ul>";

 
/*
$mois=array('janvier', 'fevrier', 'mars', 'avril', 'mai', 'juin', 'juillet', 'août',
	'septembre', 'octobre', 'novembre', 'decembre');
$semaine=array('lundi','mardi','mercredi', 'jeudi', 'vendredi', 'samedi',
 'dimanche');
*/

  $tMois = array( 1 => 'Janvier',
            2 => 'Fevrier',
            3 => 'Mars',
            4 => 'Avril',
            5 => 'Mai',
            6 => 'Juin',
            7 => 'Juillet',
            8 => 'Août',
            9 => 'Septembre',
            10 => 'Octobre',
            11 => 'Novembre',
            12 => 'Decembre');
        
        $tJours = array(
            1 => 'Lundi',
            2 => 'Mardi',
            3 => 'Mercredi',
            4 => 'Jeudi',
            5 => 'Vendredi',
            6 => 'Samedi',
            7 => 'Dimanche');

        $nomJour = $tJours[date('w')];
        $nomMois = $tMois[date('n')];
        $numJour = date('j');

        if ($numJour==1) $numJour .="<sup>er</sup>";
        $annee = date('y');
        $heure = date('H\hi');

        echo "Aujourd'hui nous sommes le ".$nomJour." ".$numJour." "
        .$nomMois." ".$annee." et il est ".$heure;

       







	/*		echo "<pre>".print_r($tFeries)."</pre>";


			echo "<table border='1'><tr><th>Elements</th><th>Valeur</th></tr>";
	foreach("jour feriés" as $cle=>$tFeries)


	

   		echo "<pre>";
		var_dump($tFeries);
		echo "</pre>.<hr>";
*/


include "footer.php";

?>