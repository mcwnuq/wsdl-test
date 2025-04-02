<?php

declare(strict_types=1);

namespace App\ElektronicznyNadawca\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getEnvelopeBuforResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetEnvelopeBuforResponse extends AbstractStructBase
{
    /**
     * The przesylka
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \App\ElektronicznyNadawca\StructType\PrzesylkaType[]
     */
    public ?array $przesylka = null;
    /**
     * The error
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \App\ElektronicznyNadawca\StructType\ErrorType[]
     */
    public ?array $error = null;
    /**
     * Constructor method for getEnvelopeBuforResponse
     * @uses GetEnvelopeBuforResponse::setPrzesylka()
     * @uses GetEnvelopeBuforResponse::setError()
     * @param \App\ElektronicznyNadawca\StructType\PrzesylkaType[] $przesylka
     * @param \App\ElektronicznyNadawca\StructType\ErrorType[] $error
     */
    public function __construct(?array $przesylka = null, ?array $error = null)
    {
        $this
            ->setPrzesylka($przesylka)
            ->setError($error);
    }
    /**
     * Get przesylka value
     * @return \App\ElektronicznyNadawca\StructType\PrzesylkaType[]
     */
    public function getPrzesylka(): ?array
    {
        return $this->przesylka;
    }
    /**
     * Set przesylka value
     * @param \App\ElektronicznyNadawca\StructType\PrzesylkaType[] $przesylka
     * @return \App\ElektronicznyNadawca\StructType\GetEnvelopeBuforResponse
     */
    public function setPrzesylka(?array $przesylka = null): self
    {
        $this->przesylka = $przesylka;
        
        return $this;
    }
    /**
     * Add item to przesylka value
     * @throws InvalidArgumentException
     * @param \App\ElektronicznyNadawca\StructType\PrzesylkaType $item
     * @return \App\ElektronicznyNadawca\StructType\GetEnvelopeBuforResponse
     */
    public function addToPrzesylka(\App\ElektronicznyNadawca\StructType\PrzesylkaType $item): self
    {
        $this->przesylka[] = $item;
        
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
     * @return \App\ElektronicznyNadawca\StructType\GetEnvelopeBuforResponse
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
     * @return \App\ElektronicznyNadawca\StructType\GetEnvelopeBuforResponse
     */
    public function addToError(\App\ElektronicznyNadawca\StructType\ErrorType $item): self
    {
        $this->error[] = $item;
        
        return $this;
    }
}
