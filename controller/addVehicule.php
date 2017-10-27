<?php
require_once '../model/connexion_sql.php';
require '../model/products_model.php';


if (!empty ($_POST['mark'])) {


  $mark=$_POST['mark'];
  $model=$_POST['model'];
  $registration=$_POST['registration'];
  $price=$_POST['price'];
  $type=$_POST['type'];
  $door=$_POST['door'];
  $wheel=$_POST['wheel'];
  $fuel=$_POST['fuel'];
  $detail=$_POST['detail'];
  // Testons si le fichier n'est pas trop gros
  if ($FILES['monfichier']['size'] <= 1000000)
  {
    // Testons si l'extension est autorisée
    $infosfichier = pathinfo($_FILES['monfichier']['name']);
    var_dump($_FILES);
    $extension_upload = $infosfichier['extension'];
    $extensions_autorisees = array('jpg', 'jpeg', 'gif', 'png');

    if (in_array($extension_upload, $extensions_autorisees))
    {
      // On peut valider le fichier et le stocker définitivement
      move_uploaded_file($_FILES['monfichier']['tmp_name'], '../img/' . $_FILES['monfichier']['name']);
      echo "L'envoi a bien été effectué !";

    }
  }
  $manager= new vehiculeManager($bdd);
  $manager->addVehicule($mark,$model,$registration,$price,$type,$door,$wheel,$fuel,$detail);
  $idVehicule= (int)$bdd-> lastInsertId();
  var_dump($idVehicule);

  $manager-> addImage($idVehicule, $_FILES);
  // header("location:home.php");
}else {
  require '../view/header.php';
  require '../view/add_vehicule.php';
  require '../view/footer.php';
}
 ?>
