<?php

declare(strict_types=1);

namespace App\ElektronicznyNadawca\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PrintResultType StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class PrintResultType extends AbstractStructBase
{
    /**
     * The guid
     * Meta information extracted from the WSDL
     * - base: xsd:string
     * - length: 32
     * - maxOccurs: 1
     * - minOccurs: 0
     * - whiteSpace: collapse
     * @var string|null
     */
    public ?string $guid = null;
    /**
     * The print
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    public ?string $print = null;
    /**
     * Constructor method for PrintResultType
     * @uses PrintResultType::setGuid()
     * @uses PrintResultType::setPrint()
     * @param string $guid
     * @param string $print
     */
    public function __construct(?string $guid = null, ?string $print = null)
    {
        $this
            ->setGuid($guid)
            ->setPrint($print);
    }
    /**
     * Get guid value
     * @return string|null
     */
    public function getGuid(): ?string
    {
        return $this->guid;
    }
    /**
     * Set guid value
     * @param string $guid
     * @return \App\ElektronicznyNadawca\StructType\PrintResultType
     */
    public function setGuid(?string $guid = null): self
    {
        $this->guid = $guid;
        
        return $this;
    }
    /**
     * Get print value
     * @return string|null
     */
    public function getPrint(): ?string
    {
        return $this->print;
    }
    /**
     * Set print value
     * @param string $print
     * @return \App\ElektronicznyNadawca\StructType\PrintResultType
     */
    public function setPrint(?string $print = null): self
    {
        $this->print = $print;
        
        return $this;
    }
}
