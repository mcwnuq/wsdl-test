<?php

declare(strict_types=1);

namespace App\ElektronicznyNadawca\StructType;



/**
 * This class stands for getChecklistTemplateList StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetChecklistTemplateList
{
    /**
     * The idChecklistTemplate
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var int[]
     */
    public ?array $idChecklistTemplate = null;
    /**
     * Constructor method for getChecklistTemplateList
     * @uses GetChecklistTemplateList::setIdChecklistTemplate()
     * @param int[] $idChecklistTemplate
     */
    public function __construct(?array $idChecklistTemplate = null)
    {
        $this
            ->setIdChecklistTemplate($idChecklistTemplate);
    }
    /**
     * Get idChecklistTemplate value
     * @return int[]
     */
    public function getIdChecklistTemplate(): ?array
    {
        return $this->idChecklistTemplate;
    }
    /**
     * Set idChecklistTemplate value
     * @param int[] $idChecklistTemplate
     * @return \App\ElektronicznyNadawca\StructType\GetChecklistTemplateList
     */
    public function setIdChecklistTemplate(?array $idChecklistTemplate = null): self
    {
        $this->idChecklistTemplate = $idChecklistTemplate;
        
        return $this;
    }
    /**
     * Add item to idChecklistTemplate value
     * @throws InvalidArgumentException
     * @param int $item
     * @return \App\ElektronicznyNadawca\StructType\GetChecklistTemplateList
     */
    public function addToIdChecklistTemplate(int $item): self
    {
        $this->idChecklistTemplate[] = $item;
        
        return $this;
    }
}
