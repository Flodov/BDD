// Fonction pour ajouter

function ajouter_personne($nom, $prenom, $email, $accompagnateur )
{
	$link = mysqli_connect("localhost",'root','web', "projet_bdd_iut");
  if($link==NULL)die("pb connexion");
  $query = "INSERT INTO PERSONNE (nom_personne, prenom, adresse_email, accompagnateur) VALUES ('$nom',$prenom,'$email',$accompagnateur);";
  if (!mysqli_query($link, $query)) 
      print("Message d'erreur :".mysqli_error($link)); 
  mysqli_close($link);
}
