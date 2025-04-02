<?php

namespace App\ElektronicznyNadawca;

class paczkaZagranicznaType extends przesylkaRejestrowanaType
{

    /**
     * @var zwrotType $zwrot
     */
    protected $zwrot = null;

    /**
     * @var deklaracjaCelnaType $deklaracjaCelna
     */
    protected $deklaracjaCelna = null;

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
     * @var boolean $posteRestante
     */
    protected $posteRestante = null;

    /**
     * @var masaType $masa
     */
    protected $masa = null;

    /**
     * @var wartoscType $wartosc
     */
    protected $wartosc = null;

    /**
     * @var kategoriaType $kategoria
     */
    protected $kategoria = null;

    /**
     * @var iloscPotwierdzenOdbioruType $iloscPotwierdzenOdbioru
     */
    protected $iloscPotwierdzenOdbioru = null;

    /**
     * @var boolean $utrudnionaManipulacja
     */
    protected $utrudnionaManipulacja = null;

    /**
     * @var boolean $ekspres
     */
    protected $ekspres = null;

    /**
     * @var string $numerReferencyjnyCelny
     */
    protected $numerReferencyjnyCelny = null;

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
     * @param boolean $posteRestante
     * @param masaType $masa
     * @param wartoscType $wartosc
     * @param kategoriaType $kategoria
     * @param iloscPotwierdzenOdbioruType $iloscPotwierdzenOdbioru
     * @param boolean $utrudnionaManipulacja
     * @param boolean $ekspres
     * @param string $numerReferencyjnyCelny
     * @param string $numerPrzesylkiKlienta
     */
    public function __construct($guid, $pakietGuid, $opakowanieGuid, $opis, $planowanaDataNadania, $numerNadania, $sygnatura, $terminSprawy, $rodzaj, $weryfikacjaPlatnosci, $posteRestante, $masa, $wartosc, $kategoria, $iloscPotwierdzenOdbioru, $utrudnionaManipulacja, $ekspres, $numerReferencyjnyCelny, $numerPrzesylkiKlienta)
    {
      parent::__construct($guid, $pakietGuid, $opakowanieGuid, $opis, $planowanaDataNadania, $numerNadania, $sygnatura, $terminSprawy, $rodzaj, $weryfikacjaPlatnosci);
      $this->posteRestante = $posteRestante;
      $this->masa = $masa;
      $this->wartosc = $wartosc;
      $this->kategoria = $kategoria;
      $this->iloscPotwierdzenOdbioru = $iloscPotwierdzenOdbioru;
      $this->utrudnionaManipulacja = $utrudnionaManipulacja;
      $this->ekspres = $ekspres;
      $this->numerReferencyjnyCelny = $numerReferencyjnyCelny;
      $this->numerPrzesylkiKlienta = $numerPrzesylkiKlienta;
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
     * @return \App\ElektronicznyNadawca\paczkaZagranicznaType
     */
    public function setZwrot($zwrot)
    {
      $this->zwrot = $zwrot;
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
     * @return \App\ElektronicznyNadawca\paczkaZagranicznaType
     */
    public function setDeklaracjaCelna($deklaracjaCelna)
    {
      $this->deklaracjaCelna = $deklaracjaCelna;
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
     * @return \App\ElektronicznyNadawca\paczkaZagranicznaType
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
     * @return \App\ElektronicznyNadawca\paczkaZagranicznaType
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
     * @return \App\ElektronicznyNadawca\paczkaZagranicznaType
     */
    public function setSposobDoreczenia($sposobDoreczenia)
    {
      $this->sposobDoreczenia = $sposobDoreczenia;
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
     * @return \App\ElektronicznyNadawca\paczkaZagranicznaType
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
     * @return \App\ElektronicznyNadawca\paczkaZagranicznaType
     */
    public function setMasa($masa)
    {
      $this->masa = $masa;
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
     * @return \App\ElektronicznyNadawca\paczkaZagranicznaType
     */
    public function setWartosc($wartosc)
    {
      $this->wartosc = $wartosc;
      return $this;
    }

    /**
     * @return kategoriaType
     */
    public function getKategoria()
    {
      return $this->kategoria;
    }

    /**
     * @param kategoriaType $kategoria
     * @return \App\ElektronicznyNadawca\paczkaZagranicznaType
     */
    public function setKategoria($kategoria)
    {
      $this->kategoria = $kategoria;
      return $this;
    }

    /**
     * @return iloscPotwierdzenOdbioruType
     */
    public function getIloscPotwierdzenOdbioru()
    {
      return $this->iloscPotwierdzenOdbioru;
    }

    /**
     * @param iloscPotwierdzenOdbioruType $iloscPotwierdzenOdbioru
     * @return \App\ElektronicznyNadawca\paczkaZagranicznaType
     */
    public function setIloscPotwierdzenOdbioru($iloscPotwierdzenOdbioru)
    {
      $this->iloscPotwierdzenOdbioru = $iloscPotwierdzenOdbioru;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getUtrudnionaManipulacja()
    {
      return $this->utrudnionaManipulacja;
    }

    /**
     * @param boolean $utrudnionaManipulacja
     * @return \App\ElektronicznyNadawca\paczkaZagranicznaType
     */
    public function setUtrudnionaManipulacja($utrudnionaManipulacja)
    {
      $this->utrudnionaManipulacja = $utrudnionaManipulacja;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getEkspres()
    {
      return $this->ekspres;
    }

    /**
     * @param boolean $ekspres
     * @return \App\ElektronicznyNadawca\paczkaZagranicznaType
     */
    public function setEkspres($ekspres)
    {
      $this->ekspres = $ekspres;
      return $this;
    }

    /**
     * @return string
     */
    public function getNumerReferencyjnyCelny()
    {
      return $this->numerReferencyjnyCelny;
    }

    /**
     * @param string $numerReferencyjnyCelny
     * @return \App\ElektronicznyNadawca\paczkaZagranicznaType
     */
    public function setNumerReferencyjnyCelny($numerReferencyjnyCelny)
    {
      $this->numerReferencyjnyCelny = $numerReferencyjnyCelny;
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
     * @return \App\ElektronicznyNadawca\paczkaZagranicznaType
     */
    public function setNumerPrzesylkiKlienta($numerPrzesylkiKlienta)
    {
      $this->numerPrzesylkiKlienta = $numerPrzesylkiKlienta;
      return $this;
    }

}
