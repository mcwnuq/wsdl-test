<?php

declare(strict_types=1);

namespace App\ElektronicznyNadawca\StructType;



/**
 * This class stands for checklistTemplateType StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class ChecklistTemplateType
{
    /**
     * The idChecklistTemplate
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var int|null
     */
    public ?int $idChecklistTemplate = null;
    /**
     * The idKarta
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var int|null
     */
    public ?int $idKarta = null;
    /**
     * The name
     * Meta information extracted from the WSDL
     * - base: xsd:string
     * - maxLength: 50
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    public ?string $name = null;
    /**
     * The title
     * Meta information extracted from the WSDL
     * - base: xsd:string
     * - maxLength: 45
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    public ?string $title = null;
    /**
     * The description
     * Meta information extracted from the WSDL
     * - base: xsd:string
     * - maxLength: 100
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    public ?string $description = null;
    /**
     * The infoForCourier
     * Meta information extracted from the WSDL
     * - base: xsd:string
     * - maxLength: 1000
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    public ?string $infoForCourier = null;
    /**
     * The default
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool|null
     */
    public ?bool $default = null;
    /**
     * The validFrom
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    public ?string $validFrom = null;
    /**
     * The validTo
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    public ?string $validTo = null;
    /**
     * The logo
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    public ?string $logo = null;
    /**
     * The service
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    public ?string $service = null;
    /**
     * The additionalActivity
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \App\ElektronicznyNadawca\StructType\AdditionalActivityType[]
     */
    public ?array $additionalActivity = null;
    /**
     * The guid
     * Meta information extracted from the WSDL
     * - documentation: GUID elementu checklistTemplate. Wartość wykorzystywana do przekazania rezultatu dla elementu kolekcji.
     * - base: xsd:string
     * - length: 32
     * - maxOccurs: 1
     * - minOccurs: 0
     * - whiteSpace: collapse
     * @var string|null
     */
    public ?string $guid = null;
    /**
     * Constructor method for checklistTemplateType
     * @uses ChecklistTemplateType::setIdChecklistTemplate()
     * @uses ChecklistTemplateType::setIdKarta()
     * @uses ChecklistTemplateType::setName()
     * @uses ChecklistTemplateType::setTitle()
     * @uses ChecklistTemplateType::setDescription()
     * @uses ChecklistTemplateType::setInfoForCourier()
     * @uses ChecklistTemplateType::setDefault()
     * @uses ChecklistTemplateType::setValidFrom()
     * @uses ChecklistTemplateType::setValidTo()
     * @uses ChecklistTemplateType::setLogo()
     * @uses ChecklistTemplateType::setService()
     * @uses ChecklistTemplateType::setAdditionalActivity()
     * @uses ChecklistTemplateType::setGuid()
     * @param int $idChecklistTemplate
     * @param int $idKarta
     * @param string $name
     * @param string $title
     * @param string $description
     * @param string $infoForCourier
     * @param bool $default
     * @param string $validFrom
     * @param string $validTo
     * @param string $logo
     * @param string $service
     * @param \App\ElektronicznyNadawca\StructType\AdditionalActivityType[] $additionalActivity
     * @param string $guid
     */
    public function __construct(?int $idChecklistTemplate = null, ?int $idKarta = null, ?string $name = null, ?string $title = null, ?string $description = null, ?string $infoForCourier = null, ?bool $default = null, ?string $validFrom = null, ?string $validTo = null, ?string $logo = null, ?string $service = null, ?array $additionalActivity = null, ?string $guid = null)
    {
        $this
            ->setIdChecklistTemplate($idChecklistTemplate)
            ->setIdKarta($idKarta)
            ->setName($name)
            ->setTitle($title)
            ->setDescription($description)
            ->setInfoForCourier($infoForCourier)
            ->setDefault($default)
            ->setValidFrom($validFrom)
            ->setValidTo($validTo)
            ->setLogo($logo)
            ->setService($service)
            ->setAdditionalActivity($additionalActivity)
            ->setGuid($guid);
    }
    /**
     * Get idChecklistTemplate value
     * @return int|null
     */
    public function getIdChecklistTemplate(): ?int
    {
        return $this->idChecklistTemplate;
    }
    /**
     * Set idChecklistTemplate value
     * @param int $idChecklistTemplate
     * @return \App\ElektronicznyNadawca\StructType\ChecklistTemplateType
     */
    public function setIdChecklistTemplate(?int $idChecklistTemplate = null): self
    {
        $this->idChecklistTemplate = $idChecklistTemplate;
        
        return $this;
    }
    /**
     * Get idKarta value
     * @return int|null
     */
    public function getIdKarta(): ?int
    {
        return $this->idKarta;
    }
    /**
     * Set idKarta value
     * @param int $idKarta
     * @return \App\ElektronicznyNadawca\StructType\ChecklistTemplateType
     */
    public function setIdKarta(?int $idKarta = null): self
    {
        $this->idKarta = $idKarta;
        
        return $this;
    }
    /**
     * Get name value
     * @return string|null
     */
    public function getName(): ?string
    {
        return $this->name;
    }
    /**
     * Set name value
     * @param string $name
     * @return \App\ElektronicznyNadawca\StructType\ChecklistTemplateType
     */
    public function setName(?string $name = null): self
    {
        $this->name = $name;
        
        return $this;
    }
    /**
     * Get title value
     * @return string|null
     */
    public function getTitle(): ?string
    {
        return $this->title;
    }
    /**
     * Set title value
     * @param string $title
     * @return \App\ElektronicznyNadawca\StructType\ChecklistTemplateType
     */
    public function setTitle(?string $title = null): self
    {
        $this->title = $title;
        
        return $this;
    }
    /**
     * Get description value
     * @return string|null
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }
    /**
     * Set description value
     * @param string $description
     * @return \App\ElektronicznyNadawca\StructType\ChecklistTemplateType
     */
    public function setDescription(?string $description = null): self
    {
        $this->description = $description;
        
        return $this;
    }
    /**
     * Get infoForCourier value
     * @return string|null
     */
    public function getInfoForCourier(): ?string
    {
        return $this->infoForCourier;
    }
    /**
     * Set infoForCourier value
     * @param string $infoForCourier
     * @return \App\ElektronicznyNadawca\StructType\ChecklistTemplateType
     */
    public function setInfoForCourier(?string $infoForCourier = null): self
    {
        $this->infoForCourier = $infoForCourier;
        
        return $this;
    }
    /**
     * Get default value
     * @return bool|null
     */
    public function getDefault(): ?bool
    {
        return $this->default;
    }
    /**
     * Set default value
     * @param bool $default
     * @return \App\ElektronicznyNadawca\StructType\ChecklistTemplateType
     */
    public function setDefault(?bool $default = null): self
    {
        $this->default = $default;
        
        return $this;
    }
    /**
     * Get validFrom value
     * @return string|null
     */
    public function getValidFrom(): ?string
    {
        return $this->validFrom;
    }
    /**
     * Set validFrom value
     * @param string $validFrom
     * @return \App\ElektronicznyNadawca\StructType\ChecklistTemplateType
     */
    public function setValidFrom(?string $validFrom = null): self
    {
        $this->validFrom = $validFrom;
        
        return $this;
    }
    /**
     * Get validTo value
     * @return string|null
     */
    public function getValidTo(): ?string
    {
        return $this->validTo;
    }
    /**
     * Set validTo value
     * @param string $validTo
     * @return \App\ElektronicznyNadawca\StructType\ChecklistTemplateType
     */
    public function setValidTo(?string $validTo = null): self
    {
        $this->validTo = $validTo;
        
        return $this;
    }
    /**
     * Get logo value
     * @return string|null
     */
    public function getLogo(): ?string
    {
        return $this->logo;
    }
    /**
     * Set logo value
     * @param string $logo
     * @return \App\ElektronicznyNadawca\StructType\ChecklistTemplateType
     */
    public function setLogo(?string $logo = null): self
    {
        $this->logo = $logo;
        
        return $this;
    }
    /**
     * Get service value
     * @return string|null
     */
    public function getService(): ?string
    {
        return $this->service;
    }
    /**
     * Set service value
     * @param string $service
     * @return \App\ElektronicznyNadawca\StructType\ChecklistTemplateType
     */
    public function setService(?string $service = null): self
    {
        $this->service = $service;
        
        return $this;
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
     * @return \App\ElektronicznyNadawca\StructType\ChecklistTemplateType
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
     * @return \App\ElektronicznyNadawca\StructType\ChecklistTemplateType
     */
    public function addToAdditionalActivity(\App\ElektronicznyNadawca\StructType\AdditionalActivityType $item): self
    {
        $this->additionalActivity[] = $item;
        
        return $this;
    }
    /**
     * Get guid value
     * @return string|null
     */
    public function getGuid(): ?string
    {
        return $this->guid;
    }
    /**
     * Set guid value
     * @param string $guid
     * @return \App\ElektronicznyNadawca\StructType\ChecklistTemplateType
     */
    public function setGuid(?string $guid = null): self
    {
        $this->guid = $guid;
        
        return $this;
    }
}
