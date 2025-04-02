<?php

namespace App\ElektronicznyNadawca;

class getEnvelopeContentFullResponse
{

    /**
     * @var przesylkaFullType $przesylka
     */
    protected $przesylka = null;

    /**
     * @param przesylkaFullType $przesylka
     */
    public function __construct($przesylka)
    {
      $this->przesylka = $przesylka;
    }

    /**
     * @return przesylkaFullType
     */
    public function getPrzesylka()
    {
      return $this->przesylka;
    }

    /**
     * @param przesylkaFullType $przesylka
     * @return \App\ElektronicznyNadawca\getEnvelopeContentFullResponse
     */
    public function setPrzesylka($przesylka)
    {
      $this->przesylka = $przesylka;
      return $this;
    }

}
