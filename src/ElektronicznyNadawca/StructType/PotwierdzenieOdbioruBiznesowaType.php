<?php

declare(strict_types=1);

namespace App\ElektronicznyNadawca\StructType;



/**
 * This class stands for potwierdzenieOdbioruBiznesowaType StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class PotwierdzenieOdbioruBiznesowaType
{
    /**
     * The sposob
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public string $sposob;
    /**
     * The ilosc
     * Meta information extracted from the WSDL
     * - base: xsd:int
     * - maxInclusive: 9
     * - maxOccurs: 1
     * - minInclusive: 0
     * - minOccurs: 0
     * @var int|null
     */
    public ?int $ilosc = null;
    /**
     * Constructor method for potwierdzenieOdbioruBiznesowaType
     * @uses PotwierdzenieOdbioruBiznesowaType::setSposob()
     * @uses PotwierdzenieOdbioruBiznesowaType::setIlosc()
     * @param string $sposob
     * @param int $ilosc
     */
    public function __construct(string $sposob, ?int $ilosc = null)
    {
        $this
            ->setSposob($sposob)
            ->setIlosc($ilosc);
    }
    /**
     * Get sposob value
     * @return string
     */
    public function getSposob(): string
    {
        return $this->sposob;
    }
    /**
     * Set sposob value
     * @param string $sposob
     * @return \App\ElektronicznyNadawca\StructType\PotwierdzenieOdbioruBiznesowaType
     */
    public function setSposob(string $sposob): self
    {
        $this->sposob = $sposob;
        
        return $this;
    }
    /**
     * Get ilosc value
     * @return int|null
     */
    public function getIlosc(): ?int
    {
        return $this->ilosc;
    }
    /**
     * Set ilosc value
     * @param int $ilosc
     * @return \App\ElektronicznyNadawca\StructType\PotwierdzenieOdbioruBiznesowaType
     */
    public function setIlosc(?int $ilosc = null): self
    {
        $this->ilosc = $ilosc;
        
        return $this;
    }
}
