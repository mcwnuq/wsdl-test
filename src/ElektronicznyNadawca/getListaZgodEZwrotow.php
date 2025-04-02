<?php

namespace App\ElektronicznyNadawca;

class getListaZgodEZwrotow
{

    /**
     * @var statusZgodyEZwrotNameType $status
     */
    protected $status = null;

    /**
     * @var int $idShop
     */
    protected $idShop = null;

    /**
     * @param statusZgodyEZwrotNameType $status
     * @param int $idShop
     */
    public function __construct($status, $idShop)
    {
      $this->status = $status;
      $this->idShop = $idShop;
    }

    /**
     * @return statusZgodyEZwrotNameType
     */
    public function getStatus()
    {
      return $this->status;
    }

    /**
     * @param statusZgodyEZwrotNameType $status
     * @return \App\ElektronicznyNadawca\getListaZgodEZwrotow
     */
    public function setStatus($status)
    {
      $this->status = $status;
      return $this;
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
     * @return \App\ElektronicznyNadawca\getListaZgodEZwrotow
     */
    public function setIdShop($idShop)
    {
      $this->idShop = $idShop;
      return $this;
    }

}
