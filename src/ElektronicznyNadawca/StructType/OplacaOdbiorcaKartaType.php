<?php

declare(strict_types=1);

namespace App\ElektronicznyNadawca\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for oplacaOdbiorcaKartaType StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class OplacaOdbiorcaKartaType extends AbstractStructBase
{
    /**
     * The idKarta
     * Meta information extracted from the WSDL
     * - documentation: Identyfikator karty odbiorcy opłacającego przesyłkę.
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    public int $idKarta;
    /**
     * The idAdresKorespondencyjny
     * Meta information extracted from the WSDL
     * - documentation: Identyfikator jednego z adresów korespondencyjnych zdefiniowanych dla karty. Wymagalny dla typ=ADRESAT_UMOWNY.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var int|null
     */
    public ?int $idAdresKorespondencyjny = null;
    /**
     * Constructor method for oplacaOdbiorcaKartaType
     * @uses OplacaOdbiorcaKartaType::setIdKarta()
     * @uses OplacaOdbiorcaKartaType::setIdAdresKorespondencyjny()
     * @param int $idKarta
     * @param int $idAdresKorespondencyjny
     */
    public function __construct(int $idKarta, ?int $idAdresKorespondencyjny = null)
    {
        $this
            ->setIdKarta($idKarta)
            ->setIdAdresKorespondencyjny($idAdresKorespondencyjny);
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
     * @return \App\ElektronicznyNadawca\StructType\OplacaOdbiorcaKartaType
     */
    public function setIdKarta(int $idKarta): self
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
     * @return \App\ElektronicznyNadawca\StructType\OplacaOdbiorcaKartaType
     */
    public function setIdAdresKorespondencyjny(?int $idAdresKorespondencyjny = null): self
    {
        $this->idAdresKorespondencyjny = $idAdresKorespondencyjny;
        
        return $this;
    }
}
