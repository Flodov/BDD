<?php

$host = localhost;
$user = root;
$mdp = web;
$bdd = projet_bdd_iut;


function affichage_Activite() {
  $connexion = mysqli_connect($host,$user,$mdp,$bdd);
  if($connexion==NULL) {
    die("pb connexion");
    return;
  }
  $req = "SELECT a.id_activite, a.nom_activite, l.nom_lieu FROM Activite a, Lieu l WHERE a.id_lieu = l.id_lieu";
  $result = $connexion -> $req;
  print("<table>
         <tr><th colspan=\"3\">Activité</th><th>Actions</th></tr>
         <tr><th>Nom Activité</th><th>Lieu</th></tr>");
  while($ligne = $result -> Fetch_array()) {
    print("<tr><td style=\"display:none;\">".$ligne[0]."</td><td>".$ligne[1]."/<td><td>".$ligne[2]."</td></tr>
    <td style=\"text-align : center;\"><a href=\"affichage.php?modif=".$ligne[0]."\">
    <img src=\"modif.PNG\" alt=\"modifier\" style=\"width : 20px; height : 20px;\"/></a>
    <a href=\"affichage.php?suppr=".$ligne[0]."\"><img src=\"suppr.PNG\" alt=\"faux\" 
    style=\" width : 20px; height=20px;\"/></a></td></tr>"); 
  }
  print("</table>");
}

function affichage_Lieu() {
  $connexion = mysqli_connect($host,$user,$mdp,$bdd);
  if($connexion==NULL) {
    die("pb connexion");
    return;
  }
  $req = "SELECT * FROM Lieu";
  $result = $connexion -> $req;
  print("<table>
         <tr><th colspan=\"2\">Lieu</th></tr>
         <tr><th>Nom Lieu</th><th>Lieu</th><th>Actions</th></tr>");
  while($ligne = $result -> Fetch_array()) {
    print("<tr><td style=\"display:none;\">".$ligne[0]."</td><td>".$ligne[1]."/<td></tr>
    <td style=\"text-align : center;\"><a href=\"affichage.php?modif=".$ligne[0]."\">
    <img src=\"modif.PNG\" alt=\"modifier\" style=\"width : 20px; height : 20px;\"/></a>
    <a href=\"affichage.php?suppr=".$ligne[0]."\"><img src=\"suppr.PNG\" alt=\"faux\" 
    style=\" width : 20px; height=20px;\"/></a></td></tr>"); 
  }
  print("</table>");
}

function affichage_Tel() {
  $connexion = mysqli_connect($host,$user,$mdp,$bdd);
  if($connexion==NULL) {
    die("pb connexion");
    return;
  }
  $req = "SELECT t.numTelephone p.nom_personne FROM Tel t, Personne p WHERE t.id_personne = p.id_personne";
  $result = $connexion -> $req;
  print("<table>
         <tr><th colspan=\"2\">Telephone</th></tr>
         <tr><th>Numero de telephone</th><th>Nom de la personne</th><th>Actions</th></tr>");
  while($ligne = $result -> Fetch_array()) {
    print("<tr><td>".$ligne[0]."/<td><td>".$ligne[1]."/<td></tr>
    <td style=\"text-align : center;\"><a href=\"affichage.php?modif=".$ligne[0]."\">
    <img src=\"modif.PNG\" alt=\"modifier\" style=\"width : 20px; height : 20px;\"/></a>
    <a href=\"affichage.php?suppr=".$ligne[0]."\"><img src=\"suppr.PNG\" alt=\"faux\" 
    style=\" width : 20px; height=20px;\"/></a></td></tr>"); 
  }
  print("</table>");
}

function affichage_Emplacement() {
  $connexion = mysqli_connect($host,$user,$mdp,$bdd);
  if($connexion==NULL) {
    die("pb connexion");
    return;
  }
  $req = "SELECT e.id_emplacement, e.prix_emplacement, te.libelle_type_emplacement FROM Emplacement e,
  Type_Emplacement te WHERE e.id_type_emplacement = te.id_type_emplacement";
  $result = $connexion -> $req;
  print("<table>
         <tr><th colspan=\"3\">Emplacement</th></tr>
         <tr><th>Prix emplacement</th><th>Libelle type emplacement</th><th>Actions</th></tr>");
  while($ligne = $result -> Fetch_array()) {
    print("<tr><td style=\"display:none;\">".$ligne[0]."</td><td>".$ligne[1]."/<td><td>".$ligne[2]."/<td></tr>
    <td style=\"text-align : center;\"><a href=\"affichage.php?modif=".$ligne[0]."\">
    <img src=\"modif.PNG\" alt=\"modifier\" style=\"width : 20px; height : 20px;\"/></a>
    <a href=\"affichage.php?suppr=".$ligne[0]."\"><img src=\"suppr.PNG\" alt=\"faux\" 
    style=\" width : 20px; height=20px;\"/></a></td></tr>"); 
  }
  print("</table>");
}

function affichage_Type_Emplacement() {
  $connexion = mysqli_connect($host,$user,$mdp,$bdd);
  if($connexion==NULL) {
    die("pb connexion");
    return;
  }
  $req = "SELECT * FROM Type_Emplacement";
  $result = $connexion -> $req;
  print("<table>
         <tr><th colspan=\"1\">Type Emplacement</th></tr>
         <tr><th>Libelle type emplacement</th><th>Actions</th></tr>");
  while($ligne = $result -> Fetch_array()) {
    print("<tr><td style=\"display:none;\">".$ligne[0]."</td><td>".$ligne[1]."/<td></tr>
    <td style=\"text-align : center;\"><a href=\"affichage.php?modif=".$ligne[0]."\">
    <img src=\"modif.PNG\" alt=\"modifier\" style=\"width : 20px; height : 20px;\"/></a>
    <a href=\"affichage.php?suppr=".$ligne[0]."\"><img src=\"suppr.PNG\" alt=\"faux\" 
    style=\" width : 20px; height=20px;\"/></a></td></tr>"); 
  }
  print("</table>");
}


?>
