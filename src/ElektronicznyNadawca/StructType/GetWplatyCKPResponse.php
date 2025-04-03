<?php

declare(strict_types=1);

namespace App\ElektronicznyNadawca\StructType;



/**
 * This class stands for getWplatyCKPResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetWplatyCKPResponse
{
    /**
     * The wplaty
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \App\ElektronicznyNadawca\StructType\WplataCKPType[]
     */
    public ?array $wplaty = null;
    /**
     * The error
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \App\ElektronicznyNadawca\StructType\ErrorType[]
     */
    public ?array $error = null;
    /**
     * Constructor method for getWplatyCKPResponse
     * @uses GetWplatyCKPResponse::setWplaty()
     * @uses GetWplatyCKPResponse::setError()
     * @param \App\ElektronicznyNadawca\StructType\WplataCKPType[] $wplaty
     * @param \App\ElektronicznyNadawca\StructType\ErrorType[] $error
     */
    public function __construct(?array $wplaty = null, ?array $error = null)
    {
        $this
            ->setWplaty($wplaty)
            ->setError($error);
    }
    /**
     * Get wplaty value
     * @return \App\ElektronicznyNadawca\StructType\WplataCKPType[]
     */
    public function getWplaty(): ?array
    {
        return $this->wplaty;
    }
    /**
     * Set wplaty value
     * @param \App\ElektronicznyNadawca\StructType\WplataCKPType[] $wplaty
     * @return \App\ElektronicznyNadawca\StructType\GetWplatyCKPResponse
     */
    public function setWplaty(?array $wplaty = null): self
    {
        $this->wplaty = $wplaty;
        
        return $this;
    }
    /**
     * Add item to wplaty value
     * @throws InvalidArgumentException
     * @param \App\ElektronicznyNadawca\StructType\WplataCKPType $item
     * @return \App\ElektronicznyNadawca\StructType\GetWplatyCKPResponse
     */
    public function addToWplaty(\App\ElektronicznyNadawca\StructType\WplataCKPType $item): self
    {
        $this->wplaty[] = $item;
        
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
     * @return \App\ElektronicznyNadawca\StructType\GetWplatyCKPResponse
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
     * @return \App\ElektronicznyNadawca\StructType\GetWplatyCKPResponse
     */
    public function addToError(\App\ElektronicznyNadawca\StructType\ErrorType $item): self
    {
        $this->error[] = $item;
        
        return $this;
    }
}
