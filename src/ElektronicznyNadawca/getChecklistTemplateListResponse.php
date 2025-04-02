<?php

namespace App\ElektronicznyNadawca;

class getChecklistTemplateListResponse
{

    /**
     * @var checklistTemplateType $checklistTemplate
     */
    protected $checklistTemplate = null;

    /**
     * @var errorType $error
     */
    protected $error = null;

    /**
     * @param checklistTemplateType $checklistTemplate
     * @param errorType $error
     */
    public function __construct($checklistTemplate, $error)
    {
      $this->checklistTemplate = $checklistTemplate;
      $this->error = $error;
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
     * @return \App\ElektronicznyNadawca\getChecklistTemplateListResponse
     */
    public function setChecklistTemplate($checklistTemplate)
    {
      $this->checklistTemplate = $checklistTemplate;
      return $this;
    }

    /**
     * @return errorType
     */
    public function getError()
    {
      return $this->error;
    }

    /**
     * @param errorType $error
     * @return \App\ElektronicznyNadawca\getChecklistTemplateListResponse
     */
    public function setError($error)
    {
      $this->error = $error;
      return $this;
    }

}
