<?php

declare(strict_types=1);

namespace App\ElektronicznyNadawca\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for przesylkaFullType StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class PrzesylkaFullType extends AbstractStructBase
{
    /**
     * The przesylkaShort
     * @var \App\ElektronicznyNadawca\StructType\PrzesylkaShortType|null
     */
    public ?\App\ElektronicznyNadawca\StructType\PrzesylkaShortType $przesylkaShort = null;
    /**
     * The przesylkaFull
     * @var \App\ElektronicznyNadawca\StructType\PrzesylkaType|null
     */
    public ?\App\ElektronicznyNadawca\StructType\PrzesylkaType $przesylkaFull = null;
    /**
     * Constructor method for przesylkaFullType
     * @uses PrzesylkaFullType::setPrzesylkaShort()
     * @uses PrzesylkaFullType::setPrzesylkaFull()
     * @param \App\ElektronicznyNadawca\StructType\PrzesylkaShortType $przesylkaShort
     * @param \App\ElektronicznyNadawca\StructType\PrzesylkaType $przesylkaFull
     */
    public function __construct(?\App\ElektronicznyNadawca\StructType\PrzesylkaShortType $przesylkaShort = null, ?\App\ElektronicznyNadawca\StructType\PrzesylkaType $przesylkaFull = null)
    {
        $this
            ->setPrzesylkaShort($przesylkaShort)
            ->setPrzesylkaFull($przesylkaFull);
    }
    /**
     * Get przesylkaShort value
     * @return \App\ElektronicznyNadawca\StructType\PrzesylkaShortType|null
     */
    public function getPrzesylkaShort(): ?\App\ElektronicznyNadawca\StructType\PrzesylkaShortType
    {
        return $this->przesylkaShort;
    }
    /**
     * Set przesylkaShort value
     * @param \App\ElektronicznyNadawca\StructType\PrzesylkaShortType $przesylkaShort
     * @return \App\ElektronicznyNadawca\StructType\PrzesylkaFullType
     */
    public function setPrzesylkaShort(?\App\ElektronicznyNadawca\StructType\PrzesylkaShortType $przesylkaShort = null): self
    {
        $this->przesylkaShort = $przesylkaShort;
        
        return $this;
    }
    /**
     * Get przesylkaFull value
     * @return \App\ElektronicznyNadawca\StructType\PrzesylkaType|null
     */
    public function getPrzesylkaFull(): ?\App\ElektronicznyNadawca\StructType\PrzesylkaType
    {
        return $this->przesylkaFull;
    }
    /**
     * Set przesylkaFull value
     * @param \App\ElektronicznyNadawca\StructType\PrzesylkaType $przesylkaFull
     * @return \App\ElektronicznyNadawca\StructType\PrzesylkaFullType
     */
    public function setPrzesylkaFull(?\App\ElektronicznyNadawca\StructType\PrzesylkaType $przesylkaFull = null): self
    {
        $this->przesylkaFull = $przesylkaFull;
        
        return $this;
    }
}
