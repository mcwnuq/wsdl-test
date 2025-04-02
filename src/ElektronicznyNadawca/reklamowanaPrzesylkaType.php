<?php

namespace App\ElektronicznyNadawca;

class reklamowanaPrzesylkaType
{

    /**
     * @var przesylkaType $przesylka
     */
    protected $przesylka = null;

    /**
     * @var powodReklamacjiType $powodReklamacji
     */
    protected $powodReklamacji = null;

    /**
     * @var nrbType $nrb
     */
    protected $nrb = null;

    /**
     * @var numerFakturyType $numerFaktury
     */
    protected $numerFaktury = null;

    /**
     * @var boolean $ezgoda
     */
    protected $ezgoda = null;

    /**
     * @var date $dataNadania
     */
    protected $dataNadania = null;

    /**
     * @var urzadNadaniaType $urzadNadania
     */
    protected $urzadNadania = null;

    /**
     * @var string $powodReklamacjiOpis
     */
    protected $powodReklamacjiOpis = null;

    /**
     * @var int $odszkodowanie
     */
    protected $odszkodowanie = null;

    /**
     * @var int $oplata
     */
    protected $oplata = null;

    /**
     * @var int $oczekiwaneOdszkodowanie
     */
    protected $oczekiwaneOdszkodowanie = null;

    /**
     * @param przesylkaType $przesylka
     * @param powodReklamacjiType $powodReklamacji
     * @param date $dataNadania
     * @param urzadNadaniaType $urzadNadania
     * @param string $powodReklamacjiOpis
     * @param int $odszkodowanie
     * @param int $oplata
     * @param int $oczekiwaneOdszkodowanie
     */
    public function __construct($przesylka, $powodReklamacji, $dataNadania, $urzadNadania, $powodReklamacjiOpis, $odszkodowanie, $oplata, $oczekiwaneOdszkodowanie)
    {
      $this->przesylka = $przesylka;
      $this->powodReklamacji = $powodReklamacji;
      $this->dataNadania = $dataNadania;
      $this->urzadNadania = $urzadNadania;
      $this->powodReklamacjiOpis = $powodReklamacjiOpis;
      $this->odszkodowanie = $odszkodowanie;
      $this->oplata = $oplata;
      $this->oczekiwaneOdszkodowanie = $oczekiwaneOdszkodowanie;
    }

    /**
     * @return przesylkaType
     */
    public function getPrzesylka()
    {
      return $this->przesylka;
    }

    /**
     * @param przesylkaType $przesylka
     * @return \App\ElektronicznyNadawca\reklamowanaPrzesylkaType
     */
    public function setPrzesylka($przesylka)
    {
      $this->przesylka = $przesylka;
      return $this;
    }

    /**
     * @return powodReklamacjiType
     */
    public function getPowodReklamacji()
    {
      return $this->powodReklamacji;
    }

    /**
     * @param powodReklamacjiType $powodReklamacji
     * @return \App\ElektronicznyNadawca\reklamowanaPrzesylkaType
     */
    public function setPowodReklamacji($powodReklamacji)
    {
      $this->powodReklamacji = $powodReklamacji;
      return $this;
    }

    /**
     * @return nrbType
     */
    public function getNrb()
    {
      return $this->nrb;
    }

    /**
     * @param nrbType $nrb
     * @return \App\ElektronicznyNadawca\reklamowanaPrzesylkaType
     */
    public function setNrb($nrb)
    {
      $this->nrb = $nrb;
      return $this;
    }

    /**
     * @return numerFakturyType
     */
    public function getNumerFaktury()
    {
      return $this->numerFaktury;
    }

    /**
     * @param numerFakturyType $numerFaktury
     * @return \App\ElektronicznyNadawca\reklamowanaPrzesylkaType
     */
    public function setNumerFaktury($numerFaktury)
    {
      $this->numerFaktury = $numerFaktury;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getEzgoda()
    {
      return $this->ezgoda;
    }

    /**
     * @param boolean $ezgoda
     * @return \App\ElektronicznyNadawca\reklamowanaPrzesylkaType
     */
    public function setEzgoda($ezgoda)
    {
      $this->ezgoda = $ezgoda;
      return $this;
    }

    /**
     * @return date
     */
    public function getDataNadania()
    {
      return $this->dataNadania;
    }

    /**
     * @param date $dataNadania
     * @return \App\ElektronicznyNadawca\reklamowanaPrzesylkaType
     */
    public function setDataNadania($dataNadania)
    {
      $this->dataNadania = $dataNadania;
      return $this;
    }

    /**
     * @return urzadNadaniaType
     */
    public function getUrzadNadania()
    {
      return $this->urzadNadania;
    }

    /**
     * @param urzadNadaniaType $urzadNadania
     * @return \App\ElektronicznyNadawca\reklamowanaPrzesylkaType
     */
    public function setUrzadNadania($urzadNadania)
    {
      $this->urzadNadania = $urzadNadania;
      return $this;
    }

    /**
     * @return string
     */
    public function getPowodReklamacjiOpis()
    {
      return $this->powodReklamacjiOpis;
    }

    /**
     * @param string $powodReklamacjiOpis
     * @return \App\ElektronicznyNadawca\reklamowanaPrzesylkaType
     */
    public function setPowodReklamacjiOpis($powodReklamacjiOpis)
    {
      $this->powodReklamacjiOpis = $powodReklamacjiOpis;
      return $this;
    }

    /**
     * @return int
     */
    public function getOdszkodowanie()
    {
      return $this->odszkodowanie;
    }

    /**
     * @param int $odszkodowanie
     * @return \App\ElektronicznyNadawca\reklamowanaPrzesylkaType
     */
    public function setOdszkodowanie($odszkodowanie)
    {
      $this->odszkodowanie = $odszkodowanie;
      return $this;
    }

    /**
     * @return int
     */
    public function getOplata()
    {
      return $this->oplata;
    }

    /**
     * @param int $oplata
     * @return \App\ElektronicznyNadawca\reklamowanaPrzesylkaType
     */
    public function setOplata($oplata)
    {
      $this->oplata = $oplata;
      return $this;
    }

    /**
     * @return int
     */
    public function getOczekiwaneOdszkodowanie()
    {
      return $this->oczekiwaneOdszkodowanie;
    }

    /**
     * @param int $oczekiwaneOdszkodowanie
     * @return \App\ElektronicznyNadawca\reklamowanaPrzesylkaType
     */
    public function setOczekiwaneOdszkodowanie($oczekiwaneOdszkodowanie)
    {
      $this->oczekiwaneOdszkodowanie = $oczekiwaneOdszkodowanie;
      return $this;
    }

}
