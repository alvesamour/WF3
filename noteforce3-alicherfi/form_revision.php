<?php
/********************************
*								*
*	formulaire login/password	*
*								*
********************************/
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Formulaire</title>
	<meta charset="utf-8">
	<script type="text/javascript" src="js/verifFormLogin.js"></script>
	<link href="css/style.css" rel="stylesheet">
  </head>
  <body>
  <?php
  //affichage du message d'erreur renvoyé par PHP
    if(isset($_GET['msg'])) echo "<p class='message'>".$_GET['msg'].'</p>';
  ?>
  <form method="post" action="revision.php" onsubmit="return verif(this);">
    <p>
      <label><span>Login:</span>
      <input type="text" name="utilisateur"></label>
    </p>
    <p>
      <label><span>Mot de passe:</span>
      <input type="password" name="motDePasse"></label>
    </p>
    <p>
      <input type="submit" name="btnSub" value="Go!" id="btnSub">
    </p>    
  </form>
  </body>
</html>