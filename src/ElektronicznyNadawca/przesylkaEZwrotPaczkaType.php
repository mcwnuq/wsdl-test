<?php

namespace App\ElektronicznyNadawca;

class przesylkaEZwrotPaczkaType extends przesylkaRejestrowanaType
{

    /**
     * @var int $idSklepEZwrot
     */
    protected $idSklepEZwrot = null;

    /**
     * @var numerNadaniaType $numerNadaniaZwrot
     */
    protected $numerNadaniaZwrot = null;

    /**
     * @param guidType $guid
     * @param guidType $pakietGuid
     * @param guidType $opakowanieGuid
     * @param opisType $opis
     * @param date $planowanaDataNadania
     * @param numerNadaniaType $numerNadania
     * @param sygnaturaType $sygnatura
     * @param terminType $terminSprawy
     * @param rodzajType $rodzaj
     * @param boolean $weryfikacjaPlatnosci
     * @param numerNadaniaType $numerNadaniaZwrot
     */
    public function __construct($guid, $pakietGuid, $opakowanieGuid, $opis, $planowanaDataNadania, $numerNadania, $sygnatura, $terminSprawy, $rodzaj, $weryfikacjaPlatnosci, $numerNadaniaZwrot)
    {
      parent::__construct($guid, $pakietGuid, $opakowanieGuid, $opis, $planowanaDataNadania, $numerNadania, $sygnatura, $terminSprawy, $rodzaj, $weryfikacjaPlatnosci);
      $this->numerNadaniaZwrot = $numerNadaniaZwrot;
    }

    /**
     * @return int
     */
    public function getIdSklepEZwrot()
    {
      return $this->idSklepEZwrot;
    }

    /**
     * @param int $idSklepEZwrot
     * @return \App\ElektronicznyNadawca\przesylkaEZwrotPaczkaType
     */
    public function setIdSklepEZwrot($idSklepEZwrot)
    {
      $this->idSklepEZwrot = $idSklepEZwrot;
      return $this;
    }

    /**
     * @return numerNadaniaType
     */
    public function getNumerNadaniaZwrot()
    {
      return $this->numerNadaniaZwrot;
    }

    /**
     * @param numerNadaniaType $numerNadaniaZwrot
     * @return \App\ElektronicznyNadawca\przesylkaEZwrotPaczkaType
     */
    public function setNumerNadaniaZwrot($numerNadaniaZwrot)
    {
      $this->numerNadaniaZwrot = $numerNadaniaZwrot;
      return $this;
    }

}
