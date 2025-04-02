<?php

namespace App\ElektronicznyNadawca;

class isObszarMiastoResponse
{

    /**
     * @var obszarAdresowyResponseType $obszarAdresowy
     */
    protected $obszarAdresowy = null;

    /**
     * @param obszarAdresowyResponseType $obszarAdresowy
     */
    public function __construct($obszarAdresowy)
    {
      $this->obszarAdresowy = $obszarAdresowy;
    }

    /**
     * @return obszarAdresowyResponseType
     */
    public function getObszarAdresowy()
    {
      return $this->obszarAdresowy;
    }

    /**
     * @param obszarAdresowyResponseType $obszarAdresowy
     * @return \App\ElektronicznyNadawca\isObszarMiastoResponse
     */
    public function setObszarAdresowy($obszarAdresowy)
    {
      $this->obszarAdresowy = $obszarAdresowy;
      return $this;
    }

}
