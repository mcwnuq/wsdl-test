<?php

namespace App\ElektronicznyNadawca;

class getShopEZwrotyListResponse
{

    /**
     * @var shopEZwrotyInfoType $shops
     */
    protected $shops = null;

    /**
     * @param shopEZwrotyInfoType $shops
     */
    public function __construct($shops)
    {
      $this->shops = $shops;
    }

    /**
     * @return shopEZwrotyInfoType
     */
    public function getShops()
    {
      return $this->shops;
    }

    /**
     * @param shopEZwrotyInfoType $shops
     * @return \App\ElektronicznyNadawca\getShopEZwrotyListResponse
     */
    public function setShops($shops)
    {
      $this->shops = $shops;
      return $this;
    }

}
