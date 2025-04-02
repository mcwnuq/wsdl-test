<?php

declare(strict_types=1);

namespace App\ElektronicznyNadawca\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for wplataCKPType StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class WplataCKPType extends AbstractStructBase
{
    /**
     * The unikalnyIdentyfikatorWplaty
     * Meta information extracted from the WSDL
     * - use: required
     * @var string
     */
    public string $unikalnyIdentyfikatorWplaty;
    /**
     * The numerNadania
     * Meta information extracted from the WSDL
     * - base: xsd:string
     * - maxLength: 20
     * - minLength: 10
     * - use: required
     * @var string
     */
    public string $numerNadania;
    /**
     * The kwota
     * Meta information extracted from the WSDL
     * - documentation: Kwota w groszach
     * - use: required
     * @var int
     */
    public int $kwota;
    /**
     * The dataPobrania
     * Meta information extracted from the WSDL
     * - use: required
     * @var string
     */
    public string $dataPobrania;
    /**
     * The idUmowy
     * Meta information extracted from the WSDL
     * - use: required
     * @var int
     */
    public int $idUmowy;
    /**
     * The tytulPrzelewuZbiorczego
     * Meta information extracted from the WSDL
     * - use: required
     * @var string
     */
    public string $tytulPrzelewuZbiorczego;
    /**
     * The tytulPobrania
     * @var string|null
     */
    public ?string $tytulPobrania = null;
    /**
     * The dataPrzelewu
     * Meta information extracted from the WSDL
     * - use: optional
     * @var string|null
     */
    public ?string $dataPrzelewu = null;
    /**
     * Constructor method for wplataCKPType
     * @uses WplataCKPType::setUnikalnyIdentyfikatorWplaty()
     * @uses WplataCKPType::setNumerNadania()
     * @uses WplataCKPType::setKwota()
     * @uses WplataCKPType::setDataPobrania()
     * @uses WplataCKPType::setIdUmowy()
     * @uses WplataCKPType::setTytulPrzelewuZbiorczego()
     * @uses WplataCKPType::setTytulPobrania()
     * @uses WplataCKPType::setDataPrzelewu()
     * @param string $unikalnyIdentyfikatorWplaty
     * @param string $numerNadania
     * @param int $kwota
     * @param string $dataPobrania
     * @param int $idUmowy
     * @param string $tytulPrzelewuZbiorczego
     * @param string $tytulPobrania
     * @param string $dataPrzelewu
     */
    public function __construct(string $unikalnyIdentyfikatorWplaty, string $numerNadania, int $kwota, string $dataPobrania, int $idUmowy, string $tytulPrzelewuZbiorczego, ?string $tytulPobrania = null, ?string $dataPrzelewu = null)
    {
        $this
            ->setUnikalnyIdentyfikatorWplaty($unikalnyIdentyfikatorWplaty)
            ->setNumerNadania($numerNadania)
            ->setKwota($kwota)
            ->setDataPobrania($dataPobrania)
            ->setIdUmowy($idUmowy)
            ->setTytulPrzelewuZbiorczego($tytulPrzelewuZbiorczego)
            ->setTytulPobrania($tytulPobrania)
            ->setDataPrzelewu($dataPrzelewu);
    }
    /**
     * Get unikalnyIdentyfikatorWplaty value
     * @return string
     */
    public function getUnikalnyIdentyfikatorWplaty(): string
    {
        return $this->unikalnyIdentyfikatorWplaty;
    }
    /**
     * Set unikalnyIdentyfikatorWplaty value
     * @param string $unikalnyIdentyfikatorWplaty
     * @return \App\ElektronicznyNadawca\StructType\WplataCKPType
     */
    public function setUnikalnyIdentyfikatorWplaty(string $unikalnyIdentyfikatorWplaty): self
    {
        $this->unikalnyIdentyfikatorWplaty = $unikalnyIdentyfikatorWplaty;
        
        return $this;
    }
    /**
     * Get numerNadania value
     * @return string
     */
    public function getNumerNadania(): string
    {
        return $this->numerNadania;
    }
    /**
     * Set numerNadania value
     * @param string $numerNadania
     * @return \App\ElektronicznyNadawca\StructType\WplataCKPType
     */
    public function setNumerNadania(string $numerNadania): self
    {
        $this->numerNadania = $numerNadania;
        
        return $this;
    }
    /**
     * Get kwota value
     * @return int
     */
    public function getKwota(): int
    {
        return $this->kwota;
    }
    /**
     * Set kwota value
     * @param int $kwota
     * @return \App\ElektronicznyNadawca\StructType\WplataCKPType
     */
    public function setKwota(int $kwota): self
    {
        $this->kwota = $kwota;
        
        return $this;
    }
    /**
     * Get dataPobrania value
     * @return string
     */
    public function getDataPobrania(): string
    {
        return $this->dataPobrania;
    }
    /**
     * Set dataPobrania value
     * @param string $dataPobrania
     * @return \App\ElektronicznyNadawca\StructType\WplataCKPType
     */
    public function setDataPobrania(string $dataPobrania): self
    {
        $this->dataPobrania = $dataPobrania;
        
        return $this;
    }
    /**
     * Get idUmowy value
     * @return int
     */
    public function getIdUmowy(): int
    {
        return $this->idUmowy;
    }
    /**
     * Set idUmowy value
     * @param int $idUmowy
     * @return \App\ElektronicznyNadawca\StructType\WplataCKPType
     */
    public function setIdUmowy(int $idUmowy): self
    {
        $this->idUmowy = $idUmowy;
        
        return $this;
    }
    /**
     * Get tytulPrzelewuZbiorczego value
     * @return string
     */
    public function getTytulPrzelewuZbiorczego(): string
    {
        return $this->tytulPrzelewuZbiorczego;
    }
    /**
     * Set tytulPrzelewuZbiorczego value
     * @param string $tytulPrzelewuZbiorczego
     * @return \App\ElektronicznyNadawca\StructType\WplataCKPType
     */
    public function setTytulPrzelewuZbiorczego(string $tytulPrzelewuZbiorczego): self
    {
        $this->tytulPrzelewuZbiorczego = $tytulPrzelewuZbiorczego;
        
        return $this;
    }
    /**
     * Get tytulPobrania value
     * @return string|null
     */
    public function getTytulPobrania(): ?string
    {
        return $this->tytulPobrania;
    }
    /**
     * Set tytulPobrania value
     * @param string $tytulPobrania
     * @return \App\ElektronicznyNadawca\StructType\WplataCKPType
     */
    public function setTytulPobrania(?string $tytulPobrania = null): self
    {
        $this->tytulPobrania = $tytulPobrania;
        
        return $this;
    }
    /**
     * Get dataPrzelewu value
     * @return string|null
     */
    public function getDataPrzelewu(): ?string
    {
        return $this->dataPrzelewu;
    }
    /**
     * Set dataPrzelewu value
     * @param string $dataPrzelewu
     * @return \App\ElektronicznyNadawca\StructType\WplataCKPType
     */
    public function setDataPrzelewu(?string $dataPrzelewu = null): self
    {
        $this->dataPrzelewu = $dataPrzelewu;
        
        return $this;
    }
}
