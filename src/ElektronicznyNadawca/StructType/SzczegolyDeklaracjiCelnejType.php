<?php

declare(strict_types=1);

namespace App\ElektronicznyNadawca\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for szczegolyDeklaracjiCelnejType StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SzczegolyDeklaracjiCelnejType extends AbstractStructBase
{
    /**
     * The zawartosc
     * @var string|null
     */
    public ?string $zawartosc = null;
    /**
     * The ilosc
     * @var float|null
     */
    public ?float $ilosc = null;
    /**
     * The masa
     * @var int|null
     */
    public ?int $masa = null;
    /**
     * The wartosc
     * @var int|null
     */
    public ?int $wartosc = null;
    /**
     * The numerTaryfowy
     * @var string|null
     */
    public ?string $numerTaryfowy = null;
    /**
     * The krajPochodzenia
     * @var string|null
     */
    public ?string $krajPochodzenia = null;
    /**
     * Constructor method for szczegolyDeklaracjiCelnejType
     * @uses SzczegolyDeklaracjiCelnejType::setZawartosc()
     * @uses SzczegolyDeklaracjiCelnejType::setIlosc()
     * @uses SzczegolyDeklaracjiCelnejType::setMasa()
     * @uses SzczegolyDeklaracjiCelnejType::setWartosc()
     * @uses SzczegolyDeklaracjiCelnejType::setNumerTaryfowy()
     * @uses SzczegolyDeklaracjiCelnejType::setKrajPochodzenia()
     * @param string $zawartosc
     * @param float $ilosc
     * @param int $masa
     * @param int $wartosc
     * @param string $numerTaryfowy
     * @param string $krajPochodzenia
     */
    public function __construct(?string $zawartosc = null, ?float $ilosc = null, ?int $masa = null, ?int $wartosc = null, ?string $numerTaryfowy = null, ?string $krajPochodzenia = null)
    {
        $this
            ->setZawartosc($zawartosc)
            ->setIlosc($ilosc)
            ->setMasa($masa)
            ->setWartosc($wartosc)
            ->setNumerTaryfowy($numerTaryfowy)
            ->setKrajPochodzenia($krajPochodzenia);
    }
    /**
     * Get zawartosc value
     * @return string|null
     */
    public function getZawartosc(): ?string
    {
        return $this->zawartosc;
    }
    /**
     * Set zawartosc value
     * @param string $zawartosc
     * @return \App\ElektronicznyNadawca\StructType\SzczegolyDeklaracjiCelnejType
     */
    public function setZawartosc(?string $zawartosc = null): self
    {
        $this->zawartosc = $zawartosc;
        
        return $this;
    }
    /**
     * Get ilosc value
     * @return float|null
     */
    public function getIlosc(): ?float
    {
        return $this->ilosc;
    }
    /**
     * Set ilosc value
     * @param float $ilosc
     * @return \App\ElektronicznyNadawca\StructType\SzczegolyDeklaracjiCelnejType
     */
    public function setIlosc(?float $ilosc = null): self
    {
        $this->ilosc = $ilosc;
        
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
     * @return \App\ElektronicznyNadawca\StructType\SzczegolyDeklaracjiCelnejType
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
     * @return \App\ElektronicznyNadawca\StructType\SzczegolyDeklaracjiCelnejType
     */
    public function setWartosc(?int $wartosc = null): self
    {
        $this->wartosc = $wartosc;
        
        return $this;
    }
    /**
     * Get numerTaryfowy value
     * @return string|null
     */
    public function getNumerTaryfowy(): ?string
    {
        return $this->numerTaryfowy;
    }
    /**
     * Set numerTaryfowy value
     * @param string $numerTaryfowy
     * @return \App\ElektronicznyNadawca\StructType\SzczegolyDeklaracjiCelnejType
     */
    public function setNumerTaryfowy(?string $numerTaryfowy = null): self
    {
        $this->numerTaryfowy = $numerTaryfowy;
        
        return $this;
    }
    /**
     * Get krajPochodzenia value
     * @return string|null
     */
    public function getKrajPochodzenia(): ?string
    {
        return $this->krajPochodzenia;
    }
    /**
     * Set krajPochodzenia value
     * @param string $krajPochodzenia
     * @return \App\ElektronicznyNadawca\StructType\SzczegolyDeklaracjiCelnejType
     */
    public function setKrajPochodzenia(?string $krajPochodzenia = null): self
    {
        $this->krajPochodzenia = $krajPochodzenia;
        
        return $this;
    }
}
