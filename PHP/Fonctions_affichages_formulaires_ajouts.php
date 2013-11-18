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
	</select></div><br/>
	</div>
	<input type=\"hidden\" name=\"ajout\" value=\"".$_GET['nom_lieu']."\">
	<input type="submit" value="valider">
	</form>
<?php 
}


?>
