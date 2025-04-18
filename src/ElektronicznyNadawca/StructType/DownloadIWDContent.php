<?php

declare(strict_types=1);

namespace App\ElektronicznyNadawca\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for downloadIWDContent StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class DownloadIWDContent extends AbstractStructBase
{
    /**
     * The idEnvelope
     * @var int|null
     */
    public ?int $idEnvelope = null;
    /**
     * Constructor method for downloadIWDContent
     * @uses DownloadIWDContent::setIdEnvelope()
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
     * @return \App\ElektronicznyNadawca\StructType\DownloadIWDContent
     */
    public function setIdEnvelope(?int $idEnvelope = null): self
    {
        $this->idEnvelope = $idEnvelope;
        
        return $this;
    }
}
