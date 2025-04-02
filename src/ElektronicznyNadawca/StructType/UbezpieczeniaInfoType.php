<?php

declare(strict_types=1);

namespace App\ElektronicznyNadawca\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ubezpieczeniaInfoType StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class UbezpieczeniaInfoType extends AbstractStructBase
{
    /**
     * The typPrzesylki
     * @var string|null
     */
    public ?string $typPrzesylki = null;
    /**
     * The kwota
     * Meta information extracted from the WSDL
     * - base: xsd:decimal
     * @var float|null
     */
    public ?float $kwota = null;
    /**
     * Constructor method for ubezpieczeniaInfoType
     * @uses UbezpieczeniaInfoType::setTypPrzesylki()
     * @uses UbezpieczeniaInfoType::setKwota()
     * @param string $typPrzesylki
     * @param float $kwota
     */
    public function __construct(?string $typPrzesylki = null, ?float $kwota = null)
    {
        $this
            ->setTypPrzesylki($typPrzesylki)
            ->setKwota($kwota);
    }
    /**
     * Get typPrzesylki value
     * @return string|null
     */
    public function getTypPrzesylki(): ?string
    {
        return $this->typPrzesylki;
    }
    /**
     * Set typPrzesylki value
     * @param string $typPrzesylki
     * @return \App\ElektronicznyNadawca\StructType\UbezpieczeniaInfoType
     */
    public function setTypPrzesylki(?string $typPrzesylki = null): self
    {
        $this->typPrzesylki = $typPrzesylki;
        
        return $this;
    }
    /**
     * Get kwota value
     * @return float|null
     */
    public function getKwota(): ?float
    {
        return $this->kwota;
    }
    /**
     * Set kwota value
     * @param float $kwota
     * @return \App\ElektronicznyNadawca\StructType\UbezpieczeniaInfoType
     */
    public function setKwota(?float $kwota = null): self
    {
        $this->kwota = $kwota;
        
        return $this;
    }
}
