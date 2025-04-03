<?php

declare(strict_types=1);

namespace App\ElektronicznyNadawca\StructType;



/**
 * This class stands for getWplatyCKP StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetWplatyCKP
{
    /**
     * The numerNadania
     * Meta information extracted from the WSDL
     * - base: xsd:string
     * - choice: numerNadania
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * - maxLength: 20
     * - maxOccurs: 1
     * - minLength: 10
     * - minOccurs: 1
     * @var string
     */
    public string $numerNadania;
    /**
     * The startDate
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public string $startDate;
    /**
     * The stopDate
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    public ?string $stopDate = null;
    /**
     * Constructor method for getWplatyCKP
     * @uses GetWplatyCKP::setNumerNadania()
     * @uses GetWplatyCKP::setStartDate()
     * @uses GetWplatyCKP::setStopDate()
     * @param string $numerNadania
     * @param string $startDate
     * @param string $stopDate
     */
    public function __construct(string $numerNadania = null, string $startDate, ?string $stopDate = null)
    {
        $this
            ->setNumerNadania($numerNadania)
            ->setStartDate($startDate)
            ->setStopDate($stopDate);
    }
    /**
     * Get numerNadania value
     * @return string|null
     */
    public function getNumerNadania(): ?string
    {
        return $this->numerNadania ?? null;
    }
    /**
     * Set numerNadania value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @param string $numerNadania
     * @return \App\ElektronicznyNadawca\StructType\GetWplatyCKP
     */
    public function setNumerNadania(string $numerNadania = null): self
    {
        if (is_null($numerNadania) || (is_array($numerNadania) && empty($numerNadania))) {
            unset($this->numerNadania);
        } else {
            $this->numerNadania = $numerNadania;
        }
        
        return $this;
    }
    /**
     * Get startDate value
     * @return string
     */
    public function getStartDate(): string
    {
        return $this->startDate;
    }
    /**
     * Set startDate value
     * @param string $startDate
     * @return \App\ElektronicznyNadawca\StructType\GetWplatyCKP
     */
    public function setStartDate(string $startDate): self
    {
        $this->startDate = $startDate;
        
        return $this;
    }
    /**
     * Get stopDate value
     * @return string|null
     */
    public function getStopDate(): ?string
    {
        return $this->stopDate;
    }
    /**
     * Set stopDate value
     * @param string $stopDate
     * @return \App\ElektronicznyNadawca\StructType\GetWplatyCKP
     */
    public function setStopDate(?string $stopDate = null): self
    {
        $this->stopDate = $stopDate;
        
        return $this;
    }
}
