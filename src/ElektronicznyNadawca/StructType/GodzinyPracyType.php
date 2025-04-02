<?php

declare(strict_types=1);

namespace App\ElektronicznyNadawca\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for godzinyPracyType StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GodzinyPracyType extends AbstractStructBase
{
    /**
     * The poniedzialek
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \App\ElektronicznyNadawca\StructType\GodzinyPracyOdDoType[]
     */
    public ?array $poniedzialek = null;
    /**
     * The wtorek
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \App\ElektronicznyNadawca\StructType\GodzinyPracyOdDoType[]
     */
    public ?array $wtorek = null;
    /**
     * The sroda
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \App\ElektronicznyNadawca\StructType\GodzinyPracyOdDoType[]
     */
    public ?array $sroda = null;
    /**
     * The czwartek
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \App\ElektronicznyNadawca\StructType\GodzinyPracyOdDoType[]
     */
    public ?array $czwartek = null;
    /**
     * The piatek
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \App\ElektronicznyNadawca\StructType\GodzinyPracyOdDoType[]
     */
    public ?array $piatek = null;
    /**
     * The sobota
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \App\ElektronicznyNadawca\StructType\GodzinyPracyOdDoType[]
     */
    public ?array $sobota = null;
    /**
     * The niedziela
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \App\ElektronicznyNadawca\StructType\GodzinyPracyOdDoType[]
     */
    public ?array $niedziela = null;
    /**
     * The robocze
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \App\ElektronicznyNadawca\StructType\GodzinyPracyOdDoType[]
     */
    public ?array $robocze = null;
    /**
     * The swieta
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \App\ElektronicznyNadawca\StructType\GodzinyPracyOdDoType[]
     */
    public ?array $swieta = null;
    /**
     * Constructor method for godzinyPracyType
     * @uses GodzinyPracyType::setPoniedzialek()
     * @uses GodzinyPracyType::setWtorek()
     * @uses GodzinyPracyType::setSroda()
     * @uses GodzinyPracyType::setCzwartek()
     * @uses GodzinyPracyType::setPiatek()
     * @uses GodzinyPracyType::setSobota()
     * @uses GodzinyPracyType::setNiedziela()
     * @uses GodzinyPracyType::setRobocze()
     * @uses GodzinyPracyType::setSwieta()
     * @param \App\ElektronicznyNadawca\StructType\GodzinyPracyOdDoType[] $poniedzialek
     * @param \App\ElektronicznyNadawca\StructType\GodzinyPracyOdDoType[] $wtorek
     * @param \App\ElektronicznyNadawca\StructType\GodzinyPracyOdDoType[] $sroda
     * @param \App\ElektronicznyNadawca\StructType\GodzinyPracyOdDoType[] $czwartek
     * @param \App\ElektronicznyNadawca\StructType\GodzinyPracyOdDoType[] $piatek
     * @param \App\ElektronicznyNadawca\StructType\GodzinyPracyOdDoType[] $sobota
     * @param \App\ElektronicznyNadawca\StructType\GodzinyPracyOdDoType[] $niedziela
     * @param \App\ElektronicznyNadawca\StructType\GodzinyPracyOdDoType[] $robocze
     * @param \App\ElektronicznyNadawca\StructType\GodzinyPracyOdDoType[] $swieta
     */
    public function __construct(?array $poniedzialek = null, ?array $wtorek = null, ?array $sroda = null, ?array $czwartek = null, ?array $piatek = null, ?array $sobota = null, ?array $niedziela = null, ?array $robocze = null, ?array $swieta = null)
    {
        $this
            ->setPoniedzialek($poniedzialek)
            ->setWtorek($wtorek)
            ->setSroda($sroda)
            ->setCzwartek($czwartek)
            ->setPiatek($piatek)
            ->setSobota($sobota)
            ->setNiedziela($niedziela)
            ->setRobocze($robocze)
            ->setSwieta($swieta);
    }
    /**
     * Get poniedzialek value
     * @return \App\ElektronicznyNadawca\StructType\GodzinyPracyOdDoType[]
     */
    public function getPoniedzialek(): ?array
    {
        return $this->poniedzialek;
    }
    /**
     * Set poniedzialek value
     * @param \App\ElektronicznyNadawca\StructType\GodzinyPracyOdDoType[] $poniedzialek
     * @return \App\ElektronicznyNadawca\StructType\GodzinyPracyType
     */
    public function setPoniedzialek(?array $poniedzialek = null): self
    {
        $this->poniedzialek = $poniedzialek;
        
        return $this;
    }
    /**
     * Add item to poniedzialek value
     * @throws InvalidArgumentException
     * @param \App\ElektronicznyNadawca\StructType\GodzinyPracyOdDoType $item
     * @return \App\ElektronicznyNadawca\StructType\GodzinyPracyType
     */
    public function addToPoniedzialek(\App\ElektronicznyNadawca\StructType\GodzinyPracyOdDoType $item): self
    {
        $this->poniedzialek[] = $item;
        
        return $this;
    }
    /**
     * Get wtorek value
     * @return \App\ElektronicznyNadawca\StructType\GodzinyPracyOdDoType[]
     */
    public function getWtorek(): ?array
    {
        return $this->wtorek;
    }
    /**
     * Set wtorek value
     * @param \App\ElektronicznyNadawca\StructType\GodzinyPracyOdDoType[] $wtorek
     * @return \App\ElektronicznyNadawca\StructType\GodzinyPracyType
     */
    public function setWtorek(?array $wtorek = null): self
    {
        $this->wtorek = $wtorek;
        
        return $this;
    }
    /**
     * Add item to wtorek value
     * @throws InvalidArgumentException
     * @param \App\ElektronicznyNadawca\StructType\GodzinyPracyOdDoType $item
     * @return \App\ElektronicznyNadawca\StructType\GodzinyPracyType
     */
    public function addToWtorek(\App\ElektronicznyNadawca\StructType\GodzinyPracyOdDoType $item): self
    {
        $this->wtorek[] = $item;
        
        return $this;
    }
    /**
     * Get sroda value
     * @return \App\ElektronicznyNadawca\StructType\GodzinyPracyOdDoType[]
     */
    public function getSroda(): ?array
    {
        return $this->sroda;
    }
    /**
     * Set sroda value
     * @param \App\ElektronicznyNadawca\StructType\GodzinyPracyOdDoType[] $sroda
     * @return \App\ElektronicznyNadawca\StructType\GodzinyPracyType
     */
    public function setSroda(?array $sroda = null): self
    {
        $this->sroda = $sroda;
        
        return $this;
    }
    /**
     * Add item to sroda value
     * @throws InvalidArgumentException
     * @param \App\ElektronicznyNadawca\StructType\GodzinyPracyOdDoType $item
     * @return \App\ElektronicznyNadawca\StructType\GodzinyPracyType
     */
    public function addToSroda(\App\ElektronicznyNadawca\StructType\GodzinyPracyOdDoType $item): self
    {
        $this->sroda[] = $item;
        
        return $this;
    }
    /**
     * Get czwartek value
     * @return \App\ElektronicznyNadawca\StructType\GodzinyPracyOdDoType[]
     */
    public function getCzwartek(): ?array
    {
        return $this->czwartek;
    }
    /**
     * Set czwartek value
     * @param \App\ElektronicznyNadawca\StructType\GodzinyPracyOdDoType[] $czwartek
     * @return \App\ElektronicznyNadawca\StructType\GodzinyPracyType
     */
    public function setCzwartek(?array $czwartek = null): self
    {
        $this->czwartek = $czwartek;
        
        return $this;
    }
    /**
     * Add item to czwartek value
     * @throws InvalidArgumentException
     * @param \App\ElektronicznyNadawca\StructType\GodzinyPracyOdDoType $item
     * @return \App\ElektronicznyNadawca\StructType\GodzinyPracyType
     */
    public function addToCzwartek(\App\ElektronicznyNadawca\StructType\GodzinyPracyOdDoType $item): self
    {
        $this->czwartek[] = $item;
        
        return $this;
    }
    /**
     * Get piatek value
     * @return \App\ElektronicznyNadawca\StructType\GodzinyPracyOdDoType[]
     */
    public function getPiatek(): ?array
    {
        return $this->piatek;
    }
    /**
     * Set piatek value
     * @param \App\ElektronicznyNadawca\StructType\GodzinyPracyOdDoType[] $piatek
     * @return \App\ElektronicznyNadawca\StructType\GodzinyPracyType
     */
    public function setPiatek(?array $piatek = null): self
    {
        $this->piatek = $piatek;
        
        return $this;
    }
    /**
     * Add item to piatek value
     * @throws InvalidArgumentException
     * @param \App\ElektronicznyNadawca\StructType\GodzinyPracyOdDoType $item
     * @return \App\ElektronicznyNadawca\StructType\GodzinyPracyType
     */
    public function addToPiatek(\App\ElektronicznyNadawca\StructType\GodzinyPracyOdDoType $item): self
    {
        $this->piatek[] = $item;
        
        return $this;
    }
    /**
     * Get sobota value
     * @return \App\ElektronicznyNadawca\StructType\GodzinyPracyOdDoType[]
     */
    public function getSobota(): ?array
    {
        return $this->sobota;
    }
    /**
     * Set sobota value
     * @param \App\ElektronicznyNadawca\StructType\GodzinyPracyOdDoType[] $sobota
     * @return \App\ElektronicznyNadawca\StructType\GodzinyPracyType
     */
    public function setSobota(?array $sobota = null): self
    {
        $this->sobota = $sobota;
        
        return $this;
    }
    /**
     * Add item to sobota value
     * @throws InvalidArgumentException
     * @param \App\ElektronicznyNadawca\StructType\GodzinyPracyOdDoType $item
     * @return \App\ElektronicznyNadawca\StructType\GodzinyPracyType
     */
    public function addToSobota(\App\ElektronicznyNadawca\StructType\GodzinyPracyOdDoType $item): self
    {
        $this->sobota[] = $item;
        
        return $this;
    }
    /**
     * Get niedziela value
     * @return \App\ElektronicznyNadawca\StructType\GodzinyPracyOdDoType[]
     */
    public function getNiedziela(): ?array
    {
        return $this->niedziela;
    }
    /**
     * Set niedziela value
     * @param \App\ElektronicznyNadawca\StructType\GodzinyPracyOdDoType[] $niedziela
     * @return \App\ElektronicznyNadawca\StructType\GodzinyPracyType
     */
    public function setNiedziela(?array $niedziela = null): self
    {
        $this->niedziela = $niedziela;
        
        return $this;
    }
    /**
     * Add item to niedziela value
     * @throws InvalidArgumentException
     * @param \App\ElektronicznyNadawca\StructType\GodzinyPracyOdDoType $item
     * @return \App\ElektronicznyNadawca\StructType\GodzinyPracyType
     */
    public function addToNiedziela(\App\ElektronicznyNadawca\StructType\GodzinyPracyOdDoType $item): self
    {
        $this->niedziela[] = $item;
        
        return $this;
    }
    /**
     * Get robocze value
     * @return \App\ElektronicznyNadawca\StructType\GodzinyPracyOdDoType[]
     */
    public function getRobocze(): ?array
    {
        return $this->robocze;
    }
    /**
     * Set robocze value
     * @param \App\ElektronicznyNadawca\StructType\GodzinyPracyOdDoType[] $robocze
     * @return \App\ElektronicznyNadawca\StructType\GodzinyPracyType
     */
    public function setRobocze(?array $robocze = null): self
    {
        $this->robocze = $robocze;
        
        return $this;
    }
    /**
     * Add item to robocze value
     * @throws InvalidArgumentException
     * @param \App\ElektronicznyNadawca\StructType\GodzinyPracyOdDoType $item
     * @return \App\ElektronicznyNadawca\StructType\GodzinyPracyType
     */
    public function addToRobocze(\App\ElektronicznyNadawca\StructType\GodzinyPracyOdDoType $item): self
    {
        $this->robocze[] = $item;
        
        return $this;
    }
    /**
     * Get swieta value
     * @return \App\ElektronicznyNadawca\StructType\GodzinyPracyOdDoType[]
     */
    public function getSwieta(): ?array
    {
        return $this->swieta;
    }
    /**
     * Set swieta value
     * @param \App\ElektronicznyNadawca\StructType\GodzinyPracyOdDoType[] $swieta
     * @return \App\ElektronicznyNadawca\StructType\GodzinyPracyType
     */
    public function setSwieta(?array $swieta = null): self
    {
        $this->swieta = $swieta;
        
        return $this;
    }
    /**
     * Add item to swieta value
     * @throws InvalidArgumentException
     * @param \App\ElektronicznyNadawca\StructType\GodzinyPracyOdDoType $item
     * @return \App\ElektronicznyNadawca\StructType\GodzinyPracyType
     */
    public function addToSwieta(\App\ElektronicznyNadawca\StructType\GodzinyPracyOdDoType $item): self
    {
        $this->swieta[] = $item;
        
        return $this;
    }
}
