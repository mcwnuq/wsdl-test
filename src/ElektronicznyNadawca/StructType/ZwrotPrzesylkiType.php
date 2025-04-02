<?php

declare(strict_types=1);

namespace App\ElektronicznyNadawca\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for zwrotPrzesylkiType StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class ZwrotPrzesylkiType extends AbstractStructBase
{
    /**
     * The przyczyna
     * @var string|null
     */
    public ?string $przyczyna = null;
    /**
     * The data
     * @var string|null
     */
    public ?string $data = null;
    /**
     * The przyczynaZwrotuDodatkowa
     * Meta information extracted from the WSDL
     * - documentation: Dodatkowy opisowy powód zwrotu przesyłki
     * - base: xsd:string
     * - maxLength: 255
     * - use: optional
     * @var string|null
     */
    public ?string $przyczynaZwrotuDodatkowa = null;
    /**
     * Constructor method for zwrotPrzesylkiType
     * @uses ZwrotPrzesylkiType::setPrzyczyna()
     * @uses ZwrotPrzesylkiType::setData()
     * @uses ZwrotPrzesylkiType::setPrzyczynaZwrotuDodatkowa()
     * @param string $przyczyna
     * @param string $data
     * @param string $przyczynaZwrotuDodatkowa
     */
    public function __construct(?string $przyczyna = null, ?string $data = null, ?string $przyczynaZwrotuDodatkowa = null)
    {
        $this
            ->setPrzyczyna($przyczyna)
            ->setData($data)
            ->setPrzyczynaZwrotuDodatkowa($przyczynaZwrotuDodatkowa);
    }
    /**
     * Get przyczyna value
     * @return string|null
     */
    public function getPrzyczyna(): ?string
    {
        return $this->przyczyna;
    }
    /**
     * Set przyczyna value
     * @param string $przyczyna
     * @return \App\ElektronicznyNadawca\StructType\ZwrotPrzesylkiType
     */
    public function setPrzyczyna(?string $przyczyna = null): self
    {
        $this->przyczyna = $przyczyna;
        
        return $this;
    }
    /**
     * Get data value
     * @return string|null
     */
    public function getData(): ?string
    {
        return $this->data;
    }
    /**
     * Set data value
     * @param string $data
     * @return \App\ElektronicznyNadawca\StructType\ZwrotPrzesylkiType
     */
    public function setData(?string $data = null): self
    {
        $this->data = $data;
        
        return $this;
    }
    /**
     * Get przyczynaZwrotuDodatkowa value
     * @return string|null
     */
    public function getPrzyczynaZwrotuDodatkowa(): ?string
    {
        return $this->przyczynaZwrotuDodatkowa;
    }
    /**
     * Set przyczynaZwrotuDodatkowa value
     * @param string $przyczynaZwrotuDodatkowa
     * @return \App\ElektronicznyNadawca\StructType\ZwrotPrzesylkiType
     */
    public function setPrzyczynaZwrotuDodatkowa(?string $przyczynaZwrotuDodatkowa = null): self
    {
        $this->przyczynaZwrotuDodatkowa = $przyczynaZwrotuDodatkowa;
        
        return $this;
    }
}
