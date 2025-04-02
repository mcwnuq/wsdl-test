<?php

declare(strict_types=1);

namespace App\ElektronicznyNadawca\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for listZwyklyType StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class ListZwyklyType extends PrzesylkaNieRejestrowanaType
{
    /**
     * The idLibraryForLegalDeposit
     * Meta information extracted from the WSDL
     * - documentation: Identifier library for legal deposit from list downloaded using the getLibrariesForLegalDeposits method
     * - base: xsd:string
     * - maxLength: 4
     * - maxOccurs: 1
     * - minLength: 4
     * - minOccurs: 0
     * @var string|null
     */
    public ?string $idLibraryForLegalDeposit = null;
    /**
     * The posteRestante
     * @var bool|null
     */
    public ?bool $posteRestante = null;
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
     * The egzemplarzBiblioteczny
     * Meta information extracted from the WSDL
     * - default: false
     * @var bool|null
     */
    public ?bool $egzemplarzBiblioteczny = null;
    /**
     * The dlaOciemnialych
     * Meta information extracted from the WSDL
     * - default: false
     * @var bool|null
     */
    public ?bool $dlaOciemnialych = null;
    /**
     * The obszarMiasto
     * @var bool|null
     */
    public ?bool $obszarMiasto = null;
    /**
     * The miejscowa
     * @var bool|null
     */
    public ?bool $miejscowa = null;
    /**
     * Constructor method for listZwyklyType
     * @uses ListZwyklyType::setIdLibraryForLegalDeposit()
     * @uses ListZwyklyType::setPosteRestante()
     * @uses ListZwyklyType::setKategoria()
     * @uses ListZwyklyType::setGabaryt()
     * @uses ListZwyklyType::setMasa()
     * @uses ListZwyklyType::setEgzemplarzBiblioteczny()
     * @uses ListZwyklyType::setDlaOciemnialych()
     * @uses ListZwyklyType::setObszarMiasto()
     * @uses ListZwyklyType::setMiejscowa()
     * @param string $idLibraryForLegalDeposit
     * @param bool $posteRestante
     * @param string $kategoria
     * @param string $gabaryt
     * @param int $masa
     * @param bool $egzemplarzBiblioteczny
     * @param bool $dlaOciemnialych
     * @param bool $obszarMiasto
     * @param bool $miejscowa
     */
    public function __construct(?string $idLibraryForLegalDeposit = null, ?bool $posteRestante = null, ?string $kategoria = null, ?string $gabaryt = null, ?int $masa = null, ?bool $egzemplarzBiblioteczny = false, ?bool $dlaOciemnialych = false, ?bool $obszarMiasto = null, ?bool $miejscowa = null)
    {
        $this
            ->setIdLibraryForLegalDeposit($idLibraryForLegalDeposit)
            ->setPosteRestante($posteRestante)
            ->setKategoria($kategoria)
            ->setGabaryt($gabaryt)
            ->setMasa($masa)
            ->setEgzemplarzBiblioteczny($egzemplarzBiblioteczny)
            ->setDlaOciemnialych($dlaOciemnialych)
            ->setObszarMiasto($obszarMiasto)
            ->setMiejscowa($miejscowa);
    }
    /**
     * Get idLibraryForLegalDeposit value
     * @return string|null
     */
    public function getIdLibraryForLegalDeposit(): ?string
    {
        return $this->idLibraryForLegalDeposit;
    }
    /**
     * Set idLibraryForLegalDeposit value
     * @param string $idLibraryForLegalDeposit
     * @return \App\ElektronicznyNadawca\StructType\ListZwyklyType
     */
    public function setIdLibraryForLegalDeposit(?string $idLibraryForLegalDeposit = null): self
    {
        $this->idLibraryForLegalDeposit = $idLibraryForLegalDeposit;
        
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
     * @return \App\ElektronicznyNadawca\StructType\ListZwyklyType
     */
    public function setPosteRestante(?bool $posteRestante = null): self
    {
        $this->posteRestante = $posteRestante;
        
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
     * @return \App\ElektronicznyNadawca\StructType\ListZwyklyType
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
     * @return \App\ElektronicznyNadawca\StructType\ListZwyklyType
     */
    public function setGabaryt(?string $gabaryt = null): self
    {
        $this->gabaryt = $gabaryt;
        
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
     * @return \App\ElektronicznyNadawca\StructType\ListZwyklyType
     */
    public function setMasa(?int $masa = null): self
    {
        $this->masa = $masa;
        
        return $this;
    }
    /**
     * Get egzemplarzBiblioteczny value
     * @return bool|null
     */
    public function getEgzemplarzBiblioteczny(): ?bool
    {
        return $this->egzemplarzBiblioteczny;
    }
    /**
     * Set egzemplarzBiblioteczny value
     * @param bool $egzemplarzBiblioteczny
     * @return \App\ElektronicznyNadawca\StructType\ListZwyklyType
     */
    public function setEgzemplarzBiblioteczny(?bool $egzemplarzBiblioteczny = false): self
    {
        $this->egzemplarzBiblioteczny = $egzemplarzBiblioteczny;
        
        return $this;
    }
    /**
     * Get dlaOciemnialych value
     * @return bool|null
     */
    public function getDlaOciemnialych(): ?bool
    {
        return $this->dlaOciemnialych;
    }
    /**
     * Set dlaOciemnialych value
     * @param bool $dlaOciemnialych
     * @return \App\ElektronicznyNadawca\StructType\ListZwyklyType
     */
    public function setDlaOciemnialych(?bool $dlaOciemnialych = false): self
    {
        $this->dlaOciemnialych = $dlaOciemnialych;
        
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
     * @return \App\ElektronicznyNadawca\StructType\ListZwyklyType
     */
    public function setObszarMiasto(?bool $obszarMiasto = null): self
    {
        $this->obszarMiasto = $obszarMiasto;
        
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
     * @return \App\ElektronicznyNadawca\StructType\ListZwyklyType
     */
    public function setMiejscowa(?bool $miejscowa = null): self
    {
        $this->miejscowa = $miejscowa;
        
        return $this;
    }
}
