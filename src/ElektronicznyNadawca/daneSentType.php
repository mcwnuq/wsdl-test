<?php

namespace App\ElektronicznyNadawca;

class daneSentType
{

    /**
     * @var string $numer
     */
    protected $numer = null;

    /**
     * @var string $kluczPrzewoznika
     */
    protected $kluczPrzewoznika = null;

    /**
     * @var string $kodCN
     */
    protected $kodCN = null;

    /**
     * @var string $kodPKWiU
     */
    protected $kodPKWiU = null;

    /**
     * @var float $masa
     */
    protected $masa = null;

    /**
     * @var boolean $proceduraAwaryjna
     */
    protected $proceduraAwaryjna = null;

    /**
     * @param string $numer
     * @param string $kluczPrzewoznika
     */
    public function __construct($numer, $kluczPrzewoznika)
    {
      $this->numer = $numer;
      $this->kluczPrzewoznika = $kluczPrzewoznika;
    }

    /**
     * @return string
     */
    public function getNumer()
    {
      return $this->numer;
    }

    /**
     * @param string $numer
     * @return \App\ElektronicznyNadawca\daneSentType
     */
    public function setNumer($numer)
    {
      $this->numer = $numer;
      return $this;
    }

    /**
     * @return string
     */
    public function getKluczPrzewoznika()
    {
      return $this->kluczPrzewoznika;
    }

    /**
     * @param string $kluczPrzewoznika
     * @return \App\ElektronicznyNadawca\daneSentType
     */
    public function setKluczPrzewoznika($kluczPrzewoznika)
    {
      $this->kluczPrzewoznika = $kluczPrzewoznika;
      return $this;
    }

    /**
     * @return string
     */
    public function getKodCN()
    {
      return $this->kodCN;
    }

    /**
     * @param string $kodCN
     * @return \App\ElektronicznyNadawca\daneSentType
     */
    public function setKodCN($kodCN)
    {
      $this->kodCN = $kodCN;
      return $this;
    }

    /**
     * @return string
     */
    public function getKodPKWiU()
    {
      return $this->kodPKWiU;
    }

    /**
     * @param string $kodPKWiU
     * @return \App\ElektronicznyNadawca\daneSentType
     */
    public function setKodPKWiU($kodPKWiU)
    {
      $this->kodPKWiU = $kodPKWiU;
      return $this;
    }

    /**
     * @return float
     */
    public function getMasa()
    {
      return $this->masa;
    }

    /**
     * @param float $masa
     * @return \App\ElektronicznyNadawca\daneSentType
     */
    public function setMasa($masa)
    {
      $this->masa = $masa;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getProceduraAwaryjna()
    {
      return $this->proceduraAwaryjna;
    }

    /**
     * @param boolean $proceduraAwaryjna
     * @return \App\ElektronicznyNadawca\daneSentType
     */
    public function setProceduraAwaryjna($proceduraAwaryjna)
    {
      $this->proceduraAwaryjna = $proceduraAwaryjna;
      return $this;
    }

}
