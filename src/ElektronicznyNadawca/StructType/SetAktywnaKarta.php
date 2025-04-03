<?php

declare(strict_types=1);

namespace App\ElektronicznyNadawca\StructType;



/**
 * This class stands for setAktywnaKarta StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SetAktywnaKarta
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
     * Constructor method for setAktywnaKarta
     * @uses SetAktywnaKarta::setIdKarta()
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
     * @return \App\ElektronicznyNadawca\StructType\SetAktywnaKarta
     */
    public function setIdKarta(int $idKarta): self
    {
        $this->idKarta = $idKarta;
        
        return $this;
    }
}
