  
<?php 



//dans ce fichier, nous récupérons les informations pour réaliser la requête de modification : UPDATE

//récupération des informations passées en POST, nécessaires à la modification
function sessionStart() {
    if(session_status() === PHP_SESSION_NONE){
        session_start();
    }
}


if (!empty($_POST)) {
    $errors = [];
    require_once "../../app/auth/connexion.php";
    if (empty($_POST['offre'])) {
		$errors['offre'] = "Votre offre n'est pas valide";
    }
    if (empty($_POST['typeBien'])) {
		$errors['typeBien'] = "Votre typeBien n'est pas valide";
    }
    if (empty($_POST['nbPiece'])) {
		$errors['nbPiece'] = "Votre nbPiece n'est pas valide";
    }
    if (empty($_POST['refs'])) {
		$errors['refs'] = "Votre refs n'est pas valide";
    }
    if (empty($_POST['title'])) {
		$errors['title'] = "Votre title n'est pas valide";
    }
    if (empty($_POST['description'])) {
		$errors['description'] = "Votre description n'est pas valide";
    }
    if (empty($_POST['options'])) {
		$errors['options'] = "Votre options n'est pas valide";
    }
    if (empty($_POST['localisation'])) {
		$errors['localisation'] = "Votre localisation n'est pas valide";
    }
    if (empty($_POST['surfaces'])) {
		$errors['surfaces'] = "Votre surfaces n'est pas valide";
    }
    if (empty($_POST['surfaceTotal'])) {
		$errors['prisurfaceTotalce'] = "Votre surfaceTotal n'est pas valide";
    }
    if (empty($_POST['prix'])) {
		$errors['prix'] = "Votre prix n'est pas valide";
    }
    if (empty($_POST['dianostic'])) {
		$errors['dianostic'] = "Votre dianostic n'est pas valide";
    }
    
    if (empty($errors)) {

    $requete = $db->prepare("INSERT INTO annonces (an_ref,an_titre,an_description,an_local,an_surf_hab,an_surf_tot,an_prix,an_pieces,an_diagnostic,an_type, an_offre, an_d_ajout) 
    VALUES (:an_ref,:an_titre,:an_description,:an_local,:an_surf_hab,:an_surf_tot,:an_prix,:an_pieces,:an_diagnostic, :an_type, :an_offre, now())");

    $requete->execute([
        ':an_offre' => (int) $_POST['offre'],
        ':an_type' => $_POST['typeBien'],
        ':an_ref' => $_POST['refs'],
        ':an_titre' => $_POST['title'],
        ':an_description' => $_POST['description'],
        ':an_local' => $_POST['localisation'],
        ':an_surf_hab' => $_POST['surfaces'],
        ':an_surf_tot' => $_POST['surfaceTotal'],
        ':an_prix' => $_POST['prix'],
        ':an_pieces' => $_POST['nbPiece'],
        ':an_diagnostic' => $_POST['dianostic'],
    ]);
    $_SESSION['flash']['success'] = 'produit cree';
    header("Location: index.php");
    exit();

    }


}
