<?php

declare(strict_types=1);

namespace App\ElektronicznyNadawca\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for kierunekType StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class KierunekType extends AbstractStructBase
{
    /**
     * The id
     * Meta information extracted from the WSDL
     * - use: required
     * @var int
     */
    public int $id;
    /**
     * The kodPocztowy
     * Meta information extracted from the WSDL
     * - base: xsd:string
     * - maxLength: 10
     * - maxOccurs: unbounded
     * - minLength: 0
     * - minOccurs: 0
     * - whiteSpace: collapse
     * @var string[]
     */
    public ?array $kodPocztowy = null;
    /**
     * The opis
     * @var string|null
     */
    public ?string $opis = null;
    /**
     * The pna
     * Meta information extracted from the WSDL
     * - base: xsd:string
     * - maxLength: 10
     * - minLength: 0
     * - whiteSpace: collapse
     * @var string|null
     */
    public ?string $pna = null;
    /**
     * Constructor method for kierunekType
     * @uses KierunekType::setId()
     * @uses KierunekType::setKodPocztowy()
     * @uses KierunekType::setOpis()
     * @uses KierunekType::setPna()
     * @param int $id
     * @param string[] $kodPocztowy
     * @param string $opis
     * @param string $pna
     */
    public function __construct(int $id, ?array $kodPocztowy = null, ?string $opis = null, ?string $pna = null)
    {
        $this
            ->setId($id)
            ->setKodPocztowy($kodPocztowy)
            ->setOpis($opis)
            ->setPna($pna);
    }
    /**
     * Get id value
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }
    /**
     * Set id value
     * @param int $id
     * @return \App\ElektronicznyNadawca\StructType\KierunekType
     */
    public function setId(int $id): self
    {
        $this->id = $id;
        
        return $this;
    }
    /**
     * Get kodPocztowy value
     * @return string[]
     */
    public function getKodPocztowy(): ?array
    {
        return $this->kodPocztowy;
    }
    /**
     * Set kodPocztowy value
     * @param string[] $kodPocztowy
     * @return \App\ElektronicznyNadawca\StructType\KierunekType
     */
    public function setKodPocztowy(?array $kodPocztowy = null): self
    {
        $this->kodPocztowy = $kodPocztowy;
        
        return $this;
    }
    /**
     * Add item to kodPocztowy value
     * @throws InvalidArgumentException
     * @param string $item
     * @return \App\ElektronicznyNadawca\StructType\KierunekType
     */
    public function addToKodPocztowy(string $item): self
    {
        $this->kodPocztowy[] = $item;
        
        return $this;
    }
    /**
     * Get opis value
     * @return string|null
     */
    public function getOpis(): ?string
    {
        return $this->opis;
    }
    /**
     * Set opis value
     * @param string $opis
     * @return \App\ElektronicznyNadawca\StructType\KierunekType
     */
    public function setOpis(?string $opis = null): self
    {
        $this->opis = $opis;
        
        return $this;
    }
    /**
     * Get pna value
     * @return string|null
     */
    public function getPna(): ?string
    {
        return $this->pna;
    }
    /**
     * Set pna value
     * @param string $pna
     * @return \App\ElektronicznyNadawca\StructType\KierunekType
     */
    public function setPna(?string $pna = null): self
    {
        $this->pna = $pna;
        
        return $this;
    }
}
