// vérification JS du formulaire
function verif(form)
{
  	// message vide
  	var message = '';
  	//si login vide on ajoute au message
  	if(form.utilisateur.value === '') message += "- Login vide\n";
  	//si mot de passe vide on ajoute au message
  	if(form.motDePasse.value === '') message += "-Mot de passe vide\n";
  	//si message non vide on affiche et on bloque le formulaire
  	if(message!='')
  	{
  		alert("Erreur:\n" + message);
	  	return false;
  	}	
  	//sinon soumission du form
  	else return true; 
 }