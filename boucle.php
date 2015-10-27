<!DOCTYPE html>
<html>
<head>
	<script type="texte/javascript"></script>

	<title></title>
</head>
<body>
<?php 
/* script boucle et fonction utile en php
*/
include "header.php";
$tNoms = array('Ali' , 'Momo', 'Rachid' , 'Karim' , 'Robert');
$iNombreElements = count($tNoms);
	echo "<ul>";
for($i=0; $i<$iNombreElements; $i++)
   {
	echo "<li>".$tNoms[$i]."</li>";
   }

	echo "</ul>.<hr>";

	$tNoms2 = array('nom'=>'Cher',
				 'prenom'=>'ali',
				 'test',
				 10=>'test');
	echo "<table border='1'><tr><th>Elements</th><th>Valeur</th></tr>";
	foreach($tNoms2 as $cle=>$valeur)
	{
		echo "<tr><td>".$cle."</td><td>".$valeur."</td></tr>";
	} 
		echo "</table>.<hr>";

		echo "<pre>".print_r($tNoms, true)."</pre>";

		echo "<pre>";
		var_dump($tNoms);
		echo "</pre>.<hr>";
		
		$numerateur = 8;
		$tNombres = array(10, 5, 0, 2, 8, 6, 7, 12, 65, 45, 36, 88, 54, 12);
		foreach ($tNombres as $nombres)
		{
			echo "<li>".($numerateur/$nombres)."</li>";
			if($nombres == 45) break;
					}
		echo "</ul>";

		$variable = "contenu";
		if (isset($variable)) echo "variables est definie.<br/>";
		if (isset($tNoms2['nom'])) echo "element nom du tableau defini.<hr>";

		unset($variable);
		unset($tNoms2['nom']);

		if (empty($variable)) echo "variables est definie ou nulle.<br/>";
		else echo "l'element ou la variable est definie ou non nulle.<br/>";
		if (isset($tNoms2['nom'])) echo "element nom du tableau defini non defini ou nul.<br/>";
		else echo "l'element ou la variable est defini ou nul.<br/>.<hr>";
		echo "<pre>".print_r($tNoms, true)."</pre>";


include "footer.php";
?>





</body>
</html>