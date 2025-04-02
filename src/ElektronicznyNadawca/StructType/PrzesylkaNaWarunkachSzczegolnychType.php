<?php

declare(strict_types=1);

namespace App\ElektronicznyNadawca\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for przesylkaNaWarunkachSzczegolnychType StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class PrzesylkaNaWarunkachSzczegolnychType extends PrzesylkaRejestrowanaType
{
    /**
     * The kategoria
     * Meta information extracted from the WSDL
     * - use: required
     * @var string
     */
    public string $kategoria;
    /**
     * The posteRestante
     * Meta information extracted from the WSDL
     * - default: false
     * - use: optional
     * @var bool|null
     */
    public ?bool $posteRestante = null;
    /**
     * The iloscPotwierdzenOdbioru
     * Meta information extracted from the WSDL
     * - base: xsd:int
     * - default: 0
     * - maxInclusive: 9
     * - minInclusive: 0
     * - use: optional
     * @var int|null
     */
    public ?int $iloscPotwierdzenOdbioru = null;
    /**
     * The wartosc
     * Meta information extracted from the WSDL
     * - documentation: zadeklarowana wartość przesyłki w groszach
     * - base: xsd:int
     * - maxInclusive: 9999999
     * - minInclusive: 0
     * - use: optional
     * @var int|null
     */
    public ?int $wartosc = null;
    /**
     * The masa
     * Meta information extracted from the WSDL
     * - documentation: masa przesyłki podana w gramach
     * - base: xsd:int
     * - maxInclusive: 9999999
     * - minInclusive: 1
     * - use: optional
     * @var int|null
     */
    public ?int $masa = null;
    /**
     * Constructor method for przesylkaNaWarunkachSzczegolnychType
     * @uses PrzesylkaNaWarunkachSzczegolnychType::setKategoria()
     * @uses PrzesylkaNaWarunkachSzczegolnychType::setPosteRestante()
     * @uses PrzesylkaNaWarunkachSzczegolnychType::setIloscPotwierdzenOdbioru()
     * @uses PrzesylkaNaWarunkachSzczegolnychType::setWartosc()
     * @uses PrzesylkaNaWarunkachSzczegolnychType::setMasa()
     * @param string $kategoria
     * @param bool $posteRestante
     * @param int $iloscPotwierdzenOdbioru
     * @param int $wartosc
     * @param int $masa
     */
    public function __construct(string $kategoria, ?bool $posteRestante = false, ?int $iloscPotwierdzenOdbioru = 0, ?int $wartosc = null, ?int $masa = null)
    {
        $this
            ->setKategoria($kategoria)
            ->setPosteRestante($posteRestante)
            ->setIloscPotwierdzenOdbioru($iloscPotwierdzenOdbioru)
            ->setWartosc($wartosc)
            ->setMasa($masa);
    }
    /**
     * Get kategoria value
     * @return string
     */
    public function getKategoria(): string
    {
        return $this->kategoria;
    }
    /**
     * Set kategoria value
     * @param string $kategoria
     * @return \App\ElektronicznyNadawca\StructType\PrzesylkaNaWarunkachSzczegolnychType
     */
    public function setKategoria(string $kategoria): self
    {
        $this->kategoria = $kategoria;
        
        return $this;
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
     * @return \App\ElektronicznyNadawca\StructType\PrzesylkaNaWarunkachSzczegolnychType
     */
    public function setPosteRestante(?bool $posteRestante = false): self
    {
        $this->posteRestante = $posteRestante;
        
        return $this;
    }
    /**
     * Get iloscPotwierdzenOdbioru value
     * @return int|null
     */
    public function getIloscPotwierdzenOdbioru(): ?int
    {
        return $this->iloscPotwierdzenOdbioru;
    }
    /**
     * Set iloscPotwierdzenOdbioru value
     * @param int $iloscPotwierdzenOdbioru
     * @return \App\ElektronicznyNadawca\StructType\PrzesylkaNaWarunkachSzczegolnychType
     */
    public function setIloscPotwierdzenOdbioru(?int $iloscPotwierdzenOdbioru = 0): self
    {
        $this->iloscPotwierdzenOdbioru = $iloscPotwierdzenOdbioru;
        
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
     * @return \App\ElektronicznyNadawca\StructType\PrzesylkaNaWarunkachSzczegolnychType
     */
    public function setWartosc(?int $wartosc = null): self
    {
        $this->wartosc = $wartosc;
        
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
     * @return \App\ElektronicznyNadawca\StructType\PrzesylkaNaWarunkachSzczegolnychType
     */
    public function setMasa(?int $masa = null): self
    {
        $this->masa = $masa;
        
        return $this;
    }
}
