<?php

declare(strict_types=1);

namespace App\ElektronicznyNadawca\StructType;



/**
 * This class stands for updateAccount StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class UpdateAccount
{
    /**
     * The account
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \App\ElektronicznyNadawca\StructType\AccountType
     */
    public \App\ElektronicznyNadawca\StructType\AccountType $account;
    /**
     * Constructor method for updateAccount
     * @uses UpdateAccount::setAccount()
     * @param \App\ElektronicznyNadawca\StructType\AccountType $account
     */
    public function __construct(\App\ElektronicznyNadawca\StructType\AccountType $account)
    {
        $this
            ->setAccount($account);
    }
    /**
     * Get account value
     * @return \App\ElektronicznyNadawca\StructType\AccountType
     */
    public function getAccount(): \App\ElektronicznyNadawca\StructType\AccountType
    {
        return $this->account;
    }
    /**
     * Set account value
     * @param \App\ElektronicznyNadawca\StructType\AccountType $account
     * @return \App\ElektronicznyNadawca\StructType\UpdateAccount
     */
    public function setAccount(\App\ElektronicznyNadawca\StructType\AccountType $account): self
    {
        $this->account = $account;
        
        return $this;
    }
}
