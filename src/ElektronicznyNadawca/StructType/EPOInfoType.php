<?php

declare(strict_types=1);

namespace App\ElektronicznyNadawca\StructType;



/**
 * This class stands for EPOInfoType StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class EPOInfoType
{
    /**
     * The awizoPrzesylki
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \App\ElektronicznyNadawca\StructType\AwizoPrzesylkiType|null
     */
    public ?\App\ElektronicznyNadawca\StructType\AwizoPrzesylkiType $awizoPrzesylki = null;
    /**
     * The doreczeniePrzesylki
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \App\ElektronicznyNadawca\StructType\DoreczeniePrzesylkiType|null
     */
    public ?\App\ElektronicznyNadawca\StructType\DoreczeniePrzesylkiType $doreczeniePrzesylki = null;
    /**
     * The zwrotPrzesylki
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \App\ElektronicznyNadawca\StructType\ZwrotPrzesylkiType|null
     */
    public ?\App\ElektronicznyNadawca\StructType\ZwrotPrzesylkiType $zwrotPrzesylki = null;
    /**
     * Constructor method for EPOInfoType
     * @uses EPOInfoType::setAwizoPrzesylki()
     * @uses EPOInfoType::setDoreczeniePrzesylki()
     * @uses EPOInfoType::setZwrotPrzesylki()
     * @param \App\ElektronicznyNadawca\StructType\AwizoPrzesylkiType $awizoPrzesylki
     * @param \App\ElektronicznyNadawca\StructType\DoreczeniePrzesylkiType $doreczeniePrzesylki
     * @param \App\ElektronicznyNadawca\StructType\ZwrotPrzesylkiType $zwrotPrzesylki
     */
    public function __construct(?\App\ElektronicznyNadawca\StructType\AwizoPrzesylkiType $awizoPrzesylki = null, ?\App\ElektronicznyNadawca\StructType\DoreczeniePrzesylkiType $doreczeniePrzesylki = null, ?\App\ElektronicznyNadawca\StructType\ZwrotPrzesylkiType $zwrotPrzesylki = null)
    {
        $this
            ->setAwizoPrzesylki($awizoPrzesylki)
            ->setDoreczeniePrzesylki($doreczeniePrzesylki)
            ->setZwrotPrzesylki($zwrotPrzesylki);
    }
    /**
     * Get awizoPrzesylki value
     * @return \App\ElektronicznyNadawca\StructType\AwizoPrzesylkiType|null
     */
    public function getAwizoPrzesylki(): ?\App\ElektronicznyNadawca\StructType\AwizoPrzesylkiType
    {
        return $this->awizoPrzesylki;
    }
    /**
     * Set awizoPrzesylki value
     * @param \App\ElektronicznyNadawca\StructType\AwizoPrzesylkiType $awizoPrzesylki
     * @return \App\ElektronicznyNadawca\StructType\EPOInfoType
     */
    public function setAwizoPrzesylki(?\App\ElektronicznyNadawca\StructType\AwizoPrzesylkiType $awizoPrzesylki = null): self
    {
        $this->awizoPrzesylki = $awizoPrzesylki;
        
        return $this;
    }
    /**
     * Get doreczeniePrzesylki value
     * @return \App\ElektronicznyNadawca\StructType\DoreczeniePrzesylkiType|null
     */
    public function getDoreczeniePrzesylki(): ?\App\ElektronicznyNadawca\StructType\DoreczeniePrzesylkiType
    {
        return $this->doreczeniePrzesylki;
    }
    /**
     * Set doreczeniePrzesylki value
     * @param \App\ElektronicznyNadawca\StructType\DoreczeniePrzesylkiType $doreczeniePrzesylki
     * @return \App\ElektronicznyNadawca\StructType\EPOInfoType
     */
    public function setDoreczeniePrzesylki(?\App\ElektronicznyNadawca\StructType\DoreczeniePrzesylkiType $doreczeniePrzesylki = null): self
    {
        $this->doreczeniePrzesylki = $doreczeniePrzesylki;
        
        return $this;
    }
    /**
     * Get zwrotPrzesylki value
     * @return \App\ElektronicznyNadawca\StructType\ZwrotPrzesylkiType|null
     */
    public function getZwrotPrzesylki(): ?\App\ElektronicznyNadawca\StructType\ZwrotPrzesylkiType
    {
        return $this->zwrotPrzesylki;
    }
    /**
     * Set zwrotPrzesylki value
     * @param \App\ElektronicznyNadawca\StructType\ZwrotPrzesylkiType $zwrotPrzesylki
     * @return \App\ElektronicznyNadawca\StructType\EPOInfoType
     */
    public function setZwrotPrzesylki(?\App\ElektronicznyNadawca\StructType\ZwrotPrzesylkiType $zwrotPrzesylki = null): self
    {
        $this->zwrotPrzesylki = $zwrotPrzesylki;
        
        return $this;
    }
}
