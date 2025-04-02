<?php

declare(strict_types=1);

namespace App\ElektronicznyNadawca\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for updateReturnDocumentsProfileResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class UpdateReturnDocumentsProfileResponse extends AbstractStructBase
{
    /**
     * The result
     * @var bool|null
     */
    public ?bool $result = null;
    /**
     * The idProfile
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var int|null
     */
    public ?int $idProfile = null;
    /**
     * The error
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \App\ElektronicznyNadawca\StructType\ErrorType[]
     */
    public ?array $error = null;
    /**
     * Constructor method for updateReturnDocumentsProfileResponse
     * @uses UpdateReturnDocumentsProfileResponse::setResult()
     * @uses UpdateReturnDocumentsProfileResponse::setIdProfile()
     * @uses UpdateReturnDocumentsProfileResponse::setError()
     * @param bool $result
     * @param int $idProfile
     * @param \App\ElektronicznyNadawca\StructType\ErrorType[] $error
     */
    public function __construct(?bool $result = null, ?int $idProfile = null, ?array $error = null)
    {
        $this
            ->setResult($result)
            ->setIdProfile($idProfile)
            ->setError($error);
    }
    /**
     * Get result value
     * @return bool|null
     */
    public function getResult(): ?bool
    {
        return $this->result;
    }
    /**
     * Set result value
     * @param bool $result
     * @return \App\ElektronicznyNadawca\StructType\UpdateReturnDocumentsProfileResponse
     */
    public function setResult(?bool $result = null): self
    {
        $this->result = $result;
        
        return $this;
    }
    /**
     * Get idProfile value
     * @return int|null
     */
    public function getIdProfile(): ?int
    {
        return $this->idProfile;
    }
    /**
     * Set idProfile value
     * @param int $idProfile
     * @return \App\ElektronicznyNadawca\StructType\UpdateReturnDocumentsProfileResponse
     */
    public function setIdProfile(?int $idProfile = null): self
    {
        $this->idProfile = $idProfile;
        
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
     * @return \App\ElektronicznyNadawca\StructType\UpdateReturnDocumentsProfileResponse
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
     * @return \App\ElektronicznyNadawca\StructType\UpdateReturnDocumentsProfileResponse
     */
    public function addToError(\App\ElektronicznyNadawca\StructType\ErrorType $item): self
    {
        $this->error[] = $item;
        
        return $this;
    }
}
