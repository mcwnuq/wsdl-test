<?php

declare(strict_types=1);

namespace App\ElektronicznyNadawca\StructType;



/**
 * This class stands for przesylkaHandlowaType StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class PrzesylkaHandlowaType extends PrzesylkaRejestrowanaType
{
    /**
     * The posteRestante
     * Meta information extracted from the WSDL
     * - default: false
     * - use: optional
     * @var bool|null
     */
    public ?bool $posteRestante = null;
    /**
     * The masa
     * Meta information extracted from the WSDL
     * - documentation: masa przesyłki podana w gramach
     * - base: xsd:int
     * - maxInclusive: 9999999
     * - minInclusive: 1
     * - use: optional
     * @var int|null
     */
    public ?int $masa = null;
    /**
     * Constructor method for przesylkaHandlowaType
     * @uses PrzesylkaHandlowaType::setPosteRestante()
     * @uses PrzesylkaHandlowaType::setMasa()
     * @param bool $posteRestante
     * @param int $masa
     */
    public function __construct(?bool $posteRestante = false, ?int $masa = null)
    {
        $this
            ->setPosteRestante($posteRestante)
            ->setMasa($masa);
    }
    /**
     * Get posteRestante value
     * @return bool|null
     */
    public function getPosteRestante(): ?bool
    {
        return $this->posteRestante;
    }
    /**
     * Set posteRestante value
     * @param bool $posteRestante
     * @return \App\ElektronicznyNadawca\StructType\PrzesylkaHandlowaType
     */
    public function setPosteRestante(?bool $posteRestante = false): self
    {
        $this->posteRestante = $posteRestante;
        
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
     * @return \App\ElektronicznyNadawca\StructType\PrzesylkaHandlowaType
     */
    public function setMasa(?int $masa = null): self
    {
        $this->masa = $masa;
        
        return $this;
    }
}
