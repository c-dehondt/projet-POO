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




  $manager= new vehiculeManager($bdd);
  $manager->addVehicule($mark,$model,$registration,$price,$type,$door,$wheel,$fuel,$detail);
  header("location:home.php");
}else {
  require '../view/header.php';
  require '../view/add_vehicule.php';
  require '../view/footer.php';
}
 ?>
