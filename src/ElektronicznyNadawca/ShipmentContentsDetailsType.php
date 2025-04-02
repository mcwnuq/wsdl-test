<?php

namespace App\ElektronicznyNadawca;

class ShipmentContentsDetailsType
{

    /**
     * @var string $description
     */
    protected $description = null;

    /**
     * @var int $quantity
     */
    protected $quantity = null;

    /**
     * @var int $netWeight
     */
    protected $netWeight = null;

    /**
     * @var int $declaredValue
     */
    protected $declaredValue = null;

    /**
     * @var HarmonizedSystemCodeType $harmonizedSystemCode
     */
    protected $harmonizedSystemCode = null;

    /**
     * @var string $originLocationCode
     */
    protected $originLocationCode = null;

    /**
     * @param string $description
     * @param int $quantity
     * @param int $declaredValue
     */
    public function __construct($description, $quantity, $declaredValue)
    {
      $this->description = $description;
      $this->quantity = $quantity;
      $this->declaredValue = $declaredValue;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
      return $this->description;
    }

    /**
     * @param string $description
     * @return \App\ElektronicznyNadawca\ShipmentContentsDetailsType
     */
    public function setDescription($description)
    {
      $this->description = $description;
      return $this;
    }

    /**
     * @return int
     */
    public function getQuantity()
    {
      return $this->quantity;
    }

    /**
     * @param int $quantity
     * @return \App\ElektronicznyNadawca\ShipmentContentsDetailsType
     */
    public function setQuantity($quantity)
    {
      $this->quantity = $quantity;
      return $this;
    }

    /**
     * @return int
     */
    public function getNetWeight()
    {
      return $this->netWeight;
    }

    /**
     * @param int $netWeight
     * @return \App\ElektronicznyNadawca\ShipmentContentsDetailsType
     */
    public function setNetWeight($netWeight)
    {
      $this->netWeight = $netWeight;
      return $this;
    }

    /**
     * @return int
     */
    public function getDeclaredValue()
    {
      return $this->declaredValue;
    }

    /**
     * @param int $declaredValue
     * @return \App\ElektronicznyNadawca\ShipmentContentsDetailsType
     */
    public function setDeclaredValue($declaredValue)
    {
      $this->declaredValue = $declaredValue;
      return $this;
    }

    /**
     * @return HarmonizedSystemCodeType
     */
    public function getHarmonizedSystemCode()
    {
      return $this->harmonizedSystemCode;
    }

    /**
     * @param HarmonizedSystemCodeType $harmonizedSystemCode
     * @return \App\ElektronicznyNadawca\ShipmentContentsDetailsType
     */
    public function setHarmonizedSystemCode($harmonizedSystemCode)
    {
      $this->harmonizedSystemCode = $harmonizedSystemCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getOriginLocationCode()
    {
      return $this->originLocationCode;
    }

    /**
     * @param string $originLocationCode
     * @return \App\ElektronicznyNadawca\ShipmentContentsDetailsType
     */
    public function setOriginLocationCode($originLocationCode)
    {
      $this->originLocationCode = $originLocationCode;
      return $this;
    }

}
