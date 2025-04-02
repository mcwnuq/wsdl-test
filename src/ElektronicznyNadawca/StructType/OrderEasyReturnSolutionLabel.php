<?php

declare(strict_types=1);

namespace App\ElektronicznyNadawca\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for orderEasyReturnSolutionLabel StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class OrderEasyReturnSolutionLabel extends AbstractStructBase
{
    /**
     * The senderAddress
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \App\ElektronicznyNadawca\StructType\AddressType
     */
    public \App\ElektronicznyNadawca\StructType\AddressType $senderAddress;
    /**
     * The recipientAddress
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \App\ElektronicznyNadawca\StructType\AddressType
     */
    public \App\ElektronicznyNadawca\StructType\AddressType $recipientAddress;
    /**
     * The weight
     * Meta information extracted from the WSDL
     * - documentation: Shipment weight [g].
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var int|null
     */
    public ?int $weight = null;
    /**
     * The customsDeclaration
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \App\ElektronicznyNadawca\StructType\CustomsDeclarationType|null
     */
    public ?\App\ElektronicznyNadawca\StructType\CustomsDeclarationType $customsDeclaration = null;
    /**
     * The deliveryMethod
     * Meta information extracted from the WSDL
     * - documentation: If not set, getPrintForParcel method should be used to get label.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \App\ElektronicznyNadawca\StructType\DeliveryMethodType|null
     */
    public ?\App\ElektronicznyNadawca\StructType\DeliveryMethodType $deliveryMethod = null;
    /**
     * The description
     * Meta information extracted from the WSDL
     * - documentation: Description. maxLength: 30
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    public ?string $description = null;
    /**
     * Constructor method for orderEasyReturnSolutionLabel
     * @uses OrderEasyReturnSolutionLabel::setSenderAddress()
     * @uses OrderEasyReturnSolutionLabel::setRecipientAddress()
     * @uses OrderEasyReturnSolutionLabel::setWeight()
     * @uses OrderEasyReturnSolutionLabel::setCustomsDeclaration()
     * @uses OrderEasyReturnSolutionLabel::setDeliveryMethod()
     * @uses OrderEasyReturnSolutionLabel::setDescription()
     * @param \App\ElektronicznyNadawca\StructType\AddressType $senderAddress
     * @param \App\ElektronicznyNadawca\StructType\AddressType $recipientAddress
     * @param int $weight
     * @param \App\ElektronicznyNadawca\StructType\CustomsDeclarationType $customsDeclaration
     * @param \App\ElektronicznyNadawca\StructType\DeliveryMethodType $deliveryMethod
     * @param string $description
     */
    public function __construct(\App\ElektronicznyNadawca\StructType\AddressType $senderAddress, \App\ElektronicznyNadawca\StructType\AddressType $recipientAddress, ?int $weight = null, ?\App\ElektronicznyNadawca\StructType\CustomsDeclarationType $customsDeclaration = null, ?\App\ElektronicznyNadawca\StructType\DeliveryMethodType $deliveryMethod = null, ?string $description = null)
    {
        $this
            ->setSenderAddress($senderAddress)
            ->setRecipientAddress($recipientAddress)
            ->setWeight($weight)
            ->setCustomsDeclaration($customsDeclaration)
            ->setDeliveryMethod($deliveryMethod)
            ->setDescription($description);
    }
    /**
     * Get senderAddress value
     * @return \App\ElektronicznyNadawca\StructType\AddressType
     */
    public function getSenderAddress(): \App\ElektronicznyNadawca\StructType\AddressType
    {
        return $this->senderAddress;
    }
    /**
     * Set senderAddress value
     * @param \App\ElektronicznyNadawca\StructType\AddressType $senderAddress
     * @return \App\ElektronicznyNadawca\StructType\OrderEasyReturnSolutionLabel
     */
    public function setSenderAddress(\App\ElektronicznyNadawca\StructType\AddressType $senderAddress): self
    {
        $this->senderAddress = $senderAddress;
        
        return $this;
    }
    /**
     * Get recipientAddress value
     * @return \App\ElektronicznyNadawca\StructType\AddressType
     */
    public function getRecipientAddress(): \App\ElektronicznyNadawca\StructType\AddressType
    {
        return $this->recipientAddress;
    }
    /**
     * Set recipientAddress value
     * @param \App\ElektronicznyNadawca\StructType\AddressType $recipientAddress
     * @return \App\ElektronicznyNadawca\StructType\OrderEasyReturnSolutionLabel
     */
    public function setRecipientAddress(\App\ElektronicznyNadawca\StructType\AddressType $recipientAddress): self
    {
        $this->recipientAddress = $recipientAddress;
        
        return $this;
    }
    /**
     * Get weight value
     * @return int|null
     */
    public function getWeight(): ?int
    {
        return $this->weight;
    }
    /**
     * Set weight value
     * @param int $weight
     * @return \App\ElektronicznyNadawca\StructType\OrderEasyReturnSolutionLabel
     */
    public function setWeight(?int $weight = null): self
    {
        $this->weight = $weight;
        
        return $this;
    }
    /**
     * Get customsDeclaration value
     * @return \App\ElektronicznyNadawca\StructType\CustomsDeclarationType|null
     */
    public function getCustomsDeclaration(): ?\App\ElektronicznyNadawca\StructType\CustomsDeclarationType
    {
        return $this->customsDeclaration;
    }
    /**
     * Set customsDeclaration value
     * @param \App\ElektronicznyNadawca\StructType\CustomsDeclarationType $customsDeclaration
     * @return \App\ElektronicznyNadawca\StructType\OrderEasyReturnSolutionLabel
     */
    public function setCustomsDeclaration(?\App\ElektronicznyNadawca\StructType\CustomsDeclarationType $customsDeclaration = null): self
    {
        $this->customsDeclaration = $customsDeclaration;
        
        return $this;
    }
    /**
     * Get deliveryMethod value
     * @return \App\ElektronicznyNadawca\StructType\DeliveryMethodType|null
     */
    public function getDeliveryMethod(): ?\App\ElektronicznyNadawca\StructType\DeliveryMethodType
    {
        return $this->deliveryMethod;
    }
    /**
     * Set deliveryMethod value
     * @param \App\ElektronicznyNadawca\StructType\DeliveryMethodType $deliveryMethod
     * @return \App\ElektronicznyNadawca\StructType\OrderEasyReturnSolutionLabel
     */
    public function setDeliveryMethod(?\App\ElektronicznyNadawca\StructType\DeliveryMethodType $deliveryMethod = null): self
    {
        $this->deliveryMethod = $deliveryMethod;
        
        return $this;
    }
    /**
     * Get description value
     * @return string|null
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }
    /**
     * Set description value
     * @param string $description
     * @return \App\ElektronicznyNadawca\StructType\OrderEasyReturnSolutionLabel
     */
    public function setDescription(?string $description = null): self
    {
        $this->description = $description;
        
        return $this;
    }
}
