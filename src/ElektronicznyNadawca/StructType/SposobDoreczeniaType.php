<?php

declare(strict_types=1);

namespace App\ElektronicznyNadawca\StructType;



/**
 * This class stands for sposobDoreczeniaType StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SposobDoreczeniaType
{
    /**
     * The kod
     * Meta information extracted from the WSDL
     * - documentation: kod sposobu doręczenia (jeden z HOM, PCS, PCF, SHP)
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public string $kod;
    /**
     * The identyfikatorPunktuOdbioru
     * Meta information extracted from the WSDL
     * - documentation: Wartość alfanumeryczna o maksymalnej długości 35 znaków, nie wymagany dla kod=HOM
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    public ?string $identyfikatorPunktuOdbioru = null;
    /**
     * Constructor method for sposobDoreczeniaType
     * @uses SposobDoreczeniaType::setKod()
     * @uses SposobDoreczeniaType::setIdentyfikatorPunktuOdbioru()
     * @param string $kod
     * @param string $identyfikatorPunktuOdbioru
     */
    public function __construct(string $kod, ?string $identyfikatorPunktuOdbioru = null)
    {
        $this
            ->setKod($kod)
            ->setIdentyfikatorPunktuOdbioru($identyfikatorPunktuOdbioru);
    }
    /**
     * Get kod value
     * @return string
     */
    public function getKod(): string
    {
        return $this->kod;
    }
    /**
     * Set kod value
     * @param string $kod
     * @return \App\ElektronicznyNadawca\StructType\SposobDoreczeniaType
     */
    public function setKod(string $kod): self
    {
        $this->kod = $kod;
        
        return $this;
    }
    /**
     * Get identyfikatorPunktuOdbioru value
     * @return string|null
     */
    public function getIdentyfikatorPunktuOdbioru(): ?string
    {
        return $this->identyfikatorPunktuOdbioru;
    }
    /**
     * Set identyfikatorPunktuOdbioru value
     * @param string $identyfikatorPunktuOdbioru
     * @return \App\ElektronicznyNadawca\StructType\SposobDoreczeniaType
     */
    public function setIdentyfikatorPunktuOdbioru(?string $identyfikatorPunktuOdbioru = null): self
    {
        $this->identyfikatorPunktuOdbioru = $identyfikatorPunktuOdbioru;
        
        return $this;
    }
}
