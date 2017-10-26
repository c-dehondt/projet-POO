<?php
require_once '../model/connexion_sql.php';
require_once '../model/products_model.php';

require_once '../service/chargerClass.php';
spl_autoload_register('chargerClasse');
$manager1= new vehiculeManager($bdd);
$vehicule= $manager1->getIdvehicule($_GET['edit']);

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
  $idVehicule=$_GET['edit'];



  $manager1->updateVehicule($idVehicule,$mark,$model,$registration,$price,$type,$door,$wheel,$fuel,$detail);
  header("location:home.php");
}else {
  require '../view/header.php';
  require '../view/updateVehicule.php';
  require '../view/footer.php';
}

 ?>
