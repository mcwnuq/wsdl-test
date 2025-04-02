<?php

declare(strict_types=1);

namespace App\ElektronicznyNadawca\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for przesylkaEZwrotPocztex2021Type StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class PrzesylkaEZwrotPocztex2021Type extends PrzesylkaRejestrowanaType
{
    /**
     * The format
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public string $format;
    /**
     * The numerNadaniaZwrot
     * Meta information extracted from the WSDL
     * - base: xsd:string
     * - maxLength: 20
     * - minLength: 10
     * @var string|null
     */
    public ?string $numerNadaniaZwrot = null;
    /**
     * The idSklepEZwrot
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var int|null
     */
    public ?int $idSklepEZwrot = null;
    /**
     * Constructor method for przesylkaEZwrotPocztex2021Type
     * @uses PrzesylkaEZwrotPocztex2021Type::setFormat()
     * @uses PrzesylkaEZwrotPocztex2021Type::setNumerNadaniaZwrot()
     * @uses PrzesylkaEZwrotPocztex2021Type::setIdSklepEZwrot()
     * @param string $format
     * @param string $numerNadaniaZwrot
     * @param int $idSklepEZwrot
     */
    public function __construct(string $format, ?string $numerNadaniaZwrot = null, ?int $idSklepEZwrot = null)
    {
        $this
            ->setFormat($format)
            ->setNumerNadaniaZwrot($numerNadaniaZwrot)
            ->setIdSklepEZwrot($idSklepEZwrot);
    }
    /**
     * Get format value
     * @return string
     */
    public function getFormat(): string
    {
        return $this->format;
    }
    /**
     * Set format value
     * @param string $format
     * @return \App\ElektronicznyNadawca\StructType\PrzesylkaEZwrotPocztex2021Type
     */
    public function setFormat(string $format): self
    {
        $this->format = $format;
        
        return $this;
    }
    /**
     * Get numerNadaniaZwrot value
     * @return string|null
     */
    public function getNumerNadaniaZwrot(): ?string
    {
        return $this->numerNadaniaZwrot;
    }
    /**
     * Set numerNadaniaZwrot value
     * @param string $numerNadaniaZwrot
     * @return \App\ElektronicznyNadawca\StructType\PrzesylkaEZwrotPocztex2021Type
     */
    public function setNumerNadaniaZwrot(?string $numerNadaniaZwrot = null): self
    {
        $this->numerNadaniaZwrot = $numerNadaniaZwrot;
        
        return $this;
    }
    /**
     * Get idSklepEZwrot value
     * @return int|null
     */
    public function getIdSklepEZwrot(): ?int
    {
        return $this->idSklepEZwrot;
    }
    /**
     * Set idSklepEZwrot value
     * @param int $idSklepEZwrot
     * @return \App\ElektronicznyNadawca\StructType\PrzesylkaEZwrotPocztex2021Type
     */
    public function setIdSklepEZwrot(?int $idSklepEZwrot = null): self
    {
        $this->idSklepEZwrot = $idSklepEZwrot;
        
        return $this;
    }
}
