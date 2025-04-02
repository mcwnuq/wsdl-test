<?php

namespace App\ElektronicznyNadawca;

class deleteParcelContent
{

    /**
     * @var parcelContentType $parcelContent
     */
    protected $parcelContent = null;

    /**
     * @param parcelContentType $parcelContent
     */
    public function __construct($parcelContent)
    {
      $this->parcelContent = $parcelContent;
    }

    /**
     * @return parcelContentType
     */
    public function getParcelContent()
    {
      return $this->parcelContent;
    }

    /**
     * @param parcelContentType $parcelContent
     * @return \App\ElektronicznyNadawca\deleteParcelContent
     */
    public function setParcelContent($parcelContent)
    {
      $this->parcelContent = $parcelContent;
      return $this;
    }

}
