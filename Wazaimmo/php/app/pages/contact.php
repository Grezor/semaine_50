<?php 
    include("header.php");

    include("connexion.php");

    $db=connect();


?>


<div class="container-fluid col-6"> 

<div class="col-12 col-sm-12 col-md-12 col-lg-12" align="center">

        <p>* Ces zones sont obligatoires</p>

<form action="" class="form-group" need-validation method="post" accept-charset="utf-8">
<fieldset class="alert">
    <h2>Vos informations</h2>

                <div class="form-group"><br>
                <label for="nom">*Nom :</label>
                <input type="text" name="Nom" value=""  class="form-control w-50" placeholder="Veuillez entrer votre nom" id="nom" required />
                </div>

                <div class="form-group"><br>
                <label for="prenom">*Prénom :</label>
                <input type="text" name="prenom" value=""  class="form-control w-50" placeholder="Veuillez entrer votre prénom" id="prenom" required />
                </div>

                <div><br><label>*Genre :</label><br>
                <input type="radio" name="genre" value="homme" id="homme"  />
                <label for="homme">Homme</label><br>
                <input type="radio" name="genre" value="femme" id="femme"  />
                <label for="femme">Femme</label></div>

                <div class="form-group"><br>
                <label for="ddn">*Date de naissance :</label>
                <input type="date" name="ddn" value=""  class="form-control w-50" placeholder="Veuillez entrer votre date de Naissance" id="ddn" required />
                </div>

                <div class="form-group"><br>
                <label for="cp">*Code postal :</label>
                <input type="text" name="cp" value=""  class="form-control w-50" placeholder="Veuillez entrer votre code postal" id="cp" required />
                </div>

                <div class="form-group"><br>
                <label for="adresse">*Adresse :</label>
                <input type="text" name="adresse" value=""  class="form-control w-50" placeholder="Veuillez entrer votre adresse" id="adresse" required />
                </div>

                <div class="form-group"><br>
                <label for="ville">*Ville :</label>
                <input type="text" name="ville" value=""  class="form-control w-50" placeholder="Veuillez entrer votre ville" id="ville" required />
                </div>

                <div class="form-group"><br>
                <label for="mail">*E-mail :</label>
                <input type="text" name="mail" value="" class="form-control w-50" placeholder="Veuillez entrer votre E-mail" id="mail" required />
                </div>

</fieldset><br>

<fieldset class="alert">
    <h1>Votre demande</h1>

                <div class="form-group w-50"><br>
                <label for="sujet">*Sujet :</label>
                <select class="custom-select">
                <option value="Veuillez_selectionn_un_sujet">Veuillez selectionner un sujet</option>
                <option value="Mes_commandes">Mes commandes</option>
                <option value="Question_sur_un_produit">Quesiton sur un produit</option>
                <option value="Réclamation">Réclamation</option>
                <option value="Autre">Autres</option>
                </select><br><br>
                </div>
                </fieldset>

</form>
</div>
</div>
<?php
    include("footer.php");
    
?>