<?php

declare(strict_types=1);

namespace App\ElektronicznyNadawca\StructType;



/**
 * This class stands for godzinyPracyOdDoType StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GodzinyPracyOdDoType
{
    /**
     * The od
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    public ?string $od = null;
    /**
     * The do
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    public ?string $do = null;
    /**
     * Constructor method for godzinyPracyOdDoType
     * @uses GodzinyPracyOdDoType::setOd()
     * @uses GodzinyPracyOdDoType::setDo()
     * @param string $od
     * @param string $do
     */
    public function __construct(?string $od = null, ?string $do = null)
    {
        $this
            ->setOd($od)
            ->setDo($do);
    }
    /**
     * Get od value
     * @return string|null
     */
    public function getOd(): ?string
    {
        return $this->od;
    }
    /**
     * Set od value
     * @param string $od
     * @return \App\ElektronicznyNadawca\StructType\GodzinyPracyOdDoType
     */
    public function setOd(?string $od = null): self
    {
        $this->od = $od;
        
        return $this;
    }
    /**
     * Get do value
     * @return string|null
     */
    public function getDo(): ?string
    {
        return $this->do;
    }
    /**
     * Set do value
     * @param string $do
     * @return \App\ElektronicznyNadawca\StructType\GodzinyPracyOdDoType
     */
    public function setDo(?string $do = null): self
    {
        $this->do = $do;
        
        return $this;
    }
}
