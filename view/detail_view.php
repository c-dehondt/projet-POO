<section class="">
  <h2>Produits</h2>
      <div class="row card-panel teal">
        <div class="card-content col m10">
            <h3 class="card-title"><?php echo htmlspecialchars($vehicule->getMark()) ?></h3>
            <div class="card-content white-text">
              <p> Model: <?php echo htmlspecialchars($vehicule->getModel()) ?></p>
              <p>Immatriculation: <?php echo htmlspecialchars($vehicule->getRegistration()) ?></p>
              <p>Type: <?php echo htmlspecialchars($vehicule->getType()) ?></p>
              <p>Nombre de porte: <?php echo htmlspecialchars($vehicule->getDoor()) ?></p>
              <p>Nombre de roue: <?php echo htmlspecialchars($vehicule->getWheel()) ?></p>
              <p>Carburant: <?php echo htmlspecialchars($vehicule->getFuel()) ?></p>
              <p>Prix: <?php echo htmlspecialchars($vehicule->getPrice()) ?></p>
            </div>
            <div class="card-content white-text">
              <p>Datail: <?php echo htmlspecialchars($vehicule->getDetail()) ?></p>
            </div>
          </div>

          <div class="card-content col m2">
            <form action="#" method="post">
              <input type="hidden" name="edit" value="<?php echo $vehicule->getIdVehicule()?>">
              <button class="btn red" type="submit"><i class="material-icons">edit</i></button>
            </form>

            <form action="controller/deleteVehicule.php" method="post">
              <input type="hidden" name="cancel" value="<?php echo $vehicule->getIdVehicule()?>">
              <button class="btn" type="submit"><i class="material-icons">cancel</i></button>
            </form>
          </div>

      </div>
    </div>
  </div>
</section>
