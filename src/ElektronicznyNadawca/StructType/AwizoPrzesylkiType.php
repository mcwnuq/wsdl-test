<?php

declare(strict_types=1);

namespace App\ElektronicznyNadawca\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for awizoPrzesylkiType StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class AwizoPrzesylkiType extends AbstractStructBase
{
    /**
     * The dataPierwszegoAwizowania
     * @var string|null
     */
    public ?string $dataPierwszegoAwizowania = null;
    /**
     * The dataDrugiegoAwizowania
     * @var string|null
     */
    public ?string $dataDrugiegoAwizowania = null;
    /**
     * The miejscePozostawienia
     * @var string|null
     */
    public ?string $miejscePozostawienia = null;
    /**
     * The idPlacowkaPocztowaWydajaca
     * @var int|null
     */
    public ?int $idPlacowkaPocztowaWydajaca = null;
    /**
     * Constructor method for awizoPrzesylkiType
     * @uses AwizoPrzesylkiType::setDataPierwszegoAwizowania()
     * @uses AwizoPrzesylkiType::setDataDrugiegoAwizowania()
     * @uses AwizoPrzesylkiType::setMiejscePozostawienia()
     * @uses AwizoPrzesylkiType::setIdPlacowkaPocztowaWydajaca()
     * @param string $dataPierwszegoAwizowania
     * @param string $dataDrugiegoAwizowania
     * @param string $miejscePozostawienia
     * @param int $idPlacowkaPocztowaWydajaca
     */
    public function __construct(?string $dataPierwszegoAwizowania = null, ?string $dataDrugiegoAwizowania = null, ?string $miejscePozostawienia = null, ?int $idPlacowkaPocztowaWydajaca = null)
    {
        $this
            ->setDataPierwszegoAwizowania($dataPierwszegoAwizowania)
            ->setDataDrugiegoAwizowania($dataDrugiegoAwizowania)
            ->setMiejscePozostawienia($miejscePozostawienia)
            ->setIdPlacowkaPocztowaWydajaca($idPlacowkaPocztowaWydajaca);
    }
    /**
     * Get dataPierwszegoAwizowania value
     * @return string|null
     */
    public function getDataPierwszegoAwizowania(): ?string
    {
        return $this->dataPierwszegoAwizowania;
    }
    /**
     * Set dataPierwszegoAwizowania value
     * @param string $dataPierwszegoAwizowania
     * @return \App\ElektronicznyNadawca\StructType\AwizoPrzesylkiType
     */
    public function setDataPierwszegoAwizowania(?string $dataPierwszegoAwizowania = null): self
    {
        $this->dataPierwszegoAwizowania = $dataPierwszegoAwizowania;
        
        return $this;
    }
    /**
     * Get dataDrugiegoAwizowania value
     * @return string|null
     */
    public function getDataDrugiegoAwizowania(): ?string
    {
        return $this->dataDrugiegoAwizowania;
    }
    /**
     * Set dataDrugiegoAwizowania value
     * @param string $dataDrugiegoAwizowania
     * @return \App\ElektronicznyNadawca\StructType\AwizoPrzesylkiType
     */
    public function setDataDrugiegoAwizowania(?string $dataDrugiegoAwizowania = null): self
    {
        $this->dataDrugiegoAwizowania = $dataDrugiegoAwizowania;
        
        return $this;
    }
    /**
     * Get miejscePozostawienia value
     * @return string|null
     */
    public function getMiejscePozostawienia(): ?string
    {
        return $this->miejscePozostawienia;
    }
    /**
     * Set miejscePozostawienia value
     * @param string $miejscePozostawienia
     * @return \App\ElektronicznyNadawca\StructType\AwizoPrzesylkiType
     */
    public function setMiejscePozostawienia(?string $miejscePozostawienia = null): self
    {
        $this->miejscePozostawienia = $miejscePozostawienia;
        
        return $this;
    }
    /**
     * Get idPlacowkaPocztowaWydajaca value
     * @return int|null
     */
    public function getIdPlacowkaPocztowaWydajaca(): ?int
    {
        return $this->idPlacowkaPocztowaWydajaca;
    }
    /**
     * Set idPlacowkaPocztowaWydajaca value
     * @param int $idPlacowkaPocztowaWydajaca
     * @return \App\ElektronicznyNadawca\StructType\AwizoPrzesylkiType
     */
    public function setIdPlacowkaPocztowaWydajaca(?int $idPlacowkaPocztowaWydajaca = null): self
    {
        $this->idPlacowkaPocztowaWydajaca = $idPlacowkaPocztowaWydajaca;
        
        return $this;
    }
}
