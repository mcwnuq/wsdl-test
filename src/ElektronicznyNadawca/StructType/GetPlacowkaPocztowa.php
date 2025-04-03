<?php

declare(strict_types=1);

namespace App\ElektronicznyNadawca\StructType;



/**
 * This class stands for getPlacowkaPocztowa StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetPlacowkaPocztowa
{
    /**
     * The pni
     * Meta information extracted from the WSDL
     * - maxOccurs: 5000
     * - minOccurs: 1
     * @var int[]
     */
    public array $pni;
    /**
     * Constructor method for getPlacowkaPocztowa
     * @uses GetPlacowkaPocztowa::setPni()
     * @param int[] $pni
     */
    public function __construct(array $pni)
    {
        $this
            ->setPni($pni);
    }
    /**
     * Get pni value
     * @return int[]
     */
    public function getPni(): array
    {
        return $this->pni;
    }
    /**
     * Set pni value
     * @param int[] $pni
     * @return \App\ElektronicznyNadawca\StructType\GetPlacowkaPocztowa
     */
    public function setPni(array $pni): self
    {
        $this->pni = $pni;
        
        return $this;
    }
    /**
     * Add item to pni value
     * @throws InvalidArgumentException
     * @param int $item
     * @return \App\ElektronicznyNadawca\StructType\GetPlacowkaPocztowa
     */
    public function addToPni(int $item): self
    {
        $this->pni[] = $item;
        
        return $this;
    }
}
