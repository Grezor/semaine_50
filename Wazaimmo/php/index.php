<?php 
require_once './includes/header.php';
require_once './app/auth/connexion.php';
$db=connect();
?>

<?php

$requete = "SELECT * FROM annonces";
$result = $db->query($requete);?>

<div><br><br>
        <a href="./app/auth/ajout.php" title="lien vers le formulaire d'ajout">
            <button type="submit" class="col-12 bbtn btn-dark p-3"><strong>Ajouter un bien à vendre/louer</strong>
            </button>
        </a><br>
    <br>
</div>

<?php while ($row = $result->fetch(PDO::FETCH_OBJ)) 
{ ?>



        <div class="card" style="width: 25rem;">
<?php echo "<img src='annexes/photos/annonce_1/1-1.jpg' alt='photo_1' width='400' class='card-img-top' >"?>
        <div class="card-body">

    <p class="text align-middle text-center"><?php echo $row->an_titre ?></p>
    <p class="text align-middle text-center"><?php echo $row->an_local ?></p>
    <p class="text align-middle text-center"><?php echo $row->an_prix ?> €</p>
    <p class="text align-middle text-center"><?php echo $row->an_d_ajout ?></p>

        <div class="text align-middle text-center">

<a href="suppression.php?an_id=<?php echo $row->an_id?>"  class="btn btn-danger" title="Suppresion" onclick="Suppression();">Supprimer</a>

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
<a href="ensavoirplus.php?an_id=<?php echo $row->an_id ?>"  class="btn btn-outline-success">En savoir plus</a>
        </div><br>
        </div>
        </div>



<?php
}
    // sert à finir proprement une série de fetch(), libère la connection au serveur de BDD
    $result->closeCursor();
?>





































<?php
require_once './includes/footer.php';

    
?>