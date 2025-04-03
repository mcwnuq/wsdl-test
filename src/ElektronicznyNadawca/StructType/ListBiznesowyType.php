<?php

declare(strict_types=1);

namespace App\ElektronicznyNadawca\StructType;



/**
 * This class stands for listBiznesowyType StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class ListBiznesowyType extends PrzesylkaNieRejestrowanaType
{
    /**
     * The masa
     * Meta information extracted from the WSDL
     * - documentation: masa przesyłki podana w gramach
     * - base: xsd:int
     * - maxInclusive: 9999999
     * - minInclusive: 1
     * @var int|null
     */
    public ?int $masa = null;
    /**
     * Constructor method for listBiznesowyType
     * @uses ListBiznesowyType::setMasa()
     * @param int $masa
     */
    public function __construct(?int $masa = null)
    {
        $this
            ->setMasa($masa);
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
     * @return \App\ElektronicznyNadawca\StructType\ListBiznesowyType
     */
    public function setMasa(?int $masa = null): self
    {
        $this->masa = $masa;
        
        return $this;
    }
}
