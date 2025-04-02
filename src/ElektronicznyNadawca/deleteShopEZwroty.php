<?php

namespace App\ElektronicznyNadawca;

class deleteShopEZwroty
{

    /**
     * @var int $idShop
     */
    protected $idShop = null;

    /**
     * @param int $idShop
     */
    public function __construct($idShop)
    {
      $this->idShop = $idShop;
    }

    /**
     * @return int
     */
    public function getIdShop()
    {
      return $this->idShop;
    }

    /**
     * @param int $idShop
     * @return \App\ElektronicznyNadawca\deleteShopEZwroty
     */
    public function setIdShop($idShop)
    {
      $this->idShop = $idShop;
      return $this;
    }

}
