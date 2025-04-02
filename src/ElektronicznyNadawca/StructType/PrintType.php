<?php

declare(strict_types=1);

namespace App\ElektronicznyNadawca\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PrintType StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class PrintType extends AbstractStructBase
{
    /**
     * The kind
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public string $kind;
    /**
     * The method
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public string $method;
    /**
     * The format
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    public ?string $format = null;
    /**
     * The resolution
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    public ?string $resolution = null;
    /**
     * Constructor method for PrintType
     * @uses PrintType::setKind()
     * @uses PrintType::setMethod()
     * @uses PrintType::setFormat()
     * @uses PrintType::setResolution()
     * @param string $kind
     * @param string $method
     * @param string $format
     * @param string $resolution
     */
    public function __construct(string $kind, string $method, ?string $format = null, ?string $resolution = null)
    {
        $this
            ->setKind($kind)
            ->setMethod($method)
            ->setFormat($format)
            ->setResolution($resolution);
    }
    /**
     * Get kind value
     * @return string
     */
    public function getKind(): string
    {
        return $this->kind;
    }
    /**
     * Set kind value
     * @param string $kind
     * @return \App\ElektronicznyNadawca\StructType\PrintType
     */
    public function setKind(string $kind): self
    {
        $this->kind = $kind;
        
        return $this;
    }
    /**
     * Get method value
     * @return string
     */
    public function getMethod(): string
    {
        return $this->method;
    }
    /**
     * Set method value
     * @param string $method
     * @return \App\ElektronicznyNadawca\StructType\PrintType
     */
    public function setMethod(string $method): self
    {
        $this->method = $method;
        
        return $this;
    }
    /**
     * Get format value
     * @return string|null
     */
    public function getFormat(): ?string
    {
        return $this->format;
    }
    /**
     * Set format value
     * @param string $format
     * @return \App\ElektronicznyNadawca\StructType\PrintType
     */
    public function setFormat(?string $format = null): self
    {
        $this->format = $format;
        
        return $this;
    }
    /**
     * Get resolution value
     * @return string|null
     */
    public function getResolution(): ?string
    {
        return $this->resolution;
    }
    /**
     * Set resolution value
     * @param string $resolution
     * @return \App\ElektronicznyNadawca\StructType\PrintType
     */
    public function setResolution(?string $resolution = null): self
    {
        $this->resolution = $resolution;
        
        return $this;
    }
}
