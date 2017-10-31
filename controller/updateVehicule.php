<?php
require_once '../model/connexion_sql.php';
require_once '../model/products_model.php';

require_once '../service/chargerClass.php';
spl_autoload_register('chargerClasse');
$manager1= new vehiculeManager($bdd);
$vehicule= $manager1->getIdvehicule($_GET['edit']);

if (!empty ($_POST['mark'])) {
  $updateVehicule = new $_POST['type']($_POST);
  $idVehicule=(int)$_GET['edit'];

  if ($FILES['monfichier']['size'] <= 1000000)
  {
    // Testons si l'extension est autorisée
    $infosfichier = pathinfo($_FILES['monfichier']['name']);
    $extension_upload = $infosfichier['extension'];
    $extensions_autorisees = array('jpg', 'jpeg', 'gif', 'png');

    if (in_array($extension_upload, $extensions_autorisees))
    {
      // On peut valider le fichier et le stocker définitivement
      move_uploaded_file($_FILES['monfichier']['tmp_name'], '../img/' . $_FILES['monfichier']['name']);

    }
  }
  $manager1->updateVehicule($idVehicule, $updateVehicule);
  $manager1-> updateImage($idVehicule, $_FILES);
  header("location: home.php");
}else {
  require '../view/updateVehicule.php';
}

 ?>
