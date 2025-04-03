<?php

declare(strict_types=1);

namespace App\ElektronicznyNadawca\StructType;



/**
 * This class stands for addOdwolanieDoReklamacji StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class AddOdwolanieDoReklamacji
{
    /**
     * The reklamacja
     * Meta information extracted from the WSDL
     * - maxOccurs: 500
     * - minOccurs: 1
     * @var \App\ElektronicznyNadawca\StructType\ReklamowanaPrzesylkaType[]
     */
    public array $reklamacja;
    /**
     * Constructor method for addOdwolanieDoReklamacji
     * @uses AddOdwolanieDoReklamacji::setReklamacja()
     * @param \App\ElektronicznyNadawca\StructType\ReklamowanaPrzesylkaType[] $reklamacja
     */
    public function __construct(array $reklamacja)
    {
        $this
            ->setReklamacja($reklamacja);
    }
    /**
     * Get reklamacja value
     * @return \App\ElektronicznyNadawca\StructType\ReklamowanaPrzesylkaType[]
     */
    public function getReklamacja(): array
    {
        return $this->reklamacja;
    }
    /**
     * Set reklamacja value
     * @param \App\ElektronicznyNadawca\StructType\ReklamowanaPrzesylkaType[] $reklamacja
     * @return \App\ElektronicznyNadawca\StructType\AddOdwolanieDoReklamacji
     */
    public function setReklamacja(array $reklamacja): self
    {
        $this->reklamacja = $reklamacja;
        
        return $this;
    }
    /**
     * Add item to reklamacja value
     * @throws InvalidArgumentException
     * @param \App\ElektronicznyNadawca\StructType\ReklamowanaPrzesylkaType $item
     * @return \App\ElektronicznyNadawca\StructType\AddOdwolanieDoReklamacji
     */
    public function addToReklamacja(\App\ElektronicznyNadawca\StructType\ReklamowanaPrzesylkaType $item): self
    {
        $this->reklamacja[] = $item;
        
        return $this;
    }
}
