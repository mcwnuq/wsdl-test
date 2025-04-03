<?php

declare(strict_types=1);

namespace App\ElektronicznyNadawca\StructType;



/**
 * This class stands for zwrotDokumentowType StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class ZwrotDokumentowType
{
    /**
     * The rodzajPocztex
     * Meta information extracted from the WSDL
     * - choice: rodzajPocztex | rodzajList
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    public ?string $rodzajPocztex = null;
    /**
     * The rodzajList
     * Meta information extracted from the WSDL
     * - choice: rodzajPocztex | rodzajList
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \App\ElektronicznyNadawca\StructType\RodzajListType|null
     */
    public ?\App\ElektronicznyNadawca\StructType\RodzajListType $rodzajList = null;
    /**
     * The odleglosc
     * @var int|null
     */
    public ?int $odleglosc = null;
    /**
     * Constructor method for zwrotDokumentowType
     * @uses ZwrotDokumentowType::setRodzajPocztex()
     * @uses ZwrotDokumentowType::setRodzajList()
     * @uses ZwrotDokumentowType::setOdleglosc()
     * @param string $rodzajPocztex
     * @param \App\ElektronicznyNadawca\StructType\RodzajListType $rodzajList
     * @param int $odleglosc
     */
    public function __construct(?string $rodzajPocztex = null, ?\App\ElektronicznyNadawca\StructType\RodzajListType $rodzajList = null, ?int $odleglosc = null)
    {
        $this
            ->setRodzajPocztex($rodzajPocztex)
            ->setRodzajList($rodzajList)
            ->setOdleglosc($odleglosc);
    }
    /**
     * Get rodzajPocztex value
     * @return string|null
     */
    public function getRodzajPocztex(): ?string
    {
        return $this->rodzajPocztex ?? null;
    }
    /**
     * Set rodzajPocztex value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @param string $rodzajPocztex
     * @return \App\ElektronicznyNadawca\StructType\ZwrotDokumentowType
     */
    public function setRodzajPocztex(?string $rodzajPocztex = null): self
    {
        if (is_null($rodzajPocztex) || (is_array($rodzajPocztex) && empty($rodzajPocztex))) {
            unset($this->rodzajPocztex);
        } else {
            $this->rodzajPocztex = $rodzajPocztex;
        }
        
        return $this;
    }
    /**
     * Get rodzajList value
     * @return \App\ElektronicznyNadawca\StructType\RodzajListType|null
     */
    public function getRodzajList(): ?\App\ElektronicznyNadawca\StructType\RodzajListType
    {
        return $this->rodzajList ?? null;
    }
    /**
     * Set rodzajList value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @param \App\ElektronicznyNadawca\StructType\RodzajListType $rodzajList
     * @return \App\ElektronicznyNadawca\StructType\ZwrotDokumentowType
     */
    public function setRodzajList(?\App\ElektronicznyNadawca\StructType\RodzajListType $rodzajList = null): self
    {
        if (is_null($rodzajList) || (is_array($rodzajList) && empty($rodzajList))) {
            unset($this->rodzajList);
        } else {
            $this->rodzajList = $rodzajList;
        }
        
        return $this;
    }
    /**
     * Get odleglosc value
     * @return int|null
     */
    public function getOdleglosc(): ?int
    {
        return $this->odleglosc;
    }
    /**
     * Set odleglosc value
     * @param int $odleglosc
     * @return \App\ElektronicznyNadawca\StructType\ZwrotDokumentowType
     */
    public function setOdleglosc(?int $odleglosc = null): self
    {
        $this->odleglosc = $odleglosc;
        
        return $this;
    }
}
