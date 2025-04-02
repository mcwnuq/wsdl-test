<?php

declare(strict_types=1);

namespace App\ElektronicznyNadawca\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for subPrzesylkaPaletowaType StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SubPrzesylkaPaletowaType extends PrzesylkaType
{
    /**
     * The paleta
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \App\ElektronicznyNadawca\StructType\PaletaType
     */
    public \App\ElektronicznyNadawca\StructType\PaletaType $paleta;
    /**
     * The zawartosc
     * @var string|null
     */
    public ?string $zawartosc = null;
    /**
     * The masa
     * Meta information extracted from the WSDL
     * - documentation: masa przesyłki podana w gramach
     * - base: xsd:int
     * - maxInclusive: 9999999
     * - minInclusive: 1
     * @var int|null
     */
    public ?int $masa = null;
    /**
     * Constructor method for subPrzesylkaPaletowaType
     * @uses SubPrzesylkaPaletowaType::setPaleta()
     * @uses SubPrzesylkaPaletowaType::setZawartosc()
     * @uses SubPrzesylkaPaletowaType::setMasa()
     * @param \App\ElektronicznyNadawca\StructType\PaletaType $paleta
     * @param string $zawartosc
     * @param int $masa
     */
    public function __construct(\App\ElektronicznyNadawca\StructType\PaletaType $paleta, ?string $zawartosc = null, ?int $masa = null)
    {
        $this
            ->setPaleta($paleta)
            ->setZawartosc($zawartosc)
            ->setMasa($masa);
    }
    /**
     * Get paleta value
     * @return \App\ElektronicznyNadawca\StructType\PaletaType
     */
    public function getPaleta(): \App\ElektronicznyNadawca\StructType\PaletaType
    {
        return $this->paleta;
    }
    /**
     * Set paleta value
     * @param \App\ElektronicznyNadawca\StructType\PaletaType $paleta
     * @return \App\ElektronicznyNadawca\StructType\SubPrzesylkaPaletowaType
     */
    public function setPaleta(\App\ElektronicznyNadawca\StructType\PaletaType $paleta): self
    {
        $this->paleta = $paleta;
        
        return $this;
    }
    /**
     * Get zawartosc value
     * @return string|null
     */
    public function getZawartosc(): ?string
    {
        return $this->zawartosc;
    }
    /**
     * Set zawartosc value
     * @param string $zawartosc
     * @return \App\ElektronicznyNadawca\StructType\SubPrzesylkaPaletowaType
     */
    public function setZawartosc(?string $zawartosc = null): self
    {
        $this->zawartosc = $zawartosc;
        
        return $this;
    }
    /**
     * Get masa value
     * @return int|null
     */
    public function getMasa(): ?int
    {
        return $this->masa;
    }
    /**
     * Set masa value
     * @param int $masa
     * @return \App\ElektronicznyNadawca\StructType\SubPrzesylkaPaletowaType
     */
    public function setMasa(?int $masa = null): self
    {
        $this->masa = $masa;
        
        return $this;
    }
}
