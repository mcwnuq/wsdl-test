<?php

declare(strict_types=1);

namespace App\ElektronicznyNadawca\StructType;



/**
 * This class stands for getEnvelopeContentFullResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetEnvelopeContentFullResponse
{
    /**
     * The przesylka
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \App\ElektronicznyNadawca\StructType\PrzesylkaFullType[]
     */
    public ?array $przesylka = null;
    /**
     * Constructor method for getEnvelopeContentFullResponse
     * @uses GetEnvelopeContentFullResponse::setPrzesylka()
     * @param \App\ElektronicznyNadawca\StructType\PrzesylkaFullType[] $przesylka
     */
    public function __construct(?array $przesylka = null)
    {
        $this
            ->setPrzesylka($przesylka);
    }
    /**
     * Get przesylka value
     * @return \App\ElektronicznyNadawca\StructType\PrzesylkaFullType[]
     */
    public function getPrzesylka(): ?array
    {
        return $this->przesylka;
    }
    /**
     * Set przesylka value
     * @param \App\ElektronicznyNadawca\StructType\PrzesylkaFullType[] $przesylka
     * @return \App\ElektronicznyNadawca\StructType\GetEnvelopeContentFullResponse
     */
    public function setPrzesylka(?array $przesylka = null): self
    {
        $this->przesylka = $przesylka;
        
        return $this;
    }
    /**
     * Add item to przesylka value
     * @throws InvalidArgumentException
     * @param \App\ElektronicznyNadawca\StructType\PrzesylkaFullType $item
     * @return \App\ElektronicznyNadawca\StructType\GetEnvelopeContentFullResponse
     */
    public function addToPrzesylka(\App\ElektronicznyNadawca\StructType\PrzesylkaFullType $item): self
    {
        $this->przesylka[] = $item;
        
        return $this;
    }
}
