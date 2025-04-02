<?php

declare(strict_types=1);

namespace App\ElektronicznyNadawca\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for parcelContentType StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class ParcelContentType extends AbstractStructBase
{
    /**
     * The IdParcelContent
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var int|null
     */
    public ?int $IdParcelContent = null;
    /**
     * The order
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var int|null
     */
    public ?int $order = null;
    /**
     * The name
     * Meta information extracted from the WSDL
     * - base: xsd:string
     * - maxLength: 50
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    public ?string $name = null;
    /**
     * The description
     * Meta information extracted from the WSDL
     * - base: xsd:string
     * - maxLength: 200
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    public ?string $description = null;
    /**
     * The idKarta
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var int|null
     */
    public ?int $idKarta = null;
    /**
     * The guid
     * Meta information extracted from the WSDL
     * - documentation: GUID elementu parcelContent. Wartość wykorzystywana do przekazania rezultatu dla elementu kolekcji.
     * - base: xsd:string
     * - length: 32
     * - maxOccurs: 1
     * - minOccurs: 0
     * - whiteSpace: collapse
     * @var string|null
     */
    public ?string $guid = null;
    /**
     * Constructor method for parcelContentType
     * @uses ParcelContentType::setIdParcelContent()
     * @uses ParcelContentType::setOrder()
     * @uses ParcelContentType::setName()
     * @uses ParcelContentType::setDescription()
     * @uses ParcelContentType::setIdKarta()
     * @uses ParcelContentType::setGuid()
     * @param int $idParcelContent
     * @param int $order
     * @param string $name
     * @param string $description
     * @param int $idKarta
     * @param string $guid
     */
    public function __construct(?int $idParcelContent = null, ?int $order = null, ?string $name = null, ?string $description = null, ?int $idKarta = null, ?string $guid = null)
    {
        $this
            ->setIdParcelContent($idParcelContent)
            ->setOrder($order)
            ->setName($name)
            ->setDescription($description)
            ->setIdKarta($idKarta)
            ->setGuid($guid);
    }
    /**
     * Get IdParcelContent value
     * @return int|null
     */
    public function getIdParcelContent(): ?int
    {
        return $this->IdParcelContent;
    }
    /**
     * Set IdParcelContent value
     * @param int $idParcelContent
     * @return \App\ElektronicznyNadawca\StructType\ParcelContentType
     */
    public function setIdParcelContent(?int $idParcelContent = null): self
    {
        $this->IdParcelContent = $idParcelContent;
        
        return $this;
    }
    /**
     * Get order value
     * @return int|null
     */
    public function getOrder(): ?int
    {
        return $this->order;
    }
    /**
     * Set order value
     * @param int $order
     * @return \App\ElektronicznyNadawca\StructType\ParcelContentType
     */
    public function setOrder(?int $order = null): self
    {
        $this->order = $order;
        
        return $this;
    }
    /**
     * Get name value
     * @return string|null
     */
    public function getName(): ?string
    {
        return $this->name;
    }
    /**
     * Set name value
     * @param string $name
     * @return \App\ElektronicznyNadawca\StructType\ParcelContentType
     */
    public function setName(?string $name = null): self
    {
        $this->name = $name;
        
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
     * @return \App\ElektronicznyNadawca\StructType\ParcelContentType
     */
    public function setDescription(?string $description = null): self
    {
        $this->description = $description;
        
        return $this;
    }
    /**
     * Get idKarta value
     * @return int|null
     */
    public function getIdKarta(): ?int
    {
        return $this->idKarta;
    }
    /**
     * Set idKarta value
     * @param int $idKarta
     * @return \App\ElektronicznyNadawca\StructType\ParcelContentType
     */
    public function setIdKarta(?int $idKarta = null): self
    {
        $this->idKarta = $idKarta;
        
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
     * @return \App\ElektronicznyNadawca\StructType\ParcelContentType
     */
    public function setGuid(?string $guid = null): self
    {
        $this->guid = $guid;
        
        return $this;
    }
}
