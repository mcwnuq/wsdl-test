<?php

declare(strict_types=1);

namespace App\ElektronicznyNadawca\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getKierunkiInfoResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetKierunkiInfoResponse extends AbstractStructBase
{
    /**
     * The lastUpdate
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public string $lastUpdate;
    /**
     * The usluga
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 1
     * @var \App\ElektronicznyNadawca\StructType\UslugiType[]
     */
    public array $usluga;
    /**
     * The error
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \App\ElektronicznyNadawca\StructType\ErrorType[]
     */
    public ?array $error = null;
    /**
     * Constructor method for getKierunkiInfoResponse
     * @uses GetKierunkiInfoResponse::setLastUpdate()
     * @uses GetKierunkiInfoResponse::setUsluga()
     * @uses GetKierunkiInfoResponse::setError()
     * @param string $lastUpdate
     * @param \App\ElektronicznyNadawca\StructType\UslugiType[] $usluga
     * @param \App\ElektronicznyNadawca\StructType\ErrorType[] $error
     */
    public function __construct(string $lastUpdate, array $usluga, ?array $error = null)
    {
        $this
            ->setLastUpdate($lastUpdate)
            ->setUsluga($usluga)
            ->setError($error);
    }
    /**
     * Get lastUpdate value
     * @return string
     */
    public function getLastUpdate(): string
    {
        return $this->lastUpdate;
    }
    /**
     * Set lastUpdate value
     * @param string $lastUpdate
     * @return \App\ElektronicznyNadawca\StructType\GetKierunkiInfoResponse
     */
    public function setLastUpdate(string $lastUpdate): self
    {
        $this->lastUpdate = $lastUpdate;
        
        return $this;
    }
    /**
     * Get usluga value
     * @return \App\ElektronicznyNadawca\StructType\UslugiType[]
     */
    public function getUsluga(): array
    {
        return $this->usluga;
    }
    /**
     * Set usluga value
     * @param \App\ElektronicznyNadawca\StructType\UslugiType[] $usluga
     * @return \App\ElektronicznyNadawca\StructType\GetKierunkiInfoResponse
     */
    public function setUsluga(array $usluga): self
    {
        $this->usluga = $usluga;
        
        return $this;
    }
    /**
     * Add item to usluga value
     * @throws InvalidArgumentException
     * @param \App\ElektronicznyNadawca\StructType\UslugiType $item
     * @return \App\ElektronicznyNadawca\StructType\GetKierunkiInfoResponse
     */
    public function addToUsluga(\App\ElektronicznyNadawca\StructType\UslugiType $item): self
    {
        $this->usluga[] = $item;
        
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
     * @return \App\ElektronicznyNadawca\StructType\GetKierunkiInfoResponse
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
     * @return \App\ElektronicznyNadawca\StructType\GetKierunkiInfoResponse
     */
    public function addToError(\App\ElektronicznyNadawca\StructType\ErrorType $item): self
    {
        $this->error[] = $item;
        
        return $this;
    }
}
