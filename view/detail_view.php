<section class="">
  <h2>Produits</h2>
<div class="row">
  <?php foreach ($vehicules as $vehicule): ?>

        <div class="col s12">
          <div class="card blue-grey darken-1">
            <div class="fixed-action-btn">
                <a class="btn-floating btn-large red">
                  <i class="large material-icons">mode_edit</i>
                </a>
                <ul>
                  <li class="btn-floating red">
                    <form action="index.php"  method="post">
                      <input type="hidden" name="edit">
                      <button class="btn-floating blue" type="submit"><i class="material-icons">edit</i></button>
                    </form>
                  </li>
                  <li class="btn-floating yellow darken-1">
                    <form action="index.php"  method="post">
                      <input type="hidden" name="cancel">
                      <button class="btn-floating red" type="submit"><i class="material-icons">cancel</i></button>
                    </form>
                  </li>
                </ul>
              </div>



              <?php
              var_dump($vehicule->getIdVehicule());
              ?>

            <div class="card-content white-text">
              <span class="card-title"><?php echo htmlspecialchars($vehicule->getMark()) ?></span>
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
          </div>
        </div>
      <?php endforeach; ?>
      </div>
    </section>
