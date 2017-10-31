  <?php
  require_once '../model/connexion_sql.php';
  require '../model/products_model.php';
  require '../service/chargerClass.php';

  // require_once 'htmlpurifier/HTMLPurifier.auto.php';

  spl_autoload_register('chargerClasse');


  $manager= new vehiculeManager($bdd);
  $vehicule= $manager->getIdvehicule($_GET['id']);



  require '../view/detail_view.php';
   ?>
