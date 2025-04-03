<?php

declare(strict_types=1);

namespace App\ElektronicznyNadawca\StructType;



/**
 * This class stands for addZalacznikDoReklamacji StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class AddZalacznikDoReklamacji
{
    /**
     * The idReklamacja
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public string $idReklamacja;
    /**
     * The zalacznik
     * Meta information extracted from the WSDL
     * - maxOccurs: 5
     * - minOccurs: 1
     * @var \App\ElektronicznyNadawca\StructType\ZalacznikDoReklamacjiType[]
     */
    public array $zalacznik;
    /**
     * Constructor method for addZalacznikDoReklamacji
     * @uses AddZalacznikDoReklamacji::setIdReklamacja()
     * @uses AddZalacznikDoReklamacji::setZalacznik()
     * @param string $idReklamacja
     * @param \App\ElektronicznyNadawca\StructType\ZalacznikDoReklamacjiType[] $zalacznik
     */
    public function __construct(string $idReklamacja, array $zalacznik)
    {
        $this
            ->setIdReklamacja($idReklamacja)
            ->setZalacznik($zalacznik);
    }
    /**
     * Get idReklamacja value
     * @return string
     */
    public function getIdReklamacja(): string
    {
        return $this->idReklamacja;
    }
    /**
     * Set idReklamacja value
     * @param string $idReklamacja
     * @return \App\ElektronicznyNadawca\StructType\AddZalacznikDoReklamacji
     */
    public function setIdReklamacja(string $idReklamacja): self
    {
        $this->idReklamacja = $idReklamacja;
        
        return $this;
    }
    /**
     * Get zalacznik value
     * @return \App\ElektronicznyNadawca\StructType\ZalacznikDoReklamacjiType[]
     */
    public function getZalacznik(): array
    {
        return $this->zalacznik;
    }
    /**
     * Set zalacznik value
     * @param \App\ElektronicznyNadawca\StructType\ZalacznikDoReklamacjiType[] $zalacznik
     * @return \App\ElektronicznyNadawca\StructType\AddZalacznikDoReklamacji
     */
    public function setZalacznik(array $zalacznik): self
    {
        $this->zalacznik = $zalacznik;
        
        return $this;
    }
    /**
     * Add item to zalacznik value
     * @throws InvalidArgumentException
     * @param \App\ElektronicznyNadawca\StructType\ZalacznikDoReklamacjiType $item
     * @return \App\ElektronicznyNadawca\StructType\AddZalacznikDoReklamacji
     */
    public function addToZalacznik(\App\ElektronicznyNadawca\StructType\ZalacznikDoReklamacjiType $item): self
    {
        $this->zalacznik[] = $item;
        
        return $this;
    }
}
