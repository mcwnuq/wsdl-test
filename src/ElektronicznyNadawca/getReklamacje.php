<?php

namespace App\ElektronicznyNadawca;

class getReklamacje
{

    /**
     * @var date $dataRozpatrzenia
     */
    protected $dataRozpatrzenia = null;

    /**
     * @var guidType $guidPrzesylki
     */
    protected $guidPrzesylki = null;

    /**
     * @var dataZlozeniaType $dataZlozenia
     */
    protected $dataZlozenia = null;

    /**
     * @param date $dataRozpatrzenia
     * @param guidType $guidPrzesylki
     * @param dataZlozeniaType $dataZlozenia
     */
    public function __construct($dataRozpatrzenia, $guidPrzesylki, $dataZlozenia)
    {
      $this->dataRozpatrzenia = $dataRozpatrzenia;
      $this->guidPrzesylki = $guidPrzesylki;
      $this->dataZlozenia = $dataZlozenia;
    }

    /**
     * @return date
     */
    public function getDataRozpatrzenia()
    {
      return $this->dataRozpatrzenia;
    }

    /**
     * @param date $dataRozpatrzenia
     * @return \App\ElektronicznyNadawca\getReklamacje
     */
    public function setDataRozpatrzenia($dataRozpatrzenia)
    {
      $this->dataRozpatrzenia = $dataRozpatrzenia;
      return $this;
    }

    /**
     * @return guidType
     */
    public function getGuidPrzesylki()
    {
      return $this->guidPrzesylki;
    }

    /**
     * @param guidType $guidPrzesylki
     * @return \App\ElektronicznyNadawca\getReklamacje
     */
    public function setGuidPrzesylki($guidPrzesylki)
    {
      $this->guidPrzesylki = $guidPrzesylki;
      return $this;
    }

    /**
     * @return dataZlozeniaType
     */
    public function getDataZlozenia()
    {
      return $this->dataZlozenia;
    }

    /**
     * @param dataZlozeniaType $dataZlozenia
     * @return \App\ElektronicznyNadawca\getReklamacje
     */
    public function setDataZlozenia($dataZlozenia)
    {
      $this->dataZlozenia = $dataZlozenia;
      return $this;
    }

}
