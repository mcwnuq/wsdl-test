<?php

declare(strict_types=1);

namespace App\ElektronicznyNadawca\StructType;



/**
 * This class stands for adresKorespondencyjny StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class AdresKorespondencyjny extends AdresType
{
    /**
     * The id
     * Meta information extracted from the WSDL
     * - documentation: Identyfikator adresu korespondencyjnego
     * @var int|null
     */
    public ?int $id = null;
    /**
     * Constructor method for adresKorespondencyjny
     * @uses AdresKorespondencyjny::setId()
     * @param int $id
     */
    public function __construct(?int $id = null)
    {
        $this
            ->setId($id);
    }
    /**
     * Get id value
     * @return int|null
     */
    public function getId(): ?int
    {
        return $this->id;
    }
    /**
     * Set id value
     * @param int $id
     * @return \App\ElektronicznyNadawca\StructType\AdresKorespondencyjny
     */
    public function setId(?int $id = null): self
    {
        $this->id = $id;
        
        return $this;
    }
}
