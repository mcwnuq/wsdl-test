<?php

declare(strict_types=1);

namespace App\ElektronicznyNadawca\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for przesylkaPoleconaKrajowaType StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class PrzesylkaPoleconaKrajowaType extends PrzesylkaRejestrowanaType
{
    /**
     * The kategoria
     * Meta information extracted from the WSDL
     * - use: required
     * @var string
     */
    public string $kategoria;
    /**
     * The epo
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \App\ElektronicznyNadawca\StructType\EPOType|null
     */
    public ?\App\ElektronicznyNadawca\StructType\EPOType $epo = null;
    /**
     * The potwierdzenieDoreczenia
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \App\ElektronicznyNadawca\StructType\PotwierdzenieDoreczeniaType|null
     */
    public ?\App\ElektronicznyNadawca\StructType\PotwierdzenieDoreczeniaType $potwierdzenieDoreczenia = null;
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
     * The zasadySpecjalne
     * Meta information extracted from the WSDL
     * - use: optional
     * @var string|null
     */
    public ?string $zasadySpecjalne = null;
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
     * The gabaryt
     * Meta information extracted from the WSDL
     * - documentation: Gabaryt przesyłki
     * - use: optional
     * @var string|null
     */
    public ?string $gabaryt = null;
    /**
     * The format
     * Meta information extracted from the WSDL
     * - documentation: Format przesyłki
     * - use: optional
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
     * - use: optional
     * @var int|null
     */
    public ?int $masa = null;
    /**
     * The egzemplarzBiblioteczny
     * @var bool|null
     */
    public ?bool $egzemplarzBiblioteczny = null;
    /**
     * The dlaOciemnialych
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
     * The numerPrzesylkiKlienta
     * @var string|null
     */
    public ?string $numerPrzesylkiKlienta = null;
    /**
     * Constructor method for przesylkaPoleconaKrajowaType
     * @uses PrzesylkaPoleconaKrajowaType::setKategoria()
     * @uses PrzesylkaPoleconaKrajowaType::setEpo()
     * @uses PrzesylkaPoleconaKrajowaType::setPotwierdzenieDoreczenia()
     * @uses PrzesylkaPoleconaKrajowaType::setIdLibraryForLegalDeposit()
     * @uses PrzesylkaPoleconaKrajowaType::setZasadySpecjalne()
     * @uses PrzesylkaPoleconaKrajowaType::setPosteRestante()
     * @uses PrzesylkaPoleconaKrajowaType::setIloscPotwierdzenOdbioru()
     * @uses PrzesylkaPoleconaKrajowaType::setGabaryt()
     * @uses PrzesylkaPoleconaKrajowaType::setFormat()
     * @uses PrzesylkaPoleconaKrajowaType::setMasa()
     * @uses PrzesylkaPoleconaKrajowaType::setEgzemplarzBiblioteczny()
     * @uses PrzesylkaPoleconaKrajowaType::setDlaOciemnialych()
     * @uses PrzesylkaPoleconaKrajowaType::setObszarMiasto()
     * @uses PrzesylkaPoleconaKrajowaType::setMiejscowa()
     * @uses PrzesylkaPoleconaKrajowaType::setNumerPrzesylkiKlienta()
     * @param string $kategoria
     * @param \App\ElektronicznyNadawca\StructType\EPOType $epo
     * @param \App\ElektronicznyNadawca\StructType\PotwierdzenieDoreczeniaType $potwierdzenieDoreczenia
     * @param string $idLibraryForLegalDeposit
     * @param string $zasadySpecjalne
     * @param bool $posteRestante
     * @param int $iloscPotwierdzenOdbioru
     * @param string $gabaryt
     * @param string $format
     * @param int $masa
     * @param bool $egzemplarzBiblioteczny
     * @param bool $dlaOciemnialych
     * @param bool $obszarMiasto
     * @param bool $miejscowa
     * @param string $numerPrzesylkiKlienta
     */
    public function __construct(string $kategoria, ?\App\ElektronicznyNadawca\StructType\EPOType $epo = null, ?\App\ElektronicznyNadawca\StructType\PotwierdzenieDoreczeniaType $potwierdzenieDoreczenia = null, ?string $idLibraryForLegalDeposit = null, ?string $zasadySpecjalne = null, ?bool $posteRestante = false, ?int $iloscPotwierdzenOdbioru = 0, ?string $gabaryt = null, ?string $format = null, ?int $masa = null, ?bool $egzemplarzBiblioteczny = null, ?bool $dlaOciemnialych = null, ?bool $obszarMiasto = null, ?bool $miejscowa = null, ?string $numerPrzesylkiKlienta = null)
    {
        $this
            ->setKategoria($kategoria)
            ->setEpo($epo)
            ->setPotwierdzenieDoreczenia($potwierdzenieDoreczenia)
            ->setIdLibraryForLegalDeposit($idLibraryForLegalDeposit)
            ->setZasadySpecjalne($zasadySpecjalne)
            ->setPosteRestante($posteRestante)
            ->setIloscPotwierdzenOdbioru($iloscPotwierdzenOdbioru)
            ->setGabaryt($gabaryt)
            ->setFormat($format)
            ->setMasa($masa)
            ->setEgzemplarzBiblioteczny($egzemplarzBiblioteczny)
            ->setDlaOciemnialych($dlaOciemnialych)
            ->setObszarMiasto($obszarMiasto)
            ->setMiejscowa($miejscowa)
            ->setNumerPrzesylkiKlienta($numerPrzesylkiKlienta);
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
     * @return \App\ElektronicznyNadawca\StructType\PrzesylkaPoleconaKrajowaType
     */
    public function setKategoria(string $kategoria): self
    {
        $this->kategoria = $kategoria;
        
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
     * @return \App\ElektronicznyNadawca\StructType\PrzesylkaPoleconaKrajowaType
     */
    public function setEpo(?\App\ElektronicznyNadawca\StructType\EPOType $epo = null): self
    {
        $this->epo = $epo;
        
        return $this;
    }
    /**
     * Get potwierdzenieDoreczenia value
     * @return \App\ElektronicznyNadawca\StructType\PotwierdzenieDoreczeniaType|null
     */
    public function getPotwierdzenieDoreczenia(): ?\App\ElektronicznyNadawca\StructType\PotwierdzenieDoreczeniaType
    {
        return $this->potwierdzenieDoreczenia;
    }
    /**
     * Set potwierdzenieDoreczenia value
     * @param \App\ElektronicznyNadawca\StructType\PotwierdzenieDoreczeniaType $potwierdzenieDoreczenia
     * @return \App\ElektronicznyNadawca\StructType\PrzesylkaPoleconaKrajowaType
     */
    public function setPotwierdzenieDoreczenia(?\App\ElektronicznyNadawca\StructType\PotwierdzenieDoreczeniaType $potwierdzenieDoreczenia = null): self
    {
        $this->potwierdzenieDoreczenia = $potwierdzenieDoreczenia;
        
        return $this;
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
     * @return \App\ElektronicznyNadawca\StructType\PrzesylkaPoleconaKrajowaType
     */
    public function setIdLibraryForLegalDeposit(?string $idLibraryForLegalDeposit = null): self
    {
        $this->idLibraryForLegalDeposit = $idLibraryForLegalDeposit;
        
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
     * @return \App\ElektronicznyNadawca\StructType\PrzesylkaPoleconaKrajowaType
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
     * @return \App\ElektronicznyNadawca\StructType\PrzesylkaPoleconaKrajowaType
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
     * @return \App\ElektronicznyNadawca\StructType\PrzesylkaPoleconaKrajowaType
     */
    public function setIloscPotwierdzenOdbioru(?int $iloscPotwierdzenOdbioru = 0): self
    {
        $this->iloscPotwierdzenOdbioru = $iloscPotwierdzenOdbioru;
        
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
     * @return \App\ElektronicznyNadawca\StructType\PrzesylkaPoleconaKrajowaType
     */
    public function setGabaryt(?string $gabaryt = null): self
    {
        $this->gabaryt = $gabaryt;
        
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
     * @return \App\ElektronicznyNadawca\StructType\PrzesylkaPoleconaKrajowaType
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
     * @return \App\ElektronicznyNadawca\StructType\PrzesylkaPoleconaKrajowaType
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
     * @return \App\ElektronicznyNadawca\StructType\PrzesylkaPoleconaKrajowaType
     */
    public function setEgzemplarzBiblioteczny(?bool $egzemplarzBiblioteczny = null): self
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
     * @return \App\ElektronicznyNadawca\StructType\PrzesylkaPoleconaKrajowaType
     */
    public function setDlaOciemnialych(?bool $dlaOciemnialych = null): self
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
     * @return \App\ElektronicznyNadawca\StructType\PrzesylkaPoleconaKrajowaType
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
     * @return \App\ElektronicznyNadawca\StructType\PrzesylkaPoleconaKrajowaType
     */
    public function setMiejscowa(?bool $miejscowa = null): self
    {
        $this->miejscowa = $miejscowa;
        
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
     * @return \App\ElektronicznyNadawca\StructType\PrzesylkaPoleconaKrajowaType
     */
    public function setNumerPrzesylkiKlienta(?string $numerPrzesylkiKlienta = null): self
    {
        $this->numerPrzesylkiKlienta = $numerPrzesylkiKlienta;
        
        return $this;
    }
}
