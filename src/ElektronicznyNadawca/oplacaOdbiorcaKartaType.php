<?php

namespace App\ElektronicznyNadawca;

class oplacaOdbiorcaKartaType
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
     */
    public function __construct($idKarta)
    {
      $this->idKarta = $idKarta;
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
     * @return \App\ElektronicznyNadawca\oplacaOdbiorcaKartaType
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
     * @return \App\ElektronicznyNadawca\oplacaOdbiorcaKartaType
     */
    public function setIdAdresKorespondencyjny($idAdresKorespondencyjny)
    {
      $this->idAdresKorespondencyjny = $idAdresKorespondencyjny;
      return $this;
    }

}
