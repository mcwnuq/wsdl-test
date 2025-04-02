<?php

namespace App\ElektronicznyNadawca;

class ubezpieczenieType
{

    /**
     * @var rodzajUbezpieczeniaType $rodzaj
     */
    protected $rodzaj = null;

    /**
     * @var kwotaUbezpieczeniaType $kwota
     */
    protected $kwota = null;

    /**
     * @var boolean $akceptacjaOWU
     */
    protected $akceptacjaOWU = null;

    /**
     * @param rodzajUbezpieczeniaType $rodzaj
     * @param kwotaUbezpieczeniaType $kwota
     * @param boolean $akceptacjaOWU
     */
    public function __construct($rodzaj, $kwota, $akceptacjaOWU)
    {
      $this->rodzaj = $rodzaj;
      $this->kwota = $kwota;
      $this->akceptacjaOWU = $akceptacjaOWU;
    }

    /**
     * @return rodzajUbezpieczeniaType
     */
    public function getRodzaj()
    {
      return $this->rodzaj;
    }

    /**
     * @param rodzajUbezpieczeniaType $rodzaj
     * @return \App\ElektronicznyNadawca\ubezpieczenieType
     */
    public function setRodzaj($rodzaj)
    {
      $this->rodzaj = $rodzaj;
      return $this;
    }

    /**
     * @return kwotaUbezpieczeniaType
     */
    public function getKwota()
    {
      return $this->kwota;
    }

    /**
     * @param kwotaUbezpieczeniaType $kwota
     * @return \App\ElektronicznyNadawca\ubezpieczenieType
     */
    public function setKwota($kwota)
    {
      $this->kwota = $kwota;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getAkceptacjaOWU()
    {
      return $this->akceptacjaOWU;
    }

    /**
     * @param boolean $akceptacjaOWU
     * @return \App\ElektronicznyNadawca\ubezpieczenieType
     */
    public function setAkceptacjaOWU($akceptacjaOWU)
    {
      $this->akceptacjaOWU = $akceptacjaOWU;
      return $this;
    }

}
