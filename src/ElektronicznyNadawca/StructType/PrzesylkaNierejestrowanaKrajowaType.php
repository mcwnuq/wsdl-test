<?php

declare(strict_types=1);

namespace App\ElektronicznyNadawca\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for przesylkaNierejestrowanaKrajowaType StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class PrzesylkaNierejestrowanaKrajowaType extends PrzesylkaNieRejestrowanaType
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
     * The kategoria
     * @var string|null
     */
    public ?string $kategoria = null;
    /**
     * The format
     * Meta information extracted from the WSDL
     * - documentation: Format przesyłki
     * @var string|null
     */
    public ?string $format = null;
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
     * @var bool|null
     */
    public ?bool $egzemplarzBiblioteczny = null;
    /**
     * Constructor method for przesylkaNierejestrowanaKrajowaType
     * @uses PrzesylkaNierejestrowanaKrajowaType::setIdLibraryForLegalDeposit()
     * @uses PrzesylkaNierejestrowanaKrajowaType::setKategoria()
     * @uses PrzesylkaNierejestrowanaKrajowaType::setFormat()
     * @uses PrzesylkaNierejestrowanaKrajowaType::setMasa()
     * @uses PrzesylkaNierejestrowanaKrajowaType::setEgzemplarzBiblioteczny()
     * @param string $idLibraryForLegalDeposit
     * @param string $kategoria
     * @param string $format
     * @param int $masa
     * @param bool $egzemplarzBiblioteczny
     */
    public function __construct(?string $idLibraryForLegalDeposit = null, ?string $kategoria = null, ?string $format = null, ?int $masa = null, ?bool $egzemplarzBiblioteczny = null)
    {
        $this
            ->setIdLibraryForLegalDeposit($idLibraryForLegalDeposit)
            ->setKategoria($kategoria)
            ->setFormat($format)
            ->setMasa($masa)
            ->setEgzemplarzBiblioteczny($egzemplarzBiblioteczny);
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
     * @return \App\ElektronicznyNadawca\StructType\PrzesylkaNierejestrowanaKrajowaType
     */
    public function setIdLibraryForLegalDeposit(?string $idLibraryForLegalDeposit = null): self
    {
        $this->idLibraryForLegalDeposit = $idLibraryForLegalDeposit;
        
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
     * @return \App\ElektronicznyNadawca\StructType\PrzesylkaNierejestrowanaKrajowaType
     */
    public function setKategoria(?string $kategoria = null): self
    {
        $this->kategoria = $kategoria;
        
        return $this;
    }
    /**
     * Get format value
     * @return string|null
     */
    public function getFormat(): ?string
    {
        return $this->format;
    }
    /**
     * Set format value
     * @param string $format
     * @return \App\ElektronicznyNadawca\StructType\PrzesylkaNierejestrowanaKrajowaType
     */
    public function setFormat(?string $format = null): self
    {
        $this->format = $format;
        
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
     * @return \App\ElektronicznyNadawca\StructType\PrzesylkaNierejestrowanaKrajowaType
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
     * @return \App\ElektronicznyNadawca\StructType\PrzesylkaNierejestrowanaKrajowaType
     */
    public function setEgzemplarzBiblioteczny(?bool $egzemplarzBiblioteczny = null): self
    {
        $this->egzemplarzBiblioteczny = $egzemplarzBiblioteczny;
        
        return $this;
    }
}
