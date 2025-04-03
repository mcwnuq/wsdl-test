<?php

declare(strict_types=1);

namespace App\ElektronicznyNadawca\StructType;



/**
 * This class stands for createChecklistTemplate StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class CreateChecklistTemplate
{
    /**
     * The checklistTemplate
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 1
     * @var \App\ElektronicznyNadawca\StructType\ChecklistTemplateType[]
     */
    public array $checklistTemplate;
    /**
     * Constructor method for createChecklistTemplate
     * @uses CreateChecklistTemplate::setChecklistTemplate()
     * @param \App\ElektronicznyNadawca\StructType\ChecklistTemplateType[] $checklistTemplate
     */
    public function __construct(array $checklistTemplate)
    {
        $this
            ->setChecklistTemplate($checklistTemplate);
    }
    /**
     * Get checklistTemplate value
     * @return \App\ElektronicznyNadawca\StructType\ChecklistTemplateType[]
     */
    public function getChecklistTemplate(): array
    {
        return $this->checklistTemplate;
    }
    /**
     * Set checklistTemplate value
     * @param \App\ElektronicznyNadawca\StructType\ChecklistTemplateType[] $checklistTemplate
     * @return \App\ElektronicznyNadawca\StructType\CreateChecklistTemplate
     */
    public function setChecklistTemplate(array $checklistTemplate): self
    {
        $this->checklistTemplate = $checklistTemplate;
        
        return $this;
    }
    /**
     * Add item to checklistTemplate value
     * @throws InvalidArgumentException
     * @param \App\ElektronicznyNadawca\StructType\ChecklistTemplateType $item
     * @return \App\ElektronicznyNadawca\StructType\CreateChecklistTemplate
     */
    public function addToChecklistTemplate(\App\ElektronicznyNadawca\StructType\ChecklistTemplateType $item): self
    {
        $this->checklistTemplate[] = $item;
        
        return $this;
    }
}
