<?php

declare(strict_types=1);

namespace App\ElektronicznyNadawca\StructType;



/**
 * This class stands for setEnvelopeBuforDataNadania StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SetEnvelopeBuforDataNadania
{
    /**
     * The dataNadania
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public string $dataNadania;
    /**
     * Constructor method for setEnvelopeBuforDataNadania
     * @uses SetEnvelopeBuforDataNadania::setDataNadania()
     * @param string $dataNadania
     */
    public function __construct(string $dataNadania)
    {
        $this
            ->setDataNadania($dataNadania);
    }
    /**
     * Get dataNadania value
     * @return string
     */
    public function getDataNadania(): string
    {
        return $this->dataNadania;
    }
    /**
     * Set dataNadania value
     * @param string $dataNadania
     * @return \App\ElektronicznyNadawca\StructType\SetEnvelopeBuforDataNadania
     */
    public function setDataNadania(string $dataNadania): self
    {
        $this->dataNadania = $dataNadania;
        
        return $this;
    }
}
