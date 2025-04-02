<?php

declare(strict_types=1);

namespace App\ElektronicznyNadawca\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getGuid StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetGuid extends AbstractStructBase
{
    /**
     * The ilosc
     * @var int|null
     */
    public ?int $ilosc = null;
    /**
     * Constructor method for getGuid
     * @uses GetGuid::setIlosc()
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
     * @return \App\ElektronicznyNadawca\StructType\GetGuid
     */
    public function setIlosc(?int $ilosc = null): self
    {
        $this->ilosc = $ilosc;
        
        return $this;
    }
}
