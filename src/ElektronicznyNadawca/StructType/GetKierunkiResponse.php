<?php

declare(strict_types=1);

namespace App\ElektronicznyNadawca\StructType;



/**
 * This class stands for getKierunkiResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetKierunkiResponse
{
    /**
     * The kierunek
     * Meta information extracted from the WSDL
     * - maxOccurs: 1000
     * - minOccurs: 0
     * @var \App\ElektronicznyNadawca\StructType\KierunekType[]
     */
    public ?array $kierunek = null;
    /**
     * The error
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \App\ElektronicznyNadawca\StructType\ErrorType[]
     */
    public ?array $error = null;
    /**
     * Constructor method for getKierunkiResponse
     * @uses GetKierunkiResponse::setKierunek()
     * @uses GetKierunkiResponse::setError()
     * @param \App\ElektronicznyNadawca\StructType\KierunekType[] $kierunek
     * @param \App\ElektronicznyNadawca\StructType\ErrorType[] $error
     */
    public function __construct(?array $kierunek = null, ?array $error = null)
    {
        $this
            ->setKierunek($kierunek)
            ->setError($error);
    }
    /**
     * Get kierunek value
     * @return \App\ElektronicznyNadawca\StructType\KierunekType[]
     */
    public function getKierunek(): ?array
    {
        return $this->kierunek;
    }
    /**
     * Set kierunek value
     * @param \App\ElektronicznyNadawca\StructType\KierunekType[] $kierunek
     * @return \App\ElektronicznyNadawca\StructType\GetKierunkiResponse
     */
    public function setKierunek(?array $kierunek = null): self
    {
        $this->kierunek = $kierunek;
        
        return $this;
    }
    /**
     * Add item to kierunek value
     * @throws InvalidArgumentException
     * @param \App\ElektronicznyNadawca\StructType\KierunekType $item
     * @return \App\ElektronicznyNadawca\StructType\GetKierunkiResponse
     */
    public function addToKierunek(\App\ElektronicznyNadawca\StructType\KierunekType $item): self
    {
        $this->kierunek[] = $item;
        
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
     * @return \App\ElektronicznyNadawca\StructType\GetKierunkiResponse
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
     * @return \App\ElektronicznyNadawca\StructType\GetKierunkiResponse
     */
    public function addToError(\App\ElektronicznyNadawca\StructType\ErrorType $item): self
    {
        $this->error[] = $item;
        
        return $this;
    }
}
