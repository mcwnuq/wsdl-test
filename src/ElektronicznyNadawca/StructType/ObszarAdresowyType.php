<?php

declare(strict_types=1);

namespace App\ElektronicznyNadawca\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for obszarAdresowyType StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class ObszarAdresowyType extends AbstractStructBase
{
    /**
     * The guid
     * Meta information extracted from the WSDL
     * - base: xsd:string
     * - length: 32
     * - use: required
     * - whiteSpace: collapse
     * @var string
     */
    public string $guid;
    /**
     * The kodPocztowy
     * Meta information extracted from the WSDL
     * - base: xsd:string
     * - maxLength: 10
     * - minLength: 0
     * - whiteSpace: collapse
     * @var string|null
     */
    public ?string $kodPocztowy = null;
    /**
     * The miejscowosc
     * Meta information extracted from the WSDL
     * - base: xsd:string
     * - maxLength: 63
     * - minLength: 1
     * - whiteSpace: collapse
     * @var string|null
     */
    public ?string $miejscowosc = null;
    /**
     * The ulica
     * Meta information extracted from the WSDL
     * - base: xsd:string
     * - maxLength: 255
     * - minLength: 1
     * - whiteSpace: collapse
     * @var string|null
     */
    public ?string $ulica = null;
    /**
     * The numerDomu
     * Meta information extracted from the WSDL
     * - base: xsd:string
     * - maxLength: 11
     * - minLength: 0
     * - whiteSpace: collapse
     * @var string|null
     */
    public ?string $numerDomu = null;
    /**
     * Constructor method for obszarAdresowyType
     * @uses ObszarAdresowyType::setGuid()
     * @uses ObszarAdresowyType::setKodPocztowy()
     * @uses ObszarAdresowyType::setMiejscowosc()
     * @uses ObszarAdresowyType::setUlica()
     * @uses ObszarAdresowyType::setNumerDomu()
     * @param string $guid
     * @param string $kodPocztowy
     * @param string $miejscowosc
     * @param string $ulica
     * @param string $numerDomu
     */
    public function __construct(string $guid, ?string $kodPocztowy = null, ?string $miejscowosc = null, ?string $ulica = null, ?string $numerDomu = null)
    {
        $this
            ->setGuid($guid)
            ->setKodPocztowy($kodPocztowy)
            ->setMiejscowosc($miejscowosc)
            ->setUlica($ulica)
            ->setNumerDomu($numerDomu);
    }
    /**
     * Get guid value
     * @return string
     */
    public function getGuid(): string
    {
        return $this->guid;
    }
    /**
     * Set guid value
     * @param string $guid
     * @return \App\ElektronicznyNadawca\StructType\ObszarAdresowyType
     */
    public function setGuid(string $guid): self
    {
        $this->guid = $guid;
        
        return $this;
    }
    /**
     * Get kodPocztowy value
     * @return string|null
     */
    public function getKodPocztowy(): ?string
    {
        return $this->kodPocztowy;
    }
    /**
     * Set kodPocztowy value
     * @param string $kodPocztowy
     * @return \App\ElektronicznyNadawca\StructType\ObszarAdresowyType
     */
    public function setKodPocztowy(?string $kodPocztowy = null): self
    {
        $this->kodPocztowy = $kodPocztowy;
        
        return $this;
    }
    /**
     * Get miejscowosc value
     * @return string|null
     */
    public function getMiejscowosc(): ?string
    {
        return $this->miejscowosc;
    }
    /**
     * Set miejscowosc value
     * @param string $miejscowosc
     * @return \App\ElektronicznyNadawca\StructType\ObszarAdresowyType
     */
    public function setMiejscowosc(?string $miejscowosc = null): self
    {
        $this->miejscowosc = $miejscowosc;
        
        return $this;
    }
    /**
     * Get ulica value
     * @return string|null
     */
    public function getUlica(): ?string
    {
        return $this->ulica;
    }
    /**
     * Set ulica value
     * @param string $ulica
     * @return \App\ElektronicznyNadawca\StructType\ObszarAdresowyType
     */
    public function setUlica(?string $ulica = null): self
    {
        $this->ulica = $ulica;
        
        return $this;
    }
    /**
     * Get numerDomu value
     * @return string|null
     */
    public function getNumerDomu(): ?string
    {
        return $this->numerDomu;
    }
    /**
     * Set numerDomu value
     * @param string $numerDomu
     * @return \App\ElektronicznyNadawca\StructType\ObszarAdresowyType
     */
    public function setNumerDomu(?string $numerDomu = null): self
    {
        $this->numerDomu = $numerDomu;
        
        return $this;
    }
}
