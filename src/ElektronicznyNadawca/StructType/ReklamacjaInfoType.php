<?php

declare(strict_types=1);

namespace App\ElektronicznyNadawca\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for reklamacjaInfoType StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class ReklamacjaInfoType extends AbstractStructBase
{
    /**
     * The idReklamacja
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public string $idReklamacja;
    /**
     * The guidPrzesylki
     * Meta information extracted from the WSDL
     * - base: xsd:string
     * - length: 32
     * - maxOccurs: 1
     * - minOccurs: 1
     * - whiteSpace: collapse
     * @var string
     */
    public string $guidPrzesylki;
    /**
     * Constructor method for reklamacjaInfoType
     * @uses ReklamacjaInfoType::setIdReklamacja()
     * @uses ReklamacjaInfoType::setGuidPrzesylki()
     * @param string $idReklamacja
     * @param string $guidPrzesylki
     */
    public function __construct(string $idReklamacja, string $guidPrzesylki)
    {
        $this
            ->setIdReklamacja($idReklamacja)
            ->setGuidPrzesylki($guidPrzesylki);
    }
    /**
     * Get idReklamacja value
     * @return string
     */
    public function getIdReklamacja(): string
    {
        return $this->idReklamacja;
    }
    /**
     * Set idReklamacja value
     * @param string $idReklamacja
     * @return \App\ElektronicznyNadawca\StructType\ReklamacjaInfoType
     */
    public function setIdReklamacja(string $idReklamacja): self
    {
        $this->idReklamacja = $idReklamacja;
        
        return $this;
    }
    /**
     * Get guidPrzesylki value
     * @return string
     */
    public function getGuidPrzesylki(): string
    {
        return $this->guidPrzesylki;
    }
    /**
     * Set guidPrzesylki value
     * @param string $guidPrzesylki
     * @return \App\ElektronicznyNadawca\StructType\ReklamacjaInfoType
     */
    public function setGuidPrzesylki(string $guidPrzesylki): self
    {
        $this->guidPrzesylki = $guidPrzesylki;
        
        return $this;
    }
}
