<?php

declare(strict_types=1);

namespace App\ElektronicznyNadawca\StructType;



/**
 * This class stands for kategoriePowodowReklamacjiType StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class KategoriePowodowReklamacjiType
{
    /**
     * The nazwa
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public string $nazwa;
    /**
     * The powodReklamacji
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 1
     * @var \App\ElektronicznyNadawca\StructType\PowodReklamacjiType[]
     */
    public array $powodReklamacji;
    /**
     * Constructor method for kategoriePowodowReklamacjiType
     * @uses KategoriePowodowReklamacjiType::setNazwa()
     * @uses KategoriePowodowReklamacjiType::setPowodReklamacji()
     * @param string $nazwa
     * @param \App\ElektronicznyNadawca\StructType\PowodReklamacjiType[] $powodReklamacji
     */
    public function __construct(string $nazwa, array $powodReklamacji)
    {
        $this
            ->setNazwa($nazwa)
            ->setPowodReklamacji($powodReklamacji);
    }
    /**
     * Get nazwa value
     * @return string
     */
    public function getNazwa(): string
    {
        return $this->nazwa;
    }
    /**
     * Set nazwa value
     * @param string $nazwa
     * @return \App\ElektronicznyNadawca\StructType\KategoriePowodowReklamacjiType
     */
    public function setNazwa(string $nazwa): self
    {
        $this->nazwa = $nazwa;
        
        return $this;
    }
    /**
     * Get powodReklamacji value
     * @return \App\ElektronicznyNadawca\StructType\PowodReklamacjiType[]
     */
    public function getPowodReklamacji(): array
    {
        return $this->powodReklamacji;
    }
    /**
     * Set powodReklamacji value
     * @param \App\ElektronicznyNadawca\StructType\PowodReklamacjiType[] $powodReklamacji
     * @return \App\ElektronicznyNadawca\StructType\KategoriePowodowReklamacjiType
     */
    public function setPowodReklamacji(array $powodReklamacji): self
    {
        $this->powodReklamacji = $powodReklamacji;
        
        return $this;
    }
    /**
     * Add item to powodReklamacji value
     * @throws InvalidArgumentException
     * @param \App\ElektronicznyNadawca\StructType\PowodReklamacjiType $item
     * @return \App\ElektronicznyNadawca\StructType\KategoriePowodowReklamacjiType
     */
    public function addToPowodReklamacji(\App\ElektronicznyNadawca\StructType\PowodReklamacjiType $item): self
    {
        $this->powodReklamacji[] = $item;
        
        return $this;
    }
}
