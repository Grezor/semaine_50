<?php 
    include("header.php");

    include("connexion.php");

    $db=connect();
?>
<h1 id="sinscrire">Veuillez remplir le formulaire d'inscription ci-dessous</h1><br><br>


<div class="container-fluid col-3">

<div class="row col-12 m-0 p-0 " align="center"> 


                        
        
            <form action=".php" method="POST" id="form_ajout" enctype="multipart/form-data">

            <div class="form-group">
                
                    <label for="login">Veuillez saisir votre adresse mail</label>
                    <input type="text" name="id"class="form-control" id="id" value="">
                    <br>
                    
                    <label for="login2">Veuillez confirmer votre adresse mail</label>
                    <input type="text" name="references"class="form-control" id="references" value="">
                    <br>

                    <label for="mdp">Veuillez saisir votre mot de passe</label>
                    <input type="text" name="categorie" class="form-control" id="categorie" value="">
                    <br>
                    
                    <label for="mdp">Veuillez confirmer votre mot de passe</label>
                    <input type="text" name="libelle" class="form-control" id="libelle" value="">
                    <br>

            </div>

            </form>
</div>

</div>

        <!-- <script>
        function verif()
        { 
            //Rappel : confirm() -> Bouton OK et Annuler, renvoit true ou false
            var resultat = confirm("Etes-vous certain de vouloir modifier cet enregistrement ?");

            //alert("retour :"+ resultat);

            if (resultat==false)
            {

            alert("Vous avez annulé les modifications \nAucune modification ne sera apportée à cet enregistrement !");

            //annule l'évènement par défaut ... SUBMIT vers "script_modif.php"
            event.preventDefault();    

            }
        }

        </script> -->




<?php
    include("footer.php");
    
?>