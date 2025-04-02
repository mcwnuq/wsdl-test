<?php

namespace App\ElektronicznyNadawca;

class paczkaZagranicznaPremiumType extends przesylkaRejestrowanaType
{

    /**
     * @var zwrotType $zwrot
     */
    protected $zwrot = null;

    /**
     * @var boolean $posteRestante
     */
    protected $posteRestante = null;

    /**
     * @var masaType $masa
     */
    protected $masa = null;

    /**
     * @var deklaracjaCelna2Type $deklaracjaCelna2
     */
    protected $deklaracjaCelna2 = null;

    /**
     * @var sposobNadaniaInterconnectType $sposobNadaniaInterconnect
     */
    protected $sposobNadaniaInterconnect = null;

    /**
     * @var potwierdzenieDoreczeniaType $potwierdzenieDoreczenia
     */
    protected $potwierdzenieDoreczenia = null;

    /**
     * @var ubezpieczenieType $ubezpieczenie
     */
    protected $ubezpieczenie = null;

    /**
     * @var numerPrzesylkiKlientaType $numerPrzesylkiKlienta
     */
    protected $numerPrzesylkiKlienta = null;

    /**
     * @var sposobDoreczeniaType $sposobDoreczenia
     */
    protected $sposobDoreczenia = null;

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
     * @return zwrotType
     */
    public function getZwrot()
    {
      return $this->zwrot;
    }

    /**
     * @param zwrotType $zwrot
     * @return \App\ElektronicznyNadawca\paczkaZagranicznaPremiumType
     */
    public function setZwrot($zwrot)
    {
      $this->zwrot = $zwrot;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getPosteRestante()
    {
      return $this->posteRestante;
    }

    /**
     * @param boolean $posteRestante
     * @return \App\ElektronicznyNadawca\paczkaZagranicznaPremiumType
     */
    public function setPosteRestante($posteRestante)
    {
      $this->posteRestante = $posteRestante;
      return $this;
    }

    /**
     * @return masaType
     */
    public function getMasa()
    {
      return $this->masa;
    }

    /**
     * @param masaType $masa
     * @return \App\ElektronicznyNadawca\paczkaZagranicznaPremiumType
     */
    public function setMasa($masa)
    {
      $this->masa = $masa;
      return $this;
    }

    /**
     * @return deklaracjaCelna2Type
     */
    public function getDeklaracjaCelna2()
    {
      return $this->deklaracjaCelna2;
    }

    /**
     * @param deklaracjaCelna2Type $deklaracjaCelna2
     * @return \App\ElektronicznyNadawca\paczkaZagranicznaPremiumType
     */
    public function setDeklaracjaCelna2($deklaracjaCelna2)
    {
      $this->deklaracjaCelna2 = $deklaracjaCelna2;
      return $this;
    }

    /**
     * @return sposobNadaniaInterconnectType
     */
    public function getSposobNadaniaInterconnect()
    {
      return $this->sposobNadaniaInterconnect;
    }

    /**
     * @param sposobNadaniaInterconnectType $sposobNadaniaInterconnect
     * @return \App\ElektronicznyNadawca\paczkaZagranicznaPremiumType
     */
    public function setSposobNadaniaInterconnect($sposobNadaniaInterconnect)
    {
      $this->sposobNadaniaInterconnect = $sposobNadaniaInterconnect;
      return $this;
    }

    /**
     * @return potwierdzenieDoreczeniaType
     */
    public function getPotwierdzenieDoreczenia()
    {
      return $this->potwierdzenieDoreczenia;
    }

    /**
     * @param potwierdzenieDoreczeniaType $potwierdzenieDoreczenia
     * @return \App\ElektronicznyNadawca\paczkaZagranicznaPremiumType
     */
    public function setPotwierdzenieDoreczenia($potwierdzenieDoreczenia)
    {
      $this->potwierdzenieDoreczenia = $potwierdzenieDoreczenia;
      return $this;
    }

    /**
     * @return ubezpieczenieType
     */
    public function getUbezpieczenie()
    {
      return $this->ubezpieczenie;
    }

    /**
     * @param ubezpieczenieType $ubezpieczenie
     * @return \App\ElektronicznyNadawca\paczkaZagranicznaPremiumType
     */
    public function setUbezpieczenie($ubezpieczenie)
    {
      $this->ubezpieczenie = $ubezpieczenie;
      return $this;
    }

    /**
     * @return numerPrzesylkiKlientaType
     */
    public function getNumerPrzesylkiKlienta()
    {
      return $this->numerPrzesylkiKlienta;
    }

    /**
     * @param numerPrzesylkiKlientaType $numerPrzesylkiKlienta
     * @return \App\ElektronicznyNadawca\paczkaZagranicznaPremiumType
     */
    public function setNumerPrzesylkiKlienta($numerPrzesylkiKlienta)
    {
      $this->numerPrzesylkiKlienta = $numerPrzesylkiKlienta;
      return $this;
    }

    /**
     * @return sposobDoreczeniaType
     */
    public function getSposobDoreczenia()
    {
      return $this->sposobDoreczenia;
    }

    /**
     * @param sposobDoreczeniaType $sposobDoreczenia
     * @return \App\ElektronicznyNadawca\paczkaZagranicznaPremiumType
     */
    public function setSposobDoreczenia($sposobDoreczenia)
    {
      $this->sposobDoreczenia = $sposobDoreczenia;
      return $this;
    }

}
