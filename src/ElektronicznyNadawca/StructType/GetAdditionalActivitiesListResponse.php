<?php

declare(strict_types=1);

namespace App\ElektronicznyNadawca\StructType;



/**
 * This class stands for getAdditionalActivitiesListResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetAdditionalActivitiesListResponse
{
    /**
     * The additionalActivity
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \App\ElektronicznyNadawca\StructType\AdditionalActivityType[]
     */
    public ?array $additionalActivity = null;
    /**
     * The error
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \App\ElektronicznyNadawca\StructType\ErrorType[]
     */
    public ?array $error = null;
    /**
     * Constructor method for getAdditionalActivitiesListResponse
     * @uses GetAdditionalActivitiesListResponse::setAdditionalActivity()
     * @uses GetAdditionalActivitiesListResponse::setError()
     * @param \App\ElektronicznyNadawca\StructType\AdditionalActivityType[] $additionalActivity
     * @param \App\ElektronicznyNadawca\StructType\ErrorType[] $error
     */
    public function __construct(?array $additionalActivity = null, ?array $error = null)
    {
        $this
            ->setAdditionalActivity($additionalActivity)
            ->setError($error);
    }
    /**
     * Get additionalActivity value
     * @return \App\ElektronicznyNadawca\StructType\AdditionalActivityType[]
     */
    public function getAdditionalActivity(): ?array
    {
        return $this->additionalActivity;
    }
    /**
     * Set additionalActivity value
     * @param \App\ElektronicznyNadawca\StructType\AdditionalActivityType[] $additionalActivity
     * @return \App\ElektronicznyNadawca\StructType\GetAdditionalActivitiesListResponse
     */
    public function setAdditionalActivity(?array $additionalActivity = null): self
    {
        $this->additionalActivity = $additionalActivity;
        
        return $this;
    }
    /**
     * Add item to additionalActivity value
     * @throws InvalidArgumentException
     * @param \App\ElektronicznyNadawca\StructType\AdditionalActivityType $item
     * @return \App\ElektronicznyNadawca\StructType\GetAdditionalActivitiesListResponse
     */
    public function addToAdditionalActivity(\App\ElektronicznyNadawca\StructType\AdditionalActivityType $item): self
    {
        $this->additionalActivity[] = $item;
        
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
     * @return \App\ElektronicznyNadawca\StructType\GetAdditionalActivitiesListResponse
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
     * @return \App\ElektronicznyNadawca\StructType\GetAdditionalActivitiesListResponse
     */
    public function addToError(\App\ElektronicznyNadawca\StructType\ErrorType $item): self
    {
        $this->error[] = $item;
        
        return $this;
    }
}
