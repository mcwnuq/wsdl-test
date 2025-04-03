<?php

declare(strict_types=1);

namespace App\ElektronicznyNadawca\StructType;



/**
 * This class stands for setJednostkaOrganizacyjnaResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SetJednostkaOrganizacyjnaResponse
{
    /**
     * The error
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \App\ElektronicznyNadawca\StructType\ErrorType[]
     */
    public ?array $error = null;
    /**
     * The jednostkaOrganizacyjna
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \App\ElektronicznyNadawca\StructType\JednostkaOrganizacyjnaType[]
     */
    public ?array $jednostkaOrganizacyjna = null;
    /**
     * Constructor method for setJednostkaOrganizacyjnaResponse
     * @uses SetJednostkaOrganizacyjnaResponse::setError()
     * @uses SetJednostkaOrganizacyjnaResponse::setJednostkaOrganizacyjna()
     * @param \App\ElektronicznyNadawca\StructType\ErrorType[] $error
     * @param \App\ElektronicznyNadawca\StructType\JednostkaOrganizacyjnaType[] $jednostkaOrganizacyjna
     */
    public function __construct(?array $error = null, ?array $jednostkaOrganizacyjna = null)
    {
        $this
            ->setError($error)
            ->setJednostkaOrganizacyjna($jednostkaOrganizacyjna);
    }
    /**
     * Get error value
     * @return \App\ElektronicznyNadawca\StructType\ErrorType[]
     */
    public function getError(): ?array
    {
        return $this->error;
    }
    /**
     * Set error value
     * @param \App\ElektronicznyNadawca\StructType\ErrorType[] $error
     * @return \App\ElektronicznyNadawca\StructType\SetJednostkaOrganizacyjnaResponse
     */
    public function setError(?array $error = null): self
    {
        $this->error = $error;
        
        return $this;
    }
    /**
     * Add item to error value
     * @throws InvalidArgumentException
     * @param \App\ElektronicznyNadawca\StructType\ErrorType $item
     * @return \App\ElektronicznyNadawca\StructType\SetJednostkaOrganizacyjnaResponse
     */
    public function addToError(\App\ElektronicznyNadawca\StructType\ErrorType $item): self
    {
        $this->error[] = $item;
        
        return $this;
    }
    /**
     * Get jednostkaOrganizacyjna value
     * @return \App\ElektronicznyNadawca\StructType\JednostkaOrganizacyjnaType[]
     */
    public function getJednostkaOrganizacyjna(): ?array
    {
        return $this->jednostkaOrganizacyjna;
    }
    /**
     * Set jednostkaOrganizacyjna value
     * @param \App\ElektronicznyNadawca\StructType\JednostkaOrganizacyjnaType[] $jednostkaOrganizacyjna
     * @return \App\ElektronicznyNadawca\StructType\SetJednostkaOrganizacyjnaResponse
     */
    public function setJednostkaOrganizacyjna(?array $jednostkaOrganizacyjna = null): self
    {
        $this->jednostkaOrganizacyjna = $jednostkaOrganizacyjna;
        
        return $this;
    }
    /**
     * Add item to jednostkaOrganizacyjna value
     * @throws InvalidArgumentException
     * @param \App\ElektronicznyNadawca\StructType\JednostkaOrganizacyjnaType $item
     * @return \App\ElektronicznyNadawca\StructType\SetJednostkaOrganizacyjnaResponse
     */
    public function addToJednostkaOrganizacyjna(\App\ElektronicznyNadawca\StructType\JednostkaOrganizacyjnaType $item): self
    {
        $this->jednostkaOrganizacyjna[] = $item;
        
        return $this;
    }
}
