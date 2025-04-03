<?php

declare(strict_types=1);

namespace App\ElektronicznyNadawca\StructType;



/**
 * This class stands for getUrzedyWydajaceEPrzesylkiResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetUrzedyWydajaceEPrzesylkiResponse
{
    /**
     * The urzadWydaniaEPrzesylki
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 1
     * @var \App\ElektronicznyNadawca\StructType\UrzadWydaniaEPrzesylkiType[]
     */
    public array $urzadWydaniaEPrzesylki;
    /**
     * Constructor method for getUrzedyWydajaceEPrzesylkiResponse
     * @uses GetUrzedyWydajaceEPrzesylkiResponse::setUrzadWydaniaEPrzesylki()
     * @param \App\ElektronicznyNadawca\StructType\UrzadWydaniaEPrzesylkiType[] $urzadWydaniaEPrzesylki
     */
    public function __construct(array $urzadWydaniaEPrzesylki)
    {
        $this
            ->setUrzadWydaniaEPrzesylki($urzadWydaniaEPrzesylki);
    }
    /**
     * Get urzadWydaniaEPrzesylki value
     * @return \App\ElektronicznyNadawca\StructType\UrzadWydaniaEPrzesylkiType[]
     */
    public function getUrzadWydaniaEPrzesylki(): array
    {
        return $this->urzadWydaniaEPrzesylki;
    }
    /**
     * Set urzadWydaniaEPrzesylki value
     * @param \App\ElektronicznyNadawca\StructType\UrzadWydaniaEPrzesylkiType[] $urzadWydaniaEPrzesylki
     * @return \App\ElektronicznyNadawca\StructType\GetUrzedyWydajaceEPrzesylkiResponse
     */
    public function setUrzadWydaniaEPrzesylki(array $urzadWydaniaEPrzesylki): self
    {
        $this->urzadWydaniaEPrzesylki = $urzadWydaniaEPrzesylki;
        
        return $this;
    }
    /**
     * Add item to urzadWydaniaEPrzesylki value
     * @throws InvalidArgumentException
     * @param \App\ElektronicznyNadawca\StructType\UrzadWydaniaEPrzesylkiType $item
     * @return \App\ElektronicznyNadawca\StructType\GetUrzedyWydajaceEPrzesylkiResponse
     */
    public function addToUrzadWydaniaEPrzesylki(\App\ElektronicznyNadawca\StructType\UrzadWydaniaEPrzesylkiType $item): self
    {
        $this->urzadWydaniaEPrzesylki[] = $item;
        
        return $this;
    }
}
