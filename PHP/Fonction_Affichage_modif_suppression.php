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
         <tr><th rowspan=\"3\">Activité</th><th>Actions</th></tr>
         <tr><th>Nom Activité</th><th>Lieu</th></tr>");
  while($ligne = $result -> Fetch_array()) {
    print("<tr><td style=\"display:none;\">".$ligne[0]."</td><td>".$ligne[1]."/<td><td>".$ligne[2]."</td></tr>
    <td style=\"text-align : center;\"><a href=\"modif.php?modif=".$ligne[0]."\">
    <img src=\"modif.PNG\" alt=\"modifier\" style=\"width : 20px; height : 20px;\"/></a>
    <a href=\"ajout.php?suppr=".$ligne[0]."\"><img src=\"suppr.PNG\" alt=\"faux\" 
    style=\" width : 20px; height=20px;\"/></a></td></tr>"); 
  }
  print("</table>");
}





?>
