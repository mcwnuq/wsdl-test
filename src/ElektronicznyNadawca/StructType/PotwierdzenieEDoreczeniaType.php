<?php

declare(strict_types=1);

namespace App\ElektronicznyNadawca\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for potwierdzenieEDoreczeniaType StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class PotwierdzenieEDoreczeniaType extends AbstractStructBase
{
    /**
     * The sposob
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public string $sposob;
    /**
     * The kontakt
     * Meta information extracted from the WSDL
     * - base: xsd:string
     * - maxLength: 50
     * - maxOccurs: 1
     * - minLength: 0
     * - minOccurs: 1
     * @var string
     */
    public string $kontakt;
    /**
     * Constructor method for potwierdzenieEDoreczeniaType
     * @uses PotwierdzenieEDoreczeniaType::setSposob()
     * @uses PotwierdzenieEDoreczeniaType::setKontakt()
     * @param string $sposob
     * @param string $kontakt
     */
    public function __construct(string $sposob, string $kontakt)
    {
        $this
            ->setSposob($sposob)
            ->setKontakt($kontakt);
    }
    /**
     * Get sposob value
     * @return string
     */
    public function getSposob(): string
    {
        return $this->sposob;
    }
    /**
     * Set sposob value
     * @param string $sposob
     * @return \App\ElektronicznyNadawca\StructType\PotwierdzenieEDoreczeniaType
     */
    public function setSposob(string $sposob): self
    {
        $this->sposob = $sposob;
        
        return $this;
    }
    /**
     * Get kontakt value
     * @return string
     */
    public function getKontakt(): string
    {
        return $this->kontakt;
    }
    /**
     * Set kontakt value
     * @param string $kontakt
     * @return \App\ElektronicznyNadawca\StructType\PotwierdzenieEDoreczeniaType
     */
    public function setKontakt(string $kontakt): self
    {
        $this->kontakt = $kontakt;
        
        return $this;
    }
}
