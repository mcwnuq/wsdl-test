<?php

declare(strict_types=1);

namespace App\ElektronicznyNadawca\StructType;



/**
 * This class stands for getEnvelopeBuforListResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetEnvelopeBuforListResponse
{
    /**
     * The bufor
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \App\ElektronicznyNadawca\StructType\BuforType[]
     */
    public ?array $bufor = null;
    /**
     * The error
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \App\ElektronicznyNadawca\StructType\ErrorType[]
     */
    public ?array $error = null;
    /**
     * Constructor method for getEnvelopeBuforListResponse
     * @uses GetEnvelopeBuforListResponse::setBufor()
     * @uses GetEnvelopeBuforListResponse::setError()
     * @param \App\ElektronicznyNadawca\StructType\BuforType[] $bufor
     * @param \App\ElektronicznyNadawca\StructType\ErrorType[] $error
     */
    public function __construct(?array $bufor = null, ?array $error = null)
    {
        $this
            ->setBufor($bufor)
            ->setError($error);
    }
    /**
     * Get bufor value
     * @return \App\ElektronicznyNadawca\StructType\BuforType[]
     */
    public function getBufor(): ?array
    {
        return $this->bufor;
    }
    /**
     * Set bufor value
     * @param \App\ElektronicznyNadawca\StructType\BuforType[] $bufor
     * @return \App\ElektronicznyNadawca\StructType\GetEnvelopeBuforListResponse
     */
    public function setBufor(?array $bufor = null): self
    {
        $this->bufor = $bufor;
        
        return $this;
    }
    /**
     * Add item to bufor value
     * @throws InvalidArgumentException
     * @param \App\ElektronicznyNadawca\StructType\BuforType $item
     * @return \App\ElektronicznyNadawca\StructType\GetEnvelopeBuforListResponse
     */
    public function addToBufor(\App\ElektronicznyNadawca\StructType\BuforType $item): self
    {
        $this->bufor[] = $item;
        
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
     * @return \App\ElektronicznyNadawca\StructType\GetEnvelopeBuforListResponse
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
     * @return \App\ElektronicznyNadawca\StructType\GetEnvelopeBuforListResponse
     */
    public function addToError(\App\ElektronicznyNadawca\StructType\ErrorType $item): self
    {
        $this->error[] = $item;
        
        return $this;
    }
}
