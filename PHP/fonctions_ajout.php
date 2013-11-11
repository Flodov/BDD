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
	$requete="INSERT INTO TYPE_EMPLACEMENT (libelle_type_emplacement) values ('$libelle');";
  	if (!mysqli_query($link, $requete)) 
    	print("Message d'erreur :".mysqli_error($link)); 
  	mysqli_close($link);
}

function ajouter_tel($tel, $num_personne)
{
	$link = mysqli_connect("localhost",'$user','$web', "$bdd";
	if($link==NULL)die("pb connexion");
	$requete="INSERT INTO TEL (numTelephone, id_personne) values ($tel, $num_personne);";
  	if (!mysqli_query($link, $requete)) 
    	print("Message d'erreur :".mysqli_error($link)); 
  	mysqli_close($link);
}

function ajouter_lieu($libelle)
{
	$link = mysqli_connect("localhost",'$user','$web', "$bdd";
	if($link==NULL)die("pb connexion");
	$requete="INSERT INTO LIEU (nom_lieu) values ('$libelle');";
  	if (!mysqli_query($link, $requete)) 
    	print("Message d'erreur :".mysqli_error($link)); 
  	mysqli_close($link);
}

function ajouter_participe($id_personne, $id_activite, $date_participe)
{
	$link = mysqli_connect("localhost",'$user','$web', "$bdd";
	if($link==NULL)die("pb connexion");
	$requete="INSERT INTO PARTICIPE (id_personne, id_activite, date_participe) values ($id_personne, $id_activite, '$date_participe' );";
  	if (!mysqli_query($link, $requete)) 
    	print("Message d'erreur :".mysqli_error($link)); 
  	mysqli_close($link);
}

function ajouter_anime($id_personne, $id_activite, $date_anime)
{
	$link = mysqli_connect("localhost",'$user','$web', "$bdd";
	if($link==NULL)die("pb connexion");
	$requete="INSERT INTO ANIME (id_personne, id_activite, date_anime) values ($id_personne, $id_activite, '$date_anime' );";
  	if (!mysqli_query($link, $requete)) 
    	print("Message d'erreur :".mysqli_error($link)); 
  	mysqli_close($link);
}

function ajouter_RESERVATION($montant_total, $date_debut, $date_fin, $id_personne, $id_emplacement)
{
	$link = mysqli_connect("localhost",'$user','$web', "$bdd";
	if($link==NULL)die("pb connexion");
	$requete="INSERT INTO RESERVATION (montant_total, date_debut, date_fin, id_personne, id_emplacement) values ($montant_total, '$date_debut', '$date_fin', $id_personne, id_emplacement );";
  	if (!mysqli_query($link, $requete)) 
    	print("Message d'erreur :".mysqli_error($link)); 
  	mysqli_close($link);
}
