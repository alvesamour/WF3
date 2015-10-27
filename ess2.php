<?php
error_reporting(E_ALL);
$obligatoire=array('nom','prenom','pseudo','pass');
if(!empty($_POST))
{
$retour=1;
foreach($obligatoire as $val)
{
if(empty($_POST[$val])||trim($_POST[$val])=='')
{
$corrige[]=$val;
$retour=0;
}
}
if($retour==0)
{
echo 'Les champs ',implode(', ',$corrige),' sont obligatoires<br /><br />
<a href="javascript:history.go(-1);">Corriger ou complètez les champs erronés !</a>';
}
else
{
echo 'C\'est bon, on poursuit donc l\'exécution du script';
}
}
else
{
echo 'Idem formulaire exemple précédent';
}
?>