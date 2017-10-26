<?php
// require '../index.php';
require_once '../view/header.php';
require_once '../model/connexion_sql.php';
require '../model/products_model.php';
require_once '../service/chargerClass.php';
spl_autoload_register('chargerClasse');

$manager= new vehiculeManager($bdd);
$vehicules=$manager->getVehicules();

require '../view/products_view.php';
require '../view/footer.php';
 ?>
