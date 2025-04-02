<?php

declare(strict_types=1);

namespace App\ElektronicznyNadawca\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for doreczenieUslugaKurierskaType StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class DoreczenieUslugaKurierskaType extends AbstractStructBase
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
     * The w90Minut
     * @var bool|null
     */
    public ?bool $w90Minut = null;
    /**
     * The wNiedzieleLubSwieto
     * @var bool|null
     */
    public ?bool $wNiedzieleLubSwieto = null;
    /**
     * The doRakWlasnych
     * @var bool|null
     */
    public ?bool $doRakWlasnych = null;
    /**
     * The wGodzinachOd20Do7
     * @var bool|null
     */
    public ?bool $wGodzinachOd20Do7 = null;
    /**
     * The po17
     * @var bool|null
     */
    public ?bool $po17 = null;
    /**
     * Constructor method for doreczenieUslugaKurierskaType
     * @uses DoreczenieUslugaKurierskaType::setOczekiwanyTerminDoreczenia()
     * @uses DoreczenieUslugaKurierskaType::setOczekiwanaGodzinaDoreczenia()
     * @uses DoreczenieUslugaKurierskaType::setWSobote()
     * @uses DoreczenieUslugaKurierskaType::setW90Minut()
     * @uses DoreczenieUslugaKurierskaType::setWNiedzieleLubSwieto()
     * @uses DoreczenieUslugaKurierskaType::setDoRakWlasnych()
     * @uses DoreczenieUslugaKurierskaType::setWGodzinachOd20Do7()
     * @uses DoreczenieUslugaKurierskaType::setPo17()
     * @param string $oczekiwanyTerminDoreczenia
     * @param string $oczekiwanaGodzinaDoreczenia
     * @param bool $wSobote
     * @param bool $w90Minut
     * @param bool $wNiedzieleLubSwieto
     * @param bool $doRakWlasnych
     * @param bool $wGodzinachOd20Do7
     * @param bool $po17
     */
    public function __construct(?string $oczekiwanyTerminDoreczenia = null, ?string $oczekiwanaGodzinaDoreczenia = null, ?bool $wSobote = null, ?bool $w90Minut = null, ?bool $wNiedzieleLubSwieto = null, ?bool $doRakWlasnych = null, ?bool $wGodzinachOd20Do7 = null, ?bool $po17 = null)
    {
        $this
            ->setOczekiwanyTerminDoreczenia($oczekiwanyTerminDoreczenia)
            ->setOczekiwanaGodzinaDoreczenia($oczekiwanaGodzinaDoreczenia)
            ->setWSobote($wSobote)
            ->setW90Minut($w90Minut)
            ->setWNiedzieleLubSwieto($wNiedzieleLubSwieto)
            ->setDoRakWlasnych($doRakWlasnych)
            ->setWGodzinachOd20Do7($wGodzinachOd20Do7)
            ->setPo17($po17);
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
     * @return \App\ElektronicznyNadawca\StructType\DoreczenieUslugaKurierskaType
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
     * @return \App\ElektronicznyNadawca\StructType\DoreczenieUslugaKurierskaType
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
     * @return \App\ElektronicznyNadawca\StructType\DoreczenieUslugaKurierskaType
     */
    public function setWSobote(?bool $wSobote = null): self
    {
        $this->wSobote = $wSobote;
        
        return $this;
    }
    /**
     * Get w90Minut value
     * @return bool|null
     */
    public function getW90Minut(): ?bool
    {
        return $this->w90Minut;
    }
    /**
     * Set w90Minut value
     * @param bool $w90Minut
     * @return \App\ElektronicznyNadawca\StructType\DoreczenieUslugaKurierskaType
     */
    public function setW90Minut(?bool $w90Minut = null): self
    {
        $this->w90Minut = $w90Minut;
        
        return $this;
    }
    /**
     * Get wNiedzieleLubSwieto value
     * @return bool|null
     */
    public function getWNiedzieleLubSwieto(): ?bool
    {
        return $this->wNiedzieleLubSwieto;
    }
    /**
     * Set wNiedzieleLubSwieto value
     * @param bool $wNiedzieleLubSwieto
     * @return \App\ElektronicznyNadawca\StructType\DoreczenieUslugaKurierskaType
     */
    public function setWNiedzieleLubSwieto(?bool $wNiedzieleLubSwieto = null): self
    {
        $this->wNiedzieleLubSwieto = $wNiedzieleLubSwieto;
        
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
     * @return \App\ElektronicznyNadawca\StructType\DoreczenieUslugaKurierskaType
     */
    public function setDoRakWlasnych(?bool $doRakWlasnych = null): self
    {
        $this->doRakWlasnych = $doRakWlasnych;
        
        return $this;
    }
    /**
     * Get wGodzinachOd20Do7 value
     * @return bool|null
     */
    public function getWGodzinachOd20Do7(): ?bool
    {
        return $this->wGodzinachOd20Do7;
    }
    /**
     * Set wGodzinachOd20Do7 value
     * @param bool $wGodzinachOd20Do7
     * @return \App\ElektronicznyNadawca\StructType\DoreczenieUslugaKurierskaType
     */
    public function setWGodzinachOd20Do7(?bool $wGodzinachOd20Do7 = null): self
    {
        $this->wGodzinachOd20Do7 = $wGodzinachOd20Do7;
        
        return $this;
    }
    /**
     * Get po17 value
     * @return bool|null
     */
    public function getPo17(): ?bool
    {
        return $this->po17;
    }
    /**
     * Set po17 value
     * @param bool $po17
     * @return \App\ElektronicznyNadawca\StructType\DoreczenieUslugaKurierskaType
     */
    public function setPo17(?bool $po17 = null): self
    {
        $this->po17 = $po17;
        
        return $this;
    }
}
