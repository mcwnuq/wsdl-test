<?php

namespace App\ElektronicznyNadawca;

class PrintType
{

    /**
     * @var PrintKindEnum $kind
     */
    protected $kind = null;

    /**
     * @var PrintMethodEnum $method
     */
    protected $method = null;

    /**
     * @var PrintFormatEnum $format
     */
    protected $format = null;

    /**
     * @var PrintResolutionEnum $resolution
     */
    protected $resolution = null;

    /**
     * @param PrintKindEnum $kind
     * @param PrintMethodEnum $method
     */
    public function __construct($kind, $method)
    {
      $this->kind = $kind;
      $this->method = $method;
    }

    /**
     * @return PrintKindEnum
     */
    public function getKind()
    {
      return $this->kind;
    }

    /**
     * @param PrintKindEnum $kind
     * @return \App\ElektronicznyNadawca\PrintType
     */
    public function setKind($kind)
    {
      $this->kind = $kind;
      return $this;
    }

    /**
     * @return PrintMethodEnum
     */
    public function getMethod()
    {
      return $this->method;
    }

    /**
     * @param PrintMethodEnum $method
     * @return \App\ElektronicznyNadawca\PrintType
     */
    public function setMethod($method)
    {
      $this->method = $method;
      return $this;
    }

    /**
     * @return PrintFormatEnum
     */
    public function getFormat()
    {
      return $this->format;
    }

    /**
     * @param PrintFormatEnum $format
     * @return \App\ElektronicznyNadawca\PrintType
     */
    public function setFormat($format)
    {
      $this->format = $format;
      return $this;
    }

    /**
     * @return PrintResolutionEnum
     */
    public function getResolution()
    {
      return $this->resolution;
    }

    /**
     * @param PrintResolutionEnum $resolution
     * @return \App\ElektronicznyNadawca\PrintType
     */
    public function setResolution($resolution)
    {
      $this->resolution = $resolution;
      return $this;
    }

}
