<?php

declare(strict_types=1);

namespace App\ElektronicznyNadawca\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for addShipmentResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class AddShipmentResponse extends AbstractStructBase
{
    /**
     * The retval
     * Meta information extracted from the WSDL
     * - maxOccurs: 500
     * - minOccurs: 1
     * @var \App\ElektronicznyNadawca\StructType\AddShipmentResponseItemType[]
     */
    public array $retval;
    /**
     * Constructor method for addShipmentResponse
     * @uses AddShipmentResponse::setRetval()
     * @param \App\ElektronicznyNadawca\StructType\AddShipmentResponseItemType[] $retval
     */
    public function __construct(array $retval)
    {
        $this
            ->setRetval($retval);
    }
    /**
     * Get retval value
     * @return \App\ElektronicznyNadawca\StructType\AddShipmentResponseItemType[]
     */
    public function getRetval(): array
    {
        return $this->retval;
    }
    /**
     * Set retval value
     * @param \App\ElektronicznyNadawca\StructType\AddShipmentResponseItemType[] $retval
     * @return \App\ElektronicznyNadawca\StructType\AddShipmentResponse
     */
    public function setRetval(array $retval): self
    {
        $this->retval = $retval;
        
        return $this;
    }
    /**
     * Add item to retval value
     * @throws InvalidArgumentException
     * @param \App\ElektronicznyNadawca\StructType\AddShipmentResponseItemType $item
     * @return \App\ElektronicznyNadawca\StructType\AddShipmentResponse
     */
    public function addToRetval(\App\ElektronicznyNadawca\StructType\AddShipmentResponseItemType $item): self
    {
        $this->retval[] = $item;
        
        return $this;
    }
}
