<?php

namespace App\ElektronicznyNadawca;

class getKartyResponse
{

    /**
     * @var kartaType $karta
     */
    protected $karta = null;

    /**
     * @var errorType $error
     */
    protected $error = null;

    /**
     * @param kartaType $karta
     * @param errorType $error
     */
    public function __construct($karta, $error)
    {
      $this->karta = $karta;
      $this->error = $error;
    }

    /**
     * @return kartaType
     */
    public function getKarta()
    {
      return $this->karta;
    }

    /**
     * @param kartaType $karta
     * @return \App\ElektronicznyNadawca\getKartyResponse
     */
    public function setKarta($karta)
    {
      $this->karta = $karta;
      return $this;
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
     * @return \App\ElektronicznyNadawca\getKartyResponse
     */
    public function setError($error)
    {
      $this->error = $error;
      return $this;
    }

}
