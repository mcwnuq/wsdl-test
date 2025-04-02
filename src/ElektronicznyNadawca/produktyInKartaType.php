<?php

namespace App\ElektronicznyNadawca;

class produktyInKartaType
{

    /**
     * @var produktInKartaType[] $produktInKarta
     */
    protected $produktInKarta = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return produktInKartaType[]
     */
    public function getProduktInKarta()
    {
      return $this->produktInKarta;
    }

    /**
     * @param produktInKartaType[] $produktInKarta
     * @return \App\ElektronicznyNadawca\produktyInKartaType
     */
    public function setProduktInKarta(array $produktInKarta = null)
    {
      $this->produktInKarta = $produktInKarta;
      return $this;
    }

}
