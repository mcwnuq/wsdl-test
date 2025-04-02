<?php

namespace App\ElektronicznyNadawca;

class DokumentyTowarzyszaceType
{

    /**
     * @var DokumentTowarzyszacyRodzajEnum $rodzaj
     */
    protected $rodzaj = null;

    /**
     * @var string $numer
     */
    protected $numer = null;

    /**
     * @param DokumentTowarzyszacyRodzajEnum $rodzaj
     * @param string $numer
     */
    public function __construct($rodzaj, $numer)
    {
      $this->rodzaj = $rodzaj;
      $this->numer = $numer;
    }

    /**
     * @return DokumentTowarzyszacyRodzajEnum
     */
    public function getRodzaj()
    {
      return $this->rodzaj;
    }

    /**
     * @param DokumentTowarzyszacyRodzajEnum $rodzaj
     * @return \App\ElektronicznyNadawca\DokumentyTowarzyszaceType
     */
    public function setRodzaj($rodzaj)
    {
      $this->rodzaj = $rodzaj;
      return $this;
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
     * @return \App\ElektronicznyNadawca\DokumentyTowarzyszaceType
     */
    public function setNumer($numer)
    {
      $this->numer = $numer;
      return $this;
    }

}
