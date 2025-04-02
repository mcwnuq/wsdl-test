<?php

namespace App\ElektronicznyNadawca;

class zawartoscPocztex2021Type
{

    /**
     * @var zawartoscSpecjalnaEnum $zawartoscSpecjalna
     */
    protected $zawartoscSpecjalna = null;

    /**
     * @var string $zawartoscInna
     */
    protected $zawartoscInna = null;

    /**
     * @param zawartoscSpecjalnaEnum $zawartoscSpecjalna
     * @param string $zawartoscInna
     */
    public function __construct($zawartoscSpecjalna, $zawartoscInna)
    {
      $this->zawartoscSpecjalna = $zawartoscSpecjalna;
      $this->zawartoscInna = $zawartoscInna;
    }

    /**
     * @return zawartoscSpecjalnaEnum
     */
    public function getZawartoscSpecjalna()
    {
      return $this->zawartoscSpecjalna;
    }

    /**
     * @param zawartoscSpecjalnaEnum $zawartoscSpecjalna
     * @return \App\ElektronicznyNadawca\zawartoscPocztex2021Type
     */
    public function setZawartoscSpecjalna($zawartoscSpecjalna)
    {
      $this->zawartoscSpecjalna = $zawartoscSpecjalna;
      return $this;
    }

    /**
     * @return string
     */
    public function getZawartoscInna()
    {
      return $this->zawartoscInna;
    }

    /**
     * @param string $zawartoscInna
     * @return \App\ElektronicznyNadawca\zawartoscPocztex2021Type
     */
    public function setZawartoscInna($zawartoscInna)
    {
      $this->zawartoscInna = $zawartoscInna;
      return $this;
    }

}
