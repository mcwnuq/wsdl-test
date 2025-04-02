<?php

namespace App\ElektronicznyNadawca;

class sposobDoreczeniaType
{

    /**
     * @var string $kod
     */
    protected $kod = null;

    /**
     * @var string $identyfikatorPunktuOdbioru
     */
    protected $identyfikatorPunktuOdbioru = null;

    /**
     * @param string $kod
     */
    public function __construct($kod)
    {
      $this->kod = $kod;
    }

    /**
     * @return string
     */
    public function getKod()
    {
      return $this->kod;
    }

    /**
     * @param string $kod
     * @return \App\ElektronicznyNadawca\sposobDoreczeniaType
     */
    public function setKod($kod)
    {
      $this->kod = $kod;
      return $this;
    }

    /**
     * @return string
     */
    public function getIdentyfikatorPunktuOdbioru()
    {
      return $this->identyfikatorPunktuOdbioru;
    }

    /**
     * @param string $identyfikatorPunktuOdbioru
     * @return \App\ElektronicznyNadawca\sposobDoreczeniaType
     */
    public function setIdentyfikatorPunktuOdbioru($identyfikatorPunktuOdbioru)
    {
      $this->identyfikatorPunktuOdbioru = $identyfikatorPunktuOdbioru;
      return $this;
    }

}
