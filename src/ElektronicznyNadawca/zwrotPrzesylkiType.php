<?php

namespace App\ElektronicznyNadawca;

class zwrotPrzesylkiType
{

    /**
     * @var przyczynaZwrotuEnum $przyczyna
     */
    protected $przyczyna = null;

    /**
     * @var \DateTime $data
     */
    protected $data = null;

    /**
     * @var przyczynaZwrotuDodatkowaType $przyczynaZwrotuDodatkowa
     */
    protected $przyczynaZwrotuDodatkowa = null;

    /**
     * @param przyczynaZwrotuEnum $przyczyna
     * @param \DateTime $data
     * @param przyczynaZwrotuDodatkowaType $przyczynaZwrotuDodatkowa
     */
    public function __construct($przyczyna, \DateTime $data, $przyczynaZwrotuDodatkowa)
    {
      $this->przyczyna = $przyczyna;
      $this->data = $data->format(\DateTime::ATOM);
      $this->przyczynaZwrotuDodatkowa = $przyczynaZwrotuDodatkowa;
    }

    /**
     * @return przyczynaZwrotuEnum
     */
    public function getPrzyczyna()
    {
      return $this->przyczyna;
    }

    /**
     * @param przyczynaZwrotuEnum $przyczyna
     * @return \App\ElektronicznyNadawca\zwrotPrzesylkiType
     */
    public function setPrzyczyna($przyczyna)
    {
      $this->przyczyna = $przyczyna;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getData()
    {
      if ($this->data == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->data);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $data
     * @return \App\ElektronicznyNadawca\zwrotPrzesylkiType
     */
    public function setData(\DateTime $data)
    {
      $this->data = $data->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return przyczynaZwrotuDodatkowaType
     */
    public function getPrzyczynaZwrotuDodatkowa()
    {
      return $this->przyczynaZwrotuDodatkowa;
    }

    /**
     * @param przyczynaZwrotuDodatkowaType $przyczynaZwrotuDodatkowa
     * @return \App\ElektronicznyNadawca\zwrotPrzesylkiType
     */
    public function setPrzyczynaZwrotuDodatkowa($przyczynaZwrotuDodatkowa)
    {
      $this->przyczynaZwrotuDodatkowa = $przyczynaZwrotuDodatkowa;
      return $this;
    }

}
