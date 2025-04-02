<?php

declare(strict_types=1);

namespace App\ElektronicznyNadawca\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for pobranieType StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class PobranieType extends AbstractStructBase
{
    /**
     * The sposobPobrania
     * @var string|null
     */
    public ?string $sposobPobrania = null;
    /**
     * The kwotaPobrania
     * Meta information extracted from the WSDL
     * - documentation: kwota jaką należy pobrać podana w groszach
     * - base: xsd:int
     * - maxInclusive: 9999999
     * - minInclusive: 0
     * @var int|null
     */
    public ?int $kwotaPobrania = null;
    /**
     * The nrb
     * Meta information extracted from the WSDL
     * - base: xsd:string
     * - maxLength: 26
     * - minLength: 0
     * @var string|null
     */
    public ?string $nrb = null;
    /**
     * The tytulem
     * Meta information extracted from the WSDL
     * - base: xsd:string
     * - maxLength: 54
     * - minLength: 0
     * @var string|null
     */
    public ?string $tytulem = null;
    /**
     * The sprawdzenieZawartosciPrzesylkiPrzezOdbiorce
     * @var bool|null
     */
    public ?bool $sprawdzenieZawartosciPrzesylkiPrzezOdbiorce = null;
    /**
     * Constructor method for pobranieType
     * @uses PobranieType::setSposobPobrania()
     * @uses PobranieType::setKwotaPobrania()
     * @uses PobranieType::setNrb()
     * @uses PobranieType::setTytulem()
     * @uses PobranieType::setSprawdzenieZawartosciPrzesylkiPrzezOdbiorce()
     * @param string $sposobPobrania
     * @param int $kwotaPobrania
     * @param string $nrb
     * @param string $tytulem
     * @param bool $sprawdzenieZawartosciPrzesylkiPrzezOdbiorce
     */
    public function __construct(?string $sposobPobrania = null, ?int $kwotaPobrania = null, ?string $nrb = null, ?string $tytulem = null, ?bool $sprawdzenieZawartosciPrzesylkiPrzezOdbiorce = null)
    {
        $this
            ->setSposobPobrania($sposobPobrania)
            ->setKwotaPobrania($kwotaPobrania)
            ->setNrb($nrb)
            ->setTytulem($tytulem)
            ->setSprawdzenieZawartosciPrzesylkiPrzezOdbiorce($sprawdzenieZawartosciPrzesylkiPrzezOdbiorce);
    }
    /**
     * Get sposobPobrania value
     * @return string|null
     */
    public function getSposobPobrania(): ?string
    {
        return $this->sposobPobrania;
    }
    /**
     * Set sposobPobrania value
     * @param string $sposobPobrania
     * @return \App\ElektronicznyNadawca\StructType\PobranieType
     */
    public function setSposobPobrania(?string $sposobPobrania = null): self
    {
        $this->sposobPobrania = $sposobPobrania;
        
        return $this;
    }
    /**
     * Get kwotaPobrania value
     * @return int|null
     */
    public function getKwotaPobrania(): ?int
    {
        return $this->kwotaPobrania;
    }
    /**
     * Set kwotaPobrania value
     * @param int $kwotaPobrania
     * @return \App\ElektronicznyNadawca\StructType\PobranieType
     */
    public function setKwotaPobrania(?int $kwotaPobrania = null): self
    {
        $this->kwotaPobrania = $kwotaPobrania;
        
        return $this;
    }
    /**
     * Get nrb value
     * @return string|null
     */
    public function getNrb(): ?string
    {
        return $this->nrb;
    }
    /**
     * Set nrb value
     * @param string $nrb
     * @return \App\ElektronicznyNadawca\StructType\PobranieType
     */
    public function setNrb(?string $nrb = null): self
    {
        $this->nrb = $nrb;
        
        return $this;
    }
    /**
     * Get tytulem value
     * @return string|null
     */
    public function getTytulem(): ?string
    {
        return $this->tytulem;
    }
    /**
     * Set tytulem value
     * @param string $tytulem
     * @return \App\ElektronicznyNadawca\StructType\PobranieType
     */
    public function setTytulem(?string $tytulem = null): self
    {
        $this->tytulem = $tytulem;
        
        return $this;
    }
    /**
     * Get sprawdzenieZawartosciPrzesylkiPrzezOdbiorce value
     * @return bool|null
     */
    public function getSprawdzenieZawartosciPrzesylkiPrzezOdbiorce(): ?bool
    {
        return $this->sprawdzenieZawartosciPrzesylkiPrzezOdbiorce;
    }
    /**
     * Set sprawdzenieZawartosciPrzesylkiPrzezOdbiorce value
     * @param bool $sprawdzenieZawartosciPrzesylkiPrzezOdbiorce
     * @return \App\ElektronicznyNadawca\StructType\PobranieType
     */
    public function setSprawdzenieZawartosciPrzesylkiPrzezOdbiorce(?bool $sprawdzenieZawartosciPrzesylkiPrzezOdbiorce = null): self
    {
        $this->sprawdzenieZawartosciPrzesylkiPrzezOdbiorce = $sprawdzenieZawartosciPrzesylkiPrzezOdbiorce;
        
        return $this;
    }
}
