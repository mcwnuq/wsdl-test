<?php

declare(strict_types=1);

namespace App\ElektronicznyNadawca\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for przesylkaEPOType StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class PrzesylkaEPOType extends AbstractStructBase
{
    /**
     * The EPOInfo
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \App\ElektronicznyNadawca\StructType\EPOInfoType|null
     */
    public ?\App\ElektronicznyNadawca\StructType\EPOInfoType $EPOInfo = null;
    /**
     * The biometricSignatureContent
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    public ?string $biometricSignatureContent = null;
    /**
     * The version
     * Meta information extracted from the WSDL
     * - documentation: 10: First version (to September 2019) 20: Second version (since October 2019)
     * - base: xsd:int
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var int|null
     */
    public ?int $version = null;
    /**
     * The guid
     * Meta information extracted from the WSDL
     * - base: xsd:string
     * - length: 32
     * - whiteSpace: collapse
     * @var string|null
     */
    public ?string $guid = null;
    /**
     * The numerNadania
     * Meta information extracted from the WSDL
     * - base: xsd:string
     * - maxLength: 20
     * - minLength: 10
     * @var string|null
     */
    public ?string $numerNadania = null;
    /**
     * The statusEPO
     * @var string|null
     */
    public ?string $statusEPO = null;
    /**
     * Constructor method for przesylkaEPOType
     * @uses PrzesylkaEPOType::setEPOInfo()
     * @uses PrzesylkaEPOType::setBiometricSignatureContent()
     * @uses PrzesylkaEPOType::setVersion()
     * @uses PrzesylkaEPOType::setGuid()
     * @uses PrzesylkaEPOType::setNumerNadania()
     * @uses PrzesylkaEPOType::setStatusEPO()
     * @param \App\ElektronicznyNadawca\StructType\EPOInfoType $ePOInfo
     * @param string $biometricSignatureContent
     * @param int $version
     * @param string $guid
     * @param string $numerNadania
     * @param string $statusEPO
     */
    public function __construct(?\App\ElektronicznyNadawca\StructType\EPOInfoType $ePOInfo = null, ?string $biometricSignatureContent = null, ?int $version = null, ?string $guid = null, ?string $numerNadania = null, ?string $statusEPO = null)
    {
        $this
            ->setEPOInfo($ePOInfo)
            ->setBiometricSignatureContent($biometricSignatureContent)
            ->setVersion($version)
            ->setGuid($guid)
            ->setNumerNadania($numerNadania)
            ->setStatusEPO($statusEPO);
    }
    /**
     * Get EPOInfo value
     * @return \App\ElektronicznyNadawca\StructType\EPOInfoType|null
     */
    public function getEPOInfo(): ?\App\ElektronicznyNadawca\StructType\EPOInfoType
    {
        return $this->EPOInfo;
    }
    /**
     * Set EPOInfo value
     * @param \App\ElektronicznyNadawca\StructType\EPOInfoType $ePOInfo
     * @return \App\ElektronicznyNadawca\StructType\PrzesylkaEPOType
     */
    public function setEPOInfo(?\App\ElektronicznyNadawca\StructType\EPOInfoType $ePOInfo = null): self
    {
        $this->EPOInfo = $ePOInfo;
        
        return $this;
    }
    /**
     * Get biometricSignatureContent value
     * @return string|null
     */
    public function getBiometricSignatureContent(): ?string
    {
        return $this->biometricSignatureContent;
    }
    /**
     * Set biometricSignatureContent value
     * @param string $biometricSignatureContent
     * @return \App\ElektronicznyNadawca\StructType\PrzesylkaEPOType
     */
    public function setBiometricSignatureContent(?string $biometricSignatureContent = null): self
    {
        $this->biometricSignatureContent = $biometricSignatureContent;
        
        return $this;
    }
    /**
     * Get version value
     * @return int|null
     */
    public function getVersion(): ?int
    {
        return $this->version;
    }
    /**
     * Set version value
     * @param int $version
     * @return \App\ElektronicznyNadawca\StructType\PrzesylkaEPOType
     */
    public function setVersion(?int $version = null): self
    {
        $this->version = $version;
        
        return $this;
    }
    /**
     * Get guid value
     * @return string|null
     */
    public function getGuid(): ?string
    {
        return $this->guid;
    }
    /**
     * Set guid value
     * @param string $guid
     * @return \App\ElektronicznyNadawca\StructType\PrzesylkaEPOType
     */
    public function setGuid(?string $guid = null): self
    {
        $this->guid = $guid;
        
        return $this;
    }
    /**
     * Get numerNadania value
     * @return string|null
     */
    public function getNumerNadania(): ?string
    {
        return $this->numerNadania;
    }
    /**
     * Set numerNadania value
     * @param string $numerNadania
     * @return \App\ElektronicznyNadawca\StructType\PrzesylkaEPOType
     */
    public function setNumerNadania(?string $numerNadania = null): self
    {
        $this->numerNadania = $numerNadania;
        
        return $this;
    }
    /**
     * Get statusEPO value
     * @return string|null
     */
    public function getStatusEPO(): ?string
    {
        return $this->statusEPO;
    }
    /**
     * Set statusEPO value
     * @param string $statusEPO
     * @return \App\ElektronicznyNadawca\StructType\PrzesylkaEPOType
     */
    public function setStatusEPO(?string $statusEPO = null): self
    {
        $this->statusEPO = $statusEPO;
        
        return $this;
    }
}
