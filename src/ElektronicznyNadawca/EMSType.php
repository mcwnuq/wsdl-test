<?php

namespace App\ElektronicznyNadawca;

class EMSType extends przesylkaRejestrowanaType
{

    /**
     * @var ubezpieczenieType $ubezpieczenie
     */
    protected $ubezpieczenie = null;

    /**
     * @var deklaracjaCelnaType $deklaracjaCelna
     */
    protected $deklaracjaCelna = null;

    /**
     * @var potwierdzenieDoreczeniaType $potwierdzenieDoreczenia
     */
    protected $potwierdzenieDoreczenia = null;

    /**
     * @var deklaracjaCelna2Type $deklaracjaCelna2
     */
    protected $deklaracjaCelna2 = null;

    /**
     * @var sposobNadaniaInterconnectType $sposobNadaniaInterconnect
     */
    protected $sposobNadaniaInterconnect = null;

    /**
     * @var sposobDoreczeniaType $sposobDoreczenia
     */
    protected $sposobDoreczenia = null;

    /**
     * @var EMSTypOpakowaniaType $typOpakowania
     */
    protected $typOpakowania = null;

    /**
     * @var masaType $masa
     */
    protected $masa = null;

    /**
     * @var boolean $zalaczoneDokumenty
     */
    protected $zalaczoneDokumenty = null;

    /**
     * @var string $numerPrzesylkiKlienta
     */
    protected $numerPrzesylkiKlienta = null;

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
     * @param EMSTypOpakowaniaType $typOpakowania
     * @param masaType $masa
     * @param boolean $zalaczoneDokumenty
     * @param string $numerPrzesylkiKlienta
     */
    public function __construct($guid, $pakietGuid, $opakowanieGuid, $opis, $planowanaDataNadania, $numerNadania, $sygnatura, $terminSprawy, $rodzaj, $weryfikacjaPlatnosci, $typOpakowania, $masa, $zalaczoneDokumenty, $numerPrzesylkiKlienta)
    {
      parent::__construct($guid, $pakietGuid, $opakowanieGuid, $opis, $planowanaDataNadania, $numerNadania, $sygnatura, $terminSprawy, $rodzaj, $weryfikacjaPlatnosci);
      $this->typOpakowania = $typOpakowania;
      $this->masa = $masa;
      $this->zalaczoneDokumenty = $zalaczoneDokumenty;
      $this->numerPrzesylkiKlienta = $numerPrzesylkiKlienta;
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
     * @return \App\ElektronicznyNadawca\EMSType
     */
    public function setUbezpieczenie($ubezpieczenie)
    {
      $this->ubezpieczenie = $ubezpieczenie;
      return $this;
    }

    /**
     * @return deklaracjaCelnaType
     */
    public function getDeklaracjaCelna()
    {
      return $this->deklaracjaCelna;
    }

    /**
     * @param deklaracjaCelnaType $deklaracjaCelna
     * @return \App\ElektronicznyNadawca\EMSType
     */
    public function setDeklaracjaCelna($deklaracjaCelna)
    {
      $this->deklaracjaCelna = $deklaracjaCelna;
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
     * @return \App\ElektronicznyNadawca\EMSType
     */
    public function setPotwierdzenieDoreczenia($potwierdzenieDoreczenia)
    {
      $this->potwierdzenieDoreczenia = $potwierdzenieDoreczenia;
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
     * @return \App\ElektronicznyNadawca\EMSType
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
     * @return \App\ElektronicznyNadawca\EMSType
     */
    public function setSposobNadaniaInterconnect($sposobNadaniaInterconnect)
    {
      $this->sposobNadaniaInterconnect = $sposobNadaniaInterconnect;
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
     * @return \App\ElektronicznyNadawca\EMSType
     */
    public function setSposobDoreczenia($sposobDoreczenia)
    {
      $this->sposobDoreczenia = $sposobDoreczenia;
      return $this;
    }

    /**
     * @return EMSTypOpakowaniaType
     */
    public function getTypOpakowania()
    {
      return $this->typOpakowania;
    }

    /**
     * @param EMSTypOpakowaniaType $typOpakowania
     * @return \App\ElektronicznyNadawca\EMSType
     */
    public function setTypOpakowania($typOpakowania)
    {
      $this->typOpakowania = $typOpakowania;
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
     * @return \App\ElektronicznyNadawca\EMSType
     */
    public function setMasa($masa)
    {
      $this->masa = $masa;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getZalaczoneDokumenty()
    {
      return $this->zalaczoneDokumenty;
    }

    /**
     * @param boolean $zalaczoneDokumenty
     * @return \App\ElektronicznyNadawca\EMSType
     */
    public function setZalaczoneDokumenty($zalaczoneDokumenty)
    {
      $this->zalaczoneDokumenty = $zalaczoneDokumenty;
      return $this;
    }

    /**
     * @return string
     */
    public function getNumerPrzesylkiKlienta()
    {
      return $this->numerPrzesylkiKlienta;
    }

    /**
     * @param string $numerPrzesylkiKlienta
     * @return \App\ElektronicznyNadawca\EMSType
     */
    public function setNumerPrzesylkiKlienta($numerPrzesylkiKlienta)
    {
      $this->numerPrzesylkiKlienta = $numerPrzesylkiKlienta;
      return $this;
    }

}
