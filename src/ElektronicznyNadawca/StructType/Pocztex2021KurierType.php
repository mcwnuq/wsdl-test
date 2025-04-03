<?php

declare(strict_types=1);

namespace App\ElektronicznyNadawca\StructType;



/**
 * This class stands for pocztex2021KurierType StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class Pocztex2021KurierType extends Pocztex2021Type
{
    /**
     * The subPrzesylka
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \App\ElektronicznyNadawca\StructType\SubPocztex2021KurierType[]
     */
    public ?array $subPrzesylka = null;
    /**
     * The punktOdbioru
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \App\ElektronicznyNadawca\StructType\PunktOdbioruType|null
     */
    public ?\App\ElektronicznyNadawca\StructType\PunktOdbioruType $punktOdbioru = null;
    /**
     * The punktNadania
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \App\ElektronicznyNadawca\StructType\PunktNadaniaType|null
     */
    public ?\App\ElektronicznyNadawca\StructType\PunktNadaniaType $punktNadania = null;
    /**
     * The kopertaPocztex
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool|null
     */
    public ?bool $kopertaPocztex = null;
    /**
     * The godzinaDoreczenia
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    public ?string $godzinaDoreczenia = null;
    /**
     * The doreczenieWeWskazanymDniu
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    public ?string $doreczenieWeWskazanymDniu = null;
    /**
     * The shipmentChannel
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    public ?string $shipmentChannel = null;
    /**
     * The labelExpirationDate
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    public ?string $labelExpirationDate = null;
    /**
     * Constructor method for pocztex2021KurierType
     * @uses Pocztex2021KurierType::setSubPrzesylka()
     * @uses Pocztex2021KurierType::setPunktOdbioru()
     * @uses Pocztex2021KurierType::setPunktNadania()
     * @uses Pocztex2021KurierType::setKopertaPocztex()
     * @uses Pocztex2021KurierType::setGodzinaDoreczenia()
     * @uses Pocztex2021KurierType::setDoreczenieWeWskazanymDniu()
     * @uses Pocztex2021KurierType::setShipmentChannel()
     * @uses Pocztex2021KurierType::setLabelExpirationDate()
     * @param \App\ElektronicznyNadawca\StructType\SubPocztex2021KurierType[] $subPrzesylka
     * @param \App\ElektronicznyNadawca\StructType\PunktOdbioruType $punktOdbioru
     * @param \App\ElektronicznyNadawca\StructType\PunktNadaniaType $punktNadania
     * @param bool $kopertaPocztex
     * @param string $godzinaDoreczenia
     * @param string $doreczenieWeWskazanymDniu
     * @param string $shipmentChannel
     * @param string $labelExpirationDate
     */
    public function __construct(?array $subPrzesylka = null, ?\App\ElektronicznyNadawca\StructType\PunktOdbioruType $punktOdbioru = null, ?\App\ElektronicznyNadawca\StructType\PunktNadaniaType $punktNadania = null, ?bool $kopertaPocztex = null, ?string $godzinaDoreczenia = null, ?string $doreczenieWeWskazanymDniu = null, ?string $shipmentChannel = null, ?string $labelExpirationDate = null)
    {
        $this
            ->setSubPrzesylka($subPrzesylka)
            ->setPunktOdbioru($punktOdbioru)
            ->setPunktNadania($punktNadania)
            ->setKopertaPocztex($kopertaPocztex)
            ->setGodzinaDoreczenia($godzinaDoreczenia)
            ->setDoreczenieWeWskazanymDniu($doreczenieWeWskazanymDniu)
            ->setShipmentChannel($shipmentChannel)
            ->setLabelExpirationDate($labelExpirationDate);
    }
    /**
     * Get subPrzesylka value
     * @return \App\ElektronicznyNadawca\StructType\SubPocztex2021KurierType[]
     */
    public function getSubPrzesylka(): ?array
    {
        return $this->subPrzesylka;
    }
    /**
     * Set subPrzesylka value
     * @param \App\ElektronicznyNadawca\StructType\SubPocztex2021KurierType[] $subPrzesylka
     * @return \App\ElektronicznyNadawca\StructType\Pocztex2021KurierType
     */
    public function setSubPrzesylka(?array $subPrzesylka = null): self
    {
        $this->subPrzesylka = $subPrzesylka;
        
        return $this;
    }
    /**
     * Add item to subPrzesylka value
     * @throws InvalidArgumentException
     * @param \App\ElektronicznyNadawca\StructType\SubPocztex2021KurierType $item
     * @return \App\ElektronicznyNadawca\StructType\Pocztex2021KurierType
     */
    public function addToSubPrzesylka(\App\ElektronicznyNadawca\StructType\SubPocztex2021KurierType $item): self
    {
        $this->subPrzesylka[] = $item;
        
        return $this;
    }
    /**
     * Get punktOdbioru value
     * @return \App\ElektronicznyNadawca\StructType\PunktOdbioruType|null
     */
    public function getPunktOdbioru(): ?\App\ElektronicznyNadawca\StructType\PunktOdbioruType
    {
        return $this->punktOdbioru;
    }
    /**
     * Set punktOdbioru value
     * @param \App\ElektronicznyNadawca\StructType\PunktOdbioruType $punktOdbioru
     * @return \App\ElektronicznyNadawca\StructType\Pocztex2021KurierType
     */
    public function setPunktOdbioru(?\App\ElektronicznyNadawca\StructType\PunktOdbioruType $punktOdbioru = null): self
    {
        $this->punktOdbioru = $punktOdbioru;
        
        return $this;
    }
    /**
     * Get punktNadania value
     * @return \App\ElektronicznyNadawca\StructType\PunktNadaniaType|null
     */
    public function getPunktNadania(): ?\App\ElektronicznyNadawca\StructType\PunktNadaniaType
    {
        return $this->punktNadania;
    }
    /**
     * Set punktNadania value
     * @param \App\ElektronicznyNadawca\StructType\PunktNadaniaType $punktNadania
     * @return \App\ElektronicznyNadawca\StructType\Pocztex2021KurierType
     */
    public function setPunktNadania(?\App\ElektronicznyNadawca\StructType\PunktNadaniaType $punktNadania = null): self
    {
        $this->punktNadania = $punktNadania;
        
        return $this;
    }
    /**
     * Get kopertaPocztex value
     * @return bool|null
     */
    public function getKopertaPocztex(): ?bool
    {
        return $this->kopertaPocztex;
    }
    /**
     * Set kopertaPocztex value
     * @param bool $kopertaPocztex
     * @return \App\ElektronicznyNadawca\StructType\Pocztex2021KurierType
     */
    public function setKopertaPocztex(?bool $kopertaPocztex = null): self
    {
        $this->kopertaPocztex = $kopertaPocztex;
        
        return $this;
    }
    /**
     * Get godzinaDoreczenia value
     * @return string|null
     */
    public function getGodzinaDoreczenia(): ?string
    {
        return $this->godzinaDoreczenia;
    }
    /**
     * Set godzinaDoreczenia value
     * @param string $godzinaDoreczenia
     * @return \App\ElektronicznyNadawca\StructType\Pocztex2021KurierType
     */
    public function setGodzinaDoreczenia(?string $godzinaDoreczenia = null): self
    {
        $this->godzinaDoreczenia = $godzinaDoreczenia;
        
        return $this;
    }
    /**
     * Get doreczenieWeWskazanymDniu value
     * @return string|null
     */
    public function getDoreczenieWeWskazanymDniu(): ?string
    {
        return $this->doreczenieWeWskazanymDniu;
    }
    /**
     * Set doreczenieWeWskazanymDniu value
     * @param string $doreczenieWeWskazanymDniu
     * @return \App\ElektronicznyNadawca\StructType\Pocztex2021KurierType
     */
    public function setDoreczenieWeWskazanymDniu(?string $doreczenieWeWskazanymDniu = null): self
    {
        $this->doreczenieWeWskazanymDniu = $doreczenieWeWskazanymDniu;
        
        return $this;
    }
    /**
     * Get shipmentChannel value
     * @return string|null
     */
    public function getShipmentChannel(): ?string
    {
        return $this->shipmentChannel;
    }
    /**
     * Set shipmentChannel value
     * @param string $shipmentChannel
     * @return \App\ElektronicznyNadawca\StructType\Pocztex2021KurierType
     */
    public function setShipmentChannel(?string $shipmentChannel = null): self
    {
        $this->shipmentChannel = $shipmentChannel;
        
        return $this;
    }
    /**
     * Get labelExpirationDate value
     * @return string|null
     */
    public function getLabelExpirationDate(): ?string
    {
        return $this->labelExpirationDate;
    }
    /**
     * Set labelExpirationDate value
     * @param string $labelExpirationDate
     * @return \App\ElektronicznyNadawca\StructType\Pocztex2021KurierType
     */
    public function setLabelExpirationDate(?string $labelExpirationDate = null): self
    {
        $this->labelExpirationDate = $labelExpirationDate;
        
        return $this;
    }
}
