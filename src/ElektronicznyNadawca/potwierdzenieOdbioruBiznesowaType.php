<?php

namespace App\ElektronicznyNadawca;

class potwierdzenieOdbioruBiznesowaType
{

    /**
     * @var iloscPotwierdzenOdbioruType $ilosc
     */
    protected $ilosc = null;

    /**
     * @var sposobPrzekazaniaPotwierdzeniaBiznesowaType $sposob
     */
    protected $sposob = null;

    /**
     * @param sposobPrzekazaniaPotwierdzeniaBiznesowaType $sposob
     */
    public function __construct($sposob)
    {
      $this->sposob = $sposob;
    }

    /**
     * @return iloscPotwierdzenOdbioruType
     */
    public function getIlosc()
    {
      return $this->ilosc;
    }

    /**
     * @param iloscPotwierdzenOdbioruType $ilosc
     * @return \App\ElektronicznyNadawca\potwierdzenieOdbioruBiznesowaType
     */
    public function setIlosc($ilosc)
    {
      $this->ilosc = $ilosc;
      return $this;
    }

    /**
     * @return sposobPrzekazaniaPotwierdzeniaBiznesowaType
     */
    public function getSposob()
    {
      return $this->sposob;
    }

    /**
     * @param sposobPrzekazaniaPotwierdzeniaBiznesowaType $sposob
     * @return \App\ElektronicznyNadawca\potwierdzenieOdbioruBiznesowaType
     */
    public function setSposob($sposob)
    {
      $this->sposob = $sposob;
      return $this;
    }

}
