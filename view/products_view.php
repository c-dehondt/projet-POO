<?php
?>

<section class="row">
  <h2 class="center-align">Produits</h2>
  <?php foreach ($vehicules as $vehicule): ?>
        <div class="col s12 m6 l4">
          <div class="card blue-grey darken-4">
            <div class="card-content white-text">
                <span class="card-title center-align"><?php echo htmlspecialchars($vehicule->getMark()) ?></span>
              <div class="card-image">
                <img src= "../img/<?php echo $vehicule->getImage()?>">
              </div>
                <span class="card-title"><?php echo htmlspecialchars($vehicule->getMark()) ?></span>

                <p> Model: <?php echo htmlspecialchars($vehicule->getModel()) ?></p>
                <p>Immatriculation: <?php echo htmlspecialchars($vehicule->getRegistration()) ?></p>
                <p>Type: <?php echo htmlspecialchars($vehicule->getType()) ?></p>
                <p>Nombre de porte: <?php echo htmlspecialchars($vehicule->getDoor()) ?></p>
                <p>Nombre de roue: <?php echo htmlspecialchars($vehicule->getWheel()) ?></p>
                <p>Carburant: <?php echo htmlspecialchars($vehicule->getFuel()) ?></p>
                <p>Prix: <?php echo  htmlspecialchars($vehicule->getPrice()) . '€'?></p>
              </div>

              <div class="card-action">
                <a href="../controller/detail_controller.php?id=<?php echo $vehicule->getIdVehicule()?>"><i class="material-icons fa-2x">add</i></a>
                <a href="../controller/updateVehicule.php?edit=<?php echo $vehicule->getIdVehicule()?>"><i class="material-icons fa-2x">create</i></a>
                <a href="../controller/deleteVehicule.php?cancel=<?php echo $vehicule->getIdVehicule()?>"><i class="fa fa-trash fa-2x" aria-hidden="true"></i></a>
              </div>
            </div>
          </div>
        </div>

      <?php endforeach; ?>
    </section>
