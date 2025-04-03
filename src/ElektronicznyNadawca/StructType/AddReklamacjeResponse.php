<?php

declare(strict_types=1);

namespace App\ElektronicznyNadawca\StructType;



/**
 * This class stands for addReklamacjeResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class AddReklamacjeResponse
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
     * The reklamacjaInfo
     * Meta information extracted from the WSDL
     * - maxOccurs: 500
     * - minOccurs: 0
     * @var \App\ElektronicznyNadawca\StructType\ReklamacjaInfoType[]
     */
    public ?array $reklamacjaInfo = null;
    /**
     * Constructor method for addReklamacjeResponse
     * @uses AddReklamacjeResponse::setError()
     * @uses AddReklamacjeResponse::setReklamacjaInfo()
     * @param \App\ElektronicznyNadawca\StructType\ErrorType[] $error
     * @param \App\ElektronicznyNadawca\StructType\ReklamacjaInfoType[] $reklamacjaInfo
     */
    public function __construct(?array $error = null, ?array $reklamacjaInfo = null)
    {
        $this
            ->setError($error)
            ->setReklamacjaInfo($reklamacjaInfo);
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
     * @return \App\ElektronicznyNadawca\StructType\AddReklamacjeResponse
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
     * @return \App\ElektronicznyNadawca\StructType\AddReklamacjeResponse
     */
    public function addToError(\App\ElektronicznyNadawca\StructType\ErrorType $item): self
    {
        $this->error[] = $item;
        
        return $this;
    }
    /**
     * Get reklamacjaInfo value
     * @return \App\ElektronicznyNadawca\StructType\ReklamacjaInfoType[]
     */
    public function getReklamacjaInfo(): ?array
    {
        return $this->reklamacjaInfo;
    }
    /**
     * Set reklamacjaInfo value
     * @param \App\ElektronicznyNadawca\StructType\ReklamacjaInfoType[] $reklamacjaInfo
     * @return \App\ElektronicznyNadawca\StructType\AddReklamacjeResponse
     */
    public function setReklamacjaInfo(?array $reklamacjaInfo = null): self
    {
        $this->reklamacjaInfo = $reklamacjaInfo;
        
        return $this;
    }
    /**
     * Add item to reklamacjaInfo value
     * @throws InvalidArgumentException
     * @param \App\ElektronicznyNadawca\StructType\ReklamacjaInfoType $item
     * @return \App\ElektronicznyNadawca\StructType\AddReklamacjeResponse
     */
    public function addToReklamacjaInfo(\App\ElektronicznyNadawca\StructType\ReklamacjaInfoType $item): self
    {
        $this->reklamacjaInfo[] = $item;
        
        return $this;
    }
}
