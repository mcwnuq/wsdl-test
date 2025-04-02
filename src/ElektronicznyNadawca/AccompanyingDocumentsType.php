<?php

namespace App\ElektronicznyNadawca;

class AccompanyingDocumentsType
{

    /**
     * @var AccompanyingDocumentsEnum $type
     */
    protected $type = null;

    /**
     * @var string $number
     */
    protected $number = null;

    /**
     * @param AccompanyingDocumentsEnum $type
     * @param string $number
     */
    public function __construct($type, $number)
    {
      $this->type = $type;
      $this->number = $number;
    }

    /**
     * @return AccompanyingDocumentsEnum
     */
    public function getType()
    {
      return $this->type;
    }

    /**
     * @param AccompanyingDocumentsEnum $type
     * @return \App\ElektronicznyNadawca\AccompanyingDocumentsType
     */
    public function setType($type)
    {
      $this->type = $type;
      return $this;
    }

    /**
     * @return string
     */
    public function getNumber()
    {
      return $this->number;
    }

    /**
     * @param string $number
     * @return \App\ElektronicznyNadawca\AccompanyingDocumentsType
     */
    public function setNumber($number)
    {
      $this->number = $number;
      return $this;
    }

}
