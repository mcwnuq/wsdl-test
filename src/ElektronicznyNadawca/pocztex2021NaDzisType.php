<?php

namespace App\ElektronicznyNadawca;

class pocztex2021NaDzisType extends pocztex2021Type
{

    /**
     * @var subPocztex2021NaDzisType[] $subPrzesylka
     */
    protected $subPrzesylka = null;

    /**
     * @var int $odleglosc
     */
    protected $odleglosc = null;

    /**
     * @var obszarType $obszar
     */
    protected $obszar = null;

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
     */
    public function __construct($guid, $pakietGuid, $opakowanieGuid, $opis, $planowanaDataNadania, $numerNadania, $sygnatura, $terminSprawy, $rodzaj, $weryfikacjaPlatnosci)
    {
      parent::__construct($guid, $pakietGuid, $opakowanieGuid, $opis, $planowanaDataNadania, $numerNadania, $sygnatura, $terminSprawy, $rodzaj, $weryfikacjaPlatnosci);
    }

    /**
     * @return subPocztex2021NaDzisType[]
     */
    public function getSubPrzesylka()
    {
      return $this->subPrzesylka;
    }

    /**
     * @param subPocztex2021NaDzisType[] $subPrzesylka
     * @return \App\ElektronicznyNadawca\pocztex2021NaDzisType
     */
    public function setSubPrzesylka(array $subPrzesylka = null)
    {
      $this->subPrzesylka = $subPrzesylka;
      return $this;
    }

    /**
     * @return int
     */
    public function getOdleglosc()
    {
      return $this->odleglosc;
    }

    /**
     * @param int $odleglosc
     * @return \App\ElektronicznyNadawca\pocztex2021NaDzisType
     */
    public function setOdleglosc($odleglosc)
    {
      $this->odleglosc = $odleglosc;
      return $this;
    }

    /**
     * @return obszarType
     */
    public function getObszar()
    {
      return $this->obszar;
    }

    /**
     * @param obszarType $obszar
     * @return \App\ElektronicznyNadawca\pocztex2021NaDzisType
     */
    public function setObszar($obszar)
    {
      $this->obszar = $obszar;
      return $this;
    }

}
