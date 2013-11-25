<?php
require_once("connection.php")

function suppr_reservation($id_reservation)
    $link = mysqli_connect("localhost",'$user','$web', "$bdd");
    if($link==NULL)die("pb connexion");
    $requete="DELETE FROM RESERVATION WHERE id_reservation=$id_reservation ;";
    //echo $requete;
    if (!mysqli_query($link, $requete))
    {
        print("Message d'erreur :".mysqli_error($link));
    }
    mysqli_close($link);
}
?>
