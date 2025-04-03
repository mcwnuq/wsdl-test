<?php

declare(strict_types=1);

namespace App\ElektronicznyNadawca\StructType;



/**
 * This class stands for createEnvelopeBuforResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class CreateEnvelopeBuforResponse
{
    /**
     * The createdBufor
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \App\ElektronicznyNadawca\StructType\BuforType[]
     */
    public ?array $createdBufor = null;
    /**
     * The error
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \App\ElektronicznyNadawca\StructType\ErrorType[]
     */
    public ?array $error = null;
    /**
     * Constructor method for createEnvelopeBuforResponse
     * @uses CreateEnvelopeBuforResponse::setCreatedBufor()
     * @uses CreateEnvelopeBuforResponse::setError()
     * @param \App\ElektronicznyNadawca\StructType\BuforType[] $createdBufor
     * @param \App\ElektronicznyNadawca\StructType\ErrorType[] $error
     */
    public function __construct(?array $createdBufor = null, ?array $error = null)
    {
        $this
            ->setCreatedBufor($createdBufor)
            ->setError($error);
    }
    /**
     * Get createdBufor value
     * @return \App\ElektronicznyNadawca\StructType\BuforType[]
     */
    public function getCreatedBufor(): ?array
    {
        return $this->createdBufor;
    }
    /**
     * Set createdBufor value
     * @param \App\ElektronicznyNadawca\StructType\BuforType[] $createdBufor
     * @return \App\ElektronicznyNadawca\StructType\CreateEnvelopeBuforResponse
     */
    public function setCreatedBufor(?array $createdBufor = null): self
    {
        $this->createdBufor = $createdBufor;
        
        return $this;
    }
    /**
     * Add item to createdBufor value
     * @throws InvalidArgumentException
     * @param \App\ElektronicznyNadawca\StructType\BuforType $item
     * @return \App\ElektronicznyNadawca\StructType\CreateEnvelopeBuforResponse
     */
    public function addToCreatedBufor(\App\ElektronicznyNadawca\StructType\BuforType $item): self
    {
        $this->createdBufor[] = $item;
        
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
     * @return \App\ElektronicznyNadawca\StructType\CreateEnvelopeBuforResponse
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
     * @return \App\ElektronicznyNadawca\StructType\CreateEnvelopeBuforResponse
     */
    public function addToError(\App\ElektronicznyNadawca\StructType\ErrorType $item): self
    {
        $this->error[] = $item;
        
        return $this;
    }
}
