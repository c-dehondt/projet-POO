<?php require '../view/header.php'; ?>

<section class="container">
  <h2>Nouveau vehicule</h2>
  <div class="row">
    <form action="../controller/addVehicule.php" method="post" class="col s12">
      <div class="row">
        <div class="input-field col s12 m6">
          <input name='mark' id="marque du vehicule" type="text" class="validate">
          <label for="marque du vehicule">marque du vehicule</label>
        </div>
        <div class="input-field col s12 m6">
          <input name='model' id="modele du vehicule" type="text" class="validate">
          <label for="modele du vehicule">modele du vehicule</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12 m8">
          <input name='registration' id="Immatriculation" type="text" class="validate">
          <label for="Immatriculation">Immatriculation</label>
          <small>Entrer immatriculation de type:HY-958-GT</small>
        </div>

        <div class="input-field col s12 m4">
          <input name='price' id="Prix" type="number" class="validate">
          <label for="Prix">Prix</label>
          <small>Entrer un prix de type chiffre:15899</small>
        </div>
      </div>

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
   <option value="" disabled selected>Carburant</option>
   <option value="Essence">Essence</option>
   <option value="Diesel">Diesel</option>
   <option value="Gaz">Gaz</option>
   <option value="Electrique">Electrique</option>
 </select>
 <label>Type de vehicule</label>
</div>

      <div class="input-field col s12 m3">
     <select name="wheel">
       <option value="" disabled selected>nombre de roue</option>
       <option value="1">2</option>
       <option value="2">3</option>
       <option value="3">4</option>
       <option value="4">5</option>
       <option value="5">6</option>
     </select>
     <label>Type de vehicule</label>
    </div>

    <div class="input-field col s12">
          <i class="material-icons prefix">mode_edit</i>
          <textarea name="detail" id="detail " class="materialize-textarea"></textarea>
          <label for="detail">detail vehicule</label>
        </div>

        <p><?php echo $erreur ?></p>


      <div class="card-action">
        <input class="waves-effect waves-light btn" type="submit" name="addVehicule" value="valider">
      </div>
    </form>
  </div>

</section>

<?php  require '../view/footer.php';?>
