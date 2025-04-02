<?php

namespace App\ElektronicznyNadawca;

class zwrotDokumentowBiznesowaType
{

    /**
     * @var terminZwrotDokumentowBiznesowaType $rodzaj
     */
    protected $rodzaj = null;

    /**
     * @var int $idDokumentyZwrotneAdresy
     */
    protected $idDokumentyZwrotneAdresy = null;

    /**
     * @param terminZwrotDokumentowBiznesowaType $rodzaj
     */
    public function __construct($rodzaj)
    {
      $this->rodzaj = $rodzaj;
    }

    /**
     * @return terminZwrotDokumentowBiznesowaType
     */
    public function getRodzaj()
    {
      return $this->rodzaj;
    }

    /**
     * @param terminZwrotDokumentowBiznesowaType $rodzaj
     * @return \App\ElektronicznyNadawca\zwrotDokumentowBiznesowaType
     */
    public function setRodzaj($rodzaj)
    {
      $this->rodzaj = $rodzaj;
      return $this;
    }

    /**
     * @return int
     */
    public function getIdDokumentyZwrotneAdresy()
    {
      return $this->idDokumentyZwrotneAdresy;
    }

    /**
     * @param int $idDokumentyZwrotneAdresy
     * @return \App\ElektronicznyNadawca\zwrotDokumentowBiznesowaType
     */
    public function setIdDokumentyZwrotneAdresy($idDokumentyZwrotneAdresy)
    {
      $this->idDokumentyZwrotneAdresy = $idDokumentyZwrotneAdresy;
      return $this;
    }

}
