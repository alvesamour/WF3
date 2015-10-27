
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<script type="text/javascript">
	function verif(form)
		{
			var message = '';
			if(form.utilisateur.value==='')message +=" - login vide \n";
			if(form.motDePasse.value==='')message +="mot de passe vide \n";
			if(message!='')
			{
				alert("Erreur : \n" + message);
				return false;
			}
			else return true;
		}

	</script>
	<title>formrevision</title>
</head>
<body>

<?php

if (isset($_GET['msg'])) echo "<p>".$_GET['msg'].'</p>';

?>

<form method="post" action="revisionformulaire.php" onsubmit="return verif(this);">
	<p>
		<label>Login : </label>
		<input type="text" name="utilisateur">
	</p>
	<p>	
		<label>Mot de Passe :</label>
		<input type="password" name="motDePasse">
	</p>
	<p>
		<input type="submit" name="btnSub" value="Go !">
	</p>
</form>














</body>
</html>
































