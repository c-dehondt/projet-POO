  <?php
  require_once 'model/connexion_sql.php';
  require 'model/products_model.php';



   function chargerClasse($classname)
   {
       require "entites/" . $classname. '.php';
   }

  spl_autoload_register('chargerClasse');

  $manager= new vehiculeManager($bdd);
  $idVehicule= $manager->getIdvehicule($_POST['detail']);
  var_dump($_POST['detail']);
  $vehicule=new vehicule($idVehicule);


  require 'view/detail_view.php';
   ?>
