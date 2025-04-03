<?php

declare(strict_types=1);

namespace App\ElektronicznyNadawca\StructType;



/**
 * This class stands for pakietType StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class PakietType
{
    /**
     * The kierunek
     * Meta information extracted from the WSDL
     * - documentation: Uwaga w tym miejscu wystarczy jak obiekt kierunke będzie miał ustawioną tylko własność id (nie jest potrzebne przesyłanie pełnego obiektu kierunekType pobranego z metody getKierunki)
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \App\ElektronicznyNadawca\StructType\KierunekType|null
     */
    public ?\App\ElektronicznyNadawca\StructType\KierunekType $kierunek = null;
    /**
     * The opakowanie
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \App\ElektronicznyNadawca\StructType\OpakowanieType[]
     */
    public ?array $opakowanie = null;
    /**
     * The czynnoscUpustowa
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    public ?array $czynnoscUpustowa = null;
    /**
     * The pakietGuid
     * Meta information extracted from the WSDL
     * - base: xsd:string
     * - length: 32
     * - whiteSpace: collapse
     * @var string|null
     */
    public ?string $pakietGuid = null;
    /**
     * The miejsceOdbioru
     * Meta information extracted from the WSDL
     * - default: URZAD_NADANIA
     * - use: optional
     * @var string|null
     */
    public ?string $miejsceOdbioru = null;
    /**
     * The sposobNadania
     * @var string|null
     */
    public ?string $sposobNadania = null;
    /**
     * Constructor method for pakietType
     * @uses PakietType::setKierunek()
     * @uses PakietType::setOpakowanie()
     * @uses PakietType::setCzynnoscUpustowa()
     * @uses PakietType::setPakietGuid()
     * @uses PakietType::setMiejsceOdbioru()
     * @uses PakietType::setSposobNadania()
     * @param \App\ElektronicznyNadawca\StructType\KierunekType $kierunek
     * @param \App\ElektronicznyNadawca\StructType\OpakowanieType[] $opakowanie
     * @param string[] $czynnoscUpustowa
     * @param string $pakietGuid
     * @param string $miejsceOdbioru
     * @param string $sposobNadania
     */
    public function __construct(?\App\ElektronicznyNadawca\StructType\KierunekType $kierunek = null, ?array $opakowanie = null, ?array $czynnoscUpustowa = null, ?string $pakietGuid = null, ?string $miejsceOdbioru = null, ?string $sposobNadania = null)
    {
        $this
            ->setKierunek($kierunek)
            ->setOpakowanie($opakowanie)
            ->setCzynnoscUpustowa($czynnoscUpustowa)
            ->setPakietGuid($pakietGuid)
            ->setMiejsceOdbioru($miejsceOdbioru)
            ->setSposobNadania($sposobNadania);
    }
    /**
     * Get kierunek value
     * @return \App\ElektronicznyNadawca\StructType\KierunekType|null
     */
    public function getKierunek(): ?\App\ElektronicznyNadawca\StructType\KierunekType
    {
        return $this->kierunek;
    }
    /**
     * Set kierunek value
     * @param \App\ElektronicznyNadawca\StructType\KierunekType $kierunek
     * @return \App\ElektronicznyNadawca\StructType\PakietType
     */
    public function setKierunek(?\App\ElektronicznyNadawca\StructType\KierunekType $kierunek = null): self
    {
        $this->kierunek = $kierunek;
        
        return $this;
    }
    /**
     * Get opakowanie value
     * @return \App\ElektronicznyNadawca\StructType\OpakowanieType[]
     */
    public function getOpakowanie(): ?array
    {
        return $this->opakowanie;
    }
    /**
     * Set opakowanie value
     * @param \App\ElektronicznyNadawca\StructType\OpakowanieType[] $opakowanie
     * @return \App\ElektronicznyNadawca\StructType\PakietType
     */
    public function setOpakowanie(?array $opakowanie = null): self
    {
        $this->opakowanie = $opakowanie;
        
        return $this;
    }
    /**
     * Add item to opakowanie value
     * @throws InvalidArgumentException
     * @param \App\ElektronicznyNadawca\StructType\OpakowanieType $item
     * @return \App\ElektronicznyNadawca\StructType\PakietType
     */
    public function addToOpakowanie(\App\ElektronicznyNadawca\StructType\OpakowanieType $item): self
    {
        $this->opakowanie[] = $item;
        
        return $this;
    }
    /**
     * Get czynnoscUpustowa value
     * @return string[]
     */
    public function getCzynnoscUpustowa(): ?array
    {
        return $this->czynnoscUpustowa;
    }
    /**
     * Set czynnoscUpustowa value
     * @param string[] $czynnoscUpustowa
     * @return \App\ElektronicznyNadawca\StructType\PakietType
     */
    public function setCzynnoscUpustowa(?array $czynnoscUpustowa = null): self
    {
        $this->czynnoscUpustowa = $czynnoscUpustowa;
        
        return $this;
    }
    /**
     * Add item to czynnoscUpustowa value
     * @uses \App\ElektronicznyNadawca\EnumType\CzynnoscUpustowaType::valueIsValid()
     * @uses \App\ElektronicznyNadawca\EnumType\CzynnoscUpustowaType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $item
     * @return \App\ElektronicznyNadawca\StructType\PakietType
     */
    public function addToCzynnoscUpustowa(string $item): self
    {
        $this->czynnoscUpustowa[] = $item;
        
        return $this;
    }
    /**
     * Get pakietGuid value
     * @return string|null
     */
    public function getPakietGuid(): ?string
    {
        return $this->pakietGuid;
    }
    /**
     * Set pakietGuid value
     * @param string $pakietGuid
     * @return \App\ElektronicznyNadawca\StructType\PakietType
     */
    public function setPakietGuid(?string $pakietGuid = null): self
    {
        $this->pakietGuid = $pakietGuid;
        
        return $this;
    }
    /**
     * Get miejsceOdbioru value
     * @return string|null
     */
    public function getMiejsceOdbioru(): ?string
    {
        return $this->miejsceOdbioru;
    }
    /**
     * Set miejsceOdbioru value
     * @param string $miejsceOdbioru
     * @return \App\ElektronicznyNadawca\StructType\PakietType
     */
    public function setMiejsceOdbioru(?string $miejsceOdbioru = null): self
    {
        $this->miejsceOdbioru = $miejsceOdbioru;
        
        return $this;
    }
    /**
     * Get sposobNadania value
     * @return string|null
     */
    public function getSposobNadania(): ?string
    {
        return $this->sposobNadania;
    }
    /**
     * Set sposobNadania value
     * @param string $sposobNadania
     * @return \App\ElektronicznyNadawca\StructType\PakietType
     */
    public function setSposobNadania(?string $sposobNadania = null): self
    {
        $this->sposobNadania = $sposobNadania;
        
        return $this;
    }
}
