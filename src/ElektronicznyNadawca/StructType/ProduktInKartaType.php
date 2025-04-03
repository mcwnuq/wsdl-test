<?php

declare(strict_types=1);

namespace App\ElektronicznyNadawca\StructType;



/**
 * This class stands for produktInKartaType StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class ProduktInKartaType
{
    /**
     * The symbolIWD
     * Meta information extracted from the WSDL
     * - base: xsd:string
     * - length: 3
     * @var string|null
     */
    public ?string $symbolIWD = null;
    /**
     * The nazwaWyswietlana
     * Meta information extracted from the WSDL
     * - base: xsd:string
     * - length: 100
     * @var string|null
     */
    public ?string $nazwaWyswietlana = null;
    /**
     * The nazwaProduktu
     * Meta information extracted from the WSDL
     * - base: xsd:string
     * - length: 60
     * @var string|null
     */
    public ?string $nazwaProduktu = null;
    /**
     * Constructor method for produktInKartaType
     * @uses ProduktInKartaType::setSymbolIWD()
     * @uses ProduktInKartaType::setNazwaWyswietlana()
     * @uses ProduktInKartaType::setNazwaProduktu()
     * @param string $symbolIWD
     * @param string $nazwaWyswietlana
     * @param string $nazwaProduktu
     */
    public function __construct(?string $symbolIWD = null, ?string $nazwaWyswietlana = null, ?string $nazwaProduktu = null)
    {
        $this
            ->setSymbolIWD($symbolIWD)
            ->setNazwaWyswietlana($nazwaWyswietlana)
            ->setNazwaProduktu($nazwaProduktu);
    }
    /**
     * Get symbolIWD value
     * @return string|null
     */
    public function getSymbolIWD(): ?string
    {
        return $this->symbolIWD;
    }
    /**
     * Set symbolIWD value
     * @param string $symbolIWD
     * @return \App\ElektronicznyNadawca\StructType\ProduktInKartaType
     */
    public function setSymbolIWD(?string $symbolIWD = null): self
    {
        $this->symbolIWD = $symbolIWD;
        
        return $this;
    }
    /**
     * Get nazwaWyswietlana value
     * @return string|null
     */
    public function getNazwaWyswietlana(): ?string
    {
        return $this->nazwaWyswietlana;
    }
    /**
     * Set nazwaWyswietlana value
     * @param string $nazwaWyswietlana
     * @return \App\ElektronicznyNadawca\StructType\ProduktInKartaType
     */
    public function setNazwaWyswietlana(?string $nazwaWyswietlana = null): self
    {
        $this->nazwaWyswietlana = $nazwaWyswietlana;
        
        return $this;
    }
    /**
     * Get nazwaProduktu value
     * @return string|null
     */
    public function getNazwaProduktu(): ?string
    {
        return $this->nazwaProduktu;
    }
    /**
     * Set nazwaProduktu value
     * @param string $nazwaProduktu
     * @return \App\ElektronicznyNadawca\StructType\ProduktInKartaType
     */
    public function setNazwaProduktu(?string $nazwaProduktu = null): self
    {
        $this->nazwaProduktu = $nazwaProduktu;
        
        return $this;
    }
}
