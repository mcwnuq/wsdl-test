<?php

namespace App\ElektronicznyNadawca;

class isMiejscowa
{

    /**
     * @var trasaRequestType $trasaRequest
     */
    protected $trasaRequest = null;

    /**
     * @param trasaRequestType $trasaRequest
     */
    public function __construct($trasaRequest)
    {
      $this->trasaRequest = $trasaRequest;
    }

    /**
     * @return trasaRequestType
     */
    public function getTrasaRequest()
    {
      return $this->trasaRequest;
    }

    /**
     * @param trasaRequestType $trasaRequest
     * @return \App\ElektronicznyNadawca\isMiejscowa
     */
    public function setTrasaRequest($trasaRequest)
    {
      $this->trasaRequest = $trasaRequest;
      return $this;
    }

}
