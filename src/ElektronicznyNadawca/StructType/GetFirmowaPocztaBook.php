<?php

declare(strict_types=1);

namespace App\ElektronicznyNadawca\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getFirmowaPocztaBook StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetFirmowaPocztaBook extends AbstractStructBase
{
    /**
     * The idEnvelope
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    public int $idEnvelope;
    /**
     * Constructor method for getFirmowaPocztaBook
     * @uses GetFirmowaPocztaBook::setIdEnvelope()
     * @param int $idEnvelope
     */
    public function __construct(int $idEnvelope)
    {
        $this
            ->setIdEnvelope($idEnvelope);
    }
    /**
     * Get idEnvelope value
     * @return int
     */
    public function getIdEnvelope(): int
    {
        return $this->idEnvelope;
    }
    /**
     * Set idEnvelope value
     * @param int $idEnvelope
     * @return \App\ElektronicznyNadawca\StructType\GetFirmowaPocztaBook
     */
    public function setIdEnvelope(int $idEnvelope): self
    {
        $this->idEnvelope = $idEnvelope;
        
        return $this;
    }
}
