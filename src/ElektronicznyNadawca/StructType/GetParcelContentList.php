<?php

declare(strict_types=1);

namespace App\ElektronicznyNadawca\StructType;



/**
 * This class stands for getParcelContentList StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetParcelContentList
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
     * Constructor method for getParcelContentList
     * @uses GetParcelContentList::setIdKarta()
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
     * @return \App\ElektronicznyNadawca\StructType\GetParcelContentList
     */
    public function setIdKarta(int $idKarta): self
    {
        $this->idKarta = $idKarta;
        
        return $this;
    }
}
