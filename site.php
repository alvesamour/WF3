<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
$titre ="Web Dynamique";
include "head.php";
include
$sbr ="<br/>"."<hr>";
echo $sbr;
echo get_include_path();

$tableau = array(array('language'=>'PHP', 'age' => 20, 'author'=>'xx', 'comppo'=>'yy'),
				array('language'=>'JAVA', 'age' => 33, 'author'=>'xx', 'comppo'=>'yy'),
				array('language'=>'C#', 'age' => 14, 'author'=>'xx', 'comppo'=>'yy'),
				array('language'=>'COBOL', 'age' => 56, 'author'=>'xx', 'comppo'=>'yy'),
				array('language'=>'BASIC', 'age' => 51, 'author'=>'xx', 'comppo'=>'yy'),
				array('language'=>'C', 'age' => 45, 'author'=>'xx', 'comppo'=>'yy'),
				array('language'=>'C++', 'age' => 17, 'author'=>'xx', 'comppo'=>'yy')
				);

/*echo '<table id="nor"><tr><th>Language</th><th>Age</th></tr>';
foreach ($tableau as $language)//tableau dimension 1
{echo "<tr>";//ouverture de la ligne
	//echo '<tr><td>'.$language['language'].'</td><td>'.$language['age'].'</td></tr>';
	
foreach ($language as $valeur)//boucle dimension 2
 {
 	echo "<td>".$valeur."</td>";//affichage d'une colonne du tableau

}
echo "</tr>"; // fermeture de ligne
}
*/

echo '<table>';
foreach ($tableau as $cle => $language)
 {
 	if($cle==0)
 	{
	echo '<tr>';
	foreach ($language as $entete=>$rien)
	{
		echo "<th>".$entete."</th>";
		}
		echo '</tr>';
}

echo "<tr>";
foreach ($language as $valeur)
 {
 	$class = '';
 	if(is_numeric($valeur)) $class='class="nombre"';
 	echo "<td ".$class.">".$valeur."</td>";
 }
 echo "</tr>";
}



echo '</table>';







echo $sbr;
include "foot.php";
echo $sbr;
?>

</body>
</html>