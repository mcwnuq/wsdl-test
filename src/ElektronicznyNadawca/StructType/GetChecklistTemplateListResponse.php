<?php

declare(strict_types=1);

namespace App\ElektronicznyNadawca\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getChecklistTemplateListResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetChecklistTemplateListResponse extends AbstractStructBase
{
    /**
     * The checklistTemplate
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \App\ElektronicznyNadawca\StructType\ChecklistTemplateType[]
     */
    public ?array $checklistTemplate = null;
    /**
     * The error
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \App\ElektronicznyNadawca\StructType\ErrorType[]
     */
    public ?array $error = null;
    /**
     * Constructor method for getChecklistTemplateListResponse
     * @uses GetChecklistTemplateListResponse::setChecklistTemplate()
     * @uses GetChecklistTemplateListResponse::setError()
     * @param \App\ElektronicznyNadawca\StructType\ChecklistTemplateType[] $checklistTemplate
     * @param \App\ElektronicznyNadawca\StructType\ErrorType[] $error
     */
    public function __construct(?array $checklistTemplate = null, ?array $error = null)
    {
        $this
            ->setChecklistTemplate($checklistTemplate)
            ->setError($error);
    }
    /**
     * Get checklistTemplate value
     * @return \App\ElektronicznyNadawca\StructType\ChecklistTemplateType[]
     */
    public function getChecklistTemplate(): ?array
    {
        return $this->checklistTemplate;
    }
    /**
     * Set checklistTemplate value
     * @param \App\ElektronicznyNadawca\StructType\ChecklistTemplateType[] $checklistTemplate
     * @return \App\ElektronicznyNadawca\StructType\GetChecklistTemplateListResponse
     */
    public function setChecklistTemplate(?array $checklistTemplate = null): self
    {
        $this->checklistTemplate = $checklistTemplate;
        
        return $this;
    }
    /**
     * Add item to checklistTemplate value
     * @throws InvalidArgumentException
     * @param \App\ElektronicznyNadawca\StructType\ChecklistTemplateType $item
     * @return \App\ElektronicznyNadawca\StructType\GetChecklistTemplateListResponse
     */
    public function addToChecklistTemplate(\App\ElektronicznyNadawca\StructType\ChecklistTemplateType $item): self
    {
        $this->checklistTemplate[] = $item;
        
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
     * @return \App\ElektronicznyNadawca\StructType\GetChecklistTemplateListResponse
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
     * @return \App\ElektronicznyNadawca\StructType\GetChecklistTemplateListResponse
     */
    public function addToError(\App\ElektronicznyNadawca\StructType\ErrorType $item): self
    {
        $this->error[] = $item;
        
        return $this;
    }
}
