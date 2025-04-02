<?php

declare(strict_types=1);

namespace App\ElektronicznyNadawca\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for addShipmentResponseItemType StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class AddShipmentResponseItemType extends AbstractStructBase
{
    /**
     * The guid
     * Meta information extracted from the WSDL
     * - base: xsd:string
     * - length: 32
     * - use: required
     * - whiteSpace: collapse
     * @var string
     */
    public string $guid;
    /**
     * The error
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \App\ElektronicznyNadawca\StructType\ErrorType[]
     */
    public ?array $error = null;
    /**
     * The numerNadania
     * Meta information extracted from the WSDL
     * - base: xsd:string
     * - maxLength: 20
     * - minLength: 10
     * @var string|null
     */
    public ?string $numerNadania = null;
    /**
     * The numerTransakcjiOdbioru
     * @var string|null
     */
    public ?string $numerTransakcjiOdbioru = null;
    /**
     * The numerListuPrzewozowego
     * @var string|null
     */
    public ?string $numerListuPrzewozowego = null;
    /**
     * Constructor method for addShipmentResponseItemType
     * @uses AddShipmentResponseItemType::setGuid()
     * @uses AddShipmentResponseItemType::setError()
     * @uses AddShipmentResponseItemType::setNumerNadania()
     * @uses AddShipmentResponseItemType::setNumerTransakcjiOdbioru()
     * @uses AddShipmentResponseItemType::setNumerListuPrzewozowego()
     * @param string $guid
     * @param \App\ElektronicznyNadawca\StructType\ErrorType[] $error
     * @param string $numerNadania
     * @param string $numerTransakcjiOdbioru
     * @param string $numerListuPrzewozowego
     */
    public function __construct(string $guid, ?array $error = null, ?string $numerNadania = null, ?string $numerTransakcjiOdbioru = null, ?string $numerListuPrzewozowego = null)
    {
        $this
            ->setGuid($guid)
            ->setError($error)
            ->setNumerNadania($numerNadania)
            ->setNumerTransakcjiOdbioru($numerTransakcjiOdbioru)
            ->setNumerListuPrzewozowego($numerListuPrzewozowego);
    }
    /**
     * Get guid value
     * @return string
     */
    public function getGuid(): string
    {
        return $this->guid;
    }
    /**
     * Set guid value
     * @param string $guid
     * @return \App\ElektronicznyNadawca\StructType\AddShipmentResponseItemType
     */
    public function setGuid(string $guid): self
    {
        $this->guid = $guid;
        
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
     * @return \App\ElektronicznyNadawca\StructType\AddShipmentResponseItemType
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
     * @return \App\ElektronicznyNadawca\StructType\AddShipmentResponseItemType
     */
    public function addToError(\App\ElektronicznyNadawca\StructType\ErrorType $item): self
    {
        $this->error[] = $item;
        
        return $this;
    }
    /**
     * Get numerNadania value
     * @return string|null
     */
    public function getNumerNadania(): ?string
    {
        return $this->numerNadania;
    }
    /**
     * Set numerNadania value
     * @param string $numerNadania
     * @return \App\ElektronicznyNadawca\StructType\AddShipmentResponseItemType
     */
    public function setNumerNadania(?string $numerNadania = null): self
    {
        $this->numerNadania = $numerNadania;
        
        return $this;
    }
    /**
     * Get numerTransakcjiOdbioru value
     * @return string|null
     */
    public function getNumerTransakcjiOdbioru(): ?string
    {
        return $this->numerTransakcjiOdbioru;
    }
    /**
     * Set numerTransakcjiOdbioru value
     * @param string $numerTransakcjiOdbioru
     * @return \App\ElektronicznyNadawca\StructType\AddShipmentResponseItemType
     */
    public function setNumerTransakcjiOdbioru(?string $numerTransakcjiOdbioru = null): self
    {
        $this->numerTransakcjiOdbioru = $numerTransakcjiOdbioru;
        
        return $this;
    }
    /**
     * Get numerListuPrzewozowego value
     * @return string|null
     */
    public function getNumerListuPrzewozowego(): ?string
    {
        return $this->numerListuPrzewozowego;
    }
    /**
     * Set numerListuPrzewozowego value
     * @param string $numerListuPrzewozowego
     * @return \App\ElektronicznyNadawca\StructType\AddShipmentResponseItemType
     */
    public function setNumerListuPrzewozowego(?string $numerListuPrzewozowego = null): self
    {
        $this->numerListuPrzewozowego = $numerListuPrzewozowego;
        
        return $this;
    }
}
