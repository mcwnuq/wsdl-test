<?php

declare(strict_types=1);

namespace App\ElektronicznyNadawca\StructType;



/**
 * This class stands for przesylkaFirmowaPoleconaType StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class PrzesylkaFirmowaPoleconaType extends PrzesylkaRejestrowanaType
{
    /**
     * The gabaryt
     * Meta information extracted from the WSDL
     * - use: required
     * @var string
     */
    public string $gabaryt;
    /**
     * The epo
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \App\ElektronicznyNadawca\StructType\EPOType|null
     */
    public ?\App\ElektronicznyNadawca\StructType\EPOType $epo = null;
    /**
     * The zasadySpecjalne
     * Meta information extracted from the WSDL
     * - use: optional
     * @var string|null
     */
    public ?string $zasadySpecjalne = null;
    /**
     * The posteRestante
     * @var bool|null
     */
    public ?bool $posteRestante = null;
    /**
     * The iloscPotwierdzenOdbioru
     * Meta information extracted from the WSDL
     * - base: xsd:int
     * - maxInclusive: 9
     * - minInclusive: 0
     * @var int|null
     */
    public ?int $iloscPotwierdzenOdbioru = null;
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
     * The miejscowa
     * @var bool|null
     */
    public ?bool $miejscowa = null;
    /**
     * The obszarMiasto
     * @var bool|null
     */
    public ?bool $obszarMiasto = null;
    /**
     * The kategoria
     * Meta information extracted from the WSDL
     * - use: optional
     * @var string|null
     */
    public ?string $kategoria = null;
    /**
     * The numerPrzesylkiKlienta
     * @var string|null
     */
    public ?string $numerPrzesylkiKlienta = null;
    /**
     * Constructor method for przesylkaFirmowaPoleconaType
     * @uses PrzesylkaFirmowaPoleconaType::setGabaryt()
     * @uses PrzesylkaFirmowaPoleconaType::setEpo()
     * @uses PrzesylkaFirmowaPoleconaType::setZasadySpecjalne()
     * @uses PrzesylkaFirmowaPoleconaType::setPosteRestante()
     * @uses PrzesylkaFirmowaPoleconaType::setIloscPotwierdzenOdbioru()
     * @uses PrzesylkaFirmowaPoleconaType::setMasa()
     * @uses PrzesylkaFirmowaPoleconaType::setMiejscowa()
     * @uses PrzesylkaFirmowaPoleconaType::setObszarMiasto()
     * @uses PrzesylkaFirmowaPoleconaType::setKategoria()
     * @uses PrzesylkaFirmowaPoleconaType::setNumerPrzesylkiKlienta()
     * @param string $gabaryt
     * @param \App\ElektronicznyNadawca\StructType\EPOType $epo
     * @param string $zasadySpecjalne
     * @param bool $posteRestante
     * @param int $iloscPotwierdzenOdbioru
     * @param int $masa
     * @param bool $miejscowa
     * @param bool $obszarMiasto
     * @param string $kategoria
     * @param string $numerPrzesylkiKlienta
     */
    public function __construct(string $gabaryt, ?\App\ElektronicznyNadawca\StructType\EPOType $epo = null, ?string $zasadySpecjalne = null, ?bool $posteRestante = null, ?int $iloscPotwierdzenOdbioru = null, ?int $masa = null, ?bool $miejscowa = null, ?bool $obszarMiasto = null, ?string $kategoria = null, ?string $numerPrzesylkiKlienta = null)
    {
        $this
            ->setGabaryt($gabaryt)
            ->setEpo($epo)
            ->setZasadySpecjalne($zasadySpecjalne)
            ->setPosteRestante($posteRestante)
            ->setIloscPotwierdzenOdbioru($iloscPotwierdzenOdbioru)
            ->setMasa($masa)
            ->setMiejscowa($miejscowa)
            ->setObszarMiasto($obszarMiasto)
            ->setKategoria($kategoria)
            ->setNumerPrzesylkiKlienta($numerPrzesylkiKlienta);
    }
    /**
     * Get gabaryt value
     * @return string
     */
    public function getGabaryt(): string
    {
        return $this->gabaryt;
    }
    /**
     * Set gabaryt value
     * @param string $gabaryt
     * @return \App\ElektronicznyNadawca\StructType\PrzesylkaFirmowaPoleconaType
     */
    public function setGabaryt(string $gabaryt): self
    {
        $this->gabaryt = $gabaryt;
        
        return $this;
    }
    /**
     * Get epo value
     * @return \App\ElektronicznyNadawca\StructType\EPOType|null
     */
    public function getEpo(): ?\App\ElektronicznyNadawca\StructType\EPOType
    {
        return $this->epo;
    }
    /**
     * Set epo value
     * @param \App\ElektronicznyNadawca\StructType\EPOType $epo
     * @return \App\ElektronicznyNadawca\StructType\PrzesylkaFirmowaPoleconaType
     */
    public function setEpo(?\App\ElektronicznyNadawca\StructType\EPOType $epo = null): self
    {
        $this->epo = $epo;
        
        return $this;
    }
    /**
     * Get zasadySpecjalne value
     * @return string|null
     */
    public function getZasadySpecjalne(): ?string
    {
        return $this->zasadySpecjalne;
    }
    /**
     * Set zasadySpecjalne value
     * @param string $zasadySpecjalne
     * @return \App\ElektronicznyNadawca\StructType\PrzesylkaFirmowaPoleconaType
     */
    public function setZasadySpecjalne(?string $zasadySpecjalne = null): self
    {
        $this->zasadySpecjalne = $zasadySpecjalne;
        
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
     * @return \App\ElektronicznyNadawca\StructType\PrzesylkaFirmowaPoleconaType
     */
    public function setPosteRestante(?bool $posteRestante = null): self
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
     * @return \App\ElektronicznyNadawca\StructType\PrzesylkaFirmowaPoleconaType
     */
    public function setIloscPotwierdzenOdbioru(?int $iloscPotwierdzenOdbioru = null): self
    {
        $this->iloscPotwierdzenOdbioru = $iloscPotwierdzenOdbioru;
        
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
     * @return \App\ElektronicznyNadawca\StructType\PrzesylkaFirmowaPoleconaType
     */
    public function setMasa(?int $masa = null): self
    {
        $this->masa = $masa;
        
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
     * @return \App\ElektronicznyNadawca\StructType\PrzesylkaFirmowaPoleconaType
     */
    public function setMiejscowa(?bool $miejscowa = null): self
    {
        $this->miejscowa = $miejscowa;
        
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
     * @return \App\ElektronicznyNadawca\StructType\PrzesylkaFirmowaPoleconaType
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
     * @return \App\ElektronicznyNadawca\StructType\PrzesylkaFirmowaPoleconaType
     */
    public function setKategoria(?string $kategoria = null): self
    {
        $this->kategoria = $kategoria;
        
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
     * @return \App\ElektronicznyNadawca\StructType\PrzesylkaFirmowaPoleconaType
     */
    public function setNumerPrzesylkiKlienta(?string $numerPrzesylkiKlienta = null): self
    {
        $this->numerPrzesylkiKlienta = $numerPrzesylkiKlienta;
        
        return $this;
    }
}
