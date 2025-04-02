<?php

declare(strict_types=1);

namespace App\ElektronicznyNadawca\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for paczkaZagranicznaPremiumType StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class PaczkaZagranicznaPremiumType extends PrzesylkaRejestrowanaType
{
    /**
     * The zwrot
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \App\ElektronicznyNadawca\StructType\ZwrotType|null
     */
    public ?\App\ElektronicznyNadawca\StructType\ZwrotType $zwrot = null;
    /**
     * The posteRestante
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool|null
     */
    public ?bool $posteRestante = null;
    /**
     * The masa
     * Meta information extracted from the WSDL
     * - documentation: masa przesyłki podana w gramach
     * - base: xsd:int
     * - maxInclusive: 9999999
     * - maxOccurs: 1
     * - minInclusive: 1
     * - minOccurs: 0
     * @var int|null
     */
    public ?int $masa = null;
    /**
     * The deklaracjaCelna2
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \App\ElektronicznyNadawca\StructType\DeklaracjaCelna2Type|null
     */
    public ?\App\ElektronicznyNadawca\StructType\DeklaracjaCelna2Type $deklaracjaCelna2 = null;
    /**
     * The sposobNadaniaInterconnect
     * Meta information extracted from the WSDL
     * - documentation: Umożliwia określenie sposobu nadania przesyłki w ramach systemu Interconnect. Obsługiwane wartości: - ODBIOR_Z_ADRESU_PRYWATNEGO - ODBIOR_Z_ADRESU_FIRMOWEGO - NADANIE_W_PLACOWCE_POCZTOWEJ
     * - base: xsd:string
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    public ?string $sposobNadaniaInterconnect = null;
    /**
     * The potwierdzenieDoreczenia
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \App\ElektronicznyNadawca\StructType\PotwierdzenieDoreczeniaType|null
     */
    public ?\App\ElektronicznyNadawca\StructType\PotwierdzenieDoreczeniaType $potwierdzenieDoreczenia = null;
    /**
     * The ubezpieczenie
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \App\ElektronicznyNadawca\StructType\UbezpieczenieType|null
     */
    public ?\App\ElektronicznyNadawca\StructType\UbezpieczenieType $ubezpieczenie = null;
    /**
     * The numerPrzesylkiKlienta
     * Meta information extracted from the WSDL
     * - base: xsd:string
     * - maxLength: 25
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    public ?string $numerPrzesylkiKlienta = null;
    /**
     * The sposobDoreczenia
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \App\ElektronicznyNadawca\StructType\SposobDoreczeniaType|null
     */
    public ?\App\ElektronicznyNadawca\StructType\SposobDoreczeniaType $sposobDoreczenia = null;
    /**
     * Constructor method for paczkaZagranicznaPremiumType
     * @uses PaczkaZagranicznaPremiumType::setZwrot()
     * @uses PaczkaZagranicznaPremiumType::setPosteRestante()
     * @uses PaczkaZagranicznaPremiumType::setMasa()
     * @uses PaczkaZagranicznaPremiumType::setDeklaracjaCelna2()
     * @uses PaczkaZagranicznaPremiumType::setSposobNadaniaInterconnect()
     * @uses PaczkaZagranicznaPremiumType::setPotwierdzenieDoreczenia()
     * @uses PaczkaZagranicznaPremiumType::setUbezpieczenie()
     * @uses PaczkaZagranicznaPremiumType::setNumerPrzesylkiKlienta()
     * @uses PaczkaZagranicznaPremiumType::setSposobDoreczenia()
     * @param \App\ElektronicznyNadawca\StructType\ZwrotType $zwrot
     * @param bool $posteRestante
     * @param int $masa
     * @param \App\ElektronicznyNadawca\StructType\DeklaracjaCelna2Type $deklaracjaCelna2
     * @param string $sposobNadaniaInterconnect
     * @param \App\ElektronicznyNadawca\StructType\PotwierdzenieDoreczeniaType $potwierdzenieDoreczenia
     * @param \App\ElektronicznyNadawca\StructType\UbezpieczenieType $ubezpieczenie
     * @param string $numerPrzesylkiKlienta
     * @param \App\ElektronicznyNadawca\StructType\SposobDoreczeniaType $sposobDoreczenia
     */
    public function __construct(?\App\ElektronicznyNadawca\StructType\ZwrotType $zwrot = null, ?bool $posteRestante = null, ?int $masa = null, ?\App\ElektronicznyNadawca\StructType\DeklaracjaCelna2Type $deklaracjaCelna2 = null, ?string $sposobNadaniaInterconnect = null, ?\App\ElektronicznyNadawca\StructType\PotwierdzenieDoreczeniaType $potwierdzenieDoreczenia = null, ?\App\ElektronicznyNadawca\StructType\UbezpieczenieType $ubezpieczenie = null, ?string $numerPrzesylkiKlienta = null, ?\App\ElektronicznyNadawca\StructType\SposobDoreczeniaType $sposobDoreczenia = null)
    {
        $this
            ->setZwrot($zwrot)
            ->setPosteRestante($posteRestante)
            ->setMasa($masa)
            ->setDeklaracjaCelna2($deklaracjaCelna2)
            ->setSposobNadaniaInterconnect($sposobNadaniaInterconnect)
            ->setPotwierdzenieDoreczenia($potwierdzenieDoreczenia)
            ->setUbezpieczenie($ubezpieczenie)
            ->setNumerPrzesylkiKlienta($numerPrzesylkiKlienta)
            ->setSposobDoreczenia($sposobDoreczenia);
    }
    /**
     * Get zwrot value
     * @return \App\ElektronicznyNadawca\StructType\ZwrotType|null
     */
    public function getZwrot(): ?\App\ElektronicznyNadawca\StructType\ZwrotType
    {
        return $this->zwrot;
    }
    /**
     * Set zwrot value
     * @param \App\ElektronicznyNadawca\StructType\ZwrotType $zwrot
     * @return \App\ElektronicznyNadawca\StructType\PaczkaZagranicznaPremiumType
     */
    public function setZwrot(?\App\ElektronicznyNadawca\StructType\ZwrotType $zwrot = null): self
    {
        $this->zwrot = $zwrot;
        
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
     * @return \App\ElektronicznyNadawca\StructType\PaczkaZagranicznaPremiumType
     */
    public function setPosteRestante(?bool $posteRestante = null): self
    {
        $this->posteRestante = $posteRestante;
        
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
     * @return \App\ElektronicznyNadawca\StructType\PaczkaZagranicznaPremiumType
     */
    public function setMasa(?int $masa = null): self
    {
        $this->masa = $masa;
        
        return $this;
    }
    /**
     * Get deklaracjaCelna2 value
     * @return \App\ElektronicznyNadawca\StructType\DeklaracjaCelna2Type|null
     */
    public function getDeklaracjaCelna2(): ?\App\ElektronicznyNadawca\StructType\DeklaracjaCelna2Type
    {
        return $this->deklaracjaCelna2;
    }
    /**
     * Set deklaracjaCelna2 value
     * @param \App\ElektronicznyNadawca\StructType\DeklaracjaCelna2Type $deklaracjaCelna2
     * @return \App\ElektronicznyNadawca\StructType\PaczkaZagranicznaPremiumType
     */
    public function setDeklaracjaCelna2(?\App\ElektronicznyNadawca\StructType\DeklaracjaCelna2Type $deklaracjaCelna2 = null): self
    {
        $this->deklaracjaCelna2 = $deklaracjaCelna2;
        
        return $this;
    }
    /**
     * Get sposobNadaniaInterconnect value
     * @return string|null
     */
    public function getSposobNadaniaInterconnect(): ?string
    {
        return $this->sposobNadaniaInterconnect;
    }
    /**
     * Set sposobNadaniaInterconnect value
     * @param string $sposobNadaniaInterconnect
     * @return \App\ElektronicznyNadawca\StructType\PaczkaZagranicznaPremiumType
     */
    public function setSposobNadaniaInterconnect(?string $sposobNadaniaInterconnect = null): self
    {
        $this->sposobNadaniaInterconnect = $sposobNadaniaInterconnect;
        
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
     * @return \App\ElektronicznyNadawca\StructType\PaczkaZagranicznaPremiumType
     */
    public function setPotwierdzenieDoreczenia(?\App\ElektronicznyNadawca\StructType\PotwierdzenieDoreczeniaType $potwierdzenieDoreczenia = null): self
    {
        $this->potwierdzenieDoreczenia = $potwierdzenieDoreczenia;
        
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
     * @return \App\ElektronicznyNadawca\StructType\PaczkaZagranicznaPremiumType
     */
    public function setUbezpieczenie(?\App\ElektronicznyNadawca\StructType\UbezpieczenieType $ubezpieczenie = null): self
    {
        $this->ubezpieczenie = $ubezpieczenie;
        
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
     * @return \App\ElektronicznyNadawca\StructType\PaczkaZagranicznaPremiumType
     */
    public function setNumerPrzesylkiKlienta(?string $numerPrzesylkiKlienta = null): self
    {
        $this->numerPrzesylkiKlienta = $numerPrzesylkiKlienta;
        
        return $this;
    }
    /**
     * Get sposobDoreczenia value
     * @return \App\ElektronicznyNadawca\StructType\SposobDoreczeniaType|null
     */
    public function getSposobDoreczenia(): ?\App\ElektronicznyNadawca\StructType\SposobDoreczeniaType
    {
        return $this->sposobDoreczenia;
    }
    /**
     * Set sposobDoreczenia value
     * @param \App\ElektronicznyNadawca\StructType\SposobDoreczeniaType $sposobDoreczenia
     * @return \App\ElektronicznyNadawca\StructType\PaczkaZagranicznaPremiumType
     */
    public function setSposobDoreczenia(?\App\ElektronicznyNadawca\StructType\SposobDoreczeniaType $sposobDoreczenia = null): self
    {
        $this->sposobDoreczenia = $sposobDoreczenia;
        
        return $this;
    }
}
