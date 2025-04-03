<?php

declare(strict_types=1);

namespace App\ElektronicznyNadawca\StructType;



/**
 * This class stands for getEnvelopeStatus StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetEnvelopeStatus
{
    /**
     * The idEnvelope
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    public int $idEnvelope;
    /**
     * Constructor method for getEnvelopeStatus
     * @uses GetEnvelopeStatus::setIdEnvelope()
     * @param int $idEnvelope
     */
    public function __construct(int $idEnvelope)
    {
        $this
            ->setIdEnvelope($idEnvelope);
    }
    /**
     * Get idEnvelope value
     * @return int
     */
    public function getIdEnvelope(): int
    {
        return $this->idEnvelope;
    }
    /**
     * Set idEnvelope value
     * @param int $idEnvelope
     * @return \App\ElektronicznyNadawca\StructType\GetEnvelopeStatus
     */
    public function setIdEnvelope(int $idEnvelope): self
    {
        $this->idEnvelope = $idEnvelope;
        
        return $this;
    }
}
