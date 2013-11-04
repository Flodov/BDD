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
?>
