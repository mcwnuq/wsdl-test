<?php

namespace App\ElektronicznyNadawca;

class orderEasyReturnSolutionLabel
{

    /**
     * @var AddressType $senderAddress
     */
    protected $senderAddress = null;

    /**
     * @var AddressType $recipientAddress
     */
    protected $recipientAddress = null;

    /**
     * @var int $weight
     */
    protected $weight = null;

    /**
     * @var CustomsDeclarationType $customsDeclaration
     */
    protected $customsDeclaration = null;

    /**
     * @var DeliveryMethodType $deliveryMethod
     */
    protected $deliveryMethod = null;

    /**
     * @var string $description
     */
    protected $description = null;

    /**
     * @param AddressType $senderAddress
     * @param AddressType $recipientAddress
     * @param int $weight
     * @param CustomsDeclarationType $customsDeclaration
     * @param DeliveryMethodType $deliveryMethod
     * @param string $description
     */
    public function __construct($senderAddress, $recipientAddress, $weight, $customsDeclaration, $deliveryMethod, $description)
    {
      $this->senderAddress = $senderAddress;
      $this->recipientAddress = $recipientAddress;
      $this->weight = $weight;
      $this->customsDeclaration = $customsDeclaration;
      $this->deliveryMethod = $deliveryMethod;
      $this->description = $description;
    }

    /**
     * @return AddressType
     */
    public function getSenderAddress()
    {
      return $this->senderAddress;
    }

    /**
     * @param AddressType $senderAddress
     * @return \App\ElektronicznyNadawca\orderEasyReturnSolutionLabel
     */
    public function setSenderAddress($senderAddress)
    {
      $this->senderAddress = $senderAddress;
      return $this;
    }

    /**
     * @return AddressType
     */
    public function getRecipientAddress()
    {
      return $this->recipientAddress;
    }

    /**
     * @param AddressType $recipientAddress
     * @return \App\ElektronicznyNadawca\orderEasyReturnSolutionLabel
     */
    public function setRecipientAddress($recipientAddress)
    {
      $this->recipientAddress = $recipientAddress;
      return $this;
    }

    /**
     * @return int
     */
    public function getWeight()
    {
      return $this->weight;
    }

    /**
     * @param int $weight
     * @return \App\ElektronicznyNadawca\orderEasyReturnSolutionLabel
     */
    public function setWeight($weight)
    {
      $this->weight = $weight;
      return $this;
    }

    /**
     * @return CustomsDeclarationType
     */
    public function getCustomsDeclaration()
    {
      return $this->customsDeclaration;
    }

    /**
     * @param CustomsDeclarationType $customsDeclaration
     * @return \App\ElektronicznyNadawca\orderEasyReturnSolutionLabel
     */
    public function setCustomsDeclaration($customsDeclaration)
    {
      $this->customsDeclaration = $customsDeclaration;
      return $this;
    }

    /**
     * @return DeliveryMethodType
     */
    public function getDeliveryMethod()
    {
      return $this->deliveryMethod;
    }

    /**
     * @param DeliveryMethodType $deliveryMethod
     * @return \App\ElektronicznyNadawca\orderEasyReturnSolutionLabel
     */
    public function setDeliveryMethod($deliveryMethod)
    {
      $this->deliveryMethod = $deliveryMethod;
      return $this;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
      return $this->description;
    }

    /**
     * @param string $description
     * @return \App\ElektronicznyNadawca\orderEasyReturnSolutionLabel
     */
    public function setDescription($description)
    {
      $this->description = $description;
      return $this;
    }

}
