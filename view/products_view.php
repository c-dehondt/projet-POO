<section class="container">
  <h2>Produits</h2>
<div class="row">
  <?php foreach ($vehicules as $vehicule): ?>

        <div class="col s12 m6">
          <div class="card blue-grey darken-1">
            <?php
            var_dump($vehicule->getIdVehicule());
            ?>
            <div class="card-content white-text">
              <span class="card-title"><?php echo htmlspecialchars($vehicule->getMark()) ?></span>
              <p> Model: <?php echo htmlspecialchars($vehicule->getModel()) ?></p>
              <p>Immatriculation: <?php echo htmlspecialchars($vehicule->getRegistration()) ?></p>
              <p>Type: <?php echo htmlspecialchars($vehicule->getType()) ?></p>
              <p>Nombre de porte: <?php echo htmlspecialchars($vehicule->getDoor()) ?></p>
              <p>Nombre de roue: <?php echo htmlspecialchars($vehicule->getWheel()) ?></p>
              <p>Carburant: <?php echo htmlspecialchars($vehicule->getFuel()) ?></p>
              <p>Prix: <?php echo htmlspecialchars($vehicule->getPrice()) . '€'?></p>

              <form action="index.php"  method="post">
                <input type="hidden" name="detail" value="<?php echo $vehicule->getIdVehicule()?>">
                <button class="btn-floating red right" type="submit"><i class="material-icons">add</i></button>
              </form>
            </div>
          </div>
        </div>
      <?php endforeach; ?>
      </div>
    </section>
