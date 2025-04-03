<?php

declare(strict_types=1);

namespace App\ElektronicznyNadawca\StructType;



/**
 * This class stands for ShipmentContentsDetailsType StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class ShipmentContentsDetailsType
{
    /**
     * The description
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public string $description;
    /**
     * The quantity
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    public int $quantity;
    /**
     * The declaredValue
     * Meta information extracted from the WSDL
     * - documentation: Declared value of a given type of goods, without the decimal point, e.g. 20000 cents.
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    public int $declaredValue;
    /**
     * The netWeight
     * Meta information extracted from the WSDL
     * - documentation: Net weight [g].
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var int|null
     */
    public ?int $netWeight = null;
    /**
     * The harmonizedSystemCode
     * Meta information extracted from the WSDL
     * - documentation: Harmonized System (HS) Code.
     * - base: xsd:string
     * - maxOccurs: 1
     * - minOccurs: 0
     * - pattern: \d{1,10}
     * @var string|null
     */
    public ?string $harmonizedSystemCode = null;
    /**
     * The originLocationCode
     * Meta information extracted from the WSDL
     * - documentation: Code (ISO 3166) of the country of origin of the described content. example: US
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    public ?string $originLocationCode = null;
    /**
     * Constructor method for ShipmentContentsDetailsType
     * @uses ShipmentContentsDetailsType::setDescription()
     * @uses ShipmentContentsDetailsType::setQuantity()
     * @uses ShipmentContentsDetailsType::setDeclaredValue()
     * @uses ShipmentContentsDetailsType::setNetWeight()
     * @uses ShipmentContentsDetailsType::setHarmonizedSystemCode()
     * @uses ShipmentContentsDetailsType::setOriginLocationCode()
     * @param string $description
     * @param int $quantity
     * @param int $declaredValue
     * @param int $netWeight
     * @param string $harmonizedSystemCode
     * @param string $originLocationCode
     */
    public function __construct(string $description, int $quantity, int $declaredValue, ?int $netWeight = null, ?string $harmonizedSystemCode = null, ?string $originLocationCode = null)
    {
        $this
            ->setDescription($description)
            ->setQuantity($quantity)
            ->setDeclaredValue($declaredValue)
            ->setNetWeight($netWeight)
            ->setHarmonizedSystemCode($harmonizedSystemCode)
            ->setOriginLocationCode($originLocationCode);
    }
    /**
     * Get description value
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }
    /**
     * Set description value
     * @param string $description
     * @return \App\ElektronicznyNadawca\StructType\ShipmentContentsDetailsType
     */
    public function setDescription(string $description): self
    {
        $this->description = $description;
        
        return $this;
    }
    /**
     * Get quantity value
     * @return int
     */
    public function getQuantity(): int
    {
        return $this->quantity;
    }
    /**
     * Set quantity value
     * @param int $quantity
     * @return \App\ElektronicznyNadawca\StructType\ShipmentContentsDetailsType
     */
    public function setQuantity(int $quantity): self
    {
        $this->quantity = $quantity;
        
        return $this;
    }
    /**
     * Get declaredValue value
     * @return int
     */
    public function getDeclaredValue(): int
    {
        return $this->declaredValue;
    }
    /**
     * Set declaredValue value
     * @param int $declaredValue
     * @return \App\ElektronicznyNadawca\StructType\ShipmentContentsDetailsType
     */
    public function setDeclaredValue(int $declaredValue): self
    {
        $this->declaredValue = $declaredValue;
        
        return $this;
    }
    /**
     * Get netWeight value
     * @return int|null
     */
    public function getNetWeight(): ?int
    {
        return $this->netWeight;
    }
    /**
     * Set netWeight value
     * @param int $netWeight
     * @return \App\ElektronicznyNadawca\StructType\ShipmentContentsDetailsType
     */
    public function setNetWeight(?int $netWeight = null): self
    {
        $this->netWeight = $netWeight;
        
        return $this;
    }
    /**
     * Get harmonizedSystemCode value
     * @return string|null
     */
    public function getHarmonizedSystemCode(): ?string
    {
        return $this->harmonizedSystemCode;
    }
    /**
     * Set harmonizedSystemCode value
     * @param string $harmonizedSystemCode
     * @return \App\ElektronicznyNadawca\StructType\ShipmentContentsDetailsType
     */
    public function setHarmonizedSystemCode(?string $harmonizedSystemCode = null): self
    {
        $this->harmonizedSystemCode = $harmonizedSystemCode;
        
        return $this;
    }
    /**
     * Get originLocationCode value
     * @return string|null
     */
    public function getOriginLocationCode(): ?string
    {
        return $this->originLocationCode;
    }
    /**
     * Set originLocationCode value
     * @param string $originLocationCode
     * @return \App\ElektronicznyNadawca\StructType\ShipmentContentsDetailsType
     */
    public function setOriginLocationCode(?string $originLocationCode = null): self
    {
        $this->originLocationCode = $originLocationCode;
        
        return $this;
    }
}
