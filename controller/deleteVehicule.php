<?php
require_once '../model/connexion_sql.php';
require '../model/products_model.php';

if (isset($_GET['cancel'])) {
    $manager = new vehiculeManager($bdd);
    $manager->deleteVehicule($_GET['cancel']);
    header("Location: home.php");
}
