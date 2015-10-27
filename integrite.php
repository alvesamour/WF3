<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
include "header.php";
$sbr ="<br/>"."<hr>";
echo $sbr;
$chaine = "<strong>l'avion</strong> est prêt à decoller.";
//antislashes dans la chaines
echo addslashes($chaine);

echo $sbr;
$chaine2 = "<script type='text/javascript'>alert('ok');</script>";
echo $chaine2;

echo $sbr;

//htmlentities modifie les entité (<>éà..)
echo htmlentities($chaine)."<br/>";
echo htmlentities($chaine2)."<br/>";

echo $sbr;

//htmlspecialchars modifie les caractere speciaux (<>....)
echo htmlspecialchars($chaine)."<br/>";
echo htmlspecialchars($chaine2)."<br/>";
echo $sbr;


//strip_tags supprime balise html php js
echo strip_tags($chaine)."<br/>";
echo strip_tags($chaine2)."<br/>";
echo $sbr;

//validation de données
$email ="tarace@boumba.fr";

echo filter_var($email, FILTER_VALIDATE_EMAIL);
echo $sbr;


$url = "http://laposte.net";
echo filter_var($url, FILTER_VALIDATE_URL);
echo $sbr;

var_dump(filter_var($url, FILTER_VALIDATE_URL, FILTER_FLAG_PATH_REQUIRED))."<br/>";// ,FILTER_FLAG_PATH_REQUIRED



echo $sbr;





include "footer.php";
?>
</body>
</html>