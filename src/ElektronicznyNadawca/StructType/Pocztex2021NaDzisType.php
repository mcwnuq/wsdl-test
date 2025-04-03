<?php

declare(strict_types=1);

namespace App\ElektronicznyNadawca\StructType;



/**
 * This class stands for pocztex2021NaDzisType StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class Pocztex2021NaDzisType extends Pocztex2021Type
{
    /**
     * The subPrzesylka
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \App\ElektronicznyNadawca\StructType\SubPocztex2021NaDzisType[]
     */
    public ?array $subPrzesylka = null;
    /**
     * The odleglosc
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var int|null
     */
    public ?int $odleglosc = null;
    /**
     * The obszar
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    public ?string $obszar = null;
    /**
     * Constructor method for pocztex2021NaDzisType
     * @uses Pocztex2021NaDzisType::setSubPrzesylka()
     * @uses Pocztex2021NaDzisType::setOdleglosc()
     * @uses Pocztex2021NaDzisType::setObszar()
     * @param \App\ElektronicznyNadawca\StructType\SubPocztex2021NaDzisType[] $subPrzesylka
     * @param int $odleglosc
     * @param string $obszar
     */
    public function __construct(?array $subPrzesylka = null, ?int $odleglosc = null, ?string $obszar = null)
    {
        $this
            ->setSubPrzesylka($subPrzesylka)
            ->setOdleglosc($odleglosc)
            ->setObszar($obszar);
    }
    /**
     * Get subPrzesylka value
     * @return \App\ElektronicznyNadawca\StructType\SubPocztex2021NaDzisType[]
     */
    public function getSubPrzesylka(): ?array
    {
        return $this->subPrzesylka;
    }
    /**
     * Set subPrzesylka value
     * @param \App\ElektronicznyNadawca\StructType\SubPocztex2021NaDzisType[] $subPrzesylka
     * @return \App\ElektronicznyNadawca\StructType\Pocztex2021NaDzisType
     */
    public function setSubPrzesylka(?array $subPrzesylka = null): self
    {
        $this->subPrzesylka = $subPrzesylka;
        
        return $this;
    }
    /**
     * Add item to subPrzesylka value
     * @throws InvalidArgumentException
     * @param \App\ElektronicznyNadawca\StructType\SubPocztex2021NaDzisType $item
     * @return \App\ElektronicznyNadawca\StructType\Pocztex2021NaDzisType
     */
    public function addToSubPrzesylka(\App\ElektronicznyNadawca\StructType\SubPocztex2021NaDzisType $item): self
    {
        $this->subPrzesylka[] = $item;
        
        return $this;
    }
    /**
     * Get odleglosc value
     * @return int|null
     */
    public function getOdleglosc(): ?int
    {
        return $this->odleglosc;
    }
    /**
     * Set odleglosc value
     * @param int $odleglosc
     * @return \App\ElektronicznyNadawca\StructType\Pocztex2021NaDzisType
     */
    public function setOdleglosc(?int $odleglosc = null): self
    {
        $this->odleglosc = $odleglosc;
        
        return $this;
    }
    /**
     * Get obszar value
     * @return string|null
     */
    public function getObszar(): ?string
    {
        return $this->obszar;
    }
    /**
     * Set obszar value
     * @param string $obszar
     * @return \App\ElektronicznyNadawca\StructType\Pocztex2021NaDzisType
     */
    public function setObszar(?string $obszar = null): self
    {
        $this->obszar = $obszar;
        
        return $this;
    }
}
