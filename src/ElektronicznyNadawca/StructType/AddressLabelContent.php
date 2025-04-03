<?php

declare(strict_types=1);

namespace App\ElektronicznyNadawca\StructType;



/**
 * This class stands for addressLabelContent StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class AddressLabelContent
{
    /**
     * The pdfContent
     * @var string|null
     */
    public ?string $pdfContent = null;
    /**
     * The nrNadania
     * @var string|null
     */
    public ?string $nrNadania = null;
    /**
     * The guid
     * @var string|null
     */
    public ?string $guid = null;
    /**
     * Constructor method for addressLabelContent
     * @uses AddressLabelContent::setPdfContent()
     * @uses AddressLabelContent::setNrNadania()
     * @uses AddressLabelContent::setGuid()
     * @param string $pdfContent
     * @param string $nrNadania
     * @param string $guid
     */
    public function __construct(?string $pdfContent = null, ?string $nrNadania = null, ?string $guid = null)
    {
        $this
            ->setPdfContent($pdfContent)
            ->setNrNadania($nrNadania)
            ->setGuid($guid);
    }
    /**
     * Get pdfContent value
     * @return string|null
     */
    public function getPdfContent(): ?string
    {
        return $this->pdfContent;
    }
    /**
     * Set pdfContent value
     * @param string $pdfContent
     * @return \App\ElektronicznyNadawca\StructType\AddressLabelContent
     */
    public function setPdfContent(?string $pdfContent = null): self
    {
        $this->pdfContent = $pdfContent;
        
        return $this;
    }
    /**
     * Get nrNadania value
     * @return string|null
     */
    public function getNrNadania(): ?string
    {
        return $this->nrNadania;
    }
    /**
     * Set nrNadania value
     * @param string $nrNadania
     * @return \App\ElektronicznyNadawca\StructType\AddressLabelContent
     */
    public function setNrNadania(?string $nrNadania = null): self
    {
        $this->nrNadania = $nrNadania;
        
        return $this;
    }
    /**
     * Get guid value
     * @return string|null
     */
    public function getGuid(): ?string
    {
        return $this->guid;
    }
    /**
     * Set guid value
     * @param string $guid
     * @return \App\ElektronicznyNadawca\StructType\AddressLabelContent
     */
    public function setGuid(?string $guid = null): self
    {
        $this->guid = $guid;
        
        return $this;
    }
}
