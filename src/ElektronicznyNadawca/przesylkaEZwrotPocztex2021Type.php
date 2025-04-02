<?php

namespace App\ElektronicznyNadawca;

class przesylkaEZwrotPocztex2021Type extends przesylkaRejestrowanaType
{

    /**
     * @var numerNadaniaType $numerNadaniaZwrot
     */
    protected $numerNadaniaZwrot = null;

    /**
     * @var int $idSklepEZwrot
     */
    protected $idSklepEZwrot = null;

    /**
     * @var formatPocztex2021Type $format
     */
    protected $format = null;

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
     * @param formatPocztex2021Type $format
     */
    public function __construct($guid, $pakietGuid, $opakowanieGuid, $opis, $planowanaDataNadania, $numerNadania, $sygnatura, $terminSprawy, $rodzaj, $weryfikacjaPlatnosci, $numerNadaniaZwrot, $format)
    {
      parent::__construct($guid, $pakietGuid, $opakowanieGuid, $opis, $planowanaDataNadania, $numerNadania, $sygnatura, $terminSprawy, $rodzaj, $weryfikacjaPlatnosci);
      $this->numerNadaniaZwrot = $numerNadaniaZwrot;
      $this->format = $format;
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
     * @return \App\ElektronicznyNadawca\przesylkaEZwrotPocztex2021Type
     */
    public function setNumerNadaniaZwrot($numerNadaniaZwrot)
    {
      $this->numerNadaniaZwrot = $numerNadaniaZwrot;
      return $this;
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
     * @return \App\ElektronicznyNadawca\przesylkaEZwrotPocztex2021Type
     */
    public function setIdSklepEZwrot($idSklepEZwrot)
    {
      $this->idSklepEZwrot = $idSklepEZwrot;
      return $this;
    }

    /**
     * @return formatPocztex2021Type
     */
    public function getFormat()
    {
      return $this->format;
    }

    /**
     * @param formatPocztex2021Type $format
     * @return \App\ElektronicznyNadawca\przesylkaEZwrotPocztex2021Type
     */
    public function setFormat($format)
    {
      $this->format = $format;
      return $this;
    }

}
