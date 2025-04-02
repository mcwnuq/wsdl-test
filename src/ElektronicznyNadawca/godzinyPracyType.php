<?php

namespace App\ElektronicznyNadawca;

class godzinyPracyType
{

    /**
     * @var godzinyPracyOdDoType[] $poniedzialek
     */
    protected $poniedzialek = null;

    /**
     * @var godzinyPracyOdDoType[] $wtorek
     */
    protected $wtorek = null;

    /**
     * @var godzinyPracyOdDoType[] $sroda
     */
    protected $sroda = null;

    /**
     * @var godzinyPracyOdDoType[] $czwartek
     */
    protected $czwartek = null;

    /**
     * @var godzinyPracyOdDoType[] $piatek
     */
    protected $piatek = null;

    /**
     * @var godzinyPracyOdDoType[] $sobota
     */
    protected $sobota = null;

    /**
     * @var godzinyPracyOdDoType[] $niedziela
     */
    protected $niedziela = null;

    /**
     * @var godzinyPracyOdDoType[] $robocze
     */
    protected $robocze = null;

    /**
     * @var godzinyPracyOdDoType[] $swieta
     */
    protected $swieta = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return godzinyPracyOdDoType[]
     */
    public function getPoniedzialek()
    {
      return $this->poniedzialek;
    }

    /**
     * @param godzinyPracyOdDoType[] $poniedzialek
     * @return \App\ElektronicznyNadawca\godzinyPracyType
     */
    public function setPoniedzialek(array $poniedzialek = null)
    {
      $this->poniedzialek = $poniedzialek;
      return $this;
    }

    /**
     * @return godzinyPracyOdDoType[]
     */
    public function getWtorek()
    {
      return $this->wtorek;
    }

    /**
     * @param godzinyPracyOdDoType[] $wtorek
     * @return \App\ElektronicznyNadawca\godzinyPracyType
     */
    public function setWtorek(array $wtorek = null)
    {
      $this->wtorek = $wtorek;
      return $this;
    }

    /**
     * @return godzinyPracyOdDoType[]
     */
    public function getSroda()
    {
      return $this->sroda;
    }

    /**
     * @param godzinyPracyOdDoType[] $sroda
     * @return \App\ElektronicznyNadawca\godzinyPracyType
     */
    public function setSroda(array $sroda = null)
    {
      $this->sroda = $sroda;
      return $this;
    }

    /**
     * @return godzinyPracyOdDoType[]
     */
    public function getCzwartek()
    {
      return $this->czwartek;
    }

    /**
     * @param godzinyPracyOdDoType[] $czwartek
     * @return \App\ElektronicznyNadawca\godzinyPracyType
     */
    public function setCzwartek(array $czwartek = null)
    {
      $this->czwartek = $czwartek;
      return $this;
    }

    /**
     * @return godzinyPracyOdDoType[]
     */
    public function getPiatek()
    {
      return $this->piatek;
    }

    /**
     * @param godzinyPracyOdDoType[] $piatek
     * @return \App\ElektronicznyNadawca\godzinyPracyType
     */
    public function setPiatek(array $piatek = null)
    {
      $this->piatek = $piatek;
      return $this;
    }

    /**
     * @return godzinyPracyOdDoType[]
     */
    public function getSobota()
    {
      return $this->sobota;
    }

    /**
     * @param godzinyPracyOdDoType[] $sobota
     * @return \App\ElektronicznyNadawca\godzinyPracyType
     */
    public function setSobota(array $sobota = null)
    {
      $this->sobota = $sobota;
      return $this;
    }

    /**
     * @return godzinyPracyOdDoType[]
     */
    public function getNiedziela()
    {
      return $this->niedziela;
    }

    /**
     * @param godzinyPracyOdDoType[] $niedziela
     * @return \App\ElektronicznyNadawca\godzinyPracyType
     */
    public function setNiedziela(array $niedziela = null)
    {
      $this->niedziela = $niedziela;
      return $this;
    }

    /**
     * @return godzinyPracyOdDoType[]
     */
    public function getRobocze()
    {
      return $this->robocze;
    }

    /**
     * @param godzinyPracyOdDoType[] $robocze
     * @return \App\ElektronicznyNadawca\godzinyPracyType
     */
    public function setRobocze(array $robocze = null)
    {
      $this->robocze = $robocze;
      return $this;
    }

    /**
     * @return godzinyPracyOdDoType[]
     */
    public function getSwieta()
    {
      return $this->swieta;
    }

    /**
     * @param godzinyPracyOdDoType[] $swieta
     * @return \App\ElektronicznyNadawca\godzinyPracyType
     */
    public function setSwieta(array $swieta = null)
    {
      $this->swieta = $swieta;
      return $this;
    }

}
