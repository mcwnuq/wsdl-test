<?php

declare(strict_types=1);

namespace App\ElektronicznyNadawca\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getLibrariesForLegalDepositsResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetLibrariesForLegalDepositsResponse extends AbstractStructBase
{
    /**
     * The libraryForLegalDeposit
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \App\ElektronicznyNadawca\StructType\LibraryForLegalDepositType[]
     */
    public ?array $libraryForLegalDeposit = null;
    /**
     * Constructor method for getLibrariesForLegalDepositsResponse
     * @uses GetLibrariesForLegalDepositsResponse::setLibraryForLegalDeposit()
     * @param \App\ElektronicznyNadawca\StructType\LibraryForLegalDepositType[] $libraryForLegalDeposit
     */
    public function __construct(?array $libraryForLegalDeposit = null)
    {
        $this
            ->setLibraryForLegalDeposit($libraryForLegalDeposit);
    }
    /**
     * Get libraryForLegalDeposit value
     * @return \App\ElektronicznyNadawca\StructType\LibraryForLegalDepositType[]
     */
    public function getLibraryForLegalDeposit(): ?array
    {
        return $this->libraryForLegalDeposit;
    }
    /**
     * Set libraryForLegalDeposit value
     * @param \App\ElektronicznyNadawca\StructType\LibraryForLegalDepositType[] $libraryForLegalDeposit
     * @return \App\ElektronicznyNadawca\StructType\GetLibrariesForLegalDepositsResponse
     */
    public function setLibraryForLegalDeposit(?array $libraryForLegalDeposit = null): self
    {
        $this->libraryForLegalDeposit = $libraryForLegalDeposit;
        
        return $this;
    }
    /**
     * Add item to libraryForLegalDeposit value
     * @throws InvalidArgumentException
     * @param \App\ElektronicznyNadawca\StructType\LibraryForLegalDepositType $item
     * @return \App\ElektronicznyNadawca\StructType\GetLibrariesForLegalDepositsResponse
     */
    public function addToLibraryForLegalDeposit(\App\ElektronicznyNadawca\StructType\LibraryForLegalDepositType $item): self
    {
        $this->libraryForLegalDeposit[] = $item;
        
        return $this;
    }
}
