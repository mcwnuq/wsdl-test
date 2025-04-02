<?php

declare(strict_types=1);

namespace App\ElektronicznyNadawca\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DokumentyTowarzyszaceType StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class DokumentyTowarzyszaceType extends AbstractStructBase
{
    /**
     * The rodzaj
     * @var string|null
     */
    public ?string $rodzaj = null;
    /**
     * The numer
     * @var string|null
     */
    public ?string $numer = null;
    /**
     * Constructor method for DokumentyTowarzyszaceType
     * @uses DokumentyTowarzyszaceType::setRodzaj()
     * @uses DokumentyTowarzyszaceType::setNumer()
     * @param string $rodzaj
     * @param string $numer
     */
    public function __construct(?string $rodzaj = null, ?string $numer = null)
    {
        $this
            ->setRodzaj($rodzaj)
            ->setNumer($numer);
    }
    /**
     * Get rodzaj value
     * @return string|null
     */
    public function getRodzaj(): ?string
    {
        return $this->rodzaj;
    }
    /**
     * Set rodzaj value
     * @param string $rodzaj
     * @return \App\ElektronicznyNadawca\StructType\DokumentyTowarzyszaceType
     */
    public function setRodzaj(?string $rodzaj = null): self
    {
        $this->rodzaj = $rodzaj;
        
        return $this;
    }
    /**
     * Get numer value
     * @return string|null
     */
    public function getNumer(): ?string
    {
        return $this->numer;
    }
    /**
     * Set numer value
     * @param string $numer
     * @return \App\ElektronicznyNadawca\StructType\DokumentyTowarzyszaceType
     */
    public function setNumer(?string $numer = null): self
    {
        $this->numer = $numer;
        
        return $this;
    }
}
