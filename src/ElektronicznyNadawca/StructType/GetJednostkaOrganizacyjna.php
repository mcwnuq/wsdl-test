<?php

declare(strict_types=1);

namespace App\ElektronicznyNadawca\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getJednostkaOrganizacyjna StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetJednostkaOrganizacyjna extends AbstractStructBase
{
    /**
     * The jednostka
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \App\ElektronicznyNadawca\StructType\JednostkaOrganizacyjnaType|null
     */
    public ?\App\ElektronicznyNadawca\StructType\JednostkaOrganizacyjnaType $jednostka = null;
    /**
     * Constructor method for getJednostkaOrganizacyjna
     * @uses GetJednostkaOrganizacyjna::setJednostka()
     * @param \App\ElektronicznyNadawca\StructType\JednostkaOrganizacyjnaType $jednostka
     */
    public function __construct(?\App\ElektronicznyNadawca\StructType\JednostkaOrganizacyjnaType $jednostka = null)
    {
        $this
            ->setJednostka($jednostka);
    }
    /**
     * Get jednostka value
     * @return \App\ElektronicznyNadawca\StructType\JednostkaOrganizacyjnaType|null
     */
    public function getJednostka(): ?\App\ElektronicznyNadawca\StructType\JednostkaOrganizacyjnaType
    {
        return $this->jednostka;
    }
    /**
     * Set jednostka value
     * @param \App\ElektronicznyNadawca\StructType\JednostkaOrganizacyjnaType $jednostka
     * @return \App\ElektronicznyNadawca\StructType\GetJednostkaOrganizacyjna
     */
    public function setJednostka(?\App\ElektronicznyNadawca\StructType\JednostkaOrganizacyjnaType $jednostka = null): self
    {
        $this->jednostka = $jednostka;
        
        return $this;
    }
}
