<?php

namespace App\ElektronicznyNadawca;

class getPrintForParcel
{

    /**
     * @var guidType $guid
     */
    protected $guid = null;

    /**
     * @var PrintType $type
     */
    protected $type = null;

    /**
     * @param guidType $guid
     * @param PrintType $type
     */
    public function __construct($guid, $type)
    {
      $this->guid = $guid;
      $this->type = $type;
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
     * @return \App\ElektronicznyNadawca\getPrintForParcel
     */
    public function setGuid($guid)
    {
      $this->guid = $guid;
      return $this;
    }

    /**
     * @return PrintType
     */
    public function getType()
    {
      return $this->type;
    }

    /**
     * @param PrintType $type
     * @return \App\ElektronicznyNadawca\getPrintForParcel
     */
    public function setType($type)
    {
      $this->type = $type;
      return $this;
    }

}
