<?php
require_once '../model/connexion_sql.php';
require '../model/products_model.php';
require '../service/immatRejex.php';

$manager= new vehiculeManager($bdd);

if (isset ($_POST['mark'])){

    $erreur=verifImmat($_POST['registration']);

    if ($erreur) {
      $mark=$_POST['mark'];
      $model=$_POST['model'];
      $registration=$_POST['registration'];
      $price=$_POST['price'];
      $type=$_POST['type'];
      $door=$_POST['door'];
      $wheel=$_POST['wheel'];
      $fuel=$_POST['fuel'];
      $detail=$_POST['detail'];


          if (!$manager->verifRegistration($registration)){
          $manager->addVehicule($mark,$model,$registration,$price,$type,$door,$wheel,$fuel,$detail);
          header("location:home.php");
        }else {
          $erreur="Le numéro de plaque est déjà existant";
        }

    }else {
        require '../view/add_vehicule.php';
      }

  }else {
    require '../view/add_vehicule.php';
  }

 ?>
