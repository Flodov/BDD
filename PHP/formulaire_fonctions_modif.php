<?php

function affichage_modif_personne($id_personne, $new_nom_personne, $new_prenom, $new_adresse_email, $accompagnateur) // Affiche
{
    ?>
<form method='get' action='menu.php'>
<label> nom </label> <input type='text' name='nom' value= <?php $new_nom_personne ?> >
<label> prenom </label><input type='text' name='prenom' value= <?php $new_prenom ?> >
<label> email </label><input type='text' name='email' value= <?php $new_adresse_email ?> >
<label> accompagnateur </label>
<select name='accompagnateur'>
<?php
    $liste = liste_iut();
    
    foreach($liste as $key => $row)
    {
            echo("<option value='".$row[0]."'>".$row[1]."</option>");
    }
    
    </select>
    <input type='submit' name='new_adresse_email' value='next'></form>
}

?>
