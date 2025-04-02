<?php

declare(strict_types=1);

namespace App\ElektronicznyNadawca\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getOutboxBook StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetOutboxBook extends AbstractStructBase
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
     * The includeNierejestrowane
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool|null
     */
    public ?bool $includeNierejestrowane = null;
    /**
     * Constructor method for getOutboxBook
     * @uses GetOutboxBook::setIdEnvelope()
     * @uses GetOutboxBook::setIncludeNierejestrowane()
     * @param int $idEnvelope
     * @param bool $includeNierejestrowane
     */
    public function __construct(int $idEnvelope, ?bool $includeNierejestrowane = null)
    {
        $this
            ->setIdEnvelope($idEnvelope)
            ->setIncludeNierejestrowane($includeNierejestrowane);
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
     * @return \App\ElektronicznyNadawca\StructType\GetOutboxBook
     */
    public function setIdEnvelope(int $idEnvelope): self
    {
        $this->idEnvelope = $idEnvelope;
        
        return $this;
    }
    /**
     * Get includeNierejestrowane value
     * @return bool|null
     */
    public function getIncludeNierejestrowane(): ?bool
    {
        return $this->includeNierejestrowane;
    }
    /**
     * Set includeNierejestrowane value
     * @param bool $includeNierejestrowane
     * @return \App\ElektronicznyNadawca\StructType\GetOutboxBook
     */
    public function setIncludeNierejestrowane(?bool $includeNierejestrowane = null): self
    {
        $this->includeNierejestrowane = $includeNierejestrowane;
        
        return $this;
    }
}
