<?php

namespace App\ElektronicznyNadawca;

class shopEZwrotyInfoType
{

    /**
     * @var int $idShop
     */
    protected $idShop = null;

    /**
     * @var nazwaEZwrotyType $przyjaznaNazwa
     */
    protected $przyjaznaNazwa = null;

    /**
     * @var boolean $availableOnWebsite
     */
    protected $availableOnWebsite = null;

    /**
     * @var string $nip
     */
    protected $nip = null;

    /**
     * @param int $idShop
     * @param nazwaEZwrotyType $przyjaznaNazwa
     * @param boolean $availableOnWebsite
     * @param string $nip
     */
    public function __construct($idShop, $przyjaznaNazwa, $availableOnWebsite, $nip)
    {
      $this->idShop = $idShop;
      $this->przyjaznaNazwa = $przyjaznaNazwa;
      $this->availableOnWebsite = $availableOnWebsite;
      $this->nip = $nip;
    }

    /**
     * @return int
     */
    public function getIdShop()
    {
      return $this->idShop;
    }

    /**
     * @param int $idShop
     * @return \App\ElektronicznyNadawca\shopEZwrotyInfoType
     */
    public function setIdShop($idShop)
    {
      $this->idShop = $idShop;
      return $this;
    }

    /**
     * @return nazwaEZwrotyType
     */
    public function getPrzyjaznaNazwa()
    {
      return $this->przyjaznaNazwa;
    }

    /**
     * @param nazwaEZwrotyType $przyjaznaNazwa
     * @return \App\ElektronicznyNadawca\shopEZwrotyInfoType
     */
    public function setPrzyjaznaNazwa($przyjaznaNazwa)
    {
      $this->przyjaznaNazwa = $przyjaznaNazwa;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getAvailableOnWebsite()
    {
      return $this->availableOnWebsite;
    }

    /**
     * @param boolean $availableOnWebsite
     * @return \App\ElektronicznyNadawca\shopEZwrotyInfoType
     */
    public function setAvailableOnWebsite($availableOnWebsite)
    {
      $this->availableOnWebsite = $availableOnWebsite;
      return $this;
    }

    /**
     * @return string
     */
    public function getNip()
    {
      return $this->nip;
    }

    /**
     * @param string $nip
     * @return \App\ElektronicznyNadawca\shopEZwrotyInfoType
     */
    public function setNip($nip)
    {
      $this->nip = $nip;
      return $this;
    }

}
