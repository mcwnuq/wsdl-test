<?php

namespace App\ElektronicznyNadawca;

class PrintResultType
{

    /**
     * @var guidType $guid
     */
    protected $guid = null;

    /**
     * @var base64Binary $print
     */
    protected $print = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return guidType
     */
    public function getGuid()
    {
      return $this->guid;
    }

    /**
     * @param guidType $guid
     * @return \App\ElektronicznyNadawca\PrintResultType
     */
    public function setGuid($guid)
    {
      $this->guid = $guid;
      return $this;
    }

    /**
     * @return base64Binary
     */
    public function getPrint()
    {
      return $this->print;
    }

    /**
     * @param base64Binary $print
     * @return \App\ElektronicznyNadawca\PrintResultType
     */
    public function setPrint($print)
    {
      $this->print = $print;
      return $this;
    }

}
