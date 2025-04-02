<?php

declare(strict_types=1);

namespace App\ElektronicznyNadawca\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for reklamowanaPrzesylkaType StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class ReklamowanaPrzesylkaType extends AbstractStructBase
{
    /**
     * The przesylka
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \App\ElektronicznyNadawca\StructType\PrzesylkaType
     */
    public \App\ElektronicznyNadawca\StructType\PrzesylkaType $przesylka;
    /**
     * The powodReklamacji
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \App\ElektronicznyNadawca\StructType\PowodReklamacjiType
     */
    public \App\ElektronicznyNadawca\StructType\PowodReklamacjiType $powodReklamacji;
    /**
     * The dataNadania
     * Meta information extracted from the WSDL
     * - use: required
     * @var string
     */
    public string $dataNadania;
    /**
     * The nrb
     * Meta information extracted from the WSDL
     * - base: xsd:string
     * - maxLength: 26
     * - maxOccurs: 1
     * - minLength: 0
     * - minOccurs: 0
     * @var string|null
     */
    public ?string $nrb = null;
    /**
     * The numerFaktury
     * Meta information extracted from the WSDL
     * - base: xsd:string
     * - maxLength: 100
     * - maxOccurs: 1
     * - minLength: 0
     * - minOccurs: 0
     * @var string|null
     */
    public ?string $numerFaktury = null;
    /**
     * The ezgoda
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool|null
     */
    public ?bool $ezgoda = null;
    /**
     * The urzadNadania
     * Meta information extracted from the WSDL
     * - base: xsd:int
     * @var int|null
     */
    public ?int $urzadNadania = null;
    /**
     * The powodReklamacjiOpis
     * Meta information extracted from the WSDL
     * - use: optional
     * @var string|null
     */
    public ?string $powodReklamacjiOpis = null;
    /**
     * The odszkodowanie
     * @var int|null
     */
    public ?int $odszkodowanie = null;
    /**
     * The oplata
     * @var int|null
     */
    public ?int $oplata = null;
    /**
     * The oczekiwaneOdszkodowanie
     * @var int|null
     */
    public ?int $oczekiwaneOdszkodowanie = null;
    /**
     * Constructor method for reklamowanaPrzesylkaType
     * @uses ReklamowanaPrzesylkaType::setPrzesylka()
     * @uses ReklamowanaPrzesylkaType::setPowodReklamacji()
     * @uses ReklamowanaPrzesylkaType::setDataNadania()
     * @uses ReklamowanaPrzesylkaType::setNrb()
     * @uses ReklamowanaPrzesylkaType::setNumerFaktury()
     * @uses ReklamowanaPrzesylkaType::setEzgoda()
     * @uses ReklamowanaPrzesylkaType::setUrzadNadania()
     * @uses ReklamowanaPrzesylkaType::setPowodReklamacjiOpis()
     * @uses ReklamowanaPrzesylkaType::setOdszkodowanie()
     * @uses ReklamowanaPrzesylkaType::setOplata()
     * @uses ReklamowanaPrzesylkaType::setOczekiwaneOdszkodowanie()
     * @param \App\ElektronicznyNadawca\StructType\PrzesylkaType $przesylka
     * @param \App\ElektronicznyNadawca\StructType\PowodReklamacjiType $powodReklamacji
     * @param string $dataNadania
     * @param string $nrb
     * @param string $numerFaktury
     * @param bool $ezgoda
     * @param int $urzadNadania
     * @param string $powodReklamacjiOpis
     * @param int $odszkodowanie
     * @param int $oplata
     * @param int $oczekiwaneOdszkodowanie
     */
    public function __construct(\App\ElektronicznyNadawca\StructType\PrzesylkaType $przesylka, \App\ElektronicznyNadawca\StructType\PowodReklamacjiType $powodReklamacji, string $dataNadania, ?string $nrb = null, ?string $numerFaktury = null, ?bool $ezgoda = null, ?int $urzadNadania = null, ?string $powodReklamacjiOpis = null, ?int $odszkodowanie = null, ?int $oplata = null, ?int $oczekiwaneOdszkodowanie = null)
    {
        $this
            ->setPrzesylka($przesylka)
            ->setPowodReklamacji($powodReklamacji)
            ->setDataNadania($dataNadania)
            ->setNrb($nrb)
            ->setNumerFaktury($numerFaktury)
            ->setEzgoda($ezgoda)
            ->setUrzadNadania($urzadNadania)
            ->setPowodReklamacjiOpis($powodReklamacjiOpis)
            ->setOdszkodowanie($odszkodowanie)
            ->setOplata($oplata)
            ->setOczekiwaneOdszkodowanie($oczekiwaneOdszkodowanie);
    }
    /**
     * Get przesylka value
     * @return \App\ElektronicznyNadawca\StructType\PrzesylkaType
     */
    public function getPrzesylka(): \App\ElektronicznyNadawca\StructType\PrzesylkaType
    {
        return $this->przesylka;
    }
    /**
     * Set przesylka value
     * @param \App\ElektronicznyNadawca\StructType\PrzesylkaType $przesylka
     * @return \App\ElektronicznyNadawca\StructType\ReklamowanaPrzesylkaType
     */
    public function setPrzesylka(\App\ElektronicznyNadawca\StructType\PrzesylkaType $przesylka): self
    {
        $this->przesylka = $przesylka;
        
        return $this;
    }
    /**
     * Get powodReklamacji value
     * @return \App\ElektronicznyNadawca\StructType\PowodReklamacjiType
     */
    public function getPowodReklamacji(): \App\ElektronicznyNadawca\StructType\PowodReklamacjiType
    {
        return $this->powodReklamacji;
    }
    /**
     * Set powodReklamacji value
     * @param \App\ElektronicznyNadawca\StructType\PowodReklamacjiType $powodReklamacji
     * @return \App\ElektronicznyNadawca\StructType\ReklamowanaPrzesylkaType
     */
    public function setPowodReklamacji(\App\ElektronicznyNadawca\StructType\PowodReklamacjiType $powodReklamacji): self
    {
        $this->powodReklamacji = $powodReklamacji;
        
        return $this;
    }
    /**
     * Get dataNadania value
     * @return string
     */
    public function getDataNadania(): string
    {
        return $this->dataNadania;
    }
    /**
     * Set dataNadania value
     * @param string $dataNadania
     * @return \App\ElektronicznyNadawca\StructType\ReklamowanaPrzesylkaType
     */
    public function setDataNadania(string $dataNadania): self
    {
        $this->dataNadania = $dataNadania;
        
        return $this;
    }
    /**
     * Get nrb value
     * @return string|null
     */
    public function getNrb(): ?string
    {
        return $this->nrb;
    }
    /**
     * Set nrb value
     * @param string $nrb
     * @return \App\ElektronicznyNadawca\StructType\ReklamowanaPrzesylkaType
     */
    public function setNrb(?string $nrb = null): self
    {
        $this->nrb = $nrb;
        
        return $this;
    }
    /**
     * Get numerFaktury value
     * @return string|null
     */
    public function getNumerFaktury(): ?string
    {
        return $this->numerFaktury;
    }
    /**
     * Set numerFaktury value
     * @param string $numerFaktury
     * @return \App\ElektronicznyNadawca\StructType\ReklamowanaPrzesylkaType
     */
    public function setNumerFaktury(?string $numerFaktury = null): self
    {
        $this->numerFaktury = $numerFaktury;
        
        return $this;
    }
    /**
     * Get ezgoda value
     * @return bool|null
     */
    public function getEzgoda(): ?bool
    {
        return $this->ezgoda;
    }
    /**
     * Set ezgoda value
     * @param bool $ezgoda
     * @return \App\ElektronicznyNadawca\StructType\ReklamowanaPrzesylkaType
     */
    public function setEzgoda(?bool $ezgoda = null): self
    {
        $this->ezgoda = $ezgoda;
        
        return $this;
    }
    /**
     * Get urzadNadania value
     * @return int|null
     */
    public function getUrzadNadania(): ?int
    {
        return $this->urzadNadania;
    }
    /**
     * Set urzadNadania value
     * @param int $urzadNadania
     * @return \App\ElektronicznyNadawca\StructType\ReklamowanaPrzesylkaType
     */
    public function setUrzadNadania(?int $urzadNadania = null): self
    {
        $this->urzadNadania = $urzadNadania;
        
        return $this;
    }
    /**
     * Get powodReklamacjiOpis value
     * @return string|null
     */
    public function getPowodReklamacjiOpis(): ?string
    {
        return $this->powodReklamacjiOpis;
    }
    /**
     * Set powodReklamacjiOpis value
     * @param string $powodReklamacjiOpis
     * @return \App\ElektronicznyNadawca\StructType\ReklamowanaPrzesylkaType
     */
    public function setPowodReklamacjiOpis(?string $powodReklamacjiOpis = null): self
    {
        $this->powodReklamacjiOpis = $powodReklamacjiOpis;
        
        return $this;
    }
    /**
     * Get odszkodowanie value
     * @return int|null
     */
    public function getOdszkodowanie(): ?int
    {
        return $this->odszkodowanie;
    }
    /**
     * Set odszkodowanie value
     * @param int $odszkodowanie
     * @return \App\ElektronicznyNadawca\StructType\ReklamowanaPrzesylkaType
     */
    public function setOdszkodowanie(?int $odszkodowanie = null): self
    {
        $this->odszkodowanie = $odszkodowanie;
        
        return $this;
    }
    /**
     * Get oplata value
     * @return int|null
     */
    public function getOplata(): ?int
    {
        return $this->oplata;
    }
    /**
     * Set oplata value
     * @param int $oplata
     * @return \App\ElektronicznyNadawca\StructType\ReklamowanaPrzesylkaType
     */
    public function setOplata(?int $oplata = null): self
    {
        $this->oplata = $oplata;
        
        return $this;
    }
    /**
     * Get oczekiwaneOdszkodowanie value
     * @return int|null
     */
    public function getOczekiwaneOdszkodowanie(): ?int
    {
        return $this->oczekiwaneOdszkodowanie;
    }
    /**
     * Set oczekiwaneOdszkodowanie value
     * @param int $oczekiwaneOdszkodowanie
     * @return \App\ElektronicznyNadawca\StructType\ReklamowanaPrzesylkaType
     */
    public function setOczekiwaneOdszkodowanie(?int $oczekiwaneOdszkodowanie = null): self
    {
        $this->oczekiwaneOdszkodowanie = $oczekiwaneOdszkodowanie;
        
        return $this;
    }
}
