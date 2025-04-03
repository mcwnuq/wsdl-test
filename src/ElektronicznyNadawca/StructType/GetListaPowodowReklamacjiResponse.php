<?php

declare(strict_types=1);

namespace App\ElektronicznyNadawca\StructType;



/**
 * This class stands for getListaPowodowReklamacjiResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetListaPowodowReklamacjiResponse
{
    /**
     * The kategoriePowodowReklamacji
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 1
     * @var \App\ElektronicznyNadawca\StructType\KategoriePowodowReklamacjiType[]
     */
    public array $kategoriePowodowReklamacji;
    /**
     * Constructor method for getListaPowodowReklamacjiResponse
     * @uses GetListaPowodowReklamacjiResponse::setKategoriePowodowReklamacji()
     * @param \App\ElektronicznyNadawca\StructType\KategoriePowodowReklamacjiType[] $kategoriePowodowReklamacji
     */
    public function __construct(array $kategoriePowodowReklamacji)
    {
        $this
            ->setKategoriePowodowReklamacji($kategoriePowodowReklamacji);
    }
    /**
     * Get kategoriePowodowReklamacji value
     * @return \App\ElektronicznyNadawca\StructType\KategoriePowodowReklamacjiType[]
     */
    public function getKategoriePowodowReklamacji(): array
    {
        return $this->kategoriePowodowReklamacji;
    }
    /**
     * Set kategoriePowodowReklamacji value
     * @param \App\ElektronicznyNadawca\StructType\KategoriePowodowReklamacjiType[] $kategoriePowodowReklamacji
     * @return \App\ElektronicznyNadawca\StructType\GetListaPowodowReklamacjiResponse
     */
    public function setKategoriePowodowReklamacji(array $kategoriePowodowReklamacji): self
    {
        $this->kategoriePowodowReklamacji = $kategoriePowodowReklamacji;
        
        return $this;
    }
    /**
     * Add item to kategoriePowodowReklamacji value
     * @throws InvalidArgumentException
     * @param \App\ElektronicznyNadawca\StructType\KategoriePowodowReklamacjiType $item
     * @return \App\ElektronicznyNadawca\StructType\GetListaPowodowReklamacjiResponse
     */
    public function addToKategoriePowodowReklamacji(\App\ElektronicznyNadawca\StructType\KategoriePowodowReklamacjiType $item): self
    {
        $this->kategoriePowodowReklamacji[] = $item;
        
        return $this;
    }
}
