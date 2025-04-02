<?php

declare(strict_types=1);

namespace App\ElektronicznyNadawca\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for przesylkaNierejestrowanaZNumeremType StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class PrzesylkaNierejestrowanaZNumeremType extends PrzesylkaRejestrowanaType
{
    /**
     * The posteRestante
     * @var bool|null
     */
    public ?bool $posteRestante = null;
    /**
     * The miejscowa
     * Meta information extracted from the WSDL
     * - default: false
     * @var bool|null
     */
    public ?bool $miejscowa = null;
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
     * The obszarMiasto
     * @var bool|null
     */
    public ?bool $obszarMiasto = null;
    /**
     * The kategoria
     * @var string|null
     */
    public ?string $kategoria = null;
    /**
     * The gabaryt
     * @var string|null
     */
    public ?string $gabaryt = null;
    /**
     * The serwis
     * @var string|null
     */
    public ?string $serwis = null;
    /**
     * Constructor method for przesylkaNierejestrowanaZNumeremType
     * @uses PrzesylkaNierejestrowanaZNumeremType::setPosteRestante()
     * @uses PrzesylkaNierejestrowanaZNumeremType::setMiejscowa()
     * @uses PrzesylkaNierejestrowanaZNumeremType::setMasa()
     * @uses PrzesylkaNierejestrowanaZNumeremType::setObszarMiasto()
     * @uses PrzesylkaNierejestrowanaZNumeremType::setKategoria()
     * @uses PrzesylkaNierejestrowanaZNumeremType::setGabaryt()
     * @uses PrzesylkaNierejestrowanaZNumeremType::setSerwis()
     * @param bool $posteRestante
     * @param bool $miejscowa
     * @param int $masa
     * @param bool $obszarMiasto
     * @param string $kategoria
     * @param string $gabaryt
     * @param string $serwis
     */
    public function __construct(?bool $posteRestante = null, ?bool $miejscowa = false, ?int $masa = null, ?bool $obszarMiasto = null, ?string $kategoria = null, ?string $gabaryt = null, ?string $serwis = null)
    {
        $this
            ->setPosteRestante($posteRestante)
            ->setMiejscowa($miejscowa)
            ->setMasa($masa)
            ->setObszarMiasto($obszarMiasto)
            ->setKategoria($kategoria)
            ->setGabaryt($gabaryt)
            ->setSerwis($serwis);
    }
    /**
     * Get posteRestante value
     * @return bool|null
     */
    public function getPosteRestante(): ?bool
    {
        return $this->posteRestante;
    }
    /**
     * Set posteRestante value
     * @param bool $posteRestante
     * @return \App\ElektronicznyNadawca\StructType\PrzesylkaNierejestrowanaZNumeremType
     */
    public function setPosteRestante(?bool $posteRestante = null): self
    {
        $this->posteRestante = $posteRestante;
        
        return $this;
    }
    /**
     * Get miejscowa value
     * @return bool|null
     */
    public function getMiejscowa(): ?bool
    {
        return $this->miejscowa;
    }
    /**
     * Set miejscowa value
     * @param bool $miejscowa
     * @return \App\ElektronicznyNadawca\StructType\PrzesylkaNierejestrowanaZNumeremType
     */
    public function setMiejscowa(?bool $miejscowa = false): self
    {
        $this->miejscowa = $miejscowa;
        
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
     * @return \App\ElektronicznyNadawca\StructType\PrzesylkaNierejestrowanaZNumeremType
     */
    public function setMasa(?int $masa = null): self
    {
        $this->masa = $masa;
        
        return $this;
    }
    /**
     * Get obszarMiasto value
     * @return bool|null
     */
    public function getObszarMiasto(): ?bool
    {
        return $this->obszarMiasto;
    }
    /**
     * Set obszarMiasto value
     * @param bool $obszarMiasto
     * @return \App\ElektronicznyNadawca\StructType\PrzesylkaNierejestrowanaZNumeremType
     */
    public function setObszarMiasto(?bool $obszarMiasto = null): self
    {
        $this->obszarMiasto = $obszarMiasto;
        
        return $this;
    }
    /**
     * Get kategoria value
     * @return string|null
     */
    public function getKategoria(): ?string
    {
        return $this->kategoria;
    }
    /**
     * Set kategoria value
     * @param string $kategoria
     * @return \App\ElektronicznyNadawca\StructType\PrzesylkaNierejestrowanaZNumeremType
     */
    public function setKategoria(?string $kategoria = null): self
    {
        $this->kategoria = $kategoria;
        
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
     * @return \App\ElektronicznyNadawca\StructType\PrzesylkaNierejestrowanaZNumeremType
     */
    public function setGabaryt(?string $gabaryt = null): self
    {
        $this->gabaryt = $gabaryt;
        
        return $this;
    }
    /**
     * Get serwis value
     * @return string|null
     */
    public function getSerwis(): ?string
    {
        return $this->serwis;
    }
    /**
     * Set serwis value
     * @param string $serwis
     * @return \App\ElektronicznyNadawca\StructType\PrzesylkaNierejestrowanaZNumeremType
     */
    public function setSerwis(?string $serwis = null): self
    {
        $this->serwis = $serwis;
        
        return $this;
    }
}
