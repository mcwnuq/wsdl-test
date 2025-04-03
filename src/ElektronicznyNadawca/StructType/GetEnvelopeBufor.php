<?php

declare(strict_types=1);

namespace App\ElektronicznyNadawca\StructType;



/**
 * This class stands for getEnvelopeBufor StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetEnvelopeBufor
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
     * Constructor method for getEnvelopeBufor
     * @uses GetEnvelopeBufor::setIdBufor()
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
     * @return \App\ElektronicznyNadawca\StructType\GetEnvelopeBufor
     */
    public function setIdBufor(?int $idBufor = null): self
    {
        $this->idBufor = $idBufor;
        
        return $this;
    }
}
