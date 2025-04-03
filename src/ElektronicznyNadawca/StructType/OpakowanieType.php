<?php

declare(strict_types=1);

namespace App\ElektronicznyNadawca\StructType;



/**
 * This class stands for opakowanieType StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class OpakowanieType
{
    /**
     * The opakowanieGuid
     * Meta information extracted from the WSDL
     * - base: xsd:string
     * - length: 32
     * - whiteSpace: collapse
     * @var string|null
     */
    public ?string $opakowanieGuid = null;
    /**
     * The typ
     * @var string|null
     */
    public ?string $typ = null;
    /**
     * The sygnatura
     * @var string|null
     */
    public ?string $sygnatura = null;
    /**
     * The ilosc
     * @var int|null
     */
    public ?int $ilosc = null;
    /**
     * The numerOpakowaniaZbiorczego
     * @var string|null
     */
    public ?string $numerOpakowaniaZbiorczego = null;
    /**
     * Constructor method for opakowanieType
     * @uses OpakowanieType::setOpakowanieGuid()
     * @uses OpakowanieType::setTyp()
     * @uses OpakowanieType::setSygnatura()
     * @uses OpakowanieType::setIlosc()
     * @uses OpakowanieType::setNumerOpakowaniaZbiorczego()
     * @param string $opakowanieGuid
     * @param string $typ
     * @param string $sygnatura
     * @param int $ilosc
     * @param string $numerOpakowaniaZbiorczego
     */
    public function __construct(?string $opakowanieGuid = null, ?string $typ = null, ?string $sygnatura = null, ?int $ilosc = null, ?string $numerOpakowaniaZbiorczego = null)
    {
        $this
            ->setOpakowanieGuid($opakowanieGuid)
            ->setTyp($typ)
            ->setSygnatura($sygnatura)
            ->setIlosc($ilosc)
            ->setNumerOpakowaniaZbiorczego($numerOpakowaniaZbiorczego);
    }
    /**
     * Get opakowanieGuid value
     * @return string|null
     */
    public function getOpakowanieGuid(): ?string
    {
        return $this->opakowanieGuid;
    }
    /**
     * Set opakowanieGuid value
     * @param string $opakowanieGuid
     * @return \App\ElektronicznyNadawca\StructType\OpakowanieType
     */
    public function setOpakowanieGuid(?string $opakowanieGuid = null): self
    {
        $this->opakowanieGuid = $opakowanieGuid;
        
        return $this;
    }
    /**
     * Get typ value
     * @return string|null
     */
    public function getTyp(): ?string
    {
        return $this->typ;
    }
    /**
     * Set typ value
     * @param string $typ
     * @return \App\ElektronicznyNadawca\StructType\OpakowanieType
     */
    public function setTyp(?string $typ = null): self
    {
        $this->typ = $typ;
        
        return $this;
    }
    /**
     * Get sygnatura value
     * @return string|null
     */
    public function getSygnatura(): ?string
    {
        return $this->sygnatura;
    }
    /**
     * Set sygnatura value
     * @param string $sygnatura
     * @return \App\ElektronicznyNadawca\StructType\OpakowanieType
     */
    public function setSygnatura(?string $sygnatura = null): self
    {
        $this->sygnatura = $sygnatura;
        
        return $this;
    }
    /**
     * Get ilosc value
     * @return int|null
     */
    public function getIlosc(): ?int
    {
        return $this->ilosc;
    }
    /**
     * Set ilosc value
     * @param int $ilosc
     * @return \App\ElektronicznyNadawca\StructType\OpakowanieType
     */
    public function setIlosc(?int $ilosc = null): self
    {
        $this->ilosc = $ilosc;
        
        return $this;
    }
    /**
     * Get numerOpakowaniaZbiorczego value
     * @return string|null
     */
    public function getNumerOpakowaniaZbiorczego(): ?string
    {
        return $this->numerOpakowaniaZbiorczego;
    }
    /**
     * Set numerOpakowaniaZbiorczego value
     * @param string $numerOpakowaniaZbiorczego
     * @return \App\ElektronicznyNadawca\StructType\OpakowanieType
     */
    public function setNumerOpakowaniaZbiorczego(?string $numerOpakowaniaZbiorczego = null): self
    {
        $this->numerOpakowaniaZbiorczego = $numerOpakowaniaZbiorczego;
        
        return $this;
    }
}
