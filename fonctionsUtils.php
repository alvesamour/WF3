<?php

$titePage = "function";
include "head.php";

//echo get_include_path();
require_once "fonction.php";

echo double(5)."<br/>";
echo triple(5)."<br/>";
echo $multiplicateur."<br/>";
echo double(triple(46))."<br/>";

$dateJour = date('Y-m-d');
echo date_fr($dateJour)."<br/>";
echo date_fr('2015-10-05')."<br/>";
echo date_us('05/10/2015')."<br/>";

$tableau = array(array('language'=>'PHP', 'age' => 20, 'author'=>'xx', 'comppo'=>'yy'),
				array('language'=>'JAVA', 'age' => 33, 'author'=>'xx', 'comppo'=>'yy'),
				array('language'=>'C#', 'age' => 14, 'author'=>'xx', 'comppo'=>'yy'),
				array('language'=>'COBOL', 'age' => 56, 'author'=>'xx', 'comppo'=>'yy'),
				array('language'=>'BASIC', 'age' => 51, 'author'=>'inconnu', 'comppo'=>'yy'),
				array('language'=>'C', 'age' => 45, 'author'=>'inconnu', 'comppo'=>'yy'),
				array('language'=>'C++', 'age' => 17, 'author'=>'xx', 'comppo'=>'yy')
				);

echo afficheTableau2D($tableau);

$tResultat = array_map();
foreach ($tNombres as $cle => $nombre) {
	if (pair($nombre))$tResultat[$cle] = $nombre; 
}
print_r($tResultat);


$cube = $nb;
$tNombres = array(1,2,3,4,5,6,7,8,9,10);
print_r(array_filter($tNombres, 'pair'));
print_r(array_filter($tNombres, 'impair'));
print_r(array_filter($tableau, 'inconnu'));
print_r(array_map('cube', $tableau));
print_r(array_map('cube', $tNombres));
print_r(array_map('divers', $tableau));
echo '<pre>';







include "foot.php";
?>