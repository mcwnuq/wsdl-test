<?php

declare(strict_types=1);

namespace App\ElektronicznyNadawca\StructType;



/**
 * This class stands for SzczegolyZawartosciPrzesylkiZagranicznejType StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SzczegolyZawartosciPrzesylkiZagranicznejType
{
    /**
     * The okreslenieZawartosci
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public string $okreslenieZawartosci;
    /**
     * The ilosc
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    public int $ilosc;
    /**
     * The wartosc
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var float
     */
    public float $wartosc;
    /**
     * The masaNetto
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var int|null
     */
    public ?int $masaNetto = null;
    /**
     * The numerTaryfyHs
     * Meta information extracted from the WSDL
     * - documentation: Numer taryfy Zharmonizowanego Systemu (HS)
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    public ?string $numerTaryfyHs = null;
    /**
     * The krajPochodzeniaKodAlfa2
     * Meta information extracted from the WSDL
     * - documentation: Kod ISO (alfa-2) kraju pochodzenia opisywanej zawartości
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    public ?string $krajPochodzeniaKodAlfa2 = null;
    /**
     * Constructor method for SzczegolyZawartosciPrzesylkiZagranicznejType
     * @uses SzczegolyZawartosciPrzesylkiZagranicznejType::setOkreslenieZawartosci()
     * @uses SzczegolyZawartosciPrzesylkiZagranicznejType::setIlosc()
     * @uses SzczegolyZawartosciPrzesylkiZagranicznejType::setWartosc()
     * @uses SzczegolyZawartosciPrzesylkiZagranicznejType::setMasaNetto()
     * @uses SzczegolyZawartosciPrzesylkiZagranicznejType::setNumerTaryfyHs()
     * @uses SzczegolyZawartosciPrzesylkiZagranicznejType::setKrajPochodzeniaKodAlfa2()
     * @param string $okreslenieZawartosci
     * @param int $ilosc
     * @param float $wartosc
     * @param int $masaNetto
     * @param string $numerTaryfyHs
     * @param string $krajPochodzeniaKodAlfa2
     */
    public function __construct(string $okreslenieZawartosci, int $ilosc, float $wartosc, ?int $masaNetto = null, ?string $numerTaryfyHs = null, ?string $krajPochodzeniaKodAlfa2 = null)
    {
        $this
            ->setOkreslenieZawartosci($okreslenieZawartosci)
            ->setIlosc($ilosc)
            ->setWartosc($wartosc)
            ->setMasaNetto($masaNetto)
            ->setNumerTaryfyHs($numerTaryfyHs)
            ->setKrajPochodzeniaKodAlfa2($krajPochodzeniaKodAlfa2);
    }
    /**
     * Get okreslenieZawartosci value
     * @return string
     */
    public function getOkreslenieZawartosci(): string
    {
        return $this->okreslenieZawartosci;
    }
    /**
     * Set okreslenieZawartosci value
     * @param string $okreslenieZawartosci
     * @return \App\ElektronicznyNadawca\StructType\SzczegolyZawartosciPrzesylkiZagranicznejType
     */
    public function setOkreslenieZawartosci(string $okreslenieZawartosci): self
    {
        $this->okreslenieZawartosci = $okreslenieZawartosci;
        
        return $this;
    }
    /**
     * Get ilosc value
     * @return int
     */
    public function getIlosc(): int
    {
        return $this->ilosc;
    }
    /**
     * Set ilosc value
     * @param int $ilosc
     * @return \App\ElektronicznyNadawca\StructType\SzczegolyZawartosciPrzesylkiZagranicznejType
     */
    public function setIlosc(int $ilosc): self
    {
        $this->ilosc = $ilosc;
        
        return $this;
    }
    /**
     * Get wartosc value
     * @return float
     */
    public function getWartosc(): float
    {
        return $this->wartosc;
    }
    /**
     * Set wartosc value
     * @param float $wartosc
     * @return \App\ElektronicznyNadawca\StructType\SzczegolyZawartosciPrzesylkiZagranicznejType
     */
    public function setWartosc(float $wartosc): self
    {
        $this->wartosc = $wartosc;
        
        return $this;
    }
    /**
     * Get masaNetto value
     * @return int|null
     */
    public function getMasaNetto(): ?int
    {
        return $this->masaNetto;
    }
    /**
     * Set masaNetto value
     * @param int $masaNetto
     * @return \App\ElektronicznyNadawca\StructType\SzczegolyZawartosciPrzesylkiZagranicznejType
     */
    public function setMasaNetto(?int $masaNetto = null): self
    {
        $this->masaNetto = $masaNetto;
        
        return $this;
    }
    /**
     * Get numerTaryfyHs value
     * @return string|null
     */
    public function getNumerTaryfyHs(): ?string
    {
        return $this->numerTaryfyHs;
    }
    /**
     * Set numerTaryfyHs value
     * @param string $numerTaryfyHs
     * @return \App\ElektronicznyNadawca\StructType\SzczegolyZawartosciPrzesylkiZagranicznejType
     */
    public function setNumerTaryfyHs(?string $numerTaryfyHs = null): self
    {
        $this->numerTaryfyHs = $numerTaryfyHs;
        
        return $this;
    }
    /**
     * Get krajPochodzeniaKodAlfa2 value
     * @return string|null
     */
    public function getKrajPochodzeniaKodAlfa2(): ?string
    {
        return $this->krajPochodzeniaKodAlfa2;
    }
    /**
     * Set krajPochodzeniaKodAlfa2 value
     * @param string $krajPochodzeniaKodAlfa2
     * @return \App\ElektronicznyNadawca\StructType\SzczegolyZawartosciPrzesylkiZagranicznejType
     */
    public function setKrajPochodzeniaKodAlfa2(?string $krajPochodzeniaKodAlfa2 = null): self
    {
        $this->krajPochodzeniaKodAlfa2 = $krajPochodzeniaKodAlfa2;
        
        return $this;
    }
}
