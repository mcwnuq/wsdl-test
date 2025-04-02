<?php

declare(strict_types=1);

namespace App\ElektronicznyNadawca\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for potwierdzenieOdbioruPocztex2021Type StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class PotwierdzenieOdbioruPocztex2021Type extends AbstractStructBase
{
    /**
     * The ilosc
     * Meta information extracted from the WSDL
     * - base: xsd:int
     * - maxInclusive: 9
     * - maxOccurs: 1
     * - minInclusive: 1
     * - minOccurs: 1
     * @var int
     */
    public int $ilosc;
    /**
     * The sposobPotwierdzeniaOdbioru
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public string $sposobPotwierdzeniaOdbioru;
    /**
     * Constructor method for potwierdzenieOdbioruPocztex2021Type
     * @uses PotwierdzenieOdbioruPocztex2021Type::setIlosc()
     * @uses PotwierdzenieOdbioruPocztex2021Type::setSposobPotwierdzeniaOdbioru()
     * @param int $ilosc
     * @param string $sposobPotwierdzeniaOdbioru
     */
    public function __construct(int $ilosc, string $sposobPotwierdzeniaOdbioru)
    {
        $this
            ->setIlosc($ilosc)
            ->setSposobPotwierdzeniaOdbioru($sposobPotwierdzeniaOdbioru);
    }
    /**
     * Get ilosc value
     * @return int
     */
    public function getIlosc(): int
    {
        return $this->ilosc;
    }
    /**
     * Set ilosc value
     * @param int $ilosc
     * @return \App\ElektronicznyNadawca\StructType\PotwierdzenieOdbioruPocztex2021Type
     */
    public function setIlosc(int $ilosc): self
    {
        $this->ilosc = $ilosc;
        
        return $this;
    }
    /**
     * Get sposobPotwierdzeniaOdbioru value
     * @return string
     */
    public function getSposobPotwierdzeniaOdbioru(): string
    {
        return $this->sposobPotwierdzeniaOdbioru;
    }
    /**
     * Set sposobPotwierdzeniaOdbioru value
     * @param string $sposobPotwierdzeniaOdbioru
     * @return \App\ElektronicznyNadawca\StructType\PotwierdzenieOdbioruPocztex2021Type
     */
    public function setSposobPotwierdzeniaOdbioru(string $sposobPotwierdzeniaOdbioru): self
    {
        $this->sposobPotwierdzeniaOdbioru = $sposobPotwierdzeniaOdbioru;
        
        return $this;
    }
}
