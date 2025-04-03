<?php

declare(strict_types=1);

namespace App\ElektronicznyNadawca\StructType;



/**
 * This class stands for relatedToAllegroType StructType
 * Meta information extracted from the WSDL
 * - documentation: Opcjonalne informacje o powiązaniu przesyłki ze sprzedażą w serwisie Allegro
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class RelatedToAllegroType
{
    /**
     * The id
     * Meta information extracted from the WSDL
     * - documentation: Id transakcji (MS), deal (WebAPI) lub order (RestAPI)
     * - base: xsd:string
     * - maxLength: 38
     * - minLength: 1
     * @var string|null
     */
    public ?string $id = null;
    /**
     * The sellerId
     * Meta information extracted from the WSDL
     * - documentation: Identyfikator sprzedającego w serwisie Allegro.
     * - base: xsd:string
     * - maxLength: 22
     * - minLength: 1
     * @var string|null
     */
    public ?string $sellerId = null;
    /**
     * The channel
     * Meta information extracted from the WSDL
     * - documentation: Źródło identyfikatora: MS - Menedżer Sprzedaży Allegro, WEB_API - WebAPI Allegro, REST_API - RestAPI Allegro.
     * @var string|null
     */
    public ?string $channel = null;
    /**
     * The deliveryMethod
     * Meta information extracted from the WSDL
     * - documentation: Identyfikator rodzaju dostawy, gdzie dla źródła: MS - nazwa rodzaju dostawy, WEB_API - id postaci liczby, REST_API - id postaci guid
     * - base: xsd:string
     * - maxLength: 128
     * - minLength: 1
     * @var string|null
     */
    public ?string $deliveryMethod = null;
    /**
     * Constructor method for relatedToAllegroType
     * @uses RelatedToAllegroType::setId()
     * @uses RelatedToAllegroType::setSellerId()
     * @uses RelatedToAllegroType::setChannel()
     * @uses RelatedToAllegroType::setDeliveryMethod()
     * @param string $id
     * @param string $sellerId
     * @param string $channel
     * @param string $deliveryMethod
     */
    public function __construct(?string $id = null, ?string $sellerId = null, ?string $channel = null, ?string $deliveryMethod = null)
    {
        $this
            ->setId($id)
            ->setSellerId($sellerId)
            ->setChannel($channel)
            ->setDeliveryMethod($deliveryMethod);
    }
    /**
     * Get id value
     * @return string|null
     */
    public function getId(): ?string
    {
        return $this->id;
    }
    /**
     * Set id value
     * @param string $id
     * @return \App\ElektronicznyNadawca\StructType\RelatedToAllegroType
     */
    public function setId(?string $id = null): self
    {
        $this->id = $id;
        
        return $this;
    }
    /**
     * Get sellerId value
     * @return string|null
     */
    public function getSellerId(): ?string
    {
        return $this->sellerId;
    }
    /**
     * Set sellerId value
     * @param string $sellerId
     * @return \App\ElektronicznyNadawca\StructType\RelatedToAllegroType
     */
    public function setSellerId(?string $sellerId = null): self
    {
        $this->sellerId = $sellerId;
        
        return $this;
    }
    /**
     * Get channel value
     * @return string|null
     */
    public function getChannel(): ?string
    {
        return $this->channel;
    }
    /**
     * Set channel value
     * @param string $channel
     * @return \App\ElektronicznyNadawca\StructType\RelatedToAllegroType
     */
    public function setChannel(?string $channel = null): self
    {
        $this->channel = $channel;
        
        return $this;
    }
    /**
     * Get deliveryMethod value
     * @return string|null
     */
    public function getDeliveryMethod(): ?string
    {
        return $this->deliveryMethod;
    }
    /**
     * Set deliveryMethod value
     * @param string $deliveryMethod
     * @return \App\ElektronicznyNadawca\StructType\RelatedToAllegroType
     */
    public function setDeliveryMethod(?string $deliveryMethod = null): self
    {
        $this->deliveryMethod = $deliveryMethod;
        
        return $this;
    }
}
