<?php

declare(strict_types=1);

namespace App\ElektronicznyNadawca\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for wyslijLinkaOStatusieEZwrotu StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class WyslijLinkaOStatusieEZwrotu extends AbstractStructBase
{
    /**
     * The guidZgodaEZwrot
     * Meta information extracted from the WSDL
     * - base: xsd:string
     * - length: 32
     * - maxOccurs: unbounded
     * - minOccurs: 1
     * - whiteSpace: collapse
     * @var string[]
     */
    public array $guidZgodaEZwrot;
    /**
     * Constructor method for wyslijLinkaOStatusieEZwrotu
     * @uses WyslijLinkaOStatusieEZwrotu::setGuidZgodaEZwrot()
     * @param string[] $guidZgodaEZwrot
     */
    public function __construct(array $guidZgodaEZwrot)
    {
        $this
            ->setGuidZgodaEZwrot($guidZgodaEZwrot);
    }
    /**
     * Get guidZgodaEZwrot value
     * @return string[]
     */
    public function getGuidZgodaEZwrot(): array
    {
        return $this->guidZgodaEZwrot;
    }
    /**
     * Set guidZgodaEZwrot value
     * @param string[] $guidZgodaEZwrot
     * @return \App\ElektronicznyNadawca\StructType\WyslijLinkaOStatusieEZwrotu
     */
    public function setGuidZgodaEZwrot(array $guidZgodaEZwrot): self
    {
        $this->guidZgodaEZwrot = $guidZgodaEZwrot;
        
        return $this;
    }
    /**
     * Add item to guidZgodaEZwrot value
     * @throws InvalidArgumentException
     * @param string $item
     * @return \App\ElektronicznyNadawca\StructType\WyslijLinkaOStatusieEZwrotu
     */
    public function addToGuidZgodaEZwrot(string $item): self
    {
        $this->guidZgodaEZwrot[] = $item;
        
        return $this;
    }
}
