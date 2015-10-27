<?php
// Fonction pour calculer le double
function double($number)
{
	return $number * 2;
}

// fonction pour calculer le triple...
function triple($number)
{
	//global $multiplicateur; // ou $GLOBALS['multiplicateur']	
	$GLOBALS['multiplicateur'] = 3;
	return $number * $GLOBALS['multiplicateur'];
}

// fonction date en français
// convertit YYYY-MM-DD en JJ/MM/AAAA
function date_fr($date_us)
{
  $tDate = explode("-", $date_us); // on transforme la date en tableau (-)
  return $tDate[2]."/".$tDate[1]."/".$tDate[0]; // on remet dans le bon ordre
}

//fonction date US
// convertit JJ/MM/AAAA en YYYY-MM-DD
function date_us($date_fr)
{
  $tDate = explode("/", $date_fr);
  return $tDate[2]."-".$tDate[1]."-".$tDate[0];
}

// affichag d'un tableau HTML à partir d'un tableau PHP à Deux dimensions
function afficheTableau2D($tableau, $css = '')
{
	if($css<>'') $retour = '<table class="'.$css.'">'; //$css est optionnel
	else $retour = '<table>'; // initialisation de la variable de retour
	foreach($tableau as $cle=>$language) //boucle pour la dimension 1
	{
		if($cle==0) // sur le premier enregistrement
		{
			$retour .= '<tr>';
			foreach($language as $entete=>$rien) // on a besoin de l'entête uniquement
			{
				$retour .= "<th>".$entete.'</th>'; //affichage d'une entête du tableau
			}
			$retour .= '</tr>';
		}
		$retour .= "<tr>"; //ouverture d'une ligne du tableau
		foreach($language as $valeur) //boucle pour la dimension 2
		{
			$class = '';
			// si valeur numérique on ajoute la classe CSS nombre pour aligner à droite
			if(is_numeric($valeur)) $class='class="nombre"'; 
			$retour .= "<td ".$class.">".$valeur."</td>"; //affichage d'une colonne du tableau
		}
		$retour .= "</tr>"; //fermeture de ligne
	}
	$retour .= '</table>';
	return $retour;
}

//fonction pair
function pair($number)
{
	return !($number & 1);
}
//fonction impair
function impair($number)
{
	return ($number & 1);
}
//fonction inconnu
function inconnu($element)
{
	//renvoie 1 si Createur == 'inconnu'
	return $element['Createur']=='inconnu';
}
// fonction cube
function cube($nb)
{
	return ($nb * $nb * $nb);
}

//ajout d'une zone divers dans le tableau
function divers($tableau)
{
	$new = array(); // on crée un tableau temporaire
	$new['Language'] = $tableau['Language']; // ajout des zones existances
	$new['Age'] = $tableau['Age'];
	$new['Createur'] = $tableau['Createur'];
	$new['Divers'] = mt_rand(0,100); //ajout de la nouvelle zone
	return $new; //on renvoie le tableau
}
?>