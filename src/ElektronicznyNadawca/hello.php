<?php

namespace App\ElektronicznyNadawca;

class hello
{

    /**
     * @var string $in
     */
    protected $in = null;

    /**
     * @param string $in
     */
    public function __construct($in)
    {
      $this->in = $in;
    }

    /**
     * @return string
     */
    public function getIn()
    {
      return $this->in;
    }

    /**
     * @param string $in
     * @return \App\ElektronicznyNadawca\hello
     */
    public function setIn($in)
    {
      $this->in = $in;
      return $this;
    }

}
