<?php

namespace App\ElektronicznyNadawca;

class CustomsDeclarationType
{

    /**
     * @var CustomsDeclarationTypeEnum $type
     */
    protected $type = null;

    /**
     * @var CustomsDeclarationContentEnum $content
     */
    protected $content = null;

    /**
     * @var AccompanyingDocumentsType[] $accompanyingDocuments
     */
    protected $accompanyingDocuments = null;

    /**
     * @var string $explanation
     */
    protected $explanation = null;

    /**
     * @var string $postalCharges
     */
    protected $postalCharges = null;

    /**
     * @var string $comments
     */
    protected $comments = null;

    /**
     * @var string $importerReferenceNumber
     */
    protected $importerReferenceNumber = null;

    /**
     * @var string $importerPhoneNumber
     */
    protected $importerPhoneNumber = null;

    /**
     * @var string $currencyCode
     */
    protected $currencyCode = null;

    /**
     * @var ShipmentContentsDetailsType[] $shipmentContentsDetails
     */
    protected $shipmentContentsDetails = null;

    /**
     * @var string $customsReferenceNumber
     */
    protected $customsReferenceNumber = null;

    /**
     * @param CustomsDeclarationContentEnum $content
     * @param string $currencyCode
     * @param ShipmentContentsDetailsType[] $shipmentContentsDetails
     * @param string $customsReferenceNumber
     */
    public function __construct($content, $currencyCode, array $shipmentContentsDetails, $customsReferenceNumber)
    {
      $this->content = $content;
      $this->currencyCode = $currencyCode;
      $this->shipmentContentsDetails = $shipmentContentsDetails;
      $this->customsReferenceNumber = $customsReferenceNumber;
    }

    /**
     * @return CustomsDeclarationTypeEnum
     */
    public function getType()
    {
      return $this->type;
    }

    /**
     * @param CustomsDeclarationTypeEnum $type
     * @return \App\ElektronicznyNadawca\CustomsDeclarationType
     */
    public function setType($type)
    {
      $this->type = $type;
      return $this;
    }

    /**
     * @return CustomsDeclarationContentEnum
     */
    public function getContent()
    {
      return $this->content;
    }

    /**
     * @param CustomsDeclarationContentEnum $content
     * @return \App\ElektronicznyNadawca\CustomsDeclarationType
     */
    public function setContent($content)
    {
      $this->content = $content;
      return $this;
    }

    /**
     * @return AccompanyingDocumentsType[]
     */
    public function getAccompanyingDocuments()
    {
      return $this->accompanyingDocuments;
    }

    /**
     * @param AccompanyingDocumentsType[] $accompanyingDocuments
     * @return \App\ElektronicznyNadawca\CustomsDeclarationType
     */
    public function setAccompanyingDocuments(array $accompanyingDocuments = null)
    {
      $this->accompanyingDocuments = $accompanyingDocuments;
      return $this;
    }

    /**
     * @return string
     */
    public function getExplanation()
    {
      return $this->explanation;
    }

    /**
     * @param string $explanation
     * @return \App\ElektronicznyNadawca\CustomsDeclarationType
     */
    public function setExplanation($explanation)
    {
      $this->explanation = $explanation;
      return $this;
    }

    /**
     * @return string
     */
    public function getPostalCharges()
    {
      return $this->postalCharges;
    }

    /**
     * @param string $postalCharges
     * @return \App\ElektronicznyNadawca\CustomsDeclarationType
     */
    public function setPostalCharges($postalCharges)
    {
      $this->postalCharges = $postalCharges;
      return $this;
    }

    /**
     * @return string
     */
    public function getComments()
    {
      return $this->comments;
    }

    /**
     * @param string $comments
     * @return \App\ElektronicznyNadawca\CustomsDeclarationType
     */
    public function setComments($comments)
    {
      $this->comments = $comments;
      return $this;
    }

    /**
     * @return string
     */
    public function getImporterReferenceNumber()
    {
      return $this->importerReferenceNumber;
    }

    /**
     * @param string $importerReferenceNumber
     * @return \App\ElektronicznyNadawca\CustomsDeclarationType
     */
    public function setImporterReferenceNumber($importerReferenceNumber)
    {
      $this->importerReferenceNumber = $importerReferenceNumber;
      return $this;
    }

    /**
     * @return string
     */
    public function getImporterPhoneNumber()
    {
      return $this->importerPhoneNumber;
    }

    /**
     * @param string $importerPhoneNumber
     * @return \App\ElektronicznyNadawca\CustomsDeclarationType
     */
    public function setImporterPhoneNumber($importerPhoneNumber)
    {
      $this->importerPhoneNumber = $importerPhoneNumber;
      return $this;
    }

    /**
     * @return string
     */
    public function getCurrencyCode()
    {
      return $this->currencyCode;
    }

    /**
     * @param string $currencyCode
     * @return \App\ElektronicznyNadawca\CustomsDeclarationType
     */
    public function setCurrencyCode($currencyCode)
    {
      $this->currencyCode = $currencyCode;
      return $this;
    }

    /**
     * @return ShipmentContentsDetailsType[]
     */
    public function getShipmentContentsDetails()
    {
      return $this->shipmentContentsDetails;
    }

    /**
     * @param ShipmentContentsDetailsType[] $shipmentContentsDetails
     * @return \App\ElektronicznyNadawca\CustomsDeclarationType
     */
    public function setShipmentContentsDetails(array $shipmentContentsDetails)
    {
      $this->shipmentContentsDetails = $shipmentContentsDetails;
      return $this;
    }

    /**
     * @return string
     */
    public function getCustomsReferenceNumber()
    {
      return $this->customsReferenceNumber;
    }

    /**
     * @param string $customsReferenceNumber
     * @return \App\ElektronicznyNadawca\CustomsDeclarationType
     */
    public function setCustomsReferenceNumber($customsReferenceNumber)
    {
      $this->customsReferenceNumber = $customsReferenceNumber;
      return $this;
    }

}
