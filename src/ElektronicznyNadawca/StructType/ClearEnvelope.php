<?php

declare(strict_types=1);

namespace App\ElektronicznyNadawca\StructType;



/**
 * This class stands for clearEnvelope StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class ClearEnvelope
{
    /**
     * The idBufor
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var int|null
     */
    public ?int $idBufor = null;
    /**
     * Constructor method for clearEnvelope
     * @uses ClearEnvelope::setIdBufor()
     * @param int $idBufor
     */
    public function __construct(?int $idBufor = null)
    {
        $this
            ->setIdBufor($idBufor);
    }
    /**
     * Get idBufor value
     * @return int|null
     */
    public function getIdBufor(): ?int
    {
        return $this->idBufor;
    }
    /**
     * Set idBufor value
     * @param int $idBufor
     * @return \App\ElektronicznyNadawca\StructType\ClearEnvelope
     */
    public function setIdBufor(?int $idBufor = null): self
    {
        $this->idBufor = $idBufor;
        
        return $this;
    }
}
