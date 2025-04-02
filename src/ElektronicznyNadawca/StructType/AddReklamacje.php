<?php

declare(strict_types=1);

namespace App\ElektronicznyNadawca\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for addReklamacje StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class AddReklamacje extends AbstractStructBase
{
    /**
     * The reklamowanaPrzesylka
     * Meta information extracted from the WSDL
     * - maxOccurs: 500
     * - minOccurs: 1
     * @var \App\ElektronicznyNadawca\StructType\ReklamowanaPrzesylkaType[]
     */
    public array $reklamowanaPrzesylka;
    /**
     * Constructor method for addReklamacje
     * @uses AddReklamacje::setReklamowanaPrzesylka()
     * @param \App\ElektronicznyNadawca\StructType\ReklamowanaPrzesylkaType[] $reklamowanaPrzesylka
     */
    public function __construct(array $reklamowanaPrzesylka)
    {
        $this
            ->setReklamowanaPrzesylka($reklamowanaPrzesylka);
    }
    /**
     * Get reklamowanaPrzesylka value
     * @return \App\ElektronicznyNadawca\StructType\ReklamowanaPrzesylkaType[]
     */
    public function getReklamowanaPrzesylka(): array
    {
        return $this->reklamowanaPrzesylka;
    }
    /**
     * Set reklamowanaPrzesylka value
     * @param \App\ElektronicznyNadawca\StructType\ReklamowanaPrzesylkaType[] $reklamowanaPrzesylka
     * @return \App\ElektronicznyNadawca\StructType\AddReklamacje
     */
    public function setReklamowanaPrzesylka(array $reklamowanaPrzesylka): self
    {
        $this->reklamowanaPrzesylka = $reklamowanaPrzesylka;
        
        return $this;
    }
    /**
     * Add item to reklamowanaPrzesylka value
     * @throws InvalidArgumentException
     * @param \App\ElektronicznyNadawca\StructType\ReklamowanaPrzesylkaType $item
     * @return \App\ElektronicznyNadawca\StructType\AddReklamacje
     */
    public function addToReklamowanaPrzesylka(\App\ElektronicznyNadawca\StructType\ReklamowanaPrzesylkaType $item): self
    {
        $this->reklamowanaPrzesylka[] = $item;
        
        return $this;
    }
}
