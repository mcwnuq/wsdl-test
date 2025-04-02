<?php

namespace App\ElektronicznyNadawca;

class createChecklistTemplate
{

    /**
     * @var checklistTemplateType $checklistTemplate
     */
    protected $checklistTemplate = null;

    /**
     * @param checklistTemplateType $checklistTemplate
     */
    public function __construct($checklistTemplate)
    {
      $this->checklistTemplate = $checklistTemplate;
    }

    /**
     * @return checklistTemplateType
     */
    public function getChecklistTemplate()
    {
      return $this->checklistTemplate;
    }

    /**
     * @param checklistTemplateType $checklistTemplate
     * @return \App\ElektronicznyNadawca\createChecklistTemplate
     */
    public function setChecklistTemplate($checklistTemplate)
    {
      $this->checklistTemplate = $checklistTemplate;
      return $this;
    }

}
