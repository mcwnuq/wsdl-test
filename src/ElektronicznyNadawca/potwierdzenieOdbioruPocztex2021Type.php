<?php

namespace App\ElektronicznyNadawca;

class potwierdzenieOdbioruPocztex2021Type
{

    /**
     * @var iloscPotwierdzenOdbioruPocztex2021Type $ilosc
     */
    protected $ilosc = null;

    /**
     * @var sposobPrzekazaniaPotwierdzeniaOdbioruPocztex2021Enum $sposobPotwierdzeniaOdbioru
     */
    protected $sposobPotwierdzeniaOdbioru = null;

    /**
     * @param iloscPotwierdzenOdbioruPocztex2021Type $ilosc
     * @param sposobPrzekazaniaPotwierdzeniaOdbioruPocztex2021Enum $sposobPotwierdzeniaOdbioru
     */
    public function __construct($ilosc, $sposobPotwierdzeniaOdbioru)
    {
      $this->ilosc = $ilosc;
      $this->sposobPotwierdzeniaOdbioru = $sposobPotwierdzeniaOdbioru;
    }

    /**
     * @return iloscPotwierdzenOdbioruPocztex2021Type
     */
    public function getIlosc()
    {
      return $this->ilosc;
    }

    /**
     * @param iloscPotwierdzenOdbioruPocztex2021Type $ilosc
     * @return \App\ElektronicznyNadawca\potwierdzenieOdbioruPocztex2021Type
     */
    public function setIlosc($ilosc)
    {
      $this->ilosc = $ilosc;
      return $this;
    }

    /**
     * @return sposobPrzekazaniaPotwierdzeniaOdbioruPocztex2021Enum
     */
    public function getSposobPotwierdzeniaOdbioru()
    {
      return $this->sposobPotwierdzeniaOdbioru;
    }

    /**
     * @param sposobPrzekazaniaPotwierdzeniaOdbioruPocztex2021Enum $sposobPotwierdzeniaOdbioru
     * @return \App\ElektronicznyNadawca\potwierdzenieOdbioruPocztex2021Type
     */
    public function setSposobPotwierdzeniaOdbioru($sposobPotwierdzeniaOdbioru)
    {
      $this->sposobPotwierdzeniaOdbioru = $sposobPotwierdzeniaOdbioru;
      return $this;
    }

}
