<?php

declare(strict_types=1);

namespace App\ElektronicznyNadawca\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for urzadNadaniaFullType StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class UrzadNadaniaFullType extends AbstractStructBase
{
    /**
     * The urzadNadania
     * Meta information extracted from the WSDL
     * - base: xsd:int
     * @var int|null
     */
    public ?int $urzadNadania = null;
    /**
     * The opis
     * @var string|null
     */
    public ?string $opis = null;
    /**
     * The nazwaWydruk
     * @var string|null
     */
    public ?string $nazwaWydruk = null;
    /**
     * Constructor method for urzadNadaniaFullType
     * @uses UrzadNadaniaFullType::setUrzadNadania()
     * @uses UrzadNadaniaFullType::setOpis()
     * @uses UrzadNadaniaFullType::setNazwaWydruk()
     * @param int $urzadNadania
     * @param string $opis
     * @param string $nazwaWydruk
     */
    public function __construct(?int $urzadNadania = null, ?string $opis = null, ?string $nazwaWydruk = null)
    {
        $this
            ->setUrzadNadania($urzadNadania)
            ->setOpis($opis)
            ->setNazwaWydruk($nazwaWydruk);
    }
    /**
     * Get urzadNadania value
     * @return int|null
     */
    public function getUrzadNadania(): ?int
    {
        return $this->urzadNadania;
    }
    /**
     * Set urzadNadania value
     * @param int $urzadNadania
     * @return \App\ElektronicznyNadawca\StructType\UrzadNadaniaFullType
     */
    public function setUrzadNadania(?int $urzadNadania = null): self
    {
        $this->urzadNadania = $urzadNadania;
        
        return $this;
    }
    /**
     * Get opis value
     * @return string|null
     */
    public function getOpis(): ?string
    {
        return $this->opis;
    }
    /**
     * Set opis value
     * @param string $opis
     * @return \App\ElektronicznyNadawca\StructType\UrzadNadaniaFullType
     */
    public function setOpis(?string $opis = null): self
    {
        $this->opis = $opis;
        
        return $this;
    }
    /**
     * Get nazwaWydruk value
     * @return string|null
     */
    public function getNazwaWydruk(): ?string
    {
        return $this->nazwaWydruk;
    }
    /**
     * Set nazwaWydruk value
     * @param string $nazwaWydruk
     * @return \App\ElektronicznyNadawca\StructType\UrzadNadaniaFullType
     */
    public function setNazwaWydruk(?string $nazwaWydruk = null): self
    {
        $this->nazwaWydruk = $nazwaWydruk;
        
        return $this;
    }
}
