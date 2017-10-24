<?php

include 'view/header.php';

if (!isset($_POST['detail']))
  {
    require 'controller/home.php';
  }else {
    require 'controller/detail_controller.php';
  }

include 'view/footer.php';
?>
