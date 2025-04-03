<?php

declare(strict_types=1);

namespace App\ElektronicznyNadawca\StructType;



/**
 * This class stands for sendEnvelopeResponseType StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SendEnvelopeResponseType
{
    /**
     * The idEnvelope
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var int|null
     */
    public ?int $idEnvelope = null;
    /**
     * The envelopeStatus
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    public ?string $envelopeStatus = null;
    /**
     * The error
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \App\ElektronicznyNadawca\StructType\ErrorType[]
     */
    public ?array $error = null;
    /**
     * The envelopeFilename
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    public ?string $envelopeFilename = null;
    /**
     * Constructor method for sendEnvelopeResponseType
     * @uses SendEnvelopeResponseType::setIdEnvelope()
     * @uses SendEnvelopeResponseType::setEnvelopeStatus()
     * @uses SendEnvelopeResponseType::setError()
     * @uses SendEnvelopeResponseType::setEnvelopeFilename()
     * @param int $idEnvelope
     * @param string $envelopeStatus
     * @param \App\ElektronicznyNadawca\StructType\ErrorType[] $error
     * @param string $envelopeFilename
     */
    public function __construct(?int $idEnvelope = null, ?string $envelopeStatus = null, ?array $error = null, ?string $envelopeFilename = null)
    {
        $this
            ->setIdEnvelope($idEnvelope)
            ->setEnvelopeStatus($envelopeStatus)
            ->setError($error)
            ->setEnvelopeFilename($envelopeFilename);
    }
    /**
     * Get idEnvelope value
     * @return int|null
     */
    public function getIdEnvelope(): ?int
    {
        return $this->idEnvelope;
    }
    /**
     * Set idEnvelope value
     * @param int $idEnvelope
     * @return \App\ElektronicznyNadawca\StructType\SendEnvelopeResponseType
     */
    public function setIdEnvelope(?int $idEnvelope = null): self
    {
        $this->idEnvelope = $idEnvelope;
        
        return $this;
    }
    /**
     * Get envelopeStatus value
     * @return string|null
     */
    public function getEnvelopeStatus(): ?string
    {
        return $this->envelopeStatus;
    }
    /**
     * Set envelopeStatus value
     * @param string $envelopeStatus
     * @return \App\ElektronicznyNadawca\StructType\SendEnvelopeResponseType
     */
    public function setEnvelopeStatus(?string $envelopeStatus = null): self
    {
        $this->envelopeStatus = $envelopeStatus;
        
        return $this;
    }
    /**
     * Get error value
     * @return \App\ElektronicznyNadawca\StructType\ErrorType[]
     */
    public function getError(): ?array
    {
        return $this->error;
    }
    /**
     * Set error value
     * @param \App\ElektronicznyNadawca\StructType\ErrorType[] $error
     * @return \App\ElektronicznyNadawca\StructType\SendEnvelopeResponseType
     */
    public function setError(?array $error = null): self
    {
        $this->error = $error;
        
        return $this;
    }
    /**
     * Add item to error value
     * @throws InvalidArgumentException
     * @param \App\ElektronicznyNadawca\StructType\ErrorType $item
     * @return \App\ElektronicznyNadawca\StructType\SendEnvelopeResponseType
     */
    public function addToError(\App\ElektronicznyNadawca\StructType\ErrorType $item): self
    {
        $this->error[] = $item;
        
        return $this;
    }
    /**
     * Get envelopeFilename value
     * @return string|null
     */
    public function getEnvelopeFilename(): ?string
    {
        return $this->envelopeFilename;
    }
    /**
     * Set envelopeFilename value
     * @param string $envelopeFilename
     * @return \App\ElektronicznyNadawca\StructType\SendEnvelopeResponseType
     */
    public function setEnvelopeFilename(?string $envelopeFilename = null): self
    {
        $this->envelopeFilename = $envelopeFilename;
        
        return $this;
    }
}
