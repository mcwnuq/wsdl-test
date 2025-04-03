<?php

declare(strict_types=1);

namespace App\ElektronicznyNadawca\StructType;



/**
 * This class stands for getKartyResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetKartyResponse
{
    /**
     * The karta
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \App\ElektronicznyNadawca\StructType\KartaType[]
     */
    public ?array $karta = null;
    /**
     * The error
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \App\ElektronicznyNadawca\StructType\ErrorType[]
     */
    public ?array $error = null;
    /**
     * Constructor method for getKartyResponse
     * @uses GetKartyResponse::setKarta()
     * @uses GetKartyResponse::setError()
     * @param \App\ElektronicznyNadawca\StructType\KartaType[] $karta
     * @param \App\ElektronicznyNadawca\StructType\ErrorType[] $error
     */
    public function __construct(?array $karta = null, ?array $error = null)
    {
        $this
            ->setKarta($karta)
            ->setError($error);
    }
    /**
     * Get karta value
     * @return \App\ElektronicznyNadawca\StructType\KartaType[]
     */
    public function getKarta(): ?array
    {
        return $this->karta;
    }
    /**
     * Set karta value
     * @param \App\ElektronicznyNadawca\StructType\KartaType[] $karta
     * @return \App\ElektronicznyNadawca\StructType\GetKartyResponse
     */
    public function setKarta(?array $karta = null): self
    {
        $this->karta = $karta;
        
        return $this;
    }
    /**
     * Add item to karta value
     * @throws InvalidArgumentException
     * @param \App\ElektronicznyNadawca\StructType\KartaType $item
     * @return \App\ElektronicznyNadawca\StructType\GetKartyResponse
     */
    public function addToKarta(\App\ElektronicznyNadawca\StructType\KartaType $item): self
    {
        $this->karta[] = $item;
        
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
     * @return \App\ElektronicznyNadawca\StructType\GetKartyResponse
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
     * @return \App\ElektronicznyNadawca\StructType\GetKartyResponse
     */
    public function addToError(\App\ElektronicznyNadawca\StructType\ErrorType $item): self
    {
        $this->error[] = $item;
        
        return $this;
    }
}
