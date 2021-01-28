<?php 
    include("header.php");

    include("connexion.php");

    $db=connect();
?>







<h1 id="sinscrire">Veuillez remplir le formulaire d'inscription ci-dessous</h1><br><br>


<div class="container-fluid col-3">

<div class="row col-12 m-0 p-0 " align="center"> 


                        
        
            <form action="scriptsinscrire.php" method="POST" id="form_inscription">

            <div class="form-group">
                
                    <label for="loginid">Veuillez saisir votre adresse mail</label>
                    <input type="text" name="loginid" class="form-control" id="loginid" placeholder="Votre E-mail" value="">
                    <p style="color: brown;" id="erreurloginid"></p>
                    <br>
                    
                    <label for="login2">Veuillez confirmer votre adresse mail</label>
                    <input type="text" name="login2"class="form-control" id="login2" placeholder="Votre E-mail" value="">
                    <p style="color: brown;" id="erreurlogin2"></p>
                    <br>

                    <label for="mdp">Veuillez saisir votre mot de passe</label>
                    <input type="text" name="mdp" class="form-control" id="mdp" placeholder="Votre mot de passe" value="">
                    <p style="color: brown;" id="erreurmdp"></p>
                    <br>
                    
                    <label for="mdp2">Veuillez confirmer votre mot de passe</label>
                    <input type="text" name="mdp2" class="form-control" id="mdp2" placeholder="Votre mot de passe" value="">
                    <p style="color: brown;" id="erreurmdp2"></p>
                    <br>

                    

                    <button type="submit" class="btn btn-dark" value="Envoyer" id="Bouton_sinscrire">S'inscrire</button>
                    <button type="reset" class="btn btn-dark" value="reset" id="Bouton_Annuler">Annuler</button><br><br>

            </div>

            </form>
         
</div>

</div>
<script src="app.js"></script>
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