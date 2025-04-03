<?php

declare(strict_types=1);

namespace App\ElektronicznyNadawca\StructType;

/**
 * This class stands for przesylkaType StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
abstract class PrzesylkaType
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
     * The oplacaOdbiorca
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \App\ElektronicznyNadawca\StructType\OplacaOdbiorcaType|null
     */
    public ?\App\ElektronicznyNadawca\StructType\OplacaOdbiorcaType $oplacaOdbiorca = null;
    /**
     * The mpk
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    public ?string $mpk = null;
    /**
     * The pakietGuid
     * Meta information extracted from the WSDL
     * - base: xsd:string
     * - length: 32
     * - whiteSpace: collapse
     * @var string|null
     */
    public ?string $pakietGuid = null;
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
     * The opis
     * Meta information extracted from the WSDL
     * - base: xsd:string
     * - maxLength: 500
     * - whiteSpace: collapse
     * @var string|null
     */
    public ?string $opis = null;
    /**
     * The planowanaDataNadania
     * @var string|null
     */
    public ?string $planowanaDataNadania = null;
    /**
     * Constructor method for przesylkaType
     * @uses PrzesylkaType::setGuid()
     * @uses PrzesylkaType::setOplacaOdbiorca()
     * @uses PrzesylkaType::setMpk()
     * @uses PrzesylkaType::setPakietGuid()
     * @uses PrzesylkaType::setOpakowanieGuid()
     * @uses PrzesylkaType::setOpis()
     * @uses PrzesylkaType::setPlanowanaDataNadania()
     * @param string $guid
     * @param \App\ElektronicznyNadawca\StructType\OplacaOdbiorcaType $oplacaOdbiorca
     * @param string $mpk
     * @param string $pakietGuid
     * @param string $opakowanieGuid
     * @param string $opis
     * @param string $planowanaDataNadania
     */
    public function __construct(string $guid, ?\App\ElektronicznyNadawca\StructType\OplacaOdbiorcaType $oplacaOdbiorca = null, ?string $mpk = null, ?string $pakietGuid = null, ?string $opakowanieGuid = null, ?string $opis = null, ?string $planowanaDataNadania = null)
    {
        $this
            ->setGuid($guid)
            ->setOplacaOdbiorca($oplacaOdbiorca)
            ->setMpk($mpk)
            ->setPakietGuid($pakietGuid)
            ->setOpakowanieGuid($opakowanieGuid)
            ->setOpis($opis)
            ->setPlanowanaDataNadania($planowanaDataNadania);
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
     * @return \App\ElektronicznyNadawca\StructType\PrzesylkaType
     */
    public function setGuid(string $guid): self
    {
        $this->guid = $guid;
        
        return $this;
    }
    /**
     * Get oplacaOdbiorca value
     * @return \App\ElektronicznyNadawca\StructType\OplacaOdbiorcaType|null
     */
    public function getOplacaOdbiorca(): ?\App\ElektronicznyNadawca\StructType\OplacaOdbiorcaType
    {
        return $this->oplacaOdbiorca;
    }
    /**
     * Set oplacaOdbiorca value
     * @param \App\ElektronicznyNadawca\StructType\OplacaOdbiorcaType $oplacaOdbiorca
     * @return \App\ElektronicznyNadawca\StructType\PrzesylkaType
     */
    public function setOplacaOdbiorca(?\App\ElektronicznyNadawca\StructType\OplacaOdbiorcaType $oplacaOdbiorca = null): self
    {
        $this->oplacaOdbiorca = $oplacaOdbiorca;
        
        return $this;
    }
    /**
     * Get mpk value
     * @return string|null
     */
    public function getMpk(): ?string
    {
        return $this->mpk;
    }
    /**
     * Set mpk value
     * @param string $mpk
     * @return \App\ElektronicznyNadawca\StructType\PrzesylkaType
     */
    public function setMpk(?string $mpk = null): self
    {
        $this->mpk = $mpk;
        
        return $this;
    }
    /**
     * Get pakietGuid value
     * @return string|null
     */
    public function getPakietGuid(): ?string
    {
        return $this->pakietGuid;
    }
    /**
     * Set pakietGuid value
     * @param string $pakietGuid
     * @return \App\ElektronicznyNadawca\StructType\PrzesylkaType
     */
    public function setPakietGuid(?string $pakietGuid = null): self
    {
        $this->pakietGuid = $pakietGuid;
        
        return $this;
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
     * @return \App\ElektronicznyNadawca\StructType\PrzesylkaType
     */
    public function setOpakowanieGuid(?string $opakowanieGuid = null): self
    {
        $this->opakowanieGuid = $opakowanieGuid;
        
        return $this;
    }
    /**
     * Get opis value
     * @return string|null
     */
    public function getOpis(): ?string
    {
        return $this->opis;
    }
    /**
     * Set opis value
     * @param string $opis
     * @return \App\ElektronicznyNadawca\StructType\PrzesylkaType
     */
    public function setOpis(?string $opis = null): self
    {
        $this->opis = $opis;
        
        return $this;
    }
    /**
     * Get planowanaDataNadania value
     * @return string|null
     */
    public function getPlanowanaDataNadania(): ?string
    {
        return $this->planowanaDataNadania;
    }
    /**
     * Set planowanaDataNadania value
     * @param string $planowanaDataNadania
     * @return \App\ElektronicznyNadawca\StructType\PrzesylkaType
     */
    public function setPlanowanaDataNadania(?string $planowanaDataNadania = null): self
    {
        $this->planowanaDataNadania = $planowanaDataNadania;
        
        return $this;
    }
}
