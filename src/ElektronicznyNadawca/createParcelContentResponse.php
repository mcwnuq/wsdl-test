<?php

namespace App\ElektronicznyNadawca;

class createParcelContentResponse
{

    /**
     * @var parcelContentType $parcelContent
     */
    protected $parcelContent = null;

    /**
     * @var errorType $error
     */
    protected $error = null;

    /**
     * @param parcelContentType $parcelContent
     * @param errorType $error
     */
    public function __construct($parcelContent, $error)
    {
      $this->parcelContent = $parcelContent;
      $this->error = $error;
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
     * @return \App\ElektronicznyNadawca\createParcelContentResponse
     */
    public function setParcelContent($parcelContent)
    {
      $this->parcelContent = $parcelContent;
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
     * @return \App\ElektronicznyNadawca\createParcelContentResponse
     */
    public function setError($error)
    {
      $this->error = $error;
      return $this;
    }

}
