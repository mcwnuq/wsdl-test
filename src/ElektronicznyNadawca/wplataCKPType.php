<?php

namespace App\ElektronicznyNadawca;

class wplataCKPType
{

    /**
     * @var string $tytulPobrania
     */
    protected $tytulPobrania = null;

    /**
     * @var string $unikalnyIdentyfikatorWplaty
     */
    protected $unikalnyIdentyfikatorWplaty = null;

    /**
     * @var numerNadaniaType $numerNadania
     */
    protected $numerNadania = null;

    /**
     * @var int $kwota
     */
    protected $kwota = null;

    /**
     * @var date $dataPobrania
     */
    protected $dataPobrania = null;

    /**
     * @var date $dataPrzelewu
     */
    protected $dataPrzelewu = null;

    /**
     * @var int $idUmowy
     */
    protected $idUmowy = null;

    /**
     * @var string $tytulPrzelewuZbiorczego
     */
    protected $tytulPrzelewuZbiorczego = null;

    /**
     * @param string $tytulPobrania
     * @param string $unikalnyIdentyfikatorWplaty
     * @param numerNadaniaType $numerNadania
     * @param int $kwota
     * @param date $dataPobrania
     * @param date $dataPrzelewu
     * @param int $idUmowy
     * @param string $tytulPrzelewuZbiorczego
     */
    public function __construct($tytulPobrania, $unikalnyIdentyfikatorWplaty, $numerNadania, $kwota, $dataPobrania, $dataPrzelewu, $idUmowy, $tytulPrzelewuZbiorczego)
    {
      $this->tytulPobrania = $tytulPobrania;
      $this->unikalnyIdentyfikatorWplaty = $unikalnyIdentyfikatorWplaty;
      $this->numerNadania = $numerNadania;
      $this->kwota = $kwota;
      $this->dataPobrania = $dataPobrania;
      $this->dataPrzelewu = $dataPrzelewu;
      $this->idUmowy = $idUmowy;
      $this->tytulPrzelewuZbiorczego = $tytulPrzelewuZbiorczego;
    }

    /**
     * @return string
     */
    public function getTytulPobrania()
    {
      return $this->tytulPobrania;
    }

    /**
     * @param string $tytulPobrania
     * @return \App\ElektronicznyNadawca\wplataCKPType
     */
    public function setTytulPobrania($tytulPobrania)
    {
      $this->tytulPobrania = $tytulPobrania;
      return $this;
    }

    /**
     * @return string
     */
    public function getUnikalnyIdentyfikatorWplaty()
    {
      return $this->unikalnyIdentyfikatorWplaty;
    }

    /**
     * @param string $unikalnyIdentyfikatorWplaty
     * @return \App\ElektronicznyNadawca\wplataCKPType
     */
    public function setUnikalnyIdentyfikatorWplaty($unikalnyIdentyfikatorWplaty)
    {
      $this->unikalnyIdentyfikatorWplaty = $unikalnyIdentyfikatorWplaty;
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
     * @return \App\ElektronicznyNadawca\wplataCKPType
     */
    public function setNumerNadania($numerNadania)
    {
      $this->numerNadania = $numerNadania;
      return $this;
    }

    /**
     * @return int
     */
    public function getKwota()
    {
      return $this->kwota;
    }

    /**
     * @param int $kwota
     * @return \App\ElektronicznyNadawca\wplataCKPType
     */
    public function setKwota($kwota)
    {
      $this->kwota = $kwota;
      return $this;
    }

    /**
     * @return date
     */
    public function getDataPobrania()
    {
      return $this->dataPobrania;
    }

    /**
     * @param date $dataPobrania
     * @return \App\ElektronicznyNadawca\wplataCKPType
     */
    public function setDataPobrania($dataPobrania)
    {
      $this->dataPobrania = $dataPobrania;
      return $this;
    }

    /**
     * @return date
     */
    public function getDataPrzelewu()
    {
      return $this->dataPrzelewu;
    }

    /**
     * @param date $dataPrzelewu
     * @return \App\ElektronicznyNadawca\wplataCKPType
     */
    public function setDataPrzelewu($dataPrzelewu)
    {
      $this->dataPrzelewu = $dataPrzelewu;
      return $this;
    }

    /**
     * @return int
     */
    public function getIdUmowy()
    {
      return $this->idUmowy;
    }

    /**
     * @param int $idUmowy
     * @return \App\ElektronicznyNadawca\wplataCKPType
     */
    public function setIdUmowy($idUmowy)
    {
      $this->idUmowy = $idUmowy;
      return $this;
    }

    /**
     * @return string
     */
    public function getTytulPrzelewuZbiorczego()
    {
      return $this->tytulPrzelewuZbiorczego;
    }

    /**
     * @param string $tytulPrzelewuZbiorczego
     * @return \App\ElektronicznyNadawca\wplataCKPType
     */
    public function setTytulPrzelewuZbiorczego($tytulPrzelewuZbiorczego)
    {
      $this->tytulPrzelewuZbiorczego = $tytulPrzelewuZbiorczego;
      return $this;
    }

}
