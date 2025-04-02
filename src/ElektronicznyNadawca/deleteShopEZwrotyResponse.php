<?php

namespace App\ElektronicznyNadawca;

class deleteShopEZwrotyResponse
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
     * @return \App\ElektronicznyNadawca\deleteShopEZwrotyResponse
     */
    public function setError($error)
    {
      $this->error = $error;
      return $this;
    }

}
