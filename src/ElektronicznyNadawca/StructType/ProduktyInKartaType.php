<?php

declare(strict_types=1);

namespace App\ElektronicznyNadawca\StructType;



/**
 * This class stands for produktyInKartaType StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class ProduktyInKartaType
{
    /**
     * The produktInKarta
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \App\ElektronicznyNadawca\StructType\ProduktInKartaType[]
     */
    public ?array $produktInKarta = null;
    /**
     * Constructor method for produktyInKartaType
     * @uses ProduktyInKartaType::setProduktInKarta()
     * @param \App\ElektronicznyNadawca\StructType\ProduktInKartaType[] $produktInKarta
     */
    public function __construct(?array $produktInKarta = null)
    {
        $this
            ->setProduktInKarta($produktInKarta);
    }
    /**
     * Get produktInKarta value
     * @return \App\ElektronicznyNadawca\StructType\ProduktInKartaType[]
     */
    public function getProduktInKarta(): ?array
    {
        return $this->produktInKarta;
    }
    /**
     * Set produktInKarta value
     * @param \App\ElektronicznyNadawca\StructType\ProduktInKartaType[] $produktInKarta
     * @return \App\ElektronicznyNadawca\StructType\ProduktyInKartaType
     */
    public function setProduktInKarta(?array $produktInKarta = null): self
    {
        $this->produktInKarta = $produktInKarta;
        
        return $this;
    }
    /**
     * Add item to produktInKarta value
     * @throws InvalidArgumentException
     * @param \App\ElektronicznyNadawca\StructType\ProduktInKartaType $item
     * @return \App\ElektronicznyNadawca\StructType\ProduktyInKartaType
     */
    public function addToProduktInKarta(\App\ElektronicznyNadawca\StructType\ProduktInKartaType $item): self
    {
        $this->produktInKarta[] = $item;
        
        return $this;
    }
}
