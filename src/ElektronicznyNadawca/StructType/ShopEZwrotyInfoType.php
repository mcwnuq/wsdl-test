<?php

declare(strict_types=1);

namespace App\ElektronicznyNadawca\StructType;



/**
 * This class stands for shopEZwrotyInfoType StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class ShopEZwrotyInfoType
{
    /**
     * The idShop
     * @var int|null
     */
    public ?int $idShop = null;
    /**
     * The przyjaznaNazwa
     * Meta information extracted from the WSDL
     * - base: xsd:string
     * - maxLength: 60
     * - minLength: 1
     * - whiteSpace: collapse
     * @var string|null
     */
    public ?string $przyjaznaNazwa = null;
    /**
     * The availableOnWebsite
     * @var bool|null
     */
    public ?bool $availableOnWebsite = null;
    /**
     * The nip
     * @var string|null
     */
    public ?string $nip = null;
    /**
     * Constructor method for shopEZwrotyInfoType
     * @uses ShopEZwrotyInfoType::setIdShop()
     * @uses ShopEZwrotyInfoType::setPrzyjaznaNazwa()
     * @uses ShopEZwrotyInfoType::setAvailableOnWebsite()
     * @uses ShopEZwrotyInfoType::setNip()
     * @param int $idShop
     * @param string $przyjaznaNazwa
     * @param bool $availableOnWebsite
     * @param string $nip
     */
    public function __construct(?int $idShop = null, ?string $przyjaznaNazwa = null, ?bool $availableOnWebsite = null, ?string $nip = null)
    {
        $this
            ->setIdShop($idShop)
            ->setPrzyjaznaNazwa($przyjaznaNazwa)
            ->setAvailableOnWebsite($availableOnWebsite)
            ->setNip($nip);
    }
    /**
     * Get idShop value
     * @return int|null
     */
    public function getIdShop(): ?int
    {
        return $this->idShop;
    }
    /**
     * Set idShop value
     * @param int $idShop
     * @return \App\ElektronicznyNadawca\StructType\ShopEZwrotyInfoType
     */
    public function setIdShop(?int $idShop = null): self
    {
        $this->idShop = $idShop;
        
        return $this;
    }
    /**
     * Get przyjaznaNazwa value
     * @return string|null
     */
    public function getPrzyjaznaNazwa(): ?string
    {
        return $this->przyjaznaNazwa;
    }
    /**
     * Set przyjaznaNazwa value
     * @param string $przyjaznaNazwa
     * @return \App\ElektronicznyNadawca\StructType\ShopEZwrotyInfoType
     */
    public function setPrzyjaznaNazwa(?string $przyjaznaNazwa = null): self
    {
        $this->przyjaznaNazwa = $przyjaznaNazwa;
        
        return $this;
    }
    /**
     * Get availableOnWebsite value
     * @return bool|null
     */
    public function getAvailableOnWebsite(): ?bool
    {
        return $this->availableOnWebsite;
    }
    /**
     * Set availableOnWebsite value
     * @param bool $availableOnWebsite
     * @return \App\ElektronicznyNadawca\StructType\ShopEZwrotyInfoType
     */
    public function setAvailableOnWebsite(?bool $availableOnWebsite = null): self
    {
        $this->availableOnWebsite = $availableOnWebsite;
        
        return $this;
    }
    /**
     * Get nip value
     * @return string|null
     */
    public function getNip(): ?string
    {
        return $this->nip;
    }
    /**
     * Set nip value
     * @param string $nip
     * @return \App\ElektronicznyNadawca\StructType\ShopEZwrotyInfoType
     */
    public function setNip(?string $nip = null): self
    {
        $this->nip = $nip;
        
        return $this;
    }
}
