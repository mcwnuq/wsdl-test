<?php

declare(strict_types=1);

namespace App\ElektronicznyNadawca\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for platnikType StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class PlatnikType extends AbstractStructBase
{
    /**
     * The uiszczaOplate
     * Meta information extracted from the WSDL
     * - choice: uiszczaOplate | adresPlatnika
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * @var string|null
     */
    public ?string $uiszczaOplate = null;
    /**
     * The adresPlatnika
     * Meta information extracted from the WSDL
     * - choice: uiszczaOplate | adresPlatnika
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * @var \App\ElektronicznyNadawca\StructType\AdresType|null
     */
    public ?\App\ElektronicznyNadawca\StructType\AdresType $adresPlatnika = null;
    /**
     * Constructor method for platnikType
     * @uses PlatnikType::setUiszczaOplate()
     * @uses PlatnikType::setAdresPlatnika()
     * @param string $uiszczaOplate
     * @param \App\ElektronicznyNadawca\StructType\AdresType $adresPlatnika
     */
    public function __construct(?string $uiszczaOplate = null, ?\App\ElektronicznyNadawca\StructType\AdresType $adresPlatnika = null)
    {
        $this
            ->setUiszczaOplate($uiszczaOplate)
            ->setAdresPlatnika($adresPlatnika);
    }
    /**
     * Get uiszczaOplate value
     * @return string|null
     */
    public function getUiszczaOplate(): ?string
    {
        return $this->uiszczaOplate ?? null;
    }
    /**
     * Set uiszczaOplate value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @param string $uiszczaOplate
     * @return \App\ElektronicznyNadawca\StructType\PlatnikType
     */
    public function setUiszczaOplate(?string $uiszczaOplate = null): self
    {
        if (is_null($uiszczaOplate) || (is_array($uiszczaOplate) && empty($uiszczaOplate))) {
            unset($this->uiszczaOplate);
        } else {
            $this->uiszczaOplate = $uiszczaOplate;
        }
        
        return $this;
    }
    /**
     * Get adresPlatnika value
     * @return \App\ElektronicznyNadawca\StructType\AdresType|null
     */
    public function getAdresPlatnika(): ?\App\ElektronicznyNadawca\StructType\AdresType
    {
        return $this->adresPlatnika ?? null;
    }
    /**
     * Set adresPlatnika value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @param \App\ElektronicznyNadawca\StructType\AdresType $adresPlatnika
     * @return \App\ElektronicznyNadawca\StructType\PlatnikType
     */
    public function setAdresPlatnika(?\App\ElektronicznyNadawca\StructType\AdresType $adresPlatnika = null): self
    {
        if (is_null($adresPlatnika) || (is_array($adresPlatnika) && empty($adresPlatnika))) {
            unset($this->adresPlatnika);
        } else {
            $this->adresPlatnika = $adresPlatnika;
        }
        
        return $this;
    }
}
