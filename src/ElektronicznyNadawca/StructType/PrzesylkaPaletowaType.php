<?php

declare(strict_types=1);

namespace App\ElektronicznyNadawca\StructType;



/**
 * This class stands for przesylkaPaletowaType StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class PrzesylkaPaletowaType extends PrzesylkaRejestrowanaType
{
    /**
     * The paleta
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \App\ElektronicznyNadawca\StructType\PaletaType
     */
    public \App\ElektronicznyNadawca\StructType\PaletaType $paleta;
    /**
     * The miejsceOdbioru
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \App\ElektronicznyNadawca\StructType\AdresType|null
     */
    public ?\App\ElektronicznyNadawca\StructType\AdresType $miejsceOdbioru = null;
    /**
     * The miejsceDoreczenia
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \App\ElektronicznyNadawca\StructType\AdresType|null
     */
    public ?\App\ElektronicznyNadawca\StructType\AdresType $miejsceDoreczenia = null;
    /**
     * The platnik
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \App\ElektronicznyNadawca\StructType\PlatnikType|null
     */
    public ?\App\ElektronicznyNadawca\StructType\PlatnikType $platnik = null;
    /**
     * The pobranie
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \App\ElektronicznyNadawca\StructType\PobranieType|null
     */
    public ?\App\ElektronicznyNadawca\StructType\PobranieType $pobranie = null;
    /**
     * The subPaleta
     * Meta information extracted from the WSDL
     * - maxOccurs: 32
     * - minOccurs: 0
     * @var \App\ElektronicznyNadawca\StructType\SubPrzesylkaPaletowaType[]
     */
    public ?array $subPaleta = null;
    /**
     * The daneSent
     * Meta information extracted from the WSDL
     * - maxOccurs: 10
     * - minOccurs: 0
     * @var \App\ElektronicznyNadawca\StructType\DaneSentType[]
     */
    public ?array $daneSent = null;
    /**
     * The awizacja
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \App\ElektronicznyNadawca\StructType\AwizacjaType|null
     */
    public ?\App\ElektronicznyNadawca\StructType\AwizacjaType $awizacja = null;
    /**
     * The zawartosc
     * @var string|null
     */
    public ?string $zawartosc = null;
    /**
     * The masa
     * Meta information extracted from the WSDL
     * - documentation: masa przesyłki podana w gramach
     * - base: xsd:int
     * - maxInclusive: 9999999
     * - minInclusive: 1
     * @var int|null
     */
    public ?int $masa = null;
    /**
     * The dataZaladunku
     * @var string|null
     */
    public ?string $dataZaladunku = null;
    /**
     * The dataDostawy
     * @var string|null
     */
    public ?string $dataDostawy = null;
    /**
     * The wartosc
     * Meta information extracted from the WSDL
     * - documentation: zadeklarowana wartość przesyłki w groszach
     * - base: xsd:int
     * - maxInclusive: 9999999
     * - minInclusive: 0
     * @var int|null
     */
    public ?int $wartosc = null;
    /**
     * The iloscZwracanychPaletEUR
     * @var int|null
     */
    public ?int $iloscZwracanychPaletEUR = null;
    /**
     * The zalaczonaFV
     * @var string|null
     */
    public ?string $zalaczonaFV = null;
    /**
     * The zalaczonyWZ
     * @var string|null
     */
    public ?string $zalaczonyWZ = null;
    /**
     * The zalaczoneInne
     * @var string|null
     */
    public ?string $zalaczoneInne = null;
    /**
     * The zwracanaFV
     * @var string|null
     */
    public ?string $zwracanaFV = null;
    /**
     * The zwracanyWZ
     * @var string|null
     */
    public ?string $zwracanyWZ = null;
    /**
     * The zwracaneInne
     * @var string|null
     */
    public ?string $zwracaneInne = null;
    /**
     * The powiadomienieNadawcy
     * @var string|null
     */
    public ?string $powiadomienieNadawcy = null;
    /**
     * The powiadomienieOdbiorcy
     * @var string|null
     */
    public ?string $powiadomienieOdbiorcy = null;
    /**
     * The dostawaWSobote
     * @var bool|null
     */
    public ?bool $dostawaWSobote = null;
    /**
     * The przygotowanieDokumentowPrzewozowych
     * @var bool|null
     */
    public ?bool $przygotowanieDokumentowPrzewozowych = null;
    /**
     * The dostawaSamochodemDedykowanym
     * @var bool|null
     */
    public ?bool $dostawaSamochodemDedykowanym = null;
    /**
     * The zmianaDanychAdresowych
     * @var bool|null
     */
    public ?bool $zmianaDanychAdresowych = null;
    /**
     * The ustalenieTerminuDostawy
     * @var bool|null
     */
    public ?bool $ustalenieTerminuDostawy = null;
    /**
     * The samochodZWinda
     * @var bool|null
     */
    public ?bool $samochodZWinda = null;
    /**
     * The zabranieOpakowania
     * @var bool|null
     */
    public ?bool $zabranieOpakowania = null;
    /**
     * The wniesienie
     * @var bool|null
     */
    public ?bool $wniesienie = null;
    /**
     * The awizoSMS
     * @var bool|null
     */
    public ?bool $awizoSMS = null;
    /**
     * Constructor method for przesylkaPaletowaType
     * @uses PrzesylkaPaletowaType::setPaleta()
     * @uses PrzesylkaPaletowaType::setMiejsceOdbioru()
     * @uses PrzesylkaPaletowaType::setMiejsceDoreczenia()
     * @uses PrzesylkaPaletowaType::setPlatnik()
     * @uses PrzesylkaPaletowaType::setPobranie()
     * @uses PrzesylkaPaletowaType::setSubPaleta()
     * @uses PrzesylkaPaletowaType::setDaneSent()
     * @uses PrzesylkaPaletowaType::setAwizacja()
     * @uses PrzesylkaPaletowaType::setZawartosc()
     * @uses PrzesylkaPaletowaType::setMasa()
     * @uses PrzesylkaPaletowaType::setDataZaladunku()
     * @uses PrzesylkaPaletowaType::setDataDostawy()
     * @uses PrzesylkaPaletowaType::setWartosc()
     * @uses PrzesylkaPaletowaType::setIloscZwracanychPaletEUR()
     * @uses PrzesylkaPaletowaType::setZalaczonaFV()
     * @uses PrzesylkaPaletowaType::setZalaczonyWZ()
     * @uses PrzesylkaPaletowaType::setZalaczoneInne()
     * @uses PrzesylkaPaletowaType::setZwracanaFV()
     * @uses PrzesylkaPaletowaType::setZwracanyWZ()
     * @uses PrzesylkaPaletowaType::setZwracaneInne()
     * @uses PrzesylkaPaletowaType::setPowiadomienieNadawcy()
     * @uses PrzesylkaPaletowaType::setPowiadomienieOdbiorcy()
     * @uses PrzesylkaPaletowaType::setDostawaWSobote()
     * @uses PrzesylkaPaletowaType::setPrzygotowanieDokumentowPrzewozowych()
     * @uses PrzesylkaPaletowaType::setDostawaSamochodemDedykowanym()
     * @uses PrzesylkaPaletowaType::setZmianaDanychAdresowych()
     * @uses PrzesylkaPaletowaType::setUstalenieTerminuDostawy()
     * @uses PrzesylkaPaletowaType::setSamochodZWinda()
     * @uses PrzesylkaPaletowaType::setZabranieOpakowania()
     * @uses PrzesylkaPaletowaType::setWniesienie()
     * @uses PrzesylkaPaletowaType::setAwizoSMS()
     * @param \App\ElektronicznyNadawca\StructType\PaletaType $paleta
     * @param \App\ElektronicznyNadawca\StructType\AdresType $miejsceOdbioru
     * @param \App\ElektronicznyNadawca\StructType\AdresType $miejsceDoreczenia
     * @param \App\ElektronicznyNadawca\StructType\PlatnikType $platnik
     * @param \App\ElektronicznyNadawca\StructType\PobranieType $pobranie
     * @param \App\ElektronicznyNadawca\StructType\SubPrzesylkaPaletowaType[] $subPaleta
     * @param \App\ElektronicznyNadawca\StructType\DaneSentType[] $daneSent
     * @param \App\ElektronicznyNadawca\StructType\AwizacjaType $awizacja
     * @param string $zawartosc
     * @param int $masa
     * @param string $dataZaladunku
     * @param string $dataDostawy
     * @param int $wartosc
     * @param int $iloscZwracanychPaletEUR
     * @param string $zalaczonaFV
     * @param string $zalaczonyWZ
     * @param string $zalaczoneInne
     * @param string $zwracanaFV
     * @param string $zwracanyWZ
     * @param string $zwracaneInne
     * @param string $powiadomienieNadawcy
     * @param string $powiadomienieOdbiorcy
     * @param bool $dostawaWSobote
     * @param bool $przygotowanieDokumentowPrzewozowych
     * @param bool $dostawaSamochodemDedykowanym
     * @param bool $zmianaDanychAdresowych
     * @param bool $ustalenieTerminuDostawy
     * @param bool $samochodZWinda
     * @param bool $zabranieOpakowania
     * @param bool $wniesienie
     * @param bool $awizoSMS
     */
    public function __construct(\App\ElektronicznyNadawca\StructType\PaletaType $paleta, ?\App\ElektronicznyNadawca\StructType\AdresType $miejsceOdbioru = null, ?\App\ElektronicznyNadawca\StructType\AdresType $miejsceDoreczenia = null, ?\App\ElektronicznyNadawca\StructType\PlatnikType $platnik = null, ?\App\ElektronicznyNadawca\StructType\PobranieType $pobranie = null, ?array $subPaleta = null, ?array $daneSent = null, ?\App\ElektronicznyNadawca\StructType\AwizacjaType $awizacja = null, ?string $zawartosc = null, ?int $masa = null, ?string $dataZaladunku = null, ?string $dataDostawy = null, ?int $wartosc = null, ?int $iloscZwracanychPaletEUR = null, ?string $zalaczonaFV = null, ?string $zalaczonyWZ = null, ?string $zalaczoneInne = null, ?string $zwracanaFV = null, ?string $zwracanyWZ = null, ?string $zwracaneInne = null, ?string $powiadomienieNadawcy = null, ?string $powiadomienieOdbiorcy = null, ?bool $dostawaWSobote = null, ?bool $przygotowanieDokumentowPrzewozowych = null, ?bool $dostawaSamochodemDedykowanym = null, ?bool $zmianaDanychAdresowych = null, ?bool $ustalenieTerminuDostawy = null, ?bool $samochodZWinda = null, ?bool $zabranieOpakowania = null, ?bool $wniesienie = null, ?bool $awizoSMS = null)
    {
        $this
            ->setPaleta($paleta)
            ->setMiejsceOdbioru($miejsceOdbioru)
            ->setMiejsceDoreczenia($miejsceDoreczenia)
            ->setPlatnik($platnik)
            ->setPobranie($pobranie)
            ->setSubPaleta($subPaleta)
            ->setDaneSent($daneSent)
            ->setAwizacja($awizacja)
            ->setZawartosc($zawartosc)
            ->setMasa($masa)
            ->setDataZaladunku($dataZaladunku)
            ->setDataDostawy($dataDostawy)
            ->setWartosc($wartosc)
            ->setIloscZwracanychPaletEUR($iloscZwracanychPaletEUR)
            ->setZalaczonaFV($zalaczonaFV)
            ->setZalaczonyWZ($zalaczonyWZ)
            ->setZalaczoneInne($zalaczoneInne)
            ->setZwracanaFV($zwracanaFV)
            ->setZwracanyWZ($zwracanyWZ)
            ->setZwracaneInne($zwracaneInne)
            ->setPowiadomienieNadawcy($powiadomienieNadawcy)
            ->setPowiadomienieOdbiorcy($powiadomienieOdbiorcy)
            ->setDostawaWSobote($dostawaWSobote)
            ->setPrzygotowanieDokumentowPrzewozowych($przygotowanieDokumentowPrzewozowych)
            ->setDostawaSamochodemDedykowanym($dostawaSamochodemDedykowanym)
            ->setZmianaDanychAdresowych($zmianaDanychAdresowych)
            ->setUstalenieTerminuDostawy($ustalenieTerminuDostawy)
            ->setSamochodZWinda($samochodZWinda)
            ->setZabranieOpakowania($zabranieOpakowania)
            ->setWniesienie($wniesienie)
            ->setAwizoSMS($awizoSMS);
    }
    /**
     * Get paleta value
     * @return \App\ElektronicznyNadawca\StructType\PaletaType
     */
    public function getPaleta(): \App\ElektronicznyNadawca\StructType\PaletaType
    {
        return $this->paleta;
    }
    /**
     * Set paleta value
     * @param \App\ElektronicznyNadawca\StructType\PaletaType $paleta
     * @return \App\ElektronicznyNadawca\StructType\PrzesylkaPaletowaType
     */
    public function setPaleta(\App\ElektronicznyNadawca\StructType\PaletaType $paleta): self
    {
        $this->paleta = $paleta;
        
        return $this;
    }
    /**
     * Get miejsceOdbioru value
     * @return \App\ElektronicznyNadawca\StructType\AdresType|null
     */
    public function getMiejsceOdbioru(): ?\App\ElektronicznyNadawca\StructType\AdresType
    {
        return $this->miejsceOdbioru;
    }
    /**
     * Set miejsceOdbioru value
     * @param \App\ElektronicznyNadawca\StructType\AdresType $miejsceOdbioru
     * @return \App\ElektronicznyNadawca\StructType\PrzesylkaPaletowaType
     */
    public function setMiejsceOdbioru(?\App\ElektronicznyNadawca\StructType\AdresType $miejsceOdbioru = null): self
    {
        $this->miejsceOdbioru = $miejsceOdbioru;
        
        return $this;
    }
    /**
     * Get miejsceDoreczenia value
     * @return \App\ElektronicznyNadawca\StructType\AdresType|null
     */
    public function getMiejsceDoreczenia(): ?\App\ElektronicznyNadawca\StructType\AdresType
    {
        return $this->miejsceDoreczenia;
    }
    /**
     * Set miejsceDoreczenia value
     * @param \App\ElektronicznyNadawca\StructType\AdresType $miejsceDoreczenia
     * @return \App\ElektronicznyNadawca\StructType\PrzesylkaPaletowaType
     */
    public function setMiejsceDoreczenia(?\App\ElektronicznyNadawca\StructType\AdresType $miejsceDoreczenia = null): self
    {
        $this->miejsceDoreczenia = $miejsceDoreczenia;
        
        return $this;
    }
    /**
     * Get platnik value
     * @return \App\ElektronicznyNadawca\StructType\PlatnikType|null
     */
    public function getPlatnik(): ?\App\ElektronicznyNadawca\StructType\PlatnikType
    {
        return $this->platnik;
    }
    /**
     * Set platnik value
     * @param \App\ElektronicznyNadawca\StructType\PlatnikType $platnik
     * @return \App\ElektronicznyNadawca\StructType\PrzesylkaPaletowaType
     */
    public function setPlatnik(?\App\ElektronicznyNadawca\StructType\PlatnikType $platnik = null): self
    {
        $this->platnik = $platnik;
        
        return $this;
    }
    /**
     * Get pobranie value
     * @return \App\ElektronicznyNadawca\StructType\PobranieType|null
     */
    public function getPobranie(): ?\App\ElektronicznyNadawca\StructType\PobranieType
    {
        return $this->pobranie;
    }
    /**
     * Set pobranie value
     * @param \App\ElektronicznyNadawca\StructType\PobranieType $pobranie
     * @return \App\ElektronicznyNadawca\StructType\PrzesylkaPaletowaType
     */
    public function setPobranie(?\App\ElektronicznyNadawca\StructType\PobranieType $pobranie = null): self
    {
        $this->pobranie = $pobranie;
        
        return $this;
    }
    /**
     * Get subPaleta value
     * @return \App\ElektronicznyNadawca\StructType\SubPrzesylkaPaletowaType[]
     */
    public function getSubPaleta(): ?array
    {
        return $this->subPaleta;
    }
    /**
     * Set subPaleta value
     * @param \App\ElektronicznyNadawca\StructType\SubPrzesylkaPaletowaType[] $subPaleta
     * @return \App\ElektronicznyNadawca\StructType\PrzesylkaPaletowaType
     */
    public function setSubPaleta(?array $subPaleta = null): self
    {
        $this->subPaleta = $subPaleta;
        
        return $this;
    }
    /**
     * Add item to subPaleta value
     * @throws InvalidArgumentException
     * @param \App\ElektronicznyNadawca\StructType\SubPrzesylkaPaletowaType $item
     * @return \App\ElektronicznyNadawca\StructType\PrzesylkaPaletowaType
     */
    public function addToSubPaleta(\App\ElektronicznyNadawca\StructType\SubPrzesylkaPaletowaType $item): self
    {
        $this->subPaleta[] = $item;
        
        return $this;
    }
    /**
     * Get daneSent value
     * @return \App\ElektronicznyNadawca\StructType\DaneSentType[]
     */
    public function getDaneSent(): ?array
    {
        return $this->daneSent;
    }
    /**
     * Set daneSent value
     * @param \App\ElektronicznyNadawca\StructType\DaneSentType[] $daneSent
     * @return \App\ElektronicznyNadawca\StructType\PrzesylkaPaletowaType
     */
    public function setDaneSent(?array $daneSent = null): self
    {
        $this->daneSent = $daneSent;
        
        return $this;
    }
    /**
     * Add item to daneSent value
     * @throws InvalidArgumentException
     * @param \App\ElektronicznyNadawca\StructType\DaneSentType $item
     * @return \App\ElektronicznyNadawca\StructType\PrzesylkaPaletowaType
     */
    public function addToDaneSent(\App\ElektronicznyNadawca\StructType\DaneSentType $item): self
    {
        $this->daneSent[] = $item;
        
        return $this;
    }
    /**
     * Get awizacja value
     * @return \App\ElektronicznyNadawca\StructType\AwizacjaType|null
     */
    public function getAwizacja(): ?\App\ElektronicznyNadawca\StructType\AwizacjaType
    {
        return $this->awizacja;
    }
    /**
     * Set awizacja value
     * @param \App\ElektronicznyNadawca\StructType\AwizacjaType $awizacja
     * @return \App\ElektronicznyNadawca\StructType\PrzesylkaPaletowaType
     */
    public function setAwizacja(?\App\ElektronicznyNadawca\StructType\AwizacjaType $awizacja = null): self
    {
        $this->awizacja = $awizacja;
        
        return $this;
    }
    /**
     * Get zawartosc value
     * @return string|null
     */
    public function getZawartosc(): ?string
    {
        return $this->zawartosc;
    }
    /**
     * Set zawartosc value
     * @param string $zawartosc
     * @return \App\ElektronicznyNadawca\StructType\PrzesylkaPaletowaType
     */
    public function setZawartosc(?string $zawartosc = null): self
    {
        $this->zawartosc = $zawartosc;
        
        return $this;
    }
    /**
     * Get masa value
     * @return int|null
     */
    public function getMasa(): ?int
    {
        return $this->masa;
    }
    /**
     * Set masa value
     * @param int $masa
     * @return \App\ElektronicznyNadawca\StructType\PrzesylkaPaletowaType
     */
    public function setMasa(?int $masa = null): self
    {
        $this->masa = $masa;
        
        return $this;
    }
    /**
     * Get dataZaladunku value
     * @return string|null
     */
    public function getDataZaladunku(): ?string
    {
        return $this->dataZaladunku;
    }
    /**
     * Set dataZaladunku value
     * @param string $dataZaladunku
     * @return \App\ElektronicznyNadawca\StructType\PrzesylkaPaletowaType
     */
    public function setDataZaladunku(?string $dataZaladunku = null): self
    {
        $this->dataZaladunku = $dataZaladunku;
        
        return $this;
    }
    /**
     * Get dataDostawy value
     * @return string|null
     */
    public function getDataDostawy(): ?string
    {
        return $this->dataDostawy;
    }
    /**
     * Set dataDostawy value
     * @param string $dataDostawy
     * @return \App\ElektronicznyNadawca\StructType\PrzesylkaPaletowaType
     */
    public function setDataDostawy(?string $dataDostawy = null): self
    {
        $this->dataDostawy = $dataDostawy;
        
        return $this;
    }
    /**
     * Get wartosc value
     * @return int|null
     */
    public function getWartosc(): ?int
    {
        return $this->wartosc;
    }
    /**
     * Set wartosc value
     * @param int $wartosc
     * @return \App\ElektronicznyNadawca\StructType\PrzesylkaPaletowaType
     */
    public function setWartosc(?int $wartosc = null): self
    {
        $this->wartosc = $wartosc;
        
        return $this;
    }
    /**
     * Get iloscZwracanychPaletEUR value
     * @return int|null
     */
    public function getIloscZwracanychPaletEUR(): ?int
    {
        return $this->iloscZwracanychPaletEUR;
    }
    /**
     * Set iloscZwracanychPaletEUR value
     * @param int $iloscZwracanychPaletEUR
     * @return \App\ElektronicznyNadawca\StructType\PrzesylkaPaletowaType
     */
    public function setIloscZwracanychPaletEUR(?int $iloscZwracanychPaletEUR = null): self
    {
        $this->iloscZwracanychPaletEUR = $iloscZwracanychPaletEUR;
        
        return $this;
    }
    /**
     * Get zalaczonaFV value
     * @return string|null
     */
    public function getZalaczonaFV(): ?string
    {
        return $this->zalaczonaFV;
    }
    /**
     * Set zalaczonaFV value
     * @param string $zalaczonaFV
     * @return \App\ElektronicznyNadawca\StructType\PrzesylkaPaletowaType
     */
    public function setZalaczonaFV(?string $zalaczonaFV = null): self
    {
        $this->zalaczonaFV = $zalaczonaFV;
        
        return $this;
    }
    /**
     * Get zalaczonyWZ value
     * @return string|null
     */
    public function getZalaczonyWZ(): ?string
    {
        return $this->zalaczonyWZ;
    }
    /**
     * Set zalaczonyWZ value
     * @param string $zalaczonyWZ
     * @return \App\ElektronicznyNadawca\StructType\PrzesylkaPaletowaType
     */
    public function setZalaczonyWZ(?string $zalaczonyWZ = null): self
    {
        $this->zalaczonyWZ = $zalaczonyWZ;
        
        return $this;
    }
    /**
     * Get zalaczoneInne value
     * @return string|null
     */
    public function getZalaczoneInne(): ?string
    {
        return $this->zalaczoneInne;
    }
    /**
     * Set zalaczoneInne value
     * @param string $zalaczoneInne
     * @return \App\ElektronicznyNadawca\StructType\PrzesylkaPaletowaType
     */
    public function setZalaczoneInne(?string $zalaczoneInne = null): self
    {
        $this->zalaczoneInne = $zalaczoneInne;
        
        return $this;
    }
    /**
     * Get zwracanaFV value
     * @return string|null
     */
    public function getZwracanaFV(): ?string
    {
        return $this->zwracanaFV;
    }
    /**
     * Set zwracanaFV value
     * @param string $zwracanaFV
     * @return \App\ElektronicznyNadawca\StructType\PrzesylkaPaletowaType
     */
    public function setZwracanaFV(?string $zwracanaFV = null): self
    {
        $this->zwracanaFV = $zwracanaFV;
        
        return $this;
    }
    /**
     * Get zwracanyWZ value
     * @return string|null
     */
    public function getZwracanyWZ(): ?string
    {
        return $this->zwracanyWZ;
    }
    /**
     * Set zwracanyWZ value
     * @param string $zwracanyWZ
     * @return \App\ElektronicznyNadawca\StructType\PrzesylkaPaletowaType
     */
    public function setZwracanyWZ(?string $zwracanyWZ = null): self
    {
        $this->zwracanyWZ = $zwracanyWZ;
        
        return $this;
    }
    /**
     * Get zwracaneInne value
     * @return string|null
     */
    public function getZwracaneInne(): ?string
    {
        return $this->zwracaneInne;
    }
    /**
     * Set zwracaneInne value
     * @param string $zwracaneInne
     * @return \App\ElektronicznyNadawca\StructType\PrzesylkaPaletowaType
     */
    public function setZwracaneInne(?string $zwracaneInne = null): self
    {
        $this->zwracaneInne = $zwracaneInne;
        
        return $this;
    }
    /**
     * Get powiadomienieNadawcy value
     * @return string|null
     */
    public function getPowiadomienieNadawcy(): ?string
    {
        return $this->powiadomienieNadawcy;
    }
    /**
     * Set powiadomienieNadawcy value
     * @param string $powiadomienieNadawcy
     * @return \App\ElektronicznyNadawca\StructType\PrzesylkaPaletowaType
     */
    public function setPowiadomienieNadawcy(?string $powiadomienieNadawcy = null): self
    {
        $this->powiadomienieNadawcy = $powiadomienieNadawcy;
        
        return $this;
    }
    /**
     * Get powiadomienieOdbiorcy value
     * @return string|null
     */
    public function getPowiadomienieOdbiorcy(): ?string
    {
        return $this->powiadomienieOdbiorcy;
    }
    /**
     * Set powiadomienieOdbiorcy value
     * @param string $powiadomienieOdbiorcy
     * @return \App\ElektronicznyNadawca\StructType\PrzesylkaPaletowaType
     */
    public function setPowiadomienieOdbiorcy(?string $powiadomienieOdbiorcy = null): self
    {
        $this->powiadomienieOdbiorcy = $powiadomienieOdbiorcy;
        
        return $this;
    }
    /**
     * Get dostawaWSobote value
     * @return bool|null
     */
    public function getDostawaWSobote(): ?bool
    {
        return $this->dostawaWSobote;
    }
    /**
     * Set dostawaWSobote value
     * @param bool $dostawaWSobote
     * @return \App\ElektronicznyNadawca\StructType\PrzesylkaPaletowaType
     */
    public function setDostawaWSobote(?bool $dostawaWSobote = null): self
    {
        $this->dostawaWSobote = $dostawaWSobote;
        
        return $this;
    }
    /**
     * Get przygotowanieDokumentowPrzewozowych value
     * @return bool|null
     */
    public function getPrzygotowanieDokumentowPrzewozowych(): ?bool
    {
        return $this->przygotowanieDokumentowPrzewozowych;
    }
    /**
     * Set przygotowanieDokumentowPrzewozowych value
     * @param bool $przygotowanieDokumentowPrzewozowych
     * @return \App\ElektronicznyNadawca\StructType\PrzesylkaPaletowaType
     */
    public function setPrzygotowanieDokumentowPrzewozowych(?bool $przygotowanieDokumentowPrzewozowych = null): self
    {
        $this->przygotowanieDokumentowPrzewozowych = $przygotowanieDokumentowPrzewozowych;
        
        return $this;
    }
    /**
     * Get dostawaSamochodemDedykowanym value
     * @return bool|null
     */
    public function getDostawaSamochodemDedykowanym(): ?bool
    {
        return $this->dostawaSamochodemDedykowanym;
    }
    /**
     * Set dostawaSamochodemDedykowanym value
     * @param bool $dostawaSamochodemDedykowanym
     * @return \App\ElektronicznyNadawca\StructType\PrzesylkaPaletowaType
     */
    public function setDostawaSamochodemDedykowanym(?bool $dostawaSamochodemDedykowanym = null): self
    {
        $this->dostawaSamochodemDedykowanym = $dostawaSamochodemDedykowanym;
        
        return $this;
    }
    /**
     * Get zmianaDanychAdresowych value
     * @return bool|null
     */
    public function getZmianaDanychAdresowych(): ?bool
    {
        return $this->zmianaDanychAdresowych;
    }
    /**
     * Set zmianaDanychAdresowych value
     * @param bool $zmianaDanychAdresowych
     * @return \App\ElektronicznyNadawca\StructType\PrzesylkaPaletowaType
     */
    public function setZmianaDanychAdresowych(?bool $zmianaDanychAdresowych = null): self
    {
        $this->zmianaDanychAdresowych = $zmianaDanychAdresowych;
        
        return $this;
    }
    /**
     * Get ustalenieTerminuDostawy value
     * @return bool|null
     */
    public function getUstalenieTerminuDostawy(): ?bool
    {
        return $this->ustalenieTerminuDostawy;
    }
    /**
     * Set ustalenieTerminuDostawy value
     * @param bool $ustalenieTerminuDostawy
     * @return \App\ElektronicznyNadawca\StructType\PrzesylkaPaletowaType
     */
    public function setUstalenieTerminuDostawy(?bool $ustalenieTerminuDostawy = null): self
    {
        $this->ustalenieTerminuDostawy = $ustalenieTerminuDostawy;
        
        return $this;
    }
    /**
     * Get samochodZWinda value
     * @return bool|null
     */
    public function getSamochodZWinda(): ?bool
    {
        return $this->samochodZWinda;
    }
    /**
     * Set samochodZWinda value
     * @param bool $samochodZWinda
     * @return \App\ElektronicznyNadawca\StructType\PrzesylkaPaletowaType
     */
    public function setSamochodZWinda(?bool $samochodZWinda = null): self
    {
        $this->samochodZWinda = $samochodZWinda;
        
        return $this;
    }
    /**
     * Get zabranieOpakowania value
     * @return bool|null
     */
    public function getZabranieOpakowania(): ?bool
    {
        return $this->zabranieOpakowania;
    }
    /**
     * Set zabranieOpakowania value
     * @param bool $zabranieOpakowania
     * @return \App\ElektronicznyNadawca\StructType\PrzesylkaPaletowaType
     */
    public function setZabranieOpakowania(?bool $zabranieOpakowania = null): self
    {
        $this->zabranieOpakowania = $zabranieOpakowania;
        
        return $this;
    }
    /**
     * Get wniesienie value
     * @return bool|null
     */
    public function getWniesienie(): ?bool
    {
        return $this->wniesienie;
    }
    /**
     * Set wniesienie value
     * @param bool $wniesienie
     * @return \App\ElektronicznyNadawca\StructType\PrzesylkaPaletowaType
     */
    public function setWniesienie(?bool $wniesienie = null): self
    {
        $this->wniesienie = $wniesienie;
        
        return $this;
    }
    /**
     * Get awizoSMS value
     * @return bool|null
     */
    public function getAwizoSMS(): ?bool
    {
        return $this->awizoSMS;
    }
    /**
     * Set awizoSMS value
     * @param bool $awizoSMS
     * @return \App\ElektronicznyNadawca\StructType\PrzesylkaPaletowaType
     */
    public function setAwizoSMS(?bool $awizoSMS = null): self
    {
        $this->awizoSMS = $awizoSMS;
        
        return $this;
    }
}
