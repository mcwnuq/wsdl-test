<?php

declare(strict_types=1);

namespace App\ElektronicznyNadawca\StructType;



/**
 * This class stands for errorType StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class ErrorType
{
    /**
     * The errorNumber
     * Meta information extracted from the WSDL
     * - default: 0
     * - use: optional
     * @var int|null
     */
    public ?int $errorNumber = null;
    /**
     * The errorDesc
     * Meta information extracted from the WSDL
     * - use: optional
     * @var string|null
     */
    public ?string $errorDesc = null;
    /**
     * The guid
     * Meta information extracted from the WSDL
     * - base: xsd:string
     * - length: 32
     * - whiteSpace: collapse
     * @var string|null
     */
    public ?string $guid = null;
    /**
     * Constructor method for errorType
     * @uses ErrorType::setErrorNumber()
     * @uses ErrorType::setErrorDesc()
     * @uses ErrorType::setGuid()
     * @param int $errorNumber
     * @param string $errorDesc
     * @param string $guid
     */
    public function __construct(?int $errorNumber = 0, ?string $errorDesc = null, ?string $guid = null)
    {
        $this
            ->setErrorNumber($errorNumber)
            ->setErrorDesc($errorDesc)
            ->setGuid($guid);
    }
    /**
     * Get errorNumber value
     * @return int|null
     */
    public function getErrorNumber(): ?int
    {
        return $this->errorNumber;
    }
    /**
     * Set errorNumber value
     * @param int $errorNumber
     * @return \App\ElektronicznyNadawca\StructType\ErrorType
     */
    public function setErrorNumber(?int $errorNumber = 0): self
    {
        $this->errorNumber = $errorNumber;
        
        return $this;
    }
    /**
     * Get errorDesc value
     * @return string|null
     */
    public function getErrorDesc(): ?string
    {
        return $this->errorDesc;
    }
    /**
     * Set errorDesc value
     * @param string $errorDesc
     * @return \App\ElektronicznyNadawca\StructType\ErrorType
     */
    public function setErrorDesc(?string $errorDesc = null): self
    {
        $this->errorDesc = $errorDesc;
        
        return $this;
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
     * @return \App\ElektronicznyNadawca\StructType\ErrorType
     */
    public function setGuid(?string $guid = null): self
    {
        $this->guid = $guid;
        
        return $this;
    }
}
