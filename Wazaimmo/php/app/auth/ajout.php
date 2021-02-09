<?php
require_once '../../includes/header.php';
require_once './connexion.php';
$db=connect();
$resultatBien = $db->query('Select bien_id,bien_libelle from waz_bien');
$resultatOpt=$db->query('Select opt_id,opt_libelle from options');
?>

<div class="m-3" align="center">
 <?php if (isset($_SESSION['flash'])): ?>
                <?php foreach ($_SESSION['flash'] as $type => $message): ?>
                    <div class="alert alert-<?= $type; ?>">
                        <?= $message; ?>
                    </div>
     <?php endforeach; ?>
    <?php unset($_SESSION['flash']); ?>
<?php endif; ?>


    <form action="addBien.php" method="POST">
        <div>
            <br>
            <div class="form-group w-25">
                <label for="CheckBox">Type d'offre ? : </label><br>
                <div class="form-check form-check-inline">
                    <br><input class="form-check-input" type="radio" id="1" name="offre" value="Achat">
                    <label class="form-check-label" for="InlineRadio1">Achat</label>
                </div>
                <div class="form-check form-check-inline">
                    <br><input class="form-check-input" type="radio" id="2" name="offre" value="Location">
                    <label class="form-check-label" for="InlineRadio2">Location</label>
                </div>
                <div class="form-check form-check-inline">
                    <br><input class="form-check-input" type="radio" id="3" name="offre" value="Viager">
                    <label class="form-check-label" for="InlineRadio2">Viager</label>
                </div><br>
                <!-- TYPE DE BIEN   -->
                <label for="Catégorie">Type de biens :</label>

                <select class="form-control" id="bienType" name="typeBien">
                    <?php while ($typeBien= $resultatBien ->fetch(PDO::FETCH_OBJ)) { ?>
                    <option value="<?= $typeBien->bien_id; ?>"><?= $typeBien->bien_libelle; ?></option>
                    <?php } ?> </select><br>
                <!-- Nombre de pièces -->
                <div class="form-group">
                    <label for="CheckBox">Nombre de pièces : </label><br>
                    <div class="form-check form-check-inline">
                        <br><input class="form-check-input" type="radio" id="1" name="nbPiece" value="1">
                        <label class="form-check-label" for="InlineRadio1">1</label>
                    </div>

                    <div class="form-check form-check-inline">
                        <br><input class="form-check-input" type="radio" id="2" name="nbPiece" value="2">
                        <label class="form-check-label" for="InlineRadio2">2</label>
                    </div>

                    <div class="form-check form-check-inline">
                        <br><input class="form-check-input" type="radio" id="3" name="nbPiece" value="3">
                        <label class="form-check-label" for="InlineRadio2">3</label>
                    </div>

                    <div class="form-check form-check-inline">
                        <br><input class="form-check-input" type="radio" id="4" name="nbPiece" value="4">
                        <label class="form-check-label" for="InlineRadio2">4</label>
                    </div>

                    <div class="form-check form-check-inline">
                        <br><input class="form-check-input" type="radio" id="5" name="nbPiece" value="5">
                        <label class="form-check-label" for="InlineRadio2">5</label>
                    </div>

                    <div class="form-check form-check-inline">
                        <br><input class="form-check-input" type="radio" id="6" name="nbPiece" value="6">
                        <label class="form-check-label" for="InlineRadio2">6</label>
                    </div>

                    <div class="form-check form-check-inline">
                        <br><input class="form-check-input" type="radio" id="+6" name="nbPiece" value="+6">
                        <label class="form-check-label" for="InlineRadio2">+ de 6 </label>
                    </div><br>


                    <!-- REFERENCES -->
                    <br> <label for="references">Référence :</label>
                    <input type="text" class="form-control" id="reference" name="refs" value="">


                    <!-- TITRE -->
                    <label for="references">Titre :</label>
                    <input type="text" class="form-control" id="Titre" name="title" value="">


                    <!-- DESCRIPTION-->
                    <label for="references">Description :</label>
                    <input type="text" class="form-control" id="Description" name="description" value="">


                    <!-- OPTIONS -->
                    <div class="form-group"><br>
                        Options:<br><br>
                        <?php while($typePiece=$resultatOpt->fetch(PDO::FETCH_OBJ)){?>
                        <input class="form-radio-input" type="radio" id="1" name="options" value="1">
                        <label class="radio-inline"><?php echo $typePiece->opt_libelle;?></label><?php }?></div>


                    <!-- LOCALISATION -->

                    <label for="references">Localisation :</label>
                    <input type="text" class="form-control" id="Localisation" name="localisation" value="">


                    <!-- SURFACE HABITABLE -->

                    <label for="references">Surface habitable :</label>
                    <input type="number" class="form-control" id="Surface" name="surfaces" value="">


                    <!-- SURFACE TOTALE -->

                    <label for="references">Surface totale :</label>
                    <input type="number" class="form-control" id="SurfaceTotal" name="surfaceTotal" value="">


                    <!-- PRIX -->

                    <label for="references">Prix :</label>
                    <input type="number" class="form-control" id="Price" name="prix" value="">


                    <!-- DIAGNOSTIC -->

                    <div class="form-group">
                        <label for="CheckBox">Diagnostic: </label><br>
                        <div class="form-check form-check-inline">
                            <br><input class="form-check-input" type="radio" id="A" name="dianostic" value="A">
                            <label class="form-check-label" for="InlineRadio1">A</label>
                        </div>

                        <div class="form-check form-check-inline">
                            <br><input class="form-check-input" type="radio" id="B" name="dianostic" value="B">
                            <label class="form-check-label" for="InlineRadio2">B</label>
                        </div>

                        <div class="form-check form-check-inline">
                            <br><input class="form-check-input" type="radio" id="C" name="dianostic" value="C">
                            <label class="form-check-label" for="InlineRadio2">C</label>
                        </div>

                        <div class="form-check form-check-inline">
                            <br><input class="form-check-input" type="radio" id="D" name="dianostic" value="D">
                            <label class="form-check-label" for="InlineRadio2">D</label>
                        </div>

                        <div class="form-check form-check-inline">
                            <br><input class="form-check-input" type="radio" id="E" name="dianostic" value="E">
                            <label class="form-check-label" for="InlineRadio2">E</label>
                        </div>

                        <div class="form-check form-check-inline">
                            <br><input class="form-check-input" type="radio" id="F" name="dianostic" value="F">
                            <label class="form-check-label" for="InlineRadio2">F</label>
                        </div>

                        <div class="form-check form-check-inline">
                            <br><input class="form-check-input" type="radio" id="G" name="dianostic" value="G">
                            <label class="form-check-label" for="InlineRadio2">G</label>
                        </div>

                        <div class="form-check form-check-inline">
                            <br><input class="form-check-input" type="radio" id="Vierge" name="dianostic"
                                value="Vierge">
                            <label class="form-check-label" for="InlineRadio2">Vierge</label>
                        </div><br>

            <br><a href="accueil.php" class="btn btn-secondary" role="button" title="formulaire">Retour </a>
            <input type="submit" value="Enregistrer" class="btn btn-success"><br>
            <a href="addBien.php"><button class="btn btn-lg btn-primary btn-block"><span>s'inscrire</span></button></a>

    </form>

</div>







<script>
    //vérifie si on envoit ou non le formulaire à "script_modif.php"
    function verif() {
        //Rappel : confirm() -> Bouton OK et Annuler, renvoit true ou false
        var resultat = confirm("Etes-vous certain de vouloir ajouter cet enregistrement ?");
        //alert("retour :"+ resultat);
        if (resultat == false) {
            alert("Vous avez annulé les modifications \nAucune modification ne sera apportée à cet enregistrement !");
            //annule l'évènement par défaut ... SUBMIT vers "script_modif.php"
            event.preventDefault();
        }
    }
</script>

<?php require_once '../../includes/footer.php'; ?>