<?php

declare(strict_types=1);

namespace App\ElektronicznyNadawca\StructType;



/**
 * This class stands for getPlacowkiPocztoweResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetPlacowkiPocztoweResponse
{
    /**
     * The placowka
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 1
     * @var \App\ElektronicznyNadawca\StructType\PlacowkaPocztowaType[]
     */
    public array $placowka;
    /**
     * Constructor method for getPlacowkiPocztoweResponse
     * @uses GetPlacowkiPocztoweResponse::setPlacowka()
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
     * @return \App\ElektronicznyNadawca\StructType\GetPlacowkiPocztoweResponse
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
     * @return \App\ElektronicznyNadawca\StructType\GetPlacowkiPocztoweResponse
     */
    public function addToPlacowka(\App\ElektronicznyNadawca\StructType\PlacowkaPocztowaType $item): self
    {
        $this->placowka[] = $item;
        
        return $this;
    }
}
