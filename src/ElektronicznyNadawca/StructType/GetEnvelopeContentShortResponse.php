<?php

declare(strict_types=1);

namespace App\ElektronicznyNadawca\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getEnvelopeContentShortResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetEnvelopeContentShortResponse extends AbstractStructBase
{
    /**
     * The przesylka
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \App\ElektronicznyNadawca\StructType\PrzesylkaShortType[]
     */
    public ?array $przesylka = null;
    /**
     * Constructor method for getEnvelopeContentShortResponse
     * @uses GetEnvelopeContentShortResponse::setPrzesylka()
     * @param \App\ElektronicznyNadawca\StructType\PrzesylkaShortType[] $przesylka
     */
    public function __construct(?array $przesylka = null)
    {
        $this
            ->setPrzesylka($przesylka);
    }
    /**
     * Get przesylka value
     * @return \App\ElektronicznyNadawca\StructType\PrzesylkaShortType[]
     */
    public function getPrzesylka(): ?array
    {
        return $this->przesylka;
    }
    /**
     * Set przesylka value
     * @param \App\ElektronicznyNadawca\StructType\PrzesylkaShortType[] $przesylka
     * @return \App\ElektronicznyNadawca\StructType\GetEnvelopeContentShortResponse
     */
    public function setPrzesylka(?array $przesylka = null): self
    {
        $this->przesylka = $przesylka;
        
        return $this;
    }
    /**
     * Add item to przesylka value
     * @throws InvalidArgumentException
     * @param \App\ElektronicznyNadawca\StructType\PrzesylkaShortType $item
     * @return \App\ElektronicznyNadawca\StructType\GetEnvelopeContentShortResponse
     */
    public function addToPrzesylka(\App\ElektronicznyNadawca\StructType\PrzesylkaShortType $item): self
    {
        $this->przesylka[] = $item;
        
        return $this;
    }
}
