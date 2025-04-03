<?php

declare(strict_types=1);

namespace App\ElektronicznyNadawca\StructType;



/**
 * This class stands for CustomsDeclarationType StructType
 * Meta information extracted from the WSDL
 * - maxOccurs: 1
 * - minOccurs: 0
 * - type: xsd:string
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class CustomsDeclarationType
{
    /**
     * The content
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public string $content;
    /**
     * The currencyCode
     * Meta information extracted from the WSDL
     * - documentation: Code (ISO 4217) of the currency in which the values of the items specified in the shipmentContentsDetails element are expressed. example: EUR
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public string $currencyCode;
    /**
     * The shipmentContentsDetails
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 1
     * @var \App\ElektronicznyNadawca\StructType\ShipmentContentsDetailsType[]
     */
    public array $shipmentContentsDetails;
    /**
     * The type
     * Meta information extracted from the WSDL
     * - documentation: CN type.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    public ?string $type = null;
    /**
     * The accompanyingDocuments
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \App\ElektronicznyNadawca\StructType\AccompanyingDocumentsType[]
     */
    public ?array $accompanyingDocuments = null;
    /**
     * The explanation
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    public ?string $explanation = null;
    /**
     * The postalCharges
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    public ?string $postalCharges = null;
    /**
     * The comments
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    public ?string $comments = null;
    /**
     * The importerReferenceNumber
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    public ?string $importerReferenceNumber = null;
    /**
     * The importerPhoneNumber
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    public ?string $importerPhoneNumber = null;
    /**
     * The customsReferenceNumber
     * @var string|null
     */
    public ?string $customsReferenceNumber = null;
    /**
     * Constructor method for CustomsDeclarationType
     * @uses CustomsDeclarationType::setContent()
     * @uses CustomsDeclarationType::setCurrencyCode()
     * @uses CustomsDeclarationType::setShipmentContentsDetails()
     * @uses CustomsDeclarationType::setType()
     * @uses CustomsDeclarationType::setAccompanyingDocuments()
     * @uses CustomsDeclarationType::setExplanation()
     * @uses CustomsDeclarationType::setPostalCharges()
     * @uses CustomsDeclarationType::setComments()
     * @uses CustomsDeclarationType::setImporterReferenceNumber()
     * @uses CustomsDeclarationType::setImporterPhoneNumber()
     * @uses CustomsDeclarationType::setCustomsReferenceNumber()
     * @param string $content
     * @param string $currencyCode
     * @param \App\ElektronicznyNadawca\StructType\ShipmentContentsDetailsType[] $shipmentContentsDetails
     * @param string $type
     * @param \App\ElektronicznyNadawca\StructType\AccompanyingDocumentsType[] $accompanyingDocuments
     * @param string $explanation
     * @param string $postalCharges
     * @param string $comments
     * @param string $importerReferenceNumber
     * @param string $importerPhoneNumber
     * @param string $customsReferenceNumber
     */
    public function __construct(string $content, string $currencyCode, array $shipmentContentsDetails, ?string $type = null, ?array $accompanyingDocuments = null, ?string $explanation = null, ?string $postalCharges = null, ?string $comments = null, ?string $importerReferenceNumber = null, ?string $importerPhoneNumber = null, ?string $customsReferenceNumber = null)
    {
        $this
            ->setContent($content)
            ->setCurrencyCode($currencyCode)
            ->setShipmentContentsDetails($shipmentContentsDetails)
            ->setType($type)
            ->setAccompanyingDocuments($accompanyingDocuments)
            ->setExplanation($explanation)
            ->setPostalCharges($postalCharges)
            ->setComments($comments)
            ->setImporterReferenceNumber($importerReferenceNumber)
            ->setImporterPhoneNumber($importerPhoneNumber)
            ->setCustomsReferenceNumber($customsReferenceNumber);
    }
    /**
     * Get content value
     * @return string
     */
    public function getContent(): string
    {
        return $this->content;
    }
    /**
     * Set content value
     * @param string $content
     * @return \App\ElektronicznyNadawca\StructType\CustomsDeclarationType
     */
    public function setContent(string $content): self
    {
        $this->content = $content;
        
        return $this;
    }
    /**
     * Get currencyCode value
     * @return string
     */
    public function getCurrencyCode(): string
    {
        return $this->currencyCode;
    }
    /**
     * Set currencyCode value
     * @param string $currencyCode
     * @return \App\ElektronicznyNadawca\StructType\CustomsDeclarationType
     */
    public function setCurrencyCode(string $currencyCode): self
    {
        $this->currencyCode = $currencyCode;
        
        return $this;
    }
    /**
     * Get shipmentContentsDetails value
     * @return \App\ElektronicznyNadawca\StructType\ShipmentContentsDetailsType[]
     */
    public function getShipmentContentsDetails(): array
    {
        return $this->shipmentContentsDetails;
    }
    /**
     * Set shipmentContentsDetails value
     * @param \App\ElektronicznyNadawca\StructType\ShipmentContentsDetailsType[] $shipmentContentsDetails
     * @return \App\ElektronicznyNadawca\StructType\CustomsDeclarationType
     */
    public function setShipmentContentsDetails(array $shipmentContentsDetails): self
    {
        $this->shipmentContentsDetails = $shipmentContentsDetails;
        
        return $this;
    }
    /**
     * Add item to shipmentContentsDetails value
     * @throws InvalidArgumentException
     * @param \App\ElektronicznyNadawca\StructType\ShipmentContentsDetailsType $item
     * @return \App\ElektronicznyNadawca\StructType\CustomsDeclarationType
     */
    public function addToShipmentContentsDetails(\App\ElektronicznyNadawca\StructType\ShipmentContentsDetailsType $item): self
    {
        $this->shipmentContentsDetails[] = $item;
        
        return $this;
    }
    /**
     * Get type value
     * @return string|null
     */
    public function getType(): ?string
    {
        return $this->type;
    }
    /**
     * Set type value
     * @param string $type
     * @return \App\ElektronicznyNadawca\StructType\CustomsDeclarationType
     */
    public function setType(?string $type = null): self
    {
        $this->type = $type;
        
        return $this;
    }
    /**
     * Get accompanyingDocuments value
     * @return \App\ElektronicznyNadawca\StructType\AccompanyingDocumentsType[]
     */
    public function getAccompanyingDocuments(): ?array
    {
        return $this->accompanyingDocuments;
    }
    /**
     * Set accompanyingDocuments value
     * @param \App\ElektronicznyNadawca\StructType\AccompanyingDocumentsType[] $accompanyingDocuments
     * @return \App\ElektronicznyNadawca\StructType\CustomsDeclarationType
     */
    public function setAccompanyingDocuments(?array $accompanyingDocuments = null): self
    {
        $this->accompanyingDocuments = $accompanyingDocuments;
        
        return $this;
    }
    /**
     * Add item to accompanyingDocuments value
     * @throws InvalidArgumentException
     * @param \App\ElektronicznyNadawca\StructType\AccompanyingDocumentsType $item
     * @return \App\ElektronicznyNadawca\StructType\CustomsDeclarationType
     */
    public function addToAccompanyingDocuments(\App\ElektronicznyNadawca\StructType\AccompanyingDocumentsType $item): self
    {
        $this->accompanyingDocuments[] = $item;
        
        return $this;
    }
    /**
     * Get explanation value
     * @return string|null
     */
    public function getExplanation(): ?string
    {
        return $this->explanation;
    }
    /**
     * Set explanation value
     * @param string $explanation
     * @return \App\ElektronicznyNadawca\StructType\CustomsDeclarationType
     */
    public function setExplanation(?string $explanation = null): self
    {
        $this->explanation = $explanation;
        
        return $this;
    }
    /**
     * Get postalCharges value
     * @return string|null
     */
    public function getPostalCharges(): ?string
    {
        return $this->postalCharges;
    }
    /**
     * Set postalCharges value
     * @param string $postalCharges
     * @return \App\ElektronicznyNadawca\StructType\CustomsDeclarationType
     */
    public function setPostalCharges(?string $postalCharges = null): self
    {
        $this->postalCharges = $postalCharges;
        
        return $this;
    }
    /**
     * Get comments value
     * @return string|null
     */
    public function getComments(): ?string
    {
        return $this->comments;
    }
    /**
     * Set comments value
     * @param string $comments
     * @return \App\ElektronicznyNadawca\StructType\CustomsDeclarationType
     */
    public function setComments(?string $comments = null): self
    {
        $this->comments = $comments;
        
        return $this;
    }
    /**
     * Get importerReferenceNumber value
     * @return string|null
     */
    public function getImporterReferenceNumber(): ?string
    {
        return $this->importerReferenceNumber;
    }
    /**
     * Set importerReferenceNumber value
     * @param string $importerReferenceNumber
     * @return \App\ElektronicznyNadawca\StructType\CustomsDeclarationType
     */
    public function setImporterReferenceNumber(?string $importerReferenceNumber = null): self
    {
        $this->importerReferenceNumber = $importerReferenceNumber;
        
        return $this;
    }
    /**
     * Get importerPhoneNumber value
     * @return string|null
     */
    public function getImporterPhoneNumber(): ?string
    {
        return $this->importerPhoneNumber;
    }
    /**
     * Set importerPhoneNumber value
     * @param string $importerPhoneNumber
     * @return \App\ElektronicznyNadawca\StructType\CustomsDeclarationType
     */
    public function setImporterPhoneNumber(?string $importerPhoneNumber = null): self
    {
        $this->importerPhoneNumber = $importerPhoneNumber;
        
        return $this;
    }
    /**
     * Get customsReferenceNumber value
     * @return string|null
     */
    public function getCustomsReferenceNumber(): ?string
    {
        return $this->customsReferenceNumber;
    }
    /**
     * Set customsReferenceNumber value
     * @param string $customsReferenceNumber
     * @return \App\ElektronicznyNadawca\StructType\CustomsDeclarationType
     */
    public function setCustomsReferenceNumber(?string $customsReferenceNumber = null): self
    {
        $this->customsReferenceNumber = $customsReferenceNumber;
        
        return $this;
    }
}
