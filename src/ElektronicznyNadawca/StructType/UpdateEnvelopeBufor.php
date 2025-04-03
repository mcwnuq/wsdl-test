<?php

declare(strict_types=1);

namespace App\ElektronicznyNadawca\StructType;



/**
 * This class stands for updateEnvelopeBufor StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class UpdateEnvelopeBufor
{
    /**
     * The bufor
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 1
     * @var \App\ElektronicznyNadawca\StructType\BuforType[]
     */
    public array $bufor;
    /**
     * Constructor method for updateEnvelopeBufor
     * @uses UpdateEnvelopeBufor::setBufor()
     * @param \App\ElektronicznyNadawca\StructType\BuforType[] $bufor
     */
    public function __construct(array $bufor)
    {
        $this
            ->setBufor($bufor);
    }
    /**
     * Get bufor value
     * @return \App\ElektronicznyNadawca\StructType\BuforType[]
     */
    public function getBufor(): array
    {
        return $this->bufor;
    }
    /**
     * Set bufor value
     * @param \App\ElektronicznyNadawca\StructType\BuforType[] $bufor
     * @return \App\ElektronicznyNadawca\StructType\UpdateEnvelopeBufor
     */
    public function setBufor(array $bufor): self
    {
        $this->bufor = $bufor;
        
        return $this;
    }
    /**
     * Add item to bufor value
     * @throws InvalidArgumentException
     * @param \App\ElektronicznyNadawca\StructType\BuforType $item
     * @return \App\ElektronicznyNadawca\StructType\UpdateEnvelopeBufor
     */
    public function addToBufor(\App\ElektronicznyNadawca\StructType\BuforType $item): self
    {
        $this->bufor[] = $item;
        
        return $this;
    }
}
