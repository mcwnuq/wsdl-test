<?php

declare(strict_types=1);

namespace App\ElektronicznyNadawca\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for clearEnvelopeResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class ClearEnvelopeResponse extends AbstractStructBase
{
    /**
     * The retval
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var bool
     */
    public bool $retval;
    /**
     * The error
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \App\ElektronicznyNadawca\StructType\ErrorType[]
     */
    public ?array $error = null;
    /**
     * Constructor method for clearEnvelopeResponse
     * @uses ClearEnvelopeResponse::setRetval()
     * @uses ClearEnvelopeResponse::setError()
     * @param bool $retval
     * @param \App\ElektronicznyNadawca\StructType\ErrorType[] $error
     */
    public function __construct(bool $retval, ?array $error = null)
    {
        $this
            ->setRetval($retval)
            ->setError($error);
    }
    /**
     * Get retval value
     * @return bool
     */
    public function getRetval(): bool
    {
        return $this->retval;
    }
    /**
     * Set retval value
     * @param bool $retval
     * @return \App\ElektronicznyNadawca\StructType\ClearEnvelopeResponse
     */
    public function setRetval(bool $retval): self
    {
        $this->retval = $retval;
        
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
     * @return \App\ElektronicznyNadawca\StructType\ClearEnvelopeResponse
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
     * @return \App\ElektronicznyNadawca\StructType\ClearEnvelopeResponse
     */
    public function addToError(\App\ElektronicznyNadawca\StructType\ErrorType $item): self
    {
        $this->error[] = $item;
        
        return $this;
    }
}
