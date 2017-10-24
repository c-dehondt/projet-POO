<?php
require_once 'model/connexion_sql.php';
require 'model/products_model.php';

 function chargerClasse ($classname)
 {
   require "entites/" . $classname. '.php';

 }

spl_autoload_register('chargerClasse');

$manager= new vehiculeManager($bdd);
$vehicules = $manager->getIdvehicule();
$vehicules= $manager->getVehicules();


require 'view/detail_view.php';
 ?>
