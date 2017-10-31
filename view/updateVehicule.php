<?php require '../view/header.php'; ?>

<section class="container">
  <h2>Modifier vehicule</h2>
<p><?php echo $vehicule->getIdVehicule()?></p>
<p><?php echo $vehicule->getImage()?></p>

  <div class="row">
    <form action="updateVehicule.php?edit=<?php echo $vehicule->getIdVehicule()?>" method="post" class="col s12" enctype="multipart/form-data">
      <div class="row">
        <div class="input-field col s12 m6">
          <input name='mark' id="marque du vehicule" type="text" class="validate" value="<?php echo htmlspecialchars($vehicule->getMark())?>">
          <label for="marque du vehicule"></label>
        </div>
        <div class="input-field col s12 m6">
          <input name='model' id="modele du vehicule" type="text" class="validate" value="<?php echo htmlspecialchars($vehicule->getModel())?>">
          <label for="modele du vehicule"></label>
        </div>
      </div>

      <div class="row">
        <div class="input-field col s12 m8">
          <input name='registration' id="Immatriculation" type="text" class="validate" value="<?php echo htmlspecialchars($vehicule->getRegistration()) ?>">
          <label for="Immatriculation"></label>

          <div class="input-field col s12 m3">
            <select name="type">
              <option value="Voiture">Voiture</option>
              <option value="Moto">Moto</option>
              <option value="Camion">Camion</option>
            </select>
            <label>Type de vehicule</label>
          </div>

          <div class="input-field col s12 m3">
            <select name="door">
              <option value="0">0</option>
              <option value="1">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
              <option value="4">4</option>
              <option value="5">5</option>
            </select>
            <label>nombre de porte</label>
          </div>

          <div class="input-field col s12 m3">
            <select name="fuel">

              <option value="Essence">Essence</option>
              <option value="Diesel">Diesel</option>
              <option value="Gaz">Gaz</option>
              <option value="Electrique">Electrique</option>
            </select>
            <label>Type de vehicule</label>
          </div>

          <div class="input-field col s12 m3">
            <select name="wheel">

              <option value="2">2</option>
              <option value="3">3</option>
              <option value="4">4</option>
              <option value="5">5</option>
              <option value="6">6</option>
            </select>
            <label>Type de vehicule</label>
          </div>
        </div>

        <div class="input-field col s12 m4">
          <input name='price' id="Prix" type="number" class="validate" value="<?php echo htmlspecialchars($vehicule->getPrice()) ?>">
          <label for="Prix"></label>
        </div>
      </div>


       <div class="input-field col s12">
             <textarea name="detail"><?php echo htmlspecialchars($vehicule->getDetail())?></textarea>
         </div>


       <div class="card-action">
         <input class="waves-effect waves-light btn" type="submit" name="updateVehicule" value="valider">
       </div>
    </form>
  </div>

</section>

<?php require '../view/footer.php'; ?>
