// Fonction pour ajouter

$user="root";
$mpd="web";
$bdd="projet_bdd_iut";

function ajouter_personne($nom, $prenom, $email, $accompagnateur )
{
  $link = mysqli_connect("localhost",'$user','$web', "$bdd");
  if($link==NULL)die("pb connexion");
  $query = "INSERT INTO PERSONNE (nom_personne, prenom, adresse_email, accompagnateur) VALUES ('$nom',$prenom,'$email',$accompagnateur);";
  if (!mysqli_query($link, $query)) 
    print("Message d'erreur :".mysqli_error($link)); 
  mysqli_close($link);
}

function ajouter_type_manifestation($libelle)
{
	$link = mysqli_connect("localhost",'$user','$web', "$bdd";
  if($link==NULL)die("pb connexion");
  $requete="INSERT INTO TYPE_EMPLACEMENT values ('$libelle');";
  if (!mysqli_query($link, $requete)) 
    print("Message d'erreur :".mysqli_error($link)); 
  mysqli_close($link);
}
