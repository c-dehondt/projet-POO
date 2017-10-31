<?php
/**
 *
 */
abstract class vehicule
{
    protected $idVehicule;
    protected $image;
    protected $mark;
    protected $model;
    protected $registration;
    protected $price;
    protected $type;
    protected $door;
    protected $wheel;
    protected $fuel;
    protected $detail;

    public function __construct(array $vehicules)
    {
      $this->hydrate($vehicules);
      $this->type = static::class;
    }

    public function hydrate(array $vehicules)
    {
        foreach ($vehicules as $key => $vehicule) {
            $method = 'set'.ucfirst($key);
            if (method_exists($this, $method)) {
                $this->$method($vehicule);
            }
        }
    }

// setter
    public function setIdVehicule($idVehicule)
    {
        $this->idVehicule=$idVehicule;
    }

    public function setImage($image)
    {
        $this->image=$image;
    }

    public function setMark($mark)
    {

        $this->mark=$mark;
    }

    public function setModel($model)
    {
      $this->model=$model;
    }

    public function setRegistration($registration)
    {
        $this->registration=$registration;
    }

    public function setPrice($price)
    {
        $this->price=$price;
    }

    public function setType($type)
    {
      $this->type=$type;
    }

    public function setDoor($door)
    {
        $this->door=$door;
    }

    public function setWheel($wheel)
    {
        $this->wheel=$wheel;
    }

    public function setFuel($fuel)
    {
        $this->fuel=$fuel;
    }

    public function setDetail($detail)
    {
        $this->detail=$detail;
    }


    // getter
    public function getIdVehicule()
    {
      return $this->idVehicule;
    }

    public function getImage()
    {
        return $this->image;
    }

    public function getMark()
    {
      return $this->mark;
    }

    public function getModel()
    {
      return $this->model;
    }


    public function getRegistration()
    {
      return $this->registration;
    }

    public function getPrice()
    {
      return $this->price;
    }

    public function getType()
    {
      return $this->type;
    }

    public function getDoor()
    {
      return $this->door;
    }

    public function getWheel()
    {
      return $this->wheel;
    }

    public function getFuel()
    {
      return $this->fuel;
    }

    public function getDetail()
    {
      return $this->detail;
    }
}

  ?>
