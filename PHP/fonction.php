//fonction
<?php

function affichage_debut_page() {
  print("<!DOCTYPE html>
  <html lang="fr" >
  <head>
	<meta charset="utf-8" >
	<title>Projet BDD</title>
  </head>
  <body>");
}

function affichage_fin_page() {
  print("</body>
  </html>");
  }
// --------- FONCTION DE CONTROLE ----------

//Fonction PHP pour controler une adresse Mail
function validateMail($email)
{
	return filter_var($email, FILTER_VALIDATE_EMAIL);
}

//fonction pour vérifier la conformité d'un numéro de tel Français
function VerifTelFr($chaine)
{
       $regex = "#^0[1-68]([-. ]?[0-9]{2}){4}$#";
	  if (preg_match($regex,$chaine))
	     return true;
	  else
	     return false;
}

# Vérifie la validité d'une date
function is_valide_date($date, $sep='/')
{
	if(!list($day, $month, $year) = explode($sep, $date))
		return false;
	if($day > 31 OR $day < 1 OR $month > 12 OR $month < 1 OR $year > 32767 OR $year < 1)
		return false;
	return checkdate($month, $day, $year);
}
?>
