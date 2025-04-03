<?php

declare(strict_types=1);

namespace App\ElektronicznyNadawca\StructType;



/**
 * This class stands for setJednostkaOrganizacyjna StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SetJednostkaOrganizacyjna
{
    /**
     * The jednostkaOrganizacyjna
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 1
     * @var \App\ElektronicznyNadawca\StructType\JednostkaOrganizacyjnaType[]
     */
    public array $jednostkaOrganizacyjna;
    /**
     * Constructor method for setJednostkaOrganizacyjna
     * @uses SetJednostkaOrganizacyjna::setJednostkaOrganizacyjna()
     * @param \App\ElektronicznyNadawca\StructType\JednostkaOrganizacyjnaType[] $jednostkaOrganizacyjna
     */
    public function __construct(array $jednostkaOrganizacyjna)
    {
        $this
            ->setJednostkaOrganizacyjna($jednostkaOrganizacyjna);
    }
    /**
     * Get jednostkaOrganizacyjna value
     * @return \App\ElektronicznyNadawca\StructType\JednostkaOrganizacyjnaType[]
     */
    public function getJednostkaOrganizacyjna(): array
    {
        return $this->jednostkaOrganizacyjna;
    }
    /**
     * Set jednostkaOrganizacyjna value
     * @param \App\ElektronicznyNadawca\StructType\JednostkaOrganizacyjnaType[] $jednostkaOrganizacyjna
     * @return \App\ElektronicznyNadawca\StructType\SetJednostkaOrganizacyjna
     */
    public function setJednostkaOrganizacyjna(array $jednostkaOrganizacyjna): self
    {
        $this->jednostkaOrganizacyjna = $jednostkaOrganizacyjna;
        
        return $this;
    }
    /**
     * Add item to jednostkaOrganizacyjna value
     * @throws InvalidArgumentException
     * @param \App\ElektronicznyNadawca\StructType\JednostkaOrganizacyjnaType $item
     * @return \App\ElektronicznyNadawca\StructType\SetJednostkaOrganizacyjna
     */
    public function addToJednostkaOrganizacyjna(\App\ElektronicznyNadawca\StructType\JednostkaOrganizacyjnaType $item): self
    {
        $this->jednostkaOrganizacyjna[] = $item;
        
        return $this;
    }
}
