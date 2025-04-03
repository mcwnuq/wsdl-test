<?php

declare(strict_types=1);

namespace App\ElektronicznyNadawca\StructType;



/**
 * This class stands for awizacjaType StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class AwizacjaType
{
    /**
     * The od
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public string $od;
    /**
     * The do
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public string $do;
    /**
     * Constructor method for awizacjaType
     * @uses AwizacjaType::setOd()
     * @uses AwizacjaType::setDo()
     * @param string $od
     * @param string $do
     */
    public function __construct(string $od, string $do)
    {
        $this
            ->setOd($od)
            ->setDo($do);
    }
    /**
     * Get od value
     * @return string
     */
    public function getOd(): string
    {
        return $this->od;
    }
    /**
     * Set od value
     * @param string $od
     * @return \App\ElektronicznyNadawca\StructType\AwizacjaType
     */
    public function setOd(string $od): self
    {
        $this->od = $od;
        
        return $this;
    }
    /**
     * Get do value
     * @return string
     */
    public function getDo(): string
    {
        return $this->do;
    }
    /**
     * Set do value
     * @param string $do
     * @return \App\ElektronicznyNadawca\StructType\AwizacjaType
     */
    public function setDo(string $do): self
    {
        $this->do = $do;
        
        return $this;
    }
}
