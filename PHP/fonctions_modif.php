// Fonction pour modifier

define('user','root' );
define('web', 'web' );
define('bdd','projet_bdd_iut' );

function update_TEL($numTelephone, $new_numTelephone)
    $link = mysqli_connect("localhost",'$user','$web', "$bdd");
    if($link==NULL)die("pb connexion");
    $requete="update TEL SET $numTelephone=$new_numTelephone where numTelephone=$numTelephone;";
    echo $requete; 
    if (!mysqli_query($link, $requete)) 
    { 
        print("Message d'erreur :".mysqli_error($link)); 
    } 
    mysqli_close($link);
}

function update_personne(id_personne, $new_nom_personne, $new_prenom, $new_adresse_email, $accompagnateur) // Modifier un accompagnateur
    $link = mysqli_connect("localhost",'$user','$web', "$bdd");
    if($link==NULL)die("pb connexion");
    $requete="update PERSONNE SET nom_personne=$new_nom_personne, prenom=$new_prenom, adresse_email=$new_adresse_email where id_personne=$id_personne;";
    echo $requete; 
    if (!mysqli_query($link, $requete)) 
    { 
        print("Message d'erreur :".mysqli_error($link)); 
    } 
    mysqli_close($link);
}

function update_EMPLACEMENT($id_emplacement, $new_prix_emplacement, $newid_type_emplacement)
    $link = mysqli_connect("localhost",'$user','$web', "$bdd");
    if($link==NULL)die("pb connexion");
    $requete="update TEL SET prix_emplacement=$new_prix_emplacement, id_type_emplacement=$new_id_type_emplacement where id_emplacement=$id_emplacement;";
    echo $requete; 
    if (!mysqli_query($link, $requete)) 
    { 
        print("Message d'erreur :".mysqli_error($link)); 
    } 
    mysqli_close($link);
}

function update_ANIME($id_personne, $id_activite, $new_id_activite, $new_date_anime)
    $link = mysqli_connect("localhost",'$user','$web', "$bdd");
    if($link==NULL)die("pb connexion");
    $requete="update ANIME SET id_activite=$new_id_activite, date_anime=$new_date_anime where id_personne=$id_personne and id_activite=$id_activite ;";
    echo $requete; 
    if (!mysqli_query($link, $requete)) 
    { 
        print("Message d'erreur :".mysqli_error($link)); 
    } 
    mysqli_close($link);
}

function update_PARTICIPE($id_personne, $id_activite, $new_id_activite, $new_date_participe)
    $link = mysqli_connect("localhost",'$user','$web', "$bdd");
    if($link==NULL)die("pb connexion");
    $requete="update PARTCIPE SET id_activite=$new_id_activite, date_participe=$new_date_participe where id_personne=$id_personne and id_activite=$id_activite ;";
    echo $requete; 
    if (!mysqli_query($link, $requete)) 
    { 
        print("Message d'erreur :".mysqli_error($link)); 
    } 
    mysqli_close($link);
}
