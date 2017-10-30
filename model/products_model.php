<?php

/**
 *
 */
class vehiculeManager
{
    protected $bdd;


    public function __construct($bdd)
    {
        $this->setBdd($bdd);
    }

    public function setBdd($bdd)
    {
      $this->bdd=$bdd;
    }

    // tous les vehicule
    public function getVehicules()
    {
        $vehicule=[];
        $request = $this->bdd->query('SELECT * FROM vehicule INNER JOIN image ON vehicule.idVehicule = image.idVehicule');

        while ($donnees = $request->fetch(PDO::FETCH_ASSOC)) {
          //   switch ($donnees['type']) {
          // case 'voiture':
          //   $donnees = new voiture;
          //   break;
          //
          // case 'moto':
          // $donnees = new moto;
          //   break;
          //
          //   case 'camion':
          //   $donnees = new camion;
          //     break;

          $vehicule[] = new $donnees['type']($donnees);
          }

        return $vehicule;

    }

    public function addImage($idVehicule, $FILES){
    $request=$this->bdd->prepare ("INSERT INTO image (idVehicule, image) VALUES (:idVehicule, :FILES)");
    $request->execute([
      'idVehicule'=> $idVehicule,
      'FILES' => $FILES['monfichier']['name']]);
    }

    public function updateImage($idVehicule, $FILES){
    $request=$this->bdd->prepare ("UPDATE image SET image= :FILES WHERE idVehicule =:idVehicule");
    $request->execute([
      'idVehicule'=> $idVehicule,
      'FILES' => $FILES['monfichier']['name']]);
    }


    public function getIdvehicule($idVehicule)
    {
        $request = $this->bdd->prepare('SELECT * FROM vehicule WHERE idVehicule = :idVehicule');
        $request->execute(array('idVehicule' => $idVehicule ));
        $donnees = $request->fetch(PDO::FETCH_ASSOC);
        $vehicule = new $donnees['type']($donnees);
        return $vehicule;
    }

    public function deleteVehicule($idVehicule)
    {

      $request=$this->bdd->prepare('DELETE FROM vehicule WHERE idVehicule = :idVehicule');
      $request->execute(array('idVehicule'=> $idVehicule));
    }

    public function addVehicule(
        $mark,
        $model,
        $registration,
        $price,
        $type,
        $door,
        $wheel,
        $fuel,
        $detail)
        {

        $request = $this->bdd->prepare('INSERT INTO vehicule (mark, model, registration, price, type, door, wheel, fuel, detail)
                                                        VALUES(:mark, :model, :registration, :price, :type, :door, :wheel, :fuel, :detail)');
        $request->execute(array(
        'mark'=>$mark,
        'model'=>$model,
        'registration'=>$registration,
        'price'=>$price,
        'type'=>$type,
        'door'=>$door,
        'wheel'=>$wheel,
        'fuel'=>$fuel,
        'detail'=>$detail
        ));
    }

    public function updateVehicule(
      $idVehicule,
      $mark,
      $model,
      $registration,
      $price,
      $type,
      $door,
      $wheel,
      $fuel,
      $detail)
      {

      $request = $this->bdd->prepare('UPDATE vehicule SET mark=:mark, model=:model, registration=:registration, price=:price, type=:type, door=:door, wheel=:wheel, fuel=:fuel, detail=:detail WHERE idVehicule = :idVehicule');

      $request->execute(array(
      'idVehicule'=>$idVehicule,
      'mark'=>$mark,
      'model'=>$model,
      'registration'=>$registration,
      'price'=>$price,
      'type'=>$type,
      'door'=>$door,
      'wheel'=>$wheel,
      'fuel'=>$fuel,
      'detail'=>$detail
      ));
}

public function existRegistration($registration)
    {
        $reponse= $this->bdd->prepare('SELECT COUNT(*) FROM vehicule WHERE registration = :registration');
        $reponse->execute([':immatriculation' => $registration]);
        return (bool) $reponse->fetchColumn();
    }
}
