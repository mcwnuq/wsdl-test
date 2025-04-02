<?php

namespace App\ElektronicznyNadawca;

class przesylkaNierejestrowanaZNumeremType extends przesylkaRejestrowanaType
{

    /**
     * @var boolean $posteRestante
     */
    protected $posteRestante = null;

    /**
     * @var boolean $miejscowa
     */
    protected $miejscowa = null;

    /**
     * @var masaType $masa
     */
    protected $masa = null;

    /**
     * @var boolean $obszarMiasto
     */
    protected $obszarMiasto = null;

    /**
     * @var kategoriaType $kategoria
     */
    protected $kategoria = null;

    /**
     * @var gabarytType $gabaryt
     */
    protected $gabaryt = null;

    /**
     * @var serwisNierejestrowanaZNumeremType $serwis
     */
    protected $serwis = null;

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
     * @param boolean $miejscowa
     * @param masaType $masa
     * @param boolean $obszarMiasto
     * @param kategoriaType $kategoria
     * @param gabarytType $gabaryt
     * @param serwisNierejestrowanaZNumeremType $serwis
     */
    public function __construct($guid, $pakietGuid, $opakowanieGuid, $opis, $planowanaDataNadania, $numerNadania, $sygnatura, $terminSprawy, $rodzaj, $weryfikacjaPlatnosci, $posteRestante, $miejscowa, $masa, $obszarMiasto, $kategoria, $gabaryt, $serwis)
    {
      parent::__construct($guid, $pakietGuid, $opakowanieGuid, $opis, $planowanaDataNadania, $numerNadania, $sygnatura, $terminSprawy, $rodzaj, $weryfikacjaPlatnosci);
      $this->posteRestante = $posteRestante;
      $this->miejscowa = $miejscowa;
      $this->masa = $masa;
      $this->obszarMiasto = $obszarMiasto;
      $this->kategoria = $kategoria;
      $this->gabaryt = $gabaryt;
      $this->serwis = $serwis;
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
     * @return \App\ElektronicznyNadawca\przesylkaNierejestrowanaZNumeremType
     */
    public function setPosteRestante($posteRestante)
    {
      $this->posteRestante = $posteRestante;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getMiejscowa()
    {
      return $this->miejscowa;
    }

    /**
     * @param boolean $miejscowa
     * @return \App\ElektronicznyNadawca\przesylkaNierejestrowanaZNumeremType
     */
    public function setMiejscowa($miejscowa)
    {
      $this->miejscowa = $miejscowa;
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
     * @return \App\ElektronicznyNadawca\przesylkaNierejestrowanaZNumeremType
     */
    public function setMasa($masa)
    {
      $this->masa = $masa;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getObszarMiasto()
    {
      return $this->obszarMiasto;
    }

    /**
     * @param boolean $obszarMiasto
     * @return \App\ElektronicznyNadawca\przesylkaNierejestrowanaZNumeremType
     */
    public function setObszarMiasto($obszarMiasto)
    {
      $this->obszarMiasto = $obszarMiasto;
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
     * @return \App\ElektronicznyNadawca\przesylkaNierejestrowanaZNumeremType
     */
    public function setKategoria($kategoria)
    {
      $this->kategoria = $kategoria;
      return $this;
    }

    /**
     * @return gabarytType
     */
    public function getGabaryt()
    {
      return $this->gabaryt;
    }

    /**
     * @param gabarytType $gabaryt
     * @return \App\ElektronicznyNadawca\przesylkaNierejestrowanaZNumeremType
     */
    public function setGabaryt($gabaryt)
    {
      $this->gabaryt = $gabaryt;
      return $this;
    }

    /**
     * @return serwisNierejestrowanaZNumeremType
     */
    public function getSerwis()
    {
      return $this->serwis;
    }

    /**
     * @param serwisNierejestrowanaZNumeremType $serwis
     * @return \App\ElektronicznyNadawca\przesylkaNierejestrowanaZNumeremType
     */
    public function setSerwis($serwis)
    {
      $this->serwis = $serwis;
      return $this;
    }

}
