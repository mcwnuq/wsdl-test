<?php

declare(strict_types=1);

namespace App\ElektronicznyNadawca\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for doreczenieUslugaPocztowaType StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class DoreczenieUslugaPocztowaType extends AbstractStructBase
{
    /**
     * The oczekiwanyTerminDoreczenia
     * @var string|null
     */
    public ?string $oczekiwanyTerminDoreczenia = null;
    /**
     * The oczekiwanaGodzinaDoreczenia
     * @var string|null
     */
    public ?string $oczekiwanaGodzinaDoreczenia = null;
    /**
     * The wSobote
     * @var bool|null
     */
    public ?bool $wSobote = null;
    /**
     * The doRakWlasnych
     * @var bool|null
     */
    public ?bool $doRakWlasnych = null;
    /**
     * Constructor method for doreczenieUslugaPocztowaType
     * @uses DoreczenieUslugaPocztowaType::setOczekiwanyTerminDoreczenia()
     * @uses DoreczenieUslugaPocztowaType::setOczekiwanaGodzinaDoreczenia()
     * @uses DoreczenieUslugaPocztowaType::setWSobote()
     * @uses DoreczenieUslugaPocztowaType::setDoRakWlasnych()
     * @param string $oczekiwanyTerminDoreczenia
     * @param string $oczekiwanaGodzinaDoreczenia
     * @param bool $wSobote
     * @param bool $doRakWlasnych
     */
    public function __construct(?string $oczekiwanyTerminDoreczenia = null, ?string $oczekiwanaGodzinaDoreczenia = null, ?bool $wSobote = null, ?bool $doRakWlasnych = null)
    {
        $this
            ->setOczekiwanyTerminDoreczenia($oczekiwanyTerminDoreczenia)
            ->setOczekiwanaGodzinaDoreczenia($oczekiwanaGodzinaDoreczenia)
            ->setWSobote($wSobote)
            ->setDoRakWlasnych($doRakWlasnych);
    }
    /**
     * Get oczekiwanyTerminDoreczenia value
     * @return string|null
     */
    public function getOczekiwanyTerminDoreczenia(): ?string
    {
        return $this->oczekiwanyTerminDoreczenia;
    }
    /**
     * Set oczekiwanyTerminDoreczenia value
     * @param string $oczekiwanyTerminDoreczenia
     * @return \App\ElektronicznyNadawca\StructType\DoreczenieUslugaPocztowaType
     */
    public function setOczekiwanyTerminDoreczenia(?string $oczekiwanyTerminDoreczenia = null): self
    {
        $this->oczekiwanyTerminDoreczenia = $oczekiwanyTerminDoreczenia;
        
        return $this;
    }
    /**
     * Get oczekiwanaGodzinaDoreczenia value
     * @return string|null
     */
    public function getOczekiwanaGodzinaDoreczenia(): ?string
    {
        return $this->oczekiwanaGodzinaDoreczenia;
    }
    /**
     * Set oczekiwanaGodzinaDoreczenia value
     * @param string $oczekiwanaGodzinaDoreczenia
     * @return \App\ElektronicznyNadawca\StructType\DoreczenieUslugaPocztowaType
     */
    public function setOczekiwanaGodzinaDoreczenia(?string $oczekiwanaGodzinaDoreczenia = null): self
    {
        $this->oczekiwanaGodzinaDoreczenia = $oczekiwanaGodzinaDoreczenia;
        
        return $this;
    }
    /**
     * Get wSobote value
     * @return bool|null
     */
    public function getWSobote(): ?bool
    {
        return $this->wSobote;
    }
    /**
     * Set wSobote value
     * @param bool $wSobote
     * @return \App\ElektronicznyNadawca\StructType\DoreczenieUslugaPocztowaType
     */
    public function setWSobote(?bool $wSobote = null): self
    {
        $this->wSobote = $wSobote;
        
        return $this;
    }
    /**
     * Get doRakWlasnych value
     * @return bool|null
     */
    public function getDoRakWlasnych(): ?bool
    {
        return $this->doRakWlasnych;
    }
    /**
     * Set doRakWlasnych value
     * @param bool $doRakWlasnych
     * @return \App\ElektronicznyNadawca\StructType\DoreczenieUslugaPocztowaType
     */
    public function setDoRakWlasnych(?bool $doRakWlasnych = null): self
    {
        $this->doRakWlasnych = $doRakWlasnych;
        
        return $this;
    }
}
