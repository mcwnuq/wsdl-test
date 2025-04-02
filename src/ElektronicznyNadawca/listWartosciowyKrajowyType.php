<?php

namespace App\ElektronicznyNadawca;

class listWartosciowyKrajowyType extends przesylkaRejestrowanaType
{

    /**
     * @var IdLibraryForLegalDepositType $idLibraryForLegalDeposit
     */
    protected $idLibraryForLegalDeposit = null;

    /**
     * @var boolean $posteRestante
     */
    protected $posteRestante = null;

    /**
     * @var wartoscType $wartosc
     */
    protected $wartosc = null;

    /**
     * @var iloscPotwierdzenOdbioruType $iloscPotwierdzenOdbioru
     */
    protected $iloscPotwierdzenOdbioru = null;

    /**
     * @var kategoriaType $kategoria
     */
    protected $kategoria = null;

    /**
     * @var formatType $format
     */
    protected $format = null;

    /**
     * @var masaType $masa
     */
    protected $masa = null;

    /**
     * @var string $numerWewnetrznyPrzesylki
     */
    protected $numerWewnetrznyPrzesylki = null;

    /**
     * @var boolean $egzemplarzBiblioteczny
     */
    protected $egzemplarzBiblioteczny = null;

    /**
     * @var boolean $dlaOciemnialych
     */
    protected $dlaOciemnialych = null;

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
     * @param wartoscType $wartosc
     * @param iloscPotwierdzenOdbioruType $iloscPotwierdzenOdbioru
     * @param kategoriaType $kategoria
     * @param formatType $format
     * @param masaType $masa
     * @param string $numerWewnetrznyPrzesylki
     * @param boolean $egzemplarzBiblioteczny
     * @param boolean $dlaOciemnialych
     */
    public function __construct($guid, $pakietGuid, $opakowanieGuid, $opis, $planowanaDataNadania, $numerNadania, $sygnatura, $terminSprawy, $rodzaj, $weryfikacjaPlatnosci, $posteRestante, $wartosc, $iloscPotwierdzenOdbioru, $kategoria, $format, $masa, $numerWewnetrznyPrzesylki, $egzemplarzBiblioteczny, $dlaOciemnialych)
    {
      parent::__construct($guid, $pakietGuid, $opakowanieGuid, $opis, $planowanaDataNadania, $numerNadania, $sygnatura, $terminSprawy, $rodzaj, $weryfikacjaPlatnosci);
      $this->posteRestante = $posteRestante;
      $this->wartosc = $wartosc;
      $this->iloscPotwierdzenOdbioru = $iloscPotwierdzenOdbioru;
      $this->kategoria = $kategoria;
      $this->format = $format;
      $this->masa = $masa;
      $this->numerWewnetrznyPrzesylki = $numerWewnetrznyPrzesylki;
      $this->egzemplarzBiblioteczny = $egzemplarzBiblioteczny;
      $this->dlaOciemnialych = $dlaOciemnialych;
    }

    /**
     * @return IdLibraryForLegalDepositType
     */
    public function getIdLibraryForLegalDeposit()
    {
      return $this->idLibraryForLegalDeposit;
    }

    /**
     * @param IdLibraryForLegalDepositType $idLibraryForLegalDeposit
     * @return \App\ElektronicznyNadawca\listWartosciowyKrajowyType
     */
    public function setIdLibraryForLegalDeposit($idLibraryForLegalDeposit)
    {
      $this->idLibraryForLegalDeposit = $idLibraryForLegalDeposit;
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
     * @return \App\ElektronicznyNadawca\listWartosciowyKrajowyType
     */
    public function setPosteRestante($posteRestante)
    {
      $this->posteRestante = $posteRestante;
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
     * @return \App\ElektronicznyNadawca\listWartosciowyKrajowyType
     */
    public function setWartosc($wartosc)
    {
      $this->wartosc = $wartosc;
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
     * @return \App\ElektronicznyNadawca\listWartosciowyKrajowyType
     */
    public function setIloscPotwierdzenOdbioru($iloscPotwierdzenOdbioru)
    {
      $this->iloscPotwierdzenOdbioru = $iloscPotwierdzenOdbioru;
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
     * @return \App\ElektronicznyNadawca\listWartosciowyKrajowyType
     */
    public function setKategoria($kategoria)
    {
      $this->kategoria = $kategoria;
      return $this;
    }

    /**
     * @return formatType
     */
    public function getFormat()
    {
      return $this->format;
    }

    /**
     * @param formatType $format
     * @return \App\ElektronicznyNadawca\listWartosciowyKrajowyType
     */
    public function setFormat($format)
    {
      $this->format = $format;
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
     * @return \App\ElektronicznyNadawca\listWartosciowyKrajowyType
     */
    public function setMasa($masa)
    {
      $this->masa = $masa;
      return $this;
    }

    /**
     * @return string
     */
    public function getNumerWewnetrznyPrzesylki()
    {
      return $this->numerWewnetrznyPrzesylki;
    }

    /**
     * @param string $numerWewnetrznyPrzesylki
     * @return \App\ElektronicznyNadawca\listWartosciowyKrajowyType
     */
    public function setNumerWewnetrznyPrzesylki($numerWewnetrznyPrzesylki)
    {
      $this->numerWewnetrznyPrzesylki = $numerWewnetrznyPrzesylki;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getEgzemplarzBiblioteczny()
    {
      return $this->egzemplarzBiblioteczny;
    }

    /**
     * @param boolean $egzemplarzBiblioteczny
     * @return \App\ElektronicznyNadawca\listWartosciowyKrajowyType
     */
    public function setEgzemplarzBiblioteczny($egzemplarzBiblioteczny)
    {
      $this->egzemplarzBiblioteczny = $egzemplarzBiblioteczny;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getDlaOciemnialych()
    {
      return $this->dlaOciemnialych;
    }

    /**
     * @param boolean $dlaOciemnialych
     * @return \App\ElektronicznyNadawca\listWartosciowyKrajowyType
     */
    public function setDlaOciemnialych($dlaOciemnialych)
    {
      $this->dlaOciemnialych = $dlaOciemnialych;
      return $this;
    }

}
