<?php
require_once '../model/connexion_sql.php';
require '../model/products_model.php';
require '../service/immatRejex.php';
require_once '../service/chargerClass.php';
spl_autoload_register('chargerClasse');

$manager= new vehiculeManager($bdd);

if (isset($_POST['mark'])) {
    $erreur=verifImmat($_POST['registration']);


    if ($erreur) {
        // creer objet
        $vehicule = new $_POST['type']($_POST);
        // Testons si le fichier n'est pas trop gros
        if ($FILES['monfichier']['size'] <= 1000000) {
            // Testons si l'extension est autorisée
            $infosfichier = pathinfo($_FILES['monfichier']['name']);
            $extension_upload = $infosfichier['extension'];
            $extensions_autorisees = array('jpg', 'jpeg', 'gif', 'png');

            if (in_array($extension_upload, $extensions_autorisees)) {
                // On peut valider le fichier et le stocker définitivement
                move_uploaded_file($_FILES['monfichier']['tmp_name'], '../img/' . $_FILES['monfichier']['name']);

            }
        }
        if (!$manager->verifRegistration($registration)) {
            //addvehicule sur objet
            $manager->addVehicule($vehicule);
            $idVehicule= (int)$bdd-> lastInsertId();
            $manager-> addImage($idVehicule, $_FILES);
            header("location:home.php");
        } else {
            $erreur="faux";
        }
    } else {
        require '../view/add_vehicule.php';
    }
} else {
    require '../view/add_vehicule.php';
}
