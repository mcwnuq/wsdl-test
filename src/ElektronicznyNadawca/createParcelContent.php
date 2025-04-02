<?php

namespace App\ElektronicznyNadawca;

class createParcelContent
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
     * @return \App\ElektronicznyNadawca\createParcelContent
     */
    public function setParcelContent($parcelContent)
    {
      $this->parcelContent = $parcelContent;
      return $this;
    }

}
