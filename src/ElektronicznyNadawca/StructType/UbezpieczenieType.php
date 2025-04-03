<?php

declare(strict_types=1);

namespace App\ElektronicznyNadawca\StructType;



/**
 * This class stands for ubezpieczenieType StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class UbezpieczenieType
{
    /**
     * The rodzaj
     * Meta information extracted from the WSDL
     * - base: xsd:string
     * - maxLength: 10
     * - minLength: 1
     * - use: required
     * @var string
     */
    public string $rodzaj;
    /**
     * The kwota
     * Meta information extracted from the WSDL
     * - base: xsd:decimal
     * - use: required
     * @var float
     */
    public float $kwota;
    /**
     * The akceptacjaOWU
     * Meta information extracted from the WSDL
     * - use: optional
     * @var bool|null
     */
    public ?bool $akceptacjaOWU = null;
    /**
     * Constructor method for ubezpieczenieType
     * @uses UbezpieczenieType::setRodzaj()
     * @uses UbezpieczenieType::setKwota()
     * @uses UbezpieczenieType::setAkceptacjaOWU()
     * @param string $rodzaj
     * @param float $kwota
     * @param bool $akceptacjaOWU
     */
    public function __construct(string $rodzaj, float $kwota, ?bool $akceptacjaOWU = null)
    {
        $this
            ->setRodzaj($rodzaj)
            ->setKwota($kwota)
            ->setAkceptacjaOWU($akceptacjaOWU);
    }
    /**
     * Get rodzaj value
     * @return string
     */
    public function getRodzaj(): string
    {
        return $this->rodzaj;
    }
    /**
     * Set rodzaj value
     * @param string $rodzaj
     * @return \App\ElektronicznyNadawca\StructType\UbezpieczenieType
     */
    public function setRodzaj(string $rodzaj): self
    {
        $this->rodzaj = $rodzaj;
        
        return $this;
    }
    /**
     * Get kwota value
     * @return float
     */
    public function getKwota(): float
    {
        return $this->kwota;
    }
    /**
     * Set kwota value
     * @param float $kwota
     * @return \App\ElektronicznyNadawca\StructType\UbezpieczenieType
     */
    public function setKwota(float $kwota): self
    {
        $this->kwota = $kwota;
        
        return $this;
    }
    /**
     * Get akceptacjaOWU value
     * @return bool|null
     */
    public function getAkceptacjaOWU(): ?bool
    {
        return $this->akceptacjaOWU;
    }
    /**
     * Set akceptacjaOWU value
     * @param bool $akceptacjaOWU
     * @return \App\ElektronicznyNadawca\StructType\UbezpieczenieType
     */
    public function setAkceptacjaOWU(?bool $akceptacjaOWU = null): self
    {
        $this->akceptacjaOWU = $akceptacjaOWU;
        
        return $this;
    }
}
