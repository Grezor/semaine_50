<?php
include("connexion.php");
$db=connect();


//récupération de l'identifiant passé en GET
$an_id=$_GET['an_id'];

//permet de vérifier que l'on a bien l'identifiant attendu
//mettre le header plus bas en commentaire !

//var_dump("id : ".$pro_id);
//echo("<br>");

//**     connection à la base de données    **

// si la ligne : 'require "connection_bdd.php";', ci-dessous est décommentée, 
// il faut commenter la ligne : '$db = new PDO('mysql:host=localhost;charset=utf8;dbname=hotel', 'root', '');'
//et décommenter la ligne : '$db = new PDO('mysql:host='.$host.';charset=utf8;dbname='.$base.'', $login, $password);'

//require "connection_bdd.php";


//construction de la requête DELETE sans injection SQL

$requete = $db->prepare("DELETE from annonces WHERE an_id=:an_id");

//$requete->bindValue(':sta_nom', $nom_station, PDO::PARAM_STR);
//$requete->bindValue(':sta_altitude', $altitude_station, PDO::PARAM_INT);
$requete->bindValue(':an_id', $an_id, PDO::PARAM_INT);

$requete->execute();

//libère la connection au serveur de BDD
$requete->closeCursor();

//redirection vers index.php
header("Location: Accueil.php");

?>


<a href="suppression.php?an_id=<?php echo $row->an_id  ?>"  class="btn btn-danger" title="Suppresion" onclick="Suppression();">Supprimer</a>

<br>

<br>
<script>
function Suppression(){ 

//Rappel : confirm() -> Bouton OK et Annuler, renvoit true (OK) ou false (Annuler)
var resultat = confirm("Etes-vous certain de vouloir supprimer cet enregistrement ?");




if (resultat==false){

event.preventDefault();

}
}

</script>

