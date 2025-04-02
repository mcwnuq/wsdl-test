<?php

namespace App\ElektronicznyNadawca;

abstract class przesylkaRejestrowanaType extends przesylkaType
{

    /**
     * @var adresType $adres
     */
    protected $adres = null;

    /**
     * @var adresType $nadawca
     */
    protected $nadawca = null;

    /**
     * @var relatedToAllegroType $relatedToAllegro
     */
    protected $relatedToAllegro = null;

    /**
     * @var numerNadaniaType $numerNadania
     */
    protected $numerNadania = null;

    /**
     * @var sygnaturaType $sygnatura
     */
    protected $sygnatura = null;

    /**
     * @var terminType $terminSprawy
     */
    protected $terminSprawy = null;

    /**
     * @var rodzajType $rodzaj
     */
    protected $rodzaj = null;

    /**
     * @var boolean $weryfikacjaPlatnosci
     */
    protected $weryfikacjaPlatnosci = null;

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
      parent::__construct($guid, $pakietGuid, $opakowanieGuid, $opis, $planowanaDataNadania);
      $this->numerNadania = $numerNadania;
      $this->sygnatura = $sygnatura;
      $this->terminSprawy = $terminSprawy;
      $this->rodzaj = $rodzaj;
      $this->weryfikacjaPlatnosci = $weryfikacjaPlatnosci;
    }

    /**
     * @return adresType
     */
    public function getAdres()
    {
      return $this->adres;
    }

    /**
     * @param adresType $adres
     * @return \App\ElektronicznyNadawca\przesylkaRejestrowanaType
     */
    public function setAdres($adres)
    {
      $this->adres = $adres;
      return $this;
    }

    /**
     * @return adresType
     */
    public function getNadawca()
    {
      return $this->nadawca;
    }

    /**
     * @param adresType $nadawca
     * @return \App\ElektronicznyNadawca\przesylkaRejestrowanaType
     */
    public function setNadawca($nadawca)
    {
      $this->nadawca = $nadawca;
      return $this;
    }

    /**
     * @return relatedToAllegroType
     */
    public function getRelatedToAllegro()
    {
      return $this->relatedToAllegro;
    }

    /**
     * @param relatedToAllegroType $relatedToAllegro
     * @return \App\ElektronicznyNadawca\przesylkaRejestrowanaType
     */
    public function setRelatedToAllegro($relatedToAllegro)
    {
      $this->relatedToAllegro = $relatedToAllegro;
      return $this;
    }

    /**
     * @return numerNadaniaType
     */
    public function getNumerNadania()
    {
      return $this->numerNadania;
    }

    /**
     * @param numerNadaniaType $numerNadania
     * @return \App\ElektronicznyNadawca\przesylkaRejestrowanaType
     */
    public function setNumerNadania($numerNadania)
    {
      $this->numerNadania = $numerNadania;
      return $this;
    }

    /**
     * @return sygnaturaType
     */
    public function getSygnatura()
    {
      return $this->sygnatura;
    }

    /**
     * @param sygnaturaType $sygnatura
     * @return \App\ElektronicznyNadawca\przesylkaRejestrowanaType
     */
    public function setSygnatura($sygnatura)
    {
      $this->sygnatura = $sygnatura;
      return $this;
    }

    /**
     * @return terminType
     */
    public function getTerminSprawy()
    {
      return $this->terminSprawy;
    }

    /**
     * @param terminType $terminSprawy
     * @return \App\ElektronicznyNadawca\przesylkaRejestrowanaType
     */
    public function setTerminSprawy($terminSprawy)
    {
      $this->terminSprawy = $terminSprawy;
      return $this;
    }

    /**
     * @return rodzajType
     */
    public function getRodzaj()
    {
      return $this->rodzaj;
    }

    /**
     * @param rodzajType $rodzaj
     * @return \App\ElektronicznyNadawca\przesylkaRejestrowanaType
     */
    public function setRodzaj($rodzaj)
    {
      $this->rodzaj = $rodzaj;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getWeryfikacjaPlatnosci()
    {
      return $this->weryfikacjaPlatnosci;
    }

    /**
     * @param boolean $weryfikacjaPlatnosci
     * @return \App\ElektronicznyNadawca\przesylkaRejestrowanaType
     */
    public function setWeryfikacjaPlatnosci($weryfikacjaPlatnosci)
    {
      $this->weryfikacjaPlatnosci = $weryfikacjaPlatnosci;
      return $this;
    }

}
