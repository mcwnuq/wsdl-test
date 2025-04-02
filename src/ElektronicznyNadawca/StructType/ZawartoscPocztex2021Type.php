<?php

declare(strict_types=1);

namespace App\ElektronicznyNadawca\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for zawartoscPocztex2021Type StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class ZawartoscPocztex2021Type extends AbstractStructBase
{
    /**
     * The zawartoscSpecjalna
     * Meta information extracted from the WSDL
     * - choice: zawartoscSpecjalna | zawartoscInna
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * @var string|null
     */
    public ?string $zawartoscSpecjalna = null;
    /**
     * The zawartoscInna
     * Meta information extracted from the WSDL
     * - choice: zawartoscSpecjalna | zawartoscInna
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * @var string|null
     */
    public ?string $zawartoscInna = null;
    /**
     * Constructor method for zawartoscPocztex2021Type
     * @uses ZawartoscPocztex2021Type::setZawartoscSpecjalna()
     * @uses ZawartoscPocztex2021Type::setZawartoscInna()
     * @param string $zawartoscSpecjalna
     * @param string $zawartoscInna
     */
    public function __construct(?string $zawartoscSpecjalna = null, ?string $zawartoscInna = null)
    {
        $this
            ->setZawartoscSpecjalna($zawartoscSpecjalna)
            ->setZawartoscInna($zawartoscInna);
    }
    /**
     * Get zawartoscSpecjalna value
     * @return string|null
     */
    public function getZawartoscSpecjalna(): ?string
    {
        return $this->zawartoscSpecjalna ?? null;
    }
    /**
     * Set zawartoscSpecjalna value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @param string $zawartoscSpecjalna
     * @return \App\ElektronicznyNadawca\StructType\ZawartoscPocztex2021Type
     */
    public function setZawartoscSpecjalna(?string $zawartoscSpecjalna = null): self
    {
        if (is_null($zawartoscSpecjalna) || (is_array($zawartoscSpecjalna) && empty($zawartoscSpecjalna))) {
            unset($this->zawartoscSpecjalna);
        } else {
            $this->zawartoscSpecjalna = $zawartoscSpecjalna;
        }
        
        return $this;
    }
    /**
     * Get zawartoscInna value
     * @return string|null
     */
    public function getZawartoscInna(): ?string
    {
        return $this->zawartoscInna ?? null;
    }
    /**
     * Set zawartoscInna value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @param string $zawartoscInna
     * @return \App\ElektronicznyNadawca\StructType\ZawartoscPocztex2021Type
     */
    public function setZawartoscInna(?string $zawartoscInna = null): self
    {
        if (is_null($zawartoscInna) || (is_array($zawartoscInna) && empty($zawartoscInna))) {
            unset($this->zawartoscInna);
        } else {
            $this->zawartoscInna = $zawartoscInna;
        }
        
        return $this;
    }
}
