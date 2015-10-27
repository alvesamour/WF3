<?php
/************************************
*									*
* ce script ne sert à rien 			*
* développé par 					*
* le 								*
* modifié par 						*
* le 								*
*									*
************************************/
?>


<html>
	<head>
		<title>Ma première page PHP</title>
		<style type="text/css">
		body{background-color: silver;}
		img{ width: 150px;}
		</style>
	</head>
	<body>
		<?php 
			echo "<h1>Hello WF3!</h1>";
			$sBr = "<br/>";
			$maVariableQuiNeSertARien ="<p>test</p>";
			echo $maVariableQuiNeSertARien;
			$sChaine = "chaine de caractères";
			$iNombre = 12; //integer
			$fNombre = 12.5; //float
			$iNombre *= 2; // équivalent à $iNombre = $iNombre * 2;
			$fResultat = $iNombre + $fNombre; // integer + décimal
			$sResultat2 = $sChaine + $iNombre; // chaine + integer
			$bEtat = true; //boolean
			// tableau des villes sympas
			$tVille = array("Papeete", "Pointe à Pitre", "Cancun", "...");
			$tTest = array('test', 10, 12.5, true, false);

			echo $sChaine."<br/>"; //le <br/> est purement pédagogique
			echo $iNombre."<br/>";
			echo $fNombre.$sBr;
			echo $bEtat."<br/>";
			echo $fResultat.$sBr; 
			echo $sResultat2.$sBr;
			echo $tVille; //provoque une erreur de conversion...
			echo "<pre>"; // la balise <pre> permet le formatage du tableau
			print_r($tVille);
			echo "</pre>";
			echo $tVille[0].$sBr; //affiche le premier enreg du tableau

			print_r($bEtat); // print_r() affiche les tableaux et les objets
			var_dump($bEtat); // var_dump() affiche les données et leur type
			echo "<hr/>";
			var_dump($tTest);
			echo $sBr;
			echo $iNombre++.$sBr; //incrément après affichage
			echo $iNombre++.$sBr;
			echo ++$iNombre.$sBr; // incrément avant affichage
			
			echo "Le nombre vaut: $iNombre".$sBr;
			echo 'Le nombre vaut: $iNombre'.$sBr;
			echo 'Le nombre vaut: '.$iNombre.$sBr;
			// génération de JS en PHP
			$sMoi = "Bruno";
			echo '<script type="text/javascript">alert("Bonjour '.$sMoi
				  .'!");</script>';

			$note = rand(0,10); //nombre aléatoire entre 0 et 10
			if($note<=10) // si note <= 10 on affiche une image "pas bien"
			{
				echo '<img src="images/pasbien.jpg" alt="peut mieux faire" />';
			}
			else // sinon on affiche une image "bien"
			{
				echo "<img src=\"images/bien.jpg\" alt=\"Youpeee\" />";
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
			echo $appreciation;
		?>
	</body>
</html>