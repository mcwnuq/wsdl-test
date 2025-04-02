<?php

namespace App\ElektronicznyNadawca;

class checklistTemplateType
{

    /**
     * @var int $idChecklistTemplate
     */
    protected $idChecklistTemplate = null;

    /**
     * @var int $idKarta
     */
    protected $idKarta = null;

    /**
     * @var nameChecklistType $name
     */
    protected $name = null;

    /**
     * @var titleChecklistType $title
     */
    protected $title = null;

    /**
     * @var descriptionChecklistType $description
     */
    protected $description = null;

    /**
     * @var infoForCourierType $infoForCourier
     */
    protected $infoForCourier = null;

    /**
     * @var boolean $default
     */
    protected $default = null;

    /**
     * @var date $validFrom
     */
    protected $validFrom = null;

    /**
     * @var date $validTo
     */
    protected $validTo = null;

    /**
     * @var base64Binary $logo
     */
    protected $logo = null;

    /**
     * @var serwisPrzesylkaProceduralnaType $service
     */
    protected $service = null;

    /**
     * @var additionalActivityType[] $additionalActivity
     */
    protected $additionalActivity = null;

    /**
     * @var guidType $guid
     */
    protected $guid = null;

    
    public function __construct()
    {
    
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
     * @return \App\ElektronicznyNadawca\checklistTemplateType
     */
    public function setIdChecklistTemplate($idChecklistTemplate)
    {
      $this->idChecklistTemplate = $idChecklistTemplate;
      return $this;
    }

    /**
     * @return int
     */
    public function getIdKarta()
    {
      return $this->idKarta;
    }

    /**
     * @param int $idKarta
     * @return \App\ElektronicznyNadawca\checklistTemplateType
     */
    public function setIdKarta($idKarta)
    {
      $this->idKarta = $idKarta;
      return $this;
    }

    /**
     * @return nameChecklistType
     */
    public function getName()
    {
      return $this->name;
    }

    /**
     * @param nameChecklistType $name
     * @return \App\ElektronicznyNadawca\checklistTemplateType
     */
    public function setName($name)
    {
      $this->name = $name;
      return $this;
    }

    /**
     * @return titleChecklistType
     */
    public function getTitle()
    {
      return $this->title;
    }

    /**
     * @param titleChecklistType $title
     * @return \App\ElektronicznyNadawca\checklistTemplateType
     */
    public function setTitle($title)
    {
      $this->title = $title;
      return $this;
    }

    /**
     * @return descriptionChecklistType
     */
    public function getDescription()
    {
      return $this->description;
    }

    /**
     * @param descriptionChecklistType $description
     * @return \App\ElektronicznyNadawca\checklistTemplateType
     */
    public function setDescription($description)
    {
      $this->description = $description;
      return $this;
    }

    /**
     * @return infoForCourierType
     */
    public function getInfoForCourier()
    {
      return $this->infoForCourier;
    }

    /**
     * @param infoForCourierType $infoForCourier
     * @return \App\ElektronicznyNadawca\checklistTemplateType
     */
    public function setInfoForCourier($infoForCourier)
    {
      $this->infoForCourier = $infoForCourier;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getDefault()
    {
      return $this->default;
    }

    /**
     * @param boolean $default
     * @return \App\ElektronicznyNadawca\checklistTemplateType
     */
    public function setDefault($default)
    {
      $this->default = $default;
      return $this;
    }

    /**
     * @return date
     */
    public function getValidFrom()
    {
      return $this->validFrom;
    }

    /**
     * @param date $validFrom
     * @return \App\ElektronicznyNadawca\checklistTemplateType
     */
    public function setValidFrom($validFrom)
    {
      $this->validFrom = $validFrom;
      return $this;
    }

    /**
     * @return date
     */
    public function getValidTo()
    {
      return $this->validTo;
    }

    /**
     * @param date $validTo
     * @return \App\ElektronicznyNadawca\checklistTemplateType
     */
    public function setValidTo($validTo)
    {
      $this->validTo = $validTo;
      return $this;
    }

    /**
     * @return base64Binary
     */
    public function getLogo()
    {
      return $this->logo;
    }

    /**
     * @param base64Binary $logo
     * @return \App\ElektronicznyNadawca\checklistTemplateType
     */
    public function setLogo($logo)
    {
      $this->logo = $logo;
      return $this;
    }

    /**
     * @return serwisPrzesylkaProceduralnaType
     */
    public function getService()
    {
      return $this->service;
    }

    /**
     * @param serwisPrzesylkaProceduralnaType $service
     * @return \App\ElektronicznyNadawca\checklistTemplateType
     */
    public function setService($service)
    {
      $this->service = $service;
      return $this;
    }

    /**
     * @return additionalActivityType[]
     */
    public function getAdditionalActivity()
    {
      return $this->additionalActivity;
    }

    /**
     * @param additionalActivityType[] $additionalActivity
     * @return \App\ElektronicznyNadawca\checklistTemplateType
     */
    public function setAdditionalActivity(array $additionalActivity = null)
    {
      $this->additionalActivity = $additionalActivity;
      return $this;
    }

    /**
     * @return guidType
     */
    public function getGuid()
    {
      return $this->guid;
    }

    /**
     * @param guidType $guid
     * @return \App\ElektronicznyNadawca\checklistTemplateType
     */
    public function setGuid($guid)
    {
      $this->guid = $guid;
      return $this;
    }

}
