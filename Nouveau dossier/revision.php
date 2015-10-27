<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="revision.css">

</head>
<body>

</body>
</html>

<?php
/*********************************
*tableaux 2d
*boucles
*
*
*/

$tableau = array
		( array('nom'=>'Antoine Sylvain','Français'=>mt_rand(0,20), 'Maths'=>mt_rand(0,20), 'Info'=>mt_rand(0,20)),
		array('nom'=>'Arcole David','Français'=>mt_rand(0,20), 'Maths'=>mt_rand(0,20), 'Info'=>mt_rand(0,20)),
		array('nom'=>'Besancon JB','Français'=>mt_rand(0,20), 'Maths'=>mt_rand(0,20), 'Info'=>mt_rand(0,20)),
		array('nom'=>'Cherfi Ali','Français'=>mt_rand(0,20), 'Maths'=>mt_rand(0,20), 'Info'=>mt_rand(0,20)),

	);

echo"<pre>";
print_r($tableau);
echo"<pre>";

$moymath = 0;

$moyFrançais = 0;
$moyenneinfo = 0;


echo "<table border=\"1\"><tr><th>Nom</th><th>Français</th><th>Maths</th><th>Info</th><th>Moyenne</th></tr>";
$nbElem = count($tableau);
for($i=0; $i<$nbElem; $i++)
{

	echo "<tr>";
	$moyenne = 0;
	foreach ($tableau[$i] as $cle => $elem) 
	{

		echo "<td>".$elem."</td>";
		if($cle=='Français')
		{
			$moyenne = $moyenne +$elem;
			$moyFrançais += $elem;
		}
		else if($cle=='Maths')
		{
			$moyenne = $moyenne +$elem;  // $moyenne += $elem
			$moymath += $elem;
		}
		else if($cle=='Info')
		{
			$moyenne = $moyenne +$elem;  // $moyenne += $elem
			$moyenneinfo += $elem;
		}
	}
	$moyenneEleve=($moyenne / (count($tableau[$i])-1));
	$class= " ";
	if($moyenneEleve < 10)
	{
		$class = ' class="inf10"';
	}
	else if($moyenneEleve == 10)
	{
		$class = ' class="egal10"';
	}
	else if($moyenneEleve > 10)
	{
		$class = ' class="sup10"';
	}
	echo "<td".$class.">".round($moyenneEleve,2)."</td>";
	echo "</tr>";
}
$totalInfo = round(($moyenneinfo /$nbElem), 2);
$totalfrancais = round($moyFrançais/$nbElem, 2);
$totalmath = round($moymath/$nbElem, 2);
$totalGeneral = round($totalfrancais + $totalmath / 2,2);
echo "<tr><td><strong>Moyenne</strong></td>";
echo "<td>".$totalfrancais."</td><td>".$totalmath."</td><td>".$totalInfo."</td><td>".$totalGeneral."</td></tr>";
echo "</table>";

/**************************************************************************************************************************************/




?>