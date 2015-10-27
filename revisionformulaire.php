<?php
	//verif bouton cliqué
	if(isset($_POST['btnSub']))
	{
		//recup motdepasse login saisi
		$login = $_POST['utilisateur'];
		$pwd = $_POST['motDePasse'];

		//connexion pdo

		//$dbh = new PDO('mysql:host=localhost;dbname=webforce3;charset=utf8','root', '');
		//print_r($dbh);

		$dsn = "mysql:host=localhost;dbname=webforce3;charset=utf8";
		$bddUser = "wf3";
		$bddPass = "webforce3";
		$dbh = new PDO($dsn, $bddUser, $bddPass);

		//verif login
		$reqLogin = "SELECT id FROM webforce3.securite
					WHERE login = ?";

		$curseurLogin = $dbh->prepare($reqLogin);
		$curseurLogin->execute(array($login));
		$resultatLogin = $curseurLogin->fetchColumn();

		//si pas de resultat...

		if($resultatLogin===false)
		{ 
			header('location: formrevision.php?msg=login incorrect');
		}
		else
		{
			//sinon login connu

			$reqPass = "SELECT id FROM webforce3.securite
						WHERE login = ? and password = PASSWORD(?)";
			$curseurPass = $dbh->prepare($reqPass);
			$curseurPass->execute(array($login, $pwd));
			$resultatPass = $curseurPass->fetchColumn();
			if($resultatPass===false)
			{
				header('location: formrevision.php?msg=mot de passe incorrect');
			}
			else
			{
			echo "ok";
			}
		}
		unset($dbh);
	}
?>