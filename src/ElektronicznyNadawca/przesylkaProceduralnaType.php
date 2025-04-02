<?php

namespace App\ElektronicznyNadawca;

class przesylkaProceduralnaType extends przesylkaRejestrowanaType
{

    /**
     * @var ubezpieczenieType $ubezpieczenie
     */
    protected $ubezpieczenie = null;

    /**
     * @var EPOType $epo
     */
    protected $epo = null;

    /**
     * @var urzadWydaniaEPrzesylkiType $urzadWydaniaEPrzesylki
     */
    protected $urzadWydaniaEPrzesylki = null;

    /**
     * @var pobranieType $pobranie
     */
    protected $pobranie = null;

    /**
     * @var serwisPrzesylkaProceduralnaType $serwis
     */
    protected $serwis = null;

    /**
     * @var string $numerNadaniaPowrot1
     */
    protected $numerNadaniaPowrot1 = null;

    /**
     * @var string $numerNadaniaPowrot2
     */
    protected $numerNadaniaPowrot2 = null;

    /**
     * @var int $idPrzesylkaZawartosc
     */
    protected $idPrzesylkaZawartosc = null;

    /**
     * @var int $idListaCzynnosci
     */
    protected $idListaCzynnosci = null;

    /**
     * @var masaType $masa
     */
    protected $masa = null;

    /**
     * @var opakowaniePrzesylkaProceduralnaType $opakowanie
     */
    protected $opakowanie = null;

    /**
     * @var string $numerPrzesylkiKlienta
     */
    protected $numerPrzesylkiKlienta = null;

    /**
     * @var wartoscType $wartosc
     */
    protected $wartosc = null;

    /**
     * @var int $idAdresPrzesylkaPowrot
     */
    protected $idAdresPrzesylkaPowrot = null;

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
     * @param serwisPrzesylkaProceduralnaType $serwis
     * @param string $numerNadaniaPowrot1
     * @param string $numerNadaniaPowrot2
     * @param int $idPrzesylkaZawartosc
     * @param int $idListaCzynnosci
     * @param masaType $masa
     * @param opakowaniePrzesylkaProceduralnaType $opakowanie
     * @param string $numerPrzesylkiKlienta
     * @param wartoscType $wartosc
     * @param int $idAdresPrzesylkaPowrot
     */
    public function __construct($guid, $pakietGuid, $opakowanieGuid, $opis, $planowanaDataNadania, $numerNadania, $sygnatura, $terminSprawy, $rodzaj, $weryfikacjaPlatnosci, $serwis, $numerNadaniaPowrot1, $numerNadaniaPowrot2, $idPrzesylkaZawartosc, $idListaCzynnosci, $masa, $opakowanie, $numerPrzesylkiKlienta, $wartosc, $idAdresPrzesylkaPowrot)
    {
      parent::__construct($guid, $pakietGuid, $opakowanieGuid, $opis, $planowanaDataNadania, $numerNadania, $sygnatura, $terminSprawy, $rodzaj, $weryfikacjaPlatnosci);
      $this->serwis = $serwis;
      $this->numerNadaniaPowrot1 = $numerNadaniaPowrot1;
      $this->numerNadaniaPowrot2 = $numerNadaniaPowrot2;
      $this->idPrzesylkaZawartosc = $idPrzesylkaZawartosc;
      $this->idListaCzynnosci = $idListaCzynnosci;
      $this->masa = $masa;
      $this->opakowanie = $opakowanie;
      $this->numerPrzesylkiKlienta = $numerPrzesylkiKlienta;
      $this->wartosc = $wartosc;
      $this->idAdresPrzesylkaPowrot = $idAdresPrzesylkaPowrot;
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
     * @return \App\ElektronicznyNadawca\przesylkaProceduralnaType
     */
    public function setUbezpieczenie($ubezpieczenie)
    {
      $this->ubezpieczenie = $ubezpieczenie;
      return $this;
    }

    /**
     * @return EPOType
     */
    public function getEpo()
    {
      return $this->epo;
    }

    /**
     * @param EPOType $epo
     * @return \App\ElektronicznyNadawca\przesylkaProceduralnaType
     */
    public function setEpo($epo)
    {
      $this->epo = $epo;
      return $this;
    }

    /**
     * @return urzadWydaniaEPrzesylkiType
     */
    public function getUrzadWydaniaEPrzesylki()
    {
      return $this->urzadWydaniaEPrzesylki;
    }

    /**
     * @param urzadWydaniaEPrzesylkiType $urzadWydaniaEPrzesylki
     * @return \App\ElektronicznyNadawca\przesylkaProceduralnaType
     */
    public function setUrzadWydaniaEPrzesylki($urzadWydaniaEPrzesylki)
    {
      $this->urzadWydaniaEPrzesylki = $urzadWydaniaEPrzesylki;
      return $this;
    }

    /**
     * @return pobranieType
     */
    public function getPobranie()
    {
      return $this->pobranie;
    }

    /**
     * @param pobranieType $pobranie
     * @return \App\ElektronicznyNadawca\przesylkaProceduralnaType
     */
    public function setPobranie($pobranie)
    {
      $this->pobranie = $pobranie;
      return $this;
    }

    /**
     * @return serwisPrzesylkaProceduralnaType
     */
    public function getSerwis()
    {
      return $this->serwis;
    }

    /**
     * @param serwisPrzesylkaProceduralnaType $serwis
     * @return \App\ElektronicznyNadawca\przesylkaProceduralnaType
     */
    public function setSerwis($serwis)
    {
      $this->serwis = $serwis;
      return $this;
    }

    /**
     * @return string
     */
    public function getNumerNadaniaPowrot1()
    {
      return $this->numerNadaniaPowrot1;
    }

    /**
     * @param string $numerNadaniaPowrot1
     * @return \App\ElektronicznyNadawca\przesylkaProceduralnaType
     */
    public function setNumerNadaniaPowrot1($numerNadaniaPowrot1)
    {
      $this->numerNadaniaPowrot1 = $numerNadaniaPowrot1;
      return $this;
    }

    /**
     * @return string
     */
    public function getNumerNadaniaPowrot2()
    {
      return $this->numerNadaniaPowrot2;
    }

    /**
     * @param string $numerNadaniaPowrot2
     * @return \App\ElektronicznyNadawca\przesylkaProceduralnaType
     */
    public function setNumerNadaniaPowrot2($numerNadaniaPowrot2)
    {
      $this->numerNadaniaPowrot2 = $numerNadaniaPowrot2;
      return $this;
    }

    /**
     * @return int
     */
    public function getIdPrzesylkaZawartosc()
    {
      return $this->idPrzesylkaZawartosc;
    }

    /**
     * @param int $idPrzesylkaZawartosc
     * @return \App\ElektronicznyNadawca\przesylkaProceduralnaType
     */
    public function setIdPrzesylkaZawartosc($idPrzesylkaZawartosc)
    {
      $this->idPrzesylkaZawartosc = $idPrzesylkaZawartosc;
      return $this;
    }

    /**
     * @return int
     */
    public function getIdListaCzynnosci()
    {
      return $this->idListaCzynnosci;
    }

    /**
     * @param int $idListaCzynnosci
     * @return \App\ElektronicznyNadawca\przesylkaProceduralnaType
     */
    public function setIdListaCzynnosci($idListaCzynnosci)
    {
      $this->idListaCzynnosci = $idListaCzynnosci;
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
     * @return \App\ElektronicznyNadawca\przesylkaProceduralnaType
     */
    public function setMasa($masa)
    {
      $this->masa = $masa;
      return $this;
    }

    /**
     * @return opakowaniePrzesylkaProceduralnaType
     */
    public function getOpakowanie()
    {
      return $this->opakowanie;
    }

    /**
     * @param opakowaniePrzesylkaProceduralnaType $opakowanie
     * @return \App\ElektronicznyNadawca\przesylkaProceduralnaType
     */
    public function setOpakowanie($opakowanie)
    {
      $this->opakowanie = $opakowanie;
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
     * @return \App\ElektronicznyNadawca\przesylkaProceduralnaType
     */
    public function setNumerPrzesylkiKlienta($numerPrzesylkiKlienta)
    {
      $this->numerPrzesylkiKlienta = $numerPrzesylkiKlienta;
      return $this;
    }

    /**
     * @return wartoscType
     */
    public function getWartosc()
    {
      return $this->wartosc;
    }

    /**
     * @param wartoscType $wartosc
     * @return \App\ElektronicznyNadawca\przesylkaProceduralnaType
     */
    public function setWartosc($wartosc)
    {
      $this->wartosc = $wartosc;
      return $this;
    }

    /**
     * @return int
     */
    public function getIdAdresPrzesylkaPowrot()
    {
      return $this->idAdresPrzesylkaPowrot;
    }

    /**
     * @param int $idAdresPrzesylkaPowrot
     * @return \App\ElektronicznyNadawca\przesylkaProceduralnaType
     */
    public function setIdAdresPrzesylkaPowrot($idAdresPrzesylkaPowrot)
    {
      $this->idAdresPrzesylkaPowrot = $idAdresPrzesylkaPowrot;
      return $this;
    }

}
