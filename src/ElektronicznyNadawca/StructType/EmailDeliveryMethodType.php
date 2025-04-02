<?php

declare(strict_types=1);

namespace App\ElektronicznyNadawca\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for EmailDeliveryMethodType StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class EmailDeliveryMethodType extends DeliveryMethodType
{
    /**
     * The email
     * Meta information extracted from the WSDL
     * - base: xsd:string
     * - maxLength: 50
     * - maxOccurs: 1
     * - minLength: 6
     * - minOccurs: 1
     * @var string
     */
    public string $email;
    /**
     * Constructor method for EmailDeliveryMethodType
     * @uses EmailDeliveryMethodType::setEmail()
     * @param string $email
     */
    public function __construct(string $email)
    {
        $this
            ->setEmail($email);
    }
    /**
     * Get email value
     * @return string
     */
    public function getEmail(): string
    {
        return $this->email;
    }
    /**
     * Set email value
     * @param string $email
     * @return \App\ElektronicznyNadawca\StructType\EmailDeliveryMethodType
     */
    public function setEmail(string $email): self
    {
        $this->email = $email;
        
        return $this;
    }
}
