<?php

namespace App\ElektronicznyNadawca;

class setAktywnaKartaResponse
{

    /**
     * @var errorType $error
     */
    protected $error = null;

    /**
     * @param errorType $error
     */
    public function __construct($error)
    {
      $this->error = $error;
    }

    /**
     * @return errorType
     */
    public function getError()
    {
      return $this->error;
    }

    /**
     * @param errorType $error
     * @return \App\ElektronicznyNadawca\setAktywnaKartaResponse
     */
    public function setError($error)
    {
      $this->error = $error;
      return $this;
    }

}
