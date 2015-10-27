<?php
// vérification si bouton cliqué
if(isset($_POST['btnSub']))
{
  // récupération du login et du mot de passe saisi
  // !!! Ne jamais faire confiance à l'utilisateur !!!	
  $login = htmlentities(strip_tags($_POST['utilisateur']));
  $pwd = htmlentities(strip_tags($_POST['motDePasse']));

  // connexion PDO
  // on pourrait mettre les infos de connexion dans un fichier
  // et faire un include pour gagner du temps et faciliter la maintenance
  $dsn = "mysql:host=localhost;dbname=noteforce3;charset=utf8";
  $bddUser = "root";
  $bddPass = "";
  $dbh = new PDO($dsn, $bddUser, $bddPass);

  // vérification du login
  $reqLogin = "SELECT idPersonne FROM securite 
  			   WHERE loginPersonne = ?";
  $curseurLogin = $dbh->prepare($reqLogin);
  $curseurLogin->execute(array($login));
  $resultatLogin = $curseurLogin->fetchColumn();
  // si pas de résultat...
  var_dump($resultatLogin);
  if($resultatLogin===false)
  {
  	header('location: form_revision.php?msg=login incorrect');
  }
  // sinon login connu
  else
  {
  	$reqPass = "SELECT idPersonne FROM securite 
  			   WHERE loginPersonne = ? AND passPersonne = PASSWORD(?)";
    $curseurPass = $dbh->prepare($reqPass);
    $curseurPass->execute(array($login, $pwd));
    $resultatPass = $curseurPass->fetchColumn();
    if($resultatPass===false)
    {
    	header('location: form_revision.php?msg=mot de passe incorrect');
    }
    else
    {
    	echo "It Works!<br/>The END!";
    }

    // déconnexion
    unset($dbh);

  }

}

?>