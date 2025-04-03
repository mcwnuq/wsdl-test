<?php

declare(strict_types=1);

namespace App\ElektronicznyNadawca\StructType;



/**
 * This class stands for getAdditionalActivitiesList StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetAdditionalActivitiesList
{
    /**
     * The idKarta
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    public int $idKarta;
    /**
     * Constructor method for getAdditionalActivitiesList
     * @uses GetAdditionalActivitiesList::setIdKarta()
     * @param int $idKarta
     */
    public function __construct(int $idKarta)
    {
        $this
            ->setIdKarta($idKarta);
    }
    /**
     * Get idKarta value
     * @return int
     */
    public function getIdKarta(): int
    {
        return $this->idKarta;
    }
    /**
     * Set idKarta value
     * @param int $idKarta
     * @return \App\ElektronicznyNadawca\StructType\GetAdditionalActivitiesList
     */
    public function setIdKarta(int $idKarta): self
    {
        $this->idKarta = $idKarta;
        
        return $this;
    }
}
