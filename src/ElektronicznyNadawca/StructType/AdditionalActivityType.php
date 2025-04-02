<?php

declare(strict_types=1);

namespace App\ElektronicznyNadawca\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for additionalActivityType StructType
 * Meta information extracted from the WSDL
 * - documentation: Czynność do wykonania w ramach np. przesyłki proceduralnej
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class AdditionalActivityType extends AbstractStructBase
{
    /**
     * The idActivity
     * Meta information extracted from the WSDL
     * - documentation: identyfikator czynności
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var int|null
     */
    public ?int $idActivity = null;
    /**
     * The name
     * Meta information extracted from the WSDL
     * - documentation: Nazwa czynności do wykonania | Ciąg znaków długości 127 znaków
     * - base: xsd:string
     * - maxLength: 127
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    public ?string $name = null;
    /**
     * The description
     * Meta information extracted from the WSDL
     * - documentation: opis czynności do wykonania | Ciąg znaków długości 1023 znaków
     * - base: xsd:string
     * - maxLength: 1023
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    public ?string $description = null;
    /**
     * The critical
     * Meta information extracted from the WSDL
     * - documentation: znacznik czy czynnośc jest krytyczna. brak wykonania czynności oznaczonej jako krytyczna przerywa proces doręczenia.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool|null
     */
    public ?bool $critical = null;
    /**
     * The order
     * Meta information extracted from the WSDL
     * - documentation: Element określa kolejność dla czynności do wykonania w sekwecji czynności.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var int|null
     */
    public ?int $order = null;
    /**
     * The validFrom
     * Meta information extracted from the WSDL
     * - documentation: Termin ważności, należy podać datę od kiedy dana czynność jest dostępna, liczone jest od godziny 0:00:00.0
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    public ?string $validFrom = null;
    /**
     * The validTo
     * Meta information extracted from the WSDL
     * - documentation: Termin ważności, należy podać datę do kiedy dana czynność jest dostępna, liczone jest do godziny 23:59:59.999
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    public ?string $validTo = null;
    /**
     * Constructor method for additionalActivityType
     * @uses AdditionalActivityType::setIdActivity()
     * @uses AdditionalActivityType::setName()
     * @uses AdditionalActivityType::setDescription()
     * @uses AdditionalActivityType::setCritical()
     * @uses AdditionalActivityType::setOrder()
     * @uses AdditionalActivityType::setValidFrom()
     * @uses AdditionalActivityType::setValidTo()
     * @param int $idActivity
     * @param string $name
     * @param string $description
     * @param bool $critical
     * @param int $order
     * @param string $validFrom
     * @param string $validTo
     */
    public function __construct(?int $idActivity = null, ?string $name = null, ?string $description = null, ?bool $critical = null, ?int $order = null, ?string $validFrom = null, ?string $validTo = null)
    {
        $this
            ->setIdActivity($idActivity)
            ->setName($name)
            ->setDescription($description)
            ->setCritical($critical)
            ->setOrder($order)
            ->setValidFrom($validFrom)
            ->setValidTo($validTo);
    }
    /**
     * Get idActivity value
     * @return int|null
     */
    public function getIdActivity(): ?int
    {
        return $this->idActivity;
    }
    /**
     * Set idActivity value
     * @param int $idActivity
     * @return \App\ElektronicznyNadawca\StructType\AdditionalActivityType
     */
    public function setIdActivity(?int $idActivity = null): self
    {
        $this->idActivity = $idActivity;
        
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
     * @return \App\ElektronicznyNadawca\StructType\AdditionalActivityType
     */
    public function setName(?string $name = null): self
    {
        $this->name = $name;
        
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
     * @return \App\ElektronicznyNadawca\StructType\AdditionalActivityType
     */
    public function setDescription(?string $description = null): self
    {
        $this->description = $description;
        
        return $this;
    }
    /**
     * Get critical value
     * @return bool|null
     */
    public function getCritical(): ?bool
    {
        return $this->critical;
    }
    /**
     * Set critical value
     * @param bool $critical
     * @return \App\ElektronicznyNadawca\StructType\AdditionalActivityType
     */
    public function setCritical(?bool $critical = null): self
    {
        $this->critical = $critical;
        
        return $this;
    }
    /**
     * Get order value
     * @return int|null
     */
    public function getOrder(): ?int
    {
        return $this->order;
    }
    /**
     * Set order value
     * @param int $order
     * @return \App\ElektronicznyNadawca\StructType\AdditionalActivityType
     */
    public function setOrder(?int $order = null): self
    {
        $this->order = $order;
        
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
     * @return \App\ElektronicznyNadawca\StructType\AdditionalActivityType
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
     * @return \App\ElektronicznyNadawca\StructType\AdditionalActivityType
     */
    public function setValidTo(?string $validTo = null): self
    {
        $this->validTo = $validTo;
        
        return $this;
    }
}
