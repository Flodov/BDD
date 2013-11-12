<?php

$host = localhost;
$user = root;
$mdp = web;
$bdd = projet_bdd_iut;

function affichage_activite() {
  $connexion = mysqli_connect($host,$user,$mdp,$bdd);
  if($link==NULL) {
    die("pb connexion");
    return;
  }
  $req = "SELECT a.id_activite, a.nom_activite, l.nom_lieu FROM Activite a, Lieu l WHERE a.id_lieu = l.id_lieu";
  $result = $connexion -> $req;
  print("<table>
         <tr><th rowspan=\"2\">Activité</th></tr>
         <tr><th>Nom Activité</th><th>Lieu</th></tr>");
  while($ligne = $result -> Fetch_array()) {
    print("<tr><td>".$ligne[1]."/<td><td>".$ligne[2]."</td></tr>"); 
  }
  print("</table>");
}





?>
