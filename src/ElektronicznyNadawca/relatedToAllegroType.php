<?php

namespace App\ElektronicznyNadawca;

class relatedToAllegroType
{

    /**
     * @var relatedToAllegroIdType $id
     */
    protected $id = null;

    /**
     * @var relatedToAllegroSellerIdType $sellerId
     */
    protected $sellerId = null;

    /**
     * @var relatedToAllegroChannelType $channel
     */
    protected $channel = null;

    /**
     * @var relatedToAllegroDeliveryMethodType $deliveryMethod
     */
    protected $deliveryMethod = null;

    /**
     * @param relatedToAllegroIdType $id
     * @param relatedToAllegroSellerIdType $sellerId
     * @param relatedToAllegroChannelType $channel
     * @param relatedToAllegroDeliveryMethodType $deliveryMethod
     */
    public function __construct($id, $sellerId, $channel, $deliveryMethod)
    {
      $this->id = $id;
      $this->sellerId = $sellerId;
      $this->channel = $channel;
      $this->deliveryMethod = $deliveryMethod;
    }

    /**
     * @return relatedToAllegroIdType
     */
    public function getId()
    {
      return $this->id;
    }

    /**
     * @param relatedToAllegroIdType $id
     * @return \App\ElektronicznyNadawca\relatedToAllegroType
     */
    public function setId($id)
    {
      $this->id = $id;
      return $this;
    }

    /**
     * @return relatedToAllegroSellerIdType
     */
    public function getSellerId()
    {
      return $this->sellerId;
    }

    /**
     * @param relatedToAllegroSellerIdType $sellerId
     * @return \App\ElektronicznyNadawca\relatedToAllegroType
     */
    public function setSellerId($sellerId)
    {
      $this->sellerId = $sellerId;
      return $this;
    }

    /**
     * @return relatedToAllegroChannelType
     */
    public function getChannel()
    {
      return $this->channel;
    }

    /**
     * @param relatedToAllegroChannelType $channel
     * @return \App\ElektronicznyNadawca\relatedToAllegroType
     */
    public function setChannel($channel)
    {
      $this->channel = $channel;
      return $this;
    }

    /**
     * @return relatedToAllegroDeliveryMethodType
     */
    public function getDeliveryMethod()
    {
      return $this->deliveryMethod;
    }

    /**
     * @param relatedToAllegroDeliveryMethodType $deliveryMethod
     * @return \App\ElektronicznyNadawca\relatedToAllegroType
     */
    public function setDeliveryMethod($deliveryMethod)
    {
      $this->deliveryMethod = $deliveryMethod;
      return $this;
    }

}
