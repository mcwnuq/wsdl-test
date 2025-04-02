<?php

declare(strict_types=1);

namespace App\ElektronicznyNadawca\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for isObszarMiasto StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class IsObszarMiasto extends AbstractStructBase
{
    /**
     * The adres
     * Meta information extracted from the WSDL
     * - maxOccurs: 500
     * - minOccurs: 1
     * @var \App\ElektronicznyNadawca\StructType\ObszarAdresowyType[]
     */
    public array $adres;
    /**
     * Constructor method for isObszarMiasto
     * @uses IsObszarMiasto::setAdres()
     * @param \App\ElektronicznyNadawca\StructType\ObszarAdresowyType[] $adres
     */
    public function __construct(array $adres)
    {
        $this
            ->setAdres($adres);
    }
    /**
     * Get adres value
     * @return \App\ElektronicznyNadawca\StructType\ObszarAdresowyType[]
     */
    public function getAdres(): array
    {
        return $this->adres;
    }
    /**
     * Set adres value
     * @param \App\ElektronicznyNadawca\StructType\ObszarAdresowyType[] $adres
     * @return \App\ElektronicznyNadawca\StructType\IsObszarMiasto
     */
    public function setAdres(array $adres): self
    {
        $this->adres = $adres;
        
        return $this;
    }
    /**
     * Add item to adres value
     * @throws InvalidArgumentException
     * @param \App\ElektronicznyNadawca\StructType\ObszarAdresowyType $item
     * @return \App\ElektronicznyNadawca\StructType\IsObszarMiasto
     */
    public function addToAdres(\App\ElektronicznyNadawca\StructType\ObszarAdresowyType $item): self
    {
        $this->adres[] = $item;
        
        return $this;
    }
}
