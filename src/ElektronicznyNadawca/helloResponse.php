<?php

namespace App\ElektronicznyNadawca;

class helloResponse
{

    /**
     * @var string $out
     */
    protected $out = null;

    /**
     * @param string $out
     */
    public function __construct($out)
    {
      $this->out = $out;
    }

    /**
     * @return string
     */
    public function getOut()
    {
      return $this->out;
    }

    /**
     * @param string $out
     * @return \App\ElektronicznyNadawca\helloResponse
     */
    public function setOut($out)
    {
      $this->out = $out;
      return $this;
    }

}
