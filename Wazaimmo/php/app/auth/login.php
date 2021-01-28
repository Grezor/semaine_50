<?php 
    include("header.php");

    include("connexion.php");

    $db=connect();
?>


<div class="container-fluid col-3">
<div class="row col-12 m-0 p-0 " align="center"> 


        
        
<form action=".php" method="POST" id="form_ajout">

<div class="form-group">
    
        <label for="login">Veuillez saisir votre adresse mail</label>
        <input type="text" name="login"class="form-control" id="login" value="">
        <p style="color: brown;" id="erreurlogin"></p>
        <br>
        

        <label for="mdp">Veuillez saisir votre mot de passe</label>
        <input type="text" name="mdp" class="form-control" id="mdp" value="">
        <p style="color: brown;" id="erreurmdp"></p>
        <br>
        <button type="submit" class="btn btn-dark" value="Envoyer" id="Bouton_seconnecter">Se connecter</button>
        <button type="reset" class="btn btn-dark" value="reset" id="Bouton_Annuler">Annuler</button><br><br>


        </div>
        </div>
</div>
<script src="app1.js"></script>

        <script>
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

        </script>




<?php
    include("footer.php");
    
?>