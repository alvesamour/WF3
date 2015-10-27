<?php
include "includes/header.php";
include "includes/connexion.php";



$dbh = new PDO('mysql:host=localhost;dbname=noteforce3;charset=UTF8', 
			   'root', 
			   '');

echo "<pre>";
print_r($_GET); //affichage des éléments utilisant la méthode GET
print_r($_POST); // affichage des éléments utilisant la méthode POST
echo "</pre>";

// affichage de la zone Login du formulaire
echo "login: ".$_POST['login']."<br/>";

// si le login est trop court (<8 caractères)
if(strlen($_POST['login'])<8) echo "login trop court<br/>";




// boucle de traitement
foreach($_POST)
{
	// message à afficher
	$message = '';
	
	if(is_array($_Post)) // si la valeur est un tableau
	{
		echo "<ul>"; // on crée une liste HTML
		foreach($_Post) //on parcours le tableau
		{
			//on affiche la valeur du sous tableau avec la clé du tableau POST
			echo "<li>"$_Post"</li>";
		}
		 echo "</ul>";
	}
	


?>