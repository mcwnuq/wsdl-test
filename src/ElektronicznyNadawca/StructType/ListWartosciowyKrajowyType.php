<?php

declare(strict_types=1);

namespace App\ElektronicznyNadawca\StructType;



/**
 * This class stands for listWartosciowyKrajowyType StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class ListWartosciowyKrajowyType extends PrzesylkaRejestrowanaType
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
     * The iloscPotwierdzenOdbioru
     * Meta information extracted from the WSDL
     * - base: xsd:int
     * - maxInclusive: 9
     * - minInclusive: 0
     * @var int|null
     */
    public ?int $iloscPotwierdzenOdbioru = null;
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
     * The numerWewnetrznyPrzesylki
     * @var string|null
     */
    public ?string $numerWewnetrznyPrzesylki = null;
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
     * Constructor method for listWartosciowyKrajowyType
     * @uses ListWartosciowyKrajowyType::setIdLibraryForLegalDeposit()
     * @uses ListWartosciowyKrajowyType::setPosteRestante()
     * @uses ListWartosciowyKrajowyType::setWartosc()
     * @uses ListWartosciowyKrajowyType::setIloscPotwierdzenOdbioru()
     * @uses ListWartosciowyKrajowyType::setKategoria()
     * @uses ListWartosciowyKrajowyType::setFormat()
     * @uses ListWartosciowyKrajowyType::setMasa()
     * @uses ListWartosciowyKrajowyType::setNumerWewnetrznyPrzesylki()
     * @uses ListWartosciowyKrajowyType::setEgzemplarzBiblioteczny()
     * @uses ListWartosciowyKrajowyType::setDlaOciemnialych()
     * @param string $idLibraryForLegalDeposit
     * @param bool $posteRestante
     * @param int $wartosc
     * @param int $iloscPotwierdzenOdbioru
     * @param string $kategoria
     * @param string $format
     * @param int $masa
     * @param string $numerWewnetrznyPrzesylki
     * @param bool $egzemplarzBiblioteczny
     * @param bool $dlaOciemnialych
     */
    public function __construct(?string $idLibraryForLegalDeposit = null, ?bool $posteRestante = null, ?int $wartosc = null, ?int $iloscPotwierdzenOdbioru = null, ?string $kategoria = null, ?string $format = null, ?int $masa = null, ?string $numerWewnetrznyPrzesylki = null, ?bool $egzemplarzBiblioteczny = null, ?bool $dlaOciemnialych = null)
    {
        $this
            ->setIdLibraryForLegalDeposit($idLibraryForLegalDeposit)
            ->setPosteRestante($posteRestante)
            ->setWartosc($wartosc)
            ->setIloscPotwierdzenOdbioru($iloscPotwierdzenOdbioru)
            ->setKategoria($kategoria)
            ->setFormat($format)
            ->setMasa($masa)
            ->setNumerWewnetrznyPrzesylki($numerWewnetrznyPrzesylki)
            ->setEgzemplarzBiblioteczny($egzemplarzBiblioteczny)
            ->setDlaOciemnialych($dlaOciemnialych);
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
     * @return \App\ElektronicznyNadawca\StructType\ListWartosciowyKrajowyType
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
     * @return \App\ElektronicznyNadawca\StructType\ListWartosciowyKrajowyType
     */
    public function setPosteRestante(?bool $posteRestante = null): self
    {
        $this->posteRestante = $posteRestante;
        
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
     * @return \App\ElektronicznyNadawca\StructType\ListWartosciowyKrajowyType
     */
    public function setWartosc(?int $wartosc = null): self
    {
        $this->wartosc = $wartosc;
        
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
     * @return \App\ElektronicznyNadawca\StructType\ListWartosciowyKrajowyType
     */
    public function setIloscPotwierdzenOdbioru(?int $iloscPotwierdzenOdbioru = null): self
    {
        $this->iloscPotwierdzenOdbioru = $iloscPotwierdzenOdbioru;
        
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
     * @return \App\ElektronicznyNadawca\StructType\ListWartosciowyKrajowyType
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
     * @return \App\ElektronicznyNadawca\StructType\ListWartosciowyKrajowyType
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
     * @return \App\ElektronicznyNadawca\StructType\ListWartosciowyKrajowyType
     */
    public function setMasa(?int $masa = null): self
    {
        $this->masa = $masa;
        
        return $this;
    }
    /**
     * Get numerWewnetrznyPrzesylki value
     * @return string|null
     */
    public function getNumerWewnetrznyPrzesylki(): ?string
    {
        return $this->numerWewnetrznyPrzesylki;
    }
    /**
     * Set numerWewnetrznyPrzesylki value
     * @param string $numerWewnetrznyPrzesylki
     * @return \App\ElektronicznyNadawca\StructType\ListWartosciowyKrajowyType
     */
    public function setNumerWewnetrznyPrzesylki(?string $numerWewnetrznyPrzesylki = null): self
    {
        $this->numerWewnetrznyPrzesylki = $numerWewnetrznyPrzesylki;
        
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
     * @return \App\ElektronicznyNadawca\StructType\ListWartosciowyKrajowyType
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
     * @return \App\ElektronicznyNadawca\StructType\ListWartosciowyKrajowyType
     */
    public function setDlaOciemnialych(?bool $dlaOciemnialych = null): self
    {
        $this->dlaOciemnialych = $dlaOciemnialych;
        
        return $this;
    }
}
