<?php

namespace App\ElektronicznyNadawca;

class createShopEZwroty
{

    /**
     * @var shopEZwrotyType $shop
     */
    protected $shop = null;

    /**
     * @param shopEZwrotyType $shop
     */
    public function __construct($shop)
    {
      $this->shop = $shop;
    }

    /**
     * @return shopEZwrotyType
     */
    public function getShop()
    {
      return $this->shop;
    }

    /**
     * @param shopEZwrotyType $shop
     * @return \App\ElektronicznyNadawca\createShopEZwroty
     */
    public function setShop($shop)
    {
      $this->shop = $shop;
      return $this;
    }

}
