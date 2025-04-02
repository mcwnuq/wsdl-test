<?php

declare(strict_types=1);

namespace App\ElektronicznyNadawca\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for isMiejscowa StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class IsMiejscowa extends AbstractStructBase
{
    /**
     * The trasaRequest
     * Meta information extracted from the WSDL
     * - maxOccurs: 500
     * - minOccurs: 1
     * @var \App\ElektronicznyNadawca\StructType\TrasaRequestType[]
     */
    public array $trasaRequest;
    /**
     * Constructor method for isMiejscowa
     * @uses IsMiejscowa::setTrasaRequest()
     * @param \App\ElektronicznyNadawca\StructType\TrasaRequestType[] $trasaRequest
     */
    public function __construct(array $trasaRequest)
    {
        $this
            ->setTrasaRequest($trasaRequest);
    }
    /**
     * Get trasaRequest value
     * @return \App\ElektronicznyNadawca\StructType\TrasaRequestType[]
     */
    public function getTrasaRequest(): array
    {
        return $this->trasaRequest;
    }
    /**
     * Set trasaRequest value
     * @param \App\ElektronicznyNadawca\StructType\TrasaRequestType[] $trasaRequest
     * @return \App\ElektronicznyNadawca\StructType\IsMiejscowa
     */
    public function setTrasaRequest(array $trasaRequest): self
    {
        $this->trasaRequest = $trasaRequest;
        
        return $this;
    }
    /**
     * Add item to trasaRequest value
     * @throws InvalidArgumentException
     * @param \App\ElektronicznyNadawca\StructType\TrasaRequestType $item
     * @return \App\ElektronicznyNadawca\StructType\IsMiejscowa
     */
    public function addToTrasaRequest(\App\ElektronicznyNadawca\StructType\TrasaRequestType $item): self
    {
        $this->trasaRequest[] = $item;
        
        return $this;
    }
}
