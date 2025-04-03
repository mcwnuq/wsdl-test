<?php

declare(strict_types=1);

namespace App\ElektronicznyNadawca\StructType;



/**
 * This class stands for getPrintForParcel StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetPrintForParcel
{
    /**
     * The guid
     * Meta information extracted from the WSDL
     * - documentation: parcels guids
     * - base: xsd:string
     * - length: 32
     * - maxOccurs: 500
     * - minOccurs: 1
     * - whiteSpace: collapse
     * @var string[]
     */
    public array $guid;
    /**
     * The type
     * Meta information extracted from the WSDL
     * - documentation: printout type
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \App\ElektronicznyNadawca\StructType\PrintType
     */
    public \App\ElektronicznyNadawca\StructType\PrintType $type;
    /**
     * Constructor method for getPrintForParcel
     * @uses GetPrintForParcel::setGuid()
     * @uses GetPrintForParcel::setType()
     * @param string[] $guid
     * @param \App\ElektronicznyNadawca\StructType\PrintType $type
     */
    public function __construct(array $guid, \App\ElektronicznyNadawca\StructType\PrintType $type)
    {
        $this
            ->setGuid($guid)
            ->setType($type);
    }
    /**
     * Get guid value
     * @return string[]
     */
    public function getGuid(): array
    {
        return $this->guid;
    }
    /**
     * Set guid value
     * @param string[] $guid
     * @return \App\ElektronicznyNadawca\StructType\GetPrintForParcel
     */
    public function setGuid(array $guid): self
    {
        $this->guid = $guid;
        
        return $this;
    }
    /**
     * Add item to guid value
     * @throws InvalidArgumentException
     * @param string $item
     * @return \App\ElektronicznyNadawca\StructType\GetPrintForParcel
     */
    public function addToGuid(string $item): self
    {
        $this->guid[] = $item;
        
        return $this;
    }
    /**
     * Get type value
     * @return \App\ElektronicznyNadawca\StructType\PrintType
     */
    public function getType(): \App\ElektronicznyNadawca\StructType\PrintType
    {
        return $this->type;
    }
    /**
     * Set type value
     * @param \App\ElektronicznyNadawca\StructType\PrintType $type
     * @return \App\ElektronicznyNadawca\StructType\GetPrintForParcel
     */
    public function setType(\App\ElektronicznyNadawca\StructType\PrintType $type): self
    {
        $this->type = $type;
        
        return $this;
    }
}
