<?php


function connect () {

//vérifie si on désire se diriger vers le serveur dev.amorce.org ou bien vers le serveur local
//dans ce cas, host,login, password et BDD sont différents d'un serveur à l'autre

if ($_SERVER["SERVER_NAME"] == "dev.amorce.org")
{
        // Paramètres de connexion serveur distant
        $host = "localhost";
        $login= "etienneo";     // Votre loggin d'accès au serveur de BDD 
        $password="oe20112";    // Le Password pour vous identifier auprès du serveur
        $base = "etienneo";    // La BDD avec laquelle vous voulez travailler 
}


else
{
        // Paramètres de connexion serveur local
        $host ="localhost";
        $login="root";     // Votre loggin d'accès au serveur de BDD 
        $password="";    // Le Password pour vous identifier auprès du serveur
        $base ="afpa_wazaa_immo";    // La bdd avec laquelle vous voulez travailler 
} 

try{        
        //$db = new PDO('mysql:host=localhost;charset=utf8;dbname=hotel', 'root', '');
        $db = new PDO("mysql:host=".$host.";charset=utf8;dbname=".$base."", $login, $password);
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}

catch (Exception $e) {
        echo "La connection à la base e données a échoué ! <br>";
        echo "Merci de bien vérifier vos paramètres de connection ...<br>";
        echo "Erreur : " . $e->getMessage() . "<br>";
        echo "N° : " . $e->getCode(). "<br>";
        die("Fin du script");
} 

//Attention : ne pas oublier de faire un return de la connection $db !
return $db;

}

?>
