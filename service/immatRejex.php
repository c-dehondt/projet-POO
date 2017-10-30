<?php
function verifImmat($erreur)
{
  if (preg_match("#[A-Z]{2}-[0-9]{3}-[A-Z]{2}#", $erreur))
  {
    return true;
  }
  else
  {
    return false;
  }
}

 ?>
