<?php
require_once '../model/connexion_sql.php';
require '../model/products_model.php';
require '../service/immatRejex.php';
require_once '../service/chargerClass.php';
spl_autoload_register('chargerClasse');

$manager= new vehiculeManager($bdd);

if (isset ($_POST['mark'])){

    $erreur=verifImmat($_POST['registration']);


    if ($erreur) {
// creer objet

  $vehicule = new $_POST['type']($_POST);
          if (!$manager->verifRegistration($registration)){
            //addvehicule sur objet
          $manager->addVehicule($vehicule);
          header("location:home.php");
        }else {
          $erreur="faux";
        }

    }else {
        require '../view/add_vehicule.php';
      }

  }else {
    require '../view/add_vehicule.php';
  }

 ?>
