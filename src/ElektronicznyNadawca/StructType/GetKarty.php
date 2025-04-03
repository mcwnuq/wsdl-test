<?php

declare(strict_types=1);

namespace App\ElektronicznyNadawca\StructType;



/**
 * This class stands for getKarty StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetKarty
{
    /**
     * The idKarta
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var int[]
     */
    public ?array $idKarta = null;
    /**
     * Constructor method for getKarty
     * @uses GetKarty::setIdKarta()
     * @param int[] $idKarta
     */
    public function __construct(?array $idKarta = null)
    {
        $this
            ->setIdKarta($idKarta);
    }
    /**
     * Get idKarta value
     * @return int[]
     */
    public function getIdKarta(): ?array
    {
        return $this->idKarta;
    }
    /**
     * Set idKarta value
     * @param int[] $idKarta
     * @return \App\ElektronicznyNadawca\StructType\GetKarty
     */
    public function setIdKarta(?array $idKarta = null): self
    {
        $this->idKarta = $idKarta;
        
        return $this;
    }
    /**
     * Add item to idKarta value
     * @throws InvalidArgumentException
     * @param int $item
     * @return \App\ElektronicznyNadawca\StructType\GetKarty
     */
    public function addToIdKarta(int $item): self
    {
        $this->idKarta[] = $item;
        
        return $this;
    }
}
