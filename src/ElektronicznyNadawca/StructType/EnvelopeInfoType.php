<?php

declare(strict_types=1);

namespace App\ElektronicznyNadawca\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for envelopeInfoType StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class EnvelopeInfoType extends AbstractStructBase
{
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
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    public ?array $envelopeFilename = null;
    /**
     * The idKarta
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var int|null
     */
    public ?int $idKarta = null;
    /**
     * The idEnvelope
     * @var int|null
     */
    public ?int $idEnvelope = null;
    /**
     * The envelopeStatus
     * @var string|null
     */
    public ?string $envelopeStatus = null;
    /**
     * The dataTransmisji
     * @var string|null
     */
    public ?string $dataTransmisji = null;
    /**
     * Constructor method for envelopeInfoType
     * @uses EnvelopeInfoType::setError()
     * @uses EnvelopeInfoType::setEnvelopeFilename()
     * @uses EnvelopeInfoType::setIdKarta()
     * @uses EnvelopeInfoType::setIdEnvelope()
     * @uses EnvelopeInfoType::setEnvelopeStatus()
     * @uses EnvelopeInfoType::setDataTransmisji()
     * @param \App\ElektronicznyNadawca\StructType\ErrorType[] $error
     * @param string[] $envelopeFilename
     * @param int $idKarta
     * @param int $idEnvelope
     * @param string $envelopeStatus
     * @param string $dataTransmisji
     */
    public function __construct(?array $error = null, ?array $envelopeFilename = null, ?int $idKarta = null, ?int $idEnvelope = null, ?string $envelopeStatus = null, ?string $dataTransmisji = null)
    {
        $this
            ->setError($error)
            ->setEnvelopeFilename($envelopeFilename)
            ->setIdKarta($idKarta)
            ->setIdEnvelope($idEnvelope)
            ->setEnvelopeStatus($envelopeStatus)
            ->setDataTransmisji($dataTransmisji);
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
     * @return \App\ElektronicznyNadawca\StructType\EnvelopeInfoType
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
     * @return \App\ElektronicznyNadawca\StructType\EnvelopeInfoType
     */
    public function addToError(\App\ElektronicznyNadawca\StructType\ErrorType $item): self
    {
        $this->error[] = $item;
        
        return $this;
    }
    /**
     * Get envelopeFilename value
     * @return string[]
     */
    public function getEnvelopeFilename(): ?array
    {
        return $this->envelopeFilename;
    }
    /**
     * Set envelopeFilename value
     * @param string[] $envelopeFilename
     * @return \App\ElektronicznyNadawca\StructType\EnvelopeInfoType
     */
    public function setEnvelopeFilename(?array $envelopeFilename = null): self
    {
        $this->envelopeFilename = $envelopeFilename;
        
        return $this;
    }
    /**
     * Add item to envelopeFilename value
     * @throws InvalidArgumentException
     * @param string $item
     * @return \App\ElektronicznyNadawca\StructType\EnvelopeInfoType
     */
    public function addToEnvelopeFilename(string $item): self
    {
        $this->envelopeFilename[] = $item;
        
        return $this;
    }
    /**
     * Get idKarta value
     * @return int|null
     */
    public function getIdKarta(): ?int
    {
        return $this->idKarta;
    }
    /**
     * Set idKarta value
     * @param int $idKarta
     * @return \App\ElektronicznyNadawca\StructType\EnvelopeInfoType
     */
    public function setIdKarta(?int $idKarta = null): self
    {
        $this->idKarta = $idKarta;
        
        return $this;
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
     * @return \App\ElektronicznyNadawca\StructType\EnvelopeInfoType
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
     * @return \App\ElektronicznyNadawca\StructType\EnvelopeInfoType
     */
    public function setEnvelopeStatus(?string $envelopeStatus = null): self
    {
        $this->envelopeStatus = $envelopeStatus;
        
        return $this;
    }
    /**
     * Get dataTransmisji value
     * @return string|null
     */
    public function getDataTransmisji(): ?string
    {
        return $this->dataTransmisji;
    }
    /**
     * Set dataTransmisji value
     * @param string $dataTransmisji
     * @return \App\ElektronicznyNadawca\StructType\EnvelopeInfoType
     */
    public function setDataTransmisji(?string $dataTransmisji = null): self
    {
        $this->dataTransmisji = $dataTransmisji;
        
        return $this;
    }
}
