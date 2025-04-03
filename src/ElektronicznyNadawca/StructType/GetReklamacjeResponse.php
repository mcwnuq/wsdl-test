<?php

declare(strict_types=1);

namespace App\ElektronicznyNadawca\StructType;



/**
 * This class stands for getReklamacjeResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetReklamacjeResponse
{
    /**
     * The reklamacja
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \App\ElektronicznyNadawca\StructType\ReklamacjaRozpatrzonaType[]
     */
    public ?array $reklamacja = null;
    /**
     * Constructor method for getReklamacjeResponse
     * @uses GetReklamacjeResponse::setReklamacja()
     * @param \App\ElektronicznyNadawca\StructType\ReklamacjaRozpatrzonaType[] $reklamacja
     */
    public function __construct(?array $reklamacja = null)
    {
        $this
            ->setReklamacja($reklamacja);
    }
    /**
     * Get reklamacja value
     * @return \App\ElektronicznyNadawca\StructType\ReklamacjaRozpatrzonaType[]
     */
    public function getReklamacja(): ?array
    {
        return $this->reklamacja;
    }
    /**
     * Set reklamacja value
     * @param \App\ElektronicznyNadawca\StructType\ReklamacjaRozpatrzonaType[] $reklamacja
     * @return \App\ElektronicznyNadawca\StructType\GetReklamacjeResponse
     */
    public function setReklamacja(?array $reklamacja = null): self
    {
        $this->reklamacja = $reklamacja;
        
        return $this;
    }
    /**
     * Add item to reklamacja value
     * @throws InvalidArgumentException
     * @param \App\ElektronicznyNadawca\StructType\ReklamacjaRozpatrzonaType $item
     * @return \App\ElektronicznyNadawca\StructType\GetReklamacjeResponse
     */
    public function addToReklamacja(\App\ElektronicznyNadawca\StructType\ReklamacjaRozpatrzonaType $item): self
    {
        $this->reklamacja[] = $item;
        
        return $this;
    }
}
