<?php 
require_once '../../app/auth/connexion.php';
$db=connect();

//dans ce fichier, nous récupérons les informations pour réaliser la requête de modification : UPDATE

//récupération des informations passées en POST, nécessaires à la modification


if ($_POST['offer'] == "achat") 
{
    $reference_offerType = 1;
}

else if ($_POST['offer'] == "location")
{
    $reference_offerType = 1;
}

 else if ($_POST['offer'] == "viager")
{
    $reference_offerType = 1;
} 

else  $reference_offerType = NULL;


if ($_POST['nbPiece'] == "1") 
{
    $reference_CheckBox2 = 1;
}
else if ($_POST['nbPiece'] == "2")
{
    $reference_CheckBox2 = 1;
} else if ($_POST['nbPiece'] == "3")
{
    $reference_CheckBox2 = 1;
} else if ($_POST['nbPiece'] == "4")
{
    $reference_CheckBox2 = 1;
} else if ($_POST['nbPiece'] == "5")
{
    $reference_CheckBox2 = 1;
} else if ($_POST['nbPiece'] == "6")
{
    $reference_CheckBox2 = 1;
} else if ($_POST['nbPiece'] == "plusDe6")
{
    $reference_CheckBox2 = 1;
} else  $reference_CheckBox2 = NULL;


$reference_ref=$_POST['Refs'];
$reference_titre=$_POST['title'];
$reference_description=$_POST['Descript'];
$reference_localisation=$_POST['locate'];
$reference_surfaceHabitable=$_POST['Surfaces'];
$reference_surfaceTotale=$_POST['SurfacesTotal'];
$reference_prix=$_POST['NamePrice'];
$reference_offerType=$_POST['offer'];
$reference_CheckBox2=$_POST['nbPiece'];

if ($_POST['Diagnos'] == "A") 
{
    $reference_CheckBox3 = 1;
}
else if ($_POST['Diagnos'] == "B")
{
    $reference_CheckBox3 = 1;
} else if ($_POST['Diagnos'] == "C")
{
    $reference_CheckBox3 = 1;
} else if ($_POST['Diagnos'] == "D")
{
    $reference_CheckBox3 = 1;
} else if ($_POST['Diagnos'] == "E")
{
    $reference_CheckBox3 = 1;
} else if ($_POST['Diagnos'] == "F")
{
    $reference_CheckBox3 = 1;
} else if ($_POST['Diagnos'] == "G")
{
    $reference_CheckBox3 = 1;
} else if ($_POST['Diagnos'] == "Vierge")
{
    $reference_CheckBox3 = 1;
} else  $reference_CheckBox3 = NULL;


if ($_FILES['fichier']['error'] > 0) $erreur = "Erreur lors du transfert";
if ($_FILES['icone']['size'] > $maxsize) $erreur = "Le fichier est trop gros";




$requete = $db->prepare("INSERT INTO annonces (an_ref,an_titre,an_description,an_local, an_surf_hab,an_surf_tot,an_prix,an_offre,an_pieces, an_diagnostic) 
VALUES (:an_ref,:an_titre,:an_description,:an_local,:an_surf_hab,:an_surf_tot,:an_prix,:an_offre,:an_pieces,:an_diagnostic)");



$requete->bindValue(':an_ref', $reference_ref, PDO::PARAM_STR);
$requete->bindValue(':an_titre', $reference_titre, PDO::PARAM_STR);
$requete->bindValue(':an_description', $reference_description, PDO::PARAM_STR);
$requete->bindValue(':an_local', $reference_localisation, PDO::PARAM_STR);
$requete->bindValue(':an_surf_hab', $reference_surfaceHabitable, PDO::PARAM_INT);
$requete->bindValue(':an_surf_tot', $reference_surfaceTotale, PDO::PARAM_INT);
$requete->bindValue(':an_prix', $reference_prix, PDO::PARAM_INT);
$requete->bindValue(':an_offre', $reference_offerType, PDO::PARAM_BOOL);
$requete->bindValue(':an_pieces', $reference_CheckBox2, PDO::PARAM_BOOL);
$requete->bindValue(':an_diagnostic', $reference_CheckBox3, PDO::PARAM_BOOL);



 $requete->execute();

//libère la connection au serveur de BDD
$requete->closeCursor();

//redirection vers la page index.php 


header("Location: accueil.php");

?>
