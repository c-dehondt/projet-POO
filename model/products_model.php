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

    // tous les vehicule
    public function getVehicules()
    {
        $vehicule=[];
        $request = $this->bdd->query('SELECT * FROM vehicule');

        while ($donnees = $request->fetch(PDO::FETCH_ASSOC)) {
            $vehicule[] = new vehicule($donnees);
        }

        return $vehicule;
    }

    public function getIdvehicule($idVehicule)
    {
        $request = $this->bdd->prepare('SELECT * FROM vehicule WHERE idVehicule = :idVehicule');
        $request-> execute(array('idVehicule' => $idVehicule));

        $idVehicule=$request->fetch();

        return $idVehicule;
    }

    public function setBdd($bdd)
    {
        $this->bdd=$bdd;
    }
}

    // public function add(vehicule $vehicule)
    // {
    //     $bdd=getdatabase();
    //     // Préparation de la requête d'insertion.
    //
    // // Assignation des valeurs pour le nom, la force, les dégâts, l'expérience et le niveau du personnage.
    //
    // // Exécution de la requête.
    // }
    //
    //
    // public function delete(vehicule $vehicule)
    // {
    //     $bdd=getdatabase();
    //     // Exécute une requête de type DELETE.
    // }
    //
    //
    //
    //
    //
    //
    // public function update(vehicule $vehicule)
    // {
    //     $bdd=getdatabase();
    //     // Prépare une requête de type UPDATE.
    //
    // // Assignation des valeurs à la requête.
    //
    // // Exécution de la requête.
    // }
