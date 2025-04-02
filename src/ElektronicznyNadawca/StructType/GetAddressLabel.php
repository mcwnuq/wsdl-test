<?php

declare(strict_types=1);

namespace App\ElektronicznyNadawca\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getAddressLabel StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetAddressLabel extends AbstractStructBase
{
    /**
     * The idEnvelope
     * @var int|null
     */
    public ?int $idEnvelope = null;
    /**
     * Constructor method for getAddressLabel
     * @uses GetAddressLabel::setIdEnvelope()
     * @param int $idEnvelope
     */
    public function __construct(?int $idEnvelope = null)
    {
        $this
            ->setIdEnvelope($idEnvelope);
    }
    /**
     * Get idEnvelope value
     * @return int|null
     */
    public function getIdEnvelope(): ?int
    {
        return $this->idEnvelope;
    }
    /**
     * Set idEnvelope value
     * @param int $idEnvelope
     * @return \App\ElektronicznyNadawca\StructType\GetAddressLabel
     */
    public function setIdEnvelope(?int $idEnvelope = null): self
    {
        $this->idEnvelope = $idEnvelope;
        
        return $this;
    }
}
