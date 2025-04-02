<?php

declare(strict_types=1);

namespace App\ElektronicznyNadawca\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getEPOStatusResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetEPOStatusResponse extends AbstractStructBase
{
    /**
     * The epo
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \App\ElektronicznyNadawca\StructType\PrzesylkaEPOType[]
     */
    public ?array $epo = null;
    /**
     * The error
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \App\ElektronicznyNadawca\StructType\ErrorType[]
     */
    public ?array $error = null;
    /**
     * Constructor method for getEPOStatusResponse
     * @uses GetEPOStatusResponse::setEpo()
     * @uses GetEPOStatusResponse::setError()
     * @param \App\ElektronicznyNadawca\StructType\PrzesylkaEPOType[] $epo
     * @param \App\ElektronicznyNadawca\StructType\ErrorType[] $error
     */
    public function __construct(?array $epo = null, ?array $error = null)
    {
        $this
            ->setEpo($epo)
            ->setError($error);
    }
    /**
     * Get epo value
     * @return \App\ElektronicznyNadawca\StructType\PrzesylkaEPOType[]
     */
    public function getEpo(): ?array
    {
        return $this->epo;
    }
    /**
     * Set epo value
     * @param \App\ElektronicznyNadawca\StructType\PrzesylkaEPOType[] $epo
     * @return \App\ElektronicznyNadawca\StructType\GetEPOStatusResponse
     */
    public function setEpo(?array $epo = null): self
    {
        $this->epo = $epo;
        
        return $this;
    }
    /**
     * Add item to epo value
     * @throws InvalidArgumentException
     * @param \App\ElektronicznyNadawca\StructType\PrzesylkaEPOType $item
     * @return \App\ElektronicznyNadawca\StructType\GetEPOStatusResponse
     */
    public function addToEpo(\App\ElektronicznyNadawca\StructType\PrzesylkaEPOType $item): self
    {
        $this->epo[] = $item;
        
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
     * @return \App\ElektronicznyNadawca\StructType\GetEPOStatusResponse
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
     * @return \App\ElektronicznyNadawca\StructType\GetEPOStatusResponse
     */
    public function addToError(\App\ElektronicznyNadawca\StructType\ErrorType $item): self
    {
        $this->error[] = $item;
        
        return $this;
    }
}
