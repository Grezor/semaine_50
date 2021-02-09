<?php 
require_once './includes/header.php';
require_once './app/auth/connexion.php';
$db=connect();
?>
<div>
    <a href="./app/auth/ajout.php" title="lien vers le formulaire d'ajout">
        <button type="submit" class="col-12 bbtn btn-dark p-3"><strong>Ajouter un bien à vendre/louer</strong>
        </button>
    </a><br>
    <br>
</div>
<?php
// Requete pour afficher toutes annonces
$requeteSelecteAllAnnonces = "SELECT an_id, an_offre, an_type, an_pieces, an_ref, an_titre, an_description, an_local, 
an_surf_hab, an_surf_tot, an_prix, an_diagnostic, an_d_ajout FROM annonces";
$requeteSelect = $db->prepare($requeteSelecteAllAnnonces);
$requeteSelect->execute();
?>


<div class="container-fluid">
  <div class="row mx-auto">
  <?php foreach($requeteSelect as $resultBien) { ?>
    <div class="col w-100"><span class="badge rounded-pill bg-warning text-dark"><?= $resultBien->an_id; ?></span>
      <div class="card" style="width: 18rem;">
      <img class="card-img-top" src="https://via.placeholder.com/150" alt="Card image cap">
        <div class="card-body">
            <h5 class="card-title"><?= $resultBien->an_titre; ?></h5>
            <p class="card-text"><?= $resultBien->an_description; ?></p>
            <br>
            <p><?= $resultBien->an_local ?></p>
            <p><?= $resultBien->an_d_ajout ?></p>
            <h3><span class="badge badge-secondary"><?= $resultBien->an_prix; ?>€</span></h3>
            <a href="ensavoirplus.php?an_id=<?= $resultBien->an_id ?>" class="btn btn-outline-success">En savoir plus</a>
            <a href="suppression.php?an_id=<?= $resultBien->an_id?>" class="btn btn-danger" title="Suppresion" onclick="Suppression();">Supprimer</a>
        </div>
      </div>
    </div>
    <?php } ?>
  </div>
</div>


<script>
    function Suppression() {
        //Rappel : confirm() -> Bouton OK et Annuler, renvoit true (OK) ou false (Annuler)
        var resultat = confirm("Etes-vous certain de vouloir supprimer cet enregistrement ?");
        if (resultat == false) {
            event.preventDefault();
        }
    }
</script>


































<?php
require_once './includes/footer.php';

    
?>