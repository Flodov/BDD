function requete($query) // renvoie le contenue de la requete dans un tableau
{
	include("ID.php");
    $link = mysqli_connect($SERVEUR,$USER,$PWD,$BDD);
    if($link==NULL)die("pb connexion");
        $reponse =  mysqli_query($link, $query);
        //echo $query."</br>";  
    while ( $line =  mysqli_fetch_row($reponse) ) 
    {  
        $data[]=$line;
    } 
    mysqli_free_result($reponse);
    if(isset($data))
            return $data;
            else 
                print("");
}

function liste_personne_accompagne($) 
{
    $requete = "select * FROM PERSONNE WHERE not;";
    $reponse = requete($requete);
    return $reponse; 
}
