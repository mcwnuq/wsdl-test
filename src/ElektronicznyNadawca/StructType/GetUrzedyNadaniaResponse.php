<?php

declare(strict_types=1);

namespace App\ElektronicznyNadawca\StructType;



/**
 * This class stands for getUrzedyNadaniaResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetUrzedyNadaniaResponse
{
    /**
     * The urzedyNadania
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \App\ElektronicznyNadawca\StructType\UrzadNadaniaFullType[]
     */
    public ?array $urzedyNadania = null;
    /**
     * Constructor method for getUrzedyNadaniaResponse
     * @uses GetUrzedyNadaniaResponse::setUrzedyNadania()
     * @param \App\ElektronicznyNadawca\StructType\UrzadNadaniaFullType[] $urzedyNadania
     */
    public function __construct(?array $urzedyNadania = null)
    {
        $this
            ->setUrzedyNadania($urzedyNadania);
    }
    /**
     * Get urzedyNadania value
     * @return \App\ElektronicznyNadawca\StructType\UrzadNadaniaFullType[]
     */
    public function getUrzedyNadania(): ?array
    {
        return $this->urzedyNadania;
    }
    /**
     * Set urzedyNadania value
     * @param \App\ElektronicznyNadawca\StructType\UrzadNadaniaFullType[] $urzedyNadania
     * @return \App\ElektronicznyNadawca\StructType\GetUrzedyNadaniaResponse
     */
    public function setUrzedyNadania(?array $urzedyNadania = null): self
    {
        $this->urzedyNadania = $urzedyNadania;
        
        return $this;
    }
    /**
     * Add item to urzedyNadania value
     * @throws InvalidArgumentException
     * @param \App\ElektronicznyNadawca\StructType\UrzadNadaniaFullType $item
     * @return \App\ElektronicznyNadawca\StructType\GetUrzedyNadaniaResponse
     */
    public function addToUrzedyNadania(\App\ElektronicznyNadawca\StructType\UrzadNadaniaFullType $item): self
    {
        $this->urzedyNadania[] = $item;
        
        return $this;
    }
}
