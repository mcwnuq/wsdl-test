<?php

namespace App\ElektronicznyNadawca;

class potwierdzenieEDoreczeniaType
{

    /**
     * @var eSposobPowiadomieniaType $sposob
     */
    protected $sposob = null;

    /**
     * @var eKontaktType $kontakt
     */
    protected $kontakt = null;

    /**
     * @param eSposobPowiadomieniaType $sposob
     * @param eKontaktType $kontakt
     */
    public function __construct($sposob, $kontakt)
    {
      $this->sposob = $sposob;
      $this->kontakt = $kontakt;
    }

    /**
     * @return eSposobPowiadomieniaType
     */
    public function getSposob()
    {
      return $this->sposob;
    }

    /**
     * @param eSposobPowiadomieniaType $sposob
     * @return \App\ElektronicznyNadawca\potwierdzenieEDoreczeniaType
     */
    public function setSposob($sposob)
    {
      $this->sposob = $sposob;
      return $this;
    }

    /**
     * @return eKontaktType
     */
    public function getKontakt()
    {
      return $this->kontakt;
    }

    /**
     * @param eKontaktType $kontakt
     * @return \App\ElektronicznyNadawca\potwierdzenieEDoreczeniaType
     */
    public function setKontakt($kontakt)
    {
      $this->kontakt = $kontakt;
      return $this;
    }

}
