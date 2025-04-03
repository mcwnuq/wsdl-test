<?php

declare(strict_types=1);

namespace App\ElektronicznyNadawca\StructType;



/**
 * This class stands for getReturnDocumentsProfileListResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetReturnDocumentsProfileListResponse
{
    /**
     * The profile
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \App\ElektronicznyNadawca\StructType\ReturnDocumentProfileType[]
     */
    public ?array $profile = null;
    /**
     * The error
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \App\ElektronicznyNadawca\StructType\ErrorType[]
     */
    public ?array $error = null;
    /**
     * Constructor method for getReturnDocumentsProfileListResponse
     * @uses GetReturnDocumentsProfileListResponse::setProfile()
     * @uses GetReturnDocumentsProfileListResponse::setError()
     * @param \App\ElektronicznyNadawca\StructType\ReturnDocumentProfileType[] $profile
     * @param \App\ElektronicznyNadawca\StructType\ErrorType[] $error
     */
    public function __construct(?array $profile = null, ?array $error = null)
    {
        $this
            ->setProfile($profile)
            ->setError($error);
    }
    /**
     * Get profile value
     * @return \App\ElektronicznyNadawca\StructType\ReturnDocumentProfileType[]
     */
    public function getProfile(): ?array
    {
        return $this->profile;
    }
    /**
     * Set profile value
     * @param \App\ElektronicznyNadawca\StructType\ReturnDocumentProfileType[] $profile
     * @return \App\ElektronicznyNadawca\StructType\GetReturnDocumentsProfileListResponse
     */
    public function setProfile(?array $profile = null): self
    {
        $this->profile = $profile;
        
        return $this;
    }
    /**
     * Add item to profile value
     * @throws InvalidArgumentException
     * @param \App\ElektronicznyNadawca\StructType\ReturnDocumentProfileType $item
     * @return \App\ElektronicznyNadawca\StructType\GetReturnDocumentsProfileListResponse
     */
    public function addToProfile(\App\ElektronicznyNadawca\StructType\ReturnDocumentProfileType $item): self
    {
        $this->profile[] = $item;
        
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
     * @return \App\ElektronicznyNadawca\StructType\GetReturnDocumentsProfileListResponse
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
     * @return \App\ElektronicznyNadawca\StructType\GetReturnDocumentsProfileListResponse
     */
    public function addToError(\App\ElektronicznyNadawca\StructType\ErrorType $item): self
    {
        $this->error[] = $item;
        
        return $this;
    }
}
