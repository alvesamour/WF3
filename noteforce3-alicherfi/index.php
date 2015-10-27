<!DOCTYPE html>
<html>
<head>
	<title>noteforce3</title>
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
</head>
<body>

<?php
include "includes/header.php";
include "includes/fonctions.php";
include "includes/connexion.php";








"<br/>";
mysql_connect("localhost","root","") or die(mysql_error());
echo "connecter au serveur <br/>";mysql_select_db("noteforce3") or die(mysql_error());
echo "connecter aux BASES de donnees<br/>";


$result = mysql_query("SELECT * FROM noteforce3.personnes WHERE 10") or die(mysql_error());

$row = mysql_fetch_array($result);

echo "Nom: ".$row['nomPersonne']."<br/>";
echo "Prénom: ".$row['prenomPersonne']."<br/>";
echo "Statut: ".$row['typePersonne']."<br/>";

$query = "SELECT * FROM noteforce3.personnes";
$result = mysql_query($query)or die(mysql_error());
/*

SELECT * FROM `notes` WHERE 1

*/
while ($row = mysql_fetch_array($result)){
	echo $row['nomPersonne']."-".
	$row['prenomPersonne'];
	echo "<br/>";
}



mysql_free_result($result);




/*
<?php
if($_POST["login"]) || $_POST["pass"]){
	echo "Votre login est".$_POST[]
}*/






























include "includes/footer.php";
?>