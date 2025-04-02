<?php

namespace App\ElektronicznyNadawca;

class createShopEZwrotyResponse
{

    /**
     * @var int $idShop
     */
    protected $idShop = null;

    /**
     * @var errorType $error
     */
    protected $error = null;

    /**
     * @param int $idShop
     * @param errorType $error
     */
    public function __construct($idShop, $error)
    {
      $this->idShop = $idShop;
      $this->error = $error;
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
     * @return \App\ElektronicznyNadawca\createShopEZwrotyResponse
     */
    public function setIdShop($idShop)
    {
      $this->idShop = $idShop;
      return $this;
    }

    /**
     * @return errorType
     */
    public function getError()
    {
      return $this->error;
    }

    /**
     * @param errorType $error
     * @return \App\ElektronicznyNadawca\createShopEZwrotyResponse
     */
    public function setError($error)
    {
      $this->error = $error;
      return $this;
    }

}
