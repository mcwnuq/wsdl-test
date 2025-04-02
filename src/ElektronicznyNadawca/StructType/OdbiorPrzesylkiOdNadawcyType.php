<?php

declare(strict_types=1);

namespace App\ElektronicznyNadawca\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for odbiorPrzesylkiOdNadawcyType StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class OdbiorPrzesylkiOdNadawcyType extends AbstractStructBase
{
    /**
     * The wSobote
     * @var bool|null
     */
    public ?bool $wSobote = null;
    /**
     * The wNiedzieleLubSwieto
     * @var bool|null
     */
    public ?bool $wNiedzieleLubSwieto = null;
    /**
     * The wGodzinachOd20Do7
     * @var bool|null
     */
    public ?bool $wGodzinachOd20Do7 = null;
    /**
     * Constructor method for odbiorPrzesylkiOdNadawcyType
     * @uses OdbiorPrzesylkiOdNadawcyType::setWSobote()
     * @uses OdbiorPrzesylkiOdNadawcyType::setWNiedzieleLubSwieto()
     * @uses OdbiorPrzesylkiOdNadawcyType::setWGodzinachOd20Do7()
     * @param bool $wSobote
     * @param bool $wNiedzieleLubSwieto
     * @param bool $wGodzinachOd20Do7
     */
    public function __construct(?bool $wSobote = null, ?bool $wNiedzieleLubSwieto = null, ?bool $wGodzinachOd20Do7 = null)
    {
        $this
            ->setWSobote($wSobote)
            ->setWNiedzieleLubSwieto($wNiedzieleLubSwieto)
            ->setWGodzinachOd20Do7($wGodzinachOd20Do7);
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
     * @return \App\ElektronicznyNadawca\StructType\OdbiorPrzesylkiOdNadawcyType
     */
    public function setWSobote(?bool $wSobote = null): self
    {
        $this->wSobote = $wSobote;
        
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
     * @return \App\ElektronicznyNadawca\StructType\OdbiorPrzesylkiOdNadawcyType
     */
    public function setWNiedzieleLubSwieto(?bool $wNiedzieleLubSwieto = null): self
    {
        $this->wNiedzieleLubSwieto = $wNiedzieleLubSwieto;
        
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
     * @return \App\ElektronicznyNadawca\StructType\OdbiorPrzesylkiOdNadawcyType
     */
    public function setWGodzinachOd20Do7(?bool $wGodzinachOd20Do7 = null): self
    {
        $this->wGodzinachOd20Do7 = $wGodzinachOd20Do7;
        
        return $this;
    }
}
