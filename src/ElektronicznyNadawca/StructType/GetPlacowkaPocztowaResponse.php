<?php

declare(strict_types=1);

namespace App\ElektronicznyNadawca\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getPlacowkaPocztowaResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetPlacowkaPocztowaResponse extends AbstractStructBase
{
    /**
     * The placowka
     * Meta information extracted from the WSDL
     * - maxOccurs: 5000
     * - minOccurs: 1
     * @var \App\ElektronicznyNadawca\StructType\PlacowkaPocztowaType[]
     */
    public array $placowka;
    /**
     * Constructor method for getPlacowkaPocztowaResponse
     * @uses GetPlacowkaPocztowaResponse::setPlacowka()
     * @param \App\ElektronicznyNadawca\StructType\PlacowkaPocztowaType[] $placowka
     */
    public function __construct(array $placowka)
    {
        $this
            ->setPlacowka($placowka);
    }
    /**
     * Get placowka value
     * @return \App\ElektronicznyNadawca\StructType\PlacowkaPocztowaType[]
     */
    public function getPlacowka(): array
    {
        return $this->placowka;
    }
    /**
     * Set placowka value
     * @param \App\ElektronicznyNadawca\StructType\PlacowkaPocztowaType[] $placowka
     * @return \App\ElektronicznyNadawca\StructType\GetPlacowkaPocztowaResponse
     */
    public function setPlacowka(array $placowka): self
    {
        $this->placowka = $placowka;
        
        return $this;
    }
    /**
     * Add item to placowka value
     * @throws InvalidArgumentException
     * @param \App\ElektronicznyNadawca\StructType\PlacowkaPocztowaType $item
     * @return \App\ElektronicznyNadawca\StructType\GetPlacowkaPocztowaResponse
     */
    public function addToPlacowka(\App\ElektronicznyNadawca\StructType\PlacowkaPocztowaType $item): self
    {
        $this->placowka[] = $item;
        
        return $this;
    }
}
