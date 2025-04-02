<?php

namespace App\ElektronicznyNadawca;

abstract class pocztex2021Type extends przesylkaRejestrowanaType
{

    /**
     * @var pobranieType $pobranie
     */
    protected $pobranie = null;

    /**
     * @var potwierdzenieEDoreczeniaType $potwierdzenieDoreczenia
     */
    protected $potwierdzenieDoreczenia = null;

    /**
     * @var potwierdzenieOdbioruPocztex2021Type $potwierdzenieOdbioru
     */
    protected $potwierdzenieOdbioru = null;

    /**
     * @var ubezpieczenieType $ubezpieczenie
     */
    protected $ubezpieczenie = null;

    /**
     * @var masaType $masa
     */
    protected $masa = null;

    /**
     * @var wartoscType $wartosc
     */
    protected $wartosc = null;

    /**
     * @var boolean $ostroznie
     */
    protected $ostroznie = null;

    /**
     * @var boolean $ponadgabaryt
     */
    protected $ponadgabaryt = null;

    /**
     * @var formatPocztex2021Type $format
     */
    protected $format = null;

    /**
     * @var numerPrzesylkiKlientaType $numerPrzesylkiKlienta
     */
    protected $numerPrzesylkiKlienta = null;

    /**
     * @var zwrotDokumentowPocztex2021Enum $zwrotDokumentow
     */
    protected $zwrotDokumentow = null;

    /**
     * @var int $idDokumentyZwrotneAdresy
     */
    protected $idDokumentyZwrotneAdresy = null;

    /**
     * @var EPOType $epo
     */
    protected $epo = null;

    /**
     * @var adresType $adresDlaZwrotu
     */
    protected $adresDlaZwrotu = null;

    /**
     * @var boolean $odbiorWSobote
     */
    protected $odbiorWSobote = null;

    /**
     * @var zasadySpecjalneEnum $zasadySpecjalne
     */
    protected $zasadySpecjalne = null;

    /**
     * @var zawartoscPocztex2021Type $zawartosc
     */
    protected $zawartosc = null;

    /**
     * @var boolean $sprawdzenieZawartosciPrzesylkiPrzezOdbiorce
     */
    protected $sprawdzenieZawartosciPrzesylkiPrzezOdbiorce = null;

    /**
     * @var uiszczaOplateType $uiszczaOplate
     */
    protected $uiszczaOplate = null;

    /**
     * @var boolean $doreczenieDoRakWlasnych
     */
    protected $doreczenieDoRakWlasnych = null;

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
     * @return pobranieType
     */
    public function getPobranie()
    {
      return $this->pobranie;
    }

    /**
     * @param pobranieType $pobranie
     * @return \App\ElektronicznyNadawca\pocztex2021Type
     */
    public function setPobranie($pobranie)
    {
      $this->pobranie = $pobranie;
      return $this;
    }

    /**
     * @return potwierdzenieEDoreczeniaType
     */
    public function getPotwierdzenieDoreczenia()
    {
      return $this->potwierdzenieDoreczenia;
    }

    /**
     * @param potwierdzenieEDoreczeniaType $potwierdzenieDoreczenia
     * @return \App\ElektronicznyNadawca\pocztex2021Type
     */
    public function setPotwierdzenieDoreczenia($potwierdzenieDoreczenia)
    {
      $this->potwierdzenieDoreczenia = $potwierdzenieDoreczenia;
      return $this;
    }

    /**
     * @return potwierdzenieOdbioruPocztex2021Type
     */
    public function getPotwierdzenieOdbioru()
    {
      return $this->potwierdzenieOdbioru;
    }

    /**
     * @param potwierdzenieOdbioruPocztex2021Type $potwierdzenieOdbioru
     * @return \App\ElektronicznyNadawca\pocztex2021Type
     */
    public function setPotwierdzenieOdbioru($potwierdzenieOdbioru)
    {
      $this->potwierdzenieOdbioru = $potwierdzenieOdbioru;
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
     * @return \App\ElektronicznyNadawca\pocztex2021Type
     */
    public function setUbezpieczenie($ubezpieczenie)
    {
      $this->ubezpieczenie = $ubezpieczenie;
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
     * @return \App\ElektronicznyNadawca\pocztex2021Type
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
     * @return \App\ElektronicznyNadawca\pocztex2021Type
     */
    public function setWartosc($wartosc)
    {
      $this->wartosc = $wartosc;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getOstroznie()
    {
      return $this->ostroznie;
    }

    /**
     * @param boolean $ostroznie
     * @return \App\ElektronicznyNadawca\pocztex2021Type
     */
    public function setOstroznie($ostroznie)
    {
      $this->ostroznie = $ostroznie;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getPonadgabaryt()
    {
      return $this->ponadgabaryt;
    }

    /**
     * @param boolean $ponadgabaryt
     * @return \App\ElektronicznyNadawca\pocztex2021Type
     */
    public function setPonadgabaryt($ponadgabaryt)
    {
      $this->ponadgabaryt = $ponadgabaryt;
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
     * @return \App\ElektronicznyNadawca\pocztex2021Type
     */
    public function setFormat($format)
    {
      $this->format = $format;
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
     * @return \App\ElektronicznyNadawca\pocztex2021Type
     */
    public function setNumerPrzesylkiKlienta($numerPrzesylkiKlienta)
    {
      $this->numerPrzesylkiKlienta = $numerPrzesylkiKlienta;
      return $this;
    }

    /**
     * @return zwrotDokumentowPocztex2021Enum
     */
    public function getZwrotDokumentow()
    {
      return $this->zwrotDokumentow;
    }

    /**
     * @param zwrotDokumentowPocztex2021Enum $zwrotDokumentow
     * @return \App\ElektronicznyNadawca\pocztex2021Type
     */
    public function setZwrotDokumentow($zwrotDokumentow)
    {
      $this->zwrotDokumentow = $zwrotDokumentow;
      return $this;
    }

    /**
     * @return int
     */
    public function getIdDokumentyZwrotneAdresy()
    {
      return $this->idDokumentyZwrotneAdresy;
    }

    /**
     * @param int $idDokumentyZwrotneAdresy
     * @return \App\ElektronicznyNadawca\pocztex2021Type
     */
    public function setIdDokumentyZwrotneAdresy($idDokumentyZwrotneAdresy)
    {
      $this->idDokumentyZwrotneAdresy = $idDokumentyZwrotneAdresy;
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
     * @return \App\ElektronicznyNadawca\pocztex2021Type
     */
    public function setEpo($epo)
    {
      $this->epo = $epo;
      return $this;
    }

    /**
     * @return adresType
     */
    public function getAdresDlaZwrotu()
    {
      return $this->adresDlaZwrotu;
    }

    /**
     * @param adresType $adresDlaZwrotu
     * @return \App\ElektronicznyNadawca\pocztex2021Type
     */
    public function setAdresDlaZwrotu($adresDlaZwrotu)
    {
      $this->adresDlaZwrotu = $adresDlaZwrotu;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getOdbiorWSobote()
    {
      return $this->odbiorWSobote;
    }

    /**
     * @param boolean $odbiorWSobote
     * @return \App\ElektronicznyNadawca\pocztex2021Type
     */
    public function setOdbiorWSobote($odbiorWSobote)
    {
      $this->odbiorWSobote = $odbiorWSobote;
      return $this;
    }

    /**
     * @return zasadySpecjalneEnum
     */
    public function getZasadySpecjalne()
    {
      return $this->zasadySpecjalne;
    }

    /**
     * @param zasadySpecjalneEnum $zasadySpecjalne
     * @return \App\ElektronicznyNadawca\pocztex2021Type
     */
    public function setZasadySpecjalne($zasadySpecjalne)
    {
      $this->zasadySpecjalne = $zasadySpecjalne;
      return $this;
    }

    /**
     * @return zawartoscPocztex2021Type
     */
    public function getZawartosc()
    {
      return $this->zawartosc;
    }

    /**
     * @param zawartoscPocztex2021Type $zawartosc
     * @return \App\ElektronicznyNadawca\pocztex2021Type
     */
    public function setZawartosc($zawartosc)
    {
      $this->zawartosc = $zawartosc;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getSprawdzenieZawartosciPrzesylkiPrzezOdbiorce()
    {
      return $this->sprawdzenieZawartosciPrzesylkiPrzezOdbiorce;
    }

    /**
     * @param boolean $sprawdzenieZawartosciPrzesylkiPrzezOdbiorce
     * @return \App\ElektronicznyNadawca\pocztex2021Type
     */
    public function setSprawdzenieZawartosciPrzesylkiPrzezOdbiorce($sprawdzenieZawartosciPrzesylkiPrzezOdbiorce)
    {
      $this->sprawdzenieZawartosciPrzesylkiPrzezOdbiorce = $sprawdzenieZawartosciPrzesylkiPrzezOdbiorce;
      return $this;
    }

    /**
     * @return uiszczaOplateType
     */
    public function getUiszczaOplate()
    {
      return $this->uiszczaOplate;
    }

    /**
     * @param uiszczaOplateType $uiszczaOplate
     * @return \App\ElektronicznyNadawca\pocztex2021Type
     */
    public function setUiszczaOplate($uiszczaOplate)
    {
      $this->uiszczaOplate = $uiszczaOplate;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getDoreczenieDoRakWlasnych()
    {
      return $this->doreczenieDoRakWlasnych;
    }

    /**
     * @param boolean $doreczenieDoRakWlasnych
     * @return \App\ElektronicznyNadawca\pocztex2021Type
     */
    public function setDoreczenieDoRakWlasnych($doreczenieDoRakWlasnych)
    {
      $this->doreczenieDoRakWlasnych = $doreczenieDoRakWlasnych;
      return $this;
    }

}
