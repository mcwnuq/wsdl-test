<?php

declare(strict_types=1);

namespace App\ElektronicznyNadawca\StructType;



/**
 * This class stands for daneSentType StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class DaneSentType
{
    /**
     * The numer
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public string $numer;
    /**
     * The kluczPrzewoznika
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public string $kluczPrzewoznika;
    /**
     * The kodCN
     * Meta information extracted from the WSDL
     * - choice: kodCN | kodPKWiU
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    public ?string $kodCN = null;
    /**
     * The kodPKWiU
     * Meta information extracted from the WSDL
     * - choice: kodCN | kodPKWiU
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    public ?string $kodPKWiU = null;
    /**
     * The masa
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var float|null
     */
    public ?float $masa = null;
    /**
     * The proceduraAwaryjna
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool|null
     */
    public ?bool $proceduraAwaryjna = null;
    /**
     * Constructor method for daneSentType
     * @uses DaneSentType::setNumer()
     * @uses DaneSentType::setKluczPrzewoznika()
     * @uses DaneSentType::setKodCN()
     * @uses DaneSentType::setKodPKWiU()
     * @uses DaneSentType::setMasa()
     * @uses DaneSentType::setProceduraAwaryjna()
     * @param string $numer
     * @param string $kluczPrzewoznika
     * @param string $kodCN
     * @param string $kodPKWiU
     * @param float $masa
     * @param bool $proceduraAwaryjna
     */
    public function __construct(string $numer, string $kluczPrzewoznika, ?string $kodCN = null, ?string $kodPKWiU = null, ?float $masa = null, ?bool $proceduraAwaryjna = null)
    {
        $this
            ->setNumer($numer)
            ->setKluczPrzewoznika($kluczPrzewoznika)
            ->setKodCN($kodCN)
            ->setKodPKWiU($kodPKWiU)
            ->setMasa($masa)
            ->setProceduraAwaryjna($proceduraAwaryjna);
    }
    /**
     * Get numer value
     * @return string
     */
    public function getNumer(): string
    {
        return $this->numer;
    }
    /**
     * Set numer value
     * @param string $numer
     * @return \App\ElektronicznyNadawca\StructType\DaneSentType
     */
    public function setNumer(string $numer): self
    {
        $this->numer = $numer;
        
        return $this;
    }
    /**
     * Get kluczPrzewoznika value
     * @return string
     */
    public function getKluczPrzewoznika(): string
    {
        return $this->kluczPrzewoznika;
    }
    /**
     * Set kluczPrzewoznika value
     * @param string $kluczPrzewoznika
     * @return \App\ElektronicznyNadawca\StructType\DaneSentType
     */
    public function setKluczPrzewoznika(string $kluczPrzewoznika): self
    {
        $this->kluczPrzewoznika = $kluczPrzewoznika;
        
        return $this;
    }
    /**
     * Get kodCN value
     * @return string|null
     */
    public function getKodCN(): ?string
    {
        return $this->kodCN ?? null;
    }
    /**
     * Set kodCN value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @param string $kodCN
     * @return \App\ElektronicznyNadawca\StructType\DaneSentType
     */
    public function setKodCN(?string $kodCN = null): self
    {
        if (is_null($kodCN) || (is_array($kodCN) && empty($kodCN))) {
            unset($this->kodCN);
        } else {
            $this->kodCN = $kodCN;
        }
        
        return $this;
    }
    /**
     * Get kodPKWiU value
     * @return string|null
     */
    public function getKodPKWiU(): ?string
    {
        return $this->kodPKWiU ?? null;
    }
    /**
     * Set kodPKWiU value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @param string $kodPKWiU
     * @return \App\ElektronicznyNadawca\StructType\DaneSentType
     */
    public function setKodPKWiU(?string $kodPKWiU = null): self
    {
        if (is_null($kodPKWiU) || (is_array($kodPKWiU) && empty($kodPKWiU))) {
            unset($this->kodPKWiU);
        } else {
            $this->kodPKWiU = $kodPKWiU;
        }
        
        return $this;
    }
    /**
     * Get masa value
     * @return float|null
     */
    public function getMasa(): ?float
    {
        return $this->masa;
    }
    /**
     * Set masa value
     * @param float $masa
     * @return \App\ElektronicznyNadawca\StructType\DaneSentType
     */
    public function setMasa(?float $masa = null): self
    {
        $this->masa = $masa;
        
        return $this;
    }
    /**
     * Get proceduraAwaryjna value
     * @return bool|null
     */
    public function getProceduraAwaryjna(): ?bool
    {
        return $this->proceduraAwaryjna;
    }
    /**
     * Set proceduraAwaryjna value
     * @param bool $proceduraAwaryjna
     * @return \App\ElektronicznyNadawca\StructType\DaneSentType
     */
    public function setProceduraAwaryjna(?bool $proceduraAwaryjna = null): self
    {
        $this->proceduraAwaryjna = $proceduraAwaryjna;
        
        return $this;
    }
}
