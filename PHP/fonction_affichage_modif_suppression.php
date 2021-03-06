<?php
require_once("connection.php")

function affichage_Activite() {
  $connexion = mysqli_connect($host,$user,$mdp,$bdd);
  if($connexion==NULL) {
    die("pb connexion");
    return;
  }
  $req = "SELECT a.id_activite, a.nom_activite, l.nom_lieu FROM ACTIVITE a, LIEU l WHERE a.id_lieu = l.id_lieu";
  $result = $connexion -> $req;
  print("<table>
         <tr><th colspan=\"3\">Activité</th></tr>
         <tr><th>Nom Activité</th><th>Lieu</th><th>Actions</th></tr>");
  while($ligne = $result -> Fetch_array()) {
    print("<tr><td style=\"display:none;\">".$ligne[0]."</td><td>".$ligne[1]."</td><td>".$ligne[2]."</td>
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
  $req = "SELECT * FROM LIEU";
  $result = $connexion -> $req;
  print("<table>
         <tr><th colspan=\"2\">Lieu</th></tr>
         <tr><th>Nom Lieu</th><th>Actions</th></tr>");
  while($ligne = $result -> Fetch_array()) {
    print("<tr><td style=\"display:none;\">".$ligne[0]."</td><td>".$ligne[1]."</td>
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
  $req = "SELECT t.numTelephone p.nom_personne FROM TEL t, PERSONNE p WHERE t.id_personne = p.id_personne";
  $result = $connexion -> $req;
  print("<table>
         <tr><th colspan=\"3\">Telephone</th></tr>
         <tr><th>Numero de telephone</th><th>Nom de la personne</th><th>Actions</th></tr>");
  while($ligne = $result -> Fetch_array()) {
    print("<tr><td>".$ligne[0]."</td><td>".$ligne[1]."</td>
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
  $req = "SELECT e.id_emplacement, e.prix_emplacement, te.libelle_type_emplacement FROM EMPLACEMENT e,
  TYPE_EMPLACEMENT te WHERE e.id_type_emplacement = te.id_type_emplacement";
  $result = $connexion -> $req;
  print("<table>
         <tr><th colspan=\"4\">Emplacement</th></tr>
         <tr><th>Id emplacement</th><th>Prix emplacement</th><th>Libelle type emplacement</th><th>Actions</th></tr>");
  while($ligne = $result -> Fetch_array()) {
    print("<tr><td>".$ligne[0]."</td><td>".$ligne[1]."</td><td>".$ligne[2]."</td>
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
  $req = "SELECT * FROM TYPE_EMPLACEMENT";
  $result = $connexion -> $req;
  print("<table>
         <tr><th colspan=\"2\">Type Emplacement</th></tr>
         <tr><th>Libelle type emplacement</th><th>Actions</th></tr>");
  while($ligne = $result -> Fetch_array()) {
    print("<tr><td style=\"display:none;\">".$ligne[0]."</td><td>".$ligne[1]."</td>
    <td style=\"text-align : center;\"><a href=\"affichage.php?modif=".$ligne[0]."\">
    <img src=\"modif.PNG\" alt=\"modifier\" style=\"width : 20px; height : 20px;\"/></a>
    <a href=\"affichage.php?suppr=".$ligne[0]."\"><img src=\"suppr.PNG\" alt=\"faux\" 
    style=\" width : 20px; height=20px;\"/></a></td></tr>"); 
  }
  print("</table>");
}

function affichage_Mode_Paiement() {
  $connexion = mysqli_connect($host,$user,$mdp,$bdd);
  if($connexion==NULL) {
    die("pb connexion");
    return;
  }
  $req = "SELECT * FROM MODE_PAIEMENT";
  $result = $connexion -> $req;
  print("<table>
         <tr><th colspan=\"2\">Mode Paiement</th></tr>
         <tr><th>Libelle Mode Paiement</th><th>Actions</th></tr>");
  while($ligne = $result -> Fetch_array()) {
    print("<tr><td style=\"display:none;\">".$ligne[0]."</td><td>".$ligne[1]."</td>
    <td style=\"text-align : center;\"><a href=\"affichage.php?modif=".$ligne[0]."\">
    <img src=\"modif.PNG\" alt=\"modifier\" style=\"width : 20px; height : 20px;\"/></a>
    <a href=\"affichage.php?suppr=".$ligne[0]."\"><img src=\"suppr.PNG\" alt=\"faux\" 
    style=\" width : 20px; height=20px;\"/></a></td></tr>"); 
  }
  print("</table>");
}


function affichage_Personne() {
  $connexion = mysqli_connect($host,$user,$mdp,$bdd);
  if($connexion==NULL) {
    die("pb connexion");
    return;
  }
  $req = "SELECT p.id_personne, p.nom_personne, p.adresseEmail, a.nom_personne FROM PERSONNE p,
  PERSONNE a, ACCOMPAGNE acc WHERE acc.id_pere = p.id_personne AND acc.id_fils = a.id_personne";
  $result = $connexion -> $req;
  print("<table>
         <tr><th colspan=\"4\">Personne</th></tr>
         <tr><th>Nom</th><th>Adresse Email</th><th>Nom accompagnateur</th><th>Actions</th></tr>");
  while($ligne = $result -> Fetch_array()) {
    print("<tr><td style=\"display:none;\">".$ligne[0]."</td><td>".$ligne[1]."</td><td>".$ligne[2]."</td>
    <td>".if($ligne[3]!= null ) { $ligne[3] }."</td>
    <td style=\"text-align : center;\"><a href=\"affichage.php?modif=".$ligne[0]."\">
    <img src=\"modif.PNG\" alt=\"modifier\" style=\"width : 20px; height : 20px;\"/></a>
    <a href=\"affichage.php?suppr=".$ligne[0]."\"><img src=\"suppr.PNG\" alt=\"faux\" 
    style=\" width : 20px; height=20px;\"/></a></td></tr>"); 
  }
  print("</table>");
}

function affichage_Reservation() {
  $connexion = mysqli_connect($host,$user,$mdp,$bdd);
  if($connexion==NULL) {
    die("pb connexion");
    return;
  }
  $req = "SELECT r.id_reservation, r.nombre_jour, r.date_debut, r.date_fin, p.nom_personne, e.id_emplacement 
  FROM RESERVATION r, PERSONNE p, EMPLACEMENT e
  WHERE r.id_personne = p.id_personne AND r.id_emplacement = e.id_emplacement";
  $result = $connexion -> $req;
  print("<table>
         <tr><th colspan=\"6\">Reservation</th></tr>
         <tr><th>Nombre jours</th><th>Nom de la personne</th><th>Date début</th><th>Date fin</th>
         <th>Id emplacement</th><th>Actions</th></tr>");
  while($ligne = $result -> Fetch_array()) {
    print("<tr><td style=\"display:none;\">".$ligne[0]."</td><td>".$ligne[1]."</td><td>".$ligne[2]."</td>
    <td>".$ligne[3]."</td><td>".$ligne[4]."</td><td>".$ligne[5]."</td>
    <td style=\"text-align : center;\"><a href=\"affichage.php?modif=".$ligne[0]."\">
    <img src=\"modif.PNG\" alt=\"modifier\" style=\"width : 20px; height : 20px;\"/></a>
    <a href=\"affichage.php?suppr=".$ligne[0]."\"><img src=\"suppr.PNG\" alt=\"faux\" 
    style=\" width : 20px; height=20px;\"/></a></td></tr>"); 
  }
  print("</table>");
}

function affichage_Facture() {
  $connexion = mysqli_connect($host,$user,$mdp,$bdd);
  if($connexion==NULL) {
    die("pb connexion");
    return;
  }
  $req = "SELECT * FROM FACTURE";
  $result = $connexion -> $req;
  print("<table>
         <tr><th colspan=\"5\">Facture</th></tr>
         <tr><th>Description facture</th><th>Montant</th><th>Date facture</th><th>Id facture</th>
         <th>Actions</th></tr>");
  while($ligne = $result -> Fetch_array()) {
    print("<tr><td style=\"display:none;\">".$ligne[0]."</td><td>".$ligne[1]."</td><td>".$ligne[2]."</td>
    <td>".$ligne[3]."</td><td>".$ligne[4]."</td>
    <td style=\"text-align : center;\"><a href=\"affichage.php?modif=".$ligne[0]."\">
    <img src=\"modif.PNG\" alt=\"modifier\" style=\"width : 20px; height : 20px;\"/></a>
    <a href=\"affichage.php?suppr=".$ligne[0]."\"><img src=\"suppr.PNG\" alt=\"faux\" 
    style=\" width : 20px; height=20px;\"/></a></td></tr>"); 
  }
  print("</table>");
}


function affichage_Anime() {
  $connexion = mysqli_connect($host,$user,$mdp,$bdd);
  if($connexion==NULL) {
    die("pb connexion");
    return;
  }
  $req = "SELECT p.nom_personne, ac.nom_activite, a.id_date
  FROM ANIME a, ACTIVITE ac, PERSONNE p
  WHERE a.id_personne = p.id_personne AND a.id_activite = ac.id_activite";
  $result = $connexion -> $req;
  print("<table>
         <tr><th colspan=\"3\">Anime</th></tr>
         <tr><th>Nom personne</th><th>Nom activite</th><th>Date</th><th>Actions</th></tr>");
  while($ligne = $result -> Fetch_array()) {
    print("<tr><td>".$ligne[0]."</td><td>".$ligne[1]."</td><td>".$ligne[2]."</td>
    <td style=\"text-align : center;\"><a href=\"affichage.php?modif1=".$ligne[0]."&modif2=".$ligne[1]."
    &modif3=".$ligne[2]"\">
    <img src=\"modif.PNG\" alt=\"modifier\" style=\"width : 20px; height : 20px;\"/></a>
    <a href=\"affichage.php?suppr1=".$ligne[0]."&suppr2=".$ligne[1]."&suppr3=".$ligne[2]."\">
    <img src=\"suppr.PNG\" alt=\"faux\" 
    style=\" width : 20px; height=20px;\"/></a></td></tr>");
  }
  print("</table>");
}

function affichage_Participe() {
  $connexion = mysqli_connect($host,$user,$mdp,$bdd);
  if($connexion==NULL) {
    die("pb connexion");
    return;
  }
  $req = "SELECT p.nom_personne, ac.nom_activite, pa.id_date
  FROM PARTICIPE pa, ACTIVITE ac, PERSONNE p
  WHERE pa.id_personne = p.id_personne AND pa.id_activite = ac.id_activite";
  $result = $connexion -> $req;
  print("<table>
         <tr><th colspan=\"3\">Participe</th></tr>
         <tr><th>Nom personne</th><th>Nom activite</th><th>Date</th><th>Actions</th></tr>");
  while($ligne = $result -> Fetch_array()) {
    print("<tr><td>".$ligne[0]."</td><td>".$ligne[1]."</td><td>".$ligne[2]."</td>
    <td style=\"text-align : center;\"><a href=\"affichage.php?modif1=".$ligne[0]."&modif2=".$ligne[1]."
    &modif3=".$ligne[2]"\">
    <img src=\"modif.PNG\" alt=\"modifier\" style=\"width : 20px; height : 20px;\"/></a>
    <a href=\"affichage.php?suppr1=".$ligne[0]."&suppr2=".$ligne[1]."&suppr3=".$ligne[2]."\">
    <img src=\"suppr.PNG\" alt=\"faux\" 
    style=\" width : 20px; height=20px;\"/></a></td></tr>");
  }
  print("</table>");
}

function affichage_Payee() {
  $connexion = mysqli_connect($host,$user,$mdp,$bdd);
  if($connexion==NULL) {
    die("pb connexion");
    return;
  }
  $req = "SELECT p.id_facture, m.libelle_mode_paiement, p.montant
  FROM MODE_PAIEMENT m, PAYEE p
  WHERE p.id_mode_paiement = m.id_mode_paiement";
  $result = $connexion -> $req;
  print("<table>
         <tr><th colspan=\"4\">Payée</th></tr>
         <tr><th>id facture</th><th>Libelle mode paiement</th><th>Montant</th><th>Actions</th></tr>");
  while($ligne = $result -> Fetch_array()) {
    print("<tr><td>".$ligne[0]."</td><td>".$ligne[1]."</td><td>".$ligne[2]."</td>
    <td style=\"text-align : center;\"><a href=\"affichage.php?modif1=".$ligne[0]."&modif2=".$ligne[1]."\">
    <img src=\"modif.PNG\" alt=\"modifier\" style=\"width : 20px; height : 20px;\"/></a>
    <a href=\"affichage.php?suppr1=".$ligne[0]."&suppr2=".$ligne[1]."\">
    <img src=\"suppr.PNG\" alt=\"faux\" 
    style=\" width : 20px; height=20px;\"/></a></td></tr>");
  }
  print("</table>");
}

function affichage_Accompagne() {
 $connexion = mysqli_connect($host,$user,$mdp,$bdd);
  if($connexion==NULL) {
    die("pb connexion");
    return;
  }
  $req = "SELECT p.nom_personne, pers.nom_personne, a.id_reservation FROM PERSONNE p, PERSONNE pers, ACCOMPAGNE a
  WHERE a.id_pere = p.id_personne AND a.id_fils = pers.id_personne";
  $result = $connexion -> $req;
    print("<table>
         <tr><th colspan=\"4\">Accompagne</th></tr>
         <tr><th>nom pere</th><th>nom fils</th><th>id_reservation</th><th>Actions</th></tr>");
 while($ligne = $result -> Fetch_array()) {
    print("<tr><td>".$ligne[0]."</td><td>".$ligne[1]."</td><td>".$ligne[2]."</td>
    <td style=\"text-align : center;\"><a href=\"affichage.php?modif1=".$ligne[0]."&modif2=".$ligne[1]."\">
    <img src=\"modif.PNG\" alt=\"modifier\" style=\"width : 20px; height : 20px;\"/></a>
    <a href=\"affichage.php?suppr1=".$ligne[0]."&suppr2=".$ligne[1]."\">
    <img src=\"suppr.PNG\" alt=\"faux\" 
    style=\" width : 20px; height=20px;\"/></a></td></tr>");
  }
  print("</table>");
}
  

?>
