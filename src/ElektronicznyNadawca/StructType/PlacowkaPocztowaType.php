<?php

declare(strict_types=1);

namespace App\ElektronicznyNadawca\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for placowkaPocztowaType StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class PlacowkaPocztowaType extends AbstractStructBase
{
    /**
     * The id
     * Meta information extracted from the WSDL
     * - use: required
     * @var int
     */
    public int $id;
    /**
     * The lokalizacjaGeograficzna
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \App\ElektronicznyNadawca\StructType\LokalizacjaGeograficznaType|null
     */
    public ?\App\ElektronicznyNadawca\StructType\LokalizacjaGeograficznaType $lokalizacjaGeograficzna = null;
    /**
     * The godzinyPracy
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \App\ElektronicznyNadawca\StructType\GodzinyPracyType|null
     */
    public ?\App\ElektronicznyNadawca\StructType\GodzinyPracyType $godzinyPracy = null;
    /**
     * The opis
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    public ?string $opis = null;
    /**
     * The deliveryPath
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \App\ElektronicznyNadawca\StructType\DeliveryPathType|null
     */
    public ?\App\ElektronicznyNadawca\StructType\DeliveryPathType $deliveryPath = null;
    /**
     * The typ
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    public ?string $typ = null;
    /**
     * The rodzajPlatnosci
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    public ?array $rodzajPlatnosci = null;
    /**
     * The funkcja
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    public ?string $funkcja = null;
    /**
     * The maksymalnaKwotaPobrania
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var int|null
     */
    public ?int $maksymalnaKwotaPobrania = null;
    /**
     * The prefixNazwy
     * @var string|null
     */
    public ?string $prefixNazwy = null;
    /**
     * The nazwa
     * @var string|null
     */
    public ?string $nazwa = null;
    /**
     * The wojewodztwo
     * Meta information extracted from the WSDL
     * - use: optional
     * @var string|null
     */
    public ?string $wojewodztwo = null;
    /**
     * The powiat
     * Meta information extracted from the WSDL
     * - use: optional
     * @var string|null
     */
    public ?string $powiat = null;
    /**
     * The miejsce
     * @var string|null
     */
    public ?string $miejsce = null;
    /**
     * The kodPocztowy
     * Meta information extracted from the WSDL
     * - base: xsd:string
     * - length: 5
     * @var string|null
     */
    public ?string $kodPocztowy = null;
    /**
     * The miejscowosc
     * Meta information extracted from the WSDL
     * - base: xsd:string
     * - maxLength: 30
     * - minLength: 0
     * @var string|null
     */
    public ?string $miejscowosc = null;
    /**
     * The ulica
     * @var string|null
     */
    public ?string $ulica = null;
    /**
     * The numerDomu
     * @var string|null
     */
    public ?string $numerDomu = null;
    /**
     * The numerLokalu
     * @var string|null
     */
    public ?string $numerLokalu = null;
    /**
     * The nazwaWydruk
     * Meta information extracted from the WSDL
     * - documentation: Pole dedykowane do wykorzystania na nalepkach adresowych przy określaniu punktu odbioru
     * @var string|null
     */
    public ?string $nazwaWydruk = null;
    /**
     * The punktWydaniaEPrzesylki
     * @var bool|null
     */
    public ?bool $punktWydaniaEPrzesylki = null;
    /**
     * The powiadomienieSMS
     * @var bool|null
     */
    public ?bool $powiadomienieSMS = null;
    /**
     * The punktWydaniaPrzesylkiBiznesowejPlus
     * @var bool|null
     */
    public ?bool $punktWydaniaPrzesylkiBiznesowejPlus = null;
    /**
     * The punktWydaniaPrzesylkiBiznesowej
     * @var bool|null
     */
    public ?bool $punktWydaniaPrzesylkiBiznesowej = null;
    /**
     * The siecPlacowek
     * Meta information extracted from the WSDL
     * - documentation: Określa do jakiej sieci należy placówka pocztowa. Zastrzegamy prawo do zmiany w/w listy placówek w każdym momencie. Na dzień 2019-09-13 dostępne wartości to: POCZTAPOLSKA, ORLEN, RUCH, ZABKA, FRESHMARKET, AUTOMAT BIEDRONKA,
     * AUTOMAT CARREFOUR, AUTOMAT PLACOWKA, AUTOMAT POCZTOWY, AUTOMAT SPOLEM, AUTOMAT LEWIATAN
     * - base: xsd:string
     * @var string|null
     */
    public ?string $siecPlacowek = null;
    /**
     * The idZPO
     * @var string|null
     */
    public ?string $idZPO = null;
    /**
     * Constructor method for placowkaPocztowaType
     * @uses PlacowkaPocztowaType::setId()
     * @uses PlacowkaPocztowaType::setLokalizacjaGeograficzna()
     * @uses PlacowkaPocztowaType::setGodzinyPracy()
     * @uses PlacowkaPocztowaType::setOpis()
     * @uses PlacowkaPocztowaType::setDeliveryPath()
     * @uses PlacowkaPocztowaType::setTyp()
     * @uses PlacowkaPocztowaType::setRodzajPlatnosci()
     * @uses PlacowkaPocztowaType::setFunkcja()
     * @uses PlacowkaPocztowaType::setMaksymalnaKwotaPobrania()
     * @uses PlacowkaPocztowaType::setPrefixNazwy()
     * @uses PlacowkaPocztowaType::setNazwa()
     * @uses PlacowkaPocztowaType::setWojewodztwo()
     * @uses PlacowkaPocztowaType::setPowiat()
     * @uses PlacowkaPocztowaType::setMiejsce()
     * @uses PlacowkaPocztowaType::setKodPocztowy()
     * @uses PlacowkaPocztowaType::setMiejscowosc()
     * @uses PlacowkaPocztowaType::setUlica()
     * @uses PlacowkaPocztowaType::setNumerDomu()
     * @uses PlacowkaPocztowaType::setNumerLokalu()
     * @uses PlacowkaPocztowaType::setNazwaWydruk()
     * @uses PlacowkaPocztowaType::setPunktWydaniaEPrzesylki()
     * @uses PlacowkaPocztowaType::setPowiadomienieSMS()
     * @uses PlacowkaPocztowaType::setPunktWydaniaPrzesylkiBiznesowejPlus()
     * @uses PlacowkaPocztowaType::setPunktWydaniaPrzesylkiBiznesowej()
     * @uses PlacowkaPocztowaType::setSiecPlacowek()
     * @uses PlacowkaPocztowaType::setIdZPO()
     * @param int $id
     * @param \App\ElektronicznyNadawca\StructType\LokalizacjaGeograficznaType $lokalizacjaGeograficzna
     * @param \App\ElektronicznyNadawca\StructType\GodzinyPracyType $godzinyPracy
     * @param string $opis
     * @param \App\ElektronicznyNadawca\StructType\DeliveryPathType $deliveryPath
     * @param string $typ
     * @param string[] $rodzajPlatnosci
     * @param string $funkcja
     * @param int $maksymalnaKwotaPobrania
     * @param string $prefixNazwy
     * @param string $nazwa
     * @param string $wojewodztwo
     * @param string $powiat
     * @param string $miejsce
     * @param string $kodPocztowy
     * @param string $miejscowosc
     * @param string $ulica
     * @param string $numerDomu
     * @param string $numerLokalu
     * @param string $nazwaWydruk
     * @param bool $punktWydaniaEPrzesylki
     * @param bool $powiadomienieSMS
     * @param bool $punktWydaniaPrzesylkiBiznesowejPlus
     * @param bool $punktWydaniaPrzesylkiBiznesowej
     * @param string $siecPlacowek
     * @param string $idZPO
     */
    public function __construct(int $id, ?\App\ElektronicznyNadawca\StructType\LokalizacjaGeograficznaType $lokalizacjaGeograficzna = null, ?\App\ElektronicznyNadawca\StructType\GodzinyPracyType $godzinyPracy = null, ?string $opis = null, ?\App\ElektronicznyNadawca\StructType\DeliveryPathType $deliveryPath = null, ?string $typ = null, ?array $rodzajPlatnosci = null, ?string $funkcja = null, ?int $maksymalnaKwotaPobrania = null, ?string $prefixNazwy = null, ?string $nazwa = null, ?string $wojewodztwo = null, ?string $powiat = null, ?string $miejsce = null, ?string $kodPocztowy = null, ?string $miejscowosc = null, ?string $ulica = null, ?string $numerDomu = null, ?string $numerLokalu = null, ?string $nazwaWydruk = null, ?bool $punktWydaniaEPrzesylki = null, ?bool $powiadomienieSMS = null, ?bool $punktWydaniaPrzesylkiBiznesowejPlus = null, ?bool $punktWydaniaPrzesylkiBiznesowej = null, ?string $siecPlacowek = null, ?string $idZPO = null)
    {
        $this
            ->setId($id)
            ->setLokalizacjaGeograficzna($lokalizacjaGeograficzna)
            ->setGodzinyPracy($godzinyPracy)
            ->setOpis($opis)
            ->setDeliveryPath($deliveryPath)
            ->setTyp($typ)
            ->setRodzajPlatnosci($rodzajPlatnosci)
            ->setFunkcja($funkcja)
            ->setMaksymalnaKwotaPobrania($maksymalnaKwotaPobrania)
            ->setPrefixNazwy($prefixNazwy)
            ->setNazwa($nazwa)
            ->setWojewodztwo($wojewodztwo)
            ->setPowiat($powiat)
            ->setMiejsce($miejsce)
            ->setKodPocztowy($kodPocztowy)
            ->setMiejscowosc($miejscowosc)
            ->setUlica($ulica)
            ->setNumerDomu($numerDomu)
            ->setNumerLokalu($numerLokalu)
            ->setNazwaWydruk($nazwaWydruk)
            ->setPunktWydaniaEPrzesylki($punktWydaniaEPrzesylki)
            ->setPowiadomienieSMS($powiadomienieSMS)
            ->setPunktWydaniaPrzesylkiBiznesowejPlus($punktWydaniaPrzesylkiBiznesowejPlus)
            ->setPunktWydaniaPrzesylkiBiznesowej($punktWydaniaPrzesylkiBiznesowej)
            ->setSiecPlacowek($siecPlacowek)
            ->setIdZPO($idZPO);
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
     * @return \App\ElektronicznyNadawca\StructType\PlacowkaPocztowaType
     */
    public function setId(int $id): self
    {
        $this->id = $id;
        
        return $this;
    }
    /**
     * Get lokalizacjaGeograficzna value
     * @return \App\ElektronicznyNadawca\StructType\LokalizacjaGeograficznaType|null
     */
    public function getLokalizacjaGeograficzna(): ?\App\ElektronicznyNadawca\StructType\LokalizacjaGeograficznaType
    {
        return $this->lokalizacjaGeograficzna;
    }
    /**
     * Set lokalizacjaGeograficzna value
     * @param \App\ElektronicznyNadawca\StructType\LokalizacjaGeograficznaType $lokalizacjaGeograficzna
     * @return \App\ElektronicznyNadawca\StructType\PlacowkaPocztowaType
     */
    public function setLokalizacjaGeograficzna(?\App\ElektronicznyNadawca\StructType\LokalizacjaGeograficznaType $lokalizacjaGeograficzna = null): self
    {
        $this->lokalizacjaGeograficzna = $lokalizacjaGeograficzna;
        
        return $this;
    }
    /**
     * Get godzinyPracy value
     * @return \App\ElektronicznyNadawca\StructType\GodzinyPracyType|null
     */
    public function getGodzinyPracy(): ?\App\ElektronicznyNadawca\StructType\GodzinyPracyType
    {
        return $this->godzinyPracy;
    }
    /**
     * Set godzinyPracy value
     * @param \App\ElektronicznyNadawca\StructType\GodzinyPracyType $godzinyPracy
     * @return \App\ElektronicznyNadawca\StructType\PlacowkaPocztowaType
     */
    public function setGodzinyPracy(?\App\ElektronicznyNadawca\StructType\GodzinyPracyType $godzinyPracy = null): self
    {
        $this->godzinyPracy = $godzinyPracy;
        
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
     * @return \App\ElektronicznyNadawca\StructType\PlacowkaPocztowaType
     */
    public function setOpis(?string $opis = null): self
    {
        $this->opis = $opis;
        
        return $this;
    }
    /**
     * Get deliveryPath value
     * @return \App\ElektronicznyNadawca\StructType\DeliveryPathType|null
     */
    public function getDeliveryPath(): ?\App\ElektronicznyNadawca\StructType\DeliveryPathType
    {
        return $this->deliveryPath;
    }
    /**
     * Set deliveryPath value
     * @param \App\ElektronicznyNadawca\StructType\DeliveryPathType $deliveryPath
     * @return \App\ElektronicznyNadawca\StructType\PlacowkaPocztowaType
     */
    public function setDeliveryPath(?\App\ElektronicznyNadawca\StructType\DeliveryPathType $deliveryPath = null): self
    {
        $this->deliveryPath = $deliveryPath;
        
        return $this;
    }
    /**
     * Get typ value
     * @return string|null
     */
    public function getTyp(): ?string
    {
        return $this->typ;
    }
    /**
     * Set typ value
     * @param string $typ
     * @return \App\ElektronicznyNadawca\StructType\PlacowkaPocztowaType
     */
    public function setTyp(?string $typ = null): self
    {
        $this->typ = $typ;
        
        return $this;
    }
    /**
     * Get rodzajPlatnosci value
     * @return string[]
     */
    public function getRodzajPlatnosci(): ?array
    {
        return $this->rodzajPlatnosci;
    }
    /**
     * Set rodzajPlatnosci value
     * @param string[] $rodzajPlatnosci
     * @return \App\ElektronicznyNadawca\StructType\PlacowkaPocztowaType
     */
    public function setRodzajPlatnosci(?array $rodzajPlatnosci = null): self
    {
        $this->rodzajPlatnosci = $rodzajPlatnosci;
        
        return $this;
    }
    /**
     * Add item to rodzajPlatnosci value
     * @uses \App\ElektronicznyNadawca\EnumType\RodzajPlatnosciEnum::valueIsValid()
     * @uses \App\ElektronicznyNadawca\EnumType\RodzajPlatnosciEnum::getValidValues()
     * @throws InvalidArgumentException
     * @param string $item
     * @return \App\ElektronicznyNadawca\StructType\PlacowkaPocztowaType
     */
    public function addToRodzajPlatnosci(string $item): self
    {
        $this->rodzajPlatnosci[] = $item;
        
        return $this;
    }
    /**
     * Get funkcja value
     * @return string|null
     */
    public function getFunkcja(): ?string
    {
        return $this->funkcja;
    }
    /**
     * Set funkcja value
     * @param string $funkcja
     * @return \App\ElektronicznyNadawca\StructType\PlacowkaPocztowaType
     */
    public function setFunkcja(?string $funkcja = null): self
    {
        $this->funkcja = $funkcja;
        
        return $this;
    }
    /**
     * Get maksymalnaKwotaPobrania value
     * @return int|null
     */
    public function getMaksymalnaKwotaPobrania(): ?int
    {
        return $this->maksymalnaKwotaPobrania;
    }
    /**
     * Set maksymalnaKwotaPobrania value
     * @param int $maksymalnaKwotaPobrania
     * @return \App\ElektronicznyNadawca\StructType\PlacowkaPocztowaType
     */
    public function setMaksymalnaKwotaPobrania(?int $maksymalnaKwotaPobrania = null): self
    {
        $this->maksymalnaKwotaPobrania = $maksymalnaKwotaPobrania;
        
        return $this;
    }
    /**
     * Get prefixNazwy value
     * @return string|null
     */
    public function getPrefixNazwy(): ?string
    {
        return $this->prefixNazwy;
    }
    /**
     * Set prefixNazwy value
     * @param string $prefixNazwy
     * @return \App\ElektronicznyNadawca\StructType\PlacowkaPocztowaType
     */
    public function setPrefixNazwy(?string $prefixNazwy = null): self
    {
        $this->prefixNazwy = $prefixNazwy;
        
        return $this;
    }
    /**
     * Get nazwa value
     * @return string|null
     */
    public function getNazwa(): ?string
    {
        return $this->nazwa;
    }
    /**
     * Set nazwa value
     * @param string $nazwa
     * @return \App\ElektronicznyNadawca\StructType\PlacowkaPocztowaType
     */
    public function setNazwa(?string $nazwa = null): self
    {
        $this->nazwa = $nazwa;
        
        return $this;
    }
    /**
     * Get wojewodztwo value
     * @return string|null
     */
    public function getWojewodztwo(): ?string
    {
        return $this->wojewodztwo;
    }
    /**
     * Set wojewodztwo value
     * @param string $wojewodztwo
     * @return \App\ElektronicznyNadawca\StructType\PlacowkaPocztowaType
     */
    public function setWojewodztwo(?string $wojewodztwo = null): self
    {
        $this->wojewodztwo = $wojewodztwo;
        
        return $this;
    }
    /**
     * Get powiat value
     * @return string|null
     */
    public function getPowiat(): ?string
    {
        return $this->powiat;
    }
    /**
     * Set powiat value
     * @param string $powiat
     * @return \App\ElektronicznyNadawca\StructType\PlacowkaPocztowaType
     */
    public function setPowiat(?string $powiat = null): self
    {
        $this->powiat = $powiat;
        
        return $this;
    }
    /**
     * Get miejsce value
     * @return string|null
     */
    public function getMiejsce(): ?string
    {
        return $this->miejsce;
    }
    /**
     * Set miejsce value
     * @param string $miejsce
     * @return \App\ElektronicznyNadawca\StructType\PlacowkaPocztowaType
     */
    public function setMiejsce(?string $miejsce = null): self
    {
        $this->miejsce = $miejsce;
        
        return $this;
    }
    /**
     * Get kodPocztowy value
     * @return string|null
     */
    public function getKodPocztowy(): ?string
    {
        return $this->kodPocztowy;
    }
    /**
     * Set kodPocztowy value
     * @param string $kodPocztowy
     * @return \App\ElektronicznyNadawca\StructType\PlacowkaPocztowaType
     */
    public function setKodPocztowy(?string $kodPocztowy = null): self
    {
        $this->kodPocztowy = $kodPocztowy;
        
        return $this;
    }
    /**
     * Get miejscowosc value
     * @return string|null
     */
    public function getMiejscowosc(): ?string
    {
        return $this->miejscowosc;
    }
    /**
     * Set miejscowosc value
     * @param string $miejscowosc
     * @return \App\ElektronicznyNadawca\StructType\PlacowkaPocztowaType
     */
    public function setMiejscowosc(?string $miejscowosc = null): self
    {
        $this->miejscowosc = $miejscowosc;
        
        return $this;
    }
    /**
     * Get ulica value
     * @return string|null
     */
    public function getUlica(): ?string
    {
        return $this->ulica;
    }
    /**
     * Set ulica value
     * @param string $ulica
     * @return \App\ElektronicznyNadawca\StructType\PlacowkaPocztowaType
     */
    public function setUlica(?string $ulica = null): self
    {
        $this->ulica = $ulica;
        
        return $this;
    }
    /**
     * Get numerDomu value
     * @return string|null
     */
    public function getNumerDomu(): ?string
    {
        return $this->numerDomu;
    }
    /**
     * Set numerDomu value
     * @param string $numerDomu
     * @return \App\ElektronicznyNadawca\StructType\PlacowkaPocztowaType
     */
    public function setNumerDomu(?string $numerDomu = null): self
    {
        $this->numerDomu = $numerDomu;
        
        return $this;
    }
    /**
     * Get numerLokalu value
     * @return string|null
     */
    public function getNumerLokalu(): ?string
    {
        return $this->numerLokalu;
    }
    /**
     * Set numerLokalu value
     * @param string $numerLokalu
     * @return \App\ElektronicznyNadawca\StructType\PlacowkaPocztowaType
     */
    public function setNumerLokalu(?string $numerLokalu = null): self
    {
        $this->numerLokalu = $numerLokalu;
        
        return $this;
    }
    /**
     * Get nazwaWydruk value
     * @return string|null
     */
    public function getNazwaWydruk(): ?string
    {
        return $this->nazwaWydruk;
    }
    /**
     * Set nazwaWydruk value
     * @param string $nazwaWydruk
     * @return \App\ElektronicznyNadawca\StructType\PlacowkaPocztowaType
     */
    public function setNazwaWydruk(?string $nazwaWydruk = null): self
    {
        $this->nazwaWydruk = $nazwaWydruk;
        
        return $this;
    }
    /**
     * Get punktWydaniaEPrzesylki value
     * @return bool|null
     */
    public function getPunktWydaniaEPrzesylki(): ?bool
    {
        return $this->punktWydaniaEPrzesylki;
    }
    /**
     * Set punktWydaniaEPrzesylki value
     * @param bool $punktWydaniaEPrzesylki
     * @return \App\ElektronicznyNadawca\StructType\PlacowkaPocztowaType
     */
    public function setPunktWydaniaEPrzesylki(?bool $punktWydaniaEPrzesylki = null): self
    {
        $this->punktWydaniaEPrzesylki = $punktWydaniaEPrzesylki;
        
        return $this;
    }
    /**
     * Get powiadomienieSMS value
     * @return bool|null
     */
    public function getPowiadomienieSMS(): ?bool
    {
        return $this->powiadomienieSMS;
    }
    /**
     * Set powiadomienieSMS value
     * @param bool $powiadomienieSMS
     * @return \App\ElektronicznyNadawca\StructType\PlacowkaPocztowaType
     */
    public function setPowiadomienieSMS(?bool $powiadomienieSMS = null): self
    {
        $this->powiadomienieSMS = $powiadomienieSMS;
        
        return $this;
    }
    /**
     * Get punktWydaniaPrzesylkiBiznesowejPlus value
     * @return bool|null
     */
    public function getPunktWydaniaPrzesylkiBiznesowejPlus(): ?bool
    {
        return $this->punktWydaniaPrzesylkiBiznesowejPlus;
    }
    /**
     * Set punktWydaniaPrzesylkiBiznesowejPlus value
     * @param bool $punktWydaniaPrzesylkiBiznesowejPlus
     * @return \App\ElektronicznyNadawca\StructType\PlacowkaPocztowaType
     */
    public function setPunktWydaniaPrzesylkiBiznesowejPlus(?bool $punktWydaniaPrzesylkiBiznesowejPlus = null): self
    {
        $this->punktWydaniaPrzesylkiBiznesowejPlus = $punktWydaniaPrzesylkiBiznesowejPlus;
        
        return $this;
    }
    /**
     * Get punktWydaniaPrzesylkiBiznesowej value
     * @return bool|null
     */
    public function getPunktWydaniaPrzesylkiBiznesowej(): ?bool
    {
        return $this->punktWydaniaPrzesylkiBiznesowej;
    }
    /**
     * Set punktWydaniaPrzesylkiBiznesowej value
     * @param bool $punktWydaniaPrzesylkiBiznesowej
     * @return \App\ElektronicznyNadawca\StructType\PlacowkaPocztowaType
     */
    public function setPunktWydaniaPrzesylkiBiznesowej(?bool $punktWydaniaPrzesylkiBiznesowej = null): self
    {
        $this->punktWydaniaPrzesylkiBiznesowej = $punktWydaniaPrzesylkiBiznesowej;
        
        return $this;
    }
    /**
     * Get siecPlacowek value
     * @return string|null
     */
    public function getSiecPlacowek(): ?string
    {
        return $this->siecPlacowek;
    }
    /**
     * Set siecPlacowek value
     * @param string $siecPlacowek
     * @return \App\ElektronicznyNadawca\StructType\PlacowkaPocztowaType
     */
    public function setSiecPlacowek(?string $siecPlacowek = null): self
    {
        $this->siecPlacowek = $siecPlacowek;
        
        return $this;
    }
    /**
     * Get idZPO value
     * @return string|null
     */
    public function getIdZPO(): ?string
    {
        return $this->idZPO;
    }
    /**
     * Set idZPO value
     * @param string $idZPO
     * @return \App\ElektronicznyNadawca\StructType\PlacowkaPocztowaType
     */
    public function setIdZPO(?string $idZPO = null): self
    {
        $this->idZPO = $idZPO;
        
        return $this;
    }
}
