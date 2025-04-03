<?php

declare(strict_types=1);

namespace App\ElektronicznyNadawca\StructType;



/**
 * This class stands for getUbezpieczeniaInfoResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetUbezpieczeniaInfoResponse
{
    /**
     * The poziomyUbezpieczenia
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \App\ElektronicznyNadawca\StructType\UbezpieczeniaInfoType[]
     */
    public ?array $poziomyUbezpieczenia = null;
    /**
     * Constructor method for getUbezpieczeniaInfoResponse
     * @uses GetUbezpieczeniaInfoResponse::setPoziomyUbezpieczenia()
     * @param \App\ElektronicznyNadawca\StructType\UbezpieczeniaInfoType[] $poziomyUbezpieczenia
     */
    public function __construct(?array $poziomyUbezpieczenia = null)
    {
        $this
            ->setPoziomyUbezpieczenia($poziomyUbezpieczenia);
    }
    /**
     * Get poziomyUbezpieczenia value
     * @return \App\ElektronicznyNadawca\StructType\UbezpieczeniaInfoType[]
     */
    public function getPoziomyUbezpieczenia(): ?array
    {
        return $this->poziomyUbezpieczenia;
    }
    /**
     * Set poziomyUbezpieczenia value
     * @param \App\ElektronicznyNadawca\StructType\UbezpieczeniaInfoType[] $poziomyUbezpieczenia
     * @return \App\ElektronicznyNadawca\StructType\GetUbezpieczeniaInfoResponse
     */
    public function setPoziomyUbezpieczenia(?array $poziomyUbezpieczenia = null): self
    {
        $this->poziomyUbezpieczenia = $poziomyUbezpieczenia;
        
        return $this;
    }
    /**
     * Add item to poziomyUbezpieczenia value
     * @throws InvalidArgumentException
     * @param \App\ElektronicznyNadawca\StructType\UbezpieczeniaInfoType $item
     * @return \App\ElektronicznyNadawca\StructType\GetUbezpieczeniaInfoResponse
     */
    public function addToPoziomyUbezpieczenia(\App\ElektronicznyNadawca\StructType\UbezpieczeniaInfoType $item): self
    {
        $this->poziomyUbezpieczenia[] = $item;
        
        return $this;
    }
}
