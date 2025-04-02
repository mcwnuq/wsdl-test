<?php

declare(strict_types=1);

namespace App\ElektronicznyNadawca\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for isObszarMiastoResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class IsObszarMiastoResponse extends AbstractStructBase
{
    /**
     * The obszarAdresowy
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 1
     * @var \App\ElektronicznyNadawca\StructType\ObszarAdresowyResponseType[]
     */
    public array $obszarAdresowy;
    /**
     * Constructor method for isObszarMiastoResponse
     * @uses IsObszarMiastoResponse::setObszarAdresowy()
     * @param \App\ElektronicznyNadawca\StructType\ObszarAdresowyResponseType[] $obszarAdresowy
     */
    public function __construct(array $obszarAdresowy)
    {
        $this
            ->setObszarAdresowy($obszarAdresowy);
    }
    /**
     * Get obszarAdresowy value
     * @return \App\ElektronicznyNadawca\StructType\ObszarAdresowyResponseType[]
     */
    public function getObszarAdresowy(): array
    {
        return $this->obszarAdresowy;
    }
    /**
     * Set obszarAdresowy value
     * @param \App\ElektronicznyNadawca\StructType\ObszarAdresowyResponseType[] $obszarAdresowy
     * @return \App\ElektronicznyNadawca\StructType\IsObszarMiastoResponse
     */
    public function setObszarAdresowy(array $obszarAdresowy): self
    {
        $this->obszarAdresowy = $obszarAdresowy;
        
        return $this;
    }
    /**
     * Add item to obszarAdresowy value
     * @throws InvalidArgumentException
     * @param \App\ElektronicznyNadawca\StructType\ObszarAdresowyResponseType $item
     * @return \App\ElektronicznyNadawca\StructType\IsObszarMiastoResponse
     */
    public function addToObszarAdresowy(\App\ElektronicznyNadawca\StructType\ObszarAdresowyResponseType $item): self
    {
        $this->obszarAdresowy[] = $item;
        
        return $this;
    }
}
