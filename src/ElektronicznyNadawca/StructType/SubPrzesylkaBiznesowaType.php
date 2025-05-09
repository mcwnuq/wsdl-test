<?php

declare(strict_types=1);

namespace App\ElektronicznyNadawca\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for subPrzesylkaBiznesowaType StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SubPrzesylkaBiznesowaType extends PrzesylkaType
{
    /**
     * The ubezpieczenie
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
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
     * The gabaryt
     * @var string|null
     */
    public ?string $gabaryt = null;
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
     * The numerPrzesylkiKlienta
     * @var string|null
     */
    public ?string $numerPrzesylkiKlienta = null;
    /**
     * The niestandardowa
     * @var bool|null
     */
    public ?bool $niestandardowa = null;
    /**
     * Constructor method for subPrzesylkaBiznesowaType
     * @uses SubPrzesylkaBiznesowaType::setUbezpieczenie()
     * @uses SubPrzesylkaBiznesowaType::setNumerNadania()
     * @uses SubPrzesylkaBiznesowaType::setMasa()
     * @uses SubPrzesylkaBiznesowaType::setGabaryt()
     * @uses SubPrzesylkaBiznesowaType::setWartosc()
     * @uses SubPrzesylkaBiznesowaType::setOstroznie()
     * @uses SubPrzesylkaBiznesowaType::setNumerPrzesylkiKlienta()
     * @uses SubPrzesylkaBiznesowaType::setNiestandardowa()
     * @param \App\ElektronicznyNadawca\StructType\UbezpieczenieType $ubezpieczenie
     * @param string $numerNadania
     * @param int $masa
     * @param string $gabaryt
     * @param int $wartosc
     * @param bool $ostroznie
     * @param string $numerPrzesylkiKlienta
     * @param bool $niestandardowa
     */
    public function __construct(?\App\ElektronicznyNadawca\StructType\UbezpieczenieType $ubezpieczenie = null, ?string $numerNadania = null, ?int $masa = null, ?string $gabaryt = null, ?int $wartosc = null, ?bool $ostroznie = null, ?string $numerPrzesylkiKlienta = null, ?bool $niestandardowa = null)
    {
        $this
            ->setUbezpieczenie($ubezpieczenie)
            ->setNumerNadania($numerNadania)
            ->setMasa($masa)
            ->setGabaryt($gabaryt)
            ->setWartosc($wartosc)
            ->setOstroznie($ostroznie)
            ->setNumerPrzesylkiKlienta($numerPrzesylkiKlienta)
            ->setNiestandardowa($niestandardowa);
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
     * @return \App\ElektronicznyNadawca\StructType\SubPrzesylkaBiznesowaType
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
     * @return \App\ElektronicznyNadawca\StructType\SubPrzesylkaBiznesowaType
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
     * @return \App\ElektronicznyNadawca\StructType\SubPrzesylkaBiznesowaType
     */
    public function setMasa(?int $masa = null): self
    {
        $this->masa = $masa;
        
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
     * @return \App\ElektronicznyNadawca\StructType\SubPrzesylkaBiznesowaType
     */
    public function setGabaryt(?string $gabaryt = null): self
    {
        $this->gabaryt = $gabaryt;
        
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
     * @return \App\ElektronicznyNadawca\StructType\SubPrzesylkaBiznesowaType
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
     * @return \App\ElektronicznyNadawca\StructType\SubPrzesylkaBiznesowaType
     */
    public function setOstroznie(?bool $ostroznie = null): self
    {
        $this->ostroznie = $ostroznie;
        
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
     * @return \App\ElektronicznyNadawca\StructType\SubPrzesylkaBiznesowaType
     */
    public function setNumerPrzesylkiKlienta(?string $numerPrzesylkiKlienta = null): self
    {
        $this->numerPrzesylkiKlienta = $numerPrzesylkiKlienta;
        
        return $this;
    }
    /**
     * Get niestandardowa value
     * @return bool|null
     */
    public function getNiestandardowa(): ?bool
    {
        return $this->niestandardowa;
    }
    /**
     * Set niestandardowa value
     * @param bool $niestandardowa
     * @return \App\ElektronicznyNadawca\StructType\SubPrzesylkaBiznesowaType
     */
    public function setNiestandardowa(?bool $niestandardowa = null): self
    {
        $this->niestandardowa = $niestandardowa;
        
        return $this;
    }
}
