<?php

declare(strict_types=1);

namespace App\ElektronicznyNadawca\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for marketingowaZAdresemType StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class MarketingowaZAdresemType extends PrzesylkaType
{
    /**
     * The adres
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \App\ElektronicznyNadawca\StructType\AdresType
     */
    public \App\ElektronicznyNadawca\StructType\AdresType $adres;
    /**
     * The masa
     * Meta information extracted from the WSDL
     * - documentation: masa przesyłki podana w gramach
     * - base: xsd:int
     * - maxInclusive: 9999999
     * - maxOccurs: 1
     * - minInclusive: 1
     * - minOccurs: 0
     * @var int|null
     */
    public ?int $masa = null;
    /**
     * The gabaryt
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    public ?string $gabaryt = null;
    /**
     * Constructor method for marketingowaZAdresemType
     * @uses MarketingowaZAdresemType::setAdres()
     * @uses MarketingowaZAdresemType::setMasa()
     * @uses MarketingowaZAdresemType::setGabaryt()
     * @param \App\ElektronicznyNadawca\StructType\AdresType $adres
     * @param int $masa
     * @param string $gabaryt
     */
    public function __construct(\App\ElektronicznyNadawca\StructType\AdresType $adres, ?int $masa = null, ?string $gabaryt = null)
    {
        $this
            ->setAdres($adres)
            ->setMasa($masa)
            ->setGabaryt($gabaryt);
    }
    /**
     * Get adres value
     * @return \App\ElektronicznyNadawca\StructType\AdresType
     */
    public function getAdres(): \App\ElektronicznyNadawca\StructType\AdresType
    {
        return $this->adres;
    }
    /**
     * Set adres value
     * @param \App\ElektronicznyNadawca\StructType\AdresType $adres
     * @return \App\ElektronicznyNadawca\StructType\MarketingowaZAdresemType
     */
    public function setAdres(\App\ElektronicznyNadawca\StructType\AdresType $adres): self
    {
        $this->adres = $adres;
        
        return $this;
    }
    /**
     * Get masa value
     * @return int|null
     */
    public function getMasa(): ?int
    {
        return $this->masa;
    }
    /**
     * Set masa value
     * @param int $masa
     * @return \App\ElektronicznyNadawca\StructType\MarketingowaZAdresemType
     */
    public function setMasa(?int $masa = null): self
    {
        $this->masa = $masa;
        
        return $this;
    }
    /**
     * Get gabaryt value
     * @return string|null
     */
    public function getGabaryt(): ?string
    {
        return $this->gabaryt;
    }
    /**
     * Set gabaryt value
     * @param string $gabaryt
     * @return \App\ElektronicznyNadawca\StructType\MarketingowaZAdresemType
     */
    public function setGabaryt(?string $gabaryt = null): self
    {
        $this->gabaryt = $gabaryt;
        
        return $this;
    }
}
