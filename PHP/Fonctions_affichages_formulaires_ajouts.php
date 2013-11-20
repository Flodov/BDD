<?php
$host = localhost;
$user = root;
$mdp = web;
$bdd = projet_bdd_iut;


function formulaire_ajout_Activite() {
 ?>
 <form method="get" action="page_ajout.php">
  <div id="activite_champ1">
  <label for="nom_acti">Nom de l'activité</label>
  <input type="text" id="nom_acti" name="nom_act">
  </div>
  <div id="activite_champ2">
		<label for="nom_lieu">Nom du lieu</label>
		<select id="nom_lieu" name="nom_lieu">");
		<?php
		$connexion = mysqli_connect($host,$user,$mdp,$bdd);
		$req = "SELECT * FROM Lieu";
		$res = $connexion -> query($req);
		while($ligne = $res -> Fetch_array()){
		  print("<option value=\"".$ligne[0]."\">".$ligne[1]."</option>");
		}
		?>
	</select></div><br/>
	</div>
	<input type="submit" value="valider">
	</form>
<?php
}


function formulaire_ajout_Lieu() {
?>
	<form method="get" action="page_ajout.php">
  	<div id="lieu_champ1">
  		<label for="nom_lieu">Nom du lieu</label>
  		<input type="text" id="nom_lieu" name="nom_lieu">
  	</div>
  	<input type="submit" value="valider">
	</form>
<?php
}

function formulaire_ajout_Tel() {
 ?>
 <form method="get" action="page_ajout.php">
  <div id="tel_champ1">
  <label for="num_tel">Numero de telephone</label>
  <input type="text" id="num_tel" name="num_tel">
  </div>
  <div id="tel_champ2">
		<label for="nom_personne">Nom du lieu</label>
		<select id="nom_personne" name="nom_personne">");
		<?php
		$connexion = mysqli_connect($host,$user,$mdp,$bdd);
		$req = "SELECT id_personne, nom_personne FROM Personne";
		$res = $connexion -> query($req);
		while($ligne = $res -> Fetch_array()){
		  print("<option value=\"".$ligne[0]."\">".$ligne[1]."</option>");
		}
		?>
	</select></div><br/>
	</div>
	<input type="submit" value="valider">
	</form>
<?php
}

function formulaire_ajout_Emplacement() {
 ?>
 <fieldset>
 <form method="get" action="page_ajout.php">
  <div id="emplacement_champ1">
  <label for="id_emp">Id de l'emplacement</label>
  <input type="text" id="id_emp" name="num_tel">
  </div>
  <div id="emplacement_champ2">
                <label for="prix_emp">Prix</label>
				<input type="text" name="prix_emp"><br/>
				</div>
				<div id="emplacement_champ3">
				<label for="type_emp">Type de l'emplacement</label>
                <select id="type_emp" name="type_emp">");
                <?php
                $connexion = mysqli_connect($host,$user,$mdp,$bdd);
                $req = "SELECT id_type_emplacement, libelle_type_emplacement FROM Type_emplacement";
                $res = $connexion -> query($req);
                while($ligne = $res -> Fetch_array()){
                  print("<option value=\"".$ligne[0]."\">".$ligne[1]."</option>");
                }
                ?>
        </select></div><br/>
        <input type="submit" value="valider">
        </form></fieldset>
<?php
}

function formulaire_ajout_Type_Emplacement() {
?>
	<form method="get" action="page_ajout.php">
  	<div id="type_emp_champ1">
  		<label for="libellete">Libelle du Type d'emplacement</label>
  		<input type="text" id="libellete" name="libte">
  	</div>
  	<input type="submit" value="valider">
	</form>
<?php
}

function formulaire_ajout_Mode_Paiement() {
?>
	<form method="get" action="page_ajout.php">
  	<div id="mode_paiement_champ1">
  		<label for="libellemp">Libelle du mode de paiement</label>
  		<input type="text" id="libellemp" name="libmp">
  	</div>
  	<input type="submit" value="valider">
	</form>
<?php
}

function formulaire_ajout_Personne() {
 ?>
 <fieldset>
 <form method="get" action="page_ajout.php">
  <div id="personne_champ1">
  <label for="nom_pers">Id de l'emplacement</label>
  <input type="text" id="nom_pers" name="nom_pers">
  </div>
  <div id="personne_champ2">
  	<label for="email">Adresse Email</label>
	<input type="text" id="email" name="email"><br/>
	</div>
	<div id="personne_champ3">
	<label for="prenom_pers">Prenom</label>
	<input type="text" id="prenom_pers" name="prenom_pers"><br/>
	<label for="accomp">Accompagnateur</label>
        <select id="accomp" name="accomp">");
        <?php
        $connexion = mysqli_connect($host,$user,$mdp,$bdd);
        $req = "SELECT id_personne, nom_personne FROM Personne";
        $res = $connexion -> query($req);
        while($ligne = $res -> Fetch_array()){
             print("<option value=\"".$ligne[0]."\">".$ligne[1]."</option>");
        }
        ?>
        </select></div><br/>
        <input type="submit" value="valider">
        </form></fieldset>
<?php
}

function formulaire_ajout_Reservation() {
 ?>
 <fieldset>
 <form method="get" action="page_ajout.php">
  <div id="reservation_champ1">
  <label for="nbjours">Nombre de jours</label>
  <input type="text" id="nbjours" name="nbjours">
  </div>
  <div id="reservation_champ2">
  	<label for="nom_personne">Nom de la personne</label>
        <select id="nom_personne" name="nom_personne">");
        <?php
        $connexion = mysqli_connect($host,$user,$mdp,$bdd);
        $req = "SELECT id_personne, nom_personne FROM Personne";
        $res = $connexion -> query($req);
        while($ligne = $res -> Fetch_array()){
             print("<option value=\"".$ligne[0]."\">".$ligne[1]."</option>");
        }
        ?>
        </select></div><br/>
         <div id="reservation_champ3">
    	<label for="date_deb">Date de début</label>
	<input type="date" id="date_deb" name="date_deb"><br/>
	</div>
	<div id="reservation_champ4">
	<label for="date_fin">Date de fin</label>
	<input type="date" id="date_fin" name="date_fin"><br/>
	<div id="reservation_champ5">
	<label for="id_emp">Id emplacement</label>
        <select id="id_emp" name="id_emp">");
        <?php
        $connexion = mysqli_connect($host,$user,$mdp,$bdd);
        $req = "SELECT id_emplacement FROM Emplacement";
        $res = $connexion -> query($req);
        while($ligne = $res -> Fetch_array()){
             print("<option value=\"".$ligne[0]."\">".$ligne[0]."</option>");
        }
        ?>
        </select></div><br/>
        <input type="submit" value="valider">
        </form></fieldset>
<?php
}

function formulaire_ajout_Facture() {
 ?>
 <fieldset>
 <form method="get" action="page_ajout.php">
  <div id="facture_champ1">
  <label for="desc_fact">Description de la facture</label>
  <input type="text" id="desc_fact" name="desc_fact">
  </div>
  <div id="facture_champ2">
  	<label for="montant_fact">Montant de la facture</label>
        <input type="text" id="montant_fact" name="montant_fact">");
  </div><br/>
  <div id="facture_champ3">
    	<label for="date_fact">Date de la facture</label>
	<input type="date" id="date_fact" name="date_fact"><br/>
	</div>
	<div id="facture_champ4">
	<label for="id_reserv"></label>
        <select id="id_reserv" name="id_reserv">");
        <?php
        $connexion = mysqli_connect($host,$user,$mdp,$bdd);
        $req = "SELECT id_reservation FROM Reservation";
        $res = $connexion -> query($req);
        while($ligne = $res -> Fetch_array()){
             print("<option value=\"".$ligne[0]."\">".$ligne[0]."</option>");
        }
        ?>
        </select></div><br/>
        <input type="submit" value="valider">
        </form></fieldset>
<?php
}

?>
