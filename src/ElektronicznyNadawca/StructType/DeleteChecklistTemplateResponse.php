<?php

declare(strict_types=1);

namespace App\ElektronicznyNadawca\StructType;



/**
 * This class stands for deleteChecklistTemplateResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class DeleteChecklistTemplateResponse
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
     * Constructor method for deleteChecklistTemplateResponse
     * @uses DeleteChecklistTemplateResponse::setError()
     * @param \App\ElektronicznyNadawca\StructType\ErrorType[] $error
     */
    public function __construct(?array $error = null)
    {
        $this
            ->setError($error);
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
     * @return \App\ElektronicznyNadawca\StructType\DeleteChecklistTemplateResponse
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
     * @return \App\ElektronicznyNadawca\StructType\DeleteChecklistTemplateResponse
     */
    public function addToError(\App\ElektronicznyNadawca\StructType\ErrorType $item): self
    {
        $this->error[] = $item;
        
        return $this;
    }
}
