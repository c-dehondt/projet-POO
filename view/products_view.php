<?php
?>

<section class="row">
  <h2>Produits</h2>
  <?php foreach ($vehicules as $vehicule): ?>
        <div class="col s12 m6">
          <div class="card blue-grey darken-1">
            <div class="card-content white-text">
              <span class="card-title"><?php echo htmlspecialchars($vehicule->getMark()) ?></span>
              <p> Model: <?php echo htmlspecialchars($vehicule->getModel()) ?></p>
              <p>Immatriculation: <?php echo htmlspecialchars($vehicule->getRegistration()) ?></p>
              <p>Type: <?php echo htmlspecialchars($vehicule->getType()) ?></p>
              <p>Nombre de porte: <?php echo htmlspecialchars($vehicule->getDoor()) ?></p>
              <p>Nombre de roue: <?php echo htmlspecialchars($vehicule->getWheel()) ?></p>
              <p>Carburant: <?php echo htmlspecialchars($vehicule->getFuel()) ?></p>
              <p>Prix: <?php echo  htmlspecialchars($vehicule->getPrice()) . '€'?></p>
              <p><?php echo $vehicule->getIdVehicule()?></p>
              <div class="card-action">
                <ul id="nav-mobile" class="hide-on-med-and-down">
                  <li><a href="../controller/detail_controller.php?id=<?php echo $vehicule->getIdVehicule()?>">Voir plus</a></li>
                  <li><a href="../controller/updateVehicule.php?edit=<?php echo $vehicule->getIdVehicule()?>">Editer</a></li>
                  <li><a href="../controller/deleteVehicule.php?cancel=<?php echo $vehicule->getIdVehicule()?>">Supprimer</a></li>
                </ul>
              </div>
              <?php
              var_dump($vehicule->getIdVehicule());
              ?>
            </div>
          </div>
        </div>

      <?php endforeach; ?>
    </section>
