


<?php
include "header.php";
$sbr ="<br/>"."<hr>";

echo "<pre>";
print_r($_GET);
print_r($_POST);
echo "</pre>";
echo $sbr;

echo "Login: ".$_POST['login']."<br/>";

if (strlen($_POST['login'])<8)
	echo "login trop court<br/>";

foreach ($_POST as $key => $value) {

if (is_array($value)) 
{
	echo "<ul>";
	foreach ($value as $sousvalue)
	{
		echo "<li>".$key." ".$sousvalue."</li>";
	}

	echo "</ul>";
	echo $sbr;
	
}

else echo "<strong>".$key."<strong>: ".$value."<br/>";

}
echo $sbr;

if(strpos($_POST['txtarea'], '@')!== false) echo "caractere @ interdit";
echo $sbr;

if(strpos($_POST['content'], '@')!== false) echo "caractere @ interdit";
echo $sbr;







include "footer.php";
?>

