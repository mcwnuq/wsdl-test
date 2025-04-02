<?php

namespace App\ElektronicznyNadawca;

class przesylkaZagranicznaType extends przesylkaNieRejestrowanaType
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
     * @var deklaracjaCelna2Type $deklaracjaCelna2
     */
    protected $deklaracjaCelna2 = null;

    /**
     * @var string $zawartosc
     */
    protected $zawartosc = null;

    /**
     * @var boolean $posteRestante
     */
    protected $posteRestante = null;

    /**
     * @var kategoriaType $kategoria
     */
    protected $kategoria = null;

    /**
     * @var masaType $masa
     */
    protected $masa = null;

    /**
     * @var boolean $ekspres
     */
    protected $ekspres = null;

    /**
     * @var string $kraj
     */
    protected $kraj = null;

    /**
     * @param guidType $guid
     * @param guidType $pakietGuid
     * @param guidType $opakowanieGuid
     * @param opisType $opis
     * @param date $planowanaDataNadania
     * @param anonymous94 $ilosc
     * @param boolean $posteRestante
     * @param kategoriaType $kategoria
     * @param masaType $masa
     * @param boolean $ekspres
     * @param string $kraj
     */
    public function __construct($guid, $pakietGuid, $opakowanieGuid, $opis, $planowanaDataNadania, $ilosc, $posteRestante, $kategoria, $masa, $ekspres, $kraj)
    {
      parent::__construct($guid, $pakietGuid, $opakowanieGuid, $opis, $planowanaDataNadania, $ilosc);
      $this->posteRestante = $posteRestante;
      $this->kategoria = $kategoria;
      $this->masa = $masa;
      $this->ekspres = $ekspres;
      $this->kraj = $kraj;
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
     * @return \App\ElektronicznyNadawca\przesylkaZagranicznaType
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
     * @return \App\ElektronicznyNadawca\przesylkaZagranicznaType
     */
    public function setNadawca($nadawca)
    {
      $this->nadawca = $nadawca;
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
     * @return \App\ElektronicznyNadawca\przesylkaZagranicznaType
     */
    public function setDeklaracjaCelna2($deklaracjaCelna2)
    {
      $this->deklaracjaCelna2 = $deklaracjaCelna2;
      return $this;
    }

    /**
     * @return string
     */
    public function getZawartosc()
    {
      return $this->zawartosc;
    }

    /**
     * @param string $zawartosc
     * @return \App\ElektronicznyNadawca\przesylkaZagranicznaType
     */
    public function setZawartosc($zawartosc)
    {
      $this->zawartosc = $zawartosc;
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
     * @return \App\ElektronicznyNadawca\przesylkaZagranicznaType
     */
    public function setPosteRestante($posteRestante)
    {
      $this->posteRestante = $posteRestante;
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
     * @return \App\ElektronicznyNadawca\przesylkaZagranicznaType
     */
    public function setKategoria($kategoria)
    {
      $this->kategoria = $kategoria;
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
     * @return \App\ElektronicznyNadawca\przesylkaZagranicznaType
     */
    public function setMasa($masa)
    {
      $this->masa = $masa;
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
     * @return \App\ElektronicznyNadawca\przesylkaZagranicznaType
     */
    public function setEkspres($ekspres)
    {
      $this->ekspres = $ekspres;
      return $this;
    }

    /**
     * @return string
     */
    public function getKraj()
    {
      return $this->kraj;
    }

    /**
     * @param string $kraj
     * @return \App\ElektronicznyNadawca\przesylkaZagranicznaType
     */
    public function setKraj($kraj)
    {
      $this->kraj = $kraj;
      return $this;
    }

}
