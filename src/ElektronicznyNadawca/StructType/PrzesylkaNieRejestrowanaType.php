<?php

declare(strict_types=1);

namespace App\ElektronicznyNadawca\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for przesylkaNieRejestrowanaType StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
abstract class PrzesylkaNieRejestrowanaType extends PrzesylkaType
{
    /**
     * The ilosc
     * Meta information extracted from the WSDL
     * - base: xsd:int
     * - maxInclusive: 9999999
     * - minInclusive: 1
     * @var int|null
     */
    public ?int $ilosc = null;
    /**
     * Constructor method for przesylkaNieRejestrowanaType
     * @uses PrzesylkaNieRejestrowanaType::setIlosc()
     * @param int $ilosc
     */
    public function __construct(?int $ilosc = null)
    {
        $this
            ->setIlosc($ilosc);
    }
    /**
     * Get ilosc value
     * @return int|null
     */
    public function getIlosc(): ?int
    {
        return $this->ilosc;
    }
    /**
     * Set ilosc value
     * @param int $ilosc
     * @return \App\ElektronicznyNadawca\StructType\PrzesylkaNieRejestrowanaType
     */
    public function setIlosc(?int $ilosc = null): self
    {
        $this->ilosc = $ilosc;
        
        return $this;
    }
}
