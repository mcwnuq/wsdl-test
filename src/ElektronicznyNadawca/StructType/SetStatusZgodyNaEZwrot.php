<?php

declare(strict_types=1);

namespace App\ElektronicznyNadawca\StructType;



/**
 * This class stands for setStatusZgodyNaEZwrot StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SetStatusZgodyNaEZwrot
{
    /**
     * The statusZgody
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 1
     * @var \App\ElektronicznyNadawca\StructType\StatusZgodyEZwrotType[]
     */
    public array $statusZgody;
    /**
     * Constructor method for setStatusZgodyNaEZwrot
     * @uses SetStatusZgodyNaEZwrot::setStatusZgody()
     * @param \App\ElektronicznyNadawca\StructType\StatusZgodyEZwrotType[] $statusZgody
     */
    public function __construct(array $statusZgody)
    {
        $this
            ->setStatusZgody($statusZgody);
    }
    /**
     * Get statusZgody value
     * @return \App\ElektronicznyNadawca\StructType\StatusZgodyEZwrotType[]
     */
    public function getStatusZgody(): array
    {
        return $this->statusZgody;
    }
    /**
     * Set statusZgody value
     * @param \App\ElektronicznyNadawca\StructType\StatusZgodyEZwrotType[] $statusZgody
     * @return \App\ElektronicznyNadawca\StructType\SetStatusZgodyNaEZwrot
     */
    public function setStatusZgody(array $statusZgody): self
    {
        $this->statusZgody = $statusZgody;
        
        return $this;
    }
    /**
     * Add item to statusZgody value
     * @throws InvalidArgumentException
     * @param \App\ElektronicznyNadawca\StructType\StatusZgodyEZwrotType $item
     * @return \App\ElektronicznyNadawca\StructType\SetStatusZgodyNaEZwrot
     */
    public function addToStatusZgody(\App\ElektronicznyNadawca\StructType\StatusZgodyEZwrotType $item): self
    {
        $this->statusZgody[] = $item;
        
        return $this;
    }
}
