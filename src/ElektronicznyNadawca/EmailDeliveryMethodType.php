<?php

namespace App\ElektronicznyNadawca;

class EmailDeliveryMethodType extends DeliveryMethodType
{

    /**
     * @var emailType $email
     */
    protected $email = null;

    /**
     * @param emailType $email
     */
    public function __construct($email)
    {
      $this->email = $email;
    }

    /**
     * @return emailType
     */
    public function getEmail()
    {
      return $this->email;
    }

    /**
     * @param emailType $email
     * @return \App\ElektronicznyNadawca\EmailDeliveryMethodType
     */
    public function setEmail($email)
    {
      $this->email = $email;
      return $this;
    }

}
