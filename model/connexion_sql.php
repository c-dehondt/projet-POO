<?php

    $bdd = new PDO('mysql:host=localhost;dbname=vehicule;charset=utf8', 'root', 'root');
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
?>
