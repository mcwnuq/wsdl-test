<?php

namespace App\ElektronicznyNadawca;

class getChecklistTemplateList
{

    /**
     * @var int $idChecklistTemplate
     */
    protected $idChecklistTemplate = null;

    /**
     * @param int $idChecklistTemplate
     */
    public function __construct($idChecklistTemplate)
    {
      $this->idChecklistTemplate = $idChecklistTemplate;
    }

    /**
     * @return int
     */
    public function getIdChecklistTemplate()
    {
      return $this->idChecklistTemplate;
    }

    /**
     * @param int $idChecklistTemplate
     * @return \App\ElektronicznyNadawca\getChecklistTemplateList
     */
    public function setIdChecklistTemplate($idChecklistTemplate)
    {
      $this->idChecklistTemplate = $idChecklistTemplate;
      return $this;
    }

}
