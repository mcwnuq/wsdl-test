<?php

declare(strict_types=1);

namespace App\ElektronicznyNadawca\StructType;



/**
 * This class stands for isMiejscowaResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class IsMiejscowaResponse
{
    /**
     * The trasaResponse
     * Meta information extracted from the WSDL
     * - maxOccurs: 500
     * - minOccurs: 1
     * @var \App\ElektronicznyNadawca\StructType\TrasaResponseType[]
     */
    public array $trasaResponse;
    /**
     * Constructor method for isMiejscowaResponse
     * @uses IsMiejscowaResponse::setTrasaResponse()
     * @param \App\ElektronicznyNadawca\StructType\TrasaResponseType[] $trasaResponse
     */
    public function __construct(array $trasaResponse)
    {
        $this
            ->setTrasaResponse($trasaResponse);
    }
    /**
     * Get trasaResponse value
     * @return \App\ElektronicznyNadawca\StructType\TrasaResponseType[]
     */
    public function getTrasaResponse(): array
    {
        return $this->trasaResponse;
    }
    /**
     * Set trasaResponse value
     * @param \App\ElektronicznyNadawca\StructType\TrasaResponseType[] $trasaResponse
     * @return \App\ElektronicznyNadawca\StructType\IsMiejscowaResponse
     */
    public function setTrasaResponse(array $trasaResponse): self
    {
        $this->trasaResponse = $trasaResponse;
        
        return $this;
    }
    /**
     * Add item to trasaResponse value
     * @throws InvalidArgumentException
     * @param \App\ElektronicznyNadawca\StructType\TrasaResponseType $item
     * @return \App\ElektronicznyNadawca\StructType\IsMiejscowaResponse
     */
    public function addToTrasaResponse(\App\ElektronicznyNadawca\StructType\TrasaResponseType $item): self
    {
        $this->trasaResponse[] = $item;
        
        return $this;
    }
}
