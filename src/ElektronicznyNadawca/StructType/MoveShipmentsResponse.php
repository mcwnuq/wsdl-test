<?php

declare(strict_types=1);

namespace App\ElektronicznyNadawca\StructType;



/**
 * This class stands for moveShipmentsResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class MoveShipmentsResponse
{
    /**
     * The notMovedGuid
     * Meta information extracted from the WSDL
     * - base: xsd:string
     * - length: 32
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - whiteSpace: collapse
     * @var string[]
     */
    public ?array $notMovedGuid = null;
    /**
     * The error
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \App\ElektronicznyNadawca\StructType\ErrorType[]
     */
    public ?array $error = null;
    /**
     * Constructor method for moveShipmentsResponse
     * @uses MoveShipmentsResponse::setNotMovedGuid()
     * @uses MoveShipmentsResponse::setError()
     * @param string[] $notMovedGuid
     * @param \App\ElektronicznyNadawca\StructType\ErrorType[] $error
     */
    public function __construct(?array $notMovedGuid = null, ?array $error = null)
    {
        $this
            ->setNotMovedGuid($notMovedGuid)
            ->setError($error);
    }
    /**
     * Get notMovedGuid value
     * @return string[]
     */
    public function getNotMovedGuid(): ?array
    {
        return $this->notMovedGuid;
    }
    /**
     * Set notMovedGuid value
     * @param string[] $notMovedGuid
     * @return \App\ElektronicznyNadawca\StructType\MoveShipmentsResponse
     */
    public function setNotMovedGuid(?array $notMovedGuid = null): self
    {
        $this->notMovedGuid = $notMovedGuid;
        
        return $this;
    }
    /**
     * Add item to notMovedGuid value
     * @throws InvalidArgumentException
     * @param string $item
     * @return \App\ElektronicznyNadawca\StructType\MoveShipmentsResponse
     */
    public function addToNotMovedGuid(string $item): self
    {
        $this->notMovedGuid[] = $item;
        
        return $this;
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
     * @return \App\ElektronicznyNadawca\StructType\MoveShipmentsResponse
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
     * @return \App\ElektronicznyNadawca\StructType\MoveShipmentsResponse
     */
    public function addToError(\App\ElektronicznyNadawca\StructType\ErrorType $item): self
    {
        $this->error[] = $item;
        
        return $this;
    }
}
