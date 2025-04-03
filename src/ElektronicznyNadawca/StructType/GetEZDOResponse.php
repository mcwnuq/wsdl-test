<?php

declare(strict_types=1);

namespace App\ElektronicznyNadawca\StructType;



/**
 * This class stands for getEZDOResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetEZDOResponse
{
    /**
     * The adres
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \App\ElektronicznyNadawca\StructType\AdresType
     */
    public \App\ElektronicznyNadawca\StructType\AdresType $adres;
    /**
     * The przesylka
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 1
     * @var \App\ElektronicznyNadawca\StructType\EZDOPrzesylkaType[]
     */
    public array $przesylka;
    /**
     * The error
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \App\ElektronicznyNadawca\StructType\ErrorType[]
     */
    public ?array $error = null;
    /**
     * The numerKD
     * @var string|null
     */
    public ?string $numerKD = null;
    /**
     * The numerEZDO
     * @var string|null
     */
    public ?string $numerEZDO = null;
    /**
     * Constructor method for getEZDOResponse
     * @uses GetEZDOResponse::setAdres()
     * @uses GetEZDOResponse::setPrzesylka()
     * @uses GetEZDOResponse::setError()
     * @uses GetEZDOResponse::setNumerKD()
     * @uses GetEZDOResponse::setNumerEZDO()
     * @param \App\ElektronicznyNadawca\StructType\AdresType $adres
     * @param \App\ElektronicznyNadawca\StructType\EZDOPrzesylkaType[] $przesylka
     * @param \App\ElektronicznyNadawca\StructType\ErrorType[] $error
     * @param string $numerKD
     * @param string $numerEZDO
     */
    public function __construct(\App\ElektronicznyNadawca\StructType\AdresType $adres, array $przesylka, ?array $error = null, ?string $numerKD = null, ?string $numerEZDO = null)
    {
        $this
            ->setAdres($adres)
            ->setPrzesylka($przesylka)
            ->setError($error)
            ->setNumerKD($numerKD)
            ->setNumerEZDO($numerEZDO);
    }
    /**
     * Get adres value
     * @return \App\ElektronicznyNadawca\StructType\AdresType
     */
    public function getAdres(): \App\ElektronicznyNadawca\StructType\AdresType
    {
        return $this->adres;
    }
    /**
     * Set adres value
     * @param \App\ElektronicznyNadawca\StructType\AdresType $adres
     * @return \App\ElektronicznyNadawca\StructType\GetEZDOResponse
     */
    public function setAdres(\App\ElektronicznyNadawca\StructType\AdresType $adres): self
    {
        $this->adres = $adres;
        
        return $this;
    }
    /**
     * Get przesylka value
     * @return \App\ElektronicznyNadawca\StructType\EZDOPrzesylkaType[]
     */
    public function getPrzesylka(): array
    {
        return $this->przesylka;
    }
    /**
     * Set przesylka value
     * @param \App\ElektronicznyNadawca\StructType\EZDOPrzesylkaType[] $przesylka
     * @return \App\ElektronicznyNadawca\StructType\GetEZDOResponse
     */
    public function setPrzesylka(array $przesylka): self
    {
        $this->przesylka = $przesylka;
        
        return $this;
    }
    /**
     * Add item to przesylka value
     * @throws InvalidArgumentException
     * @param \App\ElektronicznyNadawca\StructType\EZDOPrzesylkaType $item
     * @return \App\ElektronicznyNadawca\StructType\GetEZDOResponse
     */
    public function addToPrzesylka(\App\ElektronicznyNadawca\StructType\EZDOPrzesylkaType $item): self
    {
        $this->przesylka[] = $item;
        
        return $this;
    }
    /**
     * Get error value
     * @return \App\ElektronicznyNadawca\StructType\ErrorType[]
     */
    public function getError(): ?array
    {
        return $this->error;
    }
    /**
     * Set error value
     * @param \App\ElektronicznyNadawca\StructType\ErrorType[] $error
     * @return \App\ElektronicznyNadawca\StructType\GetEZDOResponse
     */
    public function setError(?array $error = null): self
    {
        $this->error = $error;
        
        return $this;
    }
    /**
     * Add item to error value
     * @throws InvalidArgumentException
     * @param \App\ElektronicznyNadawca\StructType\ErrorType $item
     * @return \App\ElektronicznyNadawca\StructType\GetEZDOResponse
     */
    public function addToError(\App\ElektronicznyNadawca\StructType\ErrorType $item): self
    {
        $this->error[] = $item;
        
        return $this;
    }
    /**
     * Get numerKD value
     * @return string|null
     */
    public function getNumerKD(): ?string
    {
        return $this->numerKD;
    }
    /**
     * Set numerKD value
     * @param string $numerKD
     * @return \App\ElektronicznyNadawca\StructType\GetEZDOResponse
     */
    public function setNumerKD(?string $numerKD = null): self
    {
        $this->numerKD = $numerKD;
        
        return $this;
    }
    /**
     * Get numerEZDO value
     * @return string|null
     */
    public function getNumerEZDO(): ?string
    {
        return $this->numerEZDO;
    }
    /**
     * Set numerEZDO value
     * @param string $numerEZDO
     * @return \App\ElektronicznyNadawca\StructType\GetEZDOResponse
     */
    public function setNumerEZDO(?string $numerEZDO = null): self
    {
        $this->numerEZDO = $numerEZDO;
        
        return $this;
    }
}
