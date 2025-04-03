<?php

declare(strict_types=1);

namespace App\ElektronicznyNadawca\StructType;



/**
 * This class stands for getAccountListResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetAccountListResponse
{
    /**
     * The account
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \App\ElektronicznyNadawca\StructType\AccountType[]
     */
    public ?array $account = null;
    /**
     * Constructor method for getAccountListResponse
     * @uses GetAccountListResponse::setAccount()
     * @param \App\ElektronicznyNadawca\StructType\AccountType[] $account
     */
    public function __construct(?array $account = null)
    {
        $this
            ->setAccount($account);
    }
    /**
     * Get account value
     * @return \App\ElektronicznyNadawca\StructType\AccountType[]
     */
    public function getAccount(): ?array
    {
        return $this->account;
    }
    /**
     * Set account value
     * @param \App\ElektronicznyNadawca\StructType\AccountType[] $account
     * @return \App\ElektronicznyNadawca\StructType\GetAccountListResponse
     */
    public function setAccount(?array $account = null): self
    {
        $this->account = $account;
        
        return $this;
    }
    /**
     * Add item to account value
     * @throws InvalidArgumentException
     * @param \App\ElektronicznyNadawca\StructType\AccountType $item
     * @return \App\ElektronicznyNadawca\StructType\GetAccountListResponse
     */
    public function addToAccount(\App\ElektronicznyNadawca\StructType\AccountType $item): self
    {
        $this->account[] = $item;
        
        return $this;
    }
}
