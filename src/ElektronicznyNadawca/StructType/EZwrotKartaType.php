<?php

declare(strict_types=1);

namespace App\ElektronicznyNadawca\StructType;



/**
 * This class stands for eZwrotKartaType StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class EZwrotKartaType
{
    /**
     * The idKarta
     * @var int|null
     */
    public ?int $idKarta = null;
    /**
     * The idAdresKorespondencyjny
     * @var int|null
     */
    public ?int $idAdresKorespondencyjny = null;
    /**
     * Constructor method for eZwrotKartaType
     * @uses EZwrotKartaType::setIdKarta()
     * @uses EZwrotKartaType::setIdAdresKorespondencyjny()
     * @param int $idKarta
     * @param int $idAdresKorespondencyjny
     */
    public function __construct(?int $idKarta = null, ?int $idAdresKorespondencyjny = null)
    {
        $this
            ->setIdKarta($idKarta)
            ->setIdAdresKorespondencyjny($idAdresKorespondencyjny);
    }
    /**
     * Get idKarta value
     * @return int|null
     */
    public function getIdKarta(): ?int
    {
        return $this->idKarta;
    }
    /**
     * Set idKarta value
     * @param int $idKarta
     * @return \App\ElektronicznyNadawca\StructType\EZwrotKartaType
     */
    public function setIdKarta(?int $idKarta = null): self
    {
        $this->idKarta = $idKarta;
        
        return $this;
    }
    /**
     * Get idAdresKorespondencyjny value
     * @return int|null
     */
    public function getIdAdresKorespondencyjny(): ?int
    {
        return $this->idAdresKorespondencyjny;
    }
    /**
     * Set idAdresKorespondencyjny value
     * @param int $idAdresKorespondencyjny
     * @return \App\ElektronicznyNadawca\StructType\EZwrotKartaType
     */
    public function setIdAdresKorespondencyjny(?int $idAdresKorespondencyjny = null): self
    {
        $this->idAdresKorespondencyjny = $idAdresKorespondencyjny;
        
        return $this;
    }
}
