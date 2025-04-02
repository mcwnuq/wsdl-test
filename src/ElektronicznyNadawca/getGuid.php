<?php

namespace App\ElektronicznyNadawca;

class getGuid
{

    /**
     * @var int $ilosc
     */
    protected $ilosc = null;

    /**
     * @param int $ilosc
     */
    public function __construct($ilosc)
    {
      $this->ilosc = $ilosc;
    }

    /**
     * @return int
     */
    public function getIlosc()
    {
      return $this->ilosc;
    }

    /**
     * @param int $ilosc
     * @return \App\ElektronicznyNadawca\getGuid
     */
    public function setIlosc($ilosc)
    {
      $this->ilosc = $ilosc;
      return $this;
    }

}
