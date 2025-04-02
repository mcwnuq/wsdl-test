<?php

namespace App\ElektronicznyNadawca;

class eZwrotKartaType
{

    /**
     * @var int $idKarta
     */
    protected $idKarta = null;

    /**
     * @var int $idAdresKorespondencyjny
     */
    protected $idAdresKorespondencyjny = null;

    /**
     * @param int $idKarta
     * @param int $idAdresKorespondencyjny
     */
    public function __construct($idKarta, $idAdresKorespondencyjny)
    {
      $this->idKarta = $idKarta;
      $this->idAdresKorespondencyjny = $idAdresKorespondencyjny;
    }

    /**
     * @return int
     */
    public function getIdKarta()
    {
      return $this->idKarta;
    }

    /**
     * @param int $idKarta
     * @return \App\ElektronicznyNadawca\eZwrotKartaType
     */
    public function setIdKarta($idKarta)
    {
      $this->idKarta = $idKarta;
      return $this;
    }

    /**
     * @return int
     */
    public function getIdAdresKorespondencyjny()
    {
      return $this->idAdresKorespondencyjny;
    }

    /**
     * @param int $idAdresKorespondencyjny
     * @return \App\ElektronicznyNadawca\eZwrotKartaType
     */
    public function setIdAdresKorespondencyjny($idAdresKorespondencyjny)
    {
      $this->idAdresKorespondencyjny = $idAdresKorespondencyjny;
      return $this;
    }

}
