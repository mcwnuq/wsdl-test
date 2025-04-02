<?php

declare(strict_types=1);

namespace App\ElektronicznyNadawca\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for marketingowaZbiorczoType StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class MarketingowaZbiorczoType extends PrzesylkaNieRejestrowanaType
{
    /**
     * The masa
     * Meta information extracted from the WSDL
     * - documentation: masa przesyłki podana w gramach
     * - base: xsd:int
     * - maxInclusive: 9999999
     * - maxOccurs: 1
     * - minInclusive: 1
     * - minOccurs: 1
     * @var int
     */
    public int $masa;
    /**
     * The gabaryt
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    public ?string $gabaryt = null;
    /**
     * Constructor method for marketingowaZbiorczoType
     * @uses MarketingowaZbiorczoType::setMasa()
     * @uses MarketingowaZbiorczoType::setGabaryt()
     * @param int $masa
     * @param string $gabaryt
     */
    public function __construct(int $masa, ?string $gabaryt = null)
    {
        $this
            ->setMasa($masa)
            ->setGabaryt($gabaryt);
    }
    /**
     * Get masa value
     * @return int
     */
    public function getMasa(): int
    {
        return $this->masa;
    }
    /**
     * Set masa value
     * @param int $masa
     * @return \App\ElektronicznyNadawca\StructType\MarketingowaZbiorczoType
     */
    public function setMasa(int $masa): self
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
     * @return \App\ElektronicznyNadawca\StructType\MarketingowaZbiorczoType
     */
    public function setGabaryt(?string $gabaryt = null): self
    {
        $this->gabaryt = $gabaryt;
        
        return $this;
    }
}
