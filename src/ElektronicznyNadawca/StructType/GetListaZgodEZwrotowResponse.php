<?php

declare(strict_types=1);

namespace App\ElektronicznyNadawca\StructType;



/**
 * This class stands for getListaZgodEZwrotowResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetListaZgodEZwrotowResponse
{
    /**
     * The lista
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \App\ElektronicznyNadawca\StructType\OczekujeNaZgodeEZwrotType[]
     */
    public ?array $lista = null;
    /**
     * The error
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \App\ElektronicznyNadawca\StructType\ErrorType[]
     */
    public ?array $error = null;
    /**
     * Constructor method for getListaZgodEZwrotowResponse
     * @uses GetListaZgodEZwrotowResponse::setLista()
     * @uses GetListaZgodEZwrotowResponse::setError()
     * @param \App\ElektronicznyNadawca\StructType\OczekujeNaZgodeEZwrotType[] $lista
     * @param \App\ElektronicznyNadawca\StructType\ErrorType[] $error
     */
    public function __construct(?array $lista = null, ?array $error = null)
    {
        $this
            ->setLista($lista)
            ->setError($error);
    }
    /**
     * Get lista value
     * @return \App\ElektronicznyNadawca\StructType\OczekujeNaZgodeEZwrotType[]
     */
    public function getLista(): ?array
    {
        return $this->lista;
    }
    /**
     * Set lista value
     * @param \App\ElektronicznyNadawca\StructType\OczekujeNaZgodeEZwrotType[] $lista
     * @return \App\ElektronicznyNadawca\StructType\GetListaZgodEZwrotowResponse
     */
    public function setLista(?array $lista = null): self
    {
        $this->lista = $lista;
        
        return $this;
    }
    /**
     * Add item to lista value
     * @throws InvalidArgumentException
     * @param \App\ElektronicznyNadawca\StructType\OczekujeNaZgodeEZwrotType $item
     * @return \App\ElektronicznyNadawca\StructType\GetListaZgodEZwrotowResponse
     */
    public function addToLista(\App\ElektronicznyNadawca\StructType\OczekujeNaZgodeEZwrotType $item): self
    {
        $this->lista[] = $item;
        
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
     * @return \App\ElektronicznyNadawca\StructType\GetListaZgodEZwrotowResponse
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
     * @return \App\ElektronicznyNadawca\StructType\GetListaZgodEZwrotowResponse
     */
    public function addToError(\App\ElektronicznyNadawca\StructType\ErrorType $item): self
    {
        $this->error[] = $item;
        
        return $this;
    }
}
