<?php

declare(strict_types=1);

namespace App\ElektronicznyNadawca\StructType;



/**
 * This class stands for getEnvelopeListResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetEnvelopeListResponse
{
    /**
     * The envelopes
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \App\ElektronicznyNadawca\StructType\EnvelopeInfoType[]
     */
    public ?array $envelopes = null;
    /**
     * Constructor method for getEnvelopeListResponse
     * @uses GetEnvelopeListResponse::setEnvelopes()
     * @param \App\ElektronicznyNadawca\StructType\EnvelopeInfoType[] $envelopes
     */
    public function __construct(?array $envelopes = null)
    {
        $this
            ->setEnvelopes($envelopes);
    }
    /**
     * Get envelopes value
     * @return \App\ElektronicznyNadawca\StructType\EnvelopeInfoType[]
     */
    public function getEnvelopes(): ?array
    {
        return $this->envelopes;
    }
    /**
     * Set envelopes value
     * @param \App\ElektronicznyNadawca\StructType\EnvelopeInfoType[] $envelopes
     * @return \App\ElektronicznyNadawca\StructType\GetEnvelopeListResponse
     */
    public function setEnvelopes(?array $envelopes = null): self
    {
        $this->envelopes = $envelopes;
        
        return $this;
    }
    /**
     * Add item to envelopes value
     * @throws InvalidArgumentException
     * @param \App\ElektronicznyNadawca\StructType\EnvelopeInfoType $item
     * @return \App\ElektronicznyNadawca\StructType\GetEnvelopeListResponse
     */
    public function addToEnvelopes(\App\ElektronicznyNadawca\StructType\EnvelopeInfoType $item): self
    {
        $this->envelopes[] = $item;
        
        return $this;
    }
}
