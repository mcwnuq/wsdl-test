<?php

declare(strict_types=1);

namespace App\ElektronicznyNadawca\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getEZDOListResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetEZDOListResponse extends AbstractStructBase
{
    /**
     * The EZDOPakiet
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \App\ElektronicznyNadawca\StructType\EZDOPakietType[]
     */
    public ?array $EZDOPakiet = null;
    /**
     * Constructor method for getEZDOListResponse
     * @uses GetEZDOListResponse::setEZDOPakiet()
     * @param \App\ElektronicznyNadawca\StructType\EZDOPakietType[] $eZDOPakiet
     */
    public function __construct(?array $eZDOPakiet = null)
    {
        $this
            ->setEZDOPakiet($eZDOPakiet);
    }
    /**
     * Get EZDOPakiet value
     * @return \App\ElektronicznyNadawca\StructType\EZDOPakietType[]
     */
    public function getEZDOPakiet(): ?array
    {
        return $this->EZDOPakiet;
    }
    /**
     * Set EZDOPakiet value
     * @param \App\ElektronicznyNadawca\StructType\EZDOPakietType[] $eZDOPakiet
     * @return \App\ElektronicznyNadawca\StructType\GetEZDOListResponse
     */
    public function setEZDOPakiet(?array $eZDOPakiet = null): self
    {
        $this->EZDOPakiet = $eZDOPakiet;
        
        return $this;
    }
    /**
     * Add item to EZDOPakiet value
     * @throws InvalidArgumentException
     * @param \App\ElektronicznyNadawca\StructType\EZDOPakietType $item
     * @return \App\ElektronicznyNadawca\StructType\GetEZDOListResponse
     */
    public function addToEZDOPakiet(\App\ElektronicznyNadawca\StructType\EZDOPakietType $item): self
    {
        $this->EZDOPakiet[] = $item;
        
        return $this;
    }
}
