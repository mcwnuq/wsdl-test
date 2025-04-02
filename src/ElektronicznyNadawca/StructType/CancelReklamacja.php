<?php

declare(strict_types=1);

namespace App\ElektronicznyNadawca\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for cancelReklamacja StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class CancelReklamacja extends AbstractStructBase
{
    /**
     * The idRelkamacja
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    public int $idRelkamacja;
    /**
     * Constructor method for cancelReklamacja
     * @uses CancelReklamacja::setIdRelkamacja()
     * @param int $idRelkamacja
     */
    public function __construct(int $idRelkamacja)
    {
        $this
            ->setIdRelkamacja($idRelkamacja);
    }
    /**
     * Get idRelkamacja value
     * @return int
     */
    public function getIdRelkamacja(): int
    {
        return $this->idRelkamacja;
    }
    /**
     * Set idRelkamacja value
     * @param int $idRelkamacja
     * @return \App\ElektronicznyNadawca\StructType\CancelReklamacja
     */
    public function setIdRelkamacja(int $idRelkamacja): self
    {
        $this->idRelkamacja = $idRelkamacja;
        
        return $this;
    }
}
