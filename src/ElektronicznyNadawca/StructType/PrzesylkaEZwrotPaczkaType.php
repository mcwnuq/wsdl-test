<?php

declare(strict_types=1);

namespace App\ElektronicznyNadawca\StructType;



/**
 * This class stands for przesylkaEZwrotPaczkaType StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class PrzesylkaEZwrotPaczkaType extends PrzesylkaRejestrowanaType
{
    /**
     * The idSklepEZwrot
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var int|null
     */
    public ?int $idSklepEZwrot = null;
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
     * Constructor method for przesylkaEZwrotPaczkaType
     * @uses PrzesylkaEZwrotPaczkaType::setIdSklepEZwrot()
     * @uses PrzesylkaEZwrotPaczkaType::setNumerNadaniaZwrot()
     * @param int $idSklepEZwrot
     * @param string $numerNadaniaZwrot
     */
    public function __construct(?int $idSklepEZwrot = null, ?string $numerNadaniaZwrot = null)
    {
        $this
            ->setIdSklepEZwrot($idSklepEZwrot)
            ->setNumerNadaniaZwrot($numerNadaniaZwrot);
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
     * @return \App\ElektronicznyNadawca\StructType\PrzesylkaEZwrotPaczkaType
     */
    public function setIdSklepEZwrot(?int $idSklepEZwrot = null): self
    {
        $this->idSklepEZwrot = $idSklepEZwrot;
        
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
     * @return \App\ElektronicznyNadawca\StructType\PrzesylkaEZwrotPaczkaType
     */
    public function setNumerNadaniaZwrot(?string $numerNadaniaZwrot = null): self
    {
        $this->numerNadaniaZwrot = $numerNadaniaZwrot;
        
        return $this;
    }
}
