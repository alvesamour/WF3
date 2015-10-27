<?php
/***********************************
* 								   *
* ce script ne sert à rien         * 
* developpé par : Moi              *
* le :30/09                        *
* modifié par :lui                 *
* le :30/09                        *
*                                  *
***********************************/
?>

<!DOCTYPE html>
<html>
<head>
	<title>Ma Premiere page php</title>
	<link rel="stylesheet" type="text/css" href="php.css">
	<script src="php.js"></script>
	<script src="jquery-2.1.4.min.js"></script>


<div id="clickme">
  Click here
</div>
<img id="book" src="book.png" alt="" width="100" height="123"
  style="position: relative; left: 10px;">



	
	
</head>
<body>
<?php
echo "<h1> Hello WF3!</h1>";
$maVariableQuiNeSertARien ="test";
echo "$maVariableQuiNeSertARien";
echo '<script type="text/javascript" src="php.js"></script>';
$floatElemt ="<div id=\"divi\">DIV</div>";
echo "$floatElemt"; 
?>

<?php
	echo "<h1> Salut WebForce3!</h1>";
	$maVariableQuiNeSertARien ="test";
	echo $maVariableQuiNeSertARien;
	$sChaine="chaine de caracteres";
	$iNombre= 12;//integer
	$fNombre= 12.5;//float
	$iNombre*=2;//equivalent à $iNombre = $iNombre * 2
	$fResultat= $iNombre + $fNombre;
	
	$sResultat2= $sChaine + $iNombre;
	$bEtat= true;//boolean
	$tVille= array("Papeete", "Pointe à Pitre", "Cancun", "..." );
	$tTest= array('test', 10, 12.5, true, false);
	$sBr= "</br>";
	echo $sChaine."<br/>";
	echo $iNombre."<br/>";
	echo $fNombre."<br/>";
	echo $sResultat2.$sBr;
	echo $fResultat.$sBr;
	echo $bEtat."<br/>";
	
	//echo $tVille;//provoque une erreur de conversion....
	echo "<pre>";// la balise <pre> permet le formatage du tableau
	print_r($tVille);
	echo "<pre>";
	echo $tVille[0]."<br/>";//affiche le premier rang du tablo

	print_r($bEtat);//print_r() affiche les tableaux et les objets
    var_dump($bEtat);//var_dump() affiche les données et leur type
	echo "<hr/>";
	var_dump($tTest);

	echo "le nombre vaut: $iNombre".$sBr;
	echo 'le nombre vaut $iNombre'.$sBr;
	echo 'le nombre vaut: '.$iNombre.$sBr;

	echo $sBr;
	echo $iNombre++.$sBr;//incremente apres affichage
	echo $iNombre++.$sBr;
	echo ++$iNombre.$sBr;//incremente avant affichage

	//generation de JavaScript en php
	$sMoi= "Ali";
	echo '<script type="text/javascript">alert("Bonjour '.$sMoi.'!");</script>';


$note = rand(0,20) ; //nombre aléatoire entre 0 et 10
			if($note<=10) // si note <= 10 on affiche une image "pas bien"
			{
				echo '<img src="/img/footix.jpg" alt="peut mieux faire" />';
			}
			else // sinon on affiche une image "bien"
			{
				echo "<img src=\"/img/foot.jpg\" alt=\"Youpeee\" />";
			}
switch($note)
			{
				case 0:	$appreciation = "oups!";
						break;
				case 1:
				case 2:
				case 3: 
				case 4: $appreciation = "Etes vous venu en cours?";
						break;
				case 5:
				case 6:
				case 7:
				case 8:
				case 9:	$appreciation = "en progrès";
						break;
				default: $appreciation = "non noté";
			}
			echo $note;
			echo $appreciation."<br/>";

echo date('d/m/Y H:i:s');

		
?>


</body>
</html>