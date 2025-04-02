<?php

declare(strict_types=1);

namespace App\ElektronicznyNadawca\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for oplacaOdbiorcaType StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class OplacaOdbiorcaType extends AbstractStructBase
{
    /**
     * The typ
     * Meta information extracted from the WSDL
     * - documentation: Typ odbiorcy/adresata opłacającego przesyłkę. Dopuszczalne wartości: ADRESAT_INDYWIDUALNY, ADRESAT_UMOWNY, ODDZIAL.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    public ?string $typ = null;
    /**
     * The karta
     * Meta information extracted from the WSDL
     * - documentation: Wymagalny dla typ=ADRESAT_UMOWNY i typ=ODDZIAL.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \App\ElektronicznyNadawca\StructType\OplacaOdbiorcaKartaType|null
     */
    public ?\App\ElektronicznyNadawca\StructType\OplacaOdbiorcaKartaType $karta = null;
    /**
     * Constructor method for oplacaOdbiorcaType
     * @uses OplacaOdbiorcaType::setTyp()
     * @uses OplacaOdbiorcaType::setKarta()
     * @param string $typ
     * @param \App\ElektronicznyNadawca\StructType\OplacaOdbiorcaKartaType $karta
     */
    public function __construct(?string $typ = null, ?\App\ElektronicznyNadawca\StructType\OplacaOdbiorcaKartaType $karta = null)
    {
        $this
            ->setTyp($typ)
            ->setKarta($karta);
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
     * @return \App\ElektronicznyNadawca\StructType\OplacaOdbiorcaType
     */
    public function setTyp(?string $typ = null): self
    {
        $this->typ = $typ;
        
        return $this;
    }
    /**
     * Get karta value
     * @return \App\ElektronicznyNadawca\StructType\OplacaOdbiorcaKartaType|null
     */
    public function getKarta(): ?\App\ElektronicznyNadawca\StructType\OplacaOdbiorcaKartaType
    {
        return $this->karta;
    }
    /**
     * Set karta value
     * @param \App\ElektronicznyNadawca\StructType\OplacaOdbiorcaKartaType $karta
     * @return \App\ElektronicznyNadawca\StructType\OplacaOdbiorcaType
     */
    public function setKarta(?\App\ElektronicznyNadawca\StructType\OplacaOdbiorcaKartaType $karta = null): self
    {
        $this->karta = $karta;
        
        return $this;
    }
}
