<?php

declare(strict_types=1);

namespace App\ElektronicznyNadawca\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for subUslugaPaczkowaType StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SubUslugaPaczkowaType extends PrzesylkaType
{
    /**
     * The pobranie
     * @var \App\ElektronicznyNadawca\StructType\PobranieType|null
     */
    public ?\App\ElektronicznyNadawca\StructType\PobranieType $pobranie = null;
    /**
     * The ubezpieczenie
     * @var \App\ElektronicznyNadawca\StructType\UbezpieczenieType|null
     */
    public ?\App\ElektronicznyNadawca\StructType\UbezpieczenieType $ubezpieczenie = null;
    /**
     * The numerNadania
     * Meta information extracted from the WSDL
     * - base: xsd:string
     * - maxLength: 20
     * - minLength: 10
     * @var string|null
     */
    public ?string $numerNadania = null;
    /**
     * The masa
     * Meta information extracted from the WSDL
     * - documentation: masa przesyłki podana w gramach
     * - base: xsd:int
     * - maxInclusive: 9999999
     * - minInclusive: 1
     * @var int|null
     */
    public ?int $masa = null;
    /**
     * The wartosc
     * Meta information extracted from the WSDL
     * - documentation: zadeklarowana wartość przesyłki w groszach
     * - base: xsd:int
     * - maxInclusive: 9999999
     * - minInclusive: 0
     * @var int|null
     */
    public ?int $wartosc = null;
    /**
     * The ostroznie
     * @var bool|null
     */
    public ?bool $ostroznie = null;
    /**
     * The opakowanie
     * @var string|null
     */
    public ?string $opakowanie = null;
    /**
     * The ponadgabaryt
     * @var bool|null
     */
    public ?bool $ponadgabaryt = null;
    /**
     * The numerPrzesylkiKlienta
     * @var string|null
     */
    public ?string $numerPrzesylkiKlienta = null;
    /**
     * The gabaryt
     * @var string|null
     */
    public ?string $gabaryt = null;
    /**
     * Constructor method for subUslugaPaczkowaType
     * @uses SubUslugaPaczkowaType::setPobranie()
     * @uses SubUslugaPaczkowaType::setUbezpieczenie()
     * @uses SubUslugaPaczkowaType::setNumerNadania()
     * @uses SubUslugaPaczkowaType::setMasa()
     * @uses SubUslugaPaczkowaType::setWartosc()
     * @uses SubUslugaPaczkowaType::setOstroznie()
     * @uses SubUslugaPaczkowaType::setOpakowanie()
     * @uses SubUslugaPaczkowaType::setPonadgabaryt()
     * @uses SubUslugaPaczkowaType::setNumerPrzesylkiKlienta()
     * @uses SubUslugaPaczkowaType::setGabaryt()
     * @param \App\ElektronicznyNadawca\StructType\PobranieType $pobranie
     * @param \App\ElektronicznyNadawca\StructType\UbezpieczenieType $ubezpieczenie
     * @param string $numerNadania
     * @param int $masa
     * @param int $wartosc
     * @param bool $ostroznie
     * @param string $opakowanie
     * @param bool $ponadgabaryt
     * @param string $numerPrzesylkiKlienta
     * @param string $gabaryt
     */
    public function __construct(?\App\ElektronicznyNadawca\StructType\PobranieType $pobranie = null, ?\App\ElektronicznyNadawca\StructType\UbezpieczenieType $ubezpieczenie = null, ?string $numerNadania = null, ?int $masa = null, ?int $wartosc = null, ?bool $ostroznie = null, ?string $opakowanie = null, ?bool $ponadgabaryt = null, ?string $numerPrzesylkiKlienta = null, ?string $gabaryt = null)
    {
        $this
            ->setPobranie($pobranie)
            ->setUbezpieczenie($ubezpieczenie)
            ->setNumerNadania($numerNadania)
            ->setMasa($masa)
            ->setWartosc($wartosc)
            ->setOstroznie($ostroznie)
            ->setOpakowanie($opakowanie)
            ->setPonadgabaryt($ponadgabaryt)
            ->setNumerPrzesylkiKlienta($numerPrzesylkiKlienta)
            ->setGabaryt($gabaryt);
    }
    /**
     * Get pobranie value
     * @return \App\ElektronicznyNadawca\StructType\PobranieType|null
     */
    public function getPobranie(): ?\App\ElektronicznyNadawca\StructType\PobranieType
    {
        return $this->pobranie;
    }
    /**
     * Set pobranie value
     * @param \App\ElektronicznyNadawca\StructType\PobranieType $pobranie
     * @return \App\ElektronicznyNadawca\StructType\SubUslugaPaczkowaType
     */
    public function setPobranie(?\App\ElektronicznyNadawca\StructType\PobranieType $pobranie = null): self
    {
        $this->pobranie = $pobranie;
        
        return $this;
    }
    /**
     * Get ubezpieczenie value
     * @return \App\ElektronicznyNadawca\StructType\UbezpieczenieType|null
     */
    public function getUbezpieczenie(): ?\App\ElektronicznyNadawca\StructType\UbezpieczenieType
    {
        return $this->ubezpieczenie;
    }
    /**
     * Set ubezpieczenie value
     * @param \App\ElektronicznyNadawca\StructType\UbezpieczenieType $ubezpieczenie
     * @return \App\ElektronicznyNadawca\StructType\SubUslugaPaczkowaType
     */
    public function setUbezpieczenie(?\App\ElektronicznyNadawca\StructType\UbezpieczenieType $ubezpieczenie = null): self
    {
        $this->ubezpieczenie = $ubezpieczenie;
        
        return $this;
    }
    /**
     * Get numerNadania value
     * @return string|null
     */
    public function getNumerNadania(): ?string
    {
        return $this->numerNadania;
    }
    /**
     * Set numerNadania value
     * @param string $numerNadania
     * @return \App\ElektronicznyNadawca\StructType\SubUslugaPaczkowaType
     */
    public function setNumerNadania(?string $numerNadania = null): self
    {
        $this->numerNadania = $numerNadania;
        
        return $this;
    }
    /**
     * Get masa value
     * @return int|null
     */
    public function getMasa(): ?int
    {
        return $this->masa;
    }
    /**
     * Set masa value
     * @param int $masa
     * @return \App\ElektronicznyNadawca\StructType\SubUslugaPaczkowaType
     */
    public function setMasa(?int $masa = null): self
    {
        $this->masa = $masa;
        
        return $this;
    }
    /**
     * Get wartosc value
     * @return int|null
     */
    public function getWartosc(): ?int
    {
        return $this->wartosc;
    }
    /**
     * Set wartosc value
     * @param int $wartosc
     * @return \App\ElektronicznyNadawca\StructType\SubUslugaPaczkowaType
     */
    public function setWartosc(?int $wartosc = null): self
    {
        $this->wartosc = $wartosc;
        
        return $this;
    }
    /**
     * Get ostroznie value
     * @return bool|null
     */
    public function getOstroznie(): ?bool
    {
        return $this->ostroznie;
    }
    /**
     * Set ostroznie value
     * @param bool $ostroznie
     * @return \App\ElektronicznyNadawca\StructType\SubUslugaPaczkowaType
     */
    public function setOstroznie(?bool $ostroznie = null): self
    {
        $this->ostroznie = $ostroznie;
        
        return $this;
    }
    /**
     * Get opakowanie value
     * @return string|null
     */
    public function getOpakowanie(): ?string
    {
        return $this->opakowanie;
    }
    /**
     * Set opakowanie value
     * @param string $opakowanie
     * @return \App\ElektronicznyNadawca\StructType\SubUslugaPaczkowaType
     */
    public function setOpakowanie(?string $opakowanie = null): self
    {
        $this->opakowanie = $opakowanie;
        
        return $this;
    }
    /**
     * Get ponadgabaryt value
     * @return bool|null
     */
    public function getPonadgabaryt(): ?bool
    {
        return $this->ponadgabaryt;
    }
    /**
     * Set ponadgabaryt value
     * @param bool $ponadgabaryt
     * @return \App\ElektronicznyNadawca\StructType\SubUslugaPaczkowaType
     */
    public function setPonadgabaryt(?bool $ponadgabaryt = null): self
    {
        $this->ponadgabaryt = $ponadgabaryt;
        
        return $this;
    }
    /**
     * Get numerPrzesylkiKlienta value
     * @return string|null
     */
    public function getNumerPrzesylkiKlienta(): ?string
    {
        return $this->numerPrzesylkiKlienta;
    }
    /**
     * Set numerPrzesylkiKlienta value
     * @param string $numerPrzesylkiKlienta
     * @return \App\ElektronicznyNadawca\StructType\SubUslugaPaczkowaType
     */
    public function setNumerPrzesylkiKlienta(?string $numerPrzesylkiKlienta = null): self
    {
        $this->numerPrzesylkiKlienta = $numerPrzesylkiKlienta;
        
        return $this;
    }
    /**
     * Get gabaryt value
     * @return string|null
     */
    public function getGabaryt(): ?string
    {
        return $this->gabaryt;
    }
    /**
     * Set gabaryt value
     * @param string $gabaryt
     * @return \App\ElektronicznyNadawca\StructType\SubUslugaPaczkowaType
     */
    public function setGabaryt(?string $gabaryt = null): self
    {
        $this->gabaryt = $gabaryt;
        
        return $this;
    }
}
