<html>
<head>
<meta charset="utf-8" />
<title>Codes d'accès au serveur central de la NASA</title>
</head>
<body>
<html>
<head>
<meta charset="utf-8" />
<title>Page protégée par mot de passe</title>
</head>
<form action="secret.php" method="post">
<p>
<input type="password" name="mot_de_passe" />
<input type="submit" value="Valider" />
</p>
</form>
<p>Cette page est réservée au personnel de la NASA. Si vous
ne travaillez pas à la NASA, inutile d'insister vous ne trouverez
jamais le mot de passe ! ;-)</p>
</body>
</html>
Si vous avez bien suivi le chapitre sur les formulaires, vous ne devriez avoir eu aucun mal
<body>
<p>Veuillez entrer le mot de passe pour obtenir les codes
d'accès au serveur central de la NASA :</p>


<?php
if (isset($_POST['mot_de_passe']) AND $_POST['mot_de_passe'] ==
"kangourou") // Si le mot de passe est bon
{
// On affiche les codes
?>
<h1>Voici les codes d'accès :</h1>
<p><strong>CRD5-GTFT-CK65-JOPM-V29N-24G1-HH28-
LLFV</strong></p>
<p>
Cette page est réservée au personnel de la NASA. N'oubliez
pas de la visiter régulièrement car les codes d'accès sont changés
toutes les semaines.<br />
La NASA vous remercie de votre visite.
</p>
<?php
}
else // Sinon, on affiche un message d'erreur
{
echo '<p>Mot de passe incorrect</p>';
}
?>
</body>
</html>
