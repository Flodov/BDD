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

function verif_alpha($str) // On vériefie si une chaine ne contient que des caracteres de l'alphabet
{
    preg_match("/([^A-Za-z])/",$str,$result);
//On cherche tt les caractères autre que [A-z] 
    if(!empty($result)){//si on trouve des caractère autre que A-z
        return false;
    }
    return true;
}

function verif_alphaNum($str) // On vérifie si une chaine contient uniquement les lettres de l'alphabet et des nombres
{
    preg_match("/([^A-Za-z0-9])/",$str,$result);
//On cherche tt les caractères autre que [A-Za-z] ou [0-9]
    if(!empty($result)){//si on trouve des caractère autre que A-Za-z ou 0-9
        return false;
    }
    return true;
}


