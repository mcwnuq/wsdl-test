<?php

declare(strict_types=1);

namespace App\ElektronicznyNadawca\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for zwrotDokumentowBiznesowaType StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class ZwrotDokumentowBiznesowaType extends AbstractStructBase
{
    /**
     * The rodzaj
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public string $rodzaj;
    /**
     * The idDokumentyZwrotneAdresy
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var int|null
     */
    public ?int $idDokumentyZwrotneAdresy = null;
    /**
     * Constructor method for zwrotDokumentowBiznesowaType
     * @uses ZwrotDokumentowBiznesowaType::setRodzaj()
     * @uses ZwrotDokumentowBiznesowaType::setIdDokumentyZwrotneAdresy()
     * @param string $rodzaj
     * @param int $idDokumentyZwrotneAdresy
     */
    public function __construct(string $rodzaj, ?int $idDokumentyZwrotneAdresy = null)
    {
        $this
            ->setRodzaj($rodzaj)
            ->setIdDokumentyZwrotneAdresy($idDokumentyZwrotneAdresy);
    }
    /**
     * Get rodzaj value
     * @return string
     */
    public function getRodzaj(): string
    {
        return $this->rodzaj;
    }
    /**
     * Set rodzaj value
     * @param string $rodzaj
     * @return \App\ElektronicznyNadawca\StructType\ZwrotDokumentowBiznesowaType
     */
    public function setRodzaj(string $rodzaj): self
    {
        $this->rodzaj = $rodzaj;
        
        return $this;
    }
    /**
     * Get idDokumentyZwrotneAdresy value
     * @return int|null
     */
    public function getIdDokumentyZwrotneAdresy(): ?int
    {
        return $this->idDokumentyZwrotneAdresy;
    }
    /**
     * Set idDokumentyZwrotneAdresy value
     * @param int $idDokumentyZwrotneAdresy
     * @return \App\ElektronicznyNadawca\StructType\ZwrotDokumentowBiznesowaType
     */
    public function setIdDokumentyZwrotneAdresy(?int $idDokumentyZwrotneAdresy = null): self
    {
        $this->idDokumentyZwrotneAdresy = $idDokumentyZwrotneAdresy;
        
        return $this;
    }
}
